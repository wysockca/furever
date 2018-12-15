<?php

$shelterName = $_POST['shelterName'];
$username = $_POST['username'];
$email = $_POST['email'];
$password = $_POST['password'];
$street = $_POST['street'];
$city = $_POST['city'];
$postalcode = $_POST['postalcode'];
$phone = $_POST['phone'];
$role = $_POST['role'];

$uploaddir = 'assets/';
$uploadfile = $uploaddir . basename($_FILES['image']['name']);
$image = $_FILES['image']['name'];

$dsn = "mysql:host=localhost;dbname=wysockca_adoption_app;charset=utf8mb4";
$dbusername = "wysockca";
$dbpassword = "sxRaM*y74c4";

$pdo = new PDO($dsn, $dbusername, $dbpassword); 

$stmt = $pdo->prepare("INSERT INTO `shelter` (`id`, `shelterName`, `username`, `email`, `password`, `street`, `city`, `postalcode`, `phone`, `role`, `image`) VALUES (NULL, '$shelterName', '$username', '$email', '$password', '$street', '$city', '$postalcode', '$phone', '$role', '$image'); ");

$stmt->execute();

if (move_uploaded_file($_FILES['image']['tmp_name'], $uploadfile)) {
	header("Location: front.php");
} else{
	echo "Possible file upload attack!";
}
?>