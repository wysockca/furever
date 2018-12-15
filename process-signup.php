<?php
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

$stmt = $pdo->prepare("INSERT INTO `user` (`id`, `firstName`, `lastName`, `username`, `email`, `password`, `location`, `cat`, `dog`, `smallAnimal`, `lifestyle`, `away`, `homeSize`, `farm`, `kids`, `otherPets`, `image`) VALUES (NULL, '$firstName', '$lastName', '$username', '$email', '$password', '$location', '$cat', '$dog', '$smallAnimal', '$lifestyle', '$away', '$homeSize', '$farm', '$kids', '$otherPets', '$image'); ");

$stmt->execute();

if (move_uploaded_file($_FILES['image']['tmp_name'], $uploadfile)) {
	header("Location: front.php");
} else{
	echo "Possible file upload attack!";
}
?>