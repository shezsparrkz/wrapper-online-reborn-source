<?php
include('../../sessionvars.php');
$path_to_zip = "../../saved/sound/se/P1F7infuv6.mp3";
header("Content-Type: audio/mpeg");
header("Content-Transfer-Encoding: Binary");
header("Content-Length:".filesize($path_to_zip));
readfile($path_to_zip);
exit;
?>