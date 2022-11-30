<?php 
$servername = "sql6.freemysqlhosting.net";
$username = "sql6582103";
$password = "P521npUsUF";

// Create connection to the database
  $conn = new mysqli($servername, $username, $password);

// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
echo "Connected successfully";


if (isset($_POST['login'])) {
	// code...
	//login part

//login variables
$email = mysqli_real_escape_string($_POST['email']);
$password1 = mysqli_real_escape_string($_POST['password']);

$query = "SELECT * FROM user WHERE email='$email' AND password='$password1'";
$result = mysqli_query($conn,$query);

if (mysqli_num_rows($result) == 1) {
	// code...
			echo "Login Successful";
			$_SESSION['username'] = $email;
  	  $_SESSION['success'] = "You are now logged in";
  	  header('location: index.php');
} else {
	// code...
	echo "Login credentials are wrong"
}

}
 ?>