<?php 

    if(isset($_POST['btn-send']))
    {
       $Name = $_POST['Name'];
       $Email = $_POST['Email'];
       $Phone = $_POST['Phone'];
       $Msg = $_POST['Message'];

       if(empty($Name) || empty($Email) || empty($Phone) || empty($Msg))
       {
           header('location:1to1DeviceInitiatives.php?error');
       }
       else
       {
           $to = "glennpaulmabao@yahoo.com.ph";

           if(mail($to,$Phone,$Msg,$Email))
           {
               header("location:1to1DeviceInitiatives.php?success");
           }
       }
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta http-equiv="X-UA-Compatible" content="ie=edge">
<meta name="Description" content="PCN Strategies is a market leader in providing mobility solutions for today's mobile workforce. Cars, trucks, planes and trains...if it moves, we can design a solution for it."/>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.0/css/bootstrap.min.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.1/css/all.min.css">
<link rel="stylesheet" href="assets/style.css">
<title>PCN Strategies | K12 Solutions | 1to1 Device Initiatives</title>
</head>
<body>
<?php 
                            $Msg = "";
                            if(isset($_GET['error']))
                            {
                                $Msg = " Please Complete the Contact Form Below. ";
                                echo '

                                <div class="alert alert-danger alert-dismissible fade show" role="alert">
                                <strong>Wait!</strong> '.$Msg.'
                                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                                </div>

                                ';
                            }

                            if(isset($_GET['success']))
                            {
                                $Msg = " Your Message Has Been Sent ";

                                echo '

                                <div class="alert alert-success alert-dismissible fade show" role="alert">
                                <strong>Awesome!</strong> '.$Msg.'
                                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                                </div>

                                ';
                            }
                        
        ?>
    <div class="container-fluid topheader">
        <div class="container">
            <div class="row">
                <div class="col-lg-5 col-md-5 col-sm">
                    <img src="./assets/images/icon-mail.png" alt=""> sales@pcnstrategies.com
                </div>
                <div class="col-lg-5 col-md-5 col-sm">
                    <img src="./assets/images/icon-call.png" alt=""> +1 202 962 3980
                </div>
                <div class="col-lg-2 col-md-2 col-sm">
                    <a href="timesheet.html" style="text-decoration: none; color: aliceblue; text-align: right; justify-self: end;">
                        <img src="./assets/images/icon-timesheet.png" alt=""> Timesheet
                    </a>
                </div>
            </div>
        </div>
    </div>    

    <nav class="navbar sticky-top navbar-expand-md navbar-light shadow" style="background-color: white;">
        <div class="container">
            <a class="navbar-brand" href="index">
                <img src="./assets/images/logo.png" style="width:175px; height: auto;" alt="">
            </a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav mr-auto">
                </ul>
                <ul class="navbar-nav">
                    <li class="nav-item active">
                        <a class="nav-link active" href="index">HOME</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                          SOLUTIONS
                        </a>
                    <div class="dropdown-menu" role="menu">
                            <a class="dropdown-item" role="presentation" href="Mobility-Solutions">MOBILITY</a>
                            <a class="dropdown-item" role="presentation" href="Education-Solutions">EDUCATION&nbsp;</a>
                            <a class="dropdown-item" role="presentation" href="Remote-Workforce-Solutions">REMOTE WORKFORCE</a>
                            <a class="dropdown-item" role="presentation" href="Data-Center-Solutions">DATA CENTER</a>
                            <a class="dropdown-item" role="presentation" href="Networking-Solutions">NETWORKING</a>
                            <a class="dropdown-item" role="presentation" href="Security-Solutions">SECURITY</a>
                            <a class="dropdown-item" role="presentation" href="Cloud-Solutions">CLOUD</a></div>
                    </li>
                    <li class="nav-item" role="presentation">
                          <a class="nav-link" href="Products">PRODUCTS</a>
                    </li>
                    <li class="nav-item" role="presentation">
                          <a class="nav-link" href="Contact-Us">CONTACT US</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>



    <div id="carouselExampleSlidesOnly" class="carousel slide" data-ride="carousel" data-interval="2000">
        <div class="carousel-inner" style="height: 352px;">
            <div class="carousel-caption carousel-caption-2">
                    <h1>1:1 Initiative in our virtual and on premise classrooms is now more important than ever within K-12. Solutions for all grades and ages, from pre-school to high school graduates and everything in between.</h1>
            </div>
          <div class="carousel-item active">
            <img class="d-block w-100" src="./assets/images/1to1-slider.png" style="width: 100%; height: 352px; background-size: cover; background-position: center;" alt="">
          </div>
          <div class="carousel-item">
            <img class="d-block w-100" src="./assets/images/1to1-slider.png" style="width: 100%; height: 352px; background-size: cover; background-position: center;" alt="">
          </div>
          <div class="carousel-item">
            <img class="d-block w-100" src="./assets/images/1to1-slider.png" style="width: 100%; height: 352px; background-size: cover; background-position: center;" alt="">
          </div>
        </div>
      </div>
      
    <div class="container">
        <div class="row" style="margin: 50px 0 150px 0;">
            <div class="col-lg-6 col-md-12 col-sm-12">
                <h1>1:1 Device Initiative</h1>
                <p style="font-size: 18px; font-weight: 200;">PCN Strategies recognizes and embraces the changing landscape of education and the essential role that technology plays.  Many ISD’s and ESD’s have implemented a 1:1 initiative  - Chrome/Window devices throught all k-12 grades – to prepare our students for college and the every changing workforce.

                <br><br> Our approach incorporates a blended model of e-learning, utilizing Chrome/window devices with textbook and digital content.</p>
            </div>
            <div class="col-lg-5 col-md-8 col-sm-12 btn-section">
                <div class="pcn-list">
                    <li><img src="./assets/icons/icons-check-mark.png" height="22px" width="auto" style="margin: 0 1%;" alt=""> Increase 21st Century Skills</li>
                    <li><img src="./assets/icons/icons-check-mark.png" height="22px" width="auto" style="margin: 0 1%;" alt=""> Increase Differentiated Learning</li>
                    <li><img src="./assets/icons/icons-check-mark.png" height="22px" width="auto" style="margin: 0 1%;" alt=""> Creators of Knowledge</li>
                    <li><img src="./assets/icons/icons-check-mark.png" height="22px" width="auto" style="margin: 0 1%;" alt=""> Increase Student Achievement</li>
                </div>
            </div>
        </div>
    </div>


    <div class="container-fluid" style="background-color: #004a80; padding: 10% 0 5% 0;">
        <h1 style="margin: auto; color: white; font-weight: 200; font-size: 35px; text-align: center; text-transform: none;">Software that supports learning</h1>
        <p style="margin: auto; color: white; font-weight: 200; font-size: 18px; text-align: center; width: 70%; margin-top:3%;">Connected devices are facilitating student collaboration and allowing them to act as creators of knowledge, rather than just consumers. Use software that promotes student-centered learning and emphasizes interacting, working in groups and developing solutions.</p>
        
        <div class="container" style="align-content: center; justify-content: center; text-align: center; margin:auto;">
            <div class="row" style="margin: 10% 0;">
                <div class="col-lg-4 col-sm-12" style="margin: 20px 0;">
                    <img src="./assets/images/icons/Google.png" style="align-self: center; margin: auto;" alt="">
                </div>
                <div class="col-lg-4 col-sm-12" style="margin: 20px 0;">
                    <img src="./assets/images/icons/Windows10.png" style="align-self: center; margin: auto;" alt="">
                </div>
                <div class="col-lg-4 col-sm-12" style="margin: 20px 0;">
                    <img src="./assets/images/icons/Adobe.png" style="align-self: center; margin: auto;" alt="">
                </div>
            </div>
        </div>
    </div>

    <div ID="ContactForm" class="container-fluid form-bg" style="margin:0px; background-image: url(./assets/images/education-form-bg.png);">
            <div class="form-heading">
                <h1>REQUEST A CONSULTATION</h1>
                <h1>_______________</h1>
                <p>Fill up the form below and submit your questions</p>
            </div>

        <form  action="index.php" method="POST" class="shadow" style="width: 80%; height: 547px; margin: 100px auto 0 auto; background-color: #ffffff; padding: 5%; border-radius:10px;">
            <div class="form-row">
                    <div class="col-lg col-sm pcn-from-input">
                        <input type="text" name="Name" class="form-control form-control-lg" style="border-radius: 0px;" placeholder="Full Name">
                    </div>
                    <div class="col-lg col-sm pcn-from-input">
                        <input type="text" name="Email" class="form-control form-control-lg" style="border-radius: 0px;" placeholder="Email">
                    </div>
                    <div class="col-lg col-sm pcn-from-input">
                        <input type="text" name="Phone" class="form-control form-control-lg" style="border-radius: 0px;" placeholder="Phone">
                    </div>
            </div>
                <br>
                <br>
            <div class="form-row">
                    <div class="col-lg-8 col-sm">
                        <textarea  name="Message" class="form-control-text-area" style="border-radius: 0px;" id="exampleFormControlTextarea1" rows="12" placeholder="Message"></textarea>
                    </div>
                    <div class="col-lg col-sm pcn-from-input" >
                        <button class="btn" style="position: absolute; bottom: 0px;" name="btn-send"> Send </button>
                    </div>
            </div>
        </form>
    </div>

    <div class="container-fluid container-footer">
        <div class="col pcn-slogan">
            <h1>Let us deliver the best solution for your environment.</h1>
        </div>
    </div>
    <div class="container footer">
        <div class="row" style="margin:5% 0;">

            <div class="col-6">
                <img src="./assets/images/logo.png" alt="" style="width: 30%; height: auto; margin: 0 0 5% 0;">
                <h1>About us</h1>
                <p style="width: 70%;">
                    TECHNOLOGY EXPERTS<br><br>
                    PCN Strategies is a market leader in providing mobility solutions for today's mobile workforce.  Cars, trucks, planes and trains...if it moves, we can design a solution for it.</p>
            </div>

            <div class="col-4">
                <h1>our address</h1>
                <p>1612 K Street NW
                    Suite 802
                    Washington, DC 20006</p>
                <br>
                <h5>our email</h5>
                <p>sales@pcnstrategies.com</p>
                <br>
                <h5>call us</h5>
                <p>+1 202 962 3980</p>
            </div>

            <div class="col-2">
                <h1>Links</h1>
                <a href="index"><li>Home</li></a>
                <a href="Solutions"><li>Solutions</li></a>
                <a href="Products"><li>Products</li></a>
                <a href="Contact-Us"><li>Contact</li></a>
            </div>


        </div>
    </div>
    <div class="container-fluid small-footer">
        <p>Copyright © 2020 PCN Strategies.</p>
    </div>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.slim.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.1/umd/popper.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.0/js/bootstrap.min.js"></script>
</body>
</html>