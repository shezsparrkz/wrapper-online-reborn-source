<?php
    require('../FileUtil.php');
    require('../../db.php');
    require('../../sessionvars.php');
    $type = $_POST['type'];
    if ($type === 'char') {
        $theme = $_POST['themeId'];
        if ($theme == 'custom') {
            $theme = 'family';
        }
        header("Content-Type: text/xml");

        echo '<?xml version="1.0" encoding="utf-8"?><ugc more="0">';
        
        $sql = "SELECT * FROM assets WHERE assetType='char' AND assetTheme='$theme' AND assetOwner='$userId'";
        $result = mysqli_query($con, $sql);

        if (mysqli_num_rows($result) > 0) {
            while($row = mysqli_fetch_assoc($result)) {
                $assetId = $row['assetId'];
                $assetName = $row['assetName'];
                $assetThumbUrl = $row['assetThumbUrl'];
                $copyable = $row['copyable'];
                echo "\n\t<char id=\"$assetId\" name=\"$assetName\" cc_theme_id=\"$theme\" thumbnail_url=\"$assetThumbUrl\" copyable=\"$copyable\"><tags/></char>";
            } 
        }

        echo "</ugc>";
    }
    if ($type === 'sound') {
        $soundsXmlDir = dirname(__DIR__,2) . '/saved/sound/importedSounds.xml';
        $soundsXmlFile = fopen($soundsXmlDir, 'r');
        $soundsXml = fread($soundsXmlFile, filesize($soundsXmlDir)) . "\n</ugc>";
        header("Content-Type: text/xml");
        echo "$soundsXml";
    }
    if ($type === 'prop') {
        $propsXmlDir = dirname(__DIR__,2) . '/saved/prop/importedProps.xml';
        $propsXmlFile = fopen($propsXmlDir, 'r');
        $propsXml = fread($propsXmlFile, filesize($propsXmlDir)) . "\n</ugc>";
        header("Content-Type: text/xml");
        echo "$propsXml";
    }
?>