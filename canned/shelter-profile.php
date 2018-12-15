<?php 
session_start();
$id = $_SESSION['id'];

$dsn = "mysql:host=localhost;dbname=wysockca_adoption_app;charset=utf8mb4";
$dbusername = "wysockca";
$dbpassword = "sxRaM*y74c4";

$pdo = new PDO($dsn, $dbusername, $dbpassword);

$stmt = $pdo->prepare("SELECT * FROM `shelter` WHERE `id` = '$id'");
$stmt->execute();
$row = $stmt->fetch();

$stmt2 = $pdo->prepare("SELECT `pet-profile`.`id`, `pet-profile`.`name`, `pet-profile`.`age`, `pet-profile`.`sex`, `pet-profile`.`breed`, `pet-profile`.`image`, `pet-profile`.`shelter_id` FROM `pet-profile`INNER JOIN `shelter`ON `pet-profile`.`shelter_id` = `shelter`.`id` WHERE `shelter`.`id` = '$id'");
$stmt2->execute();
$row2 = $stmt2->fetch();
?>

<!DOCTYPE HTML>
<html>
<head>
	<title><?php echo($row["shelterName"]);?>'s Profile - Furever</title>
	<meta charset="UTF-8" />
</head>
<body>
	<header>
		<a href="front.php"><img src=""/></a>
		<nav>
			<a href="front.php">Home</a>
			<a>Browse</a>
			<a>Profile</a>
			<a>Login</a>
			<a>Logout</a>
			<a>Sign up</a>
		</nav>
		<div id="search">
		</div>
	</header>
	<main>
		<section class="profile">
			<img src="assets/<?php echo($row["image"]);?>" />
			<h1><?php echo($row["shelterName"]);?></h1>
			<h3>Contact Information</h3>
			<h4>Address:</h4>
			<p><?php echo($row["street"]);?>,</p> 
			<p><?php echo($row["city"]);?>, ON <?php echo($row["postalcode"]);?></p>
			<h4>Phone:</h4>
			<p><?php echo($row["phone"]);?></p>
			<h4>Email:</h4>
			<p><a href="mailto:<?php echo($row["email"]);?>"><?php echo($row["email"]);?></a></p>
		</section>
		<section id="shelterPets">
			<h1>Pets for Adoption at <?php echo($row["shelterName"]);?></h1>
			<?php
			while($row2 = $stmt2->fetch()) {
			?>
			<div class="pet">
				<img src="assets/<?php echo($row2["image"]);?>" />
				<h2><?php echo($row2["name"]);?></h2>
				<p><?php echo($row2["age"]);?></p>
				<p><?php echo($row2["sex"]);?>, <?php echo($row2["breed"]);?></p>
				<a href="pet-profile.php?<?php echo($row2["id"]);?>">My Profile</a>
				<a href="edit-pet.php?<?php echo($row2["id"]);?>">Edit</a>
				<a href="delete-pet.php?<?php echo($row2["id"]);?>">Remove</a>
			</div>
			<?php } ?>
		</section>
	</main>
	<footer>
		<p>&copy;2018 Furever</p>
		<nav>
			<a href="">About</a>
			<a href="">Donate</a>
			<a href="">Contact Us</a>
		</nav>
	</footer>
</body>
</html>