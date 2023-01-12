<?php
/* Smarty version 4.2.1, created on 2023-01-12 13:55:50
  from 'D:\xampp\htdocs\shopw\themes\niara\modules\blockcms\blockcms.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.2.1',
  'unifunc' => 'content_63bfa0e6b25929_96424549',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '9aaee48c68960957938127660732ce4763fd2bd9' => 
    array (
      0 => 'D:\\xampp\\htdocs\\shopw\\themes\\niara\\modules\\blockcms\\blockcms.tpl',
      1 => 1664191549,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_63bfa0e6b25929_96424549 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->compiled->nocache_hash = '32759156563bfa0e6af8691_95641400';
if ($_smarty_tpl->tpl_vars['block']->value == 1) {?>
    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['cms_titles']->value, 'cms_title');
$_smarty_tpl->tpl_vars['cms_title']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['cms_title']->value) {
$_smarty_tpl->tpl_vars['cms_title']->do_else = false;
?>
        <section class="blockcms-block blockcms-block-col block">
            <h2 class="title_block section-title-column">
                <a href="<?php echo htmlspecialchars((string)$_smarty_tpl->tpl_vars['cms_title']->value['category_link'], ENT_QUOTES, 'UTF-8', true);?>
">
                    <?php if (!empty($_smarty_tpl->tpl_vars['cms_title']->value['name'])) {
echo $_smarty_tpl->tpl_vars['cms_title']->value['name'];
} else {
echo $_smarty_tpl->tpl_vars['cms_title']->value['category_name'];
}?>
                </a>
            </h2>
            <div class="block_content list-block">
                <nav>
                    <ul>
                        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['cms_title']->value['categories'], 'cms_page');
$_smarty_tpl->tpl_vars['cms_page']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['cms_page']->value) {
$_smarty_tpl->tpl_vars['cms_page']->do_else = false;
?>
                            <?php if ((isset($_smarty_tpl->tpl_vars['cms_page']->value['link']))) {?>
                                <li>

                                    <a href="<?php echo htmlspecialchars((string)$_smarty_tpl->tpl_vars['cms_page']->value['link'], ENT_QUOTES, 'UTF-8', true);?>
"
                                       title="<?php echo htmlspecialchars((string)$_smarty_tpl->tpl_vars['cms_page']->value['name'], ENT_QUOTES, 'UTF-8', true);?>
">
                                        <?php echo htmlspecialchars((string)$_smarty_tpl->tpl_vars['cms_page']->value['name'], ENT_QUOTES, 'UTF-8', true);?>

                                    </a>

                                </li>
                            <?php }?>
                        <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['cms_title']->value['cms'], 'cms_page');
$_smarty_tpl->tpl_vars['cms_page']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['cms_page']->value) {
$_smarty_tpl->tpl_vars['cms_page']->do_else = false;
?>
                            <?php if ((isset($_smarty_tpl->tpl_vars['cms_page']->value['link']))) {?>
                                <li>

                                    <a href="<?php echo htmlspecialchars((string)$_smarty_tpl->tpl_vars['cms_page']->value['link'], ENT_QUOTES, 'UTF-8', true);?>
"
                                       title="<?php echo htmlspecialchars((string)$_smarty_tpl->tpl_vars['cms_page']->value['meta_title'], ENT_QUOTES, 'UTF-8', true);?>
">
                                        <?php echo htmlspecialchars((string)$_smarty_tpl->tpl_vars['cms_page']->value['meta_title'], ENT_QUOTES, 'UTF-8', true);?>

                                    </a>

                                </li>
                            <?php }?>
                        <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                        <?php if ($_smarty_tpl->tpl_vars['cms_title']->value['display_store']) {?>
                            <li>

                                <a href="<?php echo htmlspecialchars((string)$_smarty_tpl->tpl_vars['link']->value->getPageLink('stores'), ENT_QUOTES, 'UTF-8', true);?>
"
                                   title="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Our stores','mod'=>'blockcms'),$_smarty_tpl ) );?>
">
                                    <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Our stores','mod'=>'blockcms'),$_smarty_tpl ) );?>

                                </a>

                            </li>
                        <?php }?>
                    </ul>
                </nav>
            </div>
        </section>
    <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);
} else { ?>
    <section id="blockcms-footer" class="blockcms-block col-xs-12 col-sm-3">
        <h2 class="footer-title title_block section-title-footer"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Information','mod'=>'blockcms'),$_smarty_tpl ) );?>
</h2>
        <nav>
            <ul class="list-unstyled">
                <?php if ((isset($_smarty_tpl->tpl_vars['show_price_drop']->value)) && $_smarty_tpl->tpl_vars['show_price_drop']->value && !$_smarty_tpl->tpl_vars['PS_CATALOG_MODE']->value) {?>
                    <li>

                        <a href="<?php echo htmlspecialchars((string)$_smarty_tpl->tpl_vars['link']->value->getPageLink('prices-drop'), ENT_QUOTES, 'UTF-8', true);?>
"
                           title="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Specials','mod'=>'blockcms'),$_smarty_tpl ) );?>
">
                            <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Specials','mod'=>'blockcms'),$_smarty_tpl ) );?>

                        </a>

                    </li>
                <?php }?>
                <?php if ((isset($_smarty_tpl->tpl_vars['show_new_products']->value)) && $_smarty_tpl->tpl_vars['show_new_products']->value) {?>
                    <li>

                        <a href="<?php echo htmlspecialchars((string)$_smarty_tpl->tpl_vars['link']->value->getPageLink('new-products'), ENT_QUOTES, 'UTF-8', true);?>
"
                           title="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'New products','mod'=>'blockcms'),$_smarty_tpl ) );?>
">
                            <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'New products','mod'=>'blockcms'),$_smarty_tpl ) );?>

                        </a>

                    </li>
                <?php }?>
                <?php if ((isset($_smarty_tpl->tpl_vars['show_best_sales']->value)) && $_smarty_tpl->tpl_vars['show_best_sales']->value && !$_smarty_tpl->tpl_vars['PS_CATALOG_MODE']->value) {?>
                    <li>

                        <a href="<?php echo htmlspecialchars((string)$_smarty_tpl->tpl_vars['link']->value->getPageLink('best-sales'), ENT_QUOTES, 'UTF-8', true);?>
"
                           title="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Top sellers','mod'=>'blockcms'),$_smarty_tpl ) );?>
">
                            <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Top sellers','mod'=>'blockcms'),$_smarty_tpl ) );?>

                        </a>

                    </li>
                <?php }?>
                <?php if ((isset($_smarty_tpl->tpl_vars['display_stores_footer']->value)) && $_smarty_tpl->tpl_vars['display_stores_footer']->value) {?>
                    <li>

                        <a href="<?php echo htmlspecialchars((string)$_smarty_tpl->tpl_vars['link']->value->getPageLink('stores'), ENT_QUOTES, 'UTF-8', true);?>
"
                           title="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Our stores','mod'=>'blockcms'),$_smarty_tpl ) );?>
">
                            <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Our stores','mod'=>'blockcms'),$_smarty_tpl ) );?>

                        </a>

                    </li>
                <?php }?>
                <?php if ((isset($_smarty_tpl->tpl_vars['show_contact']->value)) && $_smarty_tpl->tpl_vars['show_contact']->value) {?>
                    <li>

                        <a href="<?php echo htmlspecialchars((string)$_smarty_tpl->tpl_vars['link']->value->getPageLink($_smarty_tpl->tpl_vars['contact_url']->value,true), ENT_QUOTES, 'UTF-8', true);?>
"
                           title="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Contact us','mod'=>'blockcms'),$_smarty_tpl ) );?>
">
                            <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Contact us','mod'=>'blockcms'),$_smarty_tpl ) );?>

                        </a>

                    </li>
                <?php }?>
                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['cmslinks']->value, 'cmslink');
$_smarty_tpl->tpl_vars['cmslink']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['cmslink']->value) {
$_smarty_tpl->tpl_vars['cmslink']->do_else = false;
?>
                    <?php if ($_smarty_tpl->tpl_vars['cmslink']->value['meta_title'] != '') {?>
                        <li>

                            <a href="<?php echo htmlspecialchars((string)$_smarty_tpl->tpl_vars['cmslink']->value['link'], ENT_QUOTES, 'UTF-8', true);?>
"
                               title="<?php echo htmlspecialchars((string)$_smarty_tpl->tpl_vars['cmslink']->value['meta_title'], ENT_QUOTES, 'UTF-8', true);?>
">
                                <?php echo htmlspecialchars((string)$_smarty_tpl->tpl_vars['cmslink']->value['meta_title'], ENT_QUOTES, 'UTF-8', true);?>

                            </a>

                        </li>
                    <?php }?>
                <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                <?php if ((isset($_smarty_tpl->tpl_vars['show_sitemap']->value)) && $_smarty_tpl->tpl_vars['show_sitemap']->value) {?>
                    <li>

                        <a href="<?php echo htmlspecialchars((string)$_smarty_tpl->tpl_vars['link']->value->getPageLink('sitemap'), ENT_QUOTES, 'UTF-8', true);?>
"
                           title="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Sitemap','mod'=>'blockcms'),$_smarty_tpl ) );?>
">
                            <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Sitemap','mod'=>'blockcms'),$_smarty_tpl ) );?>

                        </a>

                    </li>
                <?php }?>
            </ul>
        </nav>
        <?php if (!empty($_smarty_tpl->tpl_vars['footer_text']->value)) {?>
            <p><?php echo $_smarty_tpl->tpl_vars['footer_text']->value;?>
</p>
        <?php }?>
    </section>
<?php }
}
}
