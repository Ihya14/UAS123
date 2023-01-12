<?php
/* Smarty version 4.2.1, created on 2023-01-12 14:15:07
  from 'D:\xampp\htdocs\shopw\themes\niara\modules\blockmyaccount\blockmyaccount.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.2.1',
  'unifunc' => 'content_63bfa56b42a473_85148821',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '281053ffdf244bedc6021c15794747e027f72127' => 
    array (
      0 => 'D:\\xampp\\htdocs\\shopw\\themes\\niara\\modules\\blockmyaccount\\blockmyaccount.tpl',
      1 => 1664191549,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_63bfa56b42a473_85148821 (Smarty_Internal_Template $_smarty_tpl) {
?><section>
    <div class="block myaccount-column">
        <h2 class="title_block section-title-column">
            <a href="<?php echo htmlspecialchars((string)$_smarty_tpl->tpl_vars['link']->value->getPageLink('my-account',true), ENT_QUOTES, 'UTF-8', true);?>
"
               title="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'My account','mod'=>'blockmyaccount'),$_smarty_tpl ) );?>
">
                <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'My account','mod'=>'blockmyaccount'),$_smarty_tpl ) );?>

            </a>
        </h2>
        <div class="block_content list-block">
            <ul>
                <li>
                    <a href="<?php echo htmlspecialchars((string)$_smarty_tpl->tpl_vars['link']->value->getPageLink('history',true), ENT_QUOTES, 'UTF-8', true);?>
"
                       title="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'My orders','mod'=>'blockmyaccount'),$_smarty_tpl ) );?>
">
                        <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'My orders','mod'=>'blockmyaccount'),$_smarty_tpl ) );?>

                    </a>
                </li>
                <?php if ($_smarty_tpl->tpl_vars['returnAllowed']->value) {?>
                    <li>
                        <a href="<?php echo htmlspecialchars((string)$_smarty_tpl->tpl_vars['link']->value->getPageLink('order-follow',true), ENT_QUOTES, 'UTF-8', true);?>
"
                           title="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'My merchandise returns','mod'=>'blockmyaccount'),$_smarty_tpl ) );?>
">
                            <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'My merchandise returns','mod'=>'blockmyaccount'),$_smarty_tpl ) );?>

                        </a>
                    </li>
                <?php }?>
                <li>
                    <a href="<?php echo htmlspecialchars((string)$_smarty_tpl->tpl_vars['link']->value->getPageLink('order-slip',true), ENT_QUOTES, 'UTF-8', true);?>
"
                       title="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'My credit slips','mod'=>'blockmyaccount'),$_smarty_tpl ) );?>
">
                        <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'My credit slips','mod'=>'blockmyaccount'),$_smarty_tpl ) );?>

                    </a>
                </li>
                <li>
                    <a href="<?php echo htmlspecialchars((string)$_smarty_tpl->tpl_vars['link']->value->getPageLink('addresses',true), ENT_QUOTES, 'UTF-8', true);?>
"
                       title="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'My addresses','mod'=>'blockmyaccount'),$_smarty_tpl ) );?>
">
                        <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'My addresses','mod'=>'blockmyaccount'),$_smarty_tpl ) );?>

                    </a>
                </li>
                <li>
                    <a href="<?php echo htmlspecialchars((string)$_smarty_tpl->tpl_vars['link']->value->getPageLink('identity',true), ENT_QUOTES, 'UTF-8', true);?>
"
                       title="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'My personal info','mod'=>'blockmyaccount'),$_smarty_tpl ) );?>
">
                        <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'My personal info','mod'=>'blockmyaccount'),$_smarty_tpl ) );?>

                    </a>
                </li>
                <?php if ($_smarty_tpl->tpl_vars['voucherAllowed']->value) {?>
                    <li>
                        <a href="<?php echo htmlspecialchars((string)$_smarty_tpl->tpl_vars['link']->value->getPageLink('discount',true), ENT_QUOTES, 'UTF-8', true);?>
"
                           title="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'My vouchers','mod'=>'blockmyaccount'),$_smarty_tpl ) );?>
">
                            <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'My vouchers','mod'=>'blockmyaccount'),$_smarty_tpl ) );?>

                        </a>
                    </li>
                <?php }?>
                <?php echo $_smarty_tpl->tpl_vars['HOOK_BLOCK_MY_ACCOUNT']->value;?>

            </ul>
            <div class="logout">
                <a
                        class="btn btn-warning"
                        href="<?php echo htmlspecialchars((string)$_smarty_tpl->tpl_vars['link']->value->getPageLink('index',true,NULL,"mylogout"), ENT_QUOTES, 'UTF-8', true);?>
"
                        title="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Sign out','mod'=>'blockmyaccount'),$_smarty_tpl ) );?>
">
                    <span><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Sign out','mod'=>'blockmyaccount'),$_smarty_tpl ) );?>
 <i class="icon icon-chevron-right"></i></span>
                </a>
            </div>
        </div>
    </div>
</section>
<?php }
}
