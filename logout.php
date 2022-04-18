<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
	<link href="style.css" rel="stylesheet">
	<title>Logout page</title>
</head>
<body>
	
</body>
</html>

<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Logout page</title>
</head>
<body class="body-style">
<nav class="navbar">
		<div class="brand-title">CV website</div>
		<div class="navbar-links">
			<ul>
				<li><a href="index.php">Home</a></li>
				<li><a href="login_form.php">Login again!</a></li>
			</ul>
		</div>
	</nav>

	<h1>Logged out now!</h1> 
	<br><br>
 <p>Would like to log in again? <a href="login_form.php">Log in</a></p>
</body>
</html>

<?php
	session_start();
	
	session_destroy();
?>

