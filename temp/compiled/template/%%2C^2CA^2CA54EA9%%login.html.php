<?php /* Smarty version 2.6.25, created on 2013-05-01 15:14:01
         compiled from admin/login.html */ ?>
<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => 'admin/header.html', 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
<form class="loginform" id="loginForm" method="post">
  <fieldset>
    <legend>登录</legend>
    <label for="userName">用户名: </label>
      <input id="userName" type="text" name="username" checkVal="noSpceialChars" /><br />
    <label for="userPwd">密码: </label>
      <input id="userPwd" type="password" name="userpwd" checkVal="pwd" /><br />
      <div style="text-align:center; margin-top:20px;">
        <input type="button" id="listReset" value="取消" />
        <input type="button" id="listSubmit" value="登录" />
      </div>
  </fieldset>
</form>
<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => 'admin/footer.html', 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
<?php echo '
<script type="text/javascript">
$(function(){
  $("#listSubmit").click(function(){
    checkForm($(\'#loginForm\'));
  });  
})
</script>
'; ?>