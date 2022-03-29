<?php
    include("./sessionvars.php");
    if (!isset($userEmail)) {
        header("Location: /");
    }
?>
<?php 
    print "<h1>Account Information</h1> <hr style=\"border-bottom: 3px solid #000;\" /> <h3>Username - $userName</h3> <hr /> <h3>Password - $userPassword</h3> <hr /> <h3>Username - $userName</h3>"
?>