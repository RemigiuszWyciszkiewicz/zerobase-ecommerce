<?php
/* Smarty version 4.3.4, created on 2025-12-05 14:58:26
  from '/home/zerobat/www/themes/AngarTheme/templates/catalog/_partials/product_dual_prices/product-dual-prices-tax-label.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.4',
  'unifunc' => 'content_6932e502933218_26623699',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '79c9eeaa7dd5946243a416fa1827dbf093a7240f' => 
    array (
      0 => '/home/zerobat/www/themes/AngarTheme/templates/catalog/_partials/product_dual_prices/product-dual-prices-tax-label.tpl',
      1 => 1764937860,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6932e502933218_26623699 (Smarty_Internal_Template $_smarty_tpl) {
if ((isset($_smarty_tpl->tpl_vars['enableconfig']->value)) && (isset($_smarty_tpl->tpl_vars['css75']->value)) && ($_smarty_tpl->tpl_vars['enableconfig']->value == 1 || $_smarty_tpl->tpl_vars['css75']->value == "product_price_default")) {?>
	<?php if ($_smarty_tpl->tpl_vars['configuration']->value['display_taxes_label']) {?>
		<span class="tax_label product_price_default"><?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['product']->value['labels']['tax_long'], ENT_QUOTES, 'UTF-8');?>
</span>
	<?php }
}?>

<?php if ((isset($_smarty_tpl->tpl_vars['enableconfig']->value)) && (isset($_smarty_tpl->tpl_vars['css75']->value)) && ($_smarty_tpl->tpl_vars['enableconfig']->value == 1 || $_smarty_tpl->tpl_vars['css75']->value == "product_price_incl_excl")) {?>
	<span class="tax_label product_price_incl_excl"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Tax included','d'=>'Shop.Theme.Checkout'),$_smarty_tpl ) );?>
</span>
<?php }?>

<?php if ((isset($_smarty_tpl->tpl_vars['enableconfig']->value)) && (isset($_smarty_tpl->tpl_vars['css75']->value)) && ($_smarty_tpl->tpl_vars['enableconfig']->value == 1 || $_smarty_tpl->tpl_vars['css75']->value == "product_price_excl_incl")) {?>
	<span class="tax_label product_price_excl_incl"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Tax excluded','d'=>'Shop.Theme.Checkout'),$_smarty_tpl ) );?>
</span>
<?php }?>

<?php if ((isset($_smarty_tpl->tpl_vars['enableconfig']->value)) && (isset($_smarty_tpl->tpl_vars['css75']->value)) && ($_smarty_tpl->tpl_vars['enableconfig']->value == 1 || $_smarty_tpl->tpl_vars['css75']->value == "product_price_incl_tax_excl")) {?>
	<span class="tax_label product_price_incl_tax_excl"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Tax included','d'=>'Shop.Theme.Checkout'),$_smarty_tpl ) );?>
</span>
<?php }?>

<?php if ((isset($_smarty_tpl->tpl_vars['enableconfig']->value)) && (isset($_smarty_tpl->tpl_vars['css75']->value)) && ($_smarty_tpl->tpl_vars['enableconfig']->value == 1 || $_smarty_tpl->tpl_vars['css75']->value == "product_price_excl_tax_incl")) {?>
	<span class="tax_label product_price_excl_tax_incl"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Tax excluded','d'=>'Shop.Theme.Checkout'),$_smarty_tpl ) );?>
</span>
<?php }
}
}
