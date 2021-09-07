jQuery(document).ready(function($) {

    var $window = $(window),
        $section = $('section'),
        nav = $('.top-header'),
        navHeight = nav.height();
    index = 0;
    isScrolling = false;


    // Cut off 10% of video frame not to show the black flash
    $('.vid').on('timeupdate', function() {
        if ($(this)[0].currentTime >= $(this)[0].duration * .95) {
            $(this)[0].currentTime = 0;
        }
    });

    // SCROLLING EFFECT
    // Scroll to section on the same page

    // $('a[href^="#"]').on('click',function (e) {
    //      e.preventDefault();
    //      var target = this.hash;
    //      $target = $(target);
    //      $('html, body').stop().animate({
    //          'scrollTop':  $target.offset().top //no need of parseInt here
    //      }, 1000, function () {
    //          window.location.hash = target;
    //      });
    //  });


    // SCROLL EFFECT 

    $window.on('scroll', function() {
        var scrollTop = $window.scrollTop();

        nav.toggleClass('top-header-slide', scrollTop > navHeight);
        navHeight = scrollTop;
    });


    /*=========================*/
    /*          DOM         */
    /*=========================*/

    // if ($('.grid').parent('div').hasClass('col-md-8')) {
    //     $('.grid').addClass('colc-2');
    // } else {
    //     $('.grid').addClass('colc-3');
    // }


    // $(window).on('load resize', function() {
    //     $('.mobile-menu').hide();

    //     $('.fa-bars').toggle(function(event) {

    //     $('body').css('overflow', 'hidden');
    //     $('.mobile-menu').show();
    //     },
    //     function(event) {
    //     $('body').css('overflow', 'scroll');
    //         $('.mobile-menu').hide();
    //     }
    //     );
        
        
// });



/*=========================*/
/*          Plugin         */
/*=========================*/

// ANIMSITION 

$(".animsition").animsition({
    inClass: 'fade-in-up-sm',
    outClass: 'fade-out-down-sm',
    inDuration: 400,
    outDuration: 400,
    linkElement: 'a:not([target="_blank"]):not([href^="#"])',
    // e.g. linkElement : '.animsition-link'
    loading: true,
    loadingParentElement: 'body', //animsition wrapper element
    loadingClass: 'animsition-loading',
    loadingInner: '', // e.g '<img src="loading.svg" />'
    timeout: true,
    timeoutCountdown: 5000,
    onLoadEvent: true,
    browser: ['animation-duration', '-webkit-animation-duration'],
    // "browser" option allows you to disable the "animsition" in case the css property in the array is not supported by your browser.
    // The default setting is to disable the "animsition" in a browser that does not support "animation-duration".
    overlay: false,
    overlayClass: 'animsition-overlay-slide',
    overlayParentElement: 'body',
    transition: function(url) { window.location.href = url; }
});

// AOS 

AOS.init({
offset: 120,
duration: 400,
easing: 'easeInOutQuad',
delay: 100,
});

});