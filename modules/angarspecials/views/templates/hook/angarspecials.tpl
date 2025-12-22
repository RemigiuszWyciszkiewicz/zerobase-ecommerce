{* * @author Krzysztof Pecak * @copyright 2025 Krzysztof Pecak * @license
Commercial license valid for 1 shop *} {* AngarTheme *}
<section class="products-container tab-pane fade" id="angarspecials">
  <h2 class="h2 products-container-title text-uppercase">
    <i
      class="fa-solid fa-tags fa-beat products-container-title-icon"
      style="color: #f47021"
    ></i>
    <a class="products-container-title-link" href="{$allSpecialProductsLink2}"
      >{l s='On sale' d='Shop.Theme.Catalog'}</a
    >
    <a class="see-more-icon-link" href="{$allSpecialProductsLink2}">
      <i class="fa-solid fa-angle-right see-more-icon"></i>
    </a>
  </h2>
  <div class="products">
    {foreach from=$products item="product"} {include
    file="catalog/_partials/miniatures/product.tpl" product=$product} {/foreach}
  </div>
</section>
