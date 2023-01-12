<?php
/* Smarty version 4.2.1, created on 2023-01-12 22:08:30
  from 'D:\xampp\htdocs\shopw\themes\niara\category.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.2.1',
  'unifunc' => 'content_63c0145e060568_96527740',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '0ef7d0a04ebb59363efa79cef9e07fbec8ca40d4' => 
    array (
      0 => 'D:\\xampp\\htdocs\\shopw\\themes\\niara\\category.tpl',
      1 => 1664191549,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:./product-sort.tpl' => 1,
    'file:./nbr-product-page.tpl' => 1,
    'file:./product-compare.tpl' => 2,
    'file:./product-list.tpl' => 1,
    'file:./pagination.tpl' => 1,
  ),
),false)) {
function content_63c0145e060568_96527740 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender(((string)$_smarty_tpl->tpl_vars['tpl_dir']->value)."./errors.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
?>

<?php if (!empty($_smarty_tpl->tpl_vars['category']->value) && $_smarty_tpl->tpl_vars['category']->value->id) {?>
    <?php if (!$_smarty_tpl->tpl_vars['category']->value->active) {?>
        <div class="alert alert-warning"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'This category is currently unavailable.'),$_smarty_tpl ) );?>
</div>
    <?php } else { ?>
        <main>
        <section id="category-info">
            <?php if ($_smarty_tpl->tpl_vars['category']->value->id_image) {?>
                <div id="category-banner">
                  <?php if (!empty($_smarty_tpl->tpl_vars['lazy_load']->value)) {?>
                    <noscript>
                      <img src="<?php echo mb_convert_encoding(htmlspecialchars((string)Link::getGenericImageLink('categories',$_smarty_tpl->tpl_vars['category']->value->id_image,'category',ImageManager::retinaSupport() ? '2x' : ''), ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
"
                           alt="<?php echo htmlspecialchars((string)$_smarty_tpl->tpl_vars['category']->value->name, ENT_QUOTES, 'UTF-8', true);?>
"
                           title="<?php echo htmlspecialchars((string)$_smarty_tpl->tpl_vars['category']->value->name, ENT_QUOTES, 'UTF-8', true);?>
"
                           width="<?php echo intval(call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['getWidthSize'][0], array( array('type'=>'category'),$_smarty_tpl ) ));?>
"
                           height="<?php echo intval(call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['getHeightSize'][0], array( array('type'=>'category'),$_smarty_tpl ) ));?>
"
                           class="img-responsive"
                      >
                    </noscript>
                  <?php }?>
                  <picture class="img-responsive<?php if (!empty($_smarty_tpl->tpl_vars['lazy_load']->value)) {?> tb-lazy-image<?php }?>">
                    <!--[if IE 9]><video style="display: none;"><![endif]-->
                    <?php if (!empty($_smarty_tpl->tpl_vars['webp']->value)) {?>
                      <source <?php if (!empty($_smarty_tpl->tpl_vars['lazy_load']->value)) {?>srcset="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAQAAAC1HAwCAAAAC0lEQVR42mNkYAAAAAYAAjCB0C8AAAAASUVORK5CYII= 1w"
                              data-<?php }?>srcset="<?php echo mb_convert_encoding(htmlspecialchars((string)Link::getGenericImageLink('categories',$_smarty_tpl->tpl_vars['category']->value->id_image,'category',ImageManager::retinaSupport() ? '2x' : ''), ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
"
                              title="<?php echo htmlspecialchars((string)$_smarty_tpl->tpl_vars['category']->value->name, ENT_QUOTES, 'UTF-8', true);?>
"
                              type="image/webp"
                      >
                    <?php }?>
                    <!--[if IE 9]></video><![endif]-->
                    <img <?php if (!empty($_smarty_tpl->tpl_vars['lazy_load']->value)) {?>srcset="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAQAAAC1HAwCAAAAC0lEQVR42mNkYAAAAAYAAjCB0C8AAAAASUVORK5CYII= 1w"
                         data-<?php }?>srcset="<?php echo mb_convert_encoding(htmlspecialchars((string)Link::getGenericImageLink('categories',$_smarty_tpl->tpl_vars['category']->value->id_image,'category',ImageManager::retinaSupport() ? '2x' : ''), ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
"
                         <?php if (!empty($_smarty_tpl->tpl_vars['lazy_load']->value)) {?>src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAQAAAC1HAwCAAAAC0lEQVR42mNkYAAAAAYAAjCB0C8AAAAASUVORK5CYII="<?php }?>
                         alt="<?php echo htmlspecialchars((string)$_smarty_tpl->tpl_vars['category']->value->name, ENT_QUOTES, 'UTF-8', true);?>
"
                         title="<?php echo htmlspecialchars((string)$_smarty_tpl->tpl_vars['category']->value->name, ENT_QUOTES, 'UTF-8', true);?>
"
                         width="<?php echo intval(call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['getWidthSize'][0], array( array('type'=>'category'),$_smarty_tpl ) ));?>
"
                         height="<?php echo intval(call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['getHeightSize'][0], array( array('type'=>'category'),$_smarty_tpl ) ));?>
"
                         class="img-responsive"
                    >
                  </picture>
                </div>
            <?php }?>

            <h1 class="page-heading<?php if (((isset($_smarty_tpl->tpl_vars['subcategories']->value)) && !$_smarty_tpl->tpl_vars['products']->value) || ((isset($_smarty_tpl->tpl_vars['subcategories']->value)) && $_smarty_tpl->tpl_vars['products']->value) || !(isset($_smarty_tpl->tpl_vars['subcategories']->value)) && $_smarty_tpl->tpl_vars['products']->value) {?> product-listing<?php }?>">
                <span class="cat-name">
                    <?php echo htmlspecialchars((string)$_smarty_tpl->tpl_vars['category']->value->name, ENT_QUOTES, 'UTF-8', true);?>

                    <?php if ((isset($_smarty_tpl->tpl_vars['categoryNameComplement']->value))) {?>
                        &nbsp;<?php echo htmlspecialchars((string)$_smarty_tpl->tpl_vars['categoryNameComplement']->value, ENT_QUOTES, 'UTF-8', true);?>

                    <?php }?>
                </span>
            </h1>

            <?php if (!empty($_smarty_tpl->tpl_vars['category']->value->description)) {?>
                <div id="category-description" class="rte"><?php echo $_smarty_tpl->tpl_vars['category']->value->description;?>
</div>
            <?php }?>
        </section>
        <?php if (!empty($_smarty_tpl->tpl_vars['subcategories']->value) && (((isset($_smarty_tpl->tpl_vars['display_subcategories']->value)) && $_smarty_tpl->tpl_vars['display_subcategories']->value) || !(isset($_smarty_tpl->tpl_vars['display_subcategories']->value)))) {?>
            <section id="category-subcategories">
                <h2 class="page-heading"><?php echo htmlspecialchars((string)$_smarty_tpl->tpl_vars['category']->value->name, ENT_QUOTES, 'UTF-8', true);?>
 <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Subcategories'),$_smarty_tpl ) );?>
</h2>
                <ul class="list-grid row">
                    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['subcategories']->value, 'subcategory');
$_smarty_tpl->tpl_vars['subcategory']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['subcategory']->value) {
$_smarty_tpl->tpl_vars['subcategory']->do_else = false;
?>
                        <li class="col-xs-6 col-sm-4 col-md-3">
                            <div class="thumbnail">
                                <?php if ($_smarty_tpl->tpl_vars['subcategory']->value['id_image']) {?>
                                    <a href="<?php echo htmlspecialchars((string)$_smarty_tpl->tpl_vars['link']->value->getCategoryLink($_smarty_tpl->tpl_vars['subcategory']->value['id_category'],$_smarty_tpl->tpl_vars['subcategory']->value['link_rewrite']), ENT_QUOTES, 'UTF-8', true);?>
"
                                       title="<?php echo htmlspecialchars((string)$_smarty_tpl->tpl_vars['subcategory']->value['name'], ENT_QUOTES, 'UTF-8', true);?>
">
                                        <img class="replace-2x img-responsive"
                                             src="<?php echo mb_convert_encoding(htmlspecialchars((string)Link::getGenericImageLink('categories',$_smarty_tpl->tpl_vars['subcategory']->value['id_image'],'medium',ImageManager::retinaSupport() ? '2x' : ''), ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
"
                                             alt="<?php echo htmlspecialchars((string)$_smarty_tpl->tpl_vars['subcategory']->value['name'], ENT_QUOTES, 'UTF-8', true);?>
"
                                             title="<?php echo htmlspecialchars((string)$_smarty_tpl->tpl_vars['subcategory']->value['name'], ENT_QUOTES, 'UTF-8', true);?>
"
                                             width="<?php echo intval(call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['getWidthSize'][0], array( array('type'=>'medium'),$_smarty_tpl ) ));?>
"
                                             height="<?php echo intval(call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['getHeightSize'][0], array( array('type'=>'medium'),$_smarty_tpl ) ));?>
"
                                        >
                                    </a>
                                <?php }?>
                                <div class="caption">
                                    <h3 class="subcategory-title text-center">
                                        <a href="<?php echo htmlspecialchars((string)$_smarty_tpl->tpl_vars['link']->value->getCategoryLink($_smarty_tpl->tpl_vars['subcategory']->value['id_category'],$_smarty_tpl->tpl_vars['subcategory']->value['link_rewrite']), ENT_QUOTES, 'UTF-8', true);?>
"><?php echo htmlspecialchars((string)$_smarty_tpl->tpl_vars['subcategory']->value['name'], ENT_QUOTES, 'UTF-8', true);?>
</a>
                                    </h3>
                                </div>
                            </div>
                        </li>
                    <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                </ul>
            </section>
        <?php }?>

        <?php if (!empty($_smarty_tpl->tpl_vars['products']->value)) {?>
            <section id="category-products">
                <h2 class="page-heading">
                    <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Products'),$_smarty_tpl ) );?>


                    <div class="pull-right">
                        <?php $_smarty_tpl->_subTemplateRender(((string)$_smarty_tpl->tpl_vars['tpl_dir']->value)."./category-count.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
?>
                    </div>
                </h2>
                <div class="content_sortPagiBar clearfix">
                    <div class="form-inline sortPagiBar clearfix">
                        <?php $_smarty_tpl->_subTemplateRender("file:./product-sort.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
                        <?php $_smarty_tpl->_subTemplateRender("file:./nbr-product-page.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
                    </div>
                    <div class="top-pagination-content form-inline clearfix">
                        <?php $_smarty_tpl->_subTemplateRender("file:./product-compare.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
                        <?php $_smarty_tpl->_subTemplateRender(((string)$_smarty_tpl->tpl_vars['tpl_dir']->value)."./pagination.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
?>
                    </div>
                </div>
                <?php $_smarty_tpl->_subTemplateRender("file:./product-list.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('products'=>$_smarty_tpl->tpl_vars['products']->value), 0, false);
?>

                <div class="content_sortPagiBar">
                    <div class="bottom-pagination-content form-inline clearfix">
                        <?php $_smarty_tpl->_subTemplateRender("file:./product-compare.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('paginationId'=>'bottom'), 0, true);
?>
                        <?php $_smarty_tpl->_subTemplateRender("file:./pagination.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('paginationId'=>'bottom'), 0, false);
?>
                    </div>
                </div>
            </section>
        <?php }?>

    <?php }?>
    </main>
<?php }
}
}
