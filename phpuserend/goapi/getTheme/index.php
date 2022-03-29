<?php
include('../../sessionvars.php');
$theme = $_POST['themeId'];
$path_to_zip = "../../static/store/legacy/$theme/$theme.zip";
header("Content-Type: application/zip");
header("Content-Transfer-Encoding: Binary");
header("Content-Length:".filesize($path_to_zip));
readfile($path_to_zip);
exit;
?>