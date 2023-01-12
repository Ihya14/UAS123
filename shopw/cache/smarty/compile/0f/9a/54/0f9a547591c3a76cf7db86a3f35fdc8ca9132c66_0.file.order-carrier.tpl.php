<?php
/* Smarty version 4.2.1, created on 2023-01-12 14:28:44
  from 'D:\xampp\htdocs\shopw\themes\niara\order-carrier.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.2.1',
  'unifunc' => 'content_63bfa89cd9ac99_21191747',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '0f9a547591c3a76cf7db86a3f35fdc8ca9132c66' => 
    array (
      0 => 'D:\\xampp\\htdocs\\shopw\\themes\\niara\\order-carrier.tpl',
      1 => 1664191549,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_63bfa89cd9ac99_21191747 (Smarty_Internal_Template $_smarty_tpl) {
if (!$_smarty_tpl->tpl_vars['opc']->value) {?>
  <?php $_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, 'path', null, null);
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Shipping:'),$_smarty_tpl ) );
$_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);?>
  <?php $_smarty_tpl->_assignInScope('current_step', 'shipping');?>
  <div id="carrier_area">
    <h1 class="page-heading"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Shipping:'),$_smarty_tpl ) );?>
</h1>
    <?php $_smarty_tpl->_subTemplateRender(((string)$_smarty_tpl->tpl_vars['tpl_dir']->value)."./order-steps.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
?>
    <?php $_smarty_tpl->_subTemplateRender(((string)$_smarty_tpl->tpl_vars['tpl_dir']->value)."./errors.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
?>
    <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>'displayCarrierTop'),$_smarty_tpl ) );?>

    <form id="form" action="<?php ob_start();
if ($_smarty_tpl->tpl_vars['multi_shipping']->value) {
echo "multi-shipping=";
echo (string)$_smarty_tpl->tpl_vars['multi_shipping']->value;
}
$_prefixVariable25=ob_get_clean();
echo htmlspecialchars((string)$_smarty_tpl->tpl_vars['link']->value->getPageLink('order',true,NULL,$_prefixVariable25), ENT_QUOTES, 'UTF-8', true);?>
" method="post" name="carrier_area">
<?php } else { ?>
  <div id="carrier_area" class="opc-main-block">
    <h1 class="page-heading step-num"><span>2</span> <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Delivery methods'),$_smarty_tpl ) );?>
</h1>
      <div id="opc_delivery_methods" class="opc-main-block">
        <div id="opc_delivery_methods-overlay" class="opc-overlay" style="display: none;"></div>
<?php }?>
<div class="order_carrier_content box">
  <?php if ((isset($_smarty_tpl->tpl_vars['virtual_cart']->value)) && $_smarty_tpl->tpl_vars['virtual_cart']->value) {?>
    <input id="input_virtual_carrier" class="hidden" type="hidden" name="id_carrier" value="0">
    <div class="alert alert-warning"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'No carrier is needed for this order.'),$_smarty_tpl ) );?>
</div>
  <?php } else { ?>
    <div id="HOOK_BEFORECARRIER">
      <?php if ((isset($_smarty_tpl->tpl_vars['carriers']->value)) && (isset($_smarty_tpl->tpl_vars['HOOK_BEFORECARRIER']->value))) {?>
        <?php echo $_smarty_tpl->tpl_vars['HOOK_BEFORECARRIER']->value;?>

      <?php }?>
    </div>
    <?php if ((isset($_smarty_tpl->tpl_vars['isVirtualCart']->value)) && $_smarty_tpl->tpl_vars['isVirtualCart']->value) {?>
      <div class="alert alert-warning"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'No carrier is needed for this order.'),$_smarty_tpl ) );?>
</div>
    <?php } else { ?>
      <div class="delivery_options_address">
        <?php if ((isset($_smarty_tpl->tpl_vars['delivery_option_list']->value))) {?>
          <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['delivery_option_list']->value, 'option_list', false, 'id_address');
$_smarty_tpl->tpl_vars['option_list']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['id_address']->value => $_smarty_tpl->tpl_vars['option_list']->value) {
$_smarty_tpl->tpl_vars['option_list']->do_else = false;
?>
            <p class="carrier_title">
              <?php if ((isset($_smarty_tpl->tpl_vars['address_collection']->value[$_smarty_tpl->tpl_vars['id_address']->value]))) {?>
                <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Choose a shipping option for this address:'),$_smarty_tpl ) );?>
 <?php echo $_smarty_tpl->tpl_vars['address_collection']->value[$_smarty_tpl->tpl_vars['id_address']->value]->alias;?>

              <?php } else { ?>
                <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Choose a shipping option'),$_smarty_tpl ) );?>

              <?php }?>
            </p>
            <div class="delivery_options">
              <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['option_list']->value, 'option', false, 'key');
$_smarty_tpl->tpl_vars['option']->index = -1;
$_smarty_tpl->tpl_vars['option']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['key']->value => $_smarty_tpl->tpl_vars['option']->value) {
$_smarty_tpl->tpl_vars['option']->do_else = false;
$_smarty_tpl->tpl_vars['option']->index++;
$__foreach_option_16_saved = $_smarty_tpl->tpl_vars['option'];
?>
                <div class="delivery_option">
                  <div>
                    <table class="resume table table-bordered<?php if (!$_smarty_tpl->tpl_vars['option']->value['unique_carrier']) {?> hide<?php }?>">
                      <tr>
                        <td class="delivery_option_radio">
                            <label for="delivery_option_<?php echo intval($_smarty_tpl->tpl_vars['id_address']->value);?>
_<?php echo $_smarty_tpl->tpl_vars['option']->index;?>
">
                                 <input id="delivery_option_<?php echo intval($_smarty_tpl->tpl_vars['id_address']->value);?>
_<?php echo $_smarty_tpl->tpl_vars['option']->index;?>
" class="delivery_option_radio" type="radio" name="delivery_option[<?php echo intval($_smarty_tpl->tpl_vars['id_address']->value);?>
]" data-key="<?php echo $_smarty_tpl->tpl_vars['key']->value;?>
" data-id_address="<?php echo intval($_smarty_tpl->tpl_vars['id_address']->value);?>
" value="<?php echo $_smarty_tpl->tpl_vars['key']->value;?>
"<?php if ((isset($_smarty_tpl->tpl_vars['delivery_option']->value[$_smarty_tpl->tpl_vars['id_address']->value])) && $_smarty_tpl->tpl_vars['delivery_option']->value[$_smarty_tpl->tpl_vars['id_address']->value] == $_smarty_tpl->tpl_vars['key']->value) {?> checked="checked"<?php }?>><span class="label-text"></span>
                            </label>
                        </td>
                        <td class="delivery_option_logo">
                          <label for="delivery_option_<?php echo intval($_smarty_tpl->tpl_vars['id_address']->value);?>
_<?php echo $_smarty_tpl->tpl_vars['option']->index;?>
">
                          <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['option']->value['carrier_list'], 'carrier', true);
$_smarty_tpl->tpl_vars['carrier']->iteration = 0;
$_smarty_tpl->tpl_vars['carrier']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['carrier']->value) {
$_smarty_tpl->tpl_vars['carrier']->do_else = false;
$_smarty_tpl->tpl_vars['carrier']->iteration++;
$_smarty_tpl->tpl_vars['carrier']->last = $_smarty_tpl->tpl_vars['carrier']->iteration === $_smarty_tpl->tpl_vars['carrier']->total;
$__foreach_carrier_17_saved = $_smarty_tpl->tpl_vars['carrier'];
?>
                            <?php if ($_smarty_tpl->tpl_vars['carrier']->value['logo']) {?>
                              <img class="order_carrier_logo" src="<?php echo mb_convert_encoding(htmlspecialchars((string)$_smarty_tpl->tpl_vars['carrier']->value['logo'], ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
" alt="<?php echo mb_convert_encoding(htmlspecialchars((string)$_smarty_tpl->tpl_vars['carrier']->value['instance']->name, ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
">
                            <?php } elseif (!$_smarty_tpl->tpl_vars['option']->value['unique_carrier']) {?>
                              <?php echo mb_convert_encoding(htmlspecialchars((string)$_smarty_tpl->tpl_vars['carrier']->value['instance']->name, ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>

                              <?php if (!$_smarty_tpl->tpl_vars['carrier']->last) {?> - <?php }?>
                            <?php }?>
                          <?php
$_smarty_tpl->tpl_vars['carrier'] = $__foreach_carrier_17_saved;
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                            </label>
                        </td>
                        <td>
                          <label for="delivery_option_<?php echo intval($_smarty_tpl->tpl_vars['id_address']->value);?>
_<?php echo $_smarty_tpl->tpl_vars['option']->index;?>
">
                          <?php if ($_smarty_tpl->tpl_vars['option']->value['unique_carrier']) {?>
                            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['option']->value['carrier_list'], 'carrier', true);
$_smarty_tpl->tpl_vars['carrier']->iteration = 0;
$_smarty_tpl->tpl_vars['carrier']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['carrier']->value) {
$_smarty_tpl->tpl_vars['carrier']->do_else = false;
$_smarty_tpl->tpl_vars['carrier']->iteration++;
$_smarty_tpl->tpl_vars['carrier']->last = $_smarty_tpl->tpl_vars['carrier']->iteration === $_smarty_tpl->tpl_vars['carrier']->total;
$__foreach_carrier_18_saved = $_smarty_tpl->tpl_vars['carrier'];
?>
                              <strong><?php echo mb_convert_encoding(htmlspecialchars((string)$_smarty_tpl->tpl_vars['carrier']->value['instance']->name, ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
</strong>
                              <?php if ((isset($_smarty_tpl->tpl_vars['carrier']->value['instance']->delay[$_smarty_tpl->tpl_vars['cookie']->value->id_lang]))) {?>
                                <br><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Delivery time:'),$_smarty_tpl ) );?>
&nbsp;<?php echo mb_convert_encoding(htmlspecialchars((string)$_smarty_tpl->tpl_vars['carrier']->value['instance']->delay[$_smarty_tpl->tpl_vars['cookie']->value->id_lang], ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>

                              <?php }?>
                            <?php
$_smarty_tpl->tpl_vars['carrier'] = $__foreach_carrier_18_saved;
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                          <?php }?>
                          <?php if (count($_smarty_tpl->tpl_vars['option_list']->value) > 1) {?>
                            <br>
                            <?php if ($_smarty_tpl->tpl_vars['option']->value['is_best_grade']) {?>
                              <?php if ($_smarty_tpl->tpl_vars['option']->value['is_best_price']) {?>
                                <span class="best_grade best_grade_price best_grade_speed"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'The best price and speed'),$_smarty_tpl ) );?>
</span>
                              <?php } else { ?>
                                <span class="best_grade best_grade_speed"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'The fastest'),$_smarty_tpl ) );?>
</span>
                              <?php }?>
                            <?php } elseif ($_smarty_tpl->tpl_vars['option']->value['is_best_price']) {?>
                              <span class="best_grade best_grade_price"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'The best price'),$_smarty_tpl ) );?>
</span>
                            <?php }?>
                          <?php }?>
                            </label>
                        </td>
                        <td class="delivery_option_price">
                          <label for="delivery_option_<?php echo intval($_smarty_tpl->tpl_vars['id_address']->value);?>
_<?php echo $_smarty_tpl->tpl_vars['option']->index;?>
">
                            <div class="delivery_option_price">
                            <?php if ($_smarty_tpl->tpl_vars['option']->value['total_price_with_tax'] && !$_smarty_tpl->tpl_vars['option']->value['is_free'] && (!(isset($_smarty_tpl->tpl_vars['free_shipping']->value)) || ((isset($_smarty_tpl->tpl_vars['free_shipping']->value)) && !$_smarty_tpl->tpl_vars['free_shipping']->value))) {?>
                              <?php if ($_smarty_tpl->tpl_vars['use_taxes']->value == 1) {?>
                                <?php if ($_smarty_tpl->tpl_vars['priceDisplay']->value == 1) {?>
                                  <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['convertPrice'][0], array( array('price'=>$_smarty_tpl->tpl_vars['option']->value['total_price_without_tax']),$_smarty_tpl ) );
if ($_smarty_tpl->tpl_vars['display_tax_label']->value) {?> <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'(tax excl.)'),$_smarty_tpl ) );
}?>
                                <?php } else { ?>
                                  <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['convertPrice'][0], array( array('price'=>$_smarty_tpl->tpl_vars['option']->value['total_price_with_tax']),$_smarty_tpl ) );
if ($_smarty_tpl->tpl_vars['display_tax_label']->value) {?> <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'(tax incl.)'),$_smarty_tpl ) );
}?>
                                <?php }?>
                              <?php } else { ?>
                                <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['convertPrice'][0], array( array('price'=>$_smarty_tpl->tpl_vars['option']->value['total_price_without_tax']),$_smarty_tpl ) );?>

                              <?php }?>
                            <?php } else { ?>
                              <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Free'),$_smarty_tpl ) );?>

                            <?php }?>
                            </div>
                        </label>
                        </td>
                      </tr>
                    </table>
                    <?php if (!$_smarty_tpl->tpl_vars['option']->value['unique_carrier']) {?>
                      <table class="delivery_option_carrier<?php if ((isset($_smarty_tpl->tpl_vars['delivery_option']->value[$_smarty_tpl->tpl_vars['id_address']->value])) && $_smarty_tpl->tpl_vars['delivery_option']->value[$_smarty_tpl->tpl_vars['id_address']->value] == $_smarty_tpl->tpl_vars['key']->value) {?> selected<?php }?> resume table table-bordered<?php if ($_smarty_tpl->tpl_vars['option']->value['unique_carrier']) {?> hide<?php }?>">
                        <tr>
                          <?php if (!$_smarty_tpl->tpl_vars['option']->value['unique_carrier']) {?>
                            <td rowspan="<?php echo count($_smarty_tpl->tpl_vars['option']->value['carrier_list']);?>
" class="delivery_option_radio">
                              <input id="delivery_option_<?php echo intval($_smarty_tpl->tpl_vars['id_address']->value);?>
_<?php echo $_smarty_tpl->tpl_vars['option']->index;?>
" class="delivery_option_radio" type="radio" name="delivery_option[<?php echo intval($_smarty_tpl->tpl_vars['id_address']->value);?>
]" data-key="<?php echo $_smarty_tpl->tpl_vars['key']->value;?>
" data-id_address="<?php echo intval($_smarty_tpl->tpl_vars['id_address']->value);?>
" value="<?php echo $_smarty_tpl->tpl_vars['key']->value;?>
"<?php if ((isset($_smarty_tpl->tpl_vars['delivery_option']->value[$_smarty_tpl->tpl_vars['id_address']->value])) && $_smarty_tpl->tpl_vars['delivery_option']->value[$_smarty_tpl->tpl_vars['id_address']->value] == $_smarty_tpl->tpl_vars['key']->value) {?> checked="checked"<?php }?>><span class="label-text"></span>
                            </td>
                          <?php }?>
                          <?php $_smarty_tpl->_assignInScope('first', current($_smarty_tpl->tpl_vars['option']->value['carrier_list']));?>
                          <td class="delivery_option_logo<?php if ($_smarty_tpl->tpl_vars['first']->value['product_list'][0]['carrier_list'][0] == 0) {?> hide<?php }?>">
                            <?php if ($_smarty_tpl->tpl_vars['first']->value['logo']) {?>
                              <img class="order_carrier_logo" src="<?php echo mb_convert_encoding(htmlspecialchars((string)$_smarty_tpl->tpl_vars['first']->value['logo'], ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
" alt="<?php echo mb_convert_encoding(htmlspecialchars((string)$_smarty_tpl->tpl_vars['first']->value['instance']->name, ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
">
                            <?php } elseif (!$_smarty_tpl->tpl_vars['option']->value['unique_carrier']) {?>
                              <?php echo mb_convert_encoding(htmlspecialchars((string)$_smarty_tpl->tpl_vars['first']->value['instance']->name, ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>

                            <?php }?>
                          </td>
                          <td class="<?php if ($_smarty_tpl->tpl_vars['first']->value['product_list'][0]['carrier_list'][0] == 0) {?> hide<?php }?>">
                            <input type="hidden" value="<?php echo intval($_smarty_tpl->tpl_vars['first']->value['instance']->id);?>
" name="id_carrier">
                            <?php if ((isset($_smarty_tpl->tpl_vars['first']->value['instance']->delay[$_smarty_tpl->tpl_vars['cookie']->value->id_lang]))) {?>
                              <i class="icon icon-info-sign"></i>
                              <?php echo mb_convert_encoding(htmlspecialchars((string)$_smarty_tpl->tpl_vars['first']->value['instance']->delay[$_smarty_tpl->tpl_vars['cookie']->value->id_lang], ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
&nbsp;<?php if (count($_smarty_tpl->tpl_vars['first']->value['product_list']) <= 1) {?>(<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'For this product:'),$_smarty_tpl ) );
} else { ?>(<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'For these products:'),$_smarty_tpl ) );
}?>
                              <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['first']->value['product_list'], 'product', true);
$_smarty_tpl->tpl_vars['product']->iteration = 0;
$_smarty_tpl->tpl_vars['product']->index = -1;
$_smarty_tpl->tpl_vars['product']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['product']->value) {
$_smarty_tpl->tpl_vars['product']->do_else = false;
$_smarty_tpl->tpl_vars['product']->iteration++;
$_smarty_tpl->tpl_vars['product']->index++;
$_smarty_tpl->tpl_vars['product']->last = $_smarty_tpl->tpl_vars['product']->iteration === $_smarty_tpl->tpl_vars['product']->total;
$__foreach_product_19_saved = $_smarty_tpl->tpl_vars['product'];
?>
                                <?php if ($_smarty_tpl->tpl_vars['product']->index == 4) {?>
                                  <abbr title="
                                <?php }?>
                                <?php if ($_smarty_tpl->tpl_vars['product']->index >= 4) {
echo mb_convert_encoding(htmlspecialchars((string)$_smarty_tpl->tpl_vars['product']->value['name'], ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');
if ((isset($_smarty_tpl->tpl_vars['product']->value['attributes'])) && $_smarty_tpl->tpl_vars['product']->value['attributes']) {
echo mb_convert_encoding(htmlspecialchars((string)$_smarty_tpl->tpl_vars['product']->value['attributes'], ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');
}
if (!$_smarty_tpl->tpl_vars['product']->last) {?>,&nbsp;<?php } else { ?>">&hellip;</abbr>)<?php }
} else {
echo mb_convert_encoding(htmlspecialchars((string)$_smarty_tpl->tpl_vars['product']->value['name'], ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');
if ((isset($_smarty_tpl->tpl_vars['product']->value['attributes'])) && $_smarty_tpl->tpl_vars['product']->value['attributes']) {
echo mb_convert_encoding(htmlspecialchars((string)$_smarty_tpl->tpl_vars['product']->value['attributes'], ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');
}
if (!$_smarty_tpl->tpl_vars['product']->last) {?>,&nbsp;<?php } else { ?>)<?php }
}?>
                              <?php
$_smarty_tpl->tpl_vars['product'] = $__foreach_product_19_saved;
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                            <?php }?>
                          </td>
                          <td rowspan="<?php echo count($_smarty_tpl->tpl_vars['option']->value['carrier_list']);?>
" class="delivery_option_price">
                            <div class="delivery_option_price">
                              <?php if ($_smarty_tpl->tpl_vars['option']->value['total_price_with_tax'] && !$_smarty_tpl->tpl_vars['option']->value['is_free'] && (!(isset($_smarty_tpl->tpl_vars['free_shipping']->value)) || ((isset($_smarty_tpl->tpl_vars['free_shipping']->value)) && !$_smarty_tpl->tpl_vars['free_shipping']->value))) {?>
                                <?php if ($_smarty_tpl->tpl_vars['use_taxes']->value == 1) {?>
                                  <?php if ($_smarty_tpl->tpl_vars['priceDisplay']->value == 1) {?>
                                    <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['convertPrice'][0], array( array('price'=>$_smarty_tpl->tpl_vars['option']->value['total_price_without_tax']),$_smarty_tpl ) );
if ($_smarty_tpl->tpl_vars['display_tax_label']->value) {?> <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'(tax excl.)'),$_smarty_tpl ) );
}?>
                                  <?php } else { ?>
                                    <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['convertPrice'][0], array( array('price'=>$_smarty_tpl->tpl_vars['option']->value['total_price_with_tax']),$_smarty_tpl ) );
if ($_smarty_tpl->tpl_vars['display_tax_label']->value) {?> <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'(tax incl.)'),$_smarty_tpl ) );
}?>
                                  <?php }?>
                                <?php } else { ?>
                                  <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['convertPrice'][0], array( array('price'=>$_smarty_tpl->tpl_vars['option']->value['total_price_without_tax']),$_smarty_tpl ) );?>

                                <?php }?>
                              <?php } else { ?>
                                <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Free'),$_smarty_tpl ) );?>

                              <?php }?>
                            </div>
                          </td>
                        </tr>
                        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['option']->value['carrier_list'], 'carrier', true);
$_smarty_tpl->tpl_vars['carrier']->iteration = 0;
$_smarty_tpl->tpl_vars['carrier']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['carrier']->value) {
$_smarty_tpl->tpl_vars['carrier']->do_else = false;
$_smarty_tpl->tpl_vars['carrier']->iteration++;
$_smarty_tpl->tpl_vars['carrier']->last = $_smarty_tpl->tpl_vars['carrier']->iteration === $_smarty_tpl->tpl_vars['carrier']->total;
$__foreach_carrier_20_saved = $_smarty_tpl->tpl_vars['carrier'];
?>
                          <?php if ($_smarty_tpl->tpl_vars['carrier']->iteration != 1) {?>
                            <tr>
                              <td class="delivery_option_logo<?php if ($_smarty_tpl->tpl_vars['carrier']->value['product_list'][0]['carrier_list'][0] == 0) {?> hide<?php }?>">
                                <?php if ($_smarty_tpl->tpl_vars['carrier']->value['logo']) {?>
                                  <img class="order_carrier_logo" src="<?php echo mb_convert_encoding(htmlspecialchars((string)$_smarty_tpl->tpl_vars['carrier']->value['logo'], ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
" alt="<?php echo mb_convert_encoding(htmlspecialchars((string)$_smarty_tpl->tpl_vars['carrier']->value['instance']->name, ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
">
                                <?php } elseif (!$_smarty_tpl->tpl_vars['option']->value['unique_carrier']) {?>
                                  <?php echo mb_convert_encoding(htmlspecialchars((string)$_smarty_tpl->tpl_vars['carrier']->value['instance']->name, ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>

                                <?php }?>
                              </td>
                              <td class="<?php if ($_smarty_tpl->tpl_vars['carrier']->value['product_list'][0]['carrier_list'][0] == 0) {?> hide<?php }?>">
                                <input type="hidden" value="<?php echo intval($_smarty_tpl->tpl_vars['first']->value['instance']->id);?>
" name="id_carrier">
                                <?php if ((isset($_smarty_tpl->tpl_vars['carrier']->value['instance']->delay[$_smarty_tpl->tpl_vars['cookie']->value->id_lang]))) {?>
                                  <i class="icon icon-info-sign"></i>
                                  <?php echo mb_convert_encoding(htmlspecialchars((string)$_smarty_tpl->tpl_vars['carrier']->value['instance']->delay[$_smarty_tpl->tpl_vars['cookie']->value->id_lang], ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
&nbsp;<?php if (count($_smarty_tpl->tpl_vars['first']->value['product_list']) <= 1) {?>(<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'For this product:'),$_smarty_tpl ) );
} else { ?>(<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'For these products:'),$_smarty_tpl ) );
}?>
                                  <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['carrier']->value['product_list'], 'product', true);
$_smarty_tpl->tpl_vars['product']->iteration = 0;
$_smarty_tpl->tpl_vars['product']->index = -1;
$_smarty_tpl->tpl_vars['product']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['product']->value) {
$_smarty_tpl->tpl_vars['product']->do_else = false;
$_smarty_tpl->tpl_vars['product']->iteration++;
$_smarty_tpl->tpl_vars['product']->index++;
$_smarty_tpl->tpl_vars['product']->last = $_smarty_tpl->tpl_vars['product']->iteration === $_smarty_tpl->tpl_vars['product']->total;
$__foreach_product_21_saved = $_smarty_tpl->tpl_vars['product'];
?>
                                    <?php if ($_smarty_tpl->tpl_vars['product']->index == 4) {?>
                                      <abbr title="
                                    <?php }?>
                                    <?php if ($_smarty_tpl->tpl_vars['product']->index >= 4) {
echo mb_convert_encoding(htmlspecialchars((string)$_smarty_tpl->tpl_vars['product']->value['name'], ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');
if ((isset($_smarty_tpl->tpl_vars['product']->value['attributes'])) && $_smarty_tpl->tpl_vars['product']->value['attributes']) {
echo mb_convert_encoding(htmlspecialchars((string)$_smarty_tpl->tpl_vars['product']->value['attributes'], ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');
}
if (!$_smarty_tpl->tpl_vars['product']->last) {?>,&nbsp;<?php } else { ?>">&hellip;</abbr>)<?php }
} else {
echo mb_convert_encoding(htmlspecialchars((string)$_smarty_tpl->tpl_vars['product']->value['name'], ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');
if ((isset($_smarty_tpl->tpl_vars['product']->value['attributes'])) && $_smarty_tpl->tpl_vars['product']->value['attributes']) {
echo mb_convert_encoding(htmlspecialchars((string)$_smarty_tpl->tpl_vars['product']->value['attributes'], ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');
}
if (!$_smarty_tpl->tpl_vars['product']->last) {?>,&nbsp;<?php } else { ?>)<?php }
}?>
                                  <?php
$_smarty_tpl->tpl_vars['product'] = $__foreach_product_21_saved;
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                                <?php }?>
                              </td>
                            </tr>
                          <?php }?>
                        <?php
$_smarty_tpl->tpl_vars['carrier'] = $__foreach_carrier_20_saved;
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                      </table>
                    <?php }?>
                  </div>
                </div>
              <?php
$_smarty_tpl->tpl_vars['option'] = $__foreach_option_16_saved;
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
            </div>
            <div class="hook_extracarrier" id="HOOK_EXTRACARRIER_<?php echo $_smarty_tpl->tpl_vars['id_address']->value;?>
">
              <?php if ((isset($_smarty_tpl->tpl_vars['HOOK_EXTRACARRIER_ADDR']->value)) && (isset($_smarty_tpl->tpl_vars['HOOK_EXTRACARRIER_ADDR']->value[$_smarty_tpl->tpl_vars['id_address']->value]))) {
echo $_smarty_tpl->tpl_vars['HOOK_EXTRACARRIER_ADDR']->value[$_smarty_tpl->tpl_vars['id_address']->value];
}?>
            </div>
          <?php
}
if ($_smarty_tpl->tpl_vars['option_list']->do_else) {
?>
            <?php if ($_smarty_tpl->tpl_vars['opc']->value) {?>
              <?php $_smarty_tpl->_assignInScope('errors', array());?>
              <div class="alert alert-warning" id="noCarrierWarning">
                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['cart']->value->getDeliveryAddressesWithoutCarriers(true,$_smarty_tpl->tpl_vars['errors']->value), 'address', true);
$_smarty_tpl->tpl_vars['address']->iteration = 0;
$_smarty_tpl->tpl_vars['address']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['address']->value) {
$_smarty_tpl->tpl_vars['address']->do_else = false;
$_smarty_tpl->tpl_vars['address']->iteration++;
$_smarty_tpl->tpl_vars['address']->last = $_smarty_tpl->tpl_vars['address']->iteration === $_smarty_tpl->tpl_vars['address']->total;
$__foreach_address_22_saved = $_smarty_tpl->tpl_vars['address'];
?>
                  <?php if (empty($_smarty_tpl->tpl_vars['address']->value->alias)) {?>
                    <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'No carriers available.'),$_smarty_tpl ) );?>

                  <?php } else { ?>
                    <?php $_smarty_tpl->_assignInScope('flag_error_message', false);?>
                    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['errors']->value, 'error');
$_smarty_tpl->tpl_vars['error']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['error']->value) {
$_smarty_tpl->tpl_vars['error']->do_else = false;
?>
                      <?php if ($_smarty_tpl->tpl_vars['error']->value == Carrier::SHIPPING_WEIGHT_EXCEPTION) {?>
                        <?php $_smarty_tpl->_assignInScope('flag_error_message', true);?>
                        <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'The product selection cannot be delivered by the available carrier(s): it is too heavy. Please amend your cart to lower its weight.'),$_smarty_tpl ) );?>

                      <?php } elseif ($_smarty_tpl->tpl_vars['error']->value == Carrier::SHIPPING_PRICE_EXCEPTION) {?>
                        <?php $_smarty_tpl->_assignInScope('flag_error_message', true);?>
                        <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'The product selection cannot be delivered by the available carrier(s). Please amend your cart.'),$_smarty_tpl ) );?>

                      <?php } elseif ($_smarty_tpl->tpl_vars['error']->value == Carrier::SHIPPING_SIZE_EXCEPTION) {?>
                        <?php $_smarty_tpl->_assignInScope('flag_error_message', true);?>
                        <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'The product selection cannot be delivered by the available carrier(s): its size does not fit. Please amend your cart to reduce its size.'),$_smarty_tpl ) );?>

                      <?php }?>
                    <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                    <?php if (!$_smarty_tpl->tpl_vars['flag_error_message']->value) {?>
                      <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'No carriers available for the address "%s".','sprintf'=>$_smarty_tpl->tpl_vars['address']->value->alias),$_smarty_tpl ) );?>

                    <?php }?>
                  <?php }?>
                  <?php if (!$_smarty_tpl->tpl_vars['address']->last) {?>
                    <br>
                  <?php }?>
                  <?php
$_smarty_tpl->tpl_vars['address'] = $__foreach_address_22_saved;
}
if ($_smarty_tpl->tpl_vars['address']->do_else) {
?>
                  <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'No carriers available.'),$_smarty_tpl ) );?>

                <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
              </div>
            <?php }?>
          <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
        <?php }?>
      </div>
      <div id="extra_carrier" style="display: none;"></div>
      <?php if ($_smarty_tpl->tpl_vars['opc']->value) {?>
        <p class="carrier_title"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Leave a message'),$_smarty_tpl ) );?>
</p>
        <div>
          <p><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'If you would like to add a comment about your order, please write it in the field below.'),$_smarty_tpl ) );?>
</p>
            <textarea class="form-control" cols="120" rows="2" name="message" id="message"><?php if ((isset($_smarty_tpl->tpl_vars['oldMessage']->value))) {
echo htmlspecialchars((string)$_smarty_tpl->tpl_vars['oldMessage']->value, ENT_QUOTES, 'UTF-8', true);
}?></textarea>
        </div>
      <?php }?>
      <?php if ($_smarty_tpl->tpl_vars['recyclablePackAllowed']->value) {?>
        <p class="carrier_title"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Recyclable Packaging'),$_smarty_tpl ) );?>
</p>
        <div class="checkbox recyclable">
          <label for="recyclable">
            <input type="checkbox" name="recyclable" id="recyclable" value="1"<?php if ($_smarty_tpl->tpl_vars['recyclable']->value == 1) {?> checked="checked"<?php }?>>
            <span class="label-text"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'I would like to receive my order in recycled packaging.'),$_smarty_tpl ) );?>
</span>
          </label>
        </div>
      <?php }?>
      <?php if ($_smarty_tpl->tpl_vars['giftAllowed']->value) {?>
        <?php if ($_smarty_tpl->tpl_vars['opc']->value) {?>
          <hr style="">
        <?php }?>
        <p class="carrier_title"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Gift'),$_smarty_tpl ) );?>
</p>
        <div class="checkbox gift">
          <label for="gift">
            <input type="checkbox" name="gift" id="gift" value="1"<?php if ($_smarty_tpl->tpl_vars['cart']->value->gift == 1) {?> checked="checked"<?php }?>>
            <span class="label-text"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'I would like my order to be gift wrapped.'),$_smarty_tpl ) );?>
</span>
            <?php if ($_smarty_tpl->tpl_vars['gift_wrapping_price']->value > 0) {?>
              &nbsp;<i>(<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Additional cost of'),$_smarty_tpl ) );?>

              <span class="price" id="gift-price">
                <?php if ($_smarty_tpl->tpl_vars['priceDisplay']->value == 1) {?>
                  <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['convertPrice'][0], array( array('price'=>$_smarty_tpl->tpl_vars['total_wrapping_tax_exc_cost']->value),$_smarty_tpl ) );?>

                <?php } else { ?>
                  <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['convertPrice'][0], array( array('price'=>$_smarty_tpl->tpl_vars['total_wrapping_cost']->value),$_smarty_tpl ) );?>

                <?php }?>
              </span>
              <?php if ($_smarty_tpl->tpl_vars['use_taxes']->value && $_smarty_tpl->tpl_vars['display_tax_label']->value) {?>
                <?php if ($_smarty_tpl->tpl_vars['priceDisplay']->value == 1) {?>
                  <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'(tax excl.)'),$_smarty_tpl ) );?>

                <?php } else { ?>
                  <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'(tax incl.)'),$_smarty_tpl ) );?>

                <?php }?>
              <?php }?>)
            </i>
            <?php }?>
          </label>
        </div>
        <p id="gift_div">
          <label for="gift_message"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'If you\'d like, you can add a note to the gift:'),$_smarty_tpl ) );?>
</label>
          <textarea rows="2" cols="120" id="gift_message" class="form-control" name="gift_message"><?php echo htmlspecialchars((string)$_smarty_tpl->tpl_vars['cart']->value->gift_message, ENT_QUOTES, 'UTF-8', true);?>
</textarea>
        </p>
      <?php }?>
    <?php }?>
  <?php }?>
  <?php if ($_smarty_tpl->tpl_vars['conditions']->value && $_smarty_tpl->tpl_vars['cms_id']->value && (!(isset($_smarty_tpl->tpl_vars['advanced_payment_api']->value)) || !$_smarty_tpl->tpl_vars['advanced_payment_api']->value)) {?>
    <?php if ($_smarty_tpl->tpl_vars['opc']->value) {?>
      <hr style="">
    <?php }?>
    <?php if ((isset($_smarty_tpl->tpl_vars['override_tos_display']->value)) && $_smarty_tpl->tpl_vars['override_tos_display']->value) {?>
      <?php echo $_smarty_tpl->tpl_vars['override_tos_display']->value;?>

    <?php } else { ?>
      <div class="box">
        <div class="checkbox">
          <label for="cgv">
            <input type="checkbox" name="cgv" id="cgv" value="1" <?php if ($_smarty_tpl->tpl_vars['checkedTOS']->value) {?>checked="checked"<?php }?>>
            <span class="label-text"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'I agree to the terms of service and will adhere to them unconditionally.'),$_smarty_tpl ) );?>
</span>
          </label>
          <a href="<?php echo htmlspecialchars((string)$_smarty_tpl->tpl_vars['link_conditions']->value, ENT_QUOTES, 'UTF-8', true);?>
" class="iframe" rel="nofollow"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'(Read the Terms of Service)'),$_smarty_tpl ) );?>
</a>
        </div>
      </div>
    <?php }?>
  <?php }?>
</div>
<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>'displayCarrierBelow'),$_smarty_tpl ) );?>

<?php if (!$_smarty_tpl->tpl_vars['opc']->value) {?>
  <p class="cart_navigation clearfix">
    <input type="hidden" name="step" value="3">
    <input type="hidden" name="back" value="<?php echo $_smarty_tpl->tpl_vars['back']->value;?>
">
    <?php if (!$_smarty_tpl->tpl_vars['is_guest']->value) {?>
      <?php if ($_smarty_tpl->tpl_vars['back']->value) {?>
        <a href="<?php ob_start();
if ($_smarty_tpl->tpl_vars['multi_shipping']->value) {
echo "&multi-shipping=";
echo (string)$_smarty_tpl->tpl_vars['multi_shipping']->value;
}
$_prefixVariable26=ob_get_clean();
echo htmlspecialchars((string)$_smarty_tpl->tpl_vars['link']->value->getPageLink('order',true,NULL,"step=1&back=".((string)$_smarty_tpl->tpl_vars['back']->value).$_prefixVariable26), ENT_QUOTES, 'UTF-8', true);?>
" title="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Previous'),$_smarty_tpl ) );?>
" class="btn btn-lg btn-default">
          <i class="icon icon-chevron-left"></i>
          <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Continue shopping'),$_smarty_tpl ) );?>

        </a>
      <?php } else { ?>
        <a href="<?php ob_start();
if ($_smarty_tpl->tpl_vars['multi_shipping']->value) {
echo "&multi-shipping=";
echo (string)$_smarty_tpl->tpl_vars['multi_shipping']->value;
}
$_prefixVariable27=ob_get_clean();
echo htmlspecialchars((string)$_smarty_tpl->tpl_vars['link']->value->getPageLink('order',true,NULL,"step=1".$_prefixVariable27), ENT_QUOTES, 'UTF-8', true);?>
" title="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Previous'),$_smarty_tpl ) );?>
" class="btn btn-lg btn-default">
          <i class="icon icon-chevron-left"></i>
          <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Continue shopping'),$_smarty_tpl ) );?>

        </a>
      <?php }?>
    <?php } else { ?>
      <a href="<?php ob_start();
if ($_smarty_tpl->tpl_vars['multi_shipping']->value) {
echo "multi-shipping=";
echo (string)$_smarty_tpl->tpl_vars['multi_shipping']->value;
}
$_prefixVariable28=ob_get_clean();
echo htmlspecialchars((string)$_smarty_tpl->tpl_vars['link']->value->getPageLink('order',true,NULL,$_prefixVariable28), ENT_QUOTES, 'UTF-8', true);?>
" title="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Previous'),$_smarty_tpl ) );?>
" class="btn btn-lg btn-default">
        <i class="icon icon-chevron-left"></i>
        <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Continue shopping'),$_smarty_tpl ) );?>

      </a>
    <?php }?>
    <?php if ((isset($_smarty_tpl->tpl_vars['virtual_cart']->value)) && $_smarty_tpl->tpl_vars['virtual_cart']->value || ((isset($_smarty_tpl->tpl_vars['delivery_option_list']->value)) && !empty($_smarty_tpl->tpl_vars['delivery_option_list']->value))) {?>
      <button type="submit" name="processCarrier" class="btn btn-lg btn-success pull-right standard-checkout">
        <span>
          <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Proceed to checkout'),$_smarty_tpl ) );?>

          <i class="icon icon-chevron-right right"></i>
        </span>
      </button>
    <?php }?>
  </p>
</form>
<?php } else { ?>
  </div>
<?php }?>
</div>
<?php if (!$_smarty_tpl->tpl_vars['opc']->value) {
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['addJsDef'][0], array( array('orderProcess'=>'order'),$_smarty_tpl ) );
if ((isset($_smarty_tpl->tpl_vars['virtual_cart']->value)) && !$_smarty_tpl->tpl_vars['virtual_cart']->value && $_smarty_tpl->tpl_vars['giftAllowed']->value && $_smarty_tpl->tpl_vars['cart']->value->gift == 1) {
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['addJsDef'][0], array( array('cart_gift'=>true),$_smarty_tpl ) );
} else {
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['addJsDef'][0], array( array('cart_gift'=>false),$_smarty_tpl ) );
}
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['addJsDef'][0], array( array('orderUrl'=>preg_replace("%(?<!\\\\)'%", "\'", (string)$_smarty_tpl->tpl_vars['link']->value->getPageLink("order",true))),$_smarty_tpl ) );
$_block_plugin28 = isset($_smarty_tpl->smarty->registered_plugins['block']['addJsDefL'][0][0]) ? $_smarty_tpl->smarty->registered_plugins['block']['addJsDefL'][0][0] : null;
if (!is_callable(array($_block_plugin28, 'addJsDefL'))) {
throw new SmartyException('block tag \'addJsDefL\' not callable or registered');
}
$_smarty_tpl->smarty->_cache['_tag_stack'][] = array('addJsDefL', array('name'=>'txtProduct'));
$_block_repeat=true;
echo $_block_plugin28->addJsDefL(array('name'=>'txtProduct'), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Product','js'=>1),$_smarty_tpl ) );
$_block_repeat=false;
echo $_block_plugin28->addJsDefL(array('name'=>'txtProduct'), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);
$_block_plugin29 = isset($_smarty_tpl->smarty->registered_plugins['block']['addJsDefL'][0][0]) ? $_smarty_tpl->smarty->registered_plugins['block']['addJsDefL'][0][0] : null;
if (!is_callable(array($_block_plugin29, 'addJsDefL'))) {
throw new SmartyException('block tag \'addJsDefL\' not callable or registered');
}
$_smarty_tpl->smarty->_cache['_tag_stack'][] = array('addJsDefL', array('name'=>'txtProducts'));
$_block_repeat=true;
echo $_block_plugin29->addJsDefL(array('name'=>'txtProducts'), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Products','js'=>1),$_smarty_tpl ) );
$_block_repeat=false;
echo $_block_plugin29->addJsDefL(array('name'=>'txtProducts'), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);
}
if ($_smarty_tpl->tpl_vars['conditions']->value) {
$_block_plugin30 = isset($_smarty_tpl->smarty->registered_plugins['block']['addJsDefL'][0][0]) ? $_smarty_tpl->smarty->registered_plugins['block']['addJsDefL'][0][0] : null;
if (!is_callable(array($_block_plugin30, 'addJsDefL'))) {
throw new SmartyException('block tag \'addJsDefL\' not callable or registered');
}
$_smarty_tpl->smarty->_cache['_tag_stack'][] = array('addJsDefL', array('name'=>'msg_order_carrier'));
$_block_repeat=true;
echo $_block_plugin30->addJsDefL(array('name'=>'msg_order_carrier'), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'You must agree to the terms of service before continuing.','js'=>1),$_smarty_tpl ) );
$_block_repeat=false;
echo $_block_plugin30->addJsDefL(array('name'=>'msg_order_carrier'), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);
}
}
}
