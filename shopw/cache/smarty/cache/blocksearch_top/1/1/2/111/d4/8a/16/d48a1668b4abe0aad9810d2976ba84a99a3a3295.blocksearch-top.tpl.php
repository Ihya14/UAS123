<?php
/* Smarty version 4.2.1, created on 2023-01-12 22:36:09
  from 'D:\xampp\htdocs\shopw\themes\niara\modules\blocksearch\blocksearch-top.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.2.1',
  'unifunc' => 'content_63c01ad9a665c9_46333080',
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
  'cache_lifetime' => 31536000,
),true)) {
function content_63c01ad9a665c9_46333080 (Smarty_Internal_Template $_smarty_tpl) {
?><div id="search_block_top" class="col-sm-4 col-md-5" role="search">
  <form id="searchbox" method="get" action="//localhost/shopw/id/cari" >
    <input type="hidden" name="controller" value="search">
    <input type="hidden" name="orderby" value="position">
    <input type="hidden" name="orderway" value="desc">
    <div class="input-group input-group-lg">
      <input class="form-control" type="search" id="search_query_top" name="search_query" placeholder="Cari" value="" required aria-label="Search our site">
      <span class="input-group-btn">
        <button class="btn btn-primary" type="submit" name="submit_search" title="Cari"><i class="icon icon-search"></i></button>
      </span>
    </div>
  </form>
</div>
<?php }
}
