<?php
require "connect.php";
if ( isset( $_POST[ "ledNumber" ] ) ) {
$ledNumber = $_POST[ "ledNumber" ];
$query = "SELECT state FROM led where id=" . $ledNumber;
$sendquery = mysqli_query( $connect, $query );
$takedata = mysqli_fetch_row($sendquery);
$ledState = $takedata[0];
echo $ledState;
}
?>
