<?php
/* Smarty version 4.2.1, created on 2023-01-12 14:26:36
  from 'D:\xampp\htdocs\shopw\admin622ozp8ob\themes\default\template\controllers\products\helpers\list\list_header.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.2.1',
  'unifunc' => 'content_63bfa81c6e88e2_45289829',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '46b8c70a7f622d30d4eb920884650c572fbf54d7' => 
    array (
      0 => 'D:\\xampp\\htdocs\\shopw\\admin622ozp8ob\\themes\\default\\template\\controllers\\products\\helpers\\list\\list_header.tpl',
      1 => 1668409880,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_63bfa81c6e88e2_45289829 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>



<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_58768924163bfa81c6e7607_07179749', 'leadin');
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, "helpers/list/list_header.tpl");
}
/* {block 'leadin'} */
class Block_58768924163bfa81c6e7607_07179749 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'leadin' => 
  array (
    0 => 'Block_58768924163bfa81c6e7607_07179749',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

	<?php if ((isset($_smarty_tpl->tpl_vars['category_tree']->value))) {?>
		<div class="bloc-leadin">
			<div id="container_category_tree">
				<?php echo $_smarty_tpl->tpl_vars['category_tree']->value;?>

			</div>
		</div>
	<?php }
}
}
/* {/block 'leadin'} */
}
