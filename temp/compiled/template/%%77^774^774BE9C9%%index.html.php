<?php /* Smarty version 2.6.25, created on 2013-05-25 17:13:51
         compiled from index.html */ ?>
<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => 'header.html', 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => 'shared/slider.tpl', 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
<div class="container">
  <?php $_from = $this->_tpl_vars['index']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['k'] => $this->_tpl_vars['v']):
?>
    <div class="index-module<?php if ($this->_tpl_vars['v']['ic_width'] == 2): ?> double-width<?php endif; ?><?php if ($this->_tpl_vars['v']['ic_width'] == 3): ?> three-width<?php endif; ?><?php if ($this->_tpl_vars['v']['ic_height'] == 2): ?> half-height<?php endif; ?> <?php echo $this->_tpl_vars['v']['categoryInfo']['cg_type']; ?>
-module">
      <div class="module-title"><a href="?act=<?php echo $this->_tpl_vars['v']['categoryInfo']['cg_type']; ?>
&c=<?php echo $this->_tpl_vars['v']['categoryInfo']['cg_id']; ?>
"><?php echo $this->_tpl_vars['v']['categoryInfo']['cg_name']; ?>
</a></div>
      <div class="c"></div>
      <?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "shared/index-module-".($this->_tpl_vars['v']['categoryInfo']['cg_type'])."-".($this->_tpl_vars['v']['ic_model']).".tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
    </div>
  <?php endforeach; endif; unset($_from); ?>
      <?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "shared/index-model-custom.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
  <div class="c"></div>
</div>
<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => 'footer.html', 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>