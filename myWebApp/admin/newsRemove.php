<!DOCTYPE html>
<html>
<head>
	<title>News removal</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
	<div class="adminheader">
	<h2>MyWebbApp Admin: Removing news</h2>
	</div>
	
	<div class="subheader">
		<?php include_once 'subheader.php'; ?>
	</div>
	
	<div class="subheader">
	<?php
			require('../konekcija.php');
			$query = "SELECT * FROM news";
			$result = mysqli_query ($conn, $query);
			if(mysqli_num_rows($result) > 0){
				while ($row = mysqli_fetch_assoc($result)){
				?>
					<div class = "news">
						<a href = "newsterminator.php?idnews=<?php echo $row['idnews'];?>"><img src= "images/delete.png" title = "Delete news from DB."></a>
						<p><b>News ID: </b><?php echo $row['idnews']; ?></p>
						<p><b>Category: </b><?php echo $row['ncategory']; ?></p>
						<p><b>News Title: </b><?php echo $row['ntitle']; ?></p>
						<p><b>Posted on: </b><?php echo $row['ndatetime']; ?></p>
					</div>
				<?php
				}
			}else{
				echo "No news stored.";
				}
			?>
	
	</div>

</body>
</html>