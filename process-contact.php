<?php

$name = $_POST['name'];
$email = $_POST['email'];
$subject = $_POST['subject'];
$message = $_POST['message'];

$dsn = "mysql:host=localhost;dbname=wysockca_adoption_app;charset=utf8mb4";
$dbusername = "wysockca";
$dbpassword = "sxRaM*y74c4";

$pdo = new PDO($dsn, $dbusername, $dbpassword);

$stmt = $pdo->prepare("INSERT INTO `contact` (`id`, `name`, `email`, `subject`, `message`) VALUES (NULL, '$name', '$email', '$subject', '$message'); ");

$stmt->execute();

// header("Location: contact-thank-you.php");

$results = $stmt->fetchAll(PDO::FETCH_ASSOC); //fetching all of the rows as an array
$json = json_encode($results);
echo($json);

?>