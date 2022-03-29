<?php
    require('db.php');
    session_start();
    if (isset($_COOKIE['hasAccount'])) {
		if ($_COOKIE['hasAccount'] == 'Y') {
			$hasAccount = 'Y';
 		} else {
			$hasAccount = 'N';
 		}
 	} else {
		$hasAccount = 'N';
	}
    if(isset($_SESSION['email'])) {
        //easier access for getting the user's info
        //fuck
        $userEmail = $_SESSION['email'];
        $userPassword = $_SESSION['password'];
        $userInfoQuery    = "SELECT id, permissionlevel, username, studiosetting FROM `users` WHERE email='$userEmail'";
        $userInfoResult = mysqli_query($con, $userInfoQuery) or die();
        if ($row = $userInfoResult->fetch_assoc()) {
            $userId = $row['id'];
            $userPermission = $row['permissionlevel'];
            $userName = $row['username'];
            $userStudio = $row['studiosetting'];
        }
        //make the header have the "Your Account" dropdown.
        $accheader = "
            <li class=\"dropdown\">
                <a class=\"dropdown-toggle\" href=\"/videos\" data-toggle=\"dropdown\">Your Account 
                    <span class=\"caret\"></span>
                </a>
                <ul class=\"dropdown-menu\">
                    <li><a href=\"/dashboard\">Dashboard</a></li>
                    <li><a href=\"/dashboard/videos\">Your Videos</a></li>
                    <li class=\"divider\"></li>
                    <li><a href=\"/settings\">Settings</a></li>
                    <li><a href=\"/profile/$userId\">Your Profile</a></li>
                    <li class=\"divider\"></li>
                    <li><a class=\"logout-link\" href=\"/logout\">Logout</a></li>
                </ul>
            </li>
        ";
    } else {
        //make the header have the "Sign Up" and "Login" options
        $accheader = "
        <li><a href=\"/signup\">Sign Up</a></li>
        <li><a href=\"/login\">Login</a></li>
        ";
    }
?>
