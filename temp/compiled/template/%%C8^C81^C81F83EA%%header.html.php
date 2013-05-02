<?php /* Smarty version 2.6.25, created on 2013-04-28 15:48:02
         compiled from admin/header.html */ ?>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title><?php echo $this->_tpl_vars['web_action']; ?>
-<?php echo $this->_tpl_vars['web_name']; ?>
</title>
  <link rel="stylesheet" href="/template/stylesheets/normalise.css">
  <link rel="stylesheet" href="/template/stylesheets/jquery-ui.css">
  <link rel="stylesheet" href="/template/stylesheets/base.css">
  <link rel="stylesheet" href="/template/stylesheets/admin.css">
  <script src="/template/javascripts/modernizr-2.0.6.min.js"></script>
</head>
<body>
<?php if ($this->_tpl_vars['user_name']): ?>
  <div class="toolbar">
    <h2><?php echo $this->_tpl_vars['web_action']; ?>
</h2>
      <?php echo $this->_tpl_vars['user_name']; ?>
 | <a href="/?act=logout">退出</a>
  </div>
  <?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => 'admin/left-sidebar.html', 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
<?php endif; ?>