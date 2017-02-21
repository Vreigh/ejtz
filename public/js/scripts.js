function animatemenu(){
    if($("body").scrollTop()<$("#section2").offset().top){
        $("#navigation ul li").removeClass("clicked_option")
        $("#sec1").addClass("clicked_option")
    }
    else if($("body").scrollTop()<$("#section3").offset().top){
        $("#navigation ul li").removeClass("clicked_option")
        $("#sec2").addClass("clicked_option")
    }
    else if($("body").scrollTop()<$("#section4").offset().top){
        $("#navigation ul li").removeClass("clicked_option")
        $("#sec3").addClass("clicked_option")
    }
    else if($("body").scrollTop()<$("#section5").offset().top){
        $("#navigation ul li").removeClass("clicked_option")
        $("#sec4").addClass("clicked_option")
    }
    else if($("body").scrollTop()<$("#section6").offset().top){
        $("#navigation ul li").removeClass("clicked_option")
        $("#sec5").addClass("clicked_option")
    }
    else if($("body").scrollTop()<$("#section7").offset().top){
        $("#navigation ul li").removeClass("clicked_option")
        $("#sec6").addClass("clicked_option")
    }
    else{
        $("#navigation ul li").removeClass("clicked_option")
        $("#sec7").addClass("clicked_option")
    }
}


