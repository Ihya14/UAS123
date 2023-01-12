<?php
/* Smarty version 4.2.1, created on 2023-01-12 22:37:33
  from 'D:\xampp\htdocs\shopw\themes\niara\order-slip.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.2.1',
  'unifunc' => 'content_63c01b2d3593f9_51553052',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'eed41d146921e1d5418c24d711b7f827e34d0c77' => 
    array (
      0 => 'D:\\xampp\\htdocs\\shopw\\themes\\niara\\order-slip.tpl',
      1 => 1664191549,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_63c01b2d3593f9_51553052 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'D:\\xampp\\htdocs\\shopw\\vendor\\smarty\\smarty\\libs\\plugins\\modifier.regex_replace.php','function'=>'smarty_modifier_regex_replace',),));
$_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, 'path', null, null);?><a href="<?php echo htmlspecialchars((string)$_smarty_tpl->tpl_vars['link']->value->getPageLink('my-account',true), ENT_QUOTES, 'UTF-8', true);?>
"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'My account'),$_smarty_tpl ) );?>
</a><span class="navigation-pipe"><?php echo $_smarty_tpl->tpl_vars['navigationPipe']->value;?>
</span><span class="navigation_page"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Credit slips'),$_smarty_tpl ) );?>
</span><?php $_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);?>

<h1 class="page-heading">
  <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Credit slips'),$_smarty_tpl ) );?>

</h1>
<p>
  <b><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Credit slips you have received after canceled orders'),$_smarty_tpl ) );?>
.</b>
</p>
<div class="block-center" id="block-history">
  <?php if ($_smarty_tpl->tpl_vars['ordersSlip']->value && count($_smarty_tpl->tpl_vars['ordersSlip']->value)) {?>
    <table id="order-list" class="table table-bordered footab">
      <thead>
      <tr>
        <th data-sort-ignore="true"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Credit slip'),$_smarty_tpl ) );?>
</th>
        <th data-sort-ignore="true"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Order'),$_smarty_tpl ) );?>
</th>
        <th><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Date issued'),$_smarty_tpl ) );?>
</th>
        <th data-sort-ignore="true" data-hide="phone"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'View credit slip'),$_smarty_tpl ) );?>
</th>
      </tr>
      </thead>
      <tbody>
      <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['ordersSlip']->value, 'slip', false, NULL, 'myLoop', array (
));
$_smarty_tpl->tpl_vars['slip']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['slip']->value) {
$_smarty_tpl->tpl_vars['slip']->do_else = false;
?>
        <tr>
          <td class="bold">
            <span>
              <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'#%s','sprintf'=>sprintf("%06d",$_smarty_tpl->tpl_vars['slip']->value['id_order_slip'])),$_smarty_tpl ) );?>

            </span>
          </td>
          <td class="history_method">
            <a href="javascript:showOrder(1, <?php echo intval($_smarty_tpl->tpl_vars['slip']->value['id_order']);?>
, '<?php echo htmlspecialchars((string)$_smarty_tpl->tpl_vars['link']->value->getPageLink('order-detail'), ENT_QUOTES, 'UTF-8', true);?>
');">
              <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'#%s','sprintf'=>sprintf("%06d",$_smarty_tpl->tpl_vars['slip']->value['id_order'])),$_smarty_tpl ) );?>

            </a>
          </td>
          <td class="bold" data-value="<?php echo smarty_modifier_regex_replace($_smarty_tpl->tpl_vars['slip']->value['date_add'],"/[\-\:\ ]/",'');?>
">
            <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['dateFormat'][0], array( array('date'=>$_smarty_tpl->tpl_vars['slip']->value['date_add'],'full'=>0),$_smarty_tpl ) );?>

          </td>
          <td class="history_invoice">
            <a class="btn btn-default" href="<?php ob_start();
echo intval($_smarty_tpl->tpl_vars['slip']->value['id_order_slip']);
$_prefixVariable1=ob_get_clean();
echo htmlspecialchars((string)$_smarty_tpl->tpl_vars['link']->value->getPageLink('pdf-order-slip',true,NULL,"id_order_slip=".$_prefixVariable1), ENT_QUOTES, 'UTF-8', true);?>
" title="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Credit slip'),$_smarty_tpl ) );?>
 <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'#%s','sprintf'=>sprintf("%06d",$_smarty_tpl->tpl_vars['slip']->value['id_order_slip'])),$_smarty_tpl ) );?>
">
              <i class="icon icon-file-text large"></i> <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'PDF'),$_smarty_tpl ) );?>

            </a>
          </td>
        </tr>
      <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
      </tbody>
    </table>
    <div id="block-order-detail" class="unvisible">&nbsp;</div>
  <?php } else { ?>
    <div class="alert alert-warning"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'You have not received any credit slips.'),$_smarty_tpl ) );?>
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
