<?php
/* Smarty version 4.2.1, created on 2023-01-12 14:29:35
  from 'D:\xampp\htdocs\shopw\themes\niara\addresses.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.2.1',
  'unifunc' => 'content_63bfa8cf4ed291_39313581',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '1624478391a17931f9c176560314dbbc48920233' => 
    array (
      0 => 'D:\\xampp\\htdocs\\shopw\\themes\\niara\\addresses.tpl',
      1 => 1664191549,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_63bfa8cf4ed291_39313581 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'D:\\xampp\\htdocs\\shopw\\vendor\\smarty\\smarty\\libs\\plugins\\modifier.explode.php','function'=>'smarty_modifier_explode',),1=>array('file'=>'D:\\xampp\\htdocs\\shopw\\vendor\\smarty\\smarty\\libs\\plugins\\modifier.replace.php','function'=>'smarty_modifier_replace',),));
$_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, 'path', null, null);?><a href="<?php echo htmlspecialchars((string)$_smarty_tpl->tpl_vars['link']->value->getPageLink('my-account',true), ENT_QUOTES, 'UTF-8', true);?>
"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'My account'),$_smarty_tpl ) );?>
</a><span class="navigation-pipe"><?php echo $_smarty_tpl->tpl_vars['navigationPipe']->value;?>
</span><span class="navigation_page"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'My addresses'),$_smarty_tpl ) );?>
</span><?php $_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);?>

<h1 class="page-heading"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'My addresses'),$_smarty_tpl ) );?>
</h1>

<p><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Please configure your default billing and delivery addresses when placing an order. You may also add additional addresses, which can be useful for sending gifts or receiving an order at your office.'),$_smarty_tpl ) );?>
</p>

<?php if (!empty($_smarty_tpl->tpl_vars['multipleAddresses']->value)) {?>
  <div class="addresses">
    <p><strong><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Your addresses are listed below.'),$_smarty_tpl ) );?>
</strong></p>
    <p class="p-indent"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Be sure to update your personal information if it has changed.'),$_smarty_tpl ) );?>
</p>
    <?php $_smarty_tpl->_assignInScope('adrs_style', $_smarty_tpl->tpl_vars['addresses_style']->value);?>
    <div class="bloc_adresses row">
      <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['multipleAddresses']->value, 'address', false, NULL, 'myLoop', array (
  'index' => true,
  'last' => true,
  'iteration' => true,
  'total' => true,
));
$_smarty_tpl->tpl_vars['address']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['address']->value) {
$_smarty_tpl->tpl_vars['address']->do_else = false;
$_smarty_tpl->tpl_vars['__smarty_foreach_myLoop']->value['iteration']++;
$_smarty_tpl->tpl_vars['__smarty_foreach_myLoop']->value['index']++;
$_smarty_tpl->tpl_vars['__smarty_foreach_myLoop']->value['last'] = $_smarty_tpl->tpl_vars['__smarty_foreach_myLoop']->value['iteration'] === $_smarty_tpl->tpl_vars['__smarty_foreach_myLoop']->value['total'];
?>
      <div class="col-xs-12 col-sm-6 address">
        <ul class="box">
          <li><h3 class="page-subheading"><?php echo $_smarty_tpl->tpl_vars['address']->value['object']['alias'];?>
</h3></li>
          <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['address']->value['ordered'], 'pattern', false, NULL, 'adr_loop', array (
));
$_smarty_tpl->tpl_vars['pattern']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['pattern']->value) {
$_smarty_tpl->tpl_vars['pattern']->do_else = false;
?>
            <?php $_smarty_tpl->_assignInScope('addressKey', smarty_modifier_explode(" ",$_smarty_tpl->tpl_vars['pattern']->value));?>
            <li>
              <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['addressKey']->value, 'key', false, NULL, 'word_loop', array (
));
$_smarty_tpl->tpl_vars['key']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['key']->value) {
$_smarty_tpl->tpl_vars['key']->do_else = false;
?>
                <span <?php if ((isset($_smarty_tpl->tpl_vars['addresses_style']->value[$_smarty_tpl->tpl_vars['key']->value]))) {?> class="<?php echo $_smarty_tpl->tpl_vars['addresses_style']->value[$_smarty_tpl->tpl_vars['key']->value];?>
"<?php }?>>
                  <?php echo htmlspecialchars((string)$_smarty_tpl->tpl_vars['address']->value['formated'][smarty_modifier_replace($_smarty_tpl->tpl_vars['key']->value,',','')], ENT_QUOTES, 'UTF-8', true);?>

                </span>
              <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
            </li>
          <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
          <li class="address_update">
            <a class="btn btn-success" href="<?php ob_start();
echo intval($_smarty_tpl->tpl_vars['address']->value['object']['id']);
$_prefixVariable1=ob_get_clean();
echo htmlspecialchars((string)$_smarty_tpl->tpl_vars['link']->value->getPageLink('address',true,null,"id_address=".$_prefixVariable1), ENT_QUOTES, 'UTF-8', true);?>
" title="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Update'),$_smarty_tpl ) );?>
">
              <span><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Update'),$_smarty_tpl ) );?>
 <i class="icon icon-refresh"></i></span>
            </a>
            <a class="btn btn-danger" href="<?php ob_start();
echo intval($_smarty_tpl->tpl_vars['address']->value['object']['id']);
$_prefixVariable2=ob_get_clean();
echo htmlspecialchars((string)$_smarty_tpl->tpl_vars['link']->value->getPageLink('address',true,null,"id_address=".$_prefixVariable2."&delete"), ENT_QUOTES, 'UTF-8', true);?>
" data-id="addresses_confirm" title="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Delete'),$_smarty_tpl ) );?>
">
              <span><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Delete'),$_smarty_tpl ) );?>
 <i class="icon icon-remove"></i></span>
            </a>
          </li>
        </ul>
      </div>
      <?php if ((isset($_smarty_tpl->tpl_vars['__smarty_foreach_myLoop']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_foreach_myLoop']->value['index'] : null)%2 && !(isset($_smarty_tpl->tpl_vars['__smarty_foreach_myLoop']->value['last']) ? $_smarty_tpl->tpl_vars['__smarty_foreach_myLoop']->value['last'] : null)) {?>
    </div>
    <div class="bloc_adresses row">
      <?php }?>
      <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
    </div>
  </div>
<?php } else { ?>
  <div class="alert alert-warning"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'No addresses are available.'),$_smarty_tpl ) );?>
</div>
<?php }?>

<div class="clearfix form-group">
  <a href="<?php echo htmlspecialchars((string)$_smarty_tpl->tpl_vars['link']->value->getPageLink('address',true), ENT_QUOTES, 'UTF-8', true);?>
" title="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Add an address'),$_smarty_tpl ) );?>
" class="btn btn-success">
    <span><i class="icon icon-plus"></i> <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Add a new address'),$_smarty_tpl ) );?>
</span>
  </a>
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

<?php $_block_plugin1 = isset($_smarty_tpl->smarty->registered_plugins['block']['addJsDefL'][0][0]) ? $_smarty_tpl->smarty->registered_plugins['block']['addJsDefL'][0][0] : null;
if (!is_callable(array($_block_plugin1, 'addJsDefL'))) {
throw new SmartyException('block tag \'addJsDefL\' not callable or registered');
}
$_smarty_tpl->smarty->_cache['_tag_stack'][] = array('addJsDefL', array('name'=>'addressesConfirm'));
$_block_repeat=true;
echo $_block_plugin1->addJsDefL(array('name'=>'addressesConfirm'), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Are you sure?','js'=>1),$_smarty_tpl ) );
$_block_repeat=false;
echo $_block_plugin1->addJsDefL(array('name'=>'addressesConfirm'), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);
}
}
