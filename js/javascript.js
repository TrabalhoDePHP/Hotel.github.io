debounce = function(func, wait, immediate) {
    var timeout;
    return function () {
        var context = this, args = arguments;
        var later = function () {
            timeout = null;
            if (!immediate) func.apply(context, args);
        };
        var callNow = immediate && !timeout;
        clearTimeout(timeout);
        timeout = setTimeout(later, wait);
        if (callNow) func.apply(context, args);
    };
};

(function () {
    var $target = $('.anime'),
    animationClass = 'anime-start';
    
    function animeScroll() {
        var documentTop = $(document).scrollTop();
        var offset = $(window).height() * 3/4;
        
        $target.each(function(){
            var itemTop = $(this).offset().top;
            if (documentTop > itemTop - offset) {
                $(this).addClass(animationClass);
            } else {
                $(this).removeClass(animationClass);
            }
        })
    }

    function menuAnimar() { 
        var documentTop = $(document).scrollTop();
        var offset = $(window).height () * 3/30;
        if (documentTop > offset) {
            $('#menu').addClass('menuAnimado');
            $('#btnTop').addClass('btnTop-animate');
        } else {
            $('#menu').removeClass('menuAnimado');
            $('#btnTop').removeClass('btnTop-animate')
        }
    }
    
    animeScroll();
    menuAnimar();
    
    $(document).scroll(debounce(function() {
        animeScroll();
        menuAnimar();
    }, 100))
}())

$(document).ready(function() {

   

  $("[data-trigger]").on("click", function(e){
    e.preventDefault();
    e.stopPropagation();
    var offcanvas_id =  $(this).attr('data-trigger');
    $(offcanvas_id).toggleClass("show");
    $('body').toggleClass("offcanvas-active");
    $(".screen-overlay").toggleClass("show");
}); 

  $(document).on('keydown', function(event) {
    if(event.keyCode === 27) {
        $(".mobile-offcanvas").removeClass("show");
        $("body").removeClass("overlay-active");
    }
});

  $(".btn-close, .screen-overlay").click(function(e){
    $(".screen-overlay").removeClass("show");
    $(".mobile-offcanvas").removeClass("show");
    $("body").removeClass("offcanvas-active");
}); 
});