<?php
/* Smarty version 4.2.1, created on 2023-01-12 14:15:07
  from 'D:\xampp\htdocs\shopw\themes\niara\modules\blockmanufacturer\blockmanufacturer.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.2.1',
  'unifunc' => 'content_63bfa56b2393a9_00434119',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '2181a81bddf540d05e7938d14082b5cf94514441' => 
    array (
      0 => 'D:\\xampp\\htdocs\\shopw\\themes\\niara\\modules\\blockmanufacturer\\blockmanufacturer.tpl',
      1 => 1664191549,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_63bfa56b2393a9_00434119 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->compiled->nocache_hash = '129401183463bfa56b2143c3_72415488';
?>
<section>
<div id="manufacturers_block_left" class="block blockmanufacturer">
  <h2 class="title_block section-title-column">
    <?php if ($_smarty_tpl->tpl_vars['display_link_manufacturer']->value) {?>
      <a href="<?php echo htmlspecialchars((string)$_smarty_tpl->tpl_vars['link']->value->getPageLink('manufacturer'), ENT_QUOTES, 'UTF-8', true);?>
" title="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Manufacturers','mod'=>'blockmanufacturer'),$_smarty_tpl ) );?>
">
    <?php }?>
      <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Manufacturers','mod'=>'blockmanufacturer'),$_smarty_tpl ) );?>

    <?php if ($_smarty_tpl->tpl_vars['display_link_manufacturer']->value) {?>
      </a>
    <?php }?>
  </h2>
  <div class="block_content list-block">
    <?php if ($_smarty_tpl->tpl_vars['manufacturers']->value) {?>
      <?php if ($_smarty_tpl->tpl_vars['text_list']->value) {?>
        <ul>
          <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['manufacturers']->value, 'manufacturer', false, NULL, 'manufacturer_list', array (
  'iteration' => true,
));
$_smarty_tpl->tpl_vars['manufacturer']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['manufacturer']->value) {
$_smarty_tpl->tpl_vars['manufacturer']->do_else = false;
$_smarty_tpl->tpl_vars['__smarty_foreach_manufacturer_list']->value['iteration']++;
?>
            <?php if ((isset($_smarty_tpl->tpl_vars['__smarty_foreach_manufacturer_list']->value['iteration']) ? $_smarty_tpl->tpl_vars['__smarty_foreach_manufacturer_list']->value['iteration'] : null) <= $_smarty_tpl->tpl_vars['text_list_nb']->value) {?>
              <li>
                <a
                  href="<?php echo htmlspecialchars((string)$_smarty_tpl->tpl_vars['link']->value->getmanufacturerLink($_smarty_tpl->tpl_vars['manufacturer']->value['id_manufacturer'],$_smarty_tpl->tpl_vars['manufacturer']->value['link_rewrite']), ENT_QUOTES, 'UTF-8', true);?>
" title="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'More about %s','mod'=>'blockmanufacturer','sprintf'=>array($_smarty_tpl->tpl_vars['manufacturer']->value['name'])),$_smarty_tpl ) );?>
">
                  <?php echo htmlspecialchars((string)$_smarty_tpl->tpl_vars['manufacturer']->value['name'], ENT_QUOTES, 'UTF-8', true);?>

                </a>
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
            <select class="form-control" name="manufacturer_list">
              <option value="0"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'All manufacturers','mod'=>'blockmanufacturer'),$_smarty_tpl ) );?>
</option>
              <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['manufacturers']->value, 'manufacturer');
$_smarty_tpl->tpl_vars['manufacturer']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['manufacturer']->value) {
$_smarty_tpl->tpl_vars['manufacturer']->do_else = false;
?>
                <option value="<?php echo htmlspecialchars((string)$_smarty_tpl->tpl_vars['link']->value->getmanufacturerLink($_smarty_tpl->tpl_vars['manufacturer']->value['id_manufacturer'],$_smarty_tpl->tpl_vars['manufacturer']->value['link_rewrite']), ENT_QUOTES, 'UTF-8', true);?>
"><?php echo htmlspecialchars((string)$_smarty_tpl->tpl_vars['manufacturer']->value['name'], ENT_QUOTES, 'UTF-8', true);?>
</option>
              <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
            </select>
          </div>
        </form>
      <?php }?>
    <?php } else { ?>
      <p><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'No manufacturer','mod'=>'blockmanufacturer'),$_smarty_tpl ) );?>
</p>
    <?php }?>
  </div>
</div>
</section><?php }
}
