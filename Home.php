<?php
 session_start(); 


if(isset($_POST["add_to_cart"]))
{
  if(isset($_SESSION["shopcart"]))
  {
    $item_array_id=array_column($_SESSION["shopcart"],"item_id");
    if(!in_array($_GET["id"],$item_array_id))
    {
      $count=count($_SESSION["shopcart"]);
      $item_array=array
      (
      'item_id'=>$_GET["id"],
        'item_name'=>$_POST["it_name"],
        'item_price'=>$_POST["it_price"],
        'item_qty'=>$_POST["qty"]
      );
      $_SESSION["shopcart"][$count]=$item_array;
    }
  }
  else if(!isset($_SESSION["shopcart"]))
  {
    $item_array=array
    (
      'item_id'=>$_GET["id"],
      'item_name'=>$_POST["it_name"],
      'item_price'=>$_POST["it_price"],
      'item_qty'=>$_POST["qty"]
    );
    $_SESSION["shopcart"][0]=$item_array;
  }
}
?>

<!doctype html>
<html lang="en">
  <head>
    <title>Title</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <script src="jquery-3.4.1.js"></script>
    <script src="jsq.js"></script>
    <script type="text/javascript" src="bower_components/jquery/dist/jquery.min.js" ></script>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="indexstyle.css">
  </head>
  <body>
        <header>
                <section class="container-fluid p-md-5 align-items-md-center">
                        <div class="row">
                                    <div class="col-md-4 list-unstyled">
                                        <li><img src="webP/logo.png" alt="Logo" class="mx-auto d-block"></li>
                                    </div>

                                <div class="col-md-4">
                                 <h1 class="display-5  text-md-center align-content-center">Cosmo Car Parts</h1>
                                </div>
                                
                                <div class="col-md-4 " id="upleft">
                                <ul>
                                <div class="container">
                                               <button id="cartclick" class="btn btn-outline-primary">
                                                 <img src="Webp/icon-cart.png" alt="icon-cart" style="height: 30px;" class="cart_i"></button> 
                                                 <div id="cart_show">
                                                 <table>
                                                          <tr>
                                                            <td class=" w-25">ItemName</td>
                                                            <td class=" w-25">Quantity</td>
                                                            <td class=" w-25">Price</td>
                                                            <td class=" w-25">Total</td>
                                                          </tr>
                                                          <?php
                                                          if(!empty($_SESSION["shopcart"]))
                                                          {
                                                          $total=0;
                                                          foreach($_SESSION["shopcart"] as $key=> $value)
                                                          {
                                                          ?>
                                                          <tr>
                                                            <td class="w-25" > <?php echo $value["item_name"];?></td>
                                                            <td class="w-25"> <?php echo $value["item_qty"];?></td>
                                                            <td class="w-25"> <?php echo $value["item_price"];?></td>
                                                            <td class="w-25">  <?php echo $value["item_qty"] *$value["item_price"];
                                                          
                                                            ?>
                                                            </td>
                                                         </tr>
                                                         <br />
                                                          <?php 
                                                          
                                                          $total=$total+($value["item_qty"] *$value["item_price"]);
                                                          }
                                                          ?>
                                                          <tr>
                                                            <td>Total</td>
                                                            <td>
                                                              <?php 
                                                              echo number_format($total,2);
                                                              }
                                                              else{
                                                                $total=0;
                                                                echo number_format($total,2);
                                                              }
                                                              ?>
                                                            </td>
                                                            <td><a href="checkout.php"><button class="btn btn-success m-1" >Check Out</button></a></td>
                                                          </tr>
                                                        
                                                  </div>
                                                  </table>
                                                  </div>
                                                  </div>
                                   <?php 
                                               
                                              if(isset($_SESSION["Email"]) && isset($_SESSION["userpass"]))
                                              {?>
                                               <p class="username">Welcome [<?php echo $_SESSION["uname"];?> ] </p>
                                                <li><a href="logout.php";><b>Logout</b></a></li>
                                                <?php 
                                              }
                                              else 
                                              {
                                                ?>
                                                <li><a href="Login.php";><b>Login</b></a></li>
                                                <li> <a href="register.php"> <b>Register</b></a></li>
                                                <?php 
                                              }
                                              ?>
                                         
                                </ul>
                                </div>
                        </div>
                </section>

                <h2>HOME</h2>
               
                <nav class="navbar navbar-expand-md">
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
                      <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="collapsibleNavbar">
                      <ul class="navbar-nav">
                        <li class="nav-item">
                            <a class="nav-link "href="Home.php">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link "href="OrderPart.php">Car Part Order</a>
                        </li>
                            
                        <li class="nav-item">
                            <a class="nav-link" href="Aboutus.html">About Us</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="Contactus.html">Contact Us</a></a>
                        </li>
                      </ul>
                    </div>  
                      <div class="search-container">
                        <form class="form-inline" action="/action_page.php">
                          <input class="form-control mr-sm-2" type="text" placeholder="Search">
                          <button class="btn btn-success" type="submit">Search</button>
                        </form>
                      </div>
               </nav>
     </header>    

     <div class="container">
     <div class="row row-lg-6 ">
     
                      <?php
              require_once "sparePart.php";
              $p=new Part();
              $temp=array();
              $temp=$p->showpro();
              foreach($temp as $obj)
              {
                ?>
                <div class="contanier">
                <div class="row row-lg-12 ">
                <div class="col-md-3 , col-lg-3 , col-sm-3 , col-xm-3 ">
                 <form method="post" action="Home.php?action=add&id=<?php echo $obj->getp_id("Item_serial")?>">
             
                 <div class="product">
          <img src=<?php echo' "data:;base64,'. base64_encode( $obj->getp_img("img") ) .'"';?> class="proimg">
          <div class="product_box">
                <p name="prodata" class="pdata h6">
            <tr>       
              <td>ProductName : </td><td><?php echo $obj->getp_name("Item_name") ?></td><br />
              <td>Model : </td><td><?php echo $obj->getp_model("Item_Model")?></td><br />
              <td>Price : </td><td></td><?php echo $obj->getp_price("Item_price")?><br />
              <input type="hidden"  name="it_id" value="<?php $obj->getp_id("Item_serial")?>">
              <input type="hidden" name="it_price" value="<?php echo $obj->getp_price("Item_price")?>">
              <input type="hidden" name="it_name" value="<?php echo $obj->getp_name("Item_name")?>">
          </tr>
          </p>
                </div>
       
              <input type="number" placeholder="Qty" name="qty" value="1" class="form-control">
              <input type="submit" name="add_to_cart" value="add to cart" class="btn btn-success m-1" >
              </div>
             
            </form>
                </div>
                </div>
            </div> 
        <?php
                        }
          ?>      
            
          
     </div>
     </div>
     <?php 
     if(isset($_SESSION["msg"]))
     {
      echo "<script type='text/javascript'>alert('Your Order is placed. you will receive confimation message soon!')</script>";
      $_SESSION["msg"]=null;
      session_destroy("shopcart"); 
      }
     
     if(isset($_SESSION["order_list"]))
     {
      echo "<script type='text/javascript'>alert('Your Order is placed successfully check your Email from confirmation!')</script>";
      session_destroy("order_list");
     }   
    ?>
            <footer > 
                <p>
                   <strong>Cosmo Car Part</strong> 
                   <br /> 
                    kabul; Afghanistan
                    <br /> 
                    Jada e Nadir Pasthoon Seddiq Uamar Market Shop #007
                    <br /> 
                    Phone:0786 0x0x0x
                    <br /> 
                    E-mail:Cosmocarpart@gmail.com
                </p>
            </footer>

        
      
    <script src="js/bootstrap.min.js" type="text/javascript"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="js/bootstrap.min.js" type="text/javascript"></script>
  
  </body>
</html>