jQuery(function($) {
    if (isMobile) {
// Hide Header on on scroll down
    var didScroll;
    var lastScrollTop = 0;
// var scrollBottom = $(document).height() - $(window).height() - $(window).scrollTop();
// var lastScrollBottom = 0;
    var delta = 5;
// var delta2 = 5;
    var navbarHeight = $('header').outerHeight();
// var footerHeight = $('.section_cookie').outerHeight();
    $(window).scroll(function (event) {
        didScroll = true;
    });
    setInterval(function () {
        if (didScroll) {
            hasScrolled();
            didScroll = false;
        }
    }, 250);

    function hasScrolled() {
        var st = $(this).scrollTop();
        // Make sure they scroll more than delta
        if (Math.abs(lastScrollTop - st) <= delta)
            return;
        // If they scrolled down and are past the navbar, add class .nav-up.
        // This is necessary so you never see what is "behind" the navbar.
        if (st > lastScrollTop && st > navbarHeight) {
            // Scroll Down
            $('header').removeClass('nav-down').addClass('nav-up');
        } else {
            // Scroll Up
            if (st + $(window).height() < $(document).height()) {
                $('header').removeClass('nav-up').addClass('nav-down');
            }
        }
        lastScrollTop = st;
        window.onscroll = function (e) {
            var scrollY = window.pageYOffset || document.documentElement.scrollTop;
            var footer = document.querySelector('.section_cookie');
            scrollY <= this.lastScroll
                ? footer.style.visibility = 'hidden'
                : footer.style.visibility = 'visible';
            this.lastScroll = scrollY;
        }
    }
    }
})