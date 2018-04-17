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

	$message     	= "Sehr geehrte Damen und Herren, \nVielen Dank für Ihre Anmeldung zum food club Event vom 19.-20. September 2018 in Quarkenbrück. \n Bei Fragen oder Anregungen stehen wir Ihnen jederzeit zur Verfügung. \n \nVorname: $fname, \nNachname: $lname, \nEmail: $email, \nTelefon: $cell, \nAddress: $address, \nPLZ: $zip, \nStadt: $city, \nFirma: $company, \nKommentar: $comments, \n  \nMit freundlichen Grüßen, \nDas Food Club Team";
	
	$headers  = "From: Food Club DE < contact@food-club.de >\n";
    $headers .= "Cc: " .$email. "\n"; 
	$headers .= "BCc: Thierry Ollivero < thierry.ollivero@airliquide.com >\n\n";
    $headers .= "X-Sender: Food Club DE < contact@food-club.de >\n";
    $headers .= 'X-Mailer: PHP/' . phpversion();
    $headers .= "X-Priority: 1\n"; // Urgent message!
    $headers .= "Return-Path: contact@food-club.de\n"; // Return path for errors
    $headers .= "MIME-Version: 1.0\r\n";
   
	
	if(mail('thierry.ollivero@gmail.com', "Participation to the Food Club", $message, $headers))
		$form_data['success'] = true;
	else
		$form_data['success'] = false;

	echo json_encode($form_data);
	return;
?>