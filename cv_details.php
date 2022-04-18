<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link href="style.css" rel="stylesheet">
    <title>CV details page</title>
</head>
<body class="body-style">
    <nav class="navbar">
		<div class="brand-title">CV website</div>
		<div class="navbar-links">
			<ul>
            <?php
				if(isset($_SESSION['username'])) {

					echo "<li><a href='index.php'>Home</a></li>";
					echo "<li><a href='update_cv.php'>Update your CV</a></li>";
					echo "<li><a href='logout.php'>Log out</a></li>";

				} else {
					echo "<li><a href='index.php'>Home</a></li>";
					echo "<li><a href='register_form.php'>Create a account now!</a></li>";
					echo "<li><a href='login_form.php'>Login now</a></li>";
				}
			?>
			</ul>
		</div>
	</nav>
    <table cellspacing="0"  cellpadding="5" class="table" >
	<tr><th align='left'><b>Name</b></th>
    <th align='left'><b>Email</b></th>
    <th align='left'><b>Key programming language</b></th></th>
    <th align='left'><b>Profile</b></th></th>
    <th align='left'><b>Education</b></th></th>
    <th align='left'><b>URLlinks</b></th></tr>
    <?php
        require_once ('connectdb.php');

        if(isset($_GET['id'])) {
            $cvID = $_GET['id'];
            $sql = "SELECT * FROM cvs where id = :id";
            $stmt = $db->prepare($sql);
            $stmt->bindparam(':id', $cvID);
            $stmt->execute();
            $result = $stmt->fetch();
        } else {
            echo "Error";
        }
		echo  "<tr><td align='left'>" . $result['name'] . "</td>";
		echo  "<td align='left'>" . $result['email'] . "</td>";
		echo  "<td align='left'>" . $result['keyprogramming'] . "</td>";
		echo  "<td align='left'>" . $result['profile'] . "</td>";
		echo  "<td align='left'>" . $result['education'] . "</td>";
		echo "<td align='left'>". $result['URLlinks'] . "</td>";
    ?>

    <p>Back to all CV's <a href="index.php">Back to home</a></p>

</body>
</html>


