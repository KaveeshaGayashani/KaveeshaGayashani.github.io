<?php 
	require_once('Connect.php'); 
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
		<a class="active">Add Projects</a>
		<a href="View.php">View Projects</a>
	</div>
	
	<div class="menuVer">
		<a href="Home.html">Home</a>
		<a href="Details.html">Personal Details</a>
		<a href="Projects.html">Projects</a>
		<a href="Achievements.html">Achievements</a>
        <a href="Contact.php">Contacts</a>
		<a class="active">Add Projects</a>
		<a href="View.php">View Projects</a>
	</div>

	<div class="content">
	
        <h2>Add New Project</h2>
        <form action="" method="POST">
            <label for="title">Title:&emsp;&emsp;&emsp;&emsp;</label>
            <input type="text" id="title" name="title"><br><br>

            <label for="subject">Subject Area:&nbsp;</label>
            <input type="text" id="subject" name="subject"><br><br>
          
            <label for="description">Description:&emsp;</label>
            <textarea id="description" name="description"></textarea><br><br>
          
            <input type="submit" value="Add" name="add_project">
        </form>
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

<?php
	if(isset($_POST['add_project'])){

	$sql = "INSERT INTO project (title,subject,description) VALUES ('".$_POST['title']."','".$_POST['subject']."','".$_POST['description']."')";

	$result = mysqli_query($connection,$sql);

	if($result){
		echo"<script> alert('Added Sucessfully') </script>";
}
	else{
		echo"<script> alert('Failed') </script>";
}

}

?>
