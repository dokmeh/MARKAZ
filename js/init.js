$(document).ready(function() {
    $('.identity-logo').click(function() {
      $(this).toggleClass('identity-logo-op');

        $('.mobilenavhandl').toggleClass('mobilenavhandl-op');
        $('.navhandl').toggleClass('nav-op');
        $('.menu-icon').toggleClass('open');

    });
    $('.newsbt').click(function() {
        $(this).addClass('newsbt-hide');
        $('.homeslidebt').removeClass('homeslidebt-hide');
        $('.home').addClass('home-news');
    });
    $('.homeslidebt').click(function() {
        $(this).addClass('homeslidebt-hide');
        $('.newsbt').removeClass('newsbt-hide');
        $('.home').removeClass('home-news');
    });
    $('.submenu p').click(function() {
        $('.submenu').removeClass('submenu-op');
        $(this).parent().addClass('submenu-op');
    });
    $('span.close-bt').click(function () {
          $('.submenu').removeClass('submenu-op');
    });
    $('.tagofsubmenu').click(function(){
      var data = $(this).attr('data-submenu');
      $('.submenu[data-submenu='+data+']').addClass('submenu-op');
      $('.mobilenavhandl').addClass('mobilenavhandl-hf');
    });
    $(".submenu").swipe({
        swipeLeft: function(){
              $('.submenu').removeClass('submenu-op');
              $('.mobilenavhandl').removeClass('mobilenavhandl-hf');
        },
        swipeRight: function(){
        }
    });
    $('.arrow-d').click(function () {
        $(".home").animate({ scrollTop: $('section.home-body.blocks.members.cards').offset().top }, 1000);
    })
});
var isMobile = {
    Android: function() {
        return navigator.userAgent.match(/Android/i);
    },
    BlackBerry: function() {
        return navigator.userAgent.match(/BlackBerry/i);
    },
    iOS: function() {
        return navigator.userAgent.match(/iPhone|iPad|iPod/i);
    },
    Opera: function() {
        return navigator.userAgent.match(/Opera Mini/i);
    },
    Windows: function() {
        return navigator.userAgent.match(/IEMobile/i) || navigator.userAgent.match(/WPDesktop/i);
    },
    any: function() {
        return (isMobile.Android() || isMobile.BlackBerry() || isMobile.iOS() || isMobile.Opera() || isMobile.Windows());
    }
};
