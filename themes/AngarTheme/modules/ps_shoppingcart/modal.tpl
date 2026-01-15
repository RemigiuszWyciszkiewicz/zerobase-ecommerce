{**
 * 2007-2017 PrestaShop
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
 * @copyright 2007-2017 PrestaShop SA
 * @license   https://opensource.org/licenses/AFL-3.0 Academic Free License 3.0 (AFL-3.0)
 * International Registered Trademark & Property of PrestaShop SA
 *}

{* AngarTheme - Modern Cart Modal *}

<div id="blockcart-modal" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">

      {* Success Header *}
      <div class="modal-header">
        <div class="modal-header-content">
          <div class="success-icon">
            <i class="fa-solid fa-check"></i>
          </div>
          <h4 class="modal-title" id="myModalLabel">{l s='Dodano do koszyka!' d='Shop.Theme.Checkout'}</h4>
        </div>
        <button type="button" class="close-btn" data-dismiss="modal" aria-label="Close">
          <i class="fa-solid fa-xmark"></i>
        </button>
      </div>

      {* Modal Body *}
      <div class="modal-body">

        {* Added Product Section *}
        <div class="added-product">
          <div class="product-image-wrapper">
            {if !empty($product.cover.bySize.medium_default.url)}
              <img class="product-image" src="{if !empty($product.default_image.bySize.medium_default.url)}{$product.default_image.bySize.medium_default.url}{else}{$product.cover.bySize.medium_default.url}{/if}" alt="{$product.cover.legend}" title="{$product.cover.legend}">
            {else}
              {if $smarty.const._PS_VERSION_ >= '1.7.5.0'}
                <img class="product-image" src="{$urls.img_ps_url}p/{$language.iso_code}-default-medium_default.jpg" alt="{$product.cover.legend}" title="{$product.cover.legend}">
              {/if}
            {/if}
          </div>

          <div class="product-details">
            <h5 class="product-name">{$product.name}</h5>

            {if $product.attributes}
              <div class="product-attributes">
                {foreach from=$product.attributes item="property_value" key="property"}
                  <span class="attribute-item">{$property}: <strong>{$property_value}</strong></span>
                {/foreach}
              </div>
            {/if}

            <div class="product-price-qty">
              <span class="product-price">{$product.price}</span>
              <span class="product-qty">x {$product.cart_quantity}</span>
            </div>
            {hook h='displayProductPriceBlock' product=$product type="unit_price"}
          </div>
        </div>

        {* Cart Summary Section *}
        <div class="cart-summary">
          <div class="cart-summary-header">
            <i class="fa-solid fa-cart-shopping"></i>
            <span class="cart-count">
              {if $cart.products_count > 1}
                {l s='%products_count% produktów w koszyku' sprintf=['%products_count%' => $cart.products_count] d='Shop.Theme.Checkout'}
              {else}
                {l s='%products_count% produkt w koszyku' sprintf=['%products_count%' => $cart.products_count] d='Shop.Theme.Checkout'}
              {/if}
            </span>
          </div>

          <div class="cart-totals">
            <div class="cart-total-row">
              <span class="label">{l s='Produkty:' d='Shop.Theme.Checkout'}</span>
              <span class="value">{$cart.subtotals.products.value}</span>
            </div>
            <div class="cart-total-row">
              <span class="label">{l s='Dostawa:' d='Shop.Theme.Checkout'}</span>
              <span class="value">{$cart.subtotals.shipping.value}</span>
            </div>
            {if $cart.subtotals.tax}
              <div class="cart-total-row">
                <span class="label">{$cart.subtotals.tax.label}</span>
                <span class="value">{$cart.subtotals.tax.value}</span>
              </div>
            {/if}
            <div class="cart-total-row total-row">
              <span class="label">{l s='Razem:' d='Shop.Theme.Checkout'}</span>
              <span class="value">{$cart.totals.total.value} <small>{$cart.labels.tax_short}</small></span>
            </div>
          </div>
        </div>

      </div>

      {* Modal Footer with Actions *}
      <div class="modal-footer">
        <button type="button" class="btn btn-continue" data-dismiss="modal">
          <i class="fa-solid fa-arrow-left"></i>
          {l s='Kontynuuj zakupy' d='Shop.Theme.Actions'}
        </button>
        <a href="{$cart_url}" class="btn btn-checkout">
          {l s='Przejdź do koszyka' d='Shop.Theme.Actions'}
          <i class="fa-solid fa-arrow-right"></i>
        </a>
      </div>

    </div>
  </div>
</div>
