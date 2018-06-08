<?php

if(isset($_GET["time_first_time_button"])){
	$answer = $_GET["option"];
	if ($answer == '7_50') {	
		header("location: correct.html");	
	}else{
		header("location: incorrect.html");	
	}
}


?>