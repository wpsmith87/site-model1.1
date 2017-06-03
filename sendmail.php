<?php
$EmailFrom="wpsmith87@gmail.com";
$EmailTo="wpsmith87@gmail.com";
$Subject="Email from the Contact Form";
$name=Trim(stripslashes($_POST['name']));
$email=Trim(stripslashes($_POST['email']));
$message=Trim(stripslashes($_POST['message']));
// simple way to validate the form
$ValidationOk=true;
if ($name=="" || $email="") $ValidationOk=false;
	if (!$ValidationOk) {
		echo "<meta http-equiv=\"refresh\" content=\"0;URL=ContactMe\error.html\">";
		exit;
	}
		
		// preparing the body of the email 
	$Body="";
	$Body.="Name ";
	$Body.=$name;
	$Body.="\n";
	$Body.="Email ";
	$Body.=$email;
	$Body.="\n";
	$Body.="Message ";
	$Body.=$message;
	$Body.="\n";
	//sending the email now
	$success=mail($EmailTo, $Subject, $Body, $EmailFrom);
	//redirect after mail send 
	if ($success) {
 
       print "<meta http-equiv=\"refresh\" content=\"0;URL=send.html\">";
	}
	else {
		print "<meta http-equiv=\"refresh\" content=\"0;URL=error.html\">";

	}

	mail($EmailTo, $Subject, $Body, $EmailFrom);
?>