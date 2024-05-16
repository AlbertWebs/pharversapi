document.addEventListener("DOMContentLoaded", function () {

    var articlesLink = document.getElementByClass("articles-link");

    var thirdNav = document.querySelector(".third-nav");

    articlesLink.addEventListener("mouseover", function () {
        thirdNav.style.visibility = "visible";
    });

    articlesLink.addEventListener("mouseout", function () {
        thirdNav.style.visibility = "hidden";
    });
});


// Stick Fixed Menu on Scroll
let menu = document.getElementById('menu');
let offset = menu.offsetHeight;
window.onscroll = function() {
    if (window.scrollY > offset-10) {
        menu.classList.add("sticky");
    } else if(window.scrollY < offset-20) {
        menu.classList.remove("sticky");
    }
}

