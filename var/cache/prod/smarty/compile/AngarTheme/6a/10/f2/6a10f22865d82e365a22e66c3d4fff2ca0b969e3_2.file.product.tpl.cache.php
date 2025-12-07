<?php
/* Smarty version 4.3.4, created on 2025-12-05 13:59:17
  from '/home/zerobat/www/themes/AngarTheme/templates/catalog/_partials/miniatures/product.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.4',
  'unifunc' => 'content_6932d725ddbd43_06001424',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '6a10f22865d82e365a22e66c3d4fff2ca0b969e3' => 
    array (
      0 => '/home/zerobat/www/themes/AngarTheme/templates/catalog/_partials/miniatures/product.tpl',
      1 => 1764937860,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:catalog/_partials/miniatures/pl-dual-prices.tpl' => 1,
    'file:catalog/_partials/variant-links.tpl' => 1,
  ),
),false)) {
function content_6932d725ddbd43_06001424 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, false);
$_smarty_tpl->compiled->nocache_hash = '20410375296932d725db1db2_59870431';
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_6480052826932d725db2548_30945281', 'product_miniature_item');
?>

<?php }
/* {block 'product_flags'} */
class Block_5702849546932d725db4117_50931082 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

				<a href="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['product']->value['url'], ENT_QUOTES, 'UTF-8');?>
" class="product-flags-plist" aria-label="<?php echo htmlspecialchars((string) call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['product']->value['name'],'html','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
">
					<?php if ($_smarty_tpl->tpl_vars['product']->value['reduction'] != 0) {?>
						<?php if ($_smarty_tpl->tpl_vars['product']->value['discount_type'] === 'percentage') {?>
							<span class="product-flag discount-percentage"><?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['product']->value['discount_percentage'], ENT_QUOTES, 'UTF-8');?>
</span>
						<?php }?>
						<?php if ($_smarty_tpl->tpl_vars['product']->value['discount_type'] === 'amount') {?>
							<span class="product-flag discount-percentage">- <?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['product']->value['discount_amount'], ENT_QUOTES, 'UTF-8');?>
</span>
						<?php }?>
					<?php }?>
					<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['product']->value['flags'], 'flag');
$_smarty_tpl->tpl_vars['flag']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['flag']->value) {
$_smarty_tpl->tpl_vars['flag']->do_else = false;
?>
						<?php if ($_smarty_tpl->tpl_vars['flag']->value['type'] === 'discount') {?>
							<span class="product-flag <?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['flag']->value['type'], ENT_QUOTES, 'UTF-8');?>
"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Reduced price','d'=>'Shop.Theme.Catalog'),$_smarty_tpl ) );?>
</span>
						<?php } else { ?>
							<span class="product-flag <?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['flag']->value['type'], ENT_QUOTES, 'UTF-8');?>
"><?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['flag']->value['label'], ENT_QUOTES, 'UTF-8');?>
</span>
						<?php }?>
					<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
				</a>
				<?php
}
}
/* {/block 'product_flags'} */
/* {block 'product_thumbnail'} */
class Block_16559301226932d725db6e56_63424718 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'/home/zerobat/www/vendor/smarty/smarty/libs/plugins/modifier.count.php','function'=>'smarty_modifier_count',),));
?>

								<a href="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['product']->value['url'], ENT_QUOTES, 'UTF-8');?>
