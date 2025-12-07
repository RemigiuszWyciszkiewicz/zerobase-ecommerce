{* AngarTheme - dual price *}

{if isset($enableconfig) && isset($css74) && ($enableconfig == 1 OR $css74 == "pl_price_default")}
	<div class="pl_price_default">
		<span class="price">{$product.price}</span>
		{if $product.has_discount}
		  {hook h='displayProductPriceBlock' product=$product type="old_price"}
		  <span class="regular-price">{$product.regular_price}</span>
		{/if}
	</div>
{/if}

{if $smarty.const._PS_VERSION_ >= '1.7.7.0'}

	{if isset($enableconfig) && isset($css74) && ($enableconfig == 1 OR $css74 == "pl_price_incl_excl")}
		<div class="pl_price_incl_excl">
			<div>
			  {if $product.has_discount}<span class="regular-price">{Context::getContext()->getCurrentLocale()->formatPrice($product.price_without_reduction_without_tax + ($product.price_without_reduction_without_tax * ($product.rate / 100)), Context::getContext()->currency->iso_code)}</span>{/if}
			  <span class="price">{Context::getContext()->getCurrentLocale()->formatPrice($product.price_tax_exc + ($product.price_tax_exc * ($product.rate / 100)), Context::getContext()->currency->iso_code)}</span>
			  <span class="tax_label">{l s='tax incl.' d='Shop.Theme.Checkout'}</span>
			</div>

			<div>
			  {if $product.has_discount}<span class="regular-price">{Context::getContext()->getCurrentLocale()->formatPrice($product.price_without_reduction_without_tax, Context::getContext()->currency->iso_code)}</span>{/if}
			  <span class="price_small">{Context::getContext()->getCurrentLocale()->formatPrice($product.price_tax_exc, Context::getContext()->currency->iso_code)}</span>
			  <span class="tax_label">{l s='tax excl.' d='Shop.Theme.Checkout'}</span>
			</div>
		</div>
	{/if}

	{if isset($enableconfig) && isset($css74) && ($enableconfig == 1 OR $css74 == "pl_price_excl_incl")}
		<div class="pl_price_excl_incl">
			<div>
			  {if $product.has_discount}<span class="regular-price">{Context::getContext()->getCurrentLocale()->formatPrice($product.price_without_reduction_without_tax, Context::getContext()->currency->iso_code)}</span>{/if}
			  <span class="price">{Context::getContext()->getCurrentLocale()->formatPrice($product.price_tax_exc, Context::getContext()->currency->iso_code)}</span>
			  <span class="tax_label">{l s='tax excl.' d='Shop.Theme.Checkout'}</span>
			</div>

			<div>
			  {if $product.has_discount}<span class="regular-price">{Context::getContext()->getCurrentLocale()->formatPrice($product.price_without_reduction_without_tax + ($product.price_without_reduction_without_tax * ($product.rate / 100)), Context::getContext()->currency->iso_code)}</span>{/if}
			  <span class="price_small">{Context::getContext()->getCurrentLocale()->formatPrice($product.price_tax_exc + ($product.price_tax_exc * ($product.rate / 100)), Context::getContext()->currency->iso_code)}</span>
			  <span class="tax_label">{l s='tax incl.' d='Shop.Theme.Checkout'}</span>
			</div>
		</div>
	{/if}

	{if isset($enableconfig) && isset($css74) && ($enableconfig == 1 OR $css74 == "pl_price_incl_tax_excl")}
		<div class="pl_price_incl_tax_excl">
			<div>
			  {if $product.has_discount}<span class="regular-price">{Context::getContext()->getCurrentLocale()->formatPrice($product.price_without_reduction_without_tax + ($product.price_without_reduction_without_tax * ($product.rate / 100)), Context::getContext()->currency->iso_code)}</span>{/if}
			  <span class="price">{Context::getContext()->getCurrentLocale()->formatPrice($product.price_tax_exc + ($product.price_tax_exc * ($product.rate / 100)), Context::getContext()->currency->iso_code)}</span>
			  <span class="tax_label">{l s='tax incl.' d='Shop.Theme.Checkout'}</span>
			</div>

			<div>
			  {if $product.has_discount}<span class="regular-price">{Context::getContext()->getCurrentLocale()->formatPrice($product.price_without_reduction_without_tax * ($product.rate / 100), Context::getContext()->currency->iso_code)}</span>{/if}
			  <span class="price_small">{Context::getContext()->getCurrentLocale()->formatPrice($product.price_tax_exc * ($product.rate / 100), Context::getContext()->currency->iso_code)}</span>
			  <span class="tax_label">{l s='Tax' d='Shop.Theme.Checkout'}</span>
			</div>

			<div>
			  {if $product.has_discount}<span class="regular-price">{Context::getContext()->getCurrentLocale()->formatPrice($product.price_without_reduction_without_tax, Context::getContext()->currency->iso_code)}</span>{/if}
			  <span class="price_small">{Context::getContext()->getCurrentLocale()->formatPrice($product.price_tax_exc, Context::getContext()->currency->iso_code)}</span>
			  <span class="tax_label">{l s='tax excl.' d='Shop.Theme.Checkout'}</span>
			</div>
		</div>
	{/if}

	{if isset($enableconfig) && isset($css74) && ($enableconfig == 1 OR $css74 == "pl_price_excl_tax_incl")}
		<div class="pl_price_excl_tax_incl">
			<div>
			  {if $product.has_discount}<span class="regular-price">{Context::getContext()->getCurrentLocale()->formatPrice($product.price_without_reduction_without_tax, Context::getContext()->currency->iso_code)}</span>{/if}
			  <span class="price">{Context::getContext()->getCurrentLocale()->formatPrice($product.price_tax_exc, Context::getContext()->currency->iso_code)}</span>
			  <span class="tax_label">{l s='tax excl.' d='Shop.Theme.Checkout'}</span>
			</div>

			<div>
			  {if $product.has_discount}<span class="regular-price">{Context::getContext()->getCurrentLocale()->formatPrice($product.price_without_reduction_without_tax * ($product.rate / 100), Context::getContext()->currency->iso_code)}</span>{/if}
			  <span class="price_small">{Context::getContext()->getCurrentLocale()->formatPrice($product.price_tax_exc * ($product.rate / 100), Context::getContext()->currency->iso_code)}</span>
			  <span class="tax_label">{l s='Tax' d='Shop.Theme.Checkout'}</span>
			</div>

			<div>
			  {if $product.has_discount}<span class="regular-price">{Context::getContext()->getCurrentLocale()->formatPrice($product.price_without_reduction_without_tax + ($product.price_without_reduction_without_tax * ($product.rate / 100)), Context::getContext()->currency->iso_code)}</span>{/if}
			  <span class="price_small">{Context::getContext()->getCurrentLocale()->formatPrice($product.price_tax_exc + ($product.price_tax_exc * ($product.rate / 100)), Context::getContext()->currency->iso_code)}</span>
			  <span class="tax_label">{l s='tax incl.' d='Shop.Theme.Checkout'}</span>
			</div>
		</div>
	{/if}

