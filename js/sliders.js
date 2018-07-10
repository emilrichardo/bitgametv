$('.games-list').slick({
  dots: true,
  nextArrow: '<div class="arrow arrow-next"><i class="fas fa-angle-right text-danger"></i></div>',
  prevArrow: '<div class="arrow arrow-prev"><i class="fas fa-angle-left text-danger"></i></div>',  
  infinite: true,
  variableWidth: true,
     adaptiveHeight: true,
  speed: 300,
  slidesToShow: 4,
  slidesToScroll: 1,
  focusOnSelect: true,
  autoplay: true,
  responsive: [
    {
      breakpoint: 1024,
      settings: {
        slidesToShow: 3,
        slidesToScroll: 3,
        infinite: true,
        dots: true
      }
    },
    {
      breakpoint: 600,
      settings: {
        slidesToShow: 2,
        slidesToScroll: 2
      }
    },
    {
      breakpoint: 480,
      settings: {
        slidesToShow: 1,
        slidesToScroll: 1
      }
    }
    // You can unslick at a given breakpoint now by adding:
    // settings: "unslick"
    // instead of a settings object
  ]
});