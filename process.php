<?php
	$name = $_POST["name"];
	$email = $_POST["email"];
	$message = $_POST["message"];
	 
	$EmailTo = "aaron.alexander.hill@gmail.com";
	$Subject = "Hi Aaron!";
	 
	
	$Body .= "Name: ";
	$Body .= $name;
	$Body .= "\n"; 
	 
	$Body .= "Email: ";
	$Body .= $email;
	$Body .= "\n";
	 
	$Body .= "Message: ";
	$Body .= $message;
	$Body .= "\n";
	 
	$success = mail($EmailTo, $Subject, $Body, "From:".$email);
	 
	if ($success){
	   echo "success";
	}else{
	    echo "invalid";
	} 
?>