{else}

	{if isset($enableconfig) && isset($css74) && ($enableconfig == 1 OR $css74 == "pl_price_incl_excl")}
		<div class="pl_price_incl_excl">
			<div>
			  <span class="price">{Tools::displayPrice($product.price_tax_exc + ($product.price_tax_exc * ($product.rate / 100)))}</span>
			  <span class="tax_label">{l s='Tax included' d='Shop.Theme.Checkout'}</span>
			</div>

			<div>
			  <span class="price_small">{Tools::displayPrice($product.price_tax_exc)}</span>
			  <span class="tax_label">{l s='Tax excluded' d='Shop.Theme.Checkout'}</span>
			</div>
		</div>
	{/if}

	{if isset($enableconfig) && isset($css74) && ($enableconfig == 1 OR $css74 == "pl_price_excl_incl")}
		<div class="pl_price_excl_incl">
			<div>
			  <span class="price">{Tools::displayPrice($product.price_tax_exc)}</span>
			  <span class="tax_label">{l s='Tax excluded' d='Shop.Theme.Checkout'}</span>
			</div>

			<div>
			  <span class="price_small">{Tools::displayPrice($product.price_tax_exc + ($product.price_tax_exc * ($product.rate / 100)))}</span>
			  <span class="tax_label">{l s='Tax included' d='Shop.Theme.Checkout'}</span>
			</div>
		</div>
	{/if}

	{if isset($enableconfig) && isset($css74) && ($enableconfig == 1 OR $css74 == "pl_price_incl_tax_excl")}
		<div class="pl_price_incl_tax_excl">
			<div>
			  <span class="price">{Tools::displayPrice($product.price_tax_exc + ($product.price_tax_exc * ($product.rate / 100)))}</span>
			  <span class="tax_label">{l s='Tax included' d='Shop.Theme.Checkout'}</span>
			</div>

			<div>
			  <span class="price_small">{Tools::displayPrice($product.price_tax_exc * ($product.rate / 100))}</span>
			  <span class="tax_label">{l s='Tax' d='Shop.Theme.Checkout'}</span>
			</div>

			<div>
			  <span class="price_small">{Tools::displayPrice($product.price_tax_exc)}</span>
			  <span class="tax_label">{l s='Tax excluded' d='Shop.Theme.Checkout'}</span>
			</div>
		</div>
	{/if}

	{if isset($enableconfig) && isset($css74) && ($enableconfig == 1 OR $css74 == "pl_price_excl_tax_incl")}
		<div class="pl_price_excl_tax_incl">
			<div>
			  <span class="price">{Tools::displayPrice($product.price_tax_exc)}</span>
			  <span class="tax_label">{l s='Tax excluded' d='Shop.Theme.Checkout'}</span>
			</div>

			<div>
			  <span class="price_small">{Tools::displayPrice($product.price_tax_exc * ($product.rate / 100))}</span>
			  <span class="tax_label">{l s='Tax' d='Shop.Theme.Checkout'}</span>
			</div>

			<div>
			  <span class="price_small">{Tools::displayPrice($product.price_tax_exc + ($product.price_tax_exc * ($product.rate / 100)))}</span>
			  <span class="tax_label">{l s='Tax included' d='Shop.Theme.Checkout'}</span>
			</div>
		</div>
	{/if}

{/if}
