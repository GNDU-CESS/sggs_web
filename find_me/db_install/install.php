<?php


$data_base = "CREATE DATABASE sggs_db_secure";

$create_table = "CREATE TABLE `sggs_db_secure`.`events` ( `title` VARCHAR(100) NOT NULL , `date` VARCHAR(10) NOT NULL , `day` VARCHAR(15) NOT NULL , `place` VARCHAR(51) NOT NULL ) ENGINE = InnoDB";

if ($data_base && $create_table) {
 echo "Install Complete Now delete the find_me folder";   
    
}

else {
 echo "Hey, It failed. No prob.. Try again.. Never Give UP!";   
    
}

?>