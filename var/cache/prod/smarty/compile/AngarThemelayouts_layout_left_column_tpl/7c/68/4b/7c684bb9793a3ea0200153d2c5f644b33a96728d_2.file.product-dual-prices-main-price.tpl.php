<?php
/* Smarty version 4.3.4, created on 2025-12-05 14:58:26
  from '/home/zerobat/www/themes/AngarTheme/templates/catalog/_partials/product_dual_prices/product-dual-prices-main-price.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.4',
  'unifunc' => 'content_6932e502924780_82132353',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '7c684bb9793a3ea0200153d2c5f644b33a96728d' => 
    array (
      0 => '/home/zerobat/www/themes/AngarTheme/templates/catalog/_partials/product_dual_prices/product-dual-prices-main-price.tpl',
      1 => 1764937860,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6932e502924780_82132353 (Smarty_Internal_Template $_smarty_tpl) {
if ((isset($_smarty_tpl->tpl_vars['enableconfig']->value)) && (isset($_smarty_tpl->tpl_vars['css75']->value)) && ($_smarty_tpl->tpl_vars['enableconfig']->value == 1 || $_smarty_tpl->tpl_vars['css75']->value == "product_price_default")) {?>
	<div class="product_price_default">
		<span class="price" content="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['product']->value['price_amount'], ENT_QUOTES, 'UTF-8');?>
"><?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['product']->value['price'], ENT_QUOTES, 'UTF-8');?>
</span>

		<?php if ($_smarty_tpl->tpl_vars['product']->value['has_discount']) {?>
			<?php if ($_smarty_tpl->tpl_vars['product']->value['discount_type'] === 'percentage') {?>
			  <span class="discount discount-percentage product_price_default"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Save %percentage%','d'=>'Shop.Theme.Catalog','sprintf'=>array('%percentage%'=>$_smarty_tpl->tpl_vars['product']->value['discount_percentage_absolute'])),$_smarty_tpl ) );?>
</span>
			<?php } else { ?>
			  <span class="discount discount-amount product_price_default">
				  <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Save %amount%','d'=>'Shop.Theme.Catalog','sprintf'=>array('%amount%'=>$_smarty_tpl->tpl_vars['product']->value['discount_to_display'])),$_smarty_tpl ) );?>

			  </span>
			<?php }?>
		<?php }?>
	</div>
<?php }?>

<?php if ((defined('_PS_VERSION_') ? constant('_PS_VERSION_') : null) >= '1.7.7.0') {?>

	<?php if ((isset($_smarty_tpl->tpl_vars['enableconfig']->value)) && (isset($_smarty_tpl->tpl_vars['css75']->value)) && ($_smarty_tpl->tpl_vars['enableconfig']->value == 1 || $_smarty_tpl->tpl_vars['css75']->value == "product_price_incl_excl")) {?>
		<span class="price product_price_incl_excl"><?php echo htmlspecialchars((string) Context::getContext()->getCurrentLocale()->formatPrice($_smarty_tpl->tpl_vars['product']->value['price_tax_exc']+($_smarty_tpl->tpl_vars['product']->value['price_tax_exc']*($_smarty_tpl->tpl_vars['product']->value['rate']/100)),Context::getContext()->currency->iso_code), ENT_QUOTES, 'UTF-8');?>
</span>
	<?php }?>

	<?php if ((isset($_smarty_tpl->tpl_vars['enableconfig']->value)) && (isset($_smarty_tpl->tpl_vars['css75']->value)) && ($_smarty_tpl->tpl_vars['enableconfig']->value == 1 || $_smarty_tpl->tpl_vars['css75']->value == "product_price_excl_incl")) {?>
		<span class="price product_price_excl_incl"><?php echo htmlspecialchars((string) Context::getContext()->getCurrentLocale()->formatPrice($_smarty_tpl->tpl_vars['product']->value['price_tax_exc'],Context::getContext()->currency->iso_code), ENT_QUOTES, 'UTF-8');?>
</span>
	<?php }?>

	<?php if ((isset($_smarty_tpl->tpl_vars['enableconfig']->value)) && (isset($_smarty_tpl->tpl_vars['css75']->value)) && ($_smarty_tpl->tpl_vars['enableconfig']->value == 1 || $_smarty_tpl->tpl_vars['css75']->value == "product_price_incl_tax_excl")) {?>
		<span class="price product_price_incl_tax_excl"><?php echo htmlspecialchars((string) Context::getContext()->getCurrentLocale()->formatPrice($_smarty_tpl->tpl_vars['product']->value['price_tax_exc']+($_smarty_tpl->tpl_vars['product']->value['price_tax_exc']*($_smarty_tpl->tpl_vars['product']->value['rate']/100)),Context::getContext()->currency->iso_code), ENT_QUOTES, 'UTF-8');?>
</span>
	<?php }?>

	<?php if ((isset($_smarty_tpl->tpl_vars['enableconfig']->value)) && (isset($_smarty_tpl->tpl_vars['css75']->value)) && ($_smarty_tpl->tpl_vars['enableconfig']->value == 1 || $_smarty_tpl->tpl_vars['css75']->value == "product_price_excl_tax_incl")) {?>
		<span class="price product_price_excl_tax_incl"><?php echo htmlspecialchars((string) Context::getContext()->getCurrentLocale()->formatPrice($_smarty_tpl->tpl_vars['product']->value['price_tax_exc'],Context::getContext()->currency->iso_code), ENT_QUOTES, 'UTF-8');?>
</span>
	<?php }?>

<?php } else { ?>

	<?php if ((isset($_smarty_tpl->tpl_vars['enableconfig']->value)) && (isset($_smarty_tpl->tpl_vars['css75']->value)) && ($_smarty_tpl->tpl_vars['enableconfig']->value == 1 || $_smarty_tpl->tpl_vars['css75']->value == "product_price_incl_excl")) {?>
		<span class="price product_price_incl_excl"><?php echo htmlspecialchars((string) Tools::displayPrice($_smarty_tpl->tpl_vars['product']->value['price_tax_exc']+($_smarty_tpl->tpl_vars['product']->value['price_tax_exc']*($_smarty_tpl->tpl_vars['product']->value['rate']/100))), ENT_QUOTES, 'UTF-8');?>
</span>
	<?php }?>

	<?php if ((isset($_smarty_tpl->tpl_vars['enableconfig']->value)) && (isset($_smarty_tpl->tpl_vars['css75']->value)) && ($_smarty_tpl->tpl_vars['enableconfig']->value == 1 || $_smarty_tpl->tpl_vars['css75']->value == "product_price_excl_incl")) {?>
		<span class="price product_price_excl_incl"><?php echo htmlspecialchars((string) Tools::displayPrice($_smarty_tpl->tpl_vars['product']->value['price_tax_exc']), ENT_QUOTES, 'UTF-8');?>
</span>
	<?php }?>

	<?php if ((isset($_smarty_tpl->tpl_vars['enableconfig']->value)) && (isset($_smarty_tpl->tpl_vars['css75']->value)) && ($_smarty_tpl->tpl_vars['enableconfig']->value == 1 || $_smarty_tpl->tpl_vars['css75']->value == "product_price_incl_tax_excl")) {?>
		<span class="price product_price_incl_tax_excl"><?php echo htmlspecialchars((string) Tools::displayPrice($_smarty_tpl->tpl_vars['product']->value['price_tax_exc']+($_smarty_tpl->tpl_vars['product']->value['price_tax_exc']*($_smarty_tpl->tpl_vars['product']->value['rate']/100))), ENT_QUOTES, 'UTF-8');?>
</span>
	<?php }?>

	<?php if ((isset($_smarty_tpl->tpl_vars['enableconfig']->value)) && (isset($_smarty_tpl->tpl_vars['css75']->value)) && ($_smarty_tpl->tpl_vars['enableconfig']->value == 1 || $_smarty_tpl->tpl_vars['css75']->value == "product_price_excl_tax_incl")) {?>
		<span class="price product_price_excl_tax_incl"><?php echo htmlspecialchars((string) Tools::displayPrice($_smarty_tpl->tpl_vars['product']->value['price_tax_exc']), ENT_QUOTES, 'UTF-8');?>
</span>
	<?php }?>

<?php }
}
}
