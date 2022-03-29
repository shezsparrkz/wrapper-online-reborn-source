<?php
    include("../../sessionvars.php");
?>
<html><head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">

<title>The Video Maker from Wrapper: Online - Make a Video for YouTube!</title>

<meta name="viewport" content="width=device-width, initial-scale=1">

<meta name="description" content="The Video Maker lets You make a video for YouTube for free! Drag &amp; drop or type &amp; go.  It's Fast, Fun, Easy and Free -  Vyond!">


<link href="/goapi/getStaticAsset/?file=sailec.css&subdir=fonts&type=css" rel="stylesheet" type="text/css">
<link href="/goapi/getStaticAsset/?file=common_combined.css&type=css" rel="stylesheet" type="text/css">

<link href="/goapi/getStaticAsset/?file=studio.css&type=css" rel="stylesheet" type="text/css">
<link href="/goapi/getStaticAsset/?file=video_voice_vendor.css&type=css" rel="stylesheet" type="text/css">
<link href="/goapi/getStaticAsset/?file=worknote.css&type=css" rel="stylesheet" type="text/css">
<link href="/goapi/getStaticAsset/?file=importer.css&type=css" rel="stylesheet" type="text/css">
<link href="/goapi/getStaticAsset/?file=importer_share.css&type=css" rel="stylesheet" type="text/css">
<!--[if lt IE 9]>
<style text="text/css">
.top-nav.collapse {height: auto;overflow: visible;}
</style>
<![endif]-->

<script src="/goapi/getStaticAsset/?file=jquery-1.11.0.min.js&subdir=jquery&type=js"></script>
<script src="/goapi/getStaticAsset/?file=bootstrap.min.js&subdir=bootstrap3&type=js"></script>
<script src="/goapi/getStaticAsset/?file=bootstrap-switch.min.js&subdir=bootstrap3&type=js"></script>

<script src="/goapi/getStaticAsset/?file=go2.js&type=js"></script>
<script src="/goapi/getStaticAsset/?file=jquery.swfobject.min.js&subdir=jquery&type=js"></script>
<script src="/goapi/getStaticAsset/?file=jquery.blockUI-2.66.0.js&subdir=jquery&type=js"></script>
<script src="/goapi/getStaticAsset/?file=jquery.scrollTo.min.js&subdir=jquery&type=js"></script>
<script src="/goapi/getStaticAsset/?file=app.js&type=js"></script>

<script src="/goapi/getStaticAsset/?type=js&file=cookie.js"></script>
<script src="/goapi/getStaticAsset/?type=js&file=Gettext.js"></script>
<script src="/goapi/getStaticAsset/?type=js&file=email.js"></script>

<script type="text/javascript" src="/goapi/getStaticAsset/?type=po&file=goserver_js-en_US.json"></script>
<script type="text/javascript">
var I18N_LANG = 'en_US';
var GT = new Gettext({'locale_data': json_locale_data});
</script>

<script src="/goapi/getStaticAsset/?file=movie.js&type=js"></script>
<script src="/goapi/getStaticAsset/?file=cookie.js&type=js"></script>
<script src="/goapi/getStaticAsset/?file=studio.js&type=js"></script>
<script src="/goapi/getStaticAsset/?type=js&subdir=jquery&file=jquery.tmpl.min.js"></script>
<script src="/goapi/getStaticAsset/?type=js&subdir=lib&file=pako.min.js"></script>
<script src="/goapi/getStaticAsset/?type=js&subdir=amplitude&file=go_amp.js"></script>
<script src="/goapi/getStaticAsset/?file=media-controller.js&subdir=h5preview&type=js"></script>
<script src="/goapi/getStaticAsset/?file=preview-player.js&subdir=h5preview&type=js"></script>

</head>
<body class="en_US has-user full_screen_studio studio-locked" style="">
<script type="text/javascript">
if (self !== top) {
            jQuery('body').hide();
    }
</script>

<!-- Google Tag Manager (noscript) -->
<noscript>&lt;iframe src="https://www.googletagmanager.com/ns.html?id=GTM-TXV7MD"
height="0" width="0" style="display:none;visibility:hidden"&gt;&lt;/iframe&gt;</noscript>
<!-- End Google Tag Manager (noscript) -->

<script type="text/javascript">
        jQuery.extend(CCStandaloneBannerAdUI, {"actionshopSWF":"https:\/\/d3v4eglovri8yt.cloudfront.net\/animation\/66453a3ba2cc5e1b\/actionshop.swf","apiserver":"http:\/\/ga.vyond.com\/","clientThemePath":"https:\/\/d3v4eglovri8yt.cloudfront.net\/static\/019b83797158fc0c\/<client_theme>","userId":"0cf4CMw1ZNCk"});
</script>

<div class="page-container">


<!-- END OF HEADER -->

<div style="position:relative;">
    <div id="studioBlock" style="height: 0px;"><!-- --></div>

    <div id="playerBlock"></div>

    <div style="display: none;">
    <div class="templates">
        <div class="studiotemplatebrowser">
            <div class="close"><a href="javascript:hideCCWidget()" onclick="javascript:return hideCCWidget()">X</a></div>
            <h1>Latest Releases</h1>
            <div class="thumbcontainer">
                <!-- All thumbcells here -->
            </div>
            <div class="more">
                <a href="#">More Characters &gt;</a>
            </div>
        </div>
        <div class="thumbcell">
            <a href="" class="buttonlink">
                <span class="button">
                    <span class="buynow">Buy now</span><br>
                    <span class="bucks">%d GoBucks</span>
                </span>
            </a>
            <p class="gotit">Got It!</p>
        </div>
    </div>
</div>
    <div class="templates" style="display: none;">
    <div class="voice-vendor-ad" style="display: none;">
        <div class="close"><a href="javascript:hideVoiceAdWidget()" onclick="javascript:return hideVoiceAdWidget()">×</a></div>
        <div id="studio-voice-vendor-container">
            <ul>
                <li><a class="gtm-ga-pageview-t2" id="voice-vendor-vb" target="_blank" href="https://voicebunny.com/?p=vyond" data-gtmv-page="/pageTracker/voicebanner/VoiceBunny" onclick="setvoicebannercookie();"><img src="https://d3v4eglovri8yt.cloudfront.net/static/019b83797158fc0c/go/img/video_voice/btn_vb.png"></a></li>
                <li><a class="gtm-ga-pageview-t2" id="voice-vendor-iw" target="_blank" href="https://www.inwhatlanguage.com/goanimate-translations/" data-gtmv-page="/pageTracker/voicebanner/InWhatLanguage" onclick="setvoicebannercookie();"><img src="https://d3v4eglovri8yt.cloudfront.net/static/019b83797158fc0c/go/img/video_voice/btn_iw.png"></a></li>
                <li>
                    <hr class="sperator">
                    <a class="voiceover-tips gtm-ga-pageview-t2" target="_blank" href="http://goanimate.com/video-maker-tips/tutorial-why-you-should-break-up-your-dialogue-audio-into-small-pieces-before-importing/" data-gtmv-page="/pageTracker/voicebanner/VoiceoverTips" onclick="setvoicebannercookie();"><span><i class="lightbulb"></i>Voiceover Tips &gt;</span></a>
                </li>
            </ul>
        </div>
    </div>
