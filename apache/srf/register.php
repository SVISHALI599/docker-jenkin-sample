<?php
	require 'conn.php';
	
	if(ISSET($_POST['register'])){
		$firstname = $_POST['firstname'];
		$lastname = $_POST['lastname'];
		$username = $_POST['username'];
		$password = $_POST['passwordd'];
		
		mysqli_query($conn, "INSERT INTO 'user' (firstname, lastname, username, password) VALUES
		($firstname, $lastname, $username, $password);");
		// mysqli_query($conn, "SELECT * FROM 'user';");
		echo "<h3 class='text-success'>User account registered!</h3>";
	}
?>
