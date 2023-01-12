<?php
/* Smarty version 4.2.1, created on 2023-01-12 22:42:09
  from 'D:\xampp\htdocs\shopw\themes\niara\product.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.2.1',
  'unifunc' => 'content_63c01c41dc3103_80160384',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '9b81306601688be4a215e41376832cbd5cd2cea9' => 
    array (
      0 => 'D:\\xampp\\htdocs\\shopw\\themes\\niara\\product.tpl',
      1 => 1664191549,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_63c01c41dc3103_80160384 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'D:\\xampp\\htdocs\\shopw\\vendor\\smarty\\smarty\\libs\\plugins\\modifier.date_format.php','function'=>'smarty_modifier_date_format',),1=>array('file'=>'D:\\xampp\\htdocs\\shopw\\vendor\\smarty\\smarty\\libs\\plugins\\function.math.php','function'=>'smarty_function_math',),2=>array('file'=>'D:\\xampp\\htdocs\\shopw\\vendor\\smarty\\smarty\\libs\\plugins\\function.cycle.php','function'=>'smarty_function_cycle',),3=>array('file'=>'D:\\xampp\\htdocs\\shopw\\vendor\\smarty\\smarty\\libs\\plugins\\function.counter.php','function'=>'smarty_function_counter',),));
$_smarty_tpl->_subTemplateRender(((string)$_smarty_tpl->tpl_vars['tpl_dir']->value)."./errors.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
?>

<?php if (empty($_smarty_tpl->tpl_vars['errors']->value)) {?>
  <?php if (!$_smarty_tpl->tpl_vars['priceDisplay']->value || $_smarty_tpl->tpl_vars['priceDisplay']->value == 2) {?>
    <?php $_smarty_tpl->_assignInScope('productPrice', $_smarty_tpl->tpl_vars['product']->value->getPrice(true));?>
    <?php $_smarty_tpl->_assignInScope('productPriceWithoutReduction', $_smarty_tpl->tpl_vars['product']->value->getPriceWithoutReduct(false));?>
  <?php } elseif ($_smarty_tpl->tpl_vars['priceDisplay']->value == 1) {?>
    <?php $_smarty_tpl->_assignInScope('productPrice', $_smarty_tpl->tpl_vars['product']->value->getPrice(false));?>
    <?php $_smarty_tpl->_assignInScope('productPriceWithoutReduction', $_smarty_tpl->tpl_vars['product']->value->getPriceWithoutReduct(true));?>
  <?php }?>
  <?php ob_start();
echo intval(call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['getWidthSize'][0], array( array('type'=>'cart'),$_smarty_tpl ) ));
$_prefixVariable1 = ob_get_clean();
$_smarty_tpl->_assignInScope('cartDefaultWidth', $_prefixVariable1);?>
  <?php ob_start();
echo intval(call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['getHeightSize'][0], array( array('type'=>'cart'),$_smarty_tpl ) ));
$_prefixVariable2 = ob_get_clean();
$_smarty_tpl->_assignInScope('cartDefaultHeight', $_prefixVariable2);?>
  <?php ob_start();
echo intval(call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['getWidthSize'][0], array( array('type'=>'large'),$_smarty_tpl ) ));
$_prefixVariable3 = ob_get_clean();
$_smarty_tpl->_assignInScope('largeDefaultWidth', $_prefixVariable3);?>
  <?php ob_start();
echo intval(call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['getHeightSize'][0], array( array('type'=>'large'),$_smarty_tpl ) ));
$_prefixVariable4 = ob_get_clean();
$_smarty_tpl->_assignInScope('largeDefaultHeight', $_prefixVariable4);?>

  <div itemscope itemtype="https://schema.org/Product">
    <meta itemprop="url" content="<?php echo mb_convert_encoding(htmlspecialchars((string)$_smarty_tpl->tpl_vars['link']->value->getProductLink($_smarty_tpl->tpl_vars['product']->value), ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
">
    <div class="primary_block row">

      <?php if ((isset($_smarty_tpl->tpl_vars['adminActionDisplay']->value)) && $_smarty_tpl->tpl_vars['adminActionDisplay']->value) {?>
        <div id="admin-action" class="container">
          <div class="alert alert-info"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'This product is not visible to your customers.'),$_smarty_tpl ) );?>

            <input type="hidden" id="admin-action-product-id" value="<?php echo intval($_smarty_tpl->tpl_vars['product']->value->id);?>
">
            <a id="publish_button" class="btn btn-success" href="#"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Publish'),$_smarty_tpl ) );?>
</a>
            <a id="lnk_view" class="btn btn-warning" href="#"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Back'),$_smarty_tpl ) );?>
</a>
          </div>
          <p id="admin-action-result"></p>
        </div>
      <?php }?>

      <?php if (!empty($_smarty_tpl->tpl_vars['confirmation']->value)) {?>
        <div class="alert alert-warning"><?php echo $_smarty_tpl->tpl_vars['confirmation']->value;?>
</div>
      <?php }?>

      <div class="pb-left-column col-xs-12 col-sm-4 col-md-5">

        <div id="image-block" class="thumbnail clearfix">

          <div class="product-label-container">
            <?php if ($_smarty_tpl->tpl_vars['product']->value->online_only) {?>
              <span class="product-label product-label-online"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Online only'),$_smarty_tpl ) );?>
</span>
            <?php }?>
            <?php if ($_smarty_tpl->tpl_vars['product']->value->new) {?>
              <span class="product-label product-label-new"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'New'),$_smarty_tpl ) );?>
</span>
            <?php }?>
            <?php if ($_smarty_tpl->tpl_vars['product']->value->on_sale) {?>
              <span class="product-label product-label-sale"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Sale!'),$_smarty_tpl ) );?>
</span>
            <?php } elseif ($_smarty_tpl->tpl_vars['product']->value->specificPrice && $_smarty_tpl->tpl_vars['product']->value->specificPrice['reduction'] && $_smarty_tpl->tpl_vars['productPriceWithoutReduction']->value > $_smarty_tpl->tpl_vars['productPrice']->value) {?>
              <span class="product-label product-label-discount"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Reduced price!'),$_smarty_tpl ) );?>
</span>
            <?php }?>
          </div>

          <?php if ($_smarty_tpl->tpl_vars['have_image']->value) {?>
            <a class="fancybox"
                  data-fancybox-group="product"
                  id="view_full_size"
                  href="<?php echo htmlspecialchars((string)$_smarty_tpl->tpl_vars['link']->value->getProductLink($_smarty_tpl->tpl_vars['product']->value), ENT_QUOTES, 'UTF-8', true);?>
"
                  onclick="return false;"
            >
              <noscript>
                <img class="img-responsive center-block"
                     itemprop="image"
                     src="<?php echo htmlspecialchars((string)$_smarty_tpl->tpl_vars['link']->value->getImageLink($_smarty_tpl->tpl_vars['product']->value->link_rewrite,$_smarty_tpl->tpl_vars['cover']->value['id_image'],'large',null,ImageManager::retinaSupport()), ENT_QUOTES, 'UTF-8', true);?>
"
                     title="<?php if (!empty($_smarty_tpl->tpl_vars['cover']->value['legend'])) {
echo htmlspecialchars((string)$_smarty_tpl->tpl_vars['cover']->value['legend'], ENT_QUOTES, 'UTF-8', true);
} else {
echo htmlspecialchars((string)$_smarty_tpl->tpl_vars['product']->value->name, ENT_QUOTES, 'UTF-8', true);
}?>"
                     alt="<?php if (!empty($_smarty_tpl->tpl_vars['cover']->value['legend'])) {
echo htmlspecialchars((string)$_smarty_tpl->tpl_vars['cover']->value['legend'], ENT_QUOTES, 'UTF-8', true);
} else {
echo htmlspecialchars((string)$_smarty_tpl->tpl_vars['product']->value->name, ENT_QUOTES, 'UTF-8', true);
}?>"
                     width="<?php echo intval($_smarty_tpl->tpl_vars['largeDefaultWidth']->value);?>
"
                     height="<?php echo intval($_smarty_tpl->tpl_vars['largeDefaultHeight']->value);?>
"
                >
              </noscript>
              <picture id="bigpic">
                <!--[if IE 9]><video style="display: none;"><![endif]-->
                <?php if (!empty($_smarty_tpl->tpl_vars['webp']->value)) {?>
                  <source class="img-responsive center-block"
                       itemprop="image"
                       srcset="<?php echo htmlspecialchars((string)$_smarty_tpl->tpl_vars['link']->value->getImageLink($_smarty_tpl->tpl_vars['product']->value->link_rewrite,$_smarty_tpl->tpl_vars['cover']->value['id_image'],'large','webp',ImageManager::retinaSupport()), ENT_QUOTES, 'UTF-8', true);?>
"
                       title="<?php if (!empty($_smarty_tpl->tpl_vars['cover']->value['legend'])) {
echo htmlspecialchars((string)$_smarty_tpl->tpl_vars['cover']->value['legend'], ENT_QUOTES, 'UTF-8', true);
} else {
echo htmlspecialchars((string)$_smarty_tpl->tpl_vars['product']->value->name, ENT_QUOTES, 'UTF-8', true);
}?>"
                       type="image/webp"
                  >
                <?php }?>
                <!--[if IE 9]></video><![endif]-->
                <img class="img-responsive center-block"
                     itemprop="image"
                     src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAQAAAC1HAwCAAAAC0lEQVR42mNkYAAAAAYAAjCB0C8AAAAASUVORK5CYII="
                     srcset="<?php echo htmlspecialchars((string)$_smarty_tpl->tpl_vars['link']->value->getImageLink($_smarty_tpl->tpl_vars['product']->value->link_rewrite,$_smarty_tpl->tpl_vars['cover']->value['id_image'],'large',null,ImageManager::retinaSupport()), ENT_QUOTES, 'UTF-8', true);?>
"
                     title="<?php if (!empty($_smarty_tpl->tpl_vars['cover']->value['legend'])) {
echo htmlspecialchars((string)$_smarty_tpl->tpl_vars['cover']->value['legend'], ENT_QUOTES, 'UTF-8', true);
} else {
echo htmlspecialchars((string)$_smarty_tpl->tpl_vars['product']->value->name, ENT_QUOTES, 'UTF-8', true);
}?>"
                     alt="<?php if (!empty($_smarty_tpl->tpl_vars['cover']->value['legend'])) {
echo htmlspecialchars((string)$_smarty_tpl->tpl_vars['cover']->value['legend'], ENT_QUOTES, 'UTF-8', true);
} else {
echo htmlspecialchars((string)$_smarty_tpl->tpl_vars['product']->value->name, ENT_QUOTES, 'UTF-8', true);
}?>"
                     width="<?php echo intval($_smarty_tpl->tpl_vars['largeDefaultWidth']->value);?>
"
                     height="<?php echo intval($_smarty_tpl->tpl_vars['largeDefaultHeight']->value);?>
"
                >
              </picture>
              <?php if (!$_smarty_tpl->tpl_vars['jqZoomEnabled']->value && !$_smarty_tpl->tpl_vars['content_only']->value) {?>
                <span class="span_link" title="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Zoom in'),$_smarty_tpl ) );?>
">
                    <i class="icon icon-search-plus"></i>
                  </span>
              <?php }?>
            </a>
          <?php } else { ?>
            <span id="view_full_size">
              <noscript>
                <img class="img-responsive center-block"
                     itemprop="image"
                     src="<?php echo htmlspecialchars((string)$_smarty_tpl->tpl_vars['img_prod_dir']->value, ENT_QUOTES, 'UTF-8', true);
echo htmlspecialchars((string)$_smarty_tpl->tpl_vars['lang_iso']->value, ENT_QUOTES, 'UTF-8', true);?>
-default-large.jpg"
                     title="<?php echo htmlspecialchars((string)$_smarty_tpl->tpl_vars['product']->value->name, ENT_QUOTES, 'UTF-8', true);?>
"
                     width="<?php echo intval($_smarty_tpl->tpl_vars['largeDefaultWidth']->value);?>
"
                     height="<?php echo intval($_smarty_tpl->tpl_vars['largeDefaultHeight']->value);?>
"
                >
              </noscript>
              <picture id="bigpic">
                <!--[if IE 9]><video style="display: none;"><![endif]-->
                <?php if ((!empty($_smarty_tpl->tpl_vars['webp']->value))) {?>
                  <source class="img-responsive center-block"
                          itemprop="image"
                          srcset="<?php echo htmlspecialchars((string)$_smarty_tpl->tpl_vars['img_prod_dir']->value, ENT_QUOTES, 'UTF-8', true);
echo htmlspecialchars((string)$_smarty_tpl->tpl_vars['lang_iso']->value, ENT_QUOTES, 'UTF-8', true);?>
-default-large.webp"
                          title="<?php echo htmlspecialchars((string)$_smarty_tpl->tpl_vars['product']->value->name, ENT_QUOTES, 'UTF-8', true);?>
"
                          type="image/webp"
                  >
                <?php }?>
                <!--[if IE 9]></video><![endif]-->
                <img class="img-responsive center-block"
                     itemprop="image"
                     src="<?php echo htmlspecialchars((string)$_smarty_tpl->tpl_vars['img_prod_dir']->value, ENT_QUOTES, 'UTF-8', true);
echo htmlspecialchars((string)$_smarty_tpl->tpl_vars['lang_iso']->value, ENT_QUOTES, 'UTF-8', true);?>
-default-large.jpg"
                     srcset="<?php echo htmlspecialchars((string)$_smarty_tpl->tpl_vars['img_prod_dir']->value, ENT_QUOTES, 'UTF-8', true);
echo htmlspecialchars((string)$_smarty_tpl->tpl_vars['lang_iso']->value, ENT_QUOTES, 'UTF-8', true);?>
-default-large.jpg"
                     title="<?php echo htmlspecialchars((string)$_smarty_tpl->tpl_vars['product']->value->name, ENT_QUOTES, 'UTF-8', true);?>
"
                     width="<?php echo intval($_smarty_tpl->tpl_vars['largeDefaultWidth']->value);?>
"
                     height="<?php echo intval($_smarty_tpl->tpl_vars['largeDefaultHeight']->value);?>
"
                >
              </picture>
            </span>
          <?php }?>
        </div>

        <?php if (!empty($_smarty_tpl->tpl_vars['images']->value)) {?>
          <div id="views_block" class="clearfix <?php if ((isset($_smarty_tpl->tpl_vars['images']->value)) && count($_smarty_tpl->tpl_vars['images']->value) < 2) {?>hidden<?php }?>">
            <div id="thumbs_list">
              <ul id="thumbs_list_frame" class="list-unstyled">
                <?php if ((isset($_smarty_tpl->tpl_vars['images']->value))) {?>
                  <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['images']->value, 'image', false, NULL, 'thumbnails', array (
  'iteration' => true,
));
$_smarty_tpl->tpl_vars['image']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['image']->value) {
$_smarty_tpl->tpl_vars['image']->do_else = false;
$_smarty_tpl->tpl_vars['__smarty_foreach_thumbnails']->value['iteration']++;
?>

                    <?php $_smarty_tpl->_assignInScope('imageIds', ((string)$_smarty_tpl->tpl_vars['product']->value->id)."-".((string)$_smarty_tpl->tpl_vars['image']->value['id_image']));?>
                    <?php if (!empty($_smarty_tpl->tpl_vars['image']->value['legend'])) {?>
                      <?php $_smarty_tpl->_assignInScope('imageTitle', htmlspecialchars((string)$_smarty_tpl->tpl_vars['image']->value['legend'], ENT_QUOTES, 'UTF-8', true));?>
                    <?php } else { ?>
                      <?php $_smarty_tpl->_assignInScope('imageTitle', htmlspecialchars((string)$_smarty_tpl->tpl_vars['product']->value->name, ENT_QUOTES, 'UTF-8', true));?>
                    <?php }?>

                    <li data-slide-num="<?php echo intval((isset($_smarty_tpl->tpl_vars['__smarty_foreach_thumbnails']->value['iteration']) ? $_smarty_tpl->tpl_vars['__smarty_foreach_thumbnails']->value['iteration'] : null));?>
"
                        id="thumbnail_<?php echo intval($_smarty_tpl->tpl_vars['image']->value['id_image']);?>
"
                        style="display: inline-block"
                    >
                      <?php if ($_smarty_tpl->tpl_vars['jqZoomEnabled']->value && $_smarty_tpl->tpl_vars['have_image']->value && !$_smarty_tpl->tpl_vars['content_only']->value) {?>
                        <a href="<?php echo htmlspecialchars((string)$_smarty_tpl->tpl_vars['link']->value->getImageLink($_smarty_tpl->tpl_vars['product']->value->link_rewrite,$_smarty_tpl->tpl_vars['imageIds']->value,'thickbox',null,ImageManager::retinaSupport()), ENT_QUOTES, 'UTF-8', true);?>
"
                           class="thumbnail fancybox"
                           title="<?php echo $_smarty_tpl->tpl_vars['imageTitle']->value;?>
"
                           data-fancybox-group="product"
                           style="height: <?php echo $_smarty_tpl->tpl_vars['cartDefaultHeight']->value+8;?>
px; width: <?php echo $_smarty_tpl->tpl_vars['cartDefaultWidth']->value+8;?>
px"
                        >
                          <noscript>
                            <img class="img-responsive"
                                 src="<?php echo htmlspecialchars((string)$_smarty_tpl->tpl_vars['link']->value->getImageLink($_smarty_tpl->tpl_vars['product']->value->link_rewrite,$_smarty_tpl->tpl_vars['imageIds']->value,'cart',null,ImageManager::retinaSupport()), ENT_QUOTES, 'UTF-8', true);?>
"
                                 alt="<?php echo mb_convert_encoding(htmlspecialchars((string)$_smarty_tpl->tpl_vars['imageTitle']->value, ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
"
                                 title="<?php echo mb_convert_encoding(htmlspecialchars((string)$_smarty_tpl->tpl_vars['imageTitle']->value, ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
"
                                 itemprop="image"
                                 width="<?php echo intval($_smarty_tpl->tpl_vars['cartDefaultWidth']->value);?>
"
                                 height="<?php echo intval($_smarty_tpl->tpl_vars['cartDefaultHeight']->value);?>
"
                            >
                          </noscript>
                          <picture class="img-responsive" id="thumb_<?php echo intval($_smarty_tpl->tpl_vars['image']->value['id_image']);?>
">
                            <!--[if IE 9]><video style="display: none;"><![endif]-->
                            <?php if (!empty($_smarty_tpl->tpl_vars['webp']->value)) {?>
                              <source srcset="<?php echo htmlspecialchars((string)$_smarty_tpl->tpl_vars['link']->value->getImageLink($_smarty_tpl->tpl_vars['product']->value->link_rewrite,$_smarty_tpl->tpl_vars['imageIds']->value,'cart','webp',ImageManager::retinaSupport()), ENT_QUOTES, 'UTF-8', true);?>
"
                                      title="<?php echo mb_convert_encoding(htmlspecialchars((string)$_smarty_tpl->tpl_vars['imageTitle']->value, ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
"
                                      itemprop="image"
                                      type="image/webp"
                              >
                            <?php }?>
                            <!--[if IE 9]></video><![endif]-->
                            <img src="<?php echo htmlspecialchars((string)$_smarty_tpl->tpl_vars['link']->value->getImageLink($_smarty_tpl->tpl_vars['product']->value->link_rewrite,$_smarty_tpl->tpl_vars['imageIds']->value,'cart',null,ImageManager::retinaSupport()), ENT_QUOTES, 'UTF-8', true);?>
"
                                 alt="<?php echo mb_convert_encoding(htmlspecialchars((string)$_smarty_tpl->tpl_vars['imageTitle']->value, ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
"
                                 title="<?php echo mb_convert_encoding(htmlspecialchars((string)$_smarty_tpl->tpl_vars['imageTitle']->value, ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
"
                                 itemprop="image"
                                 width="<?php echo intval($_smarty_tpl->tpl_vars['cartDefaultWidth']->value);?>
"
                                 height="<?php echo intval($_smarty_tpl->tpl_vars['cartDefaultHeight']->value);?>
"
                            >
                          </picture>
                        </a>
                      <?php } else { ?>
                        <a href="<?php echo htmlspecialchars((string)$_smarty_tpl->tpl_vars['link']->value->getImageLink($_smarty_tpl->tpl_vars['product']->value->link_rewrite,$_smarty_tpl->tpl_vars['imageIds']->value,'thickbox',null,ImageManager::retinaSupport()), ENT_QUOTES, 'UTF-8', true);?>
"
                           class="thumbnail fancybox<?php if ($_smarty_tpl->tpl_vars['image']->value['id_image'] == $_smarty_tpl->tpl_vars['cover']->value['id_image']) {?> shown<?php }?>"
                           title="<?php echo mb_convert_encoding(htmlspecialchars((string)$_smarty_tpl->tpl_vars['imageTitle']->value, ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
"
                           data-fancybox-group="product"
                           style="height: <?php echo $_smarty_tpl->tpl_vars['cartDefaultHeight']->value+8;?>
px; width: <?php echo $_smarty_tpl->tpl_vars['cartDefaultWidth']->value+8;?>
px"
                        >
                          <?php if (!empty($_smarty_tpl->tpl_vars['lazy_load']->value)) {?>
                            <noscript>
                              <img class="img-responsive"
                                   src="<?php echo htmlspecialchars((string)$_smarty_tpl->tpl_vars['link']->value->getImageLink($_smarty_tpl->tpl_vars['product']->value->link_rewrite,$_smarty_tpl->tpl_vars['imageIds']->value,'cart',null,ImageManager::retinaSupport()), ENT_QUOTES, 'UTF-8', true);?>
"
                                   srcset="<?php echo htmlspecialchars((string)$_smarty_tpl->tpl_vars['link']->value->getImageLink($_smarty_tpl->tpl_vars['product']->value->link_rewrite,$_smarty_tpl->tpl_vars['imageIds']->value,'cart',null,ImageManager::retinaSupport()), ENT_QUOTES, 'UTF-8', true);?>
"
                                   alt="<?php echo mb_convert_encoding(htmlspecialchars((string)$_smarty_tpl->tpl_vars['imageTitle']->value, ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
"
                                   title="<?php echo mb_convert_encoding(htmlspecialchars((string)$_smarty_tpl->tpl_vars['imageTitle']->value, ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
"
                                   itemprop="image"
                                   width="<?php echo intval($_smarty_tpl->tpl_vars['cartDefaultWidth']->value);?>
"
                                   height="<?php echo intval($_smarty_tpl->tpl_vars['cartDefaultHeight']->value);?>
"
                              >
                            </noscript>
                          <?php }?>
                          <picture class="img-responsive" id="thumb_<?php echo intval($_smarty_tpl->tpl_vars['image']->value['id_image']);?>
">
                            <!--[if IE 9]><video style="display: none;"><![endif]-->
                            <?php if (!empty($_smarty_tpl->tpl_vars['webp']->value)) {?>
                              <source srcset="<?php echo htmlspecialchars((string)$_smarty_tpl->tpl_vars['link']->value->getImageLink($_smarty_tpl->tpl_vars['product']->value->link_rewrite,$_smarty_tpl->tpl_vars['imageIds']->value,'cart','webp',ImageManager::retinaSupport()), ENT_QUOTES, 'UTF-8', true);?>
"
                                      title="<?php echo $_smarty_tpl->tpl_vars['imageTitle']->value;?>
"
                                      itemprop="image"
                                      type="image/webp"
                              >
                            <?php }?>
                            <!--[if IE 9]></video><![endif]-->
                            <img src="<?php echo htmlspecialchars((string)$_smarty_tpl->tpl_vars['link']->value->getImageLink($_smarty_tpl->tpl_vars['product']->value->link_rewrite,$_smarty_tpl->tpl_vars['imageIds']->value,'cart',null,ImageManager::retinaSupport()), ENT_QUOTES, 'UTF-8', true);?>
"
                                 srcset="<?php echo htmlspecialchars((string)$_smarty_tpl->tpl_vars['link']->value->getImageLink($_smarty_tpl->tpl_vars['product']->value->link_rewrite,$_smarty_tpl->tpl_vars['imageIds']->value,'cart',null,ImageManager::retinaSupport()), ENT_QUOTES, 'UTF-8', true);?>
"
                                 alt="<?php echo $_smarty_tpl->tpl_vars['imageTitle']->value;?>
"
                                 title="<?php echo $_smarty_tpl->tpl_vars['imageTitle']->value;?>
"
                                 itemprop="image"
                                 width="<?php echo intval($_smarty_tpl->tpl_vars['cartDefaultWidth']->value);?>
"
                                 height="<?php echo intval($_smarty_tpl->tpl_vars['cartDefaultHeight']->value);?>
"
                            >
                          </picture>
                        </a>
                      <?php }?>
                    </li>
                  <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                <?php }?>
              </ul>
            </div>
          </div>
        <?php }?>

      </div>

      <div class="pb-center-column col-xs-12 col-sm-8 col-md-7">

        <h1 itemprop="name"><?php echo htmlspecialchars((string)$_smarty_tpl->tpl_vars['product']->value->name, ENT_QUOTES, 'UTF-8', true);?>
</h1>
        <p id="product_reference"<?php if (empty($_smarty_tpl->tpl_vars['product']->value->reference) || !$_smarty_tpl->tpl_vars['product']->value->reference) {?> style="display: none;"<?php }?>>
          <b><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Reference:'),$_smarty_tpl ) );?>
</b>
          <meta itemprop="sku"<?php if (!empty($_smarty_tpl->tpl_vars['product']->value->reference) && $_smarty_tpl->tpl_vars['product']->value->reference) {?> content="<?php echo $_smarty_tpl->tpl_vars['product']->value->reference;?>
"<?php }?>>
          <span class="editable"><?php if (!(isset($_smarty_tpl->tpl_vars['groups']->value))) {
echo htmlspecialchars((string)$_smarty_tpl->tpl_vars['product']->value->reference, ENT_QUOTES, 'UTF-8', true);
}?></span>
        </p>

        <?php if (!$_smarty_tpl->tpl_vars['product']->value->is_virtual && $_smarty_tpl->tpl_vars['product']->value->condition && $_smarty_tpl->tpl_vars['show_condition']->value) {?>
          <p id="product_condition">
            <b><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Condition:'),$_smarty_tpl ) );?>
</b>
            <?php if ($_smarty_tpl->tpl_vars['product']->value->condition == 'new') {?>
              <link itemprop="itemCondition" href="https://schema.org/NewCondition">
              <span class="editable"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'New product'),$_smarty_tpl ) );?>
</span>
            <?php } elseif ($_smarty_tpl->tpl_vars['product']->value->condition == 'used') {?>
              <link itemprop="itemCondition" href="https://schema.org/UsedCondition">
              <span class="editable"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Used'),$_smarty_tpl ) );?>
</span>
            <?php } elseif ($_smarty_tpl->tpl_vars['product']->value->condition == 'refurbished') {?>
              <link itemprop="itemCondition" href="https://schema.org/RefurbishedCondition">
              <span class="editable"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Refurbished'),$_smarty_tpl ) );?>
</span>
            <?php }?>
          </p>
        <?php }?>

        <?php if ($_smarty_tpl->tpl_vars['product']->value->id_manufacturer > 0) {?>
          <p itemprop="brand" itemscope itemtype="https://schema.org/Brand">
            <b><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Manufacturer:'),$_smarty_tpl ) );?>
</b>
            <a itemprop="url" href="<?php echo $_smarty_tpl->tpl_vars['link']->value->getManufacturerLink($_smarty_tpl->tpl_vars['product']->value->id_manufacturer);?>
" title="<?php echo $_smarty_tpl->tpl_vars['product']->value->manufacturer_name;?>
">
              <span itemprop="name"><?php echo $_smarty_tpl->tpl_vars['product']->value->manufacturer_name;?>
</span>
            </a>
          </p>
        <?php }?>

        <?php if ($_smarty_tpl->tpl_vars['product']->value->description_short) {?>
          <div id="short_description_block">
            <div id="short_description_content" class="rte" itemprop="description"><?php echo $_smarty_tpl->tpl_vars['product']->value->description_short;?>
</div>
          </div>
        <?php }?>

        <p id="product-availability">
          <?php if (($_smarty_tpl->tpl_vars['display_qties']->value == 1 && !$_smarty_tpl->tpl_vars['PS_CATALOG_MODE']->value && $_smarty_tpl->tpl_vars['PS_STOCK_MANAGEMENT']->value && $_smarty_tpl->tpl_vars['product']->value->available_for_order)) {?>
            <span id="pQuantityAvailable"<?php if ($_smarty_tpl->tpl_vars['product']->value->quantity <= 0) {?> style="display: none;"<?php }?>>
            <span id="quantityAvailable"><?php echo intval($_smarty_tpl->tpl_vars['product']->value->quantity);?>
</span>
            <span <?php if ($_smarty_tpl->tpl_vars['product']->value->quantity > 1) {?> style="display: none;"<?php }?> id="quantityAvailableTxt"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Item'),$_smarty_tpl ) );?>
</span>
            <span <?php if ($_smarty_tpl->tpl_vars['product']->value->quantity == 1) {?> style="display: none;"<?php }?> id="quantityAvailableTxtMultiple"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Items'),$_smarty_tpl ) );?>
</span>
          </span>
          <?php }?>

          <span id="availability_statut"<?php if (!$_smarty_tpl->tpl_vars['PS_STOCK_MANAGEMENT']->value || ($_smarty_tpl->tpl_vars['product']->value->quantity <= 0 && !$_smarty_tpl->tpl_vars['product']->value->available_later && $_smarty_tpl->tpl_vars['allow_oosp']->value) || ($_smarty_tpl->tpl_vars['product']->value->quantity > 0 && !$_smarty_tpl->tpl_vars['product']->value->available_now) || !$_smarty_tpl->tpl_vars['product']->value->available_for_order || $_smarty_tpl->tpl_vars['PS_CATALOG_MODE']->value) {?> style="display: none;"<?php }?>>
                        <span id="availability_value" class="label<?php if ($_smarty_tpl->tpl_vars['product']->value->quantity <= 0 && !$_smarty_tpl->tpl_vars['allow_oosp']->value) {?> label-danger<?php } elseif ($_smarty_tpl->tpl_vars['product']->value->quantity <= 0) {?> label-warning<?php } else { ?> label-success<?php }?>"><?php if ($_smarty_tpl->tpl_vars['product']->value->quantity <= 0) {
if ($_smarty_tpl->tpl_vars['PS_STOCK_MANAGEMENT']->value && $_smarty_tpl->tpl_vars['allow_oosp']->value) {
echo $_smarty_tpl->tpl_vars['product']->value->available_later;
} else {
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'This product is no longer in stock'),$_smarty_tpl ) );
}
} elseif ($_smarty_tpl->tpl_vars['PS_STOCK_MANAGEMENT']->value) {
echo $_smarty_tpl->tpl_vars['product']->value->available_now;
}?></span>
          </span>

          <?php if ($_smarty_tpl->tpl_vars['PS_STOCK_MANAGEMENT']->value) {?>
            <span class="label label-warning" id="last_quantities"<?php if (($_smarty_tpl->tpl_vars['product']->value->quantity > $_smarty_tpl->tpl_vars['last_qties']->value || $_smarty_tpl->tpl_vars['product']->value->quantity <= 0) || $_smarty_tpl->tpl_vars['allow_oosp']->value || !$_smarty_tpl->tpl_vars['product']->value->available_for_order || $_smarty_tpl->tpl_vars['PS_CATALOG_MODE']->value) {?> style="display: none"<?php }?> ><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Warning: Last items in stock!'),$_smarty_tpl ) );?>
</span>
          <?php }?>
        </p>

        <?php if ($_smarty_tpl->tpl_vars['PS_STOCK_MANAGEMENT']->value) {?>
          <?php if (!$_smarty_tpl->tpl_vars['product']->value->is_virtual) {
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>"displayProductDeliveryTime",'product'=>$_smarty_tpl->tpl_vars['product']->value),$_smarty_tpl ) );
}?>
        <?php }?>

        <p id="availability_date"<?php if (($_smarty_tpl->tpl_vars['product']->value->quantity > 0) || !$_smarty_tpl->tpl_vars['product']->value->available_for_order || $_smarty_tpl->tpl_vars['PS_CATALOG_MODE']->value || !(isset($_smarty_tpl->tpl_vars['product']->value->available_date)) || $_smarty_tpl->tpl_vars['product']->value->available_date < smarty_modifier_date_format(time(),'%Y-%m-%d')) {?> style="display: none;"<?php }?>>
          <span id="availability_date_label"><b><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Availability date:'),$_smarty_tpl ) );?>
</b></span>
          <span id="availability_date_value"><?php if (Validate::isDate($_smarty_tpl->tpl_vars['product']->value->available_date)) {
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['dateFormat'][0], array( array('date'=>$_smarty_tpl->tpl_vars['product']->value->available_date,'full'=>false),$_smarty_tpl ) );
}?></span>
        </p>

        <div id="oosHook"<?php if ($_smarty_tpl->tpl_vars['product']->value->quantity > 0) {?> style="display: none;"<?php }?>>
          <?php echo $_smarty_tpl->tpl_vars['HOOK_PRODUCT_OOS']->value;?>

        </div>

        <div class="pb-right-column">
        <?php if (($_smarty_tpl->tpl_vars['product']->value->show_price && !(isset($_smarty_tpl->tpl_vars['restricted_country_mode']->value))) || (isset($_smarty_tpl->tpl_vars['groups']->value)) || $_smarty_tpl->tpl_vars['product']->value->reference || ((isset($_smarty_tpl->tpl_vars['HOOK_PRODUCT_ACTIONS']->value)) && $_smarty_tpl->tpl_vars['HOOK_PRODUCT_ACTIONS']->value)) {?>

          <form id="buy_block"<?php if ($_smarty_tpl->tpl_vars['PS_CATALOG_MODE']->value && !(isset($_smarty_tpl->tpl_vars['groups']->value)) && $_smarty_tpl->tpl_vars['product']->value->quantity > 0) {?> class="hidden"<?php }?> action="<?php echo htmlspecialchars((string)$_smarty_tpl->tpl_vars['link']->value->getPageLink('cart'), ENT_QUOTES, 'UTF-8', true);?>
" method="post">

            <input type="hidden" name="token" value="<?php echo $_smarty_tpl->tpl_vars['static_token']->value;?>
">
            <input type="hidden" name="id_product" value="<?php echo intval($_smarty_tpl->tpl_vars['product']->value->id);?>
" id="product_page_product_id">
            <input type="hidden" name="add" value="1">
            <input type="hidden" name="id_product_attribute" id="idCombination" value="">

            <div class="box-info-product">
              <div class="content_prices clearfix">
                <?php if ($_smarty_tpl->tpl_vars['product']->value->show_price && !(isset($_smarty_tpl->tpl_vars['restricted_country_mode']->value)) && !$_smarty_tpl->tpl_vars['PS_CATALOG_MODE']->value) {?>
                  <div>
                    <p class="our_price_display" itemprop="offers" itemscope itemtype="https://schema.org/Offer"><?php if ($_smarty_tpl->tpl_vars['product']->value->quantity > 0) {?><link itemprop="availability" href="https://schema.org/InStock"><?php }
if ($_smarty_tpl->tpl_vars['priceDisplay']->value >= 0 && $_smarty_tpl->tpl_vars['priceDisplay']->value <= 2) {?><meta itemprop="price" content="<?php echo $_smarty_tpl->tpl_vars['productPrice']->value;?>
"><span id="our_price_display" class="price"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['convertPrice'][0], array( array('price'=>floatval($_smarty_tpl->tpl_vars['productPrice']->value)),$_smarty_tpl ) );?>
</span><?php if ($_smarty_tpl->tpl_vars['tax_enabled']->value && (((isset($_smarty_tpl->tpl_vars['display_tax_label']->value)) && $_smarty_tpl->tpl_vars['display_tax_label']->value == 1) || !(isset($_smarty_tpl->tpl_vars['display_tax_label']->value)))) {
if ($_smarty_tpl->tpl_vars['priceDisplay']->value == 1) {?> <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'tax excl.'),$_smarty_tpl ) );
} else { ?> <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'tax incl.'),$_smarty_tpl ) );
}
}?><meta itemprop="priceCurrency" content="<?php echo $_smarty_tpl->tpl_vars['currency']->value->iso_code;?>
"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>"displayProductPriceBlock",'product'=>$_smarty_tpl->tpl_vars['product']->value,'type'=>"price"),$_smarty_tpl ) );
}?></p>
                    <p id="reduction_percent" <?php if ($_smarty_tpl->tpl_vars['productPriceWithoutReduction']->value <= 0 || !$_smarty_tpl->tpl_vars['product']->value->specificPrice || $_smarty_tpl->tpl_vars['product']->value->specificPrice['reduction_type'] != 'percentage') {?> style="display:none;"<?php }?>><span id="reduction_percent_display"><?php if ($_smarty_tpl->tpl_vars['product']->value->specificPrice && $_smarty_tpl->tpl_vars['product']->value->specificPrice['reduction_type'] == 'percentage') {?>-<?php echo $_smarty_tpl->tpl_vars['product']->value->specificPrice['reduction']*100;?>
%<?php }?></span></p>
                    <p id="reduction_amount" <?php if ($_smarty_tpl->tpl_vars['productPriceWithoutReduction']->value <= 0 || !$_smarty_tpl->tpl_vars['product']->value->specificPrice || $_smarty_tpl->tpl_vars['product']->value->specificPrice['reduction_type'] != 'amount' || floatval($_smarty_tpl->tpl_vars['product']->value->specificPrice['reduction']) == 0) {?> style="display:none"<?php }?>><span id="reduction_amount_display"><?php if ($_smarty_tpl->tpl_vars['product']->value->specificPrice && $_smarty_tpl->tpl_vars['product']->value->specificPrice['reduction_type'] == 'amount' && floatval($_smarty_tpl->tpl_vars['product']->value->specificPrice['reduction']) != 0) {?>-<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['convertPrice'][0], array( array('price'=>floatval($_smarty_tpl->tpl_vars['productPriceWithoutReduction']->value)-floatval($_smarty_tpl->tpl_vars['productPrice']->value)),$_smarty_tpl ) );
}?></span></p>
                    <p id="old_price"<?php if ((!$_smarty_tpl->tpl_vars['product']->value->specificPrice || !$_smarty_tpl->tpl_vars['product']->value->specificPrice['reduction'])) {?> class="hidden"<?php }?>><?php if ($_smarty_tpl->tpl_vars['priceDisplay']->value >= 0 && $_smarty_tpl->tpl_vars['priceDisplay']->value <= 2) {
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>"displayProductPriceBlock",'product'=>$_smarty_tpl->tpl_vars['product']->value,'type'=>"old_price"),$_smarty_tpl ) );?>
<span id="old_price_display"><span class="price"><?php if ($_smarty_tpl->tpl_vars['productPriceWithoutReduction']->value > $_smarty_tpl->tpl_vars['productPrice']->value) {
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['convertPrice'][0], array( array('price'=>floatval($_smarty_tpl->tpl_vars['productPriceWithoutReduction']->value)),$_smarty_tpl ) );
}?></span><?php if ($_smarty_tpl->tpl_vars['productPriceWithoutReduction']->value > $_smarty_tpl->tpl_vars['productPrice']->value && $_smarty_tpl->tpl_vars['tax_enabled']->value && $_smarty_tpl->tpl_vars['display_tax_label']->value == 1) {?> <?php if ($_smarty_tpl->tpl_vars['priceDisplay']->value == 1) {
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'tax excl.'),$_smarty_tpl ) );
} else {
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'tax incl.'),$_smarty_tpl ) );
}
}?></span><?php }?></p>
                    <?php if ($_smarty_tpl->tpl_vars['priceDisplay']->value == 2) {?>
                      <br>
                      <span id="pretaxe_price"><span id="pretaxe_price_display"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['convertPrice'][0], array( array('price'=>$_smarty_tpl->tpl_vars['product']->value->getPrice(false)),$_smarty_tpl ) );?>
</span> <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'tax excl.'),$_smarty_tpl ) );?>
</span>
                    <?php }?>
                  </div>
                  <?php if (count($_smarty_tpl->tpl_vars['packItems']->value) && $_smarty_tpl->tpl_vars['productPrice']->value < $_smarty_tpl->tpl_vars['product']->value->getNoPackPrice()) {?>
                    <p class="pack_price"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Instead of'),$_smarty_tpl ) );?>
 <span style="text-decoration: line-through;"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['convertPrice'][0], array( array('price'=>$_smarty_tpl->tpl_vars['product']->value->getNoPackPrice()),$_smarty_tpl ) );?>
</span></p>
                  <?php }?>
                  <?php if ($_smarty_tpl->tpl_vars['product']->value->ecotax != 0) {?>
                    <p class="price-ecotax"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Including'),$_smarty_tpl ) );?>
 <span id="ecotax_price_display"><?php if ($_smarty_tpl->tpl_vars['priceDisplay']->value == 2) {
echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'convertAndFormatPrice' ][ 0 ], array( $_smarty_tpl->tpl_vars['ecotax_tax_exc']->value ));
} else {
echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'convertAndFormatPrice' ][ 0 ], array( $_smarty_tpl->tpl_vars['ecotax_tax_inc']->value ));
}?></span> <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'for ecotax'),$_smarty_tpl ) );?>

                      <?php if ($_smarty_tpl->tpl_vars['product']->value->specificPrice && $_smarty_tpl->tpl_vars['product']->value->specificPrice['reduction']) {?>
                        <br><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'(not impacted by the discount)'),$_smarty_tpl ) );?>

                      <?php }?>
                    </p>
                  <?php }?>
                  <?php if (!empty($_smarty_tpl->tpl_vars['product']->value->unity) && $_smarty_tpl->tpl_vars['product']->value->unit_price_ratio > 0.000000) {?>
                    <?php echo smarty_function_math(array('equation'=>"pprice / punit_price",'pprice'=>$_smarty_tpl->tpl_vars['productPrice']->value,'punit_price'=>$_smarty_tpl->tpl_vars['product']->value->unit_price_ratio,'assign'=>'unit_price'),$_smarty_tpl);?>

                    <p class="unit-price"><span id="unit_price_display"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['convertPrice'][0], array( array('price'=>$_smarty_tpl->tpl_vars['unit_price']->value),$_smarty_tpl ) );?>
</span> <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'per'),$_smarty_tpl ) );?>
 <?php echo htmlspecialchars((string)$_smarty_tpl->tpl_vars['product']->value->unity, ENT_QUOTES, 'UTF-8', true);?>
</p>
                    <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>"displayProductPriceBlock",'product'=>$_smarty_tpl->tpl_vars['product']->value,'type'=>"unit_price"),$_smarty_tpl ) );?>

                  <?php }?>
                <?php }?>                 <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>"displayProductPriceBlock",'product'=>$_smarty_tpl->tpl_vars['product']->value,'type'=>"weight",'hook_origin'=>'product_sheet'),$_smarty_tpl ) );?>

                <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>"displayProductPriceBlock",'product'=>$_smarty_tpl->tpl_vars['product']->value,'type'=>"after_price"),$_smarty_tpl ) );?>

              </div>

              <div class="product_attributes clearfix">
                <p id="minimal_quantity_wanted_p"<?php if ($_smarty_tpl->tpl_vars['product']->value->minimal_quantity <= 1 || !$_smarty_tpl->tpl_vars['product']->value->available_for_order || $_smarty_tpl->tpl_vars['PS_CATALOG_MODE']->value) {?> style="display: none;"<?php }?>>
                  <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'The minimum purchase order quantity for the product is'),$_smarty_tpl ) );?>
 <b id="minimal_quantity_label"><?php echo $_smarty_tpl->tpl_vars['product']->value->minimal_quantity;?>
</b>
                </p>

                <?php if ((isset($_smarty_tpl->tpl_vars['groups']->value))) {?>
                  <div id="attributes">
                    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['groups']->value, 'group', false, 'id_attribute_group');
$_smarty_tpl->tpl_vars['group']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['id_attribute_group']->value => $_smarty_tpl->tpl_vars['group']->value) {
$_smarty_tpl->tpl_vars['group']->do_else = false;
?>
                      <?php if (!empty($_smarty_tpl->tpl_vars['group']->value['attributes'])) {?>
                        <fieldset class="attribute_fieldset form-group">
                          <label class="attribute_label" <?php if ($_smarty_tpl->tpl_vars['group']->value['group_type'] != 'color' && $_smarty_tpl->tpl_vars['group']->value['group_type'] != 'radio') {?>for="group_<?php echo intval($_smarty_tpl->tpl_vars['id_attribute_group']->value);?>
"<?php }?>><?php echo htmlspecialchars((string)$_smarty_tpl->tpl_vars['group']->value['name'], ENT_QUOTES, 'UTF-8', true);?>
&nbsp;</label>
                          <?php $_smarty_tpl->_assignInScope('groupName', "group_".((string)$_smarty_tpl->tpl_vars['id_attribute_group']->value));?>
                          <div class="attribute_list">
                            <?php if (($_smarty_tpl->tpl_vars['group']->value['group_type'] == 'select')) {?>
                              <select name="<?php echo $_smarty_tpl->tpl_vars['groupName']->value;?>
" id="group_<?php echo intval($_smarty_tpl->tpl_vars['id_attribute_group']->value);?>
" class="form-control attribute_select no-print">
                                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['group']->value['attributes'], 'group_attribute', false, 'id_attribute');
$_smarty_tpl->tpl_vars['group_attribute']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['id_attribute']->value => $_smarty_tpl->tpl_vars['group_attribute']->value) {
$_smarty_tpl->tpl_vars['group_attribute']->do_else = false;
?>
                                  <option value="<?php echo intval($_smarty_tpl->tpl_vars['id_attribute']->value);?>
"<?php if (((isset($_GET[$_smarty_tpl->tpl_vars['groupName']->value])) && intval($_GET[$_smarty_tpl->tpl_vars['groupName']->value]) == $_smarty_tpl->tpl_vars['id_attribute']->value) || $_smarty_tpl->tpl_vars['group']->value['default'] == $_smarty_tpl->tpl_vars['id_attribute']->value) {?> selected="selected"<?php }?> title="<?php echo htmlspecialchars((string)$_smarty_tpl->tpl_vars['group_attribute']->value, ENT_QUOTES, 'UTF-8', true);?>
"><?php echo htmlspecialchars((string)$_smarty_tpl->tpl_vars['group_attribute']->value, ENT_QUOTES, 'UTF-8', true);?>
</option>
                                <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                              </select>
                            <?php } elseif (($_smarty_tpl->tpl_vars['group']->value['group_type'] == 'color')) {?>
                              <ul id="color_to_pick_list">
                                <?php $_smarty_tpl->_assignInScope('default_colorpicker', '');?>
                                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['group']->value['attributes'], 'group_attribute', false, 'id_attribute');
$_smarty_tpl->tpl_vars['group_attribute']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['id_attribute']->value => $_smarty_tpl->tpl_vars['group_attribute']->value) {
$_smarty_tpl->tpl_vars['group_attribute']->do_else = false;
?>
                                  <?php $_smarty_tpl->_assignInScope('img_color_exists', file_exists((($_smarty_tpl->tpl_vars['col_img_dir']->value).($_smarty_tpl->tpl_vars['id_attribute']->value)).('.jpg')));?>
                                  <li<?php if ($_smarty_tpl->tpl_vars['group']->value['default'] == $_smarty_tpl->tpl_vars['id_attribute']->value) {?> class="selected"<?php }?>>
                                    <a href="<?php echo htmlspecialchars((string)$_smarty_tpl->tpl_vars['link']->value->getProductLink($_smarty_tpl->tpl_vars['product']->value), ENT_QUOTES, 'UTF-8', true);?>
" id="color_<?php echo intval($_smarty_tpl->tpl_vars['id_attribute']->value);?>
" class="color_pick<?php if (($_smarty_tpl->tpl_vars['group']->value['default'] == $_smarty_tpl->tpl_vars['id_attribute']->value)) {?> selected<?php }?>"<?php if (!$_smarty_tpl->tpl_vars['img_color_exists']->value && (isset($_smarty_tpl->tpl_vars['colors']->value[$_smarty_tpl->tpl_vars['id_attribute']->value]['value'])) && $_smarty_tpl->tpl_vars['colors']->value[$_smarty_tpl->tpl_vars['id_attribute']->value]['value']) {?> style="background:<?php echo htmlspecialchars((string)$_smarty_tpl->tpl_vars['colors']->value[$_smarty_tpl->tpl_vars['id_attribute']->value]['value'], ENT_QUOTES, 'UTF-8', true);?>
;"<?php }?> title="<?php echo htmlspecialchars((string)$_smarty_tpl->tpl_vars['colors']->value[$_smarty_tpl->tpl_vars['id_attribute']->value]['name'], ENT_QUOTES, 'UTF-8', true);?>
">
                                      <?php if ($_smarty_tpl->tpl_vars['img_color_exists']->value) {?>
                                        <img src="<?php echo $_smarty_tpl->tpl_vars['img_col_dir']->value;
echo intval($_smarty_tpl->tpl_vars['id_attribute']->value);?>
.jpg" alt="<?php echo htmlspecialchars((string)$_smarty_tpl->tpl_vars['colors']->value[$_smarty_tpl->tpl_vars['id_attribute']->value]['name'], ENT_QUOTES, 'UTF-8', true);?>
" title="<?php echo htmlspecialchars((string)$_smarty_tpl->tpl_vars['colors']->value[$_smarty_tpl->tpl_vars['id_attribute']->value]['name'], ENT_QUOTES, 'UTF-8', true);?>
" width="20" height="20">
                                      <?php }?>
                                    </a>
                                  </li>
                                  <?php if (($_smarty_tpl->tpl_vars['group']->value['default'] == $_smarty_tpl->tpl_vars['id_attribute']->value)) {?>
                                    <?php $_smarty_tpl->_assignInScope('default_colorpicker', $_smarty_tpl->tpl_vars['id_attribute']->value);?>
                                  <?php }?>
                                <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                              </ul>
                              <input type="hidden" class="color_pick_hidden" name="<?php echo htmlspecialchars((string)$_smarty_tpl->tpl_vars['groupName']->value, ENT_QUOTES, 'UTF-8', true);?>
" value="<?php echo intval($_smarty_tpl->tpl_vars['default_colorpicker']->value);?>
">
                            <?php } elseif (($_smarty_tpl->tpl_vars['group']->value['group_type'] == 'radio')) {?>
                              <ul>
                                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['group']->value['attributes'], 'group_attribute', false, 'id_attribute');
$_smarty_tpl->tpl_vars['group_attribute']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['id_attribute']->value => $_smarty_tpl->tpl_vars['group_attribute']->value) {
$_smarty_tpl->tpl_vars['group_attribute']->do_else = false;
?>
                                  <li>
                                    <input type="radio" class="attribute_radio" name="<?php echo htmlspecialchars((string)$_smarty_tpl->tpl_vars['groupName']->value, ENT_QUOTES, 'UTF-8', true);?>
" value="<?php echo $_smarty_tpl->tpl_vars['id_attribute']->value;?>
" <?php if (($_smarty_tpl->tpl_vars['group']->value['default'] == $_smarty_tpl->tpl_vars['id_attribute']->value)) {?> checked="checked"<?php }?>>
                                    <span class="label-text"><?php echo htmlspecialchars((string)$_smarty_tpl->tpl_vars['group_attribute']->value, ENT_QUOTES, 'UTF-8', true);?>
</span>
                                  </li>
                                <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                              </ul>
                            <?php }?>
                          </div>
                        </fieldset>
                      <?php }?>
                    <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                  </div>
                <?php }?>
              </div>

              <div class="box-cart-bottom">
                <?php if (!$_smarty_tpl->tpl_vars['PS_CATALOG_MODE']->value) {?>
                  <div id="quantity_wanted_p"<?php if ((!$_smarty_tpl->tpl_vars['allow_oosp']->value && $_smarty_tpl->tpl_vars['product']->value->quantity <= 0) || !$_smarty_tpl->tpl_vars['product']->value->available_for_order || $_smarty_tpl->tpl_vars['PS_CATALOG_MODE']->value) {?> style="display: none;"<?php }?>>
                    <div><label for="quantity_wanted"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Quantity'),$_smarty_tpl ) );?>
</label></div>
                    <div class="input-group">

                      <input type="tel" min="1" name="qty" id="quantity_wanted" class="text text-center form-control" value="<?php if ((isset($_smarty_tpl->tpl_vars['quantityBackup']->value))) {
echo intval($_smarty_tpl->tpl_vars['quantityBackup']->value);
} else {
if ($_smarty_tpl->tpl_vars['product']->value->minimal_quantity > 1) {
echo $_smarty_tpl->tpl_vars['product']->value->minimal_quantity;
} else { ?>1<?php }
}?>">
                      <div class="input-group-btn">
                        <a href="#" data-field-qty="qty" class="btn btn-default button-minus product_quantity_down" title="Decrease" aria-label="Decrease">
                          <i class="icon icon-fw icon-angle-down"></i>
                        </a>
                      </div>
                      <div class="input-group-btn">
                        <a href="#" data-field-qty="qty" class="btn btn-default button-plus product_quantity_up" title="Increase" aria-label="Increase">
                          <i class="icon icon-fw icon-angle-up"></i>
                        </a>
                      </div>
                    </div>
                  </div>
                <?php }?>
                <div<?php if ((!$_smarty_tpl->tpl_vars['allow_oosp']->value && $_smarty_tpl->tpl_vars['product']->value->quantity <= 0) || !$_smarty_tpl->tpl_vars['product']->value->available_for_order || ((isset($_smarty_tpl->tpl_vars['restricted_country_mode']->value)) && $_smarty_tpl->tpl_vars['restricted_country_mode']->value) || $_smarty_tpl->tpl_vars['PS_CATALOG_MODE']->value) {?> class="unvisible"<?php }?>>
                  <p id="add_to_cart" class="buttons_bottom_block no-print">
                    <button type="submit" name="Submit" class="btn btn-block btn-lg btn-success btn-add-to-cart">
                      <i class="icon icon-shopping-basket"></i>
                      <span><?php if ($_smarty_tpl->tpl_vars['content_only']->value && ((isset($_smarty_tpl->tpl_vars['product']->value->customization_required)) && $_smarty_tpl->tpl_vars['product']->value->customization_required)) {
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Customize'),$_smarty_tpl ) );
} else {
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Add to cart'),$_smarty_tpl ) );
}?></span>
                    </button>
                  </p>
                </div>
              </div>

            </div>
          </form>
        <?php }?>
        <?php if ((isset($_smarty_tpl->tpl_vars['HOOK_EXTRA_RIGHT']->value)) && $_smarty_tpl->tpl_vars['HOOK_EXTRA_RIGHT']->value) {
echo $_smarty_tpl->tpl_vars['HOOK_EXTRA_RIGHT']->value;
}?>

        <?php if (!$_smarty_tpl->tpl_vars['content_only']->value) {?>
          <ul id="usefull_link_block" class="list-unstyled hidden-print">
            <?php if (!empty($_smarty_tpl->tpl_vars['HOOK_EXTRA_LEFT']->value)) {
echo $_smarty_tpl->tpl_vars['HOOK_EXTRA_LEFT']->value;
}?>
            <li>
              <a href="javascript:print();" title="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Print this page'),$_smarty_tpl ) );?>
">
                <i class="icon icon-fw icon-print"></i> <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Print'),$_smarty_tpl ) );?>

              </a>
            </li>
          </ul>
        <?php }?>
        <?php if ((isset($_smarty_tpl->tpl_vars['HOOK_PRODUCT_ACTIONS']->value)) && $_smarty_tpl->tpl_vars['HOOK_PRODUCT_ACTIONS']->value) {
echo $_smarty_tpl->tpl_vars['HOOK_PRODUCT_ACTIONS']->value;
}?>
      </div>
      </div>
    </div>

    <?php if (!$_smarty_tpl->tpl_vars['content_only']->value) {?>
      <?php if (!empty($_smarty_tpl->tpl_vars['quantity_discounts']->value)) {?>
        <section id="product-volume-discounts" class="page-product-box">
          <h3 class="page-product-heading"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Volume discounts'),$_smarty_tpl ) );?>
</h3>
          <div id="quantityDiscount" class="table-responsive">
            <table class="table-product-discounts table table-condensed table-bordered table-hover">
              <thead>
              <tr>
                <th><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Quantity'),$_smarty_tpl ) );?>
</th>
                <th><?php if ($_smarty_tpl->tpl_vars['display_discount_price']->value) {
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Price'),$_smarty_tpl ) );
} else {
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Discount'),$_smarty_tpl ) );
}?></th>
                <th><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'You Save'),$_smarty_tpl ) );?>
</th>
              </tr>
              </thead>
              <tbody>
              <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['quantity_discounts']->value, 'quantity_discount', false, NULL, 'quantity_discounts', array (
));
$_smarty_tpl->tpl_vars['quantity_discount']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['quantity_discount']->value) {
$_smarty_tpl->tpl_vars['quantity_discount']->do_else = false;
?>
                <?php if ($_smarty_tpl->tpl_vars['quantity_discount']->value['price'] >= 0 || $_smarty_tpl->tpl_vars['quantity_discount']->value['reduction_type'] == 'amount') {?>
                  <?php $_smarty_tpl->_assignInScope('realDiscountPrice', floatval($_smarty_tpl->tpl_vars['productPriceWithoutReduction']->value)-floatval($_smarty_tpl->tpl_vars['quantity_discount']->value['real_value']));?>
                <?php } else { ?>
                  <?php $_smarty_tpl->_assignInScope('realDiscountPrice', floatval($_smarty_tpl->tpl_vars['productPriceWithoutReduction']->value)-floatval(($_smarty_tpl->tpl_vars['productPriceWithoutReduction']->value*$_smarty_tpl->tpl_vars['quantity_discount']->value['reduction'])));?>
                <?php }?>
                <tr id="quantityDiscount_<?php echo $_smarty_tpl->tpl_vars['quantity_discount']->value['id_product_attribute'];?>
" class="quantityDiscount_<?php echo $_smarty_tpl->tpl_vars['quantity_discount']->value['id_product_attribute'];?>
" data-real-discount-value="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['convertPrice'][0], array( array('price'=>$_smarty_tpl->tpl_vars['realDiscountPrice']->value),$_smarty_tpl ) );?>
" data-discount-type="<?php echo $_smarty_tpl->tpl_vars['quantity_discount']->value['reduction_type'];?>
" data-discount="<?php echo floatval($_smarty_tpl->tpl_vars['quantity_discount']->value['real_value']);?>
" data-discount-quantity="<?php echo intval($_smarty_tpl->tpl_vars['quantity_discount']->value['quantity']);?>
">
                  <td>
                    <?php echo intval($_smarty_tpl->tpl_vars['quantity_discount']->value['quantity']);?>

                  </td>
                  <td>
                    <?php if ($_smarty_tpl->tpl_vars['quantity_discount']->value['price'] >= 0 || $_smarty_tpl->tpl_vars['quantity_discount']->value['reduction_type'] == 'amount') {?>
                      <?php if ($_smarty_tpl->tpl_vars['display_discount_price']->value) {?>
                        <?php if ($_smarty_tpl->tpl_vars['quantity_discount']->value['reduction_tax'] == 0 && !$_smarty_tpl->tpl_vars['quantity_discount']->value['price']) {?>
                          <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['convertPrice'][0], array( array('price'=>floatval($_smarty_tpl->tpl_vars['productPriceWithoutReduction']->value)-floatval(($_smarty_tpl->tpl_vars['productPriceWithoutReduction']->value*$_smarty_tpl->tpl_vars['quantity_discount']->value['reduction_with_tax']))),$_smarty_tpl ) );?>

                        <?php } else { ?>
                          <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['convertPrice'][0], array( array('price'=>floatval($_smarty_tpl->tpl_vars['productPriceWithoutReduction']->value)-floatval($_smarty_tpl->tpl_vars['quantity_discount']->value['real_value'])),$_smarty_tpl ) );?>

                        <?php }?>
                      <?php } else { ?>
                        <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['convertPrice'][0], array( array('price'=>floatval($_smarty_tpl->tpl_vars['quantity_discount']->value['real_value'])),$_smarty_tpl ) );?>

                      <?php }?>
                    <?php } else { ?>
                      <?php if ($_smarty_tpl->tpl_vars['display_discount_price']->value) {?>
                        <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['convertPrice'][0], array( array('price'=>floatval($_smarty_tpl->tpl_vars['productPriceWithoutReduction']->value)-floatval(($_smarty_tpl->tpl_vars['productPriceWithoutReduction']->value*$_smarty_tpl->tpl_vars['quantity_discount']->value['reduction']))),$_smarty_tpl ) );?>
                        
                      <?php } else { ?>
                        <?php echo floatval($_smarty_tpl->tpl_vars['quantity_discount']->value['real_value']);?>
%
                      <?php }?>
                    <?php }?>
                  </td>
                  <td>
                    <span><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Up to'),$_smarty_tpl ) );?>
</span>
                    <?php if ($_smarty_tpl->tpl_vars['quantity_discount']->value['price'] >= 0 || $_smarty_tpl->tpl_vars['quantity_discount']->value['reduction_type'] == 'amount') {?>
                      <?php $_smarty_tpl->_assignInScope('discountPrice', floatval($_smarty_tpl->tpl_vars['productPriceWithoutReduction']->value)-floatval($_smarty_tpl->tpl_vars['quantity_discount']->value['real_value']));?>
                    <?php } else { ?>
                      <?php $_smarty_tpl->_assignInScope('discountPrice', floatval($_smarty_tpl->tpl_vars['productPriceWithoutReduction']->value)-floatval(($_smarty_tpl->tpl_vars['productPriceWithoutReduction']->value*$_smarty_tpl->tpl_vars['quantity_discount']->value['reduction'])));?>
                    <?php }?>
                    <?php $_smarty_tpl->_assignInScope('discountPrice', $_smarty_tpl->tpl_vars['discountPrice']->value*$_smarty_tpl->tpl_vars['quantity_discount']->value['quantity']);?>
                    <?php $_smarty_tpl->_assignInScope('qtyProductPrice', floatval($_smarty_tpl->tpl_vars['productPriceWithoutReduction']->value)*$_smarty_tpl->tpl_vars['quantity_discount']->value['quantity']);?>
                    <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['convertPrice'][0], array( array('price'=>$_smarty_tpl->tpl_vars['qtyProductPrice']->value-$_smarty_tpl->tpl_vars['discountPrice']->value),$_smarty_tpl ) );?>

                  </td>
                </tr>
              <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
              </tbody>
            </table>
          </div>
        </section>
      <?php }?>

      <?php if (!empty($_smarty_tpl->tpl_vars['features']->value)) {?>
        <section id="product-features" class="page-product-box">
          <h3 class="page-product-heading"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Data sheet'),$_smarty_tpl ) );?>
</h3>
          <div class="table-responsive">
            <table class="table table-bordered table-condensed table-hover table-data-sheet">
              <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['features']->value, 'feature');
$_smarty_tpl->tpl_vars['feature']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['feature']->value) {
$_smarty_tpl->tpl_vars['feature']->do_else = false;
?>
                <tr class="<?php echo smarty_function_cycle(array('values'=>"odd,even"),$_smarty_tpl);?>
">
                  <?php if ((isset($_smarty_tpl->tpl_vars['feature']->value['value']))) {?>
                    <td><?php echo htmlspecialchars((string)$_smarty_tpl->tpl_vars['feature']->value['name'], ENT_QUOTES, 'UTF-8', true);?>
</td>
                    <td><?php echo htmlspecialchars((string)$_smarty_tpl->tpl_vars['feature']->value['value'], ENT_QUOTES, 'UTF-8', true);?>
</td>
                  <?php }?>
                </tr>
              <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
            </table>
          </div>
        </section>
      <?php }?>

      <?php if ((isset($_smarty_tpl->tpl_vars['product']->value)) && $_smarty_tpl->tpl_vars['product']->value->description) {?>
        <section id="product-description" class="page-product-box">
          <h3 class="page-product-heading"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'More info'),$_smarty_tpl ) );?>
</h3>
          <div  class="rte"><?php echo $_smarty_tpl->tpl_vars['product']->value->description;?>
</div>
        </section>
      <?php }?>

      <?php if ((isset($_smarty_tpl->tpl_vars['packItems']->value)) && count($_smarty_tpl->tpl_vars['packItems']->value) > 0) {?>
        <section id="blockpack" class="page-product-box">
          <h3 class="page-product-heading"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Pack content'),$_smarty_tpl ) );?>
</h3>
          <?php $_smarty_tpl->_subTemplateRender(((string)$_smarty_tpl->tpl_vars['tpl_dir']->value)."./product-list.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('products'=>$_smarty_tpl->tpl_vars['packItems']->value), 0, true);
?>
        </section>
      <?php }?>

      <?php ob_start();
echo $_smarty_tpl->tpl_vars['HOOK_PRODUCT_TAB']->value;
$_prefixVariable5 = ob_get_clean();
if (!empty($_smarty_tpl->tpl_vars['HOOK_PRODUCT_TAB_CONTENT']->value) || !empty($_prefixVariable5)) {?>
        <section id="product-hook-tab" class="page-product-box">
          <?php if (!empty($_smarty_tpl->tpl_vars['HOOK_PRODUCT_TAB']->value)) {
echo $_smarty_tpl->tpl_vars['HOOK_PRODUCT_TAB']->value;
}?>
          <?php if (!empty($_smarty_tpl->tpl_vars['HOOK_PRODUCT_TAB_CONTENT']->value)) {
echo $_smarty_tpl->tpl_vars['HOOK_PRODUCT_TAB_CONTENT']->value;
}?>
        </section>
      <?php }?>

      <?php if (!empty($_smarty_tpl->tpl_vars['accessories']->value)) {?>
        <section id="product-accessories" class="page-product-box">
          <h3 class="page-product-heading"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Accessories'),$_smarty_tpl ) );?>
</h3>
          <div class="accessories-block">
            <?php $_smarty_tpl->_subTemplateRender(((string)$_smarty_tpl->tpl_vars['tpl_dir']->value)."./product-list.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('products'=>$_smarty_tpl->tpl_vars['accessories']->value), 0, true);
?>
          </div>
        </section>
      <?php }?>

      <?php if ((isset($_smarty_tpl->tpl_vars['HOOK_PRODUCT_FOOTER']->value)) && $_smarty_tpl->tpl_vars['HOOK_PRODUCT_FOOTER']->value) {
echo $_smarty_tpl->tpl_vars['HOOK_PRODUCT_FOOTER']->value;
}?>

      <?php if (((isset($_smarty_tpl->tpl_vars['product']->value)) && $_smarty_tpl->tpl_vars['product']->value->description) || ((isset($_smarty_tpl->tpl_vars['features']->value)) && $_smarty_tpl->tpl_vars['features']->value) || ((isset($_smarty_tpl->tpl_vars['accessories']->value)) && $_smarty_tpl->tpl_vars['accessories']->value) || ((isset($_smarty_tpl->tpl_vars['HOOK_PRODUCT_TAB']->value)) && $_smarty_tpl->tpl_vars['HOOK_PRODUCT_TAB']->value) || ((isset($_smarty_tpl->tpl_vars['attachments']->value)) && $_smarty_tpl->tpl_vars['attachments']->value) || (isset($_smarty_tpl->tpl_vars['product']->value)) && $_smarty_tpl->tpl_vars['product']->value->customizable) {?>
        <?php if ((isset($_smarty_tpl->tpl_vars['attachments']->value)) && $_smarty_tpl->tpl_vars['attachments']->value) {?>
          <section id="product-attachments" class="page-product-box">
            <h3 class="page-product-heading"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Download'),$_smarty_tpl ) );?>
</h3>
            <div class="row">
              <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['attachments']->value, 'attachment');
$_smarty_tpl->tpl_vars['attachment']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['attachment']->value) {
$_smarty_tpl->tpl_vars['attachment']->do_else = false;
?>
                <div class="col-xs-12 col-sm-4 col-lg-3">
                  <div class="panel panel-default">
                    <div class="panel-heading">
                      <a href="<?php echo htmlspecialchars((string)$_smarty_tpl->tpl_vars['link']->value->getPageLink('attachment',true,NULL,"id_attachment=".((string)$_smarty_tpl->tpl_vars['attachment']->value['id_attachment'])), ENT_QUOTES, 'UTF-8', true);?>
">
                        <?php echo htmlspecialchars((string)$_smarty_tpl->tpl_vars['attachment']->value['name'], ENT_QUOTES, 'UTF-8', true);?>

                      </a>
                    </div>
                    <div class="panel-body">
                      <?php if (!empty($_smarty_tpl->tpl_vars['attachment']->value['description'])) {?>
                        <p class="text-muted"><?php echo htmlspecialchars((string)$_smarty_tpl->tpl_vars['attachment']->value['description'], ENT_QUOTES, 'UTF-8', true);?>
</p>
                      <?php }?>
                      <a class="btn btn-default btn-block" href="<?php echo htmlspecialchars((string)$_smarty_tpl->tpl_vars['link']->value->getPageLink('attachment',true,NULL,"id_attachment=".((string)$_smarty_tpl->tpl_vars['attachment']->value['id_attachment'])), ENT_QUOTES, 'UTF-8', true);?>
">
                        <i class="icon icon-download"></i> <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>"Download"),$_smarty_tpl ) );?>
 (<?php echo Tools::formatBytes($_smarty_tpl->tpl_vars['attachment']->value['file_size'],2);?>
)
                      </a>
                    </div>
                  </div>
                </div>
              <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
            </div>
          </section>
        <?php }?>

        <?php if ((isset($_smarty_tpl->tpl_vars['product']->value)) && $_smarty_tpl->tpl_vars['product']->value->customizable) {?>
          <section id="product-customization" class="page-product-box">
            <h3 class="page-product-heading"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Product customization'),$_smarty_tpl ) );?>
</h3>
            <form method="post" action="<?php echo $_smarty_tpl->tpl_vars['customizationFormTarget']->value;?>
" enctype="multipart/form-data" id="customizationForm" class="clearfix">
              <p class="infoCustomizable">
                <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'After saving your customized product, remember to add it to your cart.'),$_smarty_tpl ) );?>

                <?php if ($_smarty_tpl->tpl_vars['product']->value->uploadable_files) {?>
                  <br> <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Allowed file formats are: GIF, JPG, PNG'),$_smarty_tpl ) );?>

                <?php }?>
              </p>

              <?php if (intval($_smarty_tpl->tpl_vars['product']->value->uploadable_files)) {?>
                <div class="customizableProductsFile">
                  <h3><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Pictures'),$_smarty_tpl ) );?>
</h3>
                  <ul id="uploadable_files" class="list-unstyled clearfix">
                    <?php echo smarty_function_counter(array('start'=>0,'assign'=>'customizationField'),$_smarty_tpl);?>

                    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['customizationFields']->value, 'field', false, NULL, 'customizationFields', array (
));
$_smarty_tpl->tpl_vars['field']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['field']->value) {
$_smarty_tpl->tpl_vars['field']->do_else = false;
?>
                      <?php if ($_smarty_tpl->tpl_vars['field']->value['type'] == 0) {?>
                        <li class="customizationUploadLine form-group<?php if ($_smarty_tpl->tpl_vars['field']->value['required']) {?> required<?php }?>"><?php $_smarty_tpl->_assignInScope('key', ((('pictures_').($_smarty_tpl->tpl_vars['product']->value->id)).('_')).($_smarty_tpl->tpl_vars['field']->value['id_customization_field']));?>
                          <?php if ((isset($_smarty_tpl->tpl_vars['pictures']->value[$_smarty_tpl->tpl_vars['key']->value]))) {?>
                            <div class="customizationUploadBrowse">
                              <img src="<?php echo $_smarty_tpl->tpl_vars['pic_dir']->value;
echo $_smarty_tpl->tpl_vars['pictures']->value[$_smarty_tpl->tpl_vars['key']->value];?>
_small" alt="">
                              <a href="<?php echo htmlspecialchars((string)$_smarty_tpl->tpl_vars['link']->value->getProductDeletePictureLink($_smarty_tpl->tpl_vars['product']->value,$_smarty_tpl->tpl_vars['field']->value['id_customization_field']), ENT_QUOTES, 'UTF-8', true);?>
" title="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Delete'),$_smarty_tpl ) );?>
" >
                                <img src="<?php echo $_smarty_tpl->tpl_vars['img_dir']->value;?>
icon/delete.gif" alt="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Delete'),$_smarty_tpl ) );?>
" class="customization_delete_icon" width="11" height="13">
                              </a>
                            </div>
                          <?php }?>
                          <div class="customizationUploadBrowse form-group">
                            <label class="customizationUploadBrowseDescription">
                              <?php if (!empty($_smarty_tpl->tpl_vars['field']->value['name'])) {?>
                                <?php echo $_smarty_tpl->tpl_vars['field']->value['name'];?>

                              <?php } else { ?>
                                <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Please select an image file from your computer'),$_smarty_tpl ) );?>

                              <?php }?>
                              <?php if ($_smarty_tpl->tpl_vars['field']->value['required']) {?><sup>*</sup><?php }?>
                            </label>
                            <input type="file" name="file<?php echo $_smarty_tpl->tpl_vars['field']->value['id_customization_field'];?>
" id="img<?php echo $_smarty_tpl->tpl_vars['customizationField']->value;?>
" class="form-control customization_block_input <?php if ((isset($_smarty_tpl->tpl_vars['pictures']->value[$_smarty_tpl->tpl_vars['key']->value]))) {?>filled<?php }?>">
                          </div>
                        </li>
                        <?php echo smarty_function_counter(array(),$_smarty_tpl);?>

                      <?php }?>
                    <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                  </ul>
                </div>
              <?php }?>

              <?php if (intval($_smarty_tpl->tpl_vars['product']->value->text_fields)) {?>
                <div class="customizableProductsText">
                  <h3><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Text'),$_smarty_tpl ) );?>
</h3>
                  <ul id="text_fields" class="list-unstyled">
                    <?php echo smarty_function_counter(array('start'=>0,'assign'=>'customizationField'),$_smarty_tpl);?>

                    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['customizationFields']->value, 'field', false, NULL, 'customizationFields', array (
));
$_smarty_tpl->tpl_vars['field']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['field']->value) {
$_smarty_tpl->tpl_vars['field']->do_else = false;
?>
                      <?php if ($_smarty_tpl->tpl_vars['field']->value['type'] == 1) {?>
                        <li class="customizationUploadLine form-group<?php if ($_smarty_tpl->tpl_vars['field']->value['required']) {?> required<?php }?>">
                          <label for ="textField<?php echo $_smarty_tpl->tpl_vars['customizationField']->value;?>
">
                            <?php $_smarty_tpl->_assignInScope('key', ((('textFields_').($_smarty_tpl->tpl_vars['product']->value->id)).('_')).($_smarty_tpl->tpl_vars['field']->value['id_customization_field']));?>
                            <?php if (!empty($_smarty_tpl->tpl_vars['field']->value['name'])) {?>
                              <?php echo $_smarty_tpl->tpl_vars['field']->value['name'];?>

                            <?php }?>
                            <?php if ($_smarty_tpl->tpl_vars['field']->value['required']) {?><sup>*</sup><?php }?>
                          </label>
                          <textarea name="textField<?php echo $_smarty_tpl->tpl_vars['field']->value['id_customization_field'];?>
" class="form-control customization_block_input" id="textField<?php echo $_smarty_tpl->tpl_vars['customizationField']->value;?>
" rows="3" cols="20"><?php if ((isset($_smarty_tpl->tpl_vars['textFields']->value[$_smarty_tpl->tpl_vars['key']->value]))) {
echo stripslashes($_smarty_tpl->tpl_vars['textFields']->value[$_smarty_tpl->tpl_vars['key']->value]);
}?></textarea>
                        </li>
                        <?php echo smarty_function_counter(array(),$_smarty_tpl);?>

                      <?php }?>
                    <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                  </ul>
                </div>
              <?php }?>
              <div id="customizedDatas" class="form-group">
                <input type="hidden" name="quantityBackup" id="quantityBackup" value="">
                <input type="hidden" name="submitCustomizedDatas" value="1">
                <button class="btn btn-lg btn-success" name="saveCustomization">
                  <span><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Save'),$_smarty_tpl ) );?>
</span>
                </button>
                <span id="ajax-loader" class="unvisible">
                 <img src="<?php echo $_smarty_tpl->tpl_vars['img_ps_dir']->value;?>
loader.gif" alt="loader">
                </span>
              </div>
            </form>
            <div class="form-group">
              <div class="help-block">
                <sup>*</sup> <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'required fields'),$_smarty_tpl ) );?>

              </div>
            </div>
          </section>
        <?php }?>

      <?php }?>
    <?php }?>
  </div>

  <?php if ((isset($_GET['ad'])) && $_GET['ad']) {
$_block_plugin1 = isset($_smarty_tpl->smarty->registered_plugins['block']['addJsDefL'][0][0]) ? $_smarty_tpl->smarty->registered_plugins['block']['addJsDefL'][0][0] : null;
if (!is_callable(array($_block_plugin1, 'addJsDefL'))) {
throw new SmartyException('block tag \'addJsDefL\' not callable or registered');
}
$_smarty_tpl->smarty->_cache['_tag_stack'][] = array('addJsDefL', array('name'=>'ad'));
$_block_repeat=true;
echo $_block_plugin1->addJsDefL(array('name'=>'ad'), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();
echo htmlspecialchars((string)($_smarty_tpl->tpl_vars['base_dir']->value).($_GET['ad']), ENT_QUOTES, 'UTF-8', true);
$_block_repeat=false;
echo $_block_plugin1->addJsDefL(array('name'=>'ad'), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);
}
if ((isset($_GET['adtoken'])) && $_GET['adtoken']) {
$_block_plugin2 = isset($_smarty_tpl->smarty->registered_plugins['block']['addJsDefL'][0][0]) ? $_smarty_tpl->smarty->registered_plugins['block']['addJsDefL'][0][0] : null;
if (!is_callable(array($_block_plugin2, 'addJsDefL'))) {
throw new SmartyException('block tag \'addJsDefL\' not callable or registered');
}
$_smarty_tpl->smarty->_cache['_tag_stack'][] = array('addJsDefL', array('name'=>'adtoken'));
$_block_repeat=true;
echo $_block_plugin2->addJsDefL(array('name'=>'adtoken'), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();
echo htmlspecialchars((string)$_GET['adtoken'], ENT_QUOTES, 'UTF-8', true);
$_block_repeat=false;
echo $_block_plugin2->addJsDefL(array('name'=>'adtoken'), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);
}
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['addJsDef'][0], array( array('allowBuyWhenOutOfStock'=>call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'boolval' ][ 0 ], array( $_smarty_tpl->tpl_vars['allow_oosp']->value ))),$_smarty_tpl ) );
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['addJsDef'][0], array( array('availableNowValue'=>preg_replace("%(?<!\\\\)'%", "\'", (string)$_smarty_tpl->tpl_vars['product']->value->available_now)),$_smarty_tpl ) );
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['addJsDef'][0], array( array('availableLaterValue'=>preg_replace("%(?<!\\\\)'%", "\'", (string)$_smarty_tpl->tpl_vars['product']->value->available_later)),$_smarty_tpl ) );
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['addJsDef'][0], array( array('attribute_anchor_separator'=>preg_replace("%(?<!\\\\)'%", "\'", (string)$_smarty_tpl->tpl_vars['attribute_anchor_separator']->value)),$_smarty_tpl ) );
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['addJsDef'][0], array( array('attributesCombinations'=>$_smarty_tpl->tpl_vars['attributesCombinations']->value),$_smarty_tpl ) );
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['addJsDef'][0], array( array('currentDate'=>smarty_modifier_date_format(time(),'%Y-%m-%d %H:%M:%S')),$_smarty_tpl ) );
if ((isset($_smarty_tpl->tpl_vars['combinations']->value)) && $_smarty_tpl->tpl_vars['combinations']->value) {
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['addJsDef'][0], array( array('combinations'=>$_smarty_tpl->tpl_vars['combinations']->value),$_smarty_tpl ) );
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['addJsDef'][0], array( array('combinationsFromController'=>$_smarty_tpl->tpl_vars['combinations']->value),$_smarty_tpl ) );
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['addJsDef'][0], array( array('displayDiscountPrice'=>$_smarty_tpl->tpl_vars['display_discount_price']->value),$_smarty_tpl ) );
$_block_plugin3 = isset($_smarty_tpl->smarty->registered_plugins['block']['addJsDefL'][0][0]) ? $_smarty_tpl->smarty->registered_plugins['block']['addJsDefL'][0][0] : null;
if (!is_callable(array($_block_plugin3, 'addJsDefL'))) {
throw new SmartyException('block tag \'addJsDefL\' not callable or registered');
}
$_smarty_tpl->smarty->_cache['_tag_stack'][] = array('addJsDefL', array('name'=>'upToTxt'));
$_block_repeat=true;
echo $_block_plugin3->addJsDefL(array('name'=>'upToTxt'), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Up to','js'=>1),$_smarty_tpl ) );
$_block_repeat=false;
echo $_block_plugin3->addJsDefL(array('name'=>'upToTxt'), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);
}
if ((isset($_smarty_tpl->tpl_vars['combinationImages']->value)) && $_smarty_tpl->tpl_vars['combinationImages']->value) {
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['addJsDef'][0], array( array('combinationImages'=>$_smarty_tpl->tpl_vars['combinationImages']->value),$_smarty_tpl ) );
}
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['addJsDef'][0], array( array('customizationId'=>$_smarty_tpl->tpl_vars['id_customization']->value),$_smarty_tpl ) );
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['addJsDef'][0], array( array('customizationFields'=>$_smarty_tpl->tpl_vars['customizationFields']->value),$_smarty_tpl ) );
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['addJsDef'][0], array( array('default_eco_tax'=>floatval($_smarty_tpl->tpl_vars['product']->value->ecotax)),$_smarty_tpl ) );
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['addJsDef'][0], array( array('displayPrice'=>intval($_smarty_tpl->tpl_vars['priceDisplay']->value)),$_smarty_tpl ) );
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['addJsDef'][0], array( array('ecotaxTax_rate'=>floatval($_smarty_tpl->tpl_vars['ecotaxTax_rate']->value)),$_smarty_tpl ) );
if ((isset($_smarty_tpl->tpl_vars['cover']->value['id_image_only']))) {
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['addJsDef'][0], array( array('idDefaultImage'=>intval($_smarty_tpl->tpl_vars['cover']->value['id_image_only'])),$_smarty_tpl ) );
} else {
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['addJsDef'][0], array( array('idDefaultImage'=>0),$_smarty_tpl ) );
}
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['addJsDef'][0], array( array('img_ps_dir'=>$_smarty_tpl->tpl_vars['img_ps_dir']->value),$_smarty_tpl ) );
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['addJsDef'][0], array( array('img_prod_dir'=>$_smarty_tpl->tpl_vars['img_prod_dir']->value),$_smarty_tpl ) );
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['addJsDef'][0], array( array('id_product'=>intval($_smarty_tpl->tpl_vars['product']->value->id)),$_smarty_tpl ) );
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['addJsDef'][0], array( array('jqZoomEnabled'=>call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'boolval' ][ 0 ], array( $_smarty_tpl->tpl_vars['jqZoomEnabled']->value ))),$_smarty_tpl ) );
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['addJsDef'][0], array( array('maxQuantityToAllowDisplayOfLastQuantityMessage'=>intval($_smarty_tpl->tpl_vars['last_qties']->value)),$_smarty_tpl ) );
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['addJsDef'][0], array( array('minimalQuantity'=>intval($_smarty_tpl->tpl_vars['product']->value->minimal_quantity)),$_smarty_tpl ) );
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['addJsDef'][0], array( array('noTaxForThisProduct'=>call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'boolval' ][ 0 ], array( $_smarty_tpl->tpl_vars['no_tax']->value ))),$_smarty_tpl ) );
if ((isset($_smarty_tpl->tpl_vars['customer_group_without_tax']->value))) {
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['addJsDef'][0], array( array('customerGroupWithoutTax'=>call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'boolval' ][ 0 ], array( $_smarty_tpl->tpl_vars['customer_group_without_tax']->value ))),$_smarty_tpl ) );
} else {
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['addJsDef'][0], array( array('customerGroupWithoutTax'=>false),$_smarty_tpl ) );
}
if ((isset($_smarty_tpl->tpl_vars['group_reduction']->value))) {
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['addJsDef'][0], array( array('groupReduction'=>floatval($_smarty_tpl->tpl_vars['group_reduction']->value)),$_smarty_tpl ) );
} else {
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['addJsDef'][0], array( array('groupReduction'=>false),$_smarty_tpl ) );
}
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['addJsDef'][0], array( array('oosHookJsCodeFunctions'=>array()),$_smarty_tpl ) );
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['addJsDef'][0], array( array('productHasAttributes'=>call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'boolval' ][ 0 ], array( (isset($_smarty_tpl->tpl_vars['groups']->value)) ))),$_smarty_tpl ) );
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['addJsDef'][0], array( array('productPriceTaxExcluded'=>floatval(((($tmp = $_smarty_tpl->tpl_vars['product']->value->getPriceWithoutReduct(true) ?? null)===null||$tmp==='' ? 'null' ?? null : $tmp)-$_smarty_tpl->tpl_vars['product']->value->ecotax))),$_smarty_tpl ) );
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['addJsDef'][0], array( array('productPriceTaxIncluded'=>floatval(((($tmp = $_smarty_tpl->tpl_vars['product']->value->getPriceWithoutReduct(false) ?? null)===null||$tmp==='' ? 'null' ?? null : $tmp)-$_smarty_tpl->tpl_vars['product']->value->ecotax*(1+$_smarty_tpl->tpl_vars['ecotaxTax_rate']->value/100)))),$_smarty_tpl ) );
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['addJsDef'][0], array( array('productBasePriceTaxExcluded'=>floatval(($_smarty_tpl->tpl_vars['product']->value->getPrice(false,null,(defined('_TB_PRICE_DATABASE_PRECISION_') ? constant('_TB_PRICE_DATABASE_PRECISION_') : null),null,false,false)-$_smarty_tpl->tpl_vars['product']->value->ecotax))),$_smarty_tpl ) );
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['addJsDef'][0], array( array('productBasePriceTaxExcl'=>(floatval($_smarty_tpl->tpl_vars['product']->value->getPrice(false,null,(defined('_TB_PRICE_DATABASE_PRECISION_') ? constant('_TB_PRICE_DATABASE_PRECISION_') : null),null,false,false)))),$_smarty_tpl ) );
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['addJsDef'][0], array( array('productBasePriceTaxIncl'=>(floatval($_smarty_tpl->tpl_vars['product']->value->getPrice(true,null,(defined('_TB_PRICE_DATABASE_PRECISION_') ? constant('_TB_PRICE_DATABASE_PRECISION_') : null),null,false,false)))),$_smarty_tpl ) );
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['addJsDef'][0], array( array('productReference'=>htmlspecialchars((string)$_smarty_tpl->tpl_vars['product']->value->reference, ENT_QUOTES, 'UTF-8', true)),$_smarty_tpl ) );
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['addJsDef'][0], array( array('productAvailableForOrder'=>call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'boolval' ][ 0 ], array( $_smarty_tpl->tpl_vars['product']->value->available_for_order ))),$_smarty_tpl ) );
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['addJsDef'][0], array( array('productPriceWithoutReduction'=>floatval($_smarty_tpl->tpl_vars['productPriceWithoutReduction']->value)),$_smarty_tpl ) );
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['addJsDef'][0], array( array('productPrice'=>floatval($_smarty_tpl->tpl_vars['productPrice']->value)),$_smarty_tpl ) );
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['addJsDef'][0], array( array('productUnitPriceRatio'=>floatval($_smarty_tpl->tpl_vars['product']->value->unit_price_ratio)),$_smarty_tpl ) );
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['addJsDef'][0], array( array('productShowPrice'=>call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'boolval' ][ 0 ], array( (!$_smarty_tpl->tpl_vars['PS_CATALOG_MODE']->value && $_smarty_tpl->tpl_vars['product']->value->show_price) ))),$_smarty_tpl ) );
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['addJsDef'][0], array( array('PS_CATALOG_MODE'=>$_smarty_tpl->tpl_vars['PS_CATALOG_MODE']->value),$_smarty_tpl ) );
if ($_smarty_tpl->tpl_vars['product']->value->specificPrice && count($_smarty_tpl->tpl_vars['product']->value->specificPrice)) {
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['addJsDef'][0], array( array('product_specific_price'=>$_smarty_tpl->tpl_vars['product']->value->specificPrice),$_smarty_tpl ) );
} else {
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['addJsDef'][0], array( array('product_specific_price'=>array()),$_smarty_tpl ) );
}
if ($_smarty_tpl->tpl_vars['display_qties']->value == 1 && $_smarty_tpl->tpl_vars['product']->value->quantity) {
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['addJsDef'][0], array( array('quantityAvailable'=>$_smarty_tpl->tpl_vars['product']->value->quantity),$_smarty_tpl ) );
} else {
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['addJsDef'][0], array( array('quantityAvailable'=>0),$_smarty_tpl ) );
}
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['addJsDef'][0], array( array('quantitiesDisplayAllowed'=>call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'boolval' ][ 0 ], array( $_smarty_tpl->tpl_vars['display_qties']->value ))),$_smarty_tpl ) );
if ($_smarty_tpl->tpl_vars['product']->value->specificPrice && $_smarty_tpl->tpl_vars['product']->value->specificPrice['reduction'] && $_smarty_tpl->tpl_vars['product']->value->specificPrice['reduction_type'] == 'percentage') {
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['addJsDef'][0], array( array('reduction_percent'=>$_smarty_tpl->tpl_vars['product']->value->specificPrice['reduction']*floatval(100)),$_smarty_tpl ) );
} else {
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['addJsDef'][0], array( array('reduction_percent'=>0),$_smarty_tpl ) );
}
if ($_smarty_tpl->tpl_vars['product']->value->specificPrice && $_smarty_tpl->tpl_vars['product']->value->specificPrice['reduction'] && $_smarty_tpl->tpl_vars['product']->value->specificPrice['reduction_type'] == 'amount') {
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['addJsDef'][0], array( array('reduction_price'=>floatval($_smarty_tpl->tpl_vars['product']->value->specificPrice['reduction'])),$_smarty_tpl ) );
} else {
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['addJsDef'][0], array( array('reduction_price'=>0),$_smarty_tpl ) );
}
if ($_smarty_tpl->tpl_vars['product']->value->specificPrice && $_smarty_tpl->tpl_vars['product']->value->specificPrice['price']) {
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['addJsDef'][0], array( array('specific_price'=>floatval($_smarty_tpl->tpl_vars['product']->value->specificPrice['price'])),$_smarty_tpl ) );
} else {
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['addJsDef'][0], array( array('specific_price'=>0),$_smarty_tpl ) );
}
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['addJsDef'][0], array( array('specific_currency'=>call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'boolval' ][ 0 ], array( ($_smarty_tpl->tpl_vars['product']->value->specificPrice && $_smarty_tpl->tpl_vars['product']->value->specificPrice['id_currency']) ))),$_smarty_tpl ) );?>
     <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['addJsDef'][0], array( array('stock_management'=>intval($_smarty_tpl->tpl_vars['PS_STOCK_MANAGEMENT']->value)),$_smarty_tpl ) );
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['addJsDef'][0], array( array('taxRate'=>floatval($_smarty_tpl->tpl_vars['tax_rate']->value)),$_smarty_tpl ) );
$_block_plugin4 = isset($_smarty_tpl->smarty->registered_plugins['block']['addJsDefL'][0][0]) ? $_smarty_tpl->smarty->registered_plugins['block']['addJsDefL'][0][0] : null;
if (!is_callable(array($_block_plugin4, 'addJsDefL'))) {
throw new SmartyException('block tag \'addJsDefL\' not callable or registered');
}
$_smarty_tpl->smarty->_cache['_tag_stack'][] = array('addJsDefL', array('name'=>'doesntExist'));
$_block_repeat=true;
echo $_block_plugin4->addJsDefL(array('name'=>'doesntExist'), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'This combination does not exist for this product. Please select another combination.','js'=>1),$_smarty_tpl ) );
$_block_repeat=false;
echo $_block_plugin4->addJsDefL(array('name'=>'doesntExist'), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);
$_block_plugin5 = isset($_smarty_tpl->smarty->registered_plugins['block']['addJsDefL'][0][0]) ? $_smarty_tpl->smarty->registered_plugins['block']['addJsDefL'][0][0] : null;
if (!is_callable(array($_block_plugin5, 'addJsDefL'))) {
throw new SmartyException('block tag \'addJsDefL\' not callable or registered');
}
$_smarty_tpl->smarty->_cache['_tag_stack'][] = array('addJsDefL', array('name'=>'doesntExistNoMore'));
$_block_repeat=true;
echo $_block_plugin5->addJsDefL(array('name'=>'doesntExistNoMore'), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'This product is no longer in stock','js'=>1),$_smarty_tpl ) );
$_block_repeat=false;
echo $_block_plugin5->addJsDefL(array('name'=>'doesntExistNoMore'), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);
$_block_plugin6 = isset($_smarty_tpl->smarty->registered_plugins['block']['addJsDefL'][0][0]) ? $_smarty_tpl->smarty->registered_plugins['block']['addJsDefL'][0][0] : null;
if (!is_callable(array($_block_plugin6, 'addJsDefL'))) {
throw new SmartyException('block tag \'addJsDefL\' not callable or registered');
}
$_smarty_tpl->smarty->_cache['_tag_stack'][] = array('addJsDefL', array('name'=>'doesntExistNoMoreBut'));
$_block_repeat=true;
echo $_block_plugin6->addJsDefL(array('name'=>'doesntExistNoMoreBut'), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'with those attributes but is available with others.','js'=>1),$_smarty_tpl ) );
$_block_repeat=false;
echo $_block_plugin6->addJsDefL(array('name'=>'doesntExistNoMoreBut'), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);
$_block_plugin7 = isset($_smarty_tpl->smarty->registered_plugins['block']['addJsDefL'][0][0]) ? $_smarty_tpl->smarty->registered_plugins['block']['addJsDefL'][0][0] : null;
if (!is_callable(array($_block_plugin7, 'addJsDefL'))) {
throw new SmartyException('block tag \'addJsDefL\' not callable or registered');
}
$_smarty_tpl->smarty->_cache['_tag_stack'][] = array('addJsDefL', array('name'=>'fieldRequired'));
$_block_repeat=true;
echo $_block_plugin7->addJsDefL(array('name'=>'fieldRequired'), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Please fill in all the required fields before saving your customization.','js'=>1),$_smarty_tpl ) );
$_block_repeat=false;
echo $_block_plugin7->addJsDefL(array('name'=>'fieldRequired'), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);
$_block_plugin8 = isset($_smarty_tpl->smarty->registered_plugins['block']['addJsDefL'][0][0]) ? $_smarty_tpl->smarty->registered_plugins['block']['addJsDefL'][0][0] : null;
if (!is_callable(array($_block_plugin8, 'addJsDefL'))) {
throw new SmartyException('block tag \'addJsDefL\' not callable or registered');
}
$_smarty_tpl->smarty->_cache['_tag_stack'][] = array('addJsDefL', array('name'=>'uploading_in_progress'));
$_block_repeat=true;
echo $_block_plugin8->addJsDefL(array('name'=>'uploading_in_progress'), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Uploading in progress, please be patient.','js'=>1),$_smarty_tpl ) );
$_block_repeat=false;
echo $_block_plugin8->addJsDefL(array('name'=>'uploading_in_progress'), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);
$_block_plugin9 = isset($_smarty_tpl->smarty->registered_plugins['block']['addJsDefL'][0][0]) ? $_smarty_tpl->smarty->registered_plugins['block']['addJsDefL'][0][0] : null;
if (!is_callable(array($_block_plugin9, 'addJsDefL'))) {
throw new SmartyException('block tag \'addJsDefL\' not callable or registered');
}
$_smarty_tpl->smarty->_cache['_tag_stack'][] = array('addJsDefL', array('name'=>'product_fileDefaultHtml'));
$_block_repeat=true;
echo $_block_plugin9->addJsDefL(array('name'=>'product_fileDefaultHtml'), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'No file selected','js'=>1),$_smarty_tpl ) );
$_block_repeat=false;
echo $_block_plugin9->addJsDefL(array('name'=>'product_fileDefaultHtml'), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);
$_block_plugin10 = isset($_smarty_tpl->smarty->registered_plugins['block']['addJsDefL'][0][0]) ? $_smarty_tpl->smarty->registered_plugins['block']['addJsDefL'][0][0] : null;
if (!is_callable(array($_block_plugin10, 'addJsDefL'))) {
throw new SmartyException('block tag \'addJsDefL\' not callable or registered');
}
$_smarty_tpl->smarty->_cache['_tag_stack'][] = array('addJsDefL', array('name'=>'product_fileButtonHtml'));
$_block_repeat=true;
echo $_block_plugin10->addJsDefL(array('name'=>'product_fileButtonHtml'), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Choose File','js'=>1),$_smarty_tpl ) );
$_block_repeat=false;
echo $_block_plugin10->addJsDefL(array('name'=>'product_fileButtonHtml'), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);
}
}
}
