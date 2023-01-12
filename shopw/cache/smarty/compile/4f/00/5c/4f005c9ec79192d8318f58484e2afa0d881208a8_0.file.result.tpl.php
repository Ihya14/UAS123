<?php
/* Smarty version 4.2.1, created on 2023-01-12 22:30:07
  from 'D:\xampp\htdocs\shopw\modules\coreupdater\views\templates\admin\result.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.2.1',
  'unifunc' => 'content_63c0196f8dc897_79585730',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '4f005c9ec79192d8318f58484e2afa0d881208a8' => 
    array (
      0 => 'D:\\xampp\\htdocs\\shopw\\modules\\coreupdater\\views\\templates\\admin\\result.tpl',
      1 => 1666079804,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_63c0196f8dc897_79585730 (Smarty_Internal_Template $_smarty_tpl) {
?><div class="panel" id="process-result">
  <div class="panel-heading">
    <?php if (!$_smarty_tpl->tpl_vars['edits']->value && !$_smarty_tpl->tpl_vars['changes']->value) {?>
      <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Your system is updated','mod'=>'coreupdater'),$_smarty_tpl ) );?>

    <?php } else { ?>
      <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Update your store','mod'=>'coreupdater'),$_smarty_tpl ) );?>

    <?php }?>
  </div>

  <?php if ($_smarty_tpl->tpl_vars['sameRevision']->value) {?>
    <?php if (!$_smarty_tpl->tpl_vars['edits']->value && !$_smarty_tpl->tpl_vars['changes']->value) {?>
      <div class="alert alert-success">
        <h2><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Your system is up to date!','mod'=>'coreupdater'),$_smarty_tpl ) );?>
</h2>
        <p>
          <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'You are already using latest [1]%s[/1] version [2]%s[/2].','sprintf'=>array($_smarty_tpl->tpl_vars['versionType']->value,$_smarty_tpl->tpl_vars['installedRevision']->value),'tags'=>array('<b>','<b>'),'mod'=>'coreupdater'),$_smarty_tpl ) );?>

        </p>
        <p>
          <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'No further actions are required.','mod'=>'coreupdater'),$_smarty_tpl ) );?>

        </p>
      </div>
    <?php } else { ?>
      <div class="alert alert-success">
        <h2><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'You are using latest version!','mod'=>'coreupdater'),$_smarty_tpl ) );?>
</h2>
        <p>
          <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'You are already using latest [1]%s[/1] version [2]%s[/2].','sprintf'=>array($_smarty_tpl->tpl_vars['versionType']->value,$_smarty_tpl->tpl_vars['installedRevision']->value),'tags'=>array('<b>','<b>'),'mod'=>'coreupdater'),$_smarty_tpl ) );?>

        </p>
      </div>
    <?php }?>
  <?php } else { ?>
    <?php if (!$_smarty_tpl->tpl_vars['edits']->value && !$_smarty_tpl->tpl_vars['changes']->value) {?>
      <div class="alert alert-success">
        <h2><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Your system is up to date!','mod'=>'coreupdater'),$_smarty_tpl ) );?>
</h2>
        <p>
          <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'You are already using latest [1]%s[/1] version [2]%s[/2].','sprintf'=>array($_smarty_tpl->tpl_vars['versionType']->value,$_smarty_tpl->tpl_vars['installedRevision']->value),'tags'=>array('<b>','<b>'),'mod'=>'coreupdater'),$_smarty_tpl ) );?>

        </p>
        <p>
          <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'No futher actions are required.','mod'=>'coreupdater'),$_smarty_tpl ) );?>

        </p>
      </div>
    <?php } else { ?>
      <div class="alert alert-success">
        <h2><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'New version available','mod'=>'coreupdater'),$_smarty_tpl ) );?>
</h2>
        <p>
          <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'There is a new [1]%s[/1] version [1]%s[/1] available.','sprintf'=>array($_smarty_tpl->tpl_vars['versionType']->value,$_smarty_tpl->tpl_vars['targetRevision']->value),'tags'=>array('<b>','<b>'),'mod'=>'coreupdater'),$_smarty_tpl ) );?>

        </p>
      </div>
    <?php }?>
  <?php }?>


  <?php if ($_smarty_tpl->tpl_vars['edits']->value) {?>
    <div class="alert alert-warning">
      <h2><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'You have local changes!','mod'=>'coreupdater'),$_smarty_tpl ) );?>
</h2>
      <p>
        <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Oh, bummer. Some of thirty bees core files have been [1]modified[/1]. That makes it a little bit harder to update your store.','tags'=>array('<b>'),'mod'=>'coreupdater'),$_smarty_tpl ) );?>

      </p>
      <p>
        <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Modification of core files is not recommended. It makes it very hard to keep your store updated.','tags'=>array('<b>'),'mod'=>'coreupdater'),$_smarty_tpl ) );?>

        <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'You should [1]extract[/1] your modifications to overrides or to module. If unsure how to do that, please contact [2]thirty bees support[/2], we can help.','tags'=>array('<b>','<a href="https://thirtybees.com/contact/" target="_blank">'),'mod'=>'coreupdater'),$_smarty_tpl ) );?>

      </p>
      <p>
        <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Please note that by updating your store, your local modifications [1]will be overwritten[/1].','tags'=>array('<b>'),'mod'=>'coreupdater'),$_smarty_tpl ) );?>

        <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Core updater will [1]backup[/1] all those files before update, though.','tags'=>array('<b>'),'mod'=>'coreupdater'),$_smarty_tpl ) );?>

      </p>
    </div>
  <?php }?>

  <?php if ($_smarty_tpl->tpl_vars['sameRevision']->value && $_smarty_tpl->tpl_vars['changes']->value) {?>
    <div class="alert alert-warning">
      <h2><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Your installation is broken!','mod'=>'coreupdater'),$_smarty_tpl ) );?>
</h2>
      <p>
        <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'We have detected some [1]problems[/1] with your installation. You should fix them by updating your store.','tags'=>array('<b>'),'mod'=>'coreupdater'),$_smarty_tpl ) );?>

      </p>
      <?php if (!$_smarty_tpl->tpl_vars['edits']->value) {?>
        <p>
          <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Note that it is [1]safe[/1] to update your store because there are no local changes','tags'=>array('<b>'),'mod'=>'coreupdater'),$_smarty_tpl ) );?>

        </p>
      <?php }?>
    </div>
  <?php }?>

  <?php if (!$_smarty_tpl->tpl_vars['sameRevision']->value && $_smarty_tpl->tpl_vars['changes']->value && !$_smarty_tpl->tpl_vars['edits']->value) {?>
    <div class="alert alert-success">
      <h2><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'It is safe to update!','mod'=>'coreupdater'),$_smarty_tpl ) );?>
</h2>
      <p>
        <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'You can [1]safely[/1] update your store to new version because there are no local changes','tags'=>array('<b>'),'mod'=>'coreupdater'),$_smarty_tpl ) );?>

      </p>
    </div>
  <?php }?>

  <?php if ($_smarty_tpl->tpl_vars['changeSet']->value['change']) {?>
    <p>
      <h4><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Changed files','mod'=>'coreupdater'),$_smarty_tpl ) );?>
</h4>
      <ul class="file-list">
        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['changeSet']->value['change'], 'modified', false, 'file');
$_smarty_tpl->tpl_vars['modified']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['file']->value => $_smarty_tpl->tpl_vars['modified']->value) {
$_smarty_tpl->tpl_vars['modified']->do_else = false;
?>
          <li>
            <code><?php echo htmlspecialchars((string)$_smarty_tpl->tpl_vars['file']->value, ENT_QUOTES, 'UTF-8', true);?>
</code>
            <?php if ($_smarty_tpl->tpl_vars['modified']->value) {?>
              <span class="badge badge-warning"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'modified','mod'=>'coreupdater'),$_smarty_tpl ) );?>
</span>
            <?php }?>
          </li>
        <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
      </ul>
    </p>
  <?php }?>

  <?php if ($_smarty_tpl->tpl_vars['changeSet']->value['add']) {?>
    <p>
      <h4><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Missing files','mod'=>'coreupdater'),$_smarty_tpl ) );?>
</h4>
      <ul class="file-list">
        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['changeSet']->value['add'], 'modified', false, 'file');
$_smarty_tpl->tpl_vars['modified']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['file']->value => $_smarty_tpl->tpl_vars['modified']->value) {
$_smarty_tpl->tpl_vars['modified']->do_else = false;
?>
          <li>
            <code><?php echo htmlspecialchars((string)$_smarty_tpl->tpl_vars['file']->value, ENT_QUOTES, 'UTF-8', true);?>
</code>
            <?php if ($_smarty_tpl->tpl_vars['modified']->value) {?>
              <span class="badge badge-warning"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'modified','mod'=>'coreupdater'),$_smarty_tpl ) );?>
</span>
            <?php }?>
          </li>
        <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
      </ul>
    </p>
  <?php }?>

  <?php if ($_smarty_tpl->tpl_vars['changeSet']->value['remove']) {?>
    <p>
      <h4><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Extra files','mod'=>'coreupdater'),$_smarty_tpl ) );?>
</h4>
      <ul class="file-list">
        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['changeSet']->value['remove'], 'modified', false, 'file');
$_smarty_tpl->tpl_vars['modified']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['file']->value => $_smarty_tpl->tpl_vars['modified']->value) {
$_smarty_tpl->tpl_vars['modified']->do_else = false;
?>
          <li>
            <code><?php echo htmlspecialchars((string)$_smarty_tpl->tpl_vars['file']->value, ENT_QUOTES, 'UTF-8', true);?>
</code>
            <?php if ($_smarty_tpl->tpl_vars['modified']->value) {?>
              <span class="badge badge-warning"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'modified','mod'=>'coreupdater'),$_smarty_tpl ) );?>
</span>
            <?php }?>
          </li>
        <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
      </ul>
    </p>
  <?php }?>

  <?php if ($_smarty_tpl->tpl_vars['edits']->value || $_smarty_tpl->tpl_vars['changes']->value) {?>
    <div class="panel-footer">
      <button id="update-button" type="submit" class="btn btn-default pull-right" name="UPDATE">
        <i class="process-icon-upload"></i>
        <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Update store','mod'=>'coreupdater'),$_smarty_tpl ) );?>

      </button>
    </div>
    <?php echo '<script'; ?>
 type="application/javascript">
      $("#update-button").click(function() {
        coreUpdater.update("<?php echo $_smarty_tpl->tpl_vars['compareProcessId']->value;?>
");
      });
    <?php echo '</script'; ?>
>
  <?php }?>
</div>
<?php }
}
