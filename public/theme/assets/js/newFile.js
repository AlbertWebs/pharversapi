document.addEventListener("DOMContentLoaded", function () {
    // Navigation
    var articlesLink = document.getElementByClass("articles-link");
    var thirdNav = document.querySelector("third-nav");
    // Footer Ads
    var fixed_footer = document.getElementById("pharverse-fixed-footer");
    var fixed_footer_btn = document.getElementById("pharverse-close-button");

    // Navigation Actions
    articlesLink.addEventListener("mouseover", function () {
        thirdNav.style.visibility = "visible";
    });
    articlesLink.addEventListener("mouseout", function () {
        thirdNav.style.visibility = "hidden";
    });
    //Footer Ad Actions
    fixed_footer_btn.addEventListener("click", function () {
        alert("This");
        fixed_footer.hidden = true;
    });
});
