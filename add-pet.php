<?php 
session_start();

if($_SESSION['logged-in'] == false || $_SESSION['role'] == NULL){
	header("Location: front.php");
} else{

$dsn = "mysql:host=localhost;dbname=wysockca_adoption_app;charset=utf8mb4";
$dbusername = "wysockca";
$dbpassword = "sxRaM*y74c4";

$pdo = new PDO($dsn, $dbusername, $dbpassword);
?>

<!DOCTYPE html>
<html>
<head>
	<title>Create a Pet Profile - Furever</title>
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
		<h1>Create a Pet Profile</h1>
		<form action="process-pet.php" enctype="multipart/form-data" method="POST">
			<div class="row1">
				<label>Name:</label>
				<input type="text" name="name">
			</div>
			<div class="row2">
				<label>Image:</label>
				<input type="file" name="image">
			</div>
			<div class="row3">
				<label>About:</label>
				<textarea name="about"></textarea>
			</div>
			<div class="row4">
				<label>Age:</label>
				<input type="date" name="age">
			</div>
			<div class="row5">
				<label>Sex:</label>
				<input type="radio" name="sex" value="Female">Female
				<input type="radio" name="sex" value="Male">Male
			</div>
			<div class="row6">
				<label>Animal:</label>
				<input type="radio" name="animal" value="Cat">Cat
				<input type="radio" name="animal" value="Dog">Dog
				<input type="radio" name="animal" value="Small Animal">Small Animal
			</div>
			<div class="row7">
				<label>Breed:</label>
				<input type="text" name="breed">
			</div>
			<div class="row8">
				<label>Colour:</label>
				<input type="text" name="color">
			</div>
			<div class="row9">
				<label>Size:</label>
				<input type="radio" name="size" value="Small">Small
				<input type="radio" name="size" value="Medium">Medium
				<input type="radio" name="size" value="Large">Large
			</div>
			<div class="row10">
				<label>Spayed/Neutered:</label>
				<input type="radio" name="neutered" value="Yes">Yes
				<input type="radio" name="neutered" value="No">No
			</div>
			<div class="row11">
				<label>Declawed:</label>
				<input type="radio" name="declawed" value="Yes">Yes
				<input type="radio" name="declawed" value="No">No
			</div>
			<div class="row12">
				<label>Are they good with kids?</label>
				<input type="radio" name="kids" value="Yes">Yes
				<input type="radio" name="kids" value="No">No
			</div>
			<div class="row13">
				<label>Are they good with other animals?</label>
				<input type="radio" name="otherPets" value="Yes">Yes
				<input type="radio" name="otherPets" value="No">No
			</div>
			<div class="row14">
				<label>Energy level:</label>
				<input type="radio" name="energy" value="Energetic">Energetic
				<input type="radio" name="energy" value="Average">Average
				<input type="radio" name="energy" value="Lazy">Lazy
			</div>
			<div class="row15">
				<label>Dependency:</label>
				<input type="radio" name="dependency" value="Independant">Independent
				<input type="radio" name="dependency" value="Social">Social
				<input type="radio" name="dependency" value="Dependant">Dependant
			</div>
			<div class="row16">
				<label>Shelter:</label>
				<select name="shelter_id">
					<option value="1">Burlington Humane Society</option>
					<option value="2">Oakville & Milton Humane Society</option>
					<option value="3">Hamilton Burlington SPCA</option>
					<option value="4">Mississauga Animal Services</option>
					<option value="5">Toronto Humane Society</option>
				</select>
			</div>
			<div class="row17">
				<input type="submit" value="Submit">
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
<?php } ?>