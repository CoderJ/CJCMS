<?php /* Smarty version 2.6.25, created on 2011-08-19 08:07:41
         compiled from admin/admin.html */ ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=gb2312" />
<title><?php echo $this->_tpl_vars['web_name']; ?>
</title>
<link href="template/<?php echo $this->_tpl_vars['template_admin']; ?>
/css/master.css" rel="stylesheet" type="text/css" />
<?php echo '
<script src="script/jquery.js" type="text/javascript" language="javascript"></script>
<script src="template/admin/script/custom.js" type="text/javascript" language="javascript"></script>
<script src="template/admin/script/script.js" type="text/javascript" language="javascript"></script>
<script src="template/admin/script/jquery.anyDrag.min.js" type="text/javascript"></script>
<script type="text/javascript" language="javascript">
$(document).ready(function(){
	w8 = new Array();
	menu_pos = \'0\';
	$(".windows").anyDrag({obj:".windows_bg",maxTop:true,alpha:0.8});	
	}
)</script>
</script>
'; ?>

</head>

<body>
<div id="taskbar_bg"></div>
<div id="taskbar">
	<div id="logo_btn" style="background:url(template/<?php echo $this->_tpl_vars['template_admin']; ?>
/images/logo.png);" onclick="show_start_menu()"></div>
    <div id="showdesktop" onmouseover="seedesktop()" onmouseout="recoverdesktop()" onclick="showdesktop()"></div>
    <img id="user_photo" src="upload/userphoto/<?php echo $this->_tpl_vars['user']['admin_photo']; ?>
" onclick="show_user_info()" />
</div>
	<div id="user_info">
    	<div id="user_info_content">
        	<div id="user_name"><?php echo $this->_tpl_vars['user']['admin_name']; ?>
</div>
        	<img src="upload/userphoto/<?php echo $this->_tpl_vars['user']['admin_photo']; ?>
" />
            <a href="#" style="width:80px; margin-top:30px; margin-left:2px;">修改头像</a>
            <a href="#" style="width:80px; margin-left:2px;">修改信息</a>
            <a href="#" style="width:174px; clear:both; margin-top:20px; margin-left:2px;">修改密码</a>
            <a href="?act=logout" style="width:174px; margin-left:2px; margin-top:0px;">退出</a>
        </div>
    </div>
<div id="start_menu_bg"></div>
<div id="start_menu">
	<div id="start_menu_left">
    	<?php $_from = $this->_tpl_vars['menu']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['menu']):
?>
    	<a id="menu_<?php echo $this->_tpl_vars['menu']['menu_id']; ?>
" href="#" onmouseover="get_child_menu(<?php echo $this->_tpl_vars['menu']['menu_id']; ?>
)"  onclick="add_windows('windows_<?php echo $this->_tpl_vars['menu']['menu_url']; ?>
','<?php echo $this->_tpl_vars['menu']['menu_name']; ?>
','','<?php echo $this->_tpl_vars['menu']['menu_url']; ?>
','<?php echo $this->_tpl_vars['menu']['menu_width']; ?>
px','<?php echo $this->_tpl_vars['menu']['menu_height']; ?>
px')"><div class="start_menu"><?php echo $this->_tpl_vars['menu']['menu_name']; ?>
</div></a>
        <?php endforeach; endif; unset($_from); ?>
    </div>
	<div id="start_menu_right"></div>
    <div class="clear"></div>
</div>
</div>
<div id="workplace"  onclick="hide_start_menu()">
    	<?php $_from = $this->_tpl_vars['desktop']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['desktop']):
?>
            <div class="desktopicon"  onclick="add_windows('windows_<?php echo $this->_tpl_vars['desktop']['menu_url']; ?>
','<?php echo $this->_tpl_vars['desktop']['menu_name']; ?>
','','<?php echo $this->_tpl_vars['desktop']['menu_url']; ?>
','<?php echo $this->_tpl_vars['desktop']['menu_width']; ?>
px','<?php echo $this->_tpl_vars['desktop']['menu_height']; ?>
px')">
                <img src="upload/icon/<?php echo $this->_tpl_vars['desktop']['menu_icon']; ?>
" />
                <div class="desktoptxt"><?php echo $this->_tpl_vars['desktop']['menu_name']; ?>
</div>
            </div>
        <?php endforeach; endif; unset($_from); ?>
</div>
</body>
</html>