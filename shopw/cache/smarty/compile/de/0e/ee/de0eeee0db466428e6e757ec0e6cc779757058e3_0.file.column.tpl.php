<?php
/* Smarty version 4.2.1, created on 2023-01-12 14:15:07
  from 'D:\xampp\htdocs\shopw\themes\niara\modules\beesblogpopularposts\views\templates\hooks\column.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.2.1',
  'unifunc' => 'content_63bfa56bcae840_65091619',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'de0eeee0db466428e6e757ec0e6cc779757058e3' => 
    array (
      0 => 'D:\\xampp\\htdocs\\shopw\\themes\\niara\\modules\\beesblogpopularposts\\views\\templates\\hooks\\column.tpl',
      1 => 1664191549,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_63bfa56bcae840_65091619 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'D:\\xampp\\htdocs\\shopw\\vendor\\smarty\\smarty\\libs\\plugins\\modifier.date_format.php','function'=>'smarty_modifier_date_format',),));
if (!empty($_smarty_tpl->tpl_vars['beesblogPopularPostsPosts']->value)) {?>
    <div id="beesblog_column" class="block">
        <h4 class="title_block">
            <a href="<?php echo mb_convert_encoding(htmlspecialchars((string)$_smarty_tpl->tpl_vars['beesblogPopularPostsBlogUrl']->value, ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
" title="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Popular posts','mod'=>'beesblogpopularposts'),$_smarty_tpl ) );?>
"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Popular posts','mod'=>'beesblogpopularposts'),$_smarty_tpl ) );?>
</a>
        </h4>
        <div class="block_content">
            <ul>
                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['beesblogPopularPostsPosts']->value, 'post');
$_smarty_tpl->tpl_vars['post']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['post']->value) {
$_smarty_tpl->tpl_vars['post']->do_else = false;
?>
                    <li class="clearfix">
                        <div class="beesblogpopularposts-content">
                            <h5>
                                <a class="beesblogpopularposts-title" href="<?php echo mb_convert_encoding(htmlspecialchars((string)$_smarty_tpl->tpl_vars['post']->value->link, ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
" title="<?php echo mb_convert_encoding(htmlspecialchars((string)$_smarty_tpl->tpl_vars['post']->value->title, ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
">
                                    <?php echo mb_convert_encoding(htmlspecialchars((string)call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'truncate' ][ 0 ], array( $_smarty_tpl->tpl_vars['post']->value->title,'20' )), ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>

                                </a>
                            </h5>
                            <span>
                                <i class="icon icon-time"></i> <?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['post']->value->published);?>

                                <i class="icon icon-eye"></i> <?php echo intval($_smarty_tpl->tpl_vars['post']->value->viewed);?>

                            </span>
                        </div>
                    </li>
                <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
            </ul>
            <br />
            <div>
                <a href="<?php echo mb_convert_encoding(htmlspecialchars((string)$_smarty_tpl->tpl_vars['beesblogPopularPostsBlogUrl']->value, ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
" title="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Bees blog','mod'=>'beesblogpopularposts'),$_smarty_tpl ) );?>
" class="btn btn-primary"><span><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'All posts','mod'=>'beesblogpopularposts'),$_smarty_tpl ) );?>
 <i class="icon icon-chevron-right"></i></span></a>
            </div>
        </div>
    </div>
<?php }
}
}
