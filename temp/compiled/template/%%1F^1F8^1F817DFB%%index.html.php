<?php /* Smarty version 2.6.25, created on 2012-06-05 22:17:59
         compiled from H5C3/index.html */ ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link rel="shortcut icon" href="favicon.ico"/>
<link rel="shortcut icon" href="favicon.ico"/>
<title><?php echo $this->_tpl_vars['web_action']; ?>
-<?php echo $this->_tpl_vars['web_name']; ?>
</title>
<link href="template/H5C3/style/master.css" rel="stylesheet" type="text/css" />
<link href="template/H5C3/style/stroll.min.css" rel="stylesheet" type="text/css" />
<script language="javascript" type="text/javascript" src="script/jquery.js"></script>
 <?php echo '
<script language="javascript" type="text/javascript" src="script/script.js"></script>
<script language="javascript" type="text/javascript" src="script/stroll.min.js"></script>
<script language="javascript" type="text/javascript">
$(document).ready(function() {
    initialize();
	stroll.bind(\'#allproject\');
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

});

function initialize(){
	var bw = document.body.clientWidth;
	var bh = document.body.clientHeight;
	var part_width = (bw-150-20-50-50)/2;
	var myph = bh-20-131-20-32;
	var alph = bh-93-35;
	$("#left").width(part_width); 
	$("#right").width(part_width);
	$(".project_content").width((part_width-20*2-10*2-40)/2);
	$("#myproject").height(myph);
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
	<li class="logo"><a href="index.php"><img src="images/logo.png" /></a></li>
	<a href="index.php" class="nav active">首页</a>
	<a href="index.php?act=contacts" class="nav">人脉</a>
	<a href="index.php?act=find" class="nav">寻找</a>
</div>
<div id="left">
	<div>
    	<table class="sendmind" width="100%" cellpadding="0" cellspacing="0">
        <tr><td colspan="2"><span class="title">有什么好的想法？马上记录下来</span></td></tr>
        <tr>
        	<td style=" border:1px solid #8fc31f; padding:5px;">
                <textarea tabindex="1"  node-type="textEl" range="0&amp;0"></textarea>
            </td>
            <td class="sendmind_btn">
                <div class="addpic_btn" href="#"></div>
                <a href="#" onclick="creat_project()">发布项目</a>
                <a href="#" tabindex="2"  onclick="creat_mind()">发布创意</a>
            </td>
        </tr>
        </table>
        <div class="title">与我有关的</div>
        <ul id="myproject">
             <?php $_from = $this->_tpl_vars['myproject']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['key'] => $this->_tpl_vars['item']):
?>
                        <li class="project_content">
                        <a href="index.php?act=showmyproject&pid=<?php echo $this->_tpl_vars['item']['p_id']; ?>
"><?php echo $this->_tpl_vars['item']['p_content']; ?>
</a>
                        <div class="my_project_type"><?php if ($this->_tpl_vars['item']['user_id'] != $this->_tpl_vars['userid']): ?>我参与的<?php else: ?>我发起的<?php endif; ?></div>
                        </li>
             <?php endforeach; endif; unset($_from); ?>
        </ul>
    </div>
</div>
<div id="right">
	<div id="account"><div class="setting"><a href="index.php?act=setting">设置</a> <a href="index.php?act=logout">退出</a></div><div class="account"><?php echo $this->_tpl_vars['username']; ?>
</div></div>
    <div class="c"></div>
            <div class="title" style="padding-left:20px;">可能感兴趣的</div>
        <ul id="allproject"  class="wave">
             <?php $_from = $this->_tpl_vars['allproject']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['key'] => $this->_tpl_vars['item']):
?>
                        <li>
                        <a href="index.php?act=showproject&pid=<?php echo $this->_tpl_vars['item']['p_id']; ?>
"><?php echo $this->_tpl_vars['item']['p_content']; ?>
</a>
                        </li>
             <?php endforeach; endif; unset($_from); ?>
        </ul>

</div>
</body>
</html>