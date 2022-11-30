<?php


// connect to the database
$db = mysqli_connect('sql6.freemysqlhosting.net', 'sql6582103', 'P521npUsUF', 'sql6582103');

// REGISTER USER
if (isset($_POST['register'])) {
  // receive all input values from the form
  $f_name = mysqli_real_escape_string($db, $_POST['f_name']);
  $l_name = mysqli_real_escape_string($db, $_POST['l_name']);
  $email = mysqli_real_escape_string($db, $_POST['email']);
  $password_1 = mysqli_real_escape_string($db, $_POST['password']);
  $phone = mysqli_real_escape_string($db, $_POST['phone']);

  


  // Finally, register user if there are no errors in the form

  	$password = md5($password_1);//encrypt the password before saving in the database
  	$query = "INSERT INTO user (f_name,l_name, email, password,phone) 
  			  VALUES('$f_name','$l_name', '$email', '$password','$phone')";
  	mysqli_query($db, $query);
    echo "User added!!!";
    header('location: login.html');
  
}
?>