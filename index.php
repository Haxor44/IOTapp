<?php 
  session_start(); 

  if (!isset($_SESSION['loggedin'])) {
    $_SESSION['msg'] = "You must log in first";
    header('location: login.php');
  }
  if (isset($_GET['logout'])) {
    session_destroy();
    unset($_SESSION['loggedin']);
    header("location: login.html");
  }
?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="style.css">
    <title>SoilApp</title>
</head>
<body>
    <nav class="navbar">
        <div class="navbar-container container">
            <input type="checkbox" name="" id="">
            <div class="hamburger-lines">
                <span class="line line1"></span>
                <span class="line line2"></span>
                <span class="line line3"></span>
            </div>
            <ul class="menu-items">
                <li><a href="#">Home</a></li>
                <li><a href="login.html">Logout</a></li>
                
                <li><a href="">Moisture</a>  <?php 
    
    $data = $_POST['data'];
    echo "Soil moisture level is:".$data;
 

 ?></li>
                
            </ul>
            <h1 class="logo">SoilApp</h1>
        </div>
    </nav>
    <main>
      
    </main>
</body>
</html>
