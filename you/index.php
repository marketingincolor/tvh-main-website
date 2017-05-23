<!DOCTYPE html>
<html lang="en">
    <head>
        <?php include( '../gtm_head.php' ); ?>
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <meta charset="utf-8">
        <title>Our World Revolves Around You</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="https://fonts.googleapis.com/css?family=Roboto:400,700" rel="stylesheet">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/foundation/6.1.2/foundation.min.css" />
        <link href="../tvh-lander.css" rel="stylesheet" type="text/css" />
        <script type='text/javascript'>
        var w = 520;
        var h = 480;
        var left = Math.round((screen.width/2)-(w/2));
        var tops = Math.round((screen.height/2)-(h/2));
        function showPopup(url) {
            newwindow=window.open(url,'name','height=480,width=520,left='+left+'top='+tops+',resizable');
            if (window.focus) {newwindow.focus()}
        }
        function copyToClipboard(element) {
            var $temp = $("<input>");
            $("body").append($temp);
            $temp.val($(element).text()).select();
            document.execCommand("copy");
            $temp.remove();
        }
        </script>

        <style>
        .logo { background-color:rgb(45, 122, 61); }
        .h1-headline h1 { font-size:2em; padding: .5em 0em; color:rgb(45, 122, 61); }
        .h3-social, .h4-share { background-color: rgb(238, 238, 238); }
        .h4-share .share-button { background-color:rgb(219, 104, 41); }
        .h4-share .share-button:hover { background-color:rgb(255, 129, 61); }
        .h4-like { background-color:rgb(45, 122, 61); }
        .h4-like a { color:rgb(255, 255, 255); }
        .h4-like a:hover { color:rgb(255, 255, 255); }
        .h3-social h3 { color:rgb(45, 122, 61); }
        .h4-share h4 { color:rgb(45, 122, 61); }
        #player { position:absolute; top:0px; left:0px; }
        #overlay { position:absolute; z-index:1; top:0px; left: px; }
        .flex-video { margin-bottom:0 !important; padding-bottom:56.25% !important; }

        .share-fb { background:url(../images/tvhlp-grfx-you-social-btn-fb.png) no-repeat center center / contain; }
        .share-fb:hover { background:url(../images/tvhlp-grfx-you-social-btn-fb.png) no-repeat center center / contain; }
.share-fb:active { background:url(../images/tvhlp-grfx-social-btn-clk-fb.png) no-repeat center center / contain; }
        .share-tw {  background:url(../images/tvhlp-grfx-you-social-btn-tw.png) no-repeat center center / contain; }
        .share-tw:hover { background:url(../images/tvhlp-grfx-you-social-btn-tw.png) no-repeat center center / contain; }
.share-tw:active { background:url(../images/tvhlp-grfx-social-btn-clk-tw.png) no-repeat center center / contain; }
        .share-em { background:url(../images/tvhlp-grfx-you-social-btn-em.png) no-repeat center center / contain; }
        .share-em:hover { background:url(../images/tvhlp-grfx-you-social-btn-em.png) no-repeat center center / contain; }
.share-em:active { background:url(../images/tvhlp-grfx-social-btn-clk-em.png) no-repeat center center / contain; }
        .share-li { background:url(../images/tvhlp-grfx-you-social-btn-li.png) no-repeat center center / contain; }
        .share-li:hover { background:url(../images/tvhlp-grfx-you-social-btn-li.png) no-repeat center center / contain; }
