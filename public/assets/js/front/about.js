$(document).ready(function () {
    $('#testimonial').slick({
      
      infinite: true,
      speed: 300,
      slidesToScroll: 1,
      slidesToShow: 2,
      variableWidth: true,
      
      prevArrow: '<button class="slide-arrow prev-arrow"><i class="fa-solid fa-arrow-left"></i></button>',
      nextArrow: '<button class="slide-arrow next-arrow"><i class="fa-solid fa-arrow-right"></i></button>'
    });
});