" class="thumbnail product-thumbnail">
					<picture>
						<?php if (!empty($_smarty_tpl->tpl_vars['product']->value['cover']['bySize']['home_default']['url'])) {?>
						  <?php if (!empty($_smarty_tpl->tpl_vars['product']->value['cover']['bySize']['home_default']['sources']['avif'])) {?><source srcset="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['product']->value['cover']['bySize']['home_default']['sources']['avif'], ENT_QUOTES, 'UTF-8');?>
" type="image/avif"><?php }?>
						  <?php if (!empty($_smarty_tpl->tpl_vars['product']->value['cover']['bySize']['home_default']['sources']['webp'])) {?><source srcset="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['product']->value['cover']['bySize']['home_default']['sources']['webp'], ENT_QUOTES, 'UTF-8');?>
" type="image/webp"><?php }?>
						  <img
							src = "<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['product']->value['cover']['bySize']['home_default']['url'], ENT_QUOTES, 'UTF-8');?>
"
							alt = "<?php if (!empty($_smarty_tpl->tpl_vars['product']->value['cover']['legend'])) {
echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['product']->value['cover']['legend'], ENT_QUOTES, 'UTF-8');
} else {
echo htmlspecialchars((string) call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'truncate' ][ 0 ], array( $_smarty_tpl->tpl_vars['product']->value['name'],30,'...' )), ENT_QUOTES, 'UTF-8');
}?>"
							data-full-size-image-url = "<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['product']->value['cover']['large']['url'], ENT_QUOTES, 'UTF-8');?>
" <?php if ((isset($_smarty_tpl->tpl_vars['product']->value['cover']['bySize']['home_default']))) {?> 
							<?php if ($_smarty_tpl->tpl_vars['page']->value['page_name'] != 'product') {?>loading="lazy"<?php }?>
							width="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['product']->value['cover']['bySize']['home_default']['width'], ENT_QUOTES, 'UTF-8');?>
" height="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['product']->value['cover']['bySize']['home_default']['height'], ENT_QUOTES, 'UTF-8');?>
" <?php }?>
						  >
						<?php } else { ?>
							<?php if ((defined('_PS_VERSION_') ? constant('_PS_VERSION_') : null) >= '1.7.6.0') {?>
								<img
									src="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['urls']->value['no_picture_image']['bySize']['home_default']['url'], ENT_QUOTES, 'UTF-8');?>
"
									<?php if ($_smarty_tpl->tpl_vars['page']->value['page_name'] != 'product') {?>loading="lazy"<?php }?>
									width="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['urls']->value['no_picture_image']['bySize']['home_default']['width'], ENT_QUOTES, 'UTF-8');?>
"
									height="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['urls']->value['no_picture_image']['bySize']['home_default']['height'], ENT_QUOTES, 'UTF-8');?>
"
								/>
							<?php } else { ?>
								<img src = "<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['urls']->value['img_url'], ENT_QUOTES, 'UTF-8');?>
en-default-home_default.jpg" <?php if ($_smarty_tpl->tpl_vars['page']->value['page_name'] != 'product') {?>loading="lazy"<?php }?>>
							<?php }?>
						<?php }?>

						<?php if ((isset($_smarty_tpl->tpl_vars['enableconfig']->value)) && (isset($_smarty_tpl->tpl_vars['css78']->value)) && ($_smarty_tpl->tpl_vars['enableconfig']->value == 1 || $_smarty_tpl->tpl_vars['css78']->value == "pl_gallery_type_2")) {?>
							<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['product']->value['images'], 'image');
