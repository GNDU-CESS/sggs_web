<?php

	include 'db/connect.php';
	session_start();

error_reporting(0);

if (!(isset($_SESSION['login']) && $_SESSION['login'] != 'off')) {
$msg="You Need To Login First";
header ("Location: login?ee=$msg");



}

	if (empty($_POST['title']) || empty($_POST['date']) || empty($_POST['author']) || empty($_POST['blog'])) {
		echo "Please fill all the fields";	
		
	}

	else {
    $title = addslashes($_POST['title']);
 	$date = addslashes($_POST['date']);
    $text= nl2br(addslashes($_POST['blog']));
    $writer= addslashes($_POST['author']);
  	$image =  addslashes($_POST['pname']);

 
    $query= "INSERT INTO `blog` (`title`,`date`, `author`,`blog`,`image`) VALUES ('$title','$date','$writer','$text','$image')";

    $result=$db->query($query);

    if ($result===true) {
      echo "Post Was published Successfully";
    }

    else {
		echo "An Error Occured. Please Try Again";	
   }
}





?>










