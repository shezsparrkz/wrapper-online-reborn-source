<?php
    include("../FileUtil.php");
    $aid = substr(str_shuffle('0123456789ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz'),1,10);
    echo "0$aid";
?>