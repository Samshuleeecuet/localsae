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
            <label>OTP is sent to Your Mobile Number</label>		
        </div>

        <div class="col-6">
            <input type="number" name="otpvalue" id="otpvalue" class="form-input form-control" placeholder="Enter the OTP">		
        </div>

        <div class="col-12">
            <input id="verify" type="submit" class="btnVerify btn btn-primary" value="Verify" onClick="verifyOTP();">		
        </div>
    </form>

</div>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>
</html>