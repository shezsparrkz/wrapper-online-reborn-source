<?php
    $theme = $_POST['theme_code'];
    $path = dirname(__DIR__,2) . '\static\wron\xml\premadecc\\' . $theme . '.xml';
    #echo $path; // for testing
    $ihatethis = fopen($path, "r");
    header("Content-Type: application/xml");
    if (filesize($path) == 0) {
        echo " ";
        exit;
    } else {
        $xml = fread($ihatethis,filesize($path));
        echo $xml;
    }
?>