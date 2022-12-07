
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" type="text/css" href="style2.css">
  <title>SoilApp</title>
</head>
<body>
  <header>
  <div class="header__title">SoilApp</div>
  <a class="header__icon" href="#"><i class="fa fa-bars"></i></a>
</header>
<nav>
  <a class="nav__item" href="#"><i class="fa fa-bell"></i></a>
  <a class="nav__item" href="#"><i class="fa fa-envelope"></i></a>
  <a class="nav__item nav__item--last-left" href="#"><i class="fa fa-gear"></i></a>
  <a class="nav__item" href="#"><i class="fa fa-search"></i></a>
  <a class="nav__item" href="#"><i class="fa fa-rocket"></i></a>
</nav>
<main>
  <div class="content-title">
    <h2>Overview</h2><i class="fa fa-angle-right"></i>
    <div class="filter">
      <a class="filter__item">today</a>
      <a class="filter__item">month</a>
      <a class="filter__item">year</a>
    </div>
    <button>Log out</button>
  </div>
  <div class="pill-wrapper">
    <div class="pill">
      <i class="pill__icon fa fa-user"></i>
      <div class="pill__detail">View Detail</div>
      <div class="pill__content">
        <div class="pill__date">//today</div>
        <div class="pill__title">
          <a style="color: white;" href="soil.txt">Overall Soil Moisture</a>
        </div>
        <div class="pill__value">1231</div>        
      </div>
    </div>

    <div class="pill">
      <i class="pill__icon fa fa-user"></i>
      <div class="pill__detail">View Detail</div>
      <div class="pill__content">
        <div class="pill__date">//today</div>
        <div class="pill__title">Overall Soil Moisture Percentage</div>
        <div class="pill__value">1446</div>        
      </div>
    </div>

    <div class="pill">
      <i class="pill__icon fa fa-user"></i>
      <div class="pill__detail">View Detail</div>
      <div class="pill__content">
        <div class="pill__date">//today</div>
        <div class="pill__title">Overall Growth</div>
        <div class="pill__value">65%</div>        
      </div>
    </div>    
  </div>
  <div class="content-title">
    <h2>Secondary</h2><i class="fa fa-angle-right"></i>
  </div>
  <div class="chart">
    <h3>Soil Moisture</h3>
  </div>
  
  <div class="circle-chart">
    <h3>Daily Moisture Levels</h3>
    <div class="circle-chart__content">
      <div class="circle"></div>
      <div class="legend">
        <div class="legend__item">
          <div class="legend__icon legend__icon--blue">   </div>
          Moisture
        </div>
        <div class="legend__item">
          <div class="legend__icon legend__icon--orange"></div>
          Water
        </div>       
      </div>
    </div>
  </div>
  <div class="circle-chart">
    <h3>Productivity</h3>
    <div class="circle-chart__content">
      <div class="circle"></div>
      <div class="legend">
        <div class="legend__item">
          <div class="legend__icon legend__icon--blue">   </div>
          Safe
        </div>
        <div class="legend__item">
          <div class="legend__icon legend__icon--orange"></div>
          Low Risk
        </div>        
        <div class="legend__item">
          <div class="legend__icon legend__icon--red"></div>
          Risk
        </div>        
      </div>
    </div>
  </div>
</main>

<aside>
  <a href="#">Home</a>
  <a href="login.html">Login</a>
  <a href="registration.html">Register</a>
</aside>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css"> 
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
                <li><a href="login.html">Login</a></li>
                <li><a href="registration.html">registration</a></li>
                <li><a href="soil.txt">Soil Moisture</a></li>
            </ul>
            <h1 class="logo">SoilApp</h1>
        </div>
    </nav>

</body>
</html>
