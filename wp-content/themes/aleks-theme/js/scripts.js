const $ = jQuery;

// show/hide mobile nav
function toggleNav(menu) {
    if (window.innerWidth <= 992) {
        $(menu).toggleClass('active');
    }
}

// add header shadow on scroll
$(window).scroll(function () {
    const scrollPosition = $(window).scrollTop();
    if (scrollPosition > 0) {
        $('.site-header').addClass('active');
    } else {
        $('.site-header').removeClass('active');
    }
})