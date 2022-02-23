<?php

if(isset($_GET['username'])){
	$username = $_GET['username'];
	}
?>
<!DOCTYPE html>
<html>
<head>
	<title>News by category</title>
	<link rel="stylesheet" type="text/css" href="../admin/style.css">
</head>
<?php

if(isset($_GET['category'])){
	$category = $_GET['category'];
	}
?>	
<body>
	<div class="adminheader">
	<h2><?php echo $category;?>	news sorted by "the latest on the top"</h2>
	</div>

	<div class="subheader">
		<?php include_once 'subheadernews.php'; ?>
	</div>
	
	
	<div class="subheader">
		<?php
			require('../konekcija.php');
			$query = "SELECT * FROM news WHERE ncategory='{$category}'";
			$result1 = mysqli_query ($conn, $query);
			
			if(mysqli_num_rows($result1) > 0){
				$result2 = array();
				
				while ($row = mysqli_fetch_assoc($result1)){
					
					array_push($result2, $row);
				}
			}else{
				die("<b>No news available in this category.</b>"); 
					}
			$result3 = array_reverse($result2);
			for ($row = 0; $row < count ($result3); $row++){
				?>
				<div class = "news">
						<a href = "show.php?idnews=<?php echo $result3[$row]['idnews'];?>&username=<?php echo $username; ?>"><img src= "../admin/images/readmore.png" title = "Read more..."></a>
						
						
						<p style="font-size:20px"><b><?php echo $result3[$row]['ntitle']; ?></b></p>
						<p><b>Category: <?php echo $result3[$row]['ncategory']; ?></b>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<b>Posted on: </b><?php echo $result3[$row]['ndatetime']; ?></p>
				</div>
				<?php
				}
				echo "Number of news found is " . mysqli_num_rows($result1);
				?>
	</div>
</body>
</html>