<?php

	$form_data = [];

	$fname        	= $_POST['fname'];
	$lname        	= $_POST['lname'];
	$email        	= $_POST['email'];
	$cell        	= $_POST['cell'];
	$address    	= $_POST['address'];
	$zip        	= $_POST['zip'];
	$city        	= $_POST['city'];
	$company    	= $_POST['company'];
	$comments    	= $_POST['comments'];

	$message     	= "The following participant has been registered: \n \nFirst Name: $fname, \nLast Name: $lname, \nEmail: $email, \nCell: $cell, \nAddress: $address, \nZip Code: $zip, \nCity: $city, \nCompany: $company, \nComments: $comments, \n \nThank you very much \nThe Air Liquide Organization Team";
	
	$headers  = "From: Thierry Ollivero < thierry.ollivero@airliquide.com >\n";
    $headers .= "Cc: " .$email. "\n"; 
    $headers .= "X-Sender: Thierry Ollivero < thierry.ollivero@airliquide.com >\n";
    $headers .= 'X-Mailer: PHP/' . phpversion();
    $headers .= "X-Priority: 1\n"; // Urgent message!
    $headers .= "Return-Path: thierry.ollivero@airliquide.com\n"; // Return path for errors
    $headers .= "MIME-Version: 1.0\r\n";
   
	
	if(mail('thierry.ollivero@airliquide.com', "Participation to the Food Club", $message, $headers))
		$form_data['success'] = true;
	else
		$form_data['success'] = false;

	echo json_encode($form_data);
	return;
?>