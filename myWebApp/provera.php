<?php 
session_start();

$username = "";
$email = "";
$password1 = "";
$errors = array();

require('konekcija.php');


if (isset($_POST['reg_button'])) {
	$username = trim ($_POST['username']);
	$email = trim($_POST['email']);
	$password1 = trim($_POST['password1']);
	$password2 = trim($_POST['password2']);
	$username = mysqli_real_escape_string($conn, $username);
	$email = mysqli_real_escape_string($conn, $email);
	$password1 = mysqli_real_escape_string($conn, $password1);
	$password2 = mysqli_real_escape_string($conn, $password2);
	
	if(empty($username)){
		array_push($errors, "Username is required.");
	}
	if(empty($email)){
		array_push($errors, "Email is required.");
	}
	if(empty($password1)){
		array_push($errors, "Password is required.");
	}
	if ($password2 != $password1){
		array_push($errors, "Passwords should match each other.");
	}
	$queryname = "SELECT * FROM users WHERE username='$username'";
	$result = mysqli_query($conn, $queryname);
	if(mysqli_num_rows($result) == 1) {
		array_push($errors, "This username is already taken.");
	}
	
	$querymail = "SELECT * FROM users WHERE email='$email'";
	$result = mysqli_query($conn, $querymail);
	if(mysqli_num_rows($result) == 1) {
		array_push($errors, "User with this email is already registered.");
	}
	
	
	
	if (count($errors) == 0) {
		$password = $password1; //md5($password1);
		$query = "INSERT INTO users (username, email, password) VALUES ('$username', '$email', '$password')";
		mysqli_query($conn, $query);
		$_SESSION['username'] = $username;
		$_SESSION['success'] = "You are successfully logged in.";
		header('location: index.php');
	}
}

if(isset($_POST['log_button'])){
	$username = trim ($_POST['username']);
	$password = trim($_POST['password']);
	$username = mysqli_real_escape_string($conn, $username);
	$password = mysqli_real_escape_string($conn, $password);
	
		if(empty($username)){
		array_push($errors, "Username is required.");
		}
		if(empty($password)){
		array_push($errors, "Password is required.");
		}
				
		if (count($errors) == 0) {
		$password = $password; //md5($password);
		$query = "SELECT * FROM users WHERE username='$username' AND password = '$password'";
		$result = mysqli_query($conn, $query);
		if(mysqli_num_rows($result) == 1) {
			$res = mysqli_fetch_assoc($result);
				
				if ($res['isblocked'] == 1) {
					array_push($errors, "Access denied!");
				}
				
				else {
				$status= $res['status'];
				if($status == 1){
					$_SESSION['username'] = $username;
					$_SESSION['success'] = "Admin successfully logged in.";
					header('location: admin/administracija.php');	
				
				}else{
					$_SESSION['username'] = $username;
					$_SESSION['success'] = "You are successfully logged in.";
					header('location: index.php');
					}
				}	
					
		}else{
			array_push($errors, "Invalid login entries!");
			}
	}
}

if(isset($_GET['logout'])){
	session_destroy;
	unset($_SESSION['username']);
	header('location: logovanje.php');
}

?>