<?php 
	session_start();
	if(isset($_SESSION["email"])) {
		header("Location: /");
		exit;
	}
	if(isset($_GET['r'])) {
		$redirect = $_GET['r'];
	}
?>
<?php
    require('db.php');
	function getError($loginError) {
		if ($loginError == '1') {
			$errordesc = "Incorrect email or password.";
		}
		if ($loginError == '2') {
			$errordesc = "Account suspended.";
		}
		if ($loginError == '3') {
			$errordesc = "Account terminated.";
		}
		if ($loginError == '4') {
			$errordesc = "Internal MySQL error.";
		}
	}
    if (isset($_POST["email"])) {
        $email = stripslashes($_REQUEST["email"]);    // removes backslashes
        $email = mysqli_real_escape_string($con, $email);
        $password = stripslashes($_REQUEST["password"]);
        $password = mysqli_real_escape_string($con, $password);
        $query    = "SELECT * FROM `users` WHERE email='$email'
                     AND password='" . md5($password) . "'";
        $result = mysqli_query($con, $query) or getError("4");
        $rows = mysqli_num_rows($result);
        if ($rows == 1) {
			setcookie("hasAccount", "Y");
            $_SESSION["email"] = $email;
			$_SESSION["password"] = md5($password);
			if (isset($redirect)) {
				header("Location: $redirect");
				exit;
			} else {
				header("Location: /");
				exit;
			}
        } else {
            getError("1");
        }
	}
?>
<!DOCTYPE html>
<html>
<head>

<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
<link rel="dns-prefetch" href="/static/">

<title>Login to Wrapper: Online</title>

<meta name="viewport" content="width=device-width, initial-scale=1">

<meta name="description" content="">
<meta property="og:site_name" content="Wrapper: Online">


<link href="/goapi/getStaticAsset/?file=droidopensans.css&subdir=fonts&type=css" rel="stylesheet" type="text/css">
<link href="/goapi/getStaticAsset/?file=bootstrap.css&subdir=bootstrap&type=css" rel="stylesheet" type="text/css">
<link href="/goapi/getStaticAsset/?file=bootstrap-modal.css&subdir=bootstrap&type=css" rel="stylesheet" type="text/css">
<link href="/goapi/getStaticAsset/?file=bootstrapSwitch.css&subdir=bootstrap&type=css" rel="stylesheet" type="text/css">
<link href="/goapi/getStaticAsset/?file=style.css&type=css" rel="stylesheet" type="text/css">
<link href="/goapi/getStaticAsset/?file=site.css&type=css" rel="stylesheet" type="text/css">
<link href="/goapi/getStaticAsset/?file=overlay.css&type=css" rel="stylesheet" type="text/css">
<link href="/goapi/getStaticAsset/?type=css&file=site_responsive.css" rel="stylesheet" type="text/css">

<link href="/goapi/getStaticAsset/?file=signup.css&type=css" rel="stylesheet" type="text/css">
<!--[if lt IE 9]>
<style text="text/css">
.top-nav.collapse {height: auto;overflow: visible;}
</style>
<![endif]-->

<script src="/goapi/getStaticAsset/?type=js&subdir=jquery&file=jquery-1.11.0.min.js"></script>

<script src="/goapi/getStaticAsset/?type=js&subdir=bootstrap3&file=bootstrap.min.js"></script>
<script src="/goapi/getStaticAsset/?type=js&subdir=bootstrap3&file=bootstrap-modalmanager.js"></script>
<script src="/goapi/getStaticAsset/?type=js&subdir=bootstrap3&file=bootstrap-modal.js"></script>
<script src="/goapi/getStaticAsset/?type=js&subdir=bootstrap3&file=bootstrap-switch.min.js"></script>


<script src="/goapi/getStaticAsset/?type=js&file=go2.js"></script>
<script src="/goapi/getStaticAsset/?file=jquery.swfobject.min.js&type=js&subdir=jquery"></script>
<script src="/goapi/getStaticAsset/?type=js&subdir=jquery&file=jquery.blockUI-2.66.0.js"></script>
<script src="/goapi/getStaticAsset/?type=js&subdir=jquery&file=jquery.scrollTo.min.js"></script>
<script src="/goapi/getStaticAsset/?type=js&file=app.js"></script>

