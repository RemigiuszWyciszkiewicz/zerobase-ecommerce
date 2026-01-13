{**
 * 2007-2017 PrestaShop
 *
 * NOTICE OF LICENSE
 *
 * This source file is subject to the Academic Free License 3.0 (AFL-3.0)
 * that is bundled with this package in the file LICENSE.txt.
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
 * needs please refer to http://www.prestashop.com for more information.
 *
 * @author    PrestaShop SA <contact@prestashop.com>
 * @copyright 2007-2017 PrestaShop SA
 * @license   https://opensource.org/licenses/AFL-3.0 Academic Free License 3.0 (AFL-3.0)
 * International Registered Trademark & Property of PrestaShop SA
 *}

{* Load custom not-found styles *}
{block name='head_assets'}
  <link rel="stylesheet" href="{$urls.base_url}themes/AngarTheme/assets/css/not-found.css" type="text/css" media="all">
{/block}

{if $page.page_name == 'category'}

	{if $subcategories|count}

	{else}
	<section id="content" class="page-content page-not-found">
	  {block name='page_content'}
		<div class="not-found-container">
		  <div class="not-found-icon">
			<i class="fa-regular fa-face-frown"></i>
		  </div>

		  <h2 class="not-found-title">{l s='Nie znaleziono produktów' d='Shop.Theme.Global'}</h2>
		  <p class="not-found-description">{l s='Niestety, nie znaleźliśmy produktów pasujących do Twojego wyszukiwania.' d='Shop.Theme.Global'}</p>

		  <div class="not-found-suggestions">
			<p class="suggestions-title">{l s='Spróbuj:' d='Shop.Theme.Global'}</p>
			<ul class="suggestions-list">
			  <li>{l s='Użyć innych słów kluczowych' d='Shop.Theme.Global'}</li>
			  <li>{l s='Sprawdzić pisownię' d='Shop.Theme.Global'}</li>
			  <li>{l s='Użyć bardziej ogólnych fraz' d='Shop.Theme.Global'}</li>
			</ul>
		  </div>

		  {block name='search'}
			<div class="not-found-search">
			  {hook h='displaySearch'}
			</div>
		  {/block}

		  <div class="not-found-actions">
			<a href="{$urls.base_url}" class="btn btn-primary">
			  <i class="fa-solid fa-house"></i>
			  {l s='Wróć do strony głównej' d='Shop.Theme.Global'}
			</a>
		  </div>

		  {block name='hook_not_found'}
			{hook h='displayNotFound'}
		  {/block}
		</div>
	  {/block}
	</section>
	{/if}

{else}

	<section id="content" class="page-content page-not-found">
	  {block name='page_content'}
		<div class="not-found-container">
		  <div class="not-found-icon">
			<i class="fa-regular fa-face-frown"></i>
		  </div>

		  <h2 class="not-found-title">{l s='Nie znaleziono produktów' d='Shop.Theme.Global'}</h2>
		  <p class="not-found-description">{l s='Niestety, nie znaleźliśmy produktów pasujących do Twojego wyszukiwania.' d='Shop.Theme.Global'}</p>

		  <div class="not-found-suggestions">
			<p class="suggestions-title">{l s='Spróbuj:' d='Shop.Theme.Global'}</p>
			<ul class="suggestions-list">
			  <li>{l s='Użyć innych słów kluczowych' d='Shop.Theme.Global'}</li>
			  <li>{l s='Sprawdzić pisownię' d='Shop.Theme.Global'}</li>
			  <li>{l s='Użyć bardziej ogólnych fraz' d='Shop.Theme.Global'}</li>
			</ul>
		  </div>

		  {block name='search'}
			<div class="not-found-search">
			  {hook h='displaySearch'}
			</div>
		  {/block}

		  <div class="not-found-actions">
			<a href="{$urls.base_url}" class="btn btn-primary">
			  <i class="fa-solid fa-house"></i>
			  {l s='Wróć do strony głównej' d='Shop.Theme.Global'}
			</a>
		  </div>

		  {block name='hook_not_found'}
			{hook h='displayNotFound'}
		  {/block}
		</div>
	  {/block}
	</section>

{/if}

