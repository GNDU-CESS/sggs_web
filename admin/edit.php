<?php
session_start();

if (!(isset($_SESSION['login']) && $_SESSION['login'] != 'off')) {
$msg="You Need To Login First";
header ("Location: login?ee=$msg");



}
require_once('db/connect.php');
include 'includes/meta.php';
include 'includes/css.php';



if(!empty($_POST['edit'])) {



    if(empty($_POST['title']) || empty($_POST['date']) || empty($_POST['venue']) || empty($_POST['pname'])) {
    $rsp =  "Please go back and fill all the fields";
    $sign="exclamation-sign";
    $alertype="warning";

}

else {
    $editid=$_POST['editid'];
    $title = addslashes($_POST['title']);
    $date= $_POST['date'];
    $venue=addslashes($_POST['venue']);
    $desc=addslashes($_POST['desc']);
    $imagename=addslashes($_POST['pname']);
    $event_edit= "UPDATE gyananjan_events
        SET
            title='$title',
            date = '$date',
            venue = '$venue',
            description= '$desc',
            imgname= '$imagename'
        WHERE id = '$editid'";


    $result=$db->query($event_edit);

    if ($result===true) {
       $rsp= "Event Edited Succesfully!<a href='index'> Go Home </a> or <a href='create_event'>Create New Event</a>";
        $sign="ok";
        $alertype="info";

    }

    else {
       $rsp= "Cannot Edit Event! Please Create Fresh: <a href='create_event'>Create New</a>";
        $sign="ok";
        $alertype="danger";
    }
}

}

?>
    <style>
        .alert {
            margin-top: 5%;
        }
    </style>

    <body class="container">
        <div id="alert" class="alert alert-<?php echo $alertype;?>" aria-hidden="true" role="alert">
            <span class="glyphicon glyphicon-<?php echo $sign;?>" aria-hidden="true"></span>
            <span class="sr-only" style="position:relative">  <?php echo $rsp; ?></span>
        </div>
    </body>