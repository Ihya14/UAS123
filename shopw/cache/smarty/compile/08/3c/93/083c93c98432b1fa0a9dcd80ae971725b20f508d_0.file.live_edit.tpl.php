<?php
/* Smarty version 4.2.1, created on 2023-01-12 14:08:39
  from 'D:\xampp\htdocs\shopw\themes\live_edit.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.2.1',
  'unifunc' => 'content_63bfa3e724e586_38584355',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '083c93c98432b1fa0a9dcd80ae971725b20f508d' => 
    array (
      0 => 'D:\\xampp\\htdocs\\shopw\\themes\\live_edit.tpl',
      1 => 1668409880,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_63bfa3e724e586_38584355 (Smarty_Internal_Template $_smarty_tpl) {
echo '<script'; ?>
>
	var ad = '<?php echo addcslashes($_smarty_tpl->tpl_vars['ad']->value,'\'');?>
';
	var lastMove = '';
	var saveOK = '<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Module position saved','js'=>1),$_smarty_tpl ) );?>
';
	var confirmClose = '<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Are you sure? If you close this window, its position will not be saved','js'=>1),$_smarty_tpl ) );?>
';
	var close = '<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Close','js'=>1),$_smarty_tpl ) );?>
';
	var cancel = '<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Cancel','js'=>1),$_smarty_tpl ) );?>
';
	var confirm = '<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Confirm','js'=>1),$_smarty_tpl ) );?>
';
	var add = '<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Add this module','js'=>1),$_smarty_tpl ) );?>
';
	var unableToUnregisterHook = '<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Unable to unregister hook','js'=>1),$_smarty_tpl ) );?>
';
	var unableToSaveModulePosition = '<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Unable to save module position','js'=>1),$_smarty_tpl ) );?>
';
	var loadFail = '<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Failed to load module list','js'=>1),$_smarty_tpl ) );?>
';
<?php echo '</script'; ?>
>

<div style=" background-color:000; background-color: rgba(0,0,0, 0.7); border-bottom: 1px solid #000; width:100%;height:45px; padding:5px 10px; position:fixed;top:0;left:0;z-index:9999;">
<form id="liveEdit-action-form" action="./<?php echo $_smarty_tpl->tpl_vars['ad']->value;?>
/index.php" method="post">
	<input type="hidden" name="ajax" value="1" />
	<input type="hidden" name="id_shop" value="<?php echo $_smarty_tpl->tpl_vars['id_shop']->value;?>
" />
	<input type="hidden" name="token" value="<?php echo htmlspecialchars((string)$_GET['liveToken'], ENT_QUOTES, 'UTF-8', true);?>
" />
	<input type="hidden" name="tab" value="AdminModulesPositions" />
	<input type="hidden" name="action" value="saveHook" />

	<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['hook_list']->value, 'hook_name', false, 'hook_id');
$_smarty_tpl->tpl_vars['hook_name']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['hook_id']->value => $_smarty_tpl->tpl_vars['hook_name']->value) {
$_smarty_tpl->tpl_vars['hook_name']->do_else = false;
?>
		<input class="hook_list" type="hidden" name="hook_list[<?php echo $_smarty_tpl->tpl_vars['hook_id']->value;?>
]" 
			value="<?php echo $_smarty_tpl->tpl_vars['hook_name']->value;?>
" />
	<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
<div >
	<input type="submit" value="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Save'),$_smarty_tpl ) );?>
" name="saveHook" id="saveLiveEdit" class="exclusive" style="color:#fff;float:right; text-shadow: 0 -1px 0 #157402; margin-right:20px;">
	<input type="submit" value="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Close Live edit'),$_smarty_tpl ) );?>
" id="closeLiveEdit" class="button" style="background: #333 none; color:#fff; border:1px solid #000; float:right; margin-right:10px;">

</div>
</form>
	<div style="float:right;margin-right:20px;" id="live_edit_feed_back"></div>
</div>
<a href="#" style="display:none;" id="fancy"></a>
<div id="live_edit_feedback" style="width:400px"> 
	<p id="live_edit_feedback_str">
	</p> 
	<!-- <a href="javascript:;" onclick="$.fancybox.close();"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Close'),$_smarty_tpl ) );?>
</a> --> 
</div>	
<?php }
}
