<?php /* Smarty version 2.6.25, created on 2012-05-28 13:19:50
         compiled from H5C3/login.html */ ?>
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
</head>

<body>
<div id="logo">
	<img src="images/logo_b.png" width="454" height="200" />
</div>
<form id="login" action="" method="post">
	用户名：<input id="input_username" name="username" type="text" value="" />
	密码：<input id="input_userpwd" name="userpwd" type="password" value="" />
    <input id="input_login" type="button" onclick="submit()" value="登录"/>
    <input id="input_reg" type="button" onclick="location.href='index.php?act=reg'"value="注册"/>
</form>
</body>
</html>