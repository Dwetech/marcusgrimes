//$(window).scroll(function(){
//    var scroll = $(window).scrollTop();
//
//    if(scroll > 50){
//        $('.header').addClass('header-fixed');
//    }
//    else{
//        $('.header').removeClass('header-fixed');
//    }
//});



// filter toggle
$('.filter-trigger').on('click', function () {
    $('.filter-large').stop().slideToggle();

    var data = $(this).attr('data-content');

    if(data == 'down'){
        $(this).find('.icon-down').hide();
        $(this).find('.icon-up').show();
        $(this).attr('data-content','up');
    } else {
        $(this).find('.icon-down').show();
        $(this).find('.icon-up').hide();
        $(this).attr('data-content','down');
    }

});
// Sort By toggle
$('.sort-trigger').on('click', function () {
    $('.sort-by-large').stop().slideToggle();
    var data = $(this).attr('data-content');

    if(data == 'down'){
        $(this).find('.icon-down').hide();
        $(this).find('.icon-up').show();
        $(this).attr('data-content','up');
    } else {
        $(this).find('.icon-down').show();
        $(this).find('.icon-up').hide();
        $(this).attr('data-content','down');
    }
});


$('.popover-bath').popover({
        'placement': 'top',
        'trigger': 'hover '
    }
);
$('.popover-bed').popover({
        'placement': 'top',
        'trigger': 'hover '
    }
);
$('.popover-living').popover({
        'placement': 'top',
        'trigger': 'hover '
    }
);
