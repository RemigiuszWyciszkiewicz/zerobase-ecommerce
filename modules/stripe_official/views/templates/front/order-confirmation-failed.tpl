{**
 * Copyright (c) since 2010 Stripe, Inc. (https://stripe.com)
 *
 * NOTICE OF LICENSE
 *
 * This source file is subject to the Academic Free License version 3.0
 * that is bundled with this package in the file LICENSE.md.
 * It is also available through the world-wide-web at this URL:
 * https://opensource.org/licenses/AFL-3.0
 * If you did not receive a copy of the license and are unable to
 * obtain it through the world-wide-web, please send an email
 * to license@prestashop.com so we can send you a copy immediately.
 *
 * @author    Stripe <https://support.stripe.com/contact/email>
 * @copyright Since 2010 Stripe, Inc.
 * @license   https://opensource.org/licenses/AFL-3.0 Academic Free License version 3.0
 *}
{* licence *}
{extends file='page.tpl'}

{block name='content'}
  <section id="content-hook_order_confirmation" class="payment-failed-section">
    <div class="payment-failed-container">

      {* Error Icon *}
      <div class="failed-icon">
        <i class="fa-solid fa-circle-xmark"></i>
      </div>

      {* Error Title *}
      <h1 class="failed-title">
        {if isset($use_new_ps_translation) && $use_new_ps_translation}
          {l s='Płatność nie powiodła się' d='Modules.Stripeofficial.Orderconfirmationfailed17'}
        {else}
          {l s='Płatność nie powiodła się' mod='stripe_official'}
        {/if}
      </h1>

      {* Error Description *}
      <p class="failed-description">
        {if isset($use_new_ps_translation) && $use_new_ps_translation}
          {l s='Wystąpił błąd podczas przetwarzania Twojej płatności. Twoje zamówienie nie zostało zrealizowane.' d='Modules.Stripeofficial.Orderconfirmationfailed17'}
        {else}
          {l s='Wystąpił błąd podczas przetwarzania Twojej płatności. Twoje zamówienie nie zostało zrealizowane.' mod='stripe_official'}
        {/if}
      </p>

      {* Possible Reasons *}
      <div class="failed-reasons">
        <p class="reasons-title">{l s='Możliwe przyczyny:' mod='stripe_official'}</p>
        <ul class="reasons-list">
          <li>{l s='Niewystarczające środki na koncie' mod='stripe_official'}</li>
          <li>{l s='Karta została odrzucona przez bank' mod='stripe_official'}</li>
          <li>{l s='Błędne dane karty' mod='stripe_official'}</li>
          <li>{l s='Połączenie zostało przerwane' mod='stripe_official'}</li>
        </ul>
      </div>

      {* Action Buttons *}
      <div class="failed-actions">
        <a href="{$stripe_order_url|escape}" class="btn btn-retry">
          <i class="fa-solid fa-rotate-right"></i>
          {l s='Spróbuj ponownie' mod='stripe_official'}
        </a>
        <a href="{$urls.base_url}" class="btn btn-home">
          <i class="fa-solid fa-house"></i>
          {l s='Wróć do sklepu' mod='stripe_official'}
        </a>
      </div>

      {* Contact Support *}
      <div class="failed-support">
        <p>
          {l s='Potrzebujesz pomocy?' mod='stripe_official'}
          <a href="{$urls.pages.contact}">{l s='Skontaktuj się z nami' mod='stripe_official'}</a>
        </p>
      </div>

    </div>
  </section>

  <style>
    .payment-failed-section {
      min-height: 60vh;
      display: flex;
      align-items: center;
      justify-content: center;
      padding: 40px 20px;
      background: #f8f9fa;
    }

    .payment-failed-container {
      max-width: 550px;
      width: 100%;
      text-align: center;
      padding: 50px 40px;
      background: #ffffff;
      border-radius: 20px;
      box-shadow: 0 10px 40px rgba(0, 0, 0, 0.08);
      animation: fadeInUp 0.5s ease-out;
    }

    @keyframes fadeInUp {
      from {
        opacity: 0;
        transform: translateY(30px);
      }
      to {
        opacity: 1;
        transform: translateY(0);
      }
    }

    .failed-icon {
      margin-bottom: 24px;
    }

    .failed-icon i {
      font-size: 80px;
      color: #e74c3c;
      animation: iconShake 0.5s ease-out 0.3s;
    }

    @keyframes iconShake {
      0%, 100% { transform: translateX(0); }
      20% { transform: translateX(-10px); }
      40% { transform: translateX(10px); }
      60% { transform: translateX(-5px); }
      80% { transform: translateX(5px); }
    }

    .failed-title {
      font-size: 28px;
      font-weight: 700;
      color: #2c3e50;
      margin: 0 0 16px 0;
    }

    .failed-description {
      font-size: 16px;
      color: #7f8c8d;
      line-height: 1.6;
      margin-bottom: 30px;
    }

    .failed-reasons {
      background: #fef5f5;
      border-radius: 12px;
      padding: 20px 24px;
      margin-bottom: 30px;
      border-left: 4px solid #e74c3c;
      text-align: left;
    }

    .reasons-title {
      font-size: 14px;
      font-weight: 600;
      color: #2c3e50;
      margin-bottom: 12px;
    }

    .reasons-list {
      list-style: none;
      padding: 0;
      margin: 0;
    }

    .reasons-list li {
      font-size: 14px;
      color: #5a6c7d;
      padding: 6px 0;
      padding-left: 24px;
      position: relative;
    }

    .reasons-list li::before {
      content: "•";
      position: absolute;
      left: 8px;
      color: #e74c3c;
      font-weight: bold;
    }

    .failed-actions {
      display: flex;
      gap: 12px;
      justify-content: center;
      margin-bottom: 30px;
    }

    .failed-actions .btn {
      padding: 14px 28px;
      font-size: 15px;
      font-weight: 600;
      border-radius: 50px;
      display: inline-flex;
      align-items: center;
      gap: 10px;
      text-decoration: none;
      transition: all 0.3s ease;
      border: none;
    }

    .btn-retry {
      background: linear-gradient(135deg, #f47021 0%, #ff8c42 100%);
      color: white;
    }

    .btn-retry:hover {
      transform: translateY(-2px);
      box-shadow: 0 6px 20px rgba(244, 112, 33, 0.4);
      color: white;
    }

    .btn-home {
      background: #f0f0f0;
      color: #5a6c7d;
    }

    .btn-home:hover {
      background: #e0e0e0;
      color: #2c3e50;
    }

    .failed-support {
      padding-top: 20px;
      border-top: 1px solid #eee;
    }

    .failed-support p {
      font-size: 14px;
      color: #95a5a6;
      margin: 0;
    }

    .failed-support a {
      color: #f47021;
      font-weight: 600;
      text-decoration: none;
      transition: color 0.2s ease;
    }

    .failed-support a:hover {
      color: #d65e1a;
      text-decoration: underline;
    }

    /* Mobile Responsive */
    @media (max-width: 576px) {
      .payment-failed-section {
        padding: 20px 15px;
        min-height: 50vh;
      }

      .payment-failed-container {
        padding: 35px 25px;
        border-radius: 16px;
      }

      .failed-icon i {
        font-size: 60px;
      }

      .failed-title {
        font-size: 22px;
      }

      .failed-description {
        font-size: 14px;
        margin-bottom: 24px;
      }

      .failed-reasons {
        padding: 16px 18px;
        margin-bottom: 24px;
      }

      .reasons-list li {
        font-size: 13px;
        padding: 5px 0;
        padding-left: 20px;
      }

      .failed-actions {
        flex-direction: column;
      }

      .failed-actions .btn {
        width: 100%;
        justify-content: center;
        padding: 12px 24px;
        font-size: 14px;
      }
    }
  </style>
{/block}
