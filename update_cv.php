<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link href="style.css" rel="stylesheet">
    <title>Update your CV</title>
</head>
<body class="body-style">
    <nav class="navbar">
		<div class="brand-title">CV website</div>
		<div class="navbar-links">
			<ul>
				<li><a href="index.php">Home</a></li>
                
				<li><a href="logout.php">Log out</a></li>
			</ul>
		</div>
	</nav>
    <h1>Update your CV</h1>

    <br><br> 

    <form action="update_cv.php" method="POST">
        <p>Username: <input type="text" name="username"/></p> <br>
        <p>Email: <input type="text" name="email"/></p> <br>
        <p>Key programming language: <input type="text" name="keyprogramming"/></p> <br>
        <p>Profile: <input type="text" name="profile"/></p> <br>
        <p>Education: <input type="text" name="education"/></p> <br>
        <p>URLlinks: <input type="url" name="URLlinks"/></p> <br>

        <input type="submit" name="Update" value="Update" class="btn btn-secondary">
    </form>
</body>
</html>

<?php
    include('connectdb.php');

    session_start();	

	if (!isset($_SESSION['username'])){
		header("Location: login_form.php");
		exit();
	}

    if(isset($_POST['Update'])) {
        $user = $_SESSION['username'];
        $username = $_POST['username'];
        $email = $_POST['email'];
        $keyprogramming = $_POST['keyprogramming'];
        $profile = $_POST['profile'];
        $education = $_POST['education'];
        $URLlinks = $_POST['URLlinks'];


        $query = "UPDATE cvs set name=:name, email=:email, keyprogramming=:keyprogramming, profile=:profile, education=:education, URLlinks=:URLlinks WHERE name=:username"; 
        $query_run = $db->prepare($query);
        $execute = $query_run->execute(array(":name"=>$username, ":email"=>$email, ":keyprogramming"=>$keyprogramming, ":profile"=>$profile, ":education"=>$education, ":URLlinks"=>$URLlinks, ":username"=>$user));

        echo "<br>"; 

        if($execute) {
            echo "CV details updated";
        } else {
            echo "CV details not updated";
        }
    }

    echo "<br><br><br>";

?>