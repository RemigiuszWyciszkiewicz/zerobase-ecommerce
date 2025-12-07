{*
* @author	Krzysztof Pecak
* @copyright	2017 Krzysztof Pecak
* @license    http://opensource.org/licenses/afl-3.0.php  Academic Free License (AFL 3.0)
*}

{if $page.page_name == 'index'}
<script>
	$(document).ready(function() {
	if (!!$.prototype.bxSlider)
		$('#bx_manufacturer').bxSlider({
			auto: {if $man_auto == 0}false{else}true{/if},
			minSlides: 1,
			maxSlides: {if !empty($man_max)}{$man_max|escape:'htmlall':'UTF-8'}{else}5{/if},
			slideWidth: {if !empty($man_width)}{$man_width|escape:'htmlall':'UTF-8'}{else}234{/if},
			pager: false,
			pause: {$man_pause|escape:'htmlall':'UTF-8'},
			nextSelector: '#next_man',
			prevSelector: '#prev_man',
			nextText: '>',
			prevText: '<',
			moveSlides: {$man_move|escape:'htmlall':'UTF-8'},
			infiniteLoop: {if $man_loop == 0}false{else}true{/if},
			hideControlOnEnd: true,
			touchEnabled: true
		});
	});
</script>
{/if}