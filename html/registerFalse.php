<!DOCTYPE html>
<html>
<head>
	<title></title>
	
    <meta charset="utf-8">
    <link rel="stylesheet" href="../Css/bootstrap.css">
    <link rel="stylesheet" href="../Css/style.css">
    <link rel="stylesheet" href="../Css/bootnavbar.css" />
	<link href="http://www.jqueryscript.net/css/jquerysctipttop.css" rel="stylesheet" type="text/css">
       
        <link rel="stylesheet" type="text/css" href="../Css/style3.css" />
   
		
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css" integrity="sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ" crossorigin="anonymous">
</head>
<body style="background-image : url(../images/bg.jpg)">
  
  <!--
       <div class="col-4 loginDiv" >
        <div class="row">
            <div class="register col-12">
                <h3 style="font-family: cursive; margin-left:30%">Register</h3>
                <img src="../images/moved.png" style="width:100%;height 10px; margin-top: -60px; margin-left:15px">
           </div>
          <div class="input-group">
  <div class="input-group-prepend">
    <span class="input-group-text" id="">First and last name</span>
  </div>
  <input type="text" class="form-control">
  <input type="text" class="form-control">
</div>
        </div>
       </div>
-->
<!--
<form id="form1"  class="login-form">
	<div class="form-wrapper">
        <div class="field-wrapper" style="font-size:20px">
			<h2 style="font-family: cursive; margin-left:40%">Login</h2>
            <img src="../images/moved.png" width="100%" height="10px">
		    
		</div>
        <div class="field-wrapper">E-mail</div>
		<div class="field-wrapper">
            
			<label for="email" class="fa fa-envelope"></label>
            
            <input type="text" ID="email" runat="server" placeholder="Email" required>
		    
		</div>
        <div class="field-wrapper">Password</div>
		<div class="field-wrapper">
			<label for="password" ></label>
            <input type="password" ID="password" CssClass="pass" runat="server" placeholder="Password" TextMode="Password" required>
            <div class="valid-feedback">okay</div>
            <div class="invalid-feedback">Please enter password</div>
		  
		</div>

	</div>

	<div class="form-actions">
		<a href="#">Sign Up</a>
        <Button ID="Login" class="btn" runat="server" Text="Login" >Login</Button>
	</div>
</form>
-->
<!-- <form  class=" row register-form form-wrapper col-lg-5 col-md-8 col-10"  action="#" method="POST" >
    
    
         <div class="field-wrapper" style="font-size:20px">
			<h2 style="font-family: cursive; ">Register</h2>
            <img src="../images/moved.png" width="100%" height="30px">   
		</div>
         
    <div class="row col-12">
        <div class="form-group  col-lg-6 col-md-12 col-12" style=""> 
            <label for="firstName">FirsName:</label>
            <input type="text" class="form-control" style="" name="firstName" id="firstName" required>      
        </div>
        
         <div class="form-group  col-lg-6 col-md-12 col-12" style=""> 
            <label for="lasttName">LastName:</label>
            <input type="text" class="form-control" style="" name="lastName" id="lastName" required>      
        </div>
        
         <div class="form-group  col-12" style=""> 
            <label for="Email">Email: </label>
            <input type="text" class="form-control" style="" name="Email" id="Email" required>      
        </div>
   
        <div class="form-group  col-12" style=""> 
            <label for="password">Password:</label>
            <input type="Password" class="form-control" style="" name="password" id="password" required>      
        </div>
        <hr>
        <div class="form-group col-12" style="width:100% ; margin-top:20%">
		<a id="login" href="login.php">Login</a>
        <Button ID="signUp" type="submit" class="btn btn-primary" style="margin-right:0px;" Text="Login" >Sign up</Button>
	   </div>
    </div>
     
     
</form> -->
    <div class="row register col-lg-5 col-md-8 col-10" action="" method="post" >
            <div class="col-12">
                <h2 style="font-family: cursive; margin-left:35% ">Register</h2>
                <img src="../images/moved.png" width="100%" height="30px"> 
            </div>
            <div class="col-lg-6 col-md-12 col-12" style=""> 
                <label for="firstName" style="font-size:20px">FirsName:</label>
                <input type="text" class="form-control" style="" name="firstName" id="firstName" required>      
            </div>
        
            <div class="col-lg-6 col-md-12 col-12" style=""> 
                <label for="lasttName" style="font-size:20px">LastName:</label>
                <input type="text" class="form-control" style="" name="lastName" id="lastName" required>      
          </div>
        
          <div class="col-lg-12 col-md-12 col-12" style=""> 
                <label for="Email" style="font-size:20px">Email:</label>
                <input type="text" class="form-control" style="" name="Email" id="Email" required>      
          </div>
          <div class="col-lg-12 col-md-12 col-12" style=""> 
                <label for="password" style="font-size:20px">Password:</label>
                <input type="password" class="form-control" style="" name="password" id="password" required>      
          </div>
          <div class="col-lg-4 col-md-12 col-12" style="dispaly:inline padding-bottom: 20px;" > 
                <input type="checkbox" class="form-control" style="width:20px; height:20px;" name="checkbox" id="checkbox" required>   <h6>Accept our terms</h6>
                
          </div>
         <div class="col-lg-4 col-md-12 col-12" style="dispaly:inline padding-bottom: 20px;" > 
               
               
          </div>
        
           <button class="btn btn-primary">SignUp</button>   
   </div>
   
<script src="https://kit.fontawesome.com/b99e675b6e.js"></script>
<script src="../js/jquery-3.4.1.min.js"></script>
<script src="../js/bootstrap.min.js"></script>
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
<script src="../js/bootnavbar.js"></script>
<script src="../js/db.js"></script>
</body>
</html>