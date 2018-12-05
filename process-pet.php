<?php
$name = $_POST['name'];
$about = $_POST['about'];
$age = $_POST['age'];
$sex = $_POST['sex'];
$animal = $_POST['animal'];
$breed = $_POST['breed'];
$color = $_POST['color'];
$size = $_POST['size'];
$neutered = $_POST['neutered'];
$declawed = $_POST['declawed'];
$kids = $_POST['kids'];
$otherPets = $_POST['otherPets'];
$energy = $_POST['energy'];
$dependency = $_POST['dependency'];


$uploaddir = 'assets/';
$uploadfile = $uploaddir . basename($_FILES['image']['name']);
$image = $_FILES['image']['name'];

$dsn = "mysql:host=localhost;dbname=wysockca_adoption_app;charset=utf8mb4";
$dbusername = "wysockca";
$dbpassword = "sxRaM*y74c4";

$pdo = new PDO($dsn, $dbusername, $dbpassword); 

$stmt = $pdo->prepare("INSERT INTO `pet-profile` (`id`, `name`, `image`, `about`, `age`, `sex`, `animal`, `breed`, `color`, `size`, `neutered`, `declawed`, `kids`, `otherPets`, `energy`, `dependency`) VALUES (NULL, '$name', '$image', '$about', '$age', '$sex', '$animal', '$breed', '$color', '$size', '$neutered', '$declawed', '$kids', '$otherPets', '$energy', '$dependency'); ");
$stmt->execute();

if (move_uploaded_file($_FILES['image']['tmp_name'], $uploadfile)) {
	header("Location: add-pet.php");
} else{
	echo "Possible file upload attack!";
}
?>