$_smarty_tpl->tpl_vars['image']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['image']->value) {
$_smarty_tpl->tpl_vars['image']->do_else = false;
?>
								<?php if (($_smarty_tpl->tpl_vars['image']->value['cover'] != 1)) {?>
									<picture>
									  <?php if (!empty($_smarty_tpl->tpl_vars['image']->value['bySize']['home_default']['sources']['avif'])) {?>
										<source srcset="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['image']->value['bySize']['home_default']['sources']['avif'], ENT_QUOTES, 'UTF-8');?>
" type="image/avif">
									  <?php }?>
									  <?php if (!empty($_smarty_tpl->tpl_vars['image']->value['bySize']['home_default']['sources']['webp'])) {?>
										<source srcset="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['image']->value['bySize']['home_default']['sources']['webp'], ENT_QUOTES, 'UTF-8');?>
" type="image/webp">
									  <?php }?>
									  <img class="subimage"
										src="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['image']->value['bySize']['home_default']['url'], ENT_QUOTES, 'UTF-8');?>
" 
										alt="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['product']->value['cover']['legend'], ENT_QUOTES, 'UTF-8');?>
" 
										<?php if ($_smarty_tpl->tpl_vars['page']->value['page_name'] != 'product') {?>loading="lazy"<?php }?>
										width="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['image']->value['bySize']['home_default']['width'], ENT_QUOTES, 'UTF-8');?>
" 
										height="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['image']->value['bySize']['home_default']['height'], ENT_QUOTES, 'UTF-8');?>
" 
										data-full-size-image-url="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['image']->value['bySize']['home_default']['url'], ENT_QUOTES, 'UTF-8');?>
">
									</picture>
									<?php break 1;?>
								<?php }?>
							<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
						<?php }?>

						<?php if ((isset($_smarty_tpl->tpl_vars['enableconfig']->value)) && (isset($_smarty_tpl->tpl_vars['css78']->value)) && ($_smarty_tpl->tpl_vars['enableconfig']->value == 1 || $_smarty_tpl->tpl_vars['css78']->value == "pl_gallery_type_3")) {?>     
							<?php if ((isset($_smarty_tpl->tpl_vars['product']->value['images'])) && smarty_modifier_count($_smarty_tpl->tpl_vars['product']->value['images']) > 1) {?>
							  <div class="pl_gallery_slider">
								<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['product']->value['images'], 'image', false, NULL, 'imgs', array (
  'first' => true,
  'index' => true,
));
$_smarty_tpl->tpl_vars['image']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['image']->value) {
$_smarty_tpl->tpl_vars['image']->do_else = false;
$_smarty_tpl->tpl_vars['__smarty_foreach_imgs']->value['index']++;
$_smarty_tpl->tpl_vars['__smarty_foreach_imgs']->value['first'] = !$_smarty_tpl->tpl_vars['__smarty_foreach_imgs']->value['index'];
?>
								  <div
									class="image_thumb<?php if ((isset($_smarty_tpl->tpl_vars['__smarty_foreach_imgs']->value['first']) ? $_smarty_tpl->tpl_vars['__smarty_foreach_imgs']->value['first'] : null)) {?> selected<?php }?>"
									data-hover-slider-image="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['image']->value['bySize']['home_default']['url'], ENT_QUOTES, 'UTF-8');?>
"
								  ></div>
								<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
							  </div>
							<?php }?>
						<?php }?>

					</picture>
				</a>
				<?php
}
}
/* {/block 'product_thumbnail'} */
/* {block 'quick_view'} */
class Block_8296533396932d725dc4151_21818298 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

				    <button class="quick-view" data-link-action="quickview" aria-label="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Quick view','d'=>'Shop.Theme.Actions'),$_smarty_tpl ) );?>
: <?php echo htmlspecialchars((string) call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'truncate' ][ 0 ], array( $_smarty_tpl->tpl_vars['product']->value['name'],160,'...' )), ENT_QUOTES, 'UTF-8');?>
">
					  <i class="material-icons search">&#xE8B6;</i><span><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Quick view','d'=>'Shop.Theme.Actions'),$_smarty_tpl ) );?>
