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
        .video {
            position: relative;
            padding-bottom: 56.25%; /* 16:9 */
            padding-top: 25px;
            height: 0;
        }
        .video iframe {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
        }
        </style>
    </head>
    <body class="info">
        <?php //include( '../gtm_body.php' ); ?>
        <div class="row">
            <div class="logo small-12 small-centered columns align-self-middle">
                <div class="row collapse">
                    <div class="small-12 small-centered columns">
                        <img src="../images/tvhlp-grfx-logo.png" alt="The Villages Health">
                    </div>
                </div>
            </div>
        </div>
        <div class="collapse row">
            <div class="return small-12 small-centered columns">
                <a href="../info">&lt;&nbsp;Go Back</a>
            </div>
        </div>
        <div class="row">
            <div class="h1-top small-12 small-centered columns">
                <div class="collapse row">
                    <div class="small-10 small-offset-1 columns">
                        <h1 class="orange">Understanding the Clinical Value of Medicare Advantage</h1>
                        <p class="main">Do you want to understand the difference in Medicare Supplemental and Medicare Advantage? Why medical errors are so high in the United States? How quality outcomes, patient safety, and service have become part of the "value" you should be receiving from your health care?</p>
                        <P class="main">Patients on Medicare Advantage tend to stay healthier than those on traditional Medicare plans. The transformation of health care continues to become more closely aligned with what patients want. Watch the video below to see a presentation on "The Clinical Value of Medicare Advantage" to learn about these topics.</p>
                    </div>
                </div>
                <div class="collapse row">
                    <div class="video small-12 small-centered columns">
                        <iframe width="560" height="315" src="https://www.youtube.com/embed/JM7hDokV6k4" frameborder="0" allowfullscreen></iframe>
                    </div>
                </div>
                <div class="collapse row">
                    <div class="small-10 small-offset-1 columns">
                        <p class="main">This is a presentation by Jeff Lowenkron, MD, MPP, Chief Medical Officer, The Villages Health, presented at the National Medicare Education Week Health Expo on September 15, 2016. Also featured are questions from the audience.</p>
                    </div>
                </div>
            </div>
            <div class="small-10 large-12 small-centered columns"></div>
        </div>

        <div class="row">
            <div class="h2-content small-12 small-centered columns">
                <div class="collapse row">
                    <div class="small-4 columns">
                        <P class="main">
                            <a href="../info/hospital-coverage">&lt;&nbsp;Hospital Coverage</a>
                        </p>
                    </div>
                    <div class="small-4 small-offset-4 columns">
                        <P class="main">
                            <a href="../info/behavioral-health">Behavioral Health&nbsp;&gt;</a>
                        </p>
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
