<?php 
session_start();
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

$f_name=$_POST['f_name'];
$l_name=$_POST['l_name'];
$email = $_POST['email'];
$password = $_POST['password'];
$phone = $_POST['phone'];
if (isset($_POST['register'])) {
	// code...

$sql = "INSERT INTO VALUES(f_name,l_name,email,password,phone), ($f_name,$l_name,$email,$password,$phone)";

if ($conn->connect_error) {
	// code...
	die("Connection Failed!!!".$conn->connect_error);
}

if ($conn->query($sql) === True) {
	// code...
	echo "New user added!!!";
	$_SESSION['username'] = $username;
  $_SESSION['success'] = "Registration is successful!!!";
}
else{
	"User could not be added";
}
}


 ?>