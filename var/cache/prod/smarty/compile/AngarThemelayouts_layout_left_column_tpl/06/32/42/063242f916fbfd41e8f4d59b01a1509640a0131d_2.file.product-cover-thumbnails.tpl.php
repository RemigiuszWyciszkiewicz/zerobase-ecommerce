<?php
/* Smarty version 4.3.4, created on 2025-12-05 14:58:26
  from '/home/zerobat/www/themes/AngarTheme/templates/catalog/_partials/product-cover-thumbnails.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.4',
  'unifunc' => 'content_6932e5028a7579_63701338',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '063242f916fbfd41e8f4d59b01a1509640a0131d' => 
    array (
      0 => '/home/zerobat/www/themes/AngarTheme/templates/catalog/_partials/product-cover-thumbnails.tpl',
      1 => 1764937860,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6932e5028a7579_63701338 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'/home/zerobat/www/vendor/smarty/smarty/libs/plugins/modifier.count.php','function'=>'smarty_modifier_count',),));
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, false);
?>


<div class="images-container">

<?php if ((defined('_PS_VERSION_') ? constant('_PS_VERSION_') : null) >= '1.7.7.0') {?>

  <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_3198807306932e502895b81_15050046', 'product_cover');
?>


<?php } else { ?>
	
  <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_20095990256932e50289dbf1_01533147', 'product_cover');
?>


<?php }?>

  <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_5113676286932e5028a0533_16971385', 'product_images');
?>

</div>
<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>'displayAfterProductThumbs'),$_smarty_tpl ) );?>


<?php if ($_smarty_tpl->tpl_vars['page']->value['page_name'] == 'product') {
if (smarty_modifier_count($_smarty_tpl->tpl_vars['product']->value['images']) > 1) {?>

<?php echo '<script'; ?>
>
(function() {

  function initGallery(container) {
    const thumbnails     = Array.from(container.querySelectorAll('.js-thumb'));
    const mainImage      = container.querySelector('.js-qv-product-cover');
    const arrowLeft      = container.querySelector('#arrow-left-cover');
    const arrowRight     = container.querySelector('#arrow-right-cover');
    // use the container itself as swipe‐wrapper
    const imageContainer = container;
    
    if (!mainImage || thumbnails.length === 0) return;
    
    let currentIndex = 0,
        touchStartX  = 0,
        touchEndX    = 0;
    
	function updateMainImage(i) {
	  const thumb = thumbnails[i];
	  const src   = thumb.dataset.imageLargeSrc || thumb.dataset.imageMediumSrc;

	  // If there are <source> elements, try updating them too
	  const picture = mainImage.closest('picture');
	  if (picture) {
		const sourceWebp = picture.querySelector('source[type="image/webp"]');
		const sourceAvif = picture.querySelector('source[type="image/avif"]');

		// Try to build new filenames by changing the extension
		if (sourceWebp) {
		  const webpSrc = src.replace(/\.(jpe?g|png)$/i, '.webp');
		  sourceWebp.srcset = webpSrc;
		}
		if (sourceAvif) {
		  const avifSrc = src.replace(/\.(jpe?g|png)$/i, '.avif');
		  sourceAvif.srcset = avifSrc;
		}
	  }

	  // Finally update <img src>
	  mainImage.src = src;

	  // Update selected thumb class
	  thumbnails.forEach((t, idx) => t.classList.toggle('selected', idx === i));
	  currentIndex = i;
	}
    
    arrowLeft?.addEventListener('click', () => {
      updateMainImage((currentIndex - 1 + thumbnails.length) % thumbnails.length);
    });
    arrowRight?.addEventListener('click', () => {
      updateMainImage((currentIndex + 1) % thumbnails.length);
    });
    thumbnails.forEach((t,i) => {
      t.addEventListener('click', () => updateMainImage(i));
    });
    
    // swipe on mobile
    imageContainer.addEventListener('touchstart', e => {
      touchStartX = e.changedTouches[0].screenX;
    }, {passive: true});
    imageContainer.addEventListener('touchend', e => {
      touchEndX = e.changedTouches[0].screenX;
      if (touchEndX < touchStartX) {
        updateMainImage((currentIndex + 1) % thumbnails.length);
      } else if (touchEndX > touchStartX) {
        updateMainImage((currentIndex - 1 + thumbnails.length) % thumbnails.length);
      }
    });
    
    // init first image
    updateMainImage(0);
  }
  
  // 1) Initialize all galleries that are not in QuickView
  document.querySelectorAll('.images-container')
    .forEach(c => {
      if (!c.closest('.quickview')) {
        initGallery(c);
      }
    });
  
  // 2) If there is a QuickView, then initialize the gallery there
  const qvLeft = document.querySelector('.quickview_left');
  if (qvLeft) {
    const qvContainer = qvLeft.querySelector('.images-container');
    if (qvContainer) {
      initGallery(qvContainer);
    }
  }
})();
<?php echo '</script'; ?>
>

<?php }
}
}
/* {block 'product_cover'} */
class Block_3198807306932e502895b81_15050046 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'product_cover' => 
  array (
    0 => 'Block_3198807306932e502895b81_15050046',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'/home/zerobat/www/vendor/smarty/smarty/libs/plugins/modifier.count.php','function'=>'smarty_modifier_count',),));