</div>
<script type="text/javascript">
function setvoicebannercookie() { SetCookie('vbcdt','1576454336', 31, '/'); }
function voiceBanner(bannerId) {
    var banner = $('#voice-vendor-' + bannerId);
    if (banner.length) {
        banner.click();

        window.open(banner.attr('href'), '_blank');
    }
}
</script>

    <div id="previewPlayerContainer" style="display: none;">
        <div class="preview-player" id="previewPlayer">
            <h2>Preview Video</h2>
            <div id="playerdiv"></div>
            <div id="h5-playerdiv">
                <video class="hidden" id="h5-preview-player" width="100%" height="100%"></video>
                <div class="player-overlay loading">
                    <div class="loading-icon">
                        <div class="loading-message"></div>
                    </div>
                    <div class="replay-button"></div>
                </div>
                <div class="video-controls">
                    <div class="playback-button">
                        <div class="icon-image"></div>
                    </div>
                    <div class="seek-bar">
                        <div class="value-bar total-bar"></div>
                        <div class="value-bar buffered-bar"></div>
                        <div class="value-bar played-bar"></div>
                        <div class="slider-thumb"></div>
                        <div class="time-tooltip">00:00</div>
                    </div>
                    <div class="time-display">
                        <div class="text">00:00 / 00:00</div>
                    </div>
                    <div class="volume-control">
                        <div class="volume-icon">
                            <div class="icon-image"></div>
                        </div>
                        <div class="volume-slider">
                            <div class="slider-track">
                                <div class="track-value-bar"></div>
                            </div>
                            <div class="slider-thumb"></div>
                        </div>
                    </div>
                </div>
            </div>
            <div id="preview-alert-block" class="preview-alert-block clearfix">Auto-pause at end of scenes is not supported in our web video player.<br>The auto-pause feature is supported once you download the video as presentation in the "Share/Export" overlay.</div>
            <div class="buttons clearfix">
                <button class="preview-button edit" type="button" onclick="switchBackToStudio();">Back to editing</button>
                <button class="preview-button save" type="button" onclick="publishStudio();">Save Now</button>            </div>

            <a class="close_btn" href="#" onclick="switchBackToStudio(); return false;">×</a>
        </div>
    </div>

    <div class="video-tutorial" id="video-tutorial" style="display: none;">
        <div class="video-tutorial-body">
            <h2>&nbsp;</h2>
            <div class="video-tutorial-player">
                <div id="wistia_player" class="wistia_embed" style="width:860px;height:445px">&nbsp;</div>
            </div>
            <a class="close_btn" href="#" onclick="return false;">×</a>
        </div>
        <div class="video-tutorial-footer clearfix">
            <button class="tutorial-button" type="button">
                Close            </button>
        </div>
    </div>
</div>

<div style="display:none">

