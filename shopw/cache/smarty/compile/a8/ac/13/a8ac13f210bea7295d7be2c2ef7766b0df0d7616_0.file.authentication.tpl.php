<?php
/* Smarty version 4.2.1, created on 2023-01-12 22:37:11
  from 'D:\xampp\htdocs\shopw\themes\niara\authentication.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.2.1',
  'unifunc' => 'content_63c01b177a5f80_63696131',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'a8ac13f210bea7295d7be2c2ef7766b0df0d7616' => 
    array (
      0 => 'D:\\xampp\\htdocs\\shopw\\themes\\niara\\authentication.tpl',
      1 => 1664191549,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:./authentication-login.tpl' => 1,
    'file:./authentication-create-opc.tpl' => 1,
    'file:./authentication-create.tpl' => 1,
  ),
),false)) {
function content_63c01b177a5f80_63696131 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, 'path', null, null);?>
  <?php if (!(isset($_smarty_tpl->tpl_vars['email_create']->value))) {
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Authentication'),$_smarty_tpl ) );
} else { ?>
    <a href="<?php echo htmlspecialchars((string)$_smarty_tpl->tpl_vars['link']->value->getPageLink('authentication',true), ENT_QUOTES, 'UTF-8', true);?>
" rel="nofollow" title="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Authentication'),$_smarty_tpl ) );?>
"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Authentication'),$_smarty_tpl ) );?>
</a>
    <span class="navigation-pipe"><?php echo $_smarty_tpl->tpl_vars['navigationPipe']->value;?>
</span><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Create your account'),$_smarty_tpl ) );?>

  <?php }
$_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);?>

<h1 class="page-heading"><?php if (!(isset($_smarty_tpl->tpl_vars['email_create']->value))) {
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Authentication'),$_smarty_tpl ) );
} else {
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Create an account'),$_smarty_tpl ) );
}?></h1>
<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>'displayAuthenticationTop'),$_smarty_tpl ) );?>

<?php if ((isset($_smarty_tpl->tpl_vars['back']->value)) && preg_match("/^http/",$_smarty_tpl->tpl_vars['back']->value)) {
$_smarty_tpl->_assignInScope('current_step', 'login');
$_smarty_tpl->_subTemplateRender(((string)$_smarty_tpl->tpl_vars['tpl_dir']->value)."./order-steps.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
}?>

<?php $_smarty_tpl->_subTemplateRender(((string)$_smarty_tpl->tpl_vars['tpl_dir']->value)."./errors.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
?>

<?php $_smarty_tpl->_assignInScope('stateExist', false);
$_smarty_tpl->_assignInScope('postCodeExist', false);
$_smarty_tpl->_assignInScope('dniExist', false);?>

<?php if (!(isset($_smarty_tpl->tpl_vars['email_create']->value))) {?>

  <?php $_smarty_tpl->_subTemplateRender('file:./authentication-login.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

  <?php if ((isset($_smarty_tpl->tpl_vars['inOrderProcess']->value)) && $_smarty_tpl->tpl_vars['inOrderProcess']->value && $_smarty_tpl->tpl_vars['PS_GUEST_CHECKOUT_ENABLED']->value) {?>
    <?php $_smarty_tpl->_subTemplateRender('file:./authentication-create-opc.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
  <?php }?>

<?php } else { ?>

  <?php $_smarty_tpl->_subTemplateRender('file:./authentication-create.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<?php }?>

<?php if ((isset($_POST['id_state'])) && $_POST['id_state']) {
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['addJsDef'][0], array( array('idSelectedState'=>intval($_POST['id_state'])),$_smarty_tpl ) );
} elseif ((isset($_smarty_tpl->tpl_vars['address']->value->id_state)) && $_smarty_tpl->tpl_vars['address']->value->id_state) {
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['addJsDef'][0], array( array('idSelectedState'=>intval($_smarty_tpl->tpl_vars['address']->value->id_state)),$_smarty_tpl ) );
} else {
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['addJsDef'][0], array( array('idSelectedState'=>false),$_smarty_tpl ) );
}
if ((isset($_POST['id_state_invoice'])) && (isset($_POST['id_state_invoice'])) && $_POST['id_state_invoice']) {
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['addJsDef'][0], array( array('idSelectedStateInvoice'=>intval($_POST['id_state_invoice'])),$_smarty_tpl ) );
} else {
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['addJsDef'][0], array( array('idSelectedStateInvoice'=>false),$_smarty_tpl ) );
}
if ((isset($_POST['id_country'])) && $_POST['id_country']) {
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['addJsDef'][0], array( array('idSelectedCountry'=>intval($_POST['id_country'])),$_smarty_tpl ) );
} elseif ((isset($_smarty_tpl->tpl_vars['address']->value->id_country)) && $_smarty_tpl->tpl_vars['address']->value->id_country) {
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['addJsDef'][0], array( array('idSelectedCountry'=>intval($_smarty_tpl->tpl_vars['address']->value->id_country)),$_smarty_tpl ) );
} else {
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['addJsDef'][0], array( array('idSelectedCountry'=>false),$_smarty_tpl ) );
}
if ((isset($_POST['id_country_invoice'])) && (isset($_POST['id_country_invoice'])) && $_POST['id_country_invoice']) {
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['addJsDef'][0], array( array('idSelectedCountryInvoice'=>intval($_POST['id_country_invoice'])),$_smarty_tpl ) );
} else {
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['addJsDef'][0], array( array('idSelectedCountryInvoice'=>false),$_smarty_tpl ) );
}
if ((isset($_smarty_tpl->tpl_vars['countries']->value))) {
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['addJsDef'][0], array( array('countries'=>$_smarty_tpl->tpl_vars['countries']->value),$_smarty_tpl ) );
}
if ((isset($_smarty_tpl->tpl_vars['vatnumber_ajax_call']->value)) && $_smarty_tpl->tpl_vars['vatnumber_ajax_call']->value) {
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['addJsDef'][0], array( array('vatnumber_ajax_call'=>$_smarty_tpl->tpl_vars['vatnumber_ajax_call']->value),$_smarty_tpl ) );
}
if ((isset($_smarty_tpl->tpl_vars['email_create']->value)) && $_smarty_tpl->tpl_vars['email_create']->value) {
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['addJsDef'][0], array( array('email_create'=>call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'boolval' ][ 0 ], array( $_smarty_tpl->tpl_vars['email_create']->value ))),$_smarty_tpl ) );
} else {
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['addJsDef'][0], array( array('email_create'=>false),$_smarty_tpl ) );
}
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>'displayAuthenticationBottom'),$_smarty_tpl ) );
}
}
