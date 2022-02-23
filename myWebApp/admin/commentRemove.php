<?php require('../konekcija.php'); 



?>
<!DOCTYPE html>
<html>
<head>
	<title>Comments removal</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
	<div class="adminheader">
	<h2>MyWebbApp Admin: Removing comments</h2>
	</div>
	
	<div class="subheader">
	<?php include_once 'subheader.php'; ?>
	</div>
	
	<div class="subheader">
		
		<?php
			require('../konekcija.php');
			$query = "SELECT * FROM comments WHERE is_approved IS NOT NULL";
			$result = mysqli_query ($conn, $query);
			if(mysqli_num_rows($result) > 0){
				while ($row = mysqli_fetch_assoc($result)){
				?>
					<div class = "news">
						<a href = "commentterminator.php?idcomment=<?php echo $row['idcomment'];?>"><img src= "images/delete.png" title = "Delete comment from DB."></a>
						<p><b>Posted on: </b><?php echo $row['cdatetime']; ?></p>
						<p><b>Comment: </b><?php echo $row['comment']; ?></p>
						<p>Comment ID: <?php echo $row['idcomment']; ?>
						User ID: <?php echo $row['iduser']; ?>
						News ID <?php echo $row['idnews']; ?></p>
												
					</div>
				<?php
				}
			}else{
				echo "No comments available.";
				}
			?>
		
		
		
		
		
		
		
	</div>
	
</body>
</html>