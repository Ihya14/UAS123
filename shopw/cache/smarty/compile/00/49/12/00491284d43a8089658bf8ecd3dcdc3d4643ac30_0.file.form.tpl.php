<?php
/* Smarty version 4.2.1, created on 2023-01-12 22:49:38
  from 'D:\xampp\htdocs\shopw\modules\blockcms\views\templates\admin\_configure\helpers\form\form.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.2.1',
  'unifunc' => 'content_63c01e02aa77b3_33773390',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '00491284d43a8089658bf8ecd3dcdc3d4643ac30' => 
    array (
      0 => 'D:\\xampp\\htdocs\\shopw\\modules\\blockcms\\views\\templates\\admin\\_configure\\helpers\\form\\form.tpl',
      1 => 1561665708,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_63c01e02aa77b3_33773390 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->smarty->ext->_tplFunction->registerTplFunctions($_smarty_tpl, array (
  'render_select' => 
  array (
    'compiled_filepath' => 'D:\\xampp\\htdocs\\shopw\\cache\\smarty\\compile\\00\\49\\12\\00491284d43a8089658bf8ecd3dcdc3d4643ac30_0.file.form.tpl.php',
    'uid' => '00491284d43a8089658bf8ecd3dcdc3d4643ac30',
    'call_name' => 'smarty_template_function_render_select_116983965363c01e029ef079_03277556',
  ),
));
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>



<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_68254869463c01e02a2f096_57953830', "label");
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_121617854463c01e02a33cf4_11381111', "legend");
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_161743550063c01e02a4c395_82041027', "input");
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_31393035063c01e02a6af67_16528863', "input_row");
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, "helpers/form/form.tpl");
}
/* {block "label"} */
class Block_68254869463c01e02a2f096_57953830 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'label' => 
  array (
    0 => 'Block_68254869463c01e02a2f096_57953830',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

	<?php if ($_smarty_tpl->tpl_vars['input']->value['type'] == 'cms_blocks') {?>

	<?php } else { ?>
		<?php 
$_smarty_tpl->inheritance->callParent($_smarty_tpl, $this, '{$smarty.block.parent}');
?>

	<?php }
}
}
/* {/block "label"} */
/* {block "legend"} */
class Block_121617854463c01e02a33cf4_11381111 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'legend' => 
  array (
    0 => 'Block_121617854463c01e02a33cf4_11381111',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

	<h3>
		<?php if ((isset($_smarty_tpl->tpl_vars['field']->value['image']))) {?><img src="<?php echo $_smarty_tpl->tpl_vars['field']->value['image'];?>
" alt="<?php echo htmlspecialchars((string)$_smarty_tpl->tpl_vars['field']->value['title'], ENT_QUOTES, 'UTF-8', true);?>
" /><?php }?>
		<?php if ((isset($_smarty_tpl->tpl_vars['field']->value['icon']))) {?><i class="<?php echo $_smarty_tpl->tpl_vars['field']->value['icon'];?>
"></i><?php }?>
		<?php echo $_smarty_tpl->tpl_vars['field']->value['title'];?>

		<span class="panel-heading-action">
			<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['toolbar_btn']->value, 'btn', false, 'k');
$_smarty_tpl->tpl_vars['btn']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['k']->value => $_smarty_tpl->tpl_vars['btn']->value) {
$_smarty_tpl->tpl_vars['btn']->do_else = false;
?>
				<?php if ($_smarty_tpl->tpl_vars['k']->value != 'modules-list' && $_smarty_tpl->tpl_vars['k']->value != 'back') {?>
					<a id="desc-<?php echo $_smarty_tpl->tpl_vars['table']->value;?>
-<?php if ((isset($_smarty_tpl->tpl_vars['btn']->value['imgclass']))) {
echo $_smarty_tpl->tpl_vars['btn']->value['imgclass'];
} else {
echo $_smarty_tpl->tpl_vars['k']->value;
}?>" class="list-toolbar-btn" <?php if ((isset($_smarty_tpl->tpl_vars['btn']->value['href']))) {?>href="<?php echo $_smarty_tpl->tpl_vars['btn']->value['href'];?>
"<?php }?> <?php if ((isset($_smarty_tpl->tpl_vars['btn']->value['target'])) && $_smarty_tpl->tpl_vars['btn']->value['target']) {?>target="_blank"<?php }
if ((isset($_smarty_tpl->tpl_vars['btn']->value['js'])) && $_smarty_tpl->tpl_vars['btn']->value['js']) {?>onclick="<?php echo $_smarty_tpl->tpl_vars['btn']->value['js'];?>
"<?php }?>>
						<span title="" data-toggle="tooltip" class="label-tooltip" data-original-title="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>$_smarty_tpl->tpl_vars['btn']->value['desc']),$_smarty_tpl ) );?>
" data-html="true">
							<i class="process-icon-<?php if ((isset($_smarty_tpl->tpl_vars['btn']->value['imgclass']))) {
echo $_smarty_tpl->tpl_vars['btn']->value['imgclass'];
} else {
echo $_smarty_tpl->tpl_vars['k']->value;
}?> <?php if ((isset($_smarty_tpl->tpl_vars['btn']->value['class']))) {
echo $_smarty_tpl->tpl_vars['btn']->value['class'];
}?>" ></i>
						</span>
					</a>
				<?php }?>
			<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
			</span>
	</h3>
<?php
}
}
/* {/block "legend"} */
/* smarty_template_function_render_select_116983965363c01e029ef079_03277556 */
if (!function_exists('smarty_template_function_render_select_116983965363c01e029ef079_03277556')) {
function smarty_template_function_render_select_116983965363c01e029ef079_03277556(Smarty_Internal_Template $_smarty_tpl,$params) {
$params = array_merge(array('level'=>0), $params);
foreach ($params as $key => $value) {
$_smarty_tpl->tpl_vars[$key] = new Smarty_Variable($value, $_smarty_tpl->isRenderingCache);
}
?>

			<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['items']->value, 'item');
$_smarty_tpl->tpl_vars['item']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['item']->value) {
$_smarty_tpl->tpl_vars['item']->do_else = false;
?>
				<?php if (((isset($_smarty_tpl->tpl_vars['item']->value['id_cms_category'])))) {?>
					<option id="category_<?php echo $_smarty_tpl->tpl_vars['item']->value['id_cms_category'];?>
" value="<?php echo $_smarty_tpl->tpl_vars['item']->value['id_cms_category'];?>
"
						<?php if (((isset($_smarty_tpl->tpl_vars['fields_value']->value['id_category'])) && ($_smarty_tpl->tpl_vars['item']->value['id_cms_category'] == $_smarty_tpl->tpl_vars['fields_value']->value['id_category']))) {?>
							selected
						<?php }?> >
						<?php echo (str_repeat('-',$_smarty_tpl->tpl_vars['level']->value)).($_smarty_tpl->tpl_vars['item']->value['name']);?>

					</option>
					<?php if ((isset($_smarty_tpl->tpl_vars['item']->value['sub_categories'])) && count($_smarty_tpl->tpl_vars['item']->value['sub_categories']) > 0) {?>
						<?php $_smarty_tpl->smarty->ext->_tplFunction->callTemplateFunction($_smarty_tpl, 'render_select', array('items'=>$_smarty_tpl->tpl_vars['item']->value['sub_categories'],'level'=>$_smarty_tpl->tpl_vars['level']->value+1), true);?>

					<?php }?>
				<?php }?>
			<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
		<?php
}}
/*/ smarty_template_function_render_select_116983965363c01e029ef079_03277556 */
/* {block "input"} */
class Block_161743550063c01e02a4c395_82041027 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'input' => 
  array (
    0 => 'Block_161743550063c01e02a4c395_82041027',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

	<?php if ($_smarty_tpl->tpl_vars['input']->value['type'] == 'select_category') {?>
		
		<?php if ((isset($_smarty_tpl->tpl_vars['input']->value['options']['query'])) && count($_smarty_tpl->tpl_vars['input']->value['options']['query']) > 0) {?>
			<?php $_smarty_tpl->_assignInScope('categories', $_smarty_tpl->tpl_vars['input']->value['options']['query']);?>
			<select class="form-control fixed-width-xl" id="<?php echo $_smarty_tpl->tpl_vars['input']->value['name'];?>
" name="<?php echo $_smarty_tpl->tpl_vars['input']->value['name'];?>
">
				<?php $_smarty_tpl->smarty->ext->_tplFunction->callTemplateFunction($_smarty_tpl, 'render_select', array('items'=>$_smarty_tpl->tpl_vars['categories']->value), true);?>

			</select>
		<?php }?>
	<?php } else { ?>
		<?php 
$_smarty_tpl->inheritance->callParent($_smarty_tpl, $this, '{$smarty.block.parent}');
?>

	<?php }
}
}
/* {/block "input"} */
/* {block "input_row"} */
class Block_31393035063c01e02a6af67_16528863 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'input_row' => 
  array (
    0 => 'Block_31393035063c01e02a6af67_16528863',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

	<?php if ($_smarty_tpl->tpl_vars['input']->value['type'] == 'cms_blocks') {?>
		<div class="row">
			<?php echo '<script'; ?>
 type="text/javascript">
				var come_from = '<?php echo $_smarty_tpl->tpl_vars['name_controller']->value;?>
';
				var token = '<?php echo $_smarty_tpl->tpl_vars['token']->value;?>
';
				var alternate = 1;
			<?php echo '</script'; ?>
>
			<?php $_smarty_tpl->_assignInScope('cms_blocks_positions', $_smarty_tpl->tpl_vars['input']->value['values']);?>
			<?php if ((isset($_smarty_tpl->tpl_vars['cms_blocks_positions']->value)) && count($_smarty_tpl->tpl_vars['cms_blocks_positions']->value) > 0) {?>
				<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['cms_blocks_positions']->value, 'cms_blocks_position', false, 'key');
$_smarty_tpl->tpl_vars['cms_blocks_position']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['key']->value => $_smarty_tpl->tpl_vars['cms_blocks_position']->value) {
$_smarty_tpl->tpl_vars['cms_blocks_position']->do_else = false;
?>
					<div class="col-lg-6">
						<div class="panel">
							<div class="panel-heading">
								<?php if ($_smarty_tpl->tpl_vars['key']->value == 0) {?>
									<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Left blocks','mod'=>'blockcms'),$_smarty_tpl ) );?>

								<?php } else { ?>
									<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Right blocks','mod'=>'blockcms'),$_smarty_tpl ) );?>

								<?php }?>
							</div>
							<table class="table tableDnD cms" id="cms_block_<?php echo $_smarty_tpl->tpl_vars['key']->value%2;?>
">
								<thead>
									<tr class="nodrag nodrop">
										<th><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'ID','mod'=>'blockcms'),$_smarty_tpl ) );?>
