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
</head>
<body>
	<header>
		<a href=""><img src=""/></a>
		<nav>
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
		<form action="process-user-login.php" method="POST">
			<label>Username:</label>
			<input type="text" name="username">
			<label>Password:</label>
			<input type="password" name="password">
			<input type="submit" value="Login">
		</form>
	</main>
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