<?php 

    if (isset($_POST['submit'])) { 
    $name = $_POST['name'];
    $email = $_POST['email'];
    $message = $_POST['message'];
    $to = "samridhi94chawla@gmail.com";
    $subject = "Message From Website";
    $from = $email;
    $headers = $name;
    if(mail($to,$subject,$message,$headers)){
       
        ?>
        <script>
            alert("your message has been delivered. Thank You.");
            window.location.href="contact_us";
        </script>
        <?php
    }
        else
             ?>
        <script>
            alert("Sorry your message was not delivered. please try agin later.");
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