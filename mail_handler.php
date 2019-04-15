<?php
	if(isset($_POST['SendYourMessage'])){
		$name=$_POST['YourName'];
		$email=$_POST['YourEMail'];
		$phone=$_POST['YourPhone'];
		$msg=$_POST['YourMessage'];

		$to='madhavsajjala@gmail.com'; // Receiver Email ID, Replace with your email ID
		$subject='Form Submission';
		$message="Name :".$YourName."\n"."Phone :".$YourPhone."\n"."Wrote the following :"."\n\n".$YourMessage;
		$headers="From: ".$YourEMail;

		if(mail($to, $subject, $message, $headers)){
			echo "<h1>Sent Successfully! Thank you"." ".$YourName.", We will contact you shortly!</h1>";
		}
		else{
			echo "Something went wrong!";
		}
	}
?>