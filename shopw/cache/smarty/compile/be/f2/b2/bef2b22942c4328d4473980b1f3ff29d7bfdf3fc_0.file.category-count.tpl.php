<?php
/* Smarty version 4.2.1, created on 2023-01-12 22:08:30
  from 'D:\xampp\htdocs\shopw\themes\niara\category-count.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.2.1',
  'unifunc' => 'content_63c0145e46fc73_75041028',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'bef2b22942c4328d4473980b1f3ff29d7bfdf3fc' => 
    array (
      0 => 'D:\\xampp\\htdocs\\shopw\\themes\\niara\\category-count.tpl',
      1 => 1664191549,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_63c0145e46fc73_75041028 (Smarty_Internal_Template $_smarty_tpl) {
?><span class="heading-counter badge">
  <?php if (((isset($_smarty_tpl->tpl_vars['category']->value)) && $_smarty_tpl->tpl_vars['category']->value->id == 1) || ((isset($_smarty_tpl->tpl_vars['nb_products']->value)) && $_smarty_tpl->tpl_vars['nb_products']->value == 0)) {?>
    <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'There are no products in this category.'),$_smarty_tpl ) );?>

  <?php } else { ?>
    <?php if ((isset($_smarty_tpl->tpl_vars['nb_products']->value)) && $_smarty_tpl->tpl_vars['nb_products']->value == 1) {?>
      <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'There is 1 product.'),$_smarty_tpl ) );?>

    <?php } elseif ((isset($_smarty_tpl->tpl_vars['nb_products']->value))) {?>
      <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'There are %d products.','sprintf'=>$_smarty_tpl->tpl_vars['nb_products']->value),$_smarty_tpl ) );?>

    <?php }?>
  <?php }?>
</span>
<?php }
}
