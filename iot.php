<?php 
	
	$data = $_POST['data'];
	echo "Soil moisture level is:".$data;
	$soil="Soil moisture level is:".$data;
	$files = file_put_contents('soil.txt', $soil);

 ?>

 //GET /iot.php HTTP/1.1\r\nHost: soilapp.herokuapp.com\r\n\r\n
 //POST /iot.php HTTP/1.1\r\nHost: esp8266.allaboutee.com\r\nContent-Type: application/x-www-form-urlencoded\r\nContent-Length: 20\r\n\r\napples=12&oranges=45\r\n\r\n