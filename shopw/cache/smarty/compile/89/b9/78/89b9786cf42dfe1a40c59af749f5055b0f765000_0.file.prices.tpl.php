<?php
/* Smarty version 4.2.1, created on 2023-01-12 14:26:44
  from 'D:\xampp\htdocs\shopw\admin622ozp8ob\themes\default\template\controllers\products\prices.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.2.1',
  'unifunc' => 'content_63bfa8246e9f98_71772581',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '89b9786cf42dfe1a40c59af749f5055b0f765000' => 
    array (
      0 => 'D:\\xampp\\htdocs\\shopw\\admin622ozp8ob\\themes\\default\\template\\controllers\\products\\prices.tpl',
      1 => 1668409880,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:controllers/products/multishop/check_fields.tpl' => 1,
    'file:controllers/products/multishop/checkbox.tpl' => 6,
  ),
),false)) {
function content_63bfa8246e9f98_71772581 (Smarty_Internal_Template $_smarty_tpl) {
echo '<script'; ?>
 type="text/javascript">
var Customer = new Object();
var product_url = '<?php echo addslashes($_smarty_tpl->tpl_vars['link']->value->getAdminLink('AdminProducts',true));?>
';
var ecotax_tax_excl = parseFloat(<?php echo $_smarty_tpl->tpl_vars['ecotax_tax_excl']->value;?>
);
<?php if (($_smarty_tpl->tpl_vars['currency']->value->decimals)) {?>
  var priceDisplayPrecision = <?php echo (defined('_PS_PRICE_DISPLAY_PRECISION_') ? constant('_PS_PRICE_DISPLAY_PRECISION_') : null);?>
;
<?php } else { ?>
  var priceDisplayPrecision = 0;
<?php }?>
var priceDatabasePrecision = <?php echo (defined('_TB_PRICE_DATABASE_PRECISION_') ? constant('_TB_PRICE_DATABASE_PRECISION_') : null);?>
;
<?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 type="text/javascript">
$(document).ready(function () {
	Customer = {
		"hiddenField": jQuery('#id_customer'),
		"field": jQuery('#customer'),
		"container": jQuery('#customers'),
		"loader": jQuery('#customerLoader'),
		"init": function() {
			jQuery(Customer.field).typeWatch({
				"captureLength": 1,
				"highlight": true,
				"wait": 50,
				"callback": Customer.search
			}).focus(Customer.placeholderIn).blur(Customer.placeholderOut);
		},
		"placeholderIn": function() {
			if (this.value == '<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'All customers'),$_smarty_tpl ) );?>
') {
				this.value = '';
			}
		},
		"placeholderOut": function() {
			if (this.value == '') {
				this.value = '<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'All customers'),$_smarty_tpl ) );?>
';
			}
		},
		"search": function()
		{
			Customer.showLoader();
			jQuery.ajax({
				"type": "POST",
				"url": "<?php echo addslashes($_smarty_tpl->tpl_vars['link']->value->getAdminLink('AdminCustomers'));?>
",
				"async": true,
				"dataType": "json",
				"data": {
					"ajax": "1",
					"token": "<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['getAdminToken'][0], array( array('tab'=>'AdminCustomers'),$_smarty_tpl ) );?>
",
					"tab": "AdminCustomers",
					"action": "searchCustomers",
					"customer_search": Customer.field.val()
				},
				"success": Customer.success
			});
		},
		"success": function(result)
		{
			if(result.found) {
				var html = '<ul class="list-unstyled">';
				jQuery.each(result.customers, function() {
					html += '<li><a class="fancybox" href="<?php echo $_smarty_tpl->tpl_vars['link']->value->getAdminLink('AdminCustomers');?>
&id_customer='+this.id_customer+'&viewcustomer&liteDisplaying=1">'+this.firstname+' '+this.lastname+'</a>'+(this.birthday ? ' - '+this.birthday:'');
					html += ' - '+this.email;
					html += '<a onclick="Customer.select('+this.id_customer+', \''+this.firstname+' '+this.lastname+'\'); return false;" href="#" class="btn btn-default"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Choose'),$_smarty_tpl ) );?>
</a></li>';
				});
				html += '</ul>';
			}
			else
				html = '<div class="alert alert-warning"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'No customers found'),$_smarty_tpl ) );?>
</div>';
			Customer.hideLoader();
			Customer.container.html(html);
			jQuery('.fancybox', Customer.container).fancybox();
		},
		"select": function(id_customer, fullname)
		{
			Customer.hiddenField.val(id_customer);
			Customer.field.val(fullname);
			Customer.container.empty();
			return false;
		},
		"showLoader": function() {
			Customer.loader.fadeIn();
		},
		"hideLoader": function() {
			Customer.loader.fadeOut();
		}
	};
	Customer.init();
});
<?php echo '</script'; ?>
>

<div id="product-prices" class="panel product-tab">
	<input type="hidden" name="submitted_tabs[]" value="Prices" />
	<h3><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Product price'),$_smarty_tpl ) );?>
</h3>
	<div class="alert alert-info" <?php if (!$_smarty_tpl->tpl_vars['country_display_tax_label']->value || $_smarty_tpl->tpl_vars['tax_exclude_taxe_option']->value) {?>style="display:none;"<?php }?>>
		<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'You must enter either the pre-tax retail price, or the retail price with tax. The input field will be automatically calculated.'),$_smarty_tpl ) );?>

	</div>
	<?php $_smarty_tpl->_subTemplateRender("file:controllers/products/multishop/check_fields.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('product_tab'=>"Prices"), 0, false);
?>
	<div class="form-group">
		<div class="col-lg-1"><span class="pull-right"><?php $_smarty_tpl->_subTemplateRender("file:controllers/products/multishop/checkbox.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('field'=>"wholesale_price",'type'=>"default"), 0, false);
?></span></div>
		<label class="control-label col-lg-2" for="wholesale_price">
			<span class="label-tooltip" data-toggle="tooltip" title="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'The wholesale price is the price you paid for the product. Do not include the tax.'),$_smarty_tpl ) );?>
"><?php if (!$_smarty_tpl->tpl_vars['country_display_tax_label']->value || $_smarty_tpl->tpl_vars['tax_exclude_taxe_option']->value) {
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Wholesale price'),$_smarty_tpl ) );
} else {
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Pre-tax wholesale price'),$_smarty_tpl ) );
}?></span>
		</label>
		<div class="col-lg-2">
			<div class="input-group">
				<span class="input-group-addon"><?php echo $_smarty_tpl->tpl_vars['currency']->value->prefix;
echo $_smarty_tpl->tpl_vars['currency']->value->suffix;?>
</span>
                <input type="text"
                    id="wholesale_price"
                    name="wholesale_price"
                    value="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['displayPriceValue'][0], array( array('price'=>$_smarty_tpl->tpl_vars['product']->value->wholesale_price),$_smarty_tpl ) );?>
"
                    onkeyup="if (isArrowKey(event)) return;
                             this.value = this.value.replace(/,/g, '.');"
                />
			</div>
            <?php if ((isset($_smarty_tpl->tpl_vars['pack']->value)) && $_smarty_tpl->tpl_vars['pack']->value->isPack($_smarty_tpl->tpl_vars['product']->value->id)) {?>
                <p class="help-block">
                    <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'The sum of wholesale prices of the products in the pack is'),$_smarty_tpl ) );?>

                    <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['displayPrice'][0], array( array('price'=>$_smarty_tpl->tpl_vars['pack']->value->noPackWholesalePrice($_smarty_tpl->tpl_vars['product']->value->id),'currency'=>$_smarty_tpl->tpl_vars['currency']->value->id),$_smarty_tpl ) );?>

                </p>
            <?php }?>
		</div>
	</div>
	<div class="form-group">
		<div class="col-lg-1"><span class="pull-right"><?php $_smarty_tpl->_subTemplateRender("file:controllers/products/multishop/checkbox.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('field'=>"price",'type'=>"price"), 0, true);
?></span></div>
		<label class="control-label col-lg-2" for="priceTE">
			<span class="label-tooltip" data-toggle="tooltip" title="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'The pre-tax retail price is the price for which you intend sell this product to your customers. It should be higher than the pre-tax wholesale price: the difference between the two will be your margin.'),$_smarty_tpl ) );?>
"><?php if (!$_smarty_tpl->tpl_vars['country_display_tax_label']->value || $_smarty_tpl->tpl_vars['tax_exclude_taxe_option']->value) {
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Retail price'),$_smarty_tpl ) );
} else {
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Pre-tax retail price'),$_smarty_tpl ) );
}?></span>
		</label>
		<div class="col-lg-2">
			<div class="input-group">
				<span class="input-group-addon"><?php echo $_smarty_tpl->tpl_vars['currency']->value->prefix;
echo $_smarty_tpl->tpl_vars['currency']->value->suffix;?>
</span>
                <input type="hidden"
                    id="priceTEReal"
                    name="price"
                    value="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['displayPriceValue'][0], array( array('price'=>$_smarty_tpl->tpl_vars['product']->value->price),$_smarty_tpl ) );?>
"
                />
                <input type="text"
                    id="priceTE"
                    name="price_displayed"
                    value="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['displayPriceValue'][0], array( array('price'=>$_smarty_tpl->tpl_vars['product']->value->price),$_smarty_tpl ) );?>
"
                    onchange="$('#priceTEReal').val(this.value);"
                    onkeyup="if (isArrowKey(event)) return;
                             this.value = this.value.replace(/,/g, '.');
                             $('#priceType').val('TE');
                             $('#priceTEReal').val(this.value);
                             calcPriceTI();"
                />
			</div>
		</div>
	</div>
	<div class="form-group">
		<div class="col-lg-1"><span class="pull-right"><?php $_smarty_tpl->_subTemplateRender("file:controllers/products/multishop/checkbox.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('field'=>"id_tax_rules_group",'type'=>"default"), 0, true);
?></span></div>
		<label class="control-label col-lg-2" for="id_tax_rules_group">
			<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Tax rule:'),$_smarty_tpl ) );?>

		</label>
		<div class="col-lg-8">
			<?php echo '<script'; ?>
 type="text/javascript">
				noTax = <?php if ($_smarty_tpl->tpl_vars['tax_exclude_taxe_option']->value) {?>true<?php } else { ?>false<?php }?>;
				taxesArray = new Array();
				<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['taxesRatesByGroup']->value, 'tax_by_group');
$_smarty_tpl->tpl_vars['tax_by_group']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['tax_by_group']->value) {
$_smarty_tpl->tpl_vars['tax_by_group']->do_else = false;
?>
					taxesArray[<?php echo $_smarty_tpl->tpl_vars['tax_by_group']->value['id_tax_rules_group'];?>
] = <?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'json_encode' ][ 0 ], array( $_smarty_tpl->tpl_vars['tax_by_group']->value ));?>
;
				<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
				ecotaxTaxRate = <?php echo $_smarty_tpl->tpl_vars['ecotaxTaxRate']->value/100;?>
;
			<?php echo '</script'; ?>
>
			<div class="row">
				<div class="col-lg-6">
					<select onchange="javascript:calcPrice(); unitPriceWithTax('unit');" name="id_tax_rules_group" id="id_tax_rules_group" <?php if ($_smarty_tpl->tpl_vars['tax_exclude_taxe_option']->value) {?>disabled="disabled"<?php }?> >
						<option value="0"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'No Tax'),$_smarty_tpl ) );?>
</option>
					<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['tax_rules_groups']->value, 'tax_rules_group');
$_smarty_tpl->tpl_vars['tax_rules_group']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['tax_rules_group']->value) {
$_smarty_tpl->tpl_vars['tax_rules_group']->do_else = false;
?>
						<option value="<?php echo $_smarty_tpl->tpl_vars['tax_rules_group']->value['id_tax_rules_group'];?>
" <?php if ($_smarty_tpl->tpl_vars['product']->value->getIdTaxRulesGroup() == $_smarty_tpl->tpl_vars['tax_rules_group']->value['id_tax_rules_group']) {?>selected="selected"<?php }?> >
					<?php echo smarty_modifier_htmlentitiesUTF8($_smarty_tpl->tpl_vars['tax_rules_group']->value['name']);?>

						</option>
					<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
					</select>
				</div>
				<div class="col-lg-2">
					<a class="btn btn-link confirm_leave" href="<?php echo htmlspecialchars((string)$_smarty_tpl->tpl_vars['link']->value->getAdminLink('AdminTaxRulesGroup'), ENT_QUOTES, 'UTF-8', true);?>
&amp;addtax_rules_group&amp;id_product=<?php echo $_smarty_tpl->tpl_vars['product']->value->id;?>
"<?php if ($_smarty_tpl->tpl_vars['tax_exclude_taxe_option']->value) {?> disabled="disabled"<?php }?>>
						<i class="icon-plus-sign"></i> <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Create new tax'),$_smarty_tpl ) );?>
 <i class="icon-external-link-sign"></i>
					</a>
				</div>
			</div>
		</div>
	</div>
	<?php if ($_smarty_tpl->tpl_vars['tax_exclude_taxe_option']->value) {?>
	<div class="form-group">
		<div class="col-lg-9 col-lg-offset-3">
			<div class="alert">
				<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Taxes are currently disabled:'),$_smarty_tpl ) );?>

				<a href="<?php echo htmlspecialchars((string)$_smarty_tpl->tpl_vars['link']->value->getAdminLink('AdminTaxes'), ENT_QUOTES, 'UTF-8', true);?>
"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Click here to open the Taxes configuration page.'),$_smarty_tpl ) );?>
</a>
				<input type="hidden" value="<?php echo $_smarty_tpl->tpl_vars['product']->value->getIdTaxRulesGroup();?>
" name="id_tax_rules_group" />
			</div>
		</div>
	</div>
	<?php }?>
	<div class="form-group" <?php if (!$_smarty_tpl->tpl_vars['ps_use_ecotax']->value) {?> style="display:none;"<?php }?>>
		<div class="col-lg-1"><span class="pull-right"><?php $_smarty_tpl->_subTemplateRender("file:controllers/products/multishop/checkbox.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('field'=>"ecotax",'type'=>"default"), 0, true);
?></span></div>
		<label class="control-label col-lg-2" for="ecotax">
			<span class="label-tooltip" data-toggle="tooltip" title="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'The ecotax is a local set of taxes intended to "promote ecologically sustainable activities via economic incentives". It is already included in retail price: the higher this ecotax is, the lower your margin will be.'),$_smarty_tpl ) );?>
"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Ecotax (tax incl.)'),$_smarty_tpl ) );?>
</span>
		</label>
		<div class="input-group col-lg-2">
			<span class="input-group-addon"><?php echo $_smarty_tpl->tpl_vars['currency']->value->prefix;
echo $_smarty_tpl->tpl_vars['currency']->value->suffix;?>
</span>
            <input type="text"
                id="ecotax"
                name="ecotax"
                value="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['displayPriceValue'][0], array( array('price'=>$_smarty_tpl->tpl_vars['product']->value->ecotax),$_smarty_tpl ) );?>
"
                onkeyup="if (isArrowKey(event)) return;
                         this.value = this.value.replace(/,/g, '.');
                         $('#priceType').val('TI');
                         calcPriceTE();"
            />
		</div>
	</div>
	<div class="form-group" <?php if (!$_smarty_tpl->tpl_vars['country_display_tax_label']->value || $_smarty_tpl->tpl_vars['tax_exclude_taxe_option']->value) {?>style="display:none;"<?php }?> >
		<label class="control-label col-lg-3" for="priceTI"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Retail price with tax'),$_smarty_tpl ) );?>
</label>
		<div class="input-group col-lg-2">
			<span class="input-group-addon"><?php echo $_smarty_tpl->tpl_vars['currency']->value->prefix;
echo $_smarty_tpl->tpl_vars['currency']->value->suffix;?>
</span>
			<input id="priceType" name="priceType" type="hidden" value="TE" />
            <input type="text"
                id="priceTI"
                name="priceTI"
                value=""
                onkeyup="if (isArrowKey(event)) return;
                         this.value = this.value.replace(/,/g, '.');
                         $('#priceType').val('TI');
                         calcPriceTE();"
            />
		</div>
        <?php if ((isset($_smarty_tpl->tpl_vars['pack']->value)) && $_smarty_tpl->tpl_vars['pack']->value->isPack($_smarty_tpl->tpl_vars['product']->value->id)) {?>
            <p class="col-lg-9 col-lg-offset-3 help-block">
                <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'The sum of prices of the products in the pack is'),$_smarty_tpl ) );?>

                <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['displayPrice'][0], array( array('price'=>$_smarty_tpl->tpl_vars['pack']->value->noPackPrice($_smarty_tpl->tpl_vars['product']->value->id),'currency'=>$_smarty_tpl->tpl_vars['currency']->value->id),$_smarty_tpl ) );?>

            </p>
        <?php }?>
	</div>

	<div class="form-group">
		<div class="col-lg-1"><span class="pull-right"><?php $_smarty_tpl->_subTemplateRender("file:controllers/products/multishop/checkbox.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('field'=>"unit_price",'type'=>"unit_price"), 0, true);
?></span></div>
		<label class="control-label col-lg-2" for="unit_price">
			<span class="label-tooltip" data-toggle="tooltip" title="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'When selling a pack of items, you can indicate the unit price for each item of the pack. For instance, "per bottle" or "per pound".'),$_smarty_tpl ) );?>
"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Unit price (tax excl.)'),$_smarty_tpl ) );?>
</span>
		</label>
		<div class="col-lg-4">
			<div class="input-group">
				<span class="input-group-addon"><?php echo $_smarty_tpl->tpl_vars['currency']->value->prefix;
echo $_smarty_tpl->tpl_vars['currency']->value->suffix;?>
</span>
                <input type="text"
                    id="unit_price"
                    name="unit_price"
                    value="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['displayPriceValue'][0], array( array('price'=>$_smarty_tpl->tpl_vars['unit_price']->value),$_smarty_tpl ) );?>
"
                    onkeyup="if (isArrowKey(event)) return;
                             this.value = this.value.replace(/,/g, '.');
                             unitPriceWithTax('unit');"
                />
				<span class="input-group-addon"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'per'),$_smarty_tpl ) );?>
</span>
				<input id="unity" name="unity" type="text" value="<?php echo smarty_modifier_htmlentitiesUTF8($_smarty_tpl->tpl_vars['product']->value->unity);?>
"  maxlength="255" onkeyup="if (isArrowKey(event)) return ;unitySecond();" onchange="unitySecond();"/>
			</div>
		</div>
	</div>
	<?php if ((isset($_smarty_tpl->tpl_vars['product']->value->unity)) && $_smarty_tpl->tpl_vars['product']->value->unity) {?>
	<div class="form-group">
		<div class="col-lg-9 col-lg-offset-3">
			<div class="alert alert-warning">
				<span><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'or'),$_smarty_tpl ) );?>

					<?php echo $_smarty_tpl->tpl_vars['currency']->value->prefix;?>
<span id="unit_price_with_tax">0.00</span><?php echo $_smarty_tpl->tpl_vars['currency']->value->suffix;?>

					<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'per'),$_smarty_tpl ) );?>
 <span id="unity_second"><?php echo $_smarty_tpl->tpl_vars['product']->value->unity;?>
</span><?php if ($_smarty_tpl->tpl_vars['ps_tax']->value && $_smarty_tpl->tpl_vars['country_display_tax_label']->value) {?> <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'(tax incl.)'),$_smarty_tpl ) );
}?>
				</span>
			</div>
		</div>
	</div>
	<?php }?>
	<div class="form-group">
		<div class="col-lg-1"><span class="pull-right"><?php $_smarty_tpl->_subTemplateRender("file:controllers/products/multishop/checkbox.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('field'=>"on_sale",'type'=>"default"), 0, true);
?></span></div>
		<label class="control-label col-lg-2" for="on_sale">&nbsp;</label>
		<div class="col-lg-9">
			<div class="checkbox">
				<label class="control-label" for="on_sale" >
					<input type="checkbox" name="on_sale" id="on_sale" <?php if ($_smarty_tpl->tpl_vars['product']->value->on_sale) {?>checked="checked"<?php }?> value="1" />
					<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Display the "on sale" icon on the product page, and in the text found within the product listing.'),$_smarty_tpl ) );?>

				</label>
			</div>
		</div>
	</div>
	<div class="form-group">
		<div class="col-lg-9 col-lg-offset-3">
			<div class="alert alert-warning">
				<strong><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Final retail price:'),$_smarty_tpl ) );?>
</strong>
				<span>
					<?php echo $_smarty_tpl->tpl_vars['currency']->value->prefix;?>

					<span id="finalPrice" >0.00</span>
					<?php echo $_smarty_tpl->tpl_vars['currency']->value->suffix;?>

					<span<?php if (!$_smarty_tpl->tpl_vars['ps_tax']->value) {?> style="display:none;"<?php }?>> (<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'tax incl.'),$_smarty_tpl ) );?>
)</span>
				</span>
				<span<?php if (!$_smarty_tpl->tpl_vars['ps_tax']->value) {?> style="display:none;"<?php }?> >
				<?php if ($_smarty_tpl->tpl_vars['country_display_tax_label']->value) {?>
					/
				<?php }?>
					<?php echo $_smarty_tpl->tpl_vars['currency']->value->prefix;?>

				<span id="finalPriceWithoutTax"></span>
					<?php echo $_smarty_tpl->tpl_vars['currency']->value->suffix;?>

					<?php if ($_smarty_tpl->tpl_vars['country_display_tax_label']->value) {?>(<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'tax excl.'),$_smarty_tpl ) );?>
)<?php }?>
				</span>
			</div>
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
<?php if ((isset($_smarty_tpl->tpl_vars['specificPriceModificationForm']->value))) {?>
<div class="panel">
	<h3><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Specific prices'),$_smarty_tpl ) );?>
</h3>
	<div class="alert alert-info">
		<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'You can set specific prices for clients belonging to different groups, different countries, etc.'),$_smarty_tpl ) );?>

	</div>
	<div class="form-group">
		<div class="col-lg-12">
			<a class="btn btn-default" href="#" id="show_specific_price">
				<i class="icon-plus-sign"></i> <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Add a new specific price'),$_smarty_tpl ) );?>

			</a>
			<a class="btn btn-default" href="#" id="hide_specific_price" style="display:none">
				<i class="icon-remove text-danger"></i> <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Cancel specific price'),$_smarty_tpl ) );?>

			</a>
		</div>
	</div>
	<?php echo '<script'; ?>
 type="text/javascript">
		var product_prices = new Array();
		<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['combinations']->value, 'combination');
$_smarty_tpl->tpl_vars['combination']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['combination']->value) {
$_smarty_tpl->tpl_vars['combination']->do_else = false;
?>
			product_prices['<?php echo $_smarty_tpl->tpl_vars['combination']->value['id_product_attribute'];?>
'] = '<?php echo addcslashes($_smarty_tpl->tpl_vars['combination']->value['price'],'\'');?>
';
		<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
	<?php echo '</script'; ?>
>
	<div id="specific_price_form" class="well clearfix" style="display: none;">
        <input type="hidden" id='sp_id_specific_price' name="sp_id_specific_price" value="0" />
		<div class="col-lg-12">
			<div class="form-group">
				<label class="control-label col-lg-2" for="<?php if (!$_smarty_tpl->tpl_vars['multi_shop']->value) {?>spm_currency_0<?php } else { ?>sp_id_shop<?php }?>"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'For'),$_smarty_tpl ) );?>
</label>
				<div class="col-lg-9">
					<div class="row">
					<?php if (!$_smarty_tpl->tpl_vars['multi_shop']->value) {?>
						<input type="hidden" name="sp_id_shop" value="0" />
					<?php } else { ?>
						<div class="col-lg-3">
							<select name="sp_id_shop" id="sp_id_shop">
								<?php if (!$_smarty_tpl->tpl_vars['admin_one_shop']->value) {?><option value="0"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'All shops'),$_smarty_tpl ) );?>
</option><?php }?>
								<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['shops']->value, 'shop');
$_smarty_tpl->tpl_vars['shop']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['shop']->value) {
$_smarty_tpl->tpl_vars['shop']->do_else = false;
?>
								<option value="<?php echo $_smarty_tpl->tpl_vars['shop']->value['id_shop'];?>
"><?php echo smarty_modifier_htmlentitiesUTF8($_smarty_tpl->tpl_vars['shop']->value['name']);?>
</option>
								<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
							</select>
						</div>
					<?php }?>
						<div class="col-lg-3">
							<select name="sp_id_currency" id="spm_currency_0" onchange="changeCurrencySpecificPrice(0);">
								<option value="0"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'All currencies'),$_smarty_tpl ) );?>
</option>
								<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['currencies']->value, 'curr');
$_smarty_tpl->tpl_vars['curr']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['curr']->value) {
$_smarty_tpl->tpl_vars['curr']->do_else = false;
?>
								<option value="<?php echo $_smarty_tpl->tpl_vars['curr']->value['id_currency'];?>
"><?php echo smarty_modifier_htmlentitiesUTF8($_smarty_tpl->tpl_vars['curr']->value['name']);?>
</option>
								<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
							</select>
						</div>
						<div class="col-lg-3">
							<select name="sp_id_country" id="sp_id_country">
								<option value="0"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'All countries'),$_smarty_tpl ) );?>
</option>
								<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['countries']->value, 'country');
$_smarty_tpl->tpl_vars['country']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['country']->value) {
$_smarty_tpl->tpl_vars['country']->do_else = false;
?>
								<option value="<?php echo $_smarty_tpl->tpl_vars['country']->value['id_country'];?>
"><?php echo smarty_modifier_htmlentitiesUTF8($_smarty_tpl->tpl_vars['country']->value['name']);?>
</option>
								<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
							</select>
						</div>
						<div class="col-lg-3">
							<select name="sp_id_group" id="sp_id_group">
								<option value="0"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'All groups'),$_smarty_tpl ) );?>
</option>
								<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['groups']->value, 'group');
$_smarty_tpl->tpl_vars['group']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['group']->value) {
$_smarty_tpl->tpl_vars['group']->do_else = false;
?>
								<option value="<?php echo $_smarty_tpl->tpl_vars['group']->value['id_group'];?>
"><?php echo $_smarty_tpl->tpl_vars['group']->value['name'];?>
</option>
								<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
							</select>
						</div>
					</div>
				</div>
			</div>
			<div class="form-group">
				<label class="control-label col-lg-2" for="customer"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Customer'),$_smarty_tpl ) );?>
</label>
				<div class="col-lg-4">
					<input type="hidden" name="sp_id_customer" id="id_customer" value="0" />
					<div class="input-group">
						<input type="text" name="customer" value="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'All customers'),$_smarty_tpl ) );?>
" id="customer" autocomplete="off" />
						<span class="input-group-addon"><i id="customerLoader" class="icon-refresh icon-spin" style="display: none;"></i> <i class="icon-search"></i></span>
					</div>
				</div>
			</div>
			<div class="form-group">
				<div class="col-lg-10 col-lg-offset-2">
					<div id="customers"></div>
				</div>
			</div>
			<?php if (count($_smarty_tpl->tpl_vars['combinations']->value) != 0) {?>
			<div class="form-group">
				<label class="control-label col-lg-2" for="sp_id_product_attribute"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Combination:'),$_smarty_tpl ) );?>
</label>
				<div class="col-lg-4">
					<select id="sp_id_product_attribute" name="sp_id_product_attribute">
						<option value="0"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Apply to all combinations'),$_smarty_tpl ) );?>
</option>
					<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['combinations']->value, 'combination');
$_smarty_tpl->tpl_vars['combination']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['combination']->value) {
$_smarty_tpl->tpl_vars['combination']->do_else = false;
?>
						<option value="<?php echo $_smarty_tpl->tpl_vars['combination']->value['id_product_attribute'];?>
"><?php echo $_smarty_tpl->tpl_vars['combination']->value['attributes'];?>
</option>
					<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
					</select>
				</div>
			</div>
			<?php }?>
			<div class="form-group">
				<label class="control-label col-lg-2" for="sp_from"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Available'),$_smarty_tpl ) );?>
</label>
				<div class="col-lg-9">
					<div class="row">
						<div class="col-lg-4">
							<div class="input-group">
								<span class="input-group-addon"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'from'),$_smarty_tpl ) );?>
</span>
								<input type="text" name="sp_from" class="datepicker" value="" style="text-align: center" id="sp_from" />
								<span class="input-group-addon"><i class="icon-calendar-empty"></i></span>
							</div>
						</div>
						<div class="col-lg-4">
							<div class="input-group">
								<span class="input-group-addon"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'to'),$_smarty_tpl ) );?>
</span>
								<input type="text" name="sp_to" class="datepicker" value="" style="text-align: center" id="sp_to" />
								<span class="input-group-addon"><i class="icon-calendar-empty"></i></span>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="form-group">
				<label class="control-label col-lg-2" for="sp_from_quantity"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Starting at'),$_smarty_tpl ) );?>
</label>
				<div class="col-lg-4">
					<div class="input-group">
						<span class="input-group-addon"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'unit'),$_smarty_tpl ) );?>
</span>
						<input type="text" name="sp_from_quantity" id="sp_from_quantity" value="1" />
					</div>
				</div>
			</div>
			<div class="form-group">
				<label class="control-label col-lg-2" for="sp_price"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Product price'),$_smarty_tpl ) );?>

					<?php if ($_smarty_tpl->tpl_vars['country_display_tax_label']->value) {?>
						<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'(tax excl.)'),$_smarty_tpl ) );?>

					<?php }?>
				</label>
				<div class="col-lg-9">
					<div class="row">
						<div class="col-lg-4">
							<div class="input-group">
								<span class="input-group-addon"><?php echo $_smarty_tpl->tpl_vars['currency']->value->prefix;
echo $_smarty_tpl->tpl_vars['currency']->value->suffix;?>
</span>
                                <input type="text"
                                    id="sp_price"
                                    name="sp_price"
                                    value="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['displayPriceValue'][0], array( array('price'=>$_smarty_tpl->tpl_vars['product']->value->price),$_smarty_tpl ) );?>
"
                                    onkeyup="if (isArrowKey(event)) return;
                                             this.value = this.value.replace(/,/g, '.');"
                                    disabled="disabled"
                                />
							</div>
							<p class="checkbox">
								<label for="leave_bprice"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Leave base price:'),$_smarty_tpl ) );?>
</label>
								<input type="checkbox" id="leave_bprice" name="leave_bprice"  value="1" checked="checked"  />
							</p>
						</div>
					</div>
				</div>
			</div>
			<div class="form-group">
				<label class="control-label col-lg-2" for="sp_reduction"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Apply a discount of'),$_smarty_tpl ) );?>
</label>
				<div class="col-lg-4">
					<div class="row">
						<div class="col-lg-3">
							<input type="text" name="sp_reduction" id="sp_reduction" value="0.00"/>
						</div>
						<div class="col-lg-6">
							<select name="sp_reduction_type" id="sp_reduction_type">
								<option value="amount" selected="selected"><?php echo htmlspecialchars((string)$_smarty_tpl->tpl_vars['currency']->value->name, ENT_QUOTES, 'UTF-8', true);?>
</option>
								<option value="percentage"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'%'),$_smarty_tpl ) );?>
</option>
							</select>
						</div>
						<div class="col-lg-3">
							<select name="sp_reduction_tax" id="sp_reduction_tax">
								<option value="0"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Tax excluded'),$_smarty_tpl ) );?>
</option>
								<option value="1" selected="selected"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Tax included'),$_smarty_tpl ) );?>
</option>
							</select>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<?php echo '<script'; ?>
 type="text/javascript">
		var currencyName = '<?php echo addcslashes(htmlspecialchars((string)$_smarty_tpl->tpl_vars['currency']->value->name, ENT_QUOTES, 'UTF-8', true),'\'');?>
';
		var defaultProductPrice = <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['displayPriceValue'][0], array( array('price'=>$_smarty_tpl->tpl_vars['product']->value->price),$_smarty_tpl ) );?>
;
          $(document).ready(function(){
			product_prices['0'] = $('#sp_current_ht_price').html();
			$('#id_product_attribute').change(function() {
				$('#sp_current_ht_price').html(product_prices[$('#id_product_attribute option:selected').val()]);
			});
			$('#leave_bprice').click(function() {
				if (this.checked)
					$('#sp_price').attr('disabled', 'disabled').val(defaultProductPrice);
				else
					$('#sp_price').removeAttr('disabled');
			});
			$('.datepicker').datetimepicker({
				prevText: '',
				nextText: '',
				dateFormat: 'yy-mm-dd',
				// Define a custom regional settings in order to use PrestaShop translation tools
				currentText: '<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Now','js'=>1),$_smarty_tpl ) );?>
',
				closeText: '<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Done','js'=>1),$_smarty_tpl ) );?>
',
				ampm: false,
				amNames: ['AM', 'A'],
				pmNames: ['PM', 'P'],
				timeFormat: 'hh:mm:ss tt',
				timeSuffix: '',
				timeOnlyTitle: '<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Choose Time','js'=>1),$_smarty_tpl ) );?>
',
				timeText: '<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Time','js'=>1),$_smarty_tpl ) );?>
',
				hourText: '<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Hour','js'=>1),$_smarty_tpl ) );?>
',
				minuteText: '<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Minute','js'=>1),$_smarty_tpl ) );?>
'
			});
			$('#sp_reduction_type').on('change', adjustSpecificPriceForm);
		});

		function initSpecificPriceForm(specificPrice) {
          $('#sp_id_specific_price').val(specificPrice.id);
          $('#sp_id_shop').val(specificPrice.id_shop);
          $('#sp_currency_1').val(specificPrice.id_currency);
          $('#sp_id_country').val(specificPrice.id_country);
          $('#sp_id_group').val(specificPrice.id_group);
          $('#sp_id_customer').val(specificPrice.id_customer);
          $('#customer').val(specificPrice.customer_name);
          $('#sp_id_product_attribute').val(specificPrice.id_product_attribute);
          $('#sp_from').val(specificPrice.from);
          $('#sp_to').val(specificPrice.to);
          $('#sp_from_quantity').val(specificPrice.from_quantity);
          $('#sp_price').val(specificPrice.price);
          $('#sp_reduction_tax').val(specificPrice.reduction_tax);
          var reductionType = specificPrice.reduction_type || 'amount';
          var reduction = reductionType === 'percentage' ? specificPrice.reduction * 100.0 : specificPrice.reduction;
          $('#sp_reduction_type').val(reductionType);
          $('#sp_reduction').val(reduction);
          adjustSpecificPriceForm();

		  $('#specific_price_form').append('<input id="submitSpecificPriceForm" type="hidden" name="submitSpecificPriceForm" />');

		  if (specificPrice.id !== 0) {
			  if (specificPrice.price < 0) {
				  $('#sp_price').attr('disabled', 'disabled').val(defaultProductPrice);
				  $('#leave_bprice').prop('checked', true);
			  } else {
				  $('#sp_price').removeAttr('disabled');
				  $('#leave_bprice').prop('checked', false);
			  }
		  }

          $('#specific_price_form').slideDown();
          $('#show_specific_price').hide();
          $('#hide_specific_price').show();
        }

		function hideSpecificPriceForm() {
			$('#submitSpecificPriceForm').remove();
			$('#specific_price_form').slideUp();
			$('#hide_specific_price').hide();
			$('#show_specific_price').show();
			return false;
		}

		function adjustSpecificPriceForm() {
          var reductionType = $('#sp_reduction_type').val();
            if (reductionType === 'percentage') {
              $('#sp_reduction_tax').hide();
            } else {
              $('#sp_reduction_tax').show();
            }
        }
	<?php echo '</script'; ?>
>
	<div class="table-responsive">
	<table id="specific_prices_list" class="table table-bordered">
		<thead>
			<tr>
				<th><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Rule'),$_smarty_tpl ) );?>
</th>
				<th><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Combination'),$_smarty_tpl ) );?>
</th>
				<?php if ($_smarty_tpl->tpl_vars['multi_shop']->value) {?><th><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Shop'),$_smarty_tpl ) );?>
</th><?php }?>
				<th><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Currency'),$_smarty_tpl ) );?>
</th>
				<th><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Country'),$_smarty_tpl ) );?>
</th>
				<th><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Group'),$_smarty_tpl ) );?>
</th>
				<th><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Customer'),$_smarty_tpl ) );?>
</th>
				<?php if ($_smarty_tpl->tpl_vars['country_display_tax_label']->value) {?>
					<th><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Fixed price (tax excl.)'),$_smarty_tpl ) );?>
</th>
				<?php } else { ?>
					<th><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Fixed price'),$_smarty_tpl ) );?>
</th>
				<?php }?>
				<th><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Impact'),$_smarty_tpl ) );?>
</th>
				<th><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Period'),$_smarty_tpl ) );?>
</th>
				<th><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'From (quantity)'),$_smarty_tpl ) );?>
</th>
				<th><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Actions'),$_smarty_tpl ) );?>
</th>
			</tr>
		</thead>
		<tbody>
			<?php echo $_smarty_tpl->tpl_vars['specificPriceModificationForm']->value;?>

				<?php echo '<script'; ?>
 type="text/javascript">
					$(document).ready(function() {
						delete_price_rule = '<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>"Do you really want to remove this price rule?"),$_smarty_tpl ) );?>
';
						calcPriceTI();
						unitPriceWithTax('unit');
						});
				<?php echo '</script'; ?>
>
			<?php }
}
}
