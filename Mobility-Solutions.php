<?php 

    if(isset($_POST['btn-send']))
    {
       $Name = $_POST['Name'];
       $Email = $_POST['Email'];
       $Phone = $_POST['Phone'];
       $Msg = $_POST['Message'];

       if(empty($Name) || empty($Email) || empty($Phone) || empty($Msg))
       {
           header('location:mobility.php?error');
       }
       else
       {
           $to = "glennpaulmabao@yahoo.com.ph";

           if(mail($to,$Phone,$Msg,$Email))
           {
               header("location:mobility.php?success");
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
<title>PCN Strategies | Mobility Solutions</title>
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


    <div style="margin-bottom: 450px;">
        
    <div class="pcn-mobility-hero" style="z-index: 2; position: absolute; top: 10%;">
            <div class="pcn-mobility-hero-text">
                <div class="col-lg-12 col-md-12 col-sm-12 justify-content-center mobility-text-bg">
                    <h1>MOBILE TECHNOLOGY EXPERTS</h1>
                    <p>
                        PCN Strategies is a market leader in providing mobility solutions for today's mobile workforce. 
                        Cars, trucks, planes and trains...if it moves, we can design a solution for it.
                    </p>
                </div>
            </div>
        </div>
    
        <div id="carouselExampleSlidesOnly" class="carousel slide" data-ride="carousel" style="z-index: 1; position: absolute; top: 10%; margin: 0 0 10% 0;">
            <div class="carousel-inner" style="height: 493px;">
              <div class="carousel-item active">
                <img class="d-block w-100" src="./assets/images/PCN-Hero-banners-Mobility-Slide1.png" style="width: 100%; height: 493px; background-size: cover; background-position: center;" alt="">
              </div>
              <div class="carousel-item">
                <img class="d-block w-100" src="./assets/images/PCN-Hero-banners-Mobility-Slide2.png" style="width: 100%; height: 493px; background-size: cover; background-position: center;" alt="">
              </div>
            </div>
          </div>
    
    </div>

    <div class="container">
        <div class="row" style="margin: 510px 0 0 0;">
            <div class="col-lg-7 col-md-12 col-sm-12" style="padding: 30px;">
                <p>With today’s work environment constantly on-the-go, equip your workforce with devices they need for success wherever they are. Let PCN help you capture your data and manage your operations right from your fingertips.</p>
            </div>
            <div class="col-lg-1 col-md-12 col-sm-12">
                &nbsp;
            </div>
            <div class="col-lg-4 col-md-12 col-sm-12" style="padding: 30px; border-left: solid 8px #004a80;">
                <p>Ready to strengthen your strategy?</p>
                <h4>+1 202 962 3980</h4>
            </div>
        </div>
    </div>


    <div class="container-fluid" style="background-color: #efefef;">
        <div style="text-align:center; margin: 100px 0 0 0; padding: 100px 0 30px 0;">
            <div class="col-lg-7 col-md-12 col-sm-12" style="margin: 0 auto;">
                <h3 style="color: #004a80;">
                    TECHNOLOGY SERVICES
                </h3>
                <p>
                With custom PCN Strategies' services, our customers achieve efficient and cost-effective approaches to managing their fleet technology services and workforce communication needs.
            </p>
            </div>
        </div>

        <div class="solutions container" style="padding: 0 0 100px 0;">

            <div class="row">

                <div class="col-lg-6 col-md-12 col-sm-12">
                    <div class="shadow solutions-box" style="padding:30px 40px; height: 400px;">
                        <img src="./assets/icons/icons-Flexible.png" height="46px" width="auto" style="margin: 2% 0;" alt="">
                        <h1 style="font-weight: 300; font-size: 25px;" style="margin: 0 0 1% 0; height:90px;">
                        LAW ENFORCEMENT AND EMERGENCY SECTOR
                        </h1>
                        <p style="color: black; margin: 5% 0 0 0; height:125px;">
                        Law enforcement and emergency management agencies are tasked with the immense duty of keeping our communities safe. As the type of threats communities face become more complex, law enforcement and emergency management personnel need solutions that enable them to be connected and respond at a moments notice.
                    </p>
                        <div class="row">
                            <div class="col-6" style="margin: 2% 0;">
                                <a href="#" class="btn" role="button">LEARN MORE</a>
                            </div>
                        </div>
                    </div>
                </div>
    
                <div class="col-lg-6 col-md-12 col-sm-12">
                    <div class="shadow solutions-box" style="padding:30px 40px; height: 400px;">
                        <img src="./assets/icons/icons-Anywhere.png" height="46px" width="auto" style="margin: 2% 0;" alt="">
                        <h1 style="font-weight: 300; font-size: 25px;" style="margin: 0 0 1% 0; height:90px;">
                        CONSTRUCTION AND MANUFACTURING SOLUTIONS 
                        </h1>
                        <p style="color: black; margin: 5% 0 0 0; height:125px;">
                        Some of the toughest climates that rugged mobile devices are exposed to are in the Construction and Manufacturing trades. PCN designs mobile rugged solutions that are purpose-built to withstand constant exposure to dusty air, extreme temperature ﬂuctuations, powerful vibrations, chemicals, drops, and more. 
                        </p>
                        <div class="row">
                            <div class="col-6" style="margin: 2% 0;">
                                <a href="#" class="btn" role="button">LEARN MORE</a>
                            </div>
                        </div>
                    </div>
                </div>
        
            </div>

            <div class="row">

                <div class="col-lg-6 col-md-12 col-sm-12">
                    <div class="shadow solutions-box" style="padding:30px 40px; height: 400px;">
                        <img src="./assets/icons/icons-Updates.png" height="46px" width="auto" style="margin: 2% 0;" alt="">
                        <h1 style="font-weight: 300; font-size: 25px;" style="margin: 0 0 1% 0;">
                        TRANSPORTATION
                        </h1>
                        <p style="color: black; margin: 5% 0 0 0; height:145px;">
                        Developing rugged mobile solutions for transportation and distribution logistics—including planes, railroads, ships, trucks, and warehousing—is where PCN can provide its years of mobile solutions experience so your organization can pick the right solution the first time. The applications and benefits of rugged devices throughout the transportation and distribution industry are time consuming to evaluate and test.
                        </p>
                        <div class="row">
                            <div class="col-6" style="margin: 2% 0;">
                                <a href="#" class="btn" role="button">LEARN MORE</a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-6 col-md-12 col-sm-12">
                    <div class="shadow solutions-box" style="padding:30px 40px; height: 400px;">
                        <img src="./assets/icons/icons-Uninterruped.png" height="46px" width="auto" style="margin: 2% 0;" alt="">
                        <h1 style="font-weight: 300; font-size: 25px;" style="margin: 0 0 1% 0;">
                        UTILITIES
                        </h1>
                        <p style="color: black; margin: 5% 0 0 0; height:145px;">
                        PCN can help your fleet design and develop a rugged mobile technology platform which can help coordinate utility team activities from the field to the office. Tasks like reading field meters, testing transmission equipment, and creating infrastructure inventories can all be streamlined with mobile applications. Rugged technology can also withstand harsh environments that utility workers are subject to.
                    </p>
                        <div class="row">
                            <div class="col-6" style="margin: 2% 0;">
                                <a href="#" class="btn" role="button">LEARN MORE</a>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
           
        </div>
    </div>

    <div class="container-fluid" style="background-color:#004a80; padding:40px 0; margin:0px;">
        <div class="container">
            <div style="text-align:center; margin: 50px 0 0 0; padding: 20px 0 20px 0;">
                <div class="col-lg-8 col-md-12 col-sm-12" style="margin: 0 auto;">
                    <h3 style="color: #ffffff;">Why You Need Us?</h3>
                </div>
            </div>
    
            <div class="row">
                <div class="col-lg-6 col-sm-12">
                    <div class="shadow solutions-box" style="background-color: #ffffff;">
                        <h1 style="font-weight: 300; font-size: 25px;" style="margin: 0 0 1% 0;">
                        Custom Designed For Every Type 
                        </h1>
                        <p style="color: black; margin: 5% 0 0 0; height: 95px; font-weight: 300;">
                        PCN strategies offer customized solutions for every fleet out there. Different environment requires different approaches in order to achieve a smooth and seamless communication between the field employees and the central office.
                        </p>
                    </div>
                </div>
    
                <div class="col-lg-6 col-sm-12">
                    <div class="shadow solutions-box" style="background-color: #ffffff;">
                        <h1 style="font-weight: 300; font-size: 25px;" style="margin: 0 0 1% 0;">
                        Cost Efficient
                        </h1>
                        <p style="color: black; margin: 5% 0 0 0; height: 95px; font-weight: 300;">
                        PCN strategies understand the importance of cost-efficiency. Our products, services and solutions will bring benefits and advantages that far outweighs its costs. PCN strategies value excellent service above anything else.
                        </p>
                    </div>
                </div>
            
            </div>
    
        </div>
    
    </div>

    <div ID="ContactForm" class="container-fluid form-bg" style="margin:0px; background-image: url(./assets/images/homepage-form-bg.png);">
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