<?php /* Smarty version 2.6.25, created on 2012-05-25 01:47:32
         compiled from H5C3/creatproject.html */ ?>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title><?php echo $this->_tpl_vars['web_action']; ?>
-<?php echo $this->_tpl_vars['web_name']; ?>
</title>
<link href="template/H5C3/style/master.css" rel="stylesheet" type="text/css">
<script language="javascript" type="text/javascript" src="script/jquery.js"></script>
 <?php echo '
<script language="javascript" type="text/javascript" src="script/script.js"></script>
<script language="javascript" type="text/javascript">
$(document).ready(function() {
    initialize();
	$(".project_content").each(function(index, element) {
        $(this).hover(function(e) {
			$(this).children(".my_project_type").animate({left:"-80px"},500);
        },function(e){
			$(this).children(".my_project_type").animate({left:"0px"},500);
		});
    });
	$("#account").hover(function(e) {
		$(this).children(".setting").animate({width:"100px"},500);
	},function(e){
		$(this).children(".setting").animate({width:"0px"},500);
	});
	 /*'; ?>

     <?php if ($this->_tpl_vars['mind'] == '0'): ?>
     <?php echo '*/
	 check_box("项目已经发起，不能重复此操作。","index.php");
     /*'; ?>

	 <?php elseif ($this->_tpl_vars['mind'] == "-1"): ?>
     <?php echo '*/
	 check_box("对不起，你没有此操作的权限。","index.php");
     /*'; ?>

     <?php elseif ($this->_tpl_vars['creat'] == '1'): ?>
     <?php echo '*/
	 check_box("项目发起成功！现在就去查看？","index.php?act=showmyproject&pid='; ?>
<?php echo $this->_tpl_vars['pid']; ?>
<?php echo '");
     /*'; ?>

     <?php elseif ($this->_tpl_vars['creat'] == '0'): ?>
     <?php echo '*/
	 check_box("对不起，服务器出现错误，请重新发起。","index.php");
     /*'; ?>

     <?php endif; ?>
     <?php echo '*/
	 get_city();

});

function initialize(){
	var bw = document.body.clientWidth;
	var bh = document.body.clientHeight;
	var part_width = (bw-150-20-50-50)/2;
	var lh = bh-20;
	var alph = bh-93;
	$("#left").width(part_width); 
	$("#right").width(part_width);
	$(".project_content").width((part_width-20*2-10*2-40)/2);
	$("#left").height(lh); 
	$("#allproject").height(alph);
	}
</script>
 '; ?>


</head>
<body>
<!--<div id="user">欢迎您，<a href="index.php?act=user"><?php echo $this->_tpl_vars['username']; ?>
</a>.<a href="index.php?act=logout">退出</a></div>
<div id="newidea"></div>-->
<div id="cover"></div>
<div id="cover_2"><div id="alert_msg">系统繁忙，请稍后再试！</div></div>
<div id="nav">
	<li class="logo"><a href="index.php"><img src="images/logo.png"></a></li>
	<a href="index.php" class="nav active">首页</a>
	<a href="index.php?act=contacts" class="nav">人脉</a>
	<a href="index.php?act=find" class="nav">寻找</a>
</div>
<div id="left">
<div id="mind">&emsp;<?php echo $this->_tpl_vars['mind']['p_content']; ?>
</div>
<form action="" method="post">
<fieldset>
    <legend>发地地点</legend>
    省(直辖市) <select id="city" onChange="get_area(this.value)">
    	<option value="0">请选择</option>
    </select>
    &nbsp;城市（地区） <select id="area" name="area" onChange="get_area(this.value)">
    	<option value="0">请选择</option>
    </select>
</fieldset>
<fieldset id="time">
    <legend>时间安排</legend>
    <input id="time_number" type="hidden" value="1" />
    <div id="time_1">内容： <input class="time_name" name="time_name[]" type="text" /><br /> 时间： <input name="start_time[]" type="date"  /> - <input name="end_time[]" type="date"  /><input type="button" onClick="add_time()" value="+" class="add_btn" /></div>
</fieldset>
<fieldset id="member">
    <legend>人员需求</legend>
    <input id="member_number" type="hidden" value="1" />
	<div id="member_1">职位： <input name="member_name[]" type="text" /> 人数： <input name="member_num[]" type="number" min="1" max="50" />人 <input type="button" class="add_btn" onClick="add_member()" value="+" /></div>
</fieldset>
<fieldset>
    <legend>权限设置</legend>
    <input type="checkbox" name="join_right" value="1" /> 加入无需审核<br>
    <input type="checkbox" name="member_exceed" value="1" /> 人员超出需求后仍然可以加入<br>
    <input type="checkbox" name="read_right" value="1" /> 详细内容所有人可见<br>
    <input type="checkbox" name="review_right" value="1" /> 详细内容所有人可以评论<br>
</fieldset>
<input type="submit" value="发起项目" />
</form>
</div>
<div id="right">
	<div id="account"><div class="setting"><a href="index.php?act=setting">设置</a> <a href="index.php?act=logout">退出</a></div><div class="account"><?php echo $this->_tpl_vars['username']; ?>
</div></div>
    <div class="c"></div>
            <div class="title">我关注的</div>
        <div id="allproject">
        </div>

</div>
</body>
</html>