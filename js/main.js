$(document).ready(function() {

  y = 0;
  var previousScroll = 0;
  var fixmeTop = 0;
  if($('.espacamento_bottom').length>0){
	fixmeTop = $('.espacamento_bottom').offset().top;       // get initial position of the element
  }
  // PARALAX
  $(window).scroll(function() {

    //var currentScroll = $(this).scrollTop();
    //if (currentScroll > previousScroll) {
      //y += 7;
      //$('.backNuvem').css("background-position", "0px " + y + "px");
	  //$('.back_pijama').css("background-position", "25px " + y + "px");
      //$('.bg-nuvem-arquitetura').css("background-position", "0px " + y + "px");
    //} else {
      //y -= 7;
      //$('.backNuvem').css("background-position", "0px " + y + "px");
	  //$('.back_pijama').css("background-position", "25px " + y + "px");
      //$('.bg-nuvem-arquitetura').css("background-position", "0px " + y + "px");
    //}
    //previousScroll = currentScroll;
	
	
	var currentScroll = $(window).scrollTop(); // get current position

    if (currentScroll >= fixmeTop) {           // apply position: fixed if you
        $('#navArquitetura').css({                      // scroll to that element or below it
            position: 'absolute',
            top: fixmeTop,
			right: '-13%'
        });
    } else {                                   // apply position: static
		$('#navArquitetura').css({                      // scroll to that element or below it
            position: 'fixed',
            top: '',
			right: '10%'
        });
    }

  });
  
  $(".mais").click(function() {
    $(".menu").slideToggle();
  });

	lightbox('.lightbox');


  /**
   * Menus
   */
  $(".menu-items .botao-menu-responsivo").on('click', function() {
    $(".menu-items").addClass('menu-responsive');
    console.log('aq');
    $(".menu-items ul.menu-item").slideToggle('slow');
  });

// arquitetura
$('#navArquitetura li').on('click', function(){
  $('#navArquitetura li').removeClass('active');
  $(this).addClass('active');
  $('#navArquitetura li').text("");
  var go = $(this).data('go');
  $(this).text($(this).data('text'));

  if(go=="slide-arquitetura"){
    $('html, body').animate({
         scrollTop: 0
     }, 1500);
  }else{
    $('html, body').animate({
         scrollTop: $("#"+go).offset().top
     }, 1500);
  }
});

$('.item-arquitetura').on('mouseenter', function(){
    $('#navArquitetura li').removeClass('active');
    $('#navArquitetura li').text("");
    let li = $('#navArquitetura').find('[data-go="' +  $(this).attr('id') + '"]');
    $('#navArquitetura').find('[data-go="' +  li.data('go') + '"]').text(li.data('text'));
    li.addClass('active');
});

  /**
   * Carousel depoimentos
   */
  $('#componente-depoimentos').owlCarousel({
    items: 1,
    margin: 10
  });


  /**
   * Carousel arquitetura
   */
  // $('#slide-arquitetura').owlCarousel({
  //   items: 1,
  //   margin: 10
  // });

  /**
   * Carousel fotos
   */
  $('.componente-fotos').not('.item-arquitetura .componente-fotos, #produtos .componente-fotos').owlCarousel({
    loop: true,
    items: 3,
    nav: true,
    margin: 20,
    dots: false,
    navRewind: false,
    navText: ["<img height='22px' src='img/seta-branca-esquerda.png'>", "<img height='22px' src='img/seta-branca-direita.png'>"],
	responsive: {
      0: {
        items: 1,
        nav: true
      },
      480: {
        items: 1,
        nav: true
      },
      600: {
        items: 3,
        nav: true
      },
      1000: {
        items: 3,
        nav: true
      }
    }
  });
  
  
  $('.festas .seta_rosa .componente-fotos').owlCarousel({
    loop: true,
    items: 2,
    nav: true,
    margin: 20,
    dots: false,
    navRewind: false,
	navText: ["<img height='22px' src='img/seta_esquerda.png'>", "<img height='22px' src='img/seta_direita.png'>"],
	responsive: {
      0: {
        items: 1,
        nav: true
      },
      480: {
        items: 1,
        nav: true
      },
      600: {
        items: 2,
        nav: true
      },
      1000: {
        items: 2,
        nav: true
      }
    }
  });
  
  $('.festas .seta_verde .componente-fotos').owlCarousel({
    loop: true,
    items: 2,
    nav: true,
    margin: 20,
    dots: false,
    navRewind: false,
	navText: ["<img height='22px' src='img/seta_esquerda_verde.png'>", "<img height='22px' src='img/seta_direita_verde.png'>"],
	responsive: {
      0: {
        items: 1,
        nav: true
      },
      480: {
        items: 1,
        nav: true
      },
      600: {
        items: 2,
        nav: true
      },
      1000: {
        items: 2,
        nav: true
      }
    }
  });
  
  $('.festas .seta_azul .componente-fotos').owlCarousel({
    loop: true,
    items: 2,
    nav: true,
    margin: 20,
    dots: false,
    navRewind: false,
	navText: ["<img height='22px' src='img/seta_esquerda_azul.png'>", "<img height='22px' src='img/seta_direita_azul.png'>"],
	responsive: {
      0: {
        items: 1,
        nav: true
      },
      480: {
        items: 1,
        nav: true
      },
      600: {
        items: 2,
        nav: true
      },
      1000: {
        items: 2,
        nav: true
      }
    }
  });
  
  $('.item-arquitetura .componente-fotos').owlCarousel({
    loop: true,
    items: 3,
    nav: true,
    margin: 20,
    dots: false,
    navRewind: false,
    navText: ["<img height='22px' src='img/seta_esquerda.png'>", "<img height='22px' src='img/seta_direita.png'>"],
	responsive: {
      0: {
        items: 1,
        nav: true
      },
      480: {
        items: 1,
        nav: true
      },
      600: {
        items: 3,
        nav: true
      },
      1000: {
        items: 3,
        nav: true
      }
    }
  });
  
  $('#produtos .componente-fotos').owlCarousel({
    loop: true,
    items: 3,
    nav: true,
    margin: 20,
    dots: false,
    navRewind: false,
    navText: ["<img height='22px' src='img/seta_esquerda.png'>", "<img height='22px' src='img/seta_direita.png'>"],
	responsive: {
      0: {
        items: 1,
        nav: true
      },
      480: {
        items: 1,
        nav: true
      },
      600: {
        items: 3,
        nav: true
      },
      1000: {
        items: 3,
        nav: true
      }
    }
  });


$('#slideNuvem').owlCarousel({
  items: 1,
  margin: 10
});

  /**
   * Carousel fotos
   */
  $('.componente-parceiros').owlCarousel({
    loop: true,
    items: 5,
    nav: true,
    margin: 30,
    dots: false,
    navRewind: false,
    navText: ["<img src='img/seta_esquerda.png'>", "<img src='img/seta_direita.png'>"],
    responsive: {
      0: {
        items: 1,
        nav: true
      },
      480: {
        items: 2,
        nav: true
      },
      600: {
        items: 3,
        nav: true
      },
      1000: {
        items: 5,
        nav: true
      }
    }
  });
});
