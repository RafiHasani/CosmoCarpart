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
                                <ul class="float-sm-right">
                                    <li > <a href="pages/Login.html";><b>Login</b></a></li>
                                    <li> <a href="register.php"> <b>Register</b></a></li>
                                    <li> <img src="Webp/icon-cart.png" alt="icon-cart" style="height: 30px;"></li>
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
                            <a class="nav-link "href="Home.html">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link "href="Home.html">Orders list</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link "href="Shop.html">Cart</a>
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

      <div class="content">
        <div class="container-fluid">
          <form action="storedata.php" method="post" type="addproduct" name="addproduct" enctype="multipart/form-data">
          <div class="row">
                
         <div class="col-md-7">
            <div class="card">
              <div class="card-header card-header-primary">
                <h5 class="title">Add Product</h5>
              </div>
              <div class="card-body">
                
                  <div class="row">
                    
                    <div class="col-md-12">
                      <div class="form-group">
                        <label>Product Name</label>
                        <input type="text" id="product_name" required name="product_name" class="form-control">
                      </div>
                    </div>
                    <div class="col-md-4">
                    <div class="">
                        <label for="">Add Image</label>
                        <input type="file" id="image" name="image" required class="btn btn-fill btn-success" > 
                      </div>
                    </div>
                     <div class="col-md-12">
                      <div class="form-group">
                        <label>Description</label>
                        <textarea rows="4" cols="80" id="details" required name="details" class="form-control"></textarea>
                      </div>
                    </div>
                  
                    <div class="col-md-12">
                      <div class="form-group">
                        <label>Product Price</label>
                        <input type="number" id="price" name="product_price" required class="form-control" >
                      </div>
                    </div>
                  </div>
              </div>
            </div>
          </div>

          <div class="col-md-5">
            <div class="card">
            
              <div class="card-body">
                
                  <div class="row">
                    
                    <div class="col-md-12">
                      <div class="form-group">
                        <label>Product Model</label>
                        <input type="text" id="product_type" name="product_model" required class="form-control">
                      </div>
                    </div>
                    <div class="col-md-12">
                      <div class="form-group">
                        <label for="">Product Brand</label>
                        <input type="text" id="brand" name="product_brand" required class="form-control">
                      </div>
                    </div>

                  </div>
                
              </div>
              <div class="card-footer">
                  <button type="submit" id="btn_save" name="addpart" required class="btn btn-fill btn-primary">Update Product</button>
              </div>
            </div>
          </div>
          
        </div>
         </form>
        </div>
      </div>

      

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