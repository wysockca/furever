<?php 
session_start();

$id = $_SESSION['id'];

$dsn = "mysql:host=localhost;dbname=wysockca_adoption_app;charset=utf8mb4";
$dbusername = "wysockca";
$dbpassword = "sxRaM*y74c4";

$pdo = new PDO($dsn, $dbusername, $dbpassword);

$stmt = $pdo->prepare("SELECT * FROM `user` WHERE `id` = '$id'");

$stmt->execute();

$row = $stmt->fetch();
?>

<!DOCTYPE HTML>
<html>
<head>
	<title>My Profile - Furever</title>
	<meta charset="UTF-8" />
</head>
<body>
	<header>
		<a href="front.php"><img src=""/></a>
		<nav>
			<a href="front.php">Home</a>
			<a href="browse.php">Browse</a>
			<?php if($_SESSION['logged-in'] == true){?>
			<a href="user-profile.php">Profile</a>
			<a href="logout.php">Logout</a>
			<?php }else { ?>
			<a href="login.php">Login</a>
			<a a href="signup.php">Sign up</a>
			<?php } ?>
		</nav>
		<div id="search">
		</div>
	</header>
	<main>
		<section class="profile">
			<img src="assets/<?php echo($row["image"]);?>" />
			<a href="">My likes</a>
			<h1><?php echo($row["firstName"]);?> <?php echo($row["lastName"]);?></h1>
			<h2><?php echo($row["username"]);?></h2>
			<h3>About me</h3>
			<h4>Location:</h4>
			<p><?php echo($row["location"]);?></p>
			<h4>I'm looking for:</h4>
			<?php if($row["cat"] == 1){ ?>
				<p>Cat</p>
			<?php } ?>
			<?php if($row["dog"] == 1){ ?>
				<p>Dog</p>
			<?php } ?>
			<?php if($row["smallAnimal"] == 1){ ?>
				<p>Small Animal</p>
			<?php } ?>
			<h4>My lifestyle:</h4>
			<p><?php echo($row["lifestyle"]);?></p>
			<h4>Am I away from home a lot?</h4>
			<p><?php echo($row["away"]);?></p>
			<h4>My home is:</h4>
			<p><?php echo($row["homeSize"]);?></p>
			<h4>Do I live on a farm?</h4>
			<p><?php echo($row["farm"]);?></p>
			<h4>Do I have any kids?</h4>
			<p><?php echo($row["kids"]);?></p>
			<h4>Do I have any other pets?</h4>
			<p><?php echo($row["otherPets"]);?></p>
		</section>
		<section id="matches">
			<h1>Pets I Love</h1>
			<?php
			while($row2 = $stmt2->fetch()) {
			?>
			<div class="pet">
				<img src="assets/<?php echo($row2["image"]);?>" />
				<h2><?php echo($row2["name"]);?></h2>
				<p><?php echo($row2["age"]);?></p>
				<p><?php echo($row2["sex"]);?>, <?php echo($row2["breed"]);?></p>
				<a href="pet-profile.php?<?php echo($row2["id"]);?>">My Profile</a>
				<img src="assets/liked.png" id="toggle">
			</div>
			<?php } ?>
		</section>
	<footer>
		<p>&copy;2018 Furever</p>
		<nav>
			<a href="about.php">About</a>
			<a href="contact.php">Contact Us</a>
		</nav>
	</footer>
	<script src="js/togglelike.js"></script>
</body>
</html>