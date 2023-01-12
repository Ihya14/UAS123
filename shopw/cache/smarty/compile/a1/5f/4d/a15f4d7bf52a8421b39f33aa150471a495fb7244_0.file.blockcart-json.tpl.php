<?php
/* Smarty version 4.2.1, created on 2023-01-12 14:28:37
  from 'D:\xampp\htdocs\shopw\themes\niara\modules\blockcart\blockcart-json.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.2.1',
  'unifunc' => 'content_63bfa895093843_99508996',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'a15f4d7bf52a8421b39f33aa150471a495fb7244' => 
    array (
      0 => 'D:\\xampp\\htdocs\\shopw\\themes\\niara\\modules\\blockcart\\blockcart-json.tpl',
      1 => 1664191549,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_63bfa895093843_99508996 (Smarty_Internal_Template $_smarty_tpl) {
?>{
"products": [
<?php if ($_smarty_tpl->tpl_vars['products']->value) {?>
  <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['products']->value, 'product', false, NULL, 'products', array (
  'last' => true,
  'iteration' => true,
  'total' => true,
));
$_smarty_tpl->tpl_vars['product']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['product']->value) {
$_smarty_tpl->tpl_vars['product']->do_else = false;
$_smarty_tpl->tpl_vars['__smarty_foreach_products']->value['iteration']++;
$_smarty_tpl->tpl_vars['__smarty_foreach_products']->value['last'] = $_smarty_tpl->tpl_vars['__smarty_foreach_products']->value['iteration'] === $_smarty_tpl->tpl_vars['__smarty_foreach_products']->value['total'];
?>
    <?php $_smarty_tpl->_assignInScope('productId', $_smarty_tpl->tpl_vars['product']->value['id_product']);?>
    <?php $_smarty_tpl->_assignInScope('productAttributeId', $_smarty_tpl->tpl_vars['product']->value['id_product_attribute']);?>
    {
    "id": <?php echo intval($_smarty_tpl->tpl_vars['product']->value['id_product']);?>
,
    "link": <?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'json_encode' ][ 0 ], array( $_smarty_tpl->tpl_vars['link']->value->getProductLink($_smarty_tpl->tpl_vars['product']->value['id_product'],$_smarty_tpl->tpl_vars['product']->value['link_rewrite'],$_smarty_tpl->tpl_vars['product']->value['category'],null,null,$_smarty_tpl->tpl_vars['product']->value['id_shop'],$_smarty_tpl->tpl_vars['product']->value['id_product_attribute']) ));?>
,
    "quantity": <?php echo intval($_smarty_tpl->tpl_vars['product']->value['cart_quantity']);?>
,
    "image": <?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'json_encode' ][ 0 ], array( $_smarty_tpl->tpl_vars['link']->value->getImageLink($_smarty_tpl->tpl_vars['product']->value['link_rewrite'],$_smarty_tpl->tpl_vars['product']->value['id_image'],'home',null,ImageManager::retinaSupport()) ));?>
,
    "image_cart": <?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'json_encode' ][ 0 ], array( $_smarty_tpl->tpl_vars['link']->value->getImageLink($_smarty_tpl->tpl_vars['product']->value['link_rewrite'],$_smarty_tpl->tpl_vars['product']->value['id_image'],'cart',null,ImageManager::retinaSupport()) ));?>
,
    "priceByLine": <?php if ($_smarty_tpl->tpl_vars['priceDisplay']->value == (defined('PS_TAX_EXC') ? constant('PS_TAX_EXC') : null)) {
echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'json_encode' ][ 0 ], array( call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['displayWtPrice'][0], array( array('p'=>$_smarty_tpl->tpl_vars['product']->value['total']),$_smarty_tpl ) ) ));
} else {
echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'json_encode' ][ 0 ], array( call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['displayWtPrice'][0], array( array('p'=>$_smarty_tpl->tpl_vars['product']->value['total_wt']),$_smarty_tpl ) ) ));
}?>,
    "name": <?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'json_encode' ][ 0 ], array( html_entity_decode(trim($_smarty_tpl->tpl_vars['product']->value['name']),2,'UTF-8') ));?>
,
    "price": <?php if ($_smarty_tpl->tpl_vars['priceDisplay']->value == (defined('PS_TAX_EXC') ? constant('PS_TAX_EXC') : null)) {
echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'json_encode' ][ 0 ], array( call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['displayWtPrice'][0], array( array('p'=>$_smarty_tpl->tpl_vars['product']->value['total']),$_smarty_tpl ) ) ));
} else {
echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'json_encode' ][ 0 ], array( call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['displayWtPrice'][0], array( array('p'=>$_smarty_tpl->tpl_vars['product']->value['total_wt']),$_smarty_tpl ) ) ));
}?>,
    "price_float": <?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'json_encode' ][ 0 ], array( floatval($_smarty_tpl->tpl_vars['product']->value['total']) ));?>
,
    "idCombination": <?php if ((isset($_smarty_tpl->tpl_vars['product']->value['attributes_small']))) {
echo intval($_smarty_tpl->tpl_vars['productAttributeId']->value);
} else { ?>0<?php }?>,
    "idAddressDelivery": <?php if ((isset($_smarty_tpl->tpl_vars['product']->value['id_address_delivery']))) {
echo intval($_smarty_tpl->tpl_vars['product']->value['id_address_delivery']);
} else { ?>0<?php }?>,
    "is_gift": <?php if ((isset($_smarty_tpl->tpl_vars['product']->value['is_gift'])) && $_smarty_tpl->tpl_vars['product']->value['is_gift']) {?>true<?php } else { ?>false<?php }?>,
    <?php if ((isset($_smarty_tpl->tpl_vars['product']->value['attributes_small']))) {?>
      "hasAttributes": true,
      "attributes": <?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'json_encode' ][ 0 ], array( $_smarty_tpl->tpl_vars['product']->value['attributes_small'] ));?>
,
    <?php } else { ?>
      "hasAttributes": false,
    <?php }?>
    "hasCustomizedDatas": <?php if ((isset($_smarty_tpl->tpl_vars['customizedDatas']->value[$_smarty_tpl->tpl_vars['productId']->value][$_smarty_tpl->tpl_vars['productAttributeId']->value]))) {?>true<?php } else { ?>false<?php }?>,
    "customizedDatas": [
    <?php if ((isset($_smarty_tpl->tpl_vars['customizedDatas']->value[$_smarty_tpl->tpl_vars['productId']->value][$_smarty_tpl->tpl_vars['productAttributeId']->value][$_smarty_tpl->tpl_vars['product']->value['id_address_delivery']]))) {?>
      <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['customizedDatas']->value[$_smarty_tpl->tpl_vars['productId']->value][$_smarty_tpl->tpl_vars['productAttributeId']->value][$_smarty_tpl->tpl_vars['product']->value['id_address_delivery']], 'customization', false, 'id_customization', 'customizedDatas', array (
  'last' => true,
  'iteration' => true,
  'total' => true,
));
$_smarty_tpl->tpl_vars['customization']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['id_customization']->value => $_smarty_tpl->tpl_vars['customization']->value) {
$_smarty_tpl->tpl_vars['customization']->do_else = false;
$_smarty_tpl->tpl_vars['__smarty_foreach_customizedDatas']->value['iteration']++;
$_smarty_tpl->tpl_vars['__smarty_foreach_customizedDatas']->value['last'] = $_smarty_tpl->tpl_vars['__smarty_foreach_customizedDatas']->value['iteration'] === $_smarty_tpl->tpl_vars['__smarty_foreach_customizedDatas']->value['total'];
?>{
                "customizationId": <?php echo intval($_smarty_tpl->tpl_vars['id_customization']->value);?>
,
        "quantity": <?php echo intval($_smarty_tpl->tpl_vars['customization']->value['quantity']);?>
,
        "datas": [
        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['customization']->value['datas'], 'datas', false, 'type', 'customization', array (
  'last' => true,
  'iteration' => true,
  'total' => true,
));
$_smarty_tpl->tpl_vars['datas']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['type']->value => $_smarty_tpl->tpl_vars['datas']->value) {
$_smarty_tpl->tpl_vars['datas']->do_else = false;
$_smarty_tpl->tpl_vars['__smarty_foreach_customization']->value['iteration']++;
$_smarty_tpl->tpl_vars['__smarty_foreach_customization']->value['last'] = $_smarty_tpl->tpl_vars['__smarty_foreach_customization']->value['iteration'] === $_smarty_tpl->tpl_vars['__smarty_foreach_customization']->value['total'];
?>
          {
          "type": <?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'json_encode' ][ 0 ], array( $_smarty_tpl->tpl_vars['type']->value ));?>
,
          "datas": [
          <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['datas']->value, 'data', false, 'index', 'datas', array (
  'last' => true,
  'iteration' => true,
  'total' => true,
));
$_smarty_tpl->tpl_vars['data']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['index']->value => $_smarty_tpl->tpl_vars['data']->value) {
$_smarty_tpl->tpl_vars['data']->do_else = false;
$_smarty_tpl->tpl_vars['__smarty_foreach_datas']->value['iteration']++;
$_smarty_tpl->tpl_vars['__smarty_foreach_datas']->value['last'] = $_smarty_tpl->tpl_vars['__smarty_foreach_datas']->value['iteration'] === $_smarty_tpl->tpl_vars['__smarty_foreach_datas']->value['total'];
?>
            {
            "index": <?php echo intval($_smarty_tpl->tpl_vars['index']->value);?>
,
            "value": <?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'json_encode' ][ 0 ], array( Tools::nl2br($_smarty_tpl->tpl_vars['data']->value['value']) ));?>
,
            "truncatedValue": <?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'json_encode' ][ 0 ], array( Tools::nl2br(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'truncate' ][ 0 ], array( $_smarty_tpl->tpl_vars['data']->value['value'],28,'...' ))) ));?>

          }<?php if (!(isset($_smarty_tpl->tpl_vars['__smarty_foreach_datas']->value['last']) ? $_smarty_tpl->tpl_vars['__smarty_foreach_datas']->value['last'] : null)) {?>,<?php }?>
          <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>]
        }<?php if (!(isset($_smarty_tpl->tpl_vars['__smarty_foreach_customization']->value['last']) ? $_smarty_tpl->tpl_vars['__smarty_foreach_customization']->value['last'] : null)) {?>,<?php }?>
        <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
        ]
      }<?php if (!(isset($_smarty_tpl->tpl_vars['__smarty_foreach_customizedDatas']->value['last']) ? $_smarty_tpl->tpl_vars['__smarty_foreach_customizedDatas']->value['last'] : null)) {?>,<?php }?>
      <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
    <?php }?>
    ]
  }<?php if (!(isset($_smarty_tpl->tpl_vars['__smarty_foreach_products']->value['last']) ? $_smarty_tpl->tpl_vars['__smarty_foreach_products']->value['last'] : null)) {?>,<?php }?>
  <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);
}?>
],
"discounts": [
<?php if ($_smarty_tpl->tpl_vars['discounts']->value) {
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['discounts']->value, 'discount', false, NULL, 'discounts', array (
  'last' => true,
  'iteration' => true,
  'total' => true,
));
$_smarty_tpl->tpl_vars['discount']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['discount']->value) {
$_smarty_tpl->tpl_vars['discount']->do_else = false;
$_smarty_tpl->tpl_vars['__smarty_foreach_discounts']->value['iteration']++;
$_smarty_tpl->tpl_vars['__smarty_foreach_discounts']->value['last'] = $_smarty_tpl->tpl_vars['__smarty_foreach_discounts']->value['iteration'] === $_smarty_tpl->tpl_vars['__smarty_foreach_discounts']->value['total'];
?>
  {
  "id": <?php echo intval($_smarty_tpl->tpl_vars['discount']->value['id_discount']);?>
,
  "name": <?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'json_encode' ][ 0 ], array( call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'truncate' ][ 0 ], array( trim($_smarty_tpl->tpl_vars['discount']->value['name']),18,'...' )) ));?>
,
  "description": <?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'json_encode' ][ 0 ], array( $_smarty_tpl->tpl_vars['discount']->value['description'] ));?>
,
  "nameDescription": <?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'json_encode' ][ 0 ], array( call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'truncate' ][ 0 ], array( trim((($_smarty_tpl->tpl_vars['discount']->value['name']).(' : ')).($_smarty_tpl->tpl_vars['discount']->value['description'])),18,'...' )) ));?>
,
  "code": <?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'json_encode' ][ 0 ], array( $_smarty_tpl->tpl_vars['discount']->value['code'] ));?>
,
  "link": <?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'json_encode' ][ 0 ], array( $_smarty_tpl->tpl_vars['link']->value->getPageLink(((string)$_smarty_tpl->tpl_vars['order_process']->value),true,NULL,"deleteDiscount=".((string)$_smarty_tpl->tpl_vars['discount']->value['id_discount'])) ));?>
,
  "price": <?php if ($_smarty_tpl->tpl_vars['priceDisplay']->value == 1) {
echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'json_encode' ][ 0 ], array( call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['convertPrice'][0], array( array('price'=>$_smarty_tpl->tpl_vars['discount']->value['value_tax_exc']),$_smarty_tpl ) ) ));
} else {
echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'json_encode' ][ 0 ], array( call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['convertPrice'][0], array( array('price'=>$_smarty_tpl->tpl_vars['discount']->value['value_real']),$_smarty_tpl ) ) ));
}?>,
  "price_float": <?php if ($_smarty_tpl->tpl_vars['priceDisplay']->value == 1) {
echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'json_encode' ][ 0 ], array( $_smarty_tpl->tpl_vars['discount']->value['value_tax_exc'] ));
} else {
echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'json_encode' ][ 0 ], array( $_smarty_tpl->tpl_vars['discount']->value['value_real'] ));
}?>
}
  <?php if (!(isset($_smarty_tpl->tpl_vars['__smarty_foreach_discounts']->value['last']) ? $_smarty_tpl->tpl_vars['__smarty_foreach_discounts']->value['last'] : null)) {?>,<?php }
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);
}?>
],
"shippingCost": <?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'json_encode' ][ 0 ], array( $_smarty_tpl->tpl_vars['shipping_cost']->value ));?>
,
"shippingCostFloat": <?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'json_encode' ][ 0 ], array( $_smarty_tpl->tpl_vars['shipping_cost_float']->value ));?>
,
<?php if ((isset($_smarty_tpl->tpl_vars['tax_cost']->value))) {?>
  "taxCost": <?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'json_encode' ][ 0 ], array( $_smarty_tpl->tpl_vars['tax_cost']->value ));?>
,
<?php }?>
"wrappingCost": <?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'json_encode' ][ 0 ], array( $_smarty_tpl->tpl_vars['wrapping_cost']->value ));?>
,
"nbTotalProducts": <?php echo intval($_smarty_tpl->tpl_vars['nb_total_products']->value);?>
,
"total": <?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'json_encode' ][ 0 ], array( $_smarty_tpl->tpl_vars['total']->value ));?>
,
"productTotal": <?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'json_encode' ][ 0 ], array( $_smarty_tpl->tpl_vars['product_total']->value ));?>
,
"freeShipping": <?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'json_encode' ][ 0 ], array( call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['displayWtPrice'][0], array( array('p'=>$_smarty_tpl->tpl_vars['free_shipping']->value),$_smarty_tpl ) ) ));?>
,
"freeShippingFloat": <?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'json_encode' ][ 0 ], array( $_smarty_tpl->tpl_vars['free_shipping']->value ));?>
,
"free_ship": <?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'json_encode' ][ 0 ], array( (!$_smarty_tpl->tpl_vars['shipping_cost_float']->value && !count($_smarty_tpl->tpl_vars['cart']->value->getDeliveryAddressesWithoutCarriers(true))) ));?>
,
"isVirtualCart": <?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'json_encode' ][ 0 ], array( $_smarty_tpl->tpl_vars['cart']->value->isVirtualCart() ));?>
,
<?php if ((isset($_smarty_tpl->tpl_vars['errors']->value)) && $_smarty_tpl->tpl_vars['errors']->value) {?>
  "hasError" : true,
  "errors" : [
  <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['errors']->value, 'error', false, 'k', 'errors', array (
  'last' => true,
  'iteration' => true,
  'total' => true,
));
$_smarty_tpl->tpl_vars['error']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['k']->value => $_smarty_tpl->tpl_vars['error']->value) {
$_smarty_tpl->tpl_vars['error']->do_else = false;
$_smarty_tpl->tpl_vars['__smarty_foreach_errors']->value['iteration']++;
$_smarty_tpl->tpl_vars['__smarty_foreach_errors']->value['last'] = $_smarty_tpl->tpl_vars['__smarty_foreach_errors']->value['iteration'] === $_smarty_tpl->tpl_vars['__smarty_foreach_errors']->value['total'];
?>
    <?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'json_encode' ][ 0 ], array( $_smarty_tpl->tpl_vars['error']->value ));?>

    <?php if (!(isset($_smarty_tpl->tpl_vars['__smarty_foreach_errors']->value['last']) ? $_smarty_tpl->tpl_vars['__smarty_foreach_errors']->value['last'] : null)) {?>,<?php }?>
  <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
  ]
<?php } else { ?>
  "hasError" : false
<?php }?>
}
<?php }
}
