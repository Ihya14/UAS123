<?php
/* Smarty version 4.2.1, created on 2023-01-12 22:23:04
  from 'D:\xampp\htdocs\shopw\admin622ozp8ob\themes\default\template\controllers\themes\helpers\options\options.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.2.1',
  'unifunc' => 'content_63c017c82481a5_28270826',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '0a6e65e691553c7568b32071de66d1e87d94ff9d' => 
    array (
      0 => 'D:\\xampp\\htdocs\\shopw\\admin622ozp8ob\\themes\\default\\template\\controllers\\themes\\helpers\\options\\options.tpl',
      1 => 1668409880,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_63c017c82481a5_28270826 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_84057317663c017c81c89c2_87928957', "input");
?>



<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_100392411363c017c8232775_70390878', "footer");
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, "helpers/options/options.tpl");
}
/* {block "input"} */
class Block_84057317663c017c81c89c2_87928957 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'input' => 
  array (
    0 => 'Block_84057317663c017c81c89c2_87928957',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

  <?php if ($_smarty_tpl->tpl_vars['field']->value['type'] == 'theme') {?>
    <?php if ($_smarty_tpl->tpl_vars['field']->value['can_display_themes']) {?>
      <div class="col-lg-12">
        <div class="row">
          <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['field']->value['themes'], 'theme');
$_smarty_tpl->tpl_vars['theme']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['theme']->value) {
$_smarty_tpl->tpl_vars['theme']->do_else = false;
?>
            <div class="col-sm-4 col-lg-3">
              <div class="theme-container">
                <h4 class="theme-title"><?php echo $_smarty_tpl->tpl_vars['theme']->value->name;?>
</h4>
                <div class="thumbnail-wrapper">
                  <div class="action-wrapper">
                    <div class="action-overlay"></div>
                    <div class="action-buttons">
                      <div class="btn-group">
                        <a href="<?php echo htmlspecialchars((string)$_smarty_tpl->tpl_vars['link']->value->getAdminLink('AdminThemes'), ENT_QUOTES, 'UTF-8', true);?>
&amp;action=installTheme&amp;id_theme=<?php echo $_smarty_tpl->tpl_vars['theme']->value->id;?>
" class="btn btn-default">
                          <i class="icon-check"></i> <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Use this theme'),$_smarty_tpl ) );?>

                        </a>
                        <button class="btn btn-default dropdown-toggle" data-toggle="dropdown">
                          <i class="icon-caret-down"></i>&nbsp;
                        </button>
                        <ul class="dropdown-menu">
                          <li>
                            <a href="<?php echo htmlspecialchars((string)$_smarty_tpl->tpl_vars['link']->value->getAdminLink('AdminThemes'), ENT_QUOTES, 'UTF-8', true);?>
&amp;deletetheme&amp;id_theme=<?php echo $_smarty_tpl->tpl_vars['theme']->value->id;?>
" title="Delete this theme" class="delete">
                              <i class="icon-trash"></i> <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Delete this theme'),$_smarty_tpl ) );?>

                            </a>
                          </li>
                        </ul>
                      </div>
                    </div>
                  </div>
                  <img class="center-block img-thumbnail" src="../themes/<?php echo $_smarty_tpl->tpl_vars['theme']->value->directory;?>
/preview.jpg" alt="<?php echo $_smarty_tpl->tpl_vars['theme']->value->name;?>
" />
                </div>
              </div>
            </div>
          <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
          <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['field']->value['not_installed'], 'theme');
$_smarty_tpl->tpl_vars['theme']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['theme']->value) {
$_smarty_tpl->tpl_vars['theme']->do_else = false;
?>
            <div class="col-sm-4 col-lg-3">
              <div class="theme-container">
                <h4 class="theme-title"><?php echo $_smarty_tpl->tpl_vars['theme']->value['name'];?>
</h4>
                <div class="thumbnail-wrapper">
                  <div class="action-wrapper">
                    <div class="action-overlay"></div>
                    <div class="action-buttons">
                      <div class="btn-group">
                        <a href="<?php echo htmlspecialchars((string)$_smarty_tpl->tpl_vars['link']->value->getAdminLink('AdminThemes'), ENT_QUOTES, 'UTF-8', true);?>
&amp;installThemeFromFolder&amp;theme_dir=<?php echo $_smarty_tpl->tpl_vars['theme']->value['directory'];?>
" class="btn btn-default">
                          <i class="icon-check"></i> <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Install this theme'),$_smarty_tpl ) );?>

                        </a>
                        <button class="btn btn-default dropdown-toggle" data-toggle="dropdown">
                          <i class="icon-caret-down"></i>&nbsp;
                        </button>
                        <ul class="dropdown-menu">
                          <li>
                            <a href="<?php echo htmlspecialchars((string)$_smarty_tpl->tpl_vars['link']->value->getAdminLink('AdminThemes'), ENT_QUOTES, 'UTF-8', true);?>
&amp;deletetheme&amp;theme_dir=<?php echo $_smarty_tpl->tpl_vars['theme']->value['directory'];?>
" title="Delete this theme" class="delete">
                              <i class="icon-trash"></i> <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Delete this theme'),$_smarty_tpl ) );?>

                            </a>
                          </li>
                        </ul>
                      </div>
                    </div>
                  </div>
                  <img class="center-block img-thumbnail" src="../themes/<?php echo $_smarty_tpl->tpl_vars['theme']->value['directory'];?>
/preview.jpg" alt="<?php echo $_smarty_tpl->tpl_vars['theme']->value['name'];?>
" />
                </div>
              </div>
            </div>
          <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
        </div>
      </div>
    <?php }?>
  <?php } elseif ($_smarty_tpl->tpl_vars['field']->value['type'] == 'code') {?>
    <?php if (!empty($_smarty_tpl->tpl_vars['field']->value['grab_favicon_template'])) {?>
      <?php echo '<script'; ?>
 type="text/javascript">
        (function () {
          function resetRefreshButton(target) {
            target.innerHTML = '<i class="icon icon-download"></i> <span><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Load default favicon metas','js'=>1),$_smarty_tpl ) );?>
</span>';
            target.disabled = false;
          }

          window.downloadNewFaviconTemplate = function (e) {
            var target = e.target;
            if (e.target.tagName !== 'BUTTON') {
              target = e.target.parentNode;
            }

            var i = target.querySelector('i');
            i.className = i.className.replace('icon-download', 'icon-refresh icon-spin');
            var span = target.querySelector('span');
            span.innerHTML = '<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Refreshing...','js'=>1),$_smarty_tpl ) );?>
