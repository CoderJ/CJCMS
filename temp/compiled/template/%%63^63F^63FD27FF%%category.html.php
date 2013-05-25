<?php /* Smarty version 2.6.25, created on 2013-05-21 22:49:33
         compiled from admin/category.html */ ?>
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

  <form id="addCategory" method='post'>
    <fieldset>
      <legend><?php echo $this->_tpl_vars['web_action']; ?>
</legend>
      <label for="addCategoryName">类别名称: </label>
      <input id="addCategoryName" type="text" name="name" checkVal="notnull" value="<?php if ($this->_tpl_vars['categoryInfo']): ?><?php echo $this->_tpl_vars['categoryInfo']['cg_name']; ?>
<?php endif; ?>" /><br />
      <label for="addCategoryType">类别类型: </label>
      <select id="addCategoryType" name="type" checkVal="notNull">
        <?php $_from = $this->_tpl_vars['categoryType']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['k'] => $this->_tpl_vars['v']):
?>
          <option value="<?php echo $this->_tpl_vars['k']; ?>
" <?php if ($this->_tpl_vars['categoryInfo']['cg_type'] == $this->_tpl_vars['k']): ?>selected="selected"<?php endif; ?>><?php echo $this->_tpl_vars['v']; ?>
</option>
        <?php endforeach; endif; unset($_from); ?>
      </select><br />    
      <label for="addCategoryParent">父类别: </label>
      <select id="addCategoryParent" name="parent" checkVal="notNull">
        <option value="0">无</option>
        <?php $_from = $this->_tpl_vars['allCategory']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['k'] => $this->_tpl_vars['v']):
?>
        <option value="<?php echo $this->_tpl_vars['v']['cg_id']; ?>
" <?php if ($this->_tpl_vars['categoryInfo']['cg_parent'] == $this->_tpl_vars['v']['cg_id']): ?>selected="selected"<?php endif; ?>><?php echo $this->_tpl_vars['v']['cg_name']; ?>
</option>
        <?php endforeach; endif; unset($_from); ?>
      </select><br />
      <label for="addCategoryPublic">是否发布: </label>
      <select id="addCategoryPublic" name="public" class="switch">
        <option value="0" <?php if ($this->_tpl_vars['categoryInfo']['cg_public'] == 0): ?>selected="selected"<?php endif; ?>>否</option>
        <option value="1" <?php if ($this->_tpl_vars['categoryInfo']['cg_public'] == 1 || $this->_tpl_vars['categoryInfo']['cg_public'] != 0): ?>selected="selected"<?php endif; ?>>是</option>
      </select>
      <br />
      <label for="addCategoryShow">显示方式: </label>
      <select id="addCategoryShow" name="show">
        <option value="1" <?php if ($this->_tpl_vars['categoryInfo']['cg_show'] != 0 && $this->_tpl_vars['categoryInfo']['cg_show'] != 2): ?>selected="selected"<?php endif; ?>>只显示本类别内容</option>
        <option value="0" <?php if ($this->_tpl_vars['categoryInfo']['cg_show'] == 0): ?>selected="selected"<?php endif; ?>>直接跳转到子类别</option>
        <option value="2" <?php if ($this->_tpl_vars['categoryInfo']['cg_show'] == 2): ?>selected="selected"<?php endif; ?>>显示本类别及其子类的内容</option>
      </select>
      <br />   
      <label for="addCategoryShowInNav">在导航中显示: </label>
      <select id="addCategoryShowInNav" name="show_in_nav" class="switch">
        <option value="0" <?php if ($this->_tpl_vars['categoryInfo']['cg_public'] == 0): ?>selected="selected"<?php endif; ?>>否</option>
        <option value="1" <?php if ($this->_tpl_vars['categoryInfo']['cg_public'] == 1 || $this->_tpl_vars['categoryInfo']['cg_public'] != 0): ?>selected="selected"<?php endif; ?>>是</option>
      </select>
      <br />
      <label for="addCategoryNav">导航位置: </label>
      <select id="addCategoryNav" name="nav">
        <option value="0" <?php if ($this->_tpl_vars['categoryInfo']['cg_nav'] == 0): ?>selected="selected"<?php endif; ?>>主导航</option>
        <option value="1" <?php if ($this->_tpl_vars['categoryInfo']['cg_nav'] == 1): ?>selected="selected"<?php endif; ?>>次导航</option>
        <option value="2" <?php if ($this->_tpl_vars['categoryInfo']['cg_nav'] == 2): ?>selected="selected"<?php endif; ?>>底部导航</option>
      </select>
      <br />
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
  $(\'#pageSubmit\').click(function(){
    checkForm($(\'#addCategory\'));
  });
})
</script>
'; ?>