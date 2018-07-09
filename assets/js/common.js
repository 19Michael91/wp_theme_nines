/* Открытие меню */
var main = function() { //главная функция
    $('.icon-menu').click(function() { //выбираем класс icon-menu и добавляем метод click с функцией, вызываемой при клике
        $('.mobile-menu').animate({ //выбираем класс menu и метод animate
            left: '0px' //теперь при клике по иконке, меню, скрытое за левой границей на 285px, изменит свое положение на 0px и станет видимым
        }, 200); //скорость движения меню в мс
        
        $('body').animate({ //выбираем тег body и метод animate
            left: '285px' //чтобы всё содержимое также сдвигалось вправо при открытии меню, установим ему положение 285px
        }, 200); //скорость движения меню в мс
    });

	$('.tabs').mouseover(function(){
		$(this).find('ul').css('display', 'block');
	})

	$('.tabs').mouseout(function(){
		$(this).find('ul').css('display', 'none');
	})

	$('#menu li').mouseover(function(){
		$(this).find('ul').css('display', 'block');
	})

	$('#menu li').mouseout(function(){
		$(this).find('ul').css('display', 'none');
	})



/* Закрытие меню */
    $('.icon-close').click(function() { //выбираем класс icon-close и метод click
        $('.mobile-menu').animate({ //выбираем класс menu и метод animate
            left: '-285px' //при клике на крестик меню вернется назад в свое положение и скроется
        }, 200); //скорость движения меню в мс
        
    $('body').animate({ //выбираем тег body и метод animate
            left: '0px' //а содержимое страницы снова вернется в положение 0px
        }, 200); //скорость движения меню в мс
    });
};

$(document).ready(main); //как только страница полностью загрузится, будет вызвана функция main, отвечающая за работу меню


$(document).ready(function() {

	$('.acc-header').on('click', function(){
		$(this).toggleClass('toggle-color');
		$(this).find('span').toggleClass('toggle-back');
		$(this).parent().find('.acc-content').slideToggle(400);
	})
	$('.breadcrumb a').click(function(){
		$('.breadcrumb a').removeClass('new-background');
		$(this).addClass('new-background');
	})
	$('.img-det-match span').click(function(){
		$(this).toggleClass('active-side-span');
	})
	$(".tabs").click(function(e) {
		e.preventDefault();
		$(".tabs span").removeClass('active-tabs');
		$(this).find("span").toggleClass('active-tabs');
	})
	
	$(".tabs").click(function(e) {
		e.preventDefault();
		$(".tabs").removeClass('active-tab');
		$(this).toggleClass('active-tab');
	})

	//Плавный скролл до блока .div по клику на .scroll
	//Документация: https://github.com/flesler/jquery.scrollTo

	$(window).scroll(function () {
        if ($(this).scrollTop() > 0) {
            $('p.scroll-up').fadeIn();
        } else {
            $('p.scroll-up').fadeOut();
        }
    });

	$("p.scroll-up").click(function() {
		$.scrollTo($("header"), 800, {
			offset: -90
		});
	});

	

	var owl = $(".slider-thumb");
	owl.owlCarousel({
		items : 6,
		nav : false,
		loop : true,
		responsiveClass:true,
		responsive:{
			0:{
				items:1
			},
			600:{
				items:3
			},
			1000:{
				items:6
			}
		}
	});



	var owl = $(".slider-thumb-photo");
	owl.owlCarousel({
		items : 5,
		nav : true,
		loop : true,
		responsiveClass:true,
		responsive:{
			0:{
				items:1
			},
			600:{
				items:3
			},
			1000:{
				items:5
			}
		}
	});


	var owl = $(".gallery-thumb-photo");
	owl.owlCarousel({
		items : 5,
		nav : true,
		loop : true,
		responsiveClass:true,
		responsive:{
			0:{
				items:1
			},
			600:{
				items:3
			},
			1000:{
				items:5
			}
		}
	});


	var owl2 = $(".slider-thumb-video");
	owl2.owlCarousel({
		items : 3,
		nav : true,
		loop : true,
		responsiveClass:true,
		responsive:{
			0:{
				items:1
			},
			600:{
				items:2
			},
			1000:{
				items:3
			}
		}
	});

	$('.slider-spons').slick({
		vertical : true, 
		autoplay : true, 
		autoplaySpeed : 5000,
  		slidesToScroll: -1,
		accessibility : false
  	});

  
	$("#top").click(function () {
		$("body, html").animate({
			scrollTop: 0
		}, 800);
		return false;
	});

	var sliderItemHeight = $('.slide').height(),
		sliderHeight = sliderItemHeight,
		count = $('.slide').length,
		start = 1;

	
	
});
