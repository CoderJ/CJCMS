<?php /* Smarty version 2.6.25, created on 2013-04-28 15:48:02
         compiled from admin/userList.html */ ?>
<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => 'admin/header.html', 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
<div class="container">
  <?php if ($this->_tpl_vars['msg']): ?>
  <div class="msg msg_<?php echo $this->_tpl_vars['msg']['type']; ?>
">
    <?php echo $this->_tpl_vars['msg']['msg']; ?>

  </div>
  <?php endif; ?>
  <form id="searchUser" method='post'>
    <fieldset>
      <legend>用户搜索</legend>
      <label for="addUserName">用户名: </label>
      <input id="addUserName" type="text" name="username" checkVal="noSpceialChars" value="<?php if ($this->_tpl_vars['userInfo']): ?><?php echo $this->_tpl_vars['userInfo']['username']; ?>
<?php endif; ?>" /> <label for="addUserGroup">用户组: </label>
      <select id="addUserGroup" name="usergroup" checkVal="notNull">
        <option value=""  <?php if ($this->_tpl_vars['userInfo']['usergroup'] == $this->_tpl_vars['k']): ?>selected="selected"<?php endif; ?>>全部</option>
        <?php $_from = $this->_tpl_vars['userGroup']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['k'] => $this->_tpl_vars['v']):
?>
        <option value="<?php echo $this->_tpl_vars['k']; ?>
"  <?php if ($this->_tpl_vars['userInfo']['usergroup'] == $this->_tpl_vars['k']): ?>selected="selected"<?php endif; ?>><?php echo $this->_tpl_vars['v']; ?>
</option>
        <?php endforeach; endif; unset($_from); ?>
      </select>      
      <input type="button" id="userSearch" value="搜索" />
      <br />
    </fieldset>
  </form>
  <fieldset>
    <legend>用户列表</legend>
    <table width="100%" cellpadding="0" cellspacing="0">
      <thead>
        <tr>
          <th>用户名</th>
          <th>用户组</th>
          <th>用户注册时IP</th>
          <th>用户注册时间</th>
          <th>用户最后登录IP</th>
          <th>用户最后登录时间</th>
        </tr>
      </thead>
      <?php $_from = $this->_tpl_vars['userList']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['k'] => $this->_tpl_vars['v']):
?>
      <tr id="user_<?php echo $this->_tpl_vars['v']['user_id']; ?>
" class="on">
        <td><?php echo $this->_tpl_vars['v']['user_name']; ?>
</td>
        <td val="<?php echo $this->_tpl_vars['v']['user_group']['0']; ?>
"><?php echo $this->_tpl_vars['v']['user_group']['1']; ?>
</td>
        <td><?php echo $this->_tpl_vars['v']['user_reg_ip']; ?>
</td>
        <td><?php echo $this->_tpl_vars['v']['user_reg_time']; ?>
</td>
        <td><?php echo $this->_tpl_vars['v']['user_last_login_ip']; ?>
</td>
        <td><?php echo $this->_tpl_vars['v']['user_last_login_time']; ?>
</td>
        <td><div  class="r"><div class="do-list"><a href="?act=user&id=<?php echo $this->_tpl_vars['v']['user_id']; ?>
"><b class="icon-edit"></b>编辑</a>
          <a class="deleteUser" href="?act=userList&do=<?php echo $this->_tpl_vars['v']['user_id']; ?>
" onclick="return false;"><b class="icon-del"></b>删除</a></div></div></td>
      </tr>
      <?php endforeach; endif; unset($_from); ?>
    </table>
  </fieldset>
</div>
<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => 'admin/footer.html', 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
<?php echo '
<script type="text/javascript">
$(function(){
  $(\'fieldset ul li input[type="checkbox"]\').change(function(){
    if($(this).closest(\'li\').find(\'ul li\').length>0){
      if($(this).attr(\'checked\')){
        $(this).closest(\'li\').find(\'ul li input[type="checkbox"]\').attr(\'checked\',\'true\');
      }else{
        $(this).closest(\'li\').find(\'ul li input[type="checkbox"]\').removeAttr(\'checked\');
      }
    }
  });

  $(\'#userSearch\').click(function(){
    $("#searchUser").submit();
  });
  $(\'.deleteUser\').click(function(){
    var _this = $(this);
    confirm_msg("确认删除","&emsp;确定要删除该用户么？该操作将不可恢复！",function(){
      location.href=_this.attr("href");
    });
  });
})
</script>
'; ?>