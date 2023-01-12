<?php
/* Smarty version 4.2.1, created on 2023-01-12 22:54:08
  from 'D:\xampp\htdocs\shopw\modules\blocklayered\views\templates\admin\view.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.2.1',
  'unifunc' => 'content_63c01f109bcd51_33214928',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'b87b39fd2025a9439797b6aa0d22970e70f2daa3' => 
    array (
      0 => 'D:\\xampp\\htdocs\\shopw\\modules\\blocklayered\\views\\templates\\admin\\view.tpl',
      1 => 1658127391,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_63c01f109bcd51_33214928 (Smarty_Internal_Template $_smarty_tpl) {
if ((isset($_smarty_tpl->tpl_vars['message']->value))) {
echo $_smarty_tpl->tpl_vars['message']->value;
}?>
<div id="ajax-message-ok" class="conf ajax-message alert alert-success" style="display: none">
	<span class="message"></span>
</div>
<div id="ajax-message-ko" class="error ajax-message alert alert-danger" style="display: none">
	<span class="message"></span>
</div>
<?php if (!empty($_smarty_tpl->tpl_vars['limit_warning']->value)) {?>
	<div class="alert alert-danger">
		<?php if ($_smarty_tpl->tpl_vars['limit_warning']->value['error_type'] == 'suhosin') {?>
			<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Warning! Your hosting provider is using the Suhosin patch for PHP, which limits the maximum number of fields allowed in a form:'),$_smarty_tpl ) );?>


			<b><?php echo $_smarty_tpl->tpl_vars['limit_warning']->value['post.max_vars'];?>
</b> <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'for suhosin.post.max_vars.'),$_smarty_tpl ) );?>
<br/>
			<b><?php echo $_smarty_tpl->tpl_vars['limit_warning']->value['request.max_vars'];?>
</b> <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'for suhosin.request.max_vars.'),$_smarty_tpl ) );?>
<br/>
			<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Please ask your hosting provider to increase the Suhosin limit to'),$_smarty_tpl ) );?>

		<?php } else { ?>
			<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Warning! Your PHP configuration limits the maximum number of fields allowed in a form:'),$_smarty_tpl ) );?>
<br/>
			<b><?php echo $_smarty_tpl->tpl_vars['limit_warning']->value['max_input_vars'];?>
</b> <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'for max_input_vars.'),$_smarty_tpl ) );?>
<br/>
			<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Please ask your hosting provider to increase this limit to'),$_smarty_tpl ) );?>

		<?php }?>
		<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'%s at least, or you will have to edit the translation files manually.','sprintf'=>$_smarty_tpl->tpl_vars['limit_warning']->value['needed_limit']),$_smarty_tpl ) );?>

	</div>
<?php }?>
<div class="panel">
	<h3><i class="icon-cogs"></i> <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Indexes and caches','mod'=>'blocklayered'),$_smarty_tpl ) );?>
</h3>
	<div id="indexing-warning" class="alert alert-warning" style="display: none">
		<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Indexing is in progress. Please do not leave this page','mod'=>'blocklayered'),$_smarty_tpl ) );?>

	</div>
	<div class="row">
		<p>
			<a class="ajaxcall-recurcive btn btn-default" href="<?php echo $_smarty_tpl->tpl_vars['price_indexer_url']->value;?>
"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Index all missing prices','mod'=>'blocklayered'),$_smarty_tpl ) );?>
</a>
			<a class="ajaxcall-recurcive btn btn-default" href="<?php echo $_smarty_tpl->tpl_vars['full_price_indexer_url']->value;?>
"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Rebuild entire price index','mod'=>'blocklayered'),$_smarty_tpl ) );?>
</a>
			<a class="ajaxcall btn btn-default" id="attribute-indexer" rel="attribute" href="<?php echo $_smarty_tpl->tpl_vars['attribute_indexer_url']->value;?>
"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Build attribute index','mod'=>'blocklayered'),$_smarty_tpl ) );?>
</a>
			<a class="ajaxcall btn btn-default" id="url-indexer" rel="price" href="<?php echo $_smarty_tpl->tpl_vars['url_indexer_url']->value;?>
"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Build URL index','mod'=>'blocklayered'),$_smarty_tpl ) );?>
</a>
		</p>
	</div>
	<div class="row">
		<div class="alert alert-info">
			<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'You can set a cron job that will rebuild price index using the following URL:','mod'=>'blocklayered'),$_smarty_tpl ) );?>

			<br />
			<strong><?php echo $_smarty_tpl->tpl_vars['price_indexer_url']->value;?>
</strong>
			<br/>
			<br />
			<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'You can set a cron job that will rebuild attribute index using the following URL:','mod'=>'blocklayered'),$_smarty_tpl ) );?>

			<br />
			<strong><?php echo $_smarty_tpl->tpl_vars['attribute_indexer_url']->value;?>
</strong>
			<br/>
			<br />
			<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'You can set a cron job that will rebuild URL index using the following URL:','mod'=>'blocklayered'),$_smarty_tpl ) );?>

			<br />
			<strong><?php echo $_smarty_tpl->tpl_vars['url_indexer_url']->value;?>
</strong>
		</div>
	</div>
	<div class="row">
		<div class="alert alert-info"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'A nightly rebuild is recommended.','mod'=>'blocklayered'),$_smarty_tpl ) );?>
</div>
	</div>
</div>
<div class="panel">
	<h3><i class="icon-cogs"></i> <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Filters templates','mod'=>'blocklayered'),$_smarty_tpl ) );?>
<span class="badge"><?php echo count($_smarty_tpl->tpl_vars['filters_templates']->value);?>
</span></h3>
	<?php if (count($_smarty_tpl->tpl_vars['filters_templates']->value) > 0) {?>
	<div class="row">
		<table class="table">
			<thead>
				<tr>
					<th class="fixed-width-xs center"><span class="title_box"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'ID','mod'=>'blocklayered'),$_smarty_tpl ) );?>
</span></th>
					<th><span class="title_box text-left"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Name','mod'=>'blocklayered'),$_smarty_tpl ) );?>
</span></th>
					<th class="fixed-width-sm center"><span class="title_box"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Categories','mod'=>'blocklayered'),$_smarty_tpl ) );?>
</span></th>
					<th class="fixed-width-lg"><span class="title_box"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Created on','mod'=>'blocklayered'),$_smarty_tpl ) );?>
</span></th>
					<th class="fixed-width-sm"><span class="title_box text-right"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Actions','mod'=>'blocklayered'),$_smarty_tpl ) );?>
</span></th>
				</tr>
			</thead>
			<tbody>
				<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['filters_templates']->value, 'template');
$_smarty_tpl->tpl_vars['template']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['template']->value) {
$_smarty_tpl->tpl_vars['template']->do_else = false;
?>
				<tr>
					<td class="center"><?php echo (int)$_smarty_tpl->tpl_vars['template']->value['id_layered_filter'];?>
</td>
					<td class="text-left"><?php echo $_smarty_tpl->tpl_vars['template']->value['name'];?>
</td>
					<td class="center"><?php echo (int)$_smarty_tpl->tpl_vars['template']->value['n_categories'];?>
</td>
					<td><?php echo Tools::displayDate($_smarty_tpl->tpl_vars['template']->value['date_add'],null,true);?>
</td>
					<td>
						<?php if (empty($_smarty_tpl->tpl_vars['limit_warning']->value)) {?>
						<div class="btn-group-action">
							<div class="btn-group pull-right">
								<a href="<?php echo $_smarty_tpl->tpl_vars['current_url']->value;?>
&amp;edit_filters_template=1&amp;id_layered_filter=<?php echo (int)$_smarty_tpl->tpl_vars['template']->value['id_layered_filter'];?>
" class="btn btn-default">
									<i class="icon-pencil"></i> <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Edit','mod'=>'blocklayered'),$_smarty_tpl ) );?>

								</a>
								<button class="btn btn-default dropdown-toggle" data-toggle="dropdown">
									<span class="caret"></span>&nbsp;
								</button>
								<ul class="dropdown-menu">
									<li>
										<a href="<?php echo $_smarty_tpl->tpl_vars['current_url']->value;?>
&amp;deleteFilterTemplate=1&amp;id_layered_filter=<?php echo (int)$_smarty_tpl->tpl_vars['template']->value['id_layered_filter'];?>
"
						onclick="return confirm('<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Do you really want to delete this filter template?','mod'=>'blocklayered'),$_smarty_tpl ) );?>
');">
											<i class="icon-trash"></i> <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Delete','mod'=>'blocklayered'),$_smarty_tpl ) );?>

										</a>
									</li>
								</ul>
							</div>
						</div>
						<?php }?>
					</td>
				</tr>
				<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
			</tbody>
		</table>
		<div class="clearfix">&nbsp;</div>
	</div>
	<?php } else { ?>
		<div class="row alert alert-warning"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'No filter template found.','mod'=>'blocklayered'),$_smarty_tpl ) );?>
</div>
	<?php }?>
	<?php if (empty($_smarty_tpl->tpl_vars['limit_warning']->value)) {?>
	<div class="panel-footer">
		<a class="btn btn-default pull-right" href="<?php echo $_smarty_tpl->tpl_vars['current_url']->value;?>
&amp;add_new_filters_template=1"><i class="process-icon-plus"></i> <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Add new template','mod'=>'blocklayered'),$_smarty_tpl ) );?>
</a>
	</div>
	<?php }?>
</div>
<div class="panel">
	<h3><i class="icon-cogs"></i> <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Configuration','mod'=>'blocklayered'),$_smarty_tpl ) );?>
</h3>
	<form action="<?php echo $_smarty_tpl->tpl_vars['current_url']->value;?>
" method="post" class="form-horizontal">
		<div class="form-group">
			<label class="col-lg-3 control-label"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Hide filter values when no product is matching','mod'=>'blocklayered'),$_smarty_tpl ) );?>
</label>
			<div class="col-lg-9">
				<span class="switch prestashop-switch fixed-width-lg">
					<input type="radio" name="ps_layered_hide_0_values" id="ps_layered_hide_0_values_on" value="1"<?php if ($_smarty_tpl->tpl_vars['hide_values']->value) {?> checked="checked"<?php }?>>
					<label for="ps_layered_hide_0_values_on" class="radioCheck">
						<i class="color_success"></i> <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Yes','mod'=>'blocklayered'),$_smarty_tpl ) );?>

					</label>
					<input type="radio" name="ps_layered_hide_0_values" id="ps_layered_hide_0_values_off" value="0"<?php if (!$_smarty_tpl->tpl_vars['hide_values']->value) {?> checked="checked"<?php }?>>
					<label for="ps_layered_hide_0_values_off" class="radioCheck">
						<i class="color_danger"></i> <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'No','mod'=>'blocklayered'),$_smarty_tpl ) );?>

					</label>
					<a class="slide-button btn"></a>
				</span>
			</div>
		</div>
		<div class="form-group">
			<label class="col-lg-3 control-label"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Show the number of matching products','mod'=>'blocklayered'),$_smarty_tpl ) );?>
</label>
			<div class="col-lg-9">
				<span class="switch prestashop-switch fixed-width-lg">
					<input type="radio" name="ps_layered_show_qties" id="ps_layered_show_qties_on" value="1"<?php if ($_smarty_tpl->tpl_vars['show_quantities']->value) {?> checked="checked"<?php }?>>
					<label for="ps_layered_show_qties_on" class="radioCheck">
						<i class="color_success"></i> <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Yes','mod'=>'blocklayered'),$_smarty_tpl ) );?>

					</label>
					<input type="radio" name="ps_layered_show_qties" id="ps_layered_show_qties_off" value="0"<?php if (!$_smarty_tpl->tpl_vars['show_quantities']->value) {?> checked="checked"<?php }?>>
					<label for="ps_layered_show_qties_off" class="radioCheck">
						<i class="color_danger"></i> <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'No','mod'=>'blocklayered'),$_smarty_tpl ) );?>

					</label>
					<a class="slide-button btn"></a>
				</span>
			</div>
		</div>
		<div class="form-group">
			<label class="col-lg-3 control-label"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Show products from subcategories','mod'=>'blocklayered'),$_smarty_tpl ) );?>
</label>
			<div class="col-lg-9">
				<span class="switch prestashop-switch fixed-width-lg">
					<input type="radio" name="ps_layered_full_tree" id="ps_layered_full_tree_on" value="1"<?php if ($_smarty_tpl->tpl_vars['full_tree']->value) {?> checked="checked"<?php }?>>
					<label for="ps_layered_full_tree_on" class="radioCheck">
						<i class="color_success"></i> <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Yes','mod'=>'blocklayered'),$_smarty_tpl ) );?>

					</label>
					<input type="radio" name="ps_layered_full_tree" id="ps_layered_full_tree_off" value="0"<?php if (!$_smarty_tpl->tpl_vars['full_tree']->value) {?> checked="checked"<?php }?>>
					<label for="ps_layered_full_tree_off" class="radioCheck">
						<i class="color_danger"></i> <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'No','mod'=>'blocklayered'),$_smarty_tpl ) );?>

					</label>
					<a class="slide-button btn"></a>
				</span>
			</div>
		</div>
		<div class="form-group">
			<label class="col-lg-3 control-label"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Category filter depth (0 for no limits, 1 by default)','mod'=>'blocklayered'),$_smarty_tpl ) );?>
</label>
			<div class="col-lg-9">
				<input type="text" name="ps_layered_filter_category_depth" value="<?php if ($_smarty_tpl->tpl_vars['category_depth']->value !== false) {
echo $_smarty_tpl->tpl_vars['category_depth']->value;
} else { ?>1<?php }?>" class="fixed-width-sm" />
			</div>
		</div>
		<div class="form-group">
			<label class="col-lg-3 control-label"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Use tax to filter price','mod'=>'blocklayered'),$_smarty_tpl ) );?>
</label>
			<div class="col-lg-9">
				<span class="switch prestashop-switch fixed-width-lg">
					<input type="radio" name="ps_layered_filter_price_usetax" id="ps_layered_filter_price_usetax_on" value="1"<?php if ($_smarty_tpl->tpl_vars['price_use_tax']->value) {?> checked="checked"<?php }?>>
					<label for="ps_layered_filter_price_usetax_on" class="radioCheck">
						<i class="color_success"></i> <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Yes','mod'=>'blocklayered'),$_smarty_tpl ) );?>

					</label>
					<input type="radio" name="ps_layered_filter_price_usetax" id="ps_layered_filter_price_usetax_off" value="0"<?php if (!$_smarty_tpl->tpl_vars['price_use_tax']->value) {?> checked="checked"<?php }?>>
					<label for="ps_layered_filter_price_usetax_off" class="radioCheck">
						<i class="color_danger"></i> <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'No','mod'=>'blocklayered'),$_smarty_tpl ) );?>

					</label>
					<a class="slide-button btn"></a>
				</span>
			</div>
		</div>
		<div class="form-group">
			<label class="col-lg-3 control-label"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Use rounding to filter price','mod'=>'blocklayered'),$_smarty_tpl ) );?>
</label>
			<div class="col-lg-9">
				<span class="switch prestashop-switch fixed-width-lg">
					<input type="radio" name="ps_layered_filter_price_rounding" id="ps_layered_filter_price_rounding_on" value="1"<?php if ($_smarty_tpl->tpl_vars['price_use_rounding']->value) {?> checked="checked"<?php }?>/>
					<label for="ps_layered_filter_price_rounding_on" class="radioCheck">
						<i class="color_success"></i> <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Yes','mod'=>'blocklayered'),$_smarty_tpl ) );?>

					</label>
					<input type="radio" name="ps_layered_filter_price_rounding" id="ps_layered_filter_price_rounding_off" value="0"<?php if (!$_smarty_tpl->tpl_vars['price_use_rounding']->value) {?> checked="checked"<?php }?>/>
					<label for="ps_layered_filter_price_rounding_off" class="radioCheck">
						<i class="color_danger"></i> <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'No','mod'=>'blocklayered'),$_smarty_tpl ) );?>

					</label>
					<a class="slide-button btn"></a>
				</span>
			</div>
		</div>
		<div class="form-group">
			<label class="col-lg-3 control-label"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Allow indexing robots (Google, Yahoo!, Bing, etc.) to use the Condition filter','mod'=>'blocklayered'),$_smarty_tpl ) );?>
</label>
			<div class="col-lg-9">
				<span class="switch prestashop-switch fixed-width-lg">
					<input type="radio" name="ps_layered_filter_index_condition" id="ps_layered_filter_index_condition_on" value="1"<?php if ($_smarty_tpl->tpl_vars['index_cdt']->value) {?> checked="checked"<?php }?>>
					<label for="ps_layered_filter_index_condition_on" class="radioCheck">
						<i class="color_success"></i> <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Yes','mod'=>'blocklayered'),$_smarty_tpl ) );?>

					</label>
					<input type="radio" name="ps_layered_filter_index_condition" id="ps_layered_filter_index_condition_off" value="0"<?php if (!$_smarty_tpl->tpl_vars['index_cdt']->value) {?> checked="checked"<?php }?>>
					<label for="ps_layered_filter_index_condition_off" class="radioCheck">
						<i class="color_danger"></i> <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'No','mod'=>'blocklayered'),$_smarty_tpl ) );?>

					</label>
					<a class="slide-button btn"></a>
				</span>
			</div>
		</div>
		<div class="form-group">
			<label class="col-lg-3 control-label"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Allow indexing robots (Google, Yahoo!, Bing, etc.) to use the Availability filter','mod'=>'blocklayered'),$_smarty_tpl ) );?>
</label>
			<div class="col-lg-9">
				<span class="switch prestashop-switch fixed-width-lg">
					<input type="radio" name="ps_layered_filter_index_availability" id="ps_layered_filter_index_availability_on" value="1"<?php if ($_smarty_tpl->tpl_vars['index_qty']->value) {?> checked="checked"<?php }?>>
					<label for="ps_layered_filter_index_availability_on" class="radioCheck">
						<i class="color_success"></i> <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Yes','mod'=>'blocklayered'),$_smarty_tpl ) );?>

					</label>
					<input type="radio" name="ps_layered_filter_index_availability" id="ps_layered_filter_index_availability_off" value="0"<?php if (!$_smarty_tpl->tpl_vars['index_qty']->value) {?> checked="checked"<?php }?>>
					<label for="ps_layered_filter_index_availability_off" class="radioCheck">
						<i class="color_danger"></i> <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'No','mod'=>'blocklayered'),$_smarty_tpl ) );?>

					</label>
					<a class="slide-button btn"></a>
				</span>
			</div>
		</div>
		<div class="form-group">
			<label class="col-lg-3 control-label"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Allow indexing robots (Google, Yahoo!, Bing, etc.) to use the Manufacturer filter','mod'=>'blocklayered'),$_smarty_tpl ) );?>
</label>
			<div class="col-lg-9">
				<span class="switch prestashop-switch fixed-width-lg">
					<input type="radio" name="ps_layered_filter_index_manufacturer" id="ps_layered_filter_index_manufacturer_on" value="1"<?php if ($_smarty_tpl->tpl_vars['index_mnf']->value) {?> checked="checked"<?php }?>>
					<label for="ps_layered_filter_index_manufacturer_on" class="radioCheck">
						<i class="color_success"></i> <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Yes','mod'=>'blocklayered'),$_smarty_tpl ) );?>

					</label>
					<input type="radio" name="ps_layered_filter_index_manufacturer" id="ps_layered_filter_index_manufacturer_off" value="0"<?php if (!$_smarty_tpl->tpl_vars['index_mnf']->value) {?> checked="checked"<?php }?>>
					<label for="ps_layered_filter_index_manufacturer_off" class="radioCheck">
						<i class="color_danger"></i> <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'No','mod'=>'blocklayered'),$_smarty_tpl ) );?>

					</label>
					<a class="slide-button btn"></a>
				</span>
			</div>
		</div>
		<div class="form-group">
			<label class="col-lg-3 control-label"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Allow indexing robots (Google, Yahoo!, Bing, etc.) to use the Category filter','mod'=>'blocklayered'),$_smarty_tpl ) );?>
</label>
			<div class="col-lg-9">
				<span class="switch prestashop-switch fixed-width-lg">
					<input type="radio" name="ps_layered_filter_index_category" id="ps_layered_filter_index_category_on" value="1"<?php if ($_smarty_tpl->tpl_vars['index_cat']->value) {?> checked="checked"<?php }?>>
					<label for="ps_layered_filter_index_category_on" class="radioCheck">
						<i class="color_success"></i> <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Yes','mod'=>'blocklayered'),$_smarty_tpl ) );?>

					</label>
					<input type="radio" name="ps_layered_filter_index_category" id="ps_layered_filter_index_category_off" value="0"<?php if (!$_smarty_tpl->tpl_vars['index_cat']->value) {?> checked="checked"<?php }?>>
					<label for="ps_layered_filter_index_category_off" class="radioCheck">
						<i class="color_danger"></i> <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'No','mod'=>'blocklayered'),$_smarty_tpl ) );?>

					</label>
					<a class="slide-button btn"></a>
				</span>
			</div>
		</div>
		<div class="panel-footer">
			<button type="submit" class="btn btn-default pull-right" name="submitLayeredSettings"><i class="process-icon-save"></i> <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Save','mod'=>'blocklayered'),$_smarty_tpl ) );?>
</button>
		</div>
	</form>
</div>

<?php echo '<script'; ?>
 type="text/javascript">
	<?php if ((isset($_smarty_tpl->tpl_vars['PS_LAYERED_INDEXED']->value))) {?>var PS_LAYERED_INDEXED = <?php echo $_smarty_tpl->tpl_vars['PS_LAYERED_INDEXED']->value;?>
;<?php }?>
	var token = '<?php echo $_smarty_tpl->tpl_vars['token']->value;?>
';
	var id_lang = <?php echo $_smarty_tpl->tpl_vars['id_lang']->value;?>
;
	var base_folder = '<?php echo $_smarty_tpl->tpl_vars['base_folder']->value;?>
';
	var translations = new Array();

	translations['in_progress'] = '<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'(in progress)','js'=>1,'mod'=>'blocklayered'),$_smarty_tpl ) );?>
';
	translations['url_indexation_finished'] = '<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'URL indexing finished','js'=>1,'mod'=>'blocklayered'),$_smarty_tpl ) );?>
';
	translations['attribute_indexation_finished'] = '<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Attribute indexing finished','js'=>1,'mod'=>'blocklayered'),$_smarty_tpl ) );?>
';
	translations['url_indexation_failed'] = '<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'URL indexing failed','js'=>1,'mod'=>'blocklayered'),$_smarty_tpl ) );?>
';
	translations['attribute_indexation_failed'] = '<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Attribute indexing failed','js'=>1,'mod'=>'blocklayered'),$_smarty_tpl ) );?>
';
	translations['price_indexation_finished'] = '<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Price indexing finished','js'=>1,'mod'=>'blocklayered'),$_smarty_tpl ) );?>
';
	translations['price_indexation_failed'] = '<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Price indexing failed','js'=>1,'mod'=>'blocklayered'),$_smarty_tpl ) );?>
';
	translations['price_indexation_in_progress'] = '<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'(in progress, %s products price to index)','js'=>1,'mod'=>'blocklayered'),$_smarty_tpl ) );?>
';
	translations['loading'] = '<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Loading...','js'=>1,'mod'=>'blocklayered'),$_smarty_tpl ) );?>
';
	translations['delete_all_filters_templates'] = '<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'You selected -All categories-: all existing filter templates will be deleted. Is it OK?','js'=>1,'mod'=>'blocklayered'),$_smarty_tpl ) );?>
';
	translations['no_selected_categories'] = '<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'You must select at least one category','js'=>1,'mod'=>'blocklayered'),$_smarty_tpl ) );?>
';
<?php echo '</script'; ?>
>
<?php }
}
