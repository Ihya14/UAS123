<?php
/* Smarty version 4.2.1, created on 2023-01-12 14:30:20
  from 'D:\xampp\htdocs\shopw\themes\niara\history.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.2.1',
  'unifunc' => 'content_63bfa8fc9fdc72_39353294',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'edf101c8aeef095b874f9d522c396740f15d94dd' => 
    array (
      0 => 'D:\\xampp\\htdocs\\shopw\\themes\\niara\\history.tpl',
      1 => 1664191549,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_63bfa8fc9fdc72_39353294 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'D:\\xampp\\htdocs\\shopw\\vendor\\smarty\\smarty\\libs\\plugins\\modifier.regex_replace.php','function'=>'smarty_modifier_regex_replace',),));
$_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, 'path', null, null);?>
  <a href="<?php echo htmlspecialchars((string)$_smarty_tpl->tpl_vars['link']->value->getPageLink('my-account',true), ENT_QUOTES, 'UTF-8', true);?>
">
    <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'My account'),$_smarty_tpl ) );?>

  </a>
  <span class="navigation-pipe"><?php echo $_smarty_tpl->tpl_vars['navigationPipe']->value;?>
</span>
  <span class="navigation_page"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Order history'),$_smarty_tpl ) );?>
</span>
<?php $_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);
$_smarty_tpl->_subTemplateRender(((string)$_smarty_tpl->tpl_vars['tpl_dir']->value)."./errors.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
?>
<h1 class="page-heading"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Order history'),$_smarty_tpl ) );?>
</h1>
<p><b><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Here are the orders you\'ve placed since your account was created.'),$_smarty_tpl ) );?>
</b></p>
<?php if ($_smarty_tpl->tpl_vars['slowValidation']->value) {?>
  <div class="alert alert-warning"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'If you have just placed an order, it may take a few minutes for it to be validated. Please refresh this page if your order is missing.'),$_smarty_tpl ) );?>
</div>
<?php }?>
<div class="block-center" id="block-history">
  <?php if ($_smarty_tpl->tpl_vars['orders']->value && count($_smarty_tpl->tpl_vars['orders']->value)) {?>
    <div class="table-responsive">
      <table id="order-list" class="table table-bordered footab">
        <thead>
        <tr>
          <th data-sort-ignore="true"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Order reference'),$_smarty_tpl ) );?>
</th>
          <th><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Date'),$_smarty_tpl ) );?>
</th>
          <th data-hide="phone"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Total price'),$_smarty_tpl ) );?>
</th>
          <th data-sort-ignore="true" data-hide="phone,tablet"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Payment'),$_smarty_tpl ) );?>
</th>
          <th><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Status'),$_smarty_tpl ) );?>
</th>
          <th data-sort-ignore="true" data-hide="phone,tablet"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Invoice'),$_smarty_tpl ) );?>
</th>
          <th data-sort-ignore="true" data-hide="phone,tablet">&nbsp;</th>
        </tr>
        </thead>
        <tbody>
        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['orders']->value, 'order', false, NULL, 'myLoop', array (
));
$_smarty_tpl->tpl_vars['order']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['order']->value) {
$_smarty_tpl->tpl_vars['order']->do_else = false;
?>
          <tr>
            <td class="history_link bold">
              <?php if ((isset($_smarty_tpl->tpl_vars['order']->value['invoice'])) && $_smarty_tpl->tpl_vars['order']->value['invoice'] && (isset($_smarty_tpl->tpl_vars['order']->value['virtual'])) && $_smarty_tpl->tpl_vars['order']->value['virtual']) {?>
                <img class="icon" src="<?php echo $_smarty_tpl->tpl_vars['img_dir']->value;?>
icon/download_product.gif" alt="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Products to download'),$_smarty_tpl ) );?>
" title="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Products to download'),$_smarty_tpl ) );?>
">
              <?php }?>
              <a class="color-myaccount" href="javascript:showOrder(1, <?php echo intval($_smarty_tpl->tpl_vars['order']->value['id_order']);?>
, '<?php ob_start();
echo intval($_smarty_tpl->tpl_vars['order']->value['id_order']);
$_prefixVariable1=ob_get_clean();
echo htmlspecialchars((string)$_smarty_tpl->tpl_vars['link']->value->getPageLink('order-detail',true,NULL,"id_order=".$_prefixVariable1), ENT_QUOTES, 'UTF-8', true);?>
');">
                <?php echo Order::getUniqReferenceOf($_smarty_tpl->tpl_vars['order']->value['id_order']);?>

              </a>
            </td>
            <td data-value="<?php echo smarty_modifier_regex_replace($_smarty_tpl->tpl_vars['order']->value['date_add'],"/[\-\:\ ]/",'');?>
" class="history_date bold">
              <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['dateFormat'][0], array( array('date'=>$_smarty_tpl->tpl_vars['order']->value['date_add'],'full'=>0),$_smarty_tpl ) );?>

            </td>
            <td class="history_price" data-value="<?php echo $_smarty_tpl->tpl_vars['order']->value['total_paid'];?>
">
            <span class="price">
              <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['displayPrice'][0], array( array('price'=>$_smarty_tpl->tpl_vars['order']->value['total_paid'],'currency'=>$_smarty_tpl->tpl_vars['order']->value['id_currency'],'no_utf8'=>false,'convert'=>false),$_smarty_tpl ) );?>

            </span>
            </td>
            <td class="history_method"><?php echo htmlspecialchars((string)$_smarty_tpl->tpl_vars['order']->value['payment'], ENT_QUOTES, 'UTF-8', true);?>
</td>
            <td<?php if ((isset($_smarty_tpl->tpl_vars['order']->value['order_state']))) {?> data-value="<?php echo $_smarty_tpl->tpl_vars['order']->value['id_order_state'];?>
"<?php }?> class="history_state">
              <?php if ((isset($_smarty_tpl->tpl_vars['order']->value['order_state']))) {?>
                <span class="label<?php if ((isset($_smarty_tpl->tpl_vars['order']->value['order_state_color'])) && Tools::getBrightness($_smarty_tpl->tpl_vars['order']->value['order_state_color']) > 128) {?> dark<?php }?>"<?php if ((isset($_smarty_tpl->tpl_vars['order']->value['order_state_color'])) && $_smarty_tpl->tpl_vars['order']->value['order_state_color']) {?> style="background-color:<?php echo htmlspecialchars((string)$_smarty_tpl->tpl_vars['order']->value['order_state_color'], ENT_QUOTES, 'UTF-8', true);?>
; border-color:<?php echo htmlspecialchars((string)$_smarty_tpl->tpl_vars['order']->value['order_state_color'], ENT_QUOTES, 'UTF-8', true);?>
;"<?php }?>>
                <?php echo htmlspecialchars((string)$_smarty_tpl->tpl_vars['order']->value['order_state'], ENT_QUOTES, 'UTF-8', true);?>

              </span>
              <?php }?>
            </td>
            <td class="history_invoice">
              <?php if (((isset($_smarty_tpl->tpl_vars['order']->value['invoice'])) && $_smarty_tpl->tpl_vars['order']->value['invoice'] && (isset($_smarty_tpl->tpl_vars['order']->value['invoice_number'])) && $_smarty_tpl->tpl_vars['order']->value['invoice_number']) && (isset($_smarty_tpl->tpl_vars['invoiceAllowed']->value)) && $_smarty_tpl->tpl_vars['invoiceAllowed']->value == true) {?>
                <a class="btn btn-default" href="<?php echo htmlspecialchars((string)$_smarty_tpl->tpl_vars['link']->value->getPageLink('pdf-invoice',true,NULL,"id_order=".((string)$_smarty_tpl->tpl_vars['order']->value['id_order'])), ENT_QUOTES, 'UTF-8', true);?>
" title="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Invoice'),$_smarty_tpl ) );?>
" target="_blank">
                  <i class="icon icon-file-text large"></i> <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'PDF'),$_smarty_tpl ) );?>

                </a>
              <?php } else { ?>
                -
              <?php }?>
            </td>
            <td class="history_detail">
              <a class="btn btn-default" href="javascript:showOrder(1, <?php echo intval($_smarty_tpl->tpl_vars['order']->value['id_order']);?>
, '<?php ob_start();
echo intval($_smarty_tpl->tpl_vars['order']->value['id_order']);
$_prefixVariable2=ob_get_clean();
echo htmlspecialchars((string)$_smarty_tpl->tpl_vars['link']->value->getPageLink('order-detail',true,NULL,"id_order=".$_prefixVariable2), ENT_QUOTES, 'UTF-8', true);?>
');">
              <span>
                <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Details'),$_smarty_tpl ) );?>
 <i class="icon icon-chevron-right"></i>
              </span>
              </a>
              <?php if ((isset($_smarty_tpl->tpl_vars['reorderingAllowed']->value)) && $_smarty_tpl->tpl_vars['reorderingAllowed']->value) {?>
                <?php if ((isset($_smarty_tpl->tpl_vars['opc']->value)) && $_smarty_tpl->tpl_vars['opc']->value) {?>
                  <a class="btn btn-default" href="<?php ob_start();
echo intval($_smarty_tpl->tpl_vars['order']->value['id_order']);
$_prefixVariable3=ob_get_clean();
echo htmlspecialchars((string)$_smarty_tpl->tpl_vars['link']->value->getPageLink('order-opc',true,NULL,"submitReorder&id_order=".$_prefixVariable3), ENT_QUOTES, 'UTF-8', true);?>
" title="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Reorder'),$_smarty_tpl ) );?>
">
                <?php } else { ?>
                  <a class="btn btn-default" href="<?php ob_start();
echo intval($_smarty_tpl->tpl_vars['order']->value['id_order']);
$_prefixVariable4=ob_get_clean();
echo htmlspecialchars((string)$_smarty_tpl->tpl_vars['link']->value->getPageLink('order',true,NULL,"submitReorder&id_order=".$_prefixVariable4), ENT_QUOTES, 'UTF-8', true);?>
" title="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Reorder'),$_smarty_tpl ) );?>
">
                <?php }?>
                    <i class="icon icon-refresh"></i> <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Reorder'),$_smarty_tpl ) );?>

                  </a>
              <?php }?>
            </td>
          </tr>
        <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
        </tbody>
      </table>
    </div>
    <div id="block-order-detail" class="unvisible">&nbsp;</div>
  <?php } else { ?>
    <div class="alert alert-warning"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'You have not placed any orders.'),$_smarty_tpl ) );?>
</div>
  <?php }?>
</div>

<nav>
  <ul class="pager">
    <li class="previous">
      <a href="<?php echo htmlspecialchars((string)$_smarty_tpl->tpl_vars['link']->value->getPageLink('my-account',true), ENT_QUOTES, 'UTF-8', true);?>
">
        <?php if ($_smarty_tpl->tpl_vars['isRtl']->value) {?>&rarr;<?php } else { ?>&larr;<?php }?> <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Back to your account'),$_smarty_tpl ) );?>

      </a>
    </li>
  </ul>
</nav>

<?php }
}
