<?php
/* Smarty version 4.2.1, created on 2023-01-12 22:19:00
  from 'D:\xampp\htdocs\shopw\admin622ozp8ob\themes\default\template\controllers\tabs\helpers\list\list_content.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.2.1',
  'unifunc' => 'content_63c016d4437d04_59752494',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '0e64494cdac81c882f19ade2d8d941ca2b33ea7a' => 
    array (
      0 => 'D:\\xampp\\htdocs\\shopw\\admin622ozp8ob\\themes\\default\\template\\controllers\\tabs\\helpers\\list\\list_content.tpl',
      1 => 1668409880,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_63c016d4437d04_59752494 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


			<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_205284865163c016d441eff9_78553581', "open_td");
$_smarty_tpl->inheritance->endChild($_smarty_tpl, "helpers/list/list_content.tpl");
}
/* {block "open_td"} */
class Block_205284865163c016d441eff9_78553581 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'open_td' => 
  array (
    0 => 'Block_205284865163c016d441eff9_78553581',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

				<td
					<?php if ((isset($_smarty_tpl->tpl_vars['params']->value['position']))) {?>
						id="td_<?php if (!empty($_smarty_tpl->tpl_vars['position_group_identifier']->value)) {
echo $_smarty_tpl->tpl_vars['position_group_identifier']->value;
} else { ?>0<?php }?>_<?php echo $_smarty_tpl->tpl_vars['tr']->value[$_smarty_tpl->tpl_vars['identifier']->value];?>
"
					<?php }?>
					class="<?php if (!$_smarty_tpl->tpl_vars['no_link']->value) {?>pointer<?php }
if ((isset($_smarty_tpl->tpl_vars['params']->value['position'])) && $_smarty_tpl->tpl_vars['order_by']->value == 'position' && $_smarty_tpl->tpl_vars['order_way']->value != 'DESC') {?> dragHandle<?php }
if ((isset($_smarty_tpl->tpl_vars['params']->value['class']))) {?> <?php echo $_smarty_tpl->tpl_vars['params']->value['class'];
}
if ((isset($_smarty_tpl->tpl_vars['params']->value['align']))) {?> <?php echo $_smarty_tpl->tpl_vars['params']->value['align'];
}?>"
					<?php if ((!(isset($_smarty_tpl->tpl_vars['params']->value['position'])) && !$_smarty_tpl->tpl_vars['no_link']->value && !(isset($_smarty_tpl->tpl_vars['params']->value['remove_onclick'])))) {?>
						onclick="document.location = '<?php echo htmlspecialchars((string)$_smarty_tpl->tpl_vars['current_index']->value, ENT_QUOTES, 'UTF-8', true);?>
&amp;<?php echo htmlspecialchars((string)$_smarty_tpl->tpl_vars['identifier']->value, ENT_QUOTES, 'UTF-8', true);?>
=<?php echo htmlspecialchars((string)$_smarty_tpl->tpl_vars['tr']->value[$_smarty_tpl->tpl_vars['identifier']->value], ENT_QUOTES, 'UTF-8', true);?>
&amp;details<?php echo $_smarty_tpl->tpl_vars['table']->value;?>
&amp;token=<?php echo htmlspecialchars((string)$_smarty_tpl->tpl_vars['token']->value, ENT_QUOTES, 'UTF-8', true);?>
'">
					<?php } else { ?>
					>
					<?php }?>
			<?php
}
}
/* {/block "open_td"} */
}
