<?php
/* Smarty version 4.2.1, created on 2023-01-12 13:55:51
  from 'D:\xampp\htdocs\shopw\themes\niara\header.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.2.1',
  'unifunc' => 'content_63bfa0e70fb549_98454478',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'ec1e39992446b1ce0c6de6432d62cdb5c687fe4e' => 
    array (
      0 => 'D:\\xampp\\htdocs\\shopw\\themes\\niara\\header.tpl',
      1 => 1664191549,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_63bfa0e70fb549_98454478 (Smarty_Internal_Template $_smarty_tpl) {
?><!DOCTYPE HTML>
<!--[if lt IE 7]>
<html class="no-js lt-ie9 lt-ie8 lt-ie7" <?php if ((isset($_smarty_tpl->tpl_vars['language_code']->value)) && $_smarty_tpl->tpl_vars['language_code']->value) {?>
      lang="<?php echo htmlspecialchars((string)$_smarty_tpl->tpl_vars['language_code']->value, ENT_QUOTES, 'UTF-8', true);?>
" <?php }?>><![endif]-->
<!--[if IE 7]>
<html class="no-js lt-ie9 lt-ie8 ie7" <?php if ((isset($_smarty_tpl->tpl_vars['language_code']->value)) && $_smarty_tpl->tpl_vars['language_code']->value) {?>
      lang="<?php echo htmlspecialchars((string)$_smarty_tpl->tpl_vars['language_code']->value, ENT_QUOTES, 'UTF-8', true);?>
" <?php }?>><![endif]-->
<!--[if IE 8]>
<html class="no-js lt-ie9 ie8" <?php if ((isset($_smarty_tpl->tpl_vars['language_code']->value)) && $_smarty_tpl->tpl_vars['language_code']->value) {?>
      lang="<?php echo htmlspecialchars((string)$_smarty_tpl->tpl_vars['language_code']->value, ENT_QUOTES, 'UTF-8', true);?>
" <?php }?>><![endif]-->
<!--[if gt IE 8]>
<html class="no-js ie9" <?php if ((isset($_smarty_tpl->tpl_vars['language_code']->value)) && $_smarty_tpl->tpl_vars['language_code']->value) {?> lang="<?php echo htmlspecialchars((string)$_smarty_tpl->tpl_vars['language_code']->value, ENT_QUOTES, 'UTF-8', true);?>
"
      <?php }?>><![endif]-->
<html<?php if ((isset($_smarty_tpl->tpl_vars['language_code']->value)) && $_smarty_tpl->tpl_vars['language_code']->value) {?> lang="<?php echo htmlspecialchars((string)$_smarty_tpl->tpl_vars['language_code']->value, ENT_QUOTES, 'UTF-8', true);?>
"<?php }
if ((isset($_smarty_tpl->tpl_vars['isRtl']->value)) && $_smarty_tpl->tpl_vars['isRtl']->value) {?> dir="rtl"<?php }?>>
<head>
    <meta charset="utf-8">
    <title><?php echo htmlspecialchars((string)$_smarty_tpl->tpl_vars['meta_title']->value, ENT_QUOTES, 'UTF-8', true);?>
</title>
    <?php if ((isset($_smarty_tpl->tpl_vars['meta_description']->value)) && $_smarty_tpl->tpl_vars['meta_description']->value) {?>
        <meta name="description" content="<?php echo htmlspecialchars((string)$_smarty_tpl->tpl_vars['meta_description']->value, ENT_QUOTES, 'UTF-8', true);?>
">
    <?php }?>
    <?php if ((isset($_smarty_tpl->tpl_vars['meta_keywords']->value)) && $_smarty_tpl->tpl_vars['meta_keywords']->value) {?>
        <meta name="keywords" content="<?php echo htmlspecialchars((string)$_smarty_tpl->tpl_vars['meta_keywords']->value, ENT_QUOTES, 'UTF-8', true);?>
">
    <?php }?>
    <meta name="generator" content="thirty bees">
    <meta name="robots" content="<?php if ((isset($_smarty_tpl->tpl_vars['nobots']->value))) {?>no<?php }?>index,<?php if ((isset($_smarty_tpl->tpl_vars['nofollow']->value)) && $_smarty_tpl->tpl_vars['nofollow']->value) {?>no<?php }?>follow">
    <meta name="viewport" content="width=device-width, minimum-scale=0.25, maximum-scale=5, initial-scale=1.0">
    <meta name="apple-mobile-web-app-capable" content="yes">
    <link rel="icon" type="image/vnd.microsoft.icon" href="<?php echo $_smarty_tpl->tpl_vars['favicon_url']->value;?>
?<?php echo $_smarty_tpl->tpl_vars['img_update_time']->value;?>
">
    <link rel="shortcut icon" type="image/x-icon" href="<?php echo $_smarty_tpl->tpl_vars['favicon_url']->value;?>
?<?php echo $_smarty_tpl->tpl_vars['img_update_time']->value;?>
">
    <?php if ((isset($_smarty_tpl->tpl_vars['css_files']->value))) {?>
        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['css_files']->value, 'media', false, 'css_uri');
$_smarty_tpl->tpl_vars['media']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['css_uri']->value => $_smarty_tpl->tpl_vars['media']->value) {
$_smarty_tpl->tpl_vars['media']->do_else = false;
?>
            <?php if ($_smarty_tpl->tpl_vars['css_uri']->value == 'lteIE9') {?>
                <!--[if lte IE 9]>
                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['css_files']->value[$_smarty_tpl->tpl_vars['css_uri']->value], 'mediaie9', false, 'css_uriie9');
$_smarty_tpl->tpl_vars['mediaie9']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['css_uriie9']->value => $_smarty_tpl->tpl_vars['mediaie9']->value) {
$_smarty_tpl->tpl_vars['mediaie9']->do_else = false;
?>
                  <link rel="stylesheet"
                        href="<?php echo htmlspecialchars((string)$_smarty_tpl->tpl_vars['css_uriie9']->value, ENT_QUOTES, 'UTF-8', true);?>
"
                        type="text/css"
                        media="<?php echo htmlspecialchars((string)$_smarty_tpl->tpl_vars['mediaie9']->value, ENT_QUOTES, 'UTF-8', true);?>
"
                  >
                <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                <![endif]-->
            <?php } else { ?>
                <link rel="stylesheet"
                      href="<?php echo htmlspecialchars((string)$_smarty_tpl->tpl_vars['css_uri']->value, ENT_QUOTES, 'UTF-8', true);?>
"
                      type="text/css"
                      media="<?php echo htmlspecialchars((string)$_smarty_tpl->tpl_vars['media']->value, ENT_QUOTES, 'UTF-8', true);?>
"
                >
            <?php }?>
        <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
    <?php }?>
    <link href="https://fonts.googleapis.com/css?family=Raleway:400,500,600,700" rel="stylesheet">
    <?php if ((isset($_smarty_tpl->tpl_vars['js_defer']->value)) && !$_smarty_tpl->tpl_vars['js_defer']->value && (isset($_smarty_tpl->tpl_vars['js_files']->value)) && (isset($_smarty_tpl->tpl_vars['js_def']->value))) {?>
        <?php echo $_smarty_tpl->tpl_vars['js_def']->value;?>

        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['js_files']->value, 'js_uri');
$_smarty_tpl->tpl_vars['js_uri']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['js_uri']->value) {
$_smarty_tpl->tpl_vars['js_uri']->do_else = false;
?>
            <?php echo '<script'; ?>
 type="text/javascript" src="<?php echo htmlspecialchars((string)$_smarty_tpl->tpl_vars['js_uri']->value, ENT_QUOTES, 'UTF-8', true);?>
"><?php echo '</script'; ?>
>
        <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
    <?php }?>
    <?php echo $_smarty_tpl->tpl_vars['HOOK_HEADER']->value;?>

    <!--[if IE 8]>
    <?php echo '<script'; ?>
 src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js" async><?php echo '</script'; ?>
>
    <![endif]-->
    <?php echo '<script'; ?>
 src="https://polyfill.io/v2/polyfill.min.js?features=IntersectionObserver" data-keepinline><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 type="text/javascript" data-keepinline>
      // Picture element HTML5 shiv
      document.createElement('picture');
    <?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="<?php echo mb_convert_encoding(htmlspecialchars((string)$_smarty_tpl->tpl_vars['tpl_uri']->value, ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
js/vendor/picturefill.min.js" data-keepinline async><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="<?php echo mb_convert_encoding(htmlspecialchars((string)$_smarty_tpl->tpl_vars['tpl_uri']->value, ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
js/vendor/picturefill-mutation.min.js" data-keepinline async><?php echo '</script'; ?>
>


</head>
<body<?php if ((isset($_smarty_tpl->tpl_vars['page_name']->value))) {?> id="<?php echo htmlspecialchars((string)$_smarty_tpl->tpl_vars['page_name']->value, ENT_QUOTES, 'UTF-8', true);?>
"<?php }?>
        class="<?php if ((isset($_smarty_tpl->tpl_vars['page_name']->value))) {
echo htmlspecialchars((string)$_smarty_tpl->tpl_vars['page_name']->value, ENT_QUOTES, 'UTF-8', true);
}
if ((isset($_smarty_tpl->tpl_vars['body_classes']->value)) && count($_smarty_tpl->tpl_vars['body_classes']->value)) {?> <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['implode'][0], array( array('value'=>$_smarty_tpl->tpl_vars['body_classes']->value,'separator'=>' '),$_smarty_tpl ) );
}
if ($_smarty_tpl->tpl_vars['hide_left_column']->value) {?> hide-left-column<?php } else { ?> show-left-column<?php }
if ($_smarty_tpl->tpl_vars['hide_right_column']->value) {?> hide-right-column<?php } else { ?> show-right-column<?php }
if ((isset($_smarty_tpl->tpl_vars['content_only']->value)) && $_smarty_tpl->tpl_vars['content_only']->value) {?> content_only<?php }?> lang_<?php echo $_smarty_tpl->tpl_vars['lang_iso']->value;?>
">
<?php if (!(isset($_smarty_tpl->tpl_vars['content_only']->value)) || !$_smarty_tpl->tpl_vars['content_only']->value) {?>

<?php if ((isset($_smarty_tpl->tpl_vars['restricted_country_mode']->value)) && $_smarty_tpl->tpl_vars['restricted_country_mode']->value) {?>
    <div id="restricted-country">
        <p><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'You cannot place a new order from your country.'),$_smarty_tpl ) );?>

          <?php if ((isset($_smarty_tpl->tpl_vars['geolocation_country']->value)) && $_smarty_tpl->tpl_vars['geolocation_country']->value) {?><span class="bold"><?php echo htmlspecialchars((string)$_smarty_tpl->tpl_vars['geolocation_country']->value, ENT_QUOTES, 'UTF-8', true);?>
</span><?php }?>
        </p>
    </div>
<?php }?>

<header id="header">

    <?php $_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, 'displayBanner', null, null);
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>'displayBanner'),$_smarty_tpl ) );
$_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);?>
    <?php if ($_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'displayBanner')) {?>
        <div id="header-banners">
            <?php echo $_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'displayBanner');?>

        </div>
    <?php }?>

    <nav class="navbar navbar-default">
        <div class="container">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse"
                        data-target="#header-navbar" aria-expanded="false">
                    <span class="sr-only"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Toggle navigation'),$_smarty_tpl ) );?>
</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
            </div>

            <div class="collapse navbar-collapse" id="header-navbar">
                                                <?php $_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, 'displayNav', null, null);
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>'displayNav'),$_smarty_tpl ) );
$_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);?>
                <?php if ($_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'displayNav')) {?>
                    <ul id="header-navbar-right-nav" class="nav navbar-nav navbar-right">
                        <?php echo $_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'displayNav');?>

                    </ul>
                <?php }?>
            </div>
        </div>
    </nav>

    <div id="header-blocks" class="container">
        <div class="row">
            <div id="shop-logo" class="col-sm-4">
                <a href="<?php echo htmlspecialchars((string)$_smarty_tpl->tpl_vars['link']->value->getPageLink('index',true), ENT_QUOTES, 'UTF-8', true);?>
"
                   title="<?php echo htmlspecialchars((string)$_smarty_tpl->tpl_vars['shop_name']->value, ENT_QUOTES, 'UTF-8', true);?>
">
                    <img class="img-responsive center-block" src="<?php echo $_smarty_tpl->tpl_vars['logo_url']->value;?>
" alt="<?php echo htmlspecialchars((string)$_smarty_tpl->tpl_vars['shop_name']->value, ENT_QUOTES, 'UTF-8', true);?>
"
                         title="<?php echo htmlspecialchars((string)$_smarty_tpl->tpl_vars['shop_name']->value, ENT_QUOTES, 'UTF-8', true);?>
"<?php if ((isset($_smarty_tpl->tpl_vars['logo_image_width']->value)) && $_smarty_tpl->tpl_vars['logo_image_width']->value) {?> width="<?php echo $_smarty_tpl->tpl_vars['logo_image_width']->value;?>
"<?php }
if ((isset($_smarty_tpl->tpl_vars['logo_image_height']->value)) && $_smarty_tpl->tpl_vars['logo_image_height']->value) {?> height="<?php echo $_smarty_tpl->tpl_vars['logo_image_height']->value;?>
"<?php }?>>
                </a>
            </div>
            <?php if (!empty($_smarty_tpl->tpl_vars['HOOK_TOP']->value)) {
echo $_smarty_tpl->tpl_vars['HOOK_TOP']->value;
}?>
        </div>
    </div>

</header>
<?php $_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, 'displayTopColumn', null, null);
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>'displayTopColumn'),$_smarty_tpl ) );
$_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);
if (!empty($_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'displayTopColumn'))) {?>
    <div class="top_column_wrapper">
        <div id="top_column" class="container">
            <div class="row">
                <?php echo $_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'displayTopColumn');?>

            </div>
        </div>
    </div>
<?php }?>
<div id="columns" class="container">
    <?php if ($_smarty_tpl->tpl_vars['page_name']->value != 'index' && $_smarty_tpl->tpl_vars['page_name']->value != 'pagenotfound') {?>
        <?php $_smarty_tpl->_subTemplateRender(((string)$_smarty_tpl->tpl_vars['tpl_dir']->value)."./breadcrumb.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
?>
    <?php }?>
    <div class="row">
        <?php if ((isset($_smarty_tpl->tpl_vars['left_column_size']->value)) && !empty($_smarty_tpl->tpl_vars['left_column_size']->value)) {?>
            <aside id="left_column" class="col-xs-12 col-sm-<?php echo intval($_smarty_tpl->tpl_vars['left_column_size']->value);?>
"><?php echo $_smarty_tpl->tpl_vars['HOOK_LEFT_COLUMN']->value;?>
</aside>
        <?php }?>
        <?php if ((isset($_smarty_tpl->tpl_vars['left_column_size']->value)) && (isset($_smarty_tpl->tpl_vars['right_column_size']->value))) {
$_smarty_tpl->_assignInScope('cols', (12-$_smarty_tpl->tpl_vars['left_column_size']->value-$_smarty_tpl->tpl_vars['right_column_size']->value));
} else {
$_smarty_tpl->_assignInScope('cols', 12);
}?>
        <main id="center_column" class="col-xs-12 col-sm-<?php echo intval($_smarty_tpl->tpl_vars['cols']->value);?>
">
            <?php }
}
}
