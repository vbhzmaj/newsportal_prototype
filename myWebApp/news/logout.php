<?php

if(isset($_GET['logout'])){
	$logout = $_GET['logout'];
	if ($logout=1) 
	{session_destroy();}
	header("Location: ../provera.php");
	}
?>	