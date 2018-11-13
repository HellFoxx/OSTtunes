$(document).ready(function(){
  $('.slider').slick({
    infinite: true,
  	slidesToShow: 6,
  	prevArrow: $('.prev'),
    nextArrow: $('.next'),
  });
});