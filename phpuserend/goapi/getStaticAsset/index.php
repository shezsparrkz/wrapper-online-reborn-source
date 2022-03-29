<?php 
    // i don't know what the fuck i did here just don't worry about it
    if (isset($_GET['file'])) {
        $file = $_GET['file'] or die('');
        if (isset($_GET['filetype'])) {
            $type = 'wron/' . $_GET['filetype'] or die('');
        } else {
            $type = 'wron/' . $_GET['type'] or die('');
        }
    }
    if (isset($_GET['subdir'])) {
        $subdir = $_GET['subdir'];
        $dir = dirname(__DIR__,2) . "/static/$type/$subdir/$file";
    } else {
        if (!isset($_GET['path'])) {
            $dir = dirname(__DIR__,2) . "/static/$type/$file";
        }
    }
    if (isset($_GET['path'])) {
        $path = str_replace("custom","family",$_GET['path']);
        $dir = dirname(__DIR__,2) . "/static/" . $_GET['path'];
    }
    if (isset($_GET['version'])) {
        $pathtype = $_GET['pathtype'];
        $version = $_GET['version'];
        $dir = dirname(__DIR__,2) . "/static/$pathtype/$version/" . $_GET['path'];
    }
    if (isset($_GET['type'])) {
        
    }
    if (isset($_GET['httptype'])) {
        $htype = $_GET['httptype'];
        header("Content-Type: $htype");
    } else {
        if ((isset($_GET['type'])) && ($_GET['type'] == 'css')) {
            $htype = 'text/css';
            header("Content-Type: $htype");
        } else {
            if (mime_content_type($dir) == TRUE) {
                $httptype = mime_content_type($dir); 
                header("Content-Type: $httptype");
            } else {
                http_response_code(400);
                echo 'This file does not exist.';
                exit;
            }
        }
    }
    $fileOpen = fopen($dir, "r");
    $fileRead = fread($fileOpen, filesize($dir));
    echo $fileRead;
    fclose($fileOpen);
?>