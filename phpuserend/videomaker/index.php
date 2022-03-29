<?php
	include("../sessionvars.php");
?>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
<link rel="dns-prefetch" href="/static">

<title>The Video Maker from Wrapper: Online - Create Polished Videos &amp; Animations</title>


<meta name="description" content="Make a video using Wrapper: Online's powerful Video Maker studio. Enjoy full creative control with simple drag &amp; drop tools. Make a video today!">
<meta property="og:site_name" content="Wrapper: Online">


<link href="/goapi/getStaticAsset/?file=droidopensans.css&subdir=fonts&type=css" rel="stylesheet" type="text/css">
<link href="/goapi/getStaticAsset/?type=css&subdir=bootstrap&file=bootstrap.css" rel="stylesheet" type="text/css">
<link href="/goapi/getStaticAsset/?type=css&subdir=bootstrap&file=bootstrap-modal.css" rel="stylesheet" type="text/css">
<link href="/goapi/getStaticAsset/?file=bootstrapSwitch.css&subdir=bootstrap&type=css" rel="stylesheet" type="text/css">
<link href="/goapi/getStaticAsset/?file=style.css&type=css" rel="stylesheet" type="text/css">
<link href="/goapi/getStaticAsset/?file=site.css&type=css" rel="stylesheet" type="text/css">
<link href="/goapi/getStaticAsset/?file=overlay.css&type=css" rel="stylesheet" type="text/css">

<link href="/goapo/getStaticAsset/?file=upsell_modals.css&type=css" rel="stylesheet" type="text/css">
<link href="/goapi/getStaticAsset/?file=videomaker.css&type=css" rel="stylesheet" type="text/css">
<link href="/goapi/getStaticAsset/?file=home.css&type=css" rel="stylesheet" type="text/css">
<!--[if lt IE 9]>
<style text="text/css">
.top-nav.collapse {height: auto;overflow: visible;}
</style>
<![endif]-->

<script src="/goapi/getStaticAsset/?subdir=jquery&file=jquery-1.11.0.min.js&type=js"></script>

<script src="/goapi/getStaticAsset/?type=js&subdir=bootstrap3&file=bootstrap.min.js"></script>
<script src="/goapi/getStaticAsset/?type=js&subdir=bootstrap3&file=bootstrap-modalmanager.js"></script>
<script src="/goapi/getStaticAsset/?type=js&subdir=bootstrap3&file=bootstrap-modal.js"></script>
<script src="/goapi/getStaticAsset/?type=js&subdir=bootstrap3&file=bootstrap-switch.min.js"></script>


<script src="/goapi/getStaticAsset/?file=go2.js&type=js"></script>
<script src="/goapi/getStaticAsset/?type=js&subdir=jquery&file=jquery.swfobject.min.js"></script>
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
<script src="/goapi/getStaticAsset/?type=js&subdir=jquery&file=jquery.flexslider.min.js"></script>

</head>
<body class="en_US">
<script type="text/javascript">
if (self !== top) {
			jQuery('body').hide();
	}
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
					echo $accheader;
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

<div class="hp-main">
		<div class="home">
			<div class="container">
				<div class="home-content">
					<h1>Easily Make Animated Videos<small>Free, simple, and to the point.</small></h1>
				</div>
			</div>

			<!-- sticky banner -->
			<div class="sticky-wrapper" style=""><div class="home-sticky" id="sticky-banner"><div class="container"></div></div></div>
		</div>
	</div>
