<?php

require_once('db/connect.php');

include 'includes/meta.php';
include 'includes/css.php';



$msg="Login with Username and Password";  
 $error = "success";



if(isset($_POST['auth'])) {
    if(empty($_POST['user']) || empty($_POST['pass'])) {
     $msg="Please fill all the fields";
     $error = "danger";
    }
    
    else {
        $user=$_POST['user'];
        $pass=$_POST['pass'];
        $epass= md5($pass);
        $query="SELECT * FROM auth WHERE  user='$user' AND pass='$epass'";
        
        $gain=$db->query($query);
        
        if ($gain) {
           if ($gain->num_rows > 0) {

            session_start();
            $_SESSION['login'] = "on";
            $_SESSION['user']=$user;
            header('location:index');

            }
            else {
            session_start();
            $_SESSION['login'] = "off";
            $msg= "Invalid Username or Password";
            $error = "danger";
            } 
        }

            else {
             $msg="Login Failed";
             $error = "danger";
            }
        
    }
}










$db->close();
    
?>

    <style>
        .well {
            padding: 20px !important;
            box-shadow: 0px 1px 5px 1px black;
            width: 300px;
        }
        
        body {
            background-image: url('../img/bhavan.jpg');
        }
        
        .enter {
            -webkit-filter: blur(0px)!important;
        }
    </style>

    <body>
        <div class="container">
            <div class="well enter">
                <div class="alert alert-<?php echo $error; ?> text-center" role="alert">
                    <?php echo $msg;  ?>
                </div>
                <form method="post" action="">
                    <input type="text" class="form-control" name="user" placeholder="User Name">
                    <br>
                    <input type="password" class="form-control" name="pass" placeholder="Password">
                    <br>
                    <center>
                        <input type="submit" class="btn btn-primary" name="auth" value="Login">
                    </center>


                </form>
            </div>
        </div>
    </body>

    </html>