$(document).ready(function () {
    animatemenu();
    $( ".option" ).click(function() {
    $(".option").css({'left':'-20%'}).removeClass('covercenter').removeClass('coverright').removeClass('coverleft');
    $(this).css({left:'0%'});
    $(this).addClass('clicked');
    $('#text').animate({left:'45vw'},500);
    $('.option h1').css({opacity:0});
    $("#section3 .option .inside").css({"border-top":"none"});
    if($(this).hasClass('te1')){
        $('#t1').animate({opacity:1},500)
    }
    if($(this).hasClass('te2')){
        $('#t2').animate({opacity:1},500)
    }
    if($(this).hasClass('te3')){
        $('#t3').animate({opacity:1},500)
    }
    if($(this).hasClass('te4')){
        $('#t4').animate({opacity:1},500)
    }
    if($(this).hasClass('te5')){
        $('#t5').animate({opacity:1},500)
    }
});

$( ".exit" ).click(function() {
    $("#startups").css({left:'0%'});
    $("#product").css({left:'20%'});
    $("#mentoring").css({left:'40%'});
    $("#europe").css({left:'60%'});
    $("#technology").css({left:'80%'});
    $(".option").removeClass('clicked');
    $('#t1').animate({opacity:0},200);
    $('#t2').animate({opacity:0},200);
    $('#t3').animate({opacity:0},200);
    $('#t4').animate({opacity:0},200);
    $('#t5').animate({opacity:0},200);
    $('#text').animate({left:'100vw'},500);
    $('.option h1').css({opacity:1});
    $("#section3 .option .inside").css({"border-top":"solid 1px rgb(70, 70, 70)"});
});


//SCROLL MENU

    $("#sec1").click(function (){
            $('html, body').animate({
                scrollTop: $("#section1").offset().top
            }, 1000);
            $("#navigation ul li").removeClass("clicked_option");
            $(this).addClass("clicked_option");
        }
    );
    $("#sec2").click(function (){
            $('html, body').animate({
                scrollTop: $("#section2").offset().top
            }, 1000);
            $("#navigation ul li").removeClass("clicked_option");
            $(this).addClass("clicked_option");
        }
    );
    $("#sec3").click(function (){
            $('html, body').animate({
                scrollTop: $("#section3").offset().top
            }, 1000);
            $("#navigation ul li").removeClass("clicked_option");
            $(this).addClass("clicked_option");
        }
    );
    $("#sec4").click(function (){
            $('html, body').animate({
                scrollTop: $("#section4").offset().top
            }, 1000);
            $("#navigation ul li").removeClass("clicked_option");
            $(this).addClass("clicked_option");
        }
    );
    $("#sec5").click(function (){
            $('html, body').animate({
                scrollTop: $("#section5").offset().top
            }, 1000);
            $("#navigation ul li").removeClass("clicked_option");
            $(this).addClass("clicked_option");
        }
    );
    $("#sec6").click(function (){
            $('html, body').animate({
                scrollTop: $("#section6").offset().top
            }, 1000);
            $("#navigation ul li").removeClass("clicked_option");
            $(this).addClass("clicked_option");
        }
    );
    $("#sec7").click(function (){
            $('html, body').animate({
                scrollTop: $("#section7").offset().top
            }, 1000);
            $("#navigation ul li").removeClass("clicked_option");
            $(this).addClass("clicked_option");
        }
    );


//PORTFOLIO


$(".js-show-baner").hover(
    function() {
        $("#baner").find("[data-id='" + $(this).attr("data-id") + "']").removeClass("hide");
    }, function (){  
       $(".js-baner").addClass("hide");
    }         
 );



$("#section4 #log2").hover(
        function () {
            $("#baner2").removeClass("hide");
            $("#baner1").addClass("hide");
        }, function () {
            $("#baner2").addClass("hide");
            $("#baner1").removeClass("hide");
        }
    );
$("#section4 #log3").hover(
        function () {
            $("#baner3").removeClass("hide");
            $("#baner1").addClass("hide");
        }, function () {
            $("#baner3").addClass("hide");
            $("#baner1").removeClass("hide");
        }
    );
$("#section4 #log4").hover(
        function () {
            $("#baner4").removeClass("hide");
            $("#baner1").addClass("hide");
        }, function () {
            $("#baner4").addClass("hide");
            $("#baner1").removeClass("hide");
        }
    );
$("#section4 #log5").hover(
        function () {
            $("#baner5").removeClass("hide");
            $("#baner1").addClass("hide");
        }, function () {
            $("#baner5").addClass("hide");
            $("#baner1").removeClass("hide");
        }
    );
$("#section4 #log6").hover(
        function () {
            $("#baner6").removeClass("hide");
            $("#baner1").addClass("hide");
        }, function () {
            $("#baner6").addClass("hide");
            $("#baner1").removeClass("hide");
        }
    );
    
    
$("#section5 .logo").hover(
        function () {
            $(this).find("img").addClass("hide");
            $(this).find(".but_box").removeClass("hide");
        }, function () {
            $(this).find("img").removeClass("hide");
            $(this).find(".but_box").addClass("hide");
        }
    );






$( ".first_button" ).click(function() {
    $("#arthur").animate({height:'100%'}, 500);
    $("#mitch").animate({height:'0%'}, 500);
    $(".more_info1").removeClass("hd");
    $(".exit").removeClass("hd");
    $(".but_box").addClass("hd");
    $(this).parent().parent().css({'overflow-y':'scroll'});
});
$( ".second_button" ).click(function() {
    $("#mitch").animate({height:'100%'}, 500);
    $("#arthur").animate({height:'0%'}, 500);
    $(".more_info2").removeClass("hd");
    $(".exit").removeClass("hd");
    $(".but_box").addClass("hd");
    $(this).parent().parent().css({'overflow-y':'scroll'});
});
$( ".exit" ).click(function() {
    $(".team_member").animate({height:'50%'},500);
    $(".but_box").removeClass("hd");
    $(".more_info1").addClass("hd");
    $(".more_info2").addClass("hd");
    $(this).addClass("hd");
    $(".content").css({'overflow':'hidden'});
});






    $("#startups").hover(
        function () {
            if(!$(this).hasClass('clicked')) {
                $('#startups').css({'z-index': 3}).addClass('coverleft');
            }
        }, function () {
            $('.option').css({'z-index': 0,});
            $('#startups').css({'z-index': 1}).removeClass('coverleft');
        }
    );
    $("#technology").hover(
        function () {
            if(!$(this).hasClass('clicked')) {
                $('#technology').css({'z-index': 3}).addClass('coverright');
            }
        }, function () {
            $('.option').css({'z-index': 0,});
            $('#technology').css({'z-index': 1}).removeClass('coverright');
        }
    );
    $(".mid").hover(
        function () {
            if(!$(this).hasClass('clicked')) {
                $(this).css({'z-index': 3}).addClass('covercenter');
            }
        }, function () {
            $('.option').css({'z-index': 0,});
            $(this).css({'z-index': 1}).removeClass('covercenter');
        }
    );


//CONTACT EMAIL


$('#section7 form .btn').on('click', function(){
        $('body').css({'cursor' : 'wait'});
        var error = 0;
        var data = {};

        var emailAdress =  $('#section7 form input[name="email"]').val();

        $('#section7 form .form-info-error').text('').hide();
        $('#section7 form .form-info').text('').hide();
        $('#section7 form .field').removeClass('error');

        $('#section7 form .field').each(function(){
            if($(this).hasClass('required') && $(this).val() == '') {
                error = 1;
                $(this).addClass('error');
            }
            //data.append($(this).attr('name'), $(this).val());
            data[$(this).attr('name')] = $(this).val();
        });

        if(!validateEmail(emailAdress)) {
            error = 2;
            $('#section7 form input[name="email"]').addClass('error');
        }

        if(error == 1) {
            $('#section7 form .form-info-error').text('Fill the required fields.').fadeIn();
            $('body').css({'cursor' : 'default'});
        } else if(error == 2) {
            $('#section7 form .form-info-error').text('Provide a valid e-mail adress.').fadeIn();
            $('body').css({'cursor' : 'default'});
        } else {
            $.ajax({
                url: '/',
                type: 'POST',
                data: data,
                success: function(response)
                {
                    $('body').css({'cursor' : 'default'});
                    $('#section7 form .form-info').text('Thank you. Your message has been sent.').fadeIn();
                    $("#js-submit").attr("disabled", true);
                }
            });
        }

    });
function validateEmail($email) {
    var emailReg = /^([\w-\.]+@([\w-]+\.)+[\w-]{2,4})?$/;
    if( !emailReg.test( $email ) ) {
        return false;
    } else {
        return true;
    }
}


//NAV ARROWS


$("#scrollup").click(function (){
            $('html, body').animate({
                scrollTop: $("body").scrollTop()-$("section").height()
            }, 1000);
            setTimeout(animatemenu, 700);
        
        }
    );
$("#scrolldown").click(function (){
            $('html, body').animate({
                scrollTop: $("body").scrollTop()+$("section").height()
            }, 1000);
            setTimeout(animatemenu, 700);
        }
    );
});


