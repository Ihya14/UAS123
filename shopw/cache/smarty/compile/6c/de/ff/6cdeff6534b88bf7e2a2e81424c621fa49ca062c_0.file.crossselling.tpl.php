<?php
/* Smarty version 4.2.1, created on 2023-01-12 14:28:37
  from 'D:\xampp\htdocs\shopw\themes\niara\modules\blockcart\crossselling.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.2.1',
  'unifunc' => 'content_63bfa895620ef3_73101174',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '6cdeff6534b88bf7e2a2e81424c621fa49ca062c' => 
    array (
      0 => 'D:\\xampp\\htdocs\\shopw\\themes\\niara\\modules\\blockcart\\crossselling.tpl',
      1 => 1664191549,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_63bfa895620ef3_73101174 (Smarty_Internal_Template $_smarty_tpl) {
if ((isset($_smarty_tpl->tpl_vars['orderProducts']->value)) && is_array($_smarty_tpl->tpl_vars['orderProducts']->value) && !empty($_smarty_tpl->tpl_vars['orderProducts']->value)) {?>
  <div class="crossseling-content">
    <h3><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Customers who bought this product also bought:','mod'=>'blockcart'),$_smarty_tpl ) );?>
</h3>
    <div id="blockcart_list" class="row">
      <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['orderProducts']->value, 'orderProduct', false, NULL, 'orderProduct', array (
));
$_smarty_tpl->tpl_vars['orderProduct']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['orderProduct']->value) {
$_smarty_tpl->tpl_vars['orderProduct']->do_else = false;
?>
        <div class="col-xs-6 col-sm-4 col-md-3">
          <div class="thumbnail">
            <a href="<?php echo htmlspecialchars((string)$_smarty_tpl->tpl_vars['orderProduct']->value['link'], ENT_QUOTES, 'UTF-8', true);?>
" title="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['orderProduct']->value['name']);?>
" class="lnk_img">
              <img class="img-responsive" src="<?php echo $_smarty_tpl->tpl_vars['orderProduct']->value['image'];?>
" alt="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['orderProduct']->value['name']);?>
">
            </a>
          </div>
          <h4 class="product-name">
            <a href="<?php echo htmlspecialchars((string)$_smarty_tpl->tpl_vars['orderProduct']->value['link'], ENT_QUOTES, 'UTF-8', true);?>
" title="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['orderProduct']->value['name']);?>
">
              <?php echo htmlspecialchars((string)call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'truncate' ][ 0 ], array( $_smarty_tpl->tpl_vars['orderProduct']->value['name'],18,'...' )), ENT_QUOTES, 'UTF-8', true);?>

            </a>
          </h4>
          <?php if ($_smarty_tpl->tpl_vars['orderProduct']->value['show_price'] == 1 && !(isset($_smarty_tpl->tpl_vars['restricted_country_mode']->value)) && !$_smarty_tpl->tpl_vars['PS_CATALOG_MODE']->value) {?>
            <span class="price_display">
              <span class="price"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['convertPrice'][0], array( array('price'=>$_smarty_tpl->tpl_vars['orderProduct']->value['displayed_price']),$_smarty_tpl ) );?>
</span>
            </span>
          <?php }?>
        </div>
      <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
    </div>
  </div>
<?php }
}
}
