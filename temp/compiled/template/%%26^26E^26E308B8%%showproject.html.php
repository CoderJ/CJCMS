<?php /* Smarty version 2.6.25, created on 2012-05-31 22:26:00
         compiled from H5C3/showproject.html */ ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link rel="shortcut icon" href="favicon.ico"/>
<title><?php echo $this->_tpl_vars['web_action']; ?>
-<?php echo $this->_tpl_vars['web_name']; ?>
</title>
<link href="template/H5C3/style/master.css" rel="stylesheet" type="text/css" />
<link rel="stylesheet" href="editor/themes/default/default.css" />
<link rel="stylesheet" href="editor/plugins/code/prettify.css" />
<script charset="utf-8" src="editor/kindeditor-min.js"></script>
<script charset="utf-8" src="editor/lang/zh_CN.js"></script>
<script charset="utf-8" src="editor/plugins/code/prettify.js"></script>
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
 
     <?php if ($this->_tpl_vars['project'] == "-1"): ?>
     <?php echo '*/
	 check_box("这个项目好像你没权限看到吧？","index.php");
     /*'; ?>

     <?php elseif ($this->_tpl_vars['project'] == "-2"): ?>
     <?php echo '*/
	 check_box("对不起，该创意还没有发起，请联系作者发起项目","index.php?act=sendmsg&id='; ?>
<?php echo $this->_tpl_vars['pid']; ?>
<?php echo '");
     /*'; ?>

     <?php elseif ($this->_tpl_vars['project'] == '0'): ?>
     <?php echo '*/
	 check_box("您还没有为这个创意发起项目，现在就去建立？","index.php?act=creatproject&id='; ?>
<?php echo $this->_tpl_vars['pid']; ?>
<?php echo '");
     /*'; ?>

     <?php endif; ?>
     <?php echo '*/

});
KindEditor.ready(function(K) {
	var editor1 = K.create(\'textarea[name="content"]\', {
		themeType : \'simple\',
		cssPath : \'editor/plugins/code/prettify.css\',
		uploadJson : \'editor/php/upload_json.php\',
		fileManagerJson : \'editor/php/file_manager_json.php\',
		allowFileManager : true,
		afterCreate : function() {
			var self = this;
			K.ctrl(document, 13, function() {
				self.sync();
				K(\'form[name=example]\')[0].submit();
			});
			K.ctrl(self.edit.doc, 13, function() {
				self.sync();
				K(\'form[name=example]\')[0].submit();
			});
		}
	});
	prettyPrint();
});
function initialize(){
	var bw = document.body.clientWidth;
	var bh = document.body.clientHeight;
	var part_width = (bw-150-20-50-50)/2;
	var myph = bh-20-131-20-32;
	var alph = bh-93;
	$("#left").width(part_width); 
	$("#left").height(bh-20); 
	$("#right").width(part_width);
	$(".project_content").width((part_width-20*2-10*2-40)/2);
	$("#myproject").height(myph);
	$("#add_project_detail textarea").width(part_width-2);
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
<div id="left" style="overflow:auto;">
  <div id="mind"><?php echo $this->_tpl_vars['project']['p_content']; ?>
 <span style="color:#CCC;">--<?php echo $this->_tpl_vars['project']['user_name']; ?>
</span></div>
    	<div class="time_display"><?php echo $this->_tpl_vars['project']['p_creat_time']; ?>
</div>    
    	<div class="soa">关注：<?php echo $this->_tpl_vars['project']['p_attention']; ?>
</div>
    	<div class="soa">不支持：<?php echo $this->_tpl_vars['project']['p_opposition']; ?>
</div>    
    	<div class="soa">支持：<?php echo $this->_tpl_vars['project']['p_support']; ?>
</div> 
        <div class="c"></div>
        <?php if (! $this->_tpl_vars['project_detail']['0']['pd_content']): ?>
        	此项目还未填写详细内容
        <?php endif; ?>
        <?php $_from = $this->_tpl_vars['project_detail']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['key'] => $this->_tpl_vars['item']):
?>
            <div class="project_detail"><div class="info">第<span class="num"><?php echo $this->_tpl_vars['key']+1; ?>
</span>篇详细内容，由<span class="user_name"><?php echo $this->_tpl_vars['item']['user_name']; ?>
</span>发表于<span class="time"><?php echo $this->_tpl_vars['item']['pd_creat_time']; ?>
</span></div>
            <div class="content"><?php echo $this->_tpl_vars['item']['pd_content']; ?>
</div></div>  
        <?php endforeach; endif; unset($_from); ?>
</div>
<div id="right">
</div>
</body>
</html>