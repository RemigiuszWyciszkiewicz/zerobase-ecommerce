<?php
/* Smarty version 4.3.4, created on 2025-12-05 13:59:17
  from '/home/zerobat/www/themes/AngarTheme/templates/layouts/layout-left-column.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.4',
  'unifunc' => 'content_6932d7259e7e07_23608193',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'fd872ae3af790fa9c0666eb3ddb104721922ec02' => 
    array (
      0 => '/home/zerobat/www/themes/AngarTheme/templates/layouts/layout-left-column.tpl',
      1 => 1764937860,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6932d7259e7e07_23608193 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>




<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_2388282656932d7259e4863_63735571', 'right_column');
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1584244256932d7259e4be0_07772365', 'content_wrapper');
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, 'layouts/layout-both-columns.tpl');
}
/* {block 'right_column'} */
class Block_2388282656932d7259e4863_63735571 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'right_column' => 
  array (
    0 => 'Block_2388282656932d7259e4863_63735571',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block 'right_column'} */
/* {block 'content'} */
class Block_7121063296932d7259e7730_28210622 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

      <p>Hello world! This is HTML5 Boilerplate.</p>
    <?php
}
}
/* {/block 'content'} */
/* {block 'content_wrapper'} */
class Block_1584244256932d7259e4be0_07772365 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content_wrapper' => 
  array (
    0 => 'Block_1584244256932d7259e4be0_07772365',
  ),
  'content' => 
  array (
    0 => 'Block_7121063296932d7259e7730_28210622',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

<?php if (($_smarty_tpl->tpl_vars['page']->value['page_name'] == 'index' && !empty($_smarty_tpl->tpl_vars['css87']->value) && $_smarty_tpl->tpl_vars['css87']->value == 'lc_index_hide_yes') || (($_smarty_tpl->tpl_vars['page']->value['page_name'] == 'category' || $_smarty_tpl->tpl_vars['page']->value['page_name'] == 'prices-drop' || $_smarty_tpl->tpl_vars['page']->value['page_name'] == 'new-products' || $_smarty_tpl->tpl_vars['page']->value['page_name'] == 'best-sales') && !empty($_smarty_tpl->tpl_vars['css88']->value) && $_smarty_tpl->tpl_vars['css88']->value == 'lc_category_hide_yes') || ($_smarty_tpl->tpl_vars['page']->value['page_name'] == 'product' && !empty($_smarty_tpl->tpl_vars['css89']->value) && $_smarty_tpl->tpl_vars['css89']->value == 'lc_product_hide_yes') || ($_smarty_tpl->tpl_vars['page']->value['page_name'] == 'cms' && !empty($_smarty_tpl->tpl_vars['css90']->value) && $_smarty_tpl->tpl_vars['css90']->value == 'lc_cms_hide_yes')) {?>
	<div id="content-wrapper" class="left-column col-xs-12 col-sm-12 col-md-12">
<?php } else { ?>
	<div id="content-wrapper" class="left-column col-xs-12 col-sm-8 col-md-9">
<?php }?>
    <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>"displayContentWrapperTop"),$_smarty_tpl ) );?>

    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_7121063296932d7259e7730_28210622', 'content', $this->tplIndex);
?>

    <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>"displayContentWrapperBottom"),$_smarty_tpl ) );?>

  </div>
<?php
}
}
/* {/block 'content_wrapper'} */
}
