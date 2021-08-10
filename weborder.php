
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>Website Design Order</title>
</head>
<body>
    <div class="title" style="height: 100px; text-align: center; margin-top: 50px;">
        <h3>ORDER PAGE</h3>
    </div>
    <div class="container">
        <form class="row g-3" action="otp.php" method="post">
            <div class="col-md-6">
                <label for="First Name" class="form-label">First Name</label>
                <input type="text" class="form-control" id="First Name" name="fname">
              </div>
              <div class="col-md-6">
                <label for="Last_name" class="form-label">Last Name</label>
                <input type="text" class="form-control" id="Last_name" name="lname">
              </div>
            <div class="col-md-6">
              <label for="email" class="form-label">Email</label>
              <input type="email" class="form-control" id="email" name= "email">
            </div>
            <div class="col-md-6">
              <label for="phone" class="form-label">Phone Number</label>
              <input type="number" class="form-control" id="phone" name="phone">
            </div>
            <div class="col-12">
              <label for="inputAddress" class="form-label">Address</label>
              <input type="text" class="form-control" name = "address"id="inputAddress" placeholder="1234 Main St">
            </div>
            
            <div class="col-md-6">
              <label for="inputCity" class="form-label">City</label>
              <input type="text" class="form-control" id="inputCity" name="city">
            </div>
            <div class="col-md-6">
              <label for="inputZip" class="form-label">Zip</label>
              <input type="text" class="form-control" id="inputZip" name="zip">
            </div>
            <div class="col-6">
                <label for="uploadfile" class="form-label">Upload File(If you have any templete or any thing)</label>
                <input type="file" class="form-control" id="uploadfile" name="upload">
              </div>
            <div class="col-md-6">
              <label for="topic" class="form-label">Select Order</label>
              <select id="topic" class="form-select" name="chose">
                <option selected>Choose one</option>
                <option>Web Design</option>
                <option>Web Development</option>
                <option>Software Development</option>
                <option>Game Development</option>
                <option>Data Analysis</option>
              </select>
            </div>
            
            <div class="mb-3">
              <label for="area" class="form-label">Write all details your website which are needed</label>
              <textarea class="form-control" name="area" id="area" rows="6" name="text"></textarea>
            </div>
            <div class="col-12">
              <div class="form-check">
                <input class="form-check-input" type="checkbox" id="gridCheck" name="check">
                <label class="form-check-label" for="gridCheck">
                  Check me out
                </label>
              </div>
            </div>
            <div class="col-12">
              <button type="submit" class="btn btn-primary" name="btn-save" >Next Step</button>
            </div>

          </form>
    </div>




    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>
</html>


