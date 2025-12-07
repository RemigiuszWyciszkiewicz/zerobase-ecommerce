{if $smarty.const._PS_VERSION_ >= '1.7.7.0'}

	<div class="product_additional_price">
		{if isset($enableconfig) && isset($css75) && ($enableconfig == 1 OR $css75 == "product_price_incl_excl")}
			<div class="product_price_incl_excl">
				<div class="product_price_line">
				  {if $product.has_discount}<span class="regular-price">{Context::getContext()->getCurrentLocale()->formatPrice($product.price_without_reduction_without_tax, Context::getContext()->currency->iso_code)}</span>{/if}
				  <span class="price_small">{Context::getContext()->getCurrentLocale()->formatPrice($product.price_tax_exc, Context::getContext()->currency->iso_code)}</span>
				  <span class="tax_label">{l s='Tax excluded' d='Shop.Theme.Checkout'}</span>
				</div>
			</div>
		{/if}

		{if isset($enableconfig) && isset($css75) && ($enableconfig == 1 OR $css75 == "product_price_excl_incl")}
			<div class="product_price_excl_incl">
				<div class="product_price_line">
				  {if $product.has_discount}<span class="regular-price">{Context::getContext()->getCurrentLocale()->formatPrice($product.price_without_reduction_without_tax + ($product.price_without_reduction_without_tax * ($product.rate / 100)), Context::getContext()->currency->iso_code)}</span>{/if}
				  <span class="price_small">{Context::getContext()->getCurrentLocale()->formatPrice($product.price_tax_exc + ($product.price_tax_exc * ($product.rate / 100)), Context::getContext()->currency->iso_code)}</span>
				  <span class="tax_label">{l s='Tax included' d='Shop.Theme.Checkout'}</span>
				</div>
			</div>
		{/if}

		{if isset($enableconfig) && isset($css75) && ($enableconfig == 1 OR $css75 == "product_price_incl_tax_excl")}
			<div class="product_price_incl_tax_excl">
				<div class="product_price_line">
				  {if $product.has_discount}<span class="regular-price">{Context::getContext()->getCurrentLocale()->formatPrice($product.price_without_reduction_without_tax * ($product.rate / 100), Context::getContext()->currency->iso_code)}</span>{/if}
				  <span class="price_small">{Context::getContext()->getCurrentLocale()->formatPrice($product.price_tax_exc * ($product.rate / 100), Context::getContext()->currency->iso_code)}</span>
				  <span class="tax_label">{l s='Tax' d='Shop.Theme.Checkout'}</span>
				</div>

				<div class="product_price_line">
				  {if $product.has_discount}<span class="regular-price">{Context::getContext()->getCurrentLocale()->formatPrice($product.price_without_reduction_without_tax, Context::getContext()->currency->iso_code)}</span>{/if}
				  <span class="price_small">{Context::getContext()->getCurrentLocale()->formatPrice($product.price_tax_exc, Context::getContext()->currency->iso_code)}</span>
				  <span class="tax_label">{l s='Tax excluded' d='Shop.Theme.Checkout'}</span>
				</div>
			</div>
		{/if}

		{if isset($enableconfig) && isset($css75) && ($enableconfig == 1 OR $css75 == "product_price_excl_tax_incl")}
			<div class="product_price_excl_tax_incl">
				<div class="product_price_line">
				  {if $product.has_discount}<span class="regular-price">{Context::getContext()->getCurrentLocale()->formatPrice($product.price_without_reduction_without_tax * ($product.rate / 100), Context::getContext()->currency->iso_code)}</span>{/if}
				  <span class="price_small">{Context::getContext()->getCurrentLocale()->formatPrice($product.price_tax_exc * ($product.rate / 100), Context::getContext()->currency->iso_code)}</span>
				  <span class="tax_label">{l s='Tax' d='Shop.Theme.Checkout'}</span>
				</div>

				<div class="product_price_line">
				  {if $product.has_discount}<span class="regular-price">{Context::getContext()->getCurrentLocale()->formatPrice($product.price_without_reduction_without_tax + ($product.price_without_reduction_without_tax * ($product.rate / 100)), Context::getContext()->currency->iso_code)}</span>{/if}
				  <span class="price_small">{Context::getContext()->getCurrentLocale()->formatPrice($product.price_tax_exc + ($product.price_tax_exc * ($product.rate / 100)), Context::getContext()->currency->iso_code)}</span>
				  <span class="tax_label">{l s='Tax included' d='Shop.Theme.Checkout'}</span>
				</div>
			</div>
		{/if}
		<div class="clearfix"></div>
	</div>

{else}

	<div class="product_additional_price">
		{if isset($enableconfig) && isset($css75) && ($enableconfig == 1 OR $css75 == "product_price_incl_excl")}
			<div class="product_price_incl_excl">
				<div class="product_price_line">
				  <span class="price_small">{Tools::displayPrice($product.price_tax_exc)}</span>
				  <span class="tax_label">{l s='Tax excluded' d='Shop.Theme.Checkout'}</span>
				</div>
			</div>
		{/if}

		{if isset($enableconfig) && isset($css75) && ($enableconfig == 1 OR $css75 == "product_price_excl_incl")}
			<div class="product_price_excl_incl">
				<div class="product_price_line">
				  <span class="price_small">{Tools::displayPrice($product.price_tax_exc + ($product.price_tax_exc * ($product.rate / 100)))}</span>
				  <span class="tax_label">{l s='Tax included' d='Shop.Theme.Checkout'}</span>
				</div>
			</div>
		{/if}

		{if isset($enableconfig) && isset($css75) && ($enableconfig == 1 OR $css75 == "product_price_incl_tax_excl")}
			<div class="product_price_incl_tax_excl">
				<div class="product_price_line">
				  <span class="price_small">{Tools::displayPrice($product.price_tax_exc * ($product.rate / 100))}</span>
				  <span class="tax_label">{l s='Tax' d='Shop.Theme.Checkout'}</span>
				</div>

				<div class="product_price_line">
				  <span class="price_small">{Tools::displayPrice($product.price_tax_exc)}</span>
				  <span class="tax_label">{l s='Tax excluded' d='Shop.Theme.Checkout'}</span>
				</div>
			</div>
		{/if}

		{if isset($enableconfig) && isset($css75) && ($enableconfig == 1 OR $css75 == "product_price_excl_tax_incl")}
			<div class="product_price_excl_tax_incl">
				<div class="product_price_line">
				  <span class="price_small">{Tools::displayPrice($product.price_tax_exc * ($product.rate / 100))}</span>
				  <span class="tax_label">{l s='Tax' d='Shop.Theme.Checkout'}</span>
				</div>

				<div class="product_price_line">
				  <span class="price_small">{Tools::displayPrice($product.price_tax_exc + ($product.price_tax_exc * ($product.rate / 100)))}</span>
				  <span class="tax_label">{l s='Tax included' d='Shop.Theme.Checkout'}</span>
				</div>
			</div>
		{/if}
		<div class="clearfix"></div>
	</div>

{/if}
