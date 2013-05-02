<?php /* Smarty version 2.6.25, created on 2011-08-10 07:14:03
         compiled from admin/menu.html */ ?>
<table width="100%" cellpadding="0" cellspacing="0" border="0" height="100%" ondblclick="cancel_handle()">
	<tr valign="top"><td colspan="2" height="32" style="overflow:hidden">
    <div id="menu_windows_toobar" class="windows_toobar">
    	<div class="btn" onclick="refresh_menu()">刷新</div>
    	<div class="btn" onclick="add_menu()">新建</div>
        
    </div>
</td></tr>
	<tr><td style="border-right:1px solid #D6E5F5; width:200px; padding-top:20px;" valign="top">
    	<li class="left_menu" onClick="get_right_menu('')"> <a id="menu_btn_menu" class="menu_btn" href="#" onClick="show_menu_children('menu')">&or;</a>菜单</li>
        	<div id="left_menu_menu">
            <?php $_from = $this->_tpl_vars['act_menu']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['act_menu_left']):
?>
    			<li class="left_menu" onClick="get_right_menu(<?php echo $this->_tpl_vars['act_menu_left']['menu_id']; ?>
)">&emsp;<a id="menu_btn_<?php echo $this->_tpl_vars['act_menu_left']['menu_id']; ?>
" class="menu_btn" href="#" onClick="show_menu_children('<?php echo $this->_tpl_vars['act_menu_left']['menu_id']; ?>
')">&gt;</a><?php echo $this->_tpl_vars['act_menu_left']['menu_name']; ?>
</li>
                	<div id="left_menu_<?php echo $this->_tpl_vars['act_menu_left']['menu_id']; ?>
" style="display:none">
                        <?php $_from = $this->_tpl_vars['act_menu_left']['children']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['act_menu_left_chi']):
?>
                        <li class="left_menu">&emsp;&emsp;<a id="menu_btn_<?php echo $this->_tpl_vars['act_menu_left_chi']['menu_url']; ?>
" class="menu_btn" href="#" onClick="show_menu_children()">&gt;</a><?php echo $this->_tpl_vars['act_menu_left_chi']['menu_name']; ?>
</li>
                        <?php endforeach; endif; unset($_from); ?>
                    </div>
            <?php endforeach; endif; unset($_from); ?>
            </div>
    </td>
    <td valign="top" id="right_menu">
    

<table class="windows_table">
	<tr class="table_title"><td>名称</td><td>动作</td><td>图标</td><td>窗口宽</td><td>窗口高</td><td>子菜单</td><td>操作</td></tr>
<?php $_from = $this->_tpl_vars['act_menu']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['act_menu']):
?>
	<tr id="menu_content_<?php echo $this->_tpl_vars['act_menu']['menu_id']; ?>
" class="table_content menu_father"><td valign="top" id="<?php echo $this->_tpl_vars['act_menu']['menu_id']; ?>
_name" onclick="editval('<?php echo $this->_tpl_vars['act_menu']['menu_id']; ?>
','name')"><?php echo $this->_tpl_vars['act_menu']['menu_name']; ?>
</td><td id="<?php echo $this->_tpl_vars['act_menu']['menu_id']; ?>
_url" onclick="editval('<?php echo $this->_tpl_vars['act_menu']['menu_id']; ?>
','url')"><?php echo $this->_tpl_vars['act_menu']['menu_url']; ?>
</td><td id="<?php echo $this->_tpl_vars['act_menu']['menu_id']; ?>
_icon" onclick="editval('<?php echo $this->_tpl_vars['act_menu']['menu_id']; ?>
','icon')"><?php echo $this->_tpl_vars['act_menu']['menu_icon']; ?>
</td><td id="<?php echo $this->_tpl_vars['act_menu']['menu_id']; ?>
_width" onclick="editval('<?php echo $this->_tpl_vars['act_menu']['menu_id']; ?>
','width')"><?php echo $this->_tpl_vars['act_menu']['menu_width']; ?>
</td><td id="<?php echo $this->_tpl_vars['act_menu']['menu_id']; ?>
_height" onclick="editval('<?php echo $this->_tpl_vars['act_menu']['menu_id']; ?>
','height')"><?php echo $this->_tpl_vars['act_menu']['menu_height']; ?>
</td><td><div  class="show_chi_btn"  onClick="get_right_menu(<?php echo $this->_tpl_vars['act_menu']['menu_id']; ?>
)"> &gt;</div></td><td><div  class="show_chi_btn"  onClick="handle(<?php echo $this->_tpl_vars['act_menu']['menu_id']; ?>
)">+</div></td></tr>
    	<?php $_from = $this->_tpl_vars['act_menu']['children']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['act_menu_chi']):
?>
        	<tr id="menu_content_<?php echo $this->_tpl_vars['act_menu_chi']['menu_id']; ?>
" class="table_content menu_chi_<?php echo $this->_tpl_vars['act_menu']['menu_id']; ?>
 menu_children" style="display:none"><td valign="top" id="<?php echo $this->_tpl_vars['act_menu_chi']['menu_id']; ?>
_name" onclick="editval('<?php echo $this->_tpl_vars['act_menu_chi']['menu_id']; ?>
','name')"><?php echo $this->_tpl_vars['act_menu_chi']['menu_name']; ?>
</td><td id="<?php echo $this->_tpl_vars['act_menu_chi']['menu_id']; ?>
_url" onclick="editval('<?php echo $this->_tpl_vars['act_menu_chi']['menu_id']; ?>
','url')"><?php echo $this->_tpl_vars['act_menu_chi']['menu_url']; ?>
</td><td id="<?php echo $this->_tpl_vars['act_menu_chi']['menu_id']; ?>
_icon" onclick="editval('<?php echo $this->_tpl_vars['act_menu_chi']['menu_id']; ?>
','icon')"><?php echo $this->_tpl_vars['act_menu_chi']['menu_icon']; ?>
</td><td id="<?php echo $this->_tpl_vars['act_menu_chi']['menu_id']; ?>
_width" onclick="editval('<?php echo $this->_tpl_vars['act_menu_chi']['menu_id']; ?>
','width')"><?php echo $this->_tpl_vars['act_menu_chi']['menu_width']; ?>
</td><td id="<?php echo $this->_tpl_vars['act_menu_chi']['menu_id']; ?>
_height" onclick="editval('<?php echo $this->_tpl_vars['act_menu_chi']['menu_id']; ?>
','height')"><?php echo $this->_tpl_vars['act_menu_chi']['menu_height']; ?>
</td><td></td><td><div  class="show_chi_btn"  onClick="handle(<?php echo $this->_tpl_vars['act_menu_chi']['menu_id']; ?>
)">+</div></td></tr>

    	<?php endforeach; endif; unset($_from); ?>

<?php endforeach; endif; unset($_from); ?>
</table>
    
    </td></tr>
</table>