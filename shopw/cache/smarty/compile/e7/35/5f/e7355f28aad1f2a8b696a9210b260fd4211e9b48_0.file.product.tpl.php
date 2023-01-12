<?php
/* Smarty version 4.2.1, created on 2023-01-12 22:42:09
  from 'D:\xampp\htdocs\shopw\themes\niara\modules\beesblogpopularposts\views\templates\hooks\product.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.2.1',
  'unifunc' => 'content_63c01c4185fb46_08684645',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'e7355f28aad1f2a8b696a9210b260fd4211e9b48' => 
    array (
      0 => 'D:\\xampp\\htdocs\\shopw\\themes\\niara\\modules\\beesblogpopularposts\\views\\templates\\hooks\\product.tpl',
      1 => 1664191549,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_63c01c4185fb46_08684645 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'D:\\xampp\\htdocs\\shopw\\vendor\\smarty\\smarty\\libs\\plugins\\modifier.date_format.php','function'=>'smarty_modifier_date_format',),));
?>

<?php if (!empty($_smarty_tpl->tpl_vars['beesblogPopularPostsPosts']->value)) {?>
	<section class="page-product-box">
        <div class="row">
			<div class="col-xs-12 col-sm-12">
				<div id="beesblog_column">
					<h3 class="page-product-heading">
						<a href="<?php echo mb_convert_encoding(htmlspecialchars((string)$_smarty_tpl->tpl_vars['beesblogPopularPostsBlogUrl']->value, ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
" title="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Popular posts','mod'=>'beesblogpopularposts'),$_smarty_tpl ) );?>
"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Popular posts','mod'=>'beesblogpopularposts'),$_smarty_tpl ) );?>
</a>
					</h3>
				</div>
				<div class="row">
					<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['beesblogPopularPostsPosts']->value, 'post');
$_smarty_tpl->tpl_vars['post']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['post']->value) {
$_smarty_tpl->tpl_vars['post']->do_else = false;
?>
						<article>
							<div class="col-xs-12 col-sm-4 col-md-3">
								<div class="beesblogpopularposts-content">
									<h3 class="post-name">
										<a class="beesblogpopularposts-title" href="<?php echo mb_convert_encoding(htmlspecialchars((string)$_smarty_tpl->tpl_vars['post']->value->link, ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
" title="<?php echo mb_convert_encoding(htmlspecialchars((string)$_smarty_tpl->tpl_vars['post']->value->title, ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
">
											<?php $_smarty_tpl->_assignInScope('imagePath', Media::getMediaPath(BeesBlog::getPostImagePath($_smarty_tpl->tpl_vars['post']->value->id)));?>
											<?php if (($_smarty_tpl->tpl_vars['imagePath']->value)) {?>
											<img class="img-responsive" src="<?php echo mb_convert_encoding(htmlspecialchars((string)$_smarty_tpl->tpl_vars['imagePath']->value, ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
" title="<?php echo mb_convert_encoding(htmlspecialchars((string)$_smarty_tpl->tpl_vars['post']->value->title, ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
" />
											<?php }?>
											<?php echo mb_convert_encoding(htmlspecialchars((string)$_smarty_tpl->tpl_vars['post']->value->title, ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>

										</a>
									</h3>
									<p><?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'truncate' ][ 0 ], array( preg_replace('!<[^>]*?>!', ' ', $_smarty_tpl->tpl_vars['post']->value->content),'150' ));?>
</p>
									<p>
										<i class="icon icon-calendar"></i> <?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['post']->value->published);?>

										<i class="icon icon-eye"></i> <?php echo intval($_smarty_tpl->tpl_vars['post']->value->viewed);?>

									</p>
									<p><a class="btn btn-primary" href="<?php echo mb_convert_encoding(htmlspecialchars((string)$_smarty_tpl->tpl_vars['post']->value->link, ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
" title="<?php echo mb_convert_encoding(htmlspecialchars((string)$_smarty_tpl->tpl_vars['post']->value->title, ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Read More','mod'=>'beesblogpopularposts'),$_smarty_tpl ) );?>
</a></p>
								</div>
							</div>
						</article>
					<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
				</div>
			</div>
		</div>
	</section>
<?php }
}
}
