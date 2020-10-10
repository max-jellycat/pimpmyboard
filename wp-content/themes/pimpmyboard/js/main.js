$(window).scroll(function() {
    if($('.navbar').offset().top > 50) {
        $('.navbar-fixed-top').addClass('top-nav-collapse');
    } else {
        $('.navbar-fixed-top').removeClass('top-nav-collapse');
    }
});

$(function() {
    $('.page-scroll a').on('click', function() {
        var $anchor = $(this);
        console.log($anchor);
        $('html, body').stop().animate({
            scrollTop: $($anchor.attr('href')).offset().top
        }, 1500, 'easeInOutExpo');
        event.preventDefault();
    });
});

$(function() {

    // Cache the Window object
    var $window = $(window);

    // Parallax Backgrounds
    // Tutorial: http://code.tutsplus.com/tutorials/a-simple-parallax-scrolling-technique--net-27641

    $('section[data-type="background"]').each(function(){
        var $bgobj = $(this); // Assigning the object

        $(window).scroll(function() {

            // Scroll the background at var speed
            // The yPos is a negative value because it's scrolling up
            var yPos = -($window.scrollTop() / $bgobj.data('speed'));

            // Final background position
            var coords = '50% '+ yPos + 'px';

            // Move the background
            $bgobj.css({ backgroundPosition: coords });

        }); // end window scroll
    });

});