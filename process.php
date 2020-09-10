<?php 
if(isset($_POST['btn-send'])){
    $to = "glennpaulmabao@yahoo.com.ph"; // this is your Email address
    $from = $_POST['email']; // this is the sender's Email address
    $first_name = $_POST['Name'];
    $phone = $_POST['Phone'];
    $subject = "PCN Enquiries";
    $subject2 = "Copy of your form submission";
    $message = $full_name . " " . $email . " wrote the following:" . "\n\n" . $_POST['msg'];
    $message2 = "Here is a copy of your message " . $full_name . "\n\n" . $_POST['msg'];

    $headers = "From:" . $from;
    $headers2 = "From:" . $to;
    mail($to,$subject,$message,$headers);
    mail($from,$subject2,$message2,$headers2); // sends a copy of the message to the sender
    echo "Mail Sent. Thank you " . $full_name . ", we will contact you shortly.";
    // You can also use header('Location: thank_you.php'); to redirect to another page.
    }
?>