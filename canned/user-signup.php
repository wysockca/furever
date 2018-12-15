<?php ?>

<!DOCTYPE HTML>
<html>
<head>
	<title>Sign Up - Furever</title>
	<meta charset="UTF-8" />
</head>
<body>
	<header>
		<a href=""><img src=""/></a>
		<nav>
			<a>Browse</a>
			<a>Profile</a>
			<a>Login</a>
			<a>Logout</a>
			<a>Sign up</a>
		</nav>
		<div id="search">
		</div>
	</header>
	<main>
		<h1>Sign Up</h1>
		<form action="process-user-signup.php" enctype="multipart/form-data" method="POST">
			<label>First name:</label>
			<input type="text" name="firstName">
			
			<label>Last name:</label>
			<input type="text" name="lastName">
		
			<label>Email:</label>
			<input type="email" name="email">
		
			<label>Username:</label>
			<input type="text" name="username">
		
			<label>Password:</label>
			<input type="password" name="password">

			<label>Profile picture:</label>
			<input type="file" name="image">

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

			<label>What type of pet are you looking for?</label>
			<input type="checkbox" name="cat" value="1">Cat
			<input type="checkbox" name="dog" value="1">Dog
			<input type="checkbox" name="smallAnimal" value="1">Small Animal

			<label>Do you have a move active or sedentary lifestyle?</label>
			<input type="radio" name="lifestyle" value="Active">Active
			<input type="radio" name="lifestyle" value="Sedentary">Sedentary

			<label>Are you away from home a lot for work or other activities?</label>
			<input type="radio" name="away" value="Yes">Yes
			<input type="radio" name="away" value="No">No

			<label>Approximately what size home do you live in?</label>
			<input type="radio" name="homeSize" value="Large">Large
			<input type="radio" name="homeSize" value="Medium">Medium
			<input type="radio" name="homeSize" value="Small">Small

			<label>Do you live on a farm?</label>
			<input type="radio" name="farm" value="Yes">Yes
			<input type="radio" name="farm" value="No">No

			<label>Do you have any children?</label>
			<input type="radio" name="kids" value="Yes">Yes
			<input type="radio" name="kids" value="No">No

			<label>Do you have any other pets?</label>
			<input type="radio" name="otherPets" value="Yes">Yes
			<input type="radio" name="otherPets" value="No">No

			<input type="submit" value="Sign Up">
		</form>
	</main>
	<footer>
		<p>&copy;2018 Furever</p>
		<nav>
			<a href="">About</a>
			<a href="">Donate</a>
			<a href="">Contact Us</a>
		</nav>
	</footer>
</body>
</html>