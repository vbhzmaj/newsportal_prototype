<?php

if(isset($_GET['username'])){
	$username = $_GET['username'];
	}
	else {header("Location: ../logovanje.php");}
?>
<!DOCTYPE html>
<html>
<head>
	<title>Showing news</title>
	<link rel="stylesheet" type="text/css" href="../admin/style.css">
</head>
<?php

if(isset($_GET['idnews'])){
	$idnews = $_GET['idnews'];
	}
?>	
<body>
	<div class="adminheader">
	<h2>You are reading your chosen news...</h2>
	</div>

	<div class="subheader">
		<?php include_once 'subheadernews.php'; ?>
	</div>
	
	
	<div class="subheader">
		<?php
			require('../konekcija.php');
			$query = "SELECT * FROM news WHERE idnews = '{$idnews}'";
			$result = mysqli_query ($conn, $query);
			$newquery = "SELECT iduser FROM users WHERE username = '{$username}'";
			$newresult = mysqli_query ($conn, $newquery);
			$iduser = mysqli_fetch_assoc($newresult);
			$iduser = $iduser['iduser'];
			$row = mysqli_fetch_assoc($result);
			
			?>
				<div class = "news">
						<p style="font-size:20px"><b><?php echo $row['ntitle']; ?></b></p>
						<p><?php echo $row['ncontent']; ?></p>
						<p><b>Category: <?php echo $row['ncategory']; ?></b>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<b>Posted on: </b><?php echo $row['ndatetime']; ?></p>
				</div>
				<div class = "news">
					<form action = "#" method = "post">
						<input type = "hidden" name = "iduser" value="<?php echo $iduser;?>">
						<input type = "hidden" name = "username" value="<?php echo $username;?>">
						<input type = "hidden" name = "idnews" value="<?php echo $row['idnews'];?>">
						<label>Add your comment:<br/>
						<textarea name = "comment" rows="3" cols="86"></textarea></label></br>
						<input type = "submit" name = "submit" value = "Submit your comment for admin approval"></br>
					</form>
					<?php include_once 'addYourComment.php'; ?>
				</div>
					
					<p><b><?php echo "Previous comments:"; ?></b></p>
					<?php include_once ('previousComments.php'); ?>
				
				
	</div>
</body>
</html>