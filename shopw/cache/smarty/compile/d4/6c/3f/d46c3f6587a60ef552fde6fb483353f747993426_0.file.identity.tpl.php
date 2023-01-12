<?php
/* Smarty version 4.2.1, created on 2023-01-12 22:37:25
  from 'D:\xampp\htdocs\shopw\themes\niara\identity.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.2.1',
  'unifunc' => 'content_63c01b252aa1b9_55144757',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'd46c3f6587a60ef552fde6fb483353f747993426' => 
    array (
      0 => 'D:\\xampp\\htdocs\\shopw\\themes\\niara\\identity.tpl',
      1 => 1664191549,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_63c01b252aa1b9_55144757 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, 'path', null, null);?>
  <a href="<?php echo htmlspecialchars((string)$_smarty_tpl->tpl_vars['link']->value->getPageLink('my-account',true), ENT_QUOTES, 'UTF-8', true);?>
"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'My account'),$_smarty_tpl ) );?>
</a>
  <span class="navigation-pipe"><?php echo $_smarty_tpl->tpl_vars['navigationPipe']->value;?>
</span>
  <span class="navigation_page"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Your personal information'),$_smarty_tpl ) );?>
</span>
<?php $_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);?>

<div class="box">
  <h1 class="page-subheading"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Your personal information'),$_smarty_tpl ) );?>
</h1>

  <?php $_smarty_tpl->_subTemplateRender(((string)$_smarty_tpl->tpl_vars['tpl_dir']->value)."./errors.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
?>

  <?php if ((isset($_smarty_tpl->tpl_vars['confirmation']->value)) && $_smarty_tpl->tpl_vars['confirmation']->value) {?>
    <div class="alert alert-success">
      <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Your personal information has been successfully updated.'),$_smarty_tpl ) );?>

      <?php if ((isset($_smarty_tpl->tpl_vars['pwd_changed']->value))) {?><br><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Your password has been sent to your email:'),$_smarty_tpl ) );?>
 <?php echo $_smarty_tpl->tpl_vars['email']->value;
}?>
    </div>
  <?php } else { ?>
    <p>
      <b><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Please be sure to update your personal information if it has changed.'),$_smarty_tpl ) );?>
</b>
    </p>
    <p class="required">
      <sup>*</sup><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Required field'),$_smarty_tpl ) );?>

    </p>
    <form action="<?php echo htmlspecialchars((string)$_smarty_tpl->tpl_vars['link']->value->getPageLink('identity',true), ENT_QUOTES, 'UTF-8', true);?>
" method="post" class="std">
      <fieldset>
        <div class="form-group">
          <label><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Social title'),$_smarty_tpl ) );?>
</label>
          <div>
            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['genders']->value, 'gender', false, 'k');
$_smarty_tpl->tpl_vars['gender']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['k']->value => $_smarty_tpl->tpl_vars['gender']->value) {
$_smarty_tpl->tpl_vars['gender']->do_else = false;
?>
              <label for="id_gender<?php echo $_smarty_tpl->tpl_vars['gender']->value->id;?>
" class="radio-inline">
                <input type="radio" name="id_gender" id="id_gender<?php echo $_smarty_tpl->tpl_vars['gender']->value->id;?>
" value="<?php echo intval($_smarty_tpl->tpl_vars['gender']->value->id);?>
" <?php if ((isset($_POST['id_gender'])) && $_POST['id_gender'] == $_smarty_tpl->tpl_vars['gender']->value->id) {?>checked="checked"<?php }?>>
                <span class="label-text"><?php echo $_smarty_tpl->tpl_vars['gender']->value->name;?>
</span>
              </label>
            <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
          </div>
        </div>
        <div class="required form-group">
          <label for="firstname" class="required"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'First name'),$_smarty_tpl ) );?>
</label>
          <input class="is_required validate form-control" data-validate="isName" type="text" id="firstname" name="firstname" value="<?php echo $_POST['firstname'];?>
" required>
        </div>
        <div class="required form-group">
          <label for="lastname" class="required"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Last name'),$_smarty_tpl ) );?>
</label>
          <input class="is_required validate form-control" data-validate="isName" type="text" name="lastname" id="lastname" value="<?php echo $_POST['lastname'];?>
" required>
        </div>
        <div class="required form-group">
          <label for="email" class="required"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'E-mail address'),$_smarty_tpl ) );?>
</label>
          <input class="is_required validate form-control" data-validate="isEmail" type="email" name="email" id="email" value="<?php echo $_POST['email'];?>
" required>
        </div>
        <div class="form-group date-select">
          <label><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Date of Birth'),$_smarty_tpl ) );?>
</label>
          <div class="row">
            <div class="col-xs-4">
              <select name="days" id="days" class="form-control">
                <option value="">-</option>
                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['days']->value, 'v');
$_smarty_tpl->tpl_vars['v']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['v']->value) {
$_smarty_tpl->tpl_vars['v']->do_else = false;
?>
                  <option value="<?php echo $_smarty_tpl->tpl_vars['v']->value;?>
" <?php if (($_smarty_tpl->tpl_vars['sl_day']->value == $_smarty_tpl->tpl_vars['v']->value)) {?>selected="selected"<?php }?>><?php echo $_smarty_tpl->tpl_vars['v']->value;?>
&nbsp;&nbsp;</option>
                <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
              </select>
            </div>
            <div class="col-xs-4">
                            <select id="months" name="months" class="form-control">
                <option value="">-</option>
                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['months']->value, 'v', false, 'k');
$_smarty_tpl->tpl_vars['v']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['k']->value => $_smarty_tpl->tpl_vars['v']->value) {
$_smarty_tpl->tpl_vars['v']->do_else = false;
?>
                  <option value="<?php echo $_smarty_tpl->tpl_vars['k']->value;?>
" <?php if (($_smarty_tpl->tpl_vars['sl_month']->value == $_smarty_tpl->tpl_vars['k']->value)) {?>selected="selected"<?php }?>><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>$_smarty_tpl->tpl_vars['v']->value),$_smarty_tpl ) );?>
&nbsp;</option>
                <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
              </select>
            </div>
            <div class="col-xs-4">
              <select id="years" name="years" class="form-control">
                <option value="">-</option>
                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['years']->value, 'v');
$_smarty_tpl->tpl_vars['v']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['v']->value) {
$_smarty_tpl->tpl_vars['v']->do_else = false;
?>
                  <option value="<?php echo $_smarty_tpl->tpl_vars['v']->value;?>
" <?php if (($_smarty_tpl->tpl_vars['sl_year']->value == $_smarty_tpl->tpl_vars['v']->value)) {?>selected="selected"<?php }?>><?php echo $_smarty_tpl->tpl_vars['v']->value;?>
&nbsp;&nbsp;</option>
                <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
              </select>
            </div>
          </div>
        </div>
        <div class="required form-group">
          <label for="old_passwd" class="required"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Current Password'),$_smarty_tpl ) );?>
</label>
          <input class="is_required validate form-control" type="password" data-validate="isPasswd" name="old_passwd" id="old_passwd" required>
        </div>
        <div class="password form-group">
          <label for="passwd"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'New Password'),$_smarty_tpl ) );?>
</label>
          <input class="is_required validate form-control" type="password" data-validate="isPasswd" name="passwd" id="passwd">
        </div>
        <div class="password form-group">
          <label for="confirmation"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Confirmation'),$_smarty_tpl ) );?>
</label>
          <input class="is_required validate form-control" type="password" data-validate="isPasswd" name="confirmation" id="confirmation">
        </div>
        <?php if ((isset($_smarty_tpl->tpl_vars['newsletter']->value)) && $_smarty_tpl->tpl_vars['newsletter']->value) {?>
          <div class="checkbox">
            <label for="newsletter">
              <input type="checkbox" id="newsletter" name="newsletter" value="1" <?php if ((isset($_POST['newsletter'])) && $_POST['newsletter'] == 1) {?> checked="checked"<?php }?>>
              <span class="label-text">
              <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Sign up for our newsletter!'),$_smarty_tpl ) );?>

              </span>
              <?php if ((isset($_smarty_tpl->tpl_vars['required_fields']->value)) && array_key_exists('newsletter',$_smarty_tpl->tpl_vars['field_required']->value)) {?>
                <sup> *</sup>
              <?php }?>
            </label>
          </div>
        <?php }?>
        <?php if ((isset($_smarty_tpl->tpl_vars['optin']->value)) && $_smarty_tpl->tpl_vars['optin']->value) {?>
          <div class="checkbox">
            <label for="optin">
              <input type="checkbox" name="optin" id="optin" value="1" <?php if ((isset($_POST['optin'])) && $_POST['optin'] == 1) {?> checked="checked"<?php }?>>
              <span class="label-text">
              <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Receive special offers from our partners!'),$_smarty_tpl ) );?>

              </span>
              <?php if ((isset($_smarty_tpl->tpl_vars['required_fields']->value)) && array_key_exists('optin',$_smarty_tpl->tpl_vars['field_required']->value)) {?>
                <sup> *</sup>
              <?php }?>
            </label>
          </div>
        <?php }?>
        <?php if ($_smarty_tpl->tpl_vars['b2b_enable']->value) {?>
          <h1 class="page-subheading"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Your company information'),$_smarty_tpl ) );?>
</h1>
          <div class="form-group">
            <label for="company"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Company'),$_smarty_tpl ) );?>
</label>
            <input type="text" class="form-control" id="company" name="company" value="<?php if ((isset($_POST['company']))) {
echo $_POST['company'];
}?>">
          </div>
          <div class="form-group">
            <label for="siret"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'SIRET'),$_smarty_tpl ) );?>
</label>
            <input type="text" class="form-control" id="siret" name="siret" value="<?php if ((isset($_POST['siret']))) {
echo $_POST['siret'];
}?>">
          </div>
          <div class="form-group">
            <label for="ape"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'APE'),$_smarty_tpl ) );?>
</label>
            <input type="text" class="form-control" id="ape" name="ape" value="<?php if ((isset($_POST['ape']))) {
echo $_POST['ape'];
}?>">
          </div>
          <div class="form-group">
            <label for="website"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Website'),$_smarty_tpl ) );?>
</label>
            <input type="text" class="form-control" id="website" name="website" value="<?php if ((isset($_POST['website']))) {
echo $_POST['website'];
}?>">
          </div>
        <?php }?>
        <?php if ((isset($_smarty_tpl->tpl_vars['HOOK_CUSTOMER_IDENTITY_FORM']->value))) {?>
          <?php echo $_smarty_tpl->tpl_vars['HOOK_CUSTOMER_IDENTITY_FORM']->value;?>

        <?php }?>
        <div class="form-group">
          <button type="submit" name="submitIdentity" class="btn btn-lg btn-success">
            <span><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Save'),$_smarty_tpl ) );?>
 <i class="icon icon-chevron-right"></i></span>
          </button>
        </div>
      </fieldset>
    </form>
  <?php }?>
</div>

<nav>
  <ul class="pager">
    <li class="previous">
      <a href="<?php echo htmlspecialchars((string)$_smarty_tpl->tpl_vars['link']->value->getPageLink('my-account',true), ENT_QUOTES, 'UTF-8', true);?>
">
        <?php if ($_smarty_tpl->tpl_vars['isRtl']->value) {?>&rarr;<?php } else { ?>&larr;<?php }?> <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Back to your account'),$_smarty_tpl ) );?>

      </a>
    </li>
  </ul>
</nav>
<?php }
}
