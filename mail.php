<?php 

    if (isset($_POST['submit'])) { 
    $name = $_POST['name'];
    $email = $_POST['email'];
    $message = $_POST['message'];
    $to = "centresggs@yahoo.com";
    $subject = "Message From Website";
    $from = $email;
    $headers = $name;
    if(mail($to,$subject,$message,$headers)){
       
        ?>
        <script>
            alert("Your message has been delivered. Thank You.");
            window.location.href="contact_us";
        </script>
        <?php
    }
        else
             ?>
        <script>
            alert("Sorry your message was not delivered. please try again later.");
            window.location.href="contact_us";
        </script>
        <?php
}else 
         ?>
        <script>
            window.location.href="contact_us";
        </script>
        <?php


?>