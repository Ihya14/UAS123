<?php
/* Smarty version 4.2.1, created on 2023-01-12 14:28:43
  from 'D:\xampp\htdocs\shopw\themes\niara\shopping-cart-product-line.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.2.1',
  'unifunc' => 'content_63bfa89be7fe84_45366298',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'd9da10bb3473376150610071ef0b285235086747' => 
    array (
      0 => 'D:\\xampp\\htdocs\\shopw\\themes\\niara\\shopping-cart-product-line.tpl',
      1 => 1664191549,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_63bfa89be7fe84_45366298 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'D:\\xampp\\htdocs\\shopw\\vendor\\smarty\\smarty\\libs\\plugins\\modifier.replace.php','function'=>'smarty_modifier_replace',),1=>array('file'=>'D:\\xampp\\htdocs\\shopw\\vendor\\smarty\\smarty\\libs\\plugins\\modifier.regex_replace.php','function'=>'smarty_modifier_regex_replace',),));
?>
<tr id="product_<?php echo $_smarty_tpl->tpl_vars['product']->value['id_product'];?>
_<?php echo $_smarty_tpl->tpl_vars['product']->value['id_product_attribute'];?>
_<?php if ($_smarty_tpl->tpl_vars['quantityDisplayed']->value > 0) {?>nocustom<?php } else { ?>0<?php }?>_<?php echo intval($_smarty_tpl->tpl_vars['product']->value['id_address_delivery']);
if (!empty($_smarty_tpl->tpl_vars['product']->value['gift'])) {?>_gift<?php }?>" class="cart_item address_<?php echo intval($_smarty_tpl->tpl_vars['product']->value['id_address_delivery']);?>
 <?php if ($_smarty_tpl->tpl_vars['odd']->value) {?>odd<?php } else { ?>even<?php }?>">
  <td class="cart_product">
    <a href="<?php echo htmlspecialchars((string)$_smarty_tpl->tpl_vars['link']->value->getProductLink($_smarty_tpl->tpl_vars['product']->value['id_product'],$_smarty_tpl->tpl_vars['product']->value['link_rewrite'],$_smarty_tpl->tpl_vars['product']->value['category'],null,null,$_smarty_tpl->tpl_vars['product']->value['id_shop'],$_smarty_tpl->tpl_vars['product']->value['id_product_attribute'],false,false,true), ENT_QUOTES, 'UTF-8', true);?>
">
      <?php if (!empty($_smarty_tpl->tpl_vars['lazy_load']->value)) {?>
        <noscript>
          <img src="<?php echo htmlspecialchars((string)$_smarty_tpl->tpl_vars['link']->value->getImageLink($_smarty_tpl->tpl_vars['product']->value['link_rewrite'],$_smarty_tpl->tpl_vars['product']->value['id_image'],'small',null,ImageManager::retinaSupport()), ENT_QUOTES, 'UTF-8', true);?>
"
               alt="<?php echo htmlspecialchars((string)$_smarty_tpl->tpl_vars['product']->value['name'], ENT_QUOTES, 'UTF-8', true);?>
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
          <source <?php if (!empty($_smarty_tpl->tpl_vars['lazy_load']->value)) {?>srcset="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAQAAAC1HAwCAAAAC0lEQVR42mNkYAAAAAYAAjCB0C8AAAAASUVORK5CYII= 1w" data-<?php }?>srcset="<?php echo htmlspecialchars((string)$_smarty_tpl->tpl_vars['link']->value->getImageLink($_smarty_tpl->tpl_vars['product']->value['link_rewrite'],$_smarty_tpl->tpl_vars['product']->value['id_image'],'small','webp',ImageManager::retinaSupport()), ENT_QUOTES, 'UTF-8', true);?>
"
                  alt="<?php echo htmlspecialchars((string)$_smarty_tpl->tpl_vars['product']->value['name'], ENT_QUOTES, 'UTF-8', true);?>
"
                  type="image/webp"
          >
        <?php }?>
        <!--[if IE 9]></video><![endif]-->
        <img <?php if (!empty($_smarty_tpl->tpl_vars['lazy_load']->value)) {?>srcset="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAQAAAC1HAwCAAAAC0lEQVR42mNkYAAAAAYAAjCB0C8AAAAASUVORK5CYII= 1w" data-<?php }?>srcset="<?php echo htmlspecialchars((string)$_smarty_tpl->tpl_vars['link']->value->getImageLink($_smarty_tpl->tpl_vars['product']->value['link_rewrite'],$_smarty_tpl->tpl_vars['product']->value['id_image'],'small',null,ImageManager::retinaSupport()), ENT_QUOTES, 'UTF-8', true);?>
"
             <?php if (!empty($_smarty_tpl->tpl_vars['lazy_load']->value)) {?>src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAQAAAC1HAwCAAAAC0lEQVR42mNkYAAAAAYAAjCB0C8AAAAASUVORK5CYII="<?php }?>
             alt="<?php echo htmlspecialchars((string)$_smarty_tpl->tpl_vars['product']->value['name'], ENT_QUOTES, 'UTF-8', true);?>
"
             width="<?php echo intval(call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['getWidthSize'][0], array( array('type'=>'small'),$_smarty_tpl ) ));?>
"
             height="<?php echo intval(call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['getHeightSize'][0], array( array('type'=>'small'),$_smarty_tpl ) ));?>
"
        >
      </picture>
    </a>
  </td>
  <td class="cart_description">
    <?php $_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, 'sep', null, null);?> : <?php $_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);?>
    <?php $_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, 'default', null, null);
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>' : '),$_smarty_tpl ) );
$_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);?>
    <p class="product-name"><a href="<?php echo htmlspecialchars((string)$_smarty_tpl->tpl_vars['link']->value->getProductLink($_smarty_tpl->tpl_vars['product']->value['id_product'],$_smarty_tpl->tpl_vars['product']->value['link_rewrite'],$_smarty_tpl->tpl_vars['product']->value['category'],null,null,$_smarty_tpl->tpl_vars['product']->value['id_shop'],$_smarty_tpl->tpl_vars['product']->value['id_product_attribute'],false,false,true), ENT_QUOTES, 'UTF-8', true);?>
"><?php echo htmlspecialchars((string)$_smarty_tpl->tpl_vars['product']->value['name'], ENT_QUOTES, 'UTF-8', true);?>
</a></p>
    <?php if ($_smarty_tpl->tpl_vars['product']->value['reference']) {?><small class="cart_ref"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'SKU'),$_smarty_tpl ) );
echo $_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'default');
echo htmlspecialchars((string)$_smarty_tpl->tpl_vars['product']->value['reference'], ENT_QUOTES, 'UTF-8', true);?>
</small><?php }?>
    <?php if ((isset($_smarty_tpl->tpl_vars['product']->value['attributes'])) && $_smarty_tpl->tpl_vars['product']->value['attributes']) {?><small><a href="<?php echo htmlspecialchars((string)$_smarty_tpl->tpl_vars['link']->value->getProductLink($_smarty_tpl->tpl_vars['product']->value['id_product'],$_smarty_tpl->tpl_vars['product']->value['link_rewrite'],$_smarty_tpl->tpl_vars['product']->value['category'],null,null,$_smarty_tpl->tpl_vars['product']->value['id_shop'],$_smarty_tpl->tpl_vars['product']->value['id_product_attribute'],false,false,true), ENT_QUOTES, 'UTF-8', true);?>
"><?php echo htmlspecialchars((string)smarty_modifier_replace($_smarty_tpl->tpl_vars['product']->value['attributes'],$_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'sep'),$_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'default')), ENT_QUOTES, 'UTF-8', true);?>
</a></small><?php }?>
  </td>
  <?php if ($_smarty_tpl->tpl_vars['PS_STOCK_MANAGEMENT']->value) {?>
    <td class="cart_avail"><span class="label<?php if ($_smarty_tpl->tpl_vars['product']->value['quantity_available'] <= 0 && (isset($_smarty_tpl->tpl_vars['product']->value['allow_oosp'])) && !$_smarty_tpl->tpl_vars['product']->value['allow_oosp']) {?> label-danger<?php } elseif ($_smarty_tpl->tpl_vars['product']->value['quantity_available'] <= 0) {?> label-warning<?php } else { ?> label-success<?php }?>"><?php if ($_smarty_tpl->tpl_vars['product']->value['quantity_available'] <= 0) {
if ((isset($_smarty_tpl->tpl_vars['product']->value['allow_oosp'])) && $_smarty_tpl->tpl_vars['product']->value['allow_oosp']) {
if ((isset($_smarty_tpl->tpl_vars['product']->value['available_later'])) && $_smarty_tpl->tpl_vars['product']->value['available_later']) {
echo $_smarty_tpl->tpl_vars['product']->value['available_later'];
} else {
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'In Stock'),$_smarty_tpl ) );
}
} else {
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Out of stock'),$_smarty_tpl ) );
}
} else {
if ((isset($_smarty_tpl->tpl_vars['product']->value['available_now'])) && $_smarty_tpl->tpl_vars['product']->value['available_now']) {
echo $_smarty_tpl->tpl_vars['product']->value['available_now'];
} else {
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'In Stock'),$_smarty_tpl ) );
}
}?></span><?php if (!$_smarty_tpl->tpl_vars['product']->value['is_virtual']) {
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>"displayProductDeliveryTime",'product'=>$_smarty_tpl->tpl_vars['product']->value),$_smarty_tpl ) );
}?></td>
  <?php }?>
  <td class="cart_unit" data-title="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Unit price'),$_smarty_tpl ) );?>
">
    <ul class="price text-<?php if ($_smarty_tpl->tpl_vars['isRtl']->value) {?>left<?php } else { ?>right<?php }?>" id="product_price_<?php echo $_smarty_tpl->tpl_vars['product']->value['id_product'];?>
_<?php echo $_smarty_tpl->tpl_vars['product']->value['id_product_attribute'];
if ($_smarty_tpl->tpl_vars['quantityDisplayed']->value > 0) {?>_nocustom<?php }?>_<?php echo intval($_smarty_tpl->tpl_vars['product']->value['id_address_delivery']);
if (!empty($_smarty_tpl->tpl_vars['product']->value['gift'])) {?>_gift<?php }?>">
      <?php if (!empty($_smarty_tpl->tpl_vars['product']->value['gift'])) {?>
        <li class="gift-icon"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Gift!'),$_smarty_tpl ) );?>
</li>
      <?php } else { ?>
        <?php if (!$_smarty_tpl->tpl_vars['priceDisplay']->value) {?>
          <li class="price<?php if ((isset($_smarty_tpl->tpl_vars['product']->value['is_discounted'])) && $_smarty_tpl->tpl_vars['product']->value['is_discounted'] && (isset($_smarty_tpl->tpl_vars['product']->value['reduction_applies'])) && $_smarty_tpl->tpl_vars['product']->value['reduction_applies']) {?> special-price<?php }?>"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['convertPrice'][0], array( array('price'=>$_smarty_tpl->tpl_vars['product']->value['price_wt']),$_smarty_tpl ) );?>
</li>
        <?php } else { ?>
          <li class="price<?php if ((isset($_smarty_tpl->tpl_vars['product']->value['is_discounted'])) && $_smarty_tpl->tpl_vars['product']->value['is_discounted'] && (isset($_smarty_tpl->tpl_vars['product']->value['reduction_applies'])) && $_smarty_tpl->tpl_vars['product']->value['reduction_applies']) {?> special-price<?php }?>"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['convertPrice'][0], array( array('price'=>$_smarty_tpl->tpl_vars['product']->value['price']),$_smarty_tpl ) );?>
</li>
        <?php }?>
        <?php if ((isset($_smarty_tpl->tpl_vars['product']->value['is_discounted'])) && $_smarty_tpl->tpl_vars['product']->value['is_discounted'] && (isset($_smarty_tpl->tpl_vars['product']->value['reduction_applies'])) && $_smarty_tpl->tpl_vars['product']->value['reduction_applies']) {?>
          <li class="price-percent-reduction small">
            <?php if (!$_smarty_tpl->tpl_vars['priceDisplay']->value) {?>
              <?php if ((isset($_smarty_tpl->tpl_vars['product']->value['reduction_type'])) && $_smarty_tpl->tpl_vars['product']->value['reduction_type'] == 'amount') {?>
                <?php $_smarty_tpl->_assignInScope('priceReduction', ($_smarty_tpl->tpl_vars['product']->value['price_wt']-$_smarty_tpl->tpl_vars['product']->value['price_without_specific_price']));?>
                <?php $_smarty_tpl->_assignInScope('symbol', $_smarty_tpl->tpl_vars['currency']->value->sign);?>
              <?php } else { ?>
                <?php $_smarty_tpl->_assignInScope('priceReduction', (($_smarty_tpl->tpl_vars['product']->value['price_without_specific_price']-$_smarty_tpl->tpl_vars['product']->value['price_wt'])/$_smarty_tpl->tpl_vars['product']->value['price_without_specific_price'])*100*-1);?>
                <?php $_smarty_tpl->_assignInScope('symbol', '%');?>
              <?php }?>
            <?php } else { ?>
              <?php if ((isset($_smarty_tpl->tpl_vars['product']->value['reduction_type'])) && $_smarty_tpl->tpl_vars['product']->value['reduction_type'] == 'amount') {?>
                <?php $_smarty_tpl->_assignInScope('priceReduction', ($_smarty_tpl->tpl_vars['product']->value['price']-$_smarty_tpl->tpl_vars['product']->value['price_without_specific_price']));?>
                <?php $_smarty_tpl->_assignInScope('symbol', $_smarty_tpl->tpl_vars['currency']->value->sign);?>
              <?php } else { ?>
                <?php $_smarty_tpl->_assignInScope('priceReduction', (($_smarty_tpl->tpl_vars['product']->value['price_without_specific_price']-$_smarty_tpl->tpl_vars['product']->value['price'])/$_smarty_tpl->tpl_vars['product']->value['price_without_specific_price'])*-100);?>
                <?php $_smarty_tpl->_assignInScope('symbol', '%');?>
              <?php }?>
            <?php }?>
            <?php if ($_smarty_tpl->tpl_vars['symbol']->value == '%') {?>
              &nbsp;<?php echo smarty_modifier_regex_replace(sprintf("%.2f",$_smarty_tpl->tpl_vars['priceReduction']->value),"/[^\d]0+"."$"."/",'');
echo $_smarty_tpl->tpl_vars['symbol']->value;?>
&nbsp;
            <?php } else { ?>
              &nbsp;<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['convertPrice'][0], array( array('price'=>$_smarty_tpl->tpl_vars['priceReduction']->value),$_smarty_tpl ) );?>
&nbsp;
            <?php }?>
          </li>
          <li class="old-price"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['convertPrice'][0], array( array('price'=>$_smarty_tpl->tpl_vars['product']->value['price_without_specific_price']),$_smarty_tpl ) );?>
</li>
        <?php }?>
      <?php }?>
    </ul>
  </td>

  <td class="cart_quantity text-center" data-title="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Quantity'),$_smarty_tpl ) );?>
">
    <?php if (((isset($_smarty_tpl->tpl_vars['cannotModify']->value)) && $_smarty_tpl->tpl_vars['cannotModify']->value == 1)) {?>
      <span>
        <?php if ($_smarty_tpl->tpl_vars['quantityDisplayed']->value == 0 && (isset($_smarty_tpl->tpl_vars['customizedDatas']->value[$_smarty_tpl->tpl_vars['productId']->value][$_smarty_tpl->tpl_vars['productAttributeId']->value]))) {?>
          <?php echo $_smarty_tpl->tpl_vars['product']->value['customizationQuantityTotal'];?>

        <?php } else { ?>
          <?php echo $_smarty_tpl->tpl_vars['product']->value['cart_quantity']-$_smarty_tpl->tpl_vars['quantityDisplayed']->value;?>

        <?php }?>
      </span>
    <?php } else { ?>
      <?php if ((isset($_smarty_tpl->tpl_vars['customizedDatas']->value[$_smarty_tpl->tpl_vars['productId']->value][$_smarty_tpl->tpl_vars['productAttributeId']->value])) && $_smarty_tpl->tpl_vars['quantityDisplayed']->value == 0) {?>
        <span id="cart_quantity_custom_<?php echo $_smarty_tpl->tpl_vars['product']->value['id_product'];?>
_<?php echo $_smarty_tpl->tpl_vars['product']->value['id_product_attribute'];?>
_<?php echo intval($_smarty_tpl->tpl_vars['product']->value['id_address_delivery']);?>
" ><?php echo $_smarty_tpl->tpl_vars['product']->value['customizationQuantityTotal'];?>
</span>
      <?php }?>
      <?php if (!(isset($_smarty_tpl->tpl_vars['customizedDatas']->value[$_smarty_tpl->tpl_vars['productId']->value][$_smarty_tpl->tpl_vars['productAttributeId']->value])) || $_smarty_tpl->tpl_vars['quantityDisplayed']->value > 0) {?>

        <input type="hidden" value="<?php if ($_smarty_tpl->tpl_vars['quantityDisplayed']->value == 0 && (isset($_smarty_tpl->tpl_vars['customizedDatas']->value[$_smarty_tpl->tpl_vars['productId']->value][$_smarty_tpl->tpl_vars['productAttributeId']->value]))) {
echo count($_smarty_tpl->tpl_vars['customizedDatas']->value[$_smarty_tpl->tpl_vars['productId']->value][$_smarty_tpl->tpl_vars['productAttributeId']->value]);
} else {
echo $_smarty_tpl->tpl_vars['product']->value['cart_quantity']-$_smarty_tpl->tpl_vars['quantityDisplayed']->value;
}?>" name="quantity_<?php echo $_smarty_tpl->tpl_vars['product']->value['id_product'];?>
_<?php echo $_smarty_tpl->tpl_vars['product']->value['id_product_attribute'];?>
_<?php if ($_smarty_tpl->tpl_vars['quantityDisplayed']->value > 0) {?>nocustom<?php } else { ?>0<?php }?>_<?php echo intval($_smarty_tpl->tpl_vars['product']->value['id_address_delivery']);?>
_hidden">
        <input size="2" type="text" autocomplete="off" class="cart_quantity_input form-control text-center" value="<?php if ($_smarty_tpl->tpl_vars['quantityDisplayed']->value == 0 && (isset($_smarty_tpl->tpl_vars['customizedDatas']->value[$_smarty_tpl->tpl_vars['productId']->value][$_smarty_tpl->tpl_vars['productAttributeId']->value]))) {
echo count($_smarty_tpl->tpl_vars['customizedDatas']->value[$_smarty_tpl->tpl_vars['productId']->value][$_smarty_tpl->tpl_vars['productAttributeId']->value]);
} else {
echo $_smarty_tpl->tpl_vars['product']->value['cart_quantity']-$_smarty_tpl->tpl_vars['quantityDisplayed']->value;
}?>"  name="quantity_<?php echo $_smarty_tpl->tpl_vars['product']->value['id_product'];?>
_<?php echo $_smarty_tpl->tpl_vars['product']->value['id_product_attribute'];?>
_<?php if ($_smarty_tpl->tpl_vars['quantityDisplayed']->value > 0) {?>nocustom<?php } else { ?>0<?php }?>_<?php echo intval($_smarty_tpl->tpl_vars['product']->value['id_address_delivery']);?>
">
        <div class="cart_quantity_button clearfix">
          <?php if ($_smarty_tpl->tpl_vars['product']->value['minimal_quantity'] < ($_smarty_tpl->tpl_vars['product']->value['cart_quantity']-$_smarty_tpl->tpl_vars['quantityDisplayed']->value) || $_smarty_tpl->tpl_vars['product']->value['minimal_quantity'] <= 1) {?>
            <a rel="nofollow" class="cart_quantity_down btn btn-default button-minus" id="cart_quantity_down_<?php echo $_smarty_tpl->tpl_vars['product']->value['id_product'];?>
_<?php echo $_smarty_tpl->tpl_vars['product']->value['id_product_attribute'];?>
_<?php if ($_smarty_tpl->tpl_vars['quantityDisplayed']->value > 0) {?>nocustom<?php } else { ?>0<?php }?>_<?php echo intval($_smarty_tpl->tpl_vars['product']->value['id_address_delivery']);?>
" href="<?php ob_start();
echo intval($_smarty_tpl->tpl_vars['product']->value['id_product']);
$_prefixVariable13=ob_get_clean();
ob_start();
echo intval($_smarty_tpl->tpl_vars['product']->value['id_product_attribute']);
$_prefixVariable14=ob_get_clean();
ob_start();
echo intval($_smarty_tpl->tpl_vars['product']->value['id_address_delivery']);
$_prefixVariable15=ob_get_clean();
echo htmlspecialchars((string)$_smarty_tpl->tpl_vars['link']->value->getPageLink('cart',true,NULL,"add=1&amp;id_product=".$_prefixVariable13."&amp;ipa=".$_prefixVariable14."&amp;id_address_delivery=".$_prefixVariable15."&amp;op=down&amp;token=".((string)$_smarty_tpl->tpl_vars['token_cart']->value)), ENT_QUOTES, 'UTF-8', true);?>
" title="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Subtract'),$_smarty_tpl ) );?>
">
              <i class="icon icon-fw icon-minus"></i>
            </a>
          <?php } else { ?>
            <a class="cart_quantity_down btn btn-default button-minus disabled" href="#" id="cart_quantity_down_<?php echo $_smarty_tpl->tpl_vars['product']->value['id_product'];?>
_<?php echo $_smarty_tpl->tpl_vars['product']->value['id_product_attribute'];?>
_<?php if ($_smarty_tpl->tpl_vars['quantityDisplayed']->value > 0) {?>nocustom<?php } else { ?>0<?php }?>_<?php echo intval($_smarty_tpl->tpl_vars['product']->value['id_address_delivery']);?>
" title="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'You must purchase a minimum of %d of this product.','sprintf'=>$_smarty_tpl->tpl_vars['product']->value['minimal_quantity']),$_smarty_tpl ) );?>
">
              <i class="icon icon-fw icon-minus"></i>
            </a>
          <?php }?>
          <a rel="nofollow" class="cart_quantity_up btn btn-default button-plus" id="cart_quantity_up_<?php echo $_smarty_tpl->tpl_vars['product']->value['id_product'];?>
_<?php echo $_smarty_tpl->tpl_vars['product']->value['id_product_attribute'];?>
_<?php if ($_smarty_tpl->tpl_vars['quantityDisplayed']->value > 0) {?>nocustom<?php } else { ?>0<?php }?>_<?php echo intval($_smarty_tpl->tpl_vars['product']->value['id_address_delivery']);?>
" href="<?php ob_start();
echo intval($_smarty_tpl->tpl_vars['product']->value['id_product']);
$_prefixVariable16=ob_get_clean();
ob_start();
echo intval($_smarty_tpl->tpl_vars['product']->value['id_product_attribute']);
$_prefixVariable17=ob_get_clean();
ob_start();
echo intval($_smarty_tpl->tpl_vars['product']->value['id_address_delivery']);
$_prefixVariable18=ob_get_clean();
echo htmlspecialchars((string)$_smarty_tpl->tpl_vars['link']->value->getPageLink('cart',true,NULL,"add=1&amp;id_product=".$_prefixVariable16."&amp;ipa=".$_prefixVariable17."&amp;id_address_delivery=".$_prefixVariable18."&amp;token=".((string)$_smarty_tpl->tpl_vars['token_cart']->value)), ENT_QUOTES, 'UTF-8', true);?>
" title="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Add'),$_smarty_tpl ) );?>
"><i class="icon icon-fw icon-plus"></i></a>
        </div>
      <?php }?>
    <?php }?>
  </td>

  <?php if (!(isset($_smarty_tpl->tpl_vars['noDeleteButton']->value)) || !$_smarty_tpl->tpl_vars['noDeleteButton']->value) {?>
    <td class="cart_delete text-center" data-title="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Delete'),$_smarty_tpl ) );?>
">
      <?php if ((!(isset($_smarty_tpl->tpl_vars['customizedDatas']->value[$_smarty_tpl->tpl_vars['productId']->value][$_smarty_tpl->tpl_vars['productAttributeId']->value])) || $_smarty_tpl->tpl_vars['quantityDisplayed']->value > 0) && empty($_smarty_tpl->tpl_vars['product']->value['gift'])) {?>
        <div>
          <a rel="nofollow" title="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Delete'),$_smarty_tpl ) );?>
" class="cart_quantity_delete" id="<?php echo $_smarty_tpl->tpl_vars['product']->value['id_product'];?>
_<?php echo $_smarty_tpl->tpl_vars['product']->value['id_product_attribute'];?>
_<?php if ($_smarty_tpl->tpl_vars['quantityDisplayed']->value > 0) {?>nocustom<?php } else { ?>0<?php }?>_<?php echo intval($_smarty_tpl->tpl_vars['product']->value['id_address_delivery']);?>
" href="<?php ob_start();
echo intval($_smarty_tpl->tpl_vars['product']->value['id_product']);
$_prefixVariable19=ob_get_clean();
ob_start();
echo intval($_smarty_tpl->tpl_vars['product']->value['id_product_attribute']);
$_prefixVariable20=ob_get_clean();
ob_start();
echo intval($_smarty_tpl->tpl_vars['product']->value['id_address_delivery']);
$_prefixVariable21=ob_get_clean();
echo htmlspecialchars((string)$_smarty_tpl->tpl_vars['link']->value->getPageLink('cart',true,NULL,"delete=1&amp;id_product=".$_prefixVariable19."&amp;ipa=".$_prefixVariable20."&amp;id_address_delivery=".$_prefixVariable21."&amp;token=".((string)$_smarty_tpl->tpl_vars['token_cart']->value)), ENT_QUOTES, 'UTF-8', true);?>
"><i class="icon icon-trash"></i></a>
        </div>
      <?php } else { ?>

      <?php }?>
    </td>
  <?php }?>
  <td class="cart_total" data-title="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Total'),$_smarty_tpl ) );?>
">
    <span class="price" id="total_product_price_<?php echo $_smarty_tpl->tpl_vars['product']->value['id_product'];?>
_<?php echo $_smarty_tpl->tpl_vars['product']->value['id_product_attribute'];
if ($_smarty_tpl->tpl_vars['quantityDisplayed']->value > 0) {?>_nocustom<?php }?>_<?php echo intval($_smarty_tpl->tpl_vars['product']->value['id_address_delivery']);
if (!empty($_smarty_tpl->tpl_vars['product']->value['gift'])) {?>_gift<?php }?>">
      <?php if (!empty($_smarty_tpl->tpl_vars['product']->value['gift'])) {?>
        <span class="gift-icon"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Gift!'),$_smarty_tpl ) );?>
</span>
      <?php } else { ?>
        <?php if ($_smarty_tpl->tpl_vars['quantityDisplayed']->value == 0 && (isset($_smarty_tpl->tpl_vars['customizedDatas']->value[$_smarty_tpl->tpl_vars['productId']->value][$_smarty_tpl->tpl_vars['productAttributeId']->value]))) {?>
          <?php if (!$_smarty_tpl->tpl_vars['priceDisplay']->value) {
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['displayPrice'][0], array( array('price'=>$_smarty_tpl->tpl_vars['product']->value['total_customization_wt']),$_smarty_tpl ) );
} else {
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['displayPrice'][0], array( array('price'=>$_smarty_tpl->tpl_vars['product']->value['total_customization']),$_smarty_tpl ) );
}?>
        <?php } else { ?>
          <?php if (!$_smarty_tpl->tpl_vars['priceDisplay']->value) {
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['displayPrice'][0], array( array('price'=>$_smarty_tpl->tpl_vars['product']->value['total_wt']),$_smarty_tpl ) );
} else {
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['displayPrice'][0], array( array('price'=>$_smarty_tpl->tpl_vars['product']->value['total']),$_smarty_tpl ) );
}?>
        <?php }?>
      <?php }?>
    </span>
  </td>

</tr>
<?php }
}
