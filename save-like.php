<?php 
session_start();

$id = $_SESSION['id'];
$pet_id = $_POST['pet_id'];

$dsn = "mysql:host=localhost;dbname=wysockca_adoption_app;charset=utf8mb4";
$dbusername = "wysockca";
$dbpassword = "sxRaM*y74c4";

$pdo = new PDO($dsn, $dbusername, $dbpassword); 

$stmt = $pdo->prepare("INSERT INTO `likes` (`id`, `user_id`, `pet_id`) VALUES (NULL, '$id', '$pet_id'); ");

$stmt->execute();
?>