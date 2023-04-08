
  $(document).ready(function(){
    $('.your-class').slick({
      arrows : false,
      autoplay: true,
      autoplaySpeed: 5000,
      speed: 500,
       responsive: [
      {
        breakpoint: 10000,
        settings: {
         arrows : true
        }
      },
      {
        breakpoint: 768,
        settings: {
        }
      },
      {
        breakpoint: 480,
        settings: {
          slidesToShow: 1,
          slidesToScroll: 1
        }
      }
    ]
    });
    $('.testimonial').slick({
      arrows: false,
      autoplay: true,
      autoplaySpeed: 5000,
      speed: 500
    });
  });
$(document).ready(function(){
    $('.your-class2').slick({
        arrows: true,
        slidesToShow: 4,
        slidesToScroll: 1,
        infinite: true,
        autoplay: true,
        responsive: [
            {
                breakpoint: 1024,
                settings: {
                    slidesToShow: 3,
                    slidesToScroll: 1
                }
            },
            {
                breakpoint: 768,
                settings: {
                    slidesToShow: 2,
                    slidesToScroll: 1
                }
            },
            {
                breakpoint: 414,
                settings: {
                    slidesToShow: 1,
                    slidesToScroll: 1
                }
            }
        ]
    });
});