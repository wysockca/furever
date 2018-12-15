<?php 
session_start();

$dsn = "mysql:host=localhost;dbname=wysockca_adoption_app;charset=utf8mb4";
$dbusername = "wysockca";
$dbpassword = "sxRaM*y74c4";

$pdo = new PDO($dsn, $dbusername, $dbpassword);

if (isset($_POST['location'])){
	$location = $_POST['location'];

	$stmt = $pdo->prepare("SELECT `pet-profile`.`id`, `pet-profile`.`name`, `pet-profile`.`age`, `pet-profile`.`sex`, `pet-profile`.`breed`, `pet-profile`.`animal`, `pet-profile`.`image`, `pet-profile`.`shelter_id`, `shelter`.`shelterName` FROM `pet-profile`INNER JOIN `shelter`ON `pet-profile`.`shelter_id` = `shelter`.`id` WHERE `shelter`.`shelterName`= '$location'");
	
	$stmt->execute();
}
?>

<!DOCTYPE HTML>
<html>
	<head>
		<title>Browse - Furever</title>
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
			<?php if (isset($_POST['location'])){ ?>
				<h1>Pets for Adoption</h1>
				<?php
				while($row = $stmt->fetch()) {
				?>
				<div class="pet">
					<img src="assets/<?php echo($row["image"]);?>" />
					<h2><?php echo($row["name"]);?></h2>
					<p><?php echo($row["age"]);?></p>
					<p><?php echo($row["sex"]);?>, <?php echo($row["breed"]);?></p>
					<a href="pet-profile.php?id=<?php echo($row["id"]);?>">My Profile</a>
				</div>
				<?php } 
			} ?>
		</main>
		<footer>
			<p>&copy;2018 Furever</p>
			<nav>
				<a href="about.php">About</a>
				<a href="contact.php">Contact Us</a>
			</nav>
		</footer>
	</body>
</html>