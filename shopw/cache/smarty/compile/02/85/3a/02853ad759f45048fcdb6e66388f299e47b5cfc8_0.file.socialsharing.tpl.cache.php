<?php
/* Smarty version 4.2.1, created on 2023-01-12 22:42:09
  from 'D:\xampp\htdocs\shopw\themes\niara\modules\socialsharing\views\templates\hook\socialsharing.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.2.1',
  'unifunc' => 'content_63c01c41aa0e20_37333896',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '02853ad759f45048fcdb6e66388f299e47b5cfc8' => 
    array (
      0 => 'D:\\xampp\\htdocs\\shopw\\themes\\niara\\modules\\socialsharing\\views\\templates\\hook\\socialsharing.tpl',
      1 => 1664191549,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_63c01c41aa0e20_37333896 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->compiled->nocache_hash = '105989757363c01c41a9b7e8_86782403';
if ($_smarty_tpl->tpl_vars['PS_SC_TWITTER']->value || $_smarty_tpl->tpl_vars['PS_SC_FACEBOOK']->value || $_smarty_tpl->tpl_vars['PS_SC_PINTEREST']->value) {?>
	<p class="socialsharing_product hidden-print">
		<?php if ($_smarty_tpl->tpl_vars['PS_SC_TWITTER']->value) {?>
			<button data-type="twitter" type="button" class="btn btn-xs btn-twitter">
				<i class="icon-twitter"></i> <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>"Tweet",'mod'=>'socialsharing'),$_smarty_tpl ) );?>

			</button>
		<?php }?>
		<?php if ($_smarty_tpl->tpl_vars['PS_SC_FACEBOOK']->value) {?>
			<button data-type="facebook" type="button" class="btn btn-xs btn-facebook">
				<i class="icon-facebook"></i> <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>"Share",'mod'=>'socialsharing'),$_smarty_tpl ) );?>

			</button>
		<?php }?>
		<?php if ($_smarty_tpl->tpl_vars['PS_SC_PINTEREST']->value) {?>
			<button data-type="pinterest" type="button" class="btn btn-xs btn-pinterest">
				<i class="icon-pinterest"></i> <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>"Pinterest",'mod'=>'socialsharing'),$_smarty_tpl ) );?>

			</button>
		<?php }?>
	</p>
<?php }
}
}
