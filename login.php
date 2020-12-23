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
                                <div class="col-md-6">
                                 <p class="display-4">Cosmo Car Parts</p>
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

<div class="content">
        <div class="container">
          <div class="col-lg-12 ">
              <div class="card row col-lg-4 p-4">
                <div class="card-header card-header-primary">
                  <h4 class="card-title">Login</h4>
                </div>
                <div class="card-body d-flexe text-sm-center">
                  <form action="storedata.php" method="post" name="form" enctype="multipart/form-data">
                    <div class="row row-cols-2 text-sm-center">
                      <div class="col-lg-12">
                        <div class="form-group bmd-form-group">
                          <label class="bmd-label-floating">Email</label>
                          <input type="email" name="email" id="email" class="form-control w-100" required>
                        </div>
                        <div class="form-group bmd-form-group">
                          <label class="bmd-label-floating">Password</label>
                          <input type="password" id="password" name="password" class="form-control w-100" required>
                        </div>
                        <div>
                          <label for="check"><strong> Admin : </strong> </label>
                          <input type="checkbox" name="check" id="check">
                        </div>
                        <button type="submit" name="login" id="btn_save" class="btn btn-primary pull-right mt-4 w-100">Login</button>
                        <div class="clearfix text-sm-left"> <a href="">Forget Password</a></div>
                        
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
        
    <script src="js/bootstrap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="js/bootstrap.min.js"></script>
  </body>
</html>