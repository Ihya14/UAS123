<?php
/* Smarty version 4.2.1, created on 2023-01-12 14:08:38
  from 'D:\xampp\htdocs\shopw\themes\niara\modules\homeslider\homeslider.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.2.1',
  'unifunc' => 'content_63bfa3e6e9dfe9_99256885',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '5f2dfbdd0a4c2bf8a91ac5d3b25322d2853fe73c' => 
    array (
      0 => 'D:\\xampp\\htdocs\\shopw\\themes\\niara\\modules\\homeslider\\homeslider.tpl',
      1 => 1664191549,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_63bfa3e6e9dfe9_99256885 (Smarty_Internal_Template $_smarty_tpl) {
if ($_smarty_tpl->tpl_vars['page_name']->value == 'index') {?>
  <?php if ((isset($_smarty_tpl->tpl_vars['homeslider_slides']->value))) {?>
    <div id="homepage-slider" class="col-xs-12">
      <?php if ((isset($_smarty_tpl->tpl_vars['homeslider_slides']->value[0])) && (isset($_smarty_tpl->tpl_vars['homeslider_slides']->value[0]['sizes'][1]))) {
$_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, 'height', null, null);
echo $_smarty_tpl->tpl_vars['homeslider_slides']->value[0]['sizes'][1];
$_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);
}?>
      <ul id="homeslider"<?php if ((($_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'height') !== null )) && $_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'height')) {?> style="max-height:<?php echo $_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'height');?>
px;"<?php }?>>
        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['homeslider_slides']->value, 'slide');
$_smarty_tpl->tpl_vars['slide']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['slide']->value) {
$_smarty_tpl->tpl_vars['slide']->do_else = false;
?>
          <?php if ($_smarty_tpl->tpl_vars['slide']->value['active']) {?>
            <li class="homeslider-container">
              <a href="<?php echo htmlspecialchars((string)$_smarty_tpl->tpl_vars['slide']->value['url'], ENT_QUOTES, 'UTF-8', true);?>
" title="<?php echo htmlspecialchars((string)$_smarty_tpl->tpl_vars['slide']->value['legend'], ENT_QUOTES, 'UTF-8', true);?>
">
                <img  class="img-responsive"
                      src="<?php echo $_smarty_tpl->tpl_vars['link']->value->getMediaLink(((string)(defined('_MODULE_DIR_') ? constant('_MODULE_DIR_') : null))."homeslider/images/".((string)(mb_convert_encoding(htmlspecialchars((string)$_smarty_tpl->tpl_vars['slide']->value['image'], ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8'))));?>
"
                      <?php if ((isset($_smarty_tpl->tpl_vars['slide']->value['size'])) && $_smarty_tpl->tpl_vars['slide']->value['size']) {?> <?php echo $_smarty_tpl->tpl_vars['slide']->value['size'];
}?>
                      alt="<?php echo mb_convert_encoding(htmlspecialchars((string)$_smarty_tpl->tpl_vars['slide']->value['legend'], ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
"
                      style="width: 100%; height: 100%"
                >
              </a>
              <?php if ((isset($_smarty_tpl->tpl_vars['slide']->value['description'])) && trim($_smarty_tpl->tpl_vars['slide']->value['description']) != '') {?>
                <div class="homeslider-wrapper hidden-xs">
                  <div class="homeslider-inner">
                  <div class="homeslider-description"><?php echo $_smarty_tpl->tpl_vars['slide']->value['description'];?>
</div>
                  </div>
                </div>
              <?php }?>
            </li>
          <?php }?>
        <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
      </ul>
      <div id="homeslider-pager">
        <span><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'More offers:','mod'=>'homeslider'),$_smarty_tpl ) );?>
</span>
        <span id="homeslider-pages"></span>
      </div>
    </div>
  <?php }
}
}
}
