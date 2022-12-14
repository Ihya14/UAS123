<?php
/* Smarty version 4.2.1, created on 2023-01-12 22:08:30
  from 'D:\xampp\htdocs\shopw\themes\niara\pagination.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.2.1',
  'unifunc' => 'content_63c0145ee7c918_74369335',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '49685b0dea3ba973b22ee7ac3029e49303ee013b' => 
    array (
      0 => 'D:\\xampp\\htdocs\\shopw\\themes\\niara\\pagination.tpl',
      1 => 1664191549,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_63c0145ee7c918_74369335 (Smarty_Internal_Template $_smarty_tpl) {
if ((isset($_smarty_tpl->tpl_vars['no_follow']->value)) && $_smarty_tpl->tpl_vars['no_follow']->value) {?>
  <?php $_smarty_tpl->_assignInScope('no_follow_text', ' rel="nofollow"');
} else { ?>
  <?php $_smarty_tpl->_assignInScope('no_follow_text', '');
}?>

<?php if (!empty($_smarty_tpl->tpl_vars['p']->value)) {?>

  <?php if ((isset($_GET['id_category'])) && $_GET['id_category'] && (isset($_smarty_tpl->tpl_vars['category']->value))) {?>
    <?php if (!(isset($_smarty_tpl->tpl_vars['current_url']->value))) {?>
      <?php $_smarty_tpl->_assignInScope('requestPage', $_smarty_tpl->tpl_vars['link']->value->getPaginationLink('category',$_smarty_tpl->tpl_vars['category']->value,false,false,true,false));?>
    <?php } else { ?>
      <?php $_smarty_tpl->_assignInScope('requestPage', $_smarty_tpl->tpl_vars['current_url']->value);?>
    <?php }?>
    <?php $_smarty_tpl->_assignInScope('requestNb', $_smarty_tpl->tpl_vars['link']->value->getPaginationLink('category',$_smarty_tpl->tpl_vars['category']->value,true,false,false,true));?>
  <?php } elseif ((isset($_GET['id_manufacturer'])) && $_GET['id_manufacturer'] && (isset($_smarty_tpl->tpl_vars['manufacturer']->value))) {?>
    <?php $_smarty_tpl->_assignInScope('requestPage', $_smarty_tpl->tpl_vars['link']->value->getPaginationLink('manufacturer',$_smarty_tpl->tpl_vars['manufacturer']->value,false,false,true,false));?>
    <?php $_smarty_tpl->_assignInScope('requestNb', $_smarty_tpl->tpl_vars['link']->value->getPaginationLink('manufacturer',$_smarty_tpl->tpl_vars['manufacturer']->value,true,false,false,true));?>
  <?php } elseif ((isset($_GET['id_supplier'])) && $_GET['id_supplier'] && (isset($_smarty_tpl->tpl_vars['supplier']->value))) {?>
    <?php $_smarty_tpl->_assignInScope('requestPage', $_smarty_tpl->tpl_vars['link']->value->getPaginationLink('supplier',$_smarty_tpl->tpl_vars['supplier']->value,false,false,true,false));?>
    <?php $_smarty_tpl->_assignInScope('requestNb', $_smarty_tpl->tpl_vars['link']->value->getPaginationLink('supplier',$_smarty_tpl->tpl_vars['supplier']->value,true,false,false,true));?>
  <?php } else { ?>
    <?php if (!(isset($_smarty_tpl->tpl_vars['current_url']->value))) {?>
      <?php $_smarty_tpl->_assignInScope('requestPage', $_smarty_tpl->tpl_vars['link']->value->getPaginationLink(false,false,false,false,true,false));?>
    <?php } else { ?>
      <?php $_smarty_tpl->_assignInScope('requestPage', $_smarty_tpl->tpl_vars['current_url']->value);?>
    <?php }?>
    <?php $_smarty_tpl->_assignInScope('requestNb', $_smarty_tpl->tpl_vars['link']->value->getPaginationLink(false,false,true,false,false,true));?>
  <?php }?>

  <div id="pagination<?php if ((isset($_smarty_tpl->tpl_vars['paginationId']->value))) {?>_<?php echo $_smarty_tpl->tpl_vars['paginationId']->value;
}?>" class="form-group clearfix">
    <?php if ($_smarty_tpl->tpl_vars['start']->value != $_smarty_tpl->tpl_vars['stop']->value) {?>
      <ul class="pagination">
        <?php if ($_smarty_tpl->tpl_vars['p']->value != 1) {?>
          <?php $_smarty_tpl->_assignInScope('p_previous', $_smarty_tpl->tpl_vars['p']->value-1);?>
          <li id="pagination_previous<?php if ((isset($_smarty_tpl->tpl_vars['paginationId']->value))) {?>_<?php echo $_smarty_tpl->tpl_vars['paginationId']->value;
}?>" class="pagination_previous" title="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Previous'),$_smarty_tpl ) );?>
">
            <a<?php echo $_smarty_tpl->tpl_vars['no_follow_text']->value;?>
 href="<?php echo $_smarty_tpl->tpl_vars['link']->value->goPage($_smarty_tpl->tpl_vars['requestPage']->value,$_smarty_tpl->tpl_vars['p_previous']->value);?>
" rel="prev">
              <span>&laquo;</span>
            </a>
          </li>
        <?php } else { ?>
          <li id="pagination_previous<?php if ((isset($_smarty_tpl->tpl_vars['paginationId']->value))) {?>_<?php echo $_smarty_tpl->tpl_vars['paginationId']->value;
}?>" class="disabled pagination_previous" title="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Previous'),$_smarty_tpl ) );?>
">
            <span>
              <span>&laquo;</span>
            </span>
          </li>
        <?php }?>
        <?php if ($_smarty_tpl->tpl_vars['start']->value == 3) {?>
          <li>
            <a<?php echo $_smarty_tpl->tpl_vars['no_follow_text']->value;?>
 href="<?php echo $_smarty_tpl->tpl_vars['link']->value->goPage($_smarty_tpl->tpl_vars['requestPage']->value,1);?>
">
              <span>1</span>
            </a>
          </li>
          <li>
            <a<?php echo $_smarty_tpl->tpl_vars['no_follow_text']->value;?>
 href="<?php echo $_smarty_tpl->tpl_vars['link']->value->goPage($_smarty_tpl->tpl_vars['requestPage']->value,2);?>
">
              <span>2</span>
            </a>
          </li>
        <?php }?>
        <?php if ($_smarty_tpl->tpl_vars['start']->value == 2) {?>
          <li>
            <a<?php echo $_smarty_tpl->tpl_vars['no_follow_text']->value;?>
 href="<?php echo $_smarty_tpl->tpl_vars['link']->value->goPage($_smarty_tpl->tpl_vars['requestPage']->value,1);?>
">
              <span>1</span>
            </a>
          </li>
        <?php }?>
        <?php if ($_smarty_tpl->tpl_vars['start']->value > 3) {?>
          <li>
            <a<?php echo $_smarty_tpl->tpl_vars['no_follow_text']->value;?>
 href="<?php echo $_smarty_tpl->tpl_vars['link']->value->goPage($_smarty_tpl->tpl_vars['requestPage']->value,1);?>
">
              <span>1</span>
            </a>
          </li>
          <li class="truncate">
            <span>
              <span>...</span>
            </span>
          </li>
        <?php }?>
        <?php
$__section_pagination_0_loop = (is_array(@$_loop=$_smarty_tpl->tpl_vars['stop']->value+1) ? count($_loop) : max(0, (int) $_loop));
$__section_pagination_0_start = (int)@$_smarty_tpl->tpl_vars['start']->value < 0 ? max(0, (int)@$_smarty_tpl->tpl_vars['start']->value + $__section_pagination_0_loop) : min((int)@$_smarty_tpl->tpl_vars['start']->value, $__section_pagination_0_loop);
$__section_pagination_0_total = min(($__section_pagination_0_loop - $__section_pagination_0_start), $__section_pagination_0_loop);
$_smarty_tpl->tpl_vars['__smarty_section_pagination'] = new Smarty_Variable(array());
if ($__section_pagination_0_total !== 0) {
for ($__section_pagination_0_iteration = 1, $_smarty_tpl->tpl_vars['__smarty_section_pagination']->value['index'] = $__section_pagination_0_start; $__section_pagination_0_iteration <= $__section_pagination_0_total; $__section_pagination_0_iteration++, $_smarty_tpl->tpl_vars['__smarty_section_pagination']->value['index']++){
?>
          <?php if ($_smarty_tpl->tpl_vars['p']->value == (isset($_smarty_tpl->tpl_vars['__smarty_section_pagination']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_pagination']->value['index'] : null)) {?>
            <li class="active current">
              <span>
                <span><?php echo htmlspecialchars((string)$_smarty_tpl->tpl_vars['p']->value, ENT_QUOTES, 'UTF-8', true);?>
</span>
              </span>
            </li>
          <?php } else { ?>
            <li>
              <a<?php echo $_smarty_tpl->tpl_vars['no_follow_text']->value;?>
 href="<?php echo $_smarty_tpl->tpl_vars['link']->value->goPage($_smarty_tpl->tpl_vars['requestPage']->value,(isset($_smarty_tpl->tpl_vars['__smarty_section_pagination']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_pagination']->value['index'] : null));?>
">
                <span><?php echo htmlspecialchars((string)(isset($_smarty_tpl->tpl_vars['__smarty_section_pagination']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_pagination']->value['index'] : null), ENT_QUOTES, 'UTF-8', true);?>
</span>
              </a>
            </li>
          <?php }?>
        <?php
}
}
?>
        <?php if ($_smarty_tpl->tpl_vars['pages_nb']->value > $_smarty_tpl->tpl_vars['stop']->value+2) {?>
          <li class="truncate">
            <span>
              <span>...</span>
            </span>
          </li>
          <li>
            <a<?php echo $_smarty_tpl->tpl_vars['no_follow_text']->value;?>
 href="<?php echo $_smarty_tpl->tpl_vars['link']->value->goPage($_smarty_tpl->tpl_vars['requestPage']->value,$_smarty_tpl->tpl_vars['pages_nb']->value);?>
">
              <span><?php echo intval($_smarty_tpl->tpl_vars['pages_nb']->value);?>
</span>
            </a>
          </li>
        <?php }?>
        <?php if ($_smarty_tpl->tpl_vars['pages_nb']->value == $_smarty_tpl->tpl_vars['stop']->value+1) {?>
          <li>
            <a<?php echo $_smarty_tpl->tpl_vars['no_follow_text']->value;?>
 href="<?php echo $_smarty_tpl->tpl_vars['link']->value->goPage($_smarty_tpl->tpl_vars['requestPage']->value,$_smarty_tpl->tpl_vars['pages_nb']->value);?>
">
              <span><?php echo intval($_smarty_tpl->tpl_vars['pages_nb']->value);?>
</span>
            </a>
          </li>
        <?php }?>
        <?php if ($_smarty_tpl->tpl_vars['pages_nb']->value == $_smarty_tpl->tpl_vars['stop']->value+2) {?>
          <li>
            <a<?php echo $_smarty_tpl->tpl_vars['no_follow_text']->value;?>
 href="<?php echo $_smarty_tpl->tpl_vars['link']->value->goPage($_smarty_tpl->tpl_vars['requestPage']->value,$_smarty_tpl->tpl_vars['pages_nb']->value-1);?>
">
              <span><?php echo $_smarty_tpl->tpl_vars['pages_nb']->value-intval(1);?>
</span>
            </a>
          </li>
          <li>
            <a<?php echo $_smarty_tpl->tpl_vars['no_follow_text']->value;?>
 href="<?php echo $_smarty_tpl->tpl_vars['link']->value->goPage($_smarty_tpl->tpl_vars['requestPage']->value,$_smarty_tpl->tpl_vars['pages_nb']->value);?>
">
              <span><?php echo intval($_smarty_tpl->tpl_vars['pages_nb']->value);?>
</span>
            </a>
          </li>
        <?php }?>
        <?php if ($_smarty_tpl->tpl_vars['pages_nb']->value > 1 && $_smarty_tpl->tpl_vars['p']->value != $_smarty_tpl->tpl_vars['pages_nb']->value) {?>
          <?php $_smarty_tpl->_assignInScope('p_next', $_smarty_tpl->tpl_vars['p']->value+1);?>
          <li id="pagination_next<?php if ((isset($_smarty_tpl->tpl_vars['paginationId']->value))) {?>_<?php echo $_smarty_tpl->tpl_vars['paginationId']->value;
}?>" class="pagination_next" title="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Next'),$_smarty_tpl ) );?>
">
            <a<?php echo $_smarty_tpl->tpl_vars['no_follow_text']->value;?>
 href="<?php echo $_smarty_tpl->tpl_vars['link']->value->goPage($_smarty_tpl->tpl_vars['requestPage']->value,$_smarty_tpl->tpl_vars['p_next']->value);?>
" rel="next">
              <span>&raquo;</span>
            </a>
          </li>
        <?php } else { ?>
          <li id="pagination_next<?php if ((isset($_smarty_tpl->tpl_vars['paginationId']->value))) {?>_<?php echo $_smarty_tpl->tpl_vars['paginationId']->value;
}?>" class="disabled pagination_next" title="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Next'),$_smarty_tpl ) );?>
">
            <span>&raquo;</span>
          </li>
        <?php }?>
      </ul>

    <?php }?>
  </div>

  <?php if ($_smarty_tpl->tpl_vars['nb_products']->value > $_smarty_tpl->tpl_vars['products_per_page']->value && $_smarty_tpl->tpl_vars['start']->value != $_smarty_tpl->tpl_vars['stop']->value) {?>
    <div class="form-group showall">
      <form action="<?php if (!is_array($_smarty_tpl->tpl_vars['requestNb']->value)) {
echo $_smarty_tpl->tpl_vars['requestNb']->value;
} else {
echo $_smarty_tpl->tpl_vars['requestNb']->value['requestUrl'];
}?>" method="get">

        <?php if (!empty($_smarty_tpl->tpl_vars['search_query']->value)) {?>
          <input type="hidden" name="search_query" value="<?php echo htmlspecialchars((string)$_smarty_tpl->tpl_vars['search_query']->value, ENT_QUOTES, 'UTF-8', true);?>
">
        <?php }?>
        <?php if (!empty($_smarty_tpl->tpl_vars['tag']->value) && !is_array($_smarty_tpl->tpl_vars['tag']->value)) {?>
          <input type="hidden" name="tag" value="<?php echo htmlspecialchars((string)$_smarty_tpl->tpl_vars['tag']->value, ENT_QUOTES, 'UTF-8', true);?>
">
        <?php }?>

        <?php if (is_array($_smarty_tpl->tpl_vars['requestNb']->value)) {?>
          <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['requestNb']->value, 'requestValue', false, 'requestKey');
$_smarty_tpl->tpl_vars['requestValue']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['requestKey']->value => $_smarty_tpl->tpl_vars['requestValue']->value) {
$_smarty_tpl->tpl_vars['requestValue']->do_else = false;
?>
            <?php if ($_smarty_tpl->tpl_vars['requestKey']->value != 'requestUrl' && $_smarty_tpl->tpl_vars['requestKey']->value != 'p') {?>
              <input type="hidden" name="<?php echo htmlspecialchars((string)$_smarty_tpl->tpl_vars['requestKey']->value, ENT_QUOTES, 'UTF-8', true);?>
" value="<?php echo htmlspecialchars((string)$_smarty_tpl->tpl_vars['requestValue']->value, ENT_QUOTES, 'UTF-8', true);?>
">
            <?php }?>
          <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
        <?php }?>

        <button type="submit" class="btn btn-default"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Show all'),$_smarty_tpl ) );?>
</button>
        <input name="n" id="nb_item" type="hidden" value="<?php echo $_smarty_tpl->tpl_vars['nb_products']->value;?>
">

      </form>
    </div>
  <?php }?>

  <div class="form-group product-count">
    <?php if (($_smarty_tpl->tpl_vars['n']->value*$_smarty_tpl->tpl_vars['p']->value) < $_smarty_tpl->tpl_vars['nb_products']->value) {?>
      <?php $_smarty_tpl->_assignInScope('productShowing', $_smarty_tpl->tpl_vars['n']->value*$_smarty_tpl->tpl_vars['p']->value);?>
    <?php } else { ?>
      <?php $_smarty_tpl->_assignInScope('productShowing', ($_smarty_tpl->tpl_vars['n']->value*$_smarty_tpl->tpl_vars['p']->value-$_smarty_tpl->tpl_vars['nb_products']->value-$_smarty_tpl->tpl_vars['n']->value*$_smarty_tpl->tpl_vars['p']->value)*-1);?>
    <?php }?>
    <?php if ($_smarty_tpl->tpl_vars['p']->value == 1) {?>
      <?php $_smarty_tpl->_assignInScope('productShowingStart', 1);?>
    <?php } else { ?>
      <?php $_smarty_tpl->_assignInScope('productShowingStart', $_smarty_tpl->tpl_vars['n']->value*$_smarty_tpl->tpl_vars['p']->value-$_smarty_tpl->tpl_vars['n']->value+1);?>
    <?php }?>
    <p class="form-control-static">
      <?php if ($_smarty_tpl->tpl_vars['nb_products']->value > 1) {?>
        <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Showing %1$d - %2$d of %3$d items','sprintf'=>array($_smarty_tpl->tpl_vars['productShowingStart']->value,$_smarty_tpl->tpl_vars['productShowing']->value,$_smarty_tpl->tpl_vars['nb_products']->value)),$_smarty_tpl ) );?>

      <?php } else { ?>
        <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Showing %1$d - %2$d of 1 item','sprintf'=>array($_smarty_tpl->tpl_vars['productShowingStart']->value,$_smarty_tpl->tpl_vars['productShowing']->value)),$_smarty_tpl ) );?>

      <?php }?>
    </p>
  </div>

<?php }
}
}
