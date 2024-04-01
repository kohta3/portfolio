var swiperElement = document.querySelector('.swiper-container');
var swiper = undefined;

var options = {
  loop: true,
  loopedSlides: 3, 
  centeredSlides: true,
  preloadImages: true,
  loopFillGroupWithBlank: false,
  autoplay: {
    delay: 5000,
    disableOnInteraction: false,
  },
  navigation: {
    nextEl: '.swiper-button-next',
    prevEl: '.swiper-button-prev',
  },
  pagination: {
    el: '.swiper-pagination',
    type: 'bullets',
    clickable: true,
  },
  breakpoints: {
    991: {
      slidesPerView: 2,
      spaceBetween: 0
    },
    767: {
      slidesPerView: 0,
      spaceBetween: 0
    }
  }
};




document.addEventListener('DOMContentLoaded', () => {
    document.querySelector('footer').style.marginTop = "0";
    swiper = new Swiper(swiperElement, options);
});
