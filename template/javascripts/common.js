$(function(){
  $('.header .nav li').hover(function(){
    $(this).find('ul').hide().slideDown('fast');
  },function(){
    $(this).find('ul').show().slideUp('fast');
  });
  $('.left-side,.right-side').each(function(){
    //$(this).height($('.container').height());
  });
  var imageSlider = function(){
    var slider = $('.slider');
    var time = $('.slider').attr('time')?$('.slider').attr('time'):5000;
    slider.each(function(){
      var _this = $(this);
      var _length = _this.find('ul li').length;
      if(_length <= 1){
        return false;
      }
      _this.find('ul li').hide();
      var toNext = function(now){
        if(now == _length-1){
          next = 0;
        }else{
          next = now+1;
        }
        _this.find('ul li:eq('+now+')').fadeOut('fast');
        _this.find('ul li:eq('+next+')').fadeIn('fast');
        setTimeout(function(){
          toNext(next);
        },time);
      }

      toNext(0);
    });
  }
  imageSlider();
})