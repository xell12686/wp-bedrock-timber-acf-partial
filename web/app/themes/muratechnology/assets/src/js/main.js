import $ from 'jquery';
document.$ = document.jQuery = $;

import Swiper from 'swiper/bundle';
import 'swiper/css/bundle';

import { TweenMax, Circ } from 'gsap';

$.noConflict();


// Kitchen Sink Navigation
function kitchenSink() {
    $("#index ul li button").click(function () {
        var parent = $(this).parents('li');
        if (parent.hasClass('expanded')) {
            parent.removeClass('expanded');
        } else {
            parent.addClass('expanded');
        }
    });
}

// Component: Masthead
function navigationDropdown() {
    $('#nav-toggle').click(function () {
        $(this).toggleClass('open');
        $('body').toggleClass('nav-expanded');
    });

    // hide nav on scroll
    var prevScrollpos = window.pageYOffset;
    window.onscroll = function () {
        var currentScrollPos = window.pageYOffset;
        if (prevScrollpos > currentScrollPos) {
            $('body').addClass('nav-hide');
        } else {
            $('body').removeClass('nav-hide');
        }
        prevScrollpos = currentScrollPos;
    }

}

// Section: Stats
function statsSlider() {
    let statsSwiper = new Swiper(".image-slider", {
        pagination: {
            el: ".image-slider .swiper-pagination",
            clickable: true
        },
        // updateOnWindowResize: true,
        autoHeight: false,
        autoplay: {
            delay: 7000,
        },
        breakpoints: {
            1024: {
                // autoHeight: false,
            }
        }
    });

}

// Section: Stages
function stagesSlider() {
    let slider = $('.stages-slider');
    let label = slider.find('.stages-nav > .count');
    $(label).click(function (e) {
        e.preventDefault();
        let slide = $(this).data('slide');
        $(this).addClass('active')
            .siblings().removeClass('active');
        $(`.stages-slider .img-wrap[data-slide='${slide}']`)
            .addClass('active')
            .siblings().removeClass('active');
        $(`.stages-slider .text[data-slide='${slide}']`)
            .addClass('active')
            .siblings().removeClass('active');
    });


    $('.stages .panel-item').hover(function () {
        if ($(this).hasClass('hover')) {
            return;
        } else {
            $(this).siblings().removeClass('hover');
            $(this).addClass('hover');
        }
    });
}

// Section: News
function newsSlider() {
    var newsSwiper = new Swiper(".news-slider", {
        slidesPerView: 2,
        speed: 1000,
        spaceBetween: 20,
        navigation: {
            nextEl: ".news .next",
            prevEl: ".news .prev",
        },
        breakpoints: {
            1024: {
                slidesPerView: 3,
            }
        }
    });
}

// Section: Vacancies
function vacanciesList() {
    $(".vacancies-list .header").click(function () {
        var parent = $(this).parents('li');
        if (parent.hasClass('expanded')) {
            parent.removeClass('expanded');
        } else {
            parent.addClass('expanded');
        }
    });
}

// Section: FAQ SHort listing
function faqsList() {
    $(".faq-list .header").click(function () {
        var parent = $(this).parents('li');
        if (parent.hasClass('expanded')) {
            parent.removeClass('expanded');
        } else {
            parent.addClass('expanded');
        }
    });
}

// Section: Accordion
function accordionRows() {
    $(".accordion-rows .header").click(function () {
        var parent = $(this).parents('li');
        if (parent.hasClass('expanded')) {
            parent.removeClass('expanded');
        } else {
            parent.addClass('expanded');
        }
    });
}

// Section: White Paper Listing
function papersList() {
    $(".papers-list .header").click(function () {
        var parent = $(this).parents('li');
        if (parent.hasClass('expanded')) {
            parent.removeClass('expanded');
        } else {
            parent.addClass('expanded');
        }
    });
}

let pageBody = document.body;


