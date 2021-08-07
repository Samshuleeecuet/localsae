<?php 

$fname = $_POST['firstName'];
$lname = $_POST['lastName'];
$email = $_POST['email'];
$phone= $_POST['phone'];
$work= $_POST['work'];
$message = $_POST['message'];

$to = 'samshul2001@gmail.com';
$subject = "Message from $fname $lname";
$message = "First Name : $fname \n Last Name : $lname \n Email : $email \n Phone : $phone \n Work_type : $work \n Message: $message ";
$headers = "From: saecontact2021@gmail.com";
if (mail($to, $subject, $message, $headers)) {
   header('location: contact.php');
} else {
   echo "ERROR";
}

?>