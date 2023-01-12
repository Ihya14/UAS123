<?php
/* Smarty version 4.2.1, created on 2023-01-12 14:26:46
  from 'D:\xampp\htdocs\shopw\admin622ozp8ob\themes\default\template\controllers\products\virtualproduct.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.2.1',
  'unifunc' => 'content_63bfa826a39f64_28720846',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'b25edd154857674603640f8e0e256baae6a142cb' => 
    array (
      0 => 'D:\\xampp\\htdocs\\shopw\\admin622ozp8ob\\themes\\default\\template\\controllers\\products\\virtualproduct.tpl',
      1 => 1668409880,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_63bfa826a39f64_28720846 (Smarty_Internal_Template $_smarty_tpl) {
?>
<div id="product-virtualproduct" class="panel product-tab">
	<input type="hidden" name="submitted_tabs[]" value="VirtualProduct" />
	<input type="hidden" id="virtual_product_filename" name="virtual_product_filename" value="<?php echo $_smarty_tpl->tpl_vars['product']->value->productDownload->filename;?>
" />
	<h3><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Virtual Product (services, booking or downloadable products)'),$_smarty_tpl ) );?>
</h3>
	<div id="virtual_good" class="form-group">
		<div class="form-group">
			<label class="control-label col-lg-3"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Does this product have an associated file?'),$_smarty_tpl ) );?>
</label>
			<div class="col-lg-2">
				<span class="switch prestashop-switch fixed-width-lg">
					<input type="radio" name="is_virtual_file" id="is_virtual_file_on" value="1" <?php if ($_smarty_tpl->tpl_vars['product']->value->productDownload->id) {?> checked="checked"<?php }?> />
					<label for="is_virtual_file_on"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Yes'),$_smarty_tpl ) );?>
</label>
					<input type="radio" name="is_virtual_file" id="is_virtual_file_off" value="0" <?php if (!$_smarty_tpl->tpl_vars['product']->value->productDownload->id) {?> checked="checked"<?php }?> />
					<label for="is_virtual_file_off"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'No'),$_smarty_tpl ) );?>
</label>
					<a class="slide-button btn"></a>
				</span>
                <?php if ($_smarty_tpl->tpl_vars['product']->value->productDownload->id) {?>
                    <p class="help-block"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Turning this off also removes related data and the downloadable file.'),$_smarty_tpl ) );?>
</p>
                <?php }?>
			</div>
		</div>
		<div id="is_virtual_file_product"<?php if (!$_smarty_tpl->tpl_vars['product']->value->productDownload->id) {?> style="display:none;"<?php }?>>
            <hr>
            <div class="form-group">
                <label class="control-label col-lg-3"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Is this file active?'),$_smarty_tpl ) );?>
</label>
                <div class="col-lg-2">
                    <span class="switch prestashop-switch fixed-width-lg">
                        <input type="radio" name="virtual_product_active" id="virtual_product_active_on" value="1" <?php if ($_smarty_tpl->tpl_vars['product']->value->productDownload->active) {?> checked="checked"<?php }?> />
                        <label for="virtual_product_active_on"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Yes'),$_smarty_tpl ) );?>
</label>
                        <input type="radio" name="virtual_product_active" id="virtual_product_active_off" value="0" <?php if (!$_smarty_tpl->tpl_vars['product']->value->productDownload->active) {?> checked="checked"<?php }?> />
                        <label for="virtual_product_active_off"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'No'),$_smarty_tpl ) );?>
</label>
                        <a class="slide-button btn"></a>
                    </span>
                    <p class="help-block"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Deactivating the download makes it inaccessible to customers, but keeps related data and the file on disk.'),$_smarty_tpl ) );?>
</p>
                </div>
            </div>
						<?php if (empty($_smarty_tpl->tpl_vars['product']->value->cache_default_attribute)) {?>
				<?php if ($_smarty_tpl->tpl_vars['product']->value->productDownload->id) {?>
					<input type="hidden" id="virtual_product_id" name="virtual_product_id" value="<?php echo $_smarty_tpl->tpl_vars['product']->value->productDownload->id;?>
" />
				<?php }?>
				<div class="form-group"<?php if ($_smarty_tpl->tpl_vars['is_file']->value) {?> style="display:none"<?php }?>>
					<label id="virtual_product_file_label" for="virtual_product_file" class="control-label col-lg-3">
						<span class="label-tooltip" data-toggle="tooltip"
							title="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Upload a file from your computer'),$_smarty_tpl ) );?>
 (<?php echo sprintf('%.2f',Configuration::get('PS_ATTACHMENT_MAXIMUM_SIZE'));?>
 <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'MB max.'),$_smarty_tpl ) );?>
)">
							<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'File'),$_smarty_tpl ) );?>

						</span>
					</label>
					<div class="col-lg-5">
					<?php echo $_smarty_tpl->tpl_vars['virtual_product_file_uploader']->value;?>

					<p class="help-block"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Upload a file from your computer'),$_smarty_tpl ) );?>
 (<?php echo sprintf('%.2f',Configuration::get('PS_ATTACHMENT_MAXIMUM_SIZE'));?>
 <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'MB max.'),$_smarty_tpl ) );?>
)</p>
					</div>
				</div>
				<div class="form-group">
					<label class="control-label col-lg-3 required"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Filename'),$_smarty_tpl ) );?>
</label>
					<div class="col-lg-5">
						<input type="text" id="virtual_product_name" name="virtual_product_name" value="<?php echo htmlspecialchars((string)$_smarty_tpl->tpl_vars['product']->value->productDownload->display_filename, ENT_QUOTES, 'UTF-8', true);?>
" />
						<p class="help-block"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'The full filename with its extension (e.g. Book.pdf)'),$_smarty_tpl ) );?>
</p>
					</div>
				</div>
				<?php if ($_smarty_tpl->tpl_vars['is_file']->value) {?>
				<div class="form-group">
					<label class="control-label col-lg-3"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Link to the file:'),$_smarty_tpl ) );?>
</label>
					<div class="col-lg-5">
						<a href="<?php echo $_smarty_tpl->tpl_vars['product']->value->productDownload->getTextLink(true);?>
" class="btn btn-default"><i class="icon-download"></i> <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Download file'),$_smarty_tpl ) );?>
</a>
						<a href="<?php echo htmlspecialchars((string)$_smarty_tpl->tpl_vars['currentIndex']->value, ENT_QUOTES, 'UTF-8', true);?>
&amp;deleteVirtualProduct=true&amp;updateproduct&amp;token=<?php echo htmlspecialchars((string)$_smarty_tpl->tpl_vars['token']->value, ENT_QUOTES, 'UTF-8', true);?>
&amp;id_product=<?php echo $_smarty_tpl->tpl_vars['product']->value->id;?>
" class="btn btn-default" onclick="return confirm('<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Do you really want to delete this file?','js'=>1),$_smarty_tpl ) );?>
');"><i class="icon-trash"></i> <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Delete this file'),$_smarty_tpl ) );?>
</a>
					</div>
				</div>
				<?php }?>
				<div class="form-group">
					<label class="control-label col-lg-3"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Number of allowed downloads'),$_smarty_tpl ) );?>
</label>
					<div class="col-lg-3">
						<input type="text" id="virtual_product_nb_downloable" name="virtual_product_nb_downloable" value="<?php echo htmlentities($_smarty_tpl->tpl_vars['product']->value->productDownload->nb_downloadable);?>
" class="" size="6" />
						<p class="help-block"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Number of downloads allowed per customer. Set to 0 for unlimited downloads.'),$_smarty_tpl ) );?>
</p>
					</div>
				</div>
				<div class="form-group">
					<label class="control-label col-lg-3"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Expiration date'),$_smarty_tpl ) );?>
</label>
					<div class="col-lg-5">
						<input class="datepicker" type="text" id="virtual_product_expiration_date" name="virtual_product_expiration_date" value="<?php echo $_smarty_tpl->tpl_vars['product']->value->productDownload->date_expiration;?>
" size="11" maxlength="10" autocomplete="off" />
						<p class="help-block"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'If set, the file will not be downloadable after this date. Leave blank if you do not wish to attach an expiration date.'),$_smarty_tpl ) );?>
</p>
					</div>
				</div>
				<div class="form-group">
					<label class="control-label col-lg-3 required"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Number of days'),$_smarty_tpl ) );?>
</label>
					<div class="col-lg-3">
						<input type="text" id="virtual_product_nb_days" name="virtual_product_nb_days" value="<?php if (!$_smarty_tpl->tpl_vars['product']->value->productDownload->nb_days_accessible) {?>0<?php } else {
echo htmlentities($_smarty_tpl->tpl_vars['product']->value->productDownload->nb_days_accessible);
}?>" class="" size="4" />
						<p class="help-block"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Number of days this file can be accessed by customers. Set to zero for unlimited access.'),$_smarty_tpl ) );?>
</p>
					</div>
				</div>
																																										<?php } else { ?>
				<div class="alert alert-info">
					<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'You cannot edit your file here because you used combinations. Please edit this file in the Combinations tab.'),$_smarty_tpl ) );?>

				</div>
				<?php if ((isset($_smarty_tpl->tpl_vars['error_product_download']->value))) {
echo $_smarty_tpl->tpl_vars['error_product_download']->value;
}?>
			<?php }?>
		</div>
	</div>
	<div class="panel-footer">
		<a href="<?php echo htmlspecialchars((string)$_smarty_tpl->tpl_vars['link']->value->getAdminLink('AdminProducts'), ENT_QUOTES, 'UTF-8', true);
if ((isset($_REQUEST['page'])) && $_REQUEST['page'] > 1) {?>&amp;submitFilterproduct=<?php echo intval($_REQUEST['page']);
}?>" class="btn btn-default"><i class="process-icon-cancel"></i> <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Cancel'),$_smarty_tpl ) );?>
</a>
		<button type="submit" name="submitAddproduct" class="btn btn-default pull-right" disabled="disabled"><i class="process-icon-loading"></i> <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Save'),$_smarty_tpl ) );?>
</button>
		<button type="submit" name="submitAddproductAndStay" class="btn btn-default pull-right" disabled="disabled"><i class="process-icon-loading"></i> <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Save and stay'),$_smarty_tpl ) );?>
</button>
	</div>
</div>
<?php }
}