// Section: Tabbed Multi Column
function tabbedMultiColumnSlider() {
    var tabbedMultiSwiper = new Swiper(".tabbed-multi-slides", {
        slidesPerView: 1,
        direction: 'vertical',
        effect: 'fade',
        speed: 800,
        mousewheel: {
            enabled: false,
            releaseOnEdges: true,
        },
        keyboard: {
            enabled: true,
            onlyInViewport: true,
        },
        pagination: {
            el: '.tabbed-multi-column .swiper-pagination',
            clickable: true,
        },
    });

    function setSlideNav(slideIndex) {
        let activeNav = $('.tabbed-multi-column .title-navigation .slide-title[data-slide="' + slideIndex + '"');
        if (!activeNav.hasClass('active')) {
            activeNav.siblings().removeClass('active');
            activeNav.addClass('active');
        }
    }

    $('.tabbed-multi-column .title-navigation .slide-title').click(function (e) {
        e.preventDefault();
        let slideIndex = $(this).data('slide');
        tabbedMultiSwiper.slideTo(slideIndex);
    });

    tabbedMultiSwiper.on('slideChange', function () {
        setSlideNav(tabbedMultiSwiper.activeIndex);
    });

    // console.log(tabbedMultiSwiper);

}



// Section: Featured Logos
function logoSlider() {
    var logosSwiper = new Swiper(".logo-slider", {
        slidesPerView: 2,
        speed: 1000,
        navigation: {
            nextEl: ".featured-logos .next",
            prevEl: ".featured-logos .prev",
        },
        mousewheel: {
            enabled: true,
            releaseOnEdges: true,
            forceToAxis: true
        },
        breakpoints: {
            640: {
                slidesPerView: 3,
            },
            1024: {
                slidesPerView: 3,
            },
            1280: {
                slidesPerView: 4,
            }
        }
    });
}

// Section: About
function aboutSlider() {
    var aboutSwiper = new Swiper(".about-slides", {
        slidesPerView: 1,
        direction: 'vertical',
        speed: 1000,
        mousewheel: {
            enabled: true,
            releaseOnEdges: true,
            forceToAxis: true
        },
        autoHeight: false,
        keyboard: {
            enabled: true,
            onlyInViewport: true,
        },
    });

    function setSlideNav(slideIndex) {
        let activeNav = $('.about .labelled-nav .item[data-slide="' + slideIndex + '"');
        if (!activeNav.hasClass('active')) {
            activeNav.siblings().removeClass('active');
            activeNav.addClass('active');
        }
    }

    $('.about .labelled-nav .item').click(function (e) {
        e.preventDefault();
        let slideIndex = $(this).data('slide');
        aboutSwiper.slideTo(slideIndex);
    });

    aboutSwiper.on('slideChange', function () {
        // console.log('slide changed' + aboutSwiper.activeIndex);
        setSlideNav(aboutSwiper.activeIndex);
    });
}

// Section: About
function frontEndPreviewToggle() {
    let preview = $('.front-end-preview');
    preview.each(function () {
        let sectionData = $(this).next('section');
        let imagePreview = $(this);
        sectionData.hide();
        $(this).find('.btn').click(function (e) {
            e.preventDefault();
            sectionData.toggle();
            imagePreview.toggle();
        });
    });
}

// Section: Timeline
function timelineSlider() {
    var timelineSwiper = new Swiper(".timeline-swiper", {
        slidesPerView: "auto",
        spaceBetween: 0,
        speed: 600,
        freeMode: true,
        pagination: {
            el: ".swiper-pagination",
            clickable: true,
        },
        grabCursor: true,
        mousewheel: {
            enabled: false,
            releaseOnEdges: true,
            forceToAxis: true
        },
        breakpoints: {
            // 640: {
            //     slidesPerView: 3,
            // },
            // 1024: {
            //     slidesPerView: 4,
            // },
            // 1280: {
            //     slidesPerView: 5,
            // }
        }
    });

    if (!!window.IntersectionObserver) {
        let viewportWidth = window.innerWidth;

        let observer = new IntersectionObserver((entries, observer) => {
            entries.forEach(entry => {
                if (entry.intersectionRatio > 0) {
                    entry.target.classList.add('in-view');
                    timelineSwiper.mousewheel.enable();
                } else {
                    entry.target.classList.remove('in-view');
                    timelineSwiper.mousewheel.disable();
                }
            });
        }, {
            rootMargin: "-90px 0px -90px 0px",
            threshold: "1"
        });
        if (viewportWidth > 640) {
            document.querySelectorAll('.timeline-swiper').forEach(section => { observer.observe(section) });
        }
    }

}