</span>
				    </button>
				  <?php
}
}
/* {/block 'quick_view'} */
/* {block 'product_countdown'} */
class Block_11298013006932d725dc4e65_00299361 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'/home/zerobat/www/vendor/smarty/smarty/libs/plugins/modifier.replace.php','function'=>'smarty_modifier_replace',),));
?>

				<?php if ($_smarty_tpl->tpl_vars['product']->value['show_price']) {?>
					<?php if ($_smarty_tpl->tpl_vars['product']->value['has_discount']) {?>
						<?php if ($_smarty_tpl->tpl_vars['product']->value['specific_prices']['to'] > '0000-00-00 00:00:00') {?>
							<div class="countdown-container">
								<div class="countdown" data-endtime="<?php echo htmlspecialchars((string) smarty_modifier_replace($_smarty_tpl->tpl_vars['product']->value['specific_prices']['to'],' ','T'), ENT_QUOTES, 'UTF-8');?>
">
									<div class="countdown-item"><span data-type="days">0</span><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Days','d'=>'Shop.Theme.Mytheme'),$_smarty_tpl ) );?>
</div>
									<div class="countdown-item"><span data-type="hours">0</span><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Hours','d'=>'Shop.Theme.Mytheme'),$_smarty_tpl ) );?>
</div>
									<div class="countdown-item"><span data-type="minutes">0</span><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Min','d'=>'Shop.Theme.Mytheme'),$_smarty_tpl ) );?>
</div>
									<div class="countdown-item"><span data-type="seconds">0</span><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Sec','d'=>'Shop.Theme.Mytheme'),$_smarty_tpl ) );?>
</div>
									<div class="clearfix"></div>
								</div>
							</div>
						<?php }?>
					<?php }?>
				<?php }?>
				<?php
}
}
/* {/block 'product_countdown'} */
/* {block 'product_name'} */
class Block_11480663016932d725dc9a74_57232430 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

				  <h3 class="h3 product-title"><a href="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['product']->value['url'], ENT_QUOTES, 'UTF-8');?>
"><?php echo htmlspecialchars((string) call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'truncate' ][ 0 ], array( $_smarty_tpl->tpl_vars['product']->value['name'],160,'...' )), ENT_QUOTES, 'UTF-8');?>
</a></h3>
				<?php
}
}
/* {/block 'product_name'} */
/* {block 'product_reviews'} */
class Block_7055130656932d725dca472_33141632 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

				  <div class="pl-reviews pl-reviews-bottom"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>'displayProductListReviews','product'=>$_smarty_tpl->tpl_vars['product']->value),$_smarty_tpl ) );?>
</div>
				<?php
}
}
/* {/block 'product_reviews'} */
/* {block 'product_shortdesc'} */
class Block_3794668296932d725dca980_46994117 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'/home/zerobat/www/vendor/smarty/smarty/libs/plugins/modifier.replace.php','function'=>'smarty_modifier_replace',),));
?>

					<div class="product-desc">
						<?php echo htmlspecialchars((string) smarty_modifier_replace(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'truncate' ][ 0 ], array( strip_tags((string) $_smarty_tpl->tpl_vars['product']->value['description_short']),360,'...' )),'&amp;','&'), ENT_QUOTES, 'UTF-8');?>

					</div>
				<?php
}
}
/* {/block 'product_shortdesc'} */
/* {block 'pl_product_prices'} */
class Block_10534328446932d725dcc967_61203749 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

							<?php $_smarty_tpl->_subTemplateRender('file:catalog/_partials/miniatures/pl-dual-prices.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 9999, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

							<?php if ((empty($_smarty_tpl->tpl_vars['enableconfig']->value) || $_smarty_tpl->tpl_vars['enableconfig']->value != 1) && empty($_smarty_tpl->tpl_vars['css74']->value)) {?>
								<span class="price"><?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['product']->value['price'], ENT_QUOTES, 'UTF-8');?>
</span>
								<?php if ($_smarty_tpl->tpl_vars['product']->value['has_discount']) {?>
									<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>'displayProductPriceBlock','product'=>$_smarty_tpl->tpl_vars['product']->value,'type'=>"old_price"),$_smarty_tpl ) );?>

									<span class="regular-price"><?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['product']->value['regular_price'], ENT_QUOTES, 'UTF-8');?>
</span>
								<?php }?>
							<?php }?>
						<?php
}
}
/* {/block 'pl_product_prices'} */
/* {block 'product_price_and_shipping'} */
class Block_18966328666932d725dcc112_19711646 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

				  <?php if ($_smarty_tpl->tpl_vars['product']->value['show_price']) {?>
					<div class="product-price-and-shipping">
					  <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>'displayProductPriceBlock','product'=>$_smarty_tpl->tpl_vars['product']->value,'type'=>"before_price"),$_smarty_tpl ) );?>


						<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_10534328446932d725dcc967_61203749', 'pl_product_prices', $this->tplIndex);
