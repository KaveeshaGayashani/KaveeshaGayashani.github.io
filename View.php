<?php 
	require_once('Connect.php'); 
?>

<!DOCTYPE html>
<html>
<?php
	$sql = "SELECT * FROM project";
	mysqli_query($connection, $sql);
	$result = mysqli_query($connection,$sql);

	if($result){
	//echo "Sucessfull";
	}
	else{
	echo"failed";	
	}
?>

<!DOCTYPE html>
<html>
<head>
	<title>My Portfolio</title>
	<link rel="stylesheet" type="text/css" href="Styles.css" />
</head>
<body>

	<div class="header">
		<img src="Klogo.png" alt="My Logo"><h1>My Portfolio</h1>
	</div>
	

	<div class="menu">
		<a href="Home.html">Home</a>
		<a href="Details.html">Personal Details</a>
		<a href="Projects.html">Projects</a>
		<a href="Achievements.html">Achievements</a>
        	<a href="Contact.php">Contacts</a>
		<a href="AddProjects.php">Add Projects</a>
        	<a class="active">View Projects</a>

	</div>
	
	<div class="menuVer">
		<a href="Home.html">Home</a>
		<a href="Details.html">Personal Details</a>
		<a href="Projects.html">Projects</a>
		<a href="Achievements.html">Achievements</a>
        	<a href="Contact.php">Contacts</a>
		<a href="AddProjects.php">Add Projects</a>
        	<a class="active">View Projects</a>
	</div>

	<div class="content">
	
        <h2>Projects</h2>
            <table border="1" class="table2">
            <tr>
                <th>Title</th>
                <th>Subject Area</th>
                <th>Description</th>
            </tr>
            <?php
            while($row=mysqli_fetch_assoc($result)){
            ?>
            
            <tr>
                <td><?php echo $row['title'] ?></td>
                <td><?php echo $row['subject'] ?></td>
                <td><?php echo $row['description'] ?></td>
            </tr>
            <?php
            }
            ?>
            </table>
            
	</div>
	
	<div class="footer">
	<br>
	<p>&emsp;<a href="https://www.facebook.com/login/"><img src="facebook.png" alt="Facebook"></a>
	&emsp;<a href="https://www.instagram.com/accounts/login/"><img src="instagram.png" alt="Instagram"></a>
	&emsp;<a href="https://twitter.com/login"><img src="twitter.png" alt="Twitter"></a>
	&emsp;Contact Number: 071-1234567 &emsp; Email: kgsportfolio1234@gmail.com
	</p>

	</div>
	
	
</body>
</html>
