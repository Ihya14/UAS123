<?php
/* Smarty version 4.2.1, created on 2023-01-12 14:08:33
  from 'D:\xampp\htdocs\shopw\themes\niara\modules\blocksearch\blocksearch-top.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.2.1',
  'unifunc' => 'content_63bfa3e1e0d957_14540605',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '8a424e2cce8c3910b492a8c6b1877894f2c23fe1' => 
    array (
      0 => 'D:\\xampp\\htdocs\\shopw\\themes\\niara\\modules\\blocksearch\\blocksearch-top.tpl',
      1 => 1664191549,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_63bfa3e1e0d957_14540605 (Smarty_Internal_Template $_smarty_tpl) {
?><div id="search_block_top" class="col-sm-4 col-md-5" role="search">
  <form id="searchbox" method="get" action="<?php echo htmlspecialchars((string)$_smarty_tpl->tpl_vars['link']->value->getPageLink('search',null,null,null,false,null,true), ENT_QUOTES, 'UTF-8', true);?>
" >
    <input type="hidden" name="controller" value="search">
    <input type="hidden" name="orderby" value="position">
    <input type="hidden" name="orderway" value="desc">
    <div class="input-group input-group-lg">
      <input class="form-control" type="search" id="search_query_top" name="search_query" placeholder="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Search','mod'=>'blocksearch'),$_smarty_tpl ) );?>
" value="<?php echo stripslashes(mb_convert_encoding(htmlspecialchars((string)$_smarty_tpl->tpl_vars['search_query']->value, ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8'));?>
" required aria-label="Search our site">
      <span class="input-group-btn">
        <button class="btn btn-primary" type="submit" name="submit_search" title="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Search','mod'=>'blocksearch'),$_smarty_tpl ) );?>
"><i class="icon icon-search"></i></button>
      </span>
    </div>
  </form>
</div>
<?php }
}