// Section: StepsSlider
function stepsSlider() {

    var processSwiper = new Swiper(".steps-swiper", {
        slidesPerView: 'auto',
        spaceBetween: 0,
        // speed: 600,
        freeMode: true,
        scrollbar: {
            el: ".swiper-scrollbar",
            hide: true,
        },
        grabCursor: true,
        mousewheel: {
            enabled: false,
            releaseOnEdges: true,
            forceToAxis: true
        },
        navigation: {
            nextEl: ".process-steps .next",
            prevEl: ".process-steps .prev",
        },
    });


    // activate slide emphasis on box click
    $('.steps-swiper .item .box').click(function (e) {
        e.preventDefault();
        let parent = $(this).parents('.steps-swiper');
        let item = $(this).parent('.item');
        item.siblings().removeClass('peek');
        if (parent.hasClass('peek')) {
            parent.removeClass('peek');
        } else {
            parent.addClass('peek');
        }
        if (item.hasClass('peek')) {
            item.removeClass('peek');
        } else {
            item.addClass('peek');
        }
    });

    // mobile accordion
    $(".steps-accordion .item .bar").click(function () {
        var parent = $(this).parents('.item');
        var content = $(parent).children('.content');
        if (parent.hasClass('expanded')) {
            parent.removeClass('expanded');
        } else {
            parent.addClass('expanded');
        }
    });

}


// Seaction: Team
function teamSlider() {
    var teamSwiper = new Swiper(".team-leadership-swiper", {
        speed: 600,
        slidesPerView: "auto",
        spaceBetween: 0,
        freeMode: true,
        touchReleaseOnEdges: true,
        slideVisibleClass: 'is-visible',
        mousewheel: {
            enabled: true,
            releaseOnEdges: true,
            forceToAxis: true
        }

    });

    var boardSwiper = new Swiper(".team-board-swiper", {
        speed: 600,
        slidesPerView: "auto",
        spaceBetween: 0,
        freeMode: true,
        touchReleaseOnEdges: true,
        slideVisibleClass: 'is-visible',
        mousewheel: {
            enabled: true,
            releaseOnEdges: true,
            forceToAxis: true
        },
    });

    $('.grid-nav li').click(function (e) {
        e.preventDefault();
        if ($(this).hasClass('active')) {
            return;
        } else {
            $(this).addClass('active').siblings().removeClass('active');
            let val = $(this).data('slider');
            let slider = $("." + val);
            slider.siblings().addClass('hidden');
            slider.removeClass('hidden');
        }
    });


}

// Section: Tabbed Content
function tabbedContentSlider_BAK() {

    var tabbedContentSwiper = new Swiper(".tabbed-content .tabbed-content-slides", {
        slidesPerView: 1,
        direction: 'vertical',
        speed: 1000,
        // autoHeight: true,
        // grabCursor: true,
        // parallax: true,
        mousewheel: {
            enabled: false,
            releaseOnEdges: false,
            // thresholdTime: 100,
            eventsTarget: 'section.tabbed-content',
            forceToAxis: true
        },
        touchReleaseOnEdges: true,
        keyboard: {
            enabled: true,
            onlyInViewport: true,
        },
        pagination: {
            el: '.tabbed-content .swiper-pagination',
            clickable: true,
        }
    });

    function setSlideText(slideIndex) {
        let activeNav = $('.tabbed-content .title-navigation .slide-title[data-slide="' + slideIndex + '"');
        let activeCopy = $('.tabbed-content .slide-copy[data-slide="' + slideIndex + '"');
        if (!activeNav.hasClass('active')) {
            activeNav.siblings().removeClass('active');
            activeCopy.siblings().removeClass('active');
            activeNav.addClass('active');
            activeCopy.addClass('active');
        }
    }

    $('.tabbed-content .title-navigation .slide-title').click(function (e) {
        e.preventDefault();
        let slideIndex = $(this).data('slide');
        tabbedContentSwiper.slideTo(slideIndex);
    });

    let slideIsAtEdge = false;

    console.log('count: ' + tabbedContentSwiper.slides.length);

    tabbedContentSwiper.on('slideChange', function () {
        let currentSlide = tabbedContentSwiper.activeIndex + 1;
        let lastSlide = tabbedContentSwiper.slides.length;
        console.log('last slide: ' + lastSlide);
        console.log('slide changed... to ' + currentSlide);
        setSlideText(tabbedContentSwiper.activeIndex);
        setTimeout(function () {
            // tabbedContentSwiper.params.mousewheel.releaseOnEdges = false;
            if ((currentSlide == 1) || (currentSlide == lastSlide)) {
                slideIsAtEdge = true;
                console.log('sc: slideIsAtEdge TRUE');
                // pageBody.classList.remove("stop-scrolling");
                console.log('sc: resume page scroll');
                tabbedContentSwiper.mousewheel.disable();
                setTimeout(function () {
                    slideIsAtEdge = false;
                    console.log('sc timed: set slideIsAtEdge to FALSE');
                }, 500);
            } else {
                slideIsAtEdge = false;
                // pageBody.classList.add("stop-scrolling");
                console.log('sc: slideIsAtEdge FALSE');
                console.log('sc: stop page scroll');
                tabbedContentSwiper.mousewheel.enable();
            }
        }, 600);
    });

}

