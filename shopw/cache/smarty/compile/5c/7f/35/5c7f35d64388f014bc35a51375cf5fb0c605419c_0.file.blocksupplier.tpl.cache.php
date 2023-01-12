<?php
/* Smarty version 4.2.1, created on 2023-01-12 14:15:07
  from 'D:\xampp\htdocs\shopw\themes\niara\modules\blocksupplier\blocksupplier.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.2.1',
  'unifunc' => 'content_63bfa56b932bf6_52311356',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '5c7f35d64388f014bc35a51375cf5fb0c605419c' => 
    array (
      0 => 'D:\\xampp\\htdocs\\shopw\\themes\\niara\\modules\\blocksupplier\\blocksupplier.tpl',
      1 => 1664191549,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_63bfa56b932bf6_52311356 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->compiled->nocache_hash = '14612099663bfa56b905b23_09203720';
?>
<section>
    <div id="suppliers_block_left" class="block blocksupplier">
        <h2 class="title_block section-title-column">
            <?php if ($_smarty_tpl->tpl_vars['display_link_supplier']->value) {?>
            <a href="<?php echo htmlspecialchars((string)$_smarty_tpl->tpl_vars['link']->value->getPageLink('supplier'), ENT_QUOTES, 'UTF-8', true);?>
"
               title="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Suppliers','mod'=>'blocksupplier'),$_smarty_tpl ) );?>
">
                <?php }?>
                <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Suppliers','mod'=>'blocksupplier'),$_smarty_tpl ) );?>

                <?php if ($_smarty_tpl->tpl_vars['display_link_supplier']->value) {?>
            </a>
            <?php }?>
        </h2>
        <div class="block_content list-block">
            <?php if ($_smarty_tpl->tpl_vars['suppliers']->value) {?>
                <?php if ($_smarty_tpl->tpl_vars['text_list']->value) {?>
                    <ul>
                        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['suppliers']->value, 'supplier', false, NULL, 'supplier_list', array (
  'iteration' => true,
));
$_smarty_tpl->tpl_vars['supplier']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['supplier']->value) {
$_smarty_tpl->tpl_vars['supplier']->do_else = false;
$_smarty_tpl->tpl_vars['__smarty_foreach_supplier_list']->value['iteration']++;
?>
                            <?php if ((isset($_smarty_tpl->tpl_vars['__smarty_foreach_supplier_list']->value['iteration']) ? $_smarty_tpl->tpl_vars['__smarty_foreach_supplier_list']->value['iteration'] : null) <= $_smarty_tpl->tpl_vars['text_list_nb']->value) {?>
                                <li>
                                    <?php if ($_smarty_tpl->tpl_vars['display_link_supplier']->value) {?>
                                    <a
                                            href="<?php echo htmlspecialchars((string)$_smarty_tpl->tpl_vars['link']->value->getsupplierLink($_smarty_tpl->tpl_vars['supplier']->value['id_supplier'],$_smarty_tpl->tpl_vars['supplier']->value['link_rewrite']), ENT_QUOTES, 'UTF-8', true);?>
"
                                            title="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'More about','mod'=>'blocksupplier'),$_smarty_tpl ) );?>
 <?php echo $_smarty_tpl->tpl_vars['supplier']->value['name'];?>
">
                                        <?php }?>
                                        <?php echo htmlspecialchars((string)$_smarty_tpl->tpl_vars['supplier']->value['name'], ENT_QUOTES, 'UTF-8', true);?>

                                        <?php if ($_smarty_tpl->tpl_vars['display_link_supplier']->value) {?>
                                    </a>
                                    <?php }?>
                                </li>
                            <?php }?>
                        <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                    </ul>
                <?php }?>
                <?php if ($_smarty_tpl->tpl_vars['form_list']->value) {?>
                    <form action="<?php echo htmlspecialchars((string)$_SERVER['SCRIPT_NAME'], ENT_QUOTES, 'UTF-8', true);?>
" method="get">
                        <div class="form-group selector1">
                            <select class="form-control" name="supplier_list">
                                <option value="0"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'All suppliers','mod'=>'blocksupplier'),$_smarty_tpl ) );?>
</option>
                                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['suppliers']->value, 'supplier');
$_smarty_tpl->tpl_vars['supplier']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['supplier']->value) {
$_smarty_tpl->tpl_vars['supplier']->do_else = false;
?>
                                    <option value="<?php echo htmlspecialchars((string)$_smarty_tpl->tpl_vars['link']->value->getsupplierLink($_smarty_tpl->tpl_vars['supplier']->value['id_supplier'],$_smarty_tpl->tpl_vars['supplier']->value['link_rewrite']), ENT_QUOTES, 'UTF-8', true);?>
"><?php echo htmlspecialchars((string)$_smarty_tpl->tpl_vars['supplier']->value['name'], ENT_QUOTES, 'UTF-8', true);?>
</option>
                                <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                            </select>
                        </div>
                    </form>
                <?php }?>
            <?php } else { ?>
                <p><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'No supplier','mod'=>'blocksupplier'),$_smarty_tpl ) );?>
</p>
            <?php }?>
        </div>
    </div>
</section><?php }
}
