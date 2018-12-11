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
			<ul>
				<li>Browse</li>
				<li>Profile</li>
				<li>Login</li>
				<li>Logout</li>
				<li>Sign up</li>
			</ul>
			<div id="search">
			</div>
		</nav>
	</header>
	<main>
		<h1>Create Your Profile</h1>
		<form action="process-user-profile.php" method="POST">
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
			<input type="checkbox" name="cat" value="Cat">Cat
			<input type="checkbox" name="dog" value="Dog">Dog
			<input type="checkbox" name="smallAnimal" value="Small Animal">Small Animal

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

			<input type="submit" value="Submit">
		</form>
	</main>
	<footer>
		<p>&copy;2018 Furever</p>
		<ul>
			<li><a href="">About</a></li>
			<li><a href="">Donate</a></li>
			<li><a href="">Contact Us</a></li>
		</ul>
	</footer>
</body>
</html>