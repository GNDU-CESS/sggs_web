

<?php
  
include 'db_info.php';


$link = mysqli_connect($localhost, $username, $pass);
$sql_db = "CREATE DATABASE sggs_db_secure";
$sql_table = "CREATE TABLE `sggs_db_secure`.`events` ( `title` VARCHAR(100) NOT NULL , `date` VARCHAR(50) NOT NULL , `day` VARCHAR(15) NOT NULL , `place` VARCHAR(51) NOT NULL ) ENGINE = InnoDB";
$data = "INSERT INTO `sggs_db_secure`.`events` (`title`, `date`, `day`, `place`) VALUES ('I. Gurumustuk Singh Khalsa, founder and CTO of the SikhNet.com website will be speaking ', '15th March, 2016 ', 'Tuesday', 'Guru Granth Sahib Bhawan'), ('II. Special Lecture by Bobby Singh Bansal has presented over Sikh legacy in Pakistan', '25 January, 2016', 'Thursday', 'At Guru Granth Sahib Bhawan')";



if($link === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}
 


if(mysqli_query($link, $sql_db) && mysqli_query($link, $sql_table) && mysqli_query($link,$data)) {
    echo "Database created successfully";
} 
else {
    echo "Failed! Try Again:: Change variables value in db_info file" . mysqli_error($link);
}
$link = mysqli_connect($localhost, $username, $pass, $dbname);



mysqli_close($link);
?>









