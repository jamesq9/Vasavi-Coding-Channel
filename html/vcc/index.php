<?php
session_start();
if(isset($_SESSION['user'])) {
	header( 'Location: questions.php' ) ;
}

?>
<!DOCTYPE html>
<html>
<head>
	<title>VCC</title>
	<link rel="stylesheet" href="css/style.css">
	<link rel="stylesheet" href="css/bm.css">
	<link rel="stylesheet" href="css/btm.css">
	<link rel="icon" href="favicon.gif">
	
</head>
<body>

<div id="container">
	<h2 align="center"><img width= "100" height= "100"src="img/vasavi.gif" alt=""><br><small>Vasavi College Of Engineering<br>Vasavi Coding Channel</small>	</h2>
	<div class="center">
	<button id="shw_login" class="btn btn-info" >Login</button>	
	<button id="shw_register" class="btn btn-info" >Register</button>
	</div>
	<div id="login" class="myform" >
		<div class="form-group">
		<form action="">
		<label for="Username">ID NUMBER</label> 
		<input type="text" class="form-control" placeholder="1602YYGRPNUM" name="unl" id="unl"><br>
		</div>
		<div class="form-group">
		<label for="Password">Password</label>
		<input type="password" class="form-control" placeholder="PASSWORD" name="upl" id="upl" ><br>
		</div>
		<p id="j" class="bg-danger"></p>
		<input type="button" id="btlogin" value="login" class="btn btn-primary">
		</form>
	</div>
	
	<div id="register" class="myform" hidden="hidden">
		<div class="form-group">
		<form action="">
		<label for="Username">Username</label> 
		<input type="text" class="form-control" placeholder="NAME"  name="una" id="una"><br>
		</div>
		<div class="form-group">
		<label for="ID">ID NUMBER</label> 
		<input type="text" class="form-control" placeholder="1602YYGRPNUM"  name="unr" id="unr"><br>
		</div>
		<div class="form-group">
		<label for="Password">Password</label>
		<input type="password" class="form-control" placeholder="PASSWORD" name="upr1" id="upr1" ><br>
		</div>
		<div class="form-group">
		<label for="repeat">Repeat Password</label>    
		<input type="password" class="form-control" placeholder="PASSWORD" name="upr2" id="upr2"><br>
		</div>
		<p id="k" class="bg-danger "></p>
		<input type="button" id="btreg" class="btn btn-primary" value="register">
		</form>
				
	</div>
</div>

</body>
<script src="js/jquery.js" ></script>
<script src="js/work.js" ></script>
</html>