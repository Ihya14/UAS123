<?php
/* Smarty version 4.2.1, created on 2023-01-12 22:37:40
  from 'D:\xampp\htdocs\shopw\themes\niara\modules\blockcategories\blockcategories.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.2.1',
  'unifunc' => 'content_63c01b34040248_75350673',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'abd2c0164a6ffc85dc74424820571c9b0715987f' => 
    array (
      0 => 'D:\\xampp\\htdocs\\shopw\\themes\\niara\\modules\\blockcategories\\blockcategories.tpl',
      1 => 1664191549,
      2 => 'file',
    ),
    'c61b15128c7c1d38a399cdc2fed24c4238bdd79e' => 
    array (
      0 => 'D:\\xampp\\htdocs\\shopw\\themes\\niara\\modules\\blockcategories\\list_group_item.tpl',
      1 => 1664191549,
      2 => 'file',
    ),
  ),
  'cache_lifetime' => 31536000,
),true)) {
function content_63c01b34040248_75350673 (Smarty_Internal_Template $_smarty_tpl) {
?>    <section id="blockcategories" class="blockcategories block">
        <h2 class="title_block section-title-column">
                            Kategori
                    </h2>
        <nav>
            <div class="list-group block_content">
                                      <a class="list-group-item ilvl-1" href="http://localhost/shopw/id/minuman">
    <span>Minuman</span>
  </a>
                                      <a class="list-group-item ilvl-1" href="http://localhost/shopw/id/snack">
    <span>Snack</span>
  </a>
                            </div>
        </nav>
    </section>


    <script type="text/javascript">
        $(function () {

            $('.blockcategories').each(function () {
                var $collapse = $(this).find('.collapse');
                var $triggers = $(this).find('.btn-toggle');

                $collapse.on('show.bs.collapse', function () {
                    var $target = $(this);
                    var $targetAndParents = $target.parents().filter('.collapse').add($target);

                    // Collapse all other menus which are not in the current tree
                    $collapse.filter('.collapse.in').not($targetAndParents).collapse('hide');

                    // Add 'active' class to triggers which show this element
                    $triggers.filter('[href="#' + $target.prop('id') + '"],' +
                            '[data-target="#' + $target.prop('id') + '"]').parent().addClass('active');
                });

                $collapse.on('hide.bs.collapse', function (e) {
                    // Fixes event being handled twice (event is trigger twice). WTF? @bootstrap, @jquery
                    if (e.handled) {
                        return;
                    } else {
                        e.handled = true;
                    }

                    // Remove 'active' class from triggers which show this collapsed element
                    $triggers.filter('[href="#' + $(this).prop('id') + '"],' +
                            '[data-target="#' + $(this).prop('id') + '"]').parent().removeClass('active');
                });

                // JavaScript workaround for expanding the active category tree line.
                // Preferably you should use an override and return expanded tree from the server side
                // @see themes/niara/modules/blockcategories/list_group_item.tpl
                var $activeMenuLink = $('.list-group-item.current');
                // Collect and expand all expandable parent nodes (going up)
                $activeMenuLink.parents('.collapse').add(
                        // Open up the current node also (if it's a tree)
                        $activeMenuLink.parent().next()
                ).collapse('show');

            });

        });
    </script>

<?php }
}
