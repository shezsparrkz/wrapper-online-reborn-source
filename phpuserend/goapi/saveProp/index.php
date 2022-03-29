<?php
$target_dir = "../../saved/prop/";
$fileName = substr(str_shuffle('0123456789ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz'),1,10);
$getParts = pathinfo($_FILES["Filedata"]["name"]);
$fileExtension = $getParts['extension'];
$target_file = "$target_dir/$fileName.$fileExtension";
$assetName = $_POST['keywords'];
$uploadOk = 1;
$imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));

// Check if image file is a actual image or fake image
if(isset($_POST["submit"])) {
  $check = getimagesize($_FILES["Filedata"]["tmp_name"]);
  if($check !== false) {
    echo "File is an image - " . $check["mime"] . ".";
    $uploadOk = 1;
  } else {
    echo "File is not an image.";
    $uploadOk = 0;
  }
}

// Check if $uploadOk is set to 0 by an error
if ($uploadOk == 0) {
} else {
  if (move_uploaded_file($_FILES["Filedata"]["tmp_name"], $target_file)) {
  } else {
  }
}
$propsXmlDir = dirname(__DIR__,2) . '/saved/prop/importedProps.xml';
$propsXmlFile = fopen($propsXmlDir, 'a');
$xmlTemplate = "\n\t<prop subtype=\"0\" id=\"$fileName\" name=\"$assetName\" enable=\"Y\" holdable=\"0\" headable=\"0\" placeable=\"1\" facing=\"left\" width=\"0\" height=\"0\" duration=\"0\" enc_asset_id=\"$fileName\"/>";   
fwrite($propsXmlFile, $xmlTemplate);               
fclose($propsXmlFile);
echo "0$fileName";
?>