<?php /* Smarty version 2.6.25, created on 2013-01-03 19:43:30
         compiled from login.html */ ?>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title><?php echo $this->_tpl_vars['web_action']; ?>
-<?php echo $this->_tpl_vars['web_name']; ?>
</title>
<link rel="stylesheet" href="template/stylesheets/base.css">
</head>
<body>
  <form class="loginform" method="post" action="/?act=login">
    <table>
      <caption>登录</caption>
      <tbody>
        <tr>
          <td align="right">用户名：</td>
          <td><input type="text" name="username" /></td>
        </tr>        
        <tr>
          <td align="right">密码：</td>
          <td><input type="text" name="userpwd" /></td>
        </tr>
      </tbody>
      <tfoot>
        <td colspan="2"><input type="submit" value="确认" /></td>
      </tfoot>
    </table>
  </form>
</body>
</html>