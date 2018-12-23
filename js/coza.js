jQuery(function($) {
    $(".carousel").slick({
        infinite: true,
        slidesToShow: 1,
        autoplay: true,
        autoplaySpeed: 2000,
        fade: true,
        arrows: false,
        pauseOnHover: false
    });

    $(".carousel").on('beforeChange', function (event, slick, currentSlide, nextSlide){
        var slider = $(this).find('.slider');
        $(slider[currentSlide]).find(".carousel-title").removeClass('animated fadeInDown');
        $(slider[currentSlide]).find(".carousel-subtitle").removeClass('animated fadeInUp');
        $(slider[currentSlide]).find(".carousel-btn").removeClass('animated jackInTheBox');
        $(slider[nextSlide]).find(".carousel-title").addClass('animated fadeInDown');
        $(slider[nextSlide]).find(".carousel-subtitle").addClass('animated fadeInUp');
        $(slider[nextSlide]).find(".carousel-btn").addClass('animated jackInTheBox');
    });

    $(window).on('scroll',function(){
        if($(this).scrollTop())
            $(".navbar").css("background", "#fff");
        else
            $(".navbar").css("background", "transparent");
    });
});