<?php
/* Smarty version 4.2.1, created on 2023-01-12 22:08:30
  from 'D:\xampp\htdocs\shopw\themes\niara\product-sort.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.2.1',
  'unifunc' => 'content_63c0145e5bc933_96318278',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '4246096a4337a1a411978738c6bff721014400fb' => 
    array (
      0 => 'D:\\xampp\\htdocs\\shopw\\themes\\niara\\product-sort.tpl',
      1 => 1664191549,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:./product-list-switcher.tpl' => 1,
  ),
),false)) {
function content_63c0145e5bc933_96318278 (Smarty_Internal_Template $_smarty_tpl) {
if ((isset($_smarty_tpl->tpl_vars['orderby']->value)) && (isset($_smarty_tpl->tpl_vars['orderway']->value))) {?>

  <?php $_smarty_tpl->_subTemplateRender('file:./product-list-switcher.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

    <?php if (!(isset($_smarty_tpl->tpl_vars['request']->value))) {?>
    <?php if ((isset($_GET['id_category'])) && $_GET['id_category']) {?>
      <?php $_smarty_tpl->_assignInScope('request', $_smarty_tpl->tpl_vars['link']->value->getPaginationLink('category',$_smarty_tpl->tpl_vars['category']->value,false,true));?>
    <?php } elseif ((isset($_GET['id_manufacturer'])) && $_GET['id_manufacturer']) {?>
      <?php $_smarty_tpl->_assignInScope('request', $_smarty_tpl->tpl_vars['link']->value->getPaginationLink('manufacturer',$_smarty_tpl->tpl_vars['manufacturer']->value,false,true));?>
    <?php } elseif ((isset($_GET['id_supplier'])) && $_GET['id_supplier']) {?>
      <?php $_smarty_tpl->_assignInScope('request', $_smarty_tpl->tpl_vars['link']->value->getPaginationLink('supplier',$_smarty_tpl->tpl_vars['supplier']->value,false,true));?>
    <?php } else { ?>
      <?php $_smarty_tpl->_assignInScope('request', $_smarty_tpl->tpl_vars['link']->value->getPaginationLink(false,false,false,true));?>
    <?php }?>
  <?php }?>

  <?php if ($_smarty_tpl->tpl_vars['page_name']->value == 'best-sales' && (!(isset($_GET['orderby'])) || empty($_GET['orderby']))) {?>
    <?php $_smarty_tpl->_assignInScope('orderby', '');?>
    <?php $_smarty_tpl->_assignInScope('orderbydefault', '');?>
  <?php }?>

  <div id="productsSortForm<?php if ((isset($_smarty_tpl->tpl_vars['paginationId']->value))) {?>_<?php echo $_smarty_tpl->tpl_vars['paginationId']->value;
}?>" class="form-group productsSortForm">
    <form action="<?php echo htmlspecialchars((string)$_smarty_tpl->tpl_vars['request']->value, ENT_QUOTES, 'UTF-8', true);?>
">
      <label for="selectProductSort<?php if ((isset($_smarty_tpl->tpl_vars['paginationId']->value))) {?>_<?php echo $_smarty_tpl->tpl_vars['paginationId']->value;
}?>"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Sort by'),$_smarty_tpl ) );?>
</label>
      <select id="selectProductSort<?php if ((isset($_smarty_tpl->tpl_vars['paginationId']->value))) {?>_<?php echo $_smarty_tpl->tpl_vars['paginationId']->value;
}?>" class="selectProductSort form-control">
        <option value="<?php if ($_smarty_tpl->tpl_vars['page_name']->value != 'best-sales') {
echo htmlspecialchars((string)$_smarty_tpl->tpl_vars['orderbydefault']->value, ENT_QUOTES, 'UTF-8', true);?>
:<?php echo htmlspecialchars((string)$_smarty_tpl->tpl_vars['orderwaydefault']->value, ENT_QUOTES, 'UTF-8', true);
}?>"<?php if (!in_array($_smarty_tpl->tpl_vars['orderby']->value,array('price','name','quantity','reference')) && $_smarty_tpl->tpl_vars['orderby']->value == $_smarty_tpl->tpl_vars['orderbydefault']->value) {?> selected="selected"<?php }?>>--</option>
        <?php if (!$_smarty_tpl->tpl_vars['PS_CATALOG_MODE']->value) {?>
          <option value="price:asc"<?php if ($_smarty_tpl->tpl_vars['orderby']->value == 'price' && $_smarty_tpl->tpl_vars['orderway']->value == 'asc') {?> selected="selected"<?php }?>><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Price: Lowest first'),$_smarty_tpl ) );?>
</option>
          <option value="price:desc"<?php if ($_smarty_tpl->tpl_vars['orderby']->value == 'price' && $_smarty_tpl->tpl_vars['orderway']->value == 'desc') {?> selected="selected"<?php }?>><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Price: Highest first'),$_smarty_tpl ) );?>
</option>
        <?php }?>
        <option value="name:asc"<?php if ($_smarty_tpl->tpl_vars['orderby']->value == 'name' && $_smarty_tpl->tpl_vars['orderway']->value == 'asc') {?> selected="selected"<?php }?>><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Product Name: A to Z'),$_smarty_tpl ) );?>
</option>
        <option value="name:desc"<?php if ($_smarty_tpl->tpl_vars['orderby']->value == 'name' && $_smarty_tpl->tpl_vars['orderway']->value == 'desc') {?> selected="selected"<?php }?>><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Product Name: Z to A'),$_smarty_tpl ) );?>
</option>
        <?php if ($_smarty_tpl->tpl_vars['PS_STOCK_MANAGEMENT']->value && !$_smarty_tpl->tpl_vars['PS_CATALOG_MODE']->value) {?>
          <option value="quantity:desc"<?php if ($_smarty_tpl->tpl_vars['orderby']->value == 'quantity' && $_smarty_tpl->tpl_vars['orderway']->value == 'desc') {?> selected="selected"<?php }?>><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'In stock'),$_smarty_tpl ) );?>
</option>
        <?php }?>
        <option value="reference:asc"<?php if ($_smarty_tpl->tpl_vars['orderby']->value == 'reference' && $_smarty_tpl->tpl_vars['orderway']->value == 'asc') {?> selected="selected"<?php }?>><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Reference: Lowest first'),$_smarty_tpl ) );?>
</option>
        <option value="reference:desc"<?php if ($_smarty_tpl->tpl_vars['orderby']->value == 'reference' && $_smarty_tpl->tpl_vars['orderway']->value == 'desc') {?> selected="selected"<?php }?>><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Reference: Highest first'),$_smarty_tpl ) );?>
</option>
      </select>
    </form>
  </div>

  <?php if (!(isset($_smarty_tpl->tpl_vars['paginationId']->value)) || $_smarty_tpl->tpl_vars['paginationId']->value == '') {?>
    <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['addJsDef'][0], array( array('request'=>$_smarty_tpl->tpl_vars['request']->value),$_smarty_tpl ) );?>

  <?php }?>

<?php }
}
}
