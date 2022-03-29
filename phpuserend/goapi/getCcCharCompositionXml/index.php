<?php
    $charId = $_POST['assetId'];
    $charXmlLocation = dirname(__DIR__,2) . "/saved/character/xml/$charId.xml";
    $openFile = fopen($charXmlLocation, 'r');
    $readFile = fread($openFile, filesize($charXmlLocation));
    header("Content-Type: text/html");
    echo "0$readFile";
    fclose($openFile);
?>