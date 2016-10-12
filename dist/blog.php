<!DOCTYPE html>
<html lang="en" ng-app="calendarApp">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description">
    <meta name="author">

    <title>Robert Schneiderman</title>



    <link rel="icon" href="favicon.ico?v=1" />
    <link href='https://fonts.googleapis.com/css?family=Roboto+Slab' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Lato:300,300italic,600' rel='stylesheet' type='text/css'>

    <script src="https://use.typekit.net/uqn5ezm.js"></script>
    <script>
        try {
            Typekit.load({
                async: true
            });
        } catch (e) {}
    </script>

    <link type="text/css" rel="stylesheet" href="stylesheets/css/build.css" />




</head>

<body>

    <!-- Google Tag Manager -->
    <noscript>
        <iframe src="//www.googletagmanager.com/ns.html?id=GTM-MJJHVT" height="0" width="0" style="display:none;visibility:hidden"></iframe>
    </noscript>
    <script>
        (function(w, d, s, l, i) {
            w[l] = w[l] || [];
            w[l].push({
                'gtm.start': new Date().getTime(),
                event: 'gtm.js'
            });
            var f = d.getElementsByTagName(s)[0],
                j = d.createElement(s),
                dl = l != 'dataLayer' ? '&l=' + l : '';
            j.async = true;
            j.src =
                '//www.googletagmanager.com/gtm.js?id=' + i + dl;
            f.parentNode.insertBefore(j, f);
        })(window, document, 'script', 'dataLayer', 'GTM-MJJHVT');
    </script>
    <!-- End Google Tag Manager -->






    <section id="contact" class="section--contact">
        <div class="header" style="margin-bottom: 3.5rem;">
            <h2 class="main">Contact Me</h2>
            <p class="sub">Please reach out to me if you would like to work with me or if you have any questions</p>
        </div>
        <div class="contact-us-c">
            <form class="form--contact" action="scripts/contact.php" method="post">
                <div class="cj">
                    <input class="form--contact__input" type="text" name="name" placeholder="Name" value="<?php echo $_GET['name']; ?>"><span class="medium-space">&nbsp;</span>
                    <input class="form--contact__input" type="text" name="email" placeholder="Email" value="<?php echo $_GET['email']; ?>">
                </div>
                <textarea class="form--contact__textarea" name="message" placeholder="Message" rows="6"></textarea>
                <button class="form--contact__btn">Send</button>
            </form>
        </div>
    </section>

    <section class="section--footer">
        <p></p>
    </section>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/ScrollMagic/2.0.5/ScrollMagic.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/1.18.2/TweenMax.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/ScrollMagic/2.0.5/plugins/animation.gsap.js"></script>

    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/wow/1.1.2/wow.min.js"></script>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery.lazyload/1.9.1/jquery.lazyload.min.js"></script>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/lazysizes/1.1.5/lazysizes.min.js"></script>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.5.8/slick.min.js"></script>

    <script type="text/javascript" src="js/production.min.js"></script>

    <?php 
    if ($_GET['contact']) {
    ?>
        <script type="text/javascript">
            if ($('#modal').length > 0) {
                var modal = new Modal('#modal');
                modal._open();
            }
        </script>
        <?php
        if($_GET['message']) {
        ?>
            <script type="text/javascript">
                var php_var = "<?php echo $_GET['message']; ?>";
                $('.form--contact__textarea').val(php_var);
            </script>
            <?php
        }
    }    
    ?>

</body>

</html>