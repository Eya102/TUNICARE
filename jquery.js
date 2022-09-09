$(function(){
    $('.thum img').on('click',function(){
        $(this).addClass('selected').siblings().removeClass('selected');
        $('.master img').hide().attr('src',$(this).attr('src')).fadeIn(650);
    });
    $('.filter-item').click(function(){
        const value= $(this).attr('data-filter');
        if(value=='All'){
            $('.post-box').show('1000');
        }
        else{
            
        
            $('.post-box').not('.'+value).hide('1000');
            $('.post-box').filter('.'+value).show('1000');
        }
    $('.filter-item').click(function(){
        $(this).addClass('active-filter').siblings().removeClass('active-filter');

    });
        
    });
    $('.fixed-menu .fa-circle-plus').on('click',function(){

        $(this).parent('.fixed-menu').toggleClass('is');
        if($(this).parent('.fixed-menu').hasClass('is')){
            $(this).parent('.fixed-menu').animate({

                   left:114

                },500);
            
            }
        else{
        $(this).parent('.fixed-menu').animate({
            left:-30
        },500);
    }
   

    });
    $('.mes').on('click',function(){
        $('.popup').fadeIn(1000);
    });
    $('.send i').on('click',function(){
         $('.popup').fadeOut(1000);
    });
    $(".ba").on('click',function(){
        $(".post").toggle(1000);
        $(".Ariana").toggle(1000);
    });
    
    
    

    
});