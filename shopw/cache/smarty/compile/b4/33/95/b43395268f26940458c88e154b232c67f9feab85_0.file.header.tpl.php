<?php
/* Smarty version 4.2.1, created on 2023-01-12 13:55:49
  from 'D:\xampp\htdocs\shopw\themes\niara\modules\blockcart\includes\header.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.2.1',
  'unifunc' => 'content_63bfa0e553b782_93292487',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'b43395268f26940458c88e154b232c67f9feab85' => 
    array (
      0 => 'D:\\xampp\\htdocs\\shopw\\themes\\niara\\modules\\blockcart\\includes\\header.tpl',
      1 => 1664191549,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_63bfa0e553b782_93292487 (Smarty_Internal_Template $_smarty_tpl) {
?><a id="blockcart-header" href="<?php echo htmlspecialchars((string)$_smarty_tpl->tpl_vars['link']->value->getPageLink($_smarty_tpl->tpl_vars['order_process']->value,true), ENT_QUOTES, 'UTF-8', true);?>
" title="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'View my shopping cart','mod'=>'blockcart'),$_smarty_tpl ) );?>
" rel="nofollow">
  <b><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'My Cart','mod'=>'blockcart'),$_smarty_tpl ) );?>
</b>
  <span class="ajax_cart_quantity"><?php echo $_smarty_tpl->tpl_vars['cart_qties']->value;?>
</span>
  <span class="ajax_cart_product_txt"<?php if ($_smarty_tpl->tpl_vars['cart_qties']->value != 1) {?> style="display: none;"<?php }?>><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Product','mod'=>'blockcart'),$_smarty_tpl ) );?>
</span>
  <span class="ajax_cart_product_txt_s"<?php if ($_smarty_tpl->tpl_vars['cart_qties']->value < 2) {?> style="display: none;"<?php }?>><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Products','mod'=>'blockcart'),$_smarty_tpl ) );?>
</span>
  <span class="ajax_cart_total"<?php if ($_smarty_tpl->tpl_vars['cart_qties']->value == 0) {?> style="display: none;"<?php }?>>
    <?php if ($_smarty_tpl->tpl_vars['cart_qties']->value > 0) {?>
      <?php if ($_smarty_tpl->tpl_vars['priceDisplay']->value == 1) {?>
        <?php $_smarty_tpl->_assignInScope('blockcart_cart_flag', constant('Cart::BOTH_WITHOUT_SHIPPING'));?>
        <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['convertPrice'][0], array( array('price'=>$_smarty_tpl->tpl_vars['cart']->value->getOrderTotal(false,$_smarty_tpl->tpl_vars['blockcart_cart_flag']->value)),$_smarty_tpl ) );?>

      <?php } else { ?>
        <?php $_smarty_tpl->_assignInScope('blockcart_cart_flag', constant('Cart::BOTH_WITHOUT_SHIPPING'));?>
        <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['convertPrice'][0], array( array('price'=>$_smarty_tpl->tpl_vars['cart']->value->getOrderTotal(true,$_smarty_tpl->tpl_vars['blockcart_cart_flag']->value)),$_smarty_tpl ) );?>

      <?php }?>
    <?php }?>
  </span>
  <span class="ajax_cart_no_product"<?php if ($_smarty_tpl->tpl_vars['cart_qties']->value > 0) {?> style="display: none;"<?php }?>><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'(empty)','mod'=>'blockcart'),$_smarty_tpl ) );?>
</span>
</a>
<?php }
}
