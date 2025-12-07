<?php
/* Smarty version 4.3.4, created on 2025-12-05 14:44:06
  from '/home/zerobat/www/themes/AngarTheme/templates/catalog/_partials/miniatures/pl-dual-prices.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.4',
  'unifunc' => 'content_6932e1a613ab13_74206205',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '25e4959a0458479d77003c37015c316af5a874ea' => 
    array (
      0 => '/home/zerobat/www/themes/AngarTheme/templates/catalog/_partials/miniatures/pl-dual-prices.tpl',
      1 => 1764937860,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6932e1a613ab13_74206205 (Smarty_Internal_Template $_smarty_tpl) {
if ((isset($_smarty_tpl->tpl_vars['enableconfig']->value)) && (isset($_smarty_tpl->tpl_vars['css74']->value)) && ($_smarty_tpl->tpl_vars['enableconfig']->value == 1 || $_smarty_tpl->tpl_vars['css74']->value == "pl_price_default")) {?>
	<div class="pl_price_default">
		<span class="price"><?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['product']->value['price'], ENT_QUOTES, 'UTF-8');?>
</span>
		<?php if ($_smarty_tpl->tpl_vars['product']->value['has_discount']) {?>
		  <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>'displayProductPriceBlock','product'=>$_smarty_tpl->tpl_vars['product']->value,'type'=>"old_price"),$_smarty_tpl ) );?>

		  <span class="regular-price"><?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['product']->value['regular_price'], ENT_QUOTES, 'UTF-8');?>
</span>
		<?php }?>
	</div>
<?php }?>

<?php if ((defined('_PS_VERSION_') ? constant('_PS_VERSION_') : null) >= '1.7.7.0') {?>

	<?php if ((isset($_smarty_tpl->tpl_vars['enableconfig']->value)) && (isset($_smarty_tpl->tpl_vars['css74']->value)) && ($_smarty_tpl->tpl_vars['enableconfig']->value == 1 || $_smarty_tpl->tpl_vars['css74']->value == "pl_price_incl_excl")) {?>
		<div class="pl_price_incl_excl">
			<div>
			  <?php if ($_smarty_tpl->tpl_vars['product']->value['has_discount']) {?><span class="regular-price"><?php echo htmlspecialchars((string) Context::getContext()->getCurrentLocale()->formatPrice($_smarty_tpl->tpl_vars['product']->value['price_without_reduction_without_tax']+($_smarty_tpl->tpl_vars['product']->value['price_without_reduction_without_tax']*($_smarty_tpl->tpl_vars['product']->value['rate']/100)),Context::getContext()->currency->iso_code), ENT_QUOTES, 'UTF-8');?>
</span><?php }?>
			  <span class="price"><?php echo htmlspecialchars((string) Context::getContext()->getCurrentLocale()->formatPrice($_smarty_tpl->tpl_vars['product']->value['price_tax_exc']+($_smarty_tpl->tpl_vars['product']->value['price_tax_exc']*($_smarty_tpl->tpl_vars['product']->value['rate']/100)),Context::getContext()->currency->iso_code), ENT_QUOTES, 'UTF-8');?>
</span>
			  <span class="tax_label"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'tax incl.','d'=>'Shop.Theme.Checkout'),$_smarty_tpl ) );?>
</span>
			</div>

			<div>
			  <?php if ($_smarty_tpl->tpl_vars['product']->value['has_discount']) {?><span class="regular-price"><?php echo htmlspecialchars((string) Context::getContext()->getCurrentLocale()->formatPrice($_smarty_tpl->tpl_vars['product']->value['price_without_reduction_without_tax'],Context::getContext()->currency->iso_code), ENT_QUOTES, 'UTF-8');?>
</span><?php }?>
			  <span class="price_small"><?php echo htmlspecialchars((string) Context::getContext()->getCurrentLocale()->formatPrice($_smarty_tpl->tpl_vars['product']->value['price_tax_exc'],Context::getContext()->currency->iso_code), ENT_QUOTES, 'UTF-8');?>
</span>
			  <span class="tax_label"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'tax excl.','d'=>'Shop.Theme.Checkout'),$_smarty_tpl ) );?>
</span>
			</div>
		</div>
	<?php }?>

	<?php if ((isset($_smarty_tpl->tpl_vars['enableconfig']->value)) && (isset($_smarty_tpl->tpl_vars['css74']->value)) && ($_smarty_tpl->tpl_vars['enableconfig']->value == 1 || $_smarty_tpl->tpl_vars['css74']->value == "pl_price_excl_incl")) {?>
		<div class="pl_price_excl_incl">
			<div>
			  <?php if ($_smarty_tpl->tpl_vars['product']->value['has_discount']) {?><span class="regular-price"><?php echo htmlspecialchars((string) Context::getContext()->getCurrentLocale()->formatPrice($_smarty_tpl->tpl_vars['product']->value['price_without_reduction_without_tax'],Context::getContext()->currency->iso_code), ENT_QUOTES, 'UTF-8');?>
</span><?php }?>
			  <span class="price"><?php echo htmlspecialchars((string) Context::getContext()->getCurrentLocale()->formatPrice($_smarty_tpl->tpl_vars['product']->value['price_tax_exc'],Context::getContext()->currency->iso_code), ENT_QUOTES, 'UTF-8');?>
</span>
			  <span class="tax_label"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'tax excl.','d'=>'Shop.Theme.Checkout'),$_smarty_tpl ) );?>
</span>
			</div>

			<div>
			  <?php if ($_smarty_tpl->tpl_vars['product']->value['has_discount']) {?><span class="regular-price"><?php echo htmlspecialchars((string) Context::getContext()->getCurrentLocale()->formatPrice($_smarty_tpl->tpl_vars['product']->value['price_without_reduction_without_tax']+($_smarty_tpl->tpl_vars['product']->value['price_without_reduction_without_tax']*($_smarty_tpl->tpl_vars['product']->value['rate']/100)),Context::getContext()->currency->iso_code), ENT_QUOTES, 'UTF-8');?>
</span><?php }?>
			  <span class="price_small"><?php echo htmlspecialchars((string) Context::getContext()->getCurrentLocale()->formatPrice($_smarty_tpl->tpl_vars['product']->value['price_tax_exc']+($_smarty_tpl->tpl_vars['product']->value['price_tax_exc']*($_smarty_tpl->tpl_vars['product']->value['rate']/100)),Context::getContext()->currency->iso_code), ENT_QUOTES, 'UTF-8');?>
</span>
			  <span class="tax_label"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'tax incl.','d'=>'Shop.Theme.Checkout'),$_smarty_tpl ) );?>
</span>
			</div>
		</div>
	<?php }?>

	<?php if ((isset($_smarty_tpl->tpl_vars['enableconfig']->value)) && (isset($_smarty_tpl->tpl_vars['css74']->value)) && ($_smarty_tpl->tpl_vars['enableconfig']->value == 1 || $_smarty_tpl->tpl_vars['css74']->value == "pl_price_incl_tax_excl")) {?>
		<div class="pl_price_incl_tax_excl">
			<div>
			  <?php if ($_smarty_tpl->tpl_vars['product']->value['has_discount']) {?><span class="regular-price"><?php echo htmlspecialchars((string) Context::getContext()->getCurrentLocale()->formatPrice($_smarty_tpl->tpl_vars['product']->value['price_without_reduction_without_tax']+($_smarty_tpl->tpl_vars['product']->value['price_without_reduction_without_tax']*($_smarty_tpl->tpl_vars['product']->value['rate']/100)),Context::getContext()->currency->iso_code), ENT_QUOTES, 'UTF-8');?>
</span><?php }?>
			  <span class="price"><?php echo htmlspecialchars((string) Context::getContext()->getCurrentLocale()->formatPrice($_smarty_tpl->tpl_vars['product']->value['price_tax_exc']+($_smarty_tpl->tpl_vars['product']->value['price_tax_exc']*($_smarty_tpl->tpl_vars['product']->value['rate']/100)),Context::getContext()->currency->iso_code), ENT_QUOTES, 'UTF-8');?>
</span>
			  <span class="tax_label"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'tax incl.','d'=>'Shop.Theme.Checkout'),$_smarty_tpl ) );?>
</span>
			</div>

			<div>
			  <?php if ($_smarty_tpl->tpl_vars['product']->value['has_discount']) {?><span class="regular-price"><?php echo htmlspecialchars((string) Context::getContext()->getCurrentLocale()->formatPrice($_smarty_tpl->tpl_vars['product']->value['price_without_reduction_without_tax']*($_smarty_tpl->tpl_vars['product']->value['rate']/100),Context::getContext()->currency->iso_code), ENT_QUOTES, 'UTF-8');?>
</span><?php }?>
			  <span class="price_small"><?php echo htmlspecialchars((string) Context::getContext()->getCurrentLocale()->formatPrice($_smarty_tpl->tpl_vars['product']->value['price_tax_exc']*($_smarty_tpl->tpl_vars['product']->value['rate']/100),Context::getContext()->currency->iso_code), ENT_QUOTES, 'UTF-8');?>
</span>
			  <span class="tax_label"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Tax','d'=>'Shop.Theme.Checkout'),$_smarty_tpl ) );?>
</span>
			</div>

			<div>
			  <?php if ($_smarty_tpl->tpl_vars['product']->value['has_discount']) {?><span class="regular-price"><?php echo htmlspecialchars((string) Context::getContext()->getCurrentLocale()->formatPrice($_smarty_tpl->tpl_vars['product']->value['price_without_reduction_without_tax'],Context::getContext()->currency->iso_code), ENT_QUOTES, 'UTF-8');?>
</span><?php }?>
			  <span class="price_small"><?php echo htmlspecialchars((string) Context::getContext()->getCurrentLocale()->formatPrice($_smarty_tpl->tpl_vars['product']->value['price_tax_exc'],Context::getContext()->currency->iso_code), ENT_QUOTES, 'UTF-8');?>
</span>
			  <span class="tax_label"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'tax excl.','d'=>'Shop.Theme.Checkout'),$_smarty_tpl ) );?>
</span>
			</div>
		</div>
	<?php }?>

	<?php if ((isset($_smarty_tpl->tpl_vars['enableconfig']->value)) && (isset($_smarty_tpl->tpl_vars['css74']->value)) && ($_smarty_tpl->tpl_vars['enableconfig']->value == 1 || $_smarty_tpl->tpl_vars['css74']->value == "pl_price_excl_tax_incl")) {?>
		<div class="pl_price_excl_tax_incl">
			<div>
			  <?php if ($_smarty_tpl->tpl_vars['product']->value['has_discount']) {?><span class="regular-price"><?php echo htmlspecialchars((string) Context::getContext()->getCurrentLocale()->formatPrice($_smarty_tpl->tpl_vars['product']->value['price_without_reduction_without_tax'],Context::getContext()->currency->iso_code), ENT_QUOTES, 'UTF-8');?>
</span><?php }?>
			  <span class="price"><?php echo htmlspecialchars((string) Context::getContext()->getCurrentLocale()->formatPrice($_smarty_tpl->tpl_vars['product']->value['price_tax_exc'],Context::getContext()->currency->iso_code), ENT_QUOTES, 'UTF-8');?>
</span>
			  <span class="tax_label"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'tax excl.','d'=>'Shop.Theme.Checkout'),$_smarty_tpl ) );?>
</span>
			</div>

			<div>
			  <?php if ($_smarty_tpl->tpl_vars['product']->value['has_discount']) {?><span class="regular-price"><?php echo htmlspecialchars((string) Context::getContext()->getCurrentLocale()->formatPrice($_smarty_tpl->tpl_vars['product']->value['price_without_reduction_without_tax']*($_smarty_tpl->tpl_vars['product']->value['rate']/100),Context::getContext()->currency->iso_code), ENT_QUOTES, 'UTF-8');?>
</span><?php }?>
			  <span class="price_small"><?php echo htmlspecialchars((string) Context::getContext()->getCurrentLocale()->formatPrice($_smarty_tpl->tpl_vars['product']->value['price_tax_exc']*($_smarty_tpl->tpl_vars['product']->value['rate']/100),Context::getContext()->currency->iso_code), ENT_QUOTES, 'UTF-8');?>
</span>
			  <span class="tax_label"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Tax','d'=>'Shop.Theme.Checkout'),$_smarty_tpl ) );?>
</span>
			</div>

			<div>
			  <?php if ($_smarty_tpl->tpl_vars['product']->value['has_discount']) {?><span class="regular-price"><?php echo htmlspecialchars((string) Context::getContext()->getCurrentLocale()->formatPrice($_smarty_tpl->tpl_vars['product']->value['price_without_reduction_without_tax']+($_smarty_tpl->tpl_vars['product']->value['price_without_reduction_without_tax']*($_smarty_tpl->tpl_vars['product']->value['rate']/100)),Context::getContext()->currency->iso_code), ENT_QUOTES, 'UTF-8');?>
</span><?php }?>
			  <span class="price_small"><?php echo htmlspecialchars((string) Context::getContext()->getCurrentLocale()->formatPrice($_smarty_tpl->tpl_vars['product']->value['price_tax_exc']+($_smarty_tpl->tpl_vars['product']->value['price_tax_exc']*($_smarty_tpl->tpl_vars['product']->value['rate']/100)),Context::getContext()->currency->iso_code), ENT_QUOTES, 'UTF-8');?>
</span>
			  <span class="tax_label"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'tax incl.','d'=>'Shop.Theme.Checkout'),$_smarty_tpl ) );?>
</span>
			</div>
		</div>
	<?php }?>

<?php } else { ?>

	<?php if ((isset($_smarty_tpl->tpl_vars['enableconfig']->value)) && (isset($_smarty_tpl->tpl_vars['css74']->value)) && ($_smarty_tpl->tpl_vars['enableconfig']->value == 1 || $_smarty_tpl->tpl_vars['css74']->value == "pl_price_incl_excl")) {?>
		<div class="pl_price_incl_excl">
			<div>
			  <span class="price"><?php echo htmlspecialchars((string) Tools::displayPrice($_smarty_tpl->tpl_vars['product']->value['price_tax_exc']+($_smarty_tpl->tpl_vars['product']->value['price_tax_exc']*($_smarty_tpl->tpl_vars['product']->value['rate']/100))), ENT_QUOTES, 'UTF-8');?>
</span>
			  <span class="tax_label"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Tax included','d'=>'Shop.Theme.Checkout'),$_smarty_tpl ) );?>
</span>
			</div>

			<div>
			  <span class="price_small"><?php echo htmlspecialchars((string) Tools::displayPrice($_smarty_tpl->tpl_vars['product']->value['price_tax_exc']), ENT_QUOTES, 'UTF-8');?>
</span>
			  <span class="tax_label"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Tax excluded','d'=>'Shop.Theme.Checkout'),$_smarty_tpl ) );?>
</span>
			</div>
		</div>
	<?php }?>

	<?php if ((isset($_smarty_tpl->tpl_vars['enableconfig']->value)) && (isset($_smarty_tpl->tpl_vars['css74']->value)) && ($_smarty_tpl->tpl_vars['enableconfig']->value == 1 || $_smarty_tpl->tpl_vars['css74']->value == "pl_price_excl_incl")) {?>
		<div class="pl_price_excl_incl">
			<div>
			  <span class="price"><?php echo htmlspecialchars((string) Tools::displayPrice($_smarty_tpl->tpl_vars['product']->value['price_tax_exc']), ENT_QUOTES, 'UTF-8');?>
</span>
			  <span class="tax_label"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Tax excluded','d'=>'Shop.Theme.Checkout'),$_smarty_tpl ) );?>
</span>
			</div>

			<div>
			  <span class="price_small"><?php echo htmlspecialchars((string) Tools::displayPrice($_smarty_tpl->tpl_vars['product']->value['price_tax_exc']+($_smarty_tpl->tpl_vars['product']->value['price_tax_exc']*($_smarty_tpl->tpl_vars['product']->value['rate']/100))), ENT_QUOTES, 'UTF-8');?>
</span>
			  <span class="tax_label"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Tax included','d'=>'Shop.Theme.Checkout'),$_smarty_tpl ) );?>
</span>
			</div>
		</div>
	<?php }?>

	<?php if ((isset($_smarty_tpl->tpl_vars['enableconfig']->value)) && (isset($_smarty_tpl->tpl_vars['css74']->value)) && ($_smarty_tpl->tpl_vars['enableconfig']->value == 1 || $_smarty_tpl->tpl_vars['css74']->value == "pl_price_incl_tax_excl")) {?>
		<div class="pl_price_incl_tax_excl">
			<div>
			  <span class="price"><?php echo htmlspecialchars((string) Tools::displayPrice($_smarty_tpl->tpl_vars['product']->value['price_tax_exc']+($_smarty_tpl->tpl_vars['product']->value['price_tax_exc']*($_smarty_tpl->tpl_vars['product']->value['rate']/100))), ENT_QUOTES, 'UTF-8');?>
</span>
			  <span class="tax_label"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Tax included','d'=>'Shop.Theme.Checkout'),$_smarty_tpl ) );?>
</span>
			</div>

			<div>
			  <span class="price_small"><?php echo htmlspecialchars((string) Tools::displayPrice($_smarty_tpl->tpl_vars['product']->value['price_tax_exc']*($_smarty_tpl->tpl_vars['product']->value['rate']/100)), ENT_QUOTES, 'UTF-8');?>
</span>
			  <span class="tax_label"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Tax','d'=>'Shop.Theme.Checkout'),$_smarty_tpl ) );?>
</span>
			</div>

			<div>
			  <span class="price_small"><?php echo htmlspecialchars((string) Tools::displayPrice($_smarty_tpl->tpl_vars['product']->value['price_tax_exc']), ENT_QUOTES, 'UTF-8');?>
</span>
			  <span class="tax_label"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Tax excluded','d'=>'Shop.Theme.Checkout'),$_smarty_tpl ) );?>
</span>
			</div>
		</div>
	<?php }?>

	<?php if ((isset($_smarty_tpl->tpl_vars['enableconfig']->value)) && (isset($_smarty_tpl->tpl_vars['css74']->value)) && ($_smarty_tpl->tpl_vars['enableconfig']->value == 1 || $_smarty_tpl->tpl_vars['css74']->value == "pl_price_excl_tax_incl")) {?>
		<div class="pl_price_excl_tax_incl">
			<div>
			  <span class="price"><?php echo htmlspecialchars((string) Tools::displayPrice($_smarty_tpl->tpl_vars['product']->value['price_tax_exc']), ENT_QUOTES, 'UTF-8');?>
</span>
			  <span class="tax_label"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Tax excluded','d'=>'Shop.Theme.Checkout'),$_smarty_tpl ) );?>
</span>
			</div>

			<div>
			  <span class="price_small"><?php echo htmlspecialchars((string) Tools::displayPrice($_smarty_tpl->tpl_vars['product']->value['price_tax_exc']*($_smarty_tpl->tpl_vars['product']->value['rate']/100)), ENT_QUOTES, 'UTF-8');?>
</span>
			  <span class="tax_label"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Tax','d'=>'Shop.Theme.Checkout'),$_smarty_tpl ) );?>
</span>
			</div>

			<div>
			  <span class="price_small"><?php echo htmlspecialchars((string) Tools::displayPrice($_smarty_tpl->tpl_vars['product']->value['price_tax_exc']+($_smarty_tpl->tpl_vars['product']->value['price_tax_exc']*($_smarty_tpl->tpl_vars['product']->value['rate']/100))), ENT_QUOTES, 'UTF-8');?>
</span>
			  <span class="tax_label"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Tax included','d'=>'Shop.Theme.Checkout'),$_smarty_tpl ) );?>
</span>
			</div>
		</div>
	<?php }?>

<?php }
}
}
