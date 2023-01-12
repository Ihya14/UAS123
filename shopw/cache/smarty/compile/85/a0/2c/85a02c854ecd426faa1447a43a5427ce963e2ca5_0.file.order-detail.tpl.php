<?php
/* Smarty version 4.2.1, created on 2023-01-12 14:30:26
  from 'D:\xampp\htdocs\shopw\themes\niara\order-detail.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.2.1',
  'unifunc' => 'content_63bfa90240f918_34576748',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '85a02c854ecd426faa1447a43a5427ce963e2ca5' => 
    array (
      0 => 'D:\\xampp\\htdocs\\shopw\\themes\\niara\\order-detail.tpl',
      1 => 1664191549,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_63bfa90240f918_34576748 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'D:\\xampp\\htdocs\\shopw\\vendor\\smarty\\smarty\\libs\\plugins\\modifier.explode.php','function'=>'smarty_modifier_explode',),1=>array('file'=>'D:\\xampp\\htdocs\\shopw\\vendor\\smarty\\smarty\\libs\\plugins\\modifier.replace.php','function'=>'smarty_modifier_replace',),2=>array('file'=>'D:\\xampp\\htdocs\\shopw\\vendor\\smarty\\smarty\\libs\\plugins\\function.counter.php','function'=>'smarty_function_counter',),3=>array('file'=>'D:\\xampp\\htdocs\\shopw\\vendor\\smarty\\smarty\\libs\\plugins\\modifier.regex_replace.php','function'=>'smarty_modifier_regex_replace',),));
if ((isset($_smarty_tpl->tpl_vars['order']->value))) {?>
  <div class="box clearfix">
    <?php if ((isset($_smarty_tpl->tpl_vars['reorderingAllowed']->value)) && $_smarty_tpl->tpl_vars['reorderingAllowed']->value) {?>
      <form id="submitReorder" action="<?php if ((isset($_smarty_tpl->tpl_vars['opc']->value)) && $_smarty_tpl->tpl_vars['opc']->value) {
echo $_smarty_tpl->tpl_vars['link']->value->getPageLink('order-opc',true);
} else {
echo $_smarty_tpl->tpl_vars['link']->value->getPageLink('order',true);
}?>" method="post" class="submit">
        <input type="hidden" value="<?php echo $_smarty_tpl->tpl_vars['order']->value->id;?>
" name="id_order">
        <input type="hidden" value="" name="submitReorder">

        <a href="#" onclick="$(this).closest('form').submit(); return false;" class="btn btn-lg btn-success pull-right"><span><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Reorder'),$_smarty_tpl ) );?>
 <i class="icon icon-chevron-right"></i></span></a>
      </form>
    <?php }?>
    <p>
      <strong><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Order Reference %s - placed on','sprintf'=>$_smarty_tpl->tpl_vars['order']->value->getUniqReference()),$_smarty_tpl ) );?>
 <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['dateFormat'][0], array( array('date'=>$_smarty_tpl->tpl_vars['order']->value->date_add,'full'=>0),$_smarty_tpl ) );?>
</strong>
    </p>
  </div>
  <div class="info-order box">
    <?php if ($_smarty_tpl->tpl_vars['carrier']->value->id) {?><p><strong><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Carrier'),$_smarty_tpl ) );?>
</strong> <?php if ($_smarty_tpl->tpl_vars['carrier']->value->name == "0") {
echo htmlspecialchars((string)$_smarty_tpl->tpl_vars['shop_name']->value, ENT_QUOTES, 'UTF-8', true);
} else {
echo htmlspecialchars((string)$_smarty_tpl->tpl_vars['carrier']->value->name, ENT_QUOTES, 'UTF-8', true);
}?></p><?php }?>
    <p><strong><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Payment method'),$_smarty_tpl ) );?>
</strong> <span><?php echo htmlspecialchars((string)$_smarty_tpl->tpl_vars['order']->value->payment, ENT_QUOTES, 'UTF-8', true);?>
</span></p>
    <?php if ($_smarty_tpl->tpl_vars['invoice']->value && $_smarty_tpl->tpl_vars['invoiceAllowed']->value) {?>
      <p>
        <i class="icon icon-file-text"></i>
        <a target="_blank" href="<?php echo $_smarty_tpl->tpl_vars['link']->value->getPageLink('pdf-invoice',true);?>
?id_order=<?php echo intval($_smarty_tpl->tpl_vars['order']->value->id);
if ($_smarty_tpl->tpl_vars['is_guest']->value) {?>&amp;secure_key=<?php echo htmlspecialchars((string)$_smarty_tpl->tpl_vars['order']->value->secure_key, ENT_QUOTES, 'UTF-8', true);
}?>"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Download your invoice as a PDF file.'),$_smarty_tpl ) );?>
</a>
      </p>
    <?php }?>
    <?php if ($_smarty_tpl->tpl_vars['order']->value->recyclable) {?>
      <p><i class="icon icon-2x text-success icon-repeat"></i> <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'You have given permission to receive your order in recycled packaging.'),$_smarty_tpl ) );?>
</p>
    <?php }?>
    <?php if ($_smarty_tpl->tpl_vars['order']->value->gift) {?>
      <p><i class="icon icon-2x text-success icon-gift"></i> <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'You have requested gift wrapping for this order.'),$_smarty_tpl ) );?>
</p>
      <p><strong><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Message'),$_smarty_tpl ) );?>
</strong> <?php echo nl2br($_smarty_tpl->tpl_vars['order']->value->gift_message);?>
</p>
    <?php }?>
  </div>

  <?php if (count($_smarty_tpl->tpl_vars['order_history']->value)) {?>
    <h1 class="page-heading"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Follow your order\'s status step-by-step'),$_smarty_tpl ) );?>
</h1>
    <div class="table_block table-responsive">
      <table class="detail_step_by_step table table-bordered">
        <thead>
        <tr>
          <th><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Date'),$_smarty_tpl ) );?>
</th>
          <th><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Status'),$_smarty_tpl ) );?>
</th>
        </tr>
        </thead>
        <tbody>
        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['order_history']->value, 'state', false, NULL, 'orderStates', array (
));
$_smarty_tpl->tpl_vars['state']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['state']->value) {
$_smarty_tpl->tpl_vars['state']->do_else = false;
?>
          <tr>
            <td class="step-by-step-date"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['dateFormat'][0], array( array('date'=>$_smarty_tpl->tpl_vars['state']->value['date_add'],'full'=>0),$_smarty_tpl ) );?>
</td>
            <td><span<?php if ((isset($_smarty_tpl->tpl_vars['state']->value['color'])) && $_smarty_tpl->tpl_vars['state']->value['color']) {?> style="background-color:<?php echo htmlspecialchars((string)$_smarty_tpl->tpl_vars['state']->value['color'], ENT_QUOTES, 'UTF-8', true);?>
; border-color:<?php echo htmlspecialchars((string)$_smarty_tpl->tpl_vars['state']->value['color'], ENT_QUOTES, 'UTF-8', true);?>
;"<?php }?> class="label<?php if ((isset($_smarty_tpl->tpl_vars['state']->value['color'])) && Tools::getBrightness($_smarty_tpl->tpl_vars['state']->value['color']) > 128) {?> dark<?php }?>"><?php echo htmlspecialchars((string)$_smarty_tpl->tpl_vars['state']->value['ostate_name'], ENT_QUOTES, 'UTF-8', true);?>
</span></td>
          </tr>
        <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
        </tbody>
      </table>
    </div>
  <?php }?>

  <?php if ((isset($_smarty_tpl->tpl_vars['followup']->value))) {?>
    <p class="bold"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Click the following link to track the delivery of your order'),$_smarty_tpl ) );?>
</p>
    <a href="<?php echo htmlspecialchars((string)$_smarty_tpl->tpl_vars['followup']->value, ENT_QUOTES, 'UTF-8', true);?>
"><?php echo htmlspecialchars((string)$_smarty_tpl->tpl_vars['followup']->value, ENT_QUOTES, 'UTF-8', true);?>
</a>
  <?php }?>

  <div class="adresses_bloc">
    <div class="row">
      <div class="col-xs-12 col-sm-6"<?php if ($_smarty_tpl->tpl_vars['order']->value->isVirtual()) {?> style="display:none;"<?php }?>>
        <ul class="address box">
          <li><h3 class="page-subheading"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Delivery address'),$_smarty_tpl ) );?>
 (<?php echo $_smarty_tpl->tpl_vars['address_delivery']->value->alias;?>
)</h3></li>
          <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['dlv_adr_fields']->value, 'field_item', false, NULL, 'dlv_loop', array (
));
$_smarty_tpl->tpl_vars['field_item']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['field_item']->value) {
$_smarty_tpl->tpl_vars['field_item']->do_else = false;
?>
            <?php if ($_smarty_tpl->tpl_vars['field_item']->value == "company" && (isset($_smarty_tpl->tpl_vars['address_delivery']->value->company))) {?><li class="address_company"><?php echo htmlspecialchars((string)$_smarty_tpl->tpl_vars['address_delivery']->value->company, ENT_QUOTES, 'UTF-8', true);?>
</li>
            <?php } elseif ($_smarty_tpl->tpl_vars['field_item']->value == "address2" && $_smarty_tpl->tpl_vars['address_delivery']->value->address2) {?><li class="address_address2"><?php echo htmlspecialchars((string)$_smarty_tpl->tpl_vars['address_delivery']->value->address2, ENT_QUOTES, 'UTF-8', true);?>
</li>
            <?php } elseif ($_smarty_tpl->tpl_vars['field_item']->value == "phone_mobile" && $_smarty_tpl->tpl_vars['address_delivery']->value->phone_mobile) {?><li class="address_phone_mobile"><?php echo htmlspecialchars((string)$_smarty_tpl->tpl_vars['address_delivery']->value->phone_mobile, ENT_QUOTES, 'UTF-8', true);?>
</li>
            <?php } else { ?>
              <?php $_smarty_tpl->_assignInScope('address_words', smarty_modifier_explode(" ",$_smarty_tpl->tpl_vars['field_item']->value));?>
              <li><?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['address_words']->value, 'word_item', false, NULL, 'word_loop', array (
  'first' => true,
  'index' => true,
));
$_smarty_tpl->tpl_vars['word_item']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['word_item']->value) {
$_smarty_tpl->tpl_vars['word_item']->do_else = false;
$_smarty_tpl->tpl_vars['__smarty_foreach_word_loop']->value['index']++;
$_smarty_tpl->tpl_vars['__smarty_foreach_word_loop']->value['first'] = !$_smarty_tpl->tpl_vars['__smarty_foreach_word_loop']->value['index'];
if (!(isset($_smarty_tpl->tpl_vars['__smarty_foreach_word_loop']->value['first']) ? $_smarty_tpl->tpl_vars['__smarty_foreach_word_loop']->value['first'] : null)) {?> <?php }?><span class="address_<?php echo smarty_modifier_replace($_smarty_tpl->tpl_vars['word_item']->value,',','');?>
"><?php echo htmlspecialchars((string)$_smarty_tpl->tpl_vars['deliveryAddressFormatedValues']->value[smarty_modifier_replace($_smarty_tpl->tpl_vars['word_item']->value,',','')], ENT_QUOTES, 'UTF-8', true);?>
</span><?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?></li>
            <?php }?>
          <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
        </ul>
      </div>
      <div class="col-xs-12 col-sm-6">
        <ul class="address <?php if ($_smarty_tpl->tpl_vars['order']->value->isVirtual()) {?>full_width<?php }?> box">
          <li><h3 class="page-subheading"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Invoice address'),$_smarty_tpl ) );?>
 (<?php echo $_smarty_tpl->tpl_vars['address_invoice']->value->alias;?>
)</h3></li>
          <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['inv_adr_fields']->value, 'field_item', false, NULL, 'inv_loop', array (
));
$_smarty_tpl->tpl_vars['field_item']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['field_item']->value) {
$_smarty_tpl->tpl_vars['field_item']->do_else = false;
?>
            <?php if ($_smarty_tpl->tpl_vars['field_item']->value == "company" && (isset($_smarty_tpl->tpl_vars['address_invoice']->value->company))) {?><li class="address_company"><?php echo htmlspecialchars((string)$_smarty_tpl->tpl_vars['address_invoice']->value->company, ENT_QUOTES, 'UTF-8', true);?>
</li>
            <?php } elseif ($_smarty_tpl->tpl_vars['field_item']->value == "address2" && $_smarty_tpl->tpl_vars['address_invoice']->value->address2) {?><li class="address_address2"><?php echo htmlspecialchars((string)$_smarty_tpl->tpl_vars['address_invoice']->value->address2, ENT_QUOTES, 'UTF-8', true);?>
</li>
            <?php } elseif ($_smarty_tpl->tpl_vars['field_item']->value == "phone_mobile" && $_smarty_tpl->tpl_vars['address_invoice']->value->phone_mobile) {?><li class="address_phone_mobile"><?php echo htmlspecialchars((string)$_smarty_tpl->tpl_vars['address_invoice']->value->phone_mobile, ENT_QUOTES, 'UTF-8', true);?>
</li>
            <?php } else { ?>
              <?php $_smarty_tpl->_assignInScope('address_words', smarty_modifier_explode(" ",$_smarty_tpl->tpl_vars['field_item']->value));?>
              <li><?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['address_words']->value, 'word_item', false, NULL, 'word_loop', array (
  'first' => true,
  'index' => true,
));
$_smarty_tpl->tpl_vars['word_item']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['word_item']->value) {
$_smarty_tpl->tpl_vars['word_item']->do_else = false;
$_smarty_tpl->tpl_vars['__smarty_foreach_word_loop']->value['index']++;
$_smarty_tpl->tpl_vars['__smarty_foreach_word_loop']->value['first'] = !$_smarty_tpl->tpl_vars['__smarty_foreach_word_loop']->value['index'];
if (!(isset($_smarty_tpl->tpl_vars['__smarty_foreach_word_loop']->value['first']) ? $_smarty_tpl->tpl_vars['__smarty_foreach_word_loop']->value['first'] : null)) {?> <?php }?><span class="address_<?php echo smarty_modifier_replace($_smarty_tpl->tpl_vars['word_item']->value,',','');?>
"><?php echo htmlspecialchars((string)$_smarty_tpl->tpl_vars['invoiceAddressFormatedValues']->value[smarty_modifier_replace($_smarty_tpl->tpl_vars['word_item']->value,',','')], ENT_QUOTES, 'UTF-8', true);?>
</span><?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?></li>
            <?php }?>
          <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
        </ul>
      </div>
    </div>
  </div>
  <?php echo $_smarty_tpl->tpl_vars['HOOK_ORDERDETAILDISPLAYED']->value;?>

  <?php if (!$_smarty_tpl->tpl_vars['is_guest']->value) {?><form action="<?php echo htmlspecialchars((string)$_smarty_tpl->tpl_vars['link']->value->getPageLink('order-follow',true), ENT_QUOTES, 'UTF-8', true);?>
" method="post"><?php }?>
  <div id="order-detail-content" class="table_block table-responsive">
    <table class="table table-bordered">
      <thead>
      <tr>
        <?php if ($_smarty_tpl->tpl_vars['return_allowed']->value) {?><th class="order_cb"><div class="checkbox"><label><input type="checkbox"><span class="label-text"></span></label</div></th><?php }?>
        <th><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Reference'),$_smarty_tpl ) );?>
</th>
        <th><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Product'),$_smarty_tpl ) );?>
</th>
        <th><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Quantity'),$_smarty_tpl ) );?>
</th>
        <?php if ($_smarty_tpl->tpl_vars['order']->value->hasProductReturned()) {?>
          <th><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Returned'),$_smarty_tpl ) );?>
</th>
        <?php }?>
        <th><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Unit price'),$_smarty_tpl ) );?>
</th>
        <th><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Total price'),$_smarty_tpl ) );?>
</th>
      </tr>
      </thead>
      <tfoot>
      <?php if ($_smarty_tpl->tpl_vars['priceDisplay']->value && $_smarty_tpl->tpl_vars['use_tax']->value) {?>
        <tr>
          <td colspan="<?php if ($_smarty_tpl->tpl_vars['return_allowed']->value) {?>2<?php } else { ?>1<?php }?>">
            <strong><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Items (tax excl.)'),$_smarty_tpl ) );?>
</strong>
          </td>
          <td colspan="<?php if ($_smarty_tpl->tpl_vars['order']->value->hasProductReturned()) {?>5<?php } else { ?>4<?php }?>">
            <span class="price"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['displayWtPriceWithCurrency'][0], array( array('price'=>$_smarty_tpl->tpl_vars['order']->value->getTotalProductsWithoutTaxes(),'currency'=>$_smarty_tpl->tpl_vars['currency']->value),$_smarty_tpl ) );?>
</span>
          </td>
        </tr>
      <?php }?>
      <tr>
        <td colspan="<?php if ($_smarty_tpl->tpl_vars['return_allowed']->value) {?>2<?php } else { ?>1<?php }?>">
          <strong><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Items'),$_smarty_tpl ) );?>
 <?php if ($_smarty_tpl->tpl_vars['use_tax']->value) {
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'(tax incl.)'),$_smarty_tpl ) );
}?> </strong>
        </td>
        <td colspan="<?php if ($_smarty_tpl->tpl_vars['order']->value->hasProductReturned()) {?>5<?php } else { ?>4<?php }?>">
          <span class="price"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['displayWtPriceWithCurrency'][0], array( array('price'=>$_smarty_tpl->tpl_vars['order']->value->getTotalProductsWithTaxes(),'currency'=>$_smarty_tpl->tpl_vars['currency']->value),$_smarty_tpl ) );?>
</span>
        </td>
      </tr>
      <?php if ($_smarty_tpl->tpl_vars['order']->value->total_discounts > 0) {?>
        <tr>
          <td colspan="<?php if ($_smarty_tpl->tpl_vars['return_allowed']->value) {?>2<?php } else { ?>1<?php }?>">
            <strong><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Total vouchers'),$_smarty_tpl ) );?>
</strong>
          </td>
          <td colspan="<?php if ($_smarty_tpl->tpl_vars['order']->value->hasProductReturned()) {?>5<?php } else { ?>4<?php }?>">
            <span class="price-discount"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['displayWtPriceWithCurrency'][0], array( array('price'=>$_smarty_tpl->tpl_vars['order']->value->total_discounts,'currency'=>$_smarty_tpl->tpl_vars['currency']->value,'convert'=>1),$_smarty_tpl ) );?>
</span>
          </td>
        </tr>
      <?php }?>
      <?php if ($_smarty_tpl->tpl_vars['order']->value->total_wrapping > 0) {?>
        <tr>
          <td colspan="<?php if ($_smarty_tpl->tpl_vars['return_allowed']->value) {?>2<?php } else { ?>1<?php }?>">
            <strong><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Total gift wrapping cost'),$_smarty_tpl ) );?>
</strong>
          </td>
          <td colspan="<?php if ($_smarty_tpl->tpl_vars['order']->value->hasProductReturned()) {?>5<?php } else { ?>4<?php }?>">
            <span class="price-wrapping"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['displayWtPriceWithCurrency'][0], array( array('price'=>$_smarty_tpl->tpl_vars['order']->value->total_wrapping,'currency'=>$_smarty_tpl->tpl_vars['currency']->value),$_smarty_tpl ) );?>
</span>
          </td>
        </tr>
      <?php }?>
      <tr>
        <td colspan="<?php if ($_smarty_tpl->tpl_vars['return_allowed']->value) {?>2<?php } else { ?>1<?php }?>">
          <strong><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Shipping & handling'),$_smarty_tpl ) );?>
 <?php if ($_smarty_tpl->tpl_vars['use_tax']->value) {
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'(tax incl.)'),$_smarty_tpl ) );
}?> </strong>
        </td>
        <td colspan="<?php if ($_smarty_tpl->tpl_vars['order']->value->hasProductReturned()) {?>5<?php } else { ?>4<?php }?>">
          <span class="price-shipping"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['displayWtPriceWithCurrency'][0], array( array('price'=>$_smarty_tpl->tpl_vars['order']->value->total_shipping,'currency'=>$_smarty_tpl->tpl_vars['currency']->value),$_smarty_tpl ) );?>
</span>
        </td>
      </tr>
      <tr class="totalprice">
        <td colspan="<?php if ($_smarty_tpl->tpl_vars['return_allowed']->value) {?>2<?php } else { ?>1<?php }?>">
          <strong><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Total'),$_smarty_tpl ) );?>
</strong>
        </td>
        <td colspan="<?php if ($_smarty_tpl->tpl_vars['order']->value->hasProductReturned()) {?>5<?php } else { ?>4<?php }?>">
          <span class="price"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['displayWtPriceWithCurrency'][0], array( array('price'=>$_smarty_tpl->tpl_vars['order']->value->total_paid,'currency'=>$_smarty_tpl->tpl_vars['currency']->value),$_smarty_tpl ) );?>
</span>
        </td>
      </tr>
      </tfoot>
      <tbody>
      <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['products']->value, 'product', false, NULL, 'products', array (
  'index' => true,
));
$_smarty_tpl->tpl_vars['product']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['product']->value) {
$_smarty_tpl->tpl_vars['product']->do_else = false;
$_smarty_tpl->tpl_vars['__smarty_foreach_products']->value['index']++;
?>
        <?php if (!(isset($_smarty_tpl->tpl_vars['product']->value['deleted']))) {?>
          <?php $_smarty_tpl->_assignInScope('productId', $_smarty_tpl->tpl_vars['product']->value['product_id']);?>
          <?php $_smarty_tpl->_assignInScope('productAttributeId', $_smarty_tpl->tpl_vars['product']->value['product_attribute_id']);?>
          <?php if ((isset($_smarty_tpl->tpl_vars['product']->value['customizedDatas']))) {?>
            <?php $_smarty_tpl->_assignInScope('productQuantity', $_smarty_tpl->tpl_vars['product']->value['product_quantity']-$_smarty_tpl->tpl_vars['product']->value['customizationQuantityTotal']);?>
          <?php } else { ?>
            <?php $_smarty_tpl->_assignInScope('productQuantity', $_smarty_tpl->tpl_vars['product']->value['product_quantity']);?>
          <?php }?>

          <?php if ((isset($_smarty_tpl->tpl_vars['product']->value['customizedDatas']))) {?>
            <tr>
              <?php if ($_smarty_tpl->tpl_vars['return_allowed']->value) {?><td class="order_cb"></td><?php }?>
              <td><label for="cb_<?php echo intval($_smarty_tpl->tpl_vars['product']->value['id_order_detail']);?>
"><?php if ($_smarty_tpl->tpl_vars['product']->value['product_reference']) {
echo htmlspecialchars((string)$_smarty_tpl->tpl_vars['product']->value['product_reference'], ENT_QUOTES, 'UTF-8', true);
} else { ?>--<?php }?></label></td>
              <td class="bold">
                <label for="cb_<?php echo intval($_smarty_tpl->tpl_vars['product']->value['id_order_detail']);?>
"><?php echo htmlspecialchars((string)$_smarty_tpl->tpl_vars['product']->value['product_name'], ENT_QUOTES, 'UTF-8', true);?>
</label>
              </td>
              <td>
                <input class="order_qte_input form-control text-center"  name="order_qte_input[<?php echo (isset($_smarty_tpl->tpl_vars['__smarty_foreach_products']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_foreach_products']->value['index'] : null);?>
]" type="text" size="2" value="<?php echo intval($_smarty_tpl->tpl_vars['product']->value['customizationQuantityTotal']);?>
">
                <div class="clearfix return_quantity_buttons">
                  <a href="#" class="return_quantity_down btn btn-default button-minus"><i class="icon icon-fw icon-minus"></i></a>
                  <a href="#" class="return_quantity_up btn btn-default button-plus"><i class="icon icon-fw icon-plus"></i></a>
                </div>
                <label for="cb_<?php echo intval($_smarty_tpl->tpl_vars['product']->value['id_order_detail']);?>
"><span class="order_qte_span editable"><?php echo intval($_smarty_tpl->tpl_vars['product']->value['customizationQuantityTotal']);?>
</span></label></td>
              <?php if ($_smarty_tpl->tpl_vars['order']->value->hasProductReturned()) {?>
                <td>
                  <?php echo $_smarty_tpl->tpl_vars['product']->value['qty_returned'];?>

                </td>
              <?php }?>
              <td>
                <label class="price" for="cb_<?php echo intval($_smarty_tpl->tpl_vars['product']->value['id_order_detail']);?>
">
                  <?php if ($_smarty_tpl->tpl_vars['group_use_tax']->value) {?>
                    <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['convertPriceWithCurrency'][0], array( array('price'=>$_smarty_tpl->tpl_vars['product']->value['unit_price_tax_incl'],'currency'=>$_smarty_tpl->tpl_vars['currency']->value),$_smarty_tpl ) );?>

                  <?php } else { ?>
                    <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['convertPriceWithCurrency'][0], array( array('price'=>$_smarty_tpl->tpl_vars['product']->value['unit_price_tax_excl'],'currency'=>$_smarty_tpl->tpl_vars['currency']->value),$_smarty_tpl ) );?>

                  <?php }?>
                </label>
              </td>
              <td>
                <label class="price" for="cb_<?php echo intval($_smarty_tpl->tpl_vars['product']->value['id_order_detail']);?>
">
                  <?php if ((isset($_smarty_tpl->tpl_vars['customizedDatas']->value[$_smarty_tpl->tpl_vars['productId']->value][$_smarty_tpl->tpl_vars['productAttributeId']->value]))) {?>
                    <?php if ($_smarty_tpl->tpl_vars['group_use_tax']->value) {?>
                      <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['convertPriceWithCurrency'][0], array( array('price'=>$_smarty_tpl->tpl_vars['product']->value['total_customization_wt'],'currency'=>$_smarty_tpl->tpl_vars['currency']->value),$_smarty_tpl ) );?>

                    <?php } else { ?>
                      <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['convertPriceWithCurrency'][0], array( array('price'=>$_smarty_tpl->tpl_vars['product']->value['total_customization'],'currency'=>$_smarty_tpl->tpl_vars['currency']->value),$_smarty_tpl ) );?>

                    <?php }?>
                  <?php } else { ?>
                    <?php if ($_smarty_tpl->tpl_vars['group_use_tax']->value) {?>
                      <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['convertPriceWithCurrency'][0], array( array('price'=>$_smarty_tpl->tpl_vars['product']->value['total_price_tax_incl'],'currency'=>$_smarty_tpl->tpl_vars['currency']->value),$_smarty_tpl ) );?>

                    <?php } else { ?>
                      <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['convertPriceWithCurrency'][0], array( array('price'=>$_smarty_tpl->tpl_vars['product']->value['total_price_tax_excl'],'currency'=>$_smarty_tpl->tpl_vars['currency']->value),$_smarty_tpl ) );?>

                    <?php }?>
                  <?php }?>
                </label>
              </td>
            </tr>
            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['product']->value['customizedDatas'], 'customizationPerAddress');
$_smarty_tpl->tpl_vars['customizationPerAddress']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['customizationPerAddress']->value) {
$_smarty_tpl->tpl_vars['customizationPerAddress']->do_else = false;
?>
              <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['customizationPerAddress']->value, 'customization', false, 'customizationId');
$_smarty_tpl->tpl_vars['customization']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['customizationId']->value => $_smarty_tpl->tpl_vars['customization']->value) {
$_smarty_tpl->tpl_vars['customization']->do_else = false;
?>
                <tr>
                  <?php if ($_smarty_tpl->tpl_vars['return_allowed']->value) {?><td class="order_cb"><input type="checkbox" id="cb_<?php echo intval($_smarty_tpl->tpl_vars['product']->value['id_order_detail']);?>
" name="customization_ids[<?php echo intval($_smarty_tpl->tpl_vars['product']->value['id_order_detail']);?>
][]" value="<?php echo intval($_smarty_tpl->tpl_vars['customizationId']->value);?>
"></td><?php }?>
                  <td colspan="2">
                    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['customization']->value['datas'], 'datas', false, 'type');
$_smarty_tpl->tpl_vars['datas']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['type']->value => $_smarty_tpl->tpl_vars['datas']->value) {
$_smarty_tpl->tpl_vars['datas']->do_else = false;
?>
                      <?php if ($_smarty_tpl->tpl_vars['type']->value == $_smarty_tpl->tpl_vars['CUSTOMIZE_FILE']->value) {?>
                        <ul class="customizationUploaded">
                          <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['datas']->value, 'data');
$_smarty_tpl->tpl_vars['data']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['data']->value) {
$_smarty_tpl->tpl_vars['data']->do_else = false;
?>
                            <li><img src="<?php echo $_smarty_tpl->tpl_vars['pic_dir']->value;
echo $_smarty_tpl->tpl_vars['data']->value['value'];?>
_small" alt="" class="customizationUploaded"></li>
                          <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                        </ul>
                      <?php } elseif ($_smarty_tpl->tpl_vars['type']->value == $_smarty_tpl->tpl_vars['CUSTOMIZE_TEXTFIELD']->value) {?>
                        <ul class="typedText"><?php echo smarty_function_counter(array('start'=>0,'print'=>false),$_smarty_tpl);?>

                          <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['datas']->value, 'data');
$_smarty_tpl->tpl_vars['data']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['data']->value) {
$_smarty_tpl->tpl_vars['data']->do_else = false;
?>
                            <?php $_smarty_tpl->_assignInScope('customizationFieldName', ("Text #").($_smarty_tpl->tpl_vars['data']->value['id_customization_field']));?>
                            <li><?php echo (($tmp = $_smarty_tpl->tpl_vars['data']->value['name'] ?? null)===null||$tmp==='' ? $_smarty_tpl->tpl_vars['customizationFieldName']->value ?? null : $tmp);?>
 : <?php echo $_smarty_tpl->tpl_vars['data']->value['value'];?>
</li>
                          <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                        </ul>
                      <?php }?>
                    <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                  </td>
                  <td>
                    <input class="order_qte_input form-control text-center" name="customization_qty_input[<?php echo intval($_smarty_tpl->tpl_vars['customizationId']->value);?>
]" type="text" size="2" value="<?php echo intval($_smarty_tpl->tpl_vars['customization']->value['quantity']);?>
">
                    <div class="clearfix return_quantity_buttons">
                      <a href="#" class="return_quantity_down btn btn-default button-minus"><i class="icon icon-fw icon-minus"></i></a>
                      <a href="#" class="return_quantity_up btn btn-default button-plus"><i class="icon icon-fw icon-plus"></i></a>
                    </div>
                    <label for="cb_<?php echo intval($_smarty_tpl->tpl_vars['product']->value['id_order_detail']);?>
"><span class="order_qte_span editable"><?php echo intval($_smarty_tpl->tpl_vars['customization']->value['quantity']);?>
</span></label>
                  </td>
                  <td colspan="2"></td>
                </tr>
              <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
            <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
          <?php }?>

          <?php if ($_smarty_tpl->tpl_vars['product']->value['product_quantity'] > $_smarty_tpl->tpl_vars['product']->value['customizationQuantityTotal']) {?>
            <tr>
                <?php if ($_smarty_tpl->tpl_vars['return_allowed']->value) {?><td class="order_cb"><div class="checkbox"><label for="cb_<?php echo intval($_smarty_tpl->tpl_vars['product']->value['id_order_detail']);?>
"><input type="checkbox" id="cb_<?php echo intval($_smarty_tpl->tpl_vars['product']->value['id_order_detail']);?>
" name="ids_order_detail[<?php echo intval($_smarty_tpl->tpl_vars['product']->value['id_order_detail']);?>
]" value="<?php echo intval($_smarty_tpl->tpl_vars['product']->value['id_order_detail']);?>
"><span class="label-text"></span></label></div></td><?php }?>
              <td><label for="cb_<?php echo intval($_smarty_tpl->tpl_vars['product']->value['id_order_detail']);?>
"><?php if ($_smarty_tpl->tpl_vars['product']->value['product_reference']) {
echo htmlspecialchars((string)$_smarty_tpl->tpl_vars['product']->value['product_reference'], ENT_QUOTES, 'UTF-8', true);
} else { ?>--<?php }?></label></td>
              <td class="bold">
                <label for="cb_<?php echo intval($_smarty_tpl->tpl_vars['product']->value['id_order_detail']);?>
">
                  <?php if ($_smarty_tpl->tpl_vars['product']->value['download_hash'] && $_smarty_tpl->tpl_vars['logable']->value && $_smarty_tpl->tpl_vars['product']->value['display_filename'] != '' && $_smarty_tpl->tpl_vars['product']->value['product_quantity_refunded'] == 0 && $_smarty_tpl->tpl_vars['product']->value['product_quantity_return'] == 0) {?>
                  <?php if ((isset($_smarty_tpl->tpl_vars['is_guest']->value)) && $_smarty_tpl->tpl_vars['is_guest']->value) {?>
                  <a href="<?php ob_start();
echo htmlspecialchars((string)$_smarty_tpl->tpl_vars['product']->value['filename'], ENT_QUOTES, 'UTF-8', true);
$_prefixVariable1=ob_get_clean();
ob_start();
echo htmlspecialchars((string)$_smarty_tpl->tpl_vars['product']->value['download_hash'], ENT_QUOTES, 'UTF-8', true);
$_prefixVariable2=ob_get_clean();
echo htmlspecialchars((string)$_smarty_tpl->tpl_vars['link']->value->getPageLink('get-file',true,NULL,"key=".$_prefixVariable1."-".$_prefixVariable2."&amp;id_order=".((string)$_smarty_tpl->tpl_vars['order']->value->id)."&secure_key=".((string)$_smarty_tpl->tpl_vars['order']->value->secure_key)), ENT_QUOTES, 'UTF-8', true);?>
" title="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Download this product'),$_smarty_tpl ) );?>
">
                    <?php } else { ?>
                    <a href="<?php ob_start();
echo htmlspecialchars((string)$_smarty_tpl->tpl_vars['product']->value['filename'], ENT_QUOTES, 'UTF-8', true);
$_prefixVariable3=ob_get_clean();
ob_start();
echo htmlspecialchars((string)$_smarty_tpl->tpl_vars['product']->value['download_hash'], ENT_QUOTES, 'UTF-8', true);
$_prefixVariable4=ob_get_clean();
echo htmlspecialchars((string)$_smarty_tpl->tpl_vars['link']->value->getPageLink('get-file',true,NULL,"key=".$_prefixVariable3."-".$_prefixVariable4), ENT_QUOTES, 'UTF-8', true);?>
" title="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Download this product'),$_smarty_tpl ) );?>
">
                      <?php }?>
                      <img src="<?php echo $_smarty_tpl->tpl_vars['img_dir']->value;?>
icon/download_product.gif" class="icon" alt="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Download product'),$_smarty_tpl ) );?>
">
                    </a>
                    <?php if ((isset($_smarty_tpl->tpl_vars['is_guest']->value)) && $_smarty_tpl->tpl_vars['is_guest']->value) {?>
                      <a href="<?php ob_start();
echo htmlspecialchars((string)$_smarty_tpl->tpl_vars['product']->value['filename'], ENT_QUOTES, 'UTF-8', true);
$_prefixVariable5=ob_get_clean();
ob_start();
echo htmlspecialchars((string)$_smarty_tpl->tpl_vars['product']->value['download_hash'], ENT_QUOTES, 'UTF-8', true);
$_prefixVariable6=ob_get_clean();
echo htmlspecialchars((string)$_smarty_tpl->tpl_vars['link']->value->getPageLink('get-file',true,NULL,"key=".$_prefixVariable5."-".$_prefixVariable6."&id_order=".((string)$_smarty_tpl->tpl_vars['order']->value->id)."&secure_key=".((string)$_smarty_tpl->tpl_vars['order']->value->secure_key)), ENT_QUOTES, 'UTF-8', true);?>
" title="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Download this product'),$_smarty_tpl ) );?>
"> <?php echo htmlspecialchars((string)$_smarty_tpl->tpl_vars['product']->value['product_name'], ENT_QUOTES, 'UTF-8', true);?>
 </a>
                    <?php } else { ?>
                      <a href="<?php ob_start();
echo htmlspecialchars((string)$_smarty_tpl->tpl_vars['product']->value['filename'], ENT_QUOTES, 'UTF-8', true);
$_prefixVariable7=ob_get_clean();
ob_start();
echo htmlspecialchars((string)$_smarty_tpl->tpl_vars['product']->value['download_hash'], ENT_QUOTES, 'UTF-8', true);
$_prefixVariable8=ob_get_clean();
echo htmlspecialchars((string)$_smarty_tpl->tpl_vars['link']->value->getPageLink('get-file',true,NULL,"key=".$_prefixVariable7."-".$_prefixVariable8), ENT_QUOTES, 'UTF-8', true);?>
" title="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Download this product'),$_smarty_tpl ) );?>
"> <?php echo htmlspecialchars((string)$_smarty_tpl->tpl_vars['product']->value['product_name'], ENT_QUOTES, 'UTF-8', true);?>
 </a>
                    <?php }?>
                    <?php } else { ?>
                    <?php echo htmlspecialchars((string)$_smarty_tpl->tpl_vars['product']->value['product_name'], ENT_QUOTES, 'UTF-8', true);?>

                    <?php }?>
                </label>
              </td>
              <td class="return_quantity">
                <input class="order_qte_input form-control text-center" name="order_qte_input[<?php echo intval($_smarty_tpl->tpl_vars['product']->value['id_order_detail']);?>
]" type="text" size="2" value="<?php echo intval($_smarty_tpl->tpl_vars['productQuantity']->value);?>
">
                <div class="clearfix return_quantity_buttons pull-left">
                  <a href="#" class="return_quantity_down btn btn-default button-minus"><i class="icon icon-fw icon-minus"></i></a>
                  <a href="#" class="return_quantity_up btn btn-default button-plus"><i class="icon icon-fw icon-plus"></i></a>
                </div>
                <label for="cb_<?php echo intval($_smarty_tpl->tpl_vars['product']->value['id_order_detail']);?>
"><span class="order_qte_span editable"><?php echo intval($_smarty_tpl->tpl_vars['productQuantity']->value);?>
</span></label></td>
              <?php if ($_smarty_tpl->tpl_vars['order']->value->hasProductReturned()) {?>
                <td>
                  <?php echo $_smarty_tpl->tpl_vars['product']->value['qty_returned'];?>

                </td>
              <?php }?>
              <td class="price">
                <label for="cb_<?php echo intval($_smarty_tpl->tpl_vars['product']->value['id_order_detail']);?>
">
                  <?php if ($_smarty_tpl->tpl_vars['group_use_tax']->value) {?>
                    <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['convertPriceWithCurrency'][0], array( array('price'=>$_smarty_tpl->tpl_vars['product']->value['unit_price_tax_incl'],'currency'=>$_smarty_tpl->tpl_vars['currency']->value),$_smarty_tpl ) );?>

                  <?php } else { ?>
                    <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['convertPriceWithCurrency'][0], array( array('price'=>$_smarty_tpl->tpl_vars['product']->value['unit_price_tax_excl'],'currency'=>$_smarty_tpl->tpl_vars['currency']->value),$_smarty_tpl ) );?>

                  <?php }?>
                </label>
              </td>
              <td class="price">
                <label for="cb_<?php echo intval($_smarty_tpl->tpl_vars['product']->value['id_order_detail']);?>
">
                  <?php if ($_smarty_tpl->tpl_vars['group_use_tax']->value) {?>
                    <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['convertPriceWithCurrency'][0], array( array('price'=>$_smarty_tpl->tpl_vars['product']->value['total_price_tax_incl'],'currency'=>$_smarty_tpl->tpl_vars['currency']->value),$_smarty_tpl ) );?>

                  <?php } else { ?>
                    <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['convertPriceWithCurrency'][0], array( array('price'=>$_smarty_tpl->tpl_vars['product']->value['total_price_tax_excl'],'currency'=>$_smarty_tpl->tpl_vars['currency']->value),$_smarty_tpl ) );?>

                  <?php }?>
                </label>
              </td>
            </tr>
          <?php }?>
        <?php }?>
      <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
      <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['discounts']->value, 'discount');
$_smarty_tpl->tpl_vars['discount']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['discount']->value) {
$_smarty_tpl->tpl_vars['discount']->do_else = false;
?>
        <tr>
          <td><?php echo htmlspecialchars((string)$_smarty_tpl->tpl_vars['discount']->value['name'], ENT_QUOTES, 'UTF-8', true);?>
</td>
          <td><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Voucher'),$_smarty_tpl ) );?>
 <?php echo htmlspecialchars((string)$_smarty_tpl->tpl_vars['discount']->value['name'], ENT_QUOTES, 'UTF-8', true);?>
</td>
          <td><span class="order_qte_span editable">1</span></td>
          <td>&nbsp;</td>
          <td><?php if ($_smarty_tpl->tpl_vars['discount']->value['value'] != 0.00) {?>-<?php }
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['convertPriceWithCurrency'][0], array( array('price'=>$_smarty_tpl->tpl_vars['discount']->value['value'],'currency'=>$_smarty_tpl->tpl_vars['currency']->value),$_smarty_tpl ) );?>
</td>
          <?php if ($_smarty_tpl->tpl_vars['return_allowed']->value) {?>
            <td>&nbsp;</td>
          <?php }?>
        </tr>
      <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
      </tbody>
    </table>
  </div>
  <?php if ($_smarty_tpl->tpl_vars['return_allowed']->value) {?>
    <div id="returnOrderMessage">
      <h3 class="page-heading"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Merchandise return'),$_smarty_tpl ) );?>
</h3>
      <p><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'If you wish to return one or more products, please mark the corresponding boxes and provide an explanation for the return. When complete, click the button below.'),$_smarty_tpl ) );?>
</p>
      <div class="form-group">
        <textarea class="form-control" cols="67" rows="3" name="returnText"></textarea>
      </div>
      <div class="form-group">
        <button type="submit" name="submitReturnMerchandise" class="btn btn-success"><span><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Make an RMA slip'),$_smarty_tpl ) );?>
 <i class="icon icon-chevron-right"></i></span></button>
        <input type="hidden" class="hidden" value="<?php echo intval($_smarty_tpl->tpl_vars['order']->value->id);?>
" name="id_order">
      </div>
    </div>
  <?php }?>
  <?php if (!$_smarty_tpl->tpl_vars['is_guest']->value) {?></form><?php }?>
  <?php $_smarty_tpl->_assignInScope('carriers', $_smarty_tpl->tpl_vars['order']->value->getShipping());?>
  <?php if (count($_smarty_tpl->tpl_vars['carriers']->value) > 0 && (isset($_smarty_tpl->tpl_vars['carriers']->value[0]['carrier_name'])) && $_smarty_tpl->tpl_vars['carriers']->value[0]['carrier_name']) {?>
    <div class="table-responsive">
      <table class="table table-bordered footab">
        <thead>
        <tr>
          <th><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Date'),$_smarty_tpl ) );?>
</th>
          <th data-sort-ignore="true"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Carrier'),$_smarty_tpl ) );?>
</th>
          <th data-hide="phone"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Weight'),$_smarty_tpl ) );?>
</th>
          <th data-hide="phone"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Shipping cost'),$_smarty_tpl ) );?>
</th>
          <th data-hide="phone" data-sort-ignore="true"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Tracking number'),$_smarty_tpl ) );?>
</th>
        </tr>
        </thead>
        <tbody>
        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['carriers']->value, 'line');
$_smarty_tpl->tpl_vars['line']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['line']->value) {
$_smarty_tpl->tpl_vars['line']->do_else = false;
?>
          <tr>
            <td data-value="<?php echo smarty_modifier_regex_replace($_smarty_tpl->tpl_vars['line']->value['date_add'],"/[\-\:\ ]/",'');?>
"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['dateFormat'][0], array( array('date'=>$_smarty_tpl->tpl_vars['line']->value['date_add'],'full'=>0),$_smarty_tpl ) );?>
</td>
            <td><?php echo $_smarty_tpl->tpl_vars['line']->value['carrier_name'];?>
</td>
            <td data-value="<?php if ($_smarty_tpl->tpl_vars['line']->value['weight'] > 0) {
echo sprintf("%.3f",$_smarty_tpl->tpl_vars['line']->value['weight']);
} else { ?>0<?php }?>"><?php if ($_smarty_tpl->tpl_vars['line']->value['weight'] > 0) {
echo sprintf("%.3f",$_smarty_tpl->tpl_vars['line']->value['weight']);?>
 <?php echo Configuration::get('PS_WEIGHT_UNIT');
} else { ?>-<?php }?></td>
            <td data-value="<?php if ($_smarty_tpl->tpl_vars['order']->value->getTaxCalculationMethod() == (defined('PS_TAX_INC') ? constant('PS_TAX_INC') : null)) {
echo $_smarty_tpl->tpl_vars['line']->value['shipping_cost_tax_incl'];
} else {
echo $_smarty_tpl->tpl_vars['line']->value['shipping_cost_tax_excl'];
}?>"><?php if ($_smarty_tpl->tpl_vars['order']->value->getTaxCalculationMethod() == (defined('PS_TAX_INC') ? constant('PS_TAX_INC') : null)) {
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['displayPrice'][0], array( array('price'=>$_smarty_tpl->tpl_vars['line']->value['shipping_cost_tax_incl'],'currency'=>$_smarty_tpl->tpl_vars['currency']->value->id),$_smarty_tpl ) );
} else {
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['displayPrice'][0], array( array('price'=>$_smarty_tpl->tpl_vars['line']->value['shipping_cost_tax_excl'],'currency'=>$_smarty_tpl->tpl_vars['currency']->value->id),$_smarty_tpl ) );
}?></td>
            <td>
              <span class="shipping_number_show"><?php if ($_smarty_tpl->tpl_vars['line']->value['tracking_number']) {
if ($_smarty_tpl->tpl_vars['line']->value['url'] && $_smarty_tpl->tpl_vars['line']->value['tracking_number']) {?><a href="<?php echo smarty_modifier_replace($_smarty_tpl->tpl_vars['line']->value['url'],'@',$_smarty_tpl->tpl_vars['line']->value['tracking_number']);?>
"><?php echo $_smarty_tpl->tpl_vars['line']->value['tracking_number'];?>
</a><?php } else {
echo $_smarty_tpl->tpl_vars['line']->value['tracking_number'];
}
} else { ?>-<?php }?></span>
            </td>
          </tr>
        <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
        </tbody>
      </table>
    </div>
  <?php }?>
  <?php if (!$_smarty_tpl->tpl_vars['is_guest']->value) {?>
    <?php if (count($_smarty_tpl->tpl_vars['messages']->value)) {?>
      <h3 class="page-heading"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Messages'),$_smarty_tpl ) );?>
</h3>
      <div class="table_block table-responsive">
        <table class="detail_step_by_step table table-bordered">
          <thead>
          <tr>
            <th style="width:150px;"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'From'),$_smarty_tpl ) );?>
</th>
            <th><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Message'),$_smarty_tpl ) );?>
</th>
          </tr>
          </thead>
          <tbody>
          <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['messages']->value, 'message', false, NULL, 'messageList', array (
));
$_smarty_tpl->tpl_vars['message']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['message']->value) {
$_smarty_tpl->tpl_vars['message']->do_else = false;
?>
            <tr>
              <td>
                <strong>
                  <?php if ((isset($_smarty_tpl->tpl_vars['message']->value['elastname'])) && $_smarty_tpl->tpl_vars['message']->value['elastname']) {?>
                    <?php echo htmlspecialchars((string)$_smarty_tpl->tpl_vars['message']->value['efirstname'], ENT_QUOTES, 'UTF-8', true);?>
 <?php echo htmlspecialchars((string)$_smarty_tpl->tpl_vars['message']->value['elastname'], ENT_QUOTES, 'UTF-8', true);?>

                  <?php } elseif ($_smarty_tpl->tpl_vars['message']->value['clastname']) {?>
                    <?php echo htmlspecialchars((string)$_smarty_tpl->tpl_vars['message']->value['cfirstname'], ENT_QUOTES, 'UTF-8', true);?>
 <?php echo htmlspecialchars((string)$_smarty_tpl->tpl_vars['message']->value['clastname'], ENT_QUOTES, 'UTF-8', true);?>

                  <?php } else { ?>
                    <?php echo htmlspecialchars((string)$_smarty_tpl->tpl_vars['shop_name']->value, ENT_QUOTES, 'UTF-8', true);?>

                  <?php }?>
                </strong>
                <br>
                <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['dateFormat'][0], array( array('date'=>$_smarty_tpl->tpl_vars['message']->value['date_add'],'full'=>1),$_smarty_tpl ) );?>

              </td>
              <td><?php echo nl2br(htmlspecialchars((string)$_smarty_tpl->tpl_vars['message']->value['message'], ENT_QUOTES, 'UTF-8', true));?>
</td>
            </tr>
          <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
          </tbody>
        </table>
      </div>
    <?php }?>
    <?php if ((isset($_smarty_tpl->tpl_vars['errors']->value)) && $_smarty_tpl->tpl_vars['errors']->value) {?>
      <div class="alert alert-danger">
        <p><?php if (count($_smarty_tpl->tpl_vars['errors']->value) > 1) {
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'There are %d errors','sprintf'=>count($_smarty_tpl->tpl_vars['errors']->value)),$_smarty_tpl ) );
} else {
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'There is %d error','sprintf'=>count($_smarty_tpl->tpl_vars['errors']->value)),$_smarty_tpl ) );
}?></p>
        <ol>
          <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['errors']->value, 'error', false, 'k');
$_smarty_tpl->tpl_vars['error']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['k']->value => $_smarty_tpl->tpl_vars['error']->value) {
$_smarty_tpl->tpl_vars['error']->do_else = false;
?>
            <li><?php echo $_smarty_tpl->tpl_vars['error']->value;?>
</li>
          <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
        </ol>
      </div>
    <?php }?>
    <?php if ((isset($_smarty_tpl->tpl_vars['message_confirmation']->value)) && $_smarty_tpl->tpl_vars['message_confirmation']->value) {?>
      <div class="alert alert-success">
        <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Message successfully sent'),$_smarty_tpl ) );?>

      </div>
    <?php }?>
    <form action="<?php echo htmlspecialchars((string)$_smarty_tpl->tpl_vars['link']->value->getPageLink('order-detail',true), ENT_QUOTES, 'UTF-8', true);?>
" method="post" class="std" id="sendOrderMessage">
      <h3 class="page-heading"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Add a message'),$_smarty_tpl ) );?>
</h3>
      <p><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'If you would like to add a comment about your order, please write it in the field below.'),$_smarty_tpl ) );?>
</p>
      <div class="form-group">
        <label for="id_product"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Product'),$_smarty_tpl ) );?>
</label>
        <select name="id_product" class="form-control">
          <option value="0"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'-- Choose --'),$_smarty_tpl ) );?>
</option>
          <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['products']->value, 'product', false, NULL, 'products', array (
  'index' => true,
));
$_smarty_tpl->tpl_vars['product']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['product']->value) {
$_smarty_tpl->tpl_vars['product']->do_else = false;
$_smarty_tpl->tpl_vars['__smarty_foreach_products']->value['index']++;
?>
            <option value="<?php echo $_smarty_tpl->tpl_vars['product']->value['product_id'];?>
"><?php echo $_smarty_tpl->tpl_vars['product']->value['product_name'];?>
</option>
          <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
        </select>
      </div>
      <div class="form-group">
        <textarea class="form-control" cols="67" rows="3" name="msgText"></textarea>
      </div>
      <div class="submit">
        <input type="hidden" name="id_order" value="<?php echo intval($_smarty_tpl->tpl_vars['order']->value->id);?>
">
        <input type="submit" class="unvisible" name="submitMessage" value="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Send'),$_smarty_tpl ) );?>
">
        <button type="submit" name="submitMessage" class="btn btn-lg btn-success"><span><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Send'),$_smarty_tpl ) );?>
 <i class="icon icon-chevron-right"></i></span></button>
      </div>
    </form>
  <?php } else { ?>
    <div class="alert alert-info"><i class="icon icon-info-sign"></i> <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'You cannot return merchandise with a guest account'),$_smarty_tpl ) );?>
</div>
  <?php }
}
}
}
