<?php
require_once('db/connect.php');
include 'includes/meta.php';
include 'includes/css.php';

session_start();

if (!(isset($_SESSION['login']) && $_SESSION['login'] != 'off')) {

header ("Location: login");

}

if(!empty($_POST['edit'])) {



    if(empty($_POST['name'])) {
    $rsp =  "Please Fill Name!";
    $sign="exclamation-sign";
    $alertype="warning";

}

else {
    $editid=$_POST['editid'];
    $name = addslashes($_POST['name']);
    $desig= $_POST['desig'];
    $email=addslashes($_POST['email']);
    $contact=addslashes($_POST['contact']);
    $desc=nl2br(addslashes($_POST['desc']));
    $imagename=addslashes($_POST['pname']);
    $edit_fac= "UPDATE faculty
        SET
           name='$name',
            designation= '$desig',
            email= '$email',
             contact= '$contact',
            description= '$desc',
            image= '$imagename'
        WHERE id = '$editid'";


    $result=$db->query($edit_fac);

    if ($result===true) {
       $rsp= "Faculty Edited Succesfully!<a href='index'> Go Home </a> or <a href='faculty_add'>Add New Faculty</a>";
        $sign="ok";
        $alertype="info";

    }

    else {
       $rsp= "Cannot Edit! Please Try Again: <a href='faculty_add'>Create New</a>";
        $sign="exclamation-sign";
        $alertype="danger";
    }
}

}

?>
<style>
    .alert {
        margin-top:5%;
    }

</style>
<body class="container">
<div id="alert" class="alert alert-<?php echo $alertype;?>" aria-hidden="true" role="alert">
    <span class="glyphicon glyphicon-<?php echo $sign;?>" aria-hidden="true"></span>
    <span class="sr-only" style="position:relative">  <?php echo $rsp; ?></span>
</div>
</body>
