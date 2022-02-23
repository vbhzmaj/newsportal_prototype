<?php
require '../konekcija.php';
if(isset($_GET['idnews'])){
	$idnews = $_GET['idnews'];
	$query = "DELETE from news WHERE idnews = {$idnews}";
	mysqli_query($conn, $query);
	header("Location: newsRemove.php");
	}
?>	