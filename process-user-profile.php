<?php
session_start();

if($_SESSION['logged-in'] == false){
	header("Location: login.php");
}else{

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

$dsn = "mysql:host=localhost;dbname=wysockca_adoption_app;charset=utf8mb4";
$dbusername = "wysockca";
$dbpassword = "sxRaM*y74c4";

$pdo = new PDO($dsn, $dbusername, $dbpassword);

$stmt = $pdo->prepare("INSERT INTO `user` (`location`, `cat`, `dog`, `smallAnimal`, `lifestyle`, `away`, `homeSize`, `farm`, `kids`, `otherPets`) VALUES ('$location', '$cat', '$dog', '$smallAnimal', '$lifestyle', '$away', '$homeSize', '$farm', '$kids', '$otherPets'); ");

$stmt->execute();

header("Location: user-profile.php");

?>