?>


					  <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>'displayProductPriceBlock','product'=>$_smarty_tpl->tpl_vars['product']->value,'type'=>'unit_price'),$_smarty_tpl ) );?>

					  <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>'displayProductPriceBlock','product'=>$_smarty_tpl->tpl_vars['product']->value,'type'=>'weight'),$_smarty_tpl ) );?>

					</div>
				  <?php }?>
				<?php
}
}
/* {/block 'product_price_and_shipping'} */
/* {block 'product_availability'} */
class Block_18385426466932d725dd6362_14213896 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

						  <span class="pl-availability">
							<?php if ($_smarty_tpl->tpl_vars['product']->value['show_availability'] && $_smarty_tpl->tpl_vars['product']->value['availability_message']) {?>
							  <?php if ($_smarty_tpl->tpl_vars['product']->value['availability'] == 'in_stock' && version_compare((defined('_PS_VERSION_') ? constant('_PS_VERSION_') : null),'9.0.0','>=')) {?>
								<i class="material-icons product-available">&#xE5CA;</i>
							  <?php } elseif ($_smarty_tpl->tpl_vars['product']->value['availability'] == 'available') {?>
								<i class="material-icons product-available <?php if (version_compare((defined('_PS_VERSION_') ? constant('_PS_VERSION_') : null),'9.0.0','>=')) {?> product-available-backorder<?php }?>">&#xE5CA;</i>
							  <?php } elseif ($_smarty_tpl->tpl_vars['product']->value['availability'] == 'last_remaining_items') {?>
								<i class="material-icons product-last-items">&#xE002;</i>
							  <?php } else { ?>
								<i class="material-icons product-unavailable">&#xE14B;</i>
							  <?php }?>
							  <?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['product']->value['availability_message'], ENT_QUOTES, 'UTF-8');?>

							<?php } else { ?>
								<?php if ($_smarty_tpl->tpl_vars['product']->value['allow_oosp'] == 0) {?>
									<i class="material-icons product-available">&#xE5CA;</i> <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'In stock','d'=>'Shop.Theme.Catalog'),$_smarty_tpl ) );?>

								<?php }?>
								
								<?php if ($_smarty_tpl->tpl_vars['product']->value['allow_oosp'] == 1) {?>
																		<i class="material-icons product-available">&#xE5CA;</i> <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'In stock','d'=>'Shop.Theme.Catalog'),$_smarty_tpl ) );?>

								<?php }?>
							<?php }?>
						  </span>
						<?php
}
}
/* {/block 'product_availability'} */
/* {block 'product_variants'} */
class Block_7204083076932d725ddaaa8_22851623 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

					  <?php if ($_smarty_tpl->tpl_vars['product']->value['main_variants']) {?>
						<?php $_smarty_tpl->_subTemplateRender('file:catalog/_partials/variant-links.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 9999, $_smarty_tpl->cache_lifetime, array('variants'=>$_smarty_tpl->tpl_vars['product']->value['main_variants']), 0, false);
?>
					  <?php }?>
					<?php
}
}
/* {/block 'product_variants'} */
/* {block 'product_miniature_item'} */
class Block_6480052826932d725db2548_30945281 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'product_miniature_item' => 
  array (
    0 => 'Block_6480052826932d725db2548_30945281',
  ),
  'product_flags' => 
  array (
    0 => 'Block_5702849546932d725db4117_50931082',
  ),
  'product_thumbnail' => 
  array (
    0 => 'Block_16559301226932d725db6e56_63424718',
  ),
  'quick_view' => 
  array (
    0 => 'Block_8296533396932d725dc4151_21818298',
  ),
  'product_countdown' => 
  array (
    0 => 'Block_11298013006932d725dc4e65_00299361',
  ),
  'product_name' => 
  array (
    0 => 'Block_11480663016932d725dc9a74_57232430',
  ),
  'product_reviews' => 
  array (
    0 => 'Block_7055130656932d725dca472_33141632',
  ),
  'product_shortdesc' => 
  array (
    0 => 'Block_3794668296932d725dca980_46994117',
  ),
  'product_price_and_shipping' => 
  array (
    0 => 'Block_18966328666932d725dcc112_19711646',
  ),
  'pl_product_prices' => 
  array (
    0 => 'Block_10534328446932d725dcc967_61203749',
  ),
  'product_availability' => 
  array (
    0 => 'Block_18385426466932d725dd6362_14213896',
  ),
  'product_variants' => 
  array (
    0 => 'Block_7204083076932d725ddaaa8_22851623',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

  <article class="product-miniature js-product-miniature<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['product']->value['flags'], 'flag');
$_smarty_tpl->tpl_vars['flag']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['flag']->value) {
$_smarty_tpl->tpl_vars['flag']->do_else = false;
if ($_smarty_tpl->tpl_vars['flag']->value['type'] == "out_of_stock") {?> product_out_of_stock<?php }
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>" data-id-product="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['product']->value['id_product'], ENT_QUOTES, 'UTF-8');?>
" data-id-product-attribute="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['product']->value['id_product_attribute'], ENT_QUOTES, 'UTF-8');?>
" aria-label="<?php echo htmlspecialchars((string) call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'truncate' ][ 0 ], array( $_smarty_tpl->tpl_vars['product']->value['name'],160,'...' )), ENT_QUOTES, 'UTF-8');?>
">
    <div class="thumbnail-container">

		<div class="product-left">
			<div class="product-image-container">
				<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_5702849546932d725db4117_50931082', 'product_flags', $this->tplIndex);
