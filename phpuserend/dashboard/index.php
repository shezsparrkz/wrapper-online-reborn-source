<?php
//include auth_session.php file on all user panel pages
include("../auth_session.php");
?>

<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">

<title>Your Dashboard</title>

<meta name="viewport" content="width=device-width, initial-scale=1">

<meta name="description" content="">
<meta property="og:site_name" content="Wrapper: Online">


<link href="/static/go/css/fonts/sailec.css" rel="stylesheet" type="text/css">
<link href="/static/go/css/common_combined.css" rel="stylesheet" type="text/css">

<link href="/static/go/css/watermark.css" rel="stylesheet" type="text/css">
<link href="/static/go/css/video.css" rel="stylesheet" type="text/css">
<link href="/static/go/css/myvideos.css" rel="stylesheet" type="text/css">
<link href="/static/go/css/video_export.css" rel="stylesheet" type="text/css">
<link href="/static/go/css/vm5_alpha/banner.css" rel="stylesheet" type="text/css">
<!--[if lt IE 9]>
<style text="text/css">
.top-nav.collapse {height: auto;overflow: visible;}
</style>
<![endif]-->

<script src="/static/go/js/common_combined.js"></script>
<script type="text/javascript" src="/static/go/js/../po/goserver_js-en_US.json"></script>
<script type="text/javascript">
var I18N_LANG = 'en_US';
var GT = new Gettext({'locale_data': json_locale_data});
</script>

<script src="/static/go/js/jquery/jquery-ui-1.9.2.custom-core-interactions.min.js"></script>
<script src="/static/go/js/jquery/jquery.tmpl.min.js"></script>
<script src="/static/go/js/trial_upsell.js"></script>
<script src="/static/go/js/lib/moment.min.js"></script>
<script src="/static/go/js/sessionChecker.js"></script>
<script src="/static/go/js/amplitude/go_amp.js"></script>


</head>
<body class="en_US has-user" >
<script type="text/javascript">
if (self !== top) {
            jQuery('body').hide();
    }
</script>

<script type="text/javascript">
        jQuery.extend(CCStandaloneBannerAdUI, {"actionshopSWF":"\/static\/animation\/actionshop.swf","apiserver":"http:\/\/localhost:8080\/","clientThemePath":"\/static\/<client_theme>","userId":"0wNgu8b3Jxo0"});
</script>

<div class="page-container">
<div class="site-header">
    <div class="navbar site-nav site-nav--legacy" role="navigation">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target=".navbar-ex1-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                  </button>
                  <a class="navbar-brand" href="/" title="Wrapper: Online">
                      <img alt="Wrapper: Online" src="/static/go/img/wrapper/logo.svg">
                  </a>
            </div>

            <div class="collapse navbar-collapse navbar-ex1-collapse">
                <ul class="nav navbar-nav navbar-right">
<li class="dropdown">
    <a class="dropdown-togglez" data-toggle="dropdown">Select a Theme<span class="dropdown-caret"></span></a>
    <ul class="dropdown-menu dropdown-menu-help">
        <li>
            <a class="themedropdownbutton">Comedy World</a>
        </li>
        <li>
            <a class="themedropdownbutton"></a>
        </li>
    </ul>
</li>

<script>
    $('.dropdown-menu-help').click(function(e) {
        e.stopPropagation();
    });
</script>
<li class="dropdown">
    <a class="dropdown-toggle" href="/users/<?php print $_SESSION['userId'] ?>" data-toggle="dropdown">
        <span class="hidden-sm hidden-md hidden-lg">Your Account</span>
        <div class="site-nav__profile-image">
            <div class="badge-circle">TT</div>
        </div><span class="dropdown-caret"></span>
    </a>
    <ul class="dropdown-menu dropdown-menu-user" style="z-index: -1; position: absolute;">
        <li class="dropdown-user-profile">
            <div class="dropdown-user-profile__display-name" style="color: #000;"><?php print $_SESSION['username'] ?></div>
            <div class="dropdown-user-profile__display-name" style="color: #444;"><?php print $email ?></div>
        </li>
        <li class="divider"></li>
        <li><a href="https://app.vyond.com/v2/profile">Profile Settings</a></li>
        <li><a href="https://app.vyond.com/v2/users/list">Users</a></li>
        <li><a href="https://app.vyond.com/v2/security">Security</a></li>
        <li><a href="https://app.vyond.com/v2/subscription">Subscription</a></li>
        <li class="divider"></li>
        <li><a class="gtm-logout" href="/logout">Log Out</a></li>
    </ul>
</li>
<?php 
    $xml = file_get_contents("http://localhost:8080/movieList");
    print $xml
?>
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
    $('.dropdown-menu-help').click(function(e) {
        e.stopPropagation();
    });
</script>

<script>
    $('.dropdown-menu-user').click(function(e) {
        e.stopPropagation();
    });
</script>

            </div>
    </div>
