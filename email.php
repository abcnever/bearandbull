<?php
	ob_start();	
	if (mail("bearandbullwaterloo@gmail.com","Email From ".$_POST["name"],$_POST["message"]."\n\nReply to ".$_POST["email"])) {		
		ob_end_clean();
		header("Location: http://bearandbull.uwaterloo.ca/contact_email_successful.php");
	}
	else{
		ob_end_clean();
		header("Location: http://bearandbull.uwaterloo.ca/contact_email_fail.php");
	}
?>
