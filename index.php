
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="style.css">
    <title>SoilApp</title>
</head>

<body>
    <header>
        <div class="nav-wrapper">
            <div class="logo-container">
                <em>SoilApp</em>
            </div>
            <nav>
                <input class="hidden" type="checkbox" id="menuToggle">
                <label class="menu-btn" for="menuToggle">
                    <div class="menu"></div>
                    <div class="menu"></div>
                    <div class="menu"></div>
                </label>
                <div class="nav-container">
                    <ul class="nav-tabs">
                        <li><a href="#">Home</a></li>
                	<li><a href="login.html">Logout</a></li>
                    </ul>
                </div>
            </nav>
        </div>
    </header>
    <div class="center"> 
        <h1>Soil moisture is: <?php 
    
    $data = $_POST['data'];
    echo "Soil moisture level is:".$data;
 

 ?></h1>
    </div> 
</body>
</html>