</th>
										<th><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Name of the block','mod'=>'blockcms'),$_smarty_tpl ) );?>
</th>
										<th><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Category name','mod'=>'blockcms'),$_smarty_tpl ) );?>
</th>
										<th><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Position','mod'=>'blockcms'),$_smarty_tpl ) );?>
</th>
										<th></th>
									</tr>
								</thead>
								<tbody>
									<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['cms_blocks_position']->value, 'cms_block', false, 'key');
$_smarty_tpl->tpl_vars['cms_block']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['key']->value => $_smarty_tpl->tpl_vars['cms_block']->value) {
$_smarty_tpl->tpl_vars['cms_block']->do_else = false;
?>
										<tr class="<?php if ($_smarty_tpl->tpl_vars['key']->value%2) {?>alt_row<?php } else { ?>not_alt_row<?php }?> row_hover" id="tr_<?php echo $_smarty_tpl->tpl_vars['key']->value%2;?>
_<?php echo $_smarty_tpl->tpl_vars['cms_block']->value['id_cms_block'];?>
_<?php echo $_smarty_tpl->tpl_vars['cms_block']->value['position'];?>
">
											<td><?php echo $_smarty_tpl->tpl_vars['cms_block']->value['id_cms_block'];?>
</td>
											<td><?php echo $_smarty_tpl->tpl_vars['cms_block']->value['block_name'];?>
</td>
											<td><?php echo $_smarty_tpl->tpl_vars['cms_block']->value['category_name'];?>
</td>
											<td class="center pointer dragHandle" id="td_<?php echo $_smarty_tpl->tpl_vars['key']->value%2;?>
_<?php echo $_smarty_tpl->tpl_vars['cms_block']->value['id_cms_block'];?>
">
												<div class="dragGroup">
													<div class="positions">
														<?php echo $_smarty_tpl->tpl_vars['cms_block']->value['position']+1;?>

													</div>
												</div>
											</td>
											<td>
												<div class="btn-group-action">
													<div class="btn-group pull-right">
														<a class="btn btn-default" href="<?php echo $_smarty_tpl->tpl_vars['current']->value;?>
&amp;token=<?php echo $_smarty_tpl->tpl_vars['token']->value;?>
&amp;editBlockCMS&amp;id_cms_block=<?php echo (int)$_smarty_tpl->tpl_vars['cms_block']->value['id_cms_block'];?>
" title="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Edit','mod'=>'blockcms'),$_smarty_tpl ) );?>
">
															<i class="icon-edit"></i> <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Edit','mod'=>'blockcms'),$_smarty_tpl ) );?>

														</a>
														<button class="btn btn-default dropdown-toggle" data-toggle="dropdown">
															<i class="icon-caret-down"></i>&nbsp;
														</button>
														<ul class="dropdown-menu">
														<li>
															<a href="<?php echo $_smarty_tpl->tpl_vars['current']->value;?>
&amp;token=<?php echo $_smarty_tpl->tpl_vars['token']->value;?>
&amp;deleteBlockCMS&amp;id_cms_block=<?php echo (int)$_smarty_tpl->tpl_vars['cms_block']->value['id_cms_block'];?>
" title="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Delete','mod'=>'blockcms'),$_smarty_tpl ) );?>
">
																<i class="icon-trash"></i> <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Delete','mod'=>'blockcms'),$_smarty_tpl ) );?>

															</a>
														</li>
														</ul>
													</div>
												</div>
											</td>
										</tr>
									<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
								</tbody>
							</table>
						</div>
					</div>
				<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
			<?php }?>
		</div>

	<?php } elseif ($_smarty_tpl->tpl_vars['input']->value['type'] == 'cms_pages') {?>

		<?php $_smarty_tpl->_assignInScope('cms', $_smarty_tpl->tpl_vars['input']->value['values']);?>
		<?php if ((isset($_smarty_tpl->tpl_vars['cms']->value)) && count($_smarty_tpl->tpl_vars['cms']->value) > 0) {?>
			<div class="row">
				<div class="col-lg-9 col-lg-offset-3">
					<div class="panel">
						<div class="panel-heading">
							<?php echo $_smarty_tpl->tpl_vars['input']->value['label'];?>

						</div>
						<table class="table">
							<thead>
								<tr>
									<th>
										<input type="checkbox" name="checkme" id="checkme" class="noborder" onclick="checkDelBoxes(this.form, '<?php echo $_smarty_tpl->tpl_vars['input']->value['name'];?>
', this.checked)" />
									</th>
									<th><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'ID','mod'=>'blockcms'),$_smarty_tpl ) );?>
