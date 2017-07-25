<!DOCTYPE html>
<html lang="en">
    <head>
        <?php include( '../gtm_head.php' ); ?>
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <meta charset="utf-8">
        <title>Our World Revolves Around You</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,700" rel="stylesheet">
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
        .you { color:rgb(51, 51, 51); }
        .you p { text-align:left; margin-bottom:1em !important; }
        .personal-quote { font-size:1.015em !important; margin-top:.5em; text-align:center !important; }
        .personal-id { font-size:1.015em !important; font-style:italic; text-align:center !important; font-weight:bold; }
        .logo { background-color:rgb(45, 122, 61); }
        .main a, .main a:hover { color:rgb(255, 129, 61); text-decoration:underline;}
        .h1-intro h1, 
        .h1-headline h1, 
        .h4-share h4, 
        .h3-social h3 { font-weight:300 !important; font-size:1.75em; padding:0em; color:rgb(0, 0, 0) !important; margin:.5em 0em 1em; }
        .h4-like h4 { font-weight:300 !important; font-size:1.5em; padding:0em; color:rgb(0, 0, 0) !important; margin:1.25em 0em; }
        .h1-intro .rule { margin:1.5em; text-align:center; }
        .h1-intro .personal { margin:2em 0em; }
        .h3-social, .h4-share { background-color: rgb(238, 238, 238); padding:2em 0em; }
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
        .footer-msg h2  { font-weight:300 !important; font-size:1.75em; padding:0em; color:rgb(255, 255, 255) !important; margin:1em 0em; }
        .footer-msg { background:url(../images/tvhlp-grfx-cta-img-foot-bg.jpg) no-repeat center center / cover; }
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
    <body class="you">
        <?php include( '../gtm_body.php' ); ?>
        <div class="row expanded">
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
                <div class="flex-video"><div id="player"></div></div>
            </div>
        </div>

        <div class="row">
            <div class="h1-intro small-12 small-centered columns">
                <div class="collapse row">
                    <div class="small-10 small-offset-1 columns">
                        <h1 style="text-align:left; padding-top:1.5em;">See for yourself how exceptional health care can be.</h1>
                        <p class="main">Remember your first trip to The Villages<sup>&reg;</sup>? You had to experience it first-hand to realize just how amazing this community is. We'd like you to experience The Villages Health in person, too, with a tour of one of our seven Care Centers. To schedule your personal tour, please call 352-702-3435.</p>
                        <h1 style="text-align:left;">Exceptional care that gives you your best chance at enjoying good health – and the good life, right here in The Villages<sup>&reg;</sup>.</h1>
                        <p class="main">Discover health care the way it was meant to be. Where your appointments are right on schedule and your doctor greets you by name, treats you as a friend, and spends focused time with you. Our primary care doctors thrive on serving a limited number of patients, so they can get to know you well. And it’s all just a golf car ride away, here in your very own hometown.</p>
                        <p class="main">As the largest health care group in the Tri-County area with more than 60 board-certified doctors, we’re passionate about making a positive difference in your life. It's why we've been ranked in the top 1% of U.S. health systems.* Your primary care doctor will oversee every aspect of your care, including working closely with our highly qualified specialists in audiology, cardiology, dermatology, endocrinology, gastroenterology, general surgery, gynecology, orthopaedics, neurology, rheumatology, and urology. (You don't have to be a primary care patient to see our specialists.)</p>
                        <p class="main"><a href="http://thevillageshealth.com/primarycare/" target="_blank">By thinking outside of the traditional health care box</a>, we're able to provide superior preventive care, diagnosis, and treatment. Our efficient and integrated health care system allows us to provide better health outcomes and an unprecedented care experience for our patients&mdash;often at a lower cost. So whether you’re managing chronic conditions or facing serious health issues, we're here to protect your greatest wealth: your health. </p>
                        <p class="sub">*Source: UnitedHealthcare measured the performance of The Villages Health with The Healthcare Effectiveness Data and Information Set (HEDIS), a tool developed by the National Committee for Quality Assurance (NCQA) that’s used by more than 90 percent of America's health plans to measure the level of care and service.</p>
                    </div>
                </div>

            </div>
            <div class="small-10 large-12 small-centered columns"></div>
        </div>


        <div class="row">
            <div class="h1-intro small-12 small-centered columns">
                <div class="rule collapse row">
                    <div class="small-10 small-offset-1 columns">
                        <hr>
                    </div>
                </div>
            </div>
        </div>

        <div class="row h1-intro">
            <div class="h1-intro small-10 small-centered columns" data-equalizer="outer">

                <div class="each row" data-equalizer="inner">
                    <div class="personal small-12 medium-6 columns" data-equalizer-watch="outer">
                        <img src="../images/tvhlp-grfx-cta-img-lt.png" alt="find out more today">
                        <p class="personal-quote" data-equalizer-watch="inner">"My care is proactive, comprehensive, and coordinated by my doctor. They set you on a course for the best possible care."</p>
                        <p class="personal-id">Paul Hathcox, Patient at Creekside Care Center</p>
                    </div>
                    <div class="personal small-12 medium-6 columns" data-equalizer-watch="outer">
                        <img src="../images/tvhlp-grfx-cta-img-rt.png" alt="dont delay">
                        <p class="personal-quote" data-equalizer-watch="inner">"My physician found out what was wrong with me. She saved my life. I feel so confident with her and the medical help that I’ve received."</p>
                        <p class="personal-id">Elise Brennan, Patient at Pinellas Care Center</p>
                    </div>
                </div>

            </div>
        </div>

        <div class="row">
            <div class="footer-msg large-12 small-centered columns">
                <div class="row collapse">
                    <div class="small-12 columns">
                        <h2>Health care the way it was meant to be.</h2>
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
        <div class="row expanded">
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
