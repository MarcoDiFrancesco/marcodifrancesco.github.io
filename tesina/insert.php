<?php
try {
	require "conn.php";
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