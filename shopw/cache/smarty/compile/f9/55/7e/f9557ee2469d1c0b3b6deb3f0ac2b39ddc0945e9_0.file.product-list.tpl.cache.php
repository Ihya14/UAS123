<?php
/* Smarty version 4.2.1, created on 2023-01-12 13:55:49
  from 'D:\xampp\htdocs\shopw\themes\niara\product-list.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.2.1',
  'unifunc' => 'content_63bfa0e5f25517_06902203',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'f9557ee2469d1c0b3b6deb3f0ac2b39ddc0945e9' => 
    array (
      0 => 'D:\\xampp\\htdocs\\shopw\\themes\\niara\\product-list.tpl',
      1 => 1664191549,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:./product-list-item.tpl' => 1,
  ),
),false)) {
function content_63bfa0e5f25517_06902203 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->compiled->nocache_hash = '196637339463bfa0e5f06118_32820757';
if (!empty($_smarty_tpl->tpl_vars['products']->value)) {?>
  <?php if ($_smarty_tpl->tpl_vars['page_name']->value == 'index' || $_smarty_tpl->tpl_vars['page_name']->value == 'product') {?>
    <?php $_smarty_tpl->_assignInScope('product_block_size_class', 'col-xs-12 col-sm-4 col-md-3');?>
  <?php } else { ?>
    <?php $_smarty_tpl->_assignInScope('product_block_size_class', 'col-xs-12 col-sm-6 col-md-4');?>
  <?php }?>

  <?php $_smarty_tpl->_assignInScope('show_functional_buttons', $_smarty_tpl->tpl_vars['page_name']->value != 'index');?>

  <ul<?php if (!empty($_smarty_tpl->tpl_vars['id']->value)) {?> id="<?php echo $_smarty_tpl->tpl_vars['id']->value;?>
"<?php }?> class="product_list grid list-grid row<?php if (!empty($_smarty_tpl->tpl_vars['class']->value)) {?> <?php echo $_smarty_tpl->tpl_vars['class']->value;
}?>">

        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['products']->value, 'product');
$_smarty_tpl->tpl_vars['product']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['product']->value) {
$_smarty_tpl->tpl_vars['product']->do_else = false;
?><li class="ajax_block_product <?php echo $_smarty_tpl->tpl_vars['product_block_size_class']->value;?>
">
      <?php $_smarty_tpl->_subTemplateRender('file:./product-list-item.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 9999, $_smarty_tpl->cache_lifetime, array('product'=>$_smarty_tpl->tpl_vars['product']->value), 0, true);
?>
    </li><?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
    
  </ul>

  <?php $_block_plugin7 = isset($_smarty_tpl->smarty->registered_plugins['block']['addJsDefL'][0][0]) ? $_smarty_tpl->smarty->registered_plugins['block']['addJsDefL'][0][0] : null;
if (!is_callable(array($_block_plugin7, 'addJsDefL'))) {
throw new SmartyException('block tag \'addJsDefL\' not callable or registered');
}
$_smarty_tpl->smarty->_cache['_tag_stack'][] = array('addJsDefL', array('name'=>'min_item'));
$_block_repeat=true;
echo $_block_plugin7->addJsDefL(array('name'=>'min_item'), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Please select at least one product','js'=>1),$_smarty_tpl ) );
$_block_repeat=false;
echo $_block_plugin7->addJsDefL(array('name'=>'min_item'), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
  <?php $_block_plugin8 = isset($_smarty_tpl->smarty->registered_plugins['block']['addJsDefL'][0][0]) ? $_smarty_tpl->smarty->registered_plugins['block']['addJsDefL'][0][0] : null;
if (!is_callable(array($_block_plugin8, 'addJsDefL'))) {
throw new SmartyException('block tag \'addJsDefL\' not callable or registered');
}
$_smarty_tpl->smarty->_cache['_tag_stack'][] = array('addJsDefL', array('name'=>'max_item'));
$_block_repeat=true;
echo $_block_plugin8->addJsDefL(array('name'=>'max_item'), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'You cannot add more than %d product(s) to the product comparison','sprintf'=>$_smarty_tpl->tpl_vars['comparator_max_item']->value,'js'=>1),$_smarty_tpl ) );
$_block_repeat=false;
echo $_block_plugin8->addJsDefL(array('name'=>'max_item'), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
  <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['addJsDef'][0], array( array('comparator_max_item'=>$_smarty_tpl->tpl_vars['comparator_max_item']->value),$_smarty_tpl ) );?>

  <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['addJsDef'][0], array( array('comparedProductsIds'=>$_smarty_tpl->tpl_vars['compared_products']->value),$_smarty_tpl ) );?>

<?php }
}
}
