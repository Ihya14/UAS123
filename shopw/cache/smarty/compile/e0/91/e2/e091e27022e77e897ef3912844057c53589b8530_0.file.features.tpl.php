<?php
/* Smarty version 4.2.1, created on 2023-01-12 14:26:46
  from 'D:\xampp\htdocs\shopw\admin622ozp8ob\themes\default\template\controllers\products\features.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.2.1',
  'unifunc' => 'content_63bfa826964bc5_82707836',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'e091e27022e77e897ef3912844057c53589b8530' => 
    array (
      0 => 'D:\\xampp\\htdocs\\shopw\\admin622ozp8ob\\themes\\default\\template\\controllers\\products\\features.tpl',
      1 => 1668409880,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:../../helpers/form/form_input.tpl' => 3,
  ),
),false)) {
function content_63bfa826964bc5_82707836 (Smarty_Internal_Template $_smarty_tpl) {
if ((isset($_smarty_tpl->tpl_vars['product']->value->id))) {?>
  <div id="product-features" class="panel product-tab">
    <input type="hidden" name="submitted_tabs[]" value="Features"/>
    <h3><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Assign features to this product'),$_smarty_tpl ) );?>
</h3>

    <div class="alert alert-info">
      <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'You can specify a value for each relevant feature regarding this product. Empty fields will not be displayed.'),$_smarty_tpl ) );?>

      <br/>
      <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'You can either create a specific value, or select among the existing pre-defined values you\'ve previously added.'),$_smarty_tpl ) );?>

    </div>

    <table class="table">
      <thead>
      <tr>
        <th><span class="title_box"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Feature'),$_smarty_tpl ) );?>
</span></th>
        <th><span class="title_box"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Value'),$_smarty_tpl ) );?>
</span></th>
        <th><span class="title_box"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Custom displayable'),$_smarty_tpl ) );?>
</span></th>
        <th><span class="title_box"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Create new value'),$_smarty_tpl ) );?>
</span></th>
      </tr>
      </thead>

      <tbody>
      <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['available_features']->value, 'available_feature');
$_smarty_tpl->tpl_vars['available_feature']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['available_feature']->value) {
$_smarty_tpl->tpl_vars['available_feature']->do_else = false;
?>
        <tr class="<?php if ($_smarty_tpl->tpl_vars['available_feature']->value['allows_multiple_values']) {?>multiple_options<?php } else { ?>single_option<?php }?>">
                    <td><?php echo $_smarty_tpl->tpl_vars['available_feature']->value['name'];?>
</td>

                    <td>
            <?php if (sizeof($_smarty_tpl->tpl_vars['available_feature']->value['featureValues'])) {?>
              <select id="feature_<?php echo $_smarty_tpl->tpl_vars['available_feature']->value['id_feature'];?>
_value"
                class="chosen"
                name="feature_<?php echo $_smarty_tpl->tpl_vars['available_feature']->value['id_feature'];?>
_value[]"
                <?php if ($_smarty_tpl->tpl_vars['available_feature']->value['allows_multiple_values']) {?>
                  size="<?php echo min(3,count($_smarty_tpl->tpl_vars['available_feature']->value['featureValues']));?>
"
                  multiple
                <?php }?>
              >
                <?php if (!$_smarty_tpl->tpl_vars['available_feature']->value['allows_multiple_values']) {?>
                  <option value="0">---</option>
                <?php }?>
                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['available_feature']->value['featureValues'], 'value');
$_smarty_tpl->tpl_vars['value']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['value']->value) {
$_smarty_tpl->tpl_vars['value']->do_else = false;
?>
                    <option value="<?php echo $_smarty_tpl->tpl_vars['value']->value['id_feature_value'];?>
"
                            <?php if (in_array($_smarty_tpl->tpl_vars['value']->value['id_feature_value'],$_smarty_tpl->tpl_vars['available_feature']->value['selected'])) {?>selected="selected"<?php }?> >
                      <?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'truncate' ][ 0 ], array( $_smarty_tpl->tpl_vars['value']->value['value'],80 ));?>

                    </option>
                <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
              </select>
            <?php } else { ?>
              <input type="hidden" name="feature_<?php echo $_smarty_tpl->tpl_vars['available_feature']->value['id_feature'];?>
_value" value="0"/>
              <span>
                <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'N/A'),$_smarty_tpl ) );?>

                -
                <a href="<?php echo htmlspecialchars((string)$_smarty_tpl->tpl_vars['link']->value->getAdminLink('AdminFeatures'), ENT_QUOTES, 'UTF-8', true);?>
&amp;addfeature_value&amp;id_feature=<?php echo $_smarty_tpl->tpl_vars['available_feature']->value['id_feature'];?>
"
                   class="confirm_leave btn btn-link">
                  <i class="icon-plus-sign"></i> <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Add pre-defined values first'),$_smarty_tpl ) );?>
 <i class="icon-external-link-sign"></i>
                </a>
              </span>
            <?php }?>
          </td>

                    <td class="displayable_values">
            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['available_feature']->value['featureValues'], 'value');
$_smarty_tpl->tpl_vars['value']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['value']->value) {
$_smarty_tpl->tpl_vars['value']->do_else = false;
?>
              <div id="displayable_<?php echo $_smarty_tpl->tpl_vars['value']->value['id_feature_value'];?>
" class="displayable-field" title="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Displayable for'),$_smarty_tpl ) );?>
 <?php echo $_smarty_tpl->tpl_vars['value']->value['value'];?>
">
                <?php if (array_key_exists($_smarty_tpl->tpl_vars['value']->value['id_feature_value'],$_smarty_tpl->tpl_vars['available_feature']->value['displayable_values'])) {?>
                  <?php $_smarty_tpl->_subTemplateRender("file:../../helpers/form/form_input.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('input'=>array('type'=>'text','name'=>"displayable_".((string)$_smarty_tpl->tpl_vars['value']->value['id_feature_value']),'lang'=>true,'all_lang_button'=>true,'class'=>'displayable-input'),'fields_value'=>array("displayable_".((string)$_smarty_tpl->tpl_vars['value']->value['id_feature_value'])=>$_smarty_tpl->tpl_vars['available_feature']->value['displayable_values'][$_smarty_tpl->tpl_vars['value']->value['id_feature_value']])), 0, true);
?>
                <?php }?>
              </div>
            <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
          </td>

                    <td class="new_values">

              <div class="new_group" id="new_<?php echo $_smarty_tpl->tpl_vars['available_feature']->value['id_feature'];?>
">
                <input type="hidden" id="new_values_count_<?php echo $_smarty_tpl->tpl_vars['available_feature']->value['id_feature'];?>
" name="new_values_count_<?php echo $_smarty_tpl->tpl_vars['available_feature']->value['id_feature'];?>
" value="0" />
                <div class="new_group_value" id="0">
                  <div class="col-lg-9">
                    <?php $_smarty_tpl->_subTemplateRender("file:../../helpers/form/form_input.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('input'=>array('type'=>'text','name'=>"new_feature_value_".((string)$_smarty_tpl->tpl_vars['available_feature']->value['id_feature'])."_0",'lang'=>true,'all_lang_button'=>true)), 0, true);
?>
                  </div>
                  <div class="col-lg-3" style="margin-top: 10px;">
                    <a href="javascript:void(0);" onclick="deleteNewValue($(this));"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Delete'),$_smarty_tpl ) );?>
</a>
                  </div>
                </div>
              </div>
              <?php if ($_smarty_tpl->tpl_vars['available_feature']->value['allows_multiple_values']) {?>
                <div class="col-lg-12" style="padding: 5px 0 5px 10px;"><a href="javascript:void(0);" onclick="addNewValue(<?php echo $_smarty_tpl->tpl_vars['available_feature']->value['id_feature'];?>
)"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Add another value'),$_smarty_tpl ) );?>
</a></div>
              <?php }?>
          </td>
        </tr>
        <?php
}
if ($_smarty_tpl->tpl_vars['available_feature']->do_else) {
?>
        <tr>
          <td colspan="3" style="text-align:center;"><i class="icon-warning-sign"></i> <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'No features have been defined'),$_smarty_tpl ) );?>
</td>
        </tr>
      <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
      </tbody>
    </table>

    <a href="<?php echo htmlspecialchars((string)$_smarty_tpl->tpl_vars['link']->value->getAdminLink('AdminFeatures'), ENT_QUOTES, 'UTF-8', true);?>
&amp;addfeature"
       class="btn btn-link confirm_leave button">
      <i class="icon-plus-sign"></i> <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Add a new feature'),$_smarty_tpl ) );?>
 <i class="icon-external-link-sign"></i>
    </a>
    <div class="panel-footer">
      <a href="<?php echo htmlspecialchars((string)$_smarty_tpl->tpl_vars['link']->value->getAdminLink('AdminProducts'), ENT_QUOTES, 'UTF-8', true);
if ((isset($_REQUEST['page'])) && $_REQUEST['page'] > 1) {?>&amp;submitFilterproduct=<?php echo intval($_REQUEST['page']);
}?>"
         class="btn btn-default"><i class="process-icon-cancel"></i> <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Cancel'),$_smarty_tpl ) );?>
</a>
      <button type="submit" name="submitAddproduct" class="btn btn-default pull-right" disabled="disabled"><i
                class="process-icon-loading"></i> <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Save'),$_smarty_tpl ) );?>
</button>
      <button type="submit" name="submitAddproductAndStay" class="btn btn-default pull-right" disabled="disabled"><i
                class="process-icon-loading"></i> <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Save and stay'),$_smarty_tpl ) );?>
</button>
    </div>
  </div>
  <?php echo '<script'; ?>
 type="text/javascript">
    if (tabs_manager.allow_hide_other_languages)
      hideOtherLanguage(<?php echo $_smarty_tpl->tpl_vars['defaultFormLanguage']->value;?>
);
    

    function addNewValue(id_feature) {

      var new_group = document.getElementById('new_'+id_feature);

      var new_field_last = new_group.querySelector('.new_group_value:last-of-type');
      var new_field = new_field_last.cloneNode(true);
      var new_index = parseInt(new_field.id)+1;
      new_field.id = new_index;

      var inputs = new_field.querySelectorAll('input');

      if (inputs.length) {
        inputs.forEach((input) => {
          // The all_lang_field has no name, as it should never be submitted
          if (input.name) {
            var new_identifier = 'new_feature_value_' + id_feature + '_' + new_index + '_' + input.name.replace(/^.*_/, "")
            input.id = new_identifier;
            input.name = new_identifier;
          }
          input.value = '';
        });
      }
      new_group.appendChild(new_field);
    }

    function deleteNewValue($element) {
      var group = $element.closest('.new_group');
      var cnt = group.find('.new_group_value').length;
      if (cnt > 1) {
        $element.closest('.new_group_value').remove();
      } else {
        $element.closest('.new_group_value').find('input').attr('value', '');
      }
    }

    // Make sure, that the chosen select has not a width of 0px
    $(document).ready(function() {
       $('select.chosen').chosen( { width: '100%', search_contains: true } );
    });


    $("#product-features select").on("change", function(element, id_feature_value) {
      addDisplayableField(id_feature_value.selected);
      renderAllDisplayableFields(element.target);
    })

    function renderAllDisplayableFields(select) {

      // Get the selected values
      var feature_value_selected = [];
      var selected_options = Array.from(select.selectedOptions);

      selected_options.forEach(function (option) {
        feature_value_selected.push('displayable_'+option.value);
      })

      // Hide all displayable elements, which aren't selected
      var displayable_elements = select.closest('tr').querySelectorAll('.displayable-field');

      if (displayable_elements.length) {
        displayable_elements.forEach((element) => {
          if (!feature_value_selected.includes(element.id)) {
            element.style.display = 'none';
          }
        });
      }

    }

    function addDisplayableField(id_feature_value) {

      if (!id_feature_value || id_feature_value==='0') {
        return false;
      }

      var displayable_div = document.getElementById('displayable_'+id_feature_value);

      // Check if the parent div is empty (the field may already be generated before)
      if (displayable_div.innerHTML.trim().length===0) {

        var displayable_field_html = `<?php $_smarty_tpl->_subTemplateRender("file:../../helpers/form/form_input.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('input'=>array('type'=>'text','name'=>"displayable_fake",'lang'=>true,'all_lang_button'=>true,'class'=>'displayable-input')), 0, true);
?>`;

        // Replace the fake name with the correct one
        displayable_field_html = displayable_field_html.replaceAll('displayable_fake', 'displayable_'+id_feature_value);

        // Move the input into the parent div
        displayable_div.insertAdjacentHTML('beforeend', displayable_field_html);
      }

      // Move the parent div to the end of the list
      var displayable_values_div = displayable_div.closest('.displayable_values');
      displayable_values_div.appendChild(displayable_div);

      // Show the displayable div
      displayable_div.style.display = 'block';
    }

  <?php echo '</script'; ?>
>

  <style>
    /* It looks tempting to simplify the following css rules, but keep in mind,
       that this has to work for single and multiple features as well as for
       one and multiple languages
     */

    /* Chosen Plugin has some width issues in BO */
    #product-features .chosen-container {
      width: 100%!important;
    }

    /* Make sure that selected options of a chosen field are always displayed on a new line */
    #product-features li.search-choice,
    #product-features input.search-choice {
      display: block;
      width: calc(100% - 10px);
      font-size: 12px;
      padding: 8px;
      margin: 5px 5px 0 5px;
    }

    #product-features tr.single_option td {
      padding: 6px 7px;
    }

    #product-features tr.multiple_options td.displayable_values,
    #product-features tr.multiple_options td.new_values {
      vertical-align: top;
    }

    #product-features tr.multiple_options td.displayable_values input,
    #product-features tr.multiple_options td.displayable_values button,
    #product-features tr.multiple_options td.new_values input,
    #product-features tr.multiple_options td.new_values button {
      margin: 5px 0 0 0;
    }

    #product-features td.displayable_values .form-group,
    #product-features td.new_values .form-group {
      margin: 0;
    }

    #product-features td.displayable_values .form-group:before,
    #product-features td.displayable_values .form-group:after,
    #product-features td.new_values .form-group:before,
    #product-features td.new_values .form-group:after {
      display: none;
    }

  </style>



<?php }
}
}
