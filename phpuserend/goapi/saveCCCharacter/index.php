<?php
    require('../FileUtil.php');
    require('../../sessionvars.php');
    require('../../db.php');
    //post vars
    $charSentXml = $_POST['body'];
    $charSentThumb = $_POST['imagedata'];
    $charXmlLocation = dirname(__DIR__,2) . '/saved/character/xml/';
    $charThumbLocation = dirname(__DIR__,2) . '/saved/character/thumb';
    $charId = substr(str_shuffle('0123456789ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz'),1,10);
    //char
    $charXml = fopen($charXmlLocation . $charId . '.xml', "w");
    fwrite($charXml, $charSentXml);
    fclose($charXml);
    //thumbnail
    $decodedThumb = base64_decode($charSentThumb);
    $charThumbTemp = imageCreateFromString($decodedThumb); 
    imagepng($charThumbTemp, $charThumbLocation . '/' . $charId . '.png', 0);
    $theme = $_POST['themeId'];
    $charThumbPlace = '/saved/character/thumb';
    $query    = "INSERT into `assets` (assetType, assetId, assetName, assetThumbUrl, assetOwner, assetTheme)
				VALUES ('char', '$charId', 'Untitled', '$charThumbPlace/$charId.png', '$userId', '$theme')";
	$result   = mysqli_query($con, $query);
    if ($result) {
        echo 'it worked';
    }
?>