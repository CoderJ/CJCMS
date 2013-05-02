$(function(){
  $('.menu ul li').each(function(){
    var _this = $(this);
    if(_this.find('ul li').length>0){
      _this.addClass('has-children').prepend('<b class="icon-right"></b>');
      _this.children('a').attr('act',_this.children('a').attr('href')).removeAttr('href');
      _this.click(function(){
        _this.parent('ul').find('li ul').not(_this.children('ul')).slideUp();
        _this.children('ul').slideToggle();
      });
    }
    if(_this.find('ul li a.active').length>0){
      _this.find('ul').show();
    }
  });
  //select start
  $('select').each(function(){
    var _this = $(this);
    var id = _this.attr('id');
    var name = _this.attr('name');
    if(_this.hasClass('switch')){
      _this.toggleSwitch({
        highlight: _this.data("highlight")  
      });
      return ;
    }
    _this.after('<div class="select" checkVal="'+_this.attr('checkVal')+'"><input id="'+id+'" type="hidden" name="'+name+'" /><input class="selected" type="text" readOnly="true" /><b class="icon-downlist"></b><ul></ul></div>');
    _this.find('option').each(function(){
      _this.next('.select').find('ul').append('<li val="'+$(this).attr('value')+'">'+$(this).html()+'</li>');
      if($(this).attr('selected')){
        _this.next('.select').find('.selected').val($(this).html());
        _this.next('.select').find('#'+id).val($(this).val());
      }
    });
    if(_this.next('.select').find('#'+id).val() == ''){
      var defaultOpt = _this.find('option:eq(0)');
        _this.next('.select').find('.selected').val(defaultOpt.html());
        _this.next('.select').find('#'+id).val(defaultOpt.val());
    }
    _this.remove();
  });
  $('.select').each(function(){
    var _this = $(this);
    var selectKeyAct;
    _this.find('.selected').focus(function(){
      $(this).css('background','#7fd0ed');
      _this.find('ul').slideDown();
    $(document).keypress(function(e){
      selectKeyAct = e;
        if(e.keyCode == 38){//up key
          if(_this.find('ul li.focus').length == 0 || _this.find('ul li.focus').prev('li').length == 0){
            _this.find('ul li:last').addClass('focus').siblings('li').removeClass('focus');
          }else{
            _this.find('ul li.focus').prev('li').addClass('focus').siblings('li').removeClass('focus');
          }
          var focusOpt = _this.find('ul li.focus');
          _this.find('.selected').val(focusOpt.html());
          _this.find('input[type="hidden"]').val(focusOpt.attr('val'));
        }
        if(e.keyCode == 40){//up down
          if(_this.find('ul li.focus').length == 0 || _this.find('ul li.focus').next('li').length == 0){
            _this.find('ul li:first').addClass('focus').siblings('li').removeClass('focus');
          }else{
            _this.find('ul li.focus').next('li').addClass('focus').siblings('li').removeClass('focus');
          }
          var focusOpt = _this.find('ul li.focus');
          _this.find('.selected').val(focusOpt.html());
          _this.find('input[type="hidden"]').val(focusOpt.attr('val'));
        }
        if(e.keyCode == 13){
          $(document).unbind(e);
          _this.find('.selected').blur();
        }
      });
    });    
    _this.find('ul li').click(function(){
      _this.find('.selected').val($(this).html());
      _this.find('input[type="hidden"]').val($(this).attr('val'));
    });
    _this.find('.selected').blur(function(){
      $(document).unbind(selectKeyAct);
      setTimeout(function(){
        _this.find('.selected').css('background','none');
        _this.find('ul li').removeClass('focus');
        _this.find('ul').slideUp();
      },200);
    });
  });
  //select end
  $(document).find("input,textarea,.select").not('.select input,input[type="checkbox"],input[type="button"],').change(function(){
    checkVal($(this),0);
  });
})

