{*
* @author	Krzysztof Pecak
* @copyright	2025 Krzysztof Pecak
* @license    Commercial license valid for 1 shop
*}

<div id="parallax_baner" {if isset($parallax_img)}style="background-image: url({$parallax_img|escape:'htmlall':'UTF-8'})"{/if}>

	<div class="parallax_desc">
		{$parallax_desc nofilter} {*HTML CONTENT*}
	</div>

	{if $parallax_link|escape:'htmlall':'UTF-8'}
		<a class="parallax_button" href="{$parallax_link|escape:'htmlall':'UTF-8'}" title="{l s='See more' mod='angarparallax'}">{l s='See more' mod='angarparallax'} <span class="sr-only">{l s='about us' mod='angarparallax'}</span></a>
	{/if}

</div>