?>

    <div class="product-cover">
	  	  <?php if (!empty($_smarty_tpl->tpl_vars['product']->value['cover']['bySize']['home_default']['url'])) {?>
        <picture>
			<?php if (!empty($_smarty_tpl->tpl_vars['product']->value['default_image']['bySize']['large_default']['sources']['avif'])) {?><source srcset="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['product']->value['default_image']['bySize']['large_default']['sources']['avif'], ENT_QUOTES, 'UTF-8');?>
" type="image/avif"><?php }?>
			<?php if (!empty($_smarty_tpl->tpl_vars['product']->value['default_image']['bySize']['large_default']['sources']['webp'])) {?><source srcset="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['product']->value['default_image']['bySize']['large_default']['sources']['webp'], ENT_QUOTES, 'UTF-8');?>
" type="image/webp"><?php }?>
			  <img
				class="js-qv-product-cover img-fluid"
				src="<?php if (!empty($_smarty_tpl->tpl_vars['product']->value['default_image']['bySize']['large_default']['url'])) {
echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['product']->value['default_image']['bySize']['large_default']['url'], ENT_QUOTES, 'UTF-8');
} else {
echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['product']->value['cover']['bySize']['large_default']['url'], ENT_QUOTES, 'UTF-8');
}?>"
				<?php if (!empty($_smarty_tpl->tpl_vars['product']->value['default_image']['legend'])) {?>
				  alt="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['product']->value['default_image']['legend'], ENT_QUOTES, 'UTF-8');?>
"
				  title="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['product']->value['default_image']['legend'], ENT_QUOTES, 'UTF-8');?>
"
				<?php } else { ?>
				  alt="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['product']->value['name'], ENT_QUOTES, 'UTF-8');?>
"
				<?php }?>
				loading="lazy"
				width="<?php if (!empty($_smarty_tpl->tpl_vars['product']->value['default_image']['bySize']['large_default']['width'])) {
echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['product']->value['default_image']['bySize']['large_default']['width'], ENT_QUOTES, 'UTF-8');
} else {
echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['product']->value['cover']['bySize']['large_default']['width'], ENT_QUOTES, 'UTF-8');
}?>"
				height="<?php if (!empty($_smarty_tpl->tpl_vars['product']->value['default_image']['bySize']['large_default']['height'])) {
echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['product']->value['default_image']['bySize']['large_default']['height'], ENT_QUOTES, 'UTF-8');
} else {
echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['product']->value['cover']['bySize']['large_default']['height'], ENT_QUOTES, 'UTF-8');
}?>">
        </picture>
	  <?php } else { ?>
		<picture>
		  <?php if (!empty($_smarty_tpl->tpl_vars['urls']->value['no_picture_image']['bySize']['large_default']['sources']['avif'])) {?><source srcset="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['urls']->value['no_picture_image']['bySize']['large_default']['sources']['avif'], ENT_QUOTES, 'UTF-8');?>
" type="image/avif"><?php }?>
		  <?php if (!empty($_smarty_tpl->tpl_vars['urls']->value['no_picture_image']['bySize']['large_default']['sources']['webp'])) {?><source srcset="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['urls']->value['no_picture_image']['bySize']['large_default']['sources']['webp'], ENT_QUOTES, 'UTF-8');?>
" type="image/webp"><?php }?>
		  <img
			class="img-fluid"
			src="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['urls']->value['no_picture_image']['bySize']['large_default']['url'], ENT_QUOTES, 'UTF-8');?>
"
			loading="lazy"
			width="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['urls']->value['no_picture_image']['bySize']['large_default']['width'], ENT_QUOTES, 'UTF-8');?>
"
			height="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['urls']->value['no_picture_image']['bySize']['large_default']['height'], ENT_QUOTES, 'UTF-8');?>
">
		</picture>
	  <?php }?>
      <div class="layer hidden-sm-down" data-toggle="modal" data-target="#product-modal">
        <i class="material-icons zoom-in">&#xE8FF;</i>
      </div>
	  <?php if (smarty_modifier_count($_smarty_tpl->tpl_vars['product']->value['images']) > 1) {?>
		<div id="arrow-left-cover" class="gallery_arrows arrow_left"></div>
		<div id="arrow-right-cover" class="gallery_arrows arrow_right"></div>
	  <?php }?>
    </div>
  <?php
}
}
/* {/block 'product_cover'} */
/* {block 'product_cover'} */
class Block_20095990256932e50289dbf1_01533147 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'product_cover' => 
  array (
    0 => 'Block_20095990256932e50289dbf1_01533147',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'/home/zerobat/www/vendor/smarty/smarty/libs/plugins/modifier.count.php','function'=>'smarty_modifier_count',),));
?>

	<div class="product-cover">
	  	  <?php if (!empty($_smarty_tpl->tpl_vars['product']->value['cover']['bySize']['home_default']['url'])) {?>
		<img class="js-qv-product-cover" src="<?php if (!empty($_smarty_tpl->tpl_vars['product']->value['default_image']['bySize']['large_default']['url'])) {
echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['product']->value['default_image']['bySize']['large_default']['url'], ENT_QUOTES, 'UTF-8');
} else {
echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['product']->value['cover']['bySize']['large_default']['url'], ENT_QUOTES, 'UTF-8');
}?>" alt="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['product']->value['cover']['legend'], ENT_QUOTES, 'UTF-8');?>
" title="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['product']->value['cover']['legend'], ENT_QUOTES, 'UTF-8');?>
" style="width:100%;" itemprop="image">
	  <?php } else { ?>
		<img class="js-qv-product-cover" src="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['urls']->value['img_url'], ENT_QUOTES, 'UTF-8');?>
en-default-large_default.jpg" style="width:100%;" itemprop="image">
	  <?php }?>
	  <div class="layer hidden-sm-down" data-toggle="modal" data-target="#product-modal">
		<i class="material-icons zoom-in">&#xE8FF;</i>
	  </div>
	<?php if ($_smarty_tpl->tpl_vars['page']->value['page_name'] == 'product') {?>
	  <?php if (smarty_modifier_count($_smarty_tpl->tpl_vars['product']->value['images']) > 1) {?>
		<div id="arrow-left-cover" class="gallery_arrows arrow_left"></div>
		<div id="arrow-right-cover" class="gallery_arrows arrow_right"></div>
	  <?php }?>
	<?php }?>
	</div>
  <?php
}
}
/* {/block 'product_cover'} */
/* {block 'product_images'} */
class Block_5113676286932e5028a0533_16971385 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'product_images' => 
  array (
    0 => 'Block_5113676286932e5028a0533_16971385',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'/home/zerobat/www/vendor/smarty/smarty/libs/plugins/modifier.count.php','function'=>'smarty_modifier_count',),));
