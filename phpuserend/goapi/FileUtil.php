<?php 
    function makeRandomString($length) {
        substr(str_shuffle('0123456789ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz'),1,$length);
    }

    function getSavedFiles($type) {
        $folder = dirname(__DIR__,1) . '/saved/character/';
        $files = scandir($folder);
        print_r($files);
    }

    function getCharFile($id) {
        $file = "/saved/character/$id.xml";
        echo readfile($file);
    }
?>