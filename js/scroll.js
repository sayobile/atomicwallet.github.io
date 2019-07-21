$(function(){

    var shrinkHeader = 50;
       $(window).scroll(function() {
       var scroll = getScrollOffset();

       if ( scroll >= shrinkHeader ){
              $('.header').addClass('shrink');
              $('.btn--download').addClass('shrink-btn');
              $('#atomic_txt').hide();
              $('.header__logo svg').css({transform:'scale(.75)',paddingTop:'10px'});
        }else{
               $('.header').removeClass('shrink');
               $('.btn--download').removeClass('shrink-btn');
			         $('#atomic_txt').show(300);
               $('.header__logo svg').css({transform:'scale(1)',paddingTop:'0'});
           }
     });
     
     function getScrollOffset() {
        return window.pageYOffset;
     }


     
     $(window).scroll(function() {

        
       var scroll = getScrollOffset();
        var wHeight = window.innerHeight;
        var moreThan = wHeight/3 - 50;
        if ( scroll >= moreThan){
            $('.data-table-wrap table thead').addClass('fixed-table-header');
            $('.data-table-wrap table tbody tr:first-child').css({
                marginTop:'55px'
            });
        }else{
            $('.data-table-wrap table thead').removeClass('fixed-table-header');
            $('.data-table-wrap table tbody tr:first-child').css({
                marginTop:'0'
            }); 
        }
    
    })


});



 
    $(function(){
        var closedMenu = true;
        $('.btn--mobile-menu').click(function(){
            if(closedMenu){
                $('.header__navigation--mobile').slideDown(300);
                $(this).find('i').removeClass('fa-bars').addClass('fa-times');
                closedMenu = false;
            }else{
                $('.header__navigation--mobile').slideUp(300);
                $(this).find('i').removeClass('fa-times').addClass('fa-bars');
                closedMenu = true;
            }
        })


        $('.header__navigation--mobile ul li a').click(function(){
            $('.header__navigation--mobile').slideUp(300);
            $('.btn--mobile-menu').find('i').removeClass('fa-times').addClass('fa-bars');
            closedMenu = true;
        })

})
