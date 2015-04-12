<?php
	$name = $_REQUEST['name2'] ;
	$email = $_REQUEST['email2'] ;
	$message = $_REQUEST['message2'] ;

	mail( "eriedel4@gmail.com", "Feedback Form Results",$message, "From: $email", "From: $name" );
?>