?>


				<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_16559301226932d725db6e56_63424718', 'product_thumbnail', $this->tplIndex);
?>


								  <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_8296533396932d725dc4151_21818298', 'quick_view', $this->tplIndex);
?>


				<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_11298013006932d725dc4e65_00299361', 'product_countdown', $this->tplIndex);
?>


			</div>
		</div>

		<div class="product-right">
			<div class="product-description">
				
				<p class="pl_reference">
				<?php if ((isset($_smarty_tpl->tpl_vars['product']->value['reference_to_display'])) && $_smarty_tpl->tpl_vars['product']->value['reference_to_display'] != '') {?>
					<span><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Reference','d'=>'Shop.Theme.Catalog'),$_smarty_tpl ) );?>
: </span>
					<strong><?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['product']->value['reference_to_display'], ENT_QUOTES, 'UTF-8');?>
</strong>
				<?php }?>
				</p>

				<p class="pl_manufacturer">
				<?php if ($_smarty_tpl->tpl_vars['product']->value['id_manufacturer'] > 0) {?>
					<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Brand','d'=>'Shop.Theme.Catalog'),$_smarty_tpl ) );?>
: 
					<?php if ((defined('_PS_VERSION_') ? constant('_PS_VERSION_') : null) >= '9.0.0') {?>
						<a href="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['link']->value->getmanufacturerLink($_smarty_tpl->tpl_vars['product']->value['id_manufacturer']), ENT_QUOTES, 'UTF-8');?>
" title="<?php echo htmlspecialchars((string) call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['product']->value['manufacturer_name'],'html','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
"><strong><?php echo htmlspecialchars((string) call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['product']->value['manufacturer_name'],'html','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
</strong></a>
					<?php } else { ?>
						<?php $_smarty_tpl->_assignInScope('manufacturer_name', Manufacturer::getNameById($_smarty_tpl->tpl_vars['product']->value['id_manufacturer']));?>
						<a href="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['link']->value->getmanufacturerLink($_smarty_tpl->tpl_vars['product']->value['id_manufacturer']), ENT_QUOTES, 'UTF-8');?>
" title="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['manufacturer_name']->value, ENT_QUOTES, 'UTF-8');?>
"><strong><?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['manufacturer_name']->value, ENT_QUOTES, 'UTF-8');?>
</strong></a>
					<?php }?>
				<?php }?>
				</p>

				<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_11480663016932d725dc9a74_57232430', 'product_name', $this->tplIndex);
