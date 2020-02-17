// Hide URL bar on mobile devices
$(document).ready(function () {
    $(this).scrollTop(0);    
});

var paddingWrapper = $('.carousel-item-wrapper');
var interval;

$(function() {
    clearInterval(interval);
    interval = setInterval(function () {
        var current = $('.carousel-item-active');
        var next = current.next();
        if( !next.length ){
            next = current.parent().find('div:first');
        }
        next.addClass('carousel-item-active');
        current.removeClass('carousel-item-active');
        
        var dataTrigger = ('.carousel-item-active a');
        $(dataTrigger).trigger("click");
        if($('#textCleaner').hasClass('active')){
            $('body').css({
                'background-image': 'url("images/text-cleaner-wm.png")'
            });
        }
        else if($('#layoutBuilder').hasClass('active')){
            $('body').css({
                'background-image': 'url("images/layout-wm.png")'
            });
        }
        else{
            $('body').css({
                'background-image': 'none'
            });
        }
    }, 7500);    
});

$(paddingWrapper).on('mousedown', paddingWrapper, function(){
    clearInterval(interval);
    $(paddingWrapper).removeClass('carousel-item-active');
    $(this).addClass('carousel-item-active');  
    var textCleanerListen = setInterval(function(){
        if($('#textCleaner').hasClass('active')){
            clearInterval(textCleanerListen);
            $('body').css({
                'background-image': 'url("images/text-cleaner-wm.png")'
            });
        }
    }, 1);   
    var LayoutBuilderListen = setInterval(function(){
        if($('#layoutBuilder').hasClass('active')){
            clearInterval(LayoutBuilderListen);
            $('body').css({
                'background-image': 'url("images/layout-wm.png")'
            });
        }
    }, 1);
});

$('.legacy-reveal-controller').click(function(){
    $('.legacy-wrapper').slideToggle(500);
    $(this).children('i').toggleClass('fa-chevron-down').toggleClass('fa-chevron-up');
});



$(window).load(function(){
    var $container = $('.filter-tools-wrapper');
    $container.isotope({
        filter: '*',
        animationOptions: {
            duration: 750,
            easing: 'linear',
            queue: false
        }
    });
 
    $('#filter-btns a').click(function(){
        $('#filter-btns .filter-current').removeClass('filter-current');
        $(this).addClass('filter-current');
 
        var selector = $(this).attr('data-filter');
        $container.isotope({
            filter: selector,
            animationOptions: {
                duration: 750,
                easing: 'linear',
                queue: false
            }
         });
         return false;
    }); 
});