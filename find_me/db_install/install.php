
<?php
  
$localhost = $_POST['localhost'];
$username = $_POST['username'];
$password = $_POST['pass'];



$link = mysqli_connect($localhost, $username, $password);
$sql_db = "CREATE DATABASE sggs_db_secure";
$sql_table = "CREATE TABLE `sggs_db_secure`.`events` ( `title` VARCHAR(100) NOT NULL , `date` VARCHAR(10) NOT NULL , `day` VARCHAR(15) NOT NULL , `place` VARCHAR(51) NOT NULL ) ENGINE = InnoDB";


if($link === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}
 


if(mysqli_query($link, $sql_db) && mysqli_query($link, $sql_table)){
    echo "Database created successfully";
} 
else {
    echo "Failed! Try Again:: $sql. " . mysqli_error($link);
}
 

mysqli_close($link);
?>