function tabbedContentSlider() {

    function setSlideText(slideIndex) {
        let activeNav = $('.tabbed-content .title-navigation .slide-title[data-slide="' + slideIndex + '"');
        let activeCopy = $('.tabbed-content .slide-copy[data-slide="' + slideIndex + '"');
        if (!activeNav.hasClass('active')) {
            activeNav.siblings().removeClass('active');
            activeCopy.siblings().removeClass('active');
            activeNav.addClass('active');
            activeCopy.addClass('active');
        }
    }

    let clickActive = false;

    function setSlideText(slideIndex) {
        let activeNav = $('.tabbed-content .title-navigation .slide-title[data-slide="' + slideIndex + '"');
        if (!activeNav.hasClass('active')) {
            activeNav.siblings().removeClass('active');
            activeNav.addClass('active');
        }
    }

    // update slide via nav click
    $('.tabbed-content .title-navigation .slide-title').click(function (e) {
        e.preventDefault();
        clickActive = true;
        let slideIndex = $(this).data('slide');
        switchVisibleSlide(slideIndex);
        let targetSlide = document.querySelector('.tabbed-content .slide-' + slideIndex);
        targetSlide.scrollIntoView({ top: 0 });
        setTimeout(() => {
            setSlideText(slideIndex);
            clickActive = false;
        }, 600);
    });

    // update nav & slide on scroll
    let navItems = document.querySelectorAll('.tabbed-content .title-navigation span');
    let visibleSlides = document.querySelectorAll('.tabbed-content .visible-slides .item');
    function switchVisibleSlide(i) {
        visibleSlides.forEach(v => v.classList.remove('shown'))
        setTimeout(() => {
            visibleSlides.forEach(v => v.classList.remove('active'))
            visibleSlides[i].classList.add('active');
        }, 150);
        setTimeout(() => {
            visibleSlides[i].classList.add('shown');
        }, 300);
        if (clickActive == false) {
            navItems.forEach(v => v.classList.remove('active'))
            navItems[i].classList.add('active');
        }
    }
    if (!!window.IntersectionObserver) {
        let observer = new IntersectionObserver((entries, observer) => {
            entries.forEach(entry => {
                let slideIndex = entry.target.getAttribute('data-slide');
                if (entry.intersectionRatio > 0) {
                    entry.target.classList.add('in-view');
                    entry.target.classList.remove('exit');
                    let activeSlide = entry.target.dataset.slide;
                    console.log('active slide: ' + activeSlide);
                    switchVisibleSlide(activeSlide);
                } else {
                    entry.target.classList.remove('in-view');
                    entry.target.classList.add('exit');
                }
            });
        }, {
            rootMargin: "-45% 0px -45% 0px",
            threshold: "0"
        });
        document.querySelectorAll('.tabbed-content .swiper-slide .img-col').forEach(section => { observer.observe(section) });
    }

}

