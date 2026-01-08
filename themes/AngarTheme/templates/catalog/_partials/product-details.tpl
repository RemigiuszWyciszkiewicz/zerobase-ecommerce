{* AngarThemes *}

<div
  class="js-product-details tab-pane fade{if !$product.description} in active{/if}"
  id="product-details"
  data-product="{$product.embedded_attributes|json_encode}"
  role="tabpanel"
>
  <!-- <div class="h5 text-uppercase index_title"><span>{l s='Product Details' d='Shop.Theme.Catalog'}</span></div> -->

  {block name='product_reference'}
  <!-- {if isset($product_manufacturer->id)}
      <div class="product-manufacturer">
        {if isset($manufacturer_image_url)}
          <a href="{$product_brand_url}">
            <img src="{$manufacturer_image_url}" class="img img-thumbnail manufacturer-logo" alt="{$product_manufacturer->name}">
          </a>
        {else}
          <label class="label">{l s='Brand' d='Shop.Theme.Catalog'}</label>
          <span>
            <a href="{$product_brand_url}">{$product_manufacturer->name}</a>
          </span>
        {/if}
      </div>
    {/if} -->
  {if isset($product.reference_to_display) && $product.reference_to_display neq
  ''}
  <div class="product-reference">
    <label class="label">{l s='Reference' d='Shop.Theme.Catalog'} </label>
    <span>{$product.reference_to_display}</span>
  </div>
  {/if} {* AngarTheme *} {if empty($product.specific_references)} {if
  isset($product.ean13) && $product.ean13 neq ''}
  <div class="product-ean13">
    <label class="label">{l s='EAN13' d='Shop.Theme.Catalog'} </label>
    <span>{$product.ean13}</span>
  </div>
  {/if} {if isset($product.isbn) && $product.isbn neq ''}
  <div class="product-isbn">
    <label class="label">{l s='ISBN' d='Shop.Theme.Catalog'} </label>
    <span>{$product.isbn}</span>
  </div>
  {/if} {if isset($product.upc) && $product.upc neq ''}
  <div class="product-upc">
    <label class="label">{l s='UPC' d='Shop.Theme.Catalog'} </label>
    <span>{$product.upc}</span>
  </div>
  {/if} {if $smarty.const._PS_VERSION_ >= '1.7.6.0'} {if isset($product.mpn) &&
  $product.mpn neq ''}
  <div class="product-mpn">
    <label class="label">{l s='MPN' d='Shop.Theme.Catalog'} </label>
    <span>{$product.mpn}</span>
  </div>
  {/if} {/if} {/if} {/block} {block name='product_quantities'} {if
  $product.show_quantities}
  <div class="product-quantities">
    <label class="label">{l s='In stock' d='Shop.Theme.Catalog'}</label>
    <span
      data-stock="{$product.quantity}"
      data-allow-oosp="{$product.allow_oosp}"
      >{$product.quantity} {$product.quantity_label}</span
    >
  </div>
  {/if} {/block} {block name='product_availability_date'} {if
  $product.availability_date}
  <div class="product-availability-date">
    <label>{l s='Availability date:' d='Shop.Theme.Catalog'} </label>
    <span>{$product.availability_date}</span>
  </div>
  {/if} {/block} {block name='product_out_of_stock'}
  <div class="product-out-of-stock">
    {hook h='actionProductOutOfStock' product=$product}
  </div>
  {/block} {* AngarTheme *} {block name='product_condition'} {if
  $product.condition}
  <div class="product-condition">
    <label class="label">{l s='Condition' d='Shop.Theme.Catalog'} </label>
    <link href="{$product.condition.schema_url}" />
    <span>{$product.condition.label}</span>
  </div>
  {/if} {/block} {* Nutrition Facts Table *} {block name='product_nutrition'}
  {if $product.features} {assign var="hasIngredients" value=false} {assign
  var="hasNutrition" value=false} {assign var="nutritionValues" value=[]} {*
  Zbierz wartości odżywcze do mapy *} {foreach from=$product.features
  item=feature} {if $feature.name|substr:0:11 == 'ingredient_'} {assign
  var="hasIngredients" value=true} {/if} {if $feature.name == 'Wartość
  energetyczna (kJ)' || $feature.name == 'Wartość energetyczna (kcal)' ||
  $feature.name == 'Tłuszcz' || $feature.name == 'Kwasy tłuszczowe nasycone' ||
  $feature.name == 'Węglowodany' || $feature.name == 'Cukry' || $feature.name ==
  'Błonnik' || $feature.name == 'Białko' || $feature.name == 'Sól'} {assign
  var="hasNutrition" value=true} {$nutritionValues[$feature.name] =
  $feature.value} {/if} {/foreach} {if $hasIngredients || $hasNutrition}

  <div class="nutrition">
    <p class="h5 text-uppercase index_title">
      {l s='Wartości odżywcze' d='Shop.Theme.Catalog'}
    </p>

    {* Display Nutrition Table *} {if $hasNutrition}
    <table class="table table-striped nutrition-table">
      <thead>
        <tr>
          <th>{l s='Wartość odżywcza' d='Shop.Theme.Catalog'}</th>
          <th>{l s='Na 100g' d='Shop.Theme.Catalog'}</th>
        </tr>
      </thead>
      <tbody>
        {* Wyświetl w określonej kolejności *} {if
        isset($nutritionValues['Wartość energetyczna (kcal)'])}
        <tr class="nutrition-row energy-kcal">
          <td>Wartość energetyczna (kcal)</td>
          <td>{$nutritionValues['Wartość energetyczna (kcal)']}</td>
        </tr>
        {/if} {if isset($nutritionValues['Wartość energetyczna (kJ)'])}
        <tr class="nutrition-row energy-kj">
          <td>Wartość energetyczna (kJ)</td>
          <td>{$nutritionValues['Wartość energetyczna (kJ)']}</td>
        </tr>
        {/if} {if isset($nutritionValues['Białko'])}
        <tr class="nutrition-row protein">
          <td>Białko</td>
          <td>{$nutritionValues['Białko']}</td>
        </tr>
        {/if} {if isset($nutritionValues['Tłuszcz'])}
        <tr class="nutrition-row fat">
          <td>Tłuszcz</td>
          <td>{$nutritionValues['Tłuszcz']}</td>
        </tr>
        {/if} {if isset($nutritionValues['Kwasy tłuszczowe nasycone'])}
        <tr class="nutrition-row saturated-fat">
          <td>Kwasy tłuszczowe nasycone</td>
          <td>{$nutritionValues['Kwasy tłuszczowe nasycone']}</td>
        </tr>
        {/if} {if isset($nutritionValues['Węglowodany'])}
        <tr class="nutrition-row carbohydrates">
          <td>Węglowodany</td>
          <td>{$nutritionValues['Węglowodany']}</td>
        </tr>
        {/if} {if isset($nutritionValues['Cukry'])}
        <tr class="nutrition-row sugars">
          <td>Cukry</td>
          <td>{$nutritionValues['Cukry']}</td>
        </tr>
        {/if} {if isset($nutritionValues['Błonnik'])}
        <tr class="nutrition-row fiber">
          <td>Błonnik</td>
          <td>{$nutritionValues['Błonnik']}</td>
        </tr>
        {/if} {if isset($nutritionValues['Sól'])}
        <tr class="nutrition-row salt">
          <td>Sól</td>
          <td>{$nutritionValues['Sól']}</td>
        </tr>
        {/if}
      </tbody>
    </table>
    {/if} {* Display Ingredients *} {if $hasIngredients}
    <p class="h5 text-uppercase index_title">
      {l s='Składniki' d='Shop.Theme.Catalog'}
    </p>
    <div class="nutrition-ingredients">
      <p>
        {assign var="first" value=true} {foreach from=$product.features
        item=feature} {if $feature.name|substr:0:11 == 'ingredient_'} {if
        !$first}, {/if} {$feature.value} {assign var="first" value=false} {/if}
        {/foreach}
      </p>
    </div>
    {/if}

    <!-- Delivery section -->
    <p class="h5 text-uppercase index_title">
      {l s='Dostawa' d='Shop.Theme.Catalog'}
    </p>

    <div class="delivery-info">
      <div class="delivery-time">
        <svg
          class="delivery-icon"
          viewBox="0 0 24 24"
          fill="none"
          xmlns="http://www.w3.org/2000/svg"
        >
          <path
            d="M12 22C17.5228 22 22 17.5228 22 12C22 6.47715 17.5228 2 12 2C6.47715 2 2 6.47715 2 12C2 17.5228 6.47715 22 12 22Z"
            stroke="currentColor"
            stroke-width="2"
            stroke-linecap="round"
            stroke-linejoin="round"
          />
          <path
            d="M12 6V12L16 14"
            stroke="currentColor"
            stroke-width="2"
            stroke-linecap="round"
            stroke-linejoin="round"
          />
        </svg>
        <div class="delivery-time-text">
          <strong>{l s='Czas realizacji' d='Shop.Theme.Catalog'}</strong>
          <span>{l s='1-2 dni robocze' d='Shop.Theme.Catalog'}</span>
        </div>
      </div>

      <div class="delivery-carriers">
        <strong class="carriers-title"
          >{l s='Dostępni przewoźnicy' d='Shop.Theme.Catalog'}:</strong
        >
        <div class="carriers-list">
          <div class="carrier-item">
            <img
              src="https://upload.wikimedia.org/wikipedia/commons/c/c5/InPost_logo.svg"
              alt="InPost"
              class="carrier-logo inpost-logo"
              loading="lazy"
            />
          </div>
          <div class="carrier-item">
            <img
              src="https://upload.wikimedia.org/wikipedia/commons/5/5c/Orlen_paczka_logo.svg"
              alt="Orlen Paczka"
              class="carrier-logo orlen-logo"
              loading="lazy"
            />
          </div>
        </div>
      </div>
    </div>

    <div class="delivery-more-info">
      <svg
        class="info-icon"
        viewBox="0 0 24 24"
        fill="none"
        xmlns="http://www.w3.org/2000/svg"
      >
        <circle cx="12" cy="12" r="10" stroke="currentColor" stroke-width="2" />
        <path
          d="M12 16V12M12 8H12.01"
          stroke="currentColor"
          stroke-width="2"
          stroke-linecap="round"
        />
      </svg>
      <span
        >{l s='Więcej informacji o dostawie znajdziesz' d='Shop.Theme.Catalog'}
        <a
          href="https://zerobase.pl/pl/content/1-dostawa"
          target="_blank"
          rel="noopener noreferrer"
          >{l s='tutaj' d='Shop.Theme.Catalog'}</a
        >.</span
      >
    </div>
  </div>
  {/if} {/if} {/block}

  <!-- {* AngarTheme *}
  {block name='product_features'}
	{if $smarty.const._PS_VERSION_ >= '1.7.4.0'}
		{if $product.grouped_features}
		  <section class="product-features">
			<p class="h6">{l s='Data sheet' d='Shop.Theme.Catalog'}</p>
			<dl class="data-sheet">
			  {foreach from=$product.grouped_features item=feature}
				<dt class="name">{$feature.name}</dt>
				<dd class="value">{$feature.value|default:''|escape:'html'|nl2br nofilter}</dd>
			  {/foreach}
			</dl>
		  </section>
		{/if}
	{else}
		{if $product.features}
		  <section class="product-features">
			<h3 class="h6">{l s='Data sheet' d='Shop.Theme.Catalog'}</h3>
			<dl class="data-sheet">
			  {foreach from=$product.features item=feature}
				<dt class="name">{$feature.name}</dt>
				<dd class="value">{$feature.value|escape:'html'|nl2br nofilter}</dd>
			  {/foreach}
			</dl>
		  </section>
		{/if}
	{/if}
  {/block} -->

  {* if product have specific references, a table will be added to product
  details section *} {block name='product_specific_references'} {if
  !empty($product.specific_references)}
  <section class="product-features">
    <p class="h6">{l s='Specific References' d='Shop.Theme.Catalog'}</p>
    <dl class="data-sheet">
      {foreach from=$product.specific_references item=reference key=key}
      <dt class="name">{$key}</dt>
      <dd class="value">{$reference}</dd>
      {/foreach}
    </dl>
  </section>
  {/if} {/block}
</div>
