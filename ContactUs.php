<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta http-equiv="X-UA-Compatible" content="ie=edge">
<meta name="Description" content="Enter your description here"/>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.0/css/bootstrap.min.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.1/css/all.min.css">
<link rel="stylesheet" href="assets/style.css">
<title>PCN Strategies | Education Solutions</title>
</head>
<body>
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
            <a class="navbar-brand" href="./index.php">
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
                        <a class="nav-link active" href="index.php">HOME</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                          SOLUTIONS
                        </a>
                    <div class="dropdown-menu" role="menu">
                            <a class="dropdown-item" role="presentation" href="mobility.php">MOBILITY</a>
                            <a class="dropdown-item" role="presentation" href="education.php">EDUCATION&nbsp;</a>
                            <a class="dropdown-item" role="presentation" href="workforce.php">REMOTE WORKFORCE</a>
                            <a class="dropdown-item" role="presentation" href="datacenter.php">DATA CENTER</a>
                            <a class="dropdown-item" role="presentation" href="networking.php">NETWORKING</a>
                            <a class="dropdown-item" role="presentation" href="security.php">SECURITY</a>
                            <a class="dropdown-item" role="presentation" href="cloud.php">CLOUD</a></div>
                    </li>
                    <li class="nav-item" role="presentation">
                          <a class="nav-link" href="Products.php">PRODUCTS</a>
                    </li>
                    <li class="nav-item" role="presentation">
                          <a class="nav-link" href="ContactUs.php">CONTACT US</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <div class="container-fluid" style="background-image: url(./assets/images/HeroBG-ContactUs.png); width: 100%; height: auto; background-position: center; background-size: cover; ">
        <div class="container">
            <div class="row">
                <div class="pcn-contact-hero">
                    <h1>contact us</h1>
                    <p style="margin: 20px 0; font-weight: 200;">We are passionate about delivering exceptional value and experience as we help customers select, deploy and manage technology.</p>
                </div>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="row" style="margin: 100px 0px 0px 0px;">
            <div class="col-lg-6 col-md-12 col-sm-12">
                <h3 style="font-weight:300;" >What’s on your mind? We’re Here to Help.</h3>
                <p style="margin: 40px 0; font-weight: 300;">We help organizations around the globe achieve their business and technology goals through integrated solutions, services and support. <br> <br>

                    Whether you’re looking to enable a modern workplace, protect your most critical business assets or build a more connected world, our experts are ready to help you find the technologies best suited for your IT environment. </p>
            
                    <h4 style="font-weight:300;">Need Immediate Assistance? We’re Here to Help.</h4>
                    <p style="font-size: 20px;">
                        <span style="color: #004a80;"> Call:</span> <span>+1 202 962 3980</span> <br>
                        <span style="color: #004a80;"> Email Us:</span> <span>sales@pcnstrategies.com</span>
                    </p>
            </div>
            <div class="col-lg-1">
                &nbsp;
            </div>
            <div class="col-lg-5 col-md-12 col-sm-12">
                <div class="pcn-contact-form">
                    <form>
                        <div class="row" style="padding: 30px 30px 0 30px;">
                            <h3 style="font-weight:300; color: #004a80;">Contact Us to Learn More.</h3>
                            <p style="font-size: 16px; font-weight: 200;">Fill out the form below to have an PCN-Strategies specialist contact you.</p>
                                <?php 
                                    $Msg = "";
                                    if(isset($_GET['error']))
                                    {
                                        $Msg = " Please Fill in the Blanks ";
                                        echo '<div class="alert alert-danger">'.$Msg.'</div>';
                                    }

                                    if(isset($_GET['success']))
                                    {
                                        $Msg = " Your Message Has Been Sent ";
                                        echo '<div class="alert alert-success">'.$Msg.'</div>';
                                    }
                                ?>    
                        </div>
                        <div class="col-lg col-sm">
                            <input name="Name" type="text" class="form-control form-control-lg" style="border-radius: 0px; margin: 20px 0;" placeholder="Name">
                          </div>
                          <div name="Email" class="col-lg col-sm">
                            <input type="text" class="form-control form-control-lg" style="border-radius: 0px; margin: 20px 0;" placeholder="Email">
                          </div>
                          <div name="Phone" class="col-lg col-sm">
                            <input type="text" class="form-control form-control-lg" style="border-radius: 0px; margin: 20px 0;" placeholder="Phone">
                          </div>
                          <div class="col-lg col-sm">
                            <textarea name="msg" class="form-control-text-area" style="border-radius: 0px;" id="exampleFormControlTextarea1" placeholder="Message"></textarea>                </div>
                        <div class="col-lg col-sm pcn-from-input" >
                        <button class="btn" style="position: absolute; bottom: 0px;" name="btn-send"> Send </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    
    <div class="container-fluid container-footer" style="margin: 20% 0 0 0;">
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
                <a href="index.php"><li>Home</li></a>
                <a href="index.php"><li>Services</li></a>
                <a href="index.php"><li>Products</li></a>
                <a href="index.php"><li>Contact</li></a>
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