</th>
									<th><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Name','mod'=>'blockcms'),$_smarty_tpl ) );?>
</th>
								</tr>
							</thead>
							<tbody>
								<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['cms']->value, 'cms_category', false, 'key');
$_smarty_tpl->tpl_vars['cms_category']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['key']->value => $_smarty_tpl->tpl_vars['cms_category']->value) {
$_smarty_tpl->tpl_vars['cms_category']->do_else = false;
?>
									<tr <?php if ($_smarty_tpl->tpl_vars['key']->value%2) {?>class="alt_row"<?php }?>>
										<td>
											<?php $_smarty_tpl->_assignInScope('id_checkbox', ((1).('_')).($_smarty_tpl->tpl_vars['cms_category']->value['id_cms_category']));?>
											<input type="checkbox" class="cmsBox" name="<?php echo $_smarty_tpl->tpl_vars['input']->value['name'];?>
" id="<?php echo $_smarty_tpl->tpl_vars['id_checkbox']->value;?>
" value="<?php echo $_smarty_tpl->tpl_vars['id_checkbox']->value;?>
" <?php if ((isset($_smarty_tpl->tpl_vars['fields_value']->value[$_smarty_tpl->tpl_vars['id_checkbox']->value]))) {?>checked="checked"<?php }?> />
										</td>
										<td>
											<?php echo $_smarty_tpl->tpl_vars['cms_category']->value['id_cms_category'];?>

										</td>
										<td>
											<label class="control-label" for="<?php echo $_smarty_tpl->tpl_vars['id_checkbox']->value;?>
">
												<?php if ($_smarty_tpl->tpl_vars['cms_category']->value['level_depth'] > 0) {?>
													<?php echo str_repeat('- ',($_smarty_tpl->tpl_vars['cms_category']->value['level_depth']-1));?>

												<?php }?>
												<?php echo htmlspecialchars((string)$_smarty_tpl->tpl_vars['cms_category']->value['name'], ENT_QUOTES, 'UTF-8', true);?>

											</label>
										</td>
									</tr>
									<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['cms_category']->value['cms_pages'], 'cms_page', false, 'subkey');
