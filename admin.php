<?php 


?>
<!doctype html>
<html lang="en">
  <head>
    <title>Title</title>
   
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <script src="bower_components/jquery/dist/jquery.min.js"></script>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="indexstyle.css">
    <script src="jsq.js"></script>
  </head>
  <body>
        <header>
                <section class="container-fluid p-md-5 align-items-md-center">
                        <div class="row">
                                    <div class="col-md-4 list-unstyled ">
                                        <li><img src="webP/logo.png" alt="Logo" class="mx-auto d-block"></li>
                                    </div>

                                <div class="col-md-4">
                                 <h1 class="display-5">Cosmo Car Parts</h1>
                                </div>
                                
                                <div class="col-md-4 " id="upleft">
                                <ul class="float-sm-right"><?php 
                                                session_start(); 
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
                            <a class="nav-link "href="admin.php">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link "href="Orderlist.php">SaleOrder</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link "href="orderrecieved.php">Orders Recieved</a>
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
      
      <section id="proid">
     <div class="container-fluid  m-0 d-flex flex-lg-row">
          <div class="cols-lg-12 ml-1">
            <div class="row row-cols-5 ml-2" >
              <table id="tab">
                      <?php
              require_once "sparePart.php";
              $p=new Part();
              $temp=array();
              $temp=$p->showpro();
              foreach($temp as $obj)
              {
                ?>
                <div class="col-md-10">
                  <tr>  
            <td ><img class="m-2" src=<?php echo' "data:;base64,'. base64_encode( $obj->getp_img("img") ) .'"';?>></td>
            <td id="idcell"><?php $obj->getp_id("Item_serial")?></td>
              <td ><?php echo $obj->getp_name("Item_name") ?></td>
             <td ><?php echo $obj->getp_model("Item_Model")?></td>
              <td ><?php echo $obj->getp_price("Item_price")?></td>
              <td ><button class="btn btn-dark m-1">Edit</button></td>
             <td ><button class="btn btn-dark  m-1">Delete</button>
                </tr>
                </div> 
                <?php
                        }
          ?>      
          </table> 
         </div>
            </div>
           </div>
     </section>
    
      
        <footer>
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
        
      
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="js/bootstrap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="js/bootstrap.min.js"></script>
  </body>
</html>