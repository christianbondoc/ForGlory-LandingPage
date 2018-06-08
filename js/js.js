function ddFunction() {
    var dropdown = document.getElementById("nav-bar");
    if (dropdown.className == "nav-bar") {
        dropdown.className += " responsive sticky-top site-header";
    } else {
        dropdown.className = "nav-bar";
    }

}

jQuery(document).ready(function($) {
    $(window).on("load", function() {
        function fade() {
            // -- Set Animation height of window, 1/4th --//
            // -- Fade in/out -- //
            var animation_height = $(window).innerHeight() * .20;
            var ratio = Math.round((1 / animation_height) * 10000) / 10000;

            $('.fade').each(function() {

                var objectTop = $(this).offset().top;
                var windowBottom = $(window).scrollTop() + $(window).innerHeight();

                if (objectTop < windowBottom) {
                    if (objectTop < windowBottom - animation_height) {
                        $(this).css({
                            transition: 'opacity 0.1s linear',
                            opacity: 1

                        });

                    } else {
                        $(this).css({
                            transition: 'opacity 0.25s linear',
                            opacity: (windowBottom - objectTop) * ratio
                        });

                        $('.iMacMockup').css({
                            'opacity': 1,
                            transition: '0.225s ease-in',
                            'transform': 'translateY(0%)'
                        })

                    }
                } else {
                    $(this).css('opacity', 0);
                    $('.iMacMockup').css({
                        'opacity': 0,
                        transition: '0.225s ease-out',
                        'transform': 'translateY(100%)'
                    })

                }
            });
        }
        $('.fade').css('opacity', 0);
        fade();
        $(window).scroll(function() {
            fade();
        });
    });
    //-- Scroll to --//
    $("a").on('click', function(event) {

        if (this.hash !== "") {
            event.preventDefault();

            var hash = this.hash;


            $('html, body').animate({
                scrollTop: $(hash).offset().top
            }, 800, function() {
                window.location.hash = hash;
            });
        } // End if
    });
});



// -- For loop for the accordions -- //