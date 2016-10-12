(function($) {    
    // var loc = window.location.pathname;
    // var lastDir = document.URL.substr(0,document.URL.lastIndexOf('/'));

    function open() {
        $('body').addClass('is-collapsed');
        $('.navbar-collapse').addClass('is-active');
        // var bars = $(document.createElement('use')).attr('xlink:href', 'images/sprites/svgsprite.svg#bars')            
        // var x = $(document.createElement('use')).attr('xlink:href', 'images/sprites/svgsprite.svg#x')
        $('.btn--navbar-toggle').removeClass('closed').addClass('open').find('use').attr('xlink:href', returnRoot() + 'images/sprites/svgsprite.svg#x');
        $('.fade').fadeIn();        
    }    
    function close() {
        $('body').removeClass('is-collapsed');
        $('.navbar-collapse').removeClass('is-active');
        $('.btn--navbar-toggle').removeClass('open').addClass('closed').find('use').attr('xlink:href', returnRoot() + 'images/sprites/svgsprite.svg#bars');
        $('.fade').fadeOut();        
    }

    $('.fade').hide();
    $('.btn--navbar-toggle').click(function() {
        if($('.btn--navbar-toggle').hasClass('closed')) {
            console.log('fuck');
            open();
        }
        else if($('.btn--navbar-toggle').hasClass('open')) {
            close();
        }
    });
    $(window).resize(function() { 
        if($(window).width() >= 992) {
            close();
        }
    });              
})(jQuery);