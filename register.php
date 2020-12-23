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
                        </div>
                </section>

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
                            <a class="nav-link "href="Home.html">Car Part Order</a>
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
                       
               </nav>
      </header>

    <!-- End Navbar -->
    <div class="content">
        <div class="container-fluid">
          <!-- your content here -->
          <div class="col-md-12">
              <div class="card">
                <div class="card-header card-header-primary">
                  <h4 class="card-title">Add new Customer</h4>
                  <p class="card-category">Customer Profile Form</p>
                </div>
                <div class="card-body">
                  <form action="storedata.php" method="post" name="form" enctype="multipart/form-data">
                    <div class="row">
                      <div class="row col-md-4">
                        <div class="form-group bmd-form-group">
                          <label class="bmd-label-floating">First Name</label>
                          <input type="text" id="first_name" name="first_name" class="form-control w-100" required>
                        </div>
                        <div class="form-group bmd-form-group">
                          <label class="bmd-label-floating">Last Name</label>
                          <input type="text" name="last_name" id="last_name"  class="form-control w-100" required>
                        </div>
                        <div class="form-group bmd-form-group">
                          <label class="bmd-label-floating">Email</label>
                          <input type="email" name="email" id="email" class="form-control w-100" required>
                        </div>
                        <div class="form-group bmd-form-group">
                          <label class="bmd-label-floating">Password</label>
                          <input type="password" id="pass1" name="password" class="form-control w-100" required>
                        </div>
                        <div class="form-group bmd-form-group">
                          <label class="bmd-label-floating">re-enter Password</label>
                          <input type="password" class="form-control w-100" required>
                          <p id="ok" class="color:red"></p>
                          
                        </div>
                      </div>
                        <div class="col-md-3 mt-1">
                        <div class="form-group bmd-form-group">
                          <label class="bmd-label-floating">phone number</label>
                          <input type="text" id="phone" name="phone" class="form-control w-100" required>
                      </div>
                        <div class="form-group bmd-form-group">
                          <label class="bmd-label-floating">City</label>
                          <input type="text" name="city" id="city"  class="form-control w-100" required>
                        </div>
                        <div class="form-group bmd-form-group">
                          <label class="bmd-label-floating">Address</label>
                          <input type="text" name="country" id="country" class="form-control w-100" required>
                        </div>

                    <button type="submit" name="register" id="btn_save" class="btn btn-primary pull-right mt-4 w-100">Register Now</button>
                    
                    <div class="clearfix"></div>
                    </div>
                    </div>
                  </form>
                </div>
              </div>
            </div>
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