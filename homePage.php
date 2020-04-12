<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>E-commerce</title>
 
    <link rel="stylesheet" href="Css/bootstrap.css">
    <link rel="stylesheet" href="Css/style.css">
    <link rel="stylesheet" href="Css/bootnavbar.css" />
   
    
<link href="http://www.jqueryscript.net/css/jquerysctipttop.css" rel="stylesheet" type="text/css">
    
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css" integrity="sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ" crossorigin="anonymous">


</head>
<body>

<!--NavBar-->
 
    <header id="navDiv">
        <nav class="navbar navbar-expand-lg fixed-top "  >
         
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#Navbar">
            <span class="navbar-toggler-icon">
                 <svg class="bi bi-box-arrow-in-down" width="1em" height="1em" viewBox="0 0 16 16" fill="currentColor"  xmlns="http://www.w3.org/2000/svg">
                    <path fill-rule="evenodd" d="M4.646 8.146a.5.5 0 01.708 0L8 10.793l2.646-2.647a.5.5 0 01.708.708l-3 3a.5.5 0 01-.708 0l-3-3a.5.5 0 010-.708z" clip-rule="evenodd"/>
                    <path fill-rule="evenodd" d="M8 1a.5.5 0 01.5.5v9a.5.5 0 01-1 0v-9A.5.5 0 018 1z" clip-rule="evenodd"/>
                    <path fill-rule="evenodd" d="M1.5 13.5A1.5 1.5 0 003 15h10a1.5 1.5 0 001.5-1.5v-8A1.5 1.5 0 0013 4h-1.5a.5.5 0 000 1H13a.5.5 0 01.5.5v8a.5.5 0 01-.5.5H3a.5.5 0 01-.5-.5v-8A.5.5 0 013 5h1.5a.5.5 0 000-1H3a1.5 1.5 0 00-1.5 1.5v8z" clip-rule="evenodd"/>
                    </svg>
              </span>
             
          </button>
          <div class="collapse navbar-collapse"  id="Navbar">
          
           <div class="navbar-nav col-lg-2">
              <a class="nav-item nav-link active"  href="#"><i class="fas fa-home">Home</i></a>
               <a class="nav-item nav-link"  href="#"><i class="fas fa-address-card">About</i></a>
                 <a class="nav-item nav-link active"   href="#"><i class="fas fa-user-plus">Register</i></a>
                     <a class="nav-item nav-link"  href="#"><i class="far fa-user-circle">Account</i></a>
                     <a class="nav-item nav-link"  href="#"><i class="fas fa-shopping-cart">Cart</i></a>
                     <a class="nav-item nav-link"  href="#"><i class="fas fa-sign-in-alt">Login</i></a>
                    <a class="nav-item nav-link" onmouseover="div1()" onmousedown="div2()"  href="#"><i class="fas fa-shopping-cart">Categories</i></a>
              </div>
          
          </div>
              <div class="collapse navbar-collapse"  id="Navbar">             
              <form id="ser"  class="form-inline "  action="/action_page.php">
                <input class="form-control mr-sm-2" type="text" placeholder="Search">
                <button class="btn btn-success" type="submit">Search</button>
            </form>
                      
            <a class="navbar-brand" style="margin-left:2%" href="homePage.php" >  
                <img src="images/logo2.png" alt="Logo " >
            </a>
               
           <!-- col-md-6 Finish-->
          </div>
             
        </nav>
    </header>
<br>
<br>
<br>
<br>


<!--
        <div id="amenu-wrapper">
            <ul id="amenu-list">
               
                <li> <a href="#">Item 1</a>
                    <ul>
                        
                        <li> <a href="#">Item 1-1</a>
                            <ul>
                                
                                <li> <a href="#">Item 1-1-1</a>
                                    <ul>
                                        <li> <a href="#">Item 1-1-1-1</a> </li>
                                        <li> <a href="#">Item 1-1-1-2</a> </li>
                                        <li> <a href="#">Item 1-1-1-3</a> </li>
                                    </ul>
                                </li>
                              
                            </ul>
                        </li>
                       
                    </ul>
            </li>
          
            </ul>
        </div>
  -->  
<div class=" col-lg-2 col-md-2 col-ms-2 col-xs-2" style="background-color:red ;height:700px; position: absolute; height :700px">
    vhjvhhjjbhjgjj
    </div>
<div class="row ">
    
    <div class="col-lg-9 offset-lg-2 col-md-9 offset-md-2 col-ms-9 offset-ms-2 col-xs-9 offset-xs-2 " style="background-color:transparent;" >
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
    <div class="clearfix"></div>
      <div class="col-lg-9 offset-lg-2 col-md-9 offset-md-2 col-ms-9 offset-ms-2 col-xs-9 offset-xs-2 " style="background-color:transparent;" >
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
    </div>  

<script src="js/jquery-3.4.1.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
<script src="js/bootnavbar.js"></script>
<script src="js/db.js">
</script>
</body>
</html>