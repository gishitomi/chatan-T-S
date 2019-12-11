$(function() {
    $('.menu-trigger').on('click', function() {
        // $(this).toggleClass('on');
        if ($(this).hasClass('active')) {
            $(this).removeClass('active');
            $('nav').removeClass('open');
            $('.overlay').removeClass('open');
            // $('.menu-trigger span').css('background-color', 'black');
        } else {
            $(this).addClass('active');
            $('main').addClass('open');
            $('nav').addClass('open');
            $('.overlay').addClass('open');
            // $('.menu-trigger span').css('background-color', 'white');
        }
    });
    $('.overlay').on('click', function() {
        if ($(this).hasClass('open')) {
            $(this).removeClass('open');
            $('.menu-trigger').removeClass('active');
            $('nav').removeClass('open');
        }
    });
});