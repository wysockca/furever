<?php
$id = $_POST['id'];
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
$image = $_FILES['image']['name'];

$uploaddir = 'assets/';
$uploadfile = $uploaddir . basename($_FILES['image']['name']);

$dsn = "mysql:host=localhost;dbname=wysockca_adoption_app;charset=utf8mb4";
$dbusername = "wysockca";
$dbpassword = "sxRaM*y74c4";

$pdo = new PDO($dsn, $dbusername, $dbpassword);

$stmt = $pdo->prepare("UPDATE `pet-profile` SET `name` = '$name', `about` = '$about', `age` = '$age', `sex` = '$sex', `animal` = '$animal', `breed` = '$breed', `color` = '$color', `size` = '$size', `neutered` = '$neutered', `declawed` = '$declawed', `kids` = '$kids', `otherPets` = '$otherPets', `energy` = '$energy', `dependency` = '$dependency', `image` = '$image' WHERE `pet-profile`.`id` = $id;");

$stmt->execute();

if (move_uploaded_file($_FILES['image']['tmp_name'], $uploadfile)) {
	header("Location: profile.php");
} else{
	echo "Possible file upload attack!";
}

?>