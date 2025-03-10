(function ($) {
    "use strict";

    $(document).ready(function () {
        /*------------------
        Select Price
        ------------------*/
        let selectPrice = $(".select-price");
        if (selectPrice.length) {
            selectPrice.niceSelect();
        }
        /*------------------
        Select Flag
        ------------------*/
        let selectFlag = $(".zl-lang__is");
        if (selectFlag.length) {
            selectFlag.niceSelect();
        }
        /*------------------
        Video Popup
        ------------------*/
        var videoPlay = $(".video-play");
        if (videoPlay.length) {
            videoPlay.magnificPopup({
                items: {
                    src: "https://www.youtube.com/watch?v=kshIWIc15yg",
                },
                type: "iframe",
                iframe: {
                    markup:
                        '<div class="mfp-iframe-scaler">' +
                        '<div class="mfp-close"></div>' +
                        '<iframe class="mfp-iframe" frameborder="0" allowfullscreen></iframe>' +
                        "</div>",
                    patterns: {
                        youtube: {
                            index: "youtube.com/",
                            id: "v=",
                            src: "//www.youtube.com/embed/kshIWIc15yg",
                        },
                    },
                    srcAction: "iframe_src",
                },
            });
        }
        var videoButton = $(".bttn-video");
        if (videoButton.length) {
            videoButton.magnificPopup({
                items: {
                    src: "https://www.youtube.com/watch?v=kshIWIc15yg",
                },
                type: "iframe",
                iframe: {
                    markup:
                        '<div class="mfp-iframe-scaler">' +
                        '<div class="mfp-close"></div>' +
                        '<iframe class="mfp-iframe" frameborder="0" allowfullscreen></iframe>' +
                        "</div>",
                    patterns: {
                        youtube: {
                            index: "youtube.com/",
                            id: "v=",
                            src: "//www.youtube.com/embed/kshIWIc15yg",
                        },
                    },
                    srcAction: "iframe_src",
                },
            });
        }

        /*------------------
        Blog Post Slider
        ------------------*/
        let postSlider = $(".blog-post__slider");
        if (postSlider.length) {
            postSlider.slick({
                mobileFirst: true,
                prevArrow:
                    '<button type="button" class="slick-prev"><i class="las la-arrow-left"></i></button>',
                nextArrow:
                    '<button type="button" class="slick-next"><i class="las la-arrow-right"></i></button>',
            });
        }
        /*------------------
        FeedBack Slider
        ------------------*/
        let feedback = $(".feedback-slider");
        if (feedback.length) {
            feedback.slick({
                mobileFirst: true,
                arrows: false,
                autoplay: true,
                responsive: [
                    {
                        breakpoint: 767,
                        settings: {
                            arrows: true,
                            prevArrow:
                                '<button type="button" class="slick-prev"><i class="las la-arrow-left"></i> Previous</button>',
                            nextArrow:
                                '<button type="button" class="slick-next">Next <i class="las la-arrow-right"></i></button>',
                            autoplay: false,
                        },
                    },
                ],
            });
        }
        /*---------------------
        FeedBack Slider Home 6
        ------------------------*/
        let feedbackFor = $(".zl-feedback-for");
        let feedbackNav = $(".zl-feedback-nav");
        if (feedbackNav.length || feedbackFor.length) {
            feedbackFor.slick({
                mobileFirst: true,
                arrows: false,
                vertical: true,
                asNavFor: ".zl-feedback-nav",
                autoplay: true,
                responsive: [
                    {
                        breakpoint: 991,
                        settings: {
                            autoplay: false
                        }
                    }
                ]
            });
            feedbackNav.slick({
                mobileFirst: true,
                arrows: false,
                vertical: true,
                asNavFor: ".zl-feedback-for",
                autoplay: true,
                responsive: [
                    {
                        breakpoint: 991,
                        settings: {
                            arrows: true,
                            slidesToShow: 1,
                            autoplay: false,
                            prevArrow:
                                '<button type="button" class="slick-arrow slick-prev"><i class="las la-arrow-left"></i></button>',
                            nextArrow:
                                '<button type="button" class="slick-arrow slick-next"><i class="las la-arrow-right"></i></button>'
                        }
                    }
                ]
            });
        }
        /*------------------
        Testimonial Slider
        ------------------*/
        let testimonialSlider = $(".testimonials-slider");
        if (testimonialSlider.length) {
            testimonialSlider.slick({
                mobileFirst: true,
                arrows: false,

                responsive: [
                    {
                        breakpoint: 991,
                        settings: {
                            slidesToShow: 2,
                            arrows: true,
                            prevArrow:
                                '<button type="button" class="slick-prev"><i class="las la-arrow-left"></i></button>',
                            nextArrow:
                                '<button type="button" class="slick-next"><i class="las la-arrow-right"></i></button>',
                        },
                    },
                ],
            });
        }
        /*------------------
        Award Slider
        ------------------*/
        let awardSlider = $(".award-slider");
        if (awardSlider.length) {
            awardSlider.slick({
                mobileFirst: true,
                arrows: false,
                responsive: [
                    {
                        breakpoint: 767,
                        settings: {
                            slidesToShow: 2,
                        },
                    },
                    {
                        breakpoint: 1199,
                        settings: {
                            slidesToShow: 2,
                        },
                    },
                ],
            });
        }
        /*------------------
        Project Slider
        ------------------*/
        let projectSlider = $(".project-slider");
        if (projectSlider.length) {
            projectSlider.slick({
                mobileFirst: true,
                arrows: false,
                responsive: [
                    {
                        breakpoint: 767,
                        settings: {
                            slidesToShow: 3,
                        },
                    },
                    {
                        breakpoint: 1199,
                        settings: {
                            slidesToShow: 4,
                        },
                    },
                    {
                        breakpoint: 1359,
                        settings: {
                            slidesToShow: 5,
                        },
                    },
                ],
            });
        }
        /*------------------
        Service Slider
        ------------------*/
        let serviceSlider = $(".service-slider");
        if (serviceSlider.length) {
            serviceSlider.slick({
                mobileFirst: true,
                arrows: false,
                responsive: [
                    {
                        breakpoint: 767,
                        settings: {
                            slidesToShow: 3,
                        },
                    },
                    {
                        breakpoint: 991,
                        settings: {
                            slidesToShow: 3,
                            arrows: true,
                            prevArrow:
                                '<button type="button" class="slick-prev"><i class="las la-arrow-left"></i></button>',
                            nextArrow:
                                '<button type="button" class="slick-next"><i class="las la-arrow-right"></i></button>',
                        },
                    },
                ],
            });
        }
        /*------------------
        Hero Slider
        ------------------*/
        let heroSlider = $(".hero-slider");
        if (heroSlider.length) {
            heroSlider.owlCarousel({
                items: 1,
                dots: false,
                loop: true,
                autoplay: true,
                autoplayHoverPause: true,
                smartSpeed: 3000,
            });
        }
        /*------------------
        Hero Slider 2
        ------------------*/
        let heroSlider2 = $(".hero-slider-2");
        if (heroSlider2.length) {
            heroSlider2.owlCarousel({
                items: 1,
                dots: false,
                loop: true,
                autoplay: true,
                autoplayHoverPause: true,
                autoplaySpeed: 3000,
            });
        }
        /*------------------
        Hamburger Menu Toggle
        ------------------*/
        let mobileMenu = $(".zol-menu-toggle");
        let menuIs = $(".zol-menu");
        let menuOpen = $(".zol-menu-open");
        let menuClose = $(".zol-menu-close");
        menuOpen.on("click", function () {
            $(this).addClass("d-none");
            menuClose.addClass("active");
            menuIs.slideToggle();
        });
        menuClose.on("click", function () {
            menuIs.slideToggle();
            $(this).removeClass("active");
            menuOpen.removeClass("d-none");
        });
    });

    /*------------------
        Mega Menu
    ------------------*/
    $(".zl-nav__has-mega-menu > .zl-nav__link").on("click", function (e) {
        e.preventDefault();
    })
    /*------------------
        Menu
    ------------------*/
    $(".zol-menu__has-sub > .zol-menu__link").on("click", function (e) {
        e.preventDefault();
    });
    $(".zol-menu__has-sub-2 > .zol-menu__sub-link").on("click", function (e) {
        e.preventDefault();
    });

    /*------------------
        Home 5 Menu
    ------------------*/
    let navHasSub = $(".zl-nav__item-has-sub");
    let navLink = $(".zl-nav__link");
    let navHasSubDeep = $(".zl-nav__sub-item-has-sub");
    let navSubLink = $(".zl-nav__sub-link");
    if (
        navHasSub.length ||
        navHasSubDeep.length ||
        navLink.length ||
        navSubLink.length
    ) {
        $(".zl-nav__item-has-sub > .zl-nav__link").on("click", function (e) {
            e.preventDefault();
        });
        $(".zl-nav__sub-item-has-sub > .zl-nav__sub-link").on(
            "click",
            function (e) {
                e.preventDefault();
            }
        );
    }

    /*-------------------
        Menu Toggler Icon
    ---------------------*/
    let menuToggler = $(".zl-menu-toggler__icon");
    let menuContainer = $(".zl-menu-container");
    let menuHide = $(".zl-menu-close");
    if (menuToggler.length || menuHide) {
        menuToggler.on("click", function () {
            menuContainer.addClass("active");
        });
        menuHide.on("click", function () {
            menuContainer.removeClass("active");
        });
    }

    /*------------------
        Service Slider
    ------------------*/
    let serviceSlider5 = $(".zl-service__slider");
    if (serviceSlider5.length) {
        serviceSlider5.slick({
            mobileFirst: true,
            prevArrow:
                '<button type="button" class="slick-arrow slick-prev"><i class="las la-arrow-left"></i></button>',
            nextArrow:
                '<button type="button" class="slick-arrow slick-next"><i class="las la-arrow-right"></i></button>',
            responsive: [
                {
                    breakpoint: 767,
                    settings: {
                        slidesToShow: 2,
                    },
                },
                {
                    breakpoint: 991,
                    settings: {
                        slidesToShow: 3,
                    },
                },
                {
                    breakpoint: 1199,
                    settings: {
                        slidesToShow: 4,
                    },
                },
            ],
        });
    }
    
    /*------------------
        Team Slider
    ------------------*/
    let teamSlider = $(".zl-team-slider");
    if (teamSlider.length) {
        teamSlider.slick({
            mobileFirst: true,
            prevArrow:
                '<button type="button" class="slick-arrow slick-prev"><i class="las la-arrow-left"></i></button>',
            nextArrow:
                '<button type="button" class="slick-arrow slick-next"><i class="las la-arrow-right"></i></button>',
            responsive: [
                {
                    breakpoint: 767,
                    settings: {
                        slidesToShow: 2,
                    },
                },
                {
                    breakpoint: 991,
                    settings: {
                        slidesToShow: 3,
                    },
                },
                {
                    breakpoint: 1399,
                    settings: {
                        slidesToShow: 4,
                    },
                },
            ],
        });
    }
    /*------------------
        Featured Slider
    ------------------*/
    var featuredFor = $(".zl-featured-slider-for");
    var featuredNav = $(".zl-featured-slider-nav");
    if (featuredFor || featuredNav) {
        featuredFor.slick({
            mobileFirst: true,
            arrows: false,
            asNavFor: ".zl-featured-slider-nav",
        });
        featuredNav.slick({
            mobileFirst: true,
            asNavFor: ".zl-featured-slider-for",
            prevArrow:
                '<button type="button" class="slick-arrow slick-prev"><i class="las la-arrow-left"></i></button>',
            nextArrow:
                '<button type="button" class="slick-arrow slick-next"><i class="las la-arrow-right"></i></button>',
        });
    }

    /*----------------------------
        Testimonial Slider Home 7
    -------------------------------*/
    let testiFor = $(".zl-testimonial-for-7");
    let testiNav = $(".zl-testimonial-nav-7");

    if(testiFor.length || testiNav.length) {
        testiFor.slick({
            mobileFirst: true,
            arrows: false,
            autoplay: true,
            vertical: true,
            pauseOnHover: false
        })
        testiNav.slick({
            mobileFirst: true,
            arrows: false,
            autoplay: true,
            vertical: true,
            pauseOnHover: false
        })
    }


    /*------------------
        Counter Up
    ------------------*/
    let count = $(".counter");
    if (count.length) {
        count.counterUp({
            delay: 10,
            time: 1000,
        });
    }
    /*------------------
        Feedback Slider
    ------------------*/
    var feedFor = $(".zl-feed-for");
    var feedNav = $(".zl-feed-nav");
    if (feedFor || feedNav) {
        feedFor.slick({
            mobileFirst: true,
            arrows: false,
            asNavFor: ".zl-feed-nav",
        });
        feedNav.slick({
            mobileFirst: true,
            asNavFor: ".zl-feed-for",
            prevArrow:
                '<button type="button" class="slick-arrow slick-prev"><i class="las la-arrow-left"></i></button>',
            nextArrow:
                '<button type="button" class="slick-arrow slick-next"><i class="las la-arrow-right"></i></button>',
        });
    }

    /*------------------
        back to top
    ------------------*/
    $(document).on("click", ".back-to-top", function () {
        $("html,body").animate(
            {
                scrollTop: 0,
            },
            2000
        );
    });
})(jQuery);

$(window).on("scroll", function () {
    var ScrollTop = $(".back-to-top");
    if ($(window).scrollTop() > 1200) {
        ScrollTop.fadeIn(1000);
    } else {
        ScrollTop.fadeOut(1000);
    }
});

$(window).on("load", function () {
    /*-----------------
        preloader
    ------------------*/
    var preLoder = $(".preloader");
    preLoder.fadeOut(1000);
});
/*------------------
    Animation on Scroll
------------------*/
sal({
    threshold: 0.5,
    // once: false,
});
