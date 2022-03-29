<?php
	require('../../../sessionvars.php')
?>
<html>

<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
	<link rel="dns-prefetch" href="/static/">
	<title>The Character Creator from Wrapper Online - Make a Character Online!</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="description" content="The Character Creator from Wrapper Online - Create a character online with Wrapper Online.">
	<meta property="og:site_name" content="Wrapper: Online">
	<link rel="canonical" href="https://wrapper.online/character/creator/family">
	<link href="/goapi/getStaticAsset/?file=sailec.css&type=css&subdir=fonts" rel="stylesheet" type="text/css">
	<link href="/goapi/getStaticAsset/?file=common_combined.css&type=css" rel="stylesheet" type="text/css">
	<link href="/goapi/getStaticAsset/?file=cc.css&type=css" rel="stylesheet" type="text/css">
	<!--[if lt IE 9]>
      <style text="text/css">
         .top-nav.collapse {height: auto;overflow: visible;}
      </style>
      <![endif]-->
	<script src="/goapi/getStaticAsset/?type=js&file=common_combined.js"></script>
	<script type="text/javascript" src="/goapi/getStaticAsset/?type=po&file=goserver_js-en_US.json"></script>
	<script type="text/javascript">
	var I18N_LANG = 'en_US';
	var GT = new Gettext({
		'locale_data': json_locale_data
	});
	</script>
	<script src="/static/go/js/sessionChecker.js.gz.js"></script>
	<script src="/goapi/getStaticAsset/?file=go_amp.js&type=js&subdir=amplitude"></script>
	<script></script>
</head>

<body class="en_US has-user">
	<script type="text/javascript">
	if(self !== top) {
		jQuery('body').hide();
	}
	</script>
	<script type="text/javascript">
	jQuery.extend(CCStandaloneBannerAdUI, {
		"actionshopSWF": "\/static\/animation\/actionshop.swf",
		"apiserver": "\/",
		"clientThemePath": "\/static\/<client_theme>",
	});
	</script>
	<div class="page-container">
		<div class="site-header">
			<div class="navbar site-nav site-nav--legacy" role="navigation">
				<div class="navbar-header">
					<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target=".navbar-ex1-collapse"> <span class="sr-only">Toggle navigation</span> <span class="icon-bar"></span> <span class="icon-bar"></span> <span class="icon-bar"></span> </button>
				</div>
				<div class="collapse navbar-collapse navbar-ex1-collapse">
					<ul class="nav navbar-nav navbar-right">
						<li class="dropdown"> <a class="dropdown-toggle" href="" data-toggle="dropdown">Help<span class="dropdown-caret"></span></a>
							<ul class="dropdown-menu dropdown-menu-help">
								<li> <a href="#" onclick="zE.activate({hideOnClose: true});amplitudeTrackCtaHelp('quick_search');return false;">Quick Search</a> </li>
								<li> <a href="" onclick="amplitudeTrackCtaHelp('help_center');" target="_blank">Help Center</a> </li>
								<li> <a href="https://product.vyond.com/" onclick="amplitudeTrackCtaHelp('whats_new');" target="_blank">Whats New</a> </li>
							</ul>
						</li>
						<script>
						$('.dropdown-menu-help').click(function(e) {
							e.stopPropagation();
						});
						</script>
						<li> <a class="hidden-sm hidden-md hidden-lg" href="https://ga.vyond.com/videomaker">Make a Video</a> <span class="site-nav-btn hidden-xs"><a class="btn btn-orange" href="https://ga.vyond.com/videomaker">Make a Video</a></span> </li>
						<li class="dropdown open"> </li>
						<script>
						$('.dropdown-menu-user').click(function(e) {
							e.stopPropagation();
						});
						</script>
					</ul>
				</div>
			</div>
		</div>
		<script>
		jQuery('.logout-link').click(function() {
			amplitudeTrackEvent(AMPLITUDE_EVENT.LOGOUT, null);
		});
		</script>
		<!-- END OF HEADER -->
		<div class="container container-cc">
			<ul class="breadcrumb">
				<li><a href="https://ga.vyond.com/videomaker">Make a video</a></li>
				<li><a href="https://ga.vyond.com/charactercreator/whiteboard">Whiteboard Animation Characters</a></li>
				<li class="active">Create a new character</li>
			</ul>
			<div>
				<div id="char_creator_client" align="center">
				</div>
			</div>
			<script>
			$('#char_creator_client').flash({
				id: "char_creator",
				swf: "/goapi/getStaticAsset/?file=cc.swf&type=swf&subdir=<?php echo 'studio/' . $userStudio; ?>",
				height: 600,
				width: 960,
				align: "middle",
				allowScriptAccess: "always",
				allowFullScreen: "true",
				wmode: "transparent",
				hasVersion: "10.3",
				flashvars: {
					"apiserver": "http:\/\/localhost\/",
					"m_mode": "school",
					"isLogin": "Y",
					"isEmbed": "1",
					"ctc": "go",
					"tlang": "en_US",
					"storePath": "/goapi/getStaticAsset/?path=<store>&pathtype=store&version=<?php echo $userStudio; ?>",
					"clientThemePath": "/goapi/getStaticAsset/?path=<client_theme>&pathtype=client",
					"appCode": "go",
					"page": "",
					"siteId": "go",
					"userId": "<?php echo $userId; ?>",
					"themeId": "family",
					"ut": <?php echo $userPermission; ?>,
					"bs": "adam"
				}
			});
			</script>
		</div>
		<script>
		function fbShare(ccId) {
			if(ccId == undefined) {
				return;
			}
			var url = encodeURIComponent('https://ga.vyond.com/?cc_id=' + ccId);
			var title = encodeURIComponent('I just created a new character on Vyond');
			var shareUrl = 'https://www.facebook.com/sharer.php?u=' + url + '&t=' + title;
			window.open(shareUrl, 'fbshare', 'height=350, width=650, top=100, left=100, toolbar=no, menubar=no, scrollbars=no, resizable=no, status=no');
		}
		</script>
		<script>
		$(window).on('amplitude_loaded', function() {
			amplitudeTrackEvent(AMPLITUDE_EVENT.LAUNCH_CHARACTER_CREATOR, {
				theme: 'Whiteboard Animation'
			});
		});
		// Amplitude interface for Flash player.
		function logAmplitudeEvent(eventName, eventProperties) {
			amplitudeTrackEvent(eventName, eventProperties);
		}
		</script>
		<!-- FOOTER -->
		<footer class="site-footer">
			<div class="container"> Vyond is a trademark of GoAnimate, Inc. © 2019 GoAnimate, Inc. <a href="https://www.vyond.com/terms">Terms of Service</a> | <a href="https://www.vyond.com/privacy">Privacy Policy</a> | <a href="https://www.vyond.com/cookies">Cookies Policy</a> </div>
		</footer>
		<div id="studio_container" style="display: none;">
			<div id="studio_holder">
				<!-- Full Screen Studio -->
				<div style="top: 50%; position: relative;"> You can't use Vyond because Flash might be disabled. <a href="https://get.adobe.com/flashplayer/">Enable Flash</a>. </div>
			</div>
		</div>
	</div>
	<!-- END OF PAGE STRUCTURE -->
	<div id="offer_container"></div>
	<script type="text/javascript"></script>
	<script type="text/javascript"></script>
</body>

</html>