<?php /* Smarty version 2.6.25, created on 2013-01-03 13:58:01
         compiled from H5C3/reg.html */ ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link rel="shortcut icon" href="favicon.ico"/>
<title><?php echo $this->_tpl_vars['web_action']; ?>
-<?php echo $this->_tpl_vars['web_name']; ?>
</title>
<link href="template/H5C3/style/master.css" rel="stylesheet" type="text/css" />
<link href="template/H5C3/style/login.css" rel="stylesheet" type="text/css" />
<script language="javascript" type="text/javascript" src="script/jquery.js"></script>
 <?php echo '
<script language="javascript" type="text/javascript" src="script/script.js"></script>
<script language="javascript" type="text/javascript">
$(document).ready(function() {
    $("div[id^=\'tip_\']").addClass("tip");
     '; ?>
 
     <?php if ($this->_tpl_vars['regstate'] == '0'): ?>
     <?php echo '
	 alert_msg("系统错误！");
     '; ?>

     <?php endif; ?>
     <?php echo '
});
var error = 0;

function check(name, value) {
    if (value == "") {
        value = $("#" + name).val();
    }
    switch (name) {
    case "input_username":
        if (value.length < 3 || value.length > 10) {
            showTip(name, "昵称长度须在3-10位之间");
            return false;
        }else if (value.match(/[`~!@#$%^&*{}\\[\\];:\\\'\\"\\/<>\\\\]|root|管理员|系统|manager|红岩|redrock/i)) {
            showTip(name, "昵称中不能包含特殊字符");
            return false;
        }else if(value.match(/^[0-9]*$/)) {
            showTip(name, "昵称不能为纯数字");
            return false;
        }else{
				$.ajax({
					type: "post",  //以post方式与后台沟通
					url : "action/index.ajax.php", //与此php页面沟通
					data:  \'act=reg&username=\'+$("#input_username").val(), //发给php的数据
					success: function(con){//如果调用php成功
						if(!con){
							 showTip(name, "昵称已被注册");
							return false;
						}
					}
				}); 
			}

        break;
    case "input_userpwd":
        if (value.length < 6 || value.length > 16) {
            showTip(name, "密码长度须在6-16位之间");
            return false;
        } else {
			showTip(name,false);
		}
        if ($("#input_userpwd2").val() != "") {
            if (value != $("#input_userpwd2").val()) {
                showTip("input_userpwd2", "两次密码不相同");
            return false;
            }
            showTip("input_userpwd2", false);
        }
        break;
    case "input_userpwd2":
        if (value.length < 6 || value.length > 16) {
            showTip(name, "重复密码输入有误");
            return false;
        }
        if (value != $("#input_userpwd").val()) {
            showTip(name, "两次密码不相同");
            return false;
        }
        break;
	case "email":
        if (!value.match(/^[\\w\\-\\.]+@[\\w\\-\\.]+(\\.\\w+)+$/)) {
            showTip(name, "邮箱输入有误");
            return;
        }
        break;
    }
    showTip(name, false);
	return true;
}
function showTip(name, msg) {
    if (!msg) {
        $("#tip_" + name).hide();
    } else {
        $("#tip_" + name).html(msg);
        $("#tip_" + name).css("display", "block");
        $("#tip_" + name).hide();
        $("#tip_" + name).slideDown("slow");
        error++;
    }
}
function submitCheck() {
    error = 0;
    check("input_username", "");
    check("input_userpwd", "");
    check("input_userpwd2", "");
	
	
    if (error > 0) {
        alert_msg("请把信息填写完整");
        return false;
    }
}

</script>
 '; ?>



</head>

<body>

<div id="cover"></div>
<div id="cover_2"><div id="alert_msg">系统繁忙，请稍后再试！</div></div>
<div id="nav">
	<li class="logo"><a href="index.php"><img src="images/logo.png" /></a></li>
	<a href="index.php" class="nav">首页</a>
	<a href="index.php?act=reg" class="nav active">注册</a>
</div>
<form action="" method="post"  onSubmit="return submitCheck()">
	<table id="reg" >
    <tr><td align="right">用户名：</td><td align="left"><input id="input_username" name="username" onChange="check(this.id,this.value)"type="text" value="" /><div id="tip_input_username"></div></td></tr>
    <tr><td align="right">密码：</td><td align="left"><input id="input_userpwd" name="userpwd" onChange="check(this.id,this.value)" type="password" value="" /><div id="tip_input_userpwd"></div></td></tr>
    <tr><td align="right">重复密码：</td><td align="left"><input id="input_userpwd2" name="userpwd2" onChange="check(this.id,this.value)" type="password" value="" /><div id="tip_input_userpwd2"></div></td></tr>
    <tr><td colspan="2" align="center">    <input id="input_reg" type="submit" value="注册"/>
    <input id="input_login" type="button" onclick="location.href='index.php?act=login'"value="登录"/>
</td></tr>
</table></form>
</body>
</html>