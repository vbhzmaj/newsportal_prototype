<?php require('../konekcija.php'); 



?>
<!DOCTYPE html>
<html>
<head>
	<title>Comment approval</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
	<div class="adminheader">
	<h2>MyWebbApp Admin: Approving comments</h2>
	</div>
	
	
	<div class="subheader">
	<?php include_once 'subheader.php'; ?>	
	</div>
	
	<div class="subheader">
	<?php
			require('../konekcija.php');
			$query = "SELECT * FROM comments WHERE is_approved IS NULL";
			$result = mysqli_query ($conn, $query);
			if(mysqli_num_rows($result) > 0){
				while ($row = mysqli_fetch_assoc($result)){
				?>
				
				<div class = "news">
						<a href = "storeApproval.php?idcomment=<?php echo $row['idcomment'];?>"><img src= "images/approve.png" title = "Approve comment."></a>
						<p><b>Posted on: </b><?php echo $row['cdatetime']; ?></p>
						<p><b>Comment </b><?php echo $row['comment']; ?></p>
						<p>Comment ID: <?php echo $row['idcomment']; ?>
						User ID: <?php echo $row['iduser']; ?>
						News ID <?php echo $row['idnews']; ?></p>
						<form method="GET" action="disapprovalcomm.php">	
							<input type="hidden" name="idcomment" value="<?php echo $row['idcomment']; ?>">
							<input type="submit" name="btn_delete" value="Delete this comment">
						<form>
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