<div class="container themes-section">
	<div class="header">
		<div class="header-content">
			<h2>Select A Theme</h2>
			Pick a video-making theme based on its visual style, or use the filter to choose based on features.		</div>
			<div class="filter-dropdown-container">
			<div class="filter-dropdown dropdown">
				<a class="filter-dropdown-toggle" data-toggle="dropdown" href="#">Filter Themes <span class="caret"></span></a>
				<ul class="dropdown-menu pull-right" role="menu" aria-labelledby="dLabel">
					<li>
						<a class="filter-item" href="#" data-filter="lipsync">
							<div class="filter-icon"><img src="/static/go/img/videomaker/filter_lip.png" alt=""></div>
							<div class="filter-body">
								<div class="filter-name"><strong>Lip-sync</strong></div>
								<span class="filter-desc">Characters automatically lip-sync their dialog when lines are assigned to them.</span>
							</div>
							<div class="filter-checkbox-container">
								<span class="filter-checkbox"></span>
							</div>
						</a>
					</li>
					<li>
						<a class="filter-item" href="#" data-filter="ext_lib">
							<div class="filter-icon"><img src="/static/go/img/videomaker/filter_library.png" alt=""></div>
							<div class="filter-body">
								<div class="filter-name"><strong>Extensive Library</strong></div>
								<span class="filter-desc">Collections of characters, backgrounds and props corresponding to a wide variety of locations, occupations and industries.</span>
							</div>
							<div class="filter-checkbox-container">
								<span class="filter-checkbox"></span>
							</div>
						</a>
					</li>
					<li>
						<a class="filter-item" href="#" data-filter="starters">
							<div class="filter-icon"><img src="/static/go/img/videomaker/filter_starter.png" alt=""></div>
							<div class="filter-body">
								<div class="filter-name"><strong>Scene Starters</strong></div>
								<span class="filter-desc">Pre-made sequences that help you get started (or finished) quickly!  You can also save your own frequently-used sequences as starters.</span>
							</div>
							<div class="filter-checkbox-container">
								<span class="filter-checkbox"></span>
							</div>
						</a>
					</li>
					<li>
						<a class="filter-item" href="#" data-filter="qvm">
							<div class="filter-icon"><img src="/static/go/img/videomaker/filter_template.png" alt=""></div>
							<div class="filter-body">
								<div class="filter-name"><strong>Template</strong></div>
								<span class="filter-desc">Super-fast tool for creating simple, dialog-based videos.  Be finished in minutes!</span>
							</div>
							<div class="filter-checkbox-container">
								<span class="filter-checkbox"></span>
							</div>
						</a>
					</li>
					<li>
						<a class="filter-item" href="#" data-filter="char_creator">
							<div class="filter-icon"><img src="/goapi/getStaticAsset/?file=filter_cc.png&subdir=videomaker&type=img" alt=""></div>
							<div class="filter-body">
								<div class="filter-name"><strong>Character Creator</strong></div>
								<span class="filter-desc">Customize your characters!  Adapt existing characters to meet your needs or build completely from scratch.</span>
							</div>
							<div class="filter-checkbox-container">
								<span class="filter-checkbox"></span>
							</div>
						</a>
					</li>
				</ul>
			</div>
		</div>
	</div>

	<div class="filter-results" id="filter-results" style="display:none">
		<b class="filter-count">0</b> matching themes based on filters:
		<ul class="filter-crumb-list"></ul>
		<a class="filter-crumb-list-clear" href="#">Clear all</a>
	</div>

	
	<div class="themes clearfix" id="themes">

		<div class="theme" id="thm-custom" data-tags="lipsync qvm char_creator ext_lib">
			<div class="theme-cell">
				<div class="theme-cover">
					<img src="/goapi/getStaticAsset/?type=img&subdir=videomaker/themes&file=Comedy_World.jpg" alt="Comedy World">
				</div>
				<div class="theme-meat">
					<h3>Comedy World</h3>
					<div class="apps">
						<button class="btn btn-orange" type="button" onclick="<?php 
							if (isset($userEmail)) { 
								print "redirect(0, '/videomaker/full/custom');";
							} else {
								if ($hasAccount == 'Y') {
									print "showLogin(0, '/videomaker/full/custom');";
								} else {
									print "showSignup(0, '/videomaker/full/custom');";
								}
							} 
						?>" title="Video Maker">Make a Video</button>
						<button class="btn btn-icon" type="button" onclick="<?php 
							if (isset($userEmail)) { 
								print "redirect(0, '/character/creator/family');";
							} else {
								if ($hasAccount == 'Y') {
									print "showLogin(0, '/character/creator/family');";
								} else {
									print "showSignup(0, '/character/creator/family');";
								}
							} 
						?>" title="Character Creator"><i class="i-cc"></i></button>
					</div>
				</div>
			</div>
			<div class="theme-tag recommended">Recommended</div>
		</div>

		<div class="theme" id="thm-business" data-tags="char_creator lipsync starters ext_lib qvm">
			<div class="theme-cell">
				<div class="theme-cover launch">
					<img src="/goapi/getStaticAsset/?type=img&subdir=videomaker/themes&file=Business_Friendly.jpg" alt="Modern World">
				</div>
				<div class="theme-meat">
					<h3>Modern World</h3>
					<div class="apps">
						<button class="btn btn-orange" data-action="biz-preview" data-theme="Business Friendly" data-app-type="Video Maker" data-button-text="Preview Video Maker" data-callback="showSignup(0, '/videomaker/full/business-friendly');" title="" data-original-title="Video Maker">Make a Video</button>
						<button class="btn btn-icon" type="button" data-action="biz-preview" data-theme="Business Friendly" data-app-type="Character Creator" data-button-text="Preview Character Creator" data-callback="showSignup(0, 'http://goanimate.com/charactercreator/business');" title="" data-original-title="Character Creator"><i class="i-cc"></i></button>
					</div>
				</div>
			</div>
			<div class="theme-tag recommended">Recommended</div>
		</div>

		<div class="theme" id="thm-action" data-tags="lipsync qvm char_creator ext_lib">
			<div class="theme-cell">
				<div class="theme-cover">
					<img src="/goapi/getStaticAsset/?type=img&subdir=videomaker/themes&file=lil_Peepz.jpg" alt="Lil' Peepz">
				</div>
				<div class="theme-meat">
					<h3>Lil&#039; Peepz</h3>
					<div class="apps">
						<button class="btn btn-orange" type="button" onclick="<?php 
						if (isset($userEmail)) { 
							print "redirect(0, '/videomaker/full/action');";
						} else {
							if ($hasAccount == 'Y') {
								print "showLogin(0, '/videomaker/full/action');";
							} else {
								print "showSignup(0, '/videomaker/full/action');";
							}
						} 
						?>" title="Video Maker">Make a Video</button>
						<button class="btn btn-icon" type="button" onclick="<?php 
						if (isset($userEmail)) { 
							print "redirect(0, '/character/creator/cc2');";
						} else {
							if ($hasAccount == 'Y') {
								print "showLogin(0, '/character/creator/cc2');";
							} else {
								print "showSignup(0, '/character/creator/cc2');";
							}
						} 
						?>" title="Character Creator"><i class="i-cc"></i></button>
					</div>
				</div>
			</div>
			<div class="theme-tag recommended">Recommended</div>
		</div>

		<div class="theme" id="thm-retro" data-tags="">
			<div class="theme-cell">
				<div class="theme-cover">
					<img src="/goapi/getStaticAsset/?type=img&subdir=videomaker/themes&file=Cartoon_Classics.jpg" alt="Cartoon Classics">
				</div>
				<div class="theme-meat">
					<h3>Cartoon Classics</h3>
					<div class="apps">
						<button class="btn btn-orange" type="button" onclick="<?php 
							if (isset($userEmail)) { 
								print "redirect(0, '/videomaker/full/retro');";
							} else {
								if ($hasAccount == 'Y') {
									print "showLogin(0, '/videomaker/full/retro');";
								} else {
									print "showSignup(0, '/videomaker/full/retro');";
								}
							} 
						?>" title="Video Maker">Make a Video</button>
					</div>
				</div>
			</div>
		</div>

		<div class="theme" id="thm-politics2" data-tags="lipsync qvm">
			<div class="theme-cell">
				<div class="theme-cover">
					<img src="/static/go/img/videomaker/themes/Election_2012.jpg" alt="White Houserz">
				</div>
				<div class="theme-meat">
					<h3>White Houserz</h3>
					<div class="apps">
						<button class="btn btn-orange" type="button" onclick="showSignup(0, '/videomaker/full/election');" title="Video Maker">Make a Video</button>
					</div>
				</div>
			</div>
		</div>

		<div class="theme" id="thm-anime" data-tags="char_creator lipsync qvm">
			<div class="theme-cell">
				<div class="theme-cover">
					<img src="/static/go/img/videomaker/themes/Anime.jpg" alt="Anime">
				</div>
				<div class="theme-meat">
					<h3>Anime</h3>
					<div class="apps">
						<button class="btn btn-orange" type="button" onclick="showSignup(0, '/videomaker/full/anime');" title="Video Maker">Make a Video</button>
						<button class="btn btn-icon" type="button" data-action="upsell" data-hook="character" data-hook-button-text="Preview Character Creator" data-callback="showSignup(0, '/charactercreator/anime');" title="Character Creator"><i class="i-cc"></i></button>
					</div>
				</div>
			</div>
		</div>

		<div class="theme" id="thm-ninjaanime" data-tags="char_creator lipsync">
			<div class="theme-cell">
				<div class="theme-cover">
					<img src="/static/go/img/videomaker/themes/Ninja_Anime.jpg" alt="Ninja Anime">
				</div>
				<div class="theme-meat">
					<h3>Ninja Anime</h3>
					<div class="apps">
						<button class="btn btn-orange" type="button" onclick="showSignup(0, '/videomaker/full/ninjaanime');" title="Video Maker">Make a Video</button>
						<button class="btn btn-icon" type="button" data-action="upsell" data-hook="character" data-hook-button-text="Preview Character Creator" data-callback="showSignup(0, 'http://goanimate.com/charactercreator/ninjaanime');" title="Character Creator"><i class="i-cc"></i></button>
					</div>
				</div>
			</div>
		</div>

		<div class="theme" id="thm-spacecitizen" data-tags="lipsync">
			<div class="theme-cell">
				<div class="theme-cover">
					<img src="/static/go/img/videomaker/themes/Space_Citizens.jpg" alt="Space Citizens">
				</div>
				<div class="theme-meat">
					<h3>Space Citizens</h3>
					<div class="apps">
						<button class="btn btn-orange" type="button" onclick="showSignup(0, '/videomaker/full/spacecitizen');" title="Video Maker">Make a Video</button>
					</div>
				</div>
			</div>
		</div>

		<div class="theme" id="thm-chibi" data-tags="lipsync qvm char_creator">
			<div class="theme-cell">
				<div class="theme-cover">
					<img src="/static/go/img/videomaker/themes/Chibi_Peepz.jpg" alt="Chibi Peepz">
				</div>
				<div class="theme-meat">
					<h3>Chibi Peepz</h3>
					<div class="apps">
						<button class="btn btn-orange" type="button" onclick="showSignup(0, '/videomaker/full/chibi');" title="Video Maker">Make a Video</button>
						<button class="btn btn-icon" type="button" data-action="upsell" data-hook="character" data-hook-button-text="Preview Character Creator" data-callback="showSignup(0, '/charactercreator/chibi');" title="Character Creator"><i class="i-cc"></i></button>
					</div>
				</div>
			</div>
		</div>

		<div class="theme" id="thm-ninja" data-tags="lipsync qvm char_creator">
			<div class="theme-cell">
				<div class="theme-cover">
					<img src="/static/go/img/videomaker/themes/Chibi_Ninjas.jpg" alt="Chibi Ninjas">
				</div>
				<div class="theme-meat">
					<h3>Chibi Ninjas</h3>
					<div class="apps">
						<button class="btn btn-orange" type="button" onclick="showSignup('/videomaker/full/ninja');" title="Video Maker">Make a Video</button>
						<button class="btn btn-icon" type="button" data-action="upsell" data-hook="character" data-hook-button-text="Preview Character Creator" data-callback="showSignup(0, '/charactercreator/ninja');" title="Character Creator"><i class="i-cc"></i></button>
					</div>
				</div>
			</div>
		</div>

		<div class="theme" id="thm-space" data-tags="lipsync qvm">
			<div class="theme-cell">
				<div class="theme-cover">
					<img src="/static/go/img/videomaker/themes/Space_Peepz.jpg" alt="Space Peepz">
				</div>
				<div class="theme-meat">
					<h3>Space Peepz</h3>
					<div class="apps">
						<button class="btn btn-orange" type="button" onclick="showSignup(0, '/videomaker/full/space');" title="Video Maker">Make a Video</button>
					</div>
				</div>
			</div>
		</div>

		<div class="theme" id="thm-stick" data-tags="">
			<div class="theme-cell">
				<div class="theme-cover">
					<img src="/static/go/img/videomaker/themes/Stick_Figure.jpg" alt="Stick Figure">
				</div>
				<div class="theme-meat">
					<h3>Stick Figure</h3>
					<div class="apps">
						<button class="btn btn-orange" type="button" onclick="showSignup(0, '/videomaker/full/stick');" title="Video Maker">Make a Video</button>
					</div>
				</div>
			</div>
		</div>

		<div class="theme"></div>

		<div class="theme" id="thm-animal" data-tags="lipsync qvm">
			<div class="theme-cell">
				<div class="theme-cover">
					<img src="/static/go/img/videomaker/themes/Lil_Petz_World.jpg" alt="Lil' Petz World">
				</div>
				<div class="theme-meat">
					<h3>Lil&#039; Petz World</h3>
					<div class="apps">
						<button class="btn btn-orange" type="button" onclick="showSignup(0, '/videomaker/full/animal');" title="Video Maker">Make a Video</button>
					</div>
				</div>
			</div>
		</div>

	</div>
