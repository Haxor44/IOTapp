<?php 
	session_start();
	echo "Baud!!!";
 ?>
 <html>
   <head>
    <title>Soil Moisture App</title>
   <header><h1>soi moisture monitor</h1>
   </header>
    <link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="./adruino.css">
  </head>
  
  <body>
  	<nav><ul><li><a href="login.html">Login</a></li><li><a href="registration.html">Register</a></li></ul></nav>
    
    The graph below represents percentage  of soil moisture in the tested soil against water level in the tested soil.
    
    <!-- graph-->  
   <div id="container" style="width: 70%; height: 60%"></div>
  <div class="wrapper">
		  <h2>Flat & Responsive Percentage Bars</h2>
		  <article>
			    <section class="percentage-bar" data-percent="100%">
				      <div class="title"><span>Item 1</span></div>
				      <div class="bar"></div>
				      <div class="percent">100%</div>
			    </section> 

			    <section class="percentage-bar" data-percent="50%">
				      <div class="title"><span>Item 2</span></div>
				      <div class="bar"></div>
				      <div class="percent">50%</div>
			    </section> 

          <script type="text/javascript">
            
$(document).ready(function() {
  $('.percentage-bar').each(function(){
    $(this).find('.bar').animate({
      width: $(this).attr('data-percent')
    }, 6000);
  });
});
          </script>
     </body>
    </html>