?>


				<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_7055130656932d725dca472_33141632', 'product_reviews', $this->tplIndex);
?>


				<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_3794668296932d725dca980_46994117', 'product_shortdesc', $this->tplIndex);
?>

			</div>

			<div class="product-bottom">
				<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_18966328666932d725dcc112_19711646', 'product_price_and_shipping', $this->tplIndex);
?>


								<div class="button-container">
					<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>'displayAddtocart','product'=>$_smarty_tpl->tpl_vars['product']->value),$_smarty_tpl ) );?>


					<?php if (!$_smarty_tpl->tpl_vars['configuration']->value['is_catalog']) {?>
						<form action="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['urls']->value['pages']['cart'], ENT_QUOTES, 'UTF-8');?>
" method="post" class="add-to-cart-or-refresh">
						  <input type="hidden" name="token" value="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['static_token']->value, ENT_QUOTES, 'UTF-8');?>
">
						  <input type="hidden" name="id_product" value="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['product']->value['id'], ENT_QUOTES, 'UTF-8');?>
" class="product_page_product_id">

						  <div class="qty_container">
							  <label for="qty-<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['product']->value['id_product'], ENT_QUOTES, 'UTF-8');?>
" class="sr-only"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'%productName% product quantity field','sprintf'=>array('%productName%'=>$_smarty_tpl->tpl_vars['product']->value['name']),'d'=>'Shop.Theme.Checkout'),$_smarty_tpl ) );?>
</label>
							  <input id="qty-<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['product']->value['id_product'], ENT_QUOTES, 'UTF-8');?>
" type="number" name="qty" value="<?php if ($_smarty_tpl->tpl_vars['product']->value['minimal_quantity']) {
echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['product']->value['minimal_quantity'], ENT_QUOTES, 'UTF-8');
} else { ?>1<?php }?>" min="<?php if ($_smarty_tpl->tpl_vars['product']->value['minimal_quantity']) {
echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['product']->value['minimal_quantity'], ENT_QUOTES, 'UTF-8');
} else { ?>1<?php }?>" max="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['product']->value['quantity'], ENT_QUOTES, 'UTF-8');?>
">
							  <button type="button" aria-label="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Increase quantity for %s','sprintf'=>array($_smarty_tpl->tpl_vars['product']->value['name']),'d'=>'Shop.Theme.Catalog'),$_smarty_tpl ) );?>
" onclick="this.parentNode.querySelector('input[type=number]').stepUp()" class="qty_btn qty_plus"><i class="material-icons touchspin-up" aria-hidden="true"></i></button>
							  <button type="button" aria-label="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Decrease quantity for %s','sprintf'=>array($_smarty_tpl->tpl_vars['product']->value['name']),'d'=>'Shop.Theme.Catalog'),$_smarty_tpl ) );?>
" onclick="this.parentNode.querySelector('input[type=number]').stepDown()" class="qty_btn qty_minus"><i class="material-icons touchspin-down" aria-hidden="true"></i></button>
						  </div>

							<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>'displayPLCombinations','product'=>$_smarty_tpl->tpl_vars['product']->value),$_smarty_tpl ) );?>


							<?php if (!$_smarty_tpl->tpl_vars['product']->value['add_to_cart_url'] && $_smarty_tpl->tpl_vars['product']->value['quantity'] > 0 && !$_smarty_tpl->tpl_vars['product']->value['customization_required']) {?>

							  <a class="btn add-to-cart quick-view" href="<?php echo htmlspecialchars((string) call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['product']->value['link'],'html','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
" title="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Product Details','d'=>'Shop.Theme.Catalog'),$_smarty_tpl ) );?>
">
								<i class="material-icons shopping-cart"></i>
								<span><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'View details','d'=>'Admin.Actions'),$_smarty_tpl ) );?>
