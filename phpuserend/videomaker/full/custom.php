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

<script>

</script>


        <script src="/goapi/getStaticAsset/?file=media-controller.js&subdir=h5preview&type=js"></script>
        <script src="/goapi/getStaticAsset/?file=preview-player.js&subdir=h5preview&type=js"></script>

<script type="text/javascript" async="" src="//munchkin.marketo.net/munchkin.js"></script><script src="https://googleads.g.doubleclick.net/pagead/viewthroughconversion/956549168/?random=1576454337808&amp;cv=9&amp;fst=1576454337808&amp;num=1&amp;guid=ON&amp;resp=GooglemKTybQhCsO&amp;u_h=900&amp;u_w=1600&amp;u_ah=870&amp;u_aw=1600&amp;u_cd=24&amp;u_his=7&amp;u_tz=-360&amp;u_java=false&amp;u_nplug=4&amp;u_nmime=6&amp;gtm=2wgc61&amp;sendb=1&amp;ig=1&amp;frm=0&amp;url=https%3A%2F%2Fga.vyond.com%2Fvideomaker%2Ffull%2Fbusiness-friendly&amp;ref=https%3A%2F%2Fga.vyond.com%2Fvideomaker&amp;tiba=The%20Video%20Maker%20from%20Vyond%20-%20Make%20a%20Video%20for%20YouTube!&amp;hn=www.googleadservices.com&amp;async=1&amp;rfmt=3&amp;fmt=4"></script><script type="text/javascript" async="" src="//munchkin.marketo.net/munchkin.js"></script></head>
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

<div class="page-container">


<!-- END OF HEADER -->

<div style="position:relative;">
    <div id="studioBlock" style="height: 0px;"><!-- --></div>

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
            swf: "/goapi/getStaticAsset/?file=go_full.swf&subdir=<?php echo "studio/$userStudio" ?>&type=swf",
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
            <?php 
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
            "storePath":"/goapi/getStaticAsset/?path=<store>&pathtype=store&version=<?php echo "$userStudio" ?>",
            "clientThemePath":"/goapi/getStaticAsset/?path=<client_theme>&pathtype=client",
            "animationPath":"/goapi/getStaticAsset/?type=swf&subdir=<?php echo "studio/$userStudio" ?>&file=",
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
            "tray":"custom",
            "isWide":1      ,
            "newusr":1,
            "goteam_draft_only":0,
            "studiov":"<?php echo $userStudio; ?>",
            "page":"",
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


<!-- FOOTER -->


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
</body></html>