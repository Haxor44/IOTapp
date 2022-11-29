<?php 
	
	$data = $_POST['data'];
	echo "Soil moisture level is:".$data;
	$soil="Soil moisture level is:".$data;
	$files = file_put_contents('soil.txt', $soil);

 ?>

 