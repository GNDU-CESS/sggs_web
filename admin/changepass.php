<?php
require_once('db/connect.php');
session_start();

if (!(isset($_SESSION['login']) && $_SESSION['login'] != 'off')) {
$msg="You Need To Login First";
header ("Location: login?ee=$msg");



}
else {
$msg="You Need To Login First";
}

$query="SELECT pass FROM gyananjan_auth";
$result = $db->query($query);
$getpass=$result->fetch_array();
$dataPass= $getpass['pass'];
$newPass=$_GET['new'];
$enterPass= $_GET['old'];
$encrypPass= md5($_GET['old']);
if($encrypPass===$dataPass && !empty($newPass)) {
$encrypnew = md5($newPass);
$upquery= "UPDATE gyananjan_auth SET pass='$encrypnew' WHERE pass='$dataPass'";
$set = $db->query($upquery);
if($set){
    echo '<div id="changeresp" class="alert alert-success col-md-12" role="alert">Password Successfully Changed</div>';
}
}

else {
echo '<div id="changeresp" class="alert alert-danger col-md-12" role="alert">Invalid Password</div>';
}




?>