</div>

    <script>
        interactiveTutorial.isShowTutorial = false;

        var hideHTMLBox = function() {
            window.close();
        };

        function tutorialStarted() {
        }
        function tutorialStep(sn) {
        }
        function tutorialCompleted() {
            $.ajax({
                type: 'POST',
                url: '/ajax/tutorialStatus/completed'
            });
        }

        var enable_full_screen = true;

        var studio_data = {
            id: "Studio",
            swf: "/goapi/getStaticAsset/?subdir=<?php echo "studio%2F$userStudio" ?>&type=swf&file=/go_full.swf",
            width: "100%",
            height: "100%",
            allowScriptAccess: "always",
            allowFullScreen: "true",

            hasVersion: "10.3"
        };

        if (!enable_full_screen) {
            studio_data.width  = 960;
            studio_data.height  = 630;
            resize_studio = false;
        }

        studio_data.flashvars = {
            <?php 
                if (isset($_GET['edit'])) { 
                    $editId = $_GET['edit']; 
                    echo "\"movieId\":\"$editId\",";
                } else {
                }
            ?>
            "loadas":0,
            "asId":"",
            "originalId":"",
            "apiserver":"http://localhost/",
            "storePath":"/goapi/getStaticAsset/?path=<store>&pathtype=store&version=<?php echo "legacy"; ?>",
            "clientThemePath":"/goapi/getStaticAsset/?path=<client_theme>&pathtype=client",
            "animationPath":"/goapi/getStaticAsset/?type=swf&subdir=<?php echo "studio/$userStudio"; ?>&file=",
            "userId":"<?php echo "$userId" ?>",
            "username":"<?php echo $userName ?>",
            "uemail":"<?php echo $userEmail ?>",
            "ut":<?php echo $userPermission ?>,
            "isEmbed":0,
            "nextUrl":"\/go\/savedMovie\/<movieId>\/0\/1",
            "bgload":"/goapi/getStaticAsset/?file=go_full.swf&subdir=<?php echo "studio/$userStudio"; ?>&filetype=swf",
            "lid":"13",
            "ctc":"go",
            "tlang":"en_US",
            "siteId":"1",
            "templateshow":"false",
            "forceshow":"false",
            "appCode":"go",
            "lang":"en",
            "is_published":"0",
            "is_private_shared":"1",
            "is_password_protected":false,
            "msg_index":"",
            "ad":0,
            "initcb":"studioLoaded",
            "retut":1,
            "featured_categories":null,
            "st":"",
            "uisa":0,
            "themeId":"retro",
            "tray":"retro",
            "isWide":1,
            "newusr":1,
            "goteam_draft_only":0,
            "studiov":"<?php echo $userStudio; ?>",
            "page":"",
            "collab":0,
            "presaveId":"<?php if (isset($_GET['edit'])) {echo $_GET['edit'];} else { $id = substr(str_shuffle('0123456789ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz'),1,10); echo $id; } ?>"
        };
        var _ccad = null;

        function proceedWithFullscreenStudio() {
            // These should be executed only when we are really ready to show the studio
            window.onbeforeunload = function(e) {
                var e = e || window.event;
                var msg = null;
                if (loadedFullscreenStudio && studioApiReady) {
                    msg = 'You are about to lose all your unsaved changes in the studio.';
                }
                if (e && msg != null) {
                    e.returnValue = msg;
                }

                if (msg != null) {
                    return msg;
                }
            };

            show_cc_ad = false;
            // CC template studio widget
            if (show_cc_ad) {
                _ccad = new CCBannerAd("business");
                (function() {
                    var ccId = undefined;
                    _ccad
                        .onBuyCCInsufficientBalance(function() {
                            $('#Studio').get(0).showBuyGoBuckPopUp();
                        })
                        .onBuyCCComplete(function(aid, trackInfo, templateId) {
                            if (trackInfo) {
                            var logger = CCStandaloneBannerAdUI.gaLogTx.createCCPartLogger(aid);
                            if (templateId) {
                                logger.setTemplateId(templateId);
                            }
                            $.grep(trackInfo.parts, function(n, i) {
                                return $.inArray(n.ctype, [ 'GoUpper', 'GoLower', 'upper_body', 'lower_body', 'hair' ]) >= 0;
                            }).each(function(n) {
                                logger.addItem(n);
                            });
                            logger.submit();
                            }

                            ccId = aid;
                            if (typeof ccId != undefined) {
                                try {
                                    $('#Studio').get(0).reloadAllCC(ccId);
                                } catch (e) {
                                }
                                ccId = undefined;
                            }
                        });
                })();
            }

            show_voice_ad = false;
            $('#studio_container').append($('div.templates div.voice-vendor-ad').clone());
            if (show_voice_ad) {
                showVoiceAdWidget();
            }


            $('div#studioBlock').css('height', '0px');
            $('#studio_holder').flash(studio_data);
            full_screen_studio();

            ajust_studio();
        }

        function hideCCWidget() {
            show_cc_ad = false;
            $('div.studiotemplatebrowser').css('display', 'none');
            var widget_right = 0;
            if (show_voice_ad) {
                $('#studio_container div.voice-vendor-ad').css('right', widget_right);
                widget_right += $('#studio_container div.voice-vendor-ad').css('width');
            }
            if (show_worknote) {
                $('#studio_container div.studio-worknote').css('right', widget_right);
            }
            ajust_studio();
            return false;
        }

        function showVoiceAdWidget() {
            show_voice_ad = true;
            $('#studio_container div.voice-vendor-ad').css('display', 'block');
            var widget_right = 0;
            if (show_cc_ad) {
                widget_right += $('div.studiotemplatebrowser').css('width');
            }
            $('#studio_container div.voice-vendor-ad').css('right', widget_right);
            widget_right += $('#studio_container div.voice-vendor-ad').css('width');
            if (show_worknote) {
                $('#studio_container div.studio-worknote').css('right', widget_right);
            }
            ajust_studio();
            return false;
        }

        function hideVoiceAdWidget() {
            show_voice_ad = false;
            $('#studio_container div.voice-vendor-ad').css('display', 'none');
            var widget_right = 0;
            if (show_cc_ad) {
                widget_right += $('div.studiotemplatebrowser').css('width');
            }
            if (show_worknote) {
                $('#studio_container div.studio-worknote').css('right', widget_right);
            }
            ajust_studio();
            return false;
        }

        function showWorknoteWidget() {
            show_worknote = true;
            $('#studio_container div.studio-worknote').css('display', 'block');
            var widget_right = 0;
            if (show_cc_ad) {
                widget_right += $('div.studiotemplatebrowser').css('width');
            }
            if (show_voice_ad) {
                widget_right += $('#studio_container div.voice-vendor-ad').css('width');
            }
            $('#studio_container div.studio-worknote').css('right', widget_right);
            ajust_studio();
            return false;
        }

        function hideWorknoteWidget() {
            show_worknote = false;
            $('#studio_container div.studio-worknote').css('display', 'none');
            ajust_studio();
            return false;
        }

        function toggleWorknoteContent() {
            $('#studio_container .studio-worknote').toggleClass('collapsed expand');
            ajust_studio();
            return false;
        }

        var studioApiReady = false;
        function studioLoaded() {
            studioApiReady = true;
            $(document).trigger('studioApiReady');
        };

        var studioWorknoteModule = null;

        var studioModule = null;

        var videoTutorial = null;

        $(document).ready(function() {
            if (enable_full_screen) {

                if (!false) {
                    $('#studio_container').css('top', '0px');
                }
                $('#studio_container').show();
                $('.site-footer').hide();
                $('#studioBlock').css('height', '1800px');

                if (false) {
                    checkCopyMovie('javascript:proceedWithFullscreenStudio()', '');
                } else if (false) {
                    checkEditMovie('');
                } else {
                    proceedWithFullscreenStudio();
                }

                $(window).on('resize', function() {
                    ajust_studio();
                });
                $(window).on('studio_resized', function() {
                    if (show_cc_ad) {
                        _ccad.refreshThumbs();
                    }
                });

                if (studioApiReady) {
                    var api = studioApi($('#studio_holder'));
                    api.bindStudioEvents();
                    studioModule = new StudioModule();
                }

                $('.ga-importer').prependTo($('#studio_container'));
            } else {
                $('#studioBlock').flash(studio_data);
            }

            // Video Tutorial
            videoTutorial = new VideoTutorial($("#video-tutorial"));
        })
        // restore studio when upsell overlay hidden
        .on('hidden.bs.modal', '#upsell-modal', function(e) {
            if ($(e.target).attr('id') == 'upsell-modal') {
                restoreStudio();
            }
        })
        .on('studioApiReady', function() {
            var api = studioApi($('#studio_holder'));
            api.bindStudioEvents();
            studioModule = new StudioModule();
        })

    var previewPlayer = new PreviewPlayer("wss://preview.vyond.com", true),
        previewPlayerRetryCount = 5;

    previewPlayer.setVideoElement(document.getElementById('h5-preview-player'));
    previewPlayer.setMovieId('');
    previewPlayer.setUserAuthenticationToken('1:760a913514c85f012a4977b79b920687c0b33a7b268c26340021d6720a6ea026:y8X5juI1C+TKXDaGsW/6CLASVlqRtMZyE2rJVx2aUzc=');
    previewPlayer.setFromPptConversion(false);
    previewPlayer.connect();

</script>
<script>
$("#previewPlayerContainer, #video-tutorial").hide();

var movieDataXmlStr = null,
    filmXmlStr = null,
    previewStartFrame = 0;

function checkBrowser() {
    return window.WebSocket && window.MediaSource;
}

function checkTheme(themeList) {
    if (themeList === undefined) {
        return true;
    }

    var themeCount = themeList.length,
        h5Themes = {
            'common' : true,
            'infographics': true,
            'business': true,
            'whiteboard': true,
            'commoncraft': true
        };

    for (var i = 0; i < themeCount; i++) {
        if (h5Themes[themeList[i]] === undefined) {
            return false;
        }
    }

    return true;
}

function checkPreviewServer() {
    return previewPlayer._connectionState === PreviewPlayerConstants.STATE_READY;
}

function loadH5Preview() {
    if (filmXmlStr === null) {
        return;
    }

    $('#h5-playerdiv').data('previewPlayerControl').reset();
    previewPlayer.preview(filmXmlStr, previewStartFrame);
    $('#previewPlayer').addClass('using-h5');
}

