<?php
try {
	$connect = mysqli_connect('89.46.111.61', 'Sql1193345', '81027d2630', 'Sql1193345_1');
	if ( isset( $_POST[ "ledState" ] ) ) {
		$ledState = $_POST[ "ledState" ];
		$ledNumber = $_POST[ "ledNumber" ];
		$query = "UPDATE led SET state='" . $ledState . "' WHERE id=" . $ledNumber;
		$sendquery = mysqli_query( $connect, $query );
		echo "Led " . $ledNumber . " aggiornato " . $ledState;
	}
} catch ( PDOException $error ) {
	echo $error->getMessage();
}
?>