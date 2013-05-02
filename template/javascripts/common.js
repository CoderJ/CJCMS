$(function(){
  $(".do-list").closest("tr").hover(function(){
    $(this).find(".do-list").animate({width:$(this).find(".do-list a").length*80+10},"fast");
  },function(){
    $(this).find(".do-list").animate({width:0},"fast");
  });
})