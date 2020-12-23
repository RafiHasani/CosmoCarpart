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
                                <ul class="float-sm-right">
                                <div class="container">
                                   <?php 
                                               
                                              if(isset($_SESSION["Email"]))
                                              {
                                                  ?>
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

     <?php 
require_once "database.php";
$pdo=database::connect();  
session_start();

 if(isset($_SESSION["Email"]))
 {
    $user=$_SESSION["Email"];
    $sql = "SELECT *
        FROM users
        WHERE Email ='$user'
        LIMIT 1";
    $stat=$pdo->prepare($sql);
    if($stat->execute())
    {
    $row= $stat->fetch(PDO::FETCH_ASSOC);
    if($row!=null)
      {
          ?>
     <div class="container">
				<form id="checkout_form" action="storedata.php" method="POST" class="was-validated">
					<div class="col-md-8">
						<h3>Billing Address</h3>
						<label for="fname"><i class="fa fa-user" ></i> Name</label>
						<input type="text" id="fname" class="form-control" name="firstname" value="<?php echo $row["F_name"]?>">
						<label for="email"><i class="fa fa-envelope"></i> Email</label>
            <input type="email" name="email" id="email" class="form-control" value="<?php echo $row["Email"]?>" required>
						<label for="adr"><i class="fa fa-address-card-o"></i> Address</label>
						<input type="text" id="adr" name="address" class="form-control"  value="<?php echo $row["address"]?>" required>
						<label for="city"><i class="fa fa-institution"></i> City</label>
                        <input type="text" id="city" name="city" class="form-control" value="<?php echo $row["city"]?>" required>
                        <?php 
      }
    }
}
    else
    {
        header("location:login.php");
    }
          ?>
					</div>
					
				<div class="col-md-6">
						<h3>Payment</h3>
						<label for="fname">Accepted Cards</label>
						<div class="icon-container">
						<i class="fa fa-cc-visa" style="color:navy;"></i>
						<i class="fa fa-cc-amex" style="color:blue;"></i>
						<i class="fa fa-cc-mastercard" style="color:red;"></i>
						<i class="fa fa-cc-discover" style="color:orange;"></i>
						</div>
						
						
						<label for="cname">Name on Card</label>
						<input type="text" id="cname" name="cardname" class="form-control" pattern="^[a-zA-Z ]+$" required>
						
						<div class="form-group" id="card-number-field">
                        <label for="cardNumber">Card Number</label>
                        <input type="text" class="form-control" id="cardNumber" name="cardNumber" required>
                        </div>
						<label for="expdate">Exp Date</label>
						<input type="text" id="expdate" name="expdate" class="form-control" placeholder="12/12/22"required>						<div class="row">
                        <label for="phoneNumber">Phone Number</label>
                        <input type="text" class="form-control" id="phoneNumber" name="phoneNumber" required>
                        <label for="phoneNumber">Quntity of order</label>
                        <input type="text" class="form-control" name="qty" value="<?php echo count($_SESSION["shopcart"])?>">
                                                            
                       
                    </div>
				
                        <div class="card">
                            <div class="card-header">
                              Order Details
                            </div>
                            <table>
                                <tr>
                                <th>ItemName | </th>
                                <th>Quantity | </th>
                                <th>Price | </th>
                                <th>Total  </th>
                                </tr>
                            </table>
                            <div class="card-body">
                                <p class="card-text">
                                <?php   
                                if(!empty($_SESSION["shopcart"]))
                                                          {
                                                            $total=0;
                                                          foreach($_SESSION["shopcart"] as $key=> $value)
                                                          {
                                                          ?>
                                                          <tr>
                                                            <td><strong><?php echo $value["item_name"];?></strong> </td>
                                                            <td><strong> <?php echo $value["item_qty"];?></strong></td>
                                                            <td><strong> <?php echo $value["item_price"];?></strong></td>
                                                            <td><?php
                                                             $t= number_format($value["item_qty"]*$value["item_price"]);
                                                             echo $t;
                                                             $total=$total+($value["item_qty"]*$value["item_price"]);
                                                             ?></td>
                                                         </tr>
                                                        </p>
                                                        <div class="card-footer">
                                                             <?php
                                                          }
                                                        
                                                            ?>
                                                            <td>Cart Items: </td>
                                                             <?php echo count($_SESSION["shopcart"])?>
                                                              <td>Total Amount : </td>
                                                             <?php echo $total;?>
                                                              <input type="hidden" name="total" value="<?php echo $total ;?>">
                                                              <?php
                                                          }
                                                              ?>
                            </div>
                        </div>
                        </div>

					<input type="submit" id="submit" name="checkout" value="checkout" class="btn btn-success">
                </form>
        </div>
        
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