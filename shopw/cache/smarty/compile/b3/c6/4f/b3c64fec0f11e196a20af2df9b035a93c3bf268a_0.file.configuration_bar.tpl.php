<?php
/* Smarty version 4.2.1, created on 2023-01-12 13:44:58
  from 'D:\xampp\htdocs\shopw\admin622ozp8ob\themes\default\template\controllers\modules\configuration_bar.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.2.1',
  'unifunc' => 'content_63bf9e5ad96ea9_91049520',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'b3c64fec0f11e196a20af2df9b035a93c3bf268a' => 
    array (
      0 => 'D:\\xampp\\htdocs\\shopw\\admin622ozp8ob\\themes\\default\\template\\controllers\\modules\\configuration_bar.tpl',
      1 => 1668409880,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_63bf9e5ad96ea9_91049520 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'D:\\xampp\\htdocs\\shopw\\vendor\\smarty\\smarty\\libs\\plugins\\modifier.regex_replace.php','function'=>'smarty_modifier_regex_replace',),));
?>

<?php $_smarty_tpl->_assignInScope('module_name', htmlspecialchars((string)$_smarty_tpl->tpl_vars['module_name']->value, ENT_QUOTES, 'UTF-8', true));
$_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, 'default', null, null);
echo (('/&module_name=').($_smarty_tpl->tpl_vars['module_name']->value)).('/');
$_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);
if ((isset($_smarty_tpl->tpl_vars['display_multishop_checkbox']->value)) && $_smarty_tpl->tpl_vars['display_multishop_checkbox']->value) {?>
<div class="bootstrap panel">
	<h3><i class="icon-cogs"></i> <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Configuration'),$_smarty_tpl ) );?>
</h3>
	<input type="checkbox" name="activateModule" value="1"<?php if ($_smarty_tpl->tpl_vars['module']->value->isEnabledForShopContext()) {?> checked="checked"<?php }?> 
		onclick="location.href = '<?php echo smarty_modifier_regex_replace($_smarty_tpl->tpl_vars['current_url']->value,$_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'default'),'');?>
&amp;module_name=<?php echo $_smarty_tpl->tpl_vars['module_name']->value;?>
&amp;enable=' + (($(this).attr('checked')) ? 1 : 0);" />
	<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Activate module for this shop context: %s.','sprintf'=>$_smarty_tpl->tpl_vars['shop_context']->value),$_smarty_tpl ) );?>

</div>
<?php }
}
}