$_smarty_tpl->tpl_vars['cms_page']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['subkey']->value => $_smarty_tpl->tpl_vars['cms_page']->value) {
$_smarty_tpl->tpl_vars['cms_page']->do_else = false;
?>
										<tr class="subitem<?php if (($_smarty_tpl->tpl_vars['subkey']->value+$_smarty_tpl->tpl_vars['key']->value-1)%2) {?> alt_row<?php }?>">
											<td>
												<?php $_smarty_tpl->_assignInScope('id_checkbox', ((0).('_')).($_smarty_tpl->tpl_vars['cms_page']->value['id_cms']));?>
												<input type="checkbox" class="cmsBox" name="<?php echo $_smarty_tpl->tpl_vars['input']->value['name'];?>
" id="<?php echo $_smarty_tpl->tpl_vars['id_checkbox']->value;?>
" value="<?php echo $_smarty_tpl->tpl_vars['id_checkbox']->value;?>
" <?php if ((isset($_smarty_tpl->tpl_vars['fields_value']->value[$_smarty_tpl->tpl_vars['id_checkbox']->value]))) {?>checked="checked"<?php }?> />
											</td>
											<td>
												<?php echo $_smarty_tpl->tpl_vars['cms_page']->value['id_cms'];?>

											</td>
											<td>
												<label class="control-label" for="<?php echo $_smarty_tpl->tpl_vars['id_checkbox']->value;?>
">
													<?php echo (str_repeat('- ',$_smarty_tpl->tpl_vars['cms_category']->value['level_depth'])).($_smarty_tpl->tpl_vars['cms_page']->value['meta_title']);?>

												</label>
											</td>
										</tr>
									<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
								<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
							</tbody>
						</table>
					</div>
				</div>
			</div>
			<?php } else { ?>
			<p><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'No pages have been created.','mod'=>'blockcms'),$_smarty_tpl ) );?>
</p>
		<?php }?>
	<?php } else { ?>
		<?php 
$_smarty_tpl->inheritance->callParent($_smarty_tpl, $this, '{$smarty.block.parent}');
?>

	<?php }
}
}
/* {/block "input_row"} */
}