<script src="/goapi/getStaticAsset/?type=js&file=cookie.js"></script>
<script src="/goapi/getStaticAsset/?type=js&file=Gettext.js"></script>
<script type="text/javascript" src="/goapi/getStaticAsset/?type=po&file=goserver_js-en_US.json"></script>
<script type="text/javascript">
var I18N_LANG = 'en_US';
var GT = new Gettext({'locale_data': json_locale_data});
</script>

</head>
<body class="en_US">
<script type="text/javascript">
if (self !== top) {
			jQuery('body').hide();
	}
</script>

<script type="text/javascript">
		jQuery.extend(CCStandaloneBannerAdUI, {"actionshopSWF":"\/static\/animation\/actionshop.swf","apiserver":"","clientThemePath":"\/static\/<client_theme>"});
</script>

<div class="page-container">

<!-- HEADER -->
<div class="site-header">
	<div class="container site-header-inside clearfix">
		<a class="site-logo" href="/" title="Wrapper: Online">
			<img alt="Wrapper: Online" src="/goapi/getStaticAsset/?file=logo.svg&subdir=wrapper&type=img&httptype=image%2Fsvg%2Bxml">
		</a>

		<button type="button" class="top-nav-toggle" data-toggle="collapse" data-target="#top-nav">
			<span class="icon-bar"></span>
			<span class="icon-bar"></span>
			<span class="icon-bar"></span>
		</button>
		
			<ul id="top-nav" class="top-nav collapse">
				<li><a href="/signup">Sign Up</a></li>
				<li><a href="/login">Login</a></li>
				<li class="dropdown">
					<a class="dropdown-toggle" href="/videos" data-toggle="dropdown">Explore <span class="caret"></span></a>
					<ul class="dropdown-menu">
						<li><a href="/forums">Forums</a></li>
						<li><a href="/videos">Videos</a></li>
					</ul>
				</li>
				<li class="top-nav-vm-btn">
					<span><a class="btn btn-orange" href="/videomaker">Make a Video</a></span>
				</li>
			</ul>

	</div>
</div>

<!-- END OF HEADER -->

<div class="hero">
	<div class="container">
		<div class="floating-form">
			<h1>Login</h1>
            <?php 
				if (isset($errordesc)) {
                	print "
                		<div class=\"loginerror\">
							<div class=\"errorclose\"><a onclick=\"errorclose()\">x</a></div>
							<h4>Login Error!</h4>
                    		<h5>$errordesc</h5>
                		</div>
                	";
				}
            ?>
			<form class="login-form" id="login-form" method="post" novalidate>
				<div class="form-error-message" id="login-form-message"></div>
				<div class="form-row">
					<div class="form-input">
						<label class="fi email" for="login-email">Email Address</label>
						<input id="login-email" type="email" name="email" placeholder="EMAIL ADDRESS">
					</div>
				</div>
				<div class="form-row">
					<div class="form-input">
						<label class="fi password" for="login-password">Password</label>
						<input id="login-password" type="password" name="password" placeholder="PASSWORD">
					</div>
				</div>
				<div class="form-row" style="color: #bbb;">
					<a href="/forgotpassword">Forgot your password?</a>
				</div>
				<div class="form-row">
					<button class="btn btn-orange btn-large" id="btn-login" type="submit" name="submit">LOGIN</button>
				</div>
				<div class="form-row" style="color: #bbb;">
					No account? <a href="/signup">Sign Up!</a>
				</div>
			</form>
		</div>
	</div>
</div>

</div>
<!-- END OF PAGE STRUCTURE -->
<div id="container"></div>
<div id="offer_container">
</div>
<style>
	.form-row>a {
		color: #ddd;
	}
	.form-row>a:hover {
		color: #8862fe;
		text-shadow: 1px 1px 2px #000;
	}
	.errorclose {
		position: absolute;
		right: 55px;
		top: 95px;
		font-size: 20px;
	}
	.errorclose>a {
		color: #ddd;
	}
	.errorclose>a:hover {
		color: #8862fe;
		text-shadow: 1px 1px 2px #000;
	}
	.loginerror {
		text-align: center;
		background-color: #ee8888;
		padding: 10px;
		margin-bottom: 30px; 
		border: 5px solid #ee6666; 
		border-radius: 5px; 
		color: #3e3e3e;
	}
</style>
<script>

	function errorclose() {
		$( "div" ).remove( ".loginerror" );
	}
</script>
</body>
</body>
</html>