<!DOCTYPE html>
<html lang="en" ng-app="calendarApp">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <meta name="description" content="Robert Schneiderman is a front-end developer and UI designer who has designed and coded beautiful websites for many prestigious clients.">
    <meta name="author">
    <title>Anything</title>


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



    <div id="my-video" style="width: 100%; height: 700px; position: absolute; z-index: 1000"></div>
    <section class="section--landing">
        <div id="modal" class="modal">
            <svg id="modal-close-btn" class="modal__btn">
                <use xlink:href="images/sprites/svgsprite.svg#x"></use>
            </svg>
            <?php if ($_SERVER['REQUEST_METHOD'] == 'GET') { if($_GET['contact'] == 'fail') { $title = "Failed to send!"; $class = "failure"; $message = 'The message was not successfully sent. Please review the information. It has been saved in the form'; } else { $firstName = substr($_GET['name'], 0, strrpos($_GET['name'], ' ')); $title = "Message sent!"; $class = "success"; $message = 'Thank you for contacting me, <strong>' . $firstName . '</strong>. I will be contacting you at <strong>' . $_GET['email'] . '</strong> within 24 hours.'; } echo "<h2 class='modal__heading ". $class . "'>" . $title . "</h2>"; echo "<p class='modal__body'>" . $message . "</p>"; } ?></div>
        <svg class="img--headline">
            <use xlink:href="images/sprites/svgsprite.svg#headline"></use>
        </svg>

        <div class="cj auto" style="margin-top: 5rem; width: 29.8%;">
            <a class="link--page" href="https://github.com/robertschneiderman">Github</a>
            <a class="link--page" href="https://www.linkedin.com/in/robert-schneiderman-81007269?trk=nav_responsive_tab_profile_pic">LinkedIn</a>
            <a class="link--page" href="blog/">Blog</a>
        </div>
    </section>
    <div id="wrapper" class="wrapper">
        <div id="bg"></div>
        <div id="lines2"></div>
        <div id="lines-crazy"></div>
        <section class="section--about-me">
            <div id="trigger"></div>
            <div id="about-c">
                <div class="header">
                    <!-- <h2 class="main">About Me</h2></div> -->
                <div class="text--about">
                    <p class="body">I am a <span class="highlight">web designer</span> and <span class="highlight">developer</span> with a fascination for all things web. For the past seven years, I have invested thousands of hours designing and coding professional looking
                        websites with amazing user experiences.
                        <br><span class="spacer">My <span class="color-primary">philosophy</span> is that:</span>
                        <br>
                        <br>A website is much more than a convenient medium to transmit information to clients. A website, rather, is an extension of a company’s brand, and as such, it must convey to one’s clientele that it is professional and trustworthy.</p>
                </div>
            </div>
        </section>
        <section id="my-skills" class="section--my-skills">
            <div id="trigger2"></div>
            <div class="header">
                <h2 class="main">My Skills</h2></div>
            <div id="tabs" class="tabs">
                <nav class="tabs__nav">
                    <ul class="tabs-list cj">
                        <li class="tabs-list__item ibm">
                            <svg class="ibm">
                                <use xlink:href="images/sprites/svgsprite.svg#developer"></use>
                            </svg> <span class="ibm">Developer</span></li>&nbsp;
                        <li class="tabs-list__item ibm">
                            <svg class="ibm">
                                <use xlink:href="images/sprites/svgsprite.svg#designer"></use>
                            </svg> <span class="ibm">Designer</span></li>&nbsp;
                        <li class="tabs-list__item ibm">
                            <svg class="ibm">
                                <use xlink:href="images/sprites/svgsprite.svg#technologies"></use>
                            </svg> <span class="ibm">Technologies</span></li>&nbsp;
                        <li class="tabs-list__item ibm">
                            <svg class="ibm">
                                <use xlink:href="images/sprites/svgsprite.svg#skills"></use>
                            </svg> <span class="ibm">Skills</span></li>
                    </ul>
                </nav>
                <div class="tabs__content">
                    <div id="developer" class="container--skills is-active">
                        <div class="row">
                            <div class="ib ta-center">
                                <div id="htmlPB" class="img--progress-bar"></div>
                                <p class="tooltip--pb">Rob has been using HTML for over 6 years. He uses the latest HTML 5 techniques and has a ton of experience with XML technologies such as SVG.</p>
                                <h3 class="title--pb">HTML</h3></div>&nbsp;
                            <div class="ib ta-center">
                                <div id="cssPB" class="img--progress-bar"></div>
                                <p class="tooltip--pb">With 6 years of experience writing CSS, Rob uses the best and most efficient CSS techniques. He writes modular CSS based on Jonathan Snook's book <em>SMACSS</em> and uses PostCSS as his processor of choice.</p>
                                <h3 class="title--pb">CSS</h3></div>&nbsp;
                            <div class="ib ta-center">
                                <div id="jsPB" class="img--progress-bar"></div>
                                <p class="tooltip--pb">Javascript is Rob's favorite programming language. He has over 3 years of experience leveraging powerful Javascript libraries and frameworks alongside his own Javascript/jQuery code.</p>
                                <h3 class="title--pb">Javascript</h3></div>
                        </div>
                        <div class="row two-thirds">
                            <div class="ib ta-center">
                                <div id="phpPB" class="img--progress-bar"></div>
                                <p class="tooltip--pb">Rob uses PHP as his server side scripting language of choice. He has used it in everything from Wordpress development to communicating with API's like Braintree and Stripe.</p>
                                <h3 class="title--pb">PHP</h3></div>&nbsp;
                            <div class="ib ta-center">
                                <div id="mysqlPB" class="img--progress-bar"></div>
                                <p class="tooltip--pb">Rob writes MySql to query databases and store user submitted information. He has completed projects using a combination of PHP and MySql.</p>
                                <h3 class="title--pb">MySQL</h3></div>
                        </div>
                    </div>
                    <div id="designer" class="container--skills">
                        <div class="row two-thirds">
                            <div class="ib ta-center">
                                <div id="uiPB" class="img--progress-bar"></div>
                                <p class="tooltip--pb">Rob continually makes sure his web designs are nothing short of spectacular. He has spent thousands of hours studying the latest design patterns used by top tech companies.</p>
                                <h3 class="title--pb">UI</h3></div>&nbsp;
                            <div class="ib ta-center">
                                <div id="uxPB" class="img--progress-bar"></div>
                                <p class="tooltip--pb">Rob's designs focus on a user's experience with the website and the opinions the user forms toward the brand. He does significant research before he starts the design process.</p>
                                <h3 class="title--pb">UX</h3></div>
                        </div>
                        <div class="row">
                            <div class="ib ta-center">
                                <div id="psPB" class="img--progress-bar"></div>
                                <p class="tooltip--pb">Rob has years of experience working in Photoshop. He uses the image editing program like a professional, sometimes pulling off large manipulations to his photographs.</p>
                                <h3 class="title--pb">Photoshop</h3></div>&nbsp;
                            <div class="ib ta-center">
                                <div id="illPB" class="img--progress-bar"></div>
                                <p class="tooltip--pb">Rob has years of experience creating graphics in Adobe Illustrator. He has mastered some of the more advanced tools such as the pen tool, and will often create his own icons in the program.</p>
                                <h3 class="title--pb">Illustrator</h3></div>&nbsp;
                            <div class="ib ta-center">
                                <div id="sketchPB" class="img--progress-bar"></div>
                                <p class="tooltip--pb">About a year ago, Rob abandoned Photoshop for Sketch as the prototyping tool of his choice. Rob has mastered the program and is able to use it to prototype more complex website designs.</p>
                                <h3 class="title--pb">Sketch</h3></div>
                        </div>
                    </div>
                    <div id="technologies" class="container--skills">
                        <div class="row">
                            <div class="ib ta-center">
                                <div id="wpPB" class="img--progress-bar"></div>
                                <p class="tooltip--pb">Rob is an experienced Wordpress theme developer and uses plugins to create awesome CMS's for his clients. He used the Advanced Custom Fields plugin to build out a very beginner friendly inteface.</p>
                                <h3 class="title--pb">Wordpress</h3></div>&nbsp;
                            <div class="ib ta-center">
                                <div id="angPB" class="img--progress-bar"></div>
                                <p class="tooltip--pb">Rob uses Angular Js as his front-end framework for building out website applications. Currently he is building an availability calendar application with Firebase.</p>
                                <h3 class="title--pb">AngularJs</h3></div>&nbsp;
                            <div class="ib ta-center">
                                <div id="gitPB" class="img--progress-bar"></div>
                                <p class="tooltip--pb">Rob has experience using Git, the popular version control system. Alongside Git, Rob uses other command line tools for his projects such as Bower and NPM.</p>
                                <h3 class="title--pb">Git</h3></div>
                        </div>
                    </div>
                    <div id="skills" class="container--skills">
                        <div class="row">
                            <div class="ib ta-center">
                                <div id="imPB" class="img--progress-bar"></div>
                                <p class="tooltip--pb">Rob is very experienced with many of the latest internet marketing techniques. In November 2015, he delivered a speech to AT&T Toastmaster about the latest growth hacking techniques being employed.</p>
                                <h3 class="title--pb">Internet Marketing</h3></div>&nbsp;
                            <div class="ib ta-center">
                                <div id="seoPB" class="img--progress-bar"></div>
                                <p class="tooltip--pb">Rob stays up to date with the latest search engine optimization techniques. He is a huge fan of Google's Hummingbird update, which allows him to focus on the content in his websites.</p>
                                <h3 class="title--pb">SEO</h3></div>&nbsp;
                            <div class="ib ta-center">
                                <div id="analyticsPB" class="img--progress-bar"></div>
                                <p class="tooltip--pb">Rob uses Google Tag Manager and Google Analytics to track activity that takes place on his web pages. He is very experienced using the platform and knows how to appropriately read data.</p>
                                <h3 class="title--pb">Analytics</h3></div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="section--my-work">
            <div class="header" style="margin-bottom: 3.5rem">
                <h2 class="main">My Work</h2>
                <p class="sub">I make custom web designs using the highest coding standards. My work does an exceptional job of engaging users and boosts brand trust.</p>
            </div>
            <div class="container--works">
                <div class="row cj">
                    <div class="container--work">
                        <a href="sites/stocks-earning/" rel="external"><img class="img--work lazyload" data-sizes="auto" data-src="images/bitmap/srcset-assets/ac.jpg" data-srcset="images/bitmap/srcset-assets/stocks-earning-sm.jpg 350w, images/bitmap/srcset-assets/stocks-earning-md.jpg 425w, images/bitmap/srcset-assets/stocks-earning-lg.jpg 500w, images/bitmap/srcset-assets/stocks-earning-sm@2x.jpg 700w, images/bitmap/srcset-assets/stocks-earning-md@2x.jpg 850w, images/bitmap/srcset-assets/stocks-earning-lg@2x.jpg 1000w">
                            <svg class="img--link">
                                <use xlink:href="images/sprites/svgsprite.svg#link"></use>
                            </svg>
                        </a>
                    </div>&nbsp;
                    <div class="container--work">
                        <a href="sites/boulevard/" rel="external"><img class="img--work lazyload" data-sizes="auto" data-src="images/bitmap/srcset-assets/boulevard.jpg" data-srcset="images/bitmap/srcset-assets/boulevard-sm.jpg 350w, images/bitmap/srcset-assets/boulevard-md.jpg 425w, images/bitmap/srcset-assets/boulevard-lg.jpg 500w, images/bitmap/srcset-assets/boulevard-sm@2x.jpg 700w, images/bitmap/srcset-assets/boulevard-md@2x.jpg 850w, images/bitmap/srcset-assets/boulevard-lg@2x.jpg 1000w">
                            <svg class="img--link">
                                <use xlink:href="images/sprites/svgsprite.svg#link"></use>
                            </svg>
                        </a>
                    </div>&nbsp;
                    <div class="container--work">
                        <a href="sites/affiliated-endo/" rel="external"><img class="img--work lazyload" data-sizes="auto" data-src="images/bitmap/srcset-assets/affiliated-endo.jpg" data-srcset="images/bitmap/srcset-assets/affiliated-endo-sm.jpg 350w, images/bitmap/srcset-assets/affiliated-endo-md.jpg 425w, images/bitmap/srcset-assets/affiliated-endo-lg.jpg 500w, images/bitmap/srcset-assets/affiliated-endo-sm@2x.jpg 700w, images/bitmap/srcset-assets/affiliated-endo-md@2x.jpg 850w, images/bitmap/srcset-assets/affiliated-endo-lg@2x.jpg 1000w">
                            <svg class="img--link">
                                <use xlink:href="images/sprites/svgsprite.svg#link"></use>
                            </svg>
                        </a>
                    </div>
                </div>
                <div class="row cj auto two-thirds">
                    <div class="container--work">
                        <a href="sites/progressive-care/" rel="external"><img class="img--work lazyload" data-sizes="auto" data-src="images/bitmap/srcset-assets/progressive-care.jpg" data-srcset="images/bitmap/srcset-assets/progressive-care-sm.jpg 350w, images/bitmap/srcset-assets/progressive-care-md.jpg 425w, images/bitmap/srcset-assets/progressive-care-lg.jpg 500w, images/bitmap/srcset-assets/progressive-care-sm@2x.jpg 700w, images/bitmap/srcset-assets/progressive-care-md@2x.jpg 850w, images/bitmap/srcset-assets/progressive-care-lg@2x.jpg 1000w">
                            <svg class="img--link">
                                <use xlink:href="images/sprites/svgsprite.svg#link"></use>
                            </svg>
                        </a>
                    </div>&nbsp;
                    <div class="container--work">
                        <a href="sites/somerset-peds/" rel="external"><img class="img--work lazyload" data-sizes="auto" data-src="images/bitmap/srcset-assets/somerset-peds.jpg" data-srcset="images/bitmap/srcset-assets/somerset-peds-sm.jpg 350w, images/bitmap/srcset-assets/somerset-peds-md.jpg 425w, images/bitmap/srcset-assets/somerset-peds-lg.jpg 500w, images/bitmap/srcset-assets/somerset-peds-sm@2x.jpg 700w, images/bitmap/srcset-assets/somerset-peds-md@2x.jpg 850w, images/bitmap/srcset-assets/somerset-peds-lg@2x.jpg 1000w">
                            <svg class="img--link">
                                <use xlink:href="images/sprites/svgsprite.svg#link"></use>
                            </svg>
                        </a>
                    </div>
                </div>
            </div>
            <div id="trigger3"></div>
        </section>
    </div>


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