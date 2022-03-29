<?php
$rpt = $_POST['rpt'];
$decoded = base64_decode($rpt);
echo $rpt;
header("Content-Type: text/plain");
echo '0OK';
?>