<?php 


    if (isset($_post['submit'])) { 
    $name = $_POST['name'];
    $email = $_POST['email'];
    $message = $_POST['message'];
    $to = "mail2paras.s@gmail.com";
    $subject = "Message From Website";
    $from = "paraazz@outlook.com";
    $headers = "From:abs@hmail.com";
    mail($to,$subject,$message,$headers);
}


?>