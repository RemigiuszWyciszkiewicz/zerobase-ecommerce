{*
* @author	Krzysztof Pecak
* @copyright	2017 Krzysztof Pecak
* @license    http://opensource.org/licenses/afl-3.0.php  Academic Free License (AFL 3.0)
*}
{* AngarTheme *}
<div class="block-contact col-md-3 links wrapper">
  <div class="h3 block-contact-title hidden-sm-down">
    <a class="text-uppercase" href="{$urls.pages.contact}" rel="nofollow">
      {l s='Contact' mod='angarcontact'}
    </a>
  </div>
  <div class="title clearfix hidden-md-up" data-target="#footer_contact" data-toggle="collapse">
    <span class="h3">{l s='Contact' mod='angarcontact'}</span>
    <span class="float-xs-right">
      <span class="navbar-toggler collapse-icons">
        <i class="material-icons add">&#xE313;</i>
        <i class="material-icons remove">&#xE316;</i>
      </span>
    </span>
  </div>
  <ul class="account-list collapse" id="footer_contact">

    <div class="footer-logo-container">
      <a href="{$urls.base_url}">
            <img class="logo img-responsive" src="{if
            !$shop.logo|strstr:"/"}{$urls.img_ps_url}{/if}{$shop.logo}"
            alt="{$shop.name}">
            <span class="hidden-md-up hidden-sm-down">{$shop.name}</span>
          </a>
    </div>

    <div class="contact-item contact-item-phone">
      <svg class="phoneIcon" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewbox="0 0 24 24" fill="none" stroke="#f47021" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M22 16.92v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07 19.5 19.5 0 0 1-6-6 19.79 19.79 0 0 1-3.07-8.67A2 2 0 0 1 4.11 2h3a2 2 0 0 1 2 1.72 12.84 12.84 0 0 0 .7 2.81 2 2 0 0 1-.45 2.11L8.09 9.91a16 16 0 0 0 6 6l1.27-1.27a2 2 0 0 1 2.11-.45 12.84 12.84 0 0 0 2.81.7A2 2 0 0 1 22 16.92z"></path>
      </svg><a class="phoneNumber" href="tel:+48533996515" class="text-xl font-semibold hover:underline transition-opacity hover:opacity-80" style="color: #f47021;">{$angarcontact_phone}</a>
    </div>
    <div class="contact-item contact-item-email">
      <svg class="emailIcon" xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="#f47021" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z"></path> <polyline points="22,6 12,13 2,6"></polyline>
      </svg><a class="emailAddress" href="mailto:kontakt@zerobase.pl" class="text-lg font-semibold hover:underline" style="color: #f47021;">{$angarcontact_email}</a>
    </div>
	<!-- {if $angarcontact_address != ''}<li>{$angarcontact_address nofilter} {*HTML CONTENT*}</li>{/if} -->
	<!-- {if $angarcontact_phone != ''}<li>{l s='Phone:' mod='angarcontact'} <strong>{$angarcontact_phone}</strong></li>{/if} -->
	<!-- {if $angarcontact_whatsapp != ''}<li>{l s='WhatsApp:' mod='angarcontact'} <strong>{$angarcontact_whatsapp}</strong></li>{/if} -->
	<!-- {if $angarcontact_email != ''}<li>{l s='Email:' mod='angarcontact'} <strong>{mailto address=$angarcontact_email|escape:'html':'UTF-8' encode="hex"}</strong></li>{/if} -->
     {if $angarcontact_company != ''}<li>{$angarcontact_company nofilter} {*HTML CONTENT*}</li>{/if}

  </ul>
</div>