<?php session_start(); ?>


<!doctype html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;1,300;1,400;1,500&family=Rubik:ital,wght@0,300;0,400;0,500;0,700;1,300;1,400;1,500&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.14.0/css/all.min.css">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/css/bootstrap.min.css" integrity="sha384-r4NyP46KrjDleawBgD5tp8Y7UzmLA05oM1iAEQ17CSuDqnUK2+k9luXQOfXJCJ4I" crossorigin="anonymous">
    <link rel="stylesheet" href="contact.css?v=<?php echo time(); ?>">
    <!-- Jquery-->
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <title></title>
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-light bg-light main-header sticky-top">
        <div class="container-fluid">

            <a class="navbar-brand" href="#">
                <img src="logo.png" alt="" style="height:60px;width:55px;">
            </a>

            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">

                <ul class="navbar-nav ml-auto our-primary-menu">
                    <li><a href="index.php">Home</a></li>
                    <li><a href="team.php">Team</a></li>
                    <li>
                        <a href="service.php">Services</a>
                    </li>
                    <li>
                        <a href="skill.php">Skill</a>
                    </li>
                    <li><a href="about.php">About</a></li>
                    <li><a href="education.php">Education</a></li>
                    <li><a href="contact.php">Contact</a></li>
                </ul>

                <div class="header-info d-flex align-items-center">
                    <div class="search">
                        <button class="on"><i class="fas fa-search"></i></button>
                        <button class="off"><i class="fas fa-times"></i></button>
                    </div>
                    <div class="header-call clearfix">
                        <div class="header-call-icon float-left mr-3 h-100">
                            <span> <i class="fas fa-phone-volume"></i> </span>
                        </div>
                        <div class="header-call-info">
                            <span class="d-block">Call Now</span>
                            <a class="d-block" href="tel:+8801816244741">+8801816244741</a>
                        </div>
                    </div>
                    <div class="header-button">
                    <?php 
                        

                            if(isset($_SESSION['id'])){
                                ?>
                                <a href="profile.php" class="btn btn-primary">profile</a>
                                <a href="signout.php" class="btn btn-primary log1">Sign Out</a>
                                <?php
                                
                            }else
                            {
                                ?>
                                <a href="register.php" class="btn btn-primary">Sign Up</a>
                                <a href="login.php" class="btn btn-primary log1">Log In</a>
                                <?php
                            }
                        ?>
                    </div>
                </div>
            </div>
        </div>
    </nav>
    <div class="contact-title">
        <div class="search-box">
            <form action="/action_page.php">
                <input type="text" placeholder="Search.." name="search" class="type">
                <button type="submit" class="sub"><i class="fa fa-search"></i></button>
            </form>
        </div>
        <div class="contact-title">
            <h1>Contact Us</h1>
            <p>Any question or remarks? Just write a message!</p>
        </div>
    </div>
    <section class="con-sec">
            <div class="con-us">
                <div class="con-head">
                    <h3>Contact Information</h3>
                    <p>Fill up the form and our Team will get back to <br>you within 24 hours.</p>
                </div>
                <div class="con-icon">
                    <div class="phn">
                        <i class="fas fa-phone-alt"></i>
                        <a class="d-block" href="tel:+8801816244741">+8801816244741</a>
                    </div>
                    <div class="mail">
                        <i class="fas fa-envelope-open"></i>
                        <a class="d-block" href="mailto:samshuleeeweb@gmail.com">samshuleeeweb@gmail.com</a>
                    </div>
                    <div class="location">
                        <i class="fas fa-map-marker-alt"></i>
                        <p class="d-block">CUET Chittagong Bangladesh </p>
                    </div>
                </div>
            
                <div class="social">
                    <a href="#"><i class="fab fa-facebook-f" id="facebook"></i></a>
                    <a href="#"><i class="fab fa-twitter"></i></a>
                    <a href="#"><i class="fab fa-instagram"></i></a>
                    <a href="#"><i class="fab fa-linkedin-in"></i></a>                         
                </div>
            </div>

            <div class="con-form">
                <div class="d-flex justify-content-center">
                    <form method="POST" name="contactform" action="contact-form-handler.php">
                        <div class="row1">
                            <div class="col1">
                                <p>First Name</p>
                                <input type="text" class="type1" value="<?php if(isset($_POST['firstName'])) echo $_POST['firstName'];  ?>" name="firstName" id="firstName" placeholder="First Name" Required>
                            </div>
                            <div class="col2">
                                <p>Last Name</p>
                                <input type="text" class="type1" value="<?php if(isset($_POST['lastName'])) echo $_POST['lastName'];  ?>" name="lastName" id="lastName"  placeholder="Last Name" Required>
                            </div>        
                        </div>
                        <div class="row2">
                            <div class="col1">
                                <p>Email</p>
                                <input type="text" class="type1" value="<?php if(isset($_POST['email'])) echo $_POST['email'];  ?>" name="email" id="email" placeholder="Email" Required>
                            </div>
                            <div class="col2">
                                <p>Phone</p>
                                <input type="text" class="type1" value="<?php if(isset($_POST['phone'])) echo $_POST['phone'];  ?>" name="phone" id="phone"  placeholder="Phone Number" Required>
                            </div>        
                        </div>
                        <div class="row3">
                            <h4>What the type of work do you need?</h4>
                            <div class="col3">
                                <div class="col4">
                                    <div class="row4">
                                        <input type="radio" id="webdesign" name="work" value="Web design"><label for="webdesign">&nbsp Web Design</label>
                                    </div>
                                    <div class="row4">
                                        <input type="radio" id="webdevelopment" name="work" value="Web Development"><label for="webdevelopment"> &nbsp Web Development</label>
                                    </div>
                                    <div class="row4">
                                        <input type="radio" id="gamedevelopment" name="work" value="Game Development"><label for="gamedevelopment"> &nbsp Game Development</label>
                                    </div>
                                </div>
                                <div class="col4 col5">
                                    <div class="row4">
                                        <input type="radio" id="softwaredevelopment" name="work" value="Software Development"><label for="softwaredevelopment"> &nbsp Software Development</label>
                                    </div>
                                    <div class="row4">
                                        <input type="radio" id="dataanalysis" name="work" value="Data Analysis"><label for="dataanalysis">&nbsp Data Analysis</label>
                                    </div>
                                    <div class="row4">
                                        <input type="radio" id="other" name="work" value="Other"><label for="other">&nbsp Other</label>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="msg">
                            <p>Message</p>
                            <label for="message"></label>
                            <textarea class="form-control" name="message" id="message" rows="5" cols="62">
                            </textarea>
                        </div>
                        <div class="submit">
                            <button class="subbtn" type="submit">Send Message</button>
                        </div>

                    </form>
                </div>
            </div>
    </section>
    <div class="finish">
        <h6> Created By <span>Samshul Islam</span> | © 2021 All rights reserved.</h6>
    </div>
     
    

    <!-- Optional JavaScript -->


    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="contact.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <!-- Popper.js first, then Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/js/bootstrap.min.js" integrity="sha384-oesi62hOLfzrys4LxRF63OJCXdXDipiYWBnvTl9Y9/TRlw5xlKIEHpNyvvDShgf/" crossorigin="anonymous"></script>
  </body>
</html>