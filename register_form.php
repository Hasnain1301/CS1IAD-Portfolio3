<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
        <link href="style.css" rel="stylesheet">
        <title>Registration page</title>
    </head>
    <body class="body-style">
    <nav class="navbar">
		<div class="brand-title">CV website</div>
		<div class="navbar-links">
			<ul>
                <li><a href="index.php">Home</a></li>
				<li><a href="login_form.php">Login to your account now!</a></li>
			</ul>
		</div>
	</nav>
    <h1>Register for an account</h1>
    <br><br>
    <form method = "post" action="register_form.php">
        <p>Username: <input required type="text" name="username"/></p> <br>
        <p>Email: <input required type="text" name="email"/></p> <br>
        <p>Password: <input required type="password" name="password"/></p> <br>
        <p>Re-type Password: <input required type="password" name="password"/></p> <br>
        <input type="submit" value="Register"/> 
        <input type="reset" value="Clear all"/>
        <input type="hidden" name="submitted" value="true"/>
    </form>  
    <br><br>
    <p>Already a user?  <a href="login_form.php">Log in</a></p>    
    </body>
</html>


<?php
//if the form has been submitted
if (isset($_POST['submitted'])){
 #prepare the form input

  // connect to the database
  include('connectdb.php');
	
 if(isset($_POST['submitted'])) {
    if(!empty($_POST['username']) && !empty($_POST['password']) && !empty($_POST['email'])) {
        $username = $_POST['username'];
        $password = password_hash($_POST['password'],PASSWORD_DEFAULT);
        $email = $_POST['email'];

    $sql = "INSERT INTO cvs (name, email, password)
    VALUES (:name, :email, :password)";

    $stmt = $db->prepare($sql);

    $stmt->execute(['name' => $username, 'email' => $email, 'password' => $password]);

 }
 $id=$db->lastInsertId();
	echo "Congratulations! You are now registered. Your ID is: $id  ";  
 }
}
?>