<?php
/* Smarty version 4.2.1, created on 2023-01-12 22:37:11
  from 'D:\xampp\htdocs\shopw\themes\niara\authentication-login.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.2.1',
  'unifunc' => 'content_63c01b178bf020_25559384',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '4eb64693ee67e2ea8a38bb6a3089b51d2b1de0aa' => 
    array (
      0 => 'D:\\xampp\\htdocs\\shopw\\themes\\niara\\authentication-login.tpl',
      1 => 1664191549,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_63c01b178bf020_25559384 (Smarty_Internal_Template $_smarty_tpl) {
?><div class="row">
  <div class="col-xs-12 col-sm-6">
    <form action="<?php echo htmlspecialchars((string)$_smarty_tpl->tpl_vars['link']->value->getPageLink('authentication',true), ENT_QUOTES, 'UTF-8', true);?>
" method="post" id="create-account_form" class="box">
      <h3 class="page-subheading"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Create an account'),$_smarty_tpl ) );?>
</h3>
      <div class="form_content clearfix">
        <p><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Please enter your email address to create an account.'),$_smarty_tpl ) );?>
</p>
        <div class="alert alert-danger" id="create_account_error" style="display:none"></div>
        <div class="form-group">
          <label for="email_create"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Email address'),$_smarty_tpl ) );?>
</label>
          <input type="email" class="is_required validate account_input form-control" data-validate="isEmail" id="email_create" name="email_create" value="<?php if ((isset($_POST['email_create']))) {
echo stripslashes($_POST['email_create']);
}?>" required>
        </div>
        <div class="submit">
          <?php if ((isset($_smarty_tpl->tpl_vars['back']->value))) {?><input type="hidden" class="hidden" name="back" value="<?php echo htmlspecialchars((string)$_smarty_tpl->tpl_vars['back']->value, ENT_QUOTES, 'UTF-8', true);?>
"><?php }?>
          <button class="btn btn-lg btn-success" type="submit" id="SubmitCreate" name="SubmitCreate">
            <i class="icon icon-user-plus"></i> <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Create an account'),$_smarty_tpl ) );?>

          </button>
          <input type="hidden" class="hidden" name="SubmitCreate" value="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Create an account'),$_smarty_tpl ) );?>
">
        </div>
      </div>
    </form>
  </div>
  <div class="col-xs-12 col-sm-6">
    <form action="<?php echo htmlspecialchars((string)$_smarty_tpl->tpl_vars['link']->value->getPageLink('authentication',true), ENT_QUOTES, 'UTF-8', true);?>
" method="post" id="login_form" class="box">
      <h3 class="page-subheading"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Already registered?'),$_smarty_tpl ) );?>
</h3>
      <div class="form_content clearfix">
        <div class="form-group">
          <label for="email"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Email address'),$_smarty_tpl ) );?>
</label>
          <input class="is_required validate account_input form-control" data-validate="isEmail" type="email" id="email" name="email" value="<?php if ((isset($_POST['email']))) {
echo stripslashes($_POST['email']);
}?>" required>
        </div>
        <div class="form-group">
          <label for="passwd"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Password'),$_smarty_tpl ) );?>
</label>
          <input class="is_required validate account_input form-control" type="password" data-validate="isPasswd" id="passwd" name="passwd" value="" required>
        </div>
        <div class="lost_password form-group"><a href="<?php echo htmlspecialchars((string)$_smarty_tpl->tpl_vars['link']->value->getPageLink('password'), ENT_QUOTES, 'UTF-8', true);?>
" title="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Recover your forgotten password'),$_smarty_tpl ) );?>
" rel="nofollow"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Forgot your password?'),$_smarty_tpl ) );?>
</a></div>
        <div class="submit">
          <?php if ((isset($_smarty_tpl->tpl_vars['back']->value))) {?><input type="hidden" class="hidden" name="back" value="<?php echo htmlspecialchars((string)$_smarty_tpl->tpl_vars['back']->value, ENT_QUOTES, 'UTF-8', true);?>
"><?php }?>
          <button type="submit" id="SubmitLogin" name="SubmitLogin" class="btn btn-lg btn-success">
            <i class="icon icon-sign-in"></i> <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Sign in'),$_smarty_tpl ) );?>

          </button>
        </div>
      </div>
    </form>
  </div>
</div>
<?php }
}
