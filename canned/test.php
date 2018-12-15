<?php 
session_start();

$id = $_GET['id'];

$dsn = "mysql:host=localhost;dbname=wysockca_adoption_app;charset=utf8mb4";
$dbusername = "wysockca";
$dbpassword = "sxRaM*y74c4";

$pdo = new PDO($dsn, $dbusername, $dbpassword);

$stmt = $pdo->prepare("SELECT * FROM `pet-profile` WHERE `id` = '$id'");
$stmt->execute();
$row = $stmt->fetch();

?>

<!DOCTYPE HTML>
<html>
<head>
	<title><?php echo($row["name"]);?>'s Profile Profile - Furever</title>
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
			<!-- <h3>Shelter:</h3>
			<p><?php echo($row2["shelterName"]);?></p>
			<a href="mailto:<?php echo($row2["email"]);?>">Contact Shelter</a> -->
		</div>
		<div id="description">
			<h2>About <?php echo($row["name"]);?></h2>
			<p><?php echo($row["about"]);?></p>
		</div>
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