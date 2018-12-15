<?php 
session_start();

$id = $_SESSION['id'];

$dsn = "mysql:host=localhost;dbname=wysockca_adoption_app;charset=utf8mb4";
$dbusername = "wysockca";
$dbpassword = "sxRaM*y74c4";

$pdo = new PDO($dsn, $dbusername, $dbpassword);

$stmt = $pdo->prepare("SELECT * FROM `user` WHERE `id` = '$id'");
$stmt->execute();
$row = $stmt->fetch();

$stmt2 = $pdo->prepare("SELECT * FROM `shelter` WHERE `id` = '$id'");
$stmt2->execute();
$row2 = $stmt2->fetch();

$stmt3 = $pdo->prepare("SELECT `pet-profile`.`id`, `pet-profile`.`name`, `pet-profile`.`age`, `pet-profile`.`sex`, `pet-profile`.`breed`, `pet-profile`.`image`, `pet-profile`.`shelter_id` FROM `pet-profile`INNER JOIN `shelter`ON `pet-profile`.`shelter_id` = `shelter`.`id` WHERE `shelter`.`id` = '$id'");
$stmt3->execute();
$row3 = $stmt3->fetch();

$stmt4 = $pdo->prepare("SELECT `likes`.`id`, `likes`.`pet_id`, `likes`.`user_id`, `pet-profile`.`name`, `pet-profile`.`age`, `pet-profile`.`sex`, `pet-profile`.`breed`, `pet-profile`.`image` FROM `likes` INNER JOIN `pet-profile` ON `likes`.`pet_id` = `pet-profile`.`id` WHERE `likes`.`user_id` = '$id'");
$stmt4->execute();
?>

<!DOCTYPE HTML>
<html>
<head>
	<title>My Profile - Furever</title>
	<meta charset="UTF-8" />

	<meta name="description" content="Bringing animal loves and pets in need of homes together. Pet adoption website.">
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
	<main id="profilePg">
		<?php if($_SESSION['role'] == shelter){?>
		<section id="shelterProfile">
			<img src="assets/<?php echo($row2["image"]);?>" />
			<div class="nameRow">
				<h1><?php echo($row2["shelterName"]);?></h1>
			</div>
			<a href="edit-shelter.php?id=<?php echo($row2["id"]);?>" class="editBtn">Edit Profile</a>
			<h3>Contact Information</h3>
			<div id="contactInfo">
				<h4>Address:</h4>
				<p><?php echo($row2["street"]);?>,</p> 
				<p><?php echo($row2["city"]);?>, ON <?php echo($row2["postalcode"]);?></p>
				<h4>Phone:</h4>
				<p><?php echo($row2["phone"]);?></p>
				<h4>Email:</h4>
				<p><a href="mailto:<?php echo($row2["email"]);?>"><?php echo($row2["email"]);?></a></p>
			</div>
		</section>
		<section id="shelterPets">
			<h1>Pets for Adoption at <?php echo($row2["shelterName"]);?></h1>
			<?php
			while($row3 = $stmt3->fetch()) {
			?>
			<div class="pet">
				<img src="assets/<?php echo($row3["image"]);?>" />
				<div class="info">
					<h2><?php echo($row3["name"]);?></h2>
					<p><?php echo($row3["sex"]);?>, <?php echo($row3["breed"]);?></p>
				</div>
				<div id="petChanges">
					<a href="pet-profile.php?id=<?php echo($row3["id"]);?>">My Profile</a>
					<a href="edit-pet.php?id=<?php echo($row3["id"]);?>" style="background-color: #ffbe40;">Edit</a>
					<a href="delete-pet.php?id=<?php echo($row3["id"]);?>" style="background-color: #ffbe40;">Remove</a>
				</div>
			</div>
			<?php } ?>
			<a href="add-pet.php">Add New Pet</a>
		</section>

		<?php } else{ ?>
		<section id="userProfile">
			<img src="assets/<?php echo($row["image"]);?>" />
			<div class="nameRow">
				<h1><?php echo($row["firstName"]);?> <?php echo($row["lastName"]);?></h1>
				<h3><?php echo($row["username"]);?></h3>
			</div>
			<a href="edit-user.php?id=<?php echo($row["id"]);?>" class="editBtn">Edit Profile</a>
			<h2>About me</h2>
			<div class="infoColA">
				<h4>Location:</h4>
				<p><?php echo($row["location"]);?></p>
				<h4>I'm looking for:</h4>
				<?php if($row["cat"] == 1){ ?>
					<p>Cat</p>
				<?php } ?>
				<?php if($row["dog"] == 1){ ?>
					<p>Dog</p>
				<?php } ?>
				<?php if($row["smallAnimal"] == 1){ ?>
					<p>Small Animal</p>
				<?php } ?>
				<h4>My lifestyle:</h4>
				<p><?php echo($row["lifestyle"]);?></p>
			</div>
			<div class="infoColB">
				<h4>Am I away from home a lot?</h4>
				<p><?php echo($row["away"]);?></p>
				<h4>My home is:</h4>
				<p><?php echo($row["homeSize"]);?></p>
				<h4>Do I live on a farm?</h4>
				<p><?php echo($row["farm"]);?></p>
			</div>
			<div class="infoColC">
				<h4>Do I have any kids?</h4>
				<p><?php echo($row["kids"]);?></p>
				<h4>Do I have any other pets?</h4>
				<p><?php echo($row["otherPets"]);?></p>
			</div>
		</section>
		<section id="matches">
			<h1>Pets I Love</h1>
			<?php
			while($row4 = $stmt4->fetch()) {
			?>
			<div class="pet">
				<img src="assets/<?php echo($row4["image"]);?>" />
				<div class="info">
					<h2><?php echo($row4["name"]);?></h2>
					<p><?php echo($row4["sex"]);?>, <?php echo($row4["breed"]);?></p>
				</div>
				<a href="pet-profile.php?id=<?php echo($row4["pet_id"]);?>">My Profile</a>
			</div>
			<?php } ?>
		</section>
		<?php } ?>
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