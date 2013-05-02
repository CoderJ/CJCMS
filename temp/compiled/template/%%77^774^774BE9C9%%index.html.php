<?php /* Smarty version 2.6.25, created on 2013-04-29 17:09:13
         compiled from index.html */ ?>
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
  <div class="toolbar">
    <?php if ($this->_tpl_vars['user_name']): ?>
      <?php echo $this->_tpl_vars['user_name']; ?>
 <a href="admin">管理</a> | 退出
    <?php else: ?>
      <a href="/?act=login">登录</a>
    <?php endif; ?>
  </div>
</body>
</html>