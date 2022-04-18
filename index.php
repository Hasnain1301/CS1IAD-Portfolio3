<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
	<link href="style.css" rel="stylesheet">
	<title>Main page</title>
</head>
<body class="body-style">
	<nav class="navbar">
		<div class="brand-title">CV website</div>
		<div class="navbar-links">
			<ul>
			<?php
			session_start();
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

	<?php
		if(isset($_SESSION['username'])) {

		$username=$_SESSION['username'];
		echo "<h2> Welcome to Aston CVs ".$_SESSION['username']."! </h2>";
		}
	?>

	<form action="search.php" method="POST" id="search">
        <div class="boxContainer">
            <table class="elementsCont">
                <tr>
                    <td>
                        <input type="text" placeholder="Search" class="Search" name="search">
                    </td>
                    <td>
                        <button id="search" name="submitted" class="buttons"><i class="material-icons">search</i></button>
                    </td>
                </tr>
            </table>
        </div>
    </form>

	<br>

	<h2>All CV's</h2>
	<?php
		require_once ('connectdb.php');  
		try {

			$query="SELECT  * FROM  cvs ";

			$rows =  $db->query($query);
			
			if ( $rows && $rows->rowCount()> 0) {
			
			?>	
		<table cellspacing="0"  cellpadding="5" class="table" >
		  <tr><th align='left'><b>Name</b></th>
		  <th align='left'><b>Email</b></th>
		  <th align='left'><b>Key programming language</b></th></th>
		  <th align='left'><b>Profile</b></th></th>
		  <th align='left'><b>Education</b></th></th>
		  <th align='left'><b>URLlinks</b></th>
		  <th align='left'><b>View full cv details</b></th></tr>
			<?php
			
				while  ($row =  $rows->fetch())	{
					echo  "<tr><td align='left'>" . $row['name'] . "</td>";
					echo  "<td align='left'>" . $row['email'] . "</td>";
					echo  "<td align='left'>" . $row['keyprogramming'] . "</td>";
					echo  "<td align='left'>" . $row['profile'] . "</td>";
					echo  "<td align='left'>" . $row['education'] . "</td>";
					echo "<td align='left'>". $row['URLlinks'] . "</td>";
					echo "<td align='left'><a href='cv_details.php?id=" . $row['id'] . "'" . "class='btn btn-secondary'>View</a></td></tr>\n";
				}
				echo  '</table>';
			}
			else {
				echo  "<p>No CV's in the list.</p>\n"; 
			}
		}
		catch (PDOexception $ex){
			echo "Sorry, a database error occurred! <br>";
			echo "Error details: <em>". $ex->getMessage()."</em>";
		}
	?>

	<br><br><br><br>
</body>
</html>
