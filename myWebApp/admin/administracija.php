<?php require('../provera.php'); 


?>
<DOCTYPE html>
<html>
<head>
	<title>Administrator access</title>
	<link rel="stylesheet" type="text/css" href="../style.css">
</head>
<body>
	<div class="header">
	<h2>MyWebbApp Admin</h2>
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
	<p>Proceed to <a href="newsAdd.php" style="color: blue;">Adding news</a></p>
	<p>Or <a href="newsRemove.php" style="color: blue;">Removing news</a></p>
	<p>Or <a href="commentApprove.php" style="color: blue;">Approving comments</a></p>
	<p>Or <a href="commentRemove.php" style="color: blue;">Removing comments</a></p>
	<p>Or <a href="userBlock.php" style="color: blue;">Blocking user</a></p>
	<p>Or <a href="index.php?logout='1'" style="color: red;">Logout</a></p>
	
	
	<?php endif ?>
	</div>
	
</body>
</html>