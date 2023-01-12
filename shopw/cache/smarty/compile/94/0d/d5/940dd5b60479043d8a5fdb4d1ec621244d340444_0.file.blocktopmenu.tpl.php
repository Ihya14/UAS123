<?php
/* Smarty version 4.2.1, created on 2023-01-12 14:08:35
  from 'D:\xampp\htdocs\shopw\themes\niara\modules\blocktopmenu\blocktopmenu.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.2.1',
  'unifunc' => 'content_63bfa3e34aaad7_47807719',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '940dd5b60479043d8a5fdb4d1ec621244d340444' => 
    array (
      0 => 'D:\\xampp\\htdocs\\shopw\\themes\\niara\\modules\\blocktopmenu\\blocktopmenu.tpl',
      1 => 1664191549,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_63bfa3e34aaad7_47807719 (Smarty_Internal_Template $_smarty_tpl) {
if ($_smarty_tpl->tpl_vars['MENU']->value != '') {?>
    <nav>
        <div id="block_top_menu" class="sf-contener clearfix col-lg-12">
            <div class="cat-title"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Menu','mod'=>'blocktopmenu'),$_smarty_tpl ) );?>
</div>
            <ul class="sf-menu clearfix menu-content">
                <?php echo $_smarty_tpl->tpl_vars['MENU']->value;?>

                <?php if ($_smarty_tpl->tpl_vars['MENU_SEARCH']->value) {?>
                    <li class="sf-search noBack" style="float:right">
                        <form id="searchbox" action="<?php echo htmlspecialchars((string)$_smarty_tpl->tpl_vars['link']->value->getPageLink('search'), ENT_QUOTES, 'UTF-8', true);?>
" method="get">
                            <p>
                                <input type="hidden" name="controller" value="search">
                                <input type="hidden" value="position" name="orderby">
                                <input type="hidden" value="desc" name="orderway">
                                <input type="text" name="search_query"
                                       value="<?php if ((isset($_GET['search_query']))) {
echo htmlspecialchars((string)$_GET['search_query'], ENT_QUOTES, 'UTF-8', true);
}?>">
                            </p>
                        </form>
                    </li>
                <?php }?>
            </ul>
        </div>
    </nav>
<?php }
}
}
