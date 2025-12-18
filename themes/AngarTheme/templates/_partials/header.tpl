{** * 2007-2025 PrestaShop * * NOTICE OF LICENSE * * This source file is subject
to the Academic Free License 3.0 (AFL-3.0) * that is bundled with this package
in the file LICENSE.txt. * It is also available through the world-wide-web at
this URL: * https://opensource.org/licenses/AFL-3.0 * If you did not receive a
copy of the license and are unable to * obtain it through the world-wide-web,
please send an email * to license@prestashop.com so we can send you a copy
immediately. * * DISCLAIMER * * Do not edit or add to this file if you wish to
upgrade PrestaShop to newer * versions in the future. If you wish to customize
PrestaShop for your * needs please refer to http://www.prestashop.com for more
information. * * @author PrestaShop SA
<contact@prestashop.com>
  * @copyright 2007-2025 PrestaShop SA * @license
  https://opensource.org/licenses/AFL-3.0 Academic Free License 3.0 (AFL-3.0) *
  International Registered Trademark & Property of PrestaShop SA *} {*
  AngarTheme *} {block name='header_banner'}
  <div class="header-banner">{hook h='displayBanner'}</div>
  {/block} {block name='header_nav'}
  <nav class="header-nav">
    <div class="container">
      <div class="row">
        <div class="col-md-12 col-xs-12">
          {hook h='displayNav1'} {hook h='displayNav2'}
        </div>
      </div>
    </div>
  </nav>
  {/block}
  <script></script>
  {block name='header_top'}
  <div class="header-top">
    <div class="container header-container">
      <div id="search_widget_desktop">{widget name="ps_searchbar"}</div>
      <div class="logo-container" id="_desktop_logo">
        {if $page.page_name == 'index'}
        <h1>
          <a href="{$urls.base_url}">
            <img class="logo img-responsive" src="{if
            !$shop.logo|strstr:"/"}{$urls.img_ps_url}{/if}{$shop.logo}"
            alt="{$shop.name}">
            <span class="hidden-md-up hidden-sm-down">{$shop.name}</span>
          </a>
        </h1>
        {else}
        <a href="{$urls.base_url}">
          <img class="logo img-responsive" src="{if
          !$shop.logo|strstr:"/"}{$urls.img_ps_url}{/if}{$shop.logo}"
          alt="{$shop.name}">
        </a>
        {/if}
      </div>
      <div class="cart-container">{widget name="ps_shoppingcart"}</div>
    </div>

    <div id="rwd_menu" class="hidden-md-up">
      <div class="container mobile-menu-container">
        <div id="menu-icon2" class="rwd_menu_item">
          <i class="material-icons d-inline">&#xE5D2;</i>
        </div>
        <!-- <div id="search-icon" class="rwd_menu_item"><i class="material-icons search">&#xE8B6;</i></div>
			<div id="user-icon" class="rwd_menu_item"><i class="material-icons logged">&#xE7FF;</i></div>
			<div id="_mobile_cart" class="rwd_menu_item"></div> -->
        <div id="search_widget_mobile">{widget name="ps_searchbar"}</div>
        <div class="sticky-cart-container">{widget name="ps_shoppingcart"}</div>
      </div>
      <div class="clearfix"></div>
    </div>

    <div class="container">
      <div
        id="mobile_top_menu_wrapper2"
        class="rwd_menu_open hidden-md-up"
        style="display: none"
      >
        <div class="js-top-menu mobile" id="_mobile_top_menu"></div>
      </div>

      <!-- <div id="mobile_search_wrapper" class="rwd_menu_open hidden-md-up" style="display:none;">
			<div id="_mobile_search_widget"></div>
		</div>

		<div id="mobile_user_wrapper" class="rwd_menu_open hidden-md-up" style="display:none;">
			<div id="_mobile_user_info"></div>
		</div> -->
    </div>
  </div>
  {hook h='displayNavFullWidth'} {/block}</contact@prestashop.com
>
