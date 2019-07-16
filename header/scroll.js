$(function(){


    var shrinkHeader = 50;
     $(window).scroll(function() {
       var scroll = getScrollOffset();
         if ( scroll >= shrinkHeader ) {
              $('.header').addClass('shrink');
              $('.btn--download').addClass('shrink-btn');
              $('#atomic_txt').fadeOut(300);
              $('.header__logo svg').attr('width','90');
              $('.header__logo svg').attr('height','75');
              $('.header__logo').css({'paddingTop':'10px'})
              $('.header__logo svg').attr('viewBox',"0 0 90 88");

              
           }
           else {
               $('.header').removeClass('shrink');
               $('.btn--download').removeClass('shrink-btn');
               $('#atomic_txt').fadeIn(300);
               $('.header__logo').css({'paddingTop':'0'})
               $('.header__logo svg').attr('width','107');
              $('.header__logo svg').attr('height','85');
              $('.header__logo svg').attr('viewBox',"0 0 107 85");
              
           }
     });
     
     function getScrollOffset() {
       return window.pageYOffset;
       }
});