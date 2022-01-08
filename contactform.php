<?php 

    if(isset($_POST['btn-send']))
    {
       $UserName = $_POST['name'];
       $Email = $_POST['email'];
       $Subject = $_POST['number'];
       $Msg = $_POST['message'];

       if(empty($UserName) || empty($Email) || empty($Subject) || empty($Msg))
       {
           header('location:index.php?error');
       }
       else
       {
           $to = "henrydoyle@mail.com";

           if(mail($to,$Subject,$Msg,$Email))
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