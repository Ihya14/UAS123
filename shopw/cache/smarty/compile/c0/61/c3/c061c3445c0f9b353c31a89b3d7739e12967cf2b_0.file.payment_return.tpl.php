<?php
/* Smarty version 4.2.1, created on 2023-01-12 14:30:11
  from 'D:\xampp\htdocs\shopw\themes\niara\modules\bankwire\views\templates\hook\payment_return.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.2.1',
  'unifunc' => 'content_63bfa8f3b5e737_77266854',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'c061c3445c0f9b353c31a89b3d7739e12967cf2b' => 
    array (
      0 => 'D:\\xampp\\htdocs\\shopw\\themes\\niara\\modules\\bankwire\\views\\templates\\hook\\payment_return.tpl',
      1 => 1664191549,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_63bfa8f3b5e737_77266854 (Smarty_Internal_Template $_smarty_tpl) {
if ($_smarty_tpl->tpl_vars['status']->value == 'ok') {?>
  <div class="alert alert-success"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Your order on %s is complete.','sprintf'=>$_smarty_tpl->tpl_vars['shop_name']->value,'mod'=>'bankwire'),$_smarty_tpl ) );?>
</div>
  <div class="box">
    <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Please send us a bank wire with','mod'=>'bankwire'),$_smarty_tpl ) );?>

    <br />- <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Amount','mod'=>'bankwire'),$_smarty_tpl ) );?>
 <span class="price"><strong><?php echo $_smarty_tpl->tpl_vars['total_to_pay']->value;?>
</strong></span>
    <br />- <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Name of account owner','mod'=>'bankwire'),$_smarty_tpl ) );?>
  <strong><?php if ($_smarty_tpl->tpl_vars['bankwireOwner']->value) {
echo $_smarty_tpl->tpl_vars['bankwireOwner']->value;
} else { ?>___________<?php }?></strong>
    <br />- <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Include these details','mod'=>'bankwire'),$_smarty_tpl ) );?>
  <strong><?php if ($_smarty_tpl->tpl_vars['bankwireDetails']->value) {
echo $_smarty_tpl->tpl_vars['bankwireDetails']->value;
} else { ?>___________<?php }?></strong>
    <br />- <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Bank name','mod'=>'bankwire'),$_smarty_tpl ) );?>
  <strong><?php if ($_smarty_tpl->tpl_vars['bankwireAddress']->value) {
echo $_smarty_tpl->tpl_vars['bankwireAddress']->value;
} else { ?>___________<?php }?></strong>
    <?php if (!(isset($_smarty_tpl->tpl_vars['reference']->value))) {?>
  <br />- <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Do not forget to insert your order number #%d in the subject of your bank wire.','sprintf'=>$_smarty_tpl->tpl_vars['id_order']->value,'mod'=>'bankwire'),$_smarty_tpl ) );?>

    <?php } else { ?>
  <br />- <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Do not forget to insert your order reference %s in the subject of your bank wire.','sprintf'=>$_smarty_tpl->tpl_vars['reference']->value,'mod'=>'bankwire'),$_smarty_tpl ) );?>

    <?php }?><br /><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'An email has been sent with this information.','mod'=>'bankwire'),$_smarty_tpl ) );?>

    <br /> <strong><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Your order will be sent as soon as we receive payment.','mod'=>'bankwire'),$_smarty_tpl ) );?>
</strong>
    <br /><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'If you have questions, comments or concerns, please contact our','mod'=>'bankwire'),$_smarty_tpl ) );?>
 <a href="<?php echo htmlspecialchars((string)$_smarty_tpl->tpl_vars['link']->value->getPageLink('contact',true), ENT_QUOTES, 'UTF-8', true);?>
"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'expert customer support team','mod'=>'bankwire'),$_smarty_tpl ) );?>
</a>.
  </div>
<?php } else { ?>
  <div class="alert alert-warning">
    <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'We noticed a problem with your order. If you think this is an error, feel free to contact our','mod'=>'bankwire'),$_smarty_tpl ) );?>

    <a href="<?php echo htmlspecialchars((string)$_smarty_tpl->tpl_vars['link']->value->getPageLink('contact',true), ENT_QUOTES, 'UTF-8', true);?>
"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'customer service department.','mod'=>'bankwire'),$_smarty_tpl ) );?>
</a>.
  </div>
<?php }
}
}
