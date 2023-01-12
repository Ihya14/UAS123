<?php
/* Smarty version 4.2.1, created on 2023-01-12 14:28:43
  from 'D:\xampp\htdocs\shopw\themes\niara\order-steps.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.2.1',
  'unifunc' => 'content_63bfa89b85d026_57450684',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'bd7d9ea3341fb9538689f520cfe5abb7752af467' => 
    array (
      0 => 'D:\\xampp\\htdocs\\shopw\\themes\\niara\\order-steps.tpl',
      1 => 1664191549,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_63bfa89b85d026_57450684 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, "url_back", null, null);?>
  <?php if ((isset($_smarty_tpl->tpl_vars['back']->value)) && $_smarty_tpl->tpl_vars['back']->value) {?>back=<?php echo $_smarty_tpl->tpl_vars['back']->value;
}
$_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);?>

<?php if (!(isset($_smarty_tpl->tpl_vars['multi_shipping']->value))) {?>
  <?php $_smarty_tpl->_assignInScope('multi_shipping', '0');
}?>

<?php if (!$_smarty_tpl->tpl_vars['opc']->value && ((!(isset($_smarty_tpl->tpl_vars['back']->value)) || empty($_smarty_tpl->tpl_vars['back']->value)) || ((isset($_smarty_tpl->tpl_vars['back']->value)) && preg_match("/[&?]step=/",$_smarty_tpl->tpl_vars['back']->value)))) {?>

  <?php if ($_smarty_tpl->tpl_vars['current_step']->value == 'summary') {?>
    <?php $_smarty_tpl->_assignInScope('step_num', 1);?>
  <?php } elseif ($_smarty_tpl->tpl_vars['current_step']->value == 'login') {?>
    <?php $_smarty_tpl->_assignInScope('step_num', 2);?>
  <?php } elseif ($_smarty_tpl->tpl_vars['current_step']->value == 'address') {?>
    <?php $_smarty_tpl->_assignInScope('step_num', 3);?>
  <?php } elseif ($_smarty_tpl->tpl_vars['current_step']->value == 'shipping') {?>
    <?php $_smarty_tpl->_assignInScope('step_num', 4);?>
  <?php } elseif ($_smarty_tpl->tpl_vars['current_step']->value == 'payment') {?>
    <?php $_smarty_tpl->_assignInScope('step_num', 5);?>
  <?php }?>

  <ul id="order_step" class="nav nav-pills nav-justified">

    <li class="<?php if ($_smarty_tpl->tpl_vars['step_num']->value > 1) {?>completed<?php } elseif ($_smarty_tpl->tpl_vars['step_num']->value == 1) {?>active<?php }?>">
      <?php if ($_smarty_tpl->tpl_vars['current_step']->value == 'payment' || $_smarty_tpl->tpl_vars['current_step']->value == 'shipping' || $_smarty_tpl->tpl_vars['current_step']->value == 'address' || $_smarty_tpl->tpl_vars['current_step']->value == 'login') {?>
        <a href="<?php echo $_smarty_tpl->tpl_vars['link']->value->getPageLink('order',true);?>
">
          01. <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Summary'),$_smarty_tpl ) );?>

        </a>
      <?php } else { ?>
        <a href="javascript:;">01. <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Summary'),$_smarty_tpl ) );?>
</a>
      <?php }?>
    </li>

    <li class="<?php if ($_smarty_tpl->tpl_vars['step_num']->value > 2) {?>completed<?php } elseif ($_smarty_tpl->tpl_vars['step_num']->value == 2) {?>active<?php } else { ?>not-completed<?php }?>">
      <?php if ($_smarty_tpl->tpl_vars['current_step']->value == 'payment' || $_smarty_tpl->tpl_vars['current_step']->value == 'shipping' || $_smarty_tpl->tpl_vars['current_step']->value == 'address') {?>
        <a href="<?php ob_start();
if ($_smarty_tpl->tpl_vars['multi_shipping']->value) {
echo "&multi-shipping=";
echo (string)$_smarty_tpl->tpl_vars['multi_shipping']->value;
}
$_prefixVariable10=ob_get_clean();
echo htmlspecialchars((string)$_smarty_tpl->tpl_vars['link']->value->getPageLink('order',true,NULL,((string)$_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'url_back'))."&step=1".$_prefixVariable10), ENT_QUOTES, 'UTF-8', true);?>
">
          02. <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Sign in'),$_smarty_tpl ) );?>

        </a>
      <?php } else { ?>
        <a href="javascript:;">02. <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Sign in'),$_smarty_tpl ) );?>
</a>
      <?php }?>
    </li>

    <li class="<?php if ($_smarty_tpl->tpl_vars['step_num']->value > 3) {?>completed<?php } elseif ($_smarty_tpl->tpl_vars['step_num']->value == 3) {?>active<?php } else { ?>not-completed<?php }?>">
      <?php if ($_smarty_tpl->tpl_vars['current_step']->value == 'payment' || $_smarty_tpl->tpl_vars['current_step']->value == 'shipping') {?>
        <a href="<?php ob_start();
if ($_smarty_tpl->tpl_vars['multi_shipping']->value) {
echo "&multi-shipping=";
echo (string)$_smarty_tpl->tpl_vars['multi_shipping']->value;
}
$_prefixVariable11=ob_get_clean();
echo htmlspecialchars((string)$_smarty_tpl->tpl_vars['link']->value->getPageLink('order',true,NULL,((string)$_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'url_back'))."&step=1".$_prefixVariable11), ENT_QUOTES, 'UTF-8', true);?>
">
          03. <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Address'),$_smarty_tpl ) );?>

        </a>
      <?php } else { ?>
        <a href="javascript:;">03. <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Address'),$_smarty_tpl ) );?>
</a>
      <?php }?>
    </li>

    <li class="<?php if ($_smarty_tpl->tpl_vars['step_num']->value > 4) {?>completed<?php } elseif ($_smarty_tpl->tpl_vars['step_num']->value == 4) {?>active<?php } else { ?>not-completed<?php }?>">
      <?php if ($_smarty_tpl->tpl_vars['current_step']->value == 'payment') {?>
        <a href="<?php ob_start();
if ($_smarty_tpl->tpl_vars['multi_shipping']->value) {
echo "&multi-shipping=";
echo (string)$_smarty_tpl->tpl_vars['multi_shipping']->value;
}
$_prefixVariable12=ob_get_clean();
echo htmlspecialchars((string)$_smarty_tpl->tpl_vars['link']->value->getPageLink('order',true,NULL,((string)$_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'url_back'))."&step=2".$_prefixVariable12), ENT_QUOTES, 'UTF-8', true);?>
">
          04. <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Shipping'),$_smarty_tpl ) );?>

        </a>
      <?php } else { ?>
        <a href="javascript:;">04. <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Shipping'),$_smarty_tpl ) );?>
</a>
      <?php }?>
    </li>
    <li class="<?php if ($_smarty_tpl->tpl_vars['step_num']->value == 5) {?>active<?php } else { ?>not-completed<?php }?>">
      <a href="javascript:;">05. <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Payment'),$_smarty_tpl ) );?>
</a>
    </li>

  </ul>

<?php }
}
}
