<?php
require '../konekcija.php';
if(isset($_GET['iduser'])){
	$iduser = $_GET['iduser'];
	$query = "UPDATE users SET isblocked = 1 WHERE iduser = {$iduser}";
	mysqli_query($conn, $query);
	header("Location: commentApprove.php");
	}
?>