<?php

$name 		= $_POST['name'];
$email 		= $_POST['email'];
$telephone 	= $_POST['telephone'];
$msg 		= $_POST['message'];

$msg = "Έχετε ένα νέο μήνυμα από:<br><br>Ονοματεπώνυμο: " . $name . "<br><br>Email: " . $email . "<br><br>Τηλέφωνο: " . $telephone . "<br><br>" . $msg;

$headers  = "MIME-Version: 1.0" . "\r\n";
$headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";
$headers .= 'From: <'.$email.'>' . "\r\n";

if (!mail("iatrikhpatrakat@gmail.com","Επικοινωνία από σελίδα Κατατακτήριες Ιατρικής Πάτρας", $msg, $headers)) {
	echo 'Υπήρξε πρόβλημα με το διακομιστή. Το μήνυμά σας δεν εστάλη. Ξαναπροσπαθήστε.';
} else {
	echo 'Το μήνυμά σας εστάλη επιτυχώς.';
}

?>