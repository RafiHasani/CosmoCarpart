<?php
require_once "database.php";
$pdo=database::connect();  

if(isset($_POST["addpart"]))
{ 
    if(isset($_POST["product_name"]))
    {
    $name=$_POST["product_name"];
    }
    $imgget=$_FILES["image"]["tmp_name"];
    $file=file_get_contents($imgget);
    $img = addslashes($file);
    $desc=$_POST["details"];
    $price=$_POST["product_price"];
    $model=$_POST["product_model"];
    $brand=$_POST["product_brand"];

    $str="INSERT INTO part (Item_serial,Item_name,Item_Model,Item_price,img,Item_Brand,Description)
    values(null,'$name','$model','$price','$img','$brand','$desc')";
    $stat=$pdo->prepare($str);
    if($stat->execute())
    {
    echo '1 record added';
    }
    
}

elseif (isset($_POST["register"]))
{
    {
        $fname=$_POST["first_name"];
        $lname=$_POST["last_name"];
        $mail=$_POST["email"];
        $upass=$_POST["password"];
        $mobile=$_POST["phone"];
        $city=$_POST["city"];
        $add=$_POST["country"];

    $str="INSERT INTO users (Email,password,F_name,L_name,phone,city,address)
    values('$mail','$upass','$fname','$lname','$mobile','$city','$add')";
    $stat=$pdo->prepare($str); 

   if($stat->execute())
   {
    session_start();
    $_SESSION["Email"]=$email;
    $_SESSION["userpass"]=$upass;
    $_SESSION["uname"]=$fname;
    header("location:Home.php"); 
   }
   else{
       echo $msg="error in inserting data!";
   }
    }
}

elseif (isset($_POST["login"]))
{
    global $msg;
    $mail=$_POST["email"];
    $pass=$_POST["password"];
    if(isset($_POST["check"]) && ($_POST["check"]==true))
    {
        $sql = "SELECT Email,password,F_name
        FROM Admin
        WHERE Email ='$mail'
        AND password='$pass'
        LIMIT 1";
    $stat=$pdo->prepare($sql);
    if($stat->execute())
    {
    $rs= $stat->fetch(PDO::FETCH_ASSOC);
    if($rs!=null)
      {
        if($rs["Email"]==$mail && $rs["password"]==$pass);
        {
            
            session_start();
            $_SESSION["Email"]=$mail;
            $_SESSION["userpass"]=$pass;
            $_SESSION["uname"]= $rs["F_name"];
            header("location:admin.php");}
         
        }
       }
    }

   elseif(!isset($_POST["check"]))
    {
    $sql = "SELECT Email,password,F_name
        FROM users
        WHERE Email ='$mail'
        AND password='$pass'
        LIMIT 1";
    $stat=$pdo->prepare($sql);
    if($stat->execute())
    {
    $rs= $stat->fetch(PDO::FETCH_ASSOC);
    if($rs!=null)
      {
        if($rs["Email"]==$mail && $rs["password"]==$pass);
        {
            $msg = "Login Successfully!";
            session_start();
            $_SESSION["Email"]=$mail;
            $_SESSION["userpass"]=$pass;
            $_SESSION["uname"]= $rs["F_name"];
            if(empty($_SESSION["shopcart"]))
            {
                header("location:Home.php");
            }
            else if(!empty($_SESSION["shopcart"]))
            {
                header("location:checkout.php");
            }
            
        }
       }
     
    }
}
}

else if (isset($_POST["order"]))
{
    
        $pname=$_POST["product_name"];
        $imgget=$_FILES["product_img"]["tmp_name"];
        $file=file_get_contents($imgget);
        $img = addslashes($file);
        $detail=$_POST["details"];
        $price=$_POST["product_price"];
        $model=$_POST["product_model"];
        $pbrand=$_POST["product_brand"];
        $mail=$_POST["email"];
        $mob=$_POST["phone"];


    $str="INSERT INTO order_list (order_id,product_name,Image,description,afford_price,product_model,product_brand,email,phone)
    values(null,'$pname','$img','$detail','$price','$model','$pbrand','$mail','$mob')";
      $stat=$pdo->prepare($str);
      if($stat->execute())
      {
      echo '1 record added';
      session_start();
      $_SESSION["order_list"] ="Your Order is placed,please check your Email!";
      header("Location:Home.php?");
      }
  
}

else if (isset($_POST["orderr"]))
{
    $id=$_GET["id"];
    $mobile=$_POST["phone"];
    $em=$_POST["mail"];
    $pn=$_POST["pname"];

$to = $em;
$subject = 'Order Confirmation';
$from = 'rtechs2016@gmail.com';
 
// To send HTML mail, the Content-type header must be set
$headers  = 'MIME-Version: 1.0' . "\r\n";
$headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";
 
// Create email headers
$headers .= 'From: '.$from."\r\n".
    'Reply-To: '.$to."\r\n" .
    'X-Mailer: PHP/' . phpversion();
 
// Compose a simple HTML email message
$message = '<html><body>';
$message .= '<h1 style="color:#f40;">Your order is placed successfully!</h1>';
$message .= '<p style="color:#080;font-size:18px;">Will you marry me?</p>';
$message .= '</body></html>';
 
// Sending email
if(mail($to, $subject, $message, $headers)){
    echo 'Your mail has been sent successfully.';
} else{
    echo 'Unable to send email. Please try again.';
}

}


else if(isset($_POST["checkout"]))
{
    $fname=$_POST["firstname"];
    $m=$_POST["email"];
    $city=$_POST["city"];
    $cname=$_POST["cardname"];
    $cnumber=$_POST["cardNumber"];
    $expdat=$_POST["expdate"];
    $pnumber=$_POST["phoneNumber"];
    $q=$_POST["qty"];
    $t=$_POST["total"];
    
    $str="INSERT INTO saleorder (order_id,name,u_id,qty,total,nameoncard,cardnumber,exp_date,phone)
    values(null,'$fname','$m','$q','$t','$cname','$cnumber','$expdat','$pnumber')";
    $stat=$pdo->prepare($str); 
   if($stat->execute())
   {
    session_start();
    $_SESSION["msg"] ="Your Order is placed. you will receive confimation message soon!";
    header("location:Home.php"); 

   }
}





if(isset($_POST["send"]))
{
    $id=$_GET["id"];
    $mobile=$_POST["phone"];
    $total=$_POST["total"];
    $uname=$_POST["user"];
    
$username = "923339173834";///Your Username
$password = "warufi10";///Your Password
$sender = "Cosmo Part";
$message = "Your Order is confirmed";
////sending sms

$post = "sender=".urlencode($sender)."&mobile=".urlencode($mobile)."&message=".urlencode($message)."";
$url = "https://sendpk.com/api/sms.php?username=$username&password=$password";
$ch = curl_init();
$timeout = 30; // set to zero for no timeout
curl_setopt($ch, CURLOPT_USERAGENT, 'Mozilla/4.0 (compatible; MSIE 6.0; Windows NT 5.1; SV1)');
curl_setopt($ch, CURLOPT_URL,$url);
curl_setopt($ch, CURLOPT_POST, 1);
curl_setopt($ch, CURLOPT_POSTFIELDS,$post);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt ($ch, CURLOPT_CONNECTTIMEOUT, $timeout);
$result = curl_exec($ch); 
/*Print Responce*/
echo $result; 
}

?>