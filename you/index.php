<!DOCTYPE html>
<html lang="en">
    <head>
        <?php include( 'gtm_head.php' ); ?>
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
    </head>
    <body>
        <?php include( 'gtm_body.php' ); ?>
        <div class="expanded row">
            <div class="logo small-12 small-centered columns align-self-middle">
                <div class="row">
                    <div class="small-12 small-centered columns">
                        <img src="../images/tvhlp-grfx-logo.png" alt="The Villages Health">
                    </div>
                </div>
            </div>
        </div>
        <div class="collapse row">
            <div class="video small-12 small-centered columns">
                <iframe width="560" height="315" src="https://www.youtube.com/embed/5YbOsZiu6ZE" frameborder="0" allowfullscreen></iframe>
            </div>
        </div>
        <div class="row">
            <div class="h1-intro small-12 small-centered columns">
                <div class="collapse row">
                    <div class="small-10 small-offset-1 columns">
                        <h1>Our World Revolves Around You</h1>
                        <p class="main">Our revolutionary style of care puts you at the center of your own well-being and ensures you enjoy a close relationship with your primary care doctor, timely access to care, and outstanding service. The result of doing things differently: better health care and better health outcomes often at a lower cost for our patients. It's why we've been ranked in the top 1% of U.S. health systems.*</p>
                        <p class="more">To learn more, please call The Villages Health<sup>&reg;</sup> at <strong>352-480-1013</strong>, visit <strong class="green"><a href="http://thevillageshealth.com" target="_blank" class="green">TheVillagesHealth.com</a></strong>, or <strong class="green"><a href="mailto:info@TheVillagesHealth.com" class="green">email us</a></strong>.</p>
                        <p class="sub">*Source: UnitedHealthcare measured the performance of The Villages Health with The Healthcare Effectiveness Data and Information Set (HEDIS), a tool developed by the National Committee for Quality Assurance (NCQA) that's used by more than 90 percent of America's health plans to measure the level of care and service.</p>
                    </div>
                </div>

            </div>
            <div class="small-10 large-12 small-centered columns"></div>
        </div>
        <div class="expanded row">
            <div class="h2-cta large-12 small-centered columns">

                <div class="each row" data-equalizer>
                    <div class="left-image show-for-large large-3 columns" data-equalizer-watch>
                        <img src="../images/tvhlp-grfx-cta-img-lt.png" alt="find out more today">
                    </div>
                    <div class="small-12 large-6 columns" data-equalizer-watch>
                        <div class="row">
                            <div class="circle-wrapper">
                                <div class="circle-container">
                                    <h2>Learn More About<br>Medicare Advantage</h2>
                                    <p>Educate yourself about the health insurance plans we accept and the benefits of The Villages Health and Medicare Advantage.</p>
                                    <a class="cta-button" href="http://thevillageshealth.com/info">Learn More</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="right-image show-for-large large-3 columns" data-equalizer-watch>
                        <img src="../images/tvhlp-grfx-cta-img-rt.png" alt="dont delay">
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
            <div class="h4-like small-12 columns"><h4><a href="https://www.facebook.com/TheVillagesHealth" target="_blank"><img src="../images/tvhlp-grfx-social-share-fb.jpg" style="position:relative; top:-4px; padding-right:.25em;">Like Us On Facebook</a></h4>
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
