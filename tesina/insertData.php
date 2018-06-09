<?php
require "../php/connect.php";
$data1 = $_GET["data1"];
$data2 = $_GET["data2"];
$data3 = $_GET["data3"];
$data4 = $_GET["data4"];
$data5 = $_GET["data5"];
$data6 = $_GET["data6"];

$query = "INSERT INTO `sensors` (`sensor1`, `sensor2`, `sensor3`, `sensor4`, `sensor5`, `sensor6`) 
VALUES ('".$data1."', '".$data2."', '".$data3."', '".$data4."', '".$data5."', '".$data6."');";
$sendquery = mysqli_query( $connect, $query );
?>