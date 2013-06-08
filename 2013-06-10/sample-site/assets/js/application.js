$(function(){
  var mySwiper = $('.swiper-container').swiper({
    //Your options here:
    mode:'vertical',
    loop: true
  });

  $('.swiper-container').on('click', 'button.next', function (e) {
    mySwiper.swipeNext();
  })
})
