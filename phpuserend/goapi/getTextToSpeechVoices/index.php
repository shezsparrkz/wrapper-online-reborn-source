<?php
    $json = readfile('./voices.xml');
    var_dump(json_decode($json));
?>