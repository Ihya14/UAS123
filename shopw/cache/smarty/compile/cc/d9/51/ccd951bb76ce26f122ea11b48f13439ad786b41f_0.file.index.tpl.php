<?php
/* Smarty version 4.2.1, created on 2023-01-12 13:55:51
  from 'D:\xampp\htdocs\shopw\themes\niara\index.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.2.1',
  'unifunc' => 'content_63bfa0e7024009_31028184',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'ccd951bb76ce26f122ea11b48f13439ad786b41f' => 
    array (
      0 => 'D:\\xampp\\htdocs\\shopw\\themes\\niara\\index.tpl',
      1 => 1664191549,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_63bfa0e7024009_31028184 (Smarty_Internal_Template $_smarty_tpl) {
if (!empty($_smarty_tpl->tpl_vars['HOOK_HOME_TAB']->value)) {?>
  <ul id="home-page-tabs" class="nav nav-tabs">
    <?php echo $_smarty_tpl->tpl_vars['HOOK_HOME_TAB']->value;?>

  </ul>
<?php }?>

<?php if (!empty($_smarty_tpl->tpl_vars['HOOK_HOME_TAB_CONTENT']->value)) {?>
  <div class="tab-content">
    <?php echo $_smarty_tpl->tpl_vars['HOOK_HOME_TAB_CONTENT']->value;?>

  </div>
<?php }?>

<?php if (!empty($_smarty_tpl->tpl_vars['HOOK_HOME']->value)) {?>
  <div class="row">
    <?php echo $_smarty_tpl->tpl_vars['HOOK_HOME']->value;?>

  </div>
<?php }
}
}
