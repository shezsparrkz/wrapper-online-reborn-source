<?php
if ($_POST['type'] == 'prop') {
    $path_to_zip = "./desc2.zip";
    header("Content-Type: application/zip");
    header("Content-Transfer-Encoding: Binary");
    header("Content-Length:".filesize($path_to_zip));
    readfile($path_to_zip);
    exit;
} else {
    $path_to_zip = "./desc.zip";
    header("Content-Type: application/zip");
    header("Content-Transfer-Encoding: Binary");
    header("Content-Length:".filesize($path_to_zip));
    readfile($path_to_zip);
    exit;
}

?>