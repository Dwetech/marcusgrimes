$(window).scroll(function(){
    var scroll = $(window).scrollTop();

    if(scroll > 50){
        $('.header').addClass('header-fixed');
    }
    else{
        $('.header').removeClass('header-fixed');
    }
});

