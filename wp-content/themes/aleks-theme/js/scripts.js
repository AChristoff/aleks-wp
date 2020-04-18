const $ = jQuery;

function toggleNav(menu) {
    if (window.innerWidth <= 992) {
        $(menu).toggleClass('active');
    } else {
        alert('Desktop view')
    }
}