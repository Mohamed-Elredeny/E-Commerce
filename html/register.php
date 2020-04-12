<?php
require('../php/phpFunctions.php');
signup('fname','lname','username','password','phone','address','signup')
?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
	
    <meta charset="utf-8">
    <link rel="stylesheet" href="../Css/bootstrap.css">
     <link rel="stylesheet" href="../Css/bootnavbar.css" />
    
    <link rel="stylesheet" href="../Css/Register.css"> 
	<link href="http://www.jqueryscript.net/css/jquerysctipttop.css" rel="stylesheet" type="text/css">   
    <link rel="stylesheet" type="text/css" href="../Css/style3.css" />		
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css" integrity="sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ" crossorigin="anonymous">
</head>
<body id="body">
  
	<div class="Main row" style="">
		<div class="containerDiv col-lg-4 col-md-6 col-12" >
			<div class="">
				<form class=" row" action="register.php" method="post">

					<span class="loginTitle p-t-20 p-b-45">
						Register
					</span>
                    
                       <div class="inputDiv col-lg-6 col-md-6 col-12" style="padding : 10px" >
						<input class="input" type="text" name="fname" placeholder="First Name" required>
					</div>
                    
                    <div class="inputDiv col-lg-6 col-md-6 col-12" style="padding : 10px" >
						<input class="input" type="text" name="lname" placeholder="Last name" required>		
					</div>
                    
                    
					<div class="inputDiv col-12" style="padding : 10px" >
						<input class="input" type="text" name="username" placeholder="Username" required>		
					</div>

                    <div class="inputDiv col-12" style="padding : 10px" >
						<input class="input" type="password" name="password" placeholder="Password" required>		
					</div>
                    <div class="inputDiv col-12" style="padding : 10px" >
                        <input class="input" type="number" name="phone" placeholder="phone" required>
                    </div>
                    <div class="inputDiv col-12" style="padding : 10px" >
                        <input class="input" type="text" name="address" placeholder="address" required>
                    </div>

                    

					<div class="col-12 " style="padding : 10px">
                        <input type="submit" class="btn btn-primary " style="width:100%;border-radius: 25px;" value="Register" name="signup" id="signup">
					</div>


					
					<div  style="padding : 10px; margin-right:0 auto;">
						<a style="color:white" href="login.php">
							you are one of our family?.. Login Now					
						</a>
					</div>
				</form>
			</div>
		</div>
	</div>
	
    <script src="https://kit.fontawesome.com/b99e675b6e.js"></script>
    <script src="../js/jquery-3.4.1.min.js"></script>
    <script src="../js/bootstrap.min.js"></script>
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
    <script src="../js/bootnavbar.js"></script>
    <script src="../js/db.js"></script>


</body>
</html>