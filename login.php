<?php
$dsn = "mysql:host=localhost;dbname=wysockca_adoption_app;charset=utf8mb4";
$dbusername = "wysockca";
$dbpassword = "sxRaM*y74c4";

$pdo = new PDO($dsn, $dbusername, $dbpassword);
?>

<!DOCTYPE html>
<html>
<head>
	<title>Login - Furever</title>
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
		<h1>Login</h1>
		<p>Looking for the shelter login? <a href="shelter-login.php">Click here.</a></p>
		<form class="altForm" action="process-login.php" method="POST">
			<div class="row1">
				<label>Username:</label>
				<input type="text" name="username">
			</div>
			<div class="row2">
				<label>Password:</label>
				<input type="password" name="password">
			</div>
			<div class="row3">
				<input type="submit" value="Login">
			</div>
		</form>
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