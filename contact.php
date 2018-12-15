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
	<main class="formPg">
		<h1>Contact Us</h1>
		<div id="contactForm">
			<div class="row1">
				<label>Name:</label>
				<input type="text" name="name" id="nameInput" required>
			</div>
			<div class="row2">
				<label>Email:</label>
				<input type="email" name="email" id="emailInput" required>
			</div>
			<div class="row3">
				<label>Subject:</label>
				<input type="text" name="subject" id="subjectInput">
			</div>
			<div class="row4">
				<label>Message:</label>
				<textarea name="message" id="msgInput" ></textarea>
			</div>
			<div class="row4">
				<input type="submit" value="Send" id="sendBtn">
			</div>
		</div>
	</main>
	<footer>
		<span class="left-corner">&copy;2018 Furever</span>
		<nav>
			<a href="about.php">About</a>
			<a href="contact.php">Contact Us</a>
		</nav>
	</footer>
	<script src="js/contact.js"></script>
</body>
</html>