<?php
/* Smarty version 4.2.1, created on 2023-01-12 13:55:49
  from 'D:\xampp\htdocs\shopw\themes\niara\modules\homefeatured\homefeatured.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.2.1',
  'unifunc' => 'content_63bfa0e5eb25a7_65390112',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'bd1e804ac1120211f02a353079abed0da29185e4' => 
    array (
      0 => 'D:\\xampp\\htdocs\\shopw\\themes\\niara\\modules\\homefeatured\\homefeatured.tpl',
      1 => 1664191549,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_63bfa0e5eb25a7_65390112 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->compiled->nocache_hash = '69039357563bfa0e5ea04b4_30843834';
?>
<div class="tm-home col-xs-12">
<?php if ((isset($_smarty_tpl->tpl_vars['products']->value)) && $_smarty_tpl->tpl_vars['products']->value) {?>
  <div class="tm-hp text-center">
    <h2><span class="tm-over"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Our','mod'=>'homefeatured'),$_smarty_tpl ) );?>
 <span><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'featured','mod'=>'homefeatured'),$_smarty_tpl ) );?>
</span> <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'products','mod'=>'homefeatured'),$_smarty_tpl ) );?>
</span></h2>
    <p><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'The best selection for top prices.','mod'=>'homefeatured'),$_smarty_tpl ) );?>
</p>
  </div>
  <?php $_smarty_tpl->_subTemplateRender(((string)$_smarty_tpl->tpl_vars['tpl_dir']->value)."./product-list.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 9999, $_smarty_tpl->cache_lifetime, array('class'=>'homefeatured','id'=>'homefeatured'), 0, true);
} else { ?>
  <ul id="homefeatured" class="homefeatured">
    <li class="alert alert-info"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'No featured products at this time.','mod'=>'homefeatured'),$_smarty_tpl ) );?>
</li>
  </ul>
<?php }?>
</div>
<?php }
}
