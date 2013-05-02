<?php /* Smarty version 2.6.25, created on 2013-04-29 17:40:03
         compiled from admin/user.html */ ?>
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
  <form id="addUser" method='post'>
    <fieldset>
      <legend>帐号密码</legend>
      <label for="addUserName">用户名: </label>
      <input id="addUserName" type="text" name="username" checkVal="noSpceialChars" value="<?php if ($this->_tpl_vars['userInfo']): ?><?php echo $this->_tpl_vars['userInfo']['username']; ?>
<?php endif; ?>" /><br />
      <label for="addUserPwd">密&emsp;码: </label>
      <input id="addUserPwd" type="text" name="userpwd" <?php if ($this->_tpl_vars['editUser']): ?><?php else: ?>checkVal="pwd"<?php endif; ?> value="<?php if ($this->_tpl_vars['userInfo']): ?><?php echo $this->_tpl_vars['userInfo']['userpwd']; ?>
<?php endif; ?>" /><br />
      <label for="addUserGroup">用户组: </label>
      <select id="addUserGroup" name="usergroup" checkVal="notNull">
        <?php $_from = $this->_tpl_vars['userGroup']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['k'] => $this->_tpl_vars['v']):
?>
        <option value="<?php echo $this->_tpl_vars['k']; ?>
"  <?php if ($this->_tpl_vars['userInfo']['usergroup'] == $this->_tpl_vars['k']): ?>selected="selected"<?php endif; ?>><?php echo $this->_tpl_vars['v']; ?>
</option>
        <?php endforeach; endif; unset($_from); ?>
      </select><br />
    </fieldset>
    <fieldset>
      <legend>权限分配</legend>
    <ul>
      <?php $_from = $this->_tpl_vars['allMenu']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['k'] => $this->_tpl_vars['v']):
?>
      <li>
        <label for="selRights_<?php echo $this->_tpl_vars['v']['md_key']; ?>
"><?php echo $this->_tpl_vars['v']['md_name']; ?>
</label><input id="selRights_<?php echo $this->_tpl_vars['v']['md_key']; ?>
" name="userrights[]" type="checkbox" value="<?php echo $this->_tpl_vars['v']['md_id']; ?>
" 
        <?php if ($this->_tpl_vars['userInfo']['userrights']): ?>
          <?php $_from = $this->_tpl_vars['userInfo']['userrights']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['urk'] => $this->_tpl_vars['urv']):
?>
            <?php if ($this->_tpl_vars['urv'] == $this->_tpl_vars['v']['md_id']): ?>checked="checked"<?php endif; ?>
          <?php endforeach; endif; unset($_from); ?> 
        <?php endif; ?> />  
        <?php if ($this->_tpl_vars['v']['children']): ?>
        <ul>
          <?php $_from = $this->_tpl_vars['v']['children']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['ck'] => $this->_tpl_vars['cv']):
?>
          <li>
            <label for="selRights_<?php echo $this->_tpl_vars['cv']['md_key']; ?>
"><?php echo $this->_tpl_vars['cv']['md_name']; ?>
</label><input id="selRights_<?php echo $this->_tpl_vars['cv']['md_key']; ?>
" name="userrights[]" type="checkbox" value="<?php echo $this->_tpl_vars['cv']['md_id']; ?>
" 
            <?php if ($this->_tpl_vars['userInfo']['userrights']): ?>
              <?php $_from = $this->_tpl_vars['userInfo']['userrights']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['urk'] => $this->_tpl_vars['urv']):
?>
                <?php if ($this->_tpl_vars['urv'] == $this->_tpl_vars['cv']['md_id']): ?>checked="checked"<?php endif; ?>
              <?php endforeach; endif; unset($_from); ?> 
            <?php endif; ?> />
          </li>
          <?php endforeach; endif; unset($_from); ?>
        </ul>
        <?php endif; ?>
      </li>
      <?php endforeach; endif; unset($_from); ?>
    </ul>
    </fieldset>
    <fieldset class="submit">
      <input type="button" id="pageReset" value="取消" />
      <input type="button" id="pageSubmit" value="提交" />
    </fieldset>
  </form>
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

  $(\'#pageSubmit\').click(function(){
    checkForm($(\'#addUser\'));
  });
})
</script>
'; ?>