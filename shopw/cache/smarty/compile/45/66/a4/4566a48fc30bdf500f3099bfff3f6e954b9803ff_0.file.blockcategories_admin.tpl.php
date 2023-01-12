<?php
/* Smarty version 4.2.1, created on 2023-01-12 14:31:20
  from 'D:\xampp\htdocs\shopw\modules\blockcategories\views\blockcategories_admin.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.2.1',
  'unifunc' => 'content_63bfa9383d9751_02795742',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '4566a48fc30bdf500f3099bfff3f6e954b9803ff' => 
    array (
      0 => 'D:\\xampp\\htdocs\\shopw\\modules\\blockcategories\\views\\blockcategories_admin.tpl',
      1 => 1574233420,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_63bfa9383d9751_02795742 (Smarty_Internal_Template $_smarty_tpl) {
?>
<div class="form-group">
	<label class="control-label col-lg-3">
		<span class="label-tooltip" data-toggle="tooltip" data-html="true" title="" data-original-title="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'In the default theme, these images will be displayed in the top horizontal menu; but only if the category is one of the first level (see Top horizontal menu module for more info).','mod'=>'blockcategories'),$_smarty_tpl ) );?>
">
			<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Menu thumbnails','mod'=>'blockcategories'),$_smarty_tpl ) );?>

		</span>
	</label>
	<div class="col-lg-4">
		<?php echo $_smarty_tpl->tpl_vars['helper']->value;?>

	</div>
	<div class="col-lg-6 col-lg-offset-3">
		<div class="help-block"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Recommended dimensions (for the default theme): %1spx x %2spx','sprintf'=>array($_smarty_tpl->tpl_vars['format']->value['width'],$_smarty_tpl->tpl_vars['format']->value['height'])),$_smarty_tpl ) );?>
</div>
	</div>
</div>
<?php }
}
