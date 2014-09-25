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
});
// Sort By toggle
$('.sort-trigger').on('click', function () {
    $('.sort-by-large').stop().slideToggle();
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
