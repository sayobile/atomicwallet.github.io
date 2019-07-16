$(function(){


    var shrinkHeader = 50;
     $(window).scroll(function() {
       var scroll = getScrollOffset();
         if ( scroll >= shrinkHeader ) {
              $('.header').addClass('shrink');
              $('.btn--download').addClass('shrink-btn');
              $('#atomic_txt').hide();
              $('.header__logo svg').css({
                transform:'scale(.75)',
                paddingTop:'10px'
              })
              
            

              
           }
           else {
               $('.header').removeClass('shrink');
               $('.btn--download').removeClass('shrink-btn');
			        $('#atomic_txt').show(300);
              $('.header__logo svg').css({
                transform:'scale(1)',
                paddingTop:'0'
              })
              
             
			 
              
           }
     });
     
     function getScrollOffset() {
       return window.pageYOffset;
       }
});