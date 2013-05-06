$(function(){
  $('.header .nav li').hover(function(){
    $(this).find('ul').hide().slideDown('fast');
  },function(){
    $(this).find('ul').show().slideUp('fast');
  });
  $('.left-side,.right-side').each(function(){
    $(this).height($('.container').height());
  });
  var imageSlider = function(){
    var slider = $('.slider');
    slider.each(function(){
      var _this = $(this);
      _this.find('ul li').hide();
      var _length = _this.find('ul li').length;
      var toNext = function(now){
        if(now == _length-1){
          next = 0;
        }else{
          next = now+1;
        }
        _this.find('ul li:eq('+now+')').fadeOut('slow');
        _this.find('ul li:eq('+next+')').fadeIn('slow');
        setTimeout(function(){
          toNext(next);
        },5000);
      }

      toNext(0);
    });
  }
  imageSlider();
})