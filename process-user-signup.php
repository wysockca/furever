<?php
$firstName = $_POST['firstName'];
$lastName = $_POST['firstName'];
$username = $_POST['username'];
$email = $_POST['email'];
$password = $_POST['password'];

$dsn = "mysql:host=localhost;dbname=wysockca_adoption_app;charset=utf8mb4";
$dbusername = "wysockca";
$dbpassword = "sxRaM*y74c4";

$pdo = new PDO($dsn, $dbusername, $dbpassword); 

$stmt = $pdo->prepare("INSERT INTO `user` (`id`, `firstName`, `lastName`, `username`, `email`, `password`) VALUES (NULL, '$firstName', '$lastName', '$username', '$email', '$password'); ");

$stmt->execute();

header("Location: user-signup.php");

?>