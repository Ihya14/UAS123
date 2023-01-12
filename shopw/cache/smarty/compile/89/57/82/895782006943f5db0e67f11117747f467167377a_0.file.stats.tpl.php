<?php
/* Smarty version 4.2.1, created on 2023-01-12 22:18:04
  from 'D:\xampp\htdocs\shopw\admin622ozp8ob\themes\default\template\controllers\stats\stats.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.2.1',
  'unifunc' => 'content_63c0169c85a2e6_25033738',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '895782006943f5db0e67f11117747f467167377a' => 
    array (
      0 => 'D:\\xampp\\htdocs\\shopw\\admin622ozp8ob\\themes\\default\\template\\controllers\\stats\\stats.tpl',
      1 => 1668409880,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_63c0169c85a2e6_25033738 (Smarty_Internal_Template $_smarty_tpl) {
?>
		<div class="panel">
			<?php if ($_smarty_tpl->tpl_vars['module_name']->value) {?>
				<?php if ($_smarty_tpl->tpl_vars['module_instance']->value && $_smarty_tpl->tpl_vars['module_instance']->value->active) {?>
					<?php echo $_smarty_tpl->tpl_vars['hook']->value;?>

				<?php } else { ?>
					<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Module not found'),$_smarty_tpl ) );?>

				<?php }?>
			<?php } else { ?>
				<h3 class="space"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Please select a module from the left column.'),$_smarty_tpl ) );?>
</h3>
			<?php }?>
		</div>
	</div>
</div><?php }
}
