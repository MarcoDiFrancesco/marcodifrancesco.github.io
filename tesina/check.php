<?php
try {
	$connect = mysqli_connect('89.46.111.61', 'Sql1193345', '81027d2630', 'Sql1193345_1');
	if ( isset( $_POST[ "ledNumber" ] ) ) {
		$ledNumber = $_POST[ "ledNumber" ];
		$query = "SELECT state FROM led where id=" . $ledNumber;
		$sendquery = mysqli_query( $connect, $query );
		$takedata = mysqli_fetch_row($sendquery);	
//		$ledState = 0;
		$ledState = $takedata[0];
		echo $ledState;
	}
} catch ( PDOException $error ) {
	echo $error->getMessage();
}
?>