';
            target.disabled = true;

            var request = new XMLHttpRequest();
            request.open('GET', currentIndex + '&ajax=1&action=refreshFaviconTemplate&controller=AdminThemes&token=' + token, true);
            request.onload = function() {
              if (request.status >= 200 && request.status < 400) {
                var response = request.responseText;
                try {
                  response = JSON.parse(response);
                  if (!response.hasError) {
                    document.getElementById('<?php echo mb_convert_encoding(htmlspecialchars((string)$_smarty_tpl->tpl_vars['key']->value, ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
').value = atob(response.template);
                    window.aces['<?php echo strtr((string)$_smarty_tpl->tpl_vars['key']->value, array("\\" => "\\\\", "'" => "\\'", "\"" => "\\\"", "\r" => "\\r", "\n" => "\\n", "</" => "<\/", "<!--" => "<\!--", "<s" => "<\s", "<S" => "<\S" ));?>
'].setValue(atob(response.template), -1);
                    window.showSuccessMessage('<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Successfully refreshed the favicon template. Do not forget to click "Save" below.','js'=>1),$_smarty_tpl ) );?>
');
                  } else {
                   <?php if ((defined('_PS_MODE_DEV_') ? constant('_PS_MODE_DEV_') : null)) {?>
                     window.showErrorMessage(response.error);
                   <?php }?>
                  }
                 } catch (e) {
                  window.showErrorMessage('<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Unable to refresh template','js'=>1),$_smarty_tpl ) );?>
');
                  <?php if ((defined('_PS_MODE_DEV_') ? constant('_PS_MODE_DEV_') : null)) {?>
                    window.showErrorMessage(JSON.stringify(e));
                  <?php }?>

                  resetRefreshButton(target);
                }
              }

              resetRefreshButton(target);
            };

            request.onerror = function() {
              resetRefreshButton(target);
              window.showErrorMessage('<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Unable to refresh template','js'=>1),$_smarty_tpl ) );?>
');
            };

            request.send();
          };
        }());
      <?php echo '</script'; ?>
