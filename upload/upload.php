<?php
header('Content-type: text/html; charset=utf-8');
$directoryToUpload = "up/";
$fileToUpload = $directoryToUpload . basename($_FILES["nameFile"]["name"]);
$startUpload = 1;
$imageFileType = strtolower(pathinfo($fileToUpload,PATHINFO_EXTENSION));
if(isset($_POST["submitUpload"])){
	$check = getimagesize($_FILES["nameFile"]["tmp_name"]);
	if($check !== false){
		echo("Il file è un immagine - " . $check["mime"] . ".");
		$startUpload = 1;
	} else {
		echo("Non è un'immagine");
		$startUpload = 0;
	}
}
?>