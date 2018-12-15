<?php
$id = $_POST['id'];
$firstName = $_POST['firstName'];
$lastName = $_POST['lastName'];
$username = $_POST['username'];
$email = $_POST['email'];
$password = $_POST['password'];
$location = $_POST['location'];
$cat = $_POST['cat'];
$dog = $_POST['dog'];
$smallAnimal = $_POST['smallAnimal'];
$lifestyle = $_POST['lifestyle'];
$away = $_POST['away'];
$homeSize = $_POST['homeSize'];
$farm = $_POST['farm'];
$kids = $_POST['kids'];
$otherPets = $_POST['otherPets'];
$image = $_FILES['image']['name'];

$uploaddir = 'assets/';
$uploadfile = $uploaddir . basename($_FILES['image']['name']);

$dsn = "mysql:host=localhost;dbname=wysockca_adoption_app;charset=utf8mb4";
$dbusername = "wysockca";
$dbpassword = "sxRaM*y74c4";

$pdo = new PDO($dsn, $dbusername, $dbpassword);

$stmt = $pdo->prepare("UPDATE `user` SET `firstName` = '$firstName', `lastName` = '$lastName', `username` = '$username', `email` = '$email', `password` = '$password', `location` = '$location', `cat` = '$cat', `dog` = '$dog', `smallAnimal` = '$smallAnimal', `lifestyle` = '$lifestyle', `away` = '$away', `homeSize` = '$homeSize', `kids` = '$kids', `otherPets` = '$otherPets', `farm` = '$farm', `image` = '$image' WHERE `user`.`id` = $id;");

$stmt->execute();

if (move_uploaded_file($_FILES['image']['tmp_name'], $uploadfile)) {
	header("Location: user-profile.php");
} else{
	echo "Possible file upload attack!";
}

?>