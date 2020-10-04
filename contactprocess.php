<?php 
session_start();
require_once 'config/connect.php'; 
if(isset($_POST) & !empty($_POST)){

	//$email = mysqli_real_escape_string($connection, $_POST['email']);
	$name = filter_var($_POST['name'], FILTER_SANITIZE_EMAIL);
	$email = filter_var($_POST['email'], FILTER_SANITIZE_EMAIL);
	$message = filter_var($_POST['message'], FILTER_SANITIZE_EMAIL);
	//$sql = "SELECT * FROM contact WHERE name='$name' AND email='$email' AND message='message' ";
	echo $sql = "INSERT INTO contact (name, email, message) VALUES ('$name', '$email', '$message')";
	$result = mysqli_query($connection, $sql) or die(mysqli_error($connection));

	if($result){
		//echo "User exits, create session";
		$_SESSION['customer'] = $email;
		$_SESSION['customerid'] = mysqli_insert_id($connection);
		header("location: checkout.php");
	}else{
		//$fmsg = "Invalid Login Credentials";
		header("location: login.php?message=2");
	}
}
?>
