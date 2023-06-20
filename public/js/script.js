var navbar = document.querySelector('.navbar');
window.onscroll = function() {
    if (window.pageYOffset > 400) {
    navbar.classList.add("navbar-scrolled");
    } else {
    navbar.classList.remove("navbar-scrolled");
    }
};