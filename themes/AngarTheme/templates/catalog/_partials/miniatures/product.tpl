{**
 * Copyright since 2007 PrestaShop SA and Contributors
 * PrestaShop is an International Registered Trademark & Property of PrestaShop SA
 *
 * NOTICE OF LICENSE
 *
 * This source file is subject to the Academic Free License 3.0 (AFL-3.0)
 * that is bundled with this package in the file LICENSE.md.
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
 * needs please refer to https://devdocs.prestashop.com/ for more information.
 *
 * @author    PrestaShop SA and Contributors <contact@prestashop.com>
 * @copyright Since 2007 PrestaShop SA and Contributors
 * @license   https://opensource.org/licenses/AFL-3.0 Academic Free License 3.0 (AFL-3.0)
 *}

{* AngarTheme *}

{block name='product_miniature_item'}
  <article class="product-miniature js-product-miniature{foreach from=$product.flags item=flag}{if $flag.type == "out_of_stock"} product_out_of_stock{/if}{/foreach}" data-id-product="{$product.id_product}" data-id-product-attribute="{$product.id_product_attribute}" aria-label="{$product.name|truncate:160:'...'}">
    <div class="thumbnail-container">

		<div class="product-left">
			<div class="product-image-container">
				{block name='product_flags'}
				<a href="{$product.url}" class="product-flags-plist" aria-label="{$product.name|escape:'html':'UTF-8'}">
					{if $product.reduction != 0}
						{if $product.discount_type === 'percentage'}
							<span class="product-flag discount-percentage">{$product.discount_percentage}</span>
						{/if}
						{if $product.discount_type === 'amount'}
							<span class="product-flag discount-percentage">- {$product.discount_amount}</span>
						{/if}
					{/if}
					{foreach from=$product.flags item=flag}
						{if $flag.type === 'discount'}
							<span class="product-flag {$flag.type}">{l s='Reduced price' d='Shop.Theme.Catalog'}</span>
						{else}
							<span class="product-flag {$flag.type}">{$flag.label}</span>
						{/if}
					{/foreach}
				</a>
				{/block}

				{block name='product_thumbnail'}
				{* AngarTheme *}
				<a href="{$product.url}" class="thumbnail product-thumbnail">
					<picture>
						{if !empty($product.cover.bySize.home_default.url)}
						  {if !empty($product.cover.bySize.home_default.sources.avif)}<source srcset="{$product.cover.bySize.home_default.sources.avif}" type="image/avif">{/if}
						  {if !empty($product.cover.bySize.home_default.sources.webp)}<source srcset="{$product.cover.bySize.home_default.sources.webp}" type="image/webp">{/if}
						  <img
							src = "{$product.cover.bySize.home_default.url}"
							alt = "{if !empty($product.cover.legend)}{$product.cover.legend}{else}{$product.name|truncate:30:'...'}{/if}"
							data-full-size-image-url = "{$product.cover.large.url}" {if isset($product.cover.bySize.home_default)} 
							{if $page.page_name != 'product'}loading="lazy"{/if}
							width="{$product.cover.bySize.home_default.width}" height="{$product.cover.bySize.home_default.height}" {/if}
						  >
						{else}
							{if $smarty.const._PS_VERSION_ >= '1.7.6.0'}
								<img
									src="{$urls.no_picture_image.bySize.home_default.url}"
									{if $page.page_name != 'product'}loading="lazy"{/if}
									width="{$urls.no_picture_image.bySize.home_default.width}"
									height="{$urls.no_picture_image.bySize.home_default.height}"
								/>
							{else}
								<img src = "{$urls.img_url}en-default-home_default.jpg" {if $page.page_name != 'product'}loading="lazy"{/if}>
							{/if}
						{/if}

						{if isset($enableconfig) && isset($css78) && ($enableconfig == 1 OR $css78 == "pl_gallery_type_2")}
							{foreach from=$product.images item=image}
								{if ($image.cover != 1)}
									<picture>
									  {if !empty($image.bySize.home_default.sources.avif)}
										<source srcset="{$image.bySize.home_default.sources.avif}" type="image/avif">
									  {/if}
									  {if !empty($image.bySize.home_default.sources.webp)}
										<source srcset="{$image.bySize.home_default.sources.webp}" type="image/webp">
									  {/if}
									  <img class="subimage"
										src="{$image.bySize.home_default.url}" 
										alt="{$product.cover.legend}" 
										{if $page.page_name != 'product'}loading="lazy"{/if}
										width="{$image.bySize.home_default.width}" 
										height="{$image.bySize.home_default.height}" 
										data-full-size-image-url="{$image.bySize.home_default.url}">
									</picture>
									{break}
								{/if}
							{/foreach}
						{/if}

						{if isset($enableconfig) && isset($css78) && ($enableconfig == 1 OR $css78 == "pl_gallery_type_3")}     
							{if isset($product.images) && $product.images|@count > 1}
							  <div class="pl_gallery_slider">
								{foreach from=$product.images item=image name=imgs}
								  <div
									class="image_thumb{if $smarty.foreach.imgs.first} selected{/if}"
									data-hover-slider-image="{$image.bySize.home_default.url}"
								  ></div>
								{/foreach}
							  </div>
							{/if}
						{/if}

					</picture>
				</a>
				{/block}

				{* AngarTheme *}
				  {block name='quick_view'}
				    <button class="quick-view" data-link-action="quickview" aria-label="{l s='Quick view' d='Shop.Theme.Actions'}: {$product.name|truncate:160:'...'}">
					  <i class="material-icons search">&#xE8B6;</i><span>{l s='Quick view' d='Shop.Theme.Actions'}</span>
				    </button>
				  {/block}

				{block name='product_countdown'}
				{if $product.show_price}
					{if $product.has_discount}
						{if $product.specific_prices.to > '0000-00-00 00:00:00'}
							<div class="countdown-container">
								<div class="countdown" data-endtime="{$product.specific_prices.to|replace:' ':'T'}">
									<div class="countdown-item"><span data-type="days">0</span>{l s='Days' d='Shop.Theme.Mytheme'}</div>
									<div class="countdown-item"><span data-type="hours">0</span>{l s='Hours' d='Shop.Theme.Mytheme'}</div>
									<div class="countdown-item"><span data-type="minutes">0</span>{l s='Min' d='Shop.Theme.Mytheme'}</div>
									<div class="countdown-item"><span data-type="seconds">0</span>{l s='Sec' d='Shop.Theme.Mytheme'}</div>
									<div class="clearfix"></div>
								</div>
							</div>
						{/if}
					{/if}
				{/if}
				{/block}

			</div>
		</div>

		<div class="product-right">
			<div class="product-description">
				{* AngarTheme *}

				<p class="pl_reference">
				{if isset($product.reference_to_display) && $product.reference_to_display neq ''}
					<span>{l s='Reference' d='Shop.Theme.Catalog'}: </span>
					<strong>{$product.reference_to_display}</strong>
				{/if}
				</p>

				<p class="pl_manufacturer">
				{if $product.id_manufacturer > 0}
					{l s='Brand' d='Shop.Theme.Catalog'}: 
					{if $smarty.const._PS_VERSION_ >= '9.0.0'}
						<a href="{$link->getmanufacturerLink($product.id_manufacturer)}" title="{$product.manufacturer_name|escape:'html':'UTF-8'}"><strong>{$product.manufacturer_name|escape:'html':'UTF-8'}</strong></a>
					{else}
						{assign var='manufacturer_name' value=Manufacturer::getNameById($product.id_manufacturer)}
						<a href="{$link->getmanufacturerLink($product.id_manufacturer)}" title="{$manufacturer_name}"><strong>{$manufacturer_name}</strong></a>
					{/if}
				{/if}
				</p>

				{block name='product_name'}
				  <h3 class="h3 product-title"><a href="{$product.url}">{$product.name|truncate:160:'...'}</a></h3>
				{/block}

				{block name='product_reviews'}
				  <div class="pl-reviews pl-reviews-bottom">{hook h='displayProductListReviews' product=$product}</div>
				{/block}

				{block name='product_shortdesc'}
					<div class="product-desc">
						{$product.description_short|strip_tags:'UTF-8'|truncate:360:'...'|replace:'&amp;':'&'}
					</div>
				{/block}
			</div>

			<div class="product-bottom">
				{block name='product_price_and_shipping'}
				  {if $product.show_price}
					<div class="product-price-and-shipping">
					  {hook h='displayProductPriceBlock' product=$product type="before_price"}

						{block name='pl_product_prices'}
							{include file='catalog/_partials/miniatures/pl-dual-prices.tpl'}

							{if (empty($enableconfig) OR $enableconfig != 1) && empty($css74)}
								<span class="price">{$product.price}</span>
								{if $product.has_discount}
									{hook h='displayProductPriceBlock' product=$product type="old_price"}
									<span class="regular-price">{$product.regular_price}</span>
								{/if}
							{/if}
						{/block}

					  {hook h='displayProductPriceBlock' product=$product type='unit_price'}
					  {hook h='displayProductPriceBlock' product=$product type='weight'}
					</div>
				  {/if}
				{/block}

				{* AngarTheme *}
				<div class="button-container">
					{hook h='displayAddtocart' product=$product}

					{if !$configuration.is_catalog}
						<form action="{$urls.pages.cart}" method="post" class="add-to-cart-or-refresh">
						  <input type="hidden" name="token" value="{$static_token}">
						  <input type="hidden" name="id_product" value="{$product.id}" class="product_page_product_id">

						  <div class="qty_container">
							  <label for="qty-{$product.id_product}" class="sr-only">{l s='%productName% product quantity field' sprintf=['%productName%' => $product.name] d='Shop.Theme.Checkout'}</label>
							  <input id="qty-{$product.id_product}" type="number" name="qty" value="{if $product.minimal_quantity}{$product.minimal_quantity}{else}1{/if}" min="{if $product.minimal_quantity}{$product.minimal_quantity}{else}1{/if}" max="{$product.quantity}">
							  <button type="button" aria-label="{l s='Increase quantity for %s' sprintf=[$product.name] d='Shop.Theme.Catalog'}" onclick="this.parentNode.querySelector('input[type=number]').stepUp()" class="qty_btn qty_plus"><i class="material-icons touchspin-up" aria-hidden="true"></i></button>
							  <button type="button" aria-label="{l s='Decrease quantity for %s' sprintf=[$product.name] d='Shop.Theme.Catalog'}" onclick="this.parentNode.querySelector('input[type=number]').stepDown()" class="qty_btn qty_minus"><i class="material-icons touchspin-down" aria-hidden="true"></i></button>
						  </div>

							{hook h='displayPLCombinations' product=$product}

							{if !$product.add_to_cart_url && $product.quantity > 0 && !$product.customization_required}

							  <a class="btn add-to-cart quick-view" href="{$product.link|escape:'html':'UTF-8'}" title="{l s='Product Details' d='Shop.Theme.Catalog'}">
								<i class="material-icons shopping-cart"></i>
								<span>{l s='View details' d='Admin.Actions'}</span>
							  </a>

							{else}

								{if (!isset($product.customization_required) || !$product.customization_required) && ($product.allow_oosp || $product.quantity > 0)}
								  <button class="btn add-to-cart" data-button-action="add-to-cart" type="submit">
									<i class="material-icons shopping-cart"></i>
									{l s='Add to cart' d='Shop.Theme.Actions'}
								  </button>
								{else}
								  <button class="btn add-to-cart" data-button-action="add-to-cart" type="submit" disabled>
									<i class="material-icons shopping-cart"></i>
									{l s='Add to cart' d='Shop.Theme.Actions'}
								  </button>
								{/if}

							{/if}

							<a class="button lnk_view btn" href="{$product.link|escape:'html':'UTF-8'}" >
								{l s='More' d='Shop.Theme.Mytheme'} <span class="sr-only">{$product.name|truncate:160:'...'}</span>
							</a>

						</form>
					{/if}

					{if $configuration.is_catalog}
						<a class="button lnk_view btn" href="{$product.link|escape:'html':'UTF-8'}" >
							{l s='More' d='Shop.Theme.Mytheme'} <span class="sr-only">{$product.name|truncate:160:'...'}</span>
						</a>
					{/if}

				</div>

				{if !$configuration.is_catalog}

					{if isset($enableconfig) && isset($css33) && ($enableconfig == 1 OR $css33 == "pl_availability_no")}
						<div class="availability">
						{block name='product_availability'}
						  <span class="pl-availability">
							{if $product.show_availability && $product.availability_message}
							  {if $product.availability == 'in_stock' && version_compare($smarty.const._PS_VERSION_, '9.0.0', '>=')}
								<i class="material-icons product-available">&#xE5CA;</i>
							  {elseif $product.availability == 'available'}
								<i class="material-icons product-available {if version_compare($smarty.const._PS_VERSION_, '9.0.0', '>=')} product-available-backorder{/if}">&#xE5CA;</i>
							  {elseif $product.availability == 'last_remaining_items'}
								<i class="material-icons product-last-items">&#xE002;</i>
							  {else}
								<i class="material-icons product-unavailable">&#xE14B;</i>
							  {/if}
							  {$product.availability_message}
							{else}
								{if $product.allow_oosp == 0}
									<i class="material-icons product-available">&#xE5CA;</i> {l s='In stock' d='Shop.Theme.Catalog'}
								{/if}
								
								{if $product.allow_oosp == 1}
									{* <i class="material-icons product-unavailable">&#xE14B;</i> {l s='Out of stock' d='Shop.Theme.Catalog'} *}
									<i class="material-icons product-available">&#xE5CA;</i> {l s='In stock' d='Shop.Theme.Catalog'}
								{/if}
							{/if}
						  </span>
						{/block}
						</div>
					{/if}

					{if isset($enableconfig) && isset($css67) && ($enableconfig == 1 OR $css67 == "pl_stock_no")}
					  <div class="pl_availability_stock">
						<strong>{l s='In stock' d='Shop.Theme.Catalog'}:</strong>
						<span>{$product.quantity}</span>
					  </div>
					{/if} 

				{/if}

				{if isset($enableconfig) && isset($css51) && ($enableconfig == 1 OR $css51 == "pl_colors_no")}
				<div class="highlighted-informations{if !$product.main_variants} no-variants{/if} hidden-sm-down">
					{block name='product_variants'}
					  {if $product.main_variants}
						{include file='catalog/_partials/variant-links.tpl' variants=$product.main_variants}
					  {/if}
					{/block}
				</div>
				{/if}

			</div>
		</div>

		<div class="clearfix"></div>

    </div>
  </article>
{/block}
