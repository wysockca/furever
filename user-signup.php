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
		<h1>Sign Up</h1>
		<form action="process-user-signup.php" method="POST">
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

			<input type="submit" value="Sign Up">
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