</div>

<script>
    jQuery('.logout-link').click(function(){
        amplitudeTrackEvent(AMPLITUDE_EVENT.LOGOUT, null);
    });
    </script>

<!-- END OF HEADER -->

<div class="my-video-container">
<script src="https://fast.wistia.com/embed/medias/70x3iky0kr.jsonp" async></script>
<script src="https://fast.wistia.com/assets/external/E-v1.js" async></script>
<script>
window._wq = window._wq || [];
_wq.push({ id: '70x3iky0kr', onReady: function(video) {
    video.bind('play', function() {
        amplitudeTrackEvent(AMPLITUDE_EVENT.VM5_START_IN_APP_VIDEO, {
            page_url: window.location.href,
            wistia_id: '70x3iky0kr',
            message: 'Make Videos Faster'
        });

        return video.unbind;
    })
}});
</script>

<div class="container">
    <div class="page-header">
        <h1 class="h2">
            <ol class="breadcrumb video-breadcrumb">
                <li class="base" data-folder-id="" data-category="all" data-page="1" data-sort-by="lastmod" data-status="" data-keyword="" data-folder-name="">Your Videos</li>
            </ol>
        </h1>
    </div>

    <div class="row" id="video-listing">
        <div class="col-md-4 col-md-push-8">
            <div id="videos-nav" class="list-group folder-list folder-access">
                <div class="list-group-item folder-item active droppable" data-folder-id="" data-category="all" data-page="1" data-sort-by="lastmod" data-status="" data-keyword="" data-folder-name="">
                    <span class="title folder-name">Your Videos</span>
                </div>
            </div>
        </div>

        <table class="table table-hover table-generic">
            <tbody id="movielisttbody">
            </tbody>
            <tfoot id="movielisttfoot">
                <tr>
					<td colspan="127"><a id="load_more" href="javascript:;">LOAD MORE...</a></td>
				</tr>
            </tfoot>
        </table>

        <div class="col-md-8 col-md-pull-4">
            <input type="hidden" name="ct" value="aWjkD3flllO+iGk_CDp7XwEPD0I7yGd6pVvdcKrpUnd4RwmqAC+Jjjgfun4ZBWEPHydcimnmeGmLHQ+8LYM1ubAvp_SBbjC2Koxhe5zf8TxIV9SD5z9zBi5KIzCymAgUOJ_UXOWeomm5OdQ3Mqh+fO8rgfFw+F77hlHDYAx8ehnrtKSD8UzZlnLM1He9Q4WdEJMhsnQppk1SN8CUTFn6YEfPcCziL0Q9bA8rA4r6w=" />

<div class="grid video-listing-grid hide-folders folder-access" id="video-listing-grid">


</div>

<div id="autosave-overlay" class="modal">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button class="close" type="button" data-dismiss="modal" aria-hidden="true">×</button>
                <h3 class="modal-title">Your video was autosaved</h3>
            </div>
            <div class="modal-body">
                <span class="autosave-message"></span>
            </div>
            <div class="modal-footer">
                <button class="load-manualsave btn btn-default text-uppercase">Manually saved</button>
                <button class="load-autosave btn btn-default btn-orange text-uppercase">Load autosaved</button>
            </div>
        </div>
    </div>
</div>

        </div>

    </div>

</div>
</div>


<!-- modals -->
<div class="modal" id="export-details" role="dialog" aria-hidden="true" style="z-index:1050;">
    <div class="modal-dialog">
    <div class="modal-content">
    <div class="modal-header has-back">
        <button class="close" type="button" data-dismiss="modal" aria-hidden="true">&times;</button>
        <button class="modal-back" title="Back" data-dismiss="modal" aria-hidden="true">&lt;</button>
        <h3 class="modal-title">Video formats comparison</h3>
    </div>
    <div class="modal-body">

            <table id="video-comparison-table">
                <tr>
                    <td style="width:50px;"></td>
                    <td style="width:70px;"></td>
                    <td style="width:140px;"><div class="head">360p</div></td>
                    <td style="width:140px;"><div class="head">HD 720p</div></td>
                    <td style="width:140px;"><div class="head">Full HD 1080p</div></td>
                </tr>
                <tr>
                    <td rowspan="4" style="border-right:1px solid #ccc"><h5>Video</h5></td>
                    <td style="text-align:left;"><strong>Resolution</strong></td>
                    <td><strong>640 x 360</strong></td>
                    <td><strong>1280 x 720</strong></td>
                    <td><strong>1920 x 1080</strong></td>
                </tr>
                <tr>
                    <td style="text-align:left;">Encoding</td>
                    <td>H.264</td>
                    <td>H.264</td>
                    <td>H.264</td>
                </tr>
                <tr>
                    <td style="text-align:left;">Bit rate</td>
                    <td>3,200 kbps</td>
                    <td>3,200 kbps</td>
                    <td>3,200 kbps</td>
                </tr>
                <tr>
                    <td style="text-align:left;">Frame rate</td>
                    <td>24 frames / sec</td>
                    <td>24 frames / sec</td>
                    <td>24 frames / sec</td>
                </tr>
                <tr>
                    <td>&nbsp;</td>
                    <td>&nbsp;</td>
                    <td>&nbsp;</td>
                    <td>&nbsp;</td>
                    <td>&nbsp;</td>
                </tr>
                <tr>
                    <td rowspan="4" style="border-right:1px solid #ccc"><h5>Audio</h5></td>
                    <td style="text-align:left;">Encoding</td>
                    <td>AAC</td>
                    <td>AAC</td>
                    <td>AAC</td>
                </tr>
                <tr>
                    <td style="text-align:left;">Sampling rate</td>
                    <td>44.1 kHz</td>
                    <td>44.1 kHz</td>
                    <td>44.1 kHz</td>
                </tr>
                <tr>
                    <td style="text-align:left;"><strong>Bit rate</strong></td>
                    <td><strong>192 kbps</strong></td>
                    <td><strong>192 kbps</strong></td>
                    <td><strong>192 kbps</strong></td>
                </tr>
                <tr>
                    <td style="text-align:left;">Channels</td>
                    <td>Stereo</td>
                    <td>Stereo</td>
                    <td>Stereo</td>
                </tr>
            </table>
    </div>
    <div class="modal-footer">
        <button class="btn btn-default" data-dismiss="modal">Close</button>
    </div>
    </div>
    </div>
