<?php /* Smarty version 2.6.25, created on 2013-05-04 20:57:21
         compiled from admin/contentList.html */ ?>
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
  <form id="filter" method="get">
    <fieldset>
      <legend>内容筛选</legend>
      <div class="filterItem">
        <label for="articleType">类型: </label>
        <select id="articleType" name="type" checkVal="notNull">
          <option value="all"  <?php if (! $this->_tpl_vars['type']): ?>selected="selected"<?php endif; ?>>全部</option>
          <?php $_from = $this->_tpl_vars['categoryType']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['k'] => $this->_tpl_vars['v']):
?>
          <option value="<?php echo $this->_tpl_vars['k']; ?>
"  <?php if ($this->_tpl_vars['type'] == $this->_tpl_vars['k']): ?>selected="selected"<?php endif; ?>><?php echo $this->_tpl_vars['v']; ?>
</option>
          <?php endforeach; endif; unset($_from); ?>
        </select>
      </div>
      <div class="filterItem">
        <label for="articleCategory">类别: </label>
        <select id="articleCategory" name="c" checkVal="notNull">
          <option value="all"  <?php if (! $this->_tpl_vars['category']): ?>selected="selected"<?php endif; ?>>全部</option>
          <?php $_from = $this->_tpl_vars['categorys']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['k'] => $this->_tpl_vars['v']):
?>
          <option value="<?php echo $this->_tpl_vars['v']['cg_id']; ?>
"  <?php if ($this->_tpl_vars['category'] == $this->_tpl_vars['v']['cg_id']): ?>selected="selected"<?php endif; ?>><?php echo $this->_tpl_vars['v']['cg_name']; ?>
</option>
          <?php endforeach; endif; unset($_from); ?>
        </select>
      </div>
      <div class="filterItem">
        <label for="articleStatus">状态: </label>
        <select id="articleStatus" name="s" checkVal="notNull">
          <option value="all"  <?php if (! $this->_tpl_vars['status']): ?>selected="selected"<?php endif; ?>>全部</option>
          <?php $_from = $this->_tpl_vars['articleStatus']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['k'] => $this->_tpl_vars['v']):
?>
          <option value="<?php echo $this->_tpl_vars['k']; ?>
"  <?php if ($this->_tpl_vars['status'] == $this->_tpl_vars['k']): ?>selected="selected"<?php endif; ?>><?php echo $this->_tpl_vars['v']; ?>
</option>
          <?php endforeach; endif; unset($_from); ?>
        </select>
      </div>
      <div class="filterItem long">
        <label for="articleStatus">搜索: </label>
        <input id="articleSearchInput" type="text" name="k" value="<?php if ($this->_tpl_vars['keyword']): ?><?php echo $this->_tpl_vars['keyword']; ?>
<?php endif; ?>" /> 
        <input type="button" id="articleSearch" value="搜索" />
      </div>
      <input type="hidden" name="p" value="<?php if ($this->_tpl_vars['page']): ?><?php echo $this->_tpl_vars['page']; ?>
<?php endif; ?>" /> 
      <input type="hidden" name="act" value="<?php if ($this->_tpl_vars['action']): ?><?php echo $this->_tpl_vars['action']; ?>
<?php endif; ?>" /> 
      <div class="c"></div>
    </fieldset>
  </form>
  <form id="categoryList" method='post'>
    <fieldset>
      <legend><?php echo $this->_tpl_vars['web_action']; ?>
</legend>
      <table width="100%" cellpadding="0" cellspacing="0">
        <thead>
          <tr>
            <th>标题</th>
            <th>作者</th>
            <th>发布日期</th>
            <th>类别</th>
            <th>状态</th>
            <th>更新时间</th>
            <th>创建时间</th>
            <th></th>
          </tr>
        </thead>
        <tbody>
        <?php $_from = $this->_tpl_vars['articles']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['k'] => $this->_tpl_vars['v']):
?>
        <tr id="article_<?php echo $this->_tpl_vars['v']['cg_id']; ?>
">
          <td><?php echo $this->_tpl_vars['v']['a_title']; ?>
</td>
          <td><?php echo $this->_tpl_vars['v']['author_name']; ?>
</td>
          <td><?php echo $this->_tpl_vars['v']['a_date']; ?>
</td>
          <td><?php echo $this->_tpl_vars['v']['category_name']; ?>
</td>
          <td><?php echo $this->_tpl_vars['v']['status']; ?>
</td>
          <td><?php echo $this->_tpl_vars['v']['a_updateTime']; ?>
</td>
          <td><?php echo $this->_tpl_vars['v']['a_creatTime']; ?>
</td>
          <td><div class="r"><div class="do-list"><a href="?act=<?php echo $this->_tpl_vars['v']['type']; ?>
&id=<?php echo $this->_tpl_vars['v']['a_id']; ?>
"><b class="icon-edit"></b>编辑</a>
            <a class="deleteCategory" href="?act=contentList&do=<?php echo $this->_tpl_vars['v']['a_id']; ?>
" onclick="return false;"><b class="icon-del"></b>删除</a></div></div></td>
        </tr>
        <?php endforeach; endif; unset($_from); ?>
        </tbody>
        <tfoot>
          <tr><td class="pagenav" colspan="8">
            <?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => 'shared/pagenav.tpl', 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
          </td></tr>
        </tfoot>
      </table>
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
  $(\'#articleType\').selectChange(function(){
    $(\'#filter\').submit();
  });
  $(\'#articleCategory\').selectChange(function(){
    $(\'#filter\').submit();
  });
  $(\'#articleStatus\').selectChange(function(){
    $(\'#filter\').submit();
  });
  $(\'#articleSearch\').click(function(){
    $(\'#filter\').submit();
  });
  $(\'.deleteCategory\').click(function(){
    var _this = $(this);
    confirm_msg("确认删除","&emsp;确定要删除该文章么？该操作将不可恢复！",function(){
      location.href=_this.attr("href");
    });
  });
})
</script>
'; ?>