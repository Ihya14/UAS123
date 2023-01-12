<?php
/* Smarty version 4.2.1, created on 2023-01-12 14:26:47
  from 'D:\xampp\htdocs\shopw\modules\thememanager\views\templates\hook\templateSelectForm.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.2.1',
  'unifunc' => 'content_63bfa827aede22_54708850',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '06a28a15b84a44761f470accefe949a73120ad6e' => 
    array (
      0 => 'D:\\xampp\\htdocs\\shopw\\modules\\thememanager\\views\\templates\\hook\\templateSelectForm.tpl',
      1 => 1562349297,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_63bfa827aede22_54708850 (Smarty_Internal_Template $_smarty_tpl) {
if ($_smarty_tpl->tpl_vars['entity']->value == 'product') {?>
<div id="product-modulethememanager" class="panel product-tab">

	<input type="hidden" name="submitted_tabs[]" value="ModuleThemeManager">
	<h3><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Choose a template for this','mod'=>'thememanager'),$_smarty_tpl ) );?>
 <?php echo $_smarty_tpl->tpl_vars['entity']->value;?>
</h3>
<?php }?>
	<div class="form-group">
		<label class="control-label col-lg-3"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Template','mod'=>'thememanager'),$_smarty_tpl ) );?>
</label>
		<div class="col-lg-9">
			<select name="product_template">
				<option value="">--</option>
				<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['product_templates']->value, 'template');
$_smarty_tpl->tpl_vars['template']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['template']->value) {
$_smarty_tpl->tpl_vars['template']->do_else = false;
?>
					<option value="<?php echo $_smarty_tpl->tpl_vars['template']->value;?>
" <?php if ($_smarty_tpl->tpl_vars['template']->value == $_smarty_tpl->tpl_vars['chosen_template']->value) {?>selected="selected"<?php }?>><?php echo $_smarty_tpl->tpl_vars['template']->value;?>
</option>
				<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
			</select>
		</div>
	</div>
<?php if ($_smarty_tpl->tpl_vars['entity']->value == 'product') {?>
	<div class="panel-footer">
		<a href="<?php echo $_smarty_tpl->tpl_vars['link']->value->getAdminLink('AdminProducts');?>
" class="btn btn-default"><i class="process-icon-cancel"></i> <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Cancel'),$_smarty_tpl ) );?>
</a>
		<button type="submit" name="submitAddproduct" class="btn btn-default pull-right"><i class="process-icon-save"></i> <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Save'),$_smarty_tpl ) );?>
</button>
		<button type="submit" name="submitAddproductAndStay" class="btn btn-default pull-right"><i class="process-icon-save"></i> <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Save and stay'),$_smarty_tpl ) );?>
</button>
	</div>

</div>
<?php }
}
}
