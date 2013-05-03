<?php /* Smarty version 2.6.25, created on 2013-05-03 01:20:04
         compiled from admin/categoryList.html */ ?>
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
  <form id="categoryList" method='post'>
    <fieldset>
      <legend><?php echo $this->_tpl_vars['web_action']; ?>
</legend>
      <table width="100%" cellpadding="0" cellspacing="0">
        <thead>
          <tr>
            <th></th>
            <th>类别名称</th>
            <th>排序</th>
            <th>是否发布</th>
            <th>类别类型</th>
            <th>父类别</th>
          </tr>
        </thead>
        <?php $_from = $this->_tpl_vars['category']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['k'] => $this->_tpl_vars['v']):
?>
        <tr id="category_<?php echo $this->_tpl_vars['v']['cg_id']; ?>
" class="on">
          <td>
            <div class="r">
            <?php if ($this->_tpl_vars['v']['level'] == 0): ?>
              <b class="icon-right"></b>
            <?php else: ?>
              <b class="icon-up" style='margin-left:<?php echo $this->_tpl_vars['v']['level']*15-5; ?>
px;'></b>
            <?php endif; ?>
            <input type="hidden" name="id[]" value="<?php echo $this->_tpl_vars['v']['cg_id']; ?>
" />
          </div>
          </td>
          <td>
            <?php echo $this->_tpl_vars['v']['cg_name']; ?>

          </td>
          <td class="order"><input type="text" checkval="number" value="<?php echo $this->_tpl_vars['v']['cg_order']; ?>
" name="order[]" /></td>
          <td>
          <select id="addCategoryParent" name="public[]" class="switch">
            <option value="0" <?php if ($this->_tpl_vars['v']['cg_public'] == 0): ?>selected="selected"<?php endif; ?>>否</option>
            <option value="1" <?php if ($this->_tpl_vars['v']['cg_public'] == 1 || $this->_tpl_vars['v']['cg_public'] != 0): ?>selected="selected"<?php endif; ?>>是</option>
          </select>
          </td>
          <td><?php echo $this->_tpl_vars['v']['cg_type_name']; ?>
</td>
          <td><?php echo $this->_tpl_vars['v']['cg_parent_name']; ?>
</td>
          <td><div class="r"><div class="do-list"><a href="?act=category&id=<?php echo $this->_tpl_vars['v']['cg_id']; ?>
"><b class="icon-edit"></b>编辑</a>
            <a class="deleteCategory" href="?act=categoryList&do=<?php echo $this->_tpl_vars['v']['cg_id']; ?>
" onclick="return false;"><b class="icon-del"></b>删除</a></div></div></td>
        </tr>
        <?php endforeach; endif; unset($_from); ?>
      </table>
    </fieldset>
    <fieldset class="submit">
      <input type="button" id="listReset" value="取消" />
      <input type="button" id="listSubmit" value="修改" />
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
    checkForm($(\'#categoryList\'));
  });  
  $(\'.deleteCategory\').click(function(){
    var _this = $(this);
    confirm_msg("确认删除","&emsp;确定要删除该类别么？该操作将不可恢复！",function(){
      location.href=_this.attr("href");
    });
  });
})
</script>
'; ?>