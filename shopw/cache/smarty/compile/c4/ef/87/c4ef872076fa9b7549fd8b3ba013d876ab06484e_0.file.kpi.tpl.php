<?php
/* Smarty version 4.2.1, created on 2023-01-12 13:39:39
  from 'D:\xampp\htdocs\shopw\admin622ozp8ob\themes\default\template\helpers\kpi\kpi.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.2.1',
  'unifunc' => 'content_63bf9d1ba27357_93141980',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'c4ef872076fa9b7549fd8b3ba013d876ab06484e' => 
    array (
      0 => 'D:\\xampp\\htdocs\\shopw\\admin622ozp8ob\\themes\\default\\template\\helpers\\kpi\\kpi.tpl',
      1 => 1668409880,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_63bf9d1ba27357_93141980 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'D:\\xampp\\htdocs\\shopw\\vendor\\smarty\\smarty\\libs\\plugins\\modifier.replace.php','function'=>'smarty_modifier_replace',),));
?>

<<?php if ((isset($_smarty_tpl->tpl_vars['href']->value)) && $_smarty_tpl->tpl_vars['href']->value) {?>a style="display:block" href="<?php echo htmlspecialchars((string)$_smarty_tpl->tpl_vars['href']->value, ENT_QUOTES, 'UTF-8', true);?>
"<?php } else { ?>div<?php }?> id="<?php echo htmlspecialchars((string)$_smarty_tpl->tpl_vars['id']->value, ENT_QUOTES, 'UTF-8', true);?>
" data-toggle="tooltip" class="box-stats label-tooltip<?php if ((isset($_smarty_tpl->tpl_vars['color']->value))) {?> <?php echo htmlspecialchars((string)$_smarty_tpl->tpl_vars['color']->value, ENT_QUOTES, 'UTF-8', true);
}?>"<?php if ((isset($_smarty_tpl->tpl_vars['tooltip']->value))) {?> data-original-title="<?php echo htmlspecialchars((string)$_smarty_tpl->tpl_vars['tooltip']->value, ENT_QUOTES, 'UTF-8', true);?>
"<?php }?>>
	<div class="kpi-content">
	<?php if ((isset($_smarty_tpl->tpl_vars['icon']->value)) && $_smarty_tpl->tpl_vars['icon']->value) {?>
		<i class="<?php echo htmlspecialchars((string)$_smarty_tpl->tpl_vars['icon']->value, ENT_QUOTES, 'UTF-8', true);?>
"></i>
	<?php }?>
	<?php if ((isset($_smarty_tpl->tpl_vars['chart']->value)) && $_smarty_tpl->tpl_vars['chart']->value) {?>
		<div class="boxchart-overlay">
			<div class="boxchart">
			</div>
		</div>
	<?php }?>
	<?php if ((isset($_smarty_tpl->tpl_vars['title']->value))) {?>
		<span class="title"><?php echo htmlspecialchars((string)$_smarty_tpl->tpl_vars['title']->value, ENT_QUOTES, 'UTF-8', true);?>
</span>
	<?php }?>
	<?php if ((isset($_smarty_tpl->tpl_vars['subtitle']->value))) {?>
		<span class="subtitle"><?php echo htmlspecialchars((string)$_smarty_tpl->tpl_vars['subtitle']->value, ENT_QUOTES, 'UTF-8', true);?>
</span>
	<?php }?>
	<span class="value"><?php if ((isset($_smarty_tpl->tpl_vars['value']->value))) {
echo smarty_modifier_replace(htmlspecialchars((string)$_smarty_tpl->tpl_vars['value']->value, ENT_QUOTES, 'UTF-8', true),'&amp;','&');
}?></span>
	</div>
	
</<?php if ((isset($_smarty_tpl->tpl_vars['href']->value)) && $_smarty_tpl->tpl_vars['href']->value) {?>a<?php } else { ?>div<?php }?>>

<?php if ((isset($_smarty_tpl->tpl_vars['source']->value)) && $_smarty_tpl->tpl_vars['source']->value != '' && (isset($_smarty_tpl->tpl_vars['refresh']->value)) && $_smarty_tpl->tpl_vars['refresh']->value != '') {
echo '<script'; ?>
>
	function refresh_<?php echo addslashes(smarty_modifier_replace($_smarty_tpl->tpl_vars['id']->value,'-','_'));?>
()
	{
		$.ajax({
			url: '<?php echo addslashes($_smarty_tpl->tpl_vars['source']->value);?>
' + '&rand=' + new Date().getTime(),
			dataType: 'json',
			type: 'GET',
			cache: false,
			headers: { 'cache-control': 'no-cache' },
			success: function(jsonData){
				if (!jsonData.has_errors)
				{
					if (jsonData.value != undefined)
						$('#<?php echo addslashes($_smarty_tpl->tpl_vars['id']->value);?>
 .value').html(jsonData.value);
					if (jsonData.data != undefined)
					{
						$("#<?php echo addslashes($_smarty_tpl->tpl_vars['id']->value);?>
 .boxchart svg").remove();
						set_d3_<?php echo addslashes(smarty_modifier_replace($_smarty_tpl->tpl_vars['id']->value,'-','_'));?>
(jsonData.data);
					}
				}
			}
		});
	}
<?php echo '</script'; ?>
>
<?php }?>

<?php if ($_smarty_tpl->tpl_vars['chart']->value) {
echo '<script'; ?>
>
	function set_d3_<?php echo addslashes(str_replace($_smarty_tpl->tpl_vars['id']->value,'-','_'));?>
(jsonObject)
	{
		var data = new Array;
		$.each(jsonObject, function (index, value) {
			data.push(value);
		});
		var data_max = d3.max(data);

		var chart = d3.select("#<?php echo addslashes($_smarty_tpl->tpl_vars['id']->value);?>
 .boxchart").append("svg")
			.attr("class", "data_chart")
			.attr("width", data.length * 6)
			.attr("height", 45);

		var y = d3.scale.linear()
			.domain([0, data_max])
			.range([0, data_max * 45]);

		chart.selectAll("rect")
			.data(data)
			.enter().append("rect")
			.attr("y", function(d) { return 45 - d * 45 / data_max; })
			.attr("x", function(d, i) { return i * 6; })
			.attr("width", 4)
			.attr("height", y);
	}
	
	<?php if ($_smarty_tpl->tpl_vars['data']->value) {?>
		set_d3_<?php echo addslashes(smarty_modifier_replace($_smarty_tpl->tpl_vars['id']->value,'-','_'));?>
($.parseJSON("<?php echo addslashes($_smarty_tpl->tpl_vars['data']->value);?>
"));
	<?php }
echo '</script'; ?>
>
<?php }
}
}
