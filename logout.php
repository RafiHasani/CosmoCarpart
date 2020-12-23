<?php

session_start();

unset($_SESSION["uname"]);
unset($_SESSION["Email"]);
unset($_SESSION["userpass"]);

$BackToMyPage = $_SERVER["HTTP_REFERER"];
if(isset($BackToMyPage))
 {
    header('Location: '.$BackToMyPage);
} else 
{
    header('Location: Home.php'); // default page
}
   

?>
