<?php
/* Smarty version 4.2.1, created on 2023-01-12 14:29:04
  from 'D:\xampp\htdocs\shopw\themes\niara\modules\bankwire\views\templates\hook\payment.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.2.1',
  'unifunc' => 'content_63bfa8b0886e78_81733135',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'df6fd1665d0bbe8a6d7bb851751feed1c54e74bc' => 
    array (
      0 => 'D:\\xampp\\htdocs\\shopw\\themes\\niara\\modules\\bankwire\\views\\templates\\hook\\payment.tpl',
      1 => 1664191549,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_63bfa8b0886e78_81733135 (Smarty_Internal_Template $_smarty_tpl) {
?><div class="row">
  <div class="col-xs-12">
    <p class="payment_module">
      <a class="bankwire" href="<?php echo htmlspecialchars((string)$_smarty_tpl->tpl_vars['link']->value->getModuleLink('bankwire','payment'), ENT_QUOTES, 'UTF-8', true);?>
" title="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Pay by bank wire','mod'=>'bankwire'),$_smarty_tpl ) );?>
">
        <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Pay by bank wire','mod'=>'bankwire'),$_smarty_tpl ) );?>
 <span><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'(order processing will be longer)','mod'=>'bankwire'),$_smarty_tpl ) );?>
</span>
      </a>
    </p>
  </div>
</div>
<?php }
}
