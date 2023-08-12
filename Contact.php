<?php 
	require_once('Connect.php'); 
?>

<!DOCTYPE html>
<html>
<head>
	<title>My Portfolio</title>
	<link rel="stylesheet" type="text/css" href="Styles.css" />
	<script>
        function validateForm() {
            var name = document.getElementById("name").value;
            var email = document.getElementById("email").value;
            var errorMessages = [];

            if (name === "") {
                errorMessages.push("Name is required");
            } else if (!/^[a-zA-Z\s]+$/.test(name)) {
                errorMessages.push("Only letters and spaces are allowed in the name");
            }

            if (email === "") {
                errorMessages.push("Email is required");
            } else if (!/^\S+@\S+\.\S+$/.test(email)) {
                errorMessages.push("Invalid email format");
            }

            if (errorMessages.length > 0) {
                alert(errorMessages.join("\n"));
                return false; // Prevent form submission
            }
            
            return true; // Allow form submission
        }
    </script>
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
        <a class="active">Contacts</a>
		<a href="AddProjects.php">Add Projects</a>
		<a href="View.php">View Projects</a>
	</div>
	
	<div class="menuVer">
		<a href="Home.html">Home</a>
		<a href="Details.html">Personal Details</a>
		<a href="Projects.html">Projects</a>
		<a href="Achievements.html">Achievements</a>
        <a class="active">Contacts</a>
		<a href="AddProjects.php">Add Projects</a>
		<a href="View.php">View Projects</a>
	</div>

	<div class="content">
	
	<h2>Contact Us</h2>
		<form id="myForm" action="" method="POST" onsubmit="return validateForm()">
			<label for="name">Name:</label>
			<input type="text" id="name" name="name"><br><br>
		
			<label for="email">Email:</label>
			<input type="email" id="email" name="email"><br><br>
		
			<input type="submit" value="Submit" name="submit">
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
	if(isset($_POST['submit'])){

	$sql = "INSERT INTO contact (name,email) VALUES ('".$_POST['name']."','".$_POST['email']."')";

	$result = mysqli_query($connection,$sql);

	if($result){
		echo"<script> alert('Submitted Sucessfully') </script>";
}
	else{
		echo"<script> alert('Failed') </script>";
}

}

?>