>
    <?php }?>
    <div class="ace-container col-lg-9">
      <div class="ace-editor" data-name="<?php echo mb_convert_encoding(htmlspecialchars((string)$_smarty_tpl->tpl_vars['key']->value, ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
" id="ace<?php echo mb_convert_encoding(htmlspecialchars((string)$_smarty_tpl->tpl_vars['key']->value, ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
"><?php echo htmlspecialchars((string)$_smarty_tpl->tpl_vars['field']->value['value'], ENT_QUOTES, 'UTF-8', true);?>
</div>
      <input type="hidden" id="<?php echo mb_convert_encoding(htmlspecialchars((string)$_smarty_tpl->tpl_vars['key']->value, ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
" name="<?php echo mb_convert_encoding(htmlspecialchars((string)$_smarty_tpl->tpl_vars['key']->value, ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
" value="<?php echo htmlspecialchars((string)$_smarty_tpl->tpl_vars['field']->value['value'], ENT_QUOTES, 'UTF-8', true);?>
">
      <?php if (!empty($_smarty_tpl->tpl_vars['field']->value['grab_favicon_template'])) {?>
        <br />
        <button type="button" class="btn btn-default clearfix" onclick="downloadNewFaviconTemplate(event);"><i class="icon icon-download"></i> <span><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Load default favicon metas'),$_smarty_tpl ) );?>
</span></button>
      <?php }?>
    </div>
    <?php echo '<script'; ?>
>
      (function () {
        function initAce() {
          if (typeof ace === 'undefined') {
            setTimeout(initAce, 100);
            return;
          }
          var editor = ace.edit("ace<?php echo mb_convert_encoding(htmlspecialchars((string)$_smarty_tpl->tpl_vars['key']->value, ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
");
          window.aces = window.aces || [];
          window.aces['<?php echo strtr((string)$_smarty_tpl->tpl_vars['key']->value, array("\\" => "\\\\", "'" => "\\'", "\"" => "\\\"", "\r" => "\\r", "\n" => "\\n", "</" => "<\/", "<!--" => "<\!--", "<s" => "<\s", "<S" => "<\S" ));?>
'] = editor;
          editor.setTheme("ace/theme/xcode");
          editor.getSession().setMode("ace/mode/<?php if ((isset($_smarty_tpl->tpl_vars['field']->value['mode']))) {
echo strtr((string)$_smarty_tpl->tpl_vars['field']->value['mode'], array("\\" => "\\\\", "'" => "\\'", "\"" => "\\\"", "\r" => "\\r", "\n" => "\\n", "</" => "<\/", "<!--" => "<\!--", "<s" => "<\s", "<S" => "<\S" ));
} else { ?>javascript<?php }?>");
          editor.setOptions({
            fontSize: <?php if ((isset($_smarty_tpl->tpl_vars['field']->value['fontSize']))) {
echo intval($_smarty_tpl->tpl_vars['field']->value['fontSize']);
} else { ?>14<?php }?>,
            minLines: <?php if ((isset($_smarty_tpl->tpl_vars['field']->value['minLines']))) {
echo intval($_smarty_tpl->tpl_vars['field']->value['minLines']);
} else { ?>10<?php }?>,
            maxLines: <?php if ((isset($_smarty_tpl->tpl_vars['field']->value['maxLines']))) {
echo intval($_smarty_tpl->tpl_vars['field']->value['maxLines']);
} else { ?>10<?php }?>,
            showPrintMargin: <?php if ((isset($_smarty_tpl->tpl_vars['field']->value['showPrintMargin'])) && $_smarty_tpl->tpl_vars['field']->value['showPrintMargin']) {?>true<?php } else { ?>false<?php }?>,
            enableBasicAutocompletion: <?php if ((isset($_smarty_tpl->tpl_vars['field']->value['enableBasicAutocompletion'])) && $_smarty_tpl->tpl_vars['field']->value['enableBasicAutocompletion']) {?>true<?php } else { ?>false<?php }?>,
            enableSnippets: <?php if ((isset($_smarty_tpl->tpl_vars['field']->value['enableSnippets'])) && $_smarty_tpl->tpl_vars['field']->value['enableSnippets']) {?>true<?php } else { ?>false<?php }?>,
            enableLiveAutocompletion: <?php if ((isset($_smarty_tpl->tpl_vars['field']->value['enableLiveAutocompletion'])) && $_smarty_tpl->tpl_vars['field']->value['enableLiveAutocompletion']) {?>true<?php } else { ?>false<?php }?>
          });
          var input_name = $('#ace<?php echo mb_convert_encoding(htmlspecialchars((string)$_smarty_tpl->tpl_vars['key']->value, ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
').attr('data-name');
          $('#' + input_name).val(editor.getValue());
          editor.on('change', function () {
            $('#' + input_name).val(editor.getValue());
          });
        }

        initAce();
      })();
    <?php echo '</script'; ?>
>
  <?php } else { ?>
    <?php 
$_smarty_tpl->inheritance->callParent($_smarty_tpl, $this, '{$smarty.block.parent}');
?>

  <?php }
}
}
/* {/block "input"} */
/* {block "footer"} */
class Block_100392411363c017c8232775_70390878 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'footer' => 
  array (
    0 => 'Block_100392411363c017c8232775_70390878',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>


  <?php if ((isset($_smarty_tpl->tpl_vars['categoryData']->value['after_tabs']))) {?>
    <?php $_smarty_tpl->_assignInScope('cur_theme', $_smarty_tpl->tpl_vars['categoryData']->value['after_tabs']['cur_theme']);?>
    <div class="row row-padding-top">

      <div class="col-md-3">
        <a href="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
" class="_blank">
          <img class="center-block img-thumbnail" src="../themes/<?php echo $_smarty_tpl->tpl_vars['cur_theme']->value['theme_directory'];?>
/preview.jpg" alt="<?php echo $_smarty_tpl->tpl_vars['cur_theme']->value['theme_name'];?>
" />
        </a>
      </div>

      <div id="js_theme_form_container" class="col-md-9">
        <h2><?php echo $_smarty_tpl->tpl_vars['cur_theme']->value['theme_name'];?>
 <?php if ((isset($_smarty_tpl->tpl_vars['cur_theme']->value['theme_version']))) {?><small>version <?php echo $_smarty_tpl->tpl_vars['cur_theme']->value['theme_version'];?>
</small><?php }?></h2>
        <?php if ((isset($_smarty_tpl->tpl_vars['cur_theme']->value['author_name']))) {?>
        <p>
          <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Designed by %s','sprintf'=>$_smarty_tpl->tpl_vars['cur_theme']->value['author_name']),$_smarty_tpl ) );?>

        </p>
        <?php }?>

        <?php if ((isset($_smarty_tpl->tpl_vars['cur_theme']->value['tc'])) && $_smarty_tpl->tpl_vars['cur_theme']->value['tc']) {?>
        <hr />
        <h4><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Customize your theme'),$_smarty_tpl ) );?>
</h4>
        <div class="row">
          <div class="col-sm-8">
            <p><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Customize the main elements of your theme: sliders, banners, colors, etc.'),$_smarty_tpl ) );?>
</p>
          </div>
          <div class="col-sm-4">
            <a class="btn btn-default pull-right" href="<?php echo htmlspecialchars((string)$_smarty_tpl->tpl_vars['link']->value->getAdminLink('AdminModules'), ENT_QUOTES, 'UTF-8', true);?>
&amp;configure=themeconfigurator">
              <i class="icon icon-list-alt"></i>
              <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Theme Configurator'),$_smarty_tpl ) );?>

            </a>
          </div>
        </div>
        <?php }?>
        <hr />
        <h4><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Configure your theme'),$_smarty_tpl ) );?>
</h4>
        <div class="row">
          <div class="col-sm-8">
            <p><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Configure your theme\'s advanced settings, such as the number of columns you want for each page. This setting is mostly for advanced users.'),$_smarty_tpl ) );?>
</p>
          </div>
          <div class="col-sm-4">
            <a class="btn btn-default pull-right" href="<?php echo htmlspecialchars((string)$_smarty_tpl->tpl_vars['link']->value->getAdminLink('AdminThemes'), ENT_QUOTES, 'UTF-8', true);?>
&amp;updatetheme&amp;id_theme=<?php echo $_smarty_tpl->tpl_vars['cur_theme']->value['theme_id'];?>
">
              <i class="icon icon-cog"></i>
              <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Advanced settings'),$_smarty_tpl ) );?>

            </a>
          </div>
        </div>
      </div>
    </div>

  <?php }?>

  <?php 
$_smarty_tpl->inheritance->callParent($_smarty_tpl, $this, '{$smarty.block.parent}');
?>


<?php
}
}
/* {/block "footer"} */
}
