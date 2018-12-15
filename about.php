<?php 
session_start(); 

$dsn = "mysql:host=localhost;dbname=wysockca_adoption_app;charset=utf8mb4";
$dbusername = "wysockca";
$dbpassword = "sxRaM*y74c4";

$pdo = new PDO($dsn, $dbusername, $dbpassword);
?>

<!DOCTYPE HTML>
<html>
	<head>
		<title>About Us - Furever</title>
		<meta charset="UTF-8" />

		<meta name="description" content="Bringing animal lovers and pets in need of homes together. Pet adoption website.">
		<meta name="keywords" content="pet adoption, pet, cat, dog, animal, adoption">

		<link rel="icon" type="image/png" href="assets/favicon-32x32.png" sizes="32x32">
		<link rel="stylesheet" href="css/main.css">
		<link rel="stylesheet" media="screen and (max-width: 480px)" href="css/small.css">
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
		<main id="aboutPg">
			<h1>About Us</h1>
			<div id="aboutCntnr">
				<p>Welcome to Furever, the online app that is bringing animal lovers and pets in need of homes together.</p>
				<p>In a study by the Canadian Federation of Humane Societies in 2017, it was found that around 73 percent of the shelters in their study were running at capacity. Shelters are constantly struggling to find forever homes for animals, despite the fact that people across the country are looking for a new furry companion to be a part of their household everyday. The problem lies in the fact that people often want a brand new puppy or kitten, when there are many sweet animals in shelters just waiting to find a loving home.</p>
				<p>Here at Furever, we aim to make adopting a pet that much easier, and to help bring awareness about animals in need.</p>
			</div>
		</main>
		<footer>
			<span class="left-corner">&copy;2018 Furever</span>
			<nav>
				<a href="about.php">About</a>
				<a href="contact.php">Contact Us</a>
			</nav>
		</footer>
	</body>
</html>