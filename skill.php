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
    <link rel="stylesheet" href="skill.css">
    <!-- Jquery-->
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <title>SKILL</title>
    <style>
         /*  skill-title  */

 .skill-title {
    height: 80px;
    width: 1480px;
    position: relative;
    z-index: 1;
    font-family: 'Rubik', sans-serif;
}

.search-box {
    display: flex;
    height: 60px;
    width: 280px;
    position: absolute;
    left: 900px;
    border-radius: 10px;
    display: none;
    z-index: 2;
    background-color: white;
    box-shadow: 5px 5px 10px 2px grey;
}

.type {
    height: 40px;
    width: 235px;
    position: relative;
    top: 12px;
    left: 5px;
    border-radius: 10px;
}

.sub {
    height: 30px;
    width: 30px;
    background-color: #fafafa;
    color: red;
    position: relative;
    top: 12px;
    border-radius: 50%;
}


.skill-title p {
    height: 100px;
    width: 1440px;
    font-size: 15pt;
    margin: 0px 20px;
}
.skill-title span{
    font-size: 35pt;
}

        .content{
    height: 2400px;
    width: 1480 px;
    margin-top: 40px;
    font-family: 'Rubik', sans-serif;
}
.content1{
   height: 400px;
   width: 97%;
   margin: 0px 0px 0px 25px;
   border-radius: 10px;
   border-left: 7px solid rgb(83, 3, 3);
   box-shadow: 5px 5px 10px rgb(24, 4, 4);
   display: flex;

}
.content2{
    height: 400px;
   width: 97%;
   margin: 15px 0px 0px 25px;
   box-shadow: 5px 5px 10px rgb(24, 4, 4);
   border-radius: 10px;
   border-left: 7px solid rgb(83, 3, 3);
   display: flex;

}
.content3{
    height: 600px;
   width: 97%;
   margin: 15px 0px 0px 25px;
   box-shadow: 5px 5px 10px rgb(24, 4, 4);
   border-radius: 10px;
   border-left: 7px solid rgb(83, 3, 3);
   display: flex;
}
.content4{
    height: 600px;
   width: 97%;
   margin: 15px 0px 0px 25px;
   box-shadow: 5px 5px 10px rgb(24, 4, 4);
   border-radius: 10px;
   border-left: 7px solid rgb(83, 3, 3);
   display: flex;
}
.content-title{
  height: 100%;
  width: 20%;
  background-color: #fff;
  text-align: center;
  border-right: 1px solid;
}
.content-title i,h1{
    position: relative;
    top:100px;
    color: red;
}
.content-title h1{
    margin-top: 30px;
}
.content-des{
    height: 100%;
    width: 80%;
}
.subject{
    height: 25%;
    width: 100%;
    border-bottom: 1px solid;
    display: flex;
}
.des-title{
    height: 100%;
    width: 10%;
    background-color:grey;
    text-align: center;
}
.des-title h5{
    position: relative;
    top: 30px;
}
.des-des{
    height: 100%;
    width: 90%;
    margin-left: 5px;
}

.subject1{
    height: 33.33%;
    width: 100%;
    border-bottom: 1px solid;
    display: flex;
}