function loadLegacyPreview() {
    if (movieDataXmlStr === null) {
        return;
    }

    pauseH5PreviewPlayer();

    savePreviewData(movieDataXmlStr);
    createPreviewPlayer("playerdiv", {
        height: 360,
        width: 640,
        player_url: "/goapi/getStaticAsset/?type=swf&subdir=<?php echo "studio%2F$userStudio"; ?>&file=/player.swf&httptype=application/x-shockwave-flash",
        quality: "high",
        allowFullScreen: "true",
        wmode: "transparent",
    }, {
        movieOwner: "", 
        movieOwnerId: "", 
        movieId: "1", 
        ut: "60",
        movieLid: "13", 
        movieTitle: "", 
        movieDesc: "", 
        userId: "", 
        username: "", 
        uemail: "",
        apiserver: "/", 
        thumbnailURL: "", 
        copyable: "0", 
        isPublished: "0", 
        ctc: "go", 
        tlang: "en_US", 
        is_private_shared: "0",
        autostart: "1", 
        appCode: "go", 
        is_slideshow: "0", 
        originalId: "0", 
        is_emessage: "0", 
        isEmbed: "1", 
        refuser: "",
        utm_source: "", 
        uid: "", 
        isTemplate: "1", 
        showButtons: "1", 
        chain_mids: "", 
        showshare: "1", 
        averageRating: "",
        ratingCount: "", 
        numContact: 0, 
        isInitFromExternal: 1, 
        storePath: "/goapi/getStaticAsset/?path=<store>&type&pathtype=store", 
        clientThemePath: "/goapi/getStaticAsset/?path=<client_theme>&type&pathtype=client", 
        startFrame: previewStartFrame
    });
    $('#previewPlayer').removeClass('using-h5');
}

function initPreviewPlayer(dataXmlStr, startFrame, containsChapter, themeList) {
    movieDataXmlStr = dataXmlStr;
    previewStartFrame = startFrame;

    filmXmlStr = dataXmlStr.split("<filmxml>")[1].split("</filmxml>")[0];

    if (typeof startFrame == 'undefined') {
        startFrame = 1;
    } else {
        startFrame = Math.max(1, parseInt(startFrame));
    }

    if (containsChapter) {
        $("#preview-alert-block").show();
    } else {
        $("#preview-alert-block").hide();
    }

    previewSceen();

    $("#previewPlayerContainer").show();

    var isThemeSupport = checkTheme(themeList);

    if (checkBrowser() && isThemeSupport && checkPreviewServer()) { // Preview with next
        loadH5Preview();
    } else {
        // fallback to legacy preview
        loadLegacyPreview();

        if (!checkPreviewServer() && (previewPlayerRetryCount > 0)) { // Retry on WebSocket connection problem
            previewPlayer.connect();
            previewPlayerRetryCount--;
        }
    }
}

function pauseH5PreviewPlayer() {
    $("#h5-preview-player").get(0).pause();
}

function switchBackToStudio() {
    try {
        ($("#previewPlayerContainer #Player").get(0) || {pause:function(){}}).pause();
    } catch (err) {};

    pauseH5PreviewPlayer();

    $("#previewPlayerContainer").hide();
    restoreStudio();
    document.getElementById("Studio").onExternalPreviewPlayerCancel();
}
function publishStudio() {
    try {
        ($("#previewPlayerContainer #Player").get(0) || {pause:function(){}}).pause();
    } catch (err) {};

    pauseH5PreviewPlayer();

    $("#previewPlayerContainer").hide();
    restoreStudio();
    document.getElementById("Studio").onExternalPreviewPlayerPublish();
}
function exitStudio(share) {
    loadedFullscreenStudio = false;
}

function studioUpsellUpgrade() {
    $('#upsell-modal').modal('hide');
    restoreStudio();
    document.getElementById("Studio").onUpsellUpgrade();
}

function customFontBanner() {
    var plansAndPricingUrl = 'https://www.vyond.com/pricing';
    window.open(plansAndPricingUrl, '_blank');
}

window.addEventListener(PreviewPlayerEvent.ANIMATION_INCOMPATIBLE, function() {
    loadLegacyPreview();
});

VideoTutorial.tutorials.composition = {
    title: 'Composition Tutorial',
    wistiaId: 'nuy96pslyp',
};
VideoTutorial.tutorials.enterexit = {
    title: 'Enter and Exit Effects Tutorial',
    wistiaId: 'fvjsa3jnzc',
}
</script>

<script id="importer-share-asset-tmpl" type="text/x-jquery-tmpl">
<li class="share-asset clearfix">
    <div class="share-asset-selection">
        <input type="checkbox" checked>
    </div>
    <div class="share-asset-icon"></div>
    <div class="share-asset-body">
        <div class="filename"></div>
        <div class="actions clearfix">
            <span class="category small"></span>
            <div class="share-type none">
                <span class="none" title="Not shared" data-placement="left"><span class="glyph-pro glyph-lock"></span></span>
                <span class="team" title="All members" data-placement="left"><span class="glyph-pro glyph-group"></span></span>
                <span class="shared" title="Custom..." data-placement="left"><span class="glyph-pro glyph-parents"></span></span>
            </div>
        </div>
    </div>
</li>
</script>

<script id="importer-file-tmpl" type="text/x-jquery-tmpl">
<li class="ga-importer-file clearfix fade">
    <div class="ga-importer-file-icon"><div class="ga-importer-file-progress-bar"><div class="upload-progress"></div></div></div>
    <div class="ga-importer-file-body">
        <div class="filename"></div>
        <div class="actions clearfix">
            <span class="menu"></span>
            <span class="category"></span>
            <a class="cancel" href="#" data-action="cancel-upload" title="Cancel">&times;</a>
            <a class="clear" href="#" data-action="clear-file" title="Clear">&times;</a>
            <a class="add-to-scene" href="#" data-action="add-to-scene">Add to scene</a>
            <a class="add-to-frame" href="#" data-action="add-to-frame">Add to frame</a>
            <span class="processing">
                <span class="processing-video">Processing. Please wait...</span>
                <span class="processing-font">Processing time: ~3 mins</span>
            </span>
            <span class="error"></span>
        </div>
    </div>
</li>
</script>

<script id="importer-select-sound-tmpl" type="text/x-jquery-tmpl">
<div class="dropdown">
<a class="import-as-btn dropdown-toggle" data-toggle="dropdown" href="#">Import as <span class="caret"></span></a>
<ul class="dropdown-menu" role="menu" aria-labelledby="dropdownMenu">
    <li><a tabindex="-1" href="#" data-subtype="bgmusic">Music</a></li>
    <li><a tabindex="-1" href="#" data-subtype="soundeffect">Sound Effect</a></li>
    <li><a tabindex="-1" href="#" data-subtype="voiceover">Voice-Over</a></li>
</ul>
</div>
</script>

<script id="importer-select-prop-tmpl" type="text/x-jquery-tmpl">
<div class="dropdown">
<a class="import-as-btn dropdown-toggle" data-toggle="dropdown" href="#">Import as <span class="caret"></span></a>
<ul class="dropdown-menu" role="menu" aria-labelledby="dropdownMenu">
    <li><a tabindex="-1" href="#" data-subtype="prop">Prop</a></li>
    <li><a tabindex="-1" href="#" data-subtype="bg">Backdrop</a></li>
