<?php
/* Smarty version 4.2.1, created on 2023-01-12 14:08:38
  from 'D:\xampp\htdocs\shopw\themes\niara\modules\blockcontactinfos\blockcontactinfos.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.2.1',
  'unifunc' => 'content_63bfa3e615c523_78691176',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '461dda1e0ff2b714702c29298bfa66188f34297e' => 
    array (
      0 => 'D:\\xampp\\htdocs\\shopw\\themes\\niara\\modules\\blockcontactinfos\\blockcontactinfos.tpl',
      1 => 1664191549,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_63bfa3e615c523_78691176 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'D:\\xampp\\htdocs\\shopw\\vendor\\smarty\\smarty\\libs\\plugins\\function.mailto.php','function'=>'smarty_function_mailto',),));
?>
<section id="blockcontactinfos" class="col-xs-12 col-sm-3">
  <h2 class="footer-title section-title-footer"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Store Information','mod'=>'blockcontactinfos'),$_smarty_tpl ) );?>
</h2>
  <address>
    <ul class="list-unstyled">
      <?php if (!empty($_smarty_tpl->tpl_vars['blockcontactinfos_company']->value)) {?>
        <li>
          <b><?php echo htmlspecialchars((string)$_smarty_tpl->tpl_vars['blockcontactinfos_company']->value, ENT_QUOTES, 'UTF-8', true);?>
</b>
        </li>
      <?php }?>
      <?php if (!empty($_smarty_tpl->tpl_vars['blockcontactinfos_address']->value)) {?>
        <li>
          <?php echo nl2br(htmlspecialchars((string)$_smarty_tpl->tpl_vars['blockcontactinfos_address']->value, ENT_QUOTES, 'UTF-8', true));?>

        </li>
      <?php }?>
      <?php if (!empty($_smarty_tpl->tpl_vars['blockcontactinfos_phone']->value)) {?>
        <li>
          <i class="icon icon-phone"></i>
          <a href="tel:<?php echo htmlspecialchars((string)$_smarty_tpl->tpl_vars['blockcontactinfos_phone']->value, ENT_QUOTES, 'UTF-8', true);?>
"><?php echo htmlspecialchars((string)$_smarty_tpl->tpl_vars['blockcontactinfos_phone']->value, ENT_QUOTES, 'UTF-8', true);?>
</a>
        </li>
      <?php }?>
      <?php if (!empty($_smarty_tpl->tpl_vars['blockcontactinfos_email']->value)) {?>
        <li>
          <i class="icon icon-envelope-alt"></i>
          <?php echo smarty_function_mailto(array('address'=>htmlspecialchars((string)$_smarty_tpl->tpl_vars['blockcontactinfos_email']->value, ENT_QUOTES, 'UTF-8', true),'encode'=>"hex"),$_smarty_tpl);?>

        </li>
      <?php }?>
    </ul>
  </address>
</section>
<?php }
}
