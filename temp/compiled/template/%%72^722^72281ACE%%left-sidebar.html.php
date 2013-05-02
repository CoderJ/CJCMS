<?php /* Smarty version 2.6.25, created on 2013-04-29 17:36:44
         compiled from admin/left-sidebar.html */ ?>
<div class="left-sidebar menu">
  <ul>
    <?php $_from = $this->_tpl_vars['menu']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['k'] => $this->_tpl_vars['v']):
?>
    <li>
      <a href="?act=<?php echo $this->_tpl_vars['v']['md_key']; ?>
" <?php if ($this->_tpl_vars['v']['md_key'] == $this->_tpl_vars['action']): ?>class="active"<?php endif; ?>><?php echo $this->_tpl_vars['v']['md_name']; ?>
</a>
      <?php if ($this->_tpl_vars['v']['children']): ?>
      <ul>
        <?php $_from = $this->_tpl_vars['v']['children']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['ck'] => $this->_tpl_vars['cv']):
?>
        <li>
          <a href="?act=<?php echo $this->_tpl_vars['cv']['md_key']; ?>
"<?php if ($this->_tpl_vars['cv']['md_key'] == $this->_tpl_vars['action']): ?>class="active"<?php endif; ?>><?php echo $this->_tpl_vars['cv']['md_name']; ?>
</a>
        </li>
        <?php endforeach; endif; unset($_from); ?>
      </ul>
      <?php endif; ?>
    </li>
    <?php endforeach; endif; unset($_from); ?>
  </ul>
</div>