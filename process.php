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
           $to = "glennpaulmabao@yahoo.com.ph";

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