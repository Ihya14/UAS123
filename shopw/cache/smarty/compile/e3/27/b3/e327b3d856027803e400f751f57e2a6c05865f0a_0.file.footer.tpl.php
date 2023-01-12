<?php
/* Smarty version 4.2.1, created on 2023-01-12 13:55:51
  from 'D:\xampp\htdocs\shopw\themes\niara\footer.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.2.1',
  'unifunc' => 'content_63bfa0e781e911_47161712',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'e327b3d856027803e400f751f57e2a6c05865f0a' => 
    array (
      0 => 'D:\\xampp\\htdocs\\shopw\\themes\\niara\\footer.tpl',
      1 => 1664191549,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_63bfa0e781e911_47161712 (Smarty_Internal_Template $_smarty_tpl) {
if (!(isset($_smarty_tpl->tpl_vars['content_only']->value)) || !$_smarty_tpl->tpl_vars['content_only']->value) {?>
      </main>    <?php if ((isset($_smarty_tpl->tpl_vars['right_column_size']->value)) && !empty($_smarty_tpl->tpl_vars['right_column_size']->value)) {?>
      <aside id="right_column" class="col-xs-12 col-sm-<?php echo intval($_smarty_tpl->tpl_vars['right_column_size']->value);?>
" role="navigation complementary"><?php echo $_smarty_tpl->tpl_vars['HOOK_RIGHT_COLUMN']->value;?>
</aside>
    <?php }?>
    </div>  </div>
  <footer id="footer">

    <?php if ((isset($_smarty_tpl->tpl_vars['HOOK_FOOTER']->value))) {?>
      <div class="container">
        <div class="row"><?php echo $_smarty_tpl->tpl_vars['HOOK_FOOTER']->value;?>
</div>
      </div>
    <?php }?>

    <?php if (!empty($_smarty_tpl->tpl_vars['ctheme']->value['footer']['copyright']['display'])) {?>
      <div id="copyright-footer" role="contentinfo">
        <?php echo $_smarty_tpl->tpl_vars['ctheme']->value['footer']['copyright']['html'];?>

      </div>
    <?php }?>

  </footer>

<?php }
$_smarty_tpl->_subTemplateRender(((string)$_smarty_tpl->tpl_vars['tpl_dir']->value)."./global.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
?>
</body>
</html>
<?php }
}