</ul>
</div>
</script>
<script src="https://d3v4eglovri8yt.cloudfront.net/static/019b83797158fc0c/go/js/importer_share.js.gz.js"></script>
<script src="https://d3v4eglovri8yt.cloudfront.net/static/019b83797158fc0c/go/js/importer.js.gz.js"></script>
<script>window.searchTermsDataUrl = 'https://d3v4eglovri8yt.cloudfront.net/store/3a981f5cb2739137/common/terms.json';</script>
<script src="https://d3v4eglovri8yt.cloudfront.net/static/019b83797158fc0c/go/js/search-suggestion.js.gz.js"></script>
<script src="/goapi/getStaticAsset/?file=preview-player-control.js&type=js"></script>
<script>
ImporterFile.defaults.options.accept_mime = ["image\/png","image\/jpeg","image\/gif","image\/bmp","audio\/mpeg","audio\/wav","audio\/x-wav","audio\/vnd.wave","audio\/wave","audio\/mp3","audio\/mp4","audio\/ogg","audio\/vorbis","audio\/aac","audio\/m4a","audio\/x-m4a","video\/mp4","video\/mpeg4","video\/x-flv","video\/x-ms-wmv","application\/mp4"];
ImporterFile.defaults.options.restricted_mime = ["font\/x-font-ttf","font\/vnd.ms-opentype"];
</script>

<script charset="ISO-8859-1" src="//fast.wistia.com/assets/external/E-v1.js" async=""></script>

<script>
    (function() {

        'use strict';

        var studioMode = 'full',
            themeName = 'business',
            copiedId = '',
            editType = null;

        switch (studioMode) {
            case 'full':
                editType = AMPLITUDE_EVENT_PROPERTIES.VM_NEW;
                break;
            case 'edit':
                editType = AMPLITUDE_EVENT_PROPERTIES.VM_EDIT;
                break;
            case 'copy':
                editType = AMPLITUDE_EVENT_PROPERTIES.VM_COPY;
                break;
            case 'remix':
                editType = AMPLITUDE_EVENT_PROPERTIES.VM_REMIX;
                break;
            default:
                break;
        }
        if (editType !== null) {
            $(window).on('amplitude_loaded', function() {
                logAmplitudeEvent(AMPLITUDE_EVENT.LAUNCH_VM, {
                    theme: themeName,
                    edit_type: editType,
                    video_id: '',
                    copied_id: copiedId
                }, {
                    latest_vm_launched: AMPLITUDE_EVENT_PROPERTIES.LEGACY_VM,
                    latest_vm_launched_legacy_date: '2019-12-15 18:58:56'
                });
            });
        }
    }());

    // Amplitude interface for Flash player.
    function logAmplitudeEvent(eventName, eventProperties, userData) {
        if (typeof amplitude === 'object') {
            if (eventName === AMPLITUDE_EVENT.PLAYS_VIDEO) {
                eventProperties["referral"] = document.referrer;
            }
            if (userData !== undefined) {
                amplitude.getInstance().setUserProperties(userData);
            }
            amplitude.getInstance().logEvent(eventName, eventProperties);
        }
    }
</script>


<!-- FOOTER -->


<div id="studio_container" style="top: 0px; width: 2238px; height: 1586px;"><div class="ga-importer">
    <div class="ga-importer-header">
        <form class="ga-importer-base-form" action="/ajax/saveUserProp" method="post">
            <a class="ga-importer-collapse" href="#" title="Collapse" onclick="hideImporter(); return false;">×</a>

            <div class="fileinputs">
                <div class="importer-button file-trigger">SELECT FILES</div>
                <input class="ga-importer-file-input" type="file" name="file" multiple="">
            </div>

            <span class="hints">
                <i class="glyph-pro glyph-circle-question_mark"></i>
                <div class="tooltip in" style="display:none;">
                    <div class="tooltip-arrow"></div>
                    <div class="tooltip-inner">
                        <ul>
                            <li>Maximum file size: 15MB</li>
                            <li>Images: JPG, PNG<br>To cover the whole stage in a 1080p video, use an image at least 1920px x 1080px.</li>
                            <li>Audio: MP3, WAV, M4A</li>
                            <li>Video: MP4.</li>
                            <li>Fonts: TTF, OTF (Professional only)</li>
                        </ul>
                    </div>
                </div>
            </span>

            <input type="hidden" name="subtype" value="">
        </form>
    </div>
    <div class="ga-importer-content" style="height: 1536px;">
        <div class="ga-importer-start">
            <div class="ga-importer-start-draghere">Drag files here</div>

            <div class="ga-importer-instruction general">
                <ul>
                    <li><strong>Maximum file size:</strong> 15MB</li>
                    <li><strong>Images:</strong> JPG, PNG<br>To cover the whole stage in a 1080p video, use an image at least 1920px x 1080px.</li>
                    <li><strong>Audio:</strong> MP3, WAV, M4A</li>
                    <li><strong>Video:</strong> MP4.</li>
                    <li><strong>Fonts:</strong> TTF, OTF (Professional only)</li>
                </ul>
            </div>
        </div>
        <div class="ga-importer-results">
            <div class="ga-importer-notice clearfix">
                <div class="ga-importer-notice-count">
                    Files added. <a class="open-your-library">View Library</a>
                </div>
            </div>
            <ul class="ga-importer-files"></ul>
        </div>
        <div class="ga-importer-queue-message">
            Assign a category to start importing
            <span class="hints pull-right">
                <i class="i-help"></i>
                <div class="tooltip in" style="display:none;">
                    <div class="tooltip-arrow"></div>
                    <div class="tooltip-inner">
                        <p>Imported files are categorized to simplify browsing.</p>
                        <p>Use the "IMPORT AS" drop down to see the available categories based on the format of the file you import.</p>
                    </div>
                </div>
            </span>
        </div>
        <ul class="ga-importer-queue"></ul>
    </div>
    <div class="ga-import-dnd-hint">
        Release to start uploading    </div>
</div>
    <div id="studio_holder" style="width: 2108px;"></div>




<div id="offer_container">
</div>
<script type="text/javascript">
    </script>

<script type="text/javascript">

</script>
</body></html>

<!-- <html><head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">

<title>The Video Maker from Wrapper: Online - Make a Video for YouTube!</title>

<meta name="viewport" content="width=device-width, initial-scale=1">

<meta name="description" content="The Video Maker lets You make a video for YouTube for free! Drag &amp; drop or type &amp; go.  It's Fast, Fun, Easy and Free -  Vyond!">


<link href="/goapi/getStaticAsset/?file=sailec.css&subdir=fonts&type=css" rel="stylesheet" type="text/css">
<link href="/goapi/getStaticAsset/?file=common_combined.css&type=css" rel="stylesheet" type="text/css">

<link href="/goapi/getStaticAsset/?file=studio.css&type=css" rel="stylesheet" type="text/css">
<link href="/goapi/getStaticAsset/?file=video_voice_vendor.css&type=css" rel="stylesheet" type="text/css">
<link href="/goapi/getStaticAsset/?file=worknote.css&type=css" rel="stylesheet" type="text/css">
<link href="/goapi/getStaticAsset/?file=importer.css&type=css" rel="stylesheet" type="text/css">
<link href="/goapi/getStaticAsset/?file=importer_share.css&type=css" rel="stylesheet" type="text/css">
<--[if lt IE 9]>
<style text="text/css">
.top-nav.collapse {height: auto;overflow: visible;}
</style>
<![endif]->

