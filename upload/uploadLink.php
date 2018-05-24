<?php
/*
$link = $_POST["linkToUpload"];

$upload = file_put_contents("uploads/test".rand().".txt", fopen($link, 'r'));

// https://drive.google.com/uc?authuser=0&id=1Cphvdy85UnC4ne2UtioRJ1YNkxc4RQpl&export=download
// https://www.marcodifrancesco.com/upload/uploads/100%20mega.txt
header("Location: index.php");
*/

// code taken by developer drive
// i'm trying to download drive contents from a link
$fileId = '0BwwA4oUTeiV1UVNwOHItT0xfa2M';
$response = $driveService->files->get($fileId, array(
    'alt' => 'media'));
$content = $response->getBody()->getContents();
?>
