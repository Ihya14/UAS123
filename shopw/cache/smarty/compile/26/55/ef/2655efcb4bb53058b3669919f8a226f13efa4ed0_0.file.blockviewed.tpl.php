<?php
/* Smarty version 4.2.1, created on 2023-01-12 14:15:07
  from 'D:\xampp\htdocs\shopw\themes\niara\modules\blockviewed\blockviewed.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.2.1',
  'unifunc' => 'content_63bfa56bb737b8_67855462',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '2655efcb4bb53058b3669919f8a226f13efa4ed0' => 
    array (
      0 => 'D:\\xampp\\htdocs\\shopw\\themes\\niara\\modules\\blockviewed\\blockviewed.tpl',
      1 => 1664191549,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_63bfa56bb737b8_67855462 (Smarty_Internal_Template $_smarty_tpl) {
?><section>
    <div id="viewed-products_block_left" class="block">
        <h2 class="title_block section-title-column"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Viewed products','mod'=>'blockviewed'),$_smarty_tpl ) );?>
</h2>
        <div class="block_content products-block">
            <ul>
                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['productsViewedObj']->value, 'viewedProduct', false, NULL, 'myLoop', array (
));
$_smarty_tpl->tpl_vars['viewedProduct']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['viewedProduct']->value) {
$_smarty_tpl->tpl_vars['viewedProduct']->do_else = false;
?>
                    <li class="clearfix">
                        <article>
                            <a class="products-block-image"
                               href="<?php echo htmlspecialchars((string)$_smarty_tpl->tpl_vars['viewedProduct']->value->product_link, ENT_QUOTES, 'UTF-8', true);?>
"
                               title="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'More about %s','mod'=>'blockviewed','sprintf'=>array(htmlspecialchars((string)$_smarty_tpl->tpl_vars['viewedProduct']->value->name, ENT_QUOTES, 'UTF-8', true))),$_smarty_tpl ) );?>
"
                            >
                              <?php if (!empty($_smarty_tpl->tpl_vars['lazy_load']->value)) {?>
                                <noscript>
                                  <img src="<?php if ((isset($_smarty_tpl->tpl_vars['viewedProduct']->value->id_image)) && $_smarty_tpl->tpl_vars['viewedProduct']->value->id_image) {
echo $_smarty_tpl->tpl_vars['link']->value->getImageLink($_smarty_tpl->tpl_vars['viewedProduct']->value->link_rewrite,$_smarty_tpl->tpl_vars['viewedProduct']->value->cover,'small',null,ImageManager::retinaSupport());
} else {
echo $_smarty_tpl->tpl_vars['img_prod_dir']->value;
echo $_smarty_tpl->tpl_vars['lang_iso']->value;?>
-default-medium.jpg<?php }?>"
                                       alt="<?php echo htmlspecialchars((string)$_smarty_tpl->tpl_vars['viewedProduct']->value->legend, ENT_QUOTES, 'UTF-8', true);?>
"
                                       width="<?php echo intval(call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['getWidthSize'][0], array( array('type'=>'small'),$_smarty_tpl ) ));?>
"
                                       height="<?php echo intval(call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['getHeightSize'][0], array( array('type'=>'small'),$_smarty_tpl ) ));?>
"
                                  >
                                </noscript>
                              <?php }?>
                              <picture <?php if (!empty($_smarty_tpl->tpl_vars['lazy_load']->value)) {?>class="tb-lazy-image"<?php }?>>
                                <!--[if IE 9]><video style="display: none;"><![endif]-->
                                <?php if (!empty($_smarty_tpl->tpl_vars['webp']->value)) {?>
                                  <source <?php if (!empty($_smarty_tpl->tpl_vars['lazy_load']->value)) {?>srcset="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAQAAAC1HAwCAAAAC0lEQVR42mNkYAAAAAYAAjCB0C8AAAAASUVORK5CYII= 1w" data-<?php }?>srcset="<?php if ((isset($_smarty_tpl->tpl_vars['viewedProduct']->value->id_image)) && $_smarty_tpl->tpl_vars['viewedProduct']->value->id_image) {
echo $_smarty_tpl->tpl_vars['link']->value->getImageLink($_smarty_tpl->tpl_vars['viewedProduct']->value->link_rewrite,$_smarty_tpl->tpl_vars['viewedProduct']->value->cover,'small','webp',ImageManager::retinaSupport());
} else {
echo $_smarty_tpl->tpl_vars['img_prod_dir']->value;
echo $_smarty_tpl->tpl_vars['lang_iso']->value;?>
-default-medium.webp<?php }?>"
                                          type="image/webp"
                                  >
                                <?php }?>
                                <!--[if IE 9]></video><![endif]-->
                                <img <?php if (!empty($_smarty_tpl->tpl_vars['lazy_load']->value)) {?>srcset="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAQAAAC1HAwCAAAAC0lEQVR42mNkYAAAAAYAAjCB0C8AAAAASUVORK5CYII= 1w" data-<?php }?>srcset="<?php if ((isset($_smarty_tpl->tpl_vars['viewedProduct']->value->id_image)) && $_smarty_tpl->tpl_vars['viewedProduct']->value->id_image) {
echo $_smarty_tpl->tpl_vars['link']->value->getImageLink($_smarty_tpl->tpl_vars['viewedProduct']->value->link_rewrite,$_smarty_tpl->tpl_vars['viewedProduct']->value->cover,'small',null,ImageManager::retinaSupport());
} else {
echo $_smarty_tpl->tpl_vars['img_prod_dir']->value;
echo $_smarty_tpl->tpl_vars['lang_iso']->value;?>
-default-medium.jpg<?php }?>"
                                     <?php if (!empty($_smarty_tpl->tpl_vars['lazy_load']->value)) {?>src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAQAAAC1HAwCAAAAC0lEQVR42mNkYAAAAAYAAjCB0C8AAAAASUVORK5CYII="<?php }?>
                                     alt="<?php echo htmlspecialchars((string)$_smarty_tpl->tpl_vars['viewedProduct']->value->legend, ENT_QUOTES, 'UTF-8', true);?>
"
                                     width="<?php echo intval(call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['getWidthSize'][0], array( array('type'=>'small'),$_smarty_tpl ) ));?>
"
                                     height="<?php echo intval(call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['getHeightSize'][0], array( array('type'=>'small'),$_smarty_tpl ) ));?>
"
                                >
                              </picture>
                            </a>
                            <div class="product-content">
            <span>
              <a class="product-name"
                 href="<?php echo htmlspecialchars((string)$_smarty_tpl->tpl_vars['viewedProduct']->value->product_link, ENT_QUOTES, 'UTF-8', true);?>
"
                 title="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'More about %s','mod'=>'blockviewed','sprintf'=>array(htmlspecialchars((string)$_smarty_tpl->tpl_vars['viewedProduct']->value->name, ENT_QUOTES, 'UTF-8', true))),$_smarty_tpl ) );?>
">
                <?php echo htmlspecialchars((string)call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'truncate' ][ 0 ], array( $_smarty_tpl->tpl_vars['viewedProduct']->value->name,25,'...' )), ENT_QUOTES, 'UTF-8', true);?>

              </a>
            </span>
                                <p class="product-description"><?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'truncate' ][ 0 ], array( strip_tags($_smarty_tpl->tpl_vars['viewedProduct']->value->description_short),40 ));?>
</p>
                            </div>
                        </article>
                    </li>
                <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
            </ul>
        </div>
    </div>
</section>
<?php }
}
