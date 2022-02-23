<?php require('provera.php'); ?>
<DOCTYPE html>
<html>
<head>
	<title>New user registration</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
	<div class="header">
	<h2>Registration for MyWebApp</h2>
	</div>
	
	<form method="post" action="registracija.php">
	<?php include ('errors.php'); ?>
		<div class="inputs">
			<label>Username</label>
			<input type="text" name="username" value = "<?php echo $username; ?>">  
		</div>    
		<div class="inputs">
			<label>Email</label>
			<input type="email" name="email" value = "<?php echo $email; ?>">  
		</div>
		<div class="inputs">
			<label>Password</label>
			<input type="password" name="password1" value = "<?php echo $username; ?>">  
		</div>
		<div class="inputs">
			<label>Confirm Password</label>
			<input type="password" name="password2" value = "<?php echo $username; ?>">  
		</div>
		<div class="inputs">
			<input class="btn" type="submit" name="reg_button" value="register">  
		</div>
		<p>
			Already a member? <a href = "logovanje.php">Sign in</a>
		</p>
	</form>
</body>
</html>

