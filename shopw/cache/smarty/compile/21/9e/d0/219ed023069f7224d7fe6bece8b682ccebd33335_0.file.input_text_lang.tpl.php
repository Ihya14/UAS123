<?php
/* Smarty version 4.2.1, created on 2023-01-12 14:26:42
  from 'D:\xampp\htdocs\shopw\admin622ozp8ob\themes\default\template\controllers\products\input_text_lang.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.2.1',
  'unifunc' => 'content_63bfa8224420b4_66027933',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '219ed023069f7224d7fe6bece8b682ccebd33335' => 
    array (
      0 => 'D:\\xampp\\htdocs\\shopw\\admin622ozp8ob\\themes\\default\\template\\controllers\\products\\input_text_lang.tpl',
      1 => 1668409880,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_63bfa8224420b4_66027933 (Smarty_Internal_Template $_smarty_tpl) {
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['languages']->value, 'language');
$_smarty_tpl->tpl_vars['language']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['language']->value) {
$_smarty_tpl->tpl_vars['language']->do_else = false;
?>
	<?php if (count($_smarty_tpl->tpl_vars['languages']->value) > 1) {?>
	<div class="translatable-field row lang-<?php echo $_smarty_tpl->tpl_vars['language']->value['id_lang'];?>
">
		<div class="col-lg-9">
	<?php }?>
		<?php if ((isset($_smarty_tpl->tpl_vars['maxchar']->value))) {?>
		<div class="input-group">
			<span id="<?php echo $_smarty_tpl->tpl_vars['input_name']->value;?>
_<?php echo $_smarty_tpl->tpl_vars['language']->value['id_lang'];?>
_counter" class="input-group-addon">
				<span class="text-count-down"><?php echo $_smarty_tpl->tpl_vars['maxchar']->value;?>
</span>
			</span>
			<?php }?>
			<input type="text"
			id="<?php echo $_smarty_tpl->tpl_vars['input_name']->value;?>
_<?php echo $_smarty_tpl->tpl_vars['language']->value['id_lang'];?>
"
			class="form-control <?php if ((isset($_smarty_tpl->tpl_vars['input_class']->value))) {
echo $_smarty_tpl->tpl_vars['input_class']->value;?>
 <?php }?>"
			name="<?php echo $_smarty_tpl->tpl_vars['input_name']->value;?>
_<?php echo $_smarty_tpl->tpl_vars['language']->value['id_lang'];?>
"
			value="<?php if ((isset($_smarty_tpl->tpl_vars['input_value']->value[$_smarty_tpl->tpl_vars['language']->value['id_lang']]))) {
echo (($tmp = smarty_modifier_htmlentitiesUTF8($_smarty_tpl->tpl_vars['input_value']->value[$_smarty_tpl->tpl_vars['language']->value['id_lang']]) ?? null)===null||$tmp==='' ? '' ?? null : $tmp);
}?>"
			onkeyup="if (isArrowKey(event)) return ;updateFriendlyURL();"
			onblur="updateLinkRewrite();"
			<?php if ((isset($_smarty_tpl->tpl_vars['required']->value))) {?> required="required"<?php }?>
			<?php if ((isset($_smarty_tpl->tpl_vars['maxchar']->value))) {?> data-maxchar="<?php echo $_smarty_tpl->tpl_vars['maxchar']->value;?>
"<?php }?>
			<?php if ((isset($_smarty_tpl->tpl_vars['maxlength']->value))) {?> maxlength="<?php echo $_smarty_tpl->tpl_vars['maxlength']->value;?>
"<?php }?> />
			<?php if ((isset($_smarty_tpl->tpl_vars['maxchar']->value))) {?>
		</div>
		<?php }?>
	<?php if (count($_smarty_tpl->tpl_vars['languages']->value) > 1) {?>
		</div>
		<div class="col-lg-2">
			<button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown" tabindex="-1">
				<?php echo $_smarty_tpl->tpl_vars['language']->value['iso_code'];?>

				<span class="caret"></span>
			</button>
			<ul class="dropdown-menu">
				<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['languages']->value, 'language');
$_smarty_tpl->tpl_vars['language']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['language']->value) {
$_smarty_tpl->tpl_vars['language']->do_else = false;
?>
				<li>
					<a href="javascript:tabs_manager.allow_hide_other_languages = false;hideOtherLanguage(<?php echo $_smarty_tpl->tpl_vars['language']->value['id_lang'];?>
);"><?php echo $_smarty_tpl->tpl_vars['language']->value['name'];?>
</a>
				</li>
				<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
			</ul>
		</div>
	</div>
	<?php }
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);
if ((isset($_smarty_tpl->tpl_vars['maxchar']->value))) {
echo '<script'; ?>
 type="text/javascript">
$(document).ready(function(){
<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['languages']->value, 'language');
$_smarty_tpl->tpl_vars['language']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['language']->value) {
$_smarty_tpl->tpl_vars['language']->do_else = false;
?>
	countDown($("#<?php echo $_smarty_tpl->tpl_vars['input_name']->value;?>
_<?php echo $_smarty_tpl->tpl_vars['language']->value['id_lang'];?>
"), $("#<?php echo $_smarty_tpl->tpl_vars['input_name']->value;?>
_<?php echo $_smarty_tpl->tpl_vars['language']->value['id_lang'];?>
_counter"));
<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
});
<?php echo '</script'; ?>
>
<?php }
}
}
