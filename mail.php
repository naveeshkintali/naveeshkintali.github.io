<?php

if (isset($_POST['submit'])){
	$name= 	$_POST['firstname'] . $_POST['lastname'];
	$company=$_POST['company'];
	$phone=$_POST['phone'];
	$email=$_POST['email'];
	$subject=$_POST['subject'];
	$message=$_POST['message'];

	$to      = 'coolnavesh@gmail.com';
	$message = "
		<html>
		<head>
		<title>Enquiry</title>
		</head>
		<body>
		<p>'".$name."'</p>
		<p>'".$company."'</p>
		<p>'".$phone."'</p>
		<p>'".$email."'</p>
		<p>'".$message."'</p>
		</body>
		</html>
	";
	// Always set content-type when sending HTML email
	$headers = "MIME-Version: 1.0" . "\r\n";
	$headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";

	// More headers
	$headers .= 'From: '.$email.' ' . "\r\n";

	mail($to, $subject, $message, $headers);
}



?>