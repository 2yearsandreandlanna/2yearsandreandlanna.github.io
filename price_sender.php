<?php

	$msg = $_GET["price"];
	$msg = "Hello Andre, Lanna won " . $msg;


	// send email
	mail("eberto.ruiz@pomona.com","Lanna won!",$msg);

?>