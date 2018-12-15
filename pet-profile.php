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

$stmt2 = $pdo->prepare("SELECT `pet-profile`.`id`, `pet-profile`.`name`, `pet-profile`.`shelter_id`, `shelter`.`shelterName`, `shelter`.`email` FROM `pet-profile`INNER JOIN `shelter` ON `pet-profile`.`shelter_id` = `shelter`.`id` WHERE `pet-profile`.`id` = '$id' ");
$stmt2->execute();
$row2 = $stmt2->fetch();
?>

<!DOCTYPE HTML>
<html>
<head>
	<title><?php echo($row["name"]);?>'s Profile Profile - Furever</title>
	<meta charset="UTF-8" />

	<meta name="description" content="Bringing animal lovers and pets in need of homes together. Pet adoption website.">
	<meta name="keywords" content="pet adoption, pet, cat, dog, animal, adoption">

	<link rel="icon" type="image/png" href="assets/favicon-32x32.png" sizes="32x32">
	<link rel="stylesheet" href="css/main.css">
	<link rel="stylesheet" media="screen and (max-width: 480px)" href="css/small.css">
</head>
<body>
	<header>
			<div id="logo" class="left-corner">
				<a href="front.php"><img src="assets/logo.png"></a>
			</div>
			<nav>
				<a href="front.php">Home</a>
				<a href="browse.php">Browse</a>
				<?php if($_SESSION['logged-in'] == true){?>
				<a href="profile.php">Profile</a>
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
		<img src="assets/<?php echo($row["image"]);?>" class="profilePic" />
		<div class="profile">
			<div class="heading">
				<h1><?php echo($row["name"]);?></h1>
				<h2><?php echo($row["breed"]);?></h2>
			</div>
			<div class="a">
				<h3>Birthday:</h3>
				<p><?php echo($row["age"]);?></p>
				<h3>Colouring:</h3>
				<p><?php echo($row["color"]);?></p>
				<h3>Spayed/neutered:</h3>
				<p><?php echo($row["neutered"]);?></p>
				<h3>Declawed:</h3>
				<p><?php echo($row["declawed"]);?></p>
			</div>
			<div class="b">
				<h3>Good with kids:</h3>
				<p><?php echo($row["kids"]);?></p>
				<h3>Good with other animals:</h3>
				<p><?php echo($row["otherPets"]);?></p>
				<h3>Shelter:</h3>
				<p><?php echo($row2["shelterName"]);?></p>
				<a href="mailto:<?php echo($row2["email"]);?>">Contact Shelter</a>
				<div id="likeBtn">
					<img src="assets/notliked.png" id="toggle">
				</div>
			</div>
		</div>
		<div class="description">
			<h2>About <?php echo($row["name"]);?></h2>
			<p><?php echo($row["about"]);?></p>
		</div>
	</main>
	<footer>
		<span class="left-corner">&copy;2018 Furever</span>
		<nav>
			<a href="about.php">About</a>
			<a href="contact.php">Contact Us</a>
		</nav>
	</footer>
	<script src="js/togglelike.js"></script>
</body>
</html>