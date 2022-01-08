<?php 

if (isset($_POST['SEND'])) {
    $name = $_POST['name'];
    $mailFrom = $_POST['mail'];
    $number = $_POST['number']; 
    $subject = $_POST['subject'];
    $mailTo = "henrydoyle@mail.com";
    $headers ="From: ".$mailFrom
    $txt = "You have  received an email ".$name.".\n\n".$subject

    mail($mailTo, $subject, $text, $headers);
    header("Location: contact.html?mailsend");
}