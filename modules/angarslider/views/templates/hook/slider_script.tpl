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

			$('.angarslider').each(function() {
				sliders.push(
					$(this).bxSlider({
						auto: true,
						minSlides: 1,
						maxSlides: 1,
						slideWidth: 1920,
						mode: 'horizontal',
						pager: {$pager|escape:'html':'UTF-8'},
						autoHover: {$pause_hover|escape:'html':'UTF-8'},
						speed: 500,
						pause: {$pause|escape:'html':'UTF-8'},
						infiniteLoop: true,
						adaptiveHeight: true,
						touchEnabled: true
					})
				);
			});

			$('#theme_customization .page_width label, #theme_customization .slider_size label, #theme_customization .lc_index label, #theme_customization .lc_width label, #theme_customization .slider_position label').on('click', function() {
				sliders.forEach(function(slider) {
					slider.reloadSlider();
				});
			});
		});
		</script>
	{else}
		<script>
		$(document).ready(function() {
			$('#angarslider').bxSlider({
				maxSlides: 1,
				slideWidth: 1920,
				infiniteLoop: true,
				auto: true,
				pager: {$pager|escape:'html':'UTF-8'},
				autoHover: {$pause_hover|escape:'html':'UTF-8'},
				speed: 500,
				pause: {$pause|escape:'html':'UTF-8'},
				adaptiveHeight: true,
				touchEnabled: true
			});
		});
		</script>
	{/if}
{/if}
