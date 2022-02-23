<?php 


if(isset($_GET['logout'])){
	$logout = $_GET['logout'];
	if ($logout=1)
	session_destroy();
	}
	require ('provera.php'); 
?>




<DOCTYPE html>
<html>
<head>
	<title>User login</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
	<div class="header">
	<h2>Log In to MyWebApp</h2>
	</div>
	
	<form method="post" action="logovanje.php">
		<?php include ('errors.php'); ?> 
		
		<div class="inputs">
			<label>Username</label>
			<input type="text" name="username">  
		</div>    
		
		<div class="inputs">
		<label>Password</label>
			<input type="password" name="password">  
		</div>
		
		<div class="inputs">
			<input class="btn" type="submit" name="log_button" value="login">  
		</div>
		<p>
			Not yet a member? <a href = "registracija.php">Register</a>
		</p>
	</form>
</body>
</html>
