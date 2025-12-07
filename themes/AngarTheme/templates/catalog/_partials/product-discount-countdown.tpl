{**
 * Copyright since 2007 PrestaShop SA and Contributors
 * PrestaShop is an International Registered Trademark & Property of PrestaShop SA
 *
 * NOTICE OF LICENSE
 *
 * This source file is subject to the Academic Free License 3.0 (AFL-3.0)
 * that is bundled with this package in the file LICENSE.md.
 * It is also available through the world-wide-web at this URL:
 * https://opensource.org/licenses/AFL-3.0
 * If you did not receive a copy of the license and are unable to
 * obtain it through the world-wide-web, please send an email
 * to license@prestashop.com so we can send you a copy immediately.
 *
 * DISCLAIMER
 *
 * Do not edit or add to this file if you wish to upgrade PrestaShop to newer
 * versions in the future. If you wish to customize PrestaShop for your
 * needs please refer to https://devdocs.prestashop.com/ for more information.
 *
 * @author    PrestaShop SA and Contributors <contact@prestashop.com>
 * @copyright Since 2007 PrestaShop SA and Contributors
 * @license   https://opensource.org/licenses/AFL-3.0 Academic Free License 3.0 (AFL-3.0)
 *}

{* AngarTheme *}

{if $product.has_discount}
	{if $product.specific_prices.to > '0000-00-00 00:00:00'}
		<div class="countdown-container">
			<div class="countdown-title">{l s='Promotion ends in:' d='Shop.Theme.Mytheme'}</div>
			<div class="countdown" data-endtime="{$product.specific_prices.to|replace:' ':'T'}">
				<div class="countdown-item"><span data-type="days">0</span>{l s='Days' d='Shop.Theme.Mytheme'}</div>
				<div class="countdown-item"><span data-type="hours">0</span>{l s='Hours' d='Shop.Theme.Mytheme'}</div>
				<div class="countdown-item"><span data-type="minutes">0</span>{l s='Minutes' d='Shop.Theme.Mytheme'}</div>
				<div class="countdown-item"><span data-type="seconds">0</span>{l s='Seconds' d='Shop.Theme.Mytheme'}</div>
				<div class="clearfix"></div>
			</div>
		</div>
	{/if}
{/if}
