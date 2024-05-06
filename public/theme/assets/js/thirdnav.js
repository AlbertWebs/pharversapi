document.addEventListener("DOMContentLoaded", function () {

    var newsLink = document.getElementById("news-link");
    var articlesLink = document.getElementById("articles-link");
    
    var thirdNav = document.querySelector(".third-nav");

    articlesLink.addEventListener("mouseover", function () {
        thirdNav.style.visibility = "visible";
    });

    articlesLink.addEventListener("mouseout", function () {
        thirdNav.style.visibility = "hidden";
    });

    newsLink.addEventListener("mouseover", function () {
        thirdNav.style.visibility = "visible";
    });

    newsLink.addEventListener("mouseout", function () {
        thirdNav.style.visibility = "hidden";
    });
});