<?php
session_start();

if($_SESSION['logged-in'] == false || $_SESSION['role'] == NULL){
	header("Location: front.php");
} else{
	$id = $_GET['id'];

	$dsn = "mysql:host=localhost;dbname=wysockca_adoption_app;charset=utf8mb4";
	$dbusername = "wysockca";
	$dbpassword = "sxRaM*y74c4";

	$pdo = new PDO($dsn, $dbusername, $dbpassword); 

	$stmt = $pdo->prepare("SELECT * FROM `pet-profile` WHERE id = $id");

	$stmt->execute();

	$row = $stmt->fetch();
?>

<!DOCTYPE html>
<html>
<head>
	<title>Delete Pet Profile - Furever</title>
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
		<h1>Are you sure you want to delete?</h1>
		<form action="confirm-delete-pet.php" method="POST">
			<input type="hidden" value="<?php echo($row["id"]); ?>" name="id"/>
			<input type="submit" value="Confirm"/>
		</form>
		<a href="pet-profile.php?id=<? echo($row["id"]);?>">Cancel</a>
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
<?php } ?>