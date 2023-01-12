<?php
/* Smarty version 4.2.1, created on 2023-01-12 14:08:37
  from 'D:\xampp\htdocs\shopw\themes\niara\modules\blockmyaccountfooter\blockmyaccountfooter.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.2.1',
  'unifunc' => 'content_63bfa3e5c7e930_68522380',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'd06201dae0765e9ecabf1476716cd411efe85754' => 
    array (
      0 => 'D:\\xampp\\htdocs\\shopw\\themes\\niara\\modules\\blockmyaccountfooter\\blockmyaccountfooter.tpl',
      1 => 1664191549,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_63bfa3e5c7e930_68522380 (Smarty_Internal_Template $_smarty_tpl) {
?><section id="blockmyaccountfooter" class="col-xs-12 col-sm-3">
  <h2 class="footer-title section-title-footer"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'My account','mod'=>'blockmyaccountfooter'),$_smarty_tpl ) );?>
</h2>
  <ul class="list-unstyled">
    <li>
      <a href="<?php echo htmlspecialchars((string)$_smarty_tpl->tpl_vars['link']->value->getPageLink('my-account',true), ENT_QUOTES, 'UTF-8', true);?>
" title="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Manage my customer account','mod'=>'blockmyaccountfooter'),$_smarty_tpl ) );?>
" rel="nofollow">
        <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'My account','mod'=>'blockmyaccountfooter'),$_smarty_tpl ) );?>

      </a>
    </li>
    <li>
      <a href="<?php echo htmlspecialchars((string)$_smarty_tpl->tpl_vars['link']->value->getPageLink('history',true), ENT_QUOTES, 'UTF-8', true);?>
" title="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'My orders','mod'=>'blockmyaccountfooter'),$_smarty_tpl ) );?>
" rel="nofollow">
        <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'My orders','mod'=>'blockmyaccountfooter'),$_smarty_tpl ) );?>

      </a>
    </li>
    <?php if ($_smarty_tpl->tpl_vars['returnAllowed']->value) {?>
      <li>
        <a href="<?php echo htmlspecialchars((string)$_smarty_tpl->tpl_vars['link']->value->getPageLink('order-follow',true), ENT_QUOTES, 'UTF-8', true);?>
" title="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'My merchandise returns','mod'=>'blockmyaccountfooter'),$_smarty_tpl ) );?>
" rel="nofollow">
          <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'My merchandise returns','mod'=>'blockmyaccountfooter'),$_smarty_tpl ) );?>

        </a>
      </li>
    <?php }?>
    <li>
      <a href="<?php echo htmlspecialchars((string)$_smarty_tpl->tpl_vars['link']->value->getPageLink('order-slip',true), ENT_QUOTES, 'UTF-8', true);?>
" title="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'My credit slips','mod'=>'blockmyaccountfooter'),$_smarty_tpl ) );?>
" rel="nofollow">
        <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'My credit slips','mod'=>'blockmyaccountfooter'),$_smarty_tpl ) );?>

      </a>
    </li>
    <li>
      <a href="<?php echo htmlspecialchars((string)$_smarty_tpl->tpl_vars['link']->value->getPageLink('addresses',true), ENT_QUOTES, 'UTF-8', true);?>
" title="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'My addresses','mod'=>'blockmyaccountfooter'),$_smarty_tpl ) );?>
" rel="nofollow">
        <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'My addresses','mod'=>'blockmyaccountfooter'),$_smarty_tpl ) );?>

      </a>
    </li>
    <li>
      <a href="<?php echo htmlspecialchars((string)$_smarty_tpl->tpl_vars['link']->value->getPageLink('identity',true), ENT_QUOTES, 'UTF-8', true);?>
" title="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Manage my personal information','mod'=>'blockmyaccountfooter'),$_smarty_tpl ) );?>
" rel="nofollow">
        <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'My personal info','mod'=>'blockmyaccountfooter'),$_smarty_tpl ) );?>

      </a>
    </li>
    <?php if ($_smarty_tpl->tpl_vars['voucherAllowed']->value) {?>
      <li>
        <a href="<?php echo htmlspecialchars((string)$_smarty_tpl->tpl_vars['link']->value->getPageLink('discount',true), ENT_QUOTES, 'UTF-8', true);?>
" title="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'My vouchers','mod'=>'blockmyaccountfooter'),$_smarty_tpl ) );?>
" rel="nofollow">
          <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'My vouchers','mod'=>'blockmyaccountfooter'),$_smarty_tpl ) );?>

        </a>
      </li>
    <?php }?>
    <?php echo $_smarty_tpl->tpl_vars['HOOK_BLOCK_MY_ACCOUNT']->value;?>

    <?php if ($_smarty_tpl->tpl_vars['is_logged']->value) {?>
      <li>
        <a href="<?php echo $_smarty_tpl->tpl_vars['link']->value->getPageLink('index');?>
?mylogout" title="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Sign out','mod'=>'blockmyaccountfooter'),$_smarty_tpl ) );?>
" rel="nofollow">
          <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Sign out','mod'=>'blockmyaccountfooter'),$_smarty_tpl ) );?>

        </a>
      </li>
    <?php }?>
  </ul>
</section>
<?php }
}
