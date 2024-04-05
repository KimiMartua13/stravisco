$(document).ready(function (){

    var presentYear = new Date().getFullYear();

    document.getElementById('presentYear').innerText = presentYear;

    // Sticky Navbar
    $(window).scroll(function () {
        if ($(this).scrollTop() > 0) {
            $('.navbar').addClass('nav-sticky');
        }
        else {
            $('.navbar').removeClass('nav-sticky');
        }
    });

});