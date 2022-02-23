<?php require('provera.php'); 

if (empty($_SESSION['username'])) {
	header('location: logovanje.php');
}


?>
<DOCTYPE.html>
<html>
<head>
	<title>Process page</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
	<div class="header">
	<h2>MyWebbApp</h2>
	</div>
	
	<div class="content">
	
	<?php if(isset($_SESSION['success'])): ?>
		<div class="success">
			<h3>
				<?php 
					echo $_SESSION['success'];
					unset ($_SESSION['success']);
				?>
			<h3>
		</div >
	<?php endif ?> 
	
	<?php if(isset($_SESSION['username'])): ?>
	
	<p><b>Welcome <?php echo $_SESSION['username']; ?>!</b></p>
	<p>Proceed to <a href="news/news.php?username=<?php echo $_SESSION['username']; ?>" style="color: blue;">News portal</a></p>
	<p>Or <a href="index.php?logout='1'" style="color: red;">Logout</a></p>
	
	
	<?php endif; ?>
	</div>
	
</body>
</html>