.share-li:active { background:url(../images/tvhlp-grfx-social-btn-clk-li.png) no-repeat center center / contain; }
        </style>
    </head>
    <body>
        <?php include( '../gtm_body.php' ); ?>
        <div class="row">
            <div class="logo small-12 small-centered columns align-self-middle">
                <div class="row collapse">
                    <div class="small-12 small-centered columns">
                        <img src="../images/tvhlp-grfx-logo.png" alt="The Villages Health">
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="h1-headline small-12 small-centered columns align-self-middle">
                <h1>Our World Revolves Around You</h1>
            </div>
        </div>

        <script>
        var tag = document.createElement('script');

        tag.src = "https://www.youtube.com/iframe_api";
        var firstScriptTag = document.getElementsByTagName('script')[0];
        firstScriptTag.parentNode.insertBefore(tag, firstScriptTag);

        var player;
        function onYouTubeIframeAPIReady() {
            player = new YT.Player('player', {
                  width: '960',
                  height: '540',
                  videoId: 'pKhpg_XfH-o',
                  playerVars: {controls: 0, showinfo: 0, loop: 1, rel: 0},
                  events: {
                    'onReady': onPlayerReady,
                  }
            });
        }

        function onPlayerReady(event) {
            init();
        }

        function init() {
            $("#overlay").css({cursor: "pointer"}).click(function() {
                player.getPlayerState() == 1 ? player.pauseVideo() : player.playVideo();
            });
        }


        </script>
        
        <div class="row">
            <div class="small-12" style="position:relative;">
                <div id="overlay"><img src="../images/tvhlp-grfx-you-curve.png" width="960" height="540"></div>
                <div class="flex-video"><div id="player"></div></div>
            </div>
        </div>

        <div class="row">
            <div class="h1-intro small-12 small-centered columns">
                <div class="collapse row">
                    <div class="small-10 small-offset-1 columns">
                        <h1>By doing things differently, we're making a big difference in the lives of our patients.</h1>
                        <p class="main">As a patient of The Villages Health, you'll benefit from our revolutionary approach that enables more focus on each patient and seamless, coordinated care across a breadth of specialties. As one of the only multi-specialty groups in the Tri-County area, we can diagnose and treat the most common to complex medical conditions. Our specialties include audiology, cardiology, dermatology, endocrinology, gastroenterology, general surgery, gynecology, orthopaedics, neurology, psychiatry, rheumatology, and urology.</p>
                        <p class="main">Our unique health system enables you to have a closer relationship with your primary care doctor, who oversees every aspect of your care, including working closely with any specialists. We encourage you to take an active role in your own health care and provide unparalleled service and support. It's why we've been ranked in the top 1% of U.S. health systems.*</p>
                        <p class="main"><a href="http://thevillageshealth.com/primarycare/" target="_blank">By thinking outside of the traditional health care box</a>, we're able to help our patients stay healthy with a preventive approach that stops problems before they start or discovers them sooner. Our unique health system also enables more efficient treatments, helping our patients get well faster. So whether you're managing a chronic condition or facing a serious health issue, our innovative approach gives you your best chance.</p>
                        <p class="main">To learn more, please call The Villages Health<sup>&reg;</sup> at 352-702-3435, visit <a href="http://thevillageshealth.com/" target="_blank">TheVillagesHealth.com</a>, or email <a href="mailto:info@thevillageshealth.com">info@TheVillagesHealth.com</a>.</p>
                        <p class="sub">*Source: UnitedHealthcare measured the performance of The Villages Health with The Healthcare Effectiveness Data and Information Set (HEDIS), a tool developed by the National Committee for Quality Assurance (NCQA) that's used by more than 90 percent of America's health plans to measure the level of care and service.</p>
                    </div>
                </div>

            </div>
            <div class="small-10 large-12 small-centered columns"></div>
        </div>


        <div class="row">
            <div class="h1-intro small-12 small-centered columns">
                <div class="collapse row">
                    <div class="small-10 small-offset-1 columns">
                        <hr>
                    </div>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="h1-intro small-12 small-centered columns">

                <div class="each row" data-equalizer>
                    <div class="small-12 medium-6 columns" data-equalizer-watch>
                        <img src="../images/tvhlp-grfx-cta-img-lt.png" alt="find out more today">
                    </div>
                    <div class="small-12 medium-6 columns" data-equalizer-watch>
                        <img src="../images/tvhlp-grfx-cta-img-rt.png" alt="dont delay">
                    </div>
                </div>

            </div>
        </div>

        <div class="row">
            <div class="h1-you small-12 small-centered columns">
                <div class="collapse row">
                    <h1>Revolutionary Care Centered on You</h1>

                    <div class="collapse row">
                        <div class="small-6 small-offset-3 medium-4 medium-offset-4 columns">
                            <img src="../images/tvhlp-grfx-you-ico-clock.png" alt="appointment icon">
                            <p>One-hour new patient appointments; 30-minute regular appointments</p>
                        </div>
                    </div>

                    <div class="small-6 medium-4 columns">
                        <img src="../images/tvhlp-grfx-you-ico-timer.png" alt="wait icon">
                        <p>No or short wait times</p>
                    </div>

                    <div class="small-6 medium-4 columns">
                        <img src="../images/tvhlp-grfx-you-ico-note.png" alt="plan icon">
                        <p>Personalized wellness plans</p>
                    </div>

                    <div class="small-6 medium-4 columns">
                        <img src="../images/tvhlp-grfx-you-ico-noscope.png" alt="testing icon">
                        <p>No unnecessary testing</p>
                    </div>

                    <div class="small-6 medium-4 columns">
                        <img src="../images/tvhlp-grfx-you-ico-flask.png" alt="labs icon">
                        <p>On-site labs</p>
                    </div>

                    <div class="small-6 medium-4 columns">
                        <img src="../images/tvhlp-grfx-you-ico-sched.png" alt="appointments icon">
                        <p>Same-day appointments</p>
                    </div>

                    <div class="small-6 medium-4 columns">
                        <img src="../images/tvhlp-grfx-you-ico-steth.png" alt="screenings icon">
                        <p>Free screenings</p>
                    </div>

                    <div class="small-6 medium-4 columns">
                        <img src="../images/tvhlp-grfx-you-ico-heart.png" alt="health classes icon">
                        <p>Free health classes</p>
                    </div>

                    <div class="small-6 medium-4 columns">
                        <img src="../images/tvhlp-grfx-you-ico-comp.png" alt="online portal icon">
                        <p>Online patient portal and medical records</p>
                    </div>

                    <div class="small-6 medium-4 columns">
                        <img src="../images/tvhlp-grfx-you-ico-med.png" alt="acute care icon">
                        <p>Weekend acute care</p>
                    </div>

                </div>
            </div>
        </div>
        <div class="row">
            <div class="large-12 small-centered columns">
                <div class="row">
                    <div class="small-12 columns">
                        <h2>Learn More About<br>Medicare Advantage</h2>
                        <p>Educate yourself about the health insurance plans we accept and the benefits of The Villages Health and Medicare Advantage. <a href="http://thevillageshealth.com/info">Learn More</a>.</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="row" data-equalizer>
            <div class="h3-social small-12 large-6 columns" data-equalizer-watch>
                <h3>Share This Page</h3>
                <div class="row collapse small-up-4">
                    <div class="column">
                        <a href="https://www.facebook.com/sharer/sharer.php?u=http://thevillageshealth.com/you" onclick="showPopup(this.href);return(false);" target="_blank" class="share-fb">&nbsp;</a>
                    </div>
                    <div class="column">
                        <a href="https://twitter.com/home?status=Our%20World%20Revolves%20Around%20You%20http://thevillageshealth.com/you" onclick="showPopup(this.href);return(false);" class="share-tw" target="_blank">&nbsp;</a>
                    </div>
                    <div class="column">
                        <a href="mailto:?subject=Our%20World%20Revolves%20Around%20You&body=http://thevillageshealth.com/you" class="share-em">&nbsp;</a>
                    </div>
                    <div class="column">
                        <p id="p1" style="display:none;">http://thevillageshealth.com/you</p>
                        <textarea id="holdtext" style="display:none;"></textarea>
                        <a href="javascript:;" onclick="copyToClipboard('#p1');" class="share-li">&nbsp;</a>
                    </div>
                </div>
            </div>
            <div class="h4-share small-12 large-6 columns" data-equalizer-watch>
                <h4>Share Your Story</h4>
                <p>We love hearing how our revolutionary health care model makes a difference for those we serve. Tell us why you enjoy being a patient of The Villages Health.</p>
                <a href="share-your-story" class="share-button">Share</a>
                <p>&nbsp;</p>
            </div>
        </div>
        <div class="row">
            <div class="h4-like small-12 columns"><h4><a href="https://www.facebook.com/TheVillagesHealth" target="_blank"><img src="../images/tvhlp-grfx-social-share-fb.png" style="position:relative; top:-4px; padding-right:.25em;">Like Us On Facebook</a></h4>
            </div>
        </div>

        <div class="row footer">
            <div class="small-12 columns">
                &copy; <?php echo date("Y") ?> The Villages Health
            </div>
        </div>

        <script src="https://cdn.jsdelivr.net/foundation/6.1.2/foundation.min.js"></script>
        <script src="https://cdn.jsdelivr.net/foundation/6.1.2/js/foundation.equalizer.js"></script>
        <script>
            $(document).foundation();
        </script>
    </body>
</html>
