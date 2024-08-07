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
    fixed_footer_btn.addEventListener("click", function() {
        alert("This")
        fixed_footer.hidden = true;
    });
});
function closeBtn(){
     var s = document.getElementById('footer-ad').style;
     s.opacity = 1;
     (function fade(){(s.opacity-=.1)<0?s.display="none":setTimeout(fade,40)})();
}


function closeSuperBtn(){
    var s = document.getElementById('pharverse-fixed-super').style;
    s.opacity = 1;
    (function fade(){(s.opacity-=.1)<0?s.display="none":setTimeout(fade,40)})();
}



function closeBtn_interviews(){
    var tag = $(this).closest('.advertisement-banner').attr('id');
    alert(tag);
    var s = document.getElementById('pharverse-interviews').style;
    s.opacity = 1;
    (function fade(){(s.opacity-=.1)<0?s.display="none":setTimeout(fade,40)})();
}

// Whitepapers Section
function closeBtn_whitepapers(){
    var s = document.getElementById('pharverse-fixed-super').style;
    s.opacity = 1;
    (function fade(){(s.opacity-=.1)<0?s.display="none":setTimeout(fade,40)})();
}

//



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

$(document).ready(function() {
    setTimeout(function() {
      $('.advertisement-banner').fadeIn("5000");
    }, 5000);

    // Listen to closed buttons
    $('.pharverse-close-button-super').click(function(){
        var tag = $(this).closest('.advertisement-banner').attr('id');
        s = document.getElementById(tag).style;
        s.opacity = 1;
       (function fade(){(s.opacity-=.1)<0?s.display="none":setTimeout(fade,40)})();

   });
});




