<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>Send OTP</title>
</head>
<body>

<div class="sendotp cointainer" style="position:relative;top:200px;line-height:60px;left:100px;">

    <div class="error"></div>
    <div class="success"></div>
    <form id="frm-mobile-verification" action="otpprocess.php" method="post" >
        <div class="col-6">
            <label>Enter Your Mobile Number to Sent OTP</label>		
        </div>

        <div class="col-6">
            <input type="number" name="phone" id="phone" class="form-input form-control" placeholder="Enter Phone Number">		
        </div>

        <div class="col-12">
            <button id="sendotp" name="sendotp" type="submit" class="btnsendotp btn btn-primary" value="Send OTP" onClick="sendOTP();">Send OTP</button>		
        </div>
    </form>

</div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>
</html>

<?php

//Your authentication key
$authKey = "YourAuthKey";

//Sender ID,While using route4 sender id should be 6 characters long.
$senderId = "102234";

if(isset($_POST['sendotp']))

{

    $mobileNumber=$_POST['phone']; 

    //Your message to send, Add URL encoding here.
    $message = urlencode("Test message");

    //Prepare you post parameters
    $postData = array(
        'authkey' => $authKey,
        'mobiles' => $mobileNumber,
        'message' => $message,
        'sender' => $senderId,
        'route' => $route
);

//API URL
$url="http://api.msg91.com/api/sendhttp.php";
}



?>