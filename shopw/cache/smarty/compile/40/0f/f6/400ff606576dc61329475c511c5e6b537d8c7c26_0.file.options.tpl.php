<?php
/* Smarty version 4.2.1, created on 2023-01-12 22:28:03
  from 'D:\xampp\htdocs\shopw\admin622ozp8ob\themes\default\template\controllers\maintenance\helpers\options\options.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.2.1',
  'unifunc' => 'content_63c018f3198d87_62556849',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '400ff606576dc61329475c511c5e6b537d8c7c26' => 
    array (
      0 => 'D:\\xampp\\htdocs\\shopw\\admin622ozp8ob\\themes\\default\\template\\controllers\\maintenance\\helpers\\options\\options.tpl',
      1 => 1668409880,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_63c018f3198d87_62556849 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_80897035763c018f3175933_19065721', "input");
$_smarty_tpl->inheritance->endChild($_smarty_tpl, "helpers/options/options.tpl");
}
/* {block "input"} */
class Block_80897035763c018f3175933_19065721 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'input' => 
  array (
    0 => 'Block_80897035763c018f3175933_19065721',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <?php if ($_smarty_tpl->tpl_vars['field']->value['type'] == 'maintenance_ip') {?>
        <?php echo '<script'; ?>
 type="text/javascript">
            var remoteIp = "<?php echo $_smarty_tpl->tpl_vars['field']->value['remoteIp'];?>
";

            function uniqueAddresses(value) {
                return value
                    .split(/,/)
                    .map(function (str) {
                        return str.trim();
                    })
                    .sort()
                    .filter(function (item, pos, ary) {
                        return !pos || item !== ary[pos - 1];
                    })
                    .join(',');
            }

            function addRemoteAddr() {
                var input = $('input[name=PS_MAINTENANCE_IP]');
                var value = input.attr('value').trim()
                if (value) {
                    input.attr('value', uniqueAddresses(value + ',' + remoteIp));
                } else {
                    input.attr('value', remoteIp);
                }
            }

            function removeRemoteAddr() {
                var input = $('input[name=PS_MAINTENANCE_IP]');
                var value = input.attr('value').trim();
                input.attr('value', uniqueAddresses(value
                    .split(/,/)
                    .filter(function (item) {
                        return item.trim() !== remoteIp;
                    })
                    .join(',')
                ));
            }
        <?php echo '</script'; ?>
>
        <div class="col-lg-9">
            <div class="row">
                <div class="col-lg-8">
                    <input type="text"<?php if ((isset($_smarty_tpl->tpl_vars['field']->value['id']))) {?> id="<?php echo $_smarty_tpl->tpl_vars['field']->value['id'];?>
"<?php }?>
                           size="<?php if ((isset($_smarty_tpl->tpl_vars['field']->value['size']))) {
echo intval($_smarty_tpl->tpl_vars['field']->value['size']);
} else { ?>5<?php }?>" name="<?php echo $_smarty_tpl->tpl_vars['key']->value;?>
"
                           value="<?php echo htmlspecialchars((string)$_smarty_tpl->tpl_vars['field']->value['value'], ENT_QUOTES, 'UTF-8', true);?>
"/>
                </div>
                <div class="col-lg-4">
                    <button type="button" class="btn btn-default" onclick="addRemoteAddr();">
                        <i class="icon-plus"></i> <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Add my IP'),$_smarty_tpl ) );?>

                    </button>
                    <button type="button" class="btn btn-default" onclick="removeRemoteAddr();">
                        <i class="icon-minus"></i> <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Remove my IP'),$_smarty_tpl ) );?>

                    </button>
                </div>
            </div>
        </div>
    <?php } else { ?>
        <?php 
$_smarty_tpl->inheritance->callParent($_smarty_tpl, $this, '{$smarty.block.parent}');
?>

    <?php }
}
}
/* {/block "input"} */
}
