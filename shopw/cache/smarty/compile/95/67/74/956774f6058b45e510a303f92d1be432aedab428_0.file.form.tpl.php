<?php
/* Smarty version 4.2.1, created on 2023-01-12 22:45:38
  from 'D:\xampp\htdocs\shopw\modules\blockbanner\views\templates\admin\_configure\helpers\form\form.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.2.1',
  'unifunc' => 'content_63c01d129d21f8_24924727',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '956774f6058b45e510a303f92d1be432aedab428' => 
    array (
      0 => 'D:\\xampp\\htdocs\\shopw\\modules\\blockbanner\\views\\templates\\admin\\_configure\\helpers\\form\\form.tpl',
      1 => 1574173941,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_63c01d129d21f8_24924727 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_135853540263c01d1298ed87_78880379', "field");
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, "helpers/form/form.tpl");
}
/* {block "field"} */
class Block_135853540263c01d1298ed87_78880379 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'field' => 
  array (
    0 => 'Block_135853540263c01d1298ed87_78880379',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

  <?php if ($_smarty_tpl->tpl_vars['input']->value['type'] == 'file_lang') {?>
    <div class="col-lg-9">
      <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['languages']->value, 'language');
$_smarty_tpl->tpl_vars['language']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['language']->value) {
$_smarty_tpl->tpl_vars['language']->do_else = false;
?>
      <?php if (count($_smarty_tpl->tpl_vars['languages']->value) > 1) {?>
        <div class="translatable-field lang-<?php echo intval($_smarty_tpl->tpl_vars['language']->value['id_lang']);?>
"
             <?php if ($_smarty_tpl->tpl_vars['language']->value['id_lang'] != $_smarty_tpl->tpl_vars['defaultFormLanguage']->value) {?>style="display:none"<?php }?>>
          <?php }?>
          <div class="form-group">
            <div class="col-lg-6">
              <input id="<?php echo mb_convert_encoding(htmlspecialchars((string)$_smarty_tpl->tpl_vars['input']->value['name'], ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
_<?php echo intval($_smarty_tpl->tpl_vars['language']->value['id_lang']);?>
"
                     type="file"
                     name="<?php echo mb_convert_encoding(htmlspecialchars((string)$_smarty_tpl->tpl_vars['input']->value['name'], ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
_<?php echo intval($_smarty_tpl->tpl_vars['language']->value['id_lang']);?>
"
                     class="hide"/>
              <div class="dummyfile input-group">
                <span class="input-group-addon"><i class="icon-file"></i></span>
                <input id="<?php echo mb_convert_encoding(htmlspecialchars((string)$_smarty_tpl->tpl_vars['input']->value['name'], ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
_<?php echo intval($_smarty_tpl->tpl_vars['language']->value['id_lang']);?>
-name"
                       type="text"
                       class="disabled"
                       name="filename"
                       readonly/>
                <span class="input-group-btn">
                  <button id="<?php echo mb_convert_encoding(htmlspecialchars((string)$_smarty_tpl->tpl_vars['input']->value['name'], ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
_<?php echo intval($_smarty_tpl->tpl_vars['language']->value['id_lang']);?>
-selectbutton"
                          type="button"
                          name="submitAddAttachments"
                          class="btn btn-default">
                    <i class="icon-folder-open"></i> <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Choose a file','mod'=>'blockbanner'),$_smarty_tpl ) );?>

                  </button>
                </span>
              </div>
            </div>
            <?php if (count($_smarty_tpl->tpl_vars['languages']->value) > 1) {?>
              <div class="col-lg-2">
                <button type="button" class="btn btn-default dropdown-toggle" tabindex="-1" data-toggle="dropdown">
                  <?php echo mb_convert_encoding(htmlspecialchars((string)$_smarty_tpl->tpl_vars['language']->value['iso_code'], ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>

                  <span class="caret"></span>
                </button>
                <ul class="dropdown-menu">
                  <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['languages']->value, 'lang');
$_smarty_tpl->tpl_vars['lang']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['lang']->value) {
$_smarty_tpl->tpl_vars['lang']->do_else = false;
?>
                    <li><a href="javascript:hideOtherLanguage(<?php echo intval($_smarty_tpl->tpl_vars['lang']->value['id_lang']);?>
);" tabindex="-1"><?php echo mb_convert_encoding(htmlspecialchars((string)$_smarty_tpl->tpl_vars['lang']->value['name'], ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
</a></li>
                  <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                </ul>
              </div>
            <?php }?>
          </div>
          <div class="form-group">
            <?php if ((isset($_smarty_tpl->tpl_vars['fields_value']->value[$_smarty_tpl->tpl_vars['input']->value['name']][$_smarty_tpl->tpl_vars['language']->value['id_lang']])) && $_smarty_tpl->tpl_vars['fields_value']->value[$_smarty_tpl->tpl_vars['input']->value['name']][$_smarty_tpl->tpl_vars['language']->value['id_lang']] != '') {?>
              <div id="<?php echo mb_convert_encoding(htmlspecialchars((string)$_smarty_tpl->tpl_vars['input']->value['name'], ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
-<?php echo intval($_smarty_tpl->tpl_vars['language']->value['id_lang']);?>
-images-thumbnails" class="col-lg-12">
                <img src="<?php echo mb_convert_encoding(htmlspecialchars((string)$_smarty_tpl->tpl_vars['imageUrl']->value, ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');
echo mb_convert_encoding(htmlspecialchars((string)$_smarty_tpl->tpl_vars['fields_value']->value[$_smarty_tpl->tpl_vars['input']->value['name']][$_smarty_tpl->tpl_vars['language']->value['id_lang']], ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
" class="img-thumbnail"/>
              </div>
            <?php }?>
          </div>
          <?php if (count($_smarty_tpl->tpl_vars['languages']->value) > 1) {?>
        </div>
      <?php }?>
        <?php echo '<script'; ?>
>
          $(document).ready(function () {
            $('#<?php echo mb_convert_encoding(htmlspecialchars((string)$_smarty_tpl->tpl_vars['input']->value['name'], ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
_<?php echo intval($_smarty_tpl->tpl_vars['language']->value['id_lang']);?>
-selectbutton').click(function (e) {
              $('#<?php echo mb_convert_encoding(htmlspecialchars((string)$_smarty_tpl->tpl_vars['input']->value['name'], ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
_<?php echo intval($_smarty_tpl->tpl_vars['language']->value['id_lang']);?>
').trigger('click');
            });
            $('#<?php echo mb_convert_encoding(htmlspecialchars((string)$_smarty_tpl->tpl_vars['input']->value['name'], ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
_<?php echo intval($_smarty_tpl->tpl_vars['language']->value['id_lang']);?>
').change(function (e) {
              var val = $(this).val();
              var file = val.split(/[\\/]/);
              $('#<?php echo mb_convert_encoding(htmlspecialchars((string)$_smarty_tpl->tpl_vars['input']->value['name'], ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
_<?php echo intval($_smarty_tpl->tpl_vars['language']->value['id_lang']);?>
-name').val(file[file.length - 1]);
            });
          });
        <?php echo '</script'; ?>
>
      <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
      <?php if ((isset($_smarty_tpl->tpl_vars['input']->value['desc'])) && !empty($_smarty_tpl->tpl_vars['input']->value['desc'])) {?>
        <p class="help-block">
                    <?php echo $_smarty_tpl->tpl_vars['input']->value['desc'];?>

        </p>
      <?php }?>
    </div>
  <?php } else { ?>
    <?php 
$_smarty_tpl->inheritance->callParent($_smarty_tpl, $this, '{$smarty.block.parent}');
?>

  <?php }
}
}
/* {/block "field"} */
}
