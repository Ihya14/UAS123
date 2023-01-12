<?php
/* Smarty version 4.2.1, created on 2023-01-12 14:29:42
  from 'D:\xampp\htdocs\shopw\themes\niara\my-account.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.2.1',
  'unifunc' => 'content_63bfa8d6750a76_79785894',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '6dc0c8d1e4a0653354d3876058a329a10c2187a6' => 
    array (
      0 => 'D:\\xampp\\htdocs\\shopw\\themes\\niara\\my-account.tpl',
      1 => 1664191549,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_63bfa8d6750a76_79785894 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, 'path', null, null);
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'My account'),$_smarty_tpl ) );
$_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);?>

<h1 class="page-heading"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'My account'),$_smarty_tpl ) );?>
</h1>
<?php if ((isset($_smarty_tpl->tpl_vars['account_created']->value))) {?>
  <div class="alert alert-success"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Your account has been created.'),$_smarty_tpl ) );?>
</div>
<?php }
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>'displayMyAccountTop'),$_smarty_tpl ) );?>

<p><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Welcome to your account. Here you can manage all of your personal information and orders.'),$_smarty_tpl ) );?>
</p>

<div id="my-account-menu" class="row">
  <div class="col-sm-6">
    <ul class="nav nav-pills nav-stacked stacked-menu">
      <?php if ($_smarty_tpl->tpl_vars['has_customer_an_address']->value) {?>
        <li><a href="<?php echo htmlspecialchars((string)$_smarty_tpl->tpl_vars['link']->value->getPageLink('address',true), ENT_QUOTES, 'UTF-8', true);?>
" title="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Add my first address'),$_smarty_tpl ) );?>
"><i class="icon icon-building"></i> <span><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Add my first address'),$_smarty_tpl ) );?>
</span></a></li>
      <?php }?>
      <li><a href="<?php echo htmlspecialchars((string)$_smarty_tpl->tpl_vars['link']->value->getPageLink('history',true), ENT_QUOTES, 'UTF-8', true);?>
" title="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Orders'),$_smarty_tpl ) );?>
"><i class="icon icon-list-ol"></i> <span><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Order history and details'),$_smarty_tpl ) );?>
</span></a></li>
      <?php if ($_smarty_tpl->tpl_vars['returnAllowed']->value) {?>
        <li><a href="<?php echo htmlspecialchars((string)$_smarty_tpl->tpl_vars['link']->value->getPageLink('order-follow',true), ENT_QUOTES, 'UTF-8', true);?>
" title="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Merchandise returns'),$_smarty_tpl ) );?>
"><i class="icon icon-refresh"></i> <span><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'My merchandise returns'),$_smarty_tpl ) );?>
</span></a></li>
      <?php }?>
      <li><a href="<?php echo htmlspecialchars((string)$_smarty_tpl->tpl_vars['link']->value->getPageLink('order-slip',true), ENT_QUOTES, 'UTF-8', true);?>
" title="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Credit slips'),$_smarty_tpl ) );?>
"><i class="icon icon-file-o"></i> <span><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'My credit slips'),$_smarty_tpl ) );?>
</span></a></li>
      <li><a href="<?php echo htmlspecialchars((string)$_smarty_tpl->tpl_vars['link']->value->getPageLink('addresses',true), ENT_QUOTES, 'UTF-8', true);?>
" title="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Addresses'),$_smarty_tpl ) );?>
"><i class="icon icon-fw icon-building"></i> <span><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'My addresses'),$_smarty_tpl ) );?>
</span></a></li>
      <li><a href="<?php echo htmlspecialchars((string)$_smarty_tpl->tpl_vars['link']->value->getPageLink('identity',true), ENT_QUOTES, 'UTF-8', true);?>
" title="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Information'),$_smarty_tpl ) );?>
"><i class="icon icon-user"></i> <span><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'My personal information'),$_smarty_tpl ) );?>
</span></a></li>
    </ul>
  </div>
  <?php if ($_smarty_tpl->tpl_vars['voucherAllowed']->value || (isset($_smarty_tpl->tpl_vars['HOOK_CUSTOMER_ACCOUNT']->value)) && $_smarty_tpl->tpl_vars['HOOK_CUSTOMER_ACCOUNT']->value != '') {?>
    <div class="col-sm-6">
      <ul class="nav nav-pills nav-stacked stacked-menu">
        <?php if ($_smarty_tpl->tpl_vars['voucherAllowed']->value) {?>
          <li><a href="<?php echo htmlspecialchars((string)$_smarty_tpl->tpl_vars['link']->value->getPageLink('discount',true), ENT_QUOTES, 'UTF-8', true);?>
" title="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Vouchers'),$_smarty_tpl ) );?>
"><i class="icon icon-barcode"></i> <span><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'My vouchers'),$_smarty_tpl ) );?>
</span></a></li>
        <?php }?>
        <?php echo $_smarty_tpl->tpl_vars['HOOK_CUSTOMER_ACCOUNT']->value;?>

      </ul>
    </div>
  <?php }?>
</div>
<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>'displayMyAccountBelow'),$_smarty_tpl ) );?>

<nav>
  <ul class="pager">
    <li class="previous">
      <a href="<?php if ((isset($_smarty_tpl->tpl_vars['force_ssl']->value)) && $_smarty_tpl->tpl_vars['force_ssl']->value) {
echo $_smarty_tpl->tpl_vars['base_dir_ssl']->value;
} else {
echo $_smarty_tpl->tpl_vars['base_dir']->value;
}?>">
        <?php if ($_smarty_tpl->tpl_vars['isRtl']->value) {?>&rarr;<?php } else { ?>&larr;<?php }?> <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Home'),$_smarty_tpl ) );?>

      </a>
    </li>
  </ul>
</nav>
<?php }
}
