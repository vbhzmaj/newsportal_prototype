<?php require('../konekcija.php'); 




?>
<!DOCTYPE html>
<html>
<head>
	<title>Administrator access</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
	<div class="adminheader">
	<h2>MyWebbApp Admin: Blocking user</h2>
	</div>
	
	<div class="subheader">
	<?php include_once 'subheader.php'; ?>	
	</div>
	
	<div class="subheader">
	<?php
			require('../konekcija.php');
			$query = "SELECT * FROM users"; // WHERE is_approved IS NULL";
			$result = mysqli_query ($conn, $query);
			if(mysqli_num_rows($result) > 0){
				while ($row = mysqli_fetch_assoc($result)){
					$blocked = $row['isblocked'];
					if ($blocked < 1){
				?>
				
				<div class = "news">
						User ID: <?php echo $row['iduser']; ?>
						<form method="GET" action="blockingaction.php">	
							<input type="hidden" name="iduser" value="<?php echo $row['iduser']; ?>">
							<input type="submit" name="btn_block" value="Block this user">
						<form>
					</div>
					
				<?php
					}}
			}else{
				echo "No users for blocking.";
				}
			?>
	
	</div>
	
</body>
</html>