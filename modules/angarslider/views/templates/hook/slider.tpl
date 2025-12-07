{*
* @author	Krzysztof Pecak
* @copyright	2025 Krzysztof Pecak
* @license    Commercial license valid for 1 shop
*}

<!-- Module AngarSlider -->
{if $angarslider.slides}
	<div id="homepage-slider">

		<ul id="angarslider" class="angarslider">
		  {foreach from=$angarslider.slides item=slide name='angarslider'}
			<li class="angarslider-container">
			  <a href="{$slide.url|escape:'html':'UTF-8'}" title="{$slide.legend}">
				  <img src="{$slide.image_url}" alt="{$slide.legend}" width="100%" height="100%">
				  {if $slide.description}
					  <div class="angarslider-description"><div class="slider_desc">{$slide.description nofilter} {*HTML CONTENT*}</div></div>
				  {/if}
			  </a>
			</li>
		  {/foreach}
		</ul>

	</div>
{/if}
<!-- /Module AngarSlider -->
