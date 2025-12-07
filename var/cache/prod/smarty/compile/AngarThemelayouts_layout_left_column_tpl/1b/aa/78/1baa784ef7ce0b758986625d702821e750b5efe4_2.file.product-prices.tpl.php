<?php
/* Smarty version 4.3.4, created on 2025-12-05 14:58:26
  from '/home/zerobat/www/themes/AngarTheme/templates/catalog/_partials/product-prices.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.4',
  'unifunc' => 'content_6932e50290e6f3_72045501',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '1baa784ef7ce0b758986625d702821e750b5efe4' => 
    array (
      0 => '/home/zerobat/www/themes/AngarTheme/templates/catalog/_partials/product-prices.tpl',
      1 => 1764937860,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:catalog/_partials/product_dual_prices/product-dual-prices-old-price.tpl' => 1,
    'file:catalog/_partials/product_dual_prices/product-dual-prices-main-price.tpl' => 1,
    'file:catalog/_partials/product_dual_prices/product-dual-prices-tax-label.tpl' => 1,
    'file:catalog/_partials/product_dual_prices/product-dual-prices-small-price.tpl' => 1,
  ),
),false)) {
function content_6932e50290e6f3_72045501 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, false);
?>


<?php if ($_smarty_tpl->tpl_vars['product']->value['show_price']) {?>
  <div class="product-prices">

	<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_10600985516932e502902829_40552143', 'product_discount');
?>


	<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_19446635426932e502904091_07910290', 'product_price');
?>


	<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_3817534976932e5029066b5_05264102', 'product_tax_labels');
?>


	<div class="clearfix"></div>

	<?php $_smarty_tpl->_subTemplateRender('file:catalog/_partials/product_dual_prices/product-dual-prices-small-price.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

	<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_3041307566932e502907a45_02312669', 'product_unit_price');
?>



    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_9448906966932e502908d50_55916013', 'product_without_taxes');
?>


    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_20771124116932e502909895_33285896', 'product_ecotax');
?>


    <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>'displayProductPriceBlock','product'=>$_smarty_tpl->tpl_vars['product']->value,'type'=>"weight",'hook_origin'=>'product_sheet'),$_smarty_tpl ) );?>


    <div class="shipping-delivery-label">
      <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>'displayProductPriceBlock','product'=>$_smarty_tpl->tpl_vars['product']->value,'type'=>"price"),$_smarty_tpl ) );?>

      <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>'displayProductPriceBlock','product'=>$_smarty_tpl->tpl_vars['product']->value,'type'=>"after_price"),$_smarty_tpl ) );?>

    </div>

    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_20518257456932e50290b4e5_69865722', 'product_pack_price');
?>


	<?php if ((defined('_PS_VERSION_') ? constant('_PS_VERSION_') : null) >= '1.7.3.0') {?>
	  <?php if ($_smarty_tpl->tpl_vars['product']->value['is_virtual'] == 0) {?>
		  <?php if ($_smarty_tpl->tpl_vars['product']->value['additional_delivery_times'] == 1) {?>
			<?php if ($_smarty_tpl->tpl_vars['product']->value['delivery_information']) {?>
			  <span class="delivery-information"><?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['product']->value['delivery_information'], ENT_QUOTES, 'UTF-8');?>
</span>
			<?php }?>
		  <?php } elseif ($_smarty_tpl->tpl_vars['product']->value['additional_delivery_times'] == 2) {?>
			<?php if ($_smarty_tpl->tpl_vars['product']->value['quantity'] > 0) {?>
			  <?php if ($_smarty_tpl->tpl_vars['product']->value['delivery_in_stock']) {?><span class="delivery-information"><?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['product']->value['delivery_in_stock'], ENT_QUOTES, 'UTF-8');?>
</span><?php }?>
						<?php } elseif ($_smarty_tpl->tpl_vars['product']->value['quantity'] <= 0 && $_smarty_tpl->tpl_vars['product']->value['add_to_cart_url']) {?>
			  <?php if ($_smarty_tpl->tpl_vars['product']->value['delivery_out_stock']) {?><span class="delivery-information"><?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['product']->value['delivery_out_stock'], ENT_QUOTES, 'UTF-8');?>
</span><?php }?>
			<?php }?>
		  <?php }?>
	  <?php }?>
	<?php }?>

	<div class="clearfix"></div> 
  </div>
<?php }
}
/* {block 'product_discount'} */
class Block_10600985516932e502902829_40552143 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'product_discount' => 
  array (
    0 => 'Block_10600985516932e502902829_40552143',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

	  <?php if ($_smarty_tpl->tpl_vars['product']->value['has_discount']) {?>
		<div class="product-discount">
		  <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>'displayProductPriceBlock','product'=>$_smarty_tpl->tpl_vars['product']->value,'type'=>"old_price"),$_smarty_tpl ) );?>

			<?php if ((empty($_smarty_tpl->tpl_vars['enableconfig']->value) || $_smarty_tpl->tpl_vars['enableconfig']->value != 1) && empty($_smarty_tpl->tpl_vars['css75']->value)) {?>
			 <span class="regular-price"><?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['product']->value['regular_price'], ENT_QUOTES, 'UTF-8');?>