<script src="/goapi/getStaticAsset/?file=jquery-1.11.0.min.js&subdir=jquery&type=js"></script>
<script src="/goapi/getStaticAsset/?file=bootstrap.min.js&subdir=bootstrap3&type=js"></script>
<script src="/goapi/getStaticAsset/?file=bootstrap-switch.min.js&subdir=bootstrap3&type=js"></script>

<script src="/goapi/getStaticAsset/?file=go2.js&type=js"></script>
<script src="/goapi/getStaticAsset/?file=jquery.swfobject.min.js&subdir=jquery&type=js"></script>
<script src="/goapi/getStaticAsset/?file=jquery.blockUI-2.66.0.js&subdir=jquery&type=js"></script>
<script src="/goapi/getStaticAsset/?file=jquery.scrollTo.min.js&subdir=jquery&type=js"></script>
<script src="/goapi/getStaticAsset/?file=app.js&type=js"></script>

<script src="/goapi/getStaticAsset/?type=js&file=cookie.js"></script>
<script src="/goapi/getStaticAsset/?type=js&file=Gettext.js"></script>
<script src="/goapi/getStaticAsset/?type=js&file=email.js"></script>

<script type="text/javascript" src="/goapi/getStaticAsset/?type=po&file=goserver_js-en_US.json"></script>
<script type="text/javascript">
var I18N_LANG = 'en_US';
var GT = new Gettext({'locale_data': json_locale_data});
</script>

<script src="/goapi/getStaticAsset/?file=movie.js&type=js"></script>
<script src="/goapi/getStaticAsset/?file=cookie.js&type=js"></script>
<script src="/goapi/getStaticAsset/?file=studio.js&type=js"></script>
<script src="/goapi/getStaticAsset/?type=js&subdir=jquery&file=jquery.tmpl.min.js"></script>
<script src="/goapi/getStaticAsset/?type=js&subdir=lib&file=pako.min.js"></script>
<script src="/goapi/getStaticAsset/?type=js&subdir=amplitude&file=go_amp.js"></script>
<script src="/goapi/getStaticAsset/?file=media-controller.js&subdir=h5preview&type=js"></script>
<script src="/goapi/getStaticAsset/?file=preview-player.js&subdir=h5preview&type=js"></script>

</head>
<body class="en_US has-user full_screen_studio studio-locked" style="">
<script type="text/javascript">
if (self !== top) {
            jQuery('body').hide();
    }
</script>

<div class="page-container">


<-- END OF HEADER >

<div style="position:relative;">
    <div id="studioBlock" style="height: 0px;"><-- -></div>

    <div id="playerBlock"></div>

    <div style="display: none;">
</div>
    <div class="templates" style="display: none;"></div>

    <div id="previewPlayerContainer" style="display: none;">
        <div class="preview-player" id="previewPlayer">
            <h2>Preview Video</h2>
            <div id="playerdiv"></div>
            <div id="h5-playerdiv">
                <video class="hidden" id="h5-preview-player" width="100%" height="100%"></video>
                <div class="player-overlay loading">
                    <div class="loading-icon">
                        <div class="loading-message"></div>
                    </div>
                    <div class="replay-button"></div>
                </div>
                <div class="video-controls">
                    <div class="playback-button">
                        <div class="icon-image"></div>
                    </div>
                    <div class="seek-bar">
                        <div class="value-bar total-bar"></div>
                        <div class="value-bar buffered-bar"></div>
                        <div class="value-bar played-bar"></div>
                        <div class="slider-thumb"></div>
                        <div class="time-tooltip">00:00</div>
                    </div>
                    <div class="time-display">
                        <div class="text">00:00 / 00:00</div>
                    </div>
                    <div class="volume-control">
                        <div class="volume-icon">
                            <div class="icon-image"></div>
                        </div>
                        <div class="volume-slider">
                            <div class="slider-track">
                                <div class="track-value-bar"></div>
                            </div>
                            <div class="slider-thumb"></div>
                        </div>
                    </div>
                </div>
            </div>
            <div id="preview-alert-block" class="preview-alert-block clearfix">Auto-pause at end of scenes is not supported in our web video player.<br>The auto-pause feature is supported once you download the video as presentation in the "Share/Export" overlay.</div>
            <div class="buttons clearfix">
                <button class="preview-button edit" type="button" onclick="switchBackToStudio();">Back to editing</button>
                <button class="preview-button save" type="button" onclick="publishStudio();">Save Now</button>            </div>

            <a class="close_btn" href="#" onclick="switchBackToStudio(); return false;">×</a>
        </div>
    </div>

    <div class="video-tutorial" id="video-tutorial" style="display: none;">
        <div class="video-tutorial-body">
            <h2>&nbsp;</h2>
            <div class="video-tutorial-player">
                <div id="wistia_player" class="wistia_embed" style="width:860px;height:445px">&nbsp;</div>
            </div>
            <a class="close_btn" href="#" onclick="return false;">×</a>
        </div>
        <div class="video-tutorial-footer clearfix">
            <button class="tutorial-button" type="button">
                Close            </button>
        </div>
    </div>
</div>

<div style="display:none">

