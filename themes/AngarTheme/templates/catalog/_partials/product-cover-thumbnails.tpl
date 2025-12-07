{**
 * 2007-2025 PrestaShop
 *
 * NOTICE OF LICENSE
 *
 * This source file is subject to the Academic Free License 3.0 (AFL-3.0)
 * that is bundled with this package in the file LICENSE.txt.
 * It is also available through the world-wide-web at this URL:
 * https://opensource.org/licenses/AFL-3.0
 * If you did not receive a copy of the license and are unable to
 * obtain it through the world-wide-web, please send an email
 * to license@prestashop.com so we can send you a copy immediately.
 *
 * DISCLAIMER
 *
 * Do not edit or add to this file if you wish to upgrade PrestaShop to newer
 * versions in the future. If you wish to customize PrestaShop for your
 * needs please refer to http://www.prestashop.com for more information.
 *
 * @author    PrestaShop SA <contact@prestashop.com>
 * @copyright 2007-2025 PrestaShop SA
 * @license   https://opensource.org/licenses/AFL-3.0 Academic Free License 3.0 (AFL-3.0)
 * International Registered Trademark & Property of PrestaShop SA
 *}

{* AngarTheme *}

<div class="images-container">

{if $smarty.const._PS_VERSION_ >= '1.7.7.0'}

  {block name='product_cover'}
    <div class="product-cover">
	  {* AngarTheme *}
	  {if !empty($product.cover.bySize.home_default.url)}
        <picture>
			{if !empty($product.default_image.bySize.large_default.sources.avif)}<source srcset="{$product.default_image.bySize.large_default.sources.avif}" type="image/avif">{/if}
			{if !empty($product.default_image.bySize.large_default.sources.webp)}<source srcset="{$product.default_image.bySize.large_default.sources.webp}" type="image/webp">{/if}
			  <img
				class="js-qv-product-cover img-fluid"
				src="{if !empty($product.default_image.bySize.large_default.url)}{$product.default_image.bySize.large_default.url}{else}{$product.cover.bySize.large_default.url}{/if}"
				{if !empty($product.default_image.legend)}
				  alt="{$product.default_image.legend}"
				  title="{$product.default_image.legend}"
				{else}
				  alt="{$product.name}"
				{/if}
				loading="lazy"
				width="{if !empty($product.default_image.bySize.large_default.width)}{$product.default_image.bySize.large_default.width}{else}{$product.cover.bySize.large_default.width}{/if}"
				height="{if !empty($product.default_image.bySize.large_default.height)}{$product.default_image.bySize.large_default.height}{else}{$product.cover.bySize.large_default.height}{/if}">
        </picture>
	  {else}
		<picture>
		  {if !empty($urls.no_picture_image.bySize.large_default.sources.avif)}<source srcset="{$urls.no_picture_image.bySize.large_default.sources.avif}" type="image/avif">{/if}
		  {if !empty($urls.no_picture_image.bySize.large_default.sources.webp)}<source srcset="{$urls.no_picture_image.bySize.large_default.sources.webp}" type="image/webp">{/if}
		  <img
			class="img-fluid"
			src="{$urls.no_picture_image.bySize.large_default.url}"
			loading="lazy"
			width="{$urls.no_picture_image.bySize.large_default.width}"
			height="{$urls.no_picture_image.bySize.large_default.height}">
		</picture>
	  {/if}
      <div class="layer hidden-sm-down" data-toggle="modal" data-target="#product-modal">
        <i class="material-icons zoom-in">&#xE8FF;</i>
      </div>
	  {if $product.images|count > 1}
		<div id="arrow-left-cover" class="gallery_arrows arrow_left"></div>
		<div id="arrow-right-cover" class="gallery_arrows arrow_right"></div>
	  {/if}
    </div>
  {/block}

{else}
	
  {block name='product_cover'}
	<div class="product-cover">
	  {* AngarTheme *}
	  {if !empty($product.cover.bySize.home_default.url)}
		<img class="js-qv-product-cover" src="{if !empty($product.default_image.bySize.large_default.url)}{$product.default_image.bySize.large_default.url}{else}{$product.cover.bySize.large_default.url}{/if}" alt="{$product.cover.legend}" title="{$product.cover.legend}" style="width:100%;" itemprop="image">
	  {else}
		<img class="js-qv-product-cover" src="{$urls.img_url}en-default-large_default.jpg" style="width:100%;" itemprop="image">
	  {/if}
	  <div class="layer hidden-sm-down" data-toggle="modal" data-target="#product-modal">
		<i class="material-icons zoom-in">&#xE8FF;</i>
	  </div>
	{if $page.page_name == 'product'}
	  {if $product.images|count > 1}
		<div id="arrow-left-cover" class="gallery_arrows arrow_left"></div>
		<div id="arrow-right-cover" class="gallery_arrows arrow_right"></div>
	  {/if}
	{/if}
	</div>
  {/block}

{/if}

  {block name='product_images'}
    <div id="thumb_box" class="js-qv-mask mask {if $product.images|count > 2}thumb_center{else}thumb_left{/if} {if $product.images|count > 3}show_thumb_arrow{/if} {if $product.images|count == 1}hide_thumbnails{/if}">
      <ul class="product-images js-qv-product-images">
        {foreach from=$product.images item=image}
          <li class="thumb-container">
            <picture>
              {if !empty($image.bySize.small_default.sources.avif)}<source srcset="{$image.bySize.small_default.sources.avif}" type="image/avif">{/if}
              {if !empty($image.bySize.small_default.sources.webp)}<source srcset="{$image.bySize.small_default.sources.webp}" type="image/webp">{/if}
              <img
                class="thumb js-thumb {if $image.id_image == $product.cover.id_image} selected {/if}"
                data-image-medium-src="{$image.bySize.medium_default.url}"
                {if !empty($image.bySize.medium_default.sources)}data-image-medium-sources="{$image.bySize.medium_default.sources|@json_encode}"{/if}
                data-image-large-src="{$image.bySize.large_default.url}"
                {if !empty($image.bySize.large_default.sources)}data-image-large-sources="{$image.bySize.large_default.sources|@json_encode}"{/if}
                src="{$image.bySize.home_default.url}"
                {if !empty($image.legend)}
                  alt="{$image.legend}"
                  title="{$image.legend}"
                {else}
                  alt="{$product.name}"
                {/if}
                loading="lazy"
                width="100"
              >
            </picture>
          </li>
        {/foreach}
      </ul>
    </div>
  {/block}
</div>
{hook h='displayAfterProductThumbs'}

{if $page.page_name == 'product'}
{if $product.images|count > 1}
{literal}
<script>
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
</script>
{/literal}
{/if}
{/if}