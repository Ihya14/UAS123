<?php
/* Smarty version 4.2.1, created on 2023-01-12 23:15:20
  from 'D:\xampp\htdocs\shopw\admin622ozp8ob\themes\default\template\controllers\dashboard\helpers\view\view.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.2.1',
  'unifunc' => 'content_63c02408c1d552_61153951',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'd1d526f7c9ee3eec6ea1440fb5d8ff170c208979' => 
    array (
      0 => 'D:\\xampp\\htdocs\\shopw\\admin622ozp8ob\\themes\\default\\template\\controllers\\dashboard\\helpers\\view\\view.tpl',
      1 => 1668409880,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_63c02408c1d552_61153951 (Smarty_Internal_Template $_smarty_tpl) {
echo '<script'; ?>
>
	var dashboard_ajax_url = '<?php echo $_smarty_tpl->tpl_vars['link']->value->getAdminLink('AdminDashboard');?>
';
	var adminstats_ajax_url = '<?php echo $_smarty_tpl->tpl_vars['link']->value->getAdminLink('AdminStats');?>
';
	var no_results_translation = '<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'No result','js'=>1),$_smarty_tpl ) );?>
';
	var read_more = '<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Read more','js'=>1),$_smarty_tpl ) );?>
';
<?php echo '</script'; ?>
>

<div id="dashboard">
	<div class="row">
		<div class="col-lg-12">
<?php if ($_smarty_tpl->tpl_vars['warning']->value) {?>
			<div class="alert alert-warning"><?php echo $_smarty_tpl->tpl_vars['warning']->value;?>
</div>
<?php }?>
			<div id="calendar" class="panel">
				<form action="<?php echo htmlspecialchars((string)$_smarty_tpl->tpl_vars['action']->value, ENT_QUOTES, 'UTF-8', true);?>
" method="post" id="calendar_form" name="calendar_form" class="form-inline">
					<div class="btn-group">
						<button type="button" name="submitDateDay" class="btn btn-default submitDateDay<?php if ((isset($_smarty_tpl->tpl_vars['preselect_date_range']->value)) && $_smarty_tpl->tpl_vars['preselect_date_range']->value == 'day') {?> active<?php }?>">
							<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Day'),$_smarty_tpl ) );?>

						</button>
						<button type="button" name="submitDateMonth" class="btn btn-default submitDateMonth<?php if ((!(isset($_smarty_tpl->tpl_vars['preselect_date_range']->value)) || !$_smarty_tpl->tpl_vars['preselect_date_range']->value) || ((isset($_smarty_tpl->tpl_vars['preselect_date_range']->value)) && $_smarty_tpl->tpl_vars['preselect_date_range']->value == 'month')) {?> active<?php }?>">
							<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Month'),$_smarty_tpl ) );?>

						</button>
						<button type="button" name="submitDateYear" class="btn btn-default submitDateYear<?php if ((isset($_smarty_tpl->tpl_vars['preselect_date_range']->value)) && $_smarty_tpl->tpl_vars['preselect_date_range']->value == 'year') {?> active<?php }?>">
							<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Year'),$_smarty_tpl ) );?>

						</button>
						<button type="button" name="submitDateDayPrev" class="btn btn-default submitDateDayPrev<?php if ((isset($_smarty_tpl->tpl_vars['preselect_date_range']->value)) && $_smarty_tpl->tpl_vars['preselect_date_range']->value == 'prev-day') {?> active<?php }?>">
							<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Day'),$_smarty_tpl ) );?>
-1
						</button>
						<button type="button" name="submitDateMonthPrev" class="btn btn-default submitDateMonthPrev<?php if ((isset($_smarty_tpl->tpl_vars['preselect_date_range']->value)) && $_smarty_tpl->tpl_vars['preselect_date_range']->value == 'prev-month') {?> active<?php }?>">
							<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Month'),$_smarty_tpl ) );?>
-1
						</button>
						<button type="button" name="submitDateYearPrev" class="btn btn-default submitDateYearPrev<?php if ((isset($_smarty_tpl->tpl_vars['preselect_date_range']->value)) && $_smarty_tpl->tpl_vars['preselect_date_range']->value == 'prev-year') {?> active<?php }?>">
							<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Year'),$_smarty_tpl ) );?>
-1
						</button>
					</div>
					<input type="hidden" name="datepickerFrom" id="datepickerFrom" value="<?php echo htmlspecialchars((string)$_smarty_tpl->tpl_vars['date_from']->value, ENT_QUOTES, 'UTF-8', true);?>
" class="form-control">
					<input type="hidden" name="datepickerTo" id="datepickerTo" value="<?php echo htmlspecialchars((string)$_smarty_tpl->tpl_vars['date_to']->value, ENT_QUOTES, 'UTF-8', true);?>
" class="form-control">
					<input type="hidden" name="preselectDateRange" id="preselectDateRange" value="<?php if ((isset($_smarty_tpl->tpl_vars['preselect_date_range']->value))) {
echo htmlspecialchars((string)$_smarty_tpl->tpl_vars['preselect_date_range']->value, ENT_QUOTES, 'UTF-8', true);
}?>" class="form-control">
					<div class="form-group pull-right">
						<button id="datepickerExpand" class="btn btn-default" type="button">
							<i class="icon-calendar-empty"></i>
							<span class="hidden-xs">
								<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'From'),$_smarty_tpl ) );?>

								<strong class="text-info" id="datepicker-from-info"><?php echo htmlspecialchars((string)$_smarty_tpl->tpl_vars['date_from']->value, ENT_QUOTES, 'UTF-8', true);?>
</strong>
								<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'To'),$_smarty_tpl ) );?>

								<strong class="text-info" id="datepicker-to-info"><?php echo htmlspecialchars((string)$_smarty_tpl->tpl_vars['date_to']->value, ENT_QUOTES, 'UTF-8', true);?>
</strong>
								<strong class="text-info" id="datepicker-diff-info"></strong>
							</span>
							<i class="icon-caret-down"></i>
						</button>
					</div>
					<?php echo $_smarty_tpl->tpl_vars['calendar']->value;?>

				</form>
			</div>
		</div>
	</div>
	<div class="row">
		<div class="col-md-4 col-lg-3" id="hookDashboardZoneOne">
			<?php echo $_smarty_tpl->tpl_vars['hookDashboardZoneOne']->value;?>

		</div>
		<div class="col-md-8 col-lg-7" id="hookDashboardZoneTwo">
			<?php echo $_smarty_tpl->tpl_vars['hookDashboardZoneTwo']->value;?>

		</div>
		<div class="col-md-12 col-lg-2">
			<section class="dash_news panel">
				<h3><i class="icon-rss"></i> <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'thirty bees News'),$_smarty_tpl ) );?>
</h3>
				<div class="dash_news_content"></div>
				<div class="text-center"><h4><a href="https://thirtybees.com/blog/" onclick="return !window.open(this.href, '_blank');"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Find more news'),$_smarty_tpl ) );?>
</a></h4></div>
			</section>
			<section class="dash_links panel">
				<h3><i class="icon-link"></i> <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>"Useful links"),$_smarty_tpl ) );?>
</h3>
					<dl>
						<dt><a href="https://docs.thirtybees.com/" class="_blank"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>"Official Documentation"),$_smarty_tpl ) );?>
</a></dt>
						<dd><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>"User, Developer and Designer Guides"),$_smarty_tpl ) );?>
</dd>
					</dl>
					<dl>
						<dt><a href="https://forum.thirtybees.com/?utm_source=back-office&amp;utm_medium=dashboard&amp;utm_campaign=back-office-<?php echo mb_strtoupper($_smarty_tpl->tpl_vars['lang_iso']->value ?? '', 'UTF-8');?>
&amp;utm_content=download" class="_blank"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>"thirty bees Forum"),$_smarty_tpl ) );?>
</a></dt>
						<dd><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>"Connect with the thirty bees community"),$_smarty_tpl ) );?>
</dd>
					</dl>
					<dl>
						<dt><a href="https://store.thirtybees.com?utm_source=back-office&amp;utm_medium=dashboard&amp;utm_campaign=back-office-<?php echo mb_strtoupper($_smarty_tpl->tpl_vars['lang_iso']->value ?? '', 'UTF-8');?>
&amp;utm_content=download" class="_blank"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>"thirty bees apps"),$_smarty_tpl ) );?>
</a></dt>
						<dd><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>"Enhance your store with templates & modules"),$_smarty_tpl ) );?>
</dd>
					</dl>
					<dl>
						<dt><a href="https://github.com/thirtybees/thirtybees/issues" class="_blank"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>"GitHub issues page"),$_smarty_tpl ) );?>
</a></dt>
						<dd><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>"Report issues in the Bug Tracker"),$_smarty_tpl ) );?>
</dd>
					</dl>
			</section>
		</div>
	</div>
</div>
<?php }
}
