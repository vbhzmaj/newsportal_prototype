<?php
require '../konekcija.php';
if(isset($_GET['idcomment'])){
	$idcomment = $_GET['idcomment'];
	echo $idcomment;
	
	
	$query = "UPDATE comments SET is_approved = 1 WHERE idcomment = {$idcomment}";
	mysqli_query($conn, $query);
	
	header("Location: commentApprove.php");
	}
?>	



