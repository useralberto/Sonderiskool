import $ from "jquery";

if (document.querySelector(".slider")) {
  $('.slider').slick({
    autoplay: true,
    speed: 800,
    lazyLoad: 'progressive',
    arrows: false,
    dots: true,
  }).slickAnimation();
  

}