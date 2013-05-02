// JavaScript Document
function creat_mind(){
	if(!$("#mind").val()){
	}else{
		$.ajax({			
			type: "post",  //以post方式与后台沟通
			url : "action/index.ajax.php", //与此php页面沟通
			data:  'act=creat_mind&content='+$("#mind").val(), //发给php的数据
			success: function(con){//如果调用php成功
				switch(con){
					case "0":
						alert_msg("系统繁忙，请稍后再试！");
						break;
					case "1":
						alert_msg("发布成功！");
						$("#mind").val("");
						break;
					case "2":
						alert_msg("超出字数，请修改后再试！");
						break;
					default:
						alert_msg("系统出错，请稍后再试！");
						break;
				}
			}

			
		});
	}
}
function alert_msg(msg){
	$("#alert_msg").html(msg);
	$("#cover").fadeIn(500).delay(1500).fadeOut(500);
	$("#cover_2").fadeIn(500).delay(1500).fadeOut(500);
	$("#alert_msg").fadeIn(500).delay(1500).fadeOut(500);
}
function check_box(msg,href){
	$("#alert_msg").html(msg+"<a class='check_btn' href='"+href+"'>OK</a>");
	$("#cover").fadeIn(500);
	$("#cover_2").fadeIn(500);
	$("#alert_msg").fadeIn(500);
}
function get_city(){
	$.ajax({
			type: "post",  //以post方式与后台沟通
			url : "action/index.ajax.php", //与此php页面沟通
			data:  'act=get_city&r='+Math.random(), //发给php的数据
			success: function(con){//如果调用php成功
				$("#city").html(con);
			}
	});
}
function get_area(city){
	$.ajax({
			type: "post",  //以post方式与后台沟通
			url : "action/index.ajax.php", //与此php页面沟通
			data:  'act=get_area&city='+city+'&r='+Math.random(), //发给php的数据
			success: function(con){//如果调用php成功
				$("#area").html(con);
			}
	});
}
function add_member(){
	var member_number = parseInt($("#member_number").val())+1;
	$("#member").html($("#member").html()+'<span id="member_'+member_number+'">职位： <input name="member_name[]" type="text" /> 人数： <input name="member_num[]" type="number" min="1" max="50" />人 <input type="button" class="add_btn" onClick="del_member(\''+member_number+'\')" value="-" /><br /></span>');
	$("#member_number").val(member_number);
}

function del_member(num){
	$("#member_"+num).remove();
}

function add_time(){
	var time_number = parseInt($("#time_number").val())+1;
	$("#time").html($("#time").html()+'<div id="time_'+time_number+'">内容： <input class="time_name" name="time_name[]" type="text" /><br /> 时间： <input name="start_time[]" type="date"  /> - <input name="end_time[]" type="date"  /><input type="button" onClick="del_time(\''+time_number+'\')" value="-" class="add_btn" /></div>');
	$("#time_number").val(time_number);
}

function del_time(num){
	$("#time_"+num).remove();
}
function show_or_hide(id){
	if($("#"+id).css("display") == "none"){
		$("#"+id).slideDown(500);
	}else{
		$("#"+id).slideUp(500);
	}
}