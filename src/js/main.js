function returnRoot() {
    var pathBits = window.location.pathname.split('/');
    var pathLength = pathBits.length;
    var lastDir = pathBits[pathBits.length - 2];
    if(lastDir != 'src' && lastDir != 'dist' && lastDir != 'affiliated-endo' ) {
        return '../';
    }
    else {
        return '';
    }    
}
(function() {

    $(document).ready(function() {     

        // ------  ACCORDIAN  ------

        new Accordian( $('.accordian') );  

        // ------  CAROUSEL  ------        

        $('#testimonials-carousel').slick({
            arrows: false,
            dots: true,
            // autoplay: true,
            // autoplaySpeed: 3000,
            responsive: [{
                breakpoint: 900,
                settings: 'unslick'
            }]
        });         

        // ------  FLOWTYPE  ------                    

        // $('.headline__main').flowtype({
        //     fontRatio : 11,
        //     maxFont: 63,
        //     minFont: 39
        // });
        // $('.headline__sub').flowtype({
        //     fontRatio : 25,
        //     maxFont: 27,
        //     minFont: 20 
        // });        

        // ------ FOOTER  ------                

        var currentYear = new Date().getFullYear();
        $('.section--footer p').html('&#xA9; RobertSchneiderman.com, ' + currentYear); 

        // ------  HEADLINE  ------                



        // ------  LAZYLOAD  ------                

        $("img.lazy").lazyload({
            threshold : 1300
        });         
        $(".testimonials, .accredidation").lazyload({
            effect : "fadeIn"
        });

        // ------  LAZY YT  ------

        $('.js-lazyYT').lazyYT(); 

        // ------  LINKS  ------                

        $('a[rel="external"]').attr('target', '_blank');         

        // ------  MODAL  ------

        // if($('#modal').length > 0) {        
        //     new Modal('#modal');
        // }

        // ------  NAV  ------                

        $('.navbar-nav__item a').each(function() {  //SELECT ACTIVE
            if ($(this).prop('href') == window.location.href) {
                $(this).addClass('is-active');
            }
        });                
        $("#contact-anchor").click(function(evn){
            evn.preventDefault();
            $('html,body').scrollTo(this.hash, this.hash);
            if($('.navbar-toggle').hasClass('open')) {
                $('body').removeClass('is-collapsed');
                $('.navbar-collapse').removeClass('is-active');
                $('.navbar-toggle').removeClass('open').addClass('closed').find('use').attr('xlink:href', returnRoot() + 'images/sprites/svgsprite.svg#bars');
                $('.fade').fadeOut();
            }
        });
        $('.btn-offices--mobile').click(function() {
            $('.navbar-stalk-sub').toggleClass('is-active');
        });     


        // ------  PROGRESS BAR  ------                

        var pbs = [
            ['#htmlPB', '#developer', '#f47a7a', '#f44a4a', 0.98],
            ['#cssPB', '#developer', '#7aa9f4', '#4a8bf4', 0.97],
            ['#jsPB', '#developer', '#f4f29d', '#f4f17a', 0.90],
            ['#phpPB', '#developer', '#c492f4', '#b471f4', 0.83],
            ['#mysqlPB', '#developer', '#fed66b', '#fbc73c', 0.70],
            ['#uiPB', '#designer', '#E85E85', '#F94B7B', 0.98],
            ['#uxPB', '#designer', '#9C68B6', '#9E5DBF', 0.97],
            ['#psPB', '#designer', '#6DA6DF', '#63A6EA', 0.93],
            ['#illPB', '#designer', '#F1AD46', '#FDAE39', 0.92],
            ['#sketchPB', '#designer', '#E2E441', '#F6F938', 1.0],
            ['#reactPB', '#technologies', '#8E8D8D', '#61DAFB', 0.92],
            ['#railsPB', '#technologies', '#D46C6C', '#D04646', 0.91],
            ['#gitPB', '#technologies', '#8E8D8D', '#616161', 0.77],
            ['#imPB', '#skills', '#B97C7C', '#C17070', 0.97],
            ['#seoPB', '#skills', '#686B92', '#5F6396', 0.90],
            ['#analyticsPB', '#skills', '#7FAB89', '#6EA97B', 0.91]
        ];        

        function pbListeners(category, pb, value) {
            $(category).on('activatePB', function() {
                pb.animate(value);
            });

            $(category).on('resetPB', function() {
                pb.animate(0);
            });
        } 

        var technologiesPBS = [];       

        $(pbs).each(function() {
            var id = $(this)[0], 
                category = $(this)[1], 
                colorS = $(this)[2], 
                colorE = $(this)[3], 
                value = $(this)[4];

            var pb = new ProgressBar.Circle(id, {
                color: colorS,
                strokeWidth: 12,
                trailWidth: 1,
                easing: 'easeInOut',
                duration: 1000,
                text: {
                    value: '0%',
                    className: 'progressbar-label',
                    style: {
                        color: '#fff',
                        fontSize: '1.3rem',
                        fontWeight: 700,
                        position: 'absolute',
                        left: '50%',
                        top: '50%',
                        padding: 0,
                        margin: 0,
                        transform: {
                            prefix: true,
                            value: 'translate(-50%, -50%)'
                        }
                    },
                },
                from: { color: colorS, width: 1 },
                to: { color: colorE, width: 12 },
                // Set default step function for all animate calls
                step: function(state, circle) {
                    circle.path.setAttribute('stroke', state.color);
                    circle.path.setAttribute('stroke-width', state.width);
                    circle.setText((circle.value() * 100).toFixed(0) + '%');                
                }
            });    

            if(category === '#technologies') {
                technologiesPBS.push( [pb, value] );
            } 

            pbListeners(category, pb, value);
        });

        var waypoint = new Waypoint({
            element: document.querySelector('#technologies.is-active'),
            handler: function(direction) {
                $(technologiesPBS).each(function() {
                    var pb = this[0],
                        value = this[1];
                    pb.animate(value);
                });                                               
            },
            offset: 480
        });
        
        // ------  SCROLL MAGIC  ------          


        // init controller
        var controller = new ScrollMagic.Controller();

        if($(window).width() < 800) {
            var activePB = $(".tabs__content > div .progress-bar"),
                    inited = false;
        } else {
            var activePB = $(".tabs__content > div.is-active .progress-bar"),
                    inited = false;
        }

        // var aboutMeBgChange = new ScrollMagic.Scene({
        //                 triggerElement: "#trigger-about",
        //                 duration: 300
        //             }).setTween("#bg", 0.5, {backgroundColor: "0066ff"}).addIndicators().addTo(controller);

        // var aboutMeCanvasChange = new ScrollMagic.Scene({
        //                 triggerElement: "#trigger-about",
        //                 duration: 300
        //             }).setTween("#canvas2", 0.5, {opacity: 1}).addIndicators().addTo(controller);                               
                    
        // var growingCircle = new ScrollMagic.Scene({
        //                 triggerElement: "#trigger-skills",
        //                 duration: 300
        //             }).setTween("#growingCircle", 0.5, {scale: 30}).addIndicators().addTo(controller);

        // var aboutMeCanvasChange = new ScrollMagic.Scene({
        //                 triggerElement: "#trigger0",
        //                 duration: 300
        //             }).setTween("#canvas2", 0.5, {opacity: 1}).addTo(controller); 

        var aboutMeBgChange = new ScrollMagic.Scene({
                        triggerElement: "#trigger-about",
                        duration: 300
                    }).setTween("#bg", 0.5, {background: '#422180'}).addTo(controller);

        var aboutMeCanvasChange = new ScrollMagic.Scene({
                        triggerElement: "#trigger-about",
                        duration: 300
                    }).setTween("#canvas2", 0.5, {opacity: 1}).addTo(controller);  

        var bgChange = new ScrollMagic.Scene({
                        triggerElement: "#trigger-skills",
                        duration: 300
                    }).setTween("#bg", 0.5, {background: 'rgba(51,51,51,1)', opacity: 1}).addTo(controller);

        var skillsCanvasChange1 = new ScrollMagic.Scene({
                        triggerElement: "#trigger-skills",
                        duration: 300
                    }).setTween("#canvas", 0.5, {opacity: 0}).addTo(controller);                                                                

        var skillsCanvasChange = new ScrollMagic.Scene({
                        triggerElement: "#trigger-skills",
                        duration: 300
                    }).setTween("#canvas2", 0.5, {opacity: 0}).addTo(controller);

        // var mySkillsOverlay = new ScrollMagic.Scene({
        //                 triggerElement: "#trigger-skills",
        //                 duration: 300
        //             }).setTween("#bg", 0.5, {opacity: 0}).addIndicators().addTo(controller);         

        var mySkillsFadeIn = new ScrollMagic.Scene({
                        triggerElement: "#trigger-skills",
                        duration: 300
                    }).setTween(".section--my-skills", 0.5, {opacity: 1}).addTo(controller);

        // var bgChange = new ScrollMagic.Scene({
        //                 triggerElement: "#trigger-projects",
        //                 duration: 300
        //             }).setTween("#bg", 0.5, {background: 'rgba(51,51,51,0)', opacity: 1}).addTo(controller);        


        var burstFadeIn = new ScrollMagic.Scene({
                        triggerElement: "#trigger-skills",
                        duration: 300
                    }).setTween("#burst", 0.5, {opacity: 1}).addTo(controller);

        var burstFadeOut = new ScrollMagic.Scene({
                        triggerElement: "#trigger-projects",
                        duration: 300
                    }).setTween("#burst", 0.5, {opacity: 0}).addTo(controller);                           

        var myProjectsFadeIn = new ScrollMagic.Scene({
                        triggerElement: "#trigger-projects",
                        duration: 600
                    }).setTween(".section--my-projects", 0.5, {opacity: 1}).addTo(controller); 

        var myProjectsFadeIn = new ScrollMagic.Scene({
                        triggerElement: "#trigger-projects",
                        duration: 600
                    }).setTween("#lines", 0.5, {opacity: 1}).addTo(controller);

        var myWorkFadeIn = new ScrollMagic.Scene({
                        triggerElement: "#trigger-work",
                        duration: 600
                    }).setTween(".section-my-work", 0.5, {opacity: 1}).addTo(controller);

        var myWorkFadeIn = new ScrollMagic.Scene({
                        triggerElement: "#trigger-work",
                        duration: 600
                    }).setTween("#lines2", 0.5, {opacity: 1}).addTo(controller);                                               
        var contactFadeIn = new ScrollMagic.Scene({
                        triggerElement: "#trigger-contact",
                        duration: 600
                    }).setTween(".section--contact", 0.5, {opacity: 1}).addTo(controller);

        var lines1FadeOut = new ScrollMagic.Scene({
                        triggerElement: "#trigger-contact",
                        duration: 900
                    }).setTween("#lines", 0.5, {opacity: 0}).addTo(controller);

        var lines2FadeOut = new ScrollMagic.Scene({
                        triggerElement: "#trigger-contact",
                        duration: 900
                    }).setTween("#lines2", 0.5, {opacity: 0}).addTo(controller);                                               

        // var contactCanvasChange = new ScrollMagic.Scene({
        //                 triggerElement: "#trigger-contact",
        //                 duration: 300
        //             }).setTween("#canvas", 0.5, {opacity: 1}).addTo(controller);        



        // var myProjectsCanvasChange = new ScrollMagic.Scene({
        //                 triggerElement: "#trigger-projects",
        //                 duration: 600
        //             }).setTween("#canvas3", 0.5, {opacity: 1}).addTo(controller);


        // var scene3 = new ScrollMagic.Scene({
        //                 triggerElement: "#trigger",
        //                 duration: 300
        //             }).setTween("#lines2 path", 0.5, {opacity: 1}).addTo(controller);        
                                                                                                                                         
                        

        // ------  SVG  ------  

        function loadSvg(selector, url) {
          var target = document.querySelector(selector);

          // If SVG is supported
          if (typeof SVGRect != "undefined") {
            // Request the SVG file
            var ajax = new XMLHttpRequest();
            ajax.open("GET", url + ".svg", true);
            ajax.send();

            // Append the SVG to the target
            ajax.onload = function(e) {
              target.innerHTML = ajax.responseText;
            }
          } else {
            // Fallback to png
            target.innerHTML = "<img src='" + url + ".png' />";
          }
        }        

        $('#logo').load('./images/svg/logo.svg');
        loadSvg('#poker-logo', './images/svg/chuck_norris_logo');

        // loadSvg("#lines2", "./images/svg/embed/lines2");
        // loadSvg("#lines-crazy", "./images/svg/embed/lines-crazy");


        // var obj = document.getElementById('full');

        // obj.addEventListener("load",function() {
        //     var svgDoc = obj.contentDocument;
        //     var linkElm = svgDoc.createElementNS("http://www.w3.org/1999/xhtml", "link");
        //     linkElm.setAttribute("href", "../../stylesheets/css/application.css");
        //     linkElm.setAttribute("type", "text/css");
        //     linkElm.setAttribute("rel", "stylesheet");
        //     svgDoc.getElementById("svg").appendChild(linkElm);
        // });                        

        // ------  TABS  ------                

        if($('#tabs').length > 0) {
            new Tabs( document.getElementById('tabs'), {
                start: 2
            }); 
        }  


        // ------  VIDEO  ------        

        // ffmpeg -i landing.mov -c:v libvpx -crf 4 -b:v 1M -c:a libvorbis landing.webm

        $('#my-video').vide( 
            {
                mp4: '',
                webm: 'videos/landing.webm',
                ogv: '',
                poster: 'images/background-assets/landing.jpg'
            },
            {
              volume: 1,
              playbackRate: 1,
              muted: true,
              loop: true,
              autoplay: true,
              position: '50% 50%', // Similar to the CSS `background-position` property.
              posterType: 'jpg', // Poster image type. "detect" — auto-detection; "none" — no poster; "jpg", "png", "gif",... - extensions.
              resizing: true, // Auto-resizing, read: https://github.com/VodkaBears/Vide#resizing
              bgColor: 'rgba(0,0,0,.3)', // Allow custom background-color for Vide div,
              className: 'videoBG' // Add custom CSS class to Vide div
            }
        );

        // ------  WAYPOINT  ------

        $('#about-c, .tabs__content, .container--works > .row, .project-container').each( function( i, node ) {
            $(this).css('opacity', 0);
            new Waypoint({
                element: $(this),
                handler: function(direction) {
                  $(this.element).addClass('fadeInUp');
                  console.log("$(node):", $(node));
                  $node = $(node);
                  // debugger;
                  if ($node.hasClass('project-container')) {
                    console.log("success??");
                    $node.find('video').get(0).play();
                  }
                },
                offset: 450
            });            
        });              

        // ------  WOW  ------

        new WOW().init();         
    });

    $(window).load(function() {
    
        // ------  HEADLINES  ------                

        // var stS = "<span class='slabtext'>",
        //     stE = "</span>",
        //     txt = [
        //         "<span class='top-title'>Gastroenterology Practice</span>",
        //         "<span class='bottom-title color-primary'>In Passaic County</span>"];    

        // $('.main-headline--left__title').html(stS + txt.join(stE + stS) + stE).slabText({
        //     fontRatio: 0.5
        // });            
    }); 

    function rotateCharacters(){

        $titlePaths = $('.img--headline svg #title').find("path");
        $subtitlePaths = $('.img--headline svg #subtitle').find("path");
        // TweenLite.set($startAnim, {autoAlpha:0});
                                                
        // TweenMax.delayedCall(2, reset);
        $titlePaths.each(function(){
            TweenMax.fromTo(this, 2, {autoAlpha:0, rotation:randomNum(-360, 360), rotationX:randomNum(-360, 360), rotationY:randomNum(-360, 360), rotationZ:randomNum(-360, 360), scale:0}, {autoAlpha:1, rotation:0, rotationX:0, rotationY:0, rotationZ:0, scale:1, onComplete: textFadeDown});                 
        });
    
    }

    function textFadeDown(){
        $subtitlePaths = $('.img--headline svg #subtitle').find("path");
        $subtitlePaths.css('opacity', 1);

        debugger;

        TweenMax.staggerFromTo( $subtitlePaths, 2, {autoAlpha:0, rotationX:-90, top:"-30px"}, {autoAlpha:1, rotationX:0, top:"0px"}, .3);
    }     
    
    // function reset(){
    //     TweenMax.to($startAnim, 1, {autoAlpha:1});
    // }
    
    //helper function
    function randomNum (min, max) {
        return Math.random() * (max - min) + min;
    }   

    // rotateCharacters(); 

})();