(function($) {
    $.fn.filterParents = function(callback) {
        var o = $(this);
        
        while (o.length > 0 && !callback.call(o)) {
            o = o.parent();
            
            if (o.get(0) == document.documentElement) {
                break;
            }
        }
        
        return o;
    };
})(jQuery);

var isScrolling = false;


$(document).on('mousewheel', function(e) {
    if (isScrolling) {
        return;
    }
    
    // Przygotowanie zmiennych
    var menu = $('#navigation').find('ul'),
        selected = menu.find('.clicked_option'),
        next;
    
    // Jeśli żaden element w menu nie jest aktualnie zaznaczony, wybieramy pierwszy
    if (selected.length == 0) {
        selected = menu.find('li:eq(0)');
    }
    
    if (e.deltaY === -1) {
        // W dół
        next = selected.next();
    } else if (e.deltaY === 1) {
        // W górę
        next = selected.prev();
    }
    
    // Jeżeli znaleźliśmy ekran do którego zmierzamy...
    if (!!next && next.length != 0) {
        var doScroll = false;
        
        if (e.target !== document.body) {
            var overflowParent = $(e.target).filterParents(function() {
                return (this.css('overflow-y') || this.css('overflow')) === 'scroll';
            });
            
            if (overflowParent.length > 0) {
                if (overflowParent.get(0) == document.documentElement) {
                    // Nie scrollujemy w obszarze który ma pionowe paski przewijania, czyli scrollujemy całą stronę
                    doScroll = true;
                } else if (e.deltaY === -1 && overflowParent.height() + overflowParent.get(0).scrollTop == overflowParent.get(0).scrollHeight) {
                    // W dół
                    //console.log('scroll down');
                    doScroll = true;
                } else if (e.deltaY === 1 && overflowParent.get(0).scrollTop == 0) {
                    // W górę
                    //console.log('scroll up');
                    doScroll = true;
                }
            }
        } else {
            doScroll = true;
        }
        
        if (doScroll) {
            isScrolling = true;
            next.trigger('click');
            
            setTimeout(function() {
                isScrolling = false;
            }, 1000);
        }
    }
});


