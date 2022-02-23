<?php
require '../konekcija.php';
if(isset($_GET['idcomment'])){
	$idcomment = $_GET['idcomment'];
	$query = "DELETE from comments WHERE idcomment = {$idcomment}";
	mysqli_query($conn, $query);
	header("Location: commentRemove.php");
	}
?>	