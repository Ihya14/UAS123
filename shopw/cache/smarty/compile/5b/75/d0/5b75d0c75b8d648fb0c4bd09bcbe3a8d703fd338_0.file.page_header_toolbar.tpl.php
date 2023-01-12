<?php
/* Smarty version 4.2.1, created on 2023-01-12 13:39:40
  from 'D:\xampp\htdocs\shopw\admin622ozp8ob\themes\default\template\controllers\modules\page_header_toolbar.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.2.1',
  'unifunc' => 'content_63bf9d1c9a4d62_95363803',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '5b75d0c75b8d648fb0c4bd09bcbe3a8d703fd338' => 
    array (
      0 => 'D:\\xampp\\htdocs\\shopw\\admin622ozp8ob\\themes\\default\\template\\controllers\\modules\\page_header_toolbar.tpl',
      1 => 1668409880,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_63bf9d1c9a4d62_95363803 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>




<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_18244247663bf9d1c9898a1_77042348', 'pageTitle');
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_81862561863bf9d1c98b7d5_98780256', 'toolbarBox');
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, "page_header_toolbar.tpl");
}
/* {block 'pageTitle'} */
class Block_18244247663bf9d1c9898a1_77042348 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'pageTitle' => 
  array (
    0 => 'Block_18244247663bf9d1c9898a1_77042348',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

<h2 class="page-title">
	<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'List of modules'),$_smarty_tpl ) );?>

</h2>
<?php
}
}
/* {/block 'pageTitle'} */
/* {block 'toolbarBox'} */
class Block_81862561863bf9d1c98b7d5_98780256 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'toolbarBox' => 
  array (
    0 => 'Block_81862561863bf9d1c98b7d5_98780256',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

<div class="page-bar toolbarBox">
	<div class="btn-toolbar">
		<ul class="nav nav-pills pull-right">
			<?php if (Module::isEnabled('tbupdater')) {?>
				<?php if ((isset($_smarty_tpl->tpl_vars['upgrade_available']->value)) && count($_smarty_tpl->tpl_vars['upgrade_available']->value)) {?>
				<?php $_smarty_tpl->_assignInScope('modules', '');?>
				<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['upgrade_available']->value, 'module');
$_smarty_tpl->tpl_vars['module']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['module']->value) {
$_smarty_tpl->tpl_vars['module']->do_else = false;
?>
					<?php $_smarty_tpl->_assignInScope('modules', ($_smarty_tpl->tpl_vars['modules']->value).($_smarty_tpl->tpl_vars['module']->value['name']).('|'));?>
				<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
				<?php $_smarty_tpl->_assignInScope('modules', substr($_smarty_tpl->tpl_vars['modules']->value,0,-1));?>
					<li>
						<a id="desc-module-update-all" class="toolbar_btn" href="<?php echo htmlspecialchars((string)$_smarty_tpl->tpl_vars['currentIndex']->value, ENT_QUOTES, 'UTF-8', true);?>
&amp;token=<?php echo htmlspecialchars((string)$_smarty_tpl->tpl_vars['token']->value, ENT_QUOTES, 'UTF-8', true);?>
&amp;updateAll=1" title="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Update all'),$_smarty_tpl ) );?>
">
							<i class="process-icon-refresh"></i>
							<div><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Update all'),$_smarty_tpl ) );?>
</div>
						</a>
					</li>
				<?php } else { ?>
					<li>
						<a id="desc-module-check-and-update-all" class="toolbar_btn" href="<?php echo htmlspecialchars((string)$_smarty_tpl->tpl_vars['currentIndex']->value, ENT_QUOTES, 'UTF-8', true);?>
&amp;token=<?php echo htmlspecialchars((string)$_smarty_tpl->tpl_vars['token']->value, ENT_QUOTES, 'UTF-8', true);?>
&amp;check=1" title="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Check for update'),$_smarty_tpl ) );?>
">
							<i class="process-icon-refresh"></i>
							<div><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Check for update'),$_smarty_tpl ) );?>
</div>
						</a>
					</li>
				<?php }?>
            <?php }?>
			<?php if ($_smarty_tpl->tpl_vars['add_permission']->value == '1' && ($_smarty_tpl->tpl_vars['context_mode']->value != Context::MODE_HOST)) {?>
			<li>
				<a id="desc-module-new" class="toolbar_btn anchor" href="#" onclick="$('#module_install').slideToggle();" title="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Add a new module'),$_smarty_tpl ) );?>
">
					<i class="process-icon-new"></i>
					<div><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Add a new module'),$_smarty_tpl ) );?>
</div>
				</a>
			</li>
			<?php } else { ?>
			<li>
				<a id="desc-module-new" class="toolbar_btn" href="<?php echo $_smarty_tpl->tpl_vars['link']->value->getAdminLink('AdminModules');?>
&addnewmodule" title="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Add a new module'),$_smarty_tpl ) );?>
">
					<i class="process-icon-new"></i>
					<div><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Add a new module'),$_smarty_tpl ) );?>
</div>
				</a>
			</li>
			<?php }?>
			<?php if ((isset($_smarty_tpl->tpl_vars['help_link']->value))) {?>
			<li>
				<a class="toolbar_btn  btn-help" href="<?php echo htmlspecialchars((string)$_smarty_tpl->tpl_vars['help_link']->value, ENT_QUOTES, 'UTF-8', true);?>
" title="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Help'),$_smarty_tpl ) );?>
">
					<i class="process-icon-help"></i>
					<div><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Help'),$_smarty_tpl ) );?>
</div>
				</a>
			</li>
			<?php }?>
		</ul>
	</div>
</div>
<?php
}
}
/* {/block 'toolbarBox'} */
}
