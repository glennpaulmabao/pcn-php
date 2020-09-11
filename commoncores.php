<?php 

    if(isset($_POST['btn-send']))
    {
       $Name = $_POST['Name'];
       $Email = $_POST['Email'];
       $Phone = $_POST['Phone'];
       $Msg = $_POST['Message'];

       if(empty($Name) || empty($Email) || empty($Phone) || empty($Msg))
       {
           header('location:commoncores.php?error');
       }
       else
       {
           $to = "glennpaulmabao@yahoo.com.ph";

           if(mail($to,$Phone,$Msg,$Email))
           {
               header("location:commoncores.php?success");
           }
       }
    }
?>

<html lang="en">
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta http-equiv="X-UA-Compatible" content="ie=edge">
<meta name="Description" content="Enter your description here"/>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.0/css/bootstrap.min.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.1/css/all.min.css">
<link rel="stylesheet" href="assets/style.css">
<title>PCN Strategies | Common Core State Standards Initiatives</title>
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



    <div class="container-fluid" style="background-color: #f0f0f0;">
        <div ID="CommonCores" class="solutions container">
            <div class="row" style="padding:10% 0;">
                <div class="col-5">
                    <h1 style="font-weight: 200; font-size: 1.5em; text-transform: none;">Common Core Standards In Your State</h1>
                    <br>
                    <p>Forty-one states, the District of Columbia, four territories, and the Department of Defense Education Activity (DoDEA) have adopted the Common Core State Standards. The map below provides information about the process each state or territory followed to adopt their academic standards. Please note that states routinely review their academic standards and may choose to change or add onto the standards to best meet the needs of their students. The map provides links to the website in each state and territory that provides the most up-to-date information on a state’s specific academic standards.</p>
                    <div class="row" style="width: 80%;">
                        <a href="http://www.corestandards.org/standards-in-your-state/" class="btn" role="button" target="_blank">LEARN MORE</a>
                    </div>
                </div>
                <div class="col-7">
                    <div style="width: 80%; height: auto; float: right; margin: auto;">
                        <img src="./assets/images/USA-MAP.png" width="100%" height="100%" alt="">
                        <div class="row" style="margin: 5% 0;">
                        <div style="width: 20px; height: 20px; background-color: #004a80;"></div>
                            <p style="margin: 0 3%; font-weight: 700; font-size: 14;">Adopted</p>
                        <div style="margin-left: 5%; width: 20px; height: 20px; background-color: #c2c2c2;"></div>
                            <p style="margin: 0 3%; font-weight: 700; font-size: 14;">Not Adopted</p>
                        </div>
                    </div>
                </div>
            </div>        
        </div>
    </div>


    <div class="container-fluid" style="padding: 8%;">
        <h1 style="margin: auto; color: #004a80; font-weight: 200; font-size: 35px; text-align: center; text-transform: none;">Preparing America's students for success.</h1>
        <p style="margin: auto; color: #393939; font-weight: 200; font-size: 18px; text-align: center; width: 70%; margin-top:3%;">Common Core is a set of high-quality academic standards in mathematics and English language arts/literacy (ELA). These learning goals outline what a student should know and be able to do at the end of each grade.</p>
    
        <div class="row">
            <div class="col-4">
                <div class="shadow solutions-box">
                    <div class="row" style="height: 150px;">
                        <img src="./assets/images/icons/icon-k12experience.png" style="margin: 3% 0; width: auto; height: 30px;" alt="">
                        <h1 style="font-weight: 300; font-size: 25px;" style="margin: 0 0 1% 0;">Learn why the Common Core is important for your child</h1>
                    </div>
                    <div class="row">
                        <div class="pcn-list" style="width: 100%;">
                            <li><img src="./assets/images/icons/CheckMark.png" style="margin: 2% 1%; height: 20px; width: auto;" alt=""> WHAT PARENTS SHOULD KNOW</li>
                            <li><img src="./assets/images/icons/CheckMark.png" style="margin: 2% 1%; height: 20px; width: auto;" alt=""> MYTHS VS. FACTS</li>
                        </div>
                    </div>    
                </div>
            </div>  
            
            <div class="col-4">
                <div class="shadow solutions-box">
                    <div class="row" style="height: 150px;">
                        <img src="./assets/images/icons/icon-k12experience2.png" style="margin: 3% 0; width: auto; height: 30px;" alt="">
                        <h1 style="font-weight: 300; font-size: 25px;" style="margin: 0 0 1% 0;">Explore the Common Core</h1>
                    </div>
                    <div class="row">
                        <div class="pcn-list" style="width: 100%;">
                            <li><img src="./assets/images/icons/CheckMark.png" style="margin: 2% 1%; height: 20px; width: auto;" alt=""> READ THE STANDARDS</li>
                            <li><img src="./assets/images/icons/CheckMark.png" style="margin: 2% 1%; height: 20px; width: auto;" alt=""> RESOURCES</li>
                        </div>
                    </div>
            </div>
            </div>  

            <div class="col-4">
                <div class="shadow solutions-box">
                    <div class="row" style="height: 150px;">
                        <img src="./assets/images/icons/icon-k12experience3.png" style="margin: 3% 0; width: auto; height: 30px;" alt="">
                        <h1 style="font-weight: 300; font-size: 25px;" style="margin: 0 0 1% 0;">Understand how the Common Core was created</h1>
                    </div>
                    <div class="row">
                        <div class="pcn-list" style="width: 100%;">
                            <li><img src="./assets/images/icons/CheckMark.png" style="margin: 2% 1%; height: 20px; width: auto;" alt=""> PROCESS</li>
                            <li><img src="./assets/images/icons/CheckMark.png" style="margin: 2% 1%; height: 20px; width: auto;" alt=""> FREQUENTLY ASKED QUESTIONS</li>
                        </div>
                    </div>
            </div>
            </div>  
        </div>
    </div>

    <div class="row" style="width: 50%; margin: auto;">
        <div class="col">
            <a href="http://www.corestandards.org/about-the-standards/" class="btn" role="button" target="_blank" style="text-transform: uppercase;">Learn more about common core</a>
        </div>
    </div>


    <div class="container-fluid container-footer" style="margin: 10% 0 0 0;">
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