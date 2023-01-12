<?php
/* Smarty version 4.2.1, created on 2023-01-12 14:30:11
  from 'D:\xampp\htdocs\shopw\themes\niara\order-confirmation.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.2.1',
  'unifunc' => 'content_63bfa8f3e2ff56_80605827',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'e3c20fe9dabc375caf96d9639c33e6956e3d765d' => 
    array (
      0 => 'D:\\xampp\\htdocs\\shopw\\themes\\niara\\order-confirmation.tpl',
      1 => 1664191549,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_63bfa8f3e2ff56_80605827 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, 'path', null, null);
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Order confirmation'),$_smarty_tpl ) );
$_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);?>

<h1 class="page-heading"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Order confirmation'),$_smarty_tpl ) );?>
</h1>

<?php $_smarty_tpl->_assignInScope('current_step', 'payment');
$_smarty_tpl->_subTemplateRender(((string)$_smarty_tpl->tpl_vars['tpl_dir']->value)."./order-steps.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
?>

<?php $_smarty_tpl->_subTemplateRender(((string)$_smarty_tpl->tpl_vars['tpl_dir']->value)."./errors.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
?>

<?php echo $_smarty_tpl->tpl_vars['HOOK_ORDER_CONFIRMATION']->value;?>

<?php echo $_smarty_tpl->tpl_vars['HOOK_PAYMENT_RETURN']->value;?>

<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>'displayOrderConfirmationTop'),$_smarty_tpl ) );?>

<?php if ($_smarty_tpl->tpl_vars['is_guest']->value) {?>
  <p><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Your order ID is:'),$_smarty_tpl ) );?>
 <span class="bold"><?php echo $_smarty_tpl->tpl_vars['id_order_formatted']->value;?>
</span> . <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Your order ID has been sent via email.'),$_smarty_tpl ) );?>
</p>
  <p class="cart_navigation clearfix">
    <a class="btn btn-lg btn-default" href="<?php ob_start();
echo urlencode($_smarty_tpl->tpl_vars['reference_order']->value);
$_prefixVariable1=ob_get_clean();
ob_start();
echo urlencode($_smarty_tpl->tpl_vars['email']->value);
$_prefixVariable2=ob_get_clean();
echo htmlspecialchars((string)$_smarty_tpl->tpl_vars['link']->value->getPageLink('guest-tracking',true,NULL,"id_order=".$_prefixVariable1."&email=".$_prefixVariable2), ENT_QUOTES, 'UTF-8', true);?>
" title="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Follow my order'),$_smarty_tpl ) );?>
"><i class="icon icon-chevron-left"></i> <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Follow my order'),$_smarty_tpl ) );?>
</a>
  </p>
<?php } else { ?>
  <p class="cart_navigation clearfix">
    <a class="btn btn-lg btn-default" href="<?php echo htmlspecialchars((string)$_smarty_tpl->tpl_vars['link']->value->getPageLink('history',true), ENT_QUOTES, 'UTF-8', true);?>
" title="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Go to your order history page'),$_smarty_tpl ) );?>
"><i class="icon icon-chevron-left"></i> <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'View your order history'),$_smarty_tpl ) );?>
</a>
  </p>
<?php }
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>'displayOrderConfirmationBelow'),$_smarty_tpl ) );
}
}
