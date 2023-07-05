var swiper = new Swiper(".mdaSwiper", {
    direction: "vertical",
    slidesPerView: 1,
    spaceBetween: 0,
    mousewheel: true,
    // mousewheel: {
    //     forceToAxis: true,
    //     sensitivity: 1,
    //     releaseOnEdges: true,
    // },
    effect: "creative",
    creativeEffect: {
        prev: {
            shadow: true,
            translate: [0, "-15%", -1],
        },
        next: {
            translate: [0, "100%", 0],
        },
    },
    speed: 600,

    pagination: {
        el: ".swiper-pagination",
        clickable: true,
    },

    a11y: true,
    keyboardControl: true,
    // grabCursor: true,
});