</div>

<script>
var videoCounts = {"all":"0","trash":"0"};

// Folder counts. To be updated by myvideos.js.
var folderCounts = 0;

</script>

<script src="/static/go/js/video.js"></script>
<script src="/static/go/js/myvideos.js"></script>


<!-- FOOTER -->

<footer class="site-footer">
    <div class="container">
        <a href="https://www.vyond.com/terms">Terms of Service</a> | <a href="https://www.vyond.com/privacy">Privacy Policy</a> | <a href="https://www.vyond.com/cookies">Cookie Policy</a>
    </div>
</footer>

</div>
<!-- END OF PAGE STRUCTURE -->



<div id="offer_container">
</div>
<script type="text/javascript">
    </script>

<script type="text/javascript">
    if ( $('#movielisttbody').text().length == 0 ) {
        tfoot.insertAdjacentHTML('beforeend',
            '<tr><td colspan="4"><div class="emptystate"><img class="emptystate-image" src="/static/go/img/myvideos/chair_empty.png"><p>No videos</p></div></td></tr>');
    }
</script>

<style>
    table {
	width: 100%;
	max-width: 100%;
	margin-bottom: 127px;
	margin-right: auto;
	margin-left: auto;
	background-color: transparent;
	border-collapse: collapse;
	border-spacing: 0;
	font-size: 14px;
}

@media(min-width: 768px) {
	table {
		width: 750px;
	}
}

@media(min-width: 992px) {
	table {
		width: 970px;
	}
}

@media(min-width: 1200px) {
	table {
		width: 1170px;
	}
}

thead {
	font-weight: 200;
}

td {
	padding: 8px;
	vertical-align: middle;
	line-height: 1.42857143;
}

thead {
	border-bottom: 2px solid #ddd;
}

tbody:nth-child(1) {
	border-top: 1px solid #ddd;
}

tbody>tr {
	border-top: 0;
	border-bottom: 1px solid #ddd;
    color: #fff;
}

tbody>tr:hover {
	background-color: #1a1a1a;
}

tr>:nth-child(1) {
	width: 64px;
}

tr>:nth-child(1)>img {
	height: 36px;
}

tr>:nth-child(1) {
	word-break: break-word;
}

tr>:nth-child(2) {
	color: #fff;
}

tr>:nth-child(3) {
	width: 250px;
}

tr>:nth-child(3)>* {
	display: inline-block;
	text-align: center;
	font-size: 12px;
	width: 8.5px;
}

tr>:nth-child(4) {
	font-family: 'GlyphiconsRegular';
	text-decoration: none;
	padding-top: 5px;
	font-size: 14px;
	width: 80px;
}

tr>:nth-child(4)>a {
	display: inline-block;
	text-decoration: none;
	padding-right: 10px;
	color: #ffffff;
}

tr>:nth-child(4)>a:hover {
	color: #5627d8;
}

tr>:nth-child(4)>:nth-child(1)::before {
	content: '\E174';
}

tr>:nth-child(4)>:nth-child(2)::before {
	content: '\E235';
}

tr>:nth-child(4)>:nth-child(3)::before {
	content: '\E182';
}

tfoot>tr>td {
	text-align: center;
	border: none;
}

tfoot>tr>td>a {
	text-decoration: none;
	color: #ffffff;
	font-size: 14px;
}
</style>

</body>
</html>

