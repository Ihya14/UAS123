<?php
/* Smarty version 4.2.1, created on 2023-01-12 14:26:44
  from 'D:\xampp\htdocs\shopw\admin622ozp8ob\themes\default\template\controllers\products\combination\helpers\list\list_footer.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.2.1',
  'unifunc' => 'content_63bfa824490550_53433903',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '05f27f4f6b1e0a667011eb19987acd6d3e6d89ca' => 
    array (
      0 => 'D:\\xampp\\htdocs\\shopw\\admin622ozp8ob\\themes\\default\\template\\controllers\\products\\combination\\helpers\\list\\list_footer.tpl',
      1 => 1668409880,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_63bfa824490550_53433903 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>



<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_121743670363bfa824487285_62584453', "after");
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_194317842363bfa82448f090_68691574', "endForm");
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, "helpers/list/list_footer.tpl");
}
/* {block "after"} */
class Block_121743670363bfa824487285_62584453 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'after' => 
  array (
    0 => 'Block_121743670363bfa824487285_62584453',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

	<div class="alert alert-info" style="display:block">
		<ul>
			<li><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Highlighted row indicates the default combination.'),$_smarty_tpl ) );?>
</li>
			<li><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Each product that has combinations must have one default combination.'),$_smarty_tpl ) );?>
</li>
		</ul>
	</div>
<?php
}
}
/* {/block "after"} */
/* {block "endForm"} */
class Block_194317842363bfa82448f090_68691574 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'endForm' => 
  array (
    0 => 'Block_194317842363bfa82448f090_68691574',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

<?php
}
}
/* {/block "endForm"} */
}
