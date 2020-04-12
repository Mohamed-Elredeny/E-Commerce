<?php
require('php/phpFunctions.php');

?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
	

    <link rel="stylesheet" href="Css/bootstrap.css">
    <link rel="stylesheet" href="Css/style.css">
    <link rel="stylesheet" href="Css/bootnavbar.css" />
	<link href="http://www.jqueryscript.net/css/jquerysctipttop.css" rel="stylesheet" type="text/css">
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css" integrity="sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ" crossorigin="anonymous">
</head>
<body>


<div  class="wrapper" >
    <!-- categories bar-->
    <div class="sidebar">
        <!-- Sitename/logo-->
        <h2>Let's shopping!!</h2>
    <!--    <img src="" width="200px" height="150px " style=" padding-bottom:50px;">  -->
        <br>
        
        <button id="btn1" onmousedown="myULshow()" >Categories</button>
        <button id="btn2" onmousedown="myULhide()">Categories</button>
        <br>
        <br>

        <ul id="myUL"   >
            <?php foreach($SelectCategories as $sel ){ ?>
            <li><a href="html/products.php?id=<?php echo $sel['id'] ?>"><i class="<?php echo $sel['icon'] ?>" > </i><?php echo $sel['name'] ?></a></li>

           <?php }  ?>
      
        </ul>
   
    </div>
    
    <div class="main_content">
       <!-- Headr contain nav bar -->
        <nav class="navbar navbar-expand-lg header"  >
         
              <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#Navbar">
                <span class="navbar-toggler-icon">
                    <img src="menu.png" width="50px" height="50px">
                  </span>

              </button>
              <div class="collapse navbar-collapse"  id="Navbar">
               <div class="navbar-nav col-lg-2">
                  <a class="nav-item nav-link active"  href="index.php"><i class="fas fa-home">Home</i></a>
                   <a class="nav-item nav-link"  href="#"><i class="fas fa-address-card">About</i></a>
                     <a class="nav-item nav-link active"   href="html/register.php"><i class="fas fa-user-plus">Register</i></a>
                         <a class="nav-item nav-link"  href="#"><i class="far fa-user-circle">Account</i></a>
                         <a class="nav-item nav-link"  href="#"><i class="fas fa-shopping-cart">Cart</i></a>
                         <a class="nav-item nav-link"  href="html/login.php"><i class="fas fa-sign-in-alt">Login</i></a>
             
                  </div>

              </div>
              <div class="collapse navbar-collapse"  id="Navbar">             
                  <form id="ser"  class="form-inline "  action="/action_page.php">
                    <input class="form-control mr-sm-2" type="text" placeholder="Search">
                    <button class="btn btn-success" type="submit">Search</button>
                </form>

                
                  
              </div>
                <a class="navbar-brand" style="margin-left:2%" href="homePage.php" >  
                    <img src="images/logo2.png" alt="Logo " >
                </a>

        </nav>
        <!-- slider-->
        <br>
        <h2 class="offset-6">Best Offers</h2>
        <br>
        
        	 <div class="col-lg-9 offset-lg-2 col-md-9 offset-md-2 col-sm-9 offset-sm-2 col-9 offset-2 " style="background-color:transparent;" >
                 <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
                    <ul class="carousel-indicators">
                        <li data-target="#demo" data-slide-to="0" class="active"></li>
                        <li data-target="#demo" data-slide-to="1"></li>
                        <li data-target="#demo" data-slide-to="2"></li>
                    </ul>
                    <div class="carousel-inner">
                         <div class="carousel-item active">
                              <img class="d-block w-100" src="images/1.jpg"  width="1500px"  height="500px" alt="First slide">
                         </div>
                         <div class="carousel-item">
                              <img class="d-block w-100" src="images/2.jpg" width="1500px"  height="500px"  alt="Second slide">
                         </div>
                         <div class="carousel-item">
                              <img class="d-block w-100" src="images/3.jpg" width="1500px"  height="500px"  alt="Third slide">
                        </div>
                    </div>
                      <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="sr-only">Previous</span>
                      </a>
                      <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="sr-only">Next</span>
                      </a>
                 </div>    

            </div>
        <br>
        <br>
        <br>
        <br>
        <!-- multi brand slider-->
            <div class="row" style="  margin-left:20px;">
                <br>
              <h3 class="col-9">Catigories name</h3>
                <br>
            
              
                
                <div class="col-lg-4 offset-lg-0 col-md-9 offset-md-2 col-sm-9  offset-sm-2 col-9  offset-2 " style="background-color:transparent; " >
                     <div id="ProductName1" class="carousel slide" data-ride="carousel">
                        <ul class="carousel-indicators">
                            <li data-target="#demo" data-slide-to="0" class="active"></li>
                            <li data-target="#demo" data-slide-to="1"></li>
                            <li data-target="#demo" data-slide-to="2"></li>
                        </ul>
                        <div class="carousel-inner">
                             <div class="carousel-item active">
                                  <img class="d-block w-100" src="images/1.jpg"  width="3000px"  height="300px" alt="First slide">
                             </div>
                             <div class="carousel-item">
                                  <img class="d-block w-100" src="images/2.jpg" width="3000px"  height="300px"  alt="Second slide">
                             </div>
                             <div class="carousel-item">
                                  <img class="d-block w-100" src="images/3.jpg" width="3000px"  height="300px"  alt="Third slide">
                            </div>
                        </div>
                          <a class="carousel-control-prev" href="#ProductName1" role="button" data-slide="prev">
                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                            <span class="sr-only">Previous</span>
                          </a>
                          <a class="carousel-control-next" href="#ProductName1" role="button" data-slide="next">
                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                            <span class="sr-only">Next</span>
                          </a>
                     </div>    
                    </div>
                   
                <div class="col-lg-4 offset-lg-0 col-md-9 offset-md-2 col-sm-9  offset-sm-2 col-9  offset-2 " style="background-color:transparent; " >
                     <div id="ProductName2" class="carousel slide" data-ride="carousel">
                        <ul class="carousel-indicators">
                            <li data-target="#demo" data-slide-to="0" class="active"></li>
                            <li data-target="#demo" data-slide-to="1"></li>
                            <li data-target="#demo" data-slide-to="2"></li>
                        </ul>
                        <div class="carousel-inner">
                             <div class="carousel-item active">
                                  <img class="d-block w-100" src="images/1.jpg"  width="3000px"  height="300px" alt="First slide">
                             </div>
                             <div class="carousel-item">
                                  <img class="d-block w-100" src="images/2.jpg" width="3000px"  height="300px"  alt="Second slide">
                             </div>
                             <div class="carousel-item">
                                  <img class="d-block w-100" src="images/3.jpg" width="3000px"  height="300px"  alt="Third slide">
                            </div>
                        </div>
                          <a class="carousel-control-prev" href="#ProductName2" role="button" data-slide="prev">
                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                            <span class="sr-only">Previous</span>
                          </a>
                          <a class="carousel-control-next" href="#ProductName2" role="button" data-slide="next">
                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                            <span class="sr-only">Next</span>
                          </a>
                     </div>    
                    </div>
                   
                <div class="col-lg-4 offset-lg-0 col-md-9 offset-md-2 col-sm-9  offset-sm-2 col-9  offset-2 " style="background-color:transparent; " >
                     <div id="ProductName3" class="carousel slide" data-ride="carousel">
                        <ul class="carousel-indicators">
                            <li data-target="#demo" data-slide-to="0" class="active"></li>
                            <li data-target="#demo" data-slide-to="1"></li>
                            <li data-target="#demo" data-slide-to="2"></li>
                        </ul>
                        <div class="carousel-inner">
                             <div class="carousel-item active">
                                  <img class="d-block w-100" src="images/1.jpg"  width="3000px"  height="300px" alt="First slide">
                             </div>
                             <div class="carousel-item">
                                  <img class="d-block w-100" src="images/2.jpg" width="3000px"  height="300px"  alt="Second slide">
                             </div>
                             <div class="carousel-item">
                                  <img class="d-block w-100" src="images/3.jpg" width="3000px"  height="300px"  alt="Third slide">
                            </div>
                        </div>
                          <a class="carousel-control-prev" href="#ProductName3" role="button" data-slide="prev">
                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                            <span class="sr-only">Previous</span>
                          </a>
                          <a class="carousel-control-next" href="#ProductName3" role="button" data-slide="next">
                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                            <span class="sr-only">Next</span>
                          </a>
                     </div>    
                    </div>
                
                
           
        </div>
         <br>
        <br>
         <br>
        <br>
         <br>
        <br>
         <br>
        <br>
         <br>
        <br>
           
         <!-- Footer -->
          <div class="row" style="margin-left : .1%;">
                   <footer class="site-footer col-12" style=" margin-left: 0px; ">

                      <!-- Footer Links -->
                      <div class="container text-center text-md-left">

                        <!-- Grid row -->
                        <div class="row">

                          <!-- Grid column -->
                          <div class="col-md-4 mx-auto">

                            <!-- Content -->
                            <h5 class="font-weight-bold text-uppercase mt-3 mb-4">About</h5>
                            <p>any thing about our any thing in this life </p>

                          </div>
                          <!-- Grid column -->

                          <hr class="clearfix w-100 d-md-none">

                          <!-- Grid column -->
                          <div class="col-md-2 mx-auto">

                            <!-- Links -->
                            <h5 class="font-weight-bold text-uppercase mt-3 mb-4">Links</h5>

                            <ul class="list-unstyled">
                              <li>
                                <a href="#!">Link 1</a>
                              </li>
                              <li>
                                <a href="#!">Link 2</a>
                              </li>
                              <li>
                                <a href="#!">Link 3</a>
                              </li>
                              <li>
                                <a href="#!">Link 4</a>
                              </li>
                            </ul>

                          </div>
                          <!-- Grid column -->

                          <hr class="clearfix w-100 d-md-none">

                          <!-- Grid column -->
                          <div class="col-md-2 mx-auto">

                            <!-- Links -->
                            <h5 class="font-weight-bold text-uppercase mt-3 mb-4">Links</h5>

                            <ul class="list-unstyled">
                              <li>
                                <a href="#!">Link 1</a>
                              </li>
                              <li>
                                <a href="#!">Link 2</a>
                              </li>
                              <li>
                                <a href="#!">Link 3</a>
                              </li>
                              <li>
                                <a href="#!">Link 4</a>
                              </li>
                            </ul>

                          </div>
                          <!-- Grid column -->

                          <hr class="clearfix w-100 d-md-none">

                          <!-- Grid column -->
                          <div class="col-md-2 mx-auto">

                            <!-- Links -->
                            <h5 class="font-weight-bold text-uppercase mt-3 mb-4">Links</h5>

                            <ul class="list-unstyled">
                              <li>
                                <a href="#!">Link 1</a>
                              </li>
                              <li>
                                <a href="#!">Link 2</a>
                              </li>
                              <li>
                                <a href="#!">Link 3</a>
                              </li>
                              <li>
                                <a href="#!">Link 4</a>
                              </li>
                            </ul>

                          </div>
                          <!-- Grid column -->

                        </div>
                        <!-- Grid row -->

                      </div>
                      <!-- Footer Links -->

                      <hr>


                      <ul class="list-unstyled list-inline text-center py-2">
                        <li class="list-inline-item">
                          <h5 class="mb-1">Register for free</h5>
                        </li>
                        <li class="list-inline-item">
                          <a href="#!" class="btn btn-danger btn-rounded" style="color:white; background-color:#60a3bc ;border :#60a3bc;">Sign up!</a>
                        </li>
                      </ul>


                      <hr>


                      <ul class="list-unstyled list-inline text-center">
                        <li class="list-inline-item">
                          <a class="btn-floating btn-fb mx-1">
                            <i class="fab fa-facebook-f"> </i>
                          </a>
                        </li>
                        <li class="list-inline-item">
                          <a class="btn-floating btn-tw mx-1">
                            <i class="fab fa-twitter"> </i>
                          </a>
                        </li>
                        <li class="list-inline-item">
                          <a class="btn-floating btn-gplus mx-1">
                            <i class="fab fa-google-plus-g"> </i>
                          </a>
                        </li>
                        <li class="list-inline-item">
                          <a class="btn-floating btn-li mx-1">
                            <i class="fab fa-linkedin-in"> </i>
                          </a>
                        </li>

                        <li class="list-inline-item">
                          <a >
                            <i class="fab fa-tumblr-square"> </i>
                          </a>
                        </li>
                      </ul>



                      <div class="footer-copyright text-center py-3">© 2020 Copyright:
                        <a href="#">Salama & elredeny</a>
                      </div>


                </footer>
                <!-- Footer -->     
      </div>
    </div>
 
 </div>
       
        
 <!-- Site footer -->
 <!--   <footer class="site-footer">
      <div class="container">
        <div class="row">
          <div class="col-sm-12 col-md-6">
            <h6>About</h6>
            <p class="text-justify">Scanfcode.com <i>CODE WANTS TO BE SIMPLE </i> is an initiative  to help the upcoming programmers with the code. Scanfcode focuses on providing the most efficient code or snippets as the code wants to be simple. We will help programmers build up concepts in different programming languages that include C, C++, Java, HTML, CSS, Bootstrap, JavaScript, PHP, Android, SQL and Algorithm.</p>
          </div>

          <div class="col-xs-6 col-md-3">
            <h6>Categories</h6>
            <ul class="footer-links">
              <li><a href="http://scanfcode.com/category/c-language/">C</a></li>
              <li><a href="http://scanfcode.com/category/front-end-development/">UI Design</a></li>
              <li><a href="http://scanfcode.com/category/back-end-development/">PHP</a></li>
              <li><a href="http://scanfcode.com/category/java-programming-language/">Java</a></li>
              <li><a href="http://scanfcode.com/category/android/">Android</a></li>
              <li><a href="http://scanfcode.com/category/templates/">Templates</a></li>
            </ul>
          </div>

          <div class="col-xs-6 col-md-3">
            <h6>Quick Links</h6>
            <ul class="footer-links">
              <li><a href="http://scanfcode.com/about/">About Us</a></li>
              <li><a href="http://scanfcode.com/contact/">Contact Us</a></li>
              <li><a href="http://scanfcode.com/contribute-at-scanfcode/">Contribute</a></li>
              <li><a href="http://scanfcode.com/privacy-policy/">Privacy Policy</a></li>
              <li><a href="http://scanfcode.com/sitemap/">Sitemap</a></li>
            </ul>
          </div>
        </div>
        <hr>
      </div>
      <div class="container">
        <div class="row">
          <div class="col-md-8 col-sm-6 col-xs-12">
            <p class="copyright-text">Copyright &copy; 2017 All Rights Reserved by 
         <a href="#">Scanfcode</a>.
            </p>
          </div>

          <div class="col-md-4 col-sm-6 col-xs-12">
            <ul class="social-icons">
              <li><a class="facebook" href="#"><i class="fa fa-facebook"></i></a></li>
              <li><a class="twitter" href="#"><i class="fa fa-twitter"></i></a></li>
              <li><a class="dribbble" href="#"><i class="fa fa-dribbble"></i></a></li>
              <li><a class="linkedin" href="#"><i class="fa fa-linkedin"></i></a></li>   
            </ul>
          </div>
        </div>
      </div>
</footer>
 -->           
 

<script src="https://kit.fontawesome.com/b99e675b6e.js"></script>
<script src="js/jquery-3.4.1.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
<script src="js/bootnavbar.js"></script>
<script src="js/db.js"></script>
</body>
</html>