</div>

    <script>
        interactiveTutorial.isShowTutorial = true;

        var hideHTMLBox = function() {
            window.close();
        };

        function tutorialStarted() {
        }
        function tutorialStep(sn) {
        }
        function tutorialCompleted() {
            $.ajax({
                type: 'POST',
                url: '/ajax/tutorialStatus/completed'
            });
        }

        var enable_full_screen = true;

        var studio_data = {
            id: "Studio",
            swf: "/goapi/getStaticAsset/?file=go_full.swf&subdir=<php echo "studio/$userStudio" ?>&type=swf",
            width: "100%",
            height: "100%",
            allowScriptAccess: "always",
            allowFullScreen: "true",
            wmode: "window",

            hasVersion: "10.3"
        };

        if (!enable_full_screen) {
            studio_data.width  = 960;
            studio_data.height  = 630;
            resize_studio = false;
        }

        studio_data.flashvars = {
            <php 
                if (isset($_GET['edit'])) { 
                    $editId = $_GET['edit']; 
                    echo "\"movieId\":\"$editId\",";
                } else {
                    echo '"movieId":"",';
                }
            ?>
            "loadas":0,
            "asId":"",
            "originalId":"",
            "apiserver":"\/",
            "storePath":"/goapi/getStaticAsset/?path=<store>&pathtype=store&version=<php echo "$userStudio" ?>",
            "clientThemePath":"/goapi/getStaticAsset/?path=<client_theme>&pathtype=client",
            "animationPath":"/goapi/getStaticAsset/?type=swf&subdir=<php echo "studio/$userStudio" ?>&file=",
            "userId":"<php echo "$userId" ?>",
            "username":"<php echo $userName ?>",
            "uemail":"<php echo $userEmail ?>",
            "ut":<php echo $userPermission ?>,
            "isEmbed":0,
            "nextUrl":"\/go\/savedMovie\/<movieId>\/0\/1",
            "bgload":"/goapi/getStaticAsset/?file=go_full.swf&subdir=<php echo "studio/$userStudio"; ?>&filetype=swf",
            "lid":"13",
            "ctc":"go",
            "themeColor":"silver",
            "tlang":"en_US",
            "siteId":"13",
            "templateshow":"false",
            "forceshow":"false",
            "appCode":"go",
            "lang":"en",
            "is_published":"0",
            "is_private_shared":"1",
            "is_password_protected":false,
            "msg_index":"",
            "ad":0,
            "initcb":"studioLoaded",
            "retut":1,
            "featured_categories":null,
            "st":"",
            "uisa":0,
            "tray":"retro",
            "isWide":1,
            "newusr":1,
            "goteam_draft_only":0,
            "studiov":"<php echo $userStudio; ?>",
            "page":"",
            "presaveId":"<php if (isset($_GET['edit'])) {echo $_GET['edit'];} else { $id = substr(str_shuffle('0123456789ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz'),1,10); echo $id; } ?>"
        };

        var _ccad = null;

        function proceedWithFullscreenStudio() {
            // These should be executed only when we are really ready to show the studio
            window.onbeforeunload = function(e) {
                var e = e || window.event;
                var msg = null;
                if (loadedFullscreenStudio && studioApiReady) {
                    msg = 'You are about to lose all your unsaved changes in the studio.';
                }
                if (e && msg != null) {
                    e.returnValue = msg;
                }

                if (msg != null) {
                    return msg;
                }
            };

            show_cc_ad = false;
            // CC template studio widget
            if (show_cc_ad) {
                _ccad = new CCBannerAd("business");
                (function() {
                    var ccId = undefined;
                    _ccad
                        .onBuyCCInsufficientBalance(function() {
                            $('#Studio').get(0).showBuyGoBuckPopUp();
                        })
                        .onBuyCCComplete(function(aid, trackInfo, templateId) {
                            if (trackInfo) {
                            var logger = CCStandaloneBannerAdUI.gaLogTx.createCCPartLogger(aid);
                            if (templateId) {
                                logger.setTemplateId(templateId);
                            }
                            $.grep(trackInfo.parts, function(n, i) {
                                return $.inArray(n.ctype, [ 'GoUpper', 'GoLower', 'upper_body', 'lower_body', 'hair' ]) >= 0;
                            }).each(function(n) {
                                logger.addItem(n);
                            });
                            logger.submit();
                            }

                            ccId = aid;
                            if (typeof ccId != undefined) {
                                try {
                                    $('#Studio').get(0).reloadAllCC(ccId);
                                } catch (e) {
                                }
                                ccId = undefined;
                            }
                        });
                })();
            }

            $('div#studioBlock').css('height', '0px');
            $('#studio_holder').flash(studio_data);
            full_screen_studio();

            ajust_studio();
        }

        function hideCCWidget() {
            show_cc_ad = false;
            $('div.studiotemplatebrowser').css('display', 'none');
            var widget_right = 0;
            if (show_voice_ad) {
                $('#studio_container div.voice-vendor-ad').css('right', widget_right);
                widget_right += $('#studio_container div.voice-vendor-ad').css('width');
            }
            if (show_worknote) {
                $('#studio_container div.studio-worknote').css('right', widget_right);
            }
            ajust_studio();
            return false;
        }

        function showWorknoteWidget() {
            show_worknote = true;
            $('#studio_container div.studio-worknote').css('display', 'block');
            var widget_right = 0;
            if (show_cc_ad) {
                widget_right += $('div.studiotemplatebrowser').css('width');
            }
            if (show_voice_ad) {
                widget_right += $('#studio_container div.voice-vendor-ad').css('width');
            }
            $('#studio_container div.studio-worknote').css('right', widget_right);
            ajust_studio();
            return false;
        }

        function hideWorknoteWidget() {
            show_worknote = false;
            $('#studio_container div.studio-worknote').css('display', 'none');
            ajust_studio();
            return false;
        }

        function toggleWorknoteContent() {
            $('#studio_container .studio-worknote').toggleClass('collapsed expand');
            ajust_studio();
            return false;
        }

        var studioApiReady = false;
        function studioLoaded() {
            studioApiReady = true;
            $(document).trigger('studioApiReady');
        };

        var studioWorknoteModule = null;

        var studioModule = null;

        var videoTutorial = null;

        $(document).ready(function() {
            if (enable_full_screen) {

                if (!false) {
                    $('#studio_container').css('top', '0px');
                }
                $('#studio_container').show();
                $('.site-footer').hide();
                $('#studioBlock').css('height', '1800px');

                if (false) {
                    checkCopyMovie('javascript:proceedWithFullscreenStudio()', '');
                } else if (false) {
                    checkEditMovie('');
                } else {
                    proceedWithFullscreenStudio();
                }

                $(window).on('resize', function() {
                    ajust_studio();
                });
                $(window).on('studio_resized', function() {
                    if (show_cc_ad) {
                        _ccad.refreshThumbs();
                    }
                });

                if (studioApiReady) {
                    var api = studioApi($('#studio_holder'));
                    api.bindStudioEvents();
                    studioModule = new StudioModule();
                }

                $('.ga-importer').prependTo($('#studio_container'));
            } else {
                $('#studioBlock').flash(studio_data);
            }

            // Video Tutorial
            videoTutorial = new VideoTutorial($("#video-tutorial"));
        })
        // restore studio when upsell overlay hidden
        .on('hidden.bs.modal', '#upsell-modal', function(e) {
            if ($(e.target).attr('id') == 'upsell-modal') {
                restoreStudio();
            }
        })
        .on('studioApiReady', function() {
            var api = studioApi($('#studio_holder'));
            api.bindStudioEvents();
            studioModule = new StudioModule();
        })

    var previewPlayer = new PreviewPlayer("wss://preview.vyond.com", true),
        previewPlayerRetryCount = 5;

    previewPlayer.setVideoElement(document.getElementById('h5-preview-player'));
    previewPlayer.setMovieId('');
    previewPlayer.setUserAuthenticationToken('1:760a913514c85f012a4977b79b920687c0b33a7b268c26340021d6720a6ea026:y8X5juI1C+TKXDaGsW/6CLASVlqRtMZyE2rJVx2aUzc=');
    previewPlayer.setFromPptConversion(false);
    previewPlayer.connect();

</script>
<script>
$("#previewPlayerContainer, #video-tutorial").hide();

var movieDataXmlStr = null,
    filmXmlStr = null,
    previewStartFrame = 0;

function checkBrowser() {
    return window.WebSocket && window.MediaSource;
}

function checkTheme(themeList) {
    if (themeList === undefined) {
        return true;
    }

    var themeCount = themeList.length,
        h5Themes = {
            'common' : true,
            'infographics': true,
            'business': true,
            'whiteboard': true,
            'commoncraft': true
        };

    for (var i = 0; i < themeCount; i++) {
        if (h5Themes[themeList[i]] === undefined) {
            return false;
        }
    }

    return true;
}