</div>

<script>
$(function() {
	$('.vm-tutorial-trigger').click(function(e) {
		e.preventDefault();

		var $tutorial = $('.vm-tutorial');

		if ($tutorial.hasClass('expand')) {
			$('.tutorial-video').hide();
			wistiaEmbed && wistiaEmbed.pause();
		} else {
			setTimeout(function() {
				$('.tutorial-video').show();
				wistiaEmbed && wistiaEmbed.play();
			}, 400);
		}

		$tutorial.toggleClass('expand');
	});

	$('.theme-cell').each(function() {
		var $button = $('.apps > .btn:first-child', this);
		var launch, url;

		$('.theme-cover', this).click(function(e) {
			e.preventDefault();

			if ($button.attr('href') != undefined) {
				window.location.href = $button.attr('href');
			} else {
				$button.trigger('click');
			}
		}).addClass('launch');
	});

	$('.vm-bf-content .btn-flat, .themes .apps > .btn').tooltip();
});

var tagNames = {"lipsync":"Lip-sync","ext_lib":"Extensive Library","starters":"Scene Starters","qvm":"Template","char_creator":"Character Creator"};
</script>

<script src="/goapi/getStaticAsset/?type=js&file=video_maker.js"></script>

<div id="biz-preview-overlay" class="modal hide">
	<div class="modal-header">
		<button class="close" type="button" data-dismiss="modal" aria-hidden="true">&times;</button>
		<h3 class="modal-title">Preview the <span class="theme-name"></span> <span class="app-type"></span></h3>
	</div>

	<div class="modal-body text-center">
		<div>
			<br>
			<img src="/static/go/img/videomaker/img_previewnsave.png">
			<br><br>
		</div>
	</div>

	<div class="modal-footer">
		<button class="btn btn-orange btn-cta" data-dismiss="modal">Preview</button>
	</div>
</div>

<div id="payment-license-overlay" class="modal hide"></div>


<!-- FOOTER -->

</div>
<!-- END OF PAGE STRUCTURE -->
    
<div id="container"></div>

<div id="offer_container">
</div>
</body>
</html>