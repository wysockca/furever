<?php
session_start(); 

$username = $_POST['username'];
$password = $_POST['password'];

$dsn = "mysql:host=localhost;dbname=wysockca_adoption_app;charset=utf8mb4";
$dbusername = "wysockca";
$dbpassword = "sxRaM*y74c4";

$pdo = new PDO($dsn, $dbusername, $dbpassword);

$stmt = $pdo->prepare("SELECT * FROM `shelter` WHERE `username` = '$username' AND `password` = '$password'");
$stmt->execute();

if($row = $stmt->fetch()){
	$_SESSION['logged-in'] = true;
	$_SESSION['username'] = $row['username'];
	$_SESSION['password'] = $row['password'];
	$_SESSION['role'] = $row['role'];
	$_SESSION['id'] = $row['id'];

	header("Location: front.php"); 
} else{
	header("Location: shelter-login.php");
}
?>