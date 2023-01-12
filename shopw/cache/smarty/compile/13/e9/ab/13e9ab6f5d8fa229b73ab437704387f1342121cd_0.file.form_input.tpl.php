<?php
/* Smarty version 4.2.1, created on 2023-01-12 13:44:58
  from 'D:\xampp\htdocs\shopw\admin622ozp8ob\themes\default\template\helpers\form\form_input.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.2.1',
  'unifunc' => 'content_63bf9e5a4c8fa3_07695985',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '13e9ab6f5d8fa229b73ab437704387f1342121cd' => 
    array (
      0 => 'D:\\xampp\\htdocs\\shopw\\admin622ozp8ob\\themes\\default\\template\\helpers\\form\\form_input.tpl',
      1 => 1668409880,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_63bf9e5a4c8fa3_07695985 (Smarty_Internal_Template $_smarty_tpl) {
if ((isset($_smarty_tpl->tpl_vars['input']->value['lang'])) && $_smarty_tpl->tpl_vars['input']->value['lang']) {?>
	<?php if (count($_smarty_tpl->tpl_vars['languages']->value) > 1) {?>
		<div class="form-group">
			<?php if ((isset($_smarty_tpl->tpl_vars['input']->value['all_lang_button'])) && $_smarty_tpl->tpl_vars['input']->value['all_lang_button']) {?>
				<div class="translatable-field lang-0" style="display: none;">
					<div class="col-lg-9">
						<input type="text" value="" class="all_lang_field" onkeyup="updateAllLanguageFields(this); updateFriendlyURL();">
					</div>
					<div class="col-lg-2">
						<button type="button" class="btn btn-default dropdown-toggle" tabindex="-1" data-toggle="dropdown">
							<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'ALL'),$_smarty_tpl ) );?>

							<i class="icon-caret-down"></i>
						</button>
						<ul class="dropdown-menu">
							<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['languages']->value, 'language');
$_smarty_tpl->tpl_vars['language']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['language']->value) {
$_smarty_tpl->tpl_vars['language']->do_else = false;
?>
								<li><a href="javascript:hideOtherLanguage(<?php echo $_smarty_tpl->tpl_vars['language']->value['id_lang'];?>
);" tabindex="-1"><?php echo $_smarty_tpl->tpl_vars['language']->value['name'];?>
</a></li>
							<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
						</ul>
					</div>
				</div>
			<?php }?>
	<?php }?>
			<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['languages']->value, 'language');
$_smarty_tpl->tpl_vars['language']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['language']->value) {
$_smarty_tpl->tpl_vars['language']->do_else = false;
?>
				<?php if ((isset($_smarty_tpl->tpl_vars['fields_value']->value[$_smarty_tpl->tpl_vars['input']->value['name']][$_smarty_tpl->tpl_vars['language']->value['id_lang']]))) {?>
					<?php $_smarty_tpl->_assignInScope('value_text', $_smarty_tpl->tpl_vars['fields_value']->value[$_smarty_tpl->tpl_vars['input']->value['name']][$_smarty_tpl->tpl_vars['language']->value['id_lang']]);?>
				<?php } else { ?>
					<?php $_smarty_tpl->_assignInScope('value_text', '');?>
				<?php }?>
				<?php if (count($_smarty_tpl->tpl_vars['languages']->value) > 1) {?>
					<div class="translatable-field lang-<?php echo $_smarty_tpl->tpl_vars['language']->value['id_lang'];?>
" <?php if ($_smarty_tpl->tpl_vars['language']->value['id_lang'] != $_smarty_tpl->tpl_vars['defaultFormLanguage']->value) {?>style="display:none"<?php }?>>
					<div class="col-lg-9">
				<?php }?>
				<?php if ($_smarty_tpl->tpl_vars['input']->value['type'] == 'tags') {?>
				
					<?php echo '<script'; ?>
 type="text/javascript">
						$().ready(function () {
							var input_id = '<?php if ((isset($_smarty_tpl->tpl_vars['input']->value['id']))) {
echo $_smarty_tpl->tpl_vars['input']->value['id'];?>
_<?php echo $_smarty_tpl->tpl_vars['language']->value['id_lang'];
} else {
echo $_smarty_tpl->tpl_vars['input']->value['name'];?>
_<?php echo $_smarty_tpl->tpl_vars['language']->value['id_lang'];
}?>';
							$('#'+input_id).tagify({delimiters: <?php if ((isset($_smarty_tpl->tpl_vars['input']->value['delimiters']))) {?>[<?php echo $_smarty_tpl->tpl_vars['input']->value['delimiters'];?>
]<?php } else { ?>[13,44]<?php }?>, addTagPrompt: '<?php if ((isset($_smarty_tpl->tpl_vars['input']->value['tagPrompt']))) {
echo strtr((string)$_smarty_tpl->tpl_vars['input']->value['tagPrompt'], array("\\" => "\\\\", "'" => "\\'", "\"" => "\\\"", "\r" => "\\r", "\n" => "\\n", "</" => "<\/", "<!--" => "<\!--", "<s" => "<\s", "<S" => "<\S" ));
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Add tag','js'=>1),$_smarty_tpl ) );
}?>'});
							$('#<?php echo $_smarty_tpl->tpl_vars['table']->value;?>
_form').submit( function() {
								$(this).find('#'+input_id).val($('#'+input_id).tagify('serialize'));
							});
						});
					<?php echo '</script'; ?>
>
				
				<?php }?>
			<?php if ((isset($_smarty_tpl->tpl_vars['input']->value['maxchar'])) || (isset($_smarty_tpl->tpl_vars['input']->value['prefix'])) || (isset($_smarty_tpl->tpl_vars['input']->value['suffix']))) {?>
				<div class="input-group<?php if ((isset($_smarty_tpl->tpl_vars['input']->value['class']))) {?> <?php echo $_smarty_tpl->tpl_vars['input']->value['class'];
}?>">
			<?php }?>
				<?php if ((isset($_smarty_tpl->tpl_vars['input']->value['disableKeys'])) && is_array($_smarty_tpl->tpl_vars['input']->value['disableKeys'])) {?>
					<?php echo '<script'; ?>
 type="text/javascript">
						$().ready(function() {
							$('#<?php if ((isset($_smarty_tpl->tpl_vars['input']->value['id']))) {
echo strtr((string)$_smarty_tpl->tpl_vars['input']->value['id'], array("\\" => "\\\\", "'" => "\\'", "\"" => "\\\"", "\r" => "\\r", "\n" => "\\n", "</" => "<\/", "<!--" => "<\!--", "<s" => "<\s", "<S" => "<\S" ));?>
_<?php echo intval($_smarty_tpl->tpl_vars['language']->value['id_lang']);
} else {
echo strtr((string)$_smarty_tpl->tpl_vars['input']->value['name'], array("\\" => "\\\\", "'" => "\\'", "\"" => "\\\"", "\r" => "\\r", "\n" => "\\n", "</" => "<\/", "<!--" => "<\!--", "<s" => "<\s", "<S" => "<\S" ));?>
_<?php echo intval($_smarty_tpl->tpl_vars['language']->value['id_lang']);
}?>').keydown(function (e) {
								<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['input']->value['disableKeys'], 'disabledKey');
$_smarty_tpl->tpl_vars['disabledKey']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['disabledKey']->value) {
$_smarty_tpl->tpl_vars['disabledKey']->do_else = false;
?>
								if (e.which == <?php echo intval($_smarty_tpl->tpl_vars['disabledKey']->value);?>
) {
									return false;
								}
								<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
							});
						});
					<?php echo '</script'; ?>
>
				<?php }?>
				<?php if ((isset($_smarty_tpl->tpl_vars['input']->value['maxchar'])) && $_smarty_tpl->tpl_vars['input']->value['maxchar']) {?>
					<span id="<?php if ((isset($_smarty_tpl->tpl_vars['input']->value['id']))) {
echo $_smarty_tpl->tpl_vars['input']->value['id'];?>
_<?php echo $_smarty_tpl->tpl_vars['language']->value['id_lang'];
} else {
echo $_smarty_tpl->tpl_vars['input']->value['name'];?>
_<?php echo $_smarty_tpl->tpl_vars['language']->value['id_lang'];
}?>_counter" class="input-group-addon">
						<span class="text-count-down"><?php echo intval($_smarty_tpl->tpl_vars['input']->value['maxchar']);?>
</span>
					</span>
				<?php }?>
				<?php if ((isset($_smarty_tpl->tpl_vars['input']->value['prefix']))) {?>
					<span class="input-group-addon"><?php echo $_smarty_tpl->tpl_vars['input']->value['prefix'];?>
</span>
				<?php }?>
				<input type="text"
					   id="<?php if ((isset($_smarty_tpl->tpl_vars['input']->value['id']))) {
echo $_smarty_tpl->tpl_vars['input']->value['id'];?>
_<?php echo $_smarty_tpl->tpl_vars['language']->value['id_lang'];
} else {
echo $_smarty_tpl->tpl_vars['input']->value['name'];?>
_<?php echo $_smarty_tpl->tpl_vars['language']->value['id_lang'];
}?>"
					   name="<?php echo $_smarty_tpl->tpl_vars['input']->value['name'];?>
_<?php echo $_smarty_tpl->tpl_vars['language']->value['id_lang'];?>
"
					   class="<?php if ((isset($_smarty_tpl->tpl_vars['input']->value['class']))) {
echo $_smarty_tpl->tpl_vars['input']->value['class'];
}
if ($_smarty_tpl->tpl_vars['input']->value['type'] == 'tags') {?> tagify<?php }?>"
					   value="<?php if ((isset($_smarty_tpl->tpl_vars['input']->value['string_format'])) && $_smarty_tpl->tpl_vars['input']->value['string_format']) {
echo htmlspecialchars((string)sprintf($_smarty_tpl->tpl_vars['input']->value['string_format'],$_smarty_tpl->tpl_vars['value_text']->value), ENT_QUOTES, 'UTF-8', true);
} else {
echo htmlspecialchars((string)$_smarty_tpl->tpl_vars['value_text']->value, ENT_QUOTES, 'UTF-8', true);
}?>"
					   onkeyup="if (isArrowKey(event)) return ;updateFriendlyURL();"
						<?php if ((isset($_smarty_tpl->tpl_vars['input']->value['size']))) {?> size="<?php echo $_smarty_tpl->tpl_vars['input']->value['size'];?>
"<?php }?>
						<?php if ((isset($_smarty_tpl->tpl_vars['input']->value['maxchar'])) && $_smarty_tpl->tpl_vars['input']->value['maxchar']) {?> data-maxchar="<?php echo intval($_smarty_tpl->tpl_vars['input']->value['maxchar']);?>
"<?php }?>
						<?php if ((isset($_smarty_tpl->tpl_vars['input']->value['maxlength'])) && $_smarty_tpl->tpl_vars['input']->value['maxlength']) {?> maxlength="<?php echo intval($_smarty_tpl->tpl_vars['input']->value['maxlength']);?>
"<?php }?>
						<?php if ((isset($_smarty_tpl->tpl_vars['input']->value['readonly'])) && $_smarty_tpl->tpl_vars['input']->value['readonly']) {?> readonly="readonly"<?php }?>
						<?php if ((isset($_smarty_tpl->tpl_vars['input']->value['disabled'])) && $_smarty_tpl->tpl_vars['input']->value['disabled']) {?> disabled="disabled"<?php }?>
						<?php if ((isset($_smarty_tpl->tpl_vars['input']->value['autocomplete'])) && !$_smarty_tpl->tpl_vars['input']->value['autocomplete']) {?> autocomplete="off"<?php }?>
						<?php if ((isset($_smarty_tpl->tpl_vars['input']->value['required'])) && $_smarty_tpl->tpl_vars['input']->value['required']) {?> required="required" <?php }?>
						<?php if ((isset($_smarty_tpl->tpl_vars['input']->value['placeholder'])) && $_smarty_tpl->tpl_vars['input']->value['placeholder']) {?> placeholder="<?php echo $_smarty_tpl->tpl_vars['input']->value['placeholder'];?>
"<?php }?> />
				<?php if ((isset($_smarty_tpl->tpl_vars['input']->value['suffix']))) {?>
					<span class="input-group-addon"><?php echo $_smarty_tpl->tpl_vars['input']->value['suffix'];?>
</span>
				<?php }?>
			<?php if ((isset($_smarty_tpl->tpl_vars['input']->value['maxchar'])) || (isset($_smarty_tpl->tpl_vars['input']->value['prefix'])) || (isset($_smarty_tpl->tpl_vars['input']->value['suffix']))) {?>
				</div>
			<?php }?>
				<?php if (count($_smarty_tpl->tpl_vars['languages']->value) > 1) {?>
					</div>

					<div class="col-lg-2">
						<button type="button" class="btn btn-default dropdown-toggle" tabindex="-1" data-toggle="dropdown">
							<?php echo $_smarty_tpl->tpl_vars['language']->value['iso_code'];?>

							<i class="icon-caret-down"></i>
						</button>
						<ul class="dropdown-menu">
							<?php if ((isset($_smarty_tpl->tpl_vars['input']->value['all_lang_button']))) {?>
								<li><a href="javascript:hideOtherLanguage(0);" tabindex="-1"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'ALL'),$_smarty_tpl ) );?>
</a></li>
							<?php }?>
							<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['languages']->value, 'language');
$_smarty_tpl->tpl_vars['language']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['language']->value) {
$_smarty_tpl->tpl_vars['language']->do_else = false;
?>
								<li><a href="javascript:hideOtherLanguage(<?php echo $_smarty_tpl->tpl_vars['language']->value['id_lang'];?>
);" tabindex="-1"><?php echo $_smarty_tpl->tpl_vars['language']->value['name'];?>
</a></li>
							<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
						</ul>
					</div>
					</div>
				<?php }?>
			<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
			<?php if ((isset($_smarty_tpl->tpl_vars['input']->value['maxchar'])) && $_smarty_tpl->tpl_vars['input']->value['maxchar']) {?>
				<?php echo '<script'; ?>
 type="text/javascript">
					$(document).ready(function(){
						<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['languages']->value, 'language');
$_smarty_tpl->tpl_vars['language']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['language']->value) {
$_smarty_tpl->tpl_vars['language']->do_else = false;
?>
						countDown($("#<?php if ((isset($_smarty_tpl->tpl_vars['input']->value['id']))) {
echo $_smarty_tpl->tpl_vars['input']->value['id'];?>
_<?php echo $_smarty_tpl->tpl_vars['language']->value['id_lang'];
} else {
echo $_smarty_tpl->tpl_vars['input']->value['name'];?>
_<?php echo $_smarty_tpl->tpl_vars['language']->value['id_lang'];
}?>"), $("#<?php if ((isset($_smarty_tpl->tpl_vars['input']->value['id']))) {
echo $_smarty_tpl->tpl_vars['input']->value['id'];?>
_<?php echo $_smarty_tpl->tpl_vars['language']->value['id_lang'];
} else {
echo $_smarty_tpl->tpl_vars['input']->value['name'];?>
_<?php echo $_smarty_tpl->tpl_vars['language']->value['id_lang'];
}?>_counter"));
						<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
					});
				<?php echo '</script'; ?>
>
			<?php }?>
	<?php if (count($_smarty_tpl->tpl_vars['languages']->value) > 1) {?>
		</div>
	<?php }
} else { ?>
	<?php if ($_smarty_tpl->tpl_vars['input']->value['type'] == 'tags') {?>
	
		<?php echo '<script'; ?>
 type="text/javascript">
			$().ready(function () {
				var input_id = '<?php if ((isset($_smarty_tpl->tpl_vars['input']->value['id']))) {
echo $_smarty_tpl->tpl_vars['input']->value['id'];
} else {
echo $_smarty_tpl->tpl_vars['input']->value['name'];
}?>';
				$('#'+input_id).tagify({delimiters: <?php if ((isset($_smarty_tpl->tpl_vars['input']->value['delimiters']))) {?>[<?php echo $_smarty_tpl->tpl_vars['input']->value['delimiters'];?>
]<?php } else { ?>[13,44]<?php }?>, addTagPrompt: '<?php if ((isset($_smarty_tpl->tpl_vars['input']->value['tagPrompt']))) {
echo strtr((string)$_smarty_tpl->tpl_vars['input']->value['tagPrompt'], array("\\" => "\\\\", "'" => "\\'", "\"" => "\\\"", "\r" => "\\r", "\n" => "\\n", "</" => "<\/", "<!--" => "<\!--", "<s" => "<\s", "<S" => "<\S" ));
} else {
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Add tag'),$_smarty_tpl ) );
}?>'});
				$('#<?php echo $_smarty_tpl->tpl_vars['table']->value;?>
_form').submit( function() {
					$(this).find('#'+input_id).val($('#'+input_id).tagify('serialize'));
				});
			});
		<?php echo '</script'; ?>
>
	
	<?php }?>
	<?php $_smarty_tpl->_assignInScope('value_text', $_smarty_tpl->tpl_vars['fields_value']->value[$_smarty_tpl->tpl_vars['input']->value['name']]);
if ((isset($_smarty_tpl->tpl_vars['input']->value['maxchar'])) || (isset($_smarty_tpl->tpl_vars['input']->value['prefix'])) || (isset($_smarty_tpl->tpl_vars['input']->value['suffix']))) {?>
	<div class="input-group<?php if ((isset($_smarty_tpl->tpl_vars['input']->value['class']))) {?> <?php echo $_smarty_tpl->tpl_vars['input']->value['class'];
}?>">
		<?php }?>
		<?php if ((isset($_smarty_tpl->tpl_vars['input']->value['maxchar'])) && $_smarty_tpl->tpl_vars['input']->value['maxchar']) {?>
			<span id="<?php if ((isset($_smarty_tpl->tpl_vars['input']->value['id']))) {
echo $_smarty_tpl->tpl_vars['input']->value['id'];
} else {
echo $_smarty_tpl->tpl_vars['input']->value['name'];
}?>_counter" class="input-group-addon"><span class="text-count-down"><?php echo intval($_smarty_tpl->tpl_vars['input']->value['maxchar']);?>
</span></span>
		<?php }?>
		<?php if ((isset($_smarty_tpl->tpl_vars['input']->value['prefix']))) {?>
			<span class="input-group-addon"><?php echo $_smarty_tpl->tpl_vars['input']->value['prefix'];?>
</span>
		<?php }?>
		<input type="text"
			   name="<?php echo $_smarty_tpl->tpl_vars['input']->value['name'];?>
"
			   id="<?php if ((isset($_smarty_tpl->tpl_vars['input']->value['id']))) {
echo $_smarty_tpl->tpl_vars['input']->value['id'];
} else {
echo $_smarty_tpl->tpl_vars['input']->value['name'];
}?>"
			   value="<?php if ((isset($_smarty_tpl->tpl_vars['input']->value['string_format'])) && $_smarty_tpl->tpl_vars['input']->value['string_format']) {
echo htmlspecialchars((string)sprintf($_smarty_tpl->tpl_vars['input']->value['string_format'],$_smarty_tpl->tpl_vars['value_text']->value), ENT_QUOTES, 'UTF-8', true);
} else {
echo htmlspecialchars((string)$_smarty_tpl->tpl_vars['value_text']->value, ENT_QUOTES, 'UTF-8', true);
}?>"
			   class="<?php if ((isset($_smarty_tpl->tpl_vars['input']->value['class']))) {
echo $_smarty_tpl->tpl_vars['input']->value['class'];
}
if ($_smarty_tpl->tpl_vars['input']->value['type'] == 'tags') {?> tagify<?php }?>"
				<?php if ((isset($_smarty_tpl->tpl_vars['input']->value['size']))) {?> size="<?php echo $_smarty_tpl->tpl_vars['input']->value['size'];?>
"<?php }?>
				<?php if ((isset($_smarty_tpl->tpl_vars['input']->value['maxchar'])) && $_smarty_tpl->tpl_vars['input']->value['maxchar']) {?> data-maxchar="<?php echo intval($_smarty_tpl->tpl_vars['input']->value['maxchar']);?>
"<?php }?>
				<?php if ((isset($_smarty_tpl->tpl_vars['input']->value['maxlength'])) && $_smarty_tpl->tpl_vars['input']->value['maxlength']) {?> maxlength="<?php echo intval($_smarty_tpl->tpl_vars['input']->value['maxlength']);?>
"<?php }?>
				<?php if ((isset($_smarty_tpl->tpl_vars['input']->value['readonly'])) && $_smarty_tpl->tpl_vars['input']->value['readonly']) {?> readonly="readonly"<?php }?>
				<?php if ((isset($_smarty_tpl->tpl_vars['input']->value['disabled'])) && $_smarty_tpl->tpl_vars['input']->value['disabled']) {?> disabled="disabled"<?php }?>
				<?php if ((isset($_smarty_tpl->tpl_vars['input']->value['autocomplete'])) && !$_smarty_tpl->tpl_vars['input']->value['autocomplete']) {?> autocomplete="off"<?php }?>
				<?php if ((isset($_smarty_tpl->tpl_vars['input']->value['required'])) && $_smarty_tpl->tpl_vars['input']->value['required']) {?> required="required" <?php }?>
				<?php if ((isset($_smarty_tpl->tpl_vars['input']->value['placeholder'])) && $_smarty_tpl->tpl_vars['input']->value['placeholder']) {?> placeholder="<?php echo $_smarty_tpl->tpl_vars['input']->value['placeholder'];?>
"<?php }?>
		/>
		<?php if ((isset($_smarty_tpl->tpl_vars['input']->value['suffix']))) {?>
			<span class="input-group-addon"><?php echo $_smarty_tpl->tpl_vars['input']->value['suffix'];?>
</span>
		<?php }?>
		<?php if ((isset($_smarty_tpl->tpl_vars['input']->value['disableKeys'])) && is_array($_smarty_tpl->tpl_vars['input']->value['disableKeys'])) {?>
			<?php echo '<script'; ?>
 type="text/javascript">
				$().ready(function() {
					$('#<?php if ((isset($_smarty_tpl->tpl_vars['input']->value['id']))) {
echo strtr((string)$_smarty_tpl->tpl_vars['input']->value['id'], array("\\" => "\\\\", "'" => "\\'", "\"" => "\\\"", "\r" => "\\r", "\n" => "\\n", "</" => "<\/", "<!--" => "<\!--", "<s" => "<\s", "<S" => "<\S" ));?>
_<?php echo intval($_smarty_tpl->tpl_vars['language']->value['id_lang']);
} else {
echo strtr((string)$_smarty_tpl->tpl_vars['input']->value['name'], array("\\" => "\\\\", "'" => "\\'", "\"" => "\\\"", "\r" => "\\r", "\n" => "\\n", "</" => "<\/", "<!--" => "<\!--", "<s" => "<\s", "<S" => "<\S" ));?>
_<?php echo intval($_smarty_tpl->tpl_vars['language']->value['id_lang']);
}?>').keypress(function (e) {
						<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['input']->value['disableKeys'], 'disabledKey');
$_smarty_tpl->tpl_vars['disabledKey']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['disabledKey']->value) {
$_smarty_tpl->tpl_vars['disabledKey']->do_else = false;
?>
						if (e.which == <?php echo intval($_smarty_tpl->tpl_vars['disabledKey']->value);?>
) {
							return false;
						}
						<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
					});
				});
			<?php echo '</script'; ?>
>
		<?php }?>
		<?php if ((isset($_smarty_tpl->tpl_vars['input']->value['maxchar'])) || (isset($_smarty_tpl->tpl_vars['input']->value['prefix'])) || (isset($_smarty_tpl->tpl_vars['input']->value['suffix']))) {?>
	</div>
<?php }?>
	<?php if ((isset($_smarty_tpl->tpl_vars['input']->value['maxchar'])) && $_smarty_tpl->tpl_vars['input']->value['maxchar']) {?>
		<?php echo '<script'; ?>
 type="text/javascript">
			$(document).ready(function(){
				countDown($("#<?php if ((isset($_smarty_tpl->tpl_vars['input']->value['id']))) {
echo $_smarty_tpl->tpl_vars['input']->value['id'];
} else {
echo $_smarty_tpl->tpl_vars['input']->value['name'];
}?>"), $("#<?php if ((isset($_smarty_tpl->tpl_vars['input']->value['id']))) {
echo $_smarty_tpl->tpl_vars['input']->value['id'];
} else {
echo $_smarty_tpl->tpl_vars['input']->value['name'];
}?>_counter"));
			});
		<?php echo '</script'; ?>
>
	<?php }
}
}
}