.subject2{
    height: 16.7%;
    width: 100%;
    border-bottom: 1px solid;
    display: flex;
}


   /* Finish */

   .finish {
    height: 70px;
    max-width: 1480px;
    background-color: chocolate;
}

    .finish h6 {
        text-align: center;
        font-family: 'Rubik', sans-serif;
        color: whitesmoke;
        position: relative;
        top: 30px;
    }

    .finish span {
        color: crimson;
    }      

    </style>
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
    <div class="skill-title">
        <div class="search-box">
            <form action="/action_page.php">
                <input type="text" placeholder="Search.." name="search" class="type">
                <button type="submit" class="sub"><i class="fa fa-search"></i></button>
            </form>
        </div>
        <div class="skill-title">
            <p><Span>F</Span>or gathering different type of skill, we have to learn and practice them. For gathering every skill, we have to learn different types of language.
            In this website, we discuss how to accquire skills.
            </p>
        </div>
    </div>

    <div class="content">
        <div class="content1">
            <div class="content-title">
                <i class="fa fa-paint-brush fa-4x" aria-hidden="true"></i>
                <h1>Website <br>Design</h1>    
            </div>
            <div class="content-des">
                <div class="subject">
                    <div class="des-title">
                        <h5>HTML5</h5>
                    </div>
                    <div class="des-des">
                        <p>HTML5 is a markup language used for structuring and presenting content on the World Wide Web. It is the fifth and last major HTML version that is a World Wide Web Consortium (W3C) recommendation. The current specification is known as the HTML Living Standard. It is maintained by the Web Hypertext Application Technology Working Group (WHATWG), a consortium of the major browser vendors (Apple, Google, Mozilla, and Microsoft).Many new syntactic features are included. <a style="text-decoration: none;" href="https://www.tutorialrepublic.com/html-reference/html5-tags.php" target="blank">Learn more </a> about html5 tags.
                        </p>
                    </div>
                </div>
                <div class="subject">
                    <div class="des-title">
                        <h5>CSS3</h5>
                    </div>
                    <div class="des-des">
                        <p>Cascading Style Sheets (CSS) is a style sheet language used for describing the presentation of a document written in a markup language such as HTML. CSS is a cornerstone technology of the World Wide Web, alongside HTML and JavaScript. CSS is designed to enable the separation of presentation and content, including layout, colors, and fonts. This separation can improve content accessibility, provide more flexibility and control in the specification of presentation characteristics. <a style="text-decoration: none;" href="https://www.w3schools.com/css/default.asp" target="blank">Learn more</a> about css3 tags.</p>
                    </div>
                </div>
                <div class="subject">
                    <div class="des-title">
                        <h5>JavaScript</h5>
                    </div>
                    <div class="des-des">
                        <p>JavaScript, often abbreviated as JS, is a programming language that conforms to the ECMAScript specification. JavaScript is high-level, often just-in-time compiled, and multi-paradigm. It has curly-bracket syntax, dynamic typing, prototype-based object-orientation, and first-class functions.

                            Alongside HTML and CSS, JavaScript is one of the core technologies of the World Wide Web. Over 97% of websites use it client-side for web page behavior, often incorporating third-party libraries. <a style="text-decoration: none;" href="https://www.javascript.com" target="blank">Learn more</a></p>
                    </div>
                </div>
                <div class="subject">
                    <div class="des-title">
                        <h5>jQuery</h5>
                    </div>
                    <div class="des-des">
                        <p>jQuery is a fast, small, and feature-rich JavaScript library. It makes things like HTML document traversal and manipulation, event handling, animation, and Ajax much simpler with an easy-to-use API that works across a multitude of browsers. With a combination of versatility and extensibility, jQuery has changed the way that millions of people write JavaScript. <a style="text-decoration: none;" href="https://jquery.com" target="blank">Learn more</a></p>
                    </div>
                </div>
            </div> 
        </div>
        <div class="content2">
            <div class="content-title">
                <i class="fas fa-file-code fa-4x"></i>
                <h1>Web <br>Development</h1>    
            </div>
            <div class="content-des">
                <div class="subject1">
                    <div class="des-title">
                        <h5>PHP</h5>
                    </div>
                    <div class="des-des">
                        <p>PHP is a general-purpose scripting language geared towards web development. Fast, flexible and pragmatic, PHP powers everything from your blog to the most popular websites in the world. PHP code is usually processed on a web server by a PHP interpreter implemented as a module, a daemon or as a Common Gateway Interface (CGI) executable. On a web server, the result of the interpreted and executed PHP code – which may be any type of data, such as generated HTML or binary image data – would form the whole or part of an HTTP response. <a style="text-decoration: none;" href="https://www.php.net" target="blank">Learn more</a></p>
                    </div>
                </div>
                <div class="subject1">
                    <div class="des-title">
                        <h5>Mysql</h5>
                    </div>
                    <div class="des-des">
                        <p>MySQL is an open-source relational database management system (RDBMS). Its name is a combination of "My", the name of co-founder Michael Widenius's daughter, and "SQL", the abbreviation for Structured Query Language. A relational database organizes data into one or more data tables in which data types may be related to each other; these relations help structure the data. SQL is a language programmers use to create, modify and extract data from the relational database, as well as control user access to the database. MySQL is a component of the LAMP web application software stack, which is an acronym for Linux, Apache, MySQL, Perl/PHP/Python. <a style="text-decoration: none;" href="https://www.mysql.com"target="blank">Learn more</a></p>
                    </div>
                </div>
                <div class="subject1">
                    <div class="des-title">
                        <h5>Node.js</h5>
                    </div>
                    <div class="des-des">
                        <p>Node.js is an open-source, cross-platform, back-end JavaScript runtime environment that runs on the V8 engine and executes JavaScript code outside a web browser. Node.js lets developers use JavaScript to write command line tools and for server-side scripting—running scripts server-side to produce dynamic web page content before the page is sent to the user's web browser. Consequently, Node.js represents a "JavaScript everywhere" paradigm, unifying web-application development around a single programming language, rather than different languages for server-side and client-side scripts. <a style="text-decoration: none;" href="https://nodejs.org/en/" target="blank">Learn more</a></p>   
                    </div>
                </div>
            </div>

        </div>
        <div class="content3">
            <div class="content-title">
                <i class="fas fa-cogs fa-4x"></i>
                <h1>Software <br>Development</h1>    
            </div>
            <div class="content-des">
                <div class="subject2">
                    <div class="des-title">
                        <h5>Python</h5>
                    </div>
                    <div class="des-des">
                        <p>Python is a high-level programming language used for general-purpose programming. With a simple syntax, Python has automatic memory management and dynamic features that make it suitable to be used in a variety of applications in the software development companies such as gaming, web applications, language development, prototyping, etc. The testers use it, as debugging is quite easy in this language. <a style="text-decoration: none;" href="https://www.python.org" target="blank">Learn more</a></p>
                    </div>
                </div>
                <div class="subject2">
                    <div class="des-title">
                        <h5>Java</h5>
                    </div>
                    <div class="des-des">
                        <p>Java is an object-oriented programming language that can be written on any device and can work even on a cross-platform basis. Often used to develop mobile applications, Java is also the basis of the Android operating system. The language is preferred by the testers owing to its ability to use even on cross-platforms. <a style="text-decoration: none;" href="https://www.java.com/en/" target="blank">Learn more</a></p>
                    </div>
                </div>
                <div class="subject2">
                    <div class="des-title">
                        <h5>Ruby</h5>
                    </div>
                    <div class="des-des">
                        <p>With numerous tools and libraries available along with the language, Ruby is simple to use the programming language that does not require one to learn programming vocabulary or commands. Quite popular on small websites, Ruby does not deliver the expected performance on large websites. With a full-stack framework, testing any program that has been developed using Ruby is easy. <a style="text-decoration: none;" href="https://www.ruby-lang.org/en/" target="blank">Learn more</a></p>   
                    </div>
                </div>
                <div class="subject2">
                    <div class="des-title">
                        <h5>C</h5>
                    </div>
                    <div class="des-des">
                        <p>One of the most difficult programming languages for software development, gaining an understanding and knowledge of C makes it simple to learn other languages such as C++. Since it is a machine-level language, a tester who has its knowledge does not find it difficult to test a program written in any other language as well. <a style="text-decoration: none;" href="https://www.w3schools.in/c-tutorial/" target="blank">Learn more</a></p>   
                    </div>
                </div>
                <div class="subject2">
                    <div class="des-title">
                        <h5>Perl</h5>
                    </div>
                    <div class="des-des">
                        <p>One of the commonly used languages for software, hardware, and network testing, PERL helps in ensuring the best quality of a software product. Its file handling techniques and powerful file analyzing that consume the least execution time make it one of the most preferred languages over other programming languages. <a style="text-decoration: none;" href="https://www.perl.org" target="blank">Learn more</a></p>   
                    </div>
                </div>
                <div class="subject2">
                    <div class="des-title">
                        <h5>MATLAB</h5>
                    </div>
                    <div class="des-des">
                        <p>MATLAB is one of the most preferred languages over other programming languages for software testing. This language allows the testing team to execute test algorithms without any sort of recompilation. Its desktop environment allows one to work interactively with the data, which, in turn, helps one to keep an easy track of files and variables and hence, simplifies the debugging process. <a style="text-decoration: none;" href="https://www.mathworks.com/products/matlab.html" target="blank">Learn more</a></p>   
                    </div>
                </div>
            </div>       
        </div>
        <div class="content4">
            <div class="content-title">
                <i class="fas fa-dice-d6 fa-4x"></i>
                <h1>Game <br>Development</h1>    
            </div>
            <div class="content-des">
                <div class="subject2">
                    <div class="des-title">
                        <h5>C++</h5>
                    </div>
                    <div class="des-des">
                        <p>C++ is a general-purpose programming language created by Bjarne Stroustrup as an extension of the C programming language, or "C with Classes". The language has expanded significantly over time, and modern C++ now has object-oriented, generic, and functional features in addition to facilities for low-level memory manipulation.  It is almost always implemented as a compiled language, and many vendors provide C++ compilers. <a style="text-decoration: none;" href="https://www.w3schools.com/CPP/default.asp" target="blank">Learn more</a></p>
                    </div>
                </div>
                <div class="subject2">
                    <div class="des-title">
                        <h5>Java</h5>
                    </div>
                    <div class="des-des">
                        <p>Java is an object-oriented programming language that can be written on any device and can work even on a cross-platform basis. Often used to develop mobile applications, Java is also the basis of the Android operating system. The language is preferred by the testers owing to its ability to use even on cross-platforms. <a style="text-decoration: none;" href="https://www.java.com/en/" target="blank">Learn more</a></p>
                    </div>
                </div>
                <div class="subject2">
                    <div class="des-title">
                        <h5>HTML5</h5>
                    </div>
                    <div class="des-des">
                        <p>HTML5 is a markup language used for structuring and presenting content on the World Wide Web. It is the fifth and last major HTML version that is a World Wide Web Consortium (W3C) recommendation. The current specification is known as the HTML Living Standard. It is maintained by the Web Hypertext Application Technology Working Group (WHATWG), a consortium of the major browser vendors (Apple, Google, Mozilla, and Microsoft).Many new syntactic features are included. <a style="text-decoration: none;" href="https://www.tutorialrepublic.com/html-reference/html5-tags.php" target="blank">Learn more </a> about html5 tags.
                        </p>
                    </div>
                </div>
                <div class="subject2">
                    <div class="des-title">
                        <h5>CSS3</h5>
                    </div>
                    <div class="des-des">
                        <p>Cascading Style Sheets (CSS) is a style sheet language used for describing the presentation of a document written in a markup language such as HTML. CSS is a cornerstone technology of the World Wide Web, alongside HTML and JavaScript. CSS is designed to enable the separation of presentation and content, including layout, colors, and fonts. This separation can improve content accessibility, provide more flexibility and control in the specification of presentation characteristics. <a style="text-decoration: none;" href="https://www.w3schools.com/css/default.asp" target="blank">Learn more</a> about css3 tags.</p>
                    </div>
                </div>
                <div class="subject2">
                    <div class="des-title">
                        <h5>JavaScript</h5>
                    </div>
                    <div class="des-des">
                        <p>JavaScript, often abbreviated as JS, is a programming language that conforms to the ECMAScript specification. JavaScript is high-level, often just-in-time compiled, and multi-paradigm. It has curly-bracket syntax, dynamic typing, prototype-based object-orientation, and first-class functions.

                            Alongside HTML and CSS, JavaScript is one of the core technologies of the World Wide Web. Over 97% of websites use it client-side for web page behavior, often incorporating third-party libraries. <a style="text-decoration: none;" href="https://www.javascript.com" target="blank">Learn more</a></p>
                    </div>
                </div>
                <div class="subject2">
                    <div class="des-title">
                        <h5>SQL</h5>
                    </div>
                    <div class="des-des">
                        <p>SQL is a standard language for storing, manipulating and retrieving data in databases. SQL is found to be an interactive language that is on the rising path among other programming languages. Tech giants like Amazon, Google, IBM, Oracle, Helix, Microsoft, etc. continue to utilize SQL in their systems. This is considered to be a standardized program that is used to perform relational functions and operations. <a style="text-decoration: none;" href="https://www.w3schools.com/sql/" target="blank">Learn more</a></p>   
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="finish">
        <h6> Created By <span>Samshul Islam</span> | © 2021 All rights reserved.</h6>
    </div>




    <!-- Optional JavaScript -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="skill.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <!-- Popper.js first, then Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/js/bootstrap.min.js" integrity="sha384-oesi62hOLfzrys4LxRF63OJCXdXDipiYWBnvTl9Y9/TRlw5xlKIEHpNyvvDShgf/" crossorigin="anonymous"></script>
</body>
</html>