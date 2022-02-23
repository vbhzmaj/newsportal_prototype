<?php

if(isset($_GET['username'])){
	$username = $_GET['username'];
	}
?>
<p style="font-size:20px"><b><a href="news.php?username=<?php echo $username; ?>" style="color: blue;">All news</a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
							<a href="newsc.php?category=Domestic&username=<?php echo $username; ?>" style="color: blue;">Domestic</a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
							<a href="newsc.php?category=International&username=<?php echo $username; ?>" style="color: blue;">International</a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
							<a href="newsc.php?category=Business&username=<?php echo $username; ?>" style="color: blue;">Business</a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
							<a href="newsc.php?category=Sport&username=<?php echo $username; ?>" style="color: blue;">Sport</a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
							<a href="newsc.php?category=Showbizz&username=<?php echo $username; ?>" style="color: blue;">Showbizz</a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
							<a href="../provera.php?logout=1" style="color: red;">Logout</a></b></p>
							