{*
* @author	Krzysztof Pecak
* @copyright	2025 Krzysztof Pecak
* @license    Commercial license valid for 1 shop
*}
{* AngarTheme *}
<section class="new-products tab-pane fade" id="angarnew">
  <h2 class="h2 products-section-title text-uppercase index_title">
    <a href="{$allNewProductsLink2}">{l s='New products' d='Shop.Theme.Catalog'}</a>
  </h2>
  <div class="products">
    {foreach from=$products item="product"}
      {include file="catalog/_partials/miniatures/product.tpl" product=$product}
    {/foreach}
  </div>
  <a class="all-product-link float-xs-left float-md-right h4" href="{$allNewProductsLink2}">
    {l s='All new products' d='Shop.Theme.Catalog'}<i class="material-icons">&#xE315;</i>
  </a>
  <div class="clearfix"></div>
</section>
