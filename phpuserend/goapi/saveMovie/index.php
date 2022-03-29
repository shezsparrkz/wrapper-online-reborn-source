<?php
$zipData = $_POST['body_zip'];
$zipDecode = base64_decode($zipData);
$zipLocation = dirname(__DIR__,2) . '/saved/movie/zip/';
$thumbData = $_POST['body_zip'];
$thumbDecode = base64_decode($zipData);
$thumbLocation = dirname(__DIR__,2) . '/saved/movie/thumb/';
if (isset($_POST['presaveId'])) {
    $movieId = $_POST['presaveId'];
} else {
    $movieId = substr(str_shuffle('0123456789ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz'),1,10);
}

$movieZipCreate = fopen("$zipLocation/$movieId.zip", "w+");
fwrite($movieZipCreate, $zipDecode);
fclose($movieZipCreate);
echo "0$movieId";
?>