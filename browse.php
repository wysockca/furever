<?php 
session_start();

$dsn = "mysql:host=localhost;dbname=wysockca_adoption_app;charset=utf8mb4";
$dbusername = "wysockca";
$dbpassword = "sxRaM*y74c4";

$pdo = new PDO($dsn, $dbusername, $dbpassword);

$stmt = $pdo->prepare("SELECT * FROM `pet-profile`");
$stmt->execute();

$stmt2 = $pdo->prepare("SELECT `shelter`.`shelterName` FROM `shelter`");
$stmt2->execute();
?>

<!DOCTYPE HTML>
<html>
	<head>
		<title>Browse - Furever</title>
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
		</header>
		<div class="spacer">
			<h1 class="centerTitle">Pets for Adoption</h1>
		</div>
		<div id="browseCntnr">
			<div id="results">
				<?php
				while($row = $stmt->fetch()) {
				?>
				<div class="pet">
					<img src="assets/<?php echo($row["image"]);?>" />
					<div class="info">
						<h2><?php echo($row["name"]);?></h2>
						<p><?php echo($row["sex"]);?>, <?php echo($row["breed"]);?></p>
					</div>
					<a href="pet-profile.php?id=<?php echo($row["id"]);?>">My Profile</a>
				</div>
				<?php } ?>
			</div>
			<aside>
				<h2>Filter Options</h2>
				<label>Browse by location:</label><br><br>
				<select name="location" id="locationInput">
				<?php while($row2 = $stmt2->fetch()) { ?>
					<option value="<?php echo($row2["shelterName"]);?>">
						<?php echo($row2["shelterName"]);?>
					</option>
				<?php } ?>
				</select><br><br>
				<input type="submit" id="searchBtn" value="Search" style="background-color: #ffbe40;">
				<!-- <label>Animal:</label>
				<select name="animal">
					<option value="Cat">Cat</option>
					<option value="Dog">Dog</option>
					<option value="Small Animal">Small Animal</option>
				</select>  -->
			</aside>
		</div> 
		<footer>
			<span class="left-corner">&copy;2018 Furever</span>
			<nav>
				<a href="about.php">About</a>
				<a href="contact.php">Contact Us</a>
			</nav>
		</footer>
		<script src="js/search.js"></script>
	</body>
</html>