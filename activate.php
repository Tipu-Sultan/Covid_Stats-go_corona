<?php
session_start();
ob_start();

include 'dbase.php';

if (isset($_GET['token'])) {
	$token = $_GET['token'];

	$updatequery = " update registration set status='active' where token='$token' ";

	$query =  mysqli_query($con,$updatequery);
	if ($query) {
		if (isset($_SESSION['msgo'])) {
	$_SESSION['msgo'] = "Hi $username Create account  successfully, account is active now ! ";
	$_SESSION['msgo_code'] = "Good job!";
			header('location:login.php');
		}else{
			$_SESSION['msgo'] = "$username You are logged out. ";
			header('location:login.php');
		}
	}else{
		$_SESSION['msgo'] = "Account not update ";
			header('location:register.php');
	}
}

?>