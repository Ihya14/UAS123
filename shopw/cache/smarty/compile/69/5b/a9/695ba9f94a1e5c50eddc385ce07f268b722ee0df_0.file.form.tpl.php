<?php
/* Smarty version 4.2.1, created on 2023-01-12 22:18:52
  from 'D:\xampp\htdocs\shopw\admin622ozp8ob\themes\default\template\controllers\access\helpers\form\form.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.2.1',
  'unifunc' => 'content_63c016ccb2a568_56821786',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '695ba9f94a1e5c50eddc385ce07f268b722ee0df' => 
    array (
      0 => 'D:\\xampp\\htdocs\\shopw\\admin622ozp8ob\\themes\\default\\template\\controllers\\access\\helpers\\form\\form.tpl',
      1 => 1668409880,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:toolbar.tpl' => 1,
  ),
),false)) {
function content_63c016ccb2a568_56821786 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, false);
echo '<script'; ?>
 type="text/javascript">
  $(document).ready(function () {

    var id_tab_parentmodule = <?php echo intval($_smarty_tpl->tpl_vars['id_tab_parentmodule']->value);?>
;
    var id_tab_module = <?php echo intval($_smarty_tpl->tpl_vars['id_tab_module']->value);?>
;

    $('tr.child-' + id_tab_parentmodule + ' > td > input.view.' + id_tab_module).change(function () {

      if (!$(this).prop('checked')) {
        $('#table_module_2 thead th:eq(1) input').trigger('click');
        if ($('#table_module_2 thead th:eq(1) input').prop('checked'))
          $('#table_module_2 thead th:eq(1) input').trigger('click');
      }
    });

    $('tr.child-' + id_tab_parentmodule + ' > td > input.edit.' + id_tab_module).change(function () {

      if (!$(this).prop('checked')) {
        $('#table_module_2 thead th:eq(2) input').trigger('click');
        if ($('#table_module_2 thead th:eq(2) input').prop('checked'))
          $('#table_module_2 thead th:eq(2) input').trigger('click');
      }
    });

    $('div.productTabs').find('a').each(function () {
      $(this).attr('href', '#');
    });

    $('div.productTabs a').click(function () {
      var id = $(this).attr('id');
      $('.nav-profile').removeClass('selected');
      $(this).addClass('selected active');
      $(this).siblings().removeClass('active');
      $('.tab-profile').hide();
      $('.' + id).show();
    });

    $('.ajaxPower').change(function () {
      var tout = $(this).data('rel').split('||');
      var id_tab = tout[0];
      var id_profile = tout[1];
      var perm = tout[2];
      var enabled = $(this).is(':checked') ? 1 : 0;
      var tabsize = tout[3];
      var tabnumber = tout[4];
      var table = 'table#table_' + id_profile;

      if (perm == 'all' && $(this).parent().parent().hasClass('parent')) {
        if (enabled)
          $(this).parent().parent().parent().find('.child-' + id_tab + ' input[type=checkbox]').attr('checked', 'checked');
        else
          $(this).parent().parent().parent().find('.child-' + id_tab + ' input[type=checkbox]').removeAttr('checked');
        $.ajax({
          url: "<?php echo strtr((string)$_smarty_tpl->tpl_vars['link']->value->getAdminLink('AdminAccess'), array("\\" => "\\\\", "'" => "\\'", "\"" => "\\\"", "\r" => "\\r", "\n" => "\\n", "</" => "<\/", "<!--" => "<\!--", "<s" => "<\s", "<S" => "<\S" ));?>
",
          cache: false,
          data: {
            ajaxMode: '1',
            id_tab: id_tab,
            id_profile: id_profile,
            perm: perm,
            enabled: enabled,
            submitAddAccess: '1',
            addFromParent: '1',
            action: 'updateAccess',
            ajax: '1',
            token: '<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['getAdminToken'][0], array( array('tab'=>'AdminAccess'),$_smarty_tpl ) );?>
'
          },
          success: function (res, textStatus, jqXHR) {
            try {
              if (res == 'ok')
                showSuccessMessage("<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Update successful','js'=>1),$_smarty_tpl ) );?>
");
              else
                showErrorMessage("<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Update error','js'=>1),$_smarty_tpl ) );?>
");
            } catch (e) {
              jAlert('Technical error');
            }
          }
        });
      }
      perfect_access_js_gestion(this, perm, id_tab, tabsize, tabnumber, table);

      $.ajax({
        url: "<?php echo addslashes($_smarty_tpl->tpl_vars['link']->value->getAdminLink('AdminAccess'));?>
",
        cache: false,
        data: {
          ajaxMode: '1',
          id_tab: id_tab,
          id_profile: id_profile,
          perm: perm,
          enabled: enabled,
          submitAddAccess: '1',
          action: 'updateAccess',
          ajax: '1',
          token: '<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['getAdminToken'][0], array( array('tab'=>'AdminAccess'),$_smarty_tpl ) );?>
'
        },
        success: function (res, textStatus, jqXHR) {
          try {
            if (res == 'ok')
              showSuccessMessage("<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Update successful','js'=>1),$_smarty_tpl ) );?>
");
            else
              showErrorMessage("<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Update error','js'=>1),$_smarty_tpl ) );?>
");
          }
          catch (e) {
            jAlert('Technical error');
          }
        }
      });
    });

    $(".changeModuleAccess").change(function () {
      var tout = $(this).data('rel').split('||');
      var id_module = tout[0];
      var perm = tout[1];
      var id_profile = tout[2];
      var enabled = $(this).is(':checked') ? 1 : 0;
      var enabled_attr = $(this).is(':checked') ? true : false;
      var table = 'table#table_module_' + id_profile;

      if (id_module == -1)
        $(table + ' .ajax-ma-' + perm).each(function (key, value) {
          $(this).attr("checked", enabled_attr);
        });
      else if (!enabled)
        $(table + ' #ajax-ma-' + perm + '-master').each(function (key, value) {
          $(this).attr("checked", enabled_attr);
        });

      $.ajax({
        url: "<?php echo addslashes($_smarty_tpl->tpl_vars['link']->value->getAdminLink('AdminAccess'));?>
",
        cache: false,
        data: {
          ajaxMode: '1',
          id_module: id_module,
          perm: perm,
          enabled: enabled,
          id_profile: id_profile,
          changeModuleAccess: '1',
          action: 'updateModuleAccess',
          ajax: '1',
          token: '<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['getAdminToken'][0], array( array('tab'=>'AdminAccess'),$_smarty_tpl ) );?>
'
        },
        success: function (res, textStatus, jqXHR) {
          try {
            if (res == 'ok')
              showSuccessMessage("<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Update successful','js'=>1),$_smarty_tpl ) );?>
");
            else
              showErrorMessage("<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Update error','js'=>1),$_smarty_tpl ) );?>
");
          }
          catch (e) {
            jAlert('Technical error');
          }
        }
      });
    });

  });
<?php echo '</script'; ?>
>
<?php if ($_smarty_tpl->tpl_vars['show_toolbar']->value) {?>
  <?php $_smarty_tpl->_subTemplateRender("file:toolbar.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('toolbar_btn'=>$_smarty_tpl->tpl_vars['toolbar_btn']->value,'toolbar_scroll'=>$_smarty_tpl->tpl_vars['toolbar_scroll']->value,'title'=>$_smarty_tpl->tpl_vars['title']->value), 0, false);
?>
  <div class="leadin"><?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_125608278463c016ccadee28_18676785', "leadin");
?>
</div>
<?php }?>
<div class="row">
  <div class="productTabs col-lg-2">
    <div class="tab list-group">
      <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['profiles']->value, 'profile');
$_smarty_tpl->tpl_vars['profile']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['profile']->value) {
$_smarty_tpl->tpl_vars['profile']->do_else = false;
?>
        <a class="list-group-item nav-profile <?php if ($_smarty_tpl->tpl_vars['profile']->value['id_profile'] == $_smarty_tpl->tpl_vars['current_profile']->value) {?>active<?php }?>"
           id="profile-<?php echo intval($_smarty_tpl->tpl_vars['profile']->value['id_profile']);?>
"
           href="<?php echo htmlspecialchars((string)$_smarty_tpl->tpl_vars['current']->value, ENT_QUOTES, 'UTF-8', true);?>
&amp;token=<?php echo htmlspecialchars((string)$_smarty_tpl->tpl_vars['token']->value, ENT_QUOTES, 'UTF-8', true);?>
&amp;id_profile=<?php echo intval($_smarty_tpl->tpl_vars['profile']->value['id_profile']);?>
"><?php echo mb_convert_encoding(htmlspecialchars((string)$_smarty_tpl->tpl_vars['profile']->value['name'], ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
</a>
      <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
    </div>
  </div>
  <div class="defaultForm form-horizontal col-lg-10">
    <?php $_smarty_tpl->_assignInScope('tabsize', count($_smarty_tpl->tpl_vars['tabs']->value));?>
    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['tabs']->value, 'tab');
$_smarty_tpl->tpl_vars['tab']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['tab']->value) {
$_smarty_tpl->tpl_vars['tab']->do_else = false;
?>
      <?php if ($_smarty_tpl->tpl_vars['tab']->value['id_tab'] > $_smarty_tpl->tpl_vars['tabsize']->value) {?>
        <?php $_smarty_tpl->_assignInScope('tabsize', $_smarty_tpl->tpl_vars['tab']->value['id_tab']);?>
      <?php }?>
    <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['profiles']->value, 'profile');
$_smarty_tpl->tpl_vars['profile']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['profile']->value) {
$_smarty_tpl->tpl_vars['profile']->do_else = false;
?>
      <div class="profile-<?php echo intval($_smarty_tpl->tpl_vars['profile']->value['id_profile']);?>
 tab-profile"
           style="display:<?php if ($_smarty_tpl->tpl_vars['profile']->value['id_profile'] != $_smarty_tpl->tpl_vars['current_profile']->value) {?>none<?php }?>">
        <div class="row">
          <?php if ($_smarty_tpl->tpl_vars['profile']->value['id_profile'] != $_smarty_tpl->tpl_vars['admin_profile']->value) {?>

                        <div class="col-lg-12">
              <div class="panel">
                <h3><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Menu'),$_smarty_tpl ) );?>
</h3>
                <table class="table" id="table_<?php echo intval($_smarty_tpl->tpl_vars['profile']->value['id_profile']);?>
">
                  <thead>
                    <tr>
                      <th></th>
                      <th>
                        <input type="checkbox" name="1"
                               class="viewall ajaxPower"<?php if ($_smarty_tpl->tpl_vars['access_edit']->value == 1) {?> data-rel="-1||<?php echo intval($_smarty_tpl->tpl_vars['profile']->value['id_profile']);?>
||view||<?php echo intval($_smarty_tpl->tpl_vars['tabsize']->value);?>
||<?php echo intval(count($_smarty_tpl->tpl_vars['tabs']->value));?>
"<?php } else { ?> disabled="disabled"<?php }?>/>
                        <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'View'),$_smarty_tpl ) );?>

                      </th>
                      <th>
                        <input type="checkbox" name="1"
                               class="addall ajaxPower"<?php if ($_smarty_tpl->tpl_vars['access_edit']->value == 1) {?> data-rel="-1||<?php echo intval($_smarty_tpl->tpl_vars['profile']->value['id_profile']);?>
||add||<?php echo intval($_smarty_tpl->tpl_vars['tabsize']->value);?>
||<?php echo intval(count($_smarty_tpl->tpl_vars['tabs']->value));?>
"<?php } else { ?> disabled="disabled"<?php }?>/>
                        <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Add'),$_smarty_tpl ) );?>

                      </th>
                      <th>
                        <input type="checkbox" name="1"
                               class="editall ajaxPower"<?php if ($_smarty_tpl->tpl_vars['access_edit']->value == 1) {?> data-rel="-1||<?php echo intval($_smarty_tpl->tpl_vars['profile']->value['id_profile']);?>
||edit||<?php echo intval($_smarty_tpl->tpl_vars['tabsize']->value);?>
||<?php echo intval(count($_smarty_tpl->tpl_vars['tabs']->value));?>
"<?php } else { ?> disabled="disabled"<?php }?>/>
                        <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Edit'),$_smarty_tpl ) );?>

                      </th>
                      <th>
                        <input type="checkbox" name="1"
                               class="deleteall ajaxPower"<?php if ($_smarty_tpl->tpl_vars['access_edit']->value == 1) {?> data-rel="-1||<?php echo intval($_smarty_tpl->tpl_vars['profile']->value['id_profile']);?>
||delete||<?php echo intval($_smarty_tpl->tpl_vars['tabsize']->value);?>
||<?php echo intval(count($_smarty_tpl->tpl_vars['tabs']->value));?>
"<?php } else { ?> disabled="disabled"<?php }?>/>
                        <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Delete'),$_smarty_tpl ) );?>

                      </th>
                      <th>
                        <input type="checkbox" name="1"
                               class="allall ajaxPower"<?php if ($_smarty_tpl->tpl_vars['access_edit']->value == 1) {?> data-rel="-1||<?php echo intval($_smarty_tpl->tpl_vars['profile']->value['id_profile']);?>
||all||<?php echo intval($_smarty_tpl->tpl_vars['tabsize']->value);?>
||<?php echo intval(count($_smarty_tpl->tpl_vars['tabs']->value));?>
"<?php } else { ?> disabled="disabled"<?php }?>/>
                        <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'All'),$_smarty_tpl ) );?>

                      </th>
                    </tr>
                  </thead>
                  <tbody>
                    <?php if (!count($_smarty_tpl->tpl_vars['tabs']->value)) {?>
                      <tr>
                        <td colspan="6"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'No menu'),$_smarty_tpl ) );?>
</td>
                      </tr>
                    <?php } else { ?>
                      <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['tabs']->value, 'tab');
$_smarty_tpl->tpl_vars['tab']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['tab']->value) {
$_smarty_tpl->tpl_vars['tab']->do_else = false;
?>
                        <?php $_smarty_tpl->_assignInScope('access', $_smarty_tpl->tpl_vars['accesses']->value[$_smarty_tpl->tpl_vars['profile']->value['id_profile']]);?>
                        <?php if ((isset($_smarty_tpl->tpl_vars['access']->value[$_smarty_tpl->tpl_vars['tab']->value['id_tab']]))) {?>
                          <?php if (!$_smarty_tpl->tpl_vars['tab']->value['id_parent'] || $_smarty_tpl->tpl_vars['tab']->value['id_parent'] == -1) {?>
                            <?php $_smarty_tpl->_assignInScope('is_child', false);?>
                            <?php $_smarty_tpl->_assignInScope('result_accesses', 0);?>
                            <tr<?php if (!$_smarty_tpl->tpl_vars['is_child']->value) {?> class="parent"<?php }?>>
                              <td<?php if (!$_smarty_tpl->tpl_vars['is_child']->value) {?> class="bold"<?php }?>><?php if ($_smarty_tpl->tpl_vars['is_child']->value) {?> &raquo; <?php }?>
                                <strong><?php echo mb_convert_encoding(htmlspecialchars((string)$_smarty_tpl->tpl_vars['tab']->value['name'], ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
</strong></td>
                              <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['perms']->value, 'perm');
$_smarty_tpl->tpl_vars['perm']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['perm']->value) {
$_smarty_tpl->tpl_vars['perm']->do_else = false;
?>
                                <?php if ($_smarty_tpl->tpl_vars['access_edit']->value == 1) {?>
                                  <td>
                                    <input type="checkbox"
                                           data-rel="<?php echo intval($_smarty_tpl->tpl_vars['access']->value[$_smarty_tpl->tpl_vars['tab']->value['id_tab']]['id_tab']);?>
||<?php echo intval($_smarty_tpl->tpl_vars['profile']->value['id_profile']);?>
||<?php echo $_smarty_tpl->tpl_vars['perm']->value;?>
||<?php echo intval($_smarty_tpl->tpl_vars['tabsize']->value);?>
||<?php echo intval(count($_smarty_tpl->tpl_vars['tabs']->value));?>
"
                                           class="ajaxPower <?php echo mb_convert_encoding(htmlspecialchars((string)$_smarty_tpl->tpl_vars['perm']->value, ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
 <?php echo intval($_smarty_tpl->tpl_vars['access']->value[$_smarty_tpl->tpl_vars['tab']->value['id_tab']]['id_tab']);?>
"<?php if ($_smarty_tpl->tpl_vars['access']->value[$_smarty_tpl->tpl_vars['tab']->value['id_tab']][$_smarty_tpl->tpl_vars['perm']->value] == 1) {?> checked="checked"<?php }?>/>
                                  </td>
                                <?php } else { ?>
                                  <td>
                                    <input type="checkbox"
                                           disabled="disabled"<?php if ($_smarty_tpl->tpl_vars['access']->value[$_smarty_tpl->tpl_vars['tab']->value['id_tab']][$_smarty_tpl->tpl_vars['perm']->value] == 1) {?> checked="checked"<?php }?>/>
                                  </td>
                                <?php }?>
                                <?php $_smarty_tpl->_assignInScope('result_accesses', $_smarty_tpl->tpl_vars['result_accesses']->value+$_smarty_tpl->tpl_vars['access']->value[$_smarty_tpl->tpl_vars['tab']->value['id_tab']][$_smarty_tpl->tpl_vars['perm']->value]);?>
                              <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                              <td>
                                <input type="checkbox"<?php if ($_smarty_tpl->tpl_vars['access_edit']->value == 1) {?> data-rel="<?php echo intval($_smarty_tpl->tpl_vars['access']->value[$_smarty_tpl->tpl_vars['tab']->value['id_tab']]['id_tab']);?>
||<?php echo intval($_smarty_tpl->tpl_vars['profile']->value['id_profile']);?>
||all||<?php echo intval($_smarty_tpl->tpl_vars['tabsize']->value);?>
||<?php echo intval(count($_smarty_tpl->tpl_vars['tabs']->value));?>
" class="ajaxPower all <?php echo intval($_smarty_tpl->tpl_vars['access']->value[$_smarty_tpl->tpl_vars['tab']->value['id_tab']]['id_tab']);?>
"<?php } else { ?> class="all <?php echo intval($_smarty_tpl->tpl_vars['access']->value[$_smarty_tpl->tpl_vars['tab']->value['id_tab']]['id_tab']);?>
" disabled="disabled"<?php }
if ($_smarty_tpl->tpl_vars['result_accesses']->value == 4) {?> checked="checked"<?php }?>/>
                              </td>
                            </tr>
                            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['tabs']->value, 'child');
$_smarty_tpl->tpl_vars['child']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['child']->value) {
$_smarty_tpl->tpl_vars['child']->do_else = false;
?>
                              <?php if ($_smarty_tpl->tpl_vars['child']->value['id_parent'] === $_smarty_tpl->tpl_vars['tab']->value['id_tab']) {?>
                                <?php if ((isset($_smarty_tpl->tpl_vars['access']->value[$_smarty_tpl->tpl_vars['child']->value['id_tab']]))) {?>
                                  <?php $_smarty_tpl->_assignInScope('is_child', true);?>
                                  <?php $_smarty_tpl->_assignInScope('result_accesses', 0);?>
                                  <tr class="child-<?php echo $_smarty_tpl->tpl_vars['child']->value['id_parent'];?>
">
                                    <td<?php if (!$_smarty_tpl->tpl_vars['is_child']->value) {?> class="bold"<?php }?>><?php if ($_smarty_tpl->tpl_vars['is_child']->value) {?> &raquo; <?php }
echo mb_convert_encoding(htmlspecialchars((string)$_smarty_tpl->tpl_vars['child']->value['name'], ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
</td>
                                    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['perms']->value, 'perm');
$_smarty_tpl->tpl_vars['perm']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['perm']->value) {
$_smarty_tpl->tpl_vars['perm']->do_else = false;
?>
                                      <?php if ($_smarty_tpl->tpl_vars['access_edit']->value == 1) {?>
                                        <td>
                                          <input type="checkbox"
                                                 data-rel="<?php echo intval($_smarty_tpl->tpl_vars['access']->value[$_smarty_tpl->tpl_vars['child']->value['id_tab']]['id_tab']);?>
||<?php echo intval($_smarty_tpl->tpl_vars['profile']->value['id_profile']);?>
||<?php echo mb_convert_encoding(htmlspecialchars((string)$_smarty_tpl->tpl_vars['perm']->value, ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
||<?php echo intval($_smarty_tpl->tpl_vars['tabsize']->value);?>
||<?php echo intval(count($_smarty_tpl->tpl_vars['tabs']->value));?>
"
                                                 class="ajaxPower <?php echo $_smarty_tpl->tpl_vars['perm']->value;?>
 <?php echo intval($_smarty_tpl->tpl_vars['access']->value[$_smarty_tpl->tpl_vars['child']->value['id_tab']]['id_tab']);?>
"<?php if ($_smarty_tpl->tpl_vars['access']->value[$_smarty_tpl->tpl_vars['child']->value['id_tab']][$_smarty_tpl->tpl_vars['perm']->value] == 1) {?> checked="checked"<?php }?>/>
                                        </td>
                                      <?php } else { ?>
                                        <td>
                                          <input type="checkbox"
                                                 disabled="disabled"<?php if ($_smarty_tpl->tpl_vars['access']->value[$_smarty_tpl->tpl_vars['child']->value['id_tab']][$_smarty_tpl->tpl_vars['perm']->value] == 1) {?> checked="checked"<?php }?>/>
                                        </td>
                                      <?php }?>
                                      <?php $_smarty_tpl->_assignInScope('result_accesses', $_smarty_tpl->tpl_vars['result_accesses']->value+$_smarty_tpl->tpl_vars['access']->value[$_smarty_tpl->tpl_vars['child']->value['id_tab']][$_smarty_tpl->tpl_vars['perm']->value]);?>
                                    <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                                    <td>
                                      <input type="checkbox"<?php if ($_smarty_tpl->tpl_vars['access_edit']->value == 1) {?> data-rel="<?php echo intval($_smarty_tpl->tpl_vars['access']->value[$_smarty_tpl->tpl_vars['child']->value['id_tab']]['id_tab']);?>
||<?php echo intval($_smarty_tpl->tpl_vars['profile']->value['id_profile']);?>
||all||<?php echo intval($_smarty_tpl->tpl_vars['tabsize']->value);?>
||<?php echo intval(count($_smarty_tpl->tpl_vars['tabs']->value));?>
" class="ajaxPower all <?php echo intval($_smarty_tpl->tpl_vars['access']->value[$_smarty_tpl->tpl_vars['child']->value['id_tab']]['id_tab']);?>
"<?php } else { ?> class="all <?php echo intval($_smarty_tpl->tpl_vars['access']->value[$_smarty_tpl->tpl_vars['child']->value['id_tab']]['id_tab']);?>
" disabled="disabled"<?php }
if ($_smarty_tpl->tpl_vars['result_accesses']->value == 4) {?> checked="checked"<?php }?>/>
                                    </td>
                                  </tr>
                                <?php }?>
                              <?php }?>
                            <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                          <?php }?>
                        <?php }?>
                      <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                    <?php }?>
                  </tbody>
                </table>
              </div>
            </div>

                        <div class="col-lg-12">
              <div class="panel">
                <h3><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Modules'),$_smarty_tpl ) );?>
</h3>
                <table class="table" id="table_module_<?php echo intval($_smarty_tpl->tpl_vars['profile']->value['id_profile']);?>
">
                  <thead>
                    <tr>
                      <th></th>
                      <th>
                        <input type="checkbox"<?php if ($_smarty_tpl->tpl_vars['access_edit']->value == 1) {?> class="changeModuleAccess" data-rel="-1||view||<?php echo intval($_smarty_tpl->tpl_vars['profile']->value['id_profile']);?>
"<?php } else { ?> disabled="disabled"<?php }?>/> <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'View'),$_smarty_tpl ) );?>

                      </th>
                      <th>
                        <input type="checkbox"<?php if ($_smarty_tpl->tpl_vars['access_edit']->value == 1) {?> class="changeModuleAccess" data-rel="-1||configure||<?php echo intval($_smarty_tpl->tpl_vars['profile']->value['id_profile']);?>
"<?php } else { ?> disabled="disabled"<?php }?>/> <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Configure'),$_smarty_tpl ) );?>

                      </th>
                      <th>
                        <input type="checkbox"<?php if ($_smarty_tpl->tpl_vars['access_edit']->value == 1) {?> class="changeModuleAccess" data-rel="-1||uninstall||<?php echo intval($_smarty_tpl->tpl_vars['profile']->value['id_profile']);?>
"<?php } else { ?> disabled="disabled"<?php }?>/> <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Uninstall'),$_smarty_tpl ) );?>

                      </th>
                    </tr>
                  </thead>
                  <tbody>
                    <?php if (!count($_smarty_tpl->tpl_vars['modules']->value)) {?>
                      <tr>
                        <td colspan="3"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'No modules are installed'),$_smarty_tpl ) );?>
</td>
                      </tr>
                    <?php } else { ?>
                      <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['modules']->value[$_smarty_tpl->tpl_vars['profile']->value['id_profile']], 'module');
$_smarty_tpl->tpl_vars['module']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['module']->value) {
$_smarty_tpl->tpl_vars['module']->do_else = false;
?>
                        <tr>
                          <td>&raquo; <?php echo mb_convert_encoding(htmlspecialchars((string)$_smarty_tpl->tpl_vars['module']->value['name'], ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
</td>
                          <td>
                            <input type="checkbox"
                                   value="1"<?php if ($_smarty_tpl->tpl_vars['module']->value['view'] == true) {?> checked="checked"<?php }
if ($_smarty_tpl->tpl_vars['access_edit']->value == 1) {?> class="ajax-ma-view changeModuleAccess" data-rel="<?php echo intval($_smarty_tpl->tpl_vars['module']->value['id_module']);?>
||view||<?php echo intval($_smarty_tpl->tpl_vars['profile']->value['id_profile']);?>
"<?php } else { ?> class="ajax-ma-view" disabled="disabled"<?php }?>/>
                          </td>
                          <td>
                            <input type="checkbox"
                                   value="1"<?php if ($_smarty_tpl->tpl_vars['module']->value['configure'] == true) {?> checked="checked"<?php }
if ($_smarty_tpl->tpl_vars['access_edit']->value == 1) {?> class="ajax-ma-configure changeModuleAccess" data-rel="<?php echo intval($_smarty_tpl->tpl_vars['module']->value['id_module']);?>
||configure||<?php echo intval($_smarty_tpl->tpl_vars['profile']->value['id_profile']);?>
"<?php } else { ?> class="ajax-ma-configure" disabled="disabled"<?php }?>/>
                          </td>
                          <td>
                            <input type="checkbox"
                                   value="1"<?php if ($_smarty_tpl->tpl_vars['module']->value['uninstall'] == true) {?> checked="checked"<?php }
if ($_smarty_tpl->tpl_vars['access_edit']->value == 1) {?> class="ajax-ma-uninstall changeModuleAccess" data-rel="<?php echo intval($_smarty_tpl->tpl_vars['module']->value['id_module']);?>
||uninstall||<?php echo intval($_smarty_tpl->tpl_vars['profile']->value['id_profile']);?>
"<?php } else { ?> class="ajax-ma-uninstall" disabled="disabled"<?php }?>/>
                          </td>
                        </tr>
                      <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                    <?php }?>
                  </tbody>
                </table>
              </div>
            </div>

                        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['admin_controllers']->value[$_smarty_tpl->tpl_vars['profile']->value['id_profile']], 'adminController');
$_smarty_tpl->tpl_vars['adminController']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['adminController']->value) {
$_smarty_tpl->tpl_vars['adminController']->do_else = false;
?>
              <form class="defaultForm form-horizontal"
                    action="<?php echo htmlspecialchars((string)$_smarty_tpl->tpl_vars['current']->value, ENT_QUOTES, 'UTF-8', true);?>
&amp;token=<?php echo htmlspecialchars((string)$_smarty_tpl->tpl_vars['token']->value, ENT_QUOTES, 'UTF-8', true);?>
&amp;id_profile=<?php echo intval($_smarty_tpl->tpl_vars['profile']->value['id_profile']);?>
"
                    method="post"
                    enctype="multipart/form-data">
                <input type="hidden" name="profileId" value="<?php echo intval($_smarty_tpl->tpl_vars['profile']->value['id_profile']);?>
" />
                <input type="hidden" name="controllerId" value="<?php echo htmlspecialchars((string)$_smarty_tpl->tpl_vars['adminController']->value['controller'], ENT_QUOTES, 'utf-8', true);?>
" />

                <div class="col-lg-12">
                  <div class="panel">
                    <h3><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Permissions for %s','sprintf'=>array($_smarty_tpl->tpl_vars['adminController']->value['name'])),$_smarty_tpl ) );?>
</h3>
                    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['adminController']->value['permissions'], 'perm');
$_smarty_tpl->tpl_vars['perm']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['perm']->value) {
$_smarty_tpl->tpl_vars['perm']->do_else = false;
?>
                      <div class="form-group">
                        <label class="control-label col-lg-3 required">
                          <span class="label-tooltip" data-toggle="tooltip" data-html="true" title="<?php echo htmlspecialchars((string)$_smarty_tpl->tpl_vars['perm']->value['description'], ENT_QUOTES, 'utf-8', true);?>
">
                            <?php echo $_smarty_tpl->tpl_vars['perm']->value['name'];?>

                          </span>
                        </label>
                        <div calass="col-lg-7">
                          <select name="permissions[<?php echo htmlspecialchars((string)$_smarty_tpl->tpl_vars['perm']->value['key'], ENT_QUOTES, 'utf-8', true);?>
]" class="fixed-width-xl" id="<?php echo htmlspecialchars((string)$_smarty_tpl->tpl_vars['perm']->value['key'], ENT_QUOTES, 'utf-8', true);?>
">
                            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['perm']->value['levels'], 'levelName', false, 'levelKey');
$_smarty_tpl->tpl_vars['levelName']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['levelKey']->value => $_smarty_tpl->tpl_vars['levelName']->value) {
$_smarty_tpl->tpl_vars['levelName']->do_else = false;
?>
                              <option value="<?php echo $_smarty_tpl->tpl_vars['levelKey']->value;?>
" <?php if ($_smarty_tpl->tpl_vars['perm']->value['level'] == $_smarty_tpl->tpl_vars['levelKey']->value) {?> selected="selected"<?php }?>>
                                <?php echo $_smarty_tpl->tpl_vars['levelName']->value;?>

                              </option>
                            <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                          </select>
                        </div>
                      </div>
                    <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                    <div class="panel-footer">
                      <button type="submit" name="submitSaveController" class="btn btn-default pull-right"><i class="process-icon-save"></i> Save</button>
                    </div>
                  </div>
                </div>
              </form>
            <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>

          <?php } else { ?>
            <div class="col-lg-12">
              <div class="panel">
                <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Administrator permissions cannot be modified.'),$_smarty_tpl ) );?>

              </div>
            </div>
          <?php }?>
        </div>
      </div>
    <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
  </div>
</div>
<?php }
/* {block "leadin"} */
class Block_125608278463c016ccadee28_18676785 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'leadin' => 
  array (
    0 => 'Block_125608278463c016ccadee28_18676785',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block "leadin"} */
}
