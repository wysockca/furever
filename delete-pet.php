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
	<title>Delete Pet Profile - Furever</title>
	<meta charset="UTF-8" />
</head>
<body>
	<h1>Are you sure you want to delete <?php echo($row["name"]);?>'s profile?</h1>

	<form action="confirm-delete-pet.php" method="POST">
			<input type="hidden" value="<?php echo($row["id"]); ?>" name="id"/>
			<input type="submit" value="Confirm"/>
		</form>
		<a href="">Cancel</a>
</body>
</html>