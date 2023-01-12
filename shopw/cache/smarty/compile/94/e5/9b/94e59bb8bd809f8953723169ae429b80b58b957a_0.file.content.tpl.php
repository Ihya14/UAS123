<?php
/* Smarty version 4.2.1, created on 2023-01-12 22:23:58
  from 'D:\xampp\htdocs\shopw\admin622ozp8ob\themes\default\template\controllers\cms_content\content.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.2.1',
  'unifunc' => 'content_63c017feccf603_83578966',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '94e59bb8bd809f8953723169ae429b80b58b957a' => 
    array (
      0 => 'D:\\xampp\\htdocs\\shopw\\admin622ozp8ob\\themes\\default\\template\\controllers\\cms_content\\content.tpl',
      1 => 1668409880,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_63c017feccf603_83578966 (Smarty_Internal_Template $_smarty_tpl) {
if ((isset($_smarty_tpl->tpl_vars['cms_breadcrumb']->value))) {?>
	<ul class="breadcrumb cat_bar">
		<?php echo $_smarty_tpl->tpl_vars['cms_breadcrumb']->value;?>

	</ul>
<?php }?>

<?php echo $_smarty_tpl->tpl_vars['content']->value;?>

<?php if ((isset($_smarty_tpl->tpl_vars['url_prev']->value))) {?>
	<?php echo '<script'; ?>
 type="text/javascript">
	$(document).ready(function () {
		var re = /url_preview=(.*)/;
		var url = re.exec(window.location.href);
		if (typeof url !== 'undefined' && url !== null && typeof url[1] !== 'undefined' && url[1] === "1")
			window.open("<?php echo $_smarty_tpl->tpl_vars['url_prev']->value;?>
", "_blank");
	});
	<?php echo '</script'; ?>
>
<?php }
}
}
