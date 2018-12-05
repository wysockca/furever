<?php
$id = $_GET['id'];

$dsn = "mysql:host=localhost;dbname=wysockca_adoption_app;charset=utf8mb4";
$dbusername = "wysockca";
$dbpassword = "sxRaM*y74c4";

$pdo = new PDO($dsn, $dbusername, $dbpassword);

$stmt = $pdo->prepare("SELECT * FROM `pet-profile` WHERE `id` = '$id'");

$stmt->execute();

$row = $stmt->fetch();
?>

<!DOCTYPE html>
<html>
<head>
	<title><?php echo($row["name"]);?>'s Profile - Furever</title>
	<meta charset="UTF-8" />
</head>
<body>
	<main>
		<div class="profile">
			<img src="assets/<?php echo($row["image"]);?>" />
			<h1><?php echo($row["name"]);?></h1>
			<h2><?php echo($row["breed"]);?></h2>
			<h3>Age:</h3>
			<p><?php echo($row["age"]);?></p>
			<h3>Colouring:</h3>
			<p><?php echo($row["color"]);?></p>
			<h3>Spayed/neutered:</h3>
			<p><?php echo($row["neutered"]);?></p>
			<h3>Declawed:</h3>
			<p><?php echo($row["declawed"]);?></p>
			<h3>Good with kids:</h3>
			<p><?php echo($row["kids"]);?></p>
			<h3>Good with other animals:</h3>
			<p><?php echo($row["otherPets"]);?></p>
			<a href="">Contact Shelter</a>
		</div>
		<div id="description">
			<h2>About <?php echo($row["name"]);?></h2>
			<p><?php echo($row["about"]);?></p>
		</div>
	</main>
	<footer>
		<p>&copy;2018 Furever</p>
		<ul>
			<li><a href="">About</a></li>
			<li><a href="">Donate</a></li>
			<li><a href="">Contact Us</a></li>
		</ul>
	</footer>
</body>
</html>