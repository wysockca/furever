<?php
$dsn = "mysql:host=localhost;dbname=wysockca_adoption_app;charset=utf8mb4";
$dbusername = "wysockca";
$dbpassword = "sxRaM*y74c4";

$pdo = new PDO($dsn, $dbusername, $dbpassword);
?>

<!DOCTYPE HTML>
<html>
<head>
	<title>Sign Up - Furever</title>
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
		<h1>Sign Up</h1>
		<p>Do you represent an Animal Shelter? <a href="shelter-signup.php">Click Here.</a></p>
		<form class="altForm" action="process-user-signup.php" enctype="multipart/form-data" method="POST">
			<div class="row1">
				<label>First name:</label>
				<input type="text" name="firstName">
			</div>
			<div class="row2">
				<label>Last name:</label>
				<input type="text" name="lastName">
			</div>
			<div class="row3">
				<label>Email:</label>
				<input type="email" name="email">
			</div>
			<div class="row4">
				<label>Username:</label>
				<input type="text" name="username">
			</div>
			<div class="row5">
				<label>Password:</label>
				<input type="password" name="password">
			</div>
			<div class="row6">
				<label>Profile picture:</label>
				<input type="file" name="image">
			</div>
			<div class="row7">
				<label>Location:</label>
				<select name="location">
					<option value="Ajax">Ajax</option>
					<option value="Brampton">Brampton</option>
					<option value="Burlington">Burlington</option>
					<option value="Hamilton">Hamilton</option>
					<option value="Markham">Markham</option>
					<option value="Milton">Milton</option>
					<option value="Mississauga">Mississauga</option>
					<option value="New Market">New Market</option>
					<option value="Oakville">Oakville</option>
					<option value="Oshawa">Oshawa</option>
					<option value="Pickering">Pickering</option>
					<option value="Richmond Hill">Richmond Hill</option>
					<option value="Toronto">Toronto</option>
					<option value="Vaughn">Vaughn</option>
					<option value="Whitby">Whitby</option>
				</select>
			</div>
			<div class="row8">
				<label>What type of pet are you looking for?</label>
				<input type="checkbox" name="cat" value="1">Cat
				<input type="checkbox" name="dog" value="1">Dog
				<input type="checkbox" name="smallAnimal" value="1">Small Animal
			</div>
			<div class="row9">
				<label>Do you have a move active or sedentary lifestyle?</label>
				<input type="radio" name="lifestyle" value="Active">Active
				<input type="radio" name="lifestyle" value="Sedentary">Sedentary
			</div>
			<div class="row10">
				<label>Are you away from home a lot for work or other activities?</label>
				<input type="radio" name="away" value="Yes">Yes
				<input type="radio" name="away" value="No">No
			</div>
			<div class="row11">
				<label>Approximately what size home do you live in?</label>
				<input type="radio" name="homeSize" value="Large">Large
				<input type="radio" name="homeSize" value="Medium">Medium
				<input type="radio" name="homeSize" value="Small">Small
			</div>
			<div class="row12">
				<label>Do you live on a farm?</label>
				<input type="radio" name="farm" value="Yes">Yes
				<input type="radio" name="farm" value="No">No
			</div>
			<div class="row13">
				<label>Do you have any children?</label>
				<input type="radio" name="kids" value="Yes">Yes
				<input type="radio" name="kids" value="No">No
			</div>
			<div class="row14">
				<label>Do you have any other pets?</label>
				<input type="radio" name="otherPets" value="Yes">Yes
				<input type="radio" name="otherPets" value="No">No
			</div>
			<div class="row15">
				<input type="submit" value="Sign Up">
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
</body>
</html>