var checkForm = function(_this){
  var error = 0;
  _this.find("input,textarea,.select").not('.select input,input[type="checkbox"],input[type="button"],').each(function(){
    error = checkVal($(this),error);
  });

  if(error > 0){
    return false;
  }else{
    _this.submit();
  }
}
var checkVal = function(_this,error){
    if(!error){
      var error = 0;
    }
    if(_this.next('.input-tips').length<=0){
      _this.after('<span class="input-tips input-warning"></span>');
    }
    if(!_this.attr('checkVal')){
      return error;
    }else{
      if(!_this.val() && !_this.children('input[type="hidden"]').val() && !_this.html()){
        _this.next('.input-tips').text('该项不能为空');
        _this.addClass('input-red');
        return error+1;
      }
      switch(_this.attr('checkVal')){
        case 'noSpceialChars'://only input text
          //校验登录名：只能输入5-20个以字母开头、可带数字、“_”、“.”的字串
          var patrn=/^[a-zA-Z]{1}([a-zA-Z0-9]|[._]){2,19}$/;
          if(!patrn.test(_this.val())){
            _this.addClass('input-red');
            _this.next('.input-tips').text('只能输入5-20个以字母开头、可带数字、“_”、“.”的字串');
            return error+1;
          }else{
            _this.next('.input-tips').text('');
            _this.removeClass('input-red');
            return error;
          }
          break;
        case 'email'://only input text
          var patrn = /^[\\w-]+(\\.[\\w-]+)*@[\\w-]+(\\.[\\w-]+)+$/;
          if(!patrn.test(_this.val())){
            _this.addClass('input-red');
            _this.next('.input-tips').text('邮件地址不正确');
            return error+1;
          }else{
            _this.next('.input-tips').text('');
            _this.removeClass('input-red');
            return error;
          }
          break;        
        case 'pwd'://only input text
          var patrn=/^(\w){6,20}$/;
          if(!patrn.test(_this.val())){
            _this.addClass('input-red');
            _this.next('.input-tips').text('只能输入6-20个字母、数字、下划线');
            return error+1;
          }else{
            _this.next('.input-tips').text('');
            _this.removeClass('input-red');
            return error;
          }
          break;
        case 'number'://only input text
          var patrn=/^[0-9]{1,20}$/;//校验是否全由数字组成
          if(!patrn.test(_this.val())){
            _this.addClass('input-red');
            _this.next('.input-tips').text('只能输入数字');
            return error+1;
          }else{
            _this.removeClass('input-red');
            _this.next('.input-tips').text('');
            return error;
          }
          break;
        case 'cellphone'://only input text
          var patrn=/^[+]{0,1}(\d){1,3}[ ]?([-]?((\d)|[ ]){1,12})+$/;
          if(!patrn.test(_this.val())){
            _this.addClass('input-red');
            _this.next('.input-tips').text('只能输入手机号码:必须以数字开头，除数字外，可含有“-”');
            return error+1;
          }else{
            _this.removeClass('input-red');
            _this.next('.input-tips').text('');
            return error;
          }
          break;
        default:
          _this.next('.input-tips').text('');
          _this.removeClass('input-red');
          return error;
      }

    }
}
/**
 *it can be used to replace the windows.confirm
 */
function confirm_msg(title,str,callback){
  var dialog = $('<div style="overflow:hidden;width:100%;word-wrap: break-word;">'+str+'</div>').dialog({title:title, buttons: [
    {
      text: "确认",
      click: function() { $(this).dialog("close"); callback(); }
    },    
    {
      text: "取消",
      click: function() { $(this).dialog("close");}
    }

  ]});
  dialog.next('.ui-dialog-buttonpane').find("button").width("50%");
};
/**
 *it can be used to replace the windows.alert
 */
window.alert = $.alert = function(msg,time){

  if(arguments.length<=0 || msg == undefined){
    msg = "";
  }
  var randomnum = parseInt(Math.random()*1000000000);
  if(time>0){
    $('<div id="temp_alert_box'+randomnum+'" class="alert_div">'+msg+'</div>').Tips({title:"提示",width:250});
    setTimeout(function(){
      $('#temp_alert_box'+randomnum).Tips("close");
      $('#temp_alert_box'+randomnum).parent(".ui-dialog").remove();
      $('#temp_alert_box'+randomnum).remove();
    },time);
  }else{
    var dialog = $('<div id="temp_alert_box">'+msg+'</div>').dialog({title:"提示",modal:true, buttons: [
    {
      text: "确认",
      click: function() { $(this).dialog("close");}
    }]}); 
  dialog.next('.ui-dialog-buttonpane').find("button").width("100%");
  }
};