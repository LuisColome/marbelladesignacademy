// Adjust header when scrolled

// Author: Luis Colomé

// URL: https://github.com/LuisColome/the-dock

jQuery(document).ready(function ($) {
    // $(".site-header").after('<div class="bumper"></div>');

    $(window).scroll(function () {
        if ($(document).scrollTop() > 30) {
            $("body").addClass("shrink");
        } else {
            $("body").removeClass("shrink");
        }
    });

    // $(".backtotop");

    $(window).scroll(function () {
        if ($(document).scrollTop() > 90) {
            $(".fixed-title-as-background").addClass("visible");
        } else {
            $(".fixed-title-as-background").removeClass("visible");
        }
    });
});

jQuery(document).ready(function ($) {
    // Mobile Menu
    $(".mdabutton__menu").click(function () {
        // $(".search-toggle, .header-search").removeClass("active");
        $("body").toggleClass("noscroll");
        $(".wp-site-blocks").toggleClass("nav-active");
        // $(".lcm-dark-overlay").attr("aria-hidden", function (i, attr) {
        //     return attr == "false" ? "true" : "false";
        // });
        e.preventDefault();
    });

    $(".lcm-dark-overlay").click(function () {
        // $(".lcm-aside").toggleClass("active");
        $("body").removeClass("noscroll");
        $(".wp-site-blocks").removeClass("nav-active");
    });

    $(".lcm-aside__close").click(function () {
        // $(".lcm-aside").toggleClass("active");
        $("body").removeClass("noscroll");
        $(".wp-site-blocks").removeClass("nav-active");
    });

    //     $(".menu-item-has-children > .submenu-expand").click(function (e) {
    //         $(this).toggleClass("expanded");
    //         e.preventDefault();
    //     });

    //     // Search toggle
    //     $(".search-toggle").click(function () {
    //         $(".menu-toggle, .nav-menu").removeClass("active");
    //         $(".search-toggle, .header-search").toggleClass("active");
    //         $(".site-header .search-field").focus();
    //         e.preventDefault();
    //     });
});

// jQuery(document).ready(function ($) {
//     // Mobile Menu
//     $(".menu-toggle").click(function () {
//         $(".search-toggle, .header-search").removeClass("active");
//         $(".menu-toggle, .nav-menu, .lcm-dark-overlay").toggleClass("active");
//         $("body").toggleClass("noscroll");
//         e.preventDefault();
//     });
//     $(".lcm-dark-overlay").click(function () {
//         $(".menu-toggle, .nav-menu, .lcm-dark-overlay").removeClass("active");
//         $("body").removeClass("noscroll");
//     });

//     $(".menu-item-has-children > .submenu-expand").click(function (e) {
//         $(this).toggleClass("expanded");
//         e.preventDefault();
//     });

//     // Search toggle
//     $(".search-toggle").click(function () {
//         $(".menu-toggle, .nav-menu").removeClass("active");
//         $(".search-toggle, .header-search").toggleClass("active");
//         $(".site-header .search-field").focus();
//         e.preventDefault();
//     });
// });
