<?php
/* Smarty version 4.2.1, created on 2023-01-12 22:28:18
  from 'D:\xampp\htdocs\shopw\modules\coreupdater\views\templates\admin\tab_update.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.2.1',
  'unifunc' => 'content_63c0190209ce69_98092587',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '187613d605c986fe85ffddf17bd59dc5c98a11d9' => 
    array (
      0 => 'D:\\xampp\\htdocs\\shopw\\modules\\coreupdater\\views\\templates\\admin\\tab_update.tpl',
      1 => 1666079804,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_63c0190209ce69_98092587 (Smarty_Internal_Template $_smarty_tpl) {
ob_start();
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Initializing...','mod'=>'coreupdater'),$_smarty_tpl ) );
$_prefixVariable1=ob_get_clean();
ob_start();
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Checking your installation','mod'=>'coreupdater'),$_smarty_tpl ) );
$_prefixVariable2=ob_get_clean();
ob_start();
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Core updater is currently comparing your installation with [1]%s[/1] version [2]%s[/2]','sprintf'=>array($_smarty_tpl->tpl_vars['targetVersion']->value['type'],$_smarty_tpl->tpl_vars['targetVersion']->value['version']),'tags'=>array('<b>','<b>'),'mod'=>'coreupdater'),$_smarty_tpl ) );
$_prefixVariable3=ob_get_clean();
ob_start();
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Updating your store','mod'=>'coreupdater'),$_smarty_tpl ) );
$_prefixVariable4=ob_get_clean();
ob_start();
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Core updater is currently updating your installation to [1]%s[/1] version [2]%s[/2]','sprintf'=>array($_smarty_tpl->tpl_vars['targetVersion']->value['type'],$_smarty_tpl->tpl_vars['targetVersion']->value['version']),'tags'=>array('<b>','<b>'),'mod'=>'coreupdater'),$_smarty_tpl ) );
$_prefixVariable5=ob_get_clean();
$_smarty_tpl->_assignInScope('translations', array("INITIALIZING"=>$_prefixVariable1,"CHECKING_YOUR_INSTALLATION"=>$_prefixVariable2,"CHECKING_DESCRIPTION"=>$_prefixVariable3,"UPDATE"=>$_prefixVariable4,"UPDATE_DESCRIPTION"=>$_prefixVariable5));?>
<div class="row">
  <div class="col-lg-12">
    <div class="panel" id="panel-progress">
      <div class="panel-heading" id="progress-header"></div>
      <p>
      <p class="alert alert-info" id="progress-description"></p>
      <div class="progress">
        <div class="progress-bar" id="progress-bar" style="width:0%">0.0%</div>
      </div>
      <p id="progress-bar-text" class="text-muted"></p>
    </div>
  </div>
</div>
</div>
<div class="row">
  <div class="col-lg-12">
    <div id="result"></div>
  </div>
</div>

<?php echo '<script'; ?>
 type="application/javascript">
    $(document).ready(function () {
        window.coreUpdater = initializeCoreUpdater(<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'json_encode' ][ 0 ], array( $_smarty_tpl->tpl_vars['translations']->value ));?>
);

        coreUpdater.compare(<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'json_encode' ][ 0 ], array( $_smarty_tpl->tpl_vars['process']->value ));?>
);
    });
<?php echo '</script'; ?>
>
<?php }
}