function tabbedContentSliderHorizontal() {

    var tabbedContentHorizontalSwiper = new Swiper(".tabbed-content-horizontal .tabbed-content-slides", {
        slidesPerView: 1,
        direction: 'horizontal',
        speed: 800,
        effect: 'fade',
        autoplay: false,
        // autoHeight: true,
        // grabCursor: true,
        // parallax: true,
        mousewheel: {
            enabled: false,
        },
        touchReleaseOnEdges: true,
        keyboard: {
            enabled: true,
            onlyInViewport: true,
        },
        pagination: {
            el: '.tabbed-content-horizontal .swiper-pagination',
            clickable: true,
        },
        autoHeight: true,
        breakpoints: {
            // 921: {
            //     autoHeight: false,
            // }
        }
    });

    function setSlideText(slideIndex) {
        let activeNav = $('.tabbed-content-horizontal .title-navigation .slide-title[data-slide="' + slideIndex + '"');
        if (!activeNav.hasClass('active')) {
            activeNav.siblings().removeClass('active');
            activeNav.addClass('active');
        }
    }

    $('.tabbed-content-horizontal .title-navigation .slide-title').click(function (e) {
        e.preventDefault();
        let slideIndex = $(this).data('slide');
        console.log('clicked nav of slide: ' + slideIndex);
        tabbedContentHorizontalSwiper.slideTo(slideIndex);
    });

    tabbedContentHorizontalSwiper.on('slideChange', function () {
        setSlideText(tabbedContentHorizontalSwiper.activeIndex);
    });

}


// Section: Tabbed Content Dark
function tabbedContentDarkSlider_BAK() {
    var tabbedContenDarkSwiper = new Swiper(".tabbed-content-dark .tabbed-content-slides", {
        slidesPerView: 1,
        direction: 'vertical',
        speed: 1000,
        mousewheel: {
            enabled: false,
            releaseOnEdges: false,
            // thresholdTime: 100,
            eventsTarget: 'section.tabbed-content-dark',
            forceToAxis: true
        },
        // scrollbar: {
        //     el: ".swiper-scrollbar",
        //     hide: true,
        // },
        keyboard: {
            enabled: true,
            onlyInViewport: true,
        },
        pagination: {
            el: '.tabbed-content-dark .swiper-pagination',
            clickable: true,
        },
    });

    function setSlideText(slideIndex) {
        let activeNav = $('.tabbed-content-dark .title-navigation .slide-title[data-slide="' + slideIndex + '"');
        let activeCopy = $('.tabbed-content-dark .slide-copy[data-slide="' + slideIndex + '"');
        if (!activeNav.hasClass('active')) {
            activeNav.siblings().removeClass('active');
            activeCopy.siblings().removeClass('active');
            activeNav.addClass('active');
            activeCopy.addClass('active');
        }
    }

    $('.tabbed-content-dark .title-navigation .slide-title').click(function (e) {
        e.preventDefault();
        let slideIndex = $(this).data('slide');
        tabbedContenDarkSwiper.slideTo(slideIndex, 1600);
    });

    let slideIsAtEdge = false;

    // console.log('count: ' + tabbedContenDarkSwiper.slides.length);

    tabbedContenDarkSwiper.on('slideChange', function () {
        let currentSlide = tabbedContenDarkSwiper.activeIndex + 1;
        let lastSlide = tabbedContenDarkSwiper.slides.length;
        setSlideText(tabbedContenDarkSwiper.activeIndex);
        setTimeout(function () {
            if ((currentSlide == 1) || (currentSlide == lastSlide)) {
                slideIsAtEdge = true;
                // pageBody.classList.remove("stop-scrolling");
                tabbedContenDarkSwiper.mousewheel.disable();
                setTimeout(function () {
                    slideIsAtEdge = false;
                }, 500);
            } else {
                slideIsAtEdge = false;
                // pageBody.classList.add("stop-scrolling");
                tabbedContenDarkSwiper.mousewheel.enable();
            }
        }, 600);

    });

}

