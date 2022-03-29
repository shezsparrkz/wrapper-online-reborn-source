<?php
$movieId = $_GET['movieId'];
$path_to_zip = dirname(__DIR__,2) . "/saved/movie/zip/$movieId.zip";
header("Content-Type: application/zip");
header("Content-Length:".filesize($path_to_zip));
readfile($path_to_zip);
exit;
?>