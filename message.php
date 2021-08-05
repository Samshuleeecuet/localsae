<?php

$fname = $_POST['firstName'];
$lname = $_POST['lastName'];
$email = $_POST['email'];
$phone = $_POST['phone'];
$webdesign = $_POST['webdesign'];
$webdevelopment = $_POST['webdevelopment'];
$gamedevelopment = $_POST['gamedevelopment'];
$softwaredevelopment = $_POST['softwaredevelopment'];
$dataanalysis = $_POST['dataanalysis'];
$other= $_POST['other'];
$message= $_POST['message'];


$to = "samshuleeeweb@gmail.com";

$subject = "Mail From Website by". $fname . $lname ;

$txt = " Fast Name: ". $fname . "\r\n Last Name: ". $lname ."\r\n Email: ". $email . "\r\n Phone: ". $phone ."\r\n What the type of work do you need? \r\n"
        . $webdesign . $webdevelopment . $softwaredevelopment . $gamedevelopment . $dataanalysis . $other ."\r\n Message: ". $message ;

$headers = "From: samshul2001@gmail.com" . "\r\n ". "CC: samshul1101@gmail.com";

if($email != NULL){
    mail($to,$subject,$txt,$headers);
}

header("Location:contact.php");

?>