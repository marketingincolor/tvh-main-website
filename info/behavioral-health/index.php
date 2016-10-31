<!DOCTYPE html>
<html lang="en">
    <head>
        <?php //include( '../gtm_head.php' ); ?>
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <meta charset="utf-8">
        <title>Make the Best Choice for You</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="https://fonts.googleapis.com/css?family=Roboto:400,700" rel="stylesheet">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/foundation/6.1.2/foundation.min.css" />
        <link href="../../tvh-lander.css" rel="stylesheet" type="text/css" />
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
    <body class="info">
        <?php //include( '../gtm_body.php' ); ?>
        <div class="row">
            <div class="logo small-12 small-centered columns align-self-middle">
                <div class="row">
                    <div class="small-12 small-centered columns">
                        <img src="../../images/tvhlp-grfx-logo.png" alt="The Villages Health">
                    </div>
                </div>
            </div>
        </div>
        <div class="collapse row">
            <div class="return small-12 small-centered columns">
                <a href="/"> &lt; Go Back</a>
            </div>
        </div>
        <div class="row">
            <div class="h1-top small-12 small-centered columns">
                <div class="collapse row">
                    <div class="small-10 small-offset-1 columns">
                        <h1 class="orange">The Villages Health<sup>&reg;</sup> Integrates Behavioral Health to Better Treat the Whole Patient</h1>
                        <p class="main">The revolutionary style of care that we offer at The Villages Health<sup>&reg;</sup> (TVH) puts you at the center of your own well-being and ensures you have a close relationship with your primary care doctor, timely access to care, outstanding service, and the best health outcomes. If you're a TVH patient with original Medicare and a traditional Medicare Supplemental policy, in order to remain our patient after January 1, 2017, you'll need to choose one of the Medicare Advantage plans we accept offered now during open enrollment. We hope you will take a few minutes to review some additional information that may help you decide if TVH is the right choice for your future health care needs.</p>
                        <P class="main">To get more information about the Medicare Advantage plans accepted by The Villages Health, contact a UnitedHealthcare licensed insurance agent or visit one of the following locations.</p>
                    </div>
                </div>
            </div>
            <div class="small-10 large-12 small-centered columns"></div>
        </div>

        <div class="h2-content small-12 small-centered columns">
            <div class="collapse row">
                <div class="small-10 small-offset-1 columns">
                    <h2 class="orange">The Villages Health<sup>&reg;</sup> Integrates Behavioral Health to Better Treat the Whole Patient</h2>
                    <P class="main">To get more information about the Medicare Advantage plans accepted by The Villages Health, contact a UnitedHealthcare licensed insurance agent or visit one of the following locations.</p>
                </div>
            </div>
        </div>

        <div class="h2-content small-12 small-centered columns">
            <div class="collapse row">
                <div class="small-10 small-offset-1 columns">
                    <h2 class="orange">The Villages Health<sup>&reg;</sup> Integrates Behavioral Health to Better Treat the Whole Patient</h2>
                    <P class="main">To get more information about the Medicare Advantage plans accepted by The Villages Health, contact a UnitedHealthcare licensed insurance agent or visit one of the following locations.</p>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="h2-cta large-12 small-centered columns">
                <div class="row" data-equalizer>
                    <div class="small-12 large-6 columns" data-equalizer-watch>
                        <div class="row">
                            <div class="circle-wrapper">
                                <div class="circle-container">
                                    <h2>Visit any UnitedHealthcare Medicare Store to learn more.</h2>
                                    <a class="cta-button" href="http://thevillageshealth.com/info/uhc-medicare-stores">Locations</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="small-12 large-6 columns" data-equalizer-watch>
                        <div class="row">
                            <div class="circle-wrapper">
                                <div class="circle-container">
                                    <h2>Visit any Medicare Resource Center to learn more.</h2>
                                    <a class="cta-button" href="http://thevillageshealth.com/info/medicare-resource-centers">Locations</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
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
