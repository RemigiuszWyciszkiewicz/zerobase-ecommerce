<?php
/* Smarty version 4.3.4, created on 2025-12-05 14:58:26
  from '/home/zerobat/www/themes/AngarTheme/templates/catalog/_partials/product_dual_prices/product-dual-prices-small-price.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.4',
  'unifunc' => 'content_6932e50294f327_19921269',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'e9c410a3e9bdeb830471d6498145e568c9cd02ef' => 
    array (
      0 => '/home/zerobat/www/themes/AngarTheme/templates/catalog/_partials/product_dual_prices/product-dual-prices-small-price.tpl',
      1 => 1764937860,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6932e50294f327_19921269 (Smarty_Internal_Template $_smarty_tpl) {
if ((defined('_PS_VERSION_') ? constant('_PS_VERSION_') : null) >= '1.7.7.0') {?>

	<div class="product_additional_price">
		<?php if ((isset($_smarty_tpl->tpl_vars['enableconfig']->value)) && (isset($_smarty_tpl->tpl_vars['css75']->value)) && ($_smarty_tpl->tpl_vars['enableconfig']->value == 1 || $_smarty_tpl->tpl_vars['css75']->value == "product_price_incl_excl")) {?>
			<div class="product_price_incl_excl">
				<div class="product_price_line">
				  <?php if ($_smarty_tpl->tpl_vars['product']->value['has_discount']) {?><span class="regular-price"><?php echo htmlspecialchars((string) Context::getContext()->getCurrentLocale()->formatPrice($_smarty_tpl->tpl_vars['product']->value['price_without_reduction_without_tax'],Context::getContext()->currency->iso_code), ENT_QUOTES, 'UTF-8');?>
</span><?php }?>
				  <span class="price_small"><?php echo htmlspecialchars((string) Context::getContext()->getCurrentLocale()->formatPrice($_smarty_tpl->tpl_vars['product']->value['price_tax_exc'],Context::getContext()->currency->iso_code), ENT_QUOTES, 'UTF-8');?>
</span>
				  <span class="tax_label"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Tax excluded','d'=>'Shop.Theme.Checkout'),$_smarty_tpl ) );?>
</span>
				</div>
			</div>
		<?php }?>

		<?php if ((isset($_smarty_tpl->tpl_vars['enableconfig']->value)) && (isset($_smarty_tpl->tpl_vars['css75']->value)) && ($_smarty_tpl->tpl_vars['enableconfig']->value == 1 || $_smarty_tpl->tpl_vars['css75']->value == "product_price_excl_incl")) {?>
			<div class="product_price_excl_incl">
				<div class="product_price_line">
				  <?php if ($_smarty_tpl->tpl_vars['product']->value['has_discount']) {?><span class="regular-price"><?php echo htmlspecialchars((string) Context::getContext()->getCurrentLocale()->formatPrice($_smarty_tpl->tpl_vars['product']->value['price_without_reduction_without_tax']+($_smarty_tpl->tpl_vars['product']->value['price_without_reduction_without_tax']*($_smarty_tpl->tpl_vars['product']->value['rate']/100)),Context::getContext()->currency->iso_code), ENT_QUOTES, 'UTF-8');?>
</span><?php }?>
				  <span class="price_small"><?php echo htmlspecialchars((string) Context::getContext()->getCurrentLocale()->formatPrice($_smarty_tpl->tpl_vars['product']->value['price_tax_exc']+($_smarty_tpl->tpl_vars['product']->value['price_tax_exc']*($_smarty_tpl->tpl_vars['product']->value['rate']/100)),Context::getContext()->currency->iso_code), ENT_QUOTES, 'UTF-8');?>
</span>
				  <span class="tax_label"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Tax included','d'=>'Shop.Theme.Checkout'),$_smarty_tpl ) );?>
</span>
				</div>
			</div>
		<?php }?>

		<?php if ((isset($_smarty_tpl->tpl_vars['enableconfig']->value)) && (isset($_smarty_tpl->tpl_vars['css75']->value)) && ($_smarty_tpl->tpl_vars['enableconfig']->value == 1 || $_smarty_tpl->tpl_vars['css75']->value == "product_price_incl_tax_excl")) {?>
			<div class="product_price_incl_tax_excl">
				<div class="product_price_line">
				  <?php if ($_smarty_tpl->tpl_vars['product']->value['has_discount']) {?><span class="regular-price"><?php echo htmlspecialchars((string) Context::getContext()->getCurrentLocale()->formatPrice($_smarty_tpl->tpl_vars['product']->value['price_without_reduction_without_tax']*($_smarty_tpl->tpl_vars['product']->value['rate']/100),Context::getContext()->currency->iso_code), ENT_QUOTES, 'UTF-8');?>
</span><?php }?>
				  <span class="price_small"><?php echo htmlspecialchars((string) Context::getContext()->getCurrentLocale()->formatPrice($_smarty_tpl->tpl_vars['product']->value['price_tax_exc']*($_smarty_tpl->tpl_vars['product']->value['rate']/100),Context::getContext()->currency->iso_code), ENT_QUOTES, 'UTF-8');?>
</span>
				  <span class="tax_label"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Tax','d'=>'Shop.Theme.Checkout'),$_smarty_tpl ) );?>
</span>
				</div>

				<div class="product_price_line">
				  <?php if ($_smarty_tpl->tpl_vars['product']->value['has_discount']) {?><span class="regular-price"><?php echo htmlspecialchars((string) Context::getContext()->getCurrentLocale()->formatPrice($_smarty_tpl->tpl_vars['product']->value['price_without_reduction_without_tax'],Context::getContext()->currency->iso_code), ENT_QUOTES, 'UTF-8');?>
</span><?php }?>
				  <span class="price_small"><?php echo htmlspecialchars((string) Context::getContext()->getCurrentLocale()->formatPrice($_smarty_tpl->tpl_vars['product']->value['price_tax_exc'],Context::getContext()->currency->iso_code), ENT_QUOTES, 'UTF-8');?>
</span>
				  <span class="tax_label"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Tax excluded','d'=>'Shop.Theme.Checkout'),$_smarty_tpl ) );?>
</span>
				</div>
			</div>
		<?php }?>

		<?php if ((isset($_smarty_tpl->tpl_vars['enableconfig']->value)) && (isset($_smarty_tpl->tpl_vars['css75']->value)) && ($_smarty_tpl->tpl_vars['enableconfig']->value == 1 || $_smarty_tpl->tpl_vars['css75']->value == "product_price_excl_tax_incl")) {?>
			<div class="product_price_excl_tax_incl">
				<div class="product_price_line">
				  <?php if ($_smarty_tpl->tpl_vars['product']->value['has_discount']) {?><span class="regular-price"><?php echo htmlspecialchars((string) Context::getContext()->getCurrentLocale()->formatPrice($_smarty_tpl->tpl_vars['product']->value['price_without_reduction_without_tax']*($_smarty_tpl->tpl_vars['product']->value['rate']/100),Context::getContext()->currency->iso_code), ENT_QUOTES, 'UTF-8');?>
</span><?php }?>
				  <span class="price_small"><?php echo htmlspecialchars((string) Context::getContext()->getCurrentLocale()->formatPrice($_smarty_tpl->tpl_vars['product']->value['price_tax_exc']*($_smarty_tpl->tpl_vars['product']->value['rate']/100),Context::getContext()->currency->iso_code), ENT_QUOTES, 'UTF-8');?>
</span>
				  <span class="tax_label"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Tax','d'=>'Shop.Theme.Checkout'),$_smarty_tpl ) );?>
</span>
				</div>

				<div class="product_price_line">
				  <?php if ($_smarty_tpl->tpl_vars['product']->value['has_discount']) {?><span class="regular-price"><?php echo htmlspecialchars((string) Context::getContext()->getCurrentLocale()->formatPrice($_smarty_tpl->tpl_vars['product']->value['price_without_reduction_without_tax']+($_smarty_tpl->tpl_vars['product']->value['price_without_reduction_without_tax']*($_smarty_tpl->tpl_vars['product']->value['rate']/100)),Context::getContext()->currency->iso_code), ENT_QUOTES, 'UTF-8');?>
</span><?php }?>
				  <span class="price_small"><?php echo htmlspecialchars((string) Context::getContext()->getCurrentLocale()->formatPrice($_smarty_tpl->tpl_vars['product']->value['price_tax_exc']+($_smarty_tpl->tpl_vars['product']->value['price_tax_exc']*($_smarty_tpl->tpl_vars['product']->value['rate']/100)),Context::getContext()->currency->iso_code), ENT_QUOTES, 'UTF-8');?>
</span>
				  <span class="tax_label"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Tax included','d'=>'Shop.Theme.Checkout'),$_smarty_tpl ) );?>
</span>
				</div>
			</div>
		<?php }?>
		<div class="clearfix"></div>
	</div>

<?php } else { ?>

	<div class="product_additional_price">
		<?php if ((isset($_smarty_tpl->tpl_vars['enableconfig']->value)) && (isset($_smarty_tpl->tpl_vars['css75']->value)) && ($_smarty_tpl->tpl_vars['enableconfig']->value == 1 || $_smarty_tpl->tpl_vars['css75']->value == "product_price_incl_excl")) {?>
			<div class="product_price_incl_excl">
				<div class="product_price_line">
				  <span class="price_small"><?php echo htmlspecialchars((string) Tools::displayPrice($_smarty_tpl->tpl_vars['product']->value['price_tax_exc']), ENT_QUOTES, 'UTF-8');?>
</span>
				  <span class="tax_label"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Tax excluded','d'=>'Shop.Theme.Checkout'),$_smarty_tpl ) );?>
</span>
				</div>
			</div>
		<?php }?>

		<?php if ((isset($_smarty_tpl->tpl_vars['enableconfig']->value)) && (isset($_smarty_tpl->tpl_vars['css75']->value)) && ($_smarty_tpl->tpl_vars['enableconfig']->value == 1 || $_smarty_tpl->tpl_vars['css75']->value == "product_price_excl_incl")) {?>
			<div class="product_price_excl_incl">
				<div class="product_price_line">
				  <span class="price_small"><?php echo htmlspecialchars((string) Tools::displayPrice($_smarty_tpl->tpl_vars['product']->value['price_tax_exc']+($_smarty_tpl->tpl_vars['product']->value['price_tax_exc']*($_smarty_tpl->tpl_vars['product']->value['rate']/100))), ENT_QUOTES, 'UTF-8');?>
</span>
				  <span class="tax_label"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Tax included','d'=>'Shop.Theme.Checkout'),$_smarty_tpl ) );?>
</span>
				</div>
			</div>
		<?php }?>

		<?php if ((isset($_smarty_tpl->tpl_vars['enableconfig']->value)) && (isset($_smarty_tpl->tpl_vars['css75']->value)) && ($_smarty_tpl->tpl_vars['enableconfig']->value == 1 || $_smarty_tpl->tpl_vars['css75']->value == "product_price_incl_tax_excl")) {?>
			<div class="product_price_incl_tax_excl">
				<div class="product_price_line">
				  <span class="price_small"><?php echo htmlspecialchars((string) Tools::displayPrice($_smarty_tpl->tpl_vars['product']->value['price_tax_exc']*($_smarty_tpl->tpl_vars['product']->value['rate']/100)), ENT_QUOTES, 'UTF-8');?>
</span>
				  <span class="tax_label"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Tax','d'=>'Shop.Theme.Checkout'),$_smarty_tpl ) );?>
</span>
				</div>

				<div class="product_price_line">
				  <span class="price_small"><?php echo htmlspecialchars((string) Tools::displayPrice($_smarty_tpl->tpl_vars['product']->value['price_tax_exc']), ENT_QUOTES, 'UTF-8');?>
</span>
				  <span class="tax_label"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Tax excluded','d'=>'Shop.Theme.Checkout'),$_smarty_tpl ) );?>
</span>
				</div>
			</div>
		<?php }?>

		<?php if ((isset($_smarty_tpl->tpl_vars['enableconfig']->value)) && (isset($_smarty_tpl->tpl_vars['css75']->value)) && ($_smarty_tpl->tpl_vars['enableconfig']->value == 1 || $_smarty_tpl->tpl_vars['css75']->value == "product_price_excl_tax_incl")) {?>
			<div class="product_price_excl_tax_incl">
				<div class="product_price_line">
				  <span class="price_small"><?php echo htmlspecialchars((string) Tools::displayPrice($_smarty_tpl->tpl_vars['product']->value['price_tax_exc']*($_smarty_tpl->tpl_vars['product']->value['rate']/100)), ENT_QUOTES, 'UTF-8');?>
</span>
				  <span class="tax_label"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Tax','d'=>'Shop.Theme.Checkout'),$_smarty_tpl ) );?>
</span>
				</div>

				<div class="product_price_line">
				  <span class="price_small"><?php echo htmlspecialchars((string) Tools::displayPrice($_smarty_tpl->tpl_vars['product']->value['price_tax_exc']+($_smarty_tpl->tpl_vars['product']->value['price_tax_exc']*($_smarty_tpl->tpl_vars['product']->value['rate']/100))), ENT_QUOTES, 'UTF-8');?>
</span>
				  <span class="tax_label"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Tax included','d'=>'Shop.Theme.Checkout'),$_smarty_tpl ) );?>
</span>
				</div>
			</div>
		<?php }?>
		<div class="clearfix"></div>
	</div>

<?php }
}
}
