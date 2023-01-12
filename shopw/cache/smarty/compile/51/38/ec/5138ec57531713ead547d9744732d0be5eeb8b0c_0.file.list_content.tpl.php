<?php
/* Smarty version 4.2.1, created on 2023-01-12 22:09:52
  from 'D:\xampp\htdocs\shopw\admin622ozp8ob\themes\default\template\controllers\currencies\helpers\list\list_content.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.2.1',
  'unifunc' => 'content_63c014b0e0af75_21014606',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '5138ec57531713ead547d9744732d0be5eeb8b0c' => 
    array (
      0 => 'D:\\xampp\\htdocs\\shopw\\admin622ozp8ob\\themes\\default\\template\\controllers\\currencies\\helpers\\list\\list_content.tpl',
      1 => 1668409880,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_63c014b0e0af75_21014606 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_208179754663c014b0d60589_55443828', "td_content");
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, "helpers/list/list_content.tpl");
}
/* {block "default_field"} */
class Block_140711115263c014b0df7754_72939473 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
--<?php
}
}
/* {/block "default_field"} */
/* {block "td_content"} */
class Block_208179754663c014b0d60589_55443828 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'td_content' => 
  array (
    0 => 'Block_208179754663c014b0d60589_55443828',
  ),
  'default_field' => 
  array (
    0 => 'Block_140711115263c014b0df7754_72939473',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

	<?php if ((isset($_smarty_tpl->tpl_vars['params']->value['prefix']))) {
echo mb_convert_encoding(htmlspecialchars((string)$_smarty_tpl->tpl_vars['params']->value['prefix'], ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');
}?>
	<?php if ((isset($_smarty_tpl->tpl_vars['params']->value['badge_success'])) && $_smarty_tpl->tpl_vars['params']->value['badge_success'] && (isset($_smarty_tpl->tpl_vars['tr']->value['badge_success'])) && $_smarty_tpl->tpl_vars['tr']->value['badge_success'] == $_smarty_tpl->tpl_vars['params']->value['badge_success']) {?><span class="badge badge-success"><?php }
if ((isset($_smarty_tpl->tpl_vars['params']->value['badge_warning'])) && $_smarty_tpl->tpl_vars['params']->value['badge_warning'] && (isset($_smarty_tpl->tpl_vars['tr']->value['badge_warning'])) && $_smarty_tpl->tpl_vars['tr']->value['badge_warning'] == $_smarty_tpl->tpl_vars['params']->value['badge_warning']) {?>
	<span class="badge badge-warning"><?php }
if ((isset($_smarty_tpl->tpl_vars['params']->value['badge_danger'])) && $_smarty_tpl->tpl_vars['params']->value['badge_danger'] && (isset($_smarty_tpl->tpl_vars['tr']->value['badge_danger'])) && $_smarty_tpl->tpl_vars['tr']->value['badge_danger'] == $_smarty_tpl->tpl_vars['params']->value['badge_danger']) {?>
	<span class="badge badge-danger"><?php }
if ((isset($_smarty_tpl->tpl_vars['params']->value['color'])) && (isset($_smarty_tpl->tpl_vars['tr']->value[$_smarty_tpl->tpl_vars['params']->value['color']]))) {?>
	<span class="label color_field"
		  style="background-color:<?php echo mb_convert_encoding(htmlspecialchars((string)$_smarty_tpl->tpl_vars['tr']->value[$_smarty_tpl->tpl_vars['params']->value['color']], ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
;color:<?php if (Tools::getBrightness($_smarty_tpl->tpl_vars['tr']->value[$_smarty_tpl->tpl_vars['params']->value['color']]) < 128) {?>white<?php } else { ?>#383838<?php }?>">
<?php }?>
	<?php if ((isset($_smarty_tpl->tpl_vars['tr']->value[$_smarty_tpl->tpl_vars['key']->value]))) {?>
		<?php if ($_smarty_tpl->tpl_vars['params']->value['type'] == 'fx_service') {?>
			<div>
				<?php $_smarty_tpl->_assignInScope('services', CurrencyRateModule::getServices($_smarty_tpl->tpl_vars['tr']->value['id_currency'],$_smarty_tpl->tpl_vars['tr']->value[$_smarty_tpl->tpl_vars['key']->value]));?>
				<?php if (is_array($_smarty_tpl->tpl_vars['services']->value) && count($_smarty_tpl->tpl_vars['services']->value)) {?>
					<select id="fx_service_<?php echo intval($_smarty_tpl->tpl_vars['tr']->value['id_currency']);?>
" name="<?php echo mb_convert_encoding(htmlspecialchars((string)$_smarty_tpl->tpl_vars['key']->value, ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
">
						<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['services']->value, 'service');
$_smarty_tpl->tpl_vars['service']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['service']->value) {
$_smarty_tpl->tpl_vars['service']->do_else = false;
?>
							<option value="<?php echo intval($_smarty_tpl->tpl_vars['service']->value['id_module']);?>
"<?php if ($_smarty_tpl->tpl_vars['service']->value['selected']) {?> selected="selected"<?php }?>><?php echo mb_convert_encoding(htmlspecialchars((string)$_smarty_tpl->tpl_vars['service']->value['display_name'], ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
</option>
						<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
					</select>
					<?php echo '<script'; ?>
 type="text/javascript">
						$(document).ready(function() {
							$('#fx_service_<?php echo intval($_smarty_tpl->tpl_vars['tr']->value['id_currency']);?>
').change(function () {
								console.log($(this));
								$.ajax({
									url: 'index.php?controller=AdminCurrencies&token=' + window.token,
									dataType: 'JSON',
									type: 'POST',
									data: {
										ajax: true,
										action: 'updateFxService',
										idModule: parseInt($(this).val(), 10),
										idCurrency: <?php echo intval($_smarty_tpl->tpl_vars['tr']->value['id_currency']);?>

									},
									success: function (response) {
										if (response.success) {
											showSuccessMessage('<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Successfully changed','js'=>1),$_smarty_tpl ) );?>
');
										} else {
											showErrorMessage('<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Could not change the fx service','js'=>1),$_smarty_tpl ) );?>
');
										}
									},
									error: function () {
										showErrorMessage('<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Could not change the fx service','js'=>1),$_smarty_tpl ) );?>
');
									}
								});
							});
						});
					<?php echo '</script'; ?>
>
					<?php } else { ?>
					---
				<?php }?>
			</div>
			<div class="show-xs show-sm hidden-md hidden-lg hidden-xl">
				<?php echo mb_convert_encoding(htmlspecialchars((string)$_smarty_tpl->tpl_vars['tr']->value[$_smarty_tpl->tpl_vars['key']->value], ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>

			</div>
		<?php } elseif ((isset($_smarty_tpl->tpl_vars['params']->value['active']))) {?>
			<?php echo $_smarty_tpl->tpl_vars['tr']->value[$_smarty_tpl->tpl_vars['key']->value];?>

		<?php } elseif ((isset($_smarty_tpl->tpl_vars['params']->value['activeVisu']))) {?>
			<?php if ($_smarty_tpl->tpl_vars['tr']->value[$_smarty_tpl->tpl_vars['key']->value]) {?>
			<i class="icon-check-ok"></i>
				<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Enabled'),$_smarty_tpl ) );?>

			<?php } else { ?>
				<i class="icon-remove"></i>
			<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Disabled'),$_smarty_tpl ) );?>

		<?php }?>
		<?php } elseif ((isset($_smarty_tpl->tpl_vars['params']->value['position']))) {?>
			<?php if (!$_smarty_tpl->tpl_vars['filters_has_value']->value && $_smarty_tpl->tpl_vars['order_by']->value == 'position' && $_smarty_tpl->tpl_vars['order_way']->value != 'DESC') {?>
			<div class="dragGroup">
					<div class="positions">
						<?php echo mb_convert_encoding(htmlspecialchars((string)($_smarty_tpl->tpl_vars['tr']->value[$_smarty_tpl->tpl_vars['key']->value]['position']+1), ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>

					</div>
				</div>
		<?php } else { ?>
			<?php echo mb_convert_encoding(htmlspecialchars((string)($_smarty_tpl->tpl_vars['tr']->value[$_smarty_tpl->tpl_vars['key']->value]['position']+1), ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>

		<?php }?>
		<?php } elseif ((isset($_smarty_tpl->tpl_vars['params']->value['image']))) {?>
			<?php echo mb_convert_encoding(htmlspecialchars((string)$_smarty_tpl->tpl_vars['tr']->value[$_smarty_tpl->tpl_vars['key']->value], ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>

		<?php } elseif ((isset($_smarty_tpl->tpl_vars['params']->value['icon']))) {?>
			<?php if (is_array($_smarty_tpl->tpl_vars['tr']->value[$_smarty_tpl->tpl_vars['key']->value])) {?>
			<?php if ((isset($_smarty_tpl->tpl_vars['tr']->value[$_smarty_tpl->tpl_vars['key']->value]['class']))) {?>
				<i class="<?php echo mb_convert_encoding(htmlspecialchars((string)$_smarty_tpl->tpl_vars['tr']->value[$_smarty_tpl->tpl_vars['key']->value]['class'], ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
"></i>
				<?php } else { ?>
					<img src="../img/admin/<?php echo mb_convert_encoding(htmlspecialchars((string)$_smarty_tpl->tpl_vars['tr']->value[$_smarty_tpl->tpl_vars['key']->value]['src'], ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
"
						 alt="<?php echo mb_convert_encoding(htmlspecialchars((string)$_smarty_tpl->tpl_vars['tr']->value[$_smarty_tpl->tpl_vars['key']->value]['alt'], ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
"
						 title="<?php echo mb_convert_encoding(htmlspecialchars((string)$_smarty_tpl->tpl_vars['tr']->value[$_smarty_tpl->tpl_vars['key']->value]['alt'], ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
"/>
			<?php }?>
		<?php }?>
		<?php } elseif ((isset($_smarty_tpl->tpl_vars['params']->value['type'])) && $_smarty_tpl->tpl_vars['params']->value['type'] == 'price') {?>
			<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['displayPrice'][0], array( array('price'=>$_smarty_tpl->tpl_vars['tr']->value[$_smarty_tpl->tpl_vars['key']->value]),$_smarty_tpl ) );?>

		<?php } elseif ((isset($_smarty_tpl->tpl_vars['params']->value['float']))) {?>
			<?php echo $_smarty_tpl->tpl_vars['tr']->value[$_smarty_tpl->tpl_vars['key']->value];?>

		<?php } elseif ((isset($_smarty_tpl->tpl_vars['params']->value['type'])) && $_smarty_tpl->tpl_vars['params']->value['type'] == 'date') {?>
			<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['dateFormat'][0], array( array('date'=>$_smarty_tpl->tpl_vars['tr']->value[$_smarty_tpl->tpl_vars['key']->value],'full'=>0),$_smarty_tpl ) );?>

		<?php } elseif ((isset($_smarty_tpl->tpl_vars['params']->value['type'])) && $_smarty_tpl->tpl_vars['params']->value['type'] == 'datetime') {?>
			<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['dateFormat'][0], array( array('date'=>$_smarty_tpl->tpl_vars['tr']->value[$_smarty_tpl->tpl_vars['key']->value],'full'=>1),$_smarty_tpl ) );?>

		<?php } elseif ((isset($_smarty_tpl->tpl_vars['params']->value['type'])) && $_smarty_tpl->tpl_vars['params']->value['type'] == 'decimal') {?>
			<?php echo sprintf("%.2f",$_smarty_tpl->tpl_vars['tr']->value[$_smarty_tpl->tpl_vars['key']->value]);?>

		<?php } elseif ((isset($_smarty_tpl->tpl_vars['params']->value['type'])) && $_smarty_tpl->tpl_vars['params']->value['type'] == 'percent') {?>
			<?php echo $_smarty_tpl->tpl_vars['tr']->value[$_smarty_tpl->tpl_vars['key']->value];?>
 <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'%'),$_smarty_tpl ) );?>

				<?php } elseif ((isset($_smarty_tpl->tpl_vars['params']->value['type'])) && $_smarty_tpl->tpl_vars['params']->value['type'] == 'editable' && (isset($_smarty_tpl->tpl_vars['tr']->value['id']))) {?>
			<input type="text" name="<?php echo mb_convert_encoding(htmlspecialchars((string)$_smarty_tpl->tpl_vars['key']->value, ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
_<?php echo mb_convert_encoding(htmlspecialchars((string)$_smarty_tpl->tpl_vars['tr']->value['id'], ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
"
				   value="<?php echo htmlspecialchars((string)$_smarty_tpl->tpl_vars['tr']->value[$_smarty_tpl->tpl_vars['key']->value], ENT_QUOTES, 'UTF-8', true);?>
" class="<?php echo mb_convert_encoding(htmlspecialchars((string)$_smarty_tpl->tpl_vars['key']->value, ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
"/>
		<?php } elseif ((isset($_smarty_tpl->tpl_vars['params']->value['callback']))) {?>
			<?php if ((isset($_smarty_tpl->tpl_vars['params']->value['maxlength'])) && Tools::strlen($_smarty_tpl->tpl_vars['tr']->value[$_smarty_tpl->tpl_vars['key']->value]) > $_smarty_tpl->tpl_vars['params']->value['maxlength']) {?>
			<span title="<?php echo $_smarty_tpl->tpl_vars['tr']->value[$_smarty_tpl->tpl_vars['key']->value];?>
"><?php echo mb_convert_encoding(htmlspecialchars((string)call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'truncate' ][ 0 ], array( $_smarty_tpl->tpl_vars['tr']->value[$_smarty_tpl->tpl_vars['key']->value],$_smarty_tpl->tpl_vars['params']->value['maxlength'],'...' )), ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
</span>
		<?php } else { ?>
			<?php echo $_smarty_tpl->tpl_vars['tr']->value[$_smarty_tpl->tpl_vars['key']->value];?>

		<?php }?>
		<?php } elseif ($_smarty_tpl->tpl_vars['key']->value == 'color') {?>
			<?php if (!is_array($_smarty_tpl->tpl_vars['tr']->value[$_smarty_tpl->tpl_vars['key']->value])) {?>
			<div style="background-color: <?php echo $_smarty_tpl->tpl_vars['tr']->value[$_smarty_tpl->tpl_vars['key']->value];?>
;" class="attributes-color-container"></div>
			<?php } else { ?> 				<img src="<?php echo mb_convert_encoding(htmlspecialchars((string)$_smarty_tpl->tpl_vars['tr']->value[$_smarty_tpl->tpl_vars['key']->value]['texture'], ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
" alt="<?php echo mb_convert_encoding(htmlspecialchars((string)$_smarty_tpl->tpl_vars['tr']->value['name'], ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
"
					 class="attributes-color-container"/>
		<?php }?>
		<?php } elseif ((isset($_smarty_tpl->tpl_vars['params']->value['maxlength'])) && Tools::strlen($_smarty_tpl->tpl_vars['tr']->value[$_smarty_tpl->tpl_vars['key']->value]) > $_smarty_tpl->tpl_vars['params']->value['maxlength']) {?>
			<span title="<?php echo $_smarty_tpl->tpl_vars['tr']->value[$_smarty_tpl->tpl_vars['key']->value];?>
"><?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'truncate' ][ 0 ], array( $_smarty_tpl->tpl_vars['tr']->value[$_smarty_tpl->tpl_vars['key']->value],$_smarty_tpl->tpl_vars['params']->value['maxlength'],'...' ));?>
</span>
		<?php } else { ?>
			<?php echo $_smarty_tpl->tpl_vars['tr']->value[$_smarty_tpl->tpl_vars['key']->value];?>

		<?php }?>
	<?php } else { ?>
		<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_140711115263c014b0df7754_72939473', "default_field", $this->tplIndex);
?>

	<?php }?>
	<?php if ((isset($_smarty_tpl->tpl_vars['params']->value['suffix']))) {
echo mb_convert_encoding(htmlspecialchars((string)$_smarty_tpl->tpl_vars['params']->value['suffix'], ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');
}
if ((isset($_smarty_tpl->tpl_vars['params']->value['color'])) && (isset($_smarty_tpl->tpl_vars['tr']->value['color']))) {?>
	</span>
<?php }
if ((isset($_smarty_tpl->tpl_vars['params']->value['badge_danger'])) && $_smarty_tpl->tpl_vars['params']->value['badge_danger'] && (isset($_smarty_tpl->tpl_vars['tr']->value['badge_danger'])) && $_smarty_tpl->tpl_vars['tr']->value['badge_danger'] == $_smarty_tpl->tpl_vars['params']->value['badge_danger']) {?>
	</span>
<?php }
if ((isset($_smarty_tpl->tpl_vars['params']->value['badge_warning'])) && $_smarty_tpl->tpl_vars['params']->value['badge_warning'] && (isset($_smarty_tpl->tpl_vars['tr']->value['badge_warning'])) && $_smarty_tpl->tpl_vars['tr']->value['badge_warning'] == $_smarty_tpl->tpl_vars['params']->value['badge_warning']) {?>
	</span>
<?php }?>
	<?php if ((isset($_smarty_tpl->tpl_vars['params']->value['badge_success'])) && $_smarty_tpl->tpl_vars['params']->value['badge_success'] && (isset($_smarty_tpl->tpl_vars['tr']->value['badge_success'])) && $_smarty_tpl->tpl_vars['tr']->value['badge_success'] == $_smarty_tpl->tpl_vars['params']->value['badge_success']) {?></span><?php }
}
}
/* {/block "td_content"} */
}
