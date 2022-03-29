<?php
    header('Location: /');
	exit;
?>
<!DOCTYPE html>
<html>
<head>

<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
<link rel="dns-prefetch" href="/static/">

<title>Forgot password</title>

<meta name="viewport" content="width=device-width, initial-scale=1">

<meta name="description" content="Make a video online for free with GoAnimate! Make videos for YouTube and Facebook, create business and educational videos, make animated e-cards and more!">
<meta property="og:site_name" content="Wrapper: Online">


<link href="/static/go/css/fonts/droidopensans.css" rel="stylesheet" type="text/css">
<link href="/static/go/css/bootstrap/bootstrap.css" rel="stylesheet" type="text/css">
<link href="/static/go/css/bootstrap/bootstrap-modal.css" rel="stylesheet" type="text/css">
<link href="/static/go/css/bootstrap/bootstrapSwitch.css" rel="stylesheet" type="text/css">
<link href="/static/go/css/style.css" rel="stylesheet" type="text/css">
<link href="/static/go/css/site.css" rel="stylesheet" type="text/css">
<link href="/static/go/css/overlay.css" rel="stylesheet" type="text/css">
<link href="/static/go/css/site_responsive.css" rel="stylesheet" type="text/css">

<link href="/static/go/css/signup.css" rel="stylesheet" type="text/css">
<!--[if lt IE 9]>
<style text="text/css">
.top-nav.collapse {height: auto;overflow: visible;}
</style>
<![endif]-->

<script src="/static/go/js/jquery/jquery-1.11.0.min.js"></script>

<script src="/static/go/js/bootstrap3/bootstrap.min.js"></script>
<script src="/static/go/js/bootstrap3/bootstrap-modalmanager.js"></script>
<script src="/static/go/js/bootstrap3/bootstrap-modal.js"></script>
<script src="/static/go/js/bootstrap3/bootstrap-switch.min.js"></script>


<script src="/static/go/js/go2.js"></script>
<script src="/static/go/js/jquery/jquery.swfobject.min.js"></script>
<script src="/static/go/js/jquery/jquery.blockUI-2.66.0.js"></script>
<script src="/static/go/js/jquery/jquery.scrollTo.min.js"></script>
<script src="/static/go/js/app.js"></script>

<script src="/static/go/js/cookie.js"></script>
<script src="/static/go/js/Gettext.js"></script>
<script type="text/javascript" src="/static/go/po/goserver_js-en_US.json"></script>
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
		jQuery.extend(CCStandaloneBannerAdUI, {"actionshopSWF":"\/static\/animation\/actionshop.swf","apiserver":"\/\/localhost:8080\/","clientThemePath":"\/static\/<client_theme>"});
</script>

<div class="page-container">

<!-- HEADER -->
<div class="site-header">
	<div class="container site-header-inside clearfix">
		<a class="site-logo" href="/" title="Wrapper: Online">
			<img alt="Wrapper: Online" src="/static/go/img/wrapper/logo.svg">
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
<script>
var RecaptchaOptions = {
	lang: 'en',
	theme: 'white'
};
</script>

<div class="hero">
	<div class="hero-bottom">
		<div class="container">
			<img class="landscape" src="/static/go/img/signup/img_landscape.png" alt="">
		</div>
	</div>
	<div class="container">
		<div class="floating-form">
			<h1>Forgot Password</h1>
			<p style="color: #aaa;">If you forgot your password, enter your email address below, and we will send you a link to reset it.</p>

			<form action="/emailpassword" method="post" novalidate>

				<div class="form-row">
					<div class="form-input">
						<label class="fi email" for="user-email">Email Address</label>
						<input id="user-email" type="email" name="email" placeholder="EMAIL ADDRESS" value="">
					</div>
				</div>
				<div class="form-row">
					<button class="btn btn-orange btn-large" type="submit">RESET MY PASSWORD</button>

					<input type="hidden" name="action" value="forgotpassword">
					<input type="hidden" name="lc" value="en_US"/>
				</div>
			</form>
		</div>
	</div>
</div>

</div>
</noscript>
</div>
</body>
</html>