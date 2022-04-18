<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
		<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
		<link href="style.css" rel="stylesheet">
        <title>Login page</title>
    </head>
    <body class="body-style">
		<nav class="navbar">
			<div class="brand-title">CV website</div>
			<div class="navbar-links">
				<ul>
					<li><a href="index.php">Home</a></li>
					<li><a href="register_form.php">Register Now!</a></li>
				</ul>
			</div>
		</nav>
		<h1>Aston CV website!</h1> <br><br>
        <h2>Login to you account</h2> <br>
        <form action="login_form.php" method="post" class="login">
            <label>Username: </label>
            <input require type="text" name="username" size="15" maxlength="25"/> <br><br>
            <label>Password:</label>
            <input require type="password" name="password" size="15" maxlength="25"/> <br><br>
            <input type="submit" value="Login"/>
            <input type="reset" value="Clear"/>
            <input type="hidden" name="submitted" value="TRUE"/>
			<br><br>
            <p>Not registered yet? <a href="register_form.php">Register</a></p>
        </form>
    </body>
</html>

<?php
	//if the form has been submitted
	if (isset($_POST['submitted'])){
		if ( !isset($_POST['username'], $_POST['password']) ) {
		// Could not get the data that should have been sent.
		 exit('Please fill both the username and password fields!');
	    }
		// connect DB
		require_once ("connectdb.php");
		try {
		//Query DB to find the matching username/password
		//using prepare/bindparameter to prevent SQL injection.
			$stat = $db->prepare('SELECT password FROM cvs WHERE name = ?');
			$stat->execute(array($_POST['username']));
		    
			// fetch the result row and check 
			if ($stat->rowCount()>0){  // matching username
				$row=$stat->fetch();

				if (password_verify($_POST['password'], $row['password'])){ //matching password
					
					//??recording the user session variable and go to loggedin page?? 
				  session_start();
					$_SESSION["username"]=$_POST['username'];
					header("Location:index.php");
					exit();
				
				} else {
				 echo "<p style='color:red'>Error logging in, password does not match </p>";
 			    }
		    } else {
			 //else display an error
			  echo "<p style='color:red'>Error logging in, Username not found </p>";
		    }
		}
		catch(PDOException $ex) {
			echo("Failed to connect to the database.<br>");
			echo($ex->getMessage());
			exit;
		}

  }
?>