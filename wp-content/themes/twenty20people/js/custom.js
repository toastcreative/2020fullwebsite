$('.ud_btm-slider').slick({
  dots: false,
  infinite: false,
  speed: 300,
  arrows:true,
  slidesToShow: 3,
  slidesToScroll: 1,
  responsive: [
    {
      breakpoint: 1024,
      settings: {
        slidesToShow: 3,
        slidesToScroll: 1,
        infinite: false,
        dots: false
      }
    },
    {
      breakpoint: 600,
      settings: {
        slidesToShow: 2,
        infinite: false,
        slidesToScroll: 1
      }
    },
    {
      breakpoint: 480,
      settings: {
        slidesToShow: 1,
        slidesToScroll: 1,
        infinite: false
      }
    }
    // You can unslick at a given breakpoint now by adding:
    // settings: "unslick"
    // instead of a settings object
  ],
  nextArrow: '<i class="ud_arr-right fa fa-angle-right"></i>',
  prevArrow: '<i class="ud_arr-left fa fa-angle-left"></i>'
});