?>

    <div id="thumb_box" class="js-qv-mask mask <?php if (smarty_modifier_count($_smarty_tpl->tpl_vars['product']->value['images']) > 2) {?>thumb_center<?php } else { ?>thumb_left<?php }?> <?php if (smarty_modifier_count($_smarty_tpl->tpl_vars['product']->value['images']) > 3) {?>show_thumb_arrow<?php }?> <?php if (smarty_modifier_count($_smarty_tpl->tpl_vars['product']->value['images']) == 1) {?>hide_thumbnails<?php }?>">
      <ul class="product-images js-qv-product-images">
        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['product']->value['images'], 'image');
$_smarty_tpl->tpl_vars['image']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['image']->value) {
$_smarty_tpl->tpl_vars['image']->do_else = false;
?>
          <li class="thumb-container">
            <picture>
              <?php if (!empty($_smarty_tpl->tpl_vars['image']->value['bySize']['small_default']['sources']['avif'])) {?><source srcset="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['image']->value['bySize']['small_default']['sources']['avif'], ENT_QUOTES, 'UTF-8');?>
" type="image/avif"><?php }?>
              <?php if (!empty($_smarty_tpl->tpl_vars['image']->value['bySize']['small_default']['sources']['webp'])) {?><source srcset="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['image']->value['bySize']['small_default']['sources']['webp'], ENT_QUOTES, 'UTF-8');?>
" type="image/webp"><?php }?>
              <img
                class="thumb js-thumb <?php if ($_smarty_tpl->tpl_vars['image']->value['id_image'] == $_smarty_tpl->tpl_vars['product']->value['cover']['id_image']) {?> selected <?php }?>"
                data-image-medium-src="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['image']->value['bySize']['medium_default']['url'], ENT_QUOTES, 'UTF-8');?>
"
                <?php if (!empty($_smarty_tpl->tpl_vars['image']->value['bySize']['medium_default']['sources'])) {?>data-image-medium-sources="<?php echo htmlspecialchars((string) call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'json_encode' ][ 0 ], array( $_smarty_tpl->tpl_vars['image']->value['bySize']['medium_default']['sources'] )), ENT_QUOTES, 'UTF-8');?>
"<?php }?>
                data-image-large-src="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['image']->value['bySize']['large_default']['url'], ENT_QUOTES, 'UTF-8');?>
"
                <?php if (!empty($_smarty_tpl->tpl_vars['image']->value['bySize']['large_default']['sources'])) {?>data-image-large-sources="<?php echo htmlspecialchars((string) call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'json_encode' ][ 0 ], array( $_smarty_tpl->tpl_vars['image']->value['bySize']['large_default']['sources'] )), ENT_QUOTES, 'UTF-8');?>
"<?php }?>
                src="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['image']->value['bySize']['home_default']['url'], ENT_QUOTES, 'UTF-8');?>
"
                <?php if (!empty($_smarty_tpl->tpl_vars['image']->value['legend'])) {?>
                  alt="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['image']->value['legend'], ENT_QUOTES, 'UTF-8');?>
"
                  title="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['image']->value['legend'], ENT_QUOTES, 'UTF-8');?>
"
                <?php } else { ?>
                  alt="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['product']->value['name'], ENT_QUOTES, 'UTF-8');?>
"
                <?php }?>
                loading="lazy"
                width="100"
              >
            </picture>
          </li>
        <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
      </ul>
    </div>
  <?php
}
}
/* {/block 'product_images'} */
}
