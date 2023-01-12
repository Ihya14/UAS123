<?php
/* Smarty version 4.2.1, created on 2023-01-12 23:01:52
  from 'D:\xampp\htdocs\shopw\themes\niara\modules\blocknewproducts\blocknewproducts.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.2.1',
  'unifunc' => 'content_63c020e05bf947_48318051',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '737e1bd955f4aa5085bbc6755ac877fa66ff5ec8' => 
    array (
      0 => 'D:\\xampp\\htdocs\\shopw\\themes\\niara\\modules\\blocknewproducts\\blocknewproducts.tpl',
      1 => 1664191549,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_63c020e05bf947_48318051 (Smarty_Internal_Template $_smarty_tpl) {
?><section>
    <div id="new-products_block_right" class="block products_block">
        <h2 class="title_block section-title-column">
            <a href="<?php echo htmlspecialchars((string)$_smarty_tpl->tpl_vars['link']->value->getPageLink('new-products'), ENT_QUOTES, 'UTF-8', true);?>
"
               title="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'New products','mod'=>'blocknewproducts'),$_smarty_tpl ) );?>
"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'New products','mod'=>'blocknewproducts'),$_smarty_tpl ) );?>
</a>
        </h2>
        <div class="block_content products-block">
            <?php if ($_smarty_tpl->tpl_vars['new_products']->value !== false) {?>
                <ul>
                    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['new_products']->value, 'newproduct', false, NULL, 'myLoop', array (
));
$_smarty_tpl->tpl_vars['newproduct']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['newproduct']->value) {
$_smarty_tpl->tpl_vars['newproduct']->do_else = false;
?>
                        <li class="clearfix">
                            <article>
                                <a class="products-block-image" href="<?php echo htmlspecialchars((string)$_smarty_tpl->tpl_vars['newproduct']->value['link'], ENT_QUOTES, 'UTF-8', true);?>
"
                                   title="<?php echo htmlspecialchars((string)$_smarty_tpl->tpl_vars['newproduct']->value['legend'], ENT_QUOTES, 'UTF-8', true);?>
"><img
                                            class="replace-2x img-responsive"
                                            src="<?php echo htmlspecialchars((string)$_smarty_tpl->tpl_vars['link']->value->getImageLink($_smarty_tpl->tpl_vars['newproduct']->value['link_rewrite'],$_smarty_tpl->tpl_vars['newproduct']->value['id_image'],'small'), ENT_QUOTES, 'UTF-8', true);?>
"
                                            alt="<?php echo htmlspecialchars((string)$_smarty_tpl->tpl_vars['newproduct']->value['name'], ENT_QUOTES, 'UTF-8', true);?>
"
                                            title="<?php echo htmlspecialchars((string)$_smarty_tpl->tpl_vars['newproduct']->value['name'], ENT_QUOTES, 'UTF-8', true);?>
"></a>
                                <div class="product-content">
                                    <h3 class="product-title">
                                        <a class="product-name" href="<?php echo htmlspecialchars((string)$_smarty_tpl->tpl_vars['newproduct']->value['link'], ENT_QUOTES, 'UTF-8', true);?>
"
                                           title="<?php echo htmlspecialchars((string)$_smarty_tpl->tpl_vars['newproduct']->value['name'], ENT_QUOTES, 'UTF-8', true);?>
"><?php echo htmlspecialchars((string)preg_replace('!<[^>]*?>!', ' ', $_smarty_tpl->tpl_vars['newproduct']->value['name']), ENT_QUOTES, 'UTF-8', true);?>
</a>
                                    </h3>
                                    <p class="product-description"><?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'truncate' ][ 0 ], array( strip_tags($_smarty_tpl->tpl_vars['newproduct']->value['description_short']),75,'...' ));?>
</p>
                                    <?php if ((!$_smarty_tpl->tpl_vars['PS_CATALOG_MODE']->value && (((isset($_smarty_tpl->tpl_vars['newproduct']->value['show_price'])) && $_smarty_tpl->tpl_vars['newproduct']->value['show_price']) || ((isset($_smarty_tpl->tpl_vars['newproduct']->value['available_for_order'])) && $_smarty_tpl->tpl_vars['newproduct']->value['available_for_order'])))) {?>
                                        <?php if ((isset($_smarty_tpl->tpl_vars['newproduct']->value['show_price'])) && $_smarty_tpl->tpl_vars['newproduct']->value['show_price'] && !(isset($_smarty_tpl->tpl_vars['restricted_country_mode']->value))) {?>
                                            <div class="price-box">
                    <span class="price">
                      <?php if (!$_smarty_tpl->tpl_vars['priceDisplay']->value) {
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['convertPrice'][0], array( array('price'=>$_smarty_tpl->tpl_vars['newproduct']->value['price']),$_smarty_tpl ) );
} else {
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['convertPrice'][0], array( array('price'=>$_smarty_tpl->tpl_vars['newproduct']->value['price_tax_exc']),$_smarty_tpl ) );
}?>
                    </span>
                                                <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>"displayProductPriceBlock",'product'=>$_smarty_tpl->tpl_vars['newproduct']->value,'type'=>"price"),$_smarty_tpl ) );?>

                                            </div>
                                        <?php }?>
                                    <?php }?>
                                </div>
                            </article>
                        </li>
                    <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                </ul>
                <div>
                    <a href="<?php echo htmlspecialchars((string)$_smarty_tpl->tpl_vars['link']->value->getPageLink('new-products'), ENT_QUOTES, 'UTF-8', true);?>
"
                       title="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'All new products','mod'=>'blocknewproducts'),$_smarty_tpl ) );?>
"
                       class="btn btn-primary"><span><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'All new products','mod'=>'blocknewproducts'),$_smarty_tpl ) );?>
 <i
                                    class="icon icon-chevron-right"></i></span></a>
                </div>
            <?php } else { ?>
                <p>&raquo; <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'No new products at this time.','mod'=>'blocknewproducts'),$_smarty_tpl ) );?>
</p>
            <?php }?>
        </div>
    </div>
</section>
<?php }
}
