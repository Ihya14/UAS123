<?php
/* Smarty version 4.2.1, created on 2023-01-12 13:55:51
  from 'D:\xampp\htdocs\shopw\themes\niara\modules\blocklanguages\blocklanguages.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.2.1',
  'unifunc' => 'content_63bfa0e757f192_24353405',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '804c709bd6b1d424c838529b68f4559482aaf1a6' => 
    array (
      0 => 'D:\\xampp\\htdocs\\shopw\\themes\\niara\\modules\\blocklanguages\\blocklanguages.tpl',
      1 => 1664191549,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_63bfa0e757f192_24353405 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'D:\\xampp\\htdocs\\shopw\\vendor\\smarty\\smarty\\libs\\plugins\\modifier.regex_replace.php','function'=>'smarty_modifier_regex_replace',),));
if (!empty($_smarty_tpl->tpl_vars['languages']->value)) {?>

  <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['languages']->value, 'language', false, 'k', 'languages', array (
));
$_smarty_tpl->tpl_vars['language']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['k']->value => $_smarty_tpl->tpl_vars['language']->value) {
$_smarty_tpl->tpl_vars['language']->do_else = false;
?>
    <?php if ($_smarty_tpl->tpl_vars['language']->value['iso_code'] == $_smarty_tpl->tpl_vars['lang_iso']->value) {?>
      <?php $_smarty_tpl->_assignInScope('current_iso', smarty_modifier_regex_replace($_smarty_tpl->tpl_vars['language']->value['name'],"/\s\(.*\)"."$"."/",''));?>
      <?php break 1;?>
    <?php }?>
  <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>

  <li id="blocklanguages" class="dropdown">
    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
      <?php echo htmlspecialchars((string)$_smarty_tpl->tpl_vars['current_iso']->value, ENT_QUOTES, 'UTF-8', true);?>
 <span class="caret"></span>
    </a>
    <ul class="dropdown-menu">
      <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['languages']->value, 'language', false, 'k', 'languages', array (
));
$_smarty_tpl->tpl_vars['language']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['k']->value => $_smarty_tpl->tpl_vars['language']->value) {
$_smarty_tpl->tpl_vars['language']->do_else = false;
?>
        <li<?php if ($_smarty_tpl->tpl_vars['language']->value['iso_code'] == $_smarty_tpl->tpl_vars['lang_iso']->value) {?> class="active"<?php }?>>

          <?php $_smarty_tpl->_assignInScope('indice_lang', $_smarty_tpl->tpl_vars['language']->value['id_lang']);?>

          <?php if ((isset($_smarty_tpl->tpl_vars['lang_rewrite_urls']->value[$_smarty_tpl->tpl_vars['indice_lang']->value]))) {?>
            <a href="<?php echo htmlspecialchars((string)$_smarty_tpl->tpl_vars['lang_rewrite_urls']->value[$_smarty_tpl->tpl_vars['indice_lang']->value], ENT_QUOTES, 'UTF-8', true);?>
" title="<?php echo htmlspecialchars((string)$_smarty_tpl->tpl_vars['language']->value['name'], ENT_QUOTES, 'UTF-8', true);?>
" rel="alternate" hreflang="<?php echo htmlspecialchars((string)$_smarty_tpl->tpl_vars['language']->value['iso_code'], ENT_QUOTES, 'UTF-8', true);?>
">
              <span><?php echo smarty_modifier_regex_replace($_smarty_tpl->tpl_vars['language']->value['name'],"/\s\(.*\)"."$"."/",'');?>
</span>
            </a>
          <?php } else { ?>
            <a href="<?php echo htmlspecialchars((string)$_smarty_tpl->tpl_vars['link']->value->getLanguageLink($_smarty_tpl->tpl_vars['language']->value['id_lang']), ENT_QUOTES, 'UTF-8', true);?>
" title="<?php echo htmlspecialchars((string)$_smarty_tpl->tpl_vars['language']->value['name'], ENT_QUOTES, 'UTF-8', true);?>
" rel="alternate" hreflang="<?php echo htmlspecialchars((string)$_smarty_tpl->tpl_vars['language']->value['iso_code'], ENT_QUOTES, 'UTF-8', true);?>
">
              <span><?php echo smarty_modifier_regex_replace($_smarty_tpl->tpl_vars['language']->value['name'],"/\s\(.*\)"."$"."/",'');?>
</span>
            </a>
          <?php }?>

        </li>
      <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
    </ul>
  </li>

<?php }
}
}
