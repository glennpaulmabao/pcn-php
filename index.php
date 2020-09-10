<?php 

    if(isset($_POST['btn-send']))
    {
       $Name = $_POST['Name'];
       $Email = $_POST['Email'];
       $Phone = $_POST['Phone'];
       $Msg = $_POST['msg'];

       if(empty($Name) || empty($Email) || empty($Phone) || empty($Msg))
       {
           header('location:index.php?error');
       }
       else
       {
           $to = "glennfalse.ph@gmail.com";

           if(mail($to,$Phone,$Msg,$Email))
           {
               header("location:index.php?success");
           }
       }
    }
    else
    {
        header("location:index.php");
    }
?>


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
<title>PCN Strategies | Official Website</title>
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


    <div id="pcn-sliders" class="carousel slide" data-ride="carousel">
        <ul class="carousel-indicators">
          <li data-target="#pcn-sliders" data-slide-to="0" class="active"></li>
          <li data-target="#pcn-sliders" data-slide-to="1"></li>
          <li data-target="#pcn-sliders" data-slide-to="2"></li>
        </ul>
        <div class="carousel-inner">
          <div class="carousel-item active">
            <img src="./assets/images/stock-photo-young-businessman-sitting-at-a-table-at-home-working-on-a-laptop-and-writing-down-ideas-in-a-1593495853.jpg" alt="Remote Workforce">
            <div class="carousel-caption" style="    background-color: #004a80;">
                <div class="col-lg-8 col-md-8 col-sm-12" style="margin: auto 0;">
                    <h3>REMOTE WORKFORCE SOLUTIONS</h3>
                    <p>With today’s work environment constantly on-the-go, equip your workforce with devices they need for success wherever they are. Let PCN help you capture your data and manage your operations right from your fingertips.</p>
                </div>
              <div class="col-lg-4 col-md-4 col-sm-12">
                <a href="ContactUs.php" class="btn carousel-btn" role="button">CONTACT US</a>
              </div>
            </div>   
          </div>
          <div class="carousel-item">
            <img src="./assets/images/HigherEducation.png" alt="Los Angeles" width="1100" height="500">
            <div class="carousel-caption" style="    background-color: #004a80;">
                <div class="col-lg-8 col-sm-12 col-md-8 col-sm-12" style="margin: auto 0;">
                    <h3>HIGHER EDUCATIONS SOLUTIONS</h3>
                    <p>Create an exceptional learning institution for students and staff — complete with reliable connectivity, robust cybersecurity and innovation hubs.</p>
                </div>
                <div class="col-lg-4 col-sm-12 col-md-4 col-sm-12">
                    <a href="ContactUs.php" class="btn carousel-btn" role="button">CONTACT US</a>
                </div>
            </div>   
          </div>
          <div class="carousel-item">
            <img src="./assets/images/SecuritySolutions.png" alt="Los Angeles" width="1100" height="500">
            <div class="carousel-caption" style="    background-color: #004a80;">
                <div class="col-lg-8 col-sm-12 col-md-8 col-sm-12" style="margin: auto 0;">
                    <h3>SECURITY SOLUTIONS</h3>
                    <p>Does your security strategy benefit you, or your cyber adversaries?</p>
                </div>
                <div class="col-lg-4 col-sm-12 col-md-4 col-sm-12">
                    <a href="ContactUs.php" class="btn carousel-btn" role="button">CONTACT US</a>
                </div>
            </div>   
          </div>
        </div>
        <a class="carousel-control-prev" href="#pcn-sliders" data-slide="prev">
          <span class="carousel-control-prev-icon"></span>
        </a>
        <a class="carousel-control-next" href="#pcn-sliders" data-slide="next">
          <span class="carousel-control-next-icon"></span>
        </a>
      </div>
      <div class="solutions-heading">
        <h6>what we do</h6>
        <h1>End to End IT Solutions </h1>
        <hr></hr></br>
        <p>PCN Strategies’ focus is on the customer needs.  We believe in fast response times, quality products and services and competitive pricing.  </p>
    </div>
    <div class="solutions container" style="margin-bottom: 10%;">

        <div class="row">
            <div class="col-lg-3 col-md-6 col-sm-12">
                <div class="shadow solutions-box">
                    <img src="./assets/images/icons/icon-mobility.png" alt="">
                    <h1>Mobility Solutions</h1>
                    <p style="height:80px;">With today’s work environment constantly on-the-go, equip your workforce with devices.</p>
                    <div class="row">
                        <a href="mobility.php" class="btn" role="button">LEARN MORE</a>
                    </div>
                </div>
            </div>

            <div class="col-lg-3 col-md-6 col-sm-12">
                <div class="shadow solutions-box">
                    <img src="./assets/images/icons/icon-education.png" alt="">
                    <h1>Education</h1>
                    <p style="height:80px;">
                        <a href="higher-ed.php" class="btn" style="padding: 8px 0;" role="button">HIGHER EDUCATION</a>
                        <a href="k12.html" class="btn" style="padding: 8px 0;" role="button">K12</a>                    
                    </p>
                    <div class="row">
                        <a href="education.php" class="btn" role="button">LEARN MORE</a>
                    </div>
                </div>
            </div>

            <div class="col-lg-3 col-md-6 col-sm-12">
                <div class="shadow solutions-box">
                    <img src="./assets/images/icons/icon-remote.png" alt="">
                    <h1>Remote Workforce</h1>
                    <p style="height:80px;">Many PCN partners are offering free trials and offers for many work from home solutions.</p>
                    <div class="row">
                        <a href="workforce.php" class="btn" role="button">LEARN MORE</a>
                    </div>
                </div>
            </div>

            <div class="col-lg-3 col-md-6 col-sm-12">
                <div class="shadow solutions-box">
                    <img src="./assets/images/icons/icon-datacenter.png" alt="">
                    <h1>Data Center</h1>
                    <p style="height:80px;">Out of sight, out of mind, on budget and in sync: the dream of the harmonious, optimized data center!</p>
                    <div class="row">
                        <a href="datacenter.php" class="btn" role="button">LEARN MORE</a>
                    </div>
                </div>
            </div>


    </div>

    <div class="row">

            <div class="col-lg-3 col-md-6 col-sm-12">
                <div class="shadow solutions-box">
                    <img src="./assets/images/icons/icon-datacenter.png" alt="">
                    <h1>Networking</h1>
                    <p style="height:80px;">Out of sight, out of mind, on budget and in sync: the dream of the harmonious, optimized data center!</p>
                    <div class="row">
                        <a href="datacenter.php" class="btn" role="button">LEARN MORE</a>
                    </div>
                </div>
            </div>

            <div class="col-lg-3 col-md-6 col-sm-12">
                <div class="shadow solutions-box">
                    <img src="./assets/images/icons/icon-security.png" alt="">
                    <h1>Security</h1>
                    <p style="height:80px;">Does your security strategy benefit you, or your cyber adversaries?</p>
                    <div class="row">
                        <a href="security.php" class="btn" role="button">LEARN MORE</a>
                    </div>
                </div>
            </div>

        <div class="col-lg-3 col-md-6 col-sm-12">
            <div class="shadow solutions-box">
                <img src="./assets/images/icons/icon-cloud.png" alt="">
                <h1>Cloud</h1>
                <p style="height:80px;">Are you ready for the next phase of digital transformation? Take your organization into the Cloud.</p>
                <div class="row">
                    <a href="cloud.php" class="btn" role="button">LEARN MORE</a>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="container-fluid form-bg">
        <div class="form-heading">
            <h1>REQUEST A CONSULTATION</h1>
            <h1>_______________</h1>
            <p>Fill up the form belown and submit your questions</p>
        </div>
        <form  action="index.php" method="POST" class="shadow" style="width: 80%; height: 547px; margin: 100px auto 0 auto; background-color: #ffffff; padding: 5%;">
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
                    <textarea  name="msg" class="form-control-text-area" style="border-radius: 0px;" id="exampleFormControlTextarea1" rows="12" placeholder="Message"></textarea>
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