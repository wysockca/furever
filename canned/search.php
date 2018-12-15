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
		<title>Browse - Furever</title>
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
			<div class="pet">
				<img src="" />
				<h2>name</h2>
				<p>age</p>
				<p>m/f, breed</p>
				<a href="">My Profile</a>
			</div>
		</main>
		<aside>
			<h2>Filters</h2>
		</aside>
		<footer>
			<p>&copy;2018 Furever</p>
			<nav>
				<a href="about.php">About</a>
				<a href="contact.php">Contact Us</a>
			</nav>
		</footer>
	</body>
</html>