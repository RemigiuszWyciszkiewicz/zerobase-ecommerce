{*
* @author	Krzysztof Pecak
* @copyright	2025 Krzysztof Pecak
* @license    Commercial license valid for 1 shop
*}

{if $page.page_name == 'index'}
	{if !empty($enableconfig)}
		<script>
		$(document).ready(function() {

			var sliders = [];

			{foreach from=$catProducts item=catProduct name=atCatProducts}
				sliders.push(
					$('#bxslider_{$catProduct.id|escape:'htmlall':'UTF-8'}').bxSlider({
						auto: {if $auto == 0}false{else}true{/if},
						minSlides: {$visible|escape:'htmlall':'UTF-8'},
						maxSlides: {$visible|escape:'htmlall':'UTF-8'},
						mode: 'vertical',
						pager: false,
						pause: 3000,
						nextSelector: '#home-next_{$catProduct.id|escape:'htmlall':'UTF-8'}',
						prevSelector: '#home-prev_{$catProduct.id|escape:'htmlall':'UTF-8'}',
						nextText: '>',
						prevText: '<',
						moveSlides: {$move|escape:'htmlall':'UTF-8'},
						infiniteLoop: {if $loop == 0}false{else}true{/if},
						hideControlOnEnd: true,
						useCSS: false
					})
				);
			{/foreach}

			$('#theme_customization .page_width label').on('click', function() {
				sliders.forEach(function(slider) {
					slider.reloadSlider();
				});
			});
		});
		</script>
	{else}
		<script>
		$(document).ready(function() {
			{foreach from=$catProducts item=catProduct name=atCatProducts}
				$('#bxslider_{$catProduct.id|escape:'htmlall':'UTF-8'}').bxSlider({
					auto: {if $auto == 0}false{else}true{/if},
					minSlides: {$visible|escape:'htmlall':'UTF-8'},
					maxSlides: {$visible|escape:'htmlall':'UTF-8'},
					mode: 'vertical',
					pager: false,
					pause: 3000,
					nextSelector: '#home-next_{$catProduct.id|escape:'htmlall':'UTF-8'}',
					prevSelector: '#home-prev_{$catProduct.id|escape:'htmlall':'UTF-8'}',
					nextText: '>',
					prevText: '<',
					moveSlides: {$move|escape:'htmlall':'UTF-8'},
					infiniteLoop: {if $loop == 0}false{else}true{/if},
					hideControlOnEnd: true,
					useCSS: false
				});
			{/foreach}
		});
		</script>
	{/if}
{/if}