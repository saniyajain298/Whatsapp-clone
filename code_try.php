<?php
$to      = 'jsaniya298@gmail.com';
$subject = 'the subject';
$message = 'hello';
$headers = 'From: jsaniya298@gmail.com' . "\r\n" .
    'Reply-To: jronak515@gmail.com' . "\r\n" .
    'X-Mailer: PHP/' . phpversion();
SMTP : smtp.gmail.com;
smtp_port : 25;
$done=mail($to, $subject, $message, $headers);

if($done){
	echo "work done successfully";
}
else{
	echo "try another way";
}

?>
<!DOCTYPE html>
<html>
<head>
	<title>
		
	</title>
</head>
<body>
<h1>done</h1>
</body>
</html>