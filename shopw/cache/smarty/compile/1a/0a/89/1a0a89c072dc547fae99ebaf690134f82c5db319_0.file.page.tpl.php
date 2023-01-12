<?php
/* Smarty version 4.2.1, created on 2023-01-12 13:39:39
  from 'D:\xampp\htdocs\shopw\admin622ozp8ob\themes\default\template\controllers\modules\page.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.2.1',
  'unifunc' => 'content_63bf9d1bef3e68_27408429',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '1a0a89c072dc547fae99ebaf690134f82c5db319' => 
    array (
      0 => 'D:\\xampp\\htdocs\\shopw\\admin622ozp8ob\\themes\\default\\template\\controllers\\modules\\page.tpl',
      1 => 1668409880,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:controllers/modules/list.tpl' => 1,
  ),
),false)) {
function content_63bf9d1bef3e68_27408429 (Smarty_Internal_Template $_smarty_tpl) {
echo $_smarty_tpl->tpl_vars['kpis']->value;?>

<?php if ($_smarty_tpl->tpl_vars['add_permission']->value == '1') {?>
  <div id="module_install" class="row" style="<?php if (!(isset($_POST['downloadflag']))) {?>display: none;<?php }?>">
    <div class="panel col-lg-12">
      <form action="<?php echo htmlspecialchars((string)$_smarty_tpl->tpl_vars['currentIndex']->value, ENT_QUOTES, 'UTF-8', true);?>
&amp;token=<?php echo htmlspecialchars((string)$_smarty_tpl->tpl_vars['token']->value, ENT_QUOTES, 'UTF-8', true);?>
" method="post"
            enctype="multipart/form-data" class="form-horizontal">
        <h3><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Add a new module'),$_smarty_tpl ) );?>
</h3>
        <?php if (!ini_get('file_uploads')) {?>
          <div class="alert alert-danger"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'File uploads have been turned off. Please ask your webhost to enable file uploads (%s).','sprintf'=>array('<code>file_uploads = on</code>')),$_smarty_tpl ) );?>
</div>
        <?php } else { ?>
          <p class="alert alert-info"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'The module must either be a Zip file (.zip) or a tarball file (.tar, .tar.gz, .tgz).'),$_smarty_tpl ) );?>
</p>
          <div class="form-group">
            <label for="file" class="control-label col-lg-3">
              <span class="label-tooltip" data-toggle="tooltip" title="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Upload a module from your computer.'),$_smarty_tpl ) );?>
">
                <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Module file'),$_smarty_tpl ) );?>

              </span>
            </label>
            <div class="col-sm-9">
              <div class="row">
                <div class="col-lg-7">
                  <input id="file" type="file" name="file" class="hide"/>
                  <div class="dummyfile input-group">
                    <span class="input-group-addon"><i class="icon-file"></i></span>
                    <input id="file-name" type="text" class="disabled" name="filename" readonly/>
                    <span class="input-group-btn">
                      <button id="file-selectbutton" type="button" name="submitAddAttachments" class="btn btn-default">
                        <i class="icon-folder-open"></i> <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Choose a file'),$_smarty_tpl ) );?>

                      </button>
                    </span>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="form-group">
            <div class="col-lg-9 col-lg-push-3">
              <button class="btn btn-default" type="submit" name="download">
                <i class="icon-upload-alt"></i>
                <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Upload this module'),$_smarty_tpl ) );?>

              </button>
            </div>
          </div>
        </form>
      <?php }?>
    </div>
  </div>
<?php }
if (count($_smarty_tpl->tpl_vars['upgrade_available']->value)) {?>
  <div class="alert alert-info">
    <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'An upgrade is available for some of your modules!'),$_smarty_tpl ) );?>

    <ul>
      <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['upgrade_available']->value, 'module');
$_smarty_tpl->tpl_vars['module']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['module']->value) {
$_smarty_tpl->tpl_vars['module']->do_else = false;
?>
        <li>
          <a href="<?php echo htmlspecialchars((string)$_smarty_tpl->tpl_vars['currentIndex']->value, ENT_QUOTES, 'UTF-8', true);?>
&amp;token=<?php echo htmlspecialchars((string)$_smarty_tpl->tpl_vars['token']->value, ENT_QUOTES, 'UTF-8', true);?>
&amp;anchor=<?php echo htmlspecialchars((string)$_smarty_tpl->tpl_vars['module']->value['anchor'], ENT_QUOTES, 'UTF-8', true);?>
"><b><?php echo htmlspecialchars((string)$_smarty_tpl->tpl_vars['module']->value['displayName'], ENT_QUOTES, 'UTF-8', true);?>
</b></a>
        </li>
      <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
    </ul>
  </div>
<?php }?>
<div class="panel">
  <div class="panel-heading">
    <i class="icon-list-ul"></i>
    <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Modules list'),$_smarty_tpl ) );?>

  </div>
  <!--start sidebar module-->
  <div class="row">
    <div class="categoriesTitle col-md-3">
      <div class="list-group">
        <form id="filternameForm" method="post" class="list-group-item form-horizontal">
          <div class="input-group">
            <span class="input-group-addon">
              <i class="icon-search"></i>
            </span>
            <input class="form-control" placeholder="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Search'),$_smarty_tpl ) );?>
" type="text" value="" name="moduleQuicksearch"
                   id="moduleQuicksearch" autocomplete="off"/>
          </div>
        </form>
        <a class="categoryModuleFilterLink list-group-item <?php if ($_smarty_tpl->tpl_vars['selectedCategory']->value === AdminModulesController::CATEGORY_FAVORITES) {?>active<?php }?>"
           href="<?php echo htmlspecialchars((string)$_smarty_tpl->tpl_vars['currentIndex']->value, ENT_QUOTES, 'UTF-8', true);?>
&amp;token=<?php echo htmlspecialchars((string)$_smarty_tpl->tpl_vars['token']->value, ENT_QUOTES, 'UTF-8', true);?>
&amp;filterCategory=<?php echo AdminModulesController::CATEGORY_FAVORITES;?>
"
           id="filter_favorite">
          <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Favorites'),$_smarty_tpl ) );?>
 <span id="favorite-count" class="badge pull-right"><?php echo $_smarty_tpl->tpl_vars['nb_modules_favorites']->value;?>
</span>
        </a>
        <a class="categoryModuleFilterLink list-group-item <?php if ($_smarty_tpl->tpl_vars['selectedCategory']->value === AdminModulesController::CATEGORY_ALL) {?>active<?php }?>"
           href="<?php echo htmlspecialchars((string)$_smarty_tpl->tpl_vars['currentIndex']->value, ENT_QUOTES, 'UTF-8', true);?>
&amp;token=<?php echo htmlspecialchars((string)$_smarty_tpl->tpl_vars['token']->value, ENT_QUOTES, 'UTF-8', true);?>
&amp;filterCategory=<?php echo AdminModulesController::CATEGORY_ALL;?>
"
           id="filter_all">
          <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'All'),$_smarty_tpl ) );?>
 <span class="badge pull-right"><?php echo $_smarty_tpl->tpl_vars['nb_modules']->value;?>
</span>
        </a>
        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['list_modules_categories']->value, 'module_category', false, 'module_category_key');
$_smarty_tpl->tpl_vars['module_category']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['module_category_key']->value => $_smarty_tpl->tpl_vars['module_category']->value) {
$_smarty_tpl->tpl_vars['module_category']->do_else = false;
?>
          <a class="categoryModuleFilterLink list-group-item <?php if ($_smarty_tpl->tpl_vars['selectedCategory']->value == $_smarty_tpl->tpl_vars['module_category_key']->value) {?>active<?php }?>"
             href="<?php echo htmlspecialchars((string)$_smarty_tpl->tpl_vars['currentIndex']->value, ENT_QUOTES, 'UTF-8', true);?>
&amp;token=<?php echo htmlspecialchars((string)$_smarty_tpl->tpl_vars['token']->value, ENT_QUOTES, 'UTF-8', true);?>
&amp;filterCategory=<?php echo $_smarty_tpl->tpl_vars['module_category_key']->value;?>
"
             id="filter_<?php echo $_smarty_tpl->tpl_vars['module_category_key']->value;?>
">
            <?php echo $_smarty_tpl->tpl_vars['module_category']->value['name'];?>
 <span class="badge pull-right"><?php echo $_smarty_tpl->tpl_vars['module_category']->value['nb'];?>
</span>
          </a>
        <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
      </div>
    </div>
    <div id="moduleContainer" class="col-md-9">
      <?php $_smarty_tpl->_subTemplateRender('file:controllers/modules/list.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
    </div>
  </div>
</div>
<?php echo '<script'; ?>
 type="text/javascript">
  $(document).ready(function () {
    $('#file-selectbutton').click(function (e) {
      $('#file').trigger('click');
    });
    $('#file-name').click(function (e) {
      $('#file').trigger('click');
    });
    $('#file').change(function (e) {
      var val = $(this).val();
      var file = val.split(/[\\/]/);
      $('#file-name').val(file[file.length - 1]);
    });
  });
<?php echo '</script'; ?>
>
<?php }
}
