<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="keywords" content="<%= keywords %>">    
    <meta name="author" content="Robert Schneiderman">
    <title>Robert Schneiderman</title>


    <?php get_header(); ?>

                               
 
    <section class="landing l-landing">
        <div id="modal" class="modal">
            <svg id="modal-close-btn" class="modal__btn"><use xlink:href="<?php bloginfo( 'template_url' ); ?>/images/sprites/svgsprite.svg#x"></use></svg>  
            <?php 
            if ($_SERVER['REQUEST_METHOD'] == 'GET') {
                if($_GET['contact'] == 'fail') {
                    $title = "Failed to send!";
                    $class = "failure";
                    $message = 'The message was not successfully sent. Please review the information. It has been saved in the form';
                }
                else {
                    $firstName = substr($_GET['name'], 0, strrpos($_GET['name'], ' '));
                    $title = "Message sent!";   
                    $class = "success";                                     
                    $message = 'Thank you for contacting me, <strong>' . $firstName . '</strong>. I will be contacting you at <strong>' . $_GET['email'] . '</strong> within 24 hours.';
                }                      
            echo "<h2 class='modal__heading ". $class . "'>" . $title . "</h2>";
            echo "<p class='modal__body'>" . $message . "</p>";
            }            
            ?>
        </div>
        </div>    
        <svg class="img--headline sm"><use xlink:href="<?php bloginfo( 'template_url' ); ?>/images/sprites/svgsprite.svg#headline-sm"></use></svg>
        <svg class="img--headline md"><use xlink:href="<?php bloginfo( 'template_url' ); ?>/images/sprites/svgsprite.svg#headline"></use></svg>
    </section>

    <section class="about-me">
        <div class="header">
            <h2 class="header__main">About Me</h2>
        </div>
        <!-- <svg class="img--globe"><use xlink:href="<?php bloginfo( 'template_url' ); ?>/images/sprites/svgsprite.svg#globe"></use></svg> -->
        <div class="text--about">
            <p class="text--about__body">I am a <span class="highlight">web designer</span> and <span class="highlight">developer</span> with a fascination for all things web. For the past seven years, I have invested thousands of hours designing and coding professional looking websites with amazing user experiences.<br>
            <span class="spacer">My <span class="color-primary">philosophy</span> is that:</span><br>
            </p>           
        </div>

        <div class="text--philosophy">
            <!-- <span class="text--philosophy__left-bracket">[</span> -->
            <p class="text--philosophy__body">A website is much more than a convenient medium to transmit information to clients. A website, rather, is an extension of a company’s brand, and as such, it must convey to one’s clientele that it is professional and trustworthy.</p>
            <!-- <span class="text--philosophy__right-bracket">]</span> -->
        </div>
    </section>

    <section id="my-skills" class="my-skills">
        <div class="header">
            <h2 class="header__main">My Skills</h2>
        </div>
        <!-- <p class="description">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aliquam veritatis ratione iure maiores ea ipsam nihil, ad quaerat sed eveniet.</p> -->
        <div id="tabs" class="tabs">
            <nav class="tabs__nav">
                <ul class="list--tabs">
                    <li class="list--tabs__item">Designer</li>&nbsp;
                    <li class="list--tabs__item is-active">Developer</li>&nbsp;
                    <li class="list--tabs__item">Software</li>
                </ul>
            </nav>
            <div class="tabs__content">
                <div class="skills-c">
                    <div class="row two-thirds">
                        <div class="imgbox--skills is-active">
                            <div id="ui-progress-bar" class="imgbox--skills__img progress-bar" data-value="1.00" data-fill="{&quot;color&quot;: &quot;#F088F8&quot;}">
                                <strong></strong>
                            </div>
                            <h3 class="imgbox--skills__body">UI</h3>
                        </div>&nbsp;
                        <div class="imgbox--skills">
                            <div id="ux-progress-bar" class="imgbox--skills__img progress-bar" data-value="0.94" data-fill="{&quot;color&quot;: &quot;#888FF8&quot;}">
                                <strong></strong>
                            </div>
                            <h3 class="imgbox--skills__body">UX</h3>
                        </div>                        
                    </div>
                </div>            
                <div class="skills-c is-active">
                    <div class="row">
                        <div class="imgbox--skills">
                            <div id="html-progress-bar" class="imgbox--skills__img progress-bar" data-value="0.98" data-fill="{&quot;color&quot;: &quot;#F88888&quot;}">
                                <strong></strong>
                            </div>
                            <h3 class="imgbox--skills__body">HTML</h3>
                        </div>&nbsp;
                        <div class="imgbox--skills">
                            <div id="css-progress-bar" class="imgbox--skills__img progress-bar" data-value="0.97" data-fill="{&quot;color&quot;: &quot;#88B7F8&quot;}">
                                <strong></strong>
                            </div>
                            <h3 class="imgbox--skills__body">CSS</h3>
                        </div>&nbsp;
                        <div class="imgbox--skills">
                            <div id="javascript-progress-bar" class="imgbox--skills__img progress-bar" data-value="0.90" data-fill="{&quot;color&quot;: &quot;#FFFFAE&quot;}">
                                <strong></strong>
                            </div>
                            <h3 class="imgbox--skills__body">JavaScript</h3>
                        </div>                                
                    </div>
                    <div class="row two-thirds">
                        <div class="imgbox--skills">
                            <div id="php-progress-bar" class="imgbox--skills__img progress-bar" data-value="0.83" data-fill="{&quot;color&quot;: &quot;#AF73DE&quot;}">
                                <strong></strong>
                            </div>
                            <h3 class="imgbox--skills__body">PHP</h3>
                        </div>&nbsp;
                        <div class="imgbox--skills">
                            <div id="wordpress-progress-bar" class="imgbox--skills__img progress-bar" data-value="0.80" data-fill="{&quot;color&quot;: &quot;#8A8A8A&quot;}">
                                <strong></strong>
                            </div>
                            <h3 class="imgbox--skills__body">Wordpress</h3>
                        </div>                
                    </div>
                </div>
                <div class="skills-c">
                    <div class="row">
                        <div class="imgbox--skills">
                            <div id="photoshop-progress-bar" class="imgbox--skills__img progress-bar" data-value="0.85" data-fill="{&quot;color&quot;: &quot;#62B2EF&quot;}">
                                <strong></strong>
                            </div>
                            <h3 class="imgbox--skills__body">Photoshop</h3>
                        </div>&nbsp;
                        <div class="imgbox--skills">
                            <div id="illustrator-progress-bar" class="imgbox--skills__img progress-bar" data-value="0.86" data-fill="{&quot;color&quot;: &quot;#FD8A33&quot;}">
                                <strong></strong>
                            </div>
                            <h3 class="imgbox--skills__body">Illustrator</h3>
                        </div>&nbsp;
                        <div class="imgbox--skills">
                            <div id="indesign-progress-bar" class="imgbox--skills__img progress-bar" data-value="0.75" data-fill="{&quot;color&quot;: &quot;#FB5DA1&quot;}">
                                <strong></strong>
                            </div>
                            <h3 class="imgbox--skills__body">Indesign</h3>
                        </div>                                
                    </div>
                    <div class="row two-thirds">
                        <div class="imgbox--skills">
                            <div id="sketch-progress-bar" class="imgbox--skills__img progress-bar" data-value="0.99" data-fill="{&quot;color&quot;: &quot;#FEDD86&quot;}">
                                <strong></strong>
                            </div>
                            <h3 class="imgbox--skills__body">Sketch</h3>
                        </div>&nbsp;
                        <div class="imgbox--skills">
                            <div id="excel-progress-bar" class="imgbox--skills__img progress-bar" data-value="0.90" data-fill="{&quot;color&quot;: &quot;#7BBF6A&quot;}">
                                <strong></strong>
                            </div>
                            <h3 class="imgbox--skills__body">Excel</h3>
                        </div>                
                    </div>
                </div>                
            </div>
        </div>
    </section>

    <section class="my-work">
        <div class="header">
            <h2 class="header__main">My Work</h2>
        </div>
        <p class="description">I make custom web designs using the highest coding standards. My work does an exceptional job of engaging users and boosts brand trust.</p>

        <div class="work-c">
            <div class="figure--work">
                <a href="work/progressive-care/" rel="external">
                    <img class="figure--work__img lazyload" data-sizes="auto" data-src="<?php bloginfo( 'template_url' ); ?>/images/bitmap/srcset-assets/ac.jpg" data-srcset="<?php bloginfo( 'template_url' ); ?>/images/bitmap/srcset-assets/pc-sm.jpg 350w, <?php bloginfo( 'template_url' ); ?>/images/bitmap/srcset-assets/pc-md.jpg 425w, <?php bloginfo( 'template_url' ); ?>/images/bitmap/srcset-assets/pc-lg.jpg 500w, <?php bloginfo( 'template_url' ); ?>/images/bitmap/srcset-assets/pc-sm@2x.jpg 700w, <?php bloginfo( 'template_url' ); ?>/images/bitmap/srcset-assets/pc-md@2x.jpg 850w, <?php bloginfo( 'template_url' ); ?>/images/bitmap/srcset-assets/pc-lg@2x.jpg 1000w">                         
                    <div class="figure--work__overlay">
                        <svg class=""><use xlink:href="<?php bloginfo( 'template_url' ); ?>/images/sprites/svgsprite.svg#link"></use></svg>
                    </div>
                </a>                          
            </div>&nbsp;
            <div class="figure--work">
                <a href="work/bayonne/" rel="external">
                    <img class="figure--work__img lazyload" data-sizes="auto" data-src="<?php bloginfo( 'template_url' ); ?>/images/bitmap/srcset-assets/bayonne.jpg" data-srcset="<?php bloginfo( 'template_url' ); ?>/images/bitmap/srcset-assets/bayonne-sm.jpg 350w, <?php bloginfo( 'template_url' ); ?>/images/bitmap/srcset-assets/bayonne-md.jpg 425w, <?php bloginfo( 'template_url' ); ?>/images/bitmap/srcset-assets/bayonne-lg.jpg 500w, <?php bloginfo( 'template_url' ); ?>/images/bitmap/srcset-assets/bayonne-sm@2x.jpg 700w, <?php bloginfo( 'template_url' ); ?>/images/bitmap/srcset-assets/bayonne-md@2x.jpg 850w, <?php bloginfo( 'template_url' ); ?>/images/bitmap/srcset-assets/bayonne-lg@2x.jpg 1000w">
                    <div class="figure--work__overlay">
                        <svg class=""><use xlink:href="<?php bloginfo( 'template_url' ); ?>/images/sprites/svgsprite.svg#link"></use></svg>
                    </div>
                </a>                                    
            </div>&nbsp;
            <div class="figure--work">
                <a href="work/new-haven-ortho-sports-medicine/" rel="external">
                    <img class="figure--work__img lazyload" data-sizes="auto" data-src="<?php bloginfo( 'template_url' ); ?>/images/bitmap/srcset-assets/new-haven-sports-ortho.jpg" data-srcset="<?php bloginfo( 'template_url' ); ?>/images/bitmap/srcset-assets/new-haven-sports-ortho-sm.jpg 350w, <?php bloginfo( 'template_url' ); ?>/images/bitmap/srcset-assets/new-haven-sports-ortho-md.jpg 425w, <?php bloginfo( 'template_url' ); ?>/images/bitmap/srcset-assets/new-haven-sports-ortho-lg.jpg 500w, <?php bloginfo( 'template_url' ); ?>/images/bitmap/srcset-assets/new-haven-sports-ortho-sm@2x.jpg 700w, <?php bloginfo( 'template_url' ); ?>/images/bitmap/srcset-assets/new-haven-sports-ortho-md@2x.jpg 850w, <?php bloginfo( 'template_url' ); ?>/images/bitmap/srcset-assets/new-haven-sports-ortho-lg@2x.jpg 1000w">
                    <div class="figure--work__overlay">
                        <svg class=""><use xlink:href="<?php bloginfo( 'template_url' ); ?>/images/sprites/svgsprite.svg#link"></use></svg>
                    </div>
                </a>               
            </div>
        </div>
    </section>

<?php get_footer(); ?>


        

