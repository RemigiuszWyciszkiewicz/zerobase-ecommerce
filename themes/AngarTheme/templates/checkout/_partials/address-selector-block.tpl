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

{* AngarThemes *}

{block name='address_selector_blocks'}
  <div class="address-selector-grid">
    {foreach $addresses as $address}
      <article
        class="address-card{if $address.id == $selected} selected{/if}"
        id="{$name|classname}-address-{$address.id}"
      >
        <label class="address-card-inner">
          <input
            type="radio"
            name="{$name}"
            value="{$address.id}"
            {if $address.id == $selected}checked{/if}
            class="address-radio"
          >
          <span class="address-check">
            <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3">
              <polyline points="20 6 9 17 4 12"></polyline>
            </svg>
          </span>
          <div class="address-card-content">
            <div class="address-card-header">
              <span class="address-alias">{$address.alias}</span>
            </div>
            <div class="address-body">{$address.formatted nofilter}</div>
          </div>
        </label>
        {if $interactive}
          <div class="address-actions">
            <a
              class="action-btn edit-address"
              data-link-action="edit-address"
              href="{url entity='order' params=['id_address' => $address.id, 'editAddress' => $type, 'token' => $token]}"
              title="{l s='Edit' d='Shop.Theme.Actions'}"
            >
              <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                <path d="M11 4H4a2 2 0 0 0-2 2v14a2 2 0 0 0 2 2h14a2 2 0 0 0 2-2v-7"></path>
                <path d="M18.5 2.5a2.121 2.121 0 0 1 3 3L12 15l-4 1 1-4 9.5-9.5z"></path>
              </svg>
              <span>{l s='Edit' d='Shop.Theme.Actions'}</span>
            </a>
            <a
              class="action-btn delete-address"
              data-link-action="delete-address"
              href="{url entity='order' params=['id_address' => $address.id, 'deleteAddress' => true, 'token' => $token]}"
              title="{l s='Delete' d='Shop.Theme.Actions'}"
            >
              <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                <polyline points="3 6 5 6 21 6"></polyline>
                <path d="M19 6v14a2 2 0 0 1-2 2H7a2 2 0 0 1-2-2V6m3 0V4a2 2 0 0 1 2-2h4a2 2 0 0 1 2 2v2"></path>
              </svg>
              <span>{l s='Delete' d='Shop.Theme.Actions'}</span>
            </a>
          </div>
        {/if}
      </article>
    {/foreach}
  </div>
  {if $interactive}
    <p class="address-save-wrapper">
      <button class="ps-hidden-by-js form-control-submit center-block" type="submit">{l s='Save' d='Shop.Theme.Actions'}</button>
    </p>
  {/if}
{/block}
