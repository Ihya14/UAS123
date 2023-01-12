<?php
/* Smarty version 4.2.1, created on 2023-01-12 14:28:47
  from 'D:\xampp\htdocs\shopw\themes\niara\breadcrumb.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.2.1',
  'unifunc' => 'content_63bfa89f0ca2f6_84605623',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'cc8560f4cbd85b664dd288142e194f9e0cc32187' => 
    array (
      0 => 'D:\\xampp\\htdocs\\shopw\\themes\\niara\\breadcrumb.tpl',
      1 => 1664191549,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_63bfa89f0ca2f6_84605623 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'D:\\xampp\\htdocs\\shopw\\vendor\\smarty\\smarty\\libs\\plugins\\modifier.regex_replace.php','function'=>'smarty_modifier_regex_replace',),));
if ((($_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'path') !== null ))) {
$_smarty_tpl->_assignInScope('path', $_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'path'));
}?>

<?php if (!empty($_smarty_tpl->tpl_vars['path']->value)) {?>
    <?php $_smarty_tpl->_assignInScope('matches', array());?>
  <?php $_smarty_tpl->_assignInScope('matchCount', preg_match_all('/<a.+?href="(.+?)"[^>]*>([^<]*)<\/a>/',$_smarty_tpl->tpl_vars['path']->value,$_smarty_tpl->tpl_vars['matches']->value));?>
  <?php $_smarty_tpl->_assignInScope('breadcrumbs', array());?>
  <?php
$_smarty_tpl->tpl_vars['i'] = new Smarty_Variable(null, $_smarty_tpl->isRenderingCache);
$_smarty_tpl->tpl_vars['i']->value = 0;
if ($_smarty_tpl->tpl_vars['i']->value < $_smarty_tpl->tpl_vars['matchCount']->value) {
for ($_foo=true;$_smarty_tpl->tpl_vars['i']->value < $_smarty_tpl->tpl_vars['matchCount']->value; $_smarty_tpl->tpl_vars['i']->value++) {
?>
    <?php $_tmp_array = isset($_smarty_tpl->tpl_vars['breadcrumbs']) ? $_smarty_tpl->tpl_vars['breadcrumbs']->value : array();
if (!(is_array($_tmp_array) || $_tmp_array instanceof ArrayAccess)) {
settype($_tmp_array, 'array');
}
$_tmp_array[] = array('url'=>$_smarty_tpl->tpl_vars['matches']->value[1][$_smarty_tpl->tpl_vars['i']->value],'title'=>$_smarty_tpl->tpl_vars['matches']->value[2][$_smarty_tpl->tpl_vars['i']->value]);
$_smarty_tpl->_assignInScope('breadcrumbs', $_tmp_array);?>
  <?php }
}
?>

    <?php $_smarty_tpl->_assignInScope('match', preg_match('/>([^<]+)(?:<\/\w+>\s*)?$/',$_smarty_tpl->tpl_vars['path']->value,$_smarty_tpl->tpl_vars['matches']->value));?>
  <?php if (!empty($_smarty_tpl->tpl_vars['matches']->value[1])) {?>
    <?php $_tmp_array = isset($_smarty_tpl->tpl_vars['breadcrumbs']) ? $_smarty_tpl->tpl_vars['breadcrumbs']->value : array();
if (!(is_array($_tmp_array) || $_tmp_array instanceof ArrayAccess)) {
settype($_tmp_array, 'array');
}
$_tmp_array[] = array('url'=>'','title'=>$_smarty_tpl->tpl_vars['matches']->value[1]);
$_smarty_tpl->_assignInScope('breadcrumbs', $_tmp_array);?>
  <?php } elseif (!$_smarty_tpl->tpl_vars['match']->value && !$_smarty_tpl->tpl_vars['matchCount']->value) {?>
    <?php $_tmp_array = isset($_smarty_tpl->tpl_vars['breadcrumbs']) ? $_smarty_tpl->tpl_vars['breadcrumbs']->value : array();
if (!(is_array($_tmp_array) || $_tmp_array instanceof ArrayAccess)) {
settype($_tmp_array, 'array');
}
$_tmp_array[] = array('url'=>'','title'=>$_smarty_tpl->tpl_vars['path']->value);
$_smarty_tpl->_assignInScope('breadcrumbs', $_tmp_array);?>
  <?php }
}?>

<ol class="breadcrumb" itemscope itemtype="http://schema.org/BreadcrumbList">
  <li itemprop="itemListElement" itemscope itemtype="http://schema.org/ListItem">
    <a href="<?php if ((isset($_smarty_tpl->tpl_vars['force_ssl']->value)) && $_smarty_tpl->tpl_vars['force_ssl']->value) {
echo $_smarty_tpl->tpl_vars['base_dir_ssl']->value;
} else {
echo $_smarty_tpl->tpl_vars['base_dir']->value;
}?>" title="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Home Page'),$_smarty_tpl ) );?>
" itemprop="item">
      <span itemprop="name"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Home'),$_smarty_tpl ) );?>
</span>
    </a>
    <meta itemprop="position" content="1">
  </li>
  <?php if (!empty($_smarty_tpl->tpl_vars['breadcrumbs']->value)) {?>
    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['breadcrumbs']->value, 'breadcrumb', false, NULL, 'crumbs', array (
  'iteration' => true,
));
$_smarty_tpl->tpl_vars['breadcrumb']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['breadcrumb']->value) {
$_smarty_tpl->tpl_vars['breadcrumb']->do_else = false;
$_smarty_tpl->tpl_vars['__smarty_foreach_crumbs']->value['iteration']++;
?>
      <li itemprop="itemListElement" itemscope itemtype="http://schema.org/ListItem">
        <?php if (!empty($_smarty_tpl->tpl_vars['breadcrumb']->value['url'])) {?>
          <a href="<?php echo $_smarty_tpl->tpl_vars['breadcrumb']->value['url'];?>
" itemprop="item">
            <span itemprop="name"><?php echo $_smarty_tpl->tpl_vars['breadcrumb']->value['title'];?>
</span>
          </a>
        <?php } else { ?>
          <a href="#" title="<?php echo $_smarty_tpl->tpl_vars['breadcrumb']->value['title'];?>
" itemprop="item">
            <span itemprop="name"><?php echo $_smarty_tpl->tpl_vars['breadcrumb']->value['title'];?>
</span>
          </a>
        <?php }?>
        <meta itemprop="position" content="<?php echo (intval((isset($_smarty_tpl->tpl_vars['__smarty_foreach_crumbs']->value['iteration']) ? $_smarty_tpl->tpl_vars['__smarty_foreach_crumbs']->value['iteration'] : null))+1);?>
">
      </li>
    <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
  <?php }?>
</ol>

<?php if ((isset($_GET['search_query'])) && (isset($_GET['results'])) && $_GET['results'] > 1 && (isset($_SERVER['HTTP_REFERER']))) {?>
  <nav>
    <ul class="pager">
      <li class="previous">
        <?php $_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, 'default', null, null);
if ((isset($_GET['HTTP_REFERER'])) && $_GET['HTTP_REFERER']) {
echo $_GET['HTTP_REFERER'];
} elseif ((isset($_SERVER['HTTP_REFERER'])) && $_SERVER['HTTP_REFERER']) {
echo $_SERVER['HTTP_REFERER'];
}
$_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);?>
        <a href="<?php echo smarty_modifier_regex_replace(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'secureReferrer' ][ 0 ], array( htmlspecialchars((string)$_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'default'), ENT_QUOTES, 'UTF-8', true) )),'/[\?|&]content_only=1/','');?>
" name="back">
          <span>
            <?php if ($_smarty_tpl->tpl_vars['isRtl']->value) {?>&rarr;<?php } else { ?>&larr;<?php }?> <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Back to Search results for "%s" (%d other results)','sprintf'=>array($_GET['search_query'],$_GET['results'])),$_smarty_tpl ) );?>

          </span>
        </a>
      </li>
    </ul>
  </nav>
<?php }
}
}
