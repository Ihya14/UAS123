<?php
/* Smarty version 4.2.1, created on 2023-01-12 14:31:03
  from 'D:\xampp\htdocs\shopw\admin622ozp8ob\themes\default\template\controllers\categories\helpers\form\form.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.2.1',
  'unifunc' => 'content_63bfa927863161_44845654',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '0c68796a841d5c1f9ed01448ce76f456a6a662b1' => 
    array (
      0 => 'D:\\xampp\\htdocs\\shopw\\admin622ozp8ob\\themes\\default\\template\\controllers\\categories\\helpers\\form\\form.tpl',
      1 => 1668409880,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_63bfa927863161_44845654 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_163340254063bfa9277981b6_31049578', "script");
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_95424882263bfa927799b89_95476202', "input");
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_26366084263bfa92785ad13_24422645', "description");
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_137058328963bfa927860681_23034657', "input_row");
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, "helpers/form/form.tpl");
}
/* {block "script"} */
class Block_163340254063bfa9277981b6_31049578 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'script' => 
  array (
    0 => 'Block_163340254063bfa9277981b6_31049578',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

	var ps_force_friendly_product = false;
<?php
}
}
/* {/block "script"} */
/* {block "input"} */
class Block_95424882263bfa927799b89_95476202 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'input' => 
  array (
    0 => 'Block_95424882263bfa927799b89_95476202',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

	<?php if ($_smarty_tpl->tpl_vars['input']->value['name'] == "link_rewrite") {?>
		<?php echo '<script'; ?>
 type="text/javascript">
		<?php if ((isset($_smarty_tpl->tpl_vars['PS_ALLOW_ACCENTED_CHARS_URL']->value)) && $_smarty_tpl->tpl_vars['PS_ALLOW_ACCENTED_CHARS_URL']->value) {?>
			var PS_ALLOW_ACCENTED_CHARS_URL = 1;
		<?php } else { ?>
			var PS_ALLOW_ACCENTED_CHARS_URL = 0;
		<?php }?>
		<?php echo '</script'; ?>
>
		<?php 
$_smarty_tpl->inheritance->callParent($_smarty_tpl, $this, '{$smarty.block.parent}');
?>

	<?php } else { ?>
		<?php 
$_smarty_tpl->inheritance->callParent($_smarty_tpl, $this, '{$smarty.block.parent}');
?>

	<?php }?>
	<?php if (in_array($_smarty_tpl->tpl_vars['input']->value['name'],array('image','thumb'))) {?>
		<div class="col-lg-6">
			<div class="help-block"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Recommended dimensions (for the default theme): %1spx x %2spx','sprintf'=>array($_smarty_tpl->tpl_vars['input']->value['format']['width'],$_smarty_tpl->tpl_vars['input']->value['format']['height'])),$_smarty_tpl ) );?>

			</div>
		</div>
	<?php }
}
}
/* {/block "input"} */
/* {block "description"} */
class Block_26366084263bfa92785ad13_24422645 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'description' => 
  array (
    0 => 'Block_26366084263bfa92785ad13_24422645',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

	<?php 
$_smarty_tpl->inheritance->callParent($_smarty_tpl, $this, '{$smarty.block.parent}');
?>

	<?php if (($_smarty_tpl->tpl_vars['input']->value['name'] == 'groupBox')) {?>
		<div class="alert alert-info">
			<h4><?php echo $_smarty_tpl->tpl_vars['input']->value['info_introduction'];?>
</h4>
			<p><?php echo $_smarty_tpl->tpl_vars['input']->value['unidentified'];?>
<br />
			<?php echo $_smarty_tpl->tpl_vars['input']->value['guest'];?>
<br />
			<?php echo $_smarty_tpl->tpl_vars['input']->value['customer'];?>
</p>
		</div>
	<?php }
}
}
/* {/block "description"} */
/* {block "input_row"} */
class Block_137058328963bfa927860681_23034657 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'input_row' => 
  array (
    0 => 'Block_137058328963bfa927860681_23034657',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

	<?php 
$_smarty_tpl->inheritance->callParent($_smarty_tpl, $this, '{$smarty.block.parent}');
?>

	<?php if (($_smarty_tpl->tpl_vars['input']->value['name'] == 'thumb')) {?>
	<?php echo $_smarty_tpl->tpl_vars['displayBackOfficeCategory']->value;?>

	<?php }
}
}
/* {/block "input_row"} */
}
