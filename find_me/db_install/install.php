

<?php
  
include 'db_info.php';


$link = mysqli_connect($localhost, $username, $pass);
$sql_db = "CREATE DATABASE IF NOT EXISTS $db_name";






if($link === false){
    die("ERROR: " . mysqli_connect_error());
}
 


if(@mysqli_query($link, $sql_db)) {
    echo "Database created successfully. Now import .sql file from find_me folder";
} 

else {
    echo "Operation failed. Trying Changing user name and password in db_info. ", mysqli_error($link);
}




mysqli_close($link);
?>









