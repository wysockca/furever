<?php
session_start(); 

$dsn = "mysql:host=localhost;dbname=wysockca_adoption_app;charset=utf8mb4";
$dbusername = "wysockca";
$dbpassword = "sxRaM*y74c4";

$pdo = new PDO($dsn, $dbusername, $dbpassword);

$location = $_POST["browse"];

$stmt = $pdo->prepare("SELECT `pet-profile`.`id`, `pet-profile`.`name`, `pet-profile`.`age`, `pet-profile`.`sex`, `pet-profile`.`breed`, `pet-profile`.`animal`, `pet-profile`.`image`, `shelter`.`shelterName` FROM `pet-profile`INNER JOIN `shelter`ON `pet-profile`.`shelter_id` = `shelter`.`id` WHERE `shelter`.`shelterName`= '$location'");

$stmt->execute();

$results = $stmt->fetchAll(PDO::FETCH_ASSOC); //fetching all of the rows as an array
$json = json_encode($results);
echo($json);

?>

