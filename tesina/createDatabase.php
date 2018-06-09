<?php
require "../php/connect.php";

$sql="CREATE TABLE IF NOT EXISTS `sql1193345_1`.`sensors` ( 
`id` INT(64) NOT NULL AUTO_INCREMENT , 
`sensor1` VARCHAR(64) NOT NULL , 
`sensor2` VARCHAR(64) NOT NULL , 
`sensor3` VARCHAR(64) NOT NULL , 
`sensor4` VARCHAR(64) NOT NULL , 
`sensor5` VARCHAR(64) NOT NULL , 
`sensor6` VARCHAR(64) NOT NULL , 
`sensor7` VARCHAR(64) NOT NULL , 
`sensor8` VARCHAR(64) NOT NULL , 
`sensor9` VARCHAR(64) NOT NULL , 
`sensor10` VARCHAR(64) NOT NULL , 
`sensor11` VARCHAR(64) NOT NULL , 
`sensor12` VARCHAR(64) NOT NULL , 
`sensor13` VARCHAR(64) NOT NULL , 
`sensor14` VARCHAR(64) NOT NULL , 
PRIMARY KEY (`id`)
) ENGINE = InnoDB;"

mysqli_query($connect, $sql);

?>