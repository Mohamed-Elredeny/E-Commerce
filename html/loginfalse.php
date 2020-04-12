<!DOCTYPE html>
<html>
<head>
	<title></title>
	
    <meta charset="utf-8">
    <link rel="stylesheet" href="../Css/bootstrap.css">
    <link rel="stylesheet" href="../Css/style.css">
    <link rel="stylesheet" href="../Css/bootnavbar.css" />
	<link href="http://www.jqueryscript.net/css/jquerysctipttop.css" rel="stylesheet" type="text/css">
       <link rel="stylesheet" type="text/css" href="../Css/demo.css" />
        <link rel="stylesheet" type="text/css" href="../Css/style3.css" />
		<link rel="stylesheet" type="text/css" href="../Css/animate-custom.css" />
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
 <form id="login" class="container login-form" novalidate="" action="#" method="POST" onsubmit="return validateForm()" >
    <div class="form-wrapper">
         <div class="field-wrapper" style="font-size:20px">
			<h2 style="font-family: cursive; ">Login</h2>
            <img src="../images/moved.png" width="100%" height="10px">
		    
		</div>
        <div class="field-wrapper" style=" text-align: left;">E-mail</div>
        <div class="form-group">
        <input type="text" class="form-control" name="Email" id="inputSuccess1" required>
        <div class="valid-feedback">Success! </div>
        <div class="invalid-feedback">No, you missed this one.</div>
    </div>
    <div class="field-wrapper" style=" text-align: left;">Password</div>
    <div class="form-group">
        
        <input type="Password" class="form-control" name="password" required id="inputSuccess2">
        <div class="valid-feedback">Success!</div>
        <div class="invalid-feedback">Sorry, you missed this one.</div>
    </div>
 
    
        </div>
     <div class="form-actions" style="width:100% ; margin-top:5%">
		<a id="signUp" href="register.php">Sign Up</a>
        <Button ID="login" type="submit" class="btn"  Text="Login" >Login</Button>
	</div>
</form>
   
<script src="https://kit.fontawesome.com/b99e675b6e.js"></script>
<script src="../js/jquery-3.4.1.min.js"></script>
<script src="../js/bootstrap.min.js"></script>
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
<script src="../js/bootnavbar.js"></script>
<script src="../js/db.js"></script>
</body>
</html>