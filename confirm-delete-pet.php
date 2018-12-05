<?php
$id = $_POST["id"];

$dsn = "mysql:host=localhost;dbname=wysockca_adoption_app;charset=utf8mb4";
$dbusername = "wysockca";
$dbpassword = "sxRaM*y74c4";

$pdo = new PDO($dsn, $dbusername, $dbpassword);

$stmt = $pdo->prepare("DELETE FROM `pet-profile` WHERE `id` = $id");

$stmt->execute();

header("Location: user-profile.php");
?>