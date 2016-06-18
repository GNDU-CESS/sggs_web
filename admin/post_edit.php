<?php
error_reporting(0);
	include 'db/connect.php';
	session_start();

session_start();

if (!(isset($_SESSION['login']) && $_SESSION['login'] != 'off')) {
$msg="You Need To Login First";
header ("Location: login?ee=$msg");



} 

	if (empty($_POST['title']) || empty($_POST['date']) || empty($_POST['author']) || empty($_POST['blog'])) {
		echo "Please fill all the fields";	
		
	}

	else {
	$id=$_POST['id'];
    $title = addslashes($_POST['title']);
 	$date = addslashes($_POST['date']);
    $text= nl2br(addslashes($_POST['blog']));
    $writer= addslashes($_POST['author']);
  	$image =  addslashes($_POST['pname']);

 
    $query= "UPDATE `blog`  SET
           title='$title',
            date= '$date',
           author= '$writer',
             blog= '$text',
            image= '$image'
             WHERE id= '$id'";

    $result=$db->query($query);

    if ($result===true) {
      echo true;
    }

    else {
		echo "An Error Occured. Please Try Again";	
   }
}





?>










