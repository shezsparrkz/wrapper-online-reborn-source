<?php
$path_to_zip = dirname(__DIR__,2) . '/static/wron/zip/themelist.zip';
header("Content-Type: application/zip");
header("Content-Transfer-Encoding: Binary");
header("Content-Length:".filesize($path_to_zip));
readfile($path_to_zip);
exit;
?>