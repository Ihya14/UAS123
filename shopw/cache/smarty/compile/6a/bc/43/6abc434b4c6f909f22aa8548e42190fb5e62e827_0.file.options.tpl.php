<?php
/* Smarty version 4.2.1, created on 2023-01-12 22:21:52
  from 'D:\xampp\htdocs\shopw\admin622ozp8ob\themes\default\template\controllers\order_preferences\helpers\options\options.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.2.1',
  'unifunc' => 'content_63c0178011c662_77319139',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '6abc434b4c6f909f22aa8548e42190fb5e62e827' => 
    array (
      0 => 'D:\\xampp\\htdocs\\shopw\\admin622ozp8ob\\themes\\default\\template\\controllers\\order_preferences\\helpers\\options\\options.tpl',
      1 => 1668409880,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_63c0178011c662_77319139 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_203979267563c0178011b136_73121430', "after");
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, "helpers/options/options.tpl");
}
/* {block "after"} */
class Block_203979267563c0178011b136_73121430 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'after' => 
  array (
    0 => 'Block_203979267563c0178011b136_73121430',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
echo '<script'; ?>
 type="text/javascript">changeCMSActivationAuthorization();<?php echo '</script'; ?>
><?php
}
}
/* {/block "after"} */
}
