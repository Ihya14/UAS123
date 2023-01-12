<?php
/* Smarty version 4.2.1, created on 2023-01-12 22:28:17
  from 'D:\xampp\htdocs\shopw\modules\coreupdater\views\templates\admin\error.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.2.1',
  'unifunc' => 'content_63c01901e28128_10064833',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '3617b4109fe28bcc4842327c4af7e89aea005497' => 
    array (
      0 => 'D:\\xampp\\htdocs\\shopw\\modules\\coreupdater\\views\\templates\\admin\\error.tpl',
      1 => 1666079804,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_63c01901e28128_10064833 (Smarty_Internal_Template $_smarty_tpl) {
?><div class="panel" id="error-block" style="<?php if (!(isset($_smarty_tpl->tpl_vars['errorMessage']->value)) || !$_smarty_tpl->tpl_vars['errorMessage']->value) {?>display:none<?php }?>">
  <div class="panel-heading">
    <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Oh snap! We have encountered an error','mod'=>'coreupdater'),$_smarty_tpl ) );?>

  </div>
  <div class="alert alert-danger">
    <h4 id="error-message"><?php if ((isset($_smarty_tpl->tpl_vars['errorMessage']->value))) {
echo $_smarty_tpl->tpl_vars['errorMessage']->value;
}?></h4>
    <div>
      <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Details','mod'=>'coreupdater'),$_smarty_tpl ) );?>

    </div>
    <pre id="error-details"><?php if ((isset($_smarty_tpl->tpl_vars['errorDetails']->value))) {
echo $_smarty_tpl->tpl_vars['errorDetails']->value;
}?></pre>
  </div>
</div>
<?php }
}
