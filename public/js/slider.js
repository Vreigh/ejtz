jQuery(document).ready(function ($) {


    setInterval(function () {
        $('.my-slider h1').fadeOut(1100);
        $('#section1 .social').fadeOut(1100);
        setTimeout(moveRight, 900);
    }, 6100);
    
    $('.my-slider ul li:last-child').prependTo('.my-slider ul');

    function moveRight() {
        var slideWidth = $('.my-slider ul li').width();
        $('.my-slider ul').animate({
            'margin-left': - slideWidth
        }, 500, function () {
            $('.my-slider ul li:first-child').appendTo('.my-slider ul');
            $('.my-slider ul').css('margin-left', '');
            $('.my-slider h1').fadeIn(1000);
            $('#section1 .social').fadeIn(1000);
        });
    };

});
