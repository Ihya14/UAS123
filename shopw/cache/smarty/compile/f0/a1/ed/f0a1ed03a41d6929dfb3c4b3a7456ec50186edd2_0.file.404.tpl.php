<?php
/* Smarty version 4.2.1, created on 2023-01-12 14:15:07
  from 'D:\xampp\htdocs\shopw\themes\niara\404.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.2.1',
  'unifunc' => 'content_63bfa56bdc5699_56618235',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'f0a1ed03a41d6929dfb3c4b3a7456ec50186edd2' => 
    array (
      0 => 'D:\\xampp\\htdocs\\shopw\\themes\\niara\\404.tpl',
      1 => 1664191549,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_63bfa56bdc5699_56618235 (Smarty_Internal_Template $_smarty_tpl) {
?><div class="pagenotfound jumbotron text-center">
  <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>'displayNotFoundTop'),$_smarty_tpl ) );?>

  <h2><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'This page is not available'),$_smarty_tpl ) );?>
</h2>
  <p><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'We\'re sorry, but the Web address you\'ve entered is no longer available.'),$_smarty_tpl ) );?>
</p>
  <p><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'To find a product, please type its name in the field below.'),$_smarty_tpl ) );?>
</p>
  <form action="<?php echo htmlspecialchars((string)$_smarty_tpl->tpl_vars['link']->value->getPageLink('search'), ENT_QUOTES, 'UTF-8', true);?>
" method="post">
    <div>
      <label for="search_query"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Search our product catalog:'),$_smarty_tpl ) );?>
</label>
      <div class="input-group">
        <input id="search_query" name="search_query" type="text" class="form-control">
        <span class="input-group-btn">
          <button type="submit" name="Submit" value="OK" class="btn btn-primary"><i class="icon icon-search"></i></button>
        </span>
      </div>
    </div>
  </form>
</div>
<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>'displayNotFoundBottom'),$_smarty_tpl ) );?>

<nav>
  <ul class="pager">
    <li>
      <a href="<?php if ((isset($_smarty_tpl->tpl_vars['force_ssl']->value)) && $_smarty_tpl->tpl_vars['force_ssl']->value) {
echo $_smarty_tpl->tpl_vars['base_dir_ssl']->value;
} else {
echo $_smarty_tpl->tpl_vars['base_dir']->value;
}?>" title="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Home'),$_smarty_tpl ) );?>
">
        <?php if ($_smarty_tpl->tpl_vars['isRtl']->value) {?>&rarr;<?php } else { ?>&larr;<?php }?> <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Home page'),$_smarty_tpl ) );?>

      </a>
    </li>
  </ul>
</nav>
<?php }
}