function checkPreviewServer() {
    return previewPlayer._connectionState === PreviewPlayerConstants.STATE_READY;
}

function loadH5Preview() {
    if (filmXmlStr === null) {
        return;
    }

    $('#h5-playerdiv').data('previewPlayerControl').reset();
    previewPlayer.preview(filmXmlStr, previewStartFrame);
    $('#previewPlayer').addClass('using-h5');
}

function loadLegacyPreview() {
    if (movieDataXmlStr === null) {
        return;
    }

    pauseH5PreviewPlayer();

    savePreviewData(movieDataXmlStr);
    createPreviewPlayer("playerdiv", {
        height: 360,
        width: 640,
        player_url: "/goapi/getStaticAsset/?type=swf&subdir=?php echo "studio%2F$userStudio"; ?>&file=/player.swf&httptype=application/x-shockwave-flash",
        quality: "high",
        allowFullScreen: "true",
        wmode: "transparent",
    }, {
        movieOwner: "", 
        movieOwnerId: "", 
        movieId: "1", 
        ut: "60",
        movieLid: "13", 
        movieTitle: "", 
        movieDesc: "", 
        userId: "", 
        username: "", 
        uemail: "",
        apiserver: "/", 
        thumbnailURL: "", 
        copyable: "0", 
        isPublished: "0", 
        ctc: "go", 
        tlang: "en_US", 
        is_private_shared: "0",
        autostart: "1", 
        appCode: "go", 
        is_slideshow: "0", 
        originalId: "0", 
        is_emessage: "0", 
        isEmbed: "1", 
        refuser: "",
        utm_source: "", 
        uid: "", 
        isTemplate: "1", 
        showButtons: "1", 
        chain_mids: "", 
        showshare: "1", 
        averageRating: "",
        ratingCount: "", 
        numContact: 0, 
        isInitFromExternal: 1, 
        storePath: "/goapi/getStaticAsset/?path=<store>&type&pathtype=store", 
        clientThemePath: "/goapi/getStaticAsset/?path=<client_theme>&type&pathtype=client", 
        startFrame: previewStartFrame
    });
    $('#previewPlayer').removeClass('using-h5');
}

function initPreviewPlayer(dataXmlStr, startFrame, containsChapter, themeList) {
    movieDataXmlStr = dataXmlStr;
    previewStartFrame = startFrame;

    filmXmlStr = dataXmlStr.split("<filmxml>")[1].split("</filmxml>")[0];

    if (typeof startFrame == 'undefined') {
        startFrame = 1;
    } else {
        startFrame = Math.max(1, parseInt(startFrame));
    }

    if (containsChapter) {
        $("#preview-alert-block").show();
    } else {
        $("#preview-alert-block").hide();
    }

    previewSceen();

    $("#previewPlayerContainer").show();

    var isThemeSupport = checkTheme(themeList);

    if (checkBrowser() && isThemeSupport && checkPreviewServer()) { // Preview with next
        loadH5Preview();
    } else {
        // fallback to legacy preview
        loadLegacyPreview();

        if (!checkPreviewServer() && (previewPlayerRetryCount > 0)) { // Retry on WebSocket connection problem
            previewPlayer.connect();
            previewPlayerRetryCount--;
        }
    }
}

function pauseH5PreviewPlayer() {
    $("#h5-preview-player").get(0).pause();
}

function switchBackToStudio() {
    try {
        ($("#previewPlayerContainer #Player").get(0) || {pause:function(){}}).pause();
    } catch (err) {};

    pauseH5PreviewPlayer();

    $("#previewPlayerContainer").hide();
    restoreStudio();
    document.getElementById("Studio").onExternalPreviewPlayerCancel();
}
function publishStudio() {
    try {
        ($("#previewPlayerContainer #Player").get(0) || {pause:function(){}}).pause();
    } catch (err) {};

    pauseH5PreviewPlayer();

    $("#previewPlayerContainer").hide();
    restoreStudio();
    document.getElementById("Studio").onExternalPreviewPlayerPublish();
}
function exitStudio(share) {
    loadedFullscreenStudio = false;
}

function studioUpsellUpgrade() {
    $('#upsell-modal').modal('hide');
    restoreStudio();
    document.getElementById("Studio").onUpsellUpgrade();
}

function customFontBanner() {
    var plansAndPricingUrl = 'https://www.vyond.com/pricing';
    window.open(plansAndPricingUrl, '_blank');
}

window.addEventListener(PreviewPlayerEvent.ANIMATION_INCOMPATIBLE, function() {
    loadLegacyPreview();
});

VideoTutorial.tutorials.composition = {
    title: 'Composition Tutorial',
    wistiaId: 'nuy96pslyp',
};
VideoTutorial.tutorials.enterexit = {
    title: 'Enter and Exit Effects Tutorial',
    wistiaId: 'fvjsa3jnzc',
}
</script>

<script src="/goapi/getStaticAsset/?file=preview-player-control.js&type=js"></script>

<script charset="ISO-8859-1" src="//fast.wistia.com/assets/external/E-v1.js" async=""></script>

<script>
    (function() {

        'use strict';

        var studioMode = 'full',
            themeName = 'business',
            copiedId = '',
            editType = null;

        switch (studioMode) {
            case 'full':
                editType = AMPLITUDE_EVENT_PROPERTIES.VM_NEW;
                break;
            case 'edit':
                editType = AMPLITUDE_EVENT_PROPERTIES.VM_EDIT;
                break;
            case 'copy':
                editType = AMPLITUDE_EVENT_PROPERTIES.VM_COPY;
                break;
            case 'remix':
                editType = AMPLITUDE_EVENT_PROPERTIES.VM_REMIX;
                break;
            default:
                break;
        }
        if (editType !== null) {
            $(window).on('amplitude_loaded', function() {
                logAmplitudeEvent(AMPLITUDE_EVENT.LAUNCH_VM, {
                    theme: themeName,
                    edit_type: editType,
                    video_id: '',
                    copied_id: copiedId
                }, {
                    latest_vm_launched: AMPLITUDE_EVENT_PROPERTIES.LEGACY_VM,
                    latest_vm_launched_legacy_date: '2019-12-15 18:58:56'
                });
            });
        }
    }());

    // Amplitude interface for Flash player.
    function logAmplitudeEvent(eventName, eventProperties, userData) {
        if (typeof amplitude === 'object') {
            if (eventName === AMPLITUDE_EVENT.PLAYS_VIDEO) {
                eventProperties["referral"] = document.referrer;
            }
            if (userData !== undefined) {
                amplitude.getInstance().setUserProperties(userData);
            }
            amplitude.getInstance().logEvent(eventName, eventProperties);
        }
    }
</script>


<-- FOOTER ->


<div id="studio_container" style="top: 0px; width: 2238px; height: 1586px;">
    <div id="studio_holder" style="width: 2108px;"></div>
</div>

</div>




<div id="offer_container">
</div>
<script type="text/javascript">
    </script>

<script type="text/javascript">

</script>
</body></html>-->