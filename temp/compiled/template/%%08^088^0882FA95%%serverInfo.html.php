<?php /* Smarty version 2.6.25, created on 2013-05-01 21:37:11
         compiled from admin/serverInfo.html */ ?>
<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => 'admin/header.html', 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
<div class="container">
  <fieldset>
    <legend><?php echo $this->_tpl_vars['web_action']; ?>
</legend>
    <table width="100%">
      <tbody>
    <?php $_from = $this->_tpl_vars['serverInfo']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['k'] => $this->_tpl_vars['v']):
?>
      <tr><td><?php echo $this->_tpl_vars['k']; ?>
</td><td><?php echo $this->_tpl_vars['v']; ?>
</td></tr>
    <?php endforeach; endif; unset($_from); ?>  
      </tbody>
    </table>
</fieldset>
</div>
<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => 'admin/footer.html', 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>