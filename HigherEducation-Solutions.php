<?php 

    if(isset($_POST['btn-send']))
    {
       $Name = $_POST['Name'];
       $Email = $_POST['Email'];
       $Phone = $_POST['Phone'];
       $Msg = $_POST['Message'];

       if(empty($Name) || empty($Email) || empty($Phone) || empty($Msg))
       {
           header('location:higher-ed.php?error');
       }
       else
       {
           $to = "glennpaulmabao@yahoo.com.ph";

           if(mail($to,$Phone,$Msg,$Email))
           {
               header("location:higher-ed.php?success");
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
<title>PCN Strategies | Higher Education Solutions</title>
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


    <div class="pcn-hero" style="background-image: url(./assets/images/Higher_EdBanner.png); width: 100%; background-size: cover; background-position: center;">        
        <div class="pcn-hero-text" style="margin: auto 0; text-align: center;">
            <h1 style="padding: 0px; width: 100%; color: #ffffff;">Higher Education Solutions</h1>
            <p style="padding: 0px; width: 100%; color: #ffffff;">Build a top-tier institution with cutting-edge technology that attracts students and enables faculty to achieve more with.</p>
            <div class="hero-btn" style="margin: 80px 0 0 0;">
                <a href="#ContactForm"  class="btn pcn-hero-btn" >Hear from our Team</a>
                <a href="#"  class="btn pcn-hero-btn">View Education Contracts</a>
            </div>
        </div>
    </div>

    <div class="container">
        <div class="row" style="margin: 100px auto;">
            <div class="col-lg-6 col-md-12 col-sm-12">
                <h1>Student-centered devices</h1>
                <p style="font-size: 18px; font-weight: 200;">One thing that hasn’t changed is that the number-one priority in fostering digital learning is getting devices in the hands of students. With the right tools, students can easily access learning modules and complete their assignments while at home. <br><br>
                    Many leading brands offer laptop, 2-in-1 and tablet models that have been carefully optimized for education environments. Their mobility allows students to move seamlessly between home and the classroom, and their durable hardware is better equipped to resist wear and tear. For younger grades and students with limited access to technology, intuitive interfaces can accelerate the journey to digital learning.
                    </p>
            </div>
            <div class="col-lg-6 col-md-7 col-sm-12" style="margin: 0 0 100px 0;">
                <a href="#"  class="btn pcn-hero-btn-he" style="font-size: 16px;"><img src="./assets/images/icons/support.png" width="70px" height="50px" alt="" class="pcn-icon-btn">High-density Wi-Fi</a>
                <a href="#"  class="btn pcn-hero-btn-he" style="font-size: 16px;"><img src="./assets/images/icons/networking.png" width="70px" height="50px" alt="" class="pcn-icon-btn">Digital evices and Labs</a>
                <a href="#"  class="btn pcn-hero-btn-he" style="font-size: 16px;"><img src="./assets/images/icons/cloudcomputing.png" width="70px" height="50px" alt="" class="pcn-icon-btn">Campus Safety</a>
                <a href="#"  class="btn pcn-hero-btn-he" style="font-size: 16px;"><img src="./assets/images/icons/hesecurity.png" width="70px" height="50px" alt="" class="pcn-icon-btn">ESports</a>
            </div>
        </div>        
    </div>
    <div class="container-fluid" style="background-color: #004a80; height: 365px; padding: 8%;">
        <h1 style="margin: auto; color: white; font-weight: 200; font-size: 35px; text-align: center; text-transform: none;">Products and services from trusted experts</h1>
        <p style="margin: auto; color: white; font-weight: 200; font-size: 18px; text-align: center; width: 70%; margin-top:3%;">With PCN, you get a strategic partner with extensive resources. We leverage experience supporting global businesses and deep education industry expertise to achieve your goals.</p>
    </div>



    <div class="row">
        <div class="col-lg-6 col-sm-12">
            <img src="./assets/images/Higher-Ed-tmp.png" width="100%" height="100%" alt="">
        </div>
        <div class="col-lg-6 col-sm-12 pcn-mr" style="margin: auto 0px; padding:30px 0;">
            <h1 style="padding: 0px 50px; margin: 30px 0 0 0;text-transform: none; font-size: 35px; font-weight: 300;">School and district device management</h1>
            <p style="padding: 0px 50px; font-size: 16px; font-weight: 200;">Easy procurement, fast deployment and simplified maintenance means less downtime and more learning time. Our white-glove service offers a fully operational out-of-the-box experience, including planning, design, setup, asset tagging, support staff training and long-term management.</p>
            <div class="pcn-list">
                <li><img src="./assets/icons/icons-check-mark.png" height="22px" width="auto" style="margin: 0 1%;" alt=""> High-density Wi-Fi</li>
                <li><img src="./assets/icons/icons-check-mark.png" height="22px" width="auto" style="margin: 0 1%;" alt=""> Holistic network assessment</li>
                <li><img src="./assets/icons/icons-check-mark.png" height="22px" width="auto" style="margin: 0 1%;" alt=""> Outsourced network management</li>
                <li><img src="./assets/icons/icons-check-mark.png" height="22px" width="auto" style="margin: 0 1%;" alt=""> Guest network access</li>
                <li><img src="./assets/icons/icons-check-mark.png" height="22px" width="auto" style="margin: 0 1%;" alt=""> Integrated cybersecurity</li>
                <li><img src="./assets/icons/icons-check-mark.png" height="22px" width="auto" style="margin: 0 1%;" alt=""> Fast and reliable speeds</li>
                <li><img src="./assets/icons/icons-check-mark.png" height="22px" width="auto" style="margin: 0 1%;" alt=""> Virtualization and remote access</li>
                <li><img src="./assets/icons/icons-check-mark.png" height="22px" width="auto" style="margin: 0 1%;" alt=""> Servers and storage</li>
            </div>
        </div>
    </div>

    <div class="container-fluid" style="background-color: #efefef;">
        <div style="text-align:center; margin:0 0 0 0; padding: 100px 0 30px 0;">
            <div class="col-lg-7 col-md-12 col-sm-12" style="margin: 0 auto;">
                <h3 style="color: #004a80;">
                Cloud services for higher education
                </h3>
                <p>
                The cloud has unique benefits — like scaling quickly during peak times, such as enrollment and finals. We’ll help you establish the right workload alignment and management practices, so you can take full advantage of the cloud’s power and flexibility.
                </p>
            </div>
        </div>

        <div class="solutions container" style="padding: 0 0 100px 0;">

            <div class="row">

                <div class="col-lg-6 col-md-12 col-sm-12">
                    <div class="shadow solutions-box" style="padding:30px 40px; height: 330px;">
                        <img src="./assets/icons/icons-Flexible.png" height="46px" width="auto" style="margin: 2% 0;" alt="">
                        <h1 style="font-weight: 300; font-size: 25px;" style="margin: 0 0 1% 0;">
                        Cloud assessments and workshops
                        </h1>
                        <p style="color: black; margin: 5% 0 0 0; height:70px;">
                        Guided by our experienced cloud technicians and engineers, our assessments will guide you on a path to cloud excellence.
                        </p>
                        <div class="row">
                            <div class="col-6" style="margin: 2% 0;">
                                <a href="#" class="btn" role="button">LEARN MORE</a>
                            </div>
                        </div>
                    </div>
                </div>
    
                <div class="col-lg-6 col-md-12 col-sm-12">
                    <div class="shadow solutions-box" style="padding:30px 40px; height: 330px;">
                        <img src="./assets/icons/icons-Anywhere.png" height="46px" width="auto" style="margin: 2% 0;" alt="">
                        <h1 style="font-weight: 300; font-size: 25px;" style="margin: 0 0 1% 0;">
                        Consolidation and migration services
                        </h1>
                        <p style="color: black; margin: 5% 0 0 0; height:70px;">
                        Eliminate redundancies, simplify operations and accelerate performance by upgrading existing data centers and migrating to best-fit platforms
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
                    <div class="shadow solutions-box" style="padding:30px 40px; height: 330px;">
                        <img src="./assets/icons/icons-Updates.png" height="46px" width="auto" style="margin: 2% 0;" alt="">
                        <h1 style="font-weight: 300; font-size: 25px;" style="margin: 0 0 1% 0;">
                        Cloud platform
                        </h1>
                        <p style="color: black; margin: 5% 0 0 0; height:70px;">
                        A combination of public, private and hybrid clouds is ideal depending on your exact needs. We’ll help you property allocate your data and apps.
                        </p>
                        <div class="row">
                            <div class="col-6" style="margin: 2% 0;">
                                <a href="#" class="btn" role="button">LEARN MORE</a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-6 col-md-12 col-sm-12">
                    <div class="shadow solutions-box" style="padding:30px 40px; height: 330px;">
                        <img src="./assets/icons/icons-Uninterruped.png" height="46px" width="auto" style="margin: 2% 0;" alt="">
                        <h1 style="font-weight: 300; font-size: 25px;" style="margin: 0 0 1% 0;">
                        Data center management services
                        </h1>
                        <p style="color: black; margin: 5% 0 0 0; height:70px;">
                        Maintaining peak operation and tight security requires careful attention. Ease your IT burden by offloading maintenance and monitoring.
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