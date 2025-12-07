<?php
/* Smarty version 4.3.4, created on 2025-12-05 14:58:26
  from '/home/zerobat/www/themes/AngarTheme/templates/catalog/_partials/product-images-modal.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.4',
  'unifunc' => 'content_6932e502a88c21_95671669',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '3f2fe1035d201a502cdf28049d48a8e5cc149d15' => 
    array (
      0 => '/home/zerobat/www/themes/AngarTheme/templates/catalog/_partials/product-images-modal.tpl',
      1 => 1764937860,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6932e502a88c21_95671669 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'/home/zerobat/www/vendor/smarty/smarty/libs/plugins/modifier.count.php','function'=>'smarty_modifier_count',),));
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, false);
?>


<div class="modal fade js-product-images-modal" id="product-modal">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-body">
        <?php $_smarty_tpl->_assignInScope('imagesCount', smarty_modifier_count($_smarty_tpl->tpl_vars['product']->value['images']));?>
        <figure>
		  		  <?php if (!empty($_smarty_tpl->tpl_vars['product']->value['cover']['bySize']['home_default']['url'])) {?>
			<img class="js-modal-product-cover product-cover-modal" width="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['product']->value['cover']['large']['width'], ENT_QUOTES, 'UTF-8');?>
" src="<?php if (!empty($_smarty_tpl->tpl_vars['product']->value['default_image']['bySize']['large_default']['url'])) {
echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['product']->value['default_image']['bySize']['large_default']['url'], ENT_QUOTES, 'UTF-8');
} else {
echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['product']->value['cover']['bySize']['large_default']['url'], ENT_QUOTES, 'UTF-8');
}?>" alt="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['product']->value['cover']['legend'], ENT_QUOTES, 'UTF-8');?>
" title="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['product']->value['cover']['legend'], ENT_QUOTES, 'UTF-8');?>
">
		  <?php } else { ?>
			<img class="js-modal-product-cover product-cover-modal" src="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['urls']->value['img_url'], ENT_QUOTES, 'UTF-8');?>
en-default-large_default.jpg">
		  <?php }?>
          <?php if ($_smarty_tpl->tpl_vars['imagesCount']->value > 1) {?>
			<div id="arrow-left-modal" class="gallery_arrows arrow_left"></div>
			<div id="arrow-right-modal" class="gallery_arrows arrow_right"></div>
          <?php }?>
          <figcaption class="image-caption">
          <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_9030664526932e502a84302_96256879', 'product_description_short');
?>

          </figcaption>
        </figure>
        <aside id="thumbnails" class="thumbnails js-thumbnails text-sm-center">
          <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_6961307496932e502a850d2_41237328', 'product_images');
?>

          <?php if ($_smarty_tpl->tpl_vars['imagesCount']->value > 5) {?>
            <div class="arrows js-modal-arrows">
              <i class="material-icons arrow-up js-modal-arrow-up">&#xE5C7;</i>
              <i class="material-icons arrow-down js-modal-arrow-down">&#xE5C5;</i>
            </div>
          <?php }?>
        </aside>
      </div>
    </div><!-- /.modal-content -->
  </div><!-- /.modal-dialog -->
</div><!-- /.modal -->

<?php if ($_smarty_tpl->tpl_vars['page']->value['page_name'] == 'product') {
if ($_smarty_tpl->tpl_vars['imagesCount']->value > 1) {?>

<?php echo '<script'; ?>
>
  (function() {
    // 1) grab modal thumbnails and main image
    const thumbnails = document.querySelectorAll('.js-modal-thumb');
    const mainImage  = document.querySelector('.js-modal-product-cover');
    const arrowLeft  = document.getElementById('arrow-left-modal');
    const arrowRight = document.getElementById('arrow-right-modal');

    // 2) abort if modal DOM isn’t ready yet or no thumbs
    if (!mainImage || thumbnails.length === 0) return;

    let currentIndex = 0;

    /**
     * Swap the main image inside the modal
     * @param {number} idx
     */
    function updateMainImage(idx) {
      // highlight the active thumbnail
      thumbnails.forEach((t, i) => t.classList.toggle('selected', i === idx));
      // read correct data-attribute
      const newSrc = thumbnails[idx].getAttribute('data-image-large-src');
      mainImage.src = newSrc;
      currentIndex = idx;
    }

    // 3) left arrow click
    arrowLeft?.addEventListener('click', () => {
      const prev = (currentIndex - 1 + thumbnails.length) % thumbnails.length;
      updateMainImage(prev);
    });

    // 4) right arrow click
    arrowRight?.addEventListener('click', () => {
      const next = (currentIndex + 1) % thumbnails.length;
      updateMainImage(next);
    });

    // 5) Left/Right key on the keyboard
    document.addEventListener('keydown', (event) => {
      if (event.key === 'ArrowLeft') {
        const prevKey = (currentIndex === 0)
          ? thumbnails.length - 1
          : currentIndex - 1;
        updateMainImage(prevKey);
      } else if (event.key === 'ArrowRight') {
        const nextKey = (currentIndex === thumbnails.length - 1)
          ? 0
          : currentIndex + 1;
        updateMainImage(nextKey);
      }
    });

    // 6) initialize first image
    updateMainImage(0);
  })();
<?php echo '</script'; ?>
>

<?php }
}
}
/* {block 'product_description_short'} */
class Block_9030664526932e502a84302_96256879 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'product_description_short' => 
  array (
    0 => 'Block_9030664526932e502a84302_96256879',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

            <?php if ($_smarty_tpl->tpl_vars['product']->value['description_short']) {?><div id="product-description-short"><?php echo $_smarty_tpl->tpl_vars['product']->value['description_short'];?>
</div><?php }?>
          <?php
}
}
/* {/block 'product_description_short'} */
/* {block 'product_images'} */
class Block_6961307496932e502a850d2_41237328 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'product_images' => 
  array (
    0 => 'Block_6961307496932e502a850d2_41237328',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

            <div class="js-modal-mask mask <?php if ($_smarty_tpl->tpl_vars['imagesCount']->value <= 5) {?>nomargin<?php }?> <?php if ($_smarty_tpl->tpl_vars['imagesCount']->value >= 6) {?>img_scroll<?php }?> <?php if ($_smarty_tpl->tpl_vars['product']->value['description_short']) {
} else { ?>no_short_desc<?php }?>">
              <ul class="product-images js-modal-product-images">
                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['product']->value['images'], 'image');
$_smarty_tpl->tpl_vars['image']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['image']->value) {
$_smarty_tpl->tpl_vars['image']->do_else = false;
?>
                  <li class="thumb-container">
					<picture>
                        <img data-image-large-src="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['image']->value['large']['url'], ENT_QUOTES, 'UTF-8');?>
" class="thumb js-modal-thumb" src="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['image']->value['medium']['url'], ENT_QUOTES, 'UTF-8');?>
" alt="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['image']->value['legend'], ENT_QUOTES, 'UTF-8');?>
" title="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['image']->value['legend'], ENT_QUOTES, 'UTF-8');?>
" width="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['image']->value['medium']['width'], ENT_QUOTES, 'UTF-8');?>
">
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
