<?php
/* Smarty version 4.2.1, created on 2023-01-12 22:42:09
  from 'D:\xampp\htdocs\shopw\modules\socialsharing\views\templates\hook\socialsharing_header.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.2.1',
  'unifunc' => 'content_63c01c413dc576_20259796',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'c018066192920a912ee6b870779f361106a97a9e' => 
    array (
      0 => 'D:\\xampp\\htdocs\\shopw\\modules\\socialsharing\\views\\templates\\hook\\socialsharing_header.tpl',
      1 => 1574232041,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_63c01c413dc576_20259796 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->compiled->nocache_hash = '107432250763c01c41360e23_23180385';
?>

<meta property="og:type" content="product" />
<meta property="og:url" content="<?php echo $_smarty_tpl->tpl_vars['request']->value;?>
" />
<meta property="og:title" content="<?php echo htmlspecialchars((string)$_smarty_tpl->tpl_vars['meta_title']->value, ENT_QUOTES, 'UTF-8', true);?>
" />
<meta property="og:site_name" content="<?php echo $_smarty_tpl->tpl_vars['shop_name']->value;?>
" />
<meta property="og:description" content="<?php echo htmlspecialchars((string)$_smarty_tpl->tpl_vars['meta_description']->value, ENT_QUOTES, 'UTF-8', true);?>
" />
<?php if ((isset($_smarty_tpl->tpl_vars['link_rewrite']->value)) && (isset($_smarty_tpl->tpl_vars['cover']->value)) && (isset($_smarty_tpl->tpl_vars['cover']->value['id_image']))) {?>
<meta property="og:image" content="<?php echo $_smarty_tpl->tpl_vars['link']->value->getImageLink($_smarty_tpl->tpl_vars['link_rewrite']->value,$_smarty_tpl->tpl_vars['cover']->value['id_image'],'large_default');?>
" />
<?php }
if ((isset($_smarty_tpl->tpl_vars['pretax_price']->value))) {?>
<meta property="product:pretax_price:amount" content="<?php echo $_smarty_tpl->tpl_vars['pretax_price']->value;?>
" />
<?php }?>
<meta property="product:pretax_price:currency" content="<?php echo $_smarty_tpl->tpl_vars['currency']->value->iso_code;?>
" />
<?php if ((isset($_smarty_tpl->tpl_vars['price']->value))) {?>
<meta property="product:price:amount" content="<?php echo $_smarty_tpl->tpl_vars['price']->value;?>
" />
<?php }?>
<meta property="product:price:currency" content="<?php echo $_smarty_tpl->tpl_vars['currency']->value->iso_code;?>
" />
<?php if ((isset($_smarty_tpl->tpl_vars['weight']->value)) && ($_smarty_tpl->tpl_vars['weight']->value != 0)) {?>
<meta property="product:weight:value" content="<?php echo $_smarty_tpl->tpl_vars['weight']->value;?>
" />
<meta property="product:weight:units" content="<?php echo $_smarty_tpl->tpl_vars['weight_unit']->value;?>
" />
<?php }
}
}
