$(document).ready(function() {


  /**
   * Menus
   */
  $(".menu-items .botao-menu-responsivo").on('click', function () {
    $(".menu-items").addClass('menu-responsive');
    console.log('aq');
    $(".menu-items ul.menu-item").slideToggle('slow');
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
  $('#slide-arquitetura').owlCarousel({
    items: 1,
    margin: 10
  });

  /**
   * Carousel fotos
   */
  $('.componente-fotos').owlCarousel({
    loop: true,
    items: 3,
    nav: true,
    margin: 20,
    dots: false,
    navRewind: false,
    navText : ["<img src='../img/seta_esquerda.png'>","<img src='../img/seta_direita.png'>"]
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
    navText : ["<img src='../img/seta_esquerda.png'>","<img src='../img/seta_direita.png'>"],
    responsive : {
      0:{
        items:1,
        nav:true
      },
      480:{
        items:2,
        nav:true
      },
      600:{
        items:3,
        nav:true
      },
      1000:{
        items:5,
        nav:true
      }
    }
  });
});