<?php /* Smarty version 2.6.25, created on 2013-05-25 15:15:10
         compiled from admin/moduleMag.html */ ?>
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
<form method="post" id="moduleList">
  <input type="hidden" name="type" value="update"/>  
  <fieldset>
    <legend>模块列表</legend>
    <table width="100%" cellpadding="0" cellspacing="0">
      <thead>
        <tr>
          <th></th>
          <th>模块ID</th>
          <th>模块名称</th>
          <th>排序</th>
          <th width="50"></th>
        </tr>
      </thead>
    <?php $_from = $this->_tpl_vars['menu']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['k'] => $this->_tpl_vars['v']):
?>
    <tr>
      <td><div class="r"><b class="icon-right"></b><input type="hidden" name="id[]" value="<?php echo $this->_tpl_vars['v']['md_id']; ?>
" /></div></td><td><input type="text" name="key[]" value="<?php echo $this->_tpl_vars['v']['md_key']; ?>
" checkVal="notnull" /></td><td><input name="name[]" type="text" value="<?php echo $this->_tpl_vars['v']['md_name']; ?>
" checkVal="notnull" /></td><td class="order"><input name="order[]" type="text" value="<?php echo $this->_tpl_vars['v']['md_order']; ?>
" class="order" checkVal="number" /></td>        
      <td><div class="r"><div class="do-list"><a class="deleteModule" href="?act=moduleMag&do=<?php echo $this->_tpl_vars['v']['md_id']; ?>
" onclick="return false;"><b class="icon-del"></b>删除</a></div></div></td>
    </tr>
      <?php if ($this->_tpl_vars['v']['children']): ?>
        <?php $_from = $this->_tpl_vars['v']['children']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['ck'] => $this->_tpl_vars['cv']):
?>
        <tr>
      <td><div class="r"><b class="icon-up"></b><input type="hidden" name="id[]" value="<?php echo $this->_tpl_vars['cv']['md_id']; ?>
" /></div></td><td><input name="key[]" type="text" value="<?php echo $this->_tpl_vars['cv']['md_key']; ?>
" checkVal="notnull" /></td><td><input name="name[]" type="text" value="<?php echo $this->_tpl_vars['cv']['md_name']; ?>
" checkVal="notnull" /></td><td class="order"><input name="order[]" type="text" value="<?php echo $this->_tpl_vars['cv']['md_order']; ?>
" checkVal="number" /></td>        
      <td><div class="r"><div class="do-list"><a class="deleteModule"  href="?act=moduleMag&do=<?php echo $this->_tpl_vars['cv']['md_id']; ?>
" onclick="return false;"><b class="icon-del"></b>删除</a></div></div></td><td></td>
        </tr>
        <?php endforeach; endif; unset($_from); ?>
      <?php endif; ?>
    <?php endforeach; endif; unset($_from); ?>
    </table>
  </fieldset>
  <fieldset class="submit">
    <input type="button" id="listReset" value="取消" />
    <input type="button" id="listSubmit" value="修改" />
  </fieldset>
</form>

<form method="post" id="moduleAdd">
  <input type="hidden" name="type" value="add"/>  
  <fieldset>
    <legend>添加模块</legend>
    <label for="addUserName">模块ID: </label>
    <input id="addUserName" type="text" name="key" checkVal="noSpceialChars" value="<?php if ($this->_tpl_vars['moduleInfo']): ?><?php echo $this->_tpl_vars['moduleInfo']['md_key']; ?>
<?php endif; ?>" /><br />
    <label for="addUserPwd">模块名称: </label>
    <input id="addUserPwd" type="text" name="name" checkVal="notnull" value="<?php if ($this->_tpl_vars['moduleInfo']): ?><?php echo $this->_tpl_vars['moduleInfo']['md_name']; ?>
<?php endif; ?>" /><br />
    <label for="addUserGroup">父模块: </label>
    <select id="addUserGroup" name="parent" checkVal="notNull">
      <option value="0">无</option>
      <?php $_from = $this->_tpl_vars['menu']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['k'] => $this->_tpl_vars['v']):
?>
      <option value="<?php echo $this->_tpl_vars['v']['md_id']; ?>
" <?php if ($this->_tpl_vars['moduleInfo']['md_parent'] == $this->_tpl_vars['v']['md_id']): ?>selected="selected"<?php endif; ?>><?php echo $this->_tpl_vars['v']['md_name']; ?>
</option>
      <?php endforeach; endif; unset($_from); ?>
    </select><br />
  </fieldset>
  <fieldset class="submit">
    <input type="button" id="addReset" value="取消" />
    <input type="button" id="addSubmit" value="添加" />
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
  $("#listSubmit").click(function(){
    checkForm($(\'#moduleList\'));
  });  
  $("#addSubmit").click(function(){
    checkForm($(\'#moduleAdd\'));
  });
  $(\'.deleteModule\').click(function(){
    var _this = $(this);
    confirm_msg("确认删除","&emsp;确定要删除该模块么？该操作将不可恢复！",function(){
      location.href=_this.attr("href");
    });
  });
})
</script>
'; ?>