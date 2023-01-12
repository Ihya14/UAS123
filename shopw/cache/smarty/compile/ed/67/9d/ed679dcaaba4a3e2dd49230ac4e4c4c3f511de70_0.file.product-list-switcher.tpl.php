<?php
/* Smarty version 4.2.1, created on 2023-01-12 22:08:30
  from 'D:\xampp\htdocs\shopw\themes\niara\product-list-switcher.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.2.1',
  'unifunc' => 'content_63c0145e8d1699_01116734',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'ed679dcaaba4a3e2dd49230ac4e4c4c3f511de70' => 
    array (
      0 => 'D:\\xampp\\htdocs\\shopw\\themes\\niara\\product-list-switcher.tpl',
      1 => 1664191549,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_63c0145e8d1699_01116734 (Smarty_Internal_Template $_smarty_tpl) {
?><div id="product-list-switcher" class="form-group display">
  <label class="visible-xs"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Display product list as:'),$_smarty_tpl ) );?>
</label>
  <div class="btn-group" role="group" aria-label="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Product list display type'),$_smarty_tpl ) );?>
">
    <a id="grid" class="btn btn-default" rel="nofollow" href="#" title="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Grid'),$_smarty_tpl ) );?>
">
      <i class="icon icon-fw icon-th"></i>
      <span class="visible-xs"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Grid'),$_smarty_tpl ) );?>
</span>
    </a>
    <a id="list" class="btn btn-default" rel="nofollow" href="#" title="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'List'),$_smarty_tpl ) );?>
">
      <i class="icon icon-fw icon-bars"></i>
      <span class="visible-xs"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'List'),$_smarty_tpl ) );?>
</span>
    </a>
  </div>
</div>
<?php }
}
