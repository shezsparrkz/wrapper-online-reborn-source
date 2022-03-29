<?php
 include("sessionvars.php");
?>
<html><head>

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
<script src="/goapi/getStaticAsset/?file=bootstrap-switch.min.js&subdir=bootstrap3&type=js"></script>

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

<!-- END OF HEADER -->
<link href="/goapi/getStaticAsset/?file=lato.css&subdir=fonts&type=css" rel="stylesheet" type="text/css">

	<div class="hp-main">
		<div class="home">
			<div class="container">
				<div class="home-content">
					<h1>Easily Make Animated Videos<small>Free, simple, and to the point.</small></h1>
				</div>
			</div>

			<!-- sticky banner -->
			<?php
				if (isset($_SESSION["email"])) {
					print '<div class="sticky-wrapper" style=""><div class="home-sticky" id="sticky-banner"><div class="container"><span>Make a video in less than 5 Minutes</span><a class="btn btn-large btn-orange" href="/videomaker">Videomaker</a></div></div></div>';
				} else {
					print '<div class="sticky-wrapper" style=""><div class="home-sticky" id="sticky-banner"><div class="container"><span>Make your first video in less than 5 Minutes</span><a class="btn btn-large btn-orange" href="/signup">Sign up for free</a><a class="btn btn-large btn-dark" href="/login">Login</a></div></div></div>';
				}
			?>
		</div>
	</div>

	<div class="features" id="features">
		<div class="container">
			<h2>High End Results Without the Headaches</h2>

			<div class="row">
				<div class="span4 feature">
					<img src="/goapi/getStaticAsset/?file=video-equipment.png&subdir=home&type=img" alt="Video Equipment">
					<h3>Get started right away</h3>
					<p>You just need an internet connection. No setup required.</p>
				</div>

				<div class="span4 feature">
					<img src="/goapi/getStaticAsset/?file=team-and-budget.png&subdir=home&type=img" alt="Team and Budget">
					<h3>Do-it-yourself</h3>
					<p>No big team or budget. Just you and our easy-to-use tools.</p>
				</div>

				<div class="span4 feature">
					<img src="/goapi/getStaticAsset/?file=animated-video.png&subdir=home&type=img" alt="Animated Video">
					<h3>unlimited everything</h3>
					<p>Usage includes unlimited creation and hosting.</p>
				</div>
			</div>
		</div>
	</div>

	<div class="be-bold">
		<div class="container bold-container">
			<h2>Why Animated Video?</h2>

			<p class="be-bold-tagline">Animated video lets you tell your story out loud!  You're not passively capturing events with a camera.  You're making emphatic points, clearly and without constraints.</p>

			<div class="bold-features">
				<div class="flexibility">
					<img src="/goapi/getStaticAsset/?file=animated-flexibility.png&subdir=home&type=img" alt="">
					<h3>BEND LAWS OF NATURE</h3>
					<p>Animation, with its ability to slide scales and bend the laws of nature, provides the flexibility to really bring product benefits to life.</p>
				</div>

				<div class="explainer-video">
					<img src="/goapi/getStaticAsset/?file=explainer-video.png&subdir=home&type=img" alt="">
					<h3>GIVE CONTEXT TO YOUR IDEAS</h3>
					<p>Imagine starting on a closeup of a tree, then zooming out to show the entire forest, then blasting up into the sky for the BIG top view.  Animated video makes it simple to put it all in perspective.</p>
				</div>

				<div class="characters">
					<img src="/goapi/getStaticAsset/?file=animated-characters.png&subdir=home&type=img" alt="">
					<h3>REPRESENT DIVERSITY</h3>
					<p>Our characters can be customized into hundreds of different shades of color. Represent diversity effectively, without having to cast actors of a specific race or background.</p>
				</div>

				<div class="explanation">
					<img src="/goapi/getStaticAsset/?file=explanation.png&subdir=home&type=img" alt="">
					<h3>EXPLORE DIFFERENT WAYS</h3>
					<p>With animated video, you are not constrained by video footage. Switch backgrounds, move characters, add props. Test different ways to communicate your message.</p>
				</div>

				<div class="with-animation">
					<img src="/goapi/getStaticAsset/?file=explain-with-animation.png&subdir=home&type=img" alt="">
					<h3>CHANGE THOUGHTS INTO VISUALS</h3>
					<p>Animation is good at demonstrating the steps in a process. It is even better at demonstrating the thinking behind a process, by adapting from literal to conceptual with ease.</p>
				</div>

				<div class="targeted-marketing">
					<img src="/goapi/getStaticAsset/?file=targeted-marketing-video.png&subdir=home&type=img" alt="">
					<h3>STRIKE THE RIGHT TONE</h3>
					<p>The abstraction away from portraying real individuals allows animated video to strike a wider range of emotional tones.  This can help cover difficult subjects frankly and effectively, without causing the audience to get its defenses up.</p>
				</div>
			</div>
		</div>
	</div>

	<div class="flexible-workflow">
		<div class="container flexible-workflow-container">
			<h2>A Flexible Workflow</h2>
			<div class="content-block">
				<span class="icon scripting"></span>
				<div class="sub-content-container">
					<div class="sub-header">SCRIPTING AND STORYBOARDING</div>
					Start simply - just visualize your audience.  At the end of the video, what do you want
					them to think or feel or do?  That's your objective.  Now break that objective down into
					smaller steps.  That results in your content outline - a list of "mini objectives" that
					get the audience from point A to point B.  Next comes the creative part - coming up with
					visual elements to carry these content points.  Sketch these if you can -- then write
					your actual script to match these visuals.
				</div>
			</div>

			<div class="content-block">
				<span class="icon voice"></span>
				<div class="sub-content-container">
					<div class="sub-header">VOICE RECORDING</div>
					Adding your voice acting (dialog) or voice over (narration) is a snap.  You can import
					audio files, record directly into the platform or even crowdsource professional actors –
					and get very fast turnaround!  If you assign dialog to a character it will lip sync
					automatically.
				</div>
			</div>

			<div class="content-block">
				<span class="icon visual"></span>
				<div class="sub-content-container">
					<div class="sub-header">VISUAL EXCITEMENT</div>
					You might think it’s hard to get the characters and props moving around.  It’s not.  We
					have templates and starters to get you started quickly.  Customizing things is as easy as
					drag &amp; drop.  The menus are all WYSIWYG.  Our libraries have literally thousands of
					characters, backgrounds and props.  We also make it easy to import your own elements,
					such as a company logo, picture of a building or screen capture.
				</div>
			</div>

			<div class="content-block">
				<span class="icon audio"></span>
				<div class="sub-content-container">
					<div class="sub-header">AUDIO SWEETENING</div>
					After "directing" the visual part of your video, it's time to polish the audio.  Find just the
					right music track in our libraries – or import your own.  Drop little sound effects here and
					there to really bring your moments to life.  This too is just drag &amp; drop.  Adjusting the
					timing is as easy as sliding an icon left or right.
				</div>
			</div>

			<div class="content-block">
				<span class="icon publish"></span>
				<div class="sub-content-container">
					<div class="sub-header">PUBLISHING</div>
					Once your video is completed, you can publish it on GoAnimate and embed it on your
					site. You can also export it as an HD quality video to keep on your computer or put on
					Youtube and other sharing sites. We also offer numerous one-clicking sharing options to
					major social networks and online marketing platforms.
				</div>
			</div>

		</div>
	</div>

	<!--<div class="our-customers">
		<div class="container">
			<h2>Our Users Speak</h2>

			<div class="customers clearfix">
				<div class="customer">
					<div class="customer-bubble">
						<p class="customer-quote"><span></span></p>
					</div>
					<div class="customer-profile">
						<img src="" alt="">
						<div class="customer-name"></div>
						<div class="customer-organization"></div>
					</div>
				</div>

				<div class="customer">
					<div class="customer-bubble">
						<p class="customer-quote"><span></span></p>
					</div>
					<div class="customer-profile">
						<img src="" alt="">
						<div class="customer-name"></div>
						<div class="customer-organization"></div>
					</div>
				</div>

				<div class="customer">
					<div class="customer-bubble">
						<p class="customer-quote"><span></span></p>
					</div>
					<div class="customer-profile">
						<img src="" alt="">
						<div class="customer-name"></div>
						<div class="customer-organization"></div>
					</div>
				</div>
			</div>
		</div>
	</div>-->

	<div class="product-usage">
		<div class="container">
			<h2>So Many Uses - For Free</h2>

			<div class="usages clearfix">
				<div class="usage">
					<h3>Digital Marketing Videos</h3>
					<p>Make videos to improve performance on campaign landing pages.  Develop your leads and increase conversions for your business.</p>
				</div>
				<div class="usage">
					<h3>Videos for Training and eLearning</h3>
					<p>Make training videos online and publish to leading courseware authoring tools such as Lectora, Articulate or Captivate.</p>
				</div>
				<div class="usage">
					<h3>Produce Video Advertising Creative</h3>
					<p>Create advertising spots for online video distribution, such as on YouTube, Facebook or Hulu.</p>
				</div>
			</div>
			<div class="usages clearfix">
				<div class="usage">
					<h3>Content and Inbound Marketing</h3>
					<p>Create videos full of rich content to develop your professional reputation and attract customers to your site.</p>
				</div>
				<div class="usage">
					<h3>Video Presentations</h3>
					<p>Insert animated videos into your presentations to grab and hold the audience's attention.  Great alternative to PowerPoint!</p>
				</div>
				<div class="usage">
					<h3>Dynamic Charts and Infographics</h3>
					<p>Prove your points with hard data that looks dynamic and professional.  Our animated charts and infographics will grab your viewers' attention and get your point across in style.</p>
				</div>
			</div>
			<div class="usages clearfix">
				<div class="usage">
					<h3>Demo or Explainer Videos</h3>
					<p>Use our affordable online video makers to help explain a complex concept or to promote your product or company.</p>
				</div>
				<div class="usage">
					<h3>Small Business Marketing</h3>
					<p>Level the playing field by quickly producing professional videos for your web site.</p>
				</div>
				<div class="usage">
					<h3>Videos for Crowdsourcing</h3>
					<p>Rally support for your Kickstarter or Indiegogo campaign with a fun, shareable video.</p>
				</div>
			</div>
			<div class="usages clearfix">
				<div class="usage">
					<h3>Social Media Marketing</h3>
					<p>Share lighthearted or funny videos to show the human side of your company.</p>
				</div>
				<div class="usage">
					<h3>Produce Corporate Videos for your Clients</h3>
					<p>Production companies and marketing agencies can use our “Transfer Rights” option to serve their corporate video clients.</p>
				</div>
				<div class="usage">
					<h3>Create a Video Resume</h3>
					<p>Stand out from the pack with an animated video resume.  Upload it to LinkedIn!</p>
				</div>
			</div>
		</div>
	</div>

	<div class="plans">
		<div class="container">
			<?php
				if (isset($_SESSION["email"])) {
					print '<span>Easily make an animated video.</span><a class="btn btn-large btn-orange" href="/videomaker">Videomaker</a>';
				} else {
					print '<span>Easily make your first video.</span><a class="btn btn-large btn-orange" href="/signup">Sign up for free</a><a class="btn btn-large btn-dark" href="/login">Login</a>';
				}
			?>			
		</div>
	</div>
	<div class="site-footer">
		<div class="container clearfix">
			<div class="site-footer-nav clearfix">
				<div class="col" style="border-left: none; border-right: none;">
					<h5></h5>
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
						<li><a href="https://discord.gg/goanimate" target="_blank">GoAnimate City Discord Server</a></li>
						<li><a href="https://discord.gg/b7YSRkg" target="_blank">Wrapper Hub Discord Server</a></li>
						<li><a href="https://github.com/Wrapper-Offline/wrapper-offline-installer" target="_blank">Wrapper: Offline</a></li>
						<li>&nbsp;</li>
						<li>&nbsp;</li>
					</ul>
				</div>
				<div class="col" style="border-right: none;">
					<h5><span>Contact</span></h5>
					<ul>
						<li><a href="https://discord.gg/n9jummeYgj" target="_blank">Wrapper: Online Discord Server</a></li>
						<li><a href="mailto:wrapper.onlineofficial@gmail.com" target="_blank">Email</a></li>
						<li><a href="https://groups.google.com/g/wrapper-online-forums" target="_blank">Forums (Temporary)</a></li>
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
<!-- END OF PAGE STRUCTURE -->
</script>
</body></html>