</span>
			<?php }?>

			<?php $_smarty_tpl->_subTemplateRender('file:catalog/_partials/product_dual_prices/product-dual-prices-old-price.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

		</div>
	  <?php }?>
	<?php
}
}
/* {/block 'product_discount'} */
/* {block 'product_price'} */
class Block_19446635426932e502904091_07910290 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'product_price' => 
  array (
    0 => 'Block_19446635426932e502904091_07910290',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

	  <div class="product-price h5 <?php if ($_smarty_tpl->tpl_vars['product']->value['has_discount']) {?>has-discount<?php }?>">
		<div class="current-price">

		  <?php if ((empty($_smarty_tpl->tpl_vars['enableconfig']->value) || $_smarty_tpl->tpl_vars['enableconfig']->value != 1) && empty($_smarty_tpl->tpl_vars['css75']->value)) {?>

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

		  <?php }?>

		  <?php $_smarty_tpl->_subTemplateRender('file:catalog/_partials/product_dual_prices/product-dual-prices-main-price.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

		</div>
	  </div>
	<?php
}
}
/* {/block 'product_price'} */
/* {block 'product_tax_labels'} */
class Block_3817534976932e5029066b5_05264102 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'product_tax_labels' => 
  array (
    0 => 'Block_3817534976932e5029066b5_05264102',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

		<div class="tax-shipping-delivery-label tax_label">
			<?php if ((empty($_smarty_tpl->tpl_vars['enableconfig']->value) || $_smarty_tpl->tpl_vars['enableconfig']->value != 1) && empty($_smarty_tpl->tpl_vars['css75']->value)) {?>
				<?php if ($_smarty_tpl->tpl_vars['configuration']->value['display_taxes_label']) {?>
					<span class="tax_label"><?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['product']->value['labels']['tax_long'], ENT_QUOTES, 'UTF-8');?>
</span>
				<?php }?>
			<?php }?>
			<?php $_smarty_tpl->_subTemplateRender('file:catalog/_partials/product_dual_prices/product-dual-prices-tax-label.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
		</div>
	<?php
}
}
/* {/block 'product_tax_labels'} */
/* {block 'product_unit_price'} */
class Block_3041307566932e502907a45_02312669 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'product_unit_price' => 
  array (
    0 => 'Block_3041307566932e502907a45_02312669',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'/home/zerobat/www/vendor/smarty/smarty/libs/plugins/modifier.replace.php','function'=>'smarty_modifier_replace',),));
?>

	  <?php if ($_smarty_tpl->tpl_vars['displayUnitPrice']->value) {?>
		<p class="product-unit-price sub"><?php echo htmlspecialchars((string) smarty_modifier_replace($_smarty_tpl->tpl_vars['product']->value['unit_price_full'],' ',' / '), ENT_QUOTES, 'UTF-8');?>
 <?php if ($_smarty_tpl->tpl_vars['configuration']->value['display_taxes_label']) {
echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['product']->value['labels']['tax_long'], ENT_QUOTES, 'UTF-8');
}?></p>
	  <?php }?>
	<?php
}
}
/* {/block 'product_unit_price'} */
/* {block 'product_without_taxes'} */
class Block_9448906966932e502908d50_55916013 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'product_without_taxes' => 
  array (
    0 => 'Block_9448906966932e502908d50_55916013',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

      <?php if ($_smarty_tpl->tpl_vars['priceDisplay']->value == 2) {?>
        <p class="product-without-taxes"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'%price% tax excl.','d'=>'Shop.Theme.Catalog','sprintf'=>array('%price%'=>$_smarty_tpl->tpl_vars['product']->value['price_tax_exc'])),$_smarty_tpl ) );?>
</p>
      <?php }?>
    <?php
}
}
/* {/block 'product_without_taxes'} */
/* {block 'product_ecotax'} */
class Block_20771124116932e502909895_33285896 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'product_ecotax' => 
  array (
    0 => 'Block_20771124116932e502909895_33285896',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

      <?php if ($_smarty_tpl->tpl_vars['product']->value['ecotax']['amount'] > 0) {?>
        <p class="price-ecotax"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Including %amount% for ecotax','d'=>'Shop.Theme.Catalog','sprintf'=>array('%amount%'=>$_smarty_tpl->tpl_vars['product']->value['ecotax']['value'])),$_smarty_tpl ) );?>

          <?php if ($_smarty_tpl->tpl_vars['product']->value['has_discount']) {?>
            <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'(not impacted by the discount)','d'=>'Shop.Theme.Catalog'),$_smarty_tpl ) );?>

          <?php }?>
        </p>
      <?php }?>
    <?php
}
}
/* {/block 'product_ecotax'} */
/* {block 'product_pack_price'} */
class Block_20518257456932e50290b4e5_69865722 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'product_pack_price' => 
  array (
    0 => 'Block_20518257456932e50290b4e5_69865722',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

      <?php if ($_smarty_tpl->tpl_vars['displayPackPrice']->value) {?>
        <p class="product-pack-price"><span><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Instead of %price%','d'=>'Shop.Theme.Catalog','sprintf'=>array('%price%'=>$_smarty_tpl->tpl_vars['noPackPrice']->value)),$_smarty_tpl ) );?>
</span></p>
      <?php }?>
    <?php
}
}
/* {/block 'product_pack_price'} */
}