// Section: Tabbed Content Dark
function tabbedContentDarkSlider() {

    function setSlideText(slideIndex) {
        let activeNav = $('.tabbed-content-dark  .title-navigation .slide-title[data-slide="' + slideIndex + '"');
        if (!activeNav.hasClass('active')) {
            activeNav.siblings().removeClass('active');
            activeNav.addClass('active');
        }
    }

    let clickActive = false;

    $('.tabbed-content-dark .title-navigation .slide-title').click(function (e) {
        e.preventDefault();
        clickActive = true;
        let slideIndex = $(this).data('slide');
        setSlideText(slideIndex);
        let targetSlide = document.querySelector('.tabbed-content-dark .slide-' + slideIndex);
        // targetSlide.addClass('targettd');
        targetSlide.scrollIntoView({ top: 200 });
        setTimeout(() => {
            clickActive = false;
        }, 600);
    });

    // update nav on scroll
    let navItems = document.querySelectorAll('.tabbed-content-dark .title-navigation span');
    if (navItems.length > 0) {
        let currentIndex = 0;
        $(window).on('scroll', function () {
            let slides = document.querySelectorAll('.tabbed-content-dark .swiper-slide');
            slides.forEach((v, i) => {
                let rect = v.getBoundingClientRect().y
                if (rect < (window.innerHeight - 400)) {
                    if (currentIndex != i && clickActive == false) {
                        navItems.forEach(v => v.classList.remove('active'))
                        navItems[i].classList.add('active');
                        let slideIndex = $(navItems[i]).data('slide');
                        let activeCopy = $('.tabbed-content .slide-copy[data-slide="' + slideIndex + '"');
                        if (!activeCopy.hasClass('active')) {
                            activeCopy.siblings().removeClass('active');
                            activeCopy.addClass('active');
                        }
                        currentIndex = i;
                    }
                }
            })
        });
    }

    if (!!window.IntersectionObserver) {
        let observer = new IntersectionObserver((entries, observer) => {
            entries.forEach(entry => {
                if (entry.intersectionRatio > 0) {
                    entry.target.classList.add('in-view');
                    entry.target.classList.remove('exit');
                } else {
                    entry.target.classList.remove('in-view');
                    entry.target.classList.add('exit');
                }
            });
        }, {
            rootMargin: "-200px 0px -200px 0px",
            threshold: "0"
        });
        document.querySelectorAll('.tabbed-content-dark .swiper-slide .img-col').forEach(section => { observer.observe(section) });
    }

    if (!!window.IntersectionObserver) {
        let observer = new IntersectionObserver((entries, observer) => {
            entries.forEach(entry => {
                if (entry.intersectionRatio > 0) {
                    entry.target.classList.add('in-view');
                    entry.target.classList.remove('exit');
                } else {
                    entry.target.classList.remove('in-view');
                    entry.target.classList.add('exit');
                }
            });
        }, {
            rootMargin: "-200px 0px -200px 0px",
            threshold: "0"
        });
        document.querySelectorAll('.tabbed-content-dark .intro h2').forEach(section => { observer.observe(section) });
    }
}

//Number counters
function numberCounter() {

    function numberWithCommas(x) {
        return x.toString().replace(/\B(?=(\d{3})+(?!\d))/g, ",");
    }

    function initCount(element, isReverse) {
        let maxCount = element.getAttribute('data-max-value');
        let endCount = maxCount;
        let counter = { var: 0 };
        if (isReverse) {
            //100 to maxCount i.e. 100% to 5%
            counter = { var: 100 };
            endCount = maxCount;
        }

        if (!$(element).hasClass('counted')) {
            TweenMax.to(counter, 1, {
                var: endCount,
                onUpdate: function () {
                    element.innerHTML = numberWithCommas(Math.ceil(counter.var));
                },
                ease: Circ.easeOut,
                onComplete: () => {
                    $(element).addClass('counted');
                }
            }).duration(2);
        }
    }

    if (!!window.IntersectionObserver) {
        $('.animate-count:not(.reverse-count)').text('0');
        let observer = new IntersectionObserver((entries, observer) => {
            entries.forEach(entry => {
                if (entry.intersectionRatio > 0) {
                    initCount(entry.target, false);
                } else {

                }
            });
        }, {
            rootMargin: "-100px 0px -300px 0px",
            threshold: "0"
        });
        document.querySelectorAll('.animate-count:not(.reverse-count)').forEach(section => { observer.observe(section) });
    }

    if (!!window.IntersectionObserver) {
        $('.animate-count.reverse-count').text('100');
        let observer = new IntersectionObserver((entries, observer) => {
            entries.forEach(entry => {
                if (entry.intersectionRatio > 0) {
                    initCount(entry.target, true);
                } else {

                }
            });
        }, {
            rootMargin: "-100px 0px -300px 0px",
            threshold: "0"
        });
        document.querySelectorAll('.animate-count.reverse-count').forEach(section => { observer.observe(section) });
    }

}

