<?php
/* Smarty version 4.2.1, created on 2023-01-12 13:39:18
  from 'D:\xampp\htdocs\shopw\admin622ozp8ob\themes\default\template\footer.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.2.1',
  'unifunc' => 'content_63bf9d06cde1b1_78195573',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'a0c47ec53624703250ec4820c12a9c9c38e265b3' => 
    array (
      0 => 'D:\\xampp\\htdocs\\shopw\\admin622ozp8ob\\themes\\default\\template\\footer.tpl',
      1 => 1668409880,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:error.tpl' => 1,
  ),
),false)) {
function content_63bf9d06cde1b1_78195573 (Smarty_Internal_Template $_smarty_tpl) {
?>
	</div>
</div>
<?php if ($_smarty_tpl->tpl_vars['display_footer']->value) {?>
<div id="footer" class="bootstrap hide">

	<div class="col-sm-2 hidden-xs">
		<a href="https://www.thirtybees.com/" class="_blank">thirty bees&trade;</a>
		-
		<span id="footer-load-time"><i class="icon-time" title="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Load time: '),$_smarty_tpl ) );?>
"></i> <?php echo number_format(microtime(true)-$_smarty_tpl->tpl_vars['timer_start']->value,3,'.','');?>
s</span>
	</div>

	<div class="col-sm-2 hidden-xs">
		<div class="social-networks">
			<a class="link-social link-twitter _blank" href="https://twitter.com/thethirtybees" title="Twitter">
				<i class="icon-twitter"></i>
			</a>
			<a class="link-social link-facebook _blank" href="https://www.facebook.com/thirtybees" title="Facebook">
				<i class="icon-facebook"></i>
			</a>
			<a class="link-social link-github _blank" href="https://github.com/thirtybees" title="Github">
				<i class="icon-github"></i>
			</a>
			<a class="link-social link-reddit _blank" href="https://www.reddit.com/r/thirtybees/" title="Reddit">
				<i class="icon-reddit"></i>
			</a>
		</div>
	</div>
	<div class="col-sm-5">
		<div class="footer-contact">
			<a href="https://thirtybees.com/contact/?utm_source=back-office&amp;utm_medium=footer&amp;utm_campaign=back-office-<?php echo mb_strtoupper($_smarty_tpl->tpl_vars['lang_iso']->value ?? '', 'UTF-8');?>
&amp;utm_content=download" class="footer_link _blank">
				<i class="icon-envelope"></i>
				<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Contact'),$_smarty_tpl ) );?>

			</a>
			/&nbsp;
			<a href="https://github.com/thirtybees/thirtybees/issues" class="footer_link _blank">
				<i class="icon-bug"></i>
				<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Bug Tracker'),$_smarty_tpl ) );?>

			</a>
			/&nbsp;
			<a href="https://forum.thirtybees.com/?utm_source=back-office&amp;utm_medium=footer&amp;utm_campaign=back-office-<?php echo mb_strtoupper($_smarty_tpl->tpl_vars['lang_iso']->value ?? '', 'UTF-8');?>
&amp;utm_content=download" class="footer_link _blank">
				<i class="icon-comments"></i>
				<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Forum'),$_smarty_tpl ) );?>

			</a>
		</div>
	</div>

	<div class="col-sm-3">
		<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>"displayBackOfficeFooter"),$_smarty_tpl ) );?>

	</div>

	<div id="go-top" class="hide"><i class="icon-arrow-up"></i></div>
</div>
<?php }
if ((isset($_smarty_tpl->tpl_vars['php_errors']->value))) {?>
	<?php $_smarty_tpl->_subTemplateRender("file:error.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}?>

<?php if ((isset($_smarty_tpl->tpl_vars['modals']->value))) {?>
<div class="bootstrap">
	<?php echo $_smarty_tpl->tpl_vars['modals']->value;?>

</div>
<?php }?>

</body>
</html>
<?php }
}
