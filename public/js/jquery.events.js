/**
 * Created by Konrad on 03.11.2016.
 */

function isMobile() {
	var windowWidth = window.innerWidth,
	    windowHeight = window.innerHeight;
	
	console.log(windowWidth < 992, windowHeight < 800);
	
	return (windowWidth < 992 || windowHeight < 1010);
}

function isPhone() {
	var windowWidth = window.innerWidth;
	return windowWidth < 768;
}

$(document).ready(function () {
    
    fixHeight();
	
	$('#header .menu').click(function () {
		$('#menu').show('slide', {
			direction: 'right'
		});
		$('body, html').css({
			'overflow': 'hidden'
		});
	});
	
	$('#menu .close').click(function () {
		$('#menu').hide('slide', {
			direction: 'right'
		});
		$('body, html').css({
			'overflow': ''
		});
	});
	
	
	fitSocialBar();
});

$(window).resize(function(){
    
    fixHeight();
	fitSocialBar();
	
});


function fixHeight(){
    
    
    $('.fitHeight').css({
        paddingTop: '',
        paddingBottom: ''
    });
    
    var hedear = $('#header').innerHeight(),
        content = $('.fitHeight').innerHeight(),
        windowHeight = window.innerHeight;
    console.log(content, windowHeight);
    if( content < windowHeight ){
        var diff = windowHeight - (content + hedear);
	    
        $('.fitHeight').css({
            paddingTop: Math.floor(diff / 2) + 'px',
            paddingBottom: Math.floor(diff / 2) + 'px'
        });
    }
	
	if( isMobile() ){
		$('body').addClass('mobile');
	}else{
		$('body').removeClass('mobile');
	}

}


function fitSocialBar(){
	var totalWidth = 0;
	
	$('.socials .rotate').css('width', '');
	
	$('.socials .rotate').children().each(function (i, e) {
		totalWidth += $(e).innerWidth();
		console.log(totalWidth);
	});
	
	totalWidth += 10;
	
	$('.socials .rotate').css({
		'width': totalWidth + 'px',
		// 'left': -(totalWidth / 5) + 'px'
	});
	
}