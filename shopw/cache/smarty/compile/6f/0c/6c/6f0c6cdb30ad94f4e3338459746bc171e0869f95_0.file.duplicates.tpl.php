<?php
/* Smarty version 4.2.1, created on 2023-01-12 22:23:56
  from 'D:\xampp\htdocs\shopw\admin622ozp8ob\themes\default\template\controllers\duplicate_urls\duplicates.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.2.1',
  'unifunc' => 'content_63c017fc25fb26_02019499',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '6f0c6cdb30ad94f4e3338459746bc171e0869f95' => 
    array (
      0 => 'D:\\xampp\\htdocs\\shopw\\admin622ozp8ob\\themes\\default\\template\\controllers\\duplicate_urls\\duplicates.tpl',
      1 => 1668409880,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_63c017fc25fb26_02019499 (Smarty_Internal_Template $_smarty_tpl) {
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['languages']->value, 'language');
$_smarty_tpl->tpl_vars['language']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['language']->value) {
$_smarty_tpl->tpl_vars['language']->do_else = false;
?>
    <div class="panel">
        <div class="panel-heading">
            <i class="icon-link"></i> <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Duplicate URLs'),$_smarty_tpl ) );?>
 - <?php echo mb_convert_encoding(htmlspecialchars((string)$_smarty_tpl->tpl_vars['language']->value['name'], ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>

        </div>
        <?php $_smarty_tpl->_assignInScope('duplicates', $_smarty_tpl->tpl_vars['duplicates_languages']->value[$_smarty_tpl->tpl_vars['language']->value['id_lang']]);?>
        <?php if (count($_smarty_tpl->tpl_vars['duplicates']->value)) {?>
            <div class="row table-responsive clearfix ">
                <div>
                    <table class="table">
                        <thead>
                        <tr>
                            <th style="width:10%">
                                <span class="title_box"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Type'),$_smarty_tpl ) );?>
</span>
                            </th>
                            <th style="width:10%">
                                <span class="title_box"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'ID'),$_smarty_tpl ) );?>
</span>
                            </th>
                            <th style="width:10%">
                                <span class="title_box"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Edit'),$_smarty_tpl ) );?>
</span>
                            </th>
                            <th style="width:10%">
                                <span class="title_box"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Type'),$_smarty_tpl ) );?>
</span>
                            </th>
                            <th style="width:10%">
                                <span class="title_box"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'ID'),$_smarty_tpl ) );?>
</span>
                            </th>
                            <th style="width:10%">
                                <span class="title_box"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Edit'),$_smarty_tpl ) );?>
</span>
                            </th>
                            <th style="width:40%">
                                <span class="title_box"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'URL'),$_smarty_tpl ) );?>
</span>
                            </th>
                        </tr>
                        </thead>
                        <tbody>
                        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['duplicates']->value, 'duplicate');
$_smarty_tpl->tpl_vars['duplicate']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['duplicate']->value) {
$_smarty_tpl->tpl_vars['duplicate']->do_else = false;
?>
                            <tr>
                                <td>
                                    <span><?php echo mb_convert_encoding(htmlspecialchars((string)$_smarty_tpl->tpl_vars['duplicate']->value['a_type'], ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
</span>
                                </td>
                                <td>
                                    <span><?php echo mb_convert_encoding(htmlspecialchars((string)$_smarty_tpl->tpl_vars['duplicate']->value['a_id'], ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
</span>
                                </td>
                                <td>
                                    <div class="btn-group">
                                        <a href="<?php echo mb_convert_encoding(htmlspecialchars((string)$_smarty_tpl->tpl_vars['duplicate']->value['a_view'], ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
"
                                           class="btn btn-default"
                                           title="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Edit'),$_smarty_tpl ) );?>
">
                                            <i class="icon-pencil"></i> <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Edit'),$_smarty_tpl ) );?>

                                        </a>
                                    </div>
                                </td>
                                <td>
                                    <span><?php echo mb_convert_encoding(htmlspecialchars((string)$_smarty_tpl->tpl_vars['duplicate']->value['b_type'], ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
</span>
                                </td>
                                <td>
                                    <span><?php echo mb_convert_encoding(htmlspecialchars((string)$_smarty_tpl->tpl_vars['duplicate']->value['b_id'], ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
</span>
                                </td>
                                <td>
                                    <div class="btn-group">
                                        <a href="<?php echo mb_convert_encoding(htmlspecialchars((string)$_smarty_tpl->tpl_vars['duplicate']->value['b_view'], ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
"
                                           class="btn btn-default"
                                           title="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Edit'),$_smarty_tpl ) );?>
">
                                            <i class="icon-pencil"></i> <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Edit'),$_smarty_tpl ) );?>

                                        </a>
                                    </div>
                                </td>
                                <td>
                                    <a href="<?php echo mb_convert_encoding(htmlspecialchars((string)$_smarty_tpl->tpl_vars['duplicate']->value['a_url'], ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
"><?php echo mb_convert_encoding(htmlspecialchars((string)$_smarty_tpl->tpl_vars['duplicate']->value['a_url'], ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
</a>
                                </td>
                            </tr>
                        <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                        </tbody>
                    </table>
                </div>
            </div>
        <?php } else { ?>
            <h2><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'No duplicates found. Good job!'),$_smarty_tpl ) );?>
</h2>
        <?php }?>
    </div>
<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);
}
}
