<?php
/* Smarty version 4.2.1, created on 2023-01-12 14:28:41
  from 'D:\xampp\htdocs\shopw\themes\niara\shopping-cart.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.2.1',
  'unifunc' => 'content_63bfa89994da95_14369534',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '361c0c0b879a054676a7a486089fa1cfe6a38a4d' => 
    array (
      0 => 'D:\\xampp\\htdocs\\shopw\\themes\\niara\\shopping-cart.tpl',
      1 => 1664191549,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_63bfa89994da95_14369534 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'D:\\xampp\\htdocs\\shopw\\vendor\\smarty\\smarty\\libs\\plugins\\modifier.explode.php','function'=>'smarty_modifier_explode',),1=>array('file'=>'D:\\xampp\\htdocs\\shopw\\vendor\\smarty\\smarty\\libs\\plugins\\modifier.regex_replace.php','function'=>'smarty_modifier_regex_replace',),));
$_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, 'path', null, null);
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Your shopping cart'),$_smarty_tpl ) );
$_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);?>

<h1 id="cart_title" class="page-heading"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Shopping-cart summary'),$_smarty_tpl ) );?>

  <?php if (!(isset($_smarty_tpl->tpl_vars['empty']->value)) && !$_smarty_tpl->tpl_vars['PS_CATALOG_MODE']->value) {?>
    <div class="pull-right">
      <span class="heading-counter badge"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Your shopping cart contains:'),$_smarty_tpl ) );?>

        <span id="summary_products_quantity"><?php echo $_smarty_tpl->tpl_vars['productNumber']->value;?>
 <?php if ($_smarty_tpl->tpl_vars['productNumber']->value == 1) {
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'product'),$_smarty_tpl ) );
} else {
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'products'),$_smarty_tpl ) );
}?></span>
      </span>
    </div>
  <?php }?>
</h1>
<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>'displayCartTop'),$_smarty_tpl ) );?>

<?php if ((isset($_smarty_tpl->tpl_vars['account_created']->value))) {?>
  <div class="alert alert-success">
    <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Your account has been created.'),$_smarty_tpl ) );?>

  </div>
<?php }?>

<?php $_smarty_tpl->_assignInScope('current_step', 'summary');
$_smarty_tpl->_subTemplateRender(((string)$_smarty_tpl->tpl_vars['tpl_dir']->value)."./order-steps.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
$_smarty_tpl->_subTemplateRender(((string)$_smarty_tpl->tpl_vars['tpl_dir']->value)."./errors.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
?>

<?php if ((isset($_smarty_tpl->tpl_vars['empty']->value))) {?>
  <div class="alert alert-warning"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Your shopping cart is empty.'),$_smarty_tpl ) );?>
</div>
<?php } elseif ($_smarty_tpl->tpl_vars['PS_CATALOG_MODE']->value) {?>
  <div class="alert alert-warning"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'This store has not accepted your new order.'),$_smarty_tpl ) );?>
</div>
<?php } else { ?>
  <div id="emptyCartWarning" class="alert alert-warning unvisible"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Your shopping cart is empty.'),$_smarty_tpl ) );?>
</div>
    <?php ob_start();
if ($_smarty_tpl->tpl_vars['total_discounts']->value != 0) {
echo "1";
} else {
echo "0";
}
$_prefixVariable1=ob_get_clean();
$_smarty_tpl->_assignInScope('total_discounts_num', $_prefixVariable1);?>
  <?php ob_start();
if ($_smarty_tpl->tpl_vars['use_taxes']->value && $_smarty_tpl->tpl_vars['show_taxes']->value) {
echo "2";
} else {
echo "0";
}
$_prefixVariable2=ob_get_clean();
$_smarty_tpl->_assignInScope('use_show_taxes', $_prefixVariable2);?>
  <?php ob_start();
if ($_smarty_tpl->tpl_vars['total_wrapping']->value != 0) {
echo "1";
} else {
echo "0";
}
$_prefixVariable3=ob_get_clean();
$_smarty_tpl->_assignInScope('total_wrapping_taxes_num', $_prefixVariable3);?>
    <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>"displayBeforeShoppingCartBlock"),$_smarty_tpl ) );?>

  <div id="order-detail-content" class="table_block table-responsive">
    <table id="cart_summary" class="table table-bordered <?php if ($_smarty_tpl->tpl_vars['PS_STOCK_MANAGEMENT']->value) {?>stock-management-on<?php } else { ?>stock-management-off<?php }?>">
      <thead>
      <tr>
        <th class="cart_product"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Product'),$_smarty_tpl ) );?>
</th>
        <th class="cart_description"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Description'),$_smarty_tpl ) );?>
</th>
        <?php if ($_smarty_tpl->tpl_vars['PS_STOCK_MANAGEMENT']->value) {?>
          <?php $_smarty_tpl->_assignInScope('col_span_subtotal', '3');?>
          <th class="cart_avail text-center"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Availability'),$_smarty_tpl ) );?>
</th>
        <?php } else { ?>
          <?php $_smarty_tpl->_assignInScope('col_span_subtotal', '2');?>
        <?php }?>
        <th class="cart_unit text-<?php if ($_smarty_tpl->tpl_vars['isRtl']->value) {?>left<?php } else { ?>right<?php }?>"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Unit price'),$_smarty_tpl ) );?>
</th>
        <th class="cart_quantity text-center"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Qty'),$_smarty_tpl ) );?>
</th>
        <th class="cart_delete">&nbsp;</th>
        <th class="cart_total text-<?php if ($_smarty_tpl->tpl_vars['isRtl']->value) {?>left<?php } else { ?>right<?php }?>"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Total'),$_smarty_tpl ) );?>
</th>
      </tr>
      </thead>
      <tfoot>
      <?php $_smarty_tpl->_assignInScope('rowspan_total', 2+$_smarty_tpl->tpl_vars['total_discounts_num']->value+$_smarty_tpl->tpl_vars['total_wrapping_taxes_num']->value);?>

      <?php if ($_smarty_tpl->tpl_vars['use_taxes']->value && $_smarty_tpl->tpl_vars['show_taxes']->value && $_smarty_tpl->tpl_vars['total_tax']->value != 0) {?>
        <?php $_smarty_tpl->_assignInScope('rowspan_total', $_smarty_tpl->tpl_vars['rowspan_total']->value+1);?>
      <?php }?>

      <?php if ($_smarty_tpl->tpl_vars['priceDisplay']->value != 0) {?>
        <?php $_smarty_tpl->_assignInScope('rowspan_total', $_smarty_tpl->tpl_vars['rowspan_total']->value+1);?>
      <?php }?>

      <?php if ($_smarty_tpl->tpl_vars['total_shipping_tax_exc']->value <= 0 && (!(isset($_smarty_tpl->tpl_vars['isVirtualCart']->value)) || !$_smarty_tpl->tpl_vars['isVirtualCart']->value) && $_smarty_tpl->tpl_vars['free_ship']->value) {?>
        <?php $_smarty_tpl->_assignInScope('rowspan_total', $_smarty_tpl->tpl_vars['rowspan_total']->value+1);?>
      <?php } else { ?>
        <?php if ($_smarty_tpl->tpl_vars['use_taxes']->value && $_smarty_tpl->tpl_vars['total_shipping_tax_exc']->value != $_smarty_tpl->tpl_vars['total_shipping']->value) {?>
          <?php if ($_smarty_tpl->tpl_vars['priceDisplay']->value && $_smarty_tpl->tpl_vars['total_shipping_tax_exc']->value > 0) {?>
            <?php $_smarty_tpl->_assignInScope('rowspan_total', $_smarty_tpl->tpl_vars['rowspan_total']->value+1);?>
          <?php } elseif ($_smarty_tpl->tpl_vars['total_shipping']->value > 0) {?>
            <?php $_smarty_tpl->_assignInScope('rowspan_total', $_smarty_tpl->tpl_vars['rowspan_total']->value+1);?>
          <?php }?>
        <?php } elseif ($_smarty_tpl->tpl_vars['total_shipping_tax_exc']->value > 0) {?>
          <?php $_smarty_tpl->_assignInScope('rowspan_total', $_smarty_tpl->tpl_vars['rowspan_total']->value+1);?>
        <?php }?>
      <?php }?>

      <?php if ($_smarty_tpl->tpl_vars['use_taxes']->value) {?>
        <?php if ($_smarty_tpl->tpl_vars['priceDisplay']->value) {?>
          <tr class="cart_total_price">
            <td rowspan="<?php echo $_smarty_tpl->tpl_vars['rowspan_total']->value;?>
" colspan="3" id="cart_voucher" class="cart_voucher">
              <?php if ($_smarty_tpl->tpl_vars['voucherAllowed']->value) {?>
                <form action="<?php if ($_smarty_tpl->tpl_vars['opc']->value) {
echo $_smarty_tpl->tpl_vars['link']->value->getPageLink('order-opc',true);
} else {
echo $_smarty_tpl->tpl_vars['link']->value->getPageLink('order',true);
}?>" method="post" id="voucher">
                  <fieldset>
                    <h4><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Vouchers'),$_smarty_tpl ) );?>
</h4>
                    <input type="text" class="discount_name form-control" id="discount_name" name="discount_name" value="<?php if ((isset($_smarty_tpl->tpl_vars['discount_name']->value)) && $_smarty_tpl->tpl_vars['discount_name']->value) {
echo $_smarty_tpl->tpl_vars['discount_name']->value;
}?>">
                    <input type="hidden" name="submitDiscount">
                    <button type="submit" name="submitAddDiscount" class="btn btn-primary"><span><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'OK'),$_smarty_tpl ) );?>
</span></button>
                  </fieldset>
                </form>
                <?php if ($_smarty_tpl->tpl_vars['displayVouchers']->value) {?>
                  <p id="title" class="title-offers"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Take advantage of our exclusive offers:'),$_smarty_tpl ) );?>
</p>
                  <div id="display_cart_vouchers">
                    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['displayVouchers']->value, 'voucher');
$_smarty_tpl->tpl_vars['voucher']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['voucher']->value) {
$_smarty_tpl->tpl_vars['voucher']->do_else = false;
?>
                      <?php if ($_smarty_tpl->tpl_vars['voucher']->value['code'] != '') {?><span class="voucher_name" data-code="<?php echo htmlspecialchars((string)$_smarty_tpl->tpl_vars['voucher']->value['code'], ENT_QUOTES, 'UTF-8', true);?>
"><?php echo htmlspecialchars((string)$_smarty_tpl->tpl_vars['voucher']->value['code'], ENT_QUOTES, 'UTF-8', true);?>
</span> - <?php }
echo $_smarty_tpl->tpl_vars['voucher']->value['name'];?>
<br>
                    <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                  </div>
                <?php }?>
              <?php }?>
            </td>
            <td colspan="<?php echo $_smarty_tpl->tpl_vars['col_span_subtotal']->value;?>
" class="text-<?php if ($_smarty_tpl->tpl_vars['isRtl']->value) {?>left<?php } else { ?>right<?php }?>"><?php if ($_smarty_tpl->tpl_vars['display_tax_label']->value) {
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Total products (tax excl.)'),$_smarty_tpl ) );
} else {
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Total products'),$_smarty_tpl ) );
}?></td>
            <td colspan="2" class="price" id="total_product"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['displayPrice'][0], array( array('price'=>$_smarty_tpl->tpl_vars['total_products']->value),$_smarty_tpl ) );?>
</td>
          </tr>
        <?php } else { ?>
          <tr class="cart_total_price">
            <td rowspan="<?php echo $_smarty_tpl->tpl_vars['rowspan_total']->value;?>
" colspan="2" id="cart_voucher" class="cart_voucher">
              <?php if ($_smarty_tpl->tpl_vars['voucherAllowed']->value) {?>
                <form action="<?php if ($_smarty_tpl->tpl_vars['opc']->value) {
echo $_smarty_tpl->tpl_vars['link']->value->getPageLink('order-opc',true);
} else {
echo $_smarty_tpl->tpl_vars['link']->value->getPageLink('order',true);
}?>" method="post" id="voucher">
                  <fieldset>
                    <h4><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Vouchers'),$_smarty_tpl ) );?>
</h4>
                    <input type="text" class="discount_name form-control" id="discount_name" name="discount_name" value="<?php if ((isset($_smarty_tpl->tpl_vars['discount_name']->value)) && $_smarty_tpl->tpl_vars['discount_name']->value) {
echo $_smarty_tpl->tpl_vars['discount_name']->value;
}?>">
                    <input type="hidden" name="submitDiscount">
                    <button type="submit" name="submitAddDiscount" class="btn btn-primary"><span><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'OK'),$_smarty_tpl ) );?>
</span></button>
                  </fieldset>
                </form>
                <?php if ($_smarty_tpl->tpl_vars['displayVouchers']->value) {?>
                  <p id="title" class="title-offers"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Take advantage of our exclusive offers:'),$_smarty_tpl ) );?>
</p>
                  <div id="display_cart_vouchers">
                    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['displayVouchers']->value, 'voucher');
$_smarty_tpl->tpl_vars['voucher']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['voucher']->value) {
$_smarty_tpl->tpl_vars['voucher']->do_else = false;
?>
                      <?php if ($_smarty_tpl->tpl_vars['voucher']->value['code'] != '') {?><span class="voucher_name" data-code="<?php echo htmlspecialchars((string)$_smarty_tpl->tpl_vars['voucher']->value['code'], ENT_QUOTES, 'UTF-8', true);?>
"><?php echo htmlspecialchars((string)$_smarty_tpl->tpl_vars['voucher']->value['code'], ENT_QUOTES, 'UTF-8', true);?>
</span> - <?php }
echo $_smarty_tpl->tpl_vars['voucher']->value['name'];?>
<br>
                    <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                  </div>
                <?php }?>
              <?php }?>
            </td>
            <td colspan="<?php echo $_smarty_tpl->tpl_vars['col_span_subtotal']->value;?>
" class="text-<?php if ($_smarty_tpl->tpl_vars['isRtl']->value) {?>left<?php } else { ?>right<?php }?>"><?php if ($_smarty_tpl->tpl_vars['display_tax_label']->value) {
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Total products (tax incl.)'),$_smarty_tpl ) );
} else {
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Total products'),$_smarty_tpl ) );
}?></td>
            <td colspan="2" class="price" id="total_product"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['displayPrice'][0], array( array('price'=>$_smarty_tpl->tpl_vars['total_products_wt']->value),$_smarty_tpl ) );?>
</td>
          </tr>
        <?php }?>
      <?php } else { ?>
        <tr class="cart_total_price">
          <td rowspan="<?php echo $_smarty_tpl->tpl_vars['rowspan_total']->value;?>
" colspan="2" id="cart_voucher" class="cart_voucher">
            <?php if ($_smarty_tpl->tpl_vars['voucherAllowed']->value) {?>
              <form action="<?php if ($_smarty_tpl->tpl_vars['opc']->value) {
echo $_smarty_tpl->tpl_vars['link']->value->getPageLink('order-opc',true);
} else {
echo $_smarty_tpl->tpl_vars['link']->value->getPageLink('order',true);
}?>" method="post" id="voucher">
                <fieldset>
                  <h4><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Vouchers'),$_smarty_tpl ) );?>
</h4>
                  <input type="text" class="discount_name form-control" id="discount_name" name="discount_name" value="<?php if ((isset($_smarty_tpl->tpl_vars['discount_name']->value)) && $_smarty_tpl->tpl_vars['discount_name']->value) {
echo $_smarty_tpl->tpl_vars['discount_name']->value;
}?>">
                  <input type="hidden" name="submitDiscount">
                  <button type="submit" name="submitAddDiscount" class="btn btn-primary">
                    <span><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'OK'),$_smarty_tpl ) );?>
</span>
                  </button>
                </fieldset>
              </form>
              <?php if ($_smarty_tpl->tpl_vars['displayVouchers']->value) {?>
                <p id="title" class="title-offers"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Take advantage of our exclusive offers:'),$_smarty_tpl ) );?>
</p>
                <div id="display_cart_vouchers">
                  <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['displayVouchers']->value, 'voucher');
$_smarty_tpl->tpl_vars['voucher']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['voucher']->value) {
$_smarty_tpl->tpl_vars['voucher']->do_else = false;
?>
                    <?php if ($_smarty_tpl->tpl_vars['voucher']->value['code'] != '') {?><span class="voucher_name" data-code="<?php echo htmlspecialchars((string)$_smarty_tpl->tpl_vars['voucher']->value['code'], ENT_QUOTES, 'UTF-8', true);?>
"><?php echo htmlspecialchars((string)$_smarty_tpl->tpl_vars['voucher']->value['code'], ENT_QUOTES, 'UTF-8', true);?>
</span> - <?php }
echo $_smarty_tpl->tpl_vars['voucher']->value['name'];?>
<br>
                  <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                </div>
              <?php }?>
            <?php }?>
          </td>
          <td colspan="<?php echo $_smarty_tpl->tpl_vars['col_span_subtotal']->value;?>
" class="text-<?php if ($_smarty_tpl->tpl_vars['isRtl']->value) {?>left<?php } else { ?>right<?php }?>"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Total products'),$_smarty_tpl ) );?>
</td>
          <td colspan="2" class="price" id="total_product"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['displayPrice'][0], array( array('price'=>$_smarty_tpl->tpl_vars['total_products']->value),$_smarty_tpl ) );?>
</td>
        </tr>
      <?php }?>
      <tr<?php if ($_smarty_tpl->tpl_vars['total_wrapping']->value == 0) {?> style="display: none;"<?php }?>>
        <td colspan="3" class="text-<?php if ($_smarty_tpl->tpl_vars['isRtl']->value) {?>left<?php } else { ?>right<?php }?>">
          <?php if ($_smarty_tpl->tpl_vars['use_taxes']->value) {?>
            <?php if ($_smarty_tpl->tpl_vars['display_tax_label']->value) {
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Total gift wrapping (tax incl.)'),$_smarty_tpl ) );
} else {
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Total gift-wrapping cost'),$_smarty_tpl ) );
}?>
          <?php } else { ?>
            <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Total gift-wrapping cost'),$_smarty_tpl ) );?>

          <?php }?>
        </td>
        <td colspan="2" class="price-discount price" id="total_wrapping">
          <?php if ($_smarty_tpl->tpl_vars['use_taxes']->value) {?>
            <?php if ($_smarty_tpl->tpl_vars['priceDisplay']->value) {?>
              <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['displayPrice'][0], array( array('price'=>$_smarty_tpl->tpl_vars['total_wrapping_tax_exc']->value),$_smarty_tpl ) );?>

            <?php } else { ?>
              <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['displayPrice'][0], array( array('price'=>$_smarty_tpl->tpl_vars['total_wrapping']->value),$_smarty_tpl ) );?>

            <?php }?>
          <?php } else { ?>
            <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['displayPrice'][0], array( array('price'=>$_smarty_tpl->tpl_vars['total_wrapping_tax_exc']->value),$_smarty_tpl ) );?>

          <?php }?>
        </td>
      </tr>
      <?php if ($_smarty_tpl->tpl_vars['total_shipping_tax_exc']->value <= 0 && (!(isset($_smarty_tpl->tpl_vars['isVirtualCart']->value)) || !$_smarty_tpl->tpl_vars['isVirtualCart']->value) && $_smarty_tpl->tpl_vars['free_ship']->value) {?>
        <tr class="cart_total_delivery<?php if (!$_smarty_tpl->tpl_vars['opc']->value && (!(isset($_smarty_tpl->tpl_vars['cart']->value->id_address_delivery)) || !$_smarty_tpl->tpl_vars['cart']->value->id_address_delivery)) {?> unvisible<?php }?>">
          <td colspan="<?php echo $_smarty_tpl->tpl_vars['col_span_subtotal']->value;?>
" class="text-<?php if ($_smarty_tpl->tpl_vars['isRtl']->value) {?>left<?php } else { ?>right<?php }?>"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Total shipping'),$_smarty_tpl ) );?>
</td>
          <td colspan="2" class="price" id="total_shipping"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Free shipping!'),$_smarty_tpl ) );?>
</td>
        </tr>
      <?php } else { ?>
        <?php if ($_smarty_tpl->tpl_vars['use_taxes']->value && $_smarty_tpl->tpl_vars['total_shipping_tax_exc']->value != $_smarty_tpl->tpl_vars['total_shipping']->value) {?>
          <?php if ($_smarty_tpl->tpl_vars['priceDisplay']->value) {?>
            <tr class="cart_total_delivery<?php if ($_smarty_tpl->tpl_vars['total_shipping_tax_exc']->value <= 0) {?> unvisible<?php }?>">
              <td colspan="<?php echo $_smarty_tpl->tpl_vars['col_span_subtotal']->value;?>
" class="text-<?php if ($_smarty_tpl->tpl_vars['isRtl']->value) {?>left<?php } else { ?>right<?php }?>"><?php if ($_smarty_tpl->tpl_vars['display_tax_label']->value) {
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Total shipping (tax excl.)'),$_smarty_tpl ) );
} else {
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Total shipping'),$_smarty_tpl ) );
}?></td>
              <td colspan="2" class="price" id="total_shipping"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['displayPrice'][0], array( array('price'=>$_smarty_tpl->tpl_vars['total_shipping_tax_exc']->value),$_smarty_tpl ) );?>
</td>
            </tr>
          <?php } else { ?>
            <tr class="cart_total_delivery<?php if ($_smarty_tpl->tpl_vars['total_shipping']->value <= 0) {?> unvisible<?php }?>">
              <td colspan="<?php echo $_smarty_tpl->tpl_vars['col_span_subtotal']->value;?>
" class="text-<?php if ($_smarty_tpl->tpl_vars['isRtl']->value) {?>left<?php } else { ?>right<?php }?>"><?php if ($_smarty_tpl->tpl_vars['display_tax_label']->value) {
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Total shipping (tax incl.)'),$_smarty_tpl ) );
} else {
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Total shipping'),$_smarty_tpl ) );
}?></td>
              <td colspan="2" class="price" id="total_shipping" ><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['displayPrice'][0], array( array('price'=>$_smarty_tpl->tpl_vars['total_shipping']->value),$_smarty_tpl ) );?>
</td>
            </tr>
          <?php }?>
        <?php } else { ?>
          <tr class="cart_total_delivery<?php if ($_smarty_tpl->tpl_vars['total_shipping_tax_exc']->value <= 0) {?> unvisible<?php }?>">
            <td colspan="<?php echo $_smarty_tpl->tpl_vars['col_span_subtotal']->value;?>
" class="text-<?php if ($_smarty_tpl->tpl_vars['isRtl']->value) {?>left<?php } else { ?>right<?php }?>"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Total shipping'),$_smarty_tpl ) );?>
</td>
            <td colspan="2" class="price" id="total_shipping" ><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['displayPrice'][0], array( array('price'=>$_smarty_tpl->tpl_vars['total_shipping_tax_exc']->value),$_smarty_tpl ) );?>
</td>
          </tr>
        <?php }?>
      <?php }?>
      <tr class="shipping_error" style="display:none">
          <td colspan="<?php echo $_smarty_tpl->tpl_vars['col_span_subtotal']->value+2;?>
" class="text-left" style="width: 1px;"></td>
      </tr>
      <tr class="cart_total_voucher<?php if ($_smarty_tpl->tpl_vars['total_discounts']->value == 0) {?> unvisible<?php }?>">
        <td colspan="<?php echo $_smarty_tpl->tpl_vars['col_span_subtotal']->value;?>
" class="text-<?php if ($_smarty_tpl->tpl_vars['isRtl']->value) {?>left<?php } else { ?>right<?php }?>">
          <?php if ($_smarty_tpl->tpl_vars['display_tax_label']->value) {?>
            <?php if ($_smarty_tpl->tpl_vars['use_taxes']->value && $_smarty_tpl->tpl_vars['priceDisplay']->value == 0) {?>
              <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Total vouchers (tax incl.)'),$_smarty_tpl ) );?>

            <?php } else { ?>
              <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Total vouchers (tax excl.)'),$_smarty_tpl ) );?>

            <?php }?>
          <?php } else { ?>
            <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Total vouchers'),$_smarty_tpl ) );?>

          <?php }?>
        </td>
        <td colspan="2" class="price-discount price" id="total_discount">
          <?php if ($_smarty_tpl->tpl_vars['use_taxes']->value && $_smarty_tpl->tpl_vars['priceDisplay']->value == 0) {?>
            <?php $_smarty_tpl->_assignInScope('total_discounts_negative', $_smarty_tpl->tpl_vars['total_discounts']->value*-1);?>
          <?php } else { ?>
            <?php $_smarty_tpl->_assignInScope('total_discounts_negative', $_smarty_tpl->tpl_vars['total_discounts_tax_exc']->value*-1);?>
          <?php }?>
          <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['displayPrice'][0], array( array('price'=>$_smarty_tpl->tpl_vars['total_discounts_negative']->value),$_smarty_tpl ) );?>

        </td>
      </tr>
      <?php if ($_smarty_tpl->tpl_vars['use_taxes']->value && $_smarty_tpl->tpl_vars['show_taxes']->value && $_smarty_tpl->tpl_vars['total_tax']->value != 0) {?>
        <?php if ($_smarty_tpl->tpl_vars['priceDisplay']->value != 0) {?>
          <tr class="cart_total_price">
            <td colspan="<?php echo $_smarty_tpl->tpl_vars['col_span_subtotal']->value;?>
" class="text-<?php if ($_smarty_tpl->tpl_vars['isRtl']->value) {?>left<?php } else { ?>right<?php }?>"><?php if ($_smarty_tpl->tpl_vars['display_tax_label']->value) {
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Total (tax excl.)'),$_smarty_tpl ) );
} else {
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Total'),$_smarty_tpl ) );
}?></td>
            <td colspan="2" class="price" id="total_price_without_tax"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['displayPrice'][0], array( array('price'=>$_smarty_tpl->tpl_vars['total_price_without_tax']->value),$_smarty_tpl ) );?>
</td>
          </tr>
        <?php }?>
        <tr class="cart_total_tax">
          <td colspan="<?php echo $_smarty_tpl->tpl_vars['col_span_subtotal']->value;?>
" class="text-<?php if ($_smarty_tpl->tpl_vars['isRtl']->value) {?>left<?php } else { ?>right<?php }?>"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Tax'),$_smarty_tpl ) );?>
</td>
          <td colspan="2" class="price" id="total_tax"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['displayPrice'][0], array( array('price'=>$_smarty_tpl->tpl_vars['total_tax']->value),$_smarty_tpl ) );?>
</td>
        </tr>
      <?php }?>
      <tr class="cart_total_price">
        <td colspan="<?php echo $_smarty_tpl->tpl_vars['col_span_subtotal']->value;?>
" class="total_price_container text-<?php if ($_smarty_tpl->tpl_vars['isRtl']->value) {?>left<?php } else { ?>right<?php }?>">
          <span><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Total'),$_smarty_tpl ) );?>
</span>
          <div class="hookDisplayProductPriceBlock-price">
            <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>"displayCartTotalPriceLabel"),$_smarty_tpl ) );?>

          </div>
        </td>
        <?php if ($_smarty_tpl->tpl_vars['use_taxes']->value) {?>
          <td colspan="2" class="price" id="total_price_container">
            <span id="total_price"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['displayPrice'][0], array( array('price'=>$_smarty_tpl->tpl_vars['total_price']->value),$_smarty_tpl ) );?>
</span>
          </td>
        <?php } else { ?>
          <td colspan="2" class="price" id="total_price_container">
            <span id="total_price"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['displayPrice'][0], array( array('price'=>$_smarty_tpl->tpl_vars['total_price_without_tax']->value),$_smarty_tpl ) );?>
</span>
          </td>
        <?php }?>
      </tr>
      </tfoot>
      <tbody>
      <?php $_smarty_tpl->_assignInScope('odd', 0);?>
      <?php $_smarty_tpl->_assignInScope('have_non_virtual_products', false);?>
      <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['products']->value, 'product', true);
$_smarty_tpl->tpl_vars['product']->iteration = 0;
$_smarty_tpl->tpl_vars['product']->index = -1;
$_smarty_tpl->tpl_vars['product']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['product']->value) {
$_smarty_tpl->tpl_vars['product']->do_else = false;
$_smarty_tpl->tpl_vars['product']->iteration++;
$_smarty_tpl->tpl_vars['product']->index++;
$_smarty_tpl->tpl_vars['product']->first = !$_smarty_tpl->tpl_vars['product']->index;
$_smarty_tpl->tpl_vars['product']->last = $_smarty_tpl->tpl_vars['product']->iteration === $_smarty_tpl->tpl_vars['product']->total;
$__foreach_product_3_saved = $_smarty_tpl->tpl_vars['product'];
?>
        <?php if ($_smarty_tpl->tpl_vars['product']->value['is_virtual'] == 0) {?>
          <?php $_smarty_tpl->_assignInScope('have_non_virtual_products', true);?>
        <?php }?>
        <?php $_smarty_tpl->_assignInScope('productId', $_smarty_tpl->tpl_vars['product']->value['id_product']);?>
        <?php $_smarty_tpl->_assignInScope('productAttributeId', $_smarty_tpl->tpl_vars['product']->value['id_product_attribute']);?>
        <?php $_smarty_tpl->_assignInScope('quantityDisplayed', 0);?>
        <?php $_smarty_tpl->_assignInScope('odd', ($_smarty_tpl->tpl_vars['odd']->value+1)%2);?>
        <?php $_smarty_tpl->_assignInScope('ignoreProductLast', (isset($_smarty_tpl->tpl_vars['customizedDatas']->value[$_smarty_tpl->tpl_vars['productId']->value][$_smarty_tpl->tpl_vars['productAttributeId']->value])) || count($_smarty_tpl->tpl_vars['gift_products']->value));?>
                <?php $_smarty_tpl->_subTemplateRender(((string)$_smarty_tpl->tpl_vars['tpl_dir']->value)."./shopping-cart-product-line.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('productLast'=>$_smarty_tpl->tpl_vars['product']->last,'productFirst'=>$_smarty_tpl->tpl_vars['product']->first), 0, true);
?>
                <?php if ((isset($_smarty_tpl->tpl_vars['customizedDatas']->value[$_smarty_tpl->tpl_vars['productId']->value][$_smarty_tpl->tpl_vars['productAttributeId']->value][$_smarty_tpl->tpl_vars['product']->value['id_address_delivery']]))) {?>
          <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['customizedDatas']->value[$_smarty_tpl->tpl_vars['productId']->value][$_smarty_tpl->tpl_vars['productAttributeId']->value][$_smarty_tpl->tpl_vars['product']->value['id_address_delivery']], 'customization', false, 'id_customization');
$_smarty_tpl->tpl_vars['customization']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['id_customization']->value => $_smarty_tpl->tpl_vars['customization']->value) {
$_smarty_tpl->tpl_vars['customization']->do_else = false;
?>
            <tr
              id="product_<?php echo $_smarty_tpl->tpl_vars['product']->value['id_product'];?>
_<?php echo $_smarty_tpl->tpl_vars['product']->value['id_product_attribute'];?>
_<?php echo $_smarty_tpl->tpl_vars['id_customization']->value;?>
_<?php echo intval($_smarty_tpl->tpl_vars['product']->value['id_address_delivery']);?>
"
              class="product_customization_for_<?php echo $_smarty_tpl->tpl_vars['product']->value['id_product'];?>
_<?php echo $_smarty_tpl->tpl_vars['product']->value['id_product_attribute'];?>
_<?php echo intval($_smarty_tpl->tpl_vars['product']->value['id_address_delivery']);
if ($_smarty_tpl->tpl_vars['odd']->value) {?> odd<?php } else { ?> even<?php }?> customization">
              <td></td>
              <td colspan="3">
                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['customization']->value['datas'], 'custom_data', false, 'type');
$_smarty_tpl->tpl_vars['custom_data']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['type']->value => $_smarty_tpl->tpl_vars['custom_data']->value) {
$_smarty_tpl->tpl_vars['custom_data']->do_else = false;
?>
                  <?php if ($_smarty_tpl->tpl_vars['type']->value == $_smarty_tpl->tpl_vars['CUSTOMIZE_FILE']->value) {?>
                    <div class="customizationUploaded">
                      <ul class="customizationUploaded">
                        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['custom_data']->value, 'picture');
$_smarty_tpl->tpl_vars['picture']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['picture']->value) {
$_smarty_tpl->tpl_vars['picture']->do_else = false;
?>
                          <li><img src="<?php echo $_smarty_tpl->tpl_vars['pic_dir']->value;
echo $_smarty_tpl->tpl_vars['picture']->value['value'];?>
_small" alt="" class="customizationUploaded"></li>
                        <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                      </ul>
                    </div>
                  <?php } elseif ($_smarty_tpl->tpl_vars['type']->value == $_smarty_tpl->tpl_vars['CUSTOMIZE_TEXTFIELD']->value) {?>
                    <ul class="typedText">
                      <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['custom_data']->value, 'textField');
$_smarty_tpl->tpl_vars['textField']->index = -1;
$_smarty_tpl->tpl_vars['textField']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['textField']->value) {
$_smarty_tpl->tpl_vars['textField']->do_else = false;
$_smarty_tpl->tpl_vars['textField']->index++;
$__foreach_textField_7_saved = $_smarty_tpl->tpl_vars['textField'];
?>
                        <li>
                          <?php if ($_smarty_tpl->tpl_vars['textField']->value['name']) {?>
                            <?php echo $_smarty_tpl->tpl_vars['textField']->value['name'];?>

                          <?php } else { ?>
                            <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Text #'),$_smarty_tpl ) );
echo $_smarty_tpl->tpl_vars['textField']->index+1;?>

                          <?php }?>
                          : <?php echo $_smarty_tpl->tpl_vars['textField']->value['value'];?>

                        </li>
                      <?php
$_smarty_tpl->tpl_vars['textField'] = $__foreach_textField_7_saved;
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                    </ul>
                  <?php }?>
                <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
              </td>
              <td class="cart_quantity" colspan="1">
                <?php if ((isset($_smarty_tpl->tpl_vars['cannotModify']->value)) && $_smarty_tpl->tpl_vars['cannotModify']->value == 1) {?>
                  <span><?php if ($_smarty_tpl->tpl_vars['quantityDisplayed']->value == 0 && (isset($_smarty_tpl->tpl_vars['customizedDatas']->value[$_smarty_tpl->tpl_vars['productId']->value][$_smarty_tpl->tpl_vars['productAttributeId']->value]))) {
echo count($_smarty_tpl->tpl_vars['customizedDatas']->value[$_smarty_tpl->tpl_vars['productId']->value][$_smarty_tpl->tpl_vars['productAttributeId']->value]);
} else {
echo $_smarty_tpl->tpl_vars['product']->value['cart_quantity']-$_smarty_tpl->tpl_vars['quantityDisplayed']->value;
}?></span>
                <?php } else { ?>
                  <input type="hidden" value="<?php echo $_smarty_tpl->tpl_vars['customization']->value['quantity'];?>
" name="quantity_<?php echo $_smarty_tpl->tpl_vars['product']->value['id_product'];?>
_<?php echo $_smarty_tpl->tpl_vars['product']->value['id_product_attribute'];?>
_<?php echo $_smarty_tpl->tpl_vars['id_customization']->value;?>
_<?php echo intval($_smarty_tpl->tpl_vars['product']->value['id_address_delivery']);?>
_hidden">
                  <input type="text" value="<?php echo $_smarty_tpl->tpl_vars['customization']->value['quantity'];?>
" class="cart_quantity_input form-control text-center" name="quantity_<?php echo $_smarty_tpl->tpl_vars['product']->value['id_product'];?>
_<?php echo $_smarty_tpl->tpl_vars['product']->value['id_product_attribute'];?>
_<?php echo $_smarty_tpl->tpl_vars['id_customization']->value;?>
_<?php echo intval($_smarty_tpl->tpl_vars['product']->value['id_address_delivery']);?>
">
                  <div class="cart_quantity_button clearfix">
                    <?php if ($_smarty_tpl->tpl_vars['product']->value['minimal_quantity'] < ($_smarty_tpl->tpl_vars['customization']->value['quantity']-$_smarty_tpl->tpl_vars['quantityDisplayed']->value) || $_smarty_tpl->tpl_vars['product']->value['minimal_quantity'] <= 1) {?>
                      <a
                        id="cart_quantity_down_<?php echo $_smarty_tpl->tpl_vars['product']->value['id_product'];?>
_<?php echo $_smarty_tpl->tpl_vars['product']->value['id_product_attribute'];?>
_<?php echo $_smarty_tpl->tpl_vars['id_customization']->value;?>
_<?php echo intval($_smarty_tpl->tpl_vars['product']->value['id_address_delivery']);?>
"
                        class="cart_quantity_down btn btn-default button-minus"
                        href="<?php ob_start();
echo intval($_smarty_tpl->tpl_vars['product']->value['id_product']);
$_prefixVariable4=ob_get_clean();
ob_start();
echo intval($_smarty_tpl->tpl_vars['product']->value['id_product_attribute']);
$_prefixVariable5=ob_get_clean();
echo htmlspecialchars((string)$_smarty_tpl->tpl_vars['link']->value->getPageLink('cart',true,NULL,"add=1&amp;id_product=".$_prefixVariable4."&amp;ipa=".$_prefixVariable5."&amp;id_address_delivery=".((string)$_smarty_tpl->tpl_vars['product']->value['id_address_delivery'])."&amp;id_customization=".((string)$_smarty_tpl->tpl_vars['id_customization']->value)."&amp;op=down&amp;token=".((string)$_smarty_tpl->tpl_vars['token_cart']->value)), ENT_QUOTES, 'UTF-8', true);?>
"
                        rel="nofollow"
                        title="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Subtract'),$_smarty_tpl ) );?>
">
                        <i class="icon icon-fw icon-minus"></i>
                      </a>
                    <?php } else { ?>
                      <a
                        id="cart_quantity_down_<?php echo $_smarty_tpl->tpl_vars['product']->value['id_product'];?>
_<?php echo $_smarty_tpl->tpl_vars['product']->value['id_product_attribute'];?>
_<?php echo $_smarty_tpl->tpl_vars['id_customization']->value;?>
"
                        class="cart_quantity_down btn btn-default button-minus disabled"
                        href="#"
                        title="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Subtract'),$_smarty_tpl ) );?>
">
                        <i class="icon icon-fw icon-minus"></i>
                      </a>
                    <?php }?>
                    <a
                      id="cart_quantity_up_<?php echo $_smarty_tpl->tpl_vars['product']->value['id_product'];?>
_<?php echo $_smarty_tpl->tpl_vars['product']->value['id_product_attribute'];?>
_<?php echo $_smarty_tpl->tpl_vars['id_customization']->value;?>
_<?php echo intval($_smarty_tpl->tpl_vars['product']->value['id_address_delivery']);?>
"
                      class="cart_quantity_up btn btn-default button-plus"
                      href="<?php ob_start();
echo intval($_smarty_tpl->tpl_vars['product']->value['id_product']);
$_prefixVariable6=ob_get_clean();
ob_start();
echo intval($_smarty_tpl->tpl_vars['product']->value['id_product_attribute']);
$_prefixVariable7=ob_get_clean();
echo htmlspecialchars((string)$_smarty_tpl->tpl_vars['link']->value->getPageLink('cart',true,NULL,"add=1&amp;id_product=".$_prefixVariable6."&amp;ipa=".$_prefixVariable7."&amp;id_address_delivery=".((string)$_smarty_tpl->tpl_vars['product']->value['id_address_delivery'])."&amp;id_customization=".((string)$_smarty_tpl->tpl_vars['id_customization']->value)."&amp;token=".((string)$_smarty_tpl->tpl_vars['token_cart']->value)), ENT_QUOTES, 'UTF-8', true);?>
"
                      rel="nofollow"
                      title="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Add'),$_smarty_tpl ) );?>
">
                      <i class="icon icon-fw icon-plus"></i>
                    </a>
                  </div>
                <?php }?>
              </td>
              <td class="cart_delete text-center">
                <?php if ((isset($_smarty_tpl->tpl_vars['cannotModify']->value)) && $_smarty_tpl->tpl_vars['cannotModify']->value == 1) {?>
                <?php } else { ?>
                  <a
                    id="<?php echo $_smarty_tpl->tpl_vars['product']->value['id_product'];?>
_<?php echo $_smarty_tpl->tpl_vars['product']->value['id_product_attribute'];?>
_<?php echo $_smarty_tpl->tpl_vars['id_customization']->value;?>
_<?php echo intval($_smarty_tpl->tpl_vars['product']->value['id_address_delivery']);?>
"
                    class="cart_quantity_delete"
                    href="<?php ob_start();
echo intval($_smarty_tpl->tpl_vars['product']->value['id_product']);
$_prefixVariable8=ob_get_clean();
ob_start();
echo intval($_smarty_tpl->tpl_vars['product']->value['id_product_attribute']);
$_prefixVariable9=ob_get_clean();
echo htmlspecialchars((string)$_smarty_tpl->tpl_vars['link']->value->getPageLink('cart',true,NULL,"delete=1&amp;id_product=".$_prefixVariable8."&amp;ipa=".$_prefixVariable9."&amp;id_customization=".((string)$_smarty_tpl->tpl_vars['id_customization']->value)."&amp;id_address_delivery=".((string)$_smarty_tpl->tpl_vars['product']->value['id_address_delivery'])."&amp;token=".((string)$_smarty_tpl->tpl_vars['token_cart']->value)), ENT_QUOTES, 'UTF-8', true);?>
"
                    rel="nofollow"
                    title="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Delete'),$_smarty_tpl ) );?>
">
                    <i class="icon icon-trash"></i>
                  </a>
                <?php }?>
              </td>
              <td>
              </td>
            </tr>
            <?php $_smarty_tpl->_assignInScope('quantityDisplayed', $_smarty_tpl->tpl_vars['quantityDisplayed']->value+$_smarty_tpl->tpl_vars['customization']->value['quantity']);?>
          <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>

                    <?php if ($_smarty_tpl->tpl_vars['product']->value['quantity']-$_smarty_tpl->tpl_vars['quantityDisplayed']->value > 0) {
$_smarty_tpl->_subTemplateRender(((string)$_smarty_tpl->tpl_vars['tpl_dir']->value)."./shopping-cart-product-line.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('productLast'=>$_smarty_tpl->tpl_vars['product']->last,'productFirst'=>$_smarty_tpl->tpl_vars['product']->first), 0, true);
}?>
        <?php }?>
      <?php
$_smarty_tpl->tpl_vars['product'] = $__foreach_product_3_saved;
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
      <?php $_smarty_tpl->_assignInScope('last_was_odd', $_smarty_tpl->tpl_vars['product']->iteration%2);?>
      <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['gift_products']->value, 'product', true);
$_smarty_tpl->tpl_vars['product']->iteration = 0;
$_smarty_tpl->tpl_vars['product']->index = -1;
$_smarty_tpl->tpl_vars['product']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['product']->value) {
$_smarty_tpl->tpl_vars['product']->do_else = false;
$_smarty_tpl->tpl_vars['product']->iteration++;
$_smarty_tpl->tpl_vars['product']->index++;
$_smarty_tpl->tpl_vars['product']->first = !$_smarty_tpl->tpl_vars['product']->index;
$_smarty_tpl->tpl_vars['product']->last = $_smarty_tpl->tpl_vars['product']->iteration === $_smarty_tpl->tpl_vars['product']->total;
$__foreach_product_8_saved = $_smarty_tpl->tpl_vars['product'];
?>
        <?php $_smarty_tpl->_assignInScope('productId', $_smarty_tpl->tpl_vars['product']->value['id_product']);?>
        <?php $_smarty_tpl->_assignInScope('productAttributeId', $_smarty_tpl->tpl_vars['product']->value['id_product_attribute']);?>
        <?php $_smarty_tpl->_assignInScope('quantityDisplayed', 0);?>
        <?php $_smarty_tpl->_assignInScope('odd', ($_smarty_tpl->tpl_vars['product']->iteration+$_smarty_tpl->tpl_vars['last_was_odd']->value)%2);?>
        <?php $_smarty_tpl->_assignInScope('ignoreProductLast', (isset($_smarty_tpl->tpl_vars['customizedDatas']->value[$_smarty_tpl->tpl_vars['productId']->value][$_smarty_tpl->tpl_vars['productAttributeId']->value])));?>
        <?php $_smarty_tpl->_assignInScope('cannotModify', 1);?>
                <?php $_smarty_tpl->_subTemplateRender(((string)$_smarty_tpl->tpl_vars['tpl_dir']->value)."./shopping-cart-product-line.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('productLast'=>$_smarty_tpl->tpl_vars['product']->last,'productFirst'=>$_smarty_tpl->tpl_vars['product']->first), 0, true);
?>
      <?php
$_smarty_tpl->tpl_vars['product'] = $__foreach_product_8_saved;
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
      </tbody>

      <?php if (sizeof($_smarty_tpl->tpl_vars['discounts']->value)) {?>
        <tbody>
        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['discounts']->value, 'discount');
$_smarty_tpl->tpl_vars['discount']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['discount']->value) {
$_smarty_tpl->tpl_vars['discount']->do_else = false;
?>
          <?php if ((floatval($_smarty_tpl->tpl_vars['discount']->value['value_real']) == 0 && $_smarty_tpl->tpl_vars['discount']->value['free_shipping'] != 1) || (floatval($_smarty_tpl->tpl_vars['discount']->value['value_real']) == 0 && $_smarty_tpl->tpl_vars['discount']->value['code'] == '')) {?>
            <?php continue 1;?>
          <?php }?>
          <tr class="cart_discount" id="cart_discount_<?php echo $_smarty_tpl->tpl_vars['discount']->value['id_discount'];?>
">
            <td class="cart_discount_name" colspan="<?php if ($_smarty_tpl->tpl_vars['PS_STOCK_MANAGEMENT']->value) {?>3<?php } else { ?>2<?php }?>"><?php echo $_smarty_tpl->tpl_vars['discount']->value['name'];?>
</td>
            <td class="cart_discount_price">
              <span class="price-discount">
                <?php if (!$_smarty_tpl->tpl_vars['priceDisplay']->value) {
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['displayPrice'][0], array( array('price'=>$_smarty_tpl->tpl_vars['discount']->value['value_real']*-1),$_smarty_tpl ) );
} else {
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['displayPrice'][0], array( array('price'=>$_smarty_tpl->tpl_vars['discount']->value['value_tax_exc']*-1),$_smarty_tpl ) );
}?>
              </span>
            </td>
            <td class="cart_discount_delete">1</td>
            <td class="price_discount_del text-center">
              <?php if (strlen($_smarty_tpl->tpl_vars['discount']->value['code'])) {?>
                <a
                  href="<?php if ($_smarty_tpl->tpl_vars['opc']->value) {
echo $_smarty_tpl->tpl_vars['link']->value->getPageLink('order-opc',true);
} else {
echo $_smarty_tpl->tpl_vars['link']->value->getPageLink('order',true);
}?>?deleteDiscount=<?php echo $_smarty_tpl->tpl_vars['discount']->value['id_discount'];?>
"
                  class="price_discount_delete"
                  title="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Delete'),$_smarty_tpl ) );?>
">
                  <i class="icon icon-trash"></i>
                </a>
              <?php }?>
            </td>
            <td class="cart_discount_price">
              <span class="price-discount price"><?php if (!$_smarty_tpl->tpl_vars['priceDisplay']->value) {
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['displayPrice'][0], array( array('price'=>$_smarty_tpl->tpl_vars['discount']->value['value_real']*-1),$_smarty_tpl ) );
} else {
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['displayPrice'][0], array( array('price'=>$_smarty_tpl->tpl_vars['discount']->value['value_tax_exc']*-1),$_smarty_tpl ) );
}?></span>
            </td>
          </tr>
        <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
        </tbody>
      <?php }?>
    </table>
  </div>

  <?php if ($_smarty_tpl->tpl_vars['show_option_allow_separate_package']->value) {?>
    <div class="checkbox">
      <label for="allow_seperated_package" class="inline">
        <input type="checkbox" name="allow_seperated_package" id="allow_seperated_package" <?php if ($_smarty_tpl->tpl_vars['cart']->value->allow_seperated_package) {?>checked="checked"<?php }?> autocomplete="off">
        <span class="label-text"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Send available products first'),$_smarty_tpl ) );?>
</span>
      </label>
    </div>
  <?php }?>

      <?php if (!(isset($_smarty_tpl->tpl_vars['addresses_style']->value))) {?>
    <?php $_tmp_array = isset($_smarty_tpl->tpl_vars['addresses_style']) ? $_smarty_tpl->tpl_vars['addresses_style']->value : array();
if (!(is_array($_tmp_array) || $_tmp_array instanceof ArrayAccess)) {
settype($_tmp_array, 'array');
}
$_tmp_array['company'] = 'address_company';
$_smarty_tpl->_assignInScope('addresses_style', $_tmp_array);?>
    <?php $_tmp_array = isset($_smarty_tpl->tpl_vars['addresses_style']) ? $_smarty_tpl->tpl_vars['addresses_style']->value : array();
if (!(is_array($_tmp_array) || $_tmp_array instanceof ArrayAccess)) {
settype($_tmp_array, 'array');
}
$_tmp_array['vat_number'] = 'address_company';
$_smarty_tpl->_assignInScope('addresses_style', $_tmp_array);?>
    <?php $_tmp_array = isset($_smarty_tpl->tpl_vars['addresses_style']) ? $_smarty_tpl->tpl_vars['addresses_style']->value : array();
if (!(is_array($_tmp_array) || $_tmp_array instanceof ArrayAccess)) {
settype($_tmp_array, 'array');
}
$_tmp_array['firstname'] = 'address_name';
$_smarty_tpl->_assignInScope('addresses_style', $_tmp_array);?>
    <?php $_tmp_array = isset($_smarty_tpl->tpl_vars['addresses_style']) ? $_smarty_tpl->tpl_vars['addresses_style']->value : array();
if (!(is_array($_tmp_array) || $_tmp_array instanceof ArrayAccess)) {
settype($_tmp_array, 'array');
}
$_tmp_array['lastname'] = 'address_name';
$_smarty_tpl->_assignInScope('addresses_style', $_tmp_array);?>
    <?php $_tmp_array = isset($_smarty_tpl->tpl_vars['addresses_style']) ? $_smarty_tpl->tpl_vars['addresses_style']->value : array();
if (!(is_array($_tmp_array) || $_tmp_array instanceof ArrayAccess)) {
settype($_tmp_array, 'array');
}
$_tmp_array['address1'] = 'address_address1';
$_smarty_tpl->_assignInScope('addresses_style', $_tmp_array);?>
    <?php $_tmp_array = isset($_smarty_tpl->tpl_vars['addresses_style']) ? $_smarty_tpl->tpl_vars['addresses_style']->value : array();
if (!(is_array($_tmp_array) || $_tmp_array instanceof ArrayAccess)) {
settype($_tmp_array, 'array');
}
$_tmp_array['address2'] = 'address_address2';
$_smarty_tpl->_assignInScope('addresses_style', $_tmp_array);?>
    <?php $_tmp_array = isset($_smarty_tpl->tpl_vars['addresses_style']) ? $_smarty_tpl->tpl_vars['addresses_style']->value : array();
if (!(is_array($_tmp_array) || $_tmp_array instanceof ArrayAccess)) {
settype($_tmp_array, 'array');
}
$_tmp_array['city'] = 'address_city';
$_smarty_tpl->_assignInScope('addresses_style', $_tmp_array);?>
    <?php $_tmp_array = isset($_smarty_tpl->tpl_vars['addresses_style']) ? $_smarty_tpl->tpl_vars['addresses_style']->value : array();
if (!(is_array($_tmp_array) || $_tmp_array instanceof ArrayAccess)) {
settype($_tmp_array, 'array');
}
$_tmp_array['country'] = 'address_country';
$_smarty_tpl->_assignInScope('addresses_style', $_tmp_array);?>
    <?php $_tmp_array = isset($_smarty_tpl->tpl_vars['addresses_style']) ? $_smarty_tpl->tpl_vars['addresses_style']->value : array();
if (!(is_array($_tmp_array) || $_tmp_array instanceof ArrayAccess)) {
settype($_tmp_array, 'array');
}
$_tmp_array['phone'] = 'address_phone';
$_smarty_tpl->_assignInScope('addresses_style', $_tmp_array);?>
    <?php $_tmp_array = isset($_smarty_tpl->tpl_vars['addresses_style']) ? $_smarty_tpl->tpl_vars['addresses_style']->value : array();
if (!(is_array($_tmp_array) || $_tmp_array instanceof ArrayAccess)) {
settype($_tmp_array, 'array');
}
$_tmp_array['phone_mobile'] = 'address_phone_mobile';
$_smarty_tpl->_assignInScope('addresses_style', $_tmp_array);?>
    <?php $_tmp_array = isset($_smarty_tpl->tpl_vars['addresses_style']) ? $_smarty_tpl->tpl_vars['addresses_style']->value : array();
if (!(is_array($_tmp_array) || $_tmp_array instanceof ArrayAccess)) {
settype($_tmp_array, 'array');
}
$_tmp_array['alias'] = 'address_title';
$_smarty_tpl->_assignInScope('addresses_style', $_tmp_array);?>
  <?php }?>
  <?php if (!$_smarty_tpl->tpl_vars['advanced_payment_api']->value && ((!empty($_smarty_tpl->tpl_vars['delivery_option']->value) && (!(isset($_smarty_tpl->tpl_vars['isVirtualCart']->value)) || !$_smarty_tpl->tpl_vars['isVirtualCart']->value)) || $_smarty_tpl->tpl_vars['delivery']->value->id || $_smarty_tpl->tpl_vars['invoice']->value->id) && !$_smarty_tpl->tpl_vars['opc']->value) {?>
    <div class="order_delivery clearfix row">
      <?php if (!(isset($_smarty_tpl->tpl_vars['formattedAddresses']->value)) || (count($_smarty_tpl->tpl_vars['formattedAddresses']->value['invoice']) == 0 && count($_smarty_tpl->tpl_vars['formattedAddresses']->value['delivery']) == 0) || (count($_smarty_tpl->tpl_vars['formattedAddresses']->value['invoice']['formated']) == 0 && count($_smarty_tpl->tpl_vars['formattedAddresses']->value['delivery']['formated']) == 0)) {?>
        <?php if ($_smarty_tpl->tpl_vars['delivery']->value->id) {?>
          <div class="col-xs-12 col-sm-6"<?php if (!$_smarty_tpl->tpl_vars['have_non_virtual_products']->value) {?> style="display: none;"<?php }?>>
            <ul id="delivery_address" class="address box">
              <li><h3 class="page-subheading"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Delivery address'),$_smarty_tpl ) );?>
&nbsp;<span class="address_alias">(<?php echo $_smarty_tpl->tpl_vars['delivery']->value->alias;?>
)</span></h3></li>
              <?php if ($_smarty_tpl->tpl_vars['delivery']->value->company) {?><li class="address_company"><?php echo htmlspecialchars((string)$_smarty_tpl->tpl_vars['delivery']->value->company, ENT_QUOTES, 'UTF-8', true);?>
</li><?php }?>
              <li class="address_name"><?php echo htmlspecialchars((string)$_smarty_tpl->tpl_vars['delivery']->value->firstname, ENT_QUOTES, 'UTF-8', true);?>
 <?php echo htmlspecialchars((string)$_smarty_tpl->tpl_vars['delivery']->value->lastname, ENT_QUOTES, 'UTF-8', true);?>
</li>
              <li class="address_address1"><?php echo htmlspecialchars((string)$_smarty_tpl->tpl_vars['delivery']->value->address1, ENT_QUOTES, 'UTF-8', true);?>
</li>
              <?php if ($_smarty_tpl->tpl_vars['delivery']->value->address2) {?><li class="address_address2"><?php echo htmlspecialchars((string)$_smarty_tpl->tpl_vars['delivery']->value->address2, ENT_QUOTES, 'UTF-8', true);?>
</li><?php }?>
              <li class="address_city"><?php echo htmlspecialchars((string)$_smarty_tpl->tpl_vars['delivery']->value->postcode, ENT_QUOTES, 'UTF-8', true);?>
 <?php echo htmlspecialchars((string)$_smarty_tpl->tpl_vars['delivery']->value->city, ENT_QUOTES, 'UTF-8', true);?>
</li>
              <li class="address_country"><?php echo htmlspecialchars((string)$_smarty_tpl->tpl_vars['delivery']->value->country, ENT_QUOTES, 'UTF-8', true);?>
 <?php if ($_smarty_tpl->tpl_vars['delivery_state']->value) {?>(<?php echo htmlspecialchars((string)$_smarty_tpl->tpl_vars['delivery_state']->value, ENT_QUOTES, 'UTF-8', true);?>
)<?php }?></li>
            </ul>
          </div>
        <?php }?>
        <?php if ($_smarty_tpl->tpl_vars['invoice']->value->id) {?>
          <div class="col-xs-12 col-sm-6">
            <ul id="invoice_address" class="address box">
              <li><h3 class="page-subheading"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Invoice address'),$_smarty_tpl ) );?>
&nbsp;<span class="address_alias">(<?php echo $_smarty_tpl->tpl_vars['invoice']->value->alias;?>
)</span></h3></li>
              <?php if ($_smarty_tpl->tpl_vars['invoice']->value->company) {?><li class="address_company"><?php echo htmlspecialchars((string)$_smarty_tpl->tpl_vars['invoice']->value->company, ENT_QUOTES, 'UTF-8', true);?>
</li><?php }?>
              <li class="address_name"><?php echo htmlspecialchars((string)$_smarty_tpl->tpl_vars['invoice']->value->firstname, ENT_QUOTES, 'UTF-8', true);?>
 <?php echo htmlspecialchars((string)$_smarty_tpl->tpl_vars['invoice']->value->lastname, ENT_QUOTES, 'UTF-8', true);?>
</li>
              <li class="address_address1"><?php echo htmlspecialchars((string)$_smarty_tpl->tpl_vars['invoice']->value->address1, ENT_QUOTES, 'UTF-8', true);?>
</li>
              <?php if ($_smarty_tpl->tpl_vars['invoice']->value->address2) {?><li class="address_address2"><?php echo htmlspecialchars((string)$_smarty_tpl->tpl_vars['invoice']->value->address2, ENT_QUOTES, 'UTF-8', true);?>
</li><?php }?>
              <li class="address_city"><?php echo htmlspecialchars((string)$_smarty_tpl->tpl_vars['invoice']->value->postcode, ENT_QUOTES, 'UTF-8', true);?>
 <?php echo htmlspecialchars((string)$_smarty_tpl->tpl_vars['invoice']->value->city, ENT_QUOTES, 'UTF-8', true);?>
</li>
              <li class="address_country"><?php echo htmlspecialchars((string)$_smarty_tpl->tpl_vars['invoice']->value->country, ENT_QUOTES, 'UTF-8', true);?>
 <?php if ($_smarty_tpl->tpl_vars['invoice_state']->value) {?>(<?php echo htmlspecialchars((string)$_smarty_tpl->tpl_vars['invoice_state']->value, ENT_QUOTES, 'UTF-8', true);?>
)<?php }?></li>
            </ul>
          </div>
        <?php }?>
      <?php } else { ?>
        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['formattedAddresses']->value, 'address', false, 'k');
$_smarty_tpl->tpl_vars['address']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['k']->value => $_smarty_tpl->tpl_vars['address']->value) {
$_smarty_tpl->tpl_vars['address']->do_else = false;
?>
          <div class="col-xs-12 col-sm-6"<?php if ($_smarty_tpl->tpl_vars['k']->value == 'delivery' && !$_smarty_tpl->tpl_vars['have_non_virtual_products']->value) {?> style="display: none;"<?php }?>>
            <ul class="address box">
              <li>
                <h3 class="page-subheading">
                  <?php if ($_smarty_tpl->tpl_vars['k']->value == 'invoice') {?>
                    <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Invoice address'),$_smarty_tpl ) );?>

                  <?php } elseif ($_smarty_tpl->tpl_vars['k']->value == 'delivery' && $_smarty_tpl->tpl_vars['delivery']->value->id) {?>
                    <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Delivery address'),$_smarty_tpl ) );?>

                  <?php }?>
                  <?php if ((isset($_smarty_tpl->tpl_vars['address']->value['object']['alias']))) {?>
                    <span class="address_alias">(<?php echo $_smarty_tpl->tpl_vars['address']->value['object']['alias'];?>
)</span>
                  <?php }?>
                </h3>
              </li>
              <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['address']->value['ordered'], 'pattern');
$_smarty_tpl->tpl_vars['pattern']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['pattern']->value) {
$_smarty_tpl->tpl_vars['pattern']->do_else = false;
?>
                <?php $_smarty_tpl->_assignInScope('addressKey', smarty_modifier_explode(" ",$_smarty_tpl->tpl_vars['pattern']->value));?>
                <?php $_smarty_tpl->_assignInScope('addedli', false);?>
                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['addressKey']->value, 'key', false, NULL, 'foo', array (
  'last' => true,
  'iteration' => true,
  'total' => true,
));
$_smarty_tpl->tpl_vars['key']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['key']->value) {
$_smarty_tpl->tpl_vars['key']->do_else = false;
$_smarty_tpl->tpl_vars['__smarty_foreach_foo']->value['iteration']++;
$_smarty_tpl->tpl_vars['__smarty_foreach_foo']->value['last'] = $_smarty_tpl->tpl_vars['__smarty_foreach_foo']->value['iteration'] === $_smarty_tpl->tpl_vars['__smarty_foreach_foo']->value['total'];
?>
                  <?php $_smarty_tpl->_assignInScope('key_str', smarty_modifier_regex_replace($_smarty_tpl->tpl_vars['key']->value,AddressFormat::_CLEANING_REGEX_,''));?>
                  <?php if ((isset($_smarty_tpl->tpl_vars['address']->value['formated'][$_smarty_tpl->tpl_vars['key_str']->value])) && !empty($_smarty_tpl->tpl_vars['address']->value['formated'][$_smarty_tpl->tpl_vars['key_str']->value])) {?>
                    <?php if ((!$_smarty_tpl->tpl_vars['addedli']->value)) {?>
                      <?php $_smarty_tpl->_assignInScope('addedli', true);?>
                      <li><span class="<?php if ((isset($_smarty_tpl->tpl_vars['addresses_style']->value[$_smarty_tpl->tpl_vars['key_str']->value]))) {
echo $_smarty_tpl->tpl_vars['addresses_style']->value[$_smarty_tpl->tpl_vars['key_str']->value];
}?>">
                    <?php }?>
                    <?php echo htmlspecialchars((string)$_smarty_tpl->tpl_vars['address']->value['formated'][$_smarty_tpl->tpl_vars['key_str']->value], ENT_QUOTES, 'UTF-8', true);?>

                  <?php }?>
                  <?php if (((isset($_smarty_tpl->tpl_vars['__smarty_foreach_foo']->value['last']) ? $_smarty_tpl->tpl_vars['__smarty_foreach_foo']->value['last'] : null) && $_smarty_tpl->tpl_vars['addedli']->value)) {?>
                    </span></li>
                  <?php }?>
                <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
              <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
            </ul>
          </div>
        <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
      <?php }?>
    </div>
  <?php }?>
  <div id="HOOK_SHOPPING_CART"><?php echo $_smarty_tpl->tpl_vars['HOOK_SHOPPING_CART']->value;?>
</div>
  <p class="cart_navigation clearfix">
    <?php if (!$_smarty_tpl->tpl_vars['opc']->value) {?>
      <a  href="<?php if ($_smarty_tpl->tpl_vars['back']->value) {
echo htmlspecialchars((string)$_smarty_tpl->tpl_vars['link']->value->getPageLink('order',true,NULL,'step=1&amp;back={$back}'), ENT_QUOTES, 'UTF-8', true);
} else {
echo htmlspecialchars((string)$_smarty_tpl->tpl_vars['link']->value->getPageLink('order',true,NULL,'step=1'), ENT_QUOTES, 'UTF-8', true);
}?>"
          class="btn btn-lg btn-success pull-right standard-checkout btn-full" title="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Proceed to checkout'),$_smarty_tpl ) );?>
">
        <span><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Proceed to checkout'),$_smarty_tpl ) );?>
 <i class="icon icon-chevron-right"></i></span>
      </a>
    <?php }?>
    <a href="<?php if (((isset($_SERVER['HTTP_REFERER'])) && ($_SERVER['HTTP_REFERER'] == $_smarty_tpl->tpl_vars['link']->value->getPageLink('order',true) || $_SERVER['HTTP_REFERER'] == $_smarty_tpl->tpl_vars['link']->value->getPageLink('order-opc',true) || strstr($_SERVER['HTTP_REFERER'],'step='))) || !(isset($_SERVER['HTTP_REFERER']))) {
echo $_smarty_tpl->tpl_vars['link']->value->getPageLink('index');
} else {
echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'secureReferrer' ][ 0 ], array( htmlspecialchars((string)smarty_modifier_regex_replace($_SERVER['HTTP_REFERER'],'/[\?|&]content_only=1/',''), ENT_QUOTES, 'UTF-8', true) ));
}?>"
       class="btn btn-lg btn-default btn-full" title="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Continue shopping'),$_smarty_tpl ) );?>
">
      <i class="icon icon-chevron-left"></i> <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Continue shopping'),$_smarty_tpl ) );?>

    </a>
  </p>
  <div class="clear"></div>
  <div class="cart_navigation_extra">
    <div id="HOOK_SHOPPING_CART_EXTRA"><?php if ((isset($_smarty_tpl->tpl_vars['HOOK_SHOPPING_CART_EXTRA']->value))) {
echo $_smarty_tpl->tpl_vars['HOOK_SHOPPING_CART_EXTRA']->value;
}?></div>
  </div>
  <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['addJsDef'][0], array( array('deliveryAddress'=>intval($_smarty_tpl->tpl_vars['cart']->value->id_address_delivery)),$_smarty_tpl ) );
$_block_plugin20 = isset($_smarty_tpl->smarty->registered_plugins['block']['addJsDefL'][0][0]) ? $_smarty_tpl->smarty->registered_plugins['block']['addJsDefL'][0][0] : null;
if (!is_callable(array($_block_plugin20, 'addJsDefL'))) {
throw new SmartyException('block tag \'addJsDefL\' not callable or registered');
}
$_smarty_tpl->smarty->_cache['_tag_stack'][] = array('addJsDefL', array('name'=>'txtProduct'));
$_block_repeat=true;
echo $_block_plugin20->addJsDefL(array('name'=>'txtProduct'), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'product','js'=>1),$_smarty_tpl ) );
$_block_repeat=false;
echo $_block_plugin20->addJsDefL(array('name'=>'txtProduct'), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);
$_block_plugin21 = isset($_smarty_tpl->smarty->registered_plugins['block']['addJsDefL'][0][0]) ? $_smarty_tpl->smarty->registered_plugins['block']['addJsDefL'][0][0] : null;
if (!is_callable(array($_block_plugin21, 'addJsDefL'))) {
throw new SmartyException('block tag \'addJsDefL\' not callable or registered');
}
$_smarty_tpl->smarty->_cache['_tag_stack'][] = array('addJsDefL', array('name'=>'txtProducts'));
$_block_repeat=true;
echo $_block_plugin21->addJsDefL(array('name'=>'txtProducts'), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'products','js'=>1),$_smarty_tpl ) );
$_block_repeat=false;
echo $_block_plugin21->addJsDefL(array('name'=>'txtProducts'), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);
}
}
}