</span>
							  </a>

							<?php } else { ?>

								<?php if ((!(isset($_smarty_tpl->tpl_vars['product']->value['customization_required'])) || !$_smarty_tpl->tpl_vars['product']->value['customization_required']) && ($_smarty_tpl->tpl_vars['product']->value['allow_oosp'] || $_smarty_tpl->tpl_vars['product']->value['quantity'] > 0)) {?>
								  <button class="btn add-to-cart" data-button-action="add-to-cart" type="submit">
									<i class="material-icons shopping-cart"></i>
									<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Add to cart','d'=>'Shop.Theme.Actions'),$_smarty_tpl ) );?>

								  </button>
								<?php } else { ?>
								  <button class="btn add-to-cart" data-button-action="add-to-cart" type="submit" disabled>
									<i class="material-icons shopping-cart"></i>
									<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Add to cart','d'=>'Shop.Theme.Actions'),$_smarty_tpl ) );?>

								  </button>
								<?php }?>

							<?php }?>

							<a class="button lnk_view btn" href="<?php echo htmlspecialchars((string) call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['product']->value['link'],'html','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
" >
								<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'More','d'=>'Shop.Theme.Mytheme'),$_smarty_tpl ) );?>
 <span class="sr-only"><?php echo htmlspecialchars((string) call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'truncate' ][ 0 ], array( $_smarty_tpl->tpl_vars['product']->value['name'],160,'...' )), ENT_QUOTES, 'UTF-8');?>
</span>
							</a>

						</form>
					<?php }?>

					<?php if ($_smarty_tpl->tpl_vars['configuration']->value['is_catalog']) {?>
						<a class="button lnk_view btn" href="<?php echo htmlspecialchars((string) call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['product']->value['link'],'html','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
" >
							<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'More','d'=>'Shop.Theme.Mytheme'),$_smarty_tpl ) );?>
 <span class="sr-only"><?php echo htmlspecialchars((string) call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'truncate' ][ 0 ], array( $_smarty_tpl->tpl_vars['product']->value['name'],160,'...' )), ENT_QUOTES, 'UTF-8');?>
</span>
						</a>
					<?php }?>

				</div>

				<?php if (!$_smarty_tpl->tpl_vars['configuration']->value['is_catalog']) {?>

					<?php if ((isset($_smarty_tpl->tpl_vars['enableconfig']->value)) && (isset($_smarty_tpl->tpl_vars['css33']->value)) && ($_smarty_tpl->tpl_vars['enableconfig']->value == 1 || $_smarty_tpl->tpl_vars['css33']->value == "pl_availability_no")) {?>
						<div class="availability">
						<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_18385426466932d725dd6362_14213896', 'product_availability', $this->tplIndex);
?>

						</div>
					<?php }?>

					<?php if ((isset($_smarty_tpl->tpl_vars['enableconfig']->value)) && (isset($_smarty_tpl->tpl_vars['css67']->value)) && ($_smarty_tpl->tpl_vars['enableconfig']->value == 1 || $_smarty_tpl->tpl_vars['css67']->value == "pl_stock_no")) {?>
					  <div class="pl_availability_stock">
						<strong><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'In stock','d'=>'Shop.Theme.Catalog'),$_smarty_tpl ) );?>
:</strong>
						<span><?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['product']->value['quantity'], ENT_QUOTES, 'UTF-8');?>
</span>
					  </div>
					<?php }?> 

				<?php }?>

				<?php if ((isset($_smarty_tpl->tpl_vars['enableconfig']->value)) && (isset($_smarty_tpl->tpl_vars['css51']->value)) && ($_smarty_tpl->tpl_vars['enableconfig']->value == 1 || $_smarty_tpl->tpl_vars['css51']->value == "pl_colors_no")) {?>
				<div class="highlighted-informations<?php if (!$_smarty_tpl->tpl_vars['product']->value['main_variants']) {?> no-variants<?php }?> hidden-sm-down">
					<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_7204083076932d725ddaaa8_22851623', 'product_variants', $this->tplIndex);
?>

				</div>
				<?php }?>

			</div>
		</div>

		<div class="clearfix"></div>

    </div>
  </article>
<?php
}
}
/* {/block 'product_miniature_item'} */
}
