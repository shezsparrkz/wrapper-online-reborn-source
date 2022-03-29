<?php
  $ERRORCODE = "404";
  $REQUESTURL = (isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on' ? "https" : "http") . "://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";
?>
<?php
 include("sessionvars.php");
?>
<html lang="en" dir="ltr">
<head>

<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
<link rel="dns-prefetch" href="/static">

<title>Wrapper: Online</title>

<meta name="viewport" content="width=device-width, initial-scale=1">

<meta name="description" content="Make a video online for free with GoAnimate! Make videos for YouTube and Facebook, create business and educational videos, make animated e-cards and more!">
<meta property="og:site_name" content="Wrapper: Online">

<link href="/goapi/getStaticAsset/?file=droidopensans.css&subdir=fonts&type=css" rel="stylesheet" type="text/css">
<link href="/goapi/getStaticAsset/?file=bootstrap.css&subdir=bootstrap&type=css" rel="stylesheet" type="text/css">
<link href="/goapi/getStaticAsset/?file=bootstrap-modal.css&subdir=bootstrap&type=css" rel="stylesheet" type="text/css">
<link href="/goapi/getStaticAsset/?file=bootstrapSwitch.css&subdir=bootstrap&type=css" rel="stylesheet" type="text/css">
<link href="/goapi/getStaticAsset/?file=style.css&type=css" rel="stylesheet" type="text/css">
<link href="/goapi/getStaticAsset/?file=site.css&type=css" rel="stylesheet" type="text/css">
<link href="/goapi/getStaticAsset/?file=overlay.css&type=css" rel="stylesheet" type="text/css">
<link href="/goapi/getStaticAsset/?file=site_responsive.css&type=css" rel="stylesheet" type="text/css">

<link href="/goapi/getStaticAsset/?file=home.css&type=css" rel="stylesheet" type="text/css">
<!--[if lt IE 9]>
<style text="text/css">
.top-nav.collapse {height: auto;overflow: visible;}
</style>
<![endif]-->

<script src="/goapi/getStaticAsset/?file=jquery-1.11.0.min.js&subdir=jquery&type=js"></script>

<script src="/goapi/getStaticAsset/?file=bootstrap.min.js&subdir=bootstrap3&type=js"></script>
<script src="/goapi/getStaticAsset/?file=bootstrap-modalmanager.js&subdir=bootstrap3&type=js"></script>
<script src="/goapi/getStaticAsset/?file=bootstrap-modal.js&subdir=bootstrap3&type=js"></script>
<script src="/goapi/getStaticAsset/?file=bootstrap-switch.js&subdir=bootstrap3&type=js"></script>

<script src="/goapi/getStaticAsset/?file=go2.js&type=js"></script>
<script src="/goapi/getStaticAsset/?file=jquery.swfobject.min.js&subdir=jquery&type=js"></script>
<script src="/goapi/getStaticAsset/?file=jquery.blockUI-2.66.0.js&subdir=jquery&type=js"></script>
<script src="/goapi/getStaticAsset/?file=jquery.scrollTo.min.js&subdir=jquery&type=js"></script>

<script src="/goapi/getStaticAsset/?file=Gettext.js&type=js"></script>
<script type="text/javascript" src="/goapi/getStaticAsset/?file=goserver_js-en_US.json&type=po"></script>
<script type="text/javascript">
var I18N_LANG = 'en_US';
var GT = new Gettext({'locale_data': json_locale_data});
</script>
<script src="/goapi/getStaticAsset/?file=jquery.waypoints2.min.js&subdir=jquery&type=js"></script>
  <body class="en_US">
<script type="text/javascript">
if (self !== top) {
			jQuery('body').hide();
	}
</script>

<script type="text/javascript">
		jQuery.extend(CCStandaloneBannerAdUI, {"actionshopSWF":"/goapi/getStaticAsset/?file=actionshop.swf&subdir=current&type=swf","apiserver":"\/\/localhost:8080\/","clientThemePath":"\/static\/<client_theme>"});
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
				<?php
					echo "$accheader";
				?>
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

<div class="hp-main">
<div class="home">
<div class="container">
<div class="home-content">
<h1>Error 404<small>Not found.</small></h1>
</div>
</div>

<div class="home-sticky" id="sticky-banner">
<div class="container">
<span></span>
</div>
</div>
</div>
</div>
<div class="be-bold">
<div class="container bold-container">
<h2 class="be-bold-tagline">Error 404</h1>
<h4 class="be-bold-tagline error" style="color: #fff;">The URI you went to (<?php $link = (isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on' ? "https" : "http") . "://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]"; echo $link; ?>) does not exist.</h4>
<br>
<br>
<br>
<center><a class="btn btn-orange btn-banner" href="/">Go Back to the Homepage</a></center>
</div>
</div>
<div class="site-footer">
<div class="container clearfix">
<div class="site-footer-nav clearfix">
<div class="col" style="border-left: none; border-right: none;">
<h5><span></span></h5>
<ul>
<li>&nbsp;</li>
<li>&nbsp;</li>
<li>&nbsp;</li>
<li>&nbsp;</li>
<li>&nbsp;</li>
</ul>
</div>
<div class="col" style="border-left: none;">
<h5><span>Affiliates</span></h5>
<ul>
<li><a href="https://discord.gg/goanimate">GoAnimate City Discord Server</a></li>
<li><a href="https://discord.gg/b7YSRkg">Wrapper Hub Discord Server</a></li>
<li><a href="https://github.com/Wrapper-Offline/wrapper-offline/releases/tag/1.2.3-Final-Build">Wrapper: Offline</a></li>
<li>&nbsp;</li>
<li>&nbsp;</li>
</ul>
</div>
<div class="col" style="border-right: none;">
<h5><span>Contact</span></h5>
<ul>
<li><a href="https://discord.gg/n9jummeYgj">Wrapper: Online Discord Server</a></li>
<li><a href="mailto:wrapper.onlineofficial@gmail.com">Email</a></li>
<li><a href="https://groups.google.com/g/wrapper-online-forums">Forums (Temporary)</a></li>
<li>&nbsp;</li>
<li>&nbsp;</li>
</ul>
</div>
<div class="col" style="border: none;">
<h5></h5>
<ul>
<li>&nbsp;</li>
<li>&nbsp;</li>
<li>&nbsp;</li>
<li>&nbsp;</li>
<li>&nbsp;</li>
</ul>
</div>
</div>
</div>
</div>
</div>

<!-- END OF HEADER -->
<link href="/goapi/getStaticAsset/?file=lato.css&subdir=fonts&type=css" rel="stylesheet" type="text/css">


<!-- END OF PAGE STRUCTURE -->
  </body>
</html>
