<?php
/* Smarty version 4.2.1, created on 2023-01-12 13:39:39
  from 'D:\xampp\htdocs\shopw\admin622ozp8ob\themes\default\template\controllers\modules\content.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.2.1',
  'unifunc' => 'content_63bf9d1bcff666_24145388',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'd5d79deaf81f2a33e478b6dd66ca1e702a424a76' => 
    array (
      0 => 'D:\\xampp\\htdocs\\shopw\\admin622ozp8ob\\themes\\default\\template\\controllers\\modules\\content.tpl',
      1 => 1668409880,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:controllers/modules/js.tpl' => 1,
    'file:controllers/modules/page.tpl' => 1,
  ),
),false)) {
function content_63bf9d1bcff666_24145388 (Smarty_Internal_Template $_smarty_tpl) {
if ((isset($_smarty_tpl->tpl_vars['module_content']->value))) {?>
	<?php echo $_smarty_tpl->tpl_vars['module_content']->value;?>

<?php } else { ?>
	<?php if (!(isset($_GET['configure']))) {?>
		<?php $_smarty_tpl->_subTemplateRender('file:controllers/modules/js.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
		<?php $_smarty_tpl->_subTemplateRender('file:controllers/modules/page.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
	<?php }
}
}
}
