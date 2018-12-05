<?php 
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
	<title>Edit Pet Profile - Furever</title>
	<meta charset="UTF-8" />
	<!-- don't forget metadata ya dingus! -->
</head>
<body>
	<h1>Edit Pet Profile</h1>
	<form action="process-pet.php" enctype="multipart/form-data" method="POST">
		<input type="hidden" value="<?php echo($row["id"]); ?>" name="id"/>
		<label>Name:</label>
		<input type="text" name="name" value="<?php echo($row["name"]); ?>">

		<label>Image:</label>
		<input type="file" name="image" value="<?php echo($row["image"]); ?>">

		<label>About:</label>
		<textarea name="about"><?php echo($row["about"]); ?></textarea>
		
		<label>Age:</label>
		<input type="date" name="age" value="<?php echo($row["age"]); ?>">

		<label>Sex:</label>
		<input type="radio" name="sex" value="Female">Female
		<input type="radio" name="sex" value="Male">Male
		
		<label>Animal:</label>
		<input type="radio" name="animal" value="Cat">Cat
		<input type="radio" name="animal" value="Dog">Dog
		<input type="radio" name="animal" value="Small Animal">Small Animal
		
		<label>Breed:</label>
		<input type="text" name="breed" value="<?php echo($row["breed"]); ?>">
		
		<label>Colour:</label>
		<input type="text" name="color" value="<?php echo($row["color"]); ?>">
		
		<label>Size:</label>
		<input type="radio" name="size" value="Small">Small
		<input type="radio" name="size" value="Medium">Medium
		<input type="radio" name="size" value="Large">Large

		<label>Spayed/Neutered:</label>
		<input type="radio" name="neutered" value="Yes">Yes
		<input type="radio" name="neutered" value="No">No

		<label>Declawed:</label>
		<input type="radio" name="declawed" value="Yes">Yes
		<input type="radio" name="declawed" value="No">No

		<label>Are they good with kids?</label>
		<input type="radio" name="kids" value="Yes">Yes
		<input type="radio" name="kids" value="No">No

		<label>Are they good with other animals?</label>
		<input type="radio" name="otherPets" value="Yes">Yes
		<input type="radio" name="otherPets" value="No">No

		<label>Energy level:</label>
		<input type="radio" name="energy" value="Energetic">Energetic
		<input type="radio" name="energy" value="Average">Average
		<input type="radio" name="energy" value="Lazy">Lazy

		<label>Dependency:</label>
		<input type="radio" name="dependency" value="Independant">Independent
		<input type="radio" name="dependency" value="Social">Social
		<input type="radio" name="dependency" value="Dependant">Dependant

		<input type="submit" value="Submit">
	</form>
</body>
</html>