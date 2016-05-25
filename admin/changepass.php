<?php
require_once('db/connect.php');
session_start();

if (!(isset($_SESSION['login']) && $_SESSION['login'] != 'off')) {

header ("Location: login");
    
$msg="You Need To Login First";

}
$query="SELECT pass FROM auth";
$result = $db->query($query);
$getpass=$result->fetch_array();
$dataPass= $getpass['pass'];
$newPass=$_GET['new'];
$enterPass= $_GET['old'];
$encrypPass= md5($_GET['old']);
if($encrypPass===$dataPass) {
$encrypnew = md5($newPass);   
$upquery= "UPDATE auth SET pass='$encrypnew' WHERE pass='$dataPass'";
$set = $db->query($upquery);
if($set){
    echo 'Password Successfully Changed';
}
}

else {
echo "Invalid Password";  
}




?>