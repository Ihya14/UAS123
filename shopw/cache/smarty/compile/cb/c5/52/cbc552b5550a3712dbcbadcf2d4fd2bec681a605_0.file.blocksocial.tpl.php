<?php
/* Smarty version 4.2.1, created on 2023-01-12 14:08:37
  from 'D:\xampp\htdocs\shopw\themes\niara\modules\blocksocial\blocksocial.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.2.1',
  'unifunc' => 'content_63bfa3e52e7666_84253768',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'cbc552b5550a3712dbcbadcf2d4fd2bec681a605' => 
    array (
      0 => 'D:\\xampp\\htdocs\\shopw\\themes\\niara\\modules\\blocksocial\\blocksocial.tpl',
      1 => 1664191549,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_63bfa3e52e7666_84253768 (Smarty_Internal_Template $_smarty_tpl) {
?><section id="blocksocial" class="col-xs-12">
    <h2 class="title_block main-title-column social-header"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Follow us','mod'=>'blocksocial'),$_smarty_tpl ) );?>
</h2>

    <?php if (!empty($_smarty_tpl->tpl_vars['facebook_url']->value)) {?>
        <a href="<?php echo htmlspecialchars((string)$_smarty_tpl->tpl_vars['facebook_url']->value, ENT_QUOTES, 'UTF-8', true);?>
" title="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Facebook','mod'=>'blocksocial'),$_smarty_tpl ) );?>
" target="_blank"
           rel="noopener">
            <i class="icon icon-facebook icon-2x icon-fw"></i>
        </a>
    <?php }?>

    <?php if (!empty($_smarty_tpl->tpl_vars['twitter_url']->value)) {?>
        <a href="<?php echo htmlspecialchars((string)$_smarty_tpl->tpl_vars['twitter_url']->value, ENT_QUOTES, 'UTF-8', true);?>
" title="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Twitter','mod'=>'blocksocial'),$_smarty_tpl ) );?>
" target="_blank"
           rel="noopener">
            <i class="icon icon-twitter icon-2x icon-fw"></i>
        </a>
    <?php }?>

    <?php if (!empty($_smarty_tpl->tpl_vars['rss_url']->value)) {?>
        <a href="<?php echo htmlspecialchars((string)$_smarty_tpl->tpl_vars['rss_url']->value, ENT_QUOTES, 'UTF-8', true);?>
" title="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'RSS','mod'=>'blocksocial'),$_smarty_tpl ) );?>
" target="_blank" rel="noopener">
            <i class="icon icon-rss icon-2x icon-fw"></i>
        </a>
    <?php }?>

    <?php if (!empty($_smarty_tpl->tpl_vars['youtube_url']->value)) {?>
        <a href="<?php echo htmlspecialchars((string)$_smarty_tpl->tpl_vars['youtube_url']->value, ENT_QUOTES, 'UTF-8', true);?>
" title="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Youtube','mod'=>'blocksocial'),$_smarty_tpl ) );?>
" target="_blank"
           rel="noopener">
            <i class="icon icon-youtube icon-2x icon-fw"></i>
        </a>
    <?php }?>

    <?php if (!empty($_smarty_tpl->tpl_vars['pinterest_url']->value)) {?>
        <a href="<?php echo htmlspecialchars((string)$_smarty_tpl->tpl_vars['pinterest_url']->value, ENT_QUOTES, 'UTF-8', true);?>
" title="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Pinterest','mod'=>'blocksocial'),$_smarty_tpl ) );?>
" target="_blank"
           rel="noopener">
            <i class="icon icon-pinterest icon-2x icon-fw"></i>
        </a>
    <?php }?>

    <?php if (!empty($_smarty_tpl->tpl_vars['vimeo_url']->value)) {?>
        <a href="<?php echo htmlspecialchars((string)$_smarty_tpl->tpl_vars['vimeo_url']->value, ENT_QUOTES, 'UTF-8', true);?>
" title="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Vimeo','mod'=>'blocksocial'),$_smarty_tpl ) );?>
" target="_blank"
           rel="noopener">
            <i class="icon icon-vimeo icon-2x icon-fw"></i>
        </a>
    <?php }?>

    <?php if (!empty($_smarty_tpl->tpl_vars['instagram_url']->value)) {?>
        <a href="<?php echo htmlspecialchars((string)$_smarty_tpl->tpl_vars['instagram_url']->value, ENT_QUOTES, 'UTF-8', true);?>
" title="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Instagram','mod'=>'blocksocial'),$_smarty_tpl ) );?>
" target="_blank"
           rel="noopener">
            <i class="icon icon-instagram icon-2x icon-fw"></i>
        </a>
    <?php }?>

    <?php if (!empty($_smarty_tpl->tpl_vars['vk_url']->value)) {?>
        <a href="<?php echo htmlspecialchars((string)$_smarty_tpl->tpl_vars['vk_url']->value, ENT_QUOTES, 'UTF-8', true);?>
" title="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'VK','mod'=>'blocksocial'),$_smarty_tpl ) );?>
" target="_blank" rel="noopener">
            <i class="icon icon-vk icon-2x icon-fw"></i>
        </a>
    <?php }?>

    <?php if (!empty($_smarty_tpl->tpl_vars['linkedin_url']->value)) {?>
        <a href="<?php echo htmlspecialchars((string)$_smarty_tpl->tpl_vars['linkedin_url']->value, ENT_QUOTES, 'UTF-8', true);?>
" title="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Linkedin','mod'=>'blocksocial'),$_smarty_tpl ) );?>
" target="_blank"
           rel="noopener">
            <i class="icon icon-linkedin icon-2x icon-fw"></i>
        </a>
    <?php }?>

    <?php if (!empty($_smarty_tpl->tpl_vars['wordpress_url']->value)) {?>
        <a href="<?php echo htmlspecialchars((string)$_smarty_tpl->tpl_vars['wordpress_url']->value, ENT_QUOTES, 'UTF-8', true);?>
" title="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'WordPress','mod'=>'blocksocial'),$_smarty_tpl ) );?>
" target="_blank"
           rel="noopener">
            <i class="icon icon-wordpress icon-2x icon-fw"></i>
        </a>
    <?php }?>

    <?php if (!empty($_smarty_tpl->tpl_vars['amazon_url']->value)) {?>
        <a href="<?php echo htmlspecialchars((string)$_smarty_tpl->tpl_vars['amazon_url']->value, ENT_QUOTES, 'UTF-8', true);?>
" title="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Amazon','mod'=>'blocksocial'),$_smarty_tpl ) );?>
" target="_blank"
           rel="noopener">
            <i class="icon icon-amazon icon-2x icon-fw"></i>
        </a>
    <?php }?>

    <?php if (!empty($_smarty_tpl->tpl_vars['tumblr_url']->value)) {?>
        <a href="<?php echo htmlspecialchars((string)$_smarty_tpl->tpl_vars['tumblr_url']->value, ENT_QUOTES, 'UTF-8', true);?>
" title="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Tumblr','mod'=>'blocksocial'),$_smarty_tpl ) );?>
" target="_blank"
           rel="noopener">
            <i class="icon icon-tumblr icon-2x icon-fw"></i>
        </a>
    <?php }?>

    <?php if (!empty($_smarty_tpl->tpl_vars['snapchat_url']->value)) {?>
        <a href="<?php echo htmlspecialchars((string)$_smarty_tpl->tpl_vars['snapchat_url']->value, ENT_QUOTES, 'UTF-8', true);?>
" title="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Snapchat','mod'=>'blocksocial'),$_smarty_tpl ) );?>
" target="_blank"
           rel="noopener">
            <i class="icon icon-snapchat icon-2x icon-fw"></i>
        </a>
    <?php }?>

    <?php if (!empty($_smarty_tpl->tpl_vars['reddit_url']->value)) {?>
        <a href="<?php echo htmlspecialchars((string)$_smarty_tpl->tpl_vars['reddit_url']->value, ENT_QUOTES, 'UTF-8', true);?>
" title="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Reddit','mod'=>'blocksocial'),$_smarty_tpl ) );?>
" target="_blank"
           rel="noopener">
            <i class="icon icon-reddit icon-2x icon-fw"></i>
        </a>
    <?php }?>

    <?php if (!empty($_smarty_tpl->tpl_vars['yelp_url']->value)) {?>
        <a href="<?php echo htmlspecialchars((string)$_smarty_tpl->tpl_vars['yelp_url']->value, ENT_QUOTES, 'UTF-8', true);?>
" title="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Yelp','mod'=>'blocksocial'),$_smarty_tpl ) );?>
" target="_blank" rel="noopener">
            <i class="icon icon-yelp icon-2x icon-fw"></i>
        </a>
    <?php }?>

    <?php if (!empty($_smarty_tpl->tpl_vars['medium_url']->value)) {?>
        <a href="<?php echo htmlspecialchars((string)$_smarty_tpl->tpl_vars['medium_url']->value, ENT_QUOTES, 'UTF-8', true);?>
" title="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Medium','mod'=>'blocksocial'),$_smarty_tpl ) );?>
" target="_blank"
           rel="noopener">
            <i class="icon icon-medium icon-2x icon-fw"></i>
        </a>
    <?php }?>
</section>
<?php }
}
