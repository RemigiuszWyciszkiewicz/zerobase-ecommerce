<?php
/* Smarty version 4.3.4, created on 2025-12-05 14:44:06
  from '/home/zerobat/www/themes/AngarTheme/templates/catalog/_partials/category-footer.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.4',
  'unifunc' => 'content_6932e1a6172dd7_88802120',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'fe4bb8d017d1f27876ccd84574541136dd33672b' => 
    array (
      0 => '/home/zerobat/www/themes/AngarTheme/templates/catalog/_partials/category-footer.tpl',
      1 => 1764937860,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6932e1a6172dd7_88802120 (Smarty_Internal_Template $_smarty_tpl) {
if ((defined('_PS_VERSION_') ? constant('_PS_VERSION_') : null) >= '8.0') {?>
<div id="js-product-list-footer">
    <?php if ((isset($_smarty_tpl->tpl_vars['category']->value)) && $_smarty_tpl->tpl_vars['category']->value['additional_description'] && $_smarty_tpl->tpl_vars['listing']->value['pagination']['items_shown_from'] == 1) {?>
		<div class="category-additional-description">
			<?php echo $_smarty_tpl->tpl_vars['category']->value['additional_description'];?>

		</div>
    <?php }?>
</div>
<?php }
}
}