// Section: Plastic Problem
function verticalSlider() {
    let menuSection = document.querySelectorAll('.vertical-slider .nav-headings li');


    if (menuSection.length > 0) {
        // for clickable event
        menuSection.forEach(v => {
            v.onclick = (() => {
                setTimeout(() => {
                    menuSection.forEach(j => j.classList.remove('active'))
                    v.classList.add('active')
                }, 300)
                // console.log('menu clicked');
            })
        })
        $(window).on('scroll', function () {
            let mainSection = document.querySelectorAll('.vertical-slider .swiper-slide');

            mainSection.forEach((v, i) => {
                let rect = v.getBoundingClientRect().y
                if (rect < window.innerHeight - 200) {
                    menuSection.forEach(v => v.classList.remove('active'))
                    menuSection[i].classList.add('active')
                }
            })
        });
    }

    if (!!window.IntersectionObserver) {
        let observer = new IntersectionObserver((entries, observer) => {
            entries.forEach(entry => {
                if (entry.intersectionRatio > 0) {
                    entry.target.classList.add('in-view');
                    entry.target.classList.remove('exit');
                } else {
                    entry.target.classList.remove('in-view');
                    entry.target.classList.add('exit');
                }
            });
        }, {
            rootMargin: "-200px 0px -200px 0px",
            // threshold: [0.8, 0.8]
            threshold: "0"
        });
        document.querySelectorAll('.vertical-slider .swiper-slide .objects-wrap').forEach(section => { observer.observe(section) });
    }


}


//Section Photo Grid
function photoGridPlayer() {

    var videoBoxItems = document.querySelectorAll('.photo-grid .item.has-video');

    videoBoxItems.forEach(function (element) {
        let boxStream = element.querySelector('.video-element');
        boxStream.muted = true;
        boxStream.removeAttribute('controls');
        boxStream.setAttribute('loop', true);
        setTimeout(function () {
            boxStream.play();
        }, 500);
    });

}


//Section Hero
function heroPlayer() {

    let heroVideo = document.querySelector('.hero .video-overlay');
    let heroStream = document.querySelector('.hero .video-element');
    let heroPlay = document.querySelector('.hero .play-video');
    let heroClose = document.querySelector('.hero .close-video');

    if ( typeof(heroVideo) != 'undefined' && heroVideo != null) {

        heroStream.muted = true;
        heroStream.removeAttribute('controls');
        heroStream.setAttribute('loop', true);
        heroStream.pause();
    
    
        heroPlay.addEventListener('click', event => {
            event.preventDefault();
            heroVideo.classList.add('active');
            setTimeout(function() {
                heroVideo.classList.add('shown');
            }, 100);
            heroStream.muted = false;
            heroStream.play();
        });
    
        heroClose.addEventListener('click', event => {
            event.preventDefault();
            heroVideo.classList.remove('shown');
            heroStream.pause();
            setTimeout(function() {
                heroVideo.classList.remove('active');
            }, 100);
        });

    }

}

$(document).ready(function () {

    kitchenSink();
    // navigationDropdown();
    statsSlider();
    stagesSlider();
    newsSlider();
    vacanciesList();
    faqsList();
    papersList();
    accordionRows();

    tabbedContentSlider();
    tabbedContentSliderHorizontal();
    // tabbedContentDarkSlider();
    tabbedMultiColumnSlider();
    tabbedContentDarkSlider();

    verticalSlider();

    logoSlider();
    aboutSlider();
    timelineSlider();
    stepsSlider();
    teamSlider();
    numberCounter();
    photoGridPlayer();
    heroPlayer();

    frontEndPreviewToggle();

});





