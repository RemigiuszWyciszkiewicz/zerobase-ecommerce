<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\SandboxExtension;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* __string_template__7d052cc3a8212833f465ba18f617aa63e14688d331e04eedb6b688281f205657 */
class __TwigTemplate_3834c62c9db028ab9093966f523b209e041d4f99fb378148553aaf2eec08d2f2 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'stylesheets' => [$this, 'block_stylesheets'],
            'extra_stylesheets' => [$this, 'block_extra_stylesheets'],
            'content_header' => [$this, 'block_content_header'],
            'content' => [$this, 'block_content'],
            'content_footer' => [$this, 'block_content_footer'],
            'sidebar_right' => [$this, 'block_sidebar_right'],
            'javascripts' => [$this, 'block_javascripts'],
            'extra_javascripts' => [$this, 'block_extra_javascripts'],
            'translate_javascripts' => [$this, 'block_translate_javascripts'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 1
        echo "<!DOCTYPE html>
<html lang=\"en\">
<head>
  <meta charset=\"utf-8\">
<meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
<meta name=\"apple-mobile-web-app-capable\" content=\"yes\">
<meta name=\"robots\" content=\"NOFOLLOW, NOINDEX\">

<link rel=\"icon\" type=\"image/x-icon\" href=\"/img/favicon.ico\" />
<link rel=\"apple-touch-icon\" href=\"/img/app_icon.png\" />

<title>Module manager • PrestaShop</title>

  <script type=\"text/javascript\">
    var help_class_name = 'AdminModulesManage';
    var iso_user = 'en';
    var lang_is_rtl = '0';
    var full_language_code = 'en-us';
    var full_cldr_language_code = 'en-US';
    var country_iso_code = 'PL';
    var _PS_VERSION_ = '8.2.1';
    var roundMode = 2;
    var youEditFieldFor = '';
        var new_order_msg = 'A new order has been placed on your store.';
    var order_number_msg = 'Order number: ';
    var total_msg = 'Total: ';
    var from_msg = 'From: ';
    var see_order_msg = 'View this order';
    var new_customer_msg = 'A new customer registered on your store.';
    var customer_name_msg = 'Customer name: ';
    var new_msg = 'A new message was posted on your store.';
    var see_msg = 'Read this message';
    var token = '32a781326ae4579d1e45094d8e966779';
    var currentIndex = 'index.php?controller=AdminModulesManage';
    var employee_token = '34a7667b9e7651bacc85cb235b326030';
    var choose_language_translate = 'Choose language:';
    var default_language = '1';
    var admin_modules_link = '/admin5859/index.php/improve/modules/manage?_token=FAOABmi2cUPwVrHghCifyyj8RHpYWxwqpLNduwi2Fk4';
    var admin_notification_get_link = '/admin5859/index.php/common/notifications?_token=FAOABmi2cUPwVrHghCifyyj8RHpYWxwqpLNduwi2Fk4';
    var admin_notification_push_link = adminNotificationPushLink = '/admin5859/index.php/common/notifications/ack?_token=FAOABmi2cUPwVrHghCifyyj8RHpYWxwqpLNduwi2Fk4';
    var tab_modules_list = '';
    var update_success_msg = 'Update successful';
    var search_product_msg = 'Search for a";
        // line 43
        echo " product';
  </script>



<link
      rel=\"preload\"
      href=\"/admin5859/themes/new-theme/public/2d8017489da689caedc1.preload..woff2\"
      as=\"font\"
      crossorigin
    >
      <link href=\"/admin5859/themes/new-theme/public/create_product_default_theme.css\" rel=\"stylesheet\" type=\"text/css\"/>
      <link href=\"/admin5859/themes/new-theme/public/theme.css\" rel=\"stylesheet\" type=\"text/css\"/>
      <link href=\"/js/jquery/plugins/chosen/jquery.chosen.css\" rel=\"stylesheet\" type=\"text/css\"/>
      <link href=\"/js/jquery/plugins/fancybox/jquery.fancybox.css\" rel=\"stylesheet\" type=\"text/css\"/>
      <link href=\"/modules/blockwishlist/public/backoffice.css\" rel=\"stylesheet\" type=\"text/css\"/>
      <link href=\"/admin5859/themes/default/css/vendor/nv.d3.css\" rel=\"stylesheet\" type=\"text/css\"/>
      <link href=\"/modules/ps_mbo/views/css/module-catalog.css\" rel=\"stylesheet\" type=\"text/css\"/>
      <link href=\"/modules/ps_mbo/views/css/connection-toolbar.css\" rel=\"stylesheet\" type=\"text/css\"/>
      <link href=\"/modules/ps_mbo/views/css/cdc-error-templating.css\" rel=\"stylesheet\" type=\"text/css\"/>
      <link href=\"/modules/angarscrolltop/views/css/admin.css\" rel=\"stylesheet\" type=\"text/css\"/>
  
  <script type=\"text/javascript\">
var baseAdminDir = \"\\/admin5859\\/\";
var baseDir = \"\\/\";
var changeFormLanguageUrl = \"\\/admin5859\\/index.php\\/configure\\/advanced\\/employees\\/change-form-language?_token=FAOABmi2cUPwVrHghCifyyj8RHpYWxwqpLNduwi2Fk4\";
var currency = {\"iso_code\":\"PLN\",\"sign\":\"z\\u0142\",\"name\":\"Polish Zloty\",\"format\":null};
var currency_specifications = {\"symbol\":[\".\",\",\",\";\",\"%\",\"-\",\"+\",\"E\",\"\\u00d7\",\"\\u2030\",\"\\u221e\",\"NaN\"],\"currencyCode\":\"PLN\",\"currencySymbol\":\"z\\u0142\",\"numberSymbols\":[\".\",\",\",\";\",\"%\",\"-\",\"+\",\"E\",\"\\u00d7\",\"\\u2030\",\"\\u221e\",\"NaN\"],\"positivePattern\":\"\\u00a4#,##0.00\",\"negativePattern\":\"-\\u00a4#,##0.00\",\"maxFractionDigits\":2,\"minFractionDigits\":2,\"groupingUsed\":true,\"primaryGroupSize\":3,\"secondaryGroupSize\":3};
var number_specifications = {\"symbol\":[\".\",\",\",";
        // line 71
        echo "\";\",\"%\",\"-\",\"+\",\"E\",\"\\u00d7\",\"\\u2030\",\"\\u221e\",\"NaN\"],\"numberSymbols\":[\".\",\",\",\";\",\"%\",\"-\",\"+\",\"E\",\"\\u00d7\",\"\\u2030\",\"\\u221e\",\"NaN\"],\"positivePattern\":\"#,##0.###\",\"negativePattern\":\"-#,##0.###\",\"maxFractionDigits\":3,\"minFractionDigits\":0,\"groupingUsed\":true,\"primaryGroupSize\":3,\"secondaryGroupSize\":3};
var prestashop = {\"debug\":false};
var show_new_customers = \"1\";
var show_new_messages = \"1\";
var show_new_orders = \"1\";
</script>
<script type=\"text/javascript\" src=\"/admin5859/themes/new-theme/public/main.bundle.js\"></script>
<script type=\"text/javascript\" src=\"/js/jquery/plugins/jquery.chosen.js\"></script>
<script type=\"text/javascript\" src=\"/js/jquery/plugins/fancybox/jquery.fancybox.js\"></script>
<script type=\"text/javascript\" src=\"/js/admin.js?v=8.2.1\"></script>
<script type=\"text/javascript\" src=\"/admin5859/themes/new-theme/public/cldr.bundle.js\"></script>
<script type=\"text/javascript\" src=\"/js/tools.js?v=8.2.1\"></script>
<script type=\"text/javascript\" src=\"/admin5859/themes/new-theme/public/create_product.bundle.js\"></script>
<script type=\"text/javascript\" src=\"/modules/blockwishlist/public/vendors.js\"></script>
<script type=\"text/javascript\" src=\"/modules/ps_emailalerts/js/admin/ps_emailalerts.js\"></script>
<script type=\"text/javascript\" src=\"/js/vendor/d3.v3.min.js\"></script>
<script type=\"text/javascript\" src=\"/admin5859/themes/default/js/vendor/nv.d3.min.js\"></script>
<script type=\"text/javascript\" src=\"/js/jquery/plugins/growl/jquery.growl.js?v=4.14.0\"></script>
<script type=\"text/javascript\" src=\"/modules/ps_mbo/views/js/connection-toolbar.js\"></script>
<script type=\"text/javascript\" src=\"/modules/ps_mbo/views/js/cdc-error-templating.js\"></script>
<script type=\"text/javascript\" src=\"https://assets.prestashop3.com/dst/mbo/v1/mbo-cdc.umd.js\"></script>
<script type=\"text/javascript\" src=\"/modules/ps_mbo/views/js/recommended-modules.js?v=4.14.0\"></script>

  

";
        // line 96
        $this->displayBlock('stylesheets', $context, $blocks);
        $this->displayBlock('extra_stylesheets', $context, $blocks);
        echo "</head>";
        echo "

<body
  class=\"lang-en adminmodulesmanage\"
  data-base-url=\"/admin5859/index.php\"  data-token=\"FAOABmi2cUPwVrHghCifyyj8RHpYWxwqpLNduwi2Fk4\">

  <header id=\"header\" class=\"d-print-none\">

    <nav id=\"header_infos\" class=\"main-header\">
      <button class=\"btn btn-primary-reverse onclick btn-lg unbind ajax-spinner\"></button>

            <i class=\"material-icons js-mobile-menu\">menu</i>
      <a id=\"header_logo\" class=\"logo float-left\" href=\"https://zerobase.pl/admin5859/index.php?controller=AdminDashboard&amp;token=07b35c9196ae0acc3c4788325534df22\"></a>
      <span id=\"shop_version\">8.2.1</span>

      <div class=\"component\" id=\"quick-access-container\">
        <div class=\"dropdown quick-accesses\">
  <button class=\"btn btn-link btn-sm dropdown-toggle\" type=\"button\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\" id=\"quick_select\">
    Quick Access
  </button>
  <div class=\"dropdown-menu\">
          <a class=\"dropdown-item quick-row-link \"
         href=\"https://zerobase.pl/admin5859/index.php?controller=AdminStats&amp;module=statscheckup&amp;token=70a1532c1613bff1e046190bf277d0d5\"
                 data-item=\"Catalog evaluation\"
      >Catalog evaluation</a>
          <a class=\"dropdown-item quick-row-link  active\"
         href=\"https://zerobase.pl/admin5859/index.php/improve/modules/manage?token=79c0d25a05b8272517a1d238a45b77ca\"
                 data-item=\"Installed modules\"
      >Installed modules</a>
          <a class=\"dropdown-item quick-row-link \"
         href=\"https://zerobase.pl/admin5859/index.php/sell/catalog/categories/new?token=79c0d25a05b8272517a1d238a45b77ca\"
                 data-item=\"New category\"
      >New category</a>
          <a class=\"dropdown-item quick-row-link new-product-button\"
         href=\"https://zerobase.pl/admin5859/index.php/sell/catalog/products-v2/create?token=79c0d25a05b8272517a1d238a45b77ca\"
                 data-item=\"New product\"
      >New product</a>
          <a class=\"dropdown-item quick-row-link \"
 ";
        // line 134
        echo "        href=\"https://zerobase.pl/admin5859/index.php?controller=AdminCartRules&amp;addcart_rule&amp;token=4889a0e5d1dae502af239b20aed448e4\"
                 data-item=\"New voucher\"
      >New voucher</a>
          <a class=\"dropdown-item quick-row-link \"
         href=\"https://zerobase.pl/admin5859/index.php/sell/orders?token=79c0d25a05b8272517a1d238a45b77ca\"
                 data-item=\"Orders\"
      >Orders</a>
        <div class=\"dropdown-divider\"></div>
          <a id=\"quick-remove-link\"
        class=\"dropdown-item js-quick-link\"
        href=\"#\"
        data-method=\"remove\"
        data-quicklink-id=\"5\"
        data-rand=\"79\"
        data-icon=\"icon-AdminModulesSf\"
        data-url=\"index.php/improve/modules/manage\"
        data-post-link=\"https://zerobase.pl/admin5859/index.php?controller=AdminQuickAccesses&token=821905dcf5b651467ecd7804fa3ccf10\"
        data-prompt-text=\"Please name this shortcut:\"
        data-link=\"Modules - List\"
      >
        <i class=\"material-icons\">remove_circle_outline</i>
        Remove from Quick Acess
      </a>
        <a id=\"quick-manage-link\" class=\"dropdown-item\" href=\"https://zerobase.pl/admin5859/index.php?controller=AdminQuickAccesses&token=821905dcf5b651467ecd7804fa3ccf10\">
      <i class=\"material-icons\">settings</i>
      Manage your quick accesses
    </a>
  </div>
</div>
      </div>
      <div class=\"component component-search\" id=\"header-search-container\">
        <div class=\"component-search-body\">
          <div class=\"component-search-top\">
            <form id=\"header_search\"
      class=\"bo_search_form dropdown-form js-dropdown-form collapsed\"
      method=\"post\"
      action=\"/admin5859/index.php?controller=AdminSearch&amp;token=3a36edd50523f0567b6aeffbef9341c2\"
      role=\"search\">
  <input type=\"hidden\" name=\"bo_search_type\" id=\"bo_search_type\" class=\"js-search-type\" />
    <div class=\"input-group\">
    <input type=\"text\" class=\"form-control js-form-search\" id=\"bo_query\" name=\"bo_query\" value=\"\" placeholde";
        // line 174
        echo "r=\"Search (e.g.: product reference, customer name…)\" aria-label=\"Searchbar\">
    <div class=\"input-group-append\">
      <button type=\"button\" class=\"btn btn-outline-secondary dropdown-toggle js-dropdown-toggle\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\">
        Everywhere
      </button>
      <div class=\"dropdown-menu js-items-list\">
        <a class=\"dropdown-item\" data-item=\"Everywhere\" href=\"#\" data-value=\"0\" data-placeholder=\"What are you looking for?\" data-icon=\"icon-search\"><i class=\"material-icons\">search</i> Everywhere</a>
        <div class=\"dropdown-divider\"></div>
        <a class=\"dropdown-item\" data-item=\"Catalog\" href=\"#\" data-value=\"1\" data-placeholder=\"Product name, reference, etc.\" data-icon=\"icon-book\"><i class=\"material-icons\">store_mall_directory</i> Catalog</a>
        <a class=\"dropdown-item\" data-item=\"Customers by name\" href=\"#\" data-value=\"2\" data-placeholder=\"Name\" data-icon=\"icon-group\"><i class=\"material-icons\">group</i> Customers by name</a>
        <a class=\"dropdown-item\" data-item=\"Customers by ip address\" href=\"#\" data-value=\"6\" data-placeholder=\"123.45.67.89\" data-icon=\"icon-desktop\"><i class=\"material-icons\">desktop_mac</i> Customers by IP address</a>
        <a class=\"dropdown-item\" data-item=\"Orders\" href=\"#\" data-value=\"3\" data-placeholder=\"Order ID\" data-icon=\"icon-credit-card\"><i class=\"material-icons\">shopping_basket</i> Orders</a>
        <a class=\"dropdown-item\" data-item=\"Invoices\" href=\"#\" data-value=\"4\" data-placeholder=\"Invoice number\" data-icon=\"icon-book\"><i class=\"material-icons\">book</i> Invoices</a>
        <a class=\"dropdown-item\" data-item=\"Carts\" href=\"#\" data-value=\"5\" data-placeholder=\"Cart ID\" data-icon=\"icon-shopping-cart\"><i class=\"material-icons\">shopping_cart</i> Carts</a>
        <a class=\"dropdown-item\" data-item=\"Modules\" href=\"#\" data-value=\"7\" data-placeholder=\"Module name\" data-icon=\"icon-puzzle-piece\"><i class=\"material-icons\">extension</i> Modules</a>
      </div>
      ";
        // line 190
        echo "<button class=\"btn btn-primary\" type=\"submit\"><span class=\"d-none\">SEARCH</span><i class=\"material-icons\">search</i></button>
    </div>
  </div>
</form>

<script type=\"text/javascript\">
 \$(document).ready(function(){
    \$('#bo_query').one('click', function() {
    \$(this).closest('form').removeClass('collapsed');
  });
});
</script>
            <button class=\"component-search-cancel d-none\">Cancel</button>
          </div>

          <div class=\"component-search-quickaccess d-none\">
  <p class=\"component-search-title\">Quick Access</p>
      <a class=\"dropdown-item quick-row-link\"
       href=\"https://zerobase.pl/admin5859/index.php?controller=AdminStats&amp;module=statscheckup&amp;token=70a1532c1613bff1e046190bf277d0d5\"
             data-item=\"Catalog evaluation\"
    >Catalog evaluation</a>
      <a class=\"dropdown-item quick-row-link active\"
       href=\"https://zerobase.pl/admin5859/index.php/improve/modules/manage?token=79c0d25a05b8272517a1d238a45b77ca\"
             data-item=\"Installed modules\"
    >Installed modules</a>
      <a class=\"dropdown-item quick-row-link\"
       href=\"https://zerobase.pl/admin5859/index.php/sell/catalog/categories/new?token=79c0d25a05b8272517a1d238a45b77ca\"
             data-item=\"New category\"
    >New category</a>
      <a class=\"dropdown-item quick-row-link\"
       href=\"https://zerobase.pl/admin5859/index.php/sell/catalog/products-v2/create?token=79c0d25a05b8272517a1d238a45b77ca\"
             data-item=\"New product\"
    >New product</a>
      <a class=\"dropdown-item quick-row-link\"
       href=\"https://zerobase.pl/admin5859/index.php?controller=AdminCartRules&amp;addcart_rule&amp;token=4889a0e5d1dae502af239b20aed448e4\"
             data-item=\"New voucher\"
    >New voucher</a>
      <a class=\"dropdown-item quick-row-link\"
       href=\"https://zerobase.pl/admin5859/index.php/sell/orders?token=79c0d25a05b8272517a1d238a45b77ca\"
             data-item=\"Orders\"
    >Orders</a>
    <div class=\"dropdown-divider\"></div>
      <a id=\"quic";
        // line 232
        echo "k-remove-link\"
      class=\"dropdown-item js-quick-link\"
      href=\"#\"
      data-method=\"remove\"
      data-quicklink-id=\"5\"
      data-rand=\"96\"
      data-icon=\"icon-AdminModulesSf\"
      data-url=\"index.php/improve/modules/manage\"
      data-post-link=\"https://zerobase.pl/admin5859/index.php?controller=AdminQuickAccesses&token=821905dcf5b651467ecd7804fa3ccf10\"
      data-prompt-text=\"Please name this shortcut:\"
      data-link=\"Modules - List\"
    >
      <i class=\"material-icons\">remove_circle_outline</i>
      Remove from Quick Acess
    </a>
    <a id=\"quick-manage-link\" class=\"dropdown-item\" href=\"https://zerobase.pl/admin5859/index.php?controller=AdminQuickAccesses&token=821905dcf5b651467ecd7804fa3ccf10\">
    <i class=\"material-icons\">settings</i>
    Manage your quick accesses
  </a>
</div>
        </div>

        <div class=\"component-search-background d-none\"></div>
      </div>

      
      
      <div class=\"header-right\">
                  <div class=\"component\" id=\"header-shop-list-container\">
              <div class=\"shop-list\">
    <a class=\"link\" id=\"header_shopname\" href=\"https://zerobase.pl/\" target= \"_blank\">
      <i class=\"material-icons\">visibility</i>
      <span>View my store</span>
    </a>
  </div>
          </div>
                          <div class=\"component header-right-component\" id=\"header-notifications-container\">
            <div id=\"notif\" class=\"notification-center dropdown dropdown-clickable\">
  <button class=\"btn notification js-notification dropdown-toggle\" data-toggle=\"dropdown\">
    <i class=\"material-icons\">notifications_none</i>
    <span id=\"notifications-total\" class=\"count hide\">0</span>
  </button>
  <div class=\"dropdown-menu dropdown-menu-right js-notifs_dropdown\">
    <div class=\"notifications\">
      <ul class=\"nav nav-tabs\" role=\"tablist\">
                          <li class=\"nav-item\">
            <a
              class=\"nav-link active\"
              id=\"orders-tab\"
              data-toggle=\"tab\"
         ";
        // line 282
        echo "     data-type=\"order\"
              href=\"#orders-notifications\"
              role=\"tab\"
            >
              Orders<span id=\"_nb_new_orders_\"></span>
            </a>
          </li>
                                    <li class=\"nav-item\">
            <a
              class=\"nav-link \"
              id=\"customers-tab\"
              data-toggle=\"tab\"
              data-type=\"customer\"
              href=\"#customers-notifications\"
              role=\"tab\"
            >
              Customers<span id=\"_nb_new_customers_\"></span>
            </a>
          </li>
                                    <li class=\"nav-item\">
            <a
              class=\"nav-link \"
              id=\"messages-tab\"
              data-toggle=\"tab\"
              data-type=\"customer_message\"
              href=\"#messages-notifications\"
              role=\"tab\"
            >
              Messages<span id=\"_nb_new_messages_\"></span>
            </a>
          </li>
                        </ul>

      <!-- Tab panes -->
      <div class=\"tab-content\">
                          <div class=\"tab-pane active empty\" id=\"orders-notifications\" role=\"tabpanel\">
            <p class=\"no-notification\">
              No new order for now :(<br>
              Have you checked your <strong><a href=\"https://zerobase.pl/admin5859/index.php?controller=AdminCarts&action=filterOnlyAbandonedCarts&token=dc0e35d14d1853af602e1bd5bf8ceebb\">abandoned carts</a></strong>?<br>Your next order could be hiding there!
            </p>
            <div class=\"notification-elements\"></div>
          </div>
                                    <div class=\"tab-pane  empty\" id=\"customers-notifications\" role=\"tabpanel\">
            <p class=\"no-notification\">
              No new customer for now :(<br>
              Are you active on social media these days?
            </p>
            <div class=\"notification-elements\"></div>
          </div>
                                    <div class=\"tab-pane  empty\" id=\"mess";
        // line 331
        echo "ages-notifications\" role=\"tabpanel\">
            <p class=\"no-notification\">
              No new message for now.<br>
              Seems like all your customers are happy :)
            </p>
            <div class=\"notification-elements\"></div>
          </div>
                        </div>
    </div>
  </div>
</div>

  <script type=\"text/html\" id=\"order-notification-template\">
    <a class=\"notif\" href='order_url'>
      #_id_order_ -
      from <strong>_customer_name_</strong> (_iso_code_)_carrier_
      <strong class=\"float-sm-right\">_total_paid_</strong>
    </a>
  </script>

  <script type=\"text/html\" id=\"customer-notification-template\">
    <a class=\"notif\" href='customer_url'>
      #_id_customer_ - <strong>_customer_name_</strong>_company_ - registered <strong>_date_add_</strong>
    </a>
  </script>

  <script type=\"text/html\" id=\"message-notification-template\">
    <a class=\"notif\" href='message_url'>
    <span class=\"message-notification-status _status_\">
      <i class=\"material-icons\">fiber_manual_record</i> _status_
    </span>
      - <strong>_customer_name_</strong> (_company_) - <i class=\"material-icons\">access_time</i> _date_add_
    </a>
  </script>
          </div>
        
        <div class=\"component\" id=\"header-employee-container\">
          <div class=\"dropdown employee-dropdown\">
  <div class=\"rounded-circle person\" data-toggle=\"dropdown\">
    <i class=\"material-icons\">account_circle</i>
  </div>
  <div class=\"dropdown-menu dropdown-menu-right\">
    <div class=\"employee-wrapper-avatar\">
      <div class=\"employee-top\">
        <span class=\"employee-avatar\"><img class=\"avatar rounded-circle\" src=\"https://zerobase.pl/img/pr/default.jpg\" alt=\"Remigiusz\" /></span>
        <span class=\"employee_profile\">Welcome back Remigiusz</span>
      </div>

      <a class=\"dropdown-item employee-link profile-link\" href=\"/admin5859/index.php/configure/advanced/employees/1/edit?_token=FAOABmi2cUPwVrHghCifyyj8RHpYWxwqpLNduwi2Fk4\">
      <i class=\"material-";
        // line 380
        echo "icons\">edit</i>
      <span>Your profile</span>
    </a>
    </div>

    <p class=\"divider\"></p>

                  <a class=\"dropdown-item ps_mbo\" href=\"https://www.prestashop.com/en/training?utm_source=back-office&utm_medium=menu&utm_content=download8_2&utm_campaign=training-en\"  target=\"_blank\" rel=\"noopener noreferrer nofollow\">
            <i class=\"material-icons\">school</i> Training
        </a>
                          <a class=\"dropdown-item ps_mbo\" href=\"https://www.prestashop.com/en/experts?utm_source=back-office&utm_medium=menu&utm_content=download8_2&utm_campaign=expert-en\"  target=\"_blank\" rel=\"noopener noreferrer nofollow\">
            <i class=\"material-icons\">person_pin_circle</i> Find an expert
        </a>
                          <a class=\"dropdown-item ps_mbo\" href=\"/admin5859/index.php/modules/mbo/modules/catalog/?utm_mbo_source=menu-user-back-office&_token=FAOABmi2cUPwVrHghCifyyj8RHpYWxwqpLNduwi2Fk4&utm_source=back-office&utm_medium=menu&utm_content=download8_2&utm_campaign=addons-en\"  rel=\"noopener noreferrer nofollow\">
            <i class=\"material-icons\">extension</i> Prestashop Marketplace
        </a>
                          <a class=\"dropdown-item ps_mbo\" href=\"https://help-center.prestashop.com/en?utm_source=back-office&utm_medium=menu&utm_content=download8_2&utm_campaign=help-center-en\"  target=\"_blank\" rel=\"noopener noreferrer nofollow\">
            <i class=\"material-icons\">help</i> Help Center
        </a>
                          <a class=\"dropdown-item \" href=\"https://accounts.distribution.prestashop.net?utm_source=zerobase.pl&utm_medium=back-office&utm_campaign=ps_accounts&utm_content=headeremployeedropdownlink\"  target=\"_blank\" rel=\"noopener noreferrer nofollow\">
            <i class=\"material-icons\">open_in_new</i> Manage your PrestaShop account
        </a>
                  <p class=\"divider\"></p>
            
    <a class=\"dropdown-item employee-link text-center\" id=\"header_logout\" href=\"https://zerobase.pl/admin5859/i";
        // line 404
        echo "ndex.php?controller=AdminLogin&amp;logout=1&amp;token=37a22063b119a4cf66ce4566b54013de\">
      <i class=\"material-icons d-lg-none\">power_settings_new</i>
      <span>Sign out</span>
    </a>
  </div>
</div>
        </div>
              </div>
    </nav>
  </header>

  <nav class=\"nav-bar d-none d-print-none d-md-block\">
  <span class=\"menu-collapse\" data-toggle-url=\"/admin5859/index.php/configure/advanced/employees/toggle-navigation?_token=FAOABmi2cUPwVrHghCifyyj8RHpYWxwqpLNduwi2Fk4\">
    <i class=\"material-icons rtl-flip\">chevron_left</i>
    <i class=\"material-icons rtl-flip\">chevron_left</i>
  </span>

  <div class=\"nav-bar-overflow\">
      <div class=\"logo-container\">
          <a id=\"header_logo\" class=\"logo float-left\" href=\"https://zerobase.pl/admin5859/index.php?controller=AdminDashboard&amp;token=07b35c9196ae0acc3c4788325534df22\"></a>
          <span id=\"shop_version\" class=\"header-version\">8.2.1</span>
      </div>

      <ul class=\"main-menu\">
              
                    
                    
          
            <li class=\"link-levelone\" data-submenu=\"1\" id=\"tab-AdminDashboard\">
              <a href=\"https://zerobase.pl/admin5859/index.php?controller=AdminDashboard&amp;token=07b35c9196ae0acc3c4788325534df22\" class=\"link\" >
                <i class=\"material-icons\">trending_up</i> <span>Dashboard</span>
              </a>
            </li>

          
                      
                                          
                    
          
            <li class=\"category-title\" data-submenu=\"2\" id=\"tab-SELL\">
                <span class=\"title\">Sell</span>
            </li>

                              
                  
                                                      
                  
                  <li class=\"link-levelone has_submenu\" data-submenu=\"3\" id=\"subtab-AdminParentOrders\">
                    <a href=\"/admin5859/index.php/sell/orders/?_token=FAOABmi2cUPwVrHghCifyyj8RHpYWxwqpLNduwi2Fk4\" class=\"link\">
            ";
        // line 453
        echo "          <i class=\"material-icons mi-shopping_basket\">shopping_basket</i>
                      <span>
                      Orders
                      </span>
                                                    <i class=\"material-icons sub-tabs-arrow\">
                                                                    keyboard_arrow_down
                                                            </i>
                                            </a>
                                              <ul id=\"collapse-3\" class=\"submenu panel-collapse\">
                                                      
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"4\" id=\"subtab-AdminOrders\">
                                <a href=\"/admin5859/index.php/sell/orders/?_token=FAOABmi2cUPwVrHghCifyyj8RHpYWxwqpLNduwi2Fk4\" class=\"link\"> Orders
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"5\" id=\"subtab-AdminInvoices\">
                                <a href=\"/admin5859/index.php/sell/orders/invoices/?_token=FAOABmi2cUPwVrHghCifyyj8RHpYWxwqpLNduwi2Fk4\" class=\"link\"> Invoices
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"6\" id=\"subtab-AdminSlip\">
                                <a href=\"/admin5859/index.php/sell/orders/credit-slips/?_token=FAOABmi2cUPwVrHghCifyyj8RHpYWxwqpLNduwi2Fk4\" class=\"link\"> Credit Slips
                              ";
        // line 483
        echo "  </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"7\" id=\"subtab-AdminDeliverySlip\">
                                <a href=\"/admin5859/index.php/sell/orders/delivery-slips/?_token=FAOABmi2cUPwVrHghCifyyj8RHpYWxwqpLNduwi2Fk4\" class=\"link\"> Delivery Slips
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"8\" id=\"subtab-AdminCarts\">
                                <a href=\"https://zerobase.pl/admin5859/index.php?controller=AdminCarts&amp;token=dc0e35d14d1853af602e1bd5bf8ceebb\" class=\"link\"> Shopping Carts
                                </a>
                              </li>

                                                                              </ul>
                                        </li>
                                              
                  
                                                      
                  
                  <li class=\"link-levelone has_submenu\" data-submenu=\"9\" id=\"subtab-AdminCatalog\">
                    <a href=\"/admin5859/index.php/sell/catalog/products?_token=FAOABmi2cUPwVrHghCifyyj8RHpYWxwqpLNduwi2Fk4\" class=\"link\">
                      <i class=\"material-icons mi-store\">store</i>
                      <span>
                      Catalog
                      </span>
                                                    <i class=\"material-icons sub-tabs-arrow\">
                                                                    keyboard_arrow_down
                                                            </i>
";
        // line 517
        echo "                                            </a>
                                              <ul id=\"collapse-9\" class=\"submenu panel-collapse\">
                                                      
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"10\" id=\"subtab-AdminProducts\">
                                <a href=\"/admin5859/index.php/sell/catalog/products?_token=FAOABmi2cUPwVrHghCifyyj8RHpYWxwqpLNduwi2Fk4\" class=\"link\"> Products
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"11\" id=\"subtab-AdminCategories\">
                                <a href=\"/admin5859/index.php/sell/catalog/categories?_token=FAOABmi2cUPwVrHghCifyyj8RHpYWxwqpLNduwi2Fk4\" class=\"link\"> Categories
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"12\" id=\"subtab-AdminTracking\">
                                <a href=\"/admin5859/index.php/sell/catalog/monitoring/?_token=FAOABmi2cUPwVrHghCifyyj8RHpYWxwqpLNduwi2Fk4\" class=\"link\"> Monitoring
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"13\" id=\"subtab-AdminParentAttributesGroups\">
                                <a href=\"https://zero";
        // line 547
        echo "base.pl/admin5859/index.php?controller=AdminAttributesGroups&amp;token=db3c2b78010893cacd9ce6c57a76cd98\" class=\"link\"> Attributes &amp; Features
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"16\" id=\"subtab-AdminParentManufacturers\">
                                <a href=\"/admin5859/index.php/sell/catalog/brands/?_token=FAOABmi2cUPwVrHghCifyyj8RHpYWxwqpLNduwi2Fk4\" class=\"link\"> Brands &amp; Suppliers
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"19\" id=\"subtab-AdminAttachments\">
                                <a href=\"/admin5859/index.php/sell/attachments/?_token=FAOABmi2cUPwVrHghCifyyj8RHpYWxwqpLNduwi2Fk4\" class=\"link\"> Files
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"20\" id=\"subtab-AdminParentCartRules\">
                                <a href=\"https://zerobase.pl/admin5859/index.php?controller=AdminCartRules&amp;token=4889a0e5d1dae502af239b20aed448e4\" class=\"link\"> Discounts
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li cl";
        // line 578
        echo "ass=\"link-leveltwo\" data-submenu=\"23\" id=\"subtab-AdminStockManagement\">
                                <a href=\"/admin5859/index.php/sell/stocks/?_token=FAOABmi2cUPwVrHghCifyyj8RHpYWxwqpLNduwi2Fk4\" class=\"link\"> Stock
                                </a>
                              </li>

                                                                              </ul>
                                        </li>
                                              
                  
                                                      
                  
                  <li class=\"link-levelone has_submenu\" data-submenu=\"24\" id=\"subtab-AdminParentCustomer\">
                    <a href=\"/admin5859/index.php/sell/customers/?_token=FAOABmi2cUPwVrHghCifyyj8RHpYWxwqpLNduwi2Fk4\" class=\"link\">
                      <i class=\"material-icons mi-account_circle\">account_circle</i>
                      <span>
                      Customers
                      </span>
                                                    <i class=\"material-icons sub-tabs-arrow\">
                                                                    keyboard_arrow_down
                                                            </i>
                                            </a>
                                              <ul id=\"collapse-24\" class=\"submenu panel-collapse\">
                                                      
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"25\" id=\"subtab-AdminCustomers\">
                                <a href=\"/admin5859/index.php/sell/customers/?_token=FAOABmi2cUPwVrHghCifyyj8RHpYWxwqpLNduwi2Fk4\" class=\"link\"> Customers
                                </a>
                              </li>

                                                                                  
                              
                                    ";
        // line 610
        echo "                        
                              <li class=\"link-leveltwo\" data-submenu=\"26\" id=\"subtab-AdminAddresses\">
                                <a href=\"/admin5859/index.php/sell/addresses/?_token=FAOABmi2cUPwVrHghCifyyj8RHpYWxwqpLNduwi2Fk4\" class=\"link\"> Addresses
                                </a>
                              </li>

                                                                                                                                    </ul>
                                        </li>
                                              
                  
                                                      
                  
                  <li class=\"link-levelone has_submenu\" data-submenu=\"28\" id=\"subtab-AdminParentCustomerThreads\">
                    <a href=\"https://zerobase.pl/admin5859/index.php?controller=AdminCustomerThreads&amp;token=5d4bebdbd4f939491c2cb3553a63901b\" class=\"link\">
                      <i class=\"material-icons mi-chat\">chat</i>
                      <span>
                      Customer Service
                      </span>
                                                    <i class=\"material-icons sub-tabs-arrow\">
                                                                    keyboard_arrow_down
                                                            </i>
                                            </a>
                                              <ul id=\"collapse-28\" class=\"submenu panel-collapse\">
                                                      
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"29\" id=\"subtab-AdminCustomerThreads\">
                                <a href=\"https://zerobase.pl/admin5859/index.php?controller=AdminCustomerThreads&amp;token=5d4bebdbd4f939491c2cb3553a63901b\" class=\"link\"> Customer Service
                                </a>
          ";
        // line 639
        echo "                    </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"30\" id=\"subtab-AdminOrderMessage\">
                                <a href=\"/admin5859/index.php/sell/customer-service/order-messages/?_token=FAOABmi2cUPwVrHghCifyyj8RHpYWxwqpLNduwi2Fk4\" class=\"link\"> Order Messages
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"31\" id=\"subtab-AdminReturn\">
                                <a href=\"https://zerobase.pl/admin5859/index.php?controller=AdminReturn&amp;token=ab910b8a928e892e3144aac1d74a457f\" class=\"link\"> Merchandise Returns
                                </a>
                              </li>

                                                                              </ul>
                                        </li>
                                              
                  
                                                      
                  
                  <li class=\"link-levelone\" data-submenu=\"32\" id=\"subtab-AdminStats\">
                    <a href=\"https://zerobase.pl/admin5859/index.php?controller=AdminStats&amp;token=70a1532c1613bff1e046190bf277d0d5\" class=\"link\">
                      <i class=\"material-icons mi-assessment\">assessment</i>
                      <span>
                      Stats
                      </span>
                                                    <i class=\"material-icons sub-tabs-arrow\">
                                                                    keyboard_arrow_down
                                                         ";
        // line 671
        echo "   </i>
                                            </a>
                                        </li>
                              
          
                      
                                          
                    
          
            <li class=\"category-title link-active\" data-submenu=\"37\" id=\"tab-IMPROVE\">
                <span class=\"title\">Improve</span>
            </li>

                              
                  
                                                      
                                                          
                  <li class=\"link-levelone has_submenu link-active open ul-open\" data-submenu=\"38\" id=\"subtab-AdminParentModulesSf\">
                    <a href=\"/admin5859/index.php/modules/mbo/modules/catalog/?_token=FAOABmi2cUPwVrHghCifyyj8RHpYWxwqpLNduwi2Fk4\" class=\"link\">
                      <i class=\"material-icons mi-extension\">extension</i>
                      <span>
                      Modules
                      </span>
                                                    <i class=\"material-icons sub-tabs-arrow\">
                                                                    keyboard_arrow_up
                                                            </i>
                                            </a>
                                              <ul id=\"collapse-38\" class=\"submenu panel-collapse\">
                                                                                                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"136\" id=\"subtab-AdminPsMboModuleParent\">
                                <a href=\"/admin5859/index.php/modules/mbo/modules/catalog/?_token=FAOABmi2cUPwVrHghCifyyj8RHpYWxwqpLNduwi2Fk4\" class=\"link\"> Marketplace
                                </a>
                             ";
        // line 705
        echo " </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo link-active\" data-submenu=\"39\" id=\"subtab-AdminModulesSf\">
                                <a href=\"/admin5859/index.php/improve/modules/manage?_token=FAOABmi2cUPwVrHghCifyyj8RHpYWxwqpLNduwi2Fk4\" class=\"link\"> Module Manager
                                </a>
                              </li>

                                                                                                                                    </ul>
                                        </li>
                                              
                  
                                                      
                  
                  <li class=\"link-levelone has_submenu\" data-submenu=\"43\" id=\"subtab-AdminParentThemes\">
                    <a href=\"/admin5859/index.php/improve/design/themes/?_token=FAOABmi2cUPwVrHghCifyyj8RHpYWxwqpLNduwi2Fk4\" class=\"link\">
                      <i class=\"material-icons mi-desktop_mac\">desktop_mac</i>
                      <span>
                      Design
                      </span>
                                                    <i class=\"material-icons sub-tabs-arrow\">
                                                                    keyboard_arrow_down
                                                            </i>
                                            </a>
                                              <ul id=\"collapse-43\" class=\"submenu panel-collapse\">
                                                      
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"129\" id=\"subtab-AdminThemesParent\">
                                <a href=\"/admin5859/index.php/improve/design/the";
        // line 736
        echo "mes/?_token=FAOABmi2cUPwVrHghCifyyj8RHpYWxwqpLNduwi2Fk4\" class=\"link\"> Theme &amp; Logo
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"140\" id=\"subtab-AdminPsMboTheme\">
                                <a href=\"/admin5859/index.php/modules/mbo/themes/catalog/?_token=FAOABmi2cUPwVrHghCifyyj8RHpYWxwqpLNduwi2Fk4\" class=\"link\"> Themes Catalog
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"45\" id=\"subtab-AdminParentMailTheme\">
                                <a href=\"/admin5859/index.php/improve/design/mail_theme/?_token=FAOABmi2cUPwVrHghCifyyj8RHpYWxwqpLNduwi2Fk4\" class=\"link\"> Email Theme
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"47\" id=\"subtab-AdminCmsContent\">
                                <a href=\"/admin5859/index.php/improve/design/cms-pages/?_token=FAOABmi2cUPwVrHghCifyyj8RHpYWxwqpLNduwi2Fk4\" class=\"link\"> Pages
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"48\" id=\"subtab-AdminModulesPositi";
        // line 767
        echo "ons\">
                                <a href=\"/admin5859/index.php/improve/design/modules/positions/?_token=FAOABmi2cUPwVrHghCifyyj8RHpYWxwqpLNduwi2Fk4\" class=\"link\"> Positions
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"49\" id=\"subtab-AdminImages\">
                                <a href=\"https://zerobase.pl/admin5859/index.php?controller=AdminImages&amp;token=e3455a1a6bcc50e265aa19202947323c\" class=\"link\"> Image Settings
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"118\" id=\"subtab-AdminLinkWidget\">
                                <a href=\"/admin5859/index.php/modules/link-widget/list?_token=FAOABmi2cUPwVrHghCifyyj8RHpYWxwqpLNduwi2Fk4\" class=\"link\"> Link List
                                </a>
                              </li>

                                                                              </ul>
                                        </li>
                                              
                  
                                                      
                  
                  <li class=\"link-levelone has_submenu\" data-submenu=\"50\" id=\"subtab-AdminParentShipping\">
                    <a href=\"https://zerobase.pl/admin5859/index.php?controller=AdminCarriers&amp;token=50525685859308a55bbf1ba4fb68bfa6\" class=\"link\">
                      <i class=\"material-icons mi-local_shipping\">local_shipping</i>
                      <span>
                      Shipping
                      </span>
   ";
        // line 800
        echo "                                                 <i class=\"material-icons sub-tabs-arrow\">
                                                                    keyboard_arrow_down
                                                            </i>
                                            </a>
                                              <ul id=\"collapse-50\" class=\"submenu panel-collapse\">
                                                      
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"51\" id=\"subtab-AdminCarriers\">
                                <a href=\"https://zerobase.pl/admin5859/index.php?controller=AdminCarriers&amp;token=50525685859308a55bbf1ba4fb68bfa6\" class=\"link\"> Carriers
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"52\" id=\"subtab-AdminShipping\">
                                <a href=\"/admin5859/index.php/improve/shipping/preferences/?_token=FAOABmi2cUPwVrHghCifyyj8RHpYWxwqpLNduwi2Fk4\" class=\"link\"> Preferences
                                </a>
                              </li>

                                                                              </ul>
                                        </li>
                                              
                  
                                                      
                  
                  <li class=\"link-levelone has_submenu\" data-submenu=\"53\" id=\"subtab-AdminParentPayment\">
                    <a href=\"/admin5859/index.php/improve/payment/payment_methods?_token=FAOABmi2cUPwVrHghCifyyj8RHpYWxwqpLNduwi2Fk4\" class=\"link\">
                      <i class=\"material-icons mi-payment\">payment</i";
        // line 829
        echo ">
                      <span>
                      Payment
                      </span>
                                                    <i class=\"material-icons sub-tabs-arrow\">
                                                                    keyboard_arrow_down
                                                            </i>
                                            </a>
                                              <ul id=\"collapse-53\" class=\"submenu panel-collapse\">
                                                      
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"54\" id=\"subtab-AdminPayment\">
                                <a href=\"/admin5859/index.php/improve/payment/payment_methods?_token=FAOABmi2cUPwVrHghCifyyj8RHpYWxwqpLNduwi2Fk4\" class=\"link\"> Payment Methods
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"55\" id=\"subtab-AdminPaymentPreferences\">
                                <a href=\"/admin5859/index.php/improve/payment/preferences?_token=FAOABmi2cUPwVrHghCifyyj8RHpYWxwqpLNduwi2Fk4\" class=\"link\"> Preferences
                                </a>
                              </li>

                                                                              </ul>
                                        </li>
                                              
                  
                                                      
                  
                  <li class=\"link-levelone has_submenu\" data-submenu=\"56\" id=\"subtab-AdminInternational\">
                    <a href=\"/admin5859/index.php/improve/international/localization/?_token=FAOABmi2cUPwVrHghCif";
        // line 861
        echo "yyj8RHpYWxwqpLNduwi2Fk4\" class=\"link\">
                      <i class=\"material-icons mi-language\">language</i>
                      <span>
                      International
                      </span>
                                                    <i class=\"material-icons sub-tabs-arrow\">
                                                                    keyboard_arrow_down
                                                            </i>
                                            </a>
                                              <ul id=\"collapse-56\" class=\"submenu panel-collapse\">
                                                      
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"57\" id=\"subtab-AdminParentLocalization\">
                                <a href=\"/admin5859/index.php/improve/international/localization/?_token=FAOABmi2cUPwVrHghCifyyj8RHpYWxwqpLNduwi2Fk4\" class=\"link\"> Localization
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"62\" id=\"subtab-AdminParentCountries\">
                                <a href=\"/admin5859/index.php/improve/international/zones/?_token=FAOABmi2cUPwVrHghCifyyj8RHpYWxwqpLNduwi2Fk4\" class=\"link\"> Locations
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"66\" id=\"subtab-AdminParentTaxes\">
                                <a href=\"/admin5859/index.php/improve/international/ta";
        // line 891
        echo "xes/?_token=FAOABmi2cUPwVrHghCifyyj8RHpYWxwqpLNduwi2Fk4\" class=\"link\"> Taxes
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"69\" id=\"subtab-AdminTranslations\">
                                <a href=\"/admin5859/index.php/improve/international/translations/settings?_token=FAOABmi2cUPwVrHghCifyyj8RHpYWxwqpLNduwi2Fk4\" class=\"link\"> Translations
                                </a>
                              </li>

                                                                              </ul>
                                        </li>
                              
          
                      
                                          
                    
          
            <li class=\"category-title\" data-submenu=\"70\" id=\"tab-CONFIGURE\">
                <span class=\"title\">Configure</span>
            </li>

                              
                  
                                                      
                  
                  <li class=\"link-levelone has_submenu\" data-submenu=\"71\" id=\"subtab-ShopParameters\">
                    <a href=\"/admin5859/index.php/configure/shop/preferences/preferences?_token=FAOABmi2cUPwVrHghCifyyj8RHpYWxwqpLNduwi2Fk4\" class=\"link\">
                      <i class=\"material-icons mi-settings\">settings</i>
                      <span>
                      Shop Parameters
                      </span>
                                                    <i class=\"material-icons sub-tabs-arrow\">
                                                                    keyboard_arrow_down
                                                            </i>
                                            </a>
                                            ";
        // line 929
        echo "  <ul id=\"collapse-71\" class=\"submenu panel-collapse\">
                                                      
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"72\" id=\"subtab-AdminParentPreferences\">
                                <a href=\"/admin5859/index.php/configure/shop/preferences/preferences?_token=FAOABmi2cUPwVrHghCifyyj8RHpYWxwqpLNduwi2Fk4\" class=\"link\"> General
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"75\" id=\"subtab-AdminParentOrderPreferences\">
                                <a href=\"/admin5859/index.php/configure/shop/order-preferences/?_token=FAOABmi2cUPwVrHghCifyyj8RHpYWxwqpLNduwi2Fk4\" class=\"link\"> Order Settings
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"78\" id=\"subtab-AdminPPreferences\">
                                <a href=\"/admin5859/index.php/configure/shop/product-preferences/?_token=FAOABmi2cUPwVrHghCifyyj8RHpYWxwqpLNduwi2Fk4\" class=\"link\"> Product Settings
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"79\" id=\"subtab-AdminParentCustomerPreferences\">
                                <a href=\"/admin5859/index.php/configur";
        // line 958
        echo "e/shop/customer-preferences/?_token=FAOABmi2cUPwVrHghCifyyj8RHpYWxwqpLNduwi2Fk4\" class=\"link\"> Customer Settings
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"83\" id=\"subtab-AdminParentStores\">
                                <a href=\"/admin5859/index.php/configure/shop/contacts/?_token=FAOABmi2cUPwVrHghCifyyj8RHpYWxwqpLNduwi2Fk4\" class=\"link\"> Contact
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"86\" id=\"subtab-AdminParentMeta\">
                                <a href=\"/admin5859/index.php/configure/shop/seo-urls/?_token=FAOABmi2cUPwVrHghCifyyj8RHpYWxwqpLNduwi2Fk4\" class=\"link\"> Traffic &amp; SEO
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"89\" id=\"subtab-AdminParentSearchConf\">
                                <a href=\"https://zerobase.pl/admin5859/index.php?controller=AdminSearchConf&amp;token=54061fd3fb7e597e3e5b673f35b8de19\" class=\"link\"> Search
                                </a>
                              </li>

                                                                              </ul>
                                        </li>
                                              
                  
                                                ";
        // line 990
        echo "      
                  
                  <li class=\"link-levelone has_submenu\" data-submenu=\"92\" id=\"subtab-AdminAdvancedParameters\">
                    <a href=\"/admin5859/index.php/configure/advanced/system-information/?_token=FAOABmi2cUPwVrHghCifyyj8RHpYWxwqpLNduwi2Fk4\" class=\"link\">
                      <i class=\"material-icons mi-settings_applications\">settings_applications</i>
                      <span>
                      Advanced Parameters
                      </span>
                                                    <i class=\"material-icons sub-tabs-arrow\">
                                                                    keyboard_arrow_down
                                                            </i>
                                            </a>
                                              <ul id=\"collapse-92\" class=\"submenu panel-collapse\">
                                                      
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"93\" id=\"subtab-AdminInformation\">
                                <a href=\"/admin5859/index.php/configure/advanced/system-information/?_token=FAOABmi2cUPwVrHghCifyyj8RHpYWxwqpLNduwi2Fk4\" class=\"link\"> Information
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"94\" id=\"subtab-AdminPerformance\">
                                <a href=\"/admin5859/index.php/configure/advanced/performance/?_token=FAOABmi2cUPwVrHghCifyyj8RHpYWxwqpLNduwi2Fk4\" class=\"link\"> Performance
                                </a>
                              </li>

                                                                                  
 ";
        // line 1020
        echo "                             
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"95\" id=\"subtab-AdminAdminPreferences\">
                                <a href=\"/admin5859/index.php/configure/advanced/administration/?_token=FAOABmi2cUPwVrHghCifyyj8RHpYWxwqpLNduwi2Fk4\" class=\"link\"> Administration
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"96\" id=\"subtab-AdminEmails\">
                                <a href=\"/admin5859/index.php/configure/advanced/emails/?_token=FAOABmi2cUPwVrHghCifyyj8RHpYWxwqpLNduwi2Fk4\" class=\"link\"> E-mail
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"97\" id=\"subtab-AdminImport\">
                                <a href=\"/admin5859/index.php/configure/advanced/import/?_token=FAOABmi2cUPwVrHghCifyyj8RHpYWxwqpLNduwi2Fk4\" class=\"link\"> Import
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"98\" id=\"subtab-AdminParentEmployees\">
                                <a href=\"/admin5859/index.php/configure/advanced/employees/?_token=FAOABmi2cUPwVrHghCifyyj8RHpYWxwqpLNduwi2Fk4\" class=\"link\"> Team
                                </a>
                              </li>

        ";
        // line 1051
        echo "                                                                          
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"102\" id=\"subtab-AdminParentRequestSql\">
                                <a href=\"/admin5859/index.php/configure/advanced/sql-requests/?_token=FAOABmi2cUPwVrHghCifyyj8RHpYWxwqpLNduwi2Fk4\" class=\"link\"> Database
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"105\" id=\"subtab-AdminLogs\">
                                <a href=\"/admin5859/index.php/configure/advanced/logs/?_token=FAOABmi2cUPwVrHghCifyyj8RHpYWxwqpLNduwi2Fk4\" class=\"link\"> Logs
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"106\" id=\"subtab-AdminWebservice\">
                                <a href=\"/admin5859/index.php/configure/advanced/webservice-keys/?_token=FAOABmi2cUPwVrHghCifyyj8RHpYWxwqpLNduwi2Fk4\" class=\"link\"> Webservice
                                </a>
                              </li>

                                                                                                                                                                                                                                                    
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"110\" id=\"subtab-AdminFeatureFlag\">
    ";
        // line 1079
        echo "                            <a href=\"/admin5859/index.php/configure/advanced/feature-flags/?_token=FAOABmi2cUPwVrHghCifyyj8RHpYWxwqpLNduwi2Fk4\" class=\"link\"> New &amp; Experimental Features
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"111\" id=\"subtab-AdminParentSecurity\">
                                <a href=\"/admin5859/index.php/configure/advanced/security/?_token=FAOABmi2cUPwVrHghCifyyj8RHpYWxwqpLNduwi2Fk4\" class=\"link\"> Security
                                </a>
                              </li>

                                                                              </ul>
                                        </li>
                              
          
                      
                                          
                    
          
            <li class=\"category-title\" data-submenu=\"116\" id=\"tab-DEFAULT\">
                <span class=\"title\">More</span>
            </li>

                              
                  
                                                      
                  
                  <li class=\"link-levelone\" data-submenu=\"151\" id=\"subtab-AdminAngarFastconfig\">
                    <a href=\"https://zerobase.pl/admin5859/index.php?controller=AdminAngarFastconfig&amp;token=115ed2f77e3aa19c8906e1b59bf2627a\" class=\"link\">
                      <i class=\"material-icons mi-tune\">tune</i>
                      <span>
                      AngarTheme configuration
                      </span>
                                                    <i class=\"material-icons sub-tabs-arrow\">
                                                                    keyboard_arrow_down
                                                            </i>
  ";
        // line 1116
        echo "                                          </a>
                                        </li>
                              
          
                  </ul>
  </div>
  
</nav>


<div class=\"header-toolbar d-print-none\">
    
  <div class=\"container-fluid\">

    
      <nav aria-label=\"Breadcrumb\">
        <ol class=\"breadcrumb\">
                      <li class=\"breadcrumb-item\">Module Manager</li>
          
                      <li class=\"breadcrumb-item active\">
              <a href=\"/admin5859/index.php/improve/modules/manage?_token=FAOABmi2cUPwVrHghCifyyj8RHpYWxwqpLNduwi2Fk4\" aria-current=\"page\">Modules</a>
            </li>
                  </ol>
      </nav>
    

    <div class=\"title-row\">
      
          <h1 class=\"title\">
            Module manager          </h1>
      

      
        <div class=\"toolbar-icons\">
          <div class=\"wrapper\">
            
                                                          <a
                  class=\"btn btn-primary pointer\"                  id=\"page-header-desc-configuration-add_module\"
                  href=\"#\"                  title=\"Upload a module\"                  data-toggle=\"pstooltip\"
                  data-placement=\"bottom\"                                  >
                  <i class=\"material-icons\">cloud_upload</i>                  Upload a module
                </a>
                                      
            
                              <a class=\"btn btn-outline-secondary btn-help btn-sidebar\" href=\"#\"
                   title=\"Help\"
                   data-toggle=\"sidebar\"
                   data-target=\"#right-sidebar\"
                   data-url=\"/admin5859/index.php/common/sidebar/https%253A%252F%252Fhelp.prestashop-project.org%252Fen%252Fdoc%252FAdminModules%253Fversion%253D8.2.1%2526country%253Den/Help?_token=FAOABmi2cUPwVrHghCifyyj8RHpYWxwqpLNduwi2Fk4\"
                   id=\"product_form_open_help\"
                >
                  Help
                </a>
                ";
        // line 1169
        echo "                    </div>
        </div>

      
    </div>
  </div>

  
      <div class=\"page-head-tabs\" id=\"head_tabs\">
      <ul class=\"nav nav-pills\">
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                              <li class=\"nav-item\">
                    <a href=\"/admin5859/index.php/improve/modules/manage?_token=FAOABmi2cUPwVrHghCifyyj8RHpYWxwqpLNduwi2Fk4\" id=\"subtab-AdminModulesManage\" class=\"nav-link tab active current\" data-submenu=\"40\">
                      Modules
                      <span class=\"notification-container\">
                        <span class=\"notification-counter\"></span>
                      </span>
                    </a>
                  </li>
                                                                <li class=\"nav-item\">
                    <a href=\"/admin5859/index.php/improve/modules/alerts?_token=FAOABmi2cUPwVrHghCifyyj8RHpYWxwqpLNduwi2Fk4\" id=\"subtab-AdminModulesNotifications\" class=\"nav-link tab \" data-submenu=\"41\">
                      Alerts
                      <span class=\"notification-container\">
                        <span class=\"notification-counter\"></span>
                      </span>
                    </a>
                  </li>
                                                                <li class=\"nav-item\">
                    <a href=\"/admin5859/index.php/improve/modules/updates?_to";
        // line 1196
        echo "ken=FAOABmi2cUPwVrHghCifyyj8RHpYWxwqpLNduwi2Fk4\" id=\"subtab-AdminModulesUpdates\" class=\"nav-link tab \" data-submenu=\"42\">
                      Updates
                      <span class=\"notification-container\">
                        <span class=\"notification-counter\"></span>
                      </span>
                    </a>
                  </li>
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                </ul>
    </div>
  
  <div class=\"btn-floating\">
    <button class=\"btn btn-primary collapsed\" data-toggle=\"collapse\" data-target=\".btn-floating-container\" aria-expanded=\"false\">
      <i class=\"material-icons\">add</i>
    </button>
    <div class=\"btn-floating-container collapse\">
      <div class=\"btn-floating-menu\">
        
                              <a
              class=\"btn btn-floating-item   pointer\"              id=\"page-header-desc-floating-configuration-add_module\"
              href=\"#\"              title=\"Upload a module\"              data-toggle=\"pstooltip\"
              data-";
        // line 1216
        echo "placement=\"bottom\"            >
              Upload a module
              <i class=\"material-icons\">cloud_upload</i>            </a>
                  
                              <a class=\"btn btn-floating-item btn-help btn-sidebar\" href=\"#\"
               title=\"Help\"
               data-toggle=\"sidebar\"
               data-target=\"#right-sidebar\"
               data-url=\"/admin5859/index.php/common/sidebar/https%253A%252F%252Fhelp.prestashop-project.org%252Fen%252Fdoc%252FAdminModules%253Fversion%253D8.2.1%2526country%253Den/Help?_token=FAOABmi2cUPwVrHghCifyyj8RHpYWxwqpLNduwi2Fk4\"
            >
              Help
            </a>
                        </div>
    </div>
  </div>
  
</div>

<div id=\"main-div\">
          
      <div class=\"content-div  with-tabs\">

        <script>
  if (typeof window.mboCdc !== undefined && typeof window.mboCdc !== \"undefined\") {
    const renderModulesManagerMessage = window.mboCdc.renderModulesManagerMessage

    const context = {\"currency\":\"EUR\",\"iso_lang\":\"en\",\"iso_code\":\"pl\",\"shop_version\":\"8.2.1\",\"shop_url\":\"https:\\/\\/zerobase.pl\",\"shop_uuid\":\"e9ae8bfe-d960-4208-b509-4fbfccd473e8\",\"mbo_token\":\"eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJzaG9wX3VybCI6Imh0dHBzOi8vemVyb2Jhc2UucGwiLCJzaG9wX3V1aWQiOiJlOWFlOGJmZS1kOTYwLTQyMDgtYjUwOS00ZmJmY2NkNDczZTgifQ.nGamsQ7CPCZAPUuZh-uPZdNvxDF6QMOaQmSG3ovCBWw\",\"mbo_version\":\"4.14.0\",\"mbo_reset_url\":\"https:\\/\\/zerobase.pl\\/admin5859\\/index.php\\/improve\\/modules\\/manage\\/action\\/reset\\/ps_mbo?_token=FAOABmi2cUPwVrHghCifyyj8RHpYWxwqpLNduwi2Fk4\",\"user_id\":\"1\",\"admin_token\":\"FAOABmi2cUPwVrHghCifyyj8RHpYWxwqpLNduwi2Fk4\",\"refresh_url\":\"https:\\/\\/zerobase.pl\\/admin5859\\/index.php?controller=apiSecurityPsMbo&token=72a0d566e47c634a6d5e3a6104ecf3e5\",\"installed_modules\":[{\"id\":0,\"name\":\"productcomments\",\"status\":\"enabled__mobile_enabled\",\"version\":\"7.0.0\",\"config_url\":\"https:\\/\\/zerobase.pl\\/admin5859\\/index.php\\/improve\\/modules\\/manage\\/action\\/configure\\/productcomments?_token=FAOABmi2cUPwVrHghCifyyj8R";
        // line 1242
        echo "HpYWxwqpLNduwi2Fk4\"},{\"id\":0,\"name\":\"statsbestmanufacturers\",\"status\":\"enabled__mobile_enabled\",\"version\":\"2.0.3\",\"config_url\":null},{\"id\":0,\"name\":\"angarcmsinfo\",\"status\":\"enabled__mobile_enabled\",\"version\":\"1.0.0\",\"config_url\":\"https:\\/\\/zerobase.pl\\/admin5859\\/index.php\\/improve\\/modules\\/manage\\/action\\/configure\\/angarcmsinfo?_token=FAOABmi2cUPwVrHghCifyyj8RHpYWxwqpLNduwi2Fk4\"},{\"id\":0,\"name\":\"ps_bestsellers\",\"status\":\"disabled__mobile_disabled\",\"version\":\"1.0.6\",\"config_url\":\"https:\\/\\/zerobase.pl\\/admin5859\\/index.php\\/improve\\/modules\\/manage\\/action\\/configure\\/ps_bestsellers?_token=FAOABmi2cUPwVrHghCifyyj8RHpYWxwqpLNduwi2Fk4\"},{\"id\":0,\"name\":\"statssearch\",\"status\":\"enabled__mobile_enabled\",\"version\":\"2.0.2\",\"config_url\":null},{\"id\":0,\"name\":\"pagesnotfound\",\"status\":\"enabled__mobile_enabled\",\"version\":\"2.0.3\",\"config_url\":null},{\"id\":0,\"name\":\"statspersonalinfos\",\"status\":\"enabled__mobile_enabled\",\"version\":\"2.0.4\",\"config_url\":null},{\"id\":0,\"name\":\"angarcatproduct\",\"status\":\"enabled__mobile_disabled\",\"version\":\"1.0.0\",\"config_url\":\"https:\\/\\/zerobase.pl\\/admin5859\\/index.php\\/improve\\/modules\\/manage\\/action\\/configure\\/angarcatproduct?_token=FAOABmi2cUPwVrHghCifyyj8RHpYWxwqpLNduwi2Fk4\"},{\"id\":0,\"name\":\"ps_banner\",\"status\":\"disabled__mobile_disabled\",\"version\":\"2.1.2\",\"config_url\":\"https:\\/\\/zerobase.pl\\/admin5859\\/index.php\\/improve\\/modules\\/manage\\/action\\/configure\\/ps_banner?_token=FAOABmi2cUPwVrHghCifyyj8RHpYWxwqpLNduwi2Fk4\"},{\"id\":0,\"name\":\"statsbestproducts\",\"status\":\"enabled__mobile_enabled\",\"version\":\"2.0.1\",\"config_url\":null},{\"id\":0,\"name\":\"dashproducts\",\"status\":\"enabled__mobile_enabled\",\"version\":\"2.1.4\",\"config_url\":null},{\"id\":0,\"name\":\"ps_linklist\",\"status\":\"enabled__mobile_enabled\",\"version\":\"6.0.7\",\"config_url\":\"https:\\/\\/zerobase.pl\\/admin5859\\/index.php\\/improve\\/modules\\/manage\\/action\\/configure\\/ps_linklist?_token=FAOABmi2cUPwVrHghCifyyj8RHpYWxwqpLNduwi2Fk4\"},{\"id\":0,\"name\":\"ps_viewedproduct\",\"status\":\"enabled__mobile_enabled\",\"vers";
        echo "ion\":\"1.2.4\",\"config_url\":\"https:\\/\\/zerobase.pl\\/admin5859\\/index.php\\/improve\\/modules\\/manage\\/action\\/configure\\/ps_viewedproduct?_token=FAOABmi2cUPwVrHghCifyyj8RHpYWxwqpLNduwi2Fk4\"},{\"id\":0,\"name\":\"gsitemap\",\"status\":\"enabled__mobile_enabled\",\"version\":\"4.4.0\",\"config_url\":\"https:\\/\\/zerobase.pl\\/admin5859\\/index.php\\/improve\\/modules\\/manage\\/action\\/configure\\/gsitemap?_token=FAOABmi2cUPwVrHghCifyyj8RHpYWxwqpLNduwi2Fk4\"},{\"id\":0,\"name\":\"angarslider\",\"status\":\"enabled__mobile_enabled\",\"version\":\"1.0.1\",\"config_url\":\"https:\\/\\/zerobase.pl\\/admin5859\\/index.php\\/improve\\/modules\\/manage\\/action\\/configure\\/angarslider?_token=FAOABmi2cUPwVrHghCifyyj8RHpYWxwqpLNduwi2Fk4\"},{\"id\":0,\"name\":\"angarfacebook\",\"status\":\"enabled__mobile_disabled\",\"version\":\"1.0.0\",\"config_url\":\"https:\\/\\/zerobase.pl\\/admin5859\\/index.php\\/improve\\/modules\\/manage\\/action\\/configure\\/angarfacebook?_token=FAOABmi2cUPwVrHghCifyyj8RHpYWxwqpLNduwi2Fk4\"},{\"id\":0,\"name\":\"ps_searchbar\",\"status\":\"enabled__mobile_enabled\",\"version\":\"2.1.3\",\"config_url\":null},{\"id\":0,\"name\":\"ps_crossselling\",\"status\":\"enabled__mobile_enabled\",\"version\":\"2.0.2\",\"config_url\":\"https:\\/\\/zerobase.pl\\/admin5859\\/index.php\\/improve\\/modules\\/manage\\/action\\/configure\\/ps_crossselling?_token=FAOABmi2cUPwVrHghCifyyj8RHpYWxwqpLNduwi2Fk4\"},{\"id\":0,\"name\":\"angarthemeconfigurator\",\"status\":\"enabled__mobile_enabled\",\"version\":\"1.0.0\",\"config_url\":\"https:\\/\\/zerobase.pl\\/admin5859\\/index.php\\/improve\\/modules\\/manage\\/action\\/configure\\/angarthemeconfigurator?_token=FAOABmi2cUPwVrHghCifyyj8RHpYWxwqpLNduwi2Fk4\"},{\"id\":0,\"name\":\"statsbestcustomers\",\"status\":\"enabled__mobile_enabled\",\"version\":\"2.0.4\",\"config_url\":null},{\"id\":0,\"name\":\"angarbanners\",\"status\":\"enabled__mobile_enabled\",\"version\":\"1.0.0\",\"config_url\":\"https:\\/\\/zerobase.pl\\/admin5859\\/index.php\\/improve\\/modules\\/manage\\/action\\/configure\\/angarbanners?_token=FAOABmi2cUPwVrHghCifyyj8RHpYWxwqpLNduwi2Fk4\"},{\"id\":0,\"name\":\"ps_shoppingcart\",\"status\":\"enabled__mobile_enabled";
        echo "\",\"version\":\"3.0.0\",\"config_url\":\"https:\\/\\/zerobase.pl\\/admin5859\\/index.php\\/improve\\/modules\\/manage\\/action\\/configure\\/ps_shoppingcart?_token=FAOABmi2cUPwVrHghCifyyj8RHpYWxwqpLNduwi2Fk4\"},{\"id\":0,\"name\":\"blockwishlist\",\"status\":\"enabled__mobile_enabled\",\"version\":\"3.0.2\",\"config_url\":\"https:\\/\\/zerobase.pl\\/admin5859\\/index.php\\/improve\\/modules\\/manage\\/action\\/configure\\/blockwishlist?_token=FAOABmi2cUPwVrHghCifyyj8RHpYWxwqpLNduwi2Fk4\"},{\"id\":0,\"name\":\"ps_categorytree\",\"status\":\"enabled__mobile_enabled\",\"version\":\"3.0.1\",\"config_url\":\"https:\\/\\/zerobase.pl\\/admin5859\\/index.php\\/improve\\/modules\\/manage\\/action\\/configure\\/ps_categorytree?_token=FAOABmi2cUPwVrHghCifyyj8RHpYWxwqpLNduwi2Fk4\"},{\"id\":0,\"name\":\"ps_faviconnotificationbo\",\"status\":\"enabled__mobile_enabled\",\"version\":\"2.1.3\",\"config_url\":\"https:\\/\\/zerobase.pl\\/admin5859\\/index.php\\/improve\\/modules\\/manage\\/action\\/configure\\/ps_faviconnotificationbo?_token=FAOABmi2cUPwVrHghCifyyj8RHpYWxwqpLNduwi2Fk4\"},{\"id\":0,\"name\":\"ps_contactinfo\",\"status\":\"enabled__mobile_enabled\",\"version\":\"3.3.3\",\"config_url\":\"https:\\/\\/zerobase.pl\\/admin5859\\/index.php\\/improve\\/modules\\/manage\\/action\\/configure\\/ps_contactinfo?_token=FAOABmi2cUPwVrHghCifyyj8RHpYWxwqpLNduwi2Fk4\"},{\"id\":0,\"name\":\"angarhomecat\",\"status\":\"enabled__mobile_enabled\",\"version\":\"1.0.0\",\"config_url\":\"https:\\/\\/zerobase.pl\\/admin5859\\/index.php\\/improve\\/modules\\/manage\\/action\\/configure\\/angarhomecat?_token=FAOABmi2cUPwVrHghCifyyj8RHpYWxwqpLNduwi2Fk4\"},{\"id\":0,\"name\":\"statscarrier\",\"status\":\"enabled__mobile_enabled\",\"version\":\"2.0.1\",\"config_url\":null},{\"id\":0,\"name\":\"ps_customeraccountlinks\",\"status\":\"enabled__mobile_enabled\",\"version\":\"3.2.0\",\"config_url\":null},{\"id\":0,\"name\":\"psgdpr\",\"status\":\"enabled__mobile_enabled\",\"version\":\"1.4.3\",\"config_url\":\"https:\\/\\/zerobase.pl\\/admin5859\\/index.php\\/improve\\/modules\\/manage\\/action\\/configure\\/psgdpr?_token=FAOABmi2cUPwVrHghCifyyj8RHpYWxwqpLNduwi2Fk4\"},{\"id\":0,\"name\":\"statscheckup\",\"status\":\"enabled__m";
        echo "obile_enabled\",\"version\":\"2.0.3\",\"config_url\":null},{\"id\":0,\"name\":\"angarfastconfig\",\"status\":\"enabled__mobile_enabled\",\"version\":\"1.0.0\",\"config_url\":\"https:\\/\\/zerobase.pl\\/admin5859\\/index.php\\/improve\\/modules\\/manage\\/action\\/configure\\/angarfastconfig?_token=FAOABmi2cUPwVrHghCifyyj8RHpYWxwqpLNduwi2Fk4\"},{\"id\":0,\"name\":\"statssales\",\"status\":\"enabled__mobile_enabled\",\"version\":\"2.1.0\",\"config_url\":null},{\"id\":0,\"name\":\"ps_accounts\",\"status\":\"enabled__mobile_enabled\",\"version\":\"8.0.6\",\"config_url\":\"https:\\/\\/zerobase.pl\\/admin5859\\/index.php\\/improve\\/modules\\/manage\\/action\\/configure\\/ps_accounts?_token=FAOABmi2cUPwVrHghCifyyj8RHpYWxwqpLNduwi2Fk4\"},{\"id\":0,\"name\":\"statsbestvouchers\",\"status\":\"enabled__mobile_enabled\",\"version\":\"2.0.1\",\"config_url\":null},{\"id\":0,\"name\":\"ps_dataprivacy\",\"status\":\"enabled__mobile_enabled\",\"version\":\"2.1.1\",\"config_url\":\"https:\\/\\/zerobase.pl\\/admin5859\\/index.php\\/improve\\/modules\\/manage\\/action\\/configure\\/ps_dataprivacy?_token=FAOABmi2cUPwVrHghCifyyj8RHpYWxwqpLNduwi2Fk4\"},{\"id\":0,\"name\":\"contactform\",\"status\":\"enabled__mobile_enabled\",\"version\":\"4.4.3\",\"config_url\":\"https:\\/\\/zerobase.pl\\/admin5859\\/index.php\\/improve\\/modules\\/manage\\/action\\/configure\\/contactform?_token=FAOABmi2cUPwVrHghCifyyj8RHpYWxwqpLNduwi2Fk4\"},{\"id\":0,\"name\":\"angarnewproducts\",\"status\":\"enabled__mobile_enabled\",\"version\":\"1.0.0\",\"config_url\":\"https:\\/\\/zerobase.pl\\/admin5859\\/index.php\\/improve\\/modules\\/manage\\/action\\/configure\\/angarnewproducts?_token=FAOABmi2cUPwVrHghCifyyj8RHpYWxwqpLNduwi2Fk4\"},{\"id\":0,\"name\":\"ps_distributionapiclient\",\"status\":\"enabled__mobile_enabled\",\"version\":\"1.1.1\",\"config_url\":null},{\"id\":0,\"name\":\"ps_brandlist\",\"status\":\"enabled__mobile_enabled\",\"version\":\"1.0.3\",\"config_url\":\"https:\\/\\/zerobase.pl\\/admin5859\\/index.php\\/improve\\/modules\\/manage\\/action\\/configure\\/ps_brandlist?_token=FAOABmi2cUPwVrHghCifyyj8RHpYWxwqpLNduwi2Fk4\"},{\"id\":0,\"name\":\"ps_emailalerts\",\"status\":\"enabled__mobile_enabled\",\"version\":\"3.0.1\",\"config_ur";
        echo "l\":\"https:\\/\\/zerobase.pl\\/admin5859\\/index.php\\/improve\\/modules\\/manage\\/action\\/configure\\/ps_emailalerts?_token=FAOABmi2cUPwVrHghCifyyj8RHpYWxwqpLNduwi2Fk4\"},{\"id\":0,\"name\":\"ps_emailsubscription\",\"status\":\"enabled__mobile_enabled\",\"version\":\"2.8.2\",\"config_url\":\"https:\\/\\/zerobase.pl\\/admin5859\\/index.php\\/improve\\/modules\\/manage\\/action\\/configure\\/ps_emailsubscription?_token=FAOABmi2cUPwVrHghCifyyj8RHpYWxwqpLNduwi2Fk4\"},{\"id\":0,\"name\":\"ps_specials\",\"status\":\"disabled__mobile_disabled\",\"version\":\"1.0.2\",\"config_url\":\"https:\\/\\/zerobase.pl\\/admin5859\\/index.php\\/improve\\/modules\\/manage\\/action\\/configure\\/ps_specials?_token=FAOABmi2cUPwVrHghCifyyj8RHpYWxwqpLNduwi2Fk4\"},{\"id\":0,\"name\":\"angarspecials\",\"status\":\"enabled__mobile_enabled\",\"version\":\"1.0.0\",\"config_url\":\"https:\\/\\/zerobase.pl\\/admin5859\\/index.php\\/improve\\/modules\\/manage\\/action\\/configure\\/angarspecials?_token=FAOABmi2cUPwVrHghCifyyj8RHpYWxwqpLNduwi2Fk4\"},{\"id\":0,\"name\":\"angarcookieinfo\",\"status\":\"enabled__mobile_enabled\",\"version\":\"1.0.0\",\"config_url\":\"https:\\/\\/zerobase.pl\\/admin5859\\/index.php\\/improve\\/modules\\/manage\\/action\\/configure\\/angarcookieinfo?_token=FAOABmi2cUPwVrHghCifyyj8RHpYWxwqpLNduwi2Fk4\"},{\"id\":0,\"name\":\"statsnewsletter\",\"status\":\"enabled__mobile_enabled\",\"version\":\"2.0.3\",\"config_url\":null},{\"id\":0,\"name\":\"ps_eventbus\",\"status\":\"enabled__mobile_enabled\",\"version\":\"4.0.13\",\"config_url\":null},{\"id\":0,\"name\":\"ps_featuredproducts\",\"status\":\"disabled__mobile_disabled\",\"version\":\"2.1.5\",\"config_url\":\"https:\\/\\/zerobase.pl\\/admin5859\\/index.php\\/improve\\/modules\\/manage\\/action\\/configure\\/ps_featuredproducts?_token=FAOABmi2cUPwVrHghCifyyj8RHpYWxwqpLNduwi2Fk4\"},{\"id\":0,\"name\":\"ps_categoryproducts\",\"status\":\"enabled__mobile_enabled\",\"version\":\"1.0.7\",\"config_url\":\"https:\\/\\/zerobase.pl\\/admin5859\\/index.php\\/improve\\/modules\\/manage\\/action\\/configure\\/ps_categoryproducts?_token=FAOABmi2cUPwVrHghCifyyj8RHpYWxwqpLNduwi2Fk4\"},{\"id\":0,\"name\":\"angarfeatured\",\"status\":\"enabled__mobile_en";
        echo "abled\",\"version\":\"1.0.0\",\"config_url\":\"https:\\/\\/zerobase.pl\\/admin5859\\/index.php\\/improve\\/modules\\/manage\\/action\\/configure\\/angarfeatured?_token=FAOABmi2cUPwVrHghCifyyj8RHpYWxwqpLNduwi2Fk4\"},{\"id\":0,\"name\":\"ps_facetedsearch\",\"status\":\"enabled__mobile_enabled\",\"version\":\"4.0.0\",\"config_url\":\"https:\\/\\/zerobase.pl\\/admin5859\\/index.php\\/improve\\/modules\\/manage\\/action\\/configure\\/ps_facetedsearch?_token=FAOABmi2cUPwVrHghCifyyj8RHpYWxwqpLNduwi2Fk4\"},{\"id\":0,\"name\":\"gridhtml\",\"status\":\"enabled__mobile_enabled\",\"version\":\"2.0.3\",\"config_url\":null},{\"id\":0,\"name\":\"statsforecast\",\"status\":\"enabled__mobile_enabled\",\"version\":\"2.0.4\",\"config_url\":\"https:\\/\\/zerobase.pl\\/admin5859\\/index.php\\/improve\\/modules\\/manage\\/action\\/configure\\/statsforecast?_token=FAOABmi2cUPwVrHghCifyyj8RHpYWxwqpLNduwi2Fk4\"},{\"id\":0,\"name\":\"angarmanufacturer\",\"status\":\"enabled__mobile_enabled\",\"version\":\"1.0.0\",\"config_url\":\"https:\\/\\/zerobase.pl\\/admin5859\\/index.php\\/improve\\/modules\\/manage\\/action\\/configure\\/angarmanufacturer?_token=FAOABmi2cUPwVrHghCifyyj8RHpYWxwqpLNduwi2Fk4\"},{\"id\":0,\"name\":\"stripe_official\",\"status\":\"enabled__mobile_enabled\",\"version\":\"3.6.8\",\"config_url\":\"https:\\/\\/zerobase.pl\\/admin5859\\/index.php\\/improve\\/modules\\/manage\\/action\\/configure\\/stripe_official?_token=FAOABmi2cUPwVrHghCifyyj8RHpYWxwqpLNduwi2Fk4\"},{\"id\":0,\"name\":\"ps_checkpayment\",\"status\":\"enabled__mobile_enabled\",\"version\":\"2.1.0\",\"config_url\":\"https:\\/\\/zerobase.pl\\/admin5859\\/index.php\\/improve\\/modules\\/manage\\/action\\/configure\\/ps_checkpayment?_token=FAOABmi2cUPwVrHghCifyyj8RHpYWxwqpLNduwi2Fk4\"},{\"id\":0,\"name\":\"angarparallax\",\"status\":\"enabled__mobile_disabled\",\"version\":\"1.4.1\",\"config_url\":\"https:\\/\\/zerobase.pl\\/admin5859\\/index.php\\/improve\\/modules\\/manage\\/action\\/configure\\/angarparallax?_token=FAOABmi2cUPwVrHghCifyyj8RHpYWxwqpLNduwi2Fk4\"},{\"id\":0,\"name\":\"angarcmsdesc\",\"status\":\"enabled__mobile_enabled\",\"version\":\"1.0.0\",\"config_url\":\"https:\\/\\/zerobase.pl\\/admin5859\\/index.php\\/improve\\/mo";
        echo "dules\\/manage\\/action\\/configure\\/angarcmsdesc?_token=FAOABmi2cUPwVrHghCifyyj8RHpYWxwqpLNduwi2Fk4\"},{\"id\":0,\"name\":\"angarscrolltop\",\"status\":\"enabled__mobile_enabled\",\"version\":\"1.0.0\",\"config_url\":null},{\"id\":0,\"name\":\"ps_currencyselector\",\"status\":\"enabled__mobile_enabled\",\"version\":\"2.1.1\",\"config_url\":null},{\"id\":0,\"name\":\"statsproduct\",\"status\":\"enabled__mobile_enabled\",\"version\":\"2.1.3\",\"config_url\":null},{\"id\":0,\"name\":\"statsdata\",\"status\":\"enabled__mobile_enabled\",\"version\":\"2.1.2\",\"config_url\":\"https:\\/\\/zerobase.pl\\/admin5859\\/index.php\\/improve\\/modules\\/manage\\/action\\/configure\\/statsdata?_token=FAOABmi2cUPwVrHghCifyyj8RHpYWxwqpLNduwi2Fk4\"},{\"id\":0,\"name\":\"ps_languageselector\",\"status\":\"enabled__mobile_enabled\",\"version\":\"2.1.3\",\"config_url\":null},{\"id\":0,\"name\":\"ps_customtext\",\"status\":\"disabled__mobile_disabled\",\"version\":\"4.2.1\",\"config_url\":\"https:\\/\\/zerobase.pl\\/admin5859\\/index.php\\/improve\\/modules\\/manage\\/action\\/configure\\/ps_customtext?_token=FAOABmi2cUPwVrHghCifyyj8RHpYWxwqpLNduwi2Fk4\"},{\"id\":0,\"name\":\"ps_customersignin\",\"status\":\"enabled__mobile_enabled\",\"version\":\"2.0.5\",\"config_url\":null},{\"id\":0,\"name\":\"angarbestsellers\",\"status\":\"enabled__mobile_enabled\",\"version\":\"1.0.0\",\"config_url\":\"https:\\/\\/zerobase.pl\\/admin5859\\/index.php\\/improve\\/modules\\/manage\\/action\\/configure\\/angarbestsellers?_token=FAOABmi2cUPwVrHghCifyyj8RHpYWxwqpLNduwi2Fk4\"},{\"id\":0,\"name\":\"angarwhatsapp\",\"status\":\"enabled__mobile_enabled\",\"version\":\"1.0.0\",\"config_url\":\"https:\\/\\/zerobase.pl\\/admin5859\\/index.php\\/improve\\/modules\\/manage\\/action\\/configure\\/angarwhatsapp?_token=FAOABmi2cUPwVrHghCifyyj8RHpYWxwqpLNduwi2Fk4\"},{\"id\":0,\"name\":\"statsbestcategories\",\"status\":\"enabled__mobile_enabled\",\"version\":\"2.0.1\",\"config_url\":null},{\"id\":0,\"name\":\"blockreassurance\",\"status\":\"enabled__mobile_enabled\",\"version\":\"5.1.4\",\"config_url\":\"https:\\/\\/zerobase.pl\\/admin5859\\/index.php\\/improve\\/modules\\/manage\\/action\\/configure\\/blockreassurance?_token=FAOABmi2cUPwVrHghCifyyj8R";
        echo "HpYWxwqpLNduwi2Fk4\"},{\"id\":0,\"name\":\"graphnvd3\",\"status\":\"enabled__mobile_enabled\",\"version\":\"2.0.3\",\"config_url\":null},{\"id\":0,\"name\":\"statscatalog\",\"status\":\"enabled__mobile_enabled\",\"version\":\"2.0.4\",\"config_url\":null},{\"id\":0,\"name\":\"ps_googleanalytics\",\"status\":\"enabled__mobile_enabled\",\"version\":\"5.0.2\",\"config_url\":\"https:\\/\\/zerobase.pl\\/admin5859\\/index.php\\/improve\\/modules\\/manage\\/action\\/configure\\/ps_googleanalytics?_token=FAOABmi2cUPwVrHghCifyyj8RHpYWxwqpLNduwi2Fk4\"},{\"id\":0,\"name\":\"dashgoals\",\"status\":\"enabled__mobile_enabled\",\"version\":\"2.0.4\",\"config_url\":null},{\"id\":0,\"name\":\"ps_socialfollow\",\"status\":\"enabled__mobile_enabled\",\"version\":\"2.3.2\",\"config_url\":\"https:\\/\\/zerobase.pl\\/admin5859\\/index.php\\/improve\\/modules\\/manage\\/action\\/configure\\/ps_socialfollow?_token=FAOABmi2cUPwVrHghCifyyj8RHpYWxwqpLNduwi2Fk4\"},{\"id\":0,\"name\":\"angarcontact\",\"status\":\"enabled__mobile_enabled\",\"version\":\"1.0.0\",\"config_url\":\"https:\\/\\/zerobase.pl\\/admin5859\\/index.php\\/improve\\/modules\\/manage\\/action\\/configure\\/angarcontact?_token=FAOABmi2cUPwVrHghCifyyj8RHpYWxwqpLNduwi2Fk4\"},{\"id\":0,\"name\":\"ps_imageslider\",\"status\":\"disabled__mobile_disabled\",\"version\":\"3.2.1\",\"config_url\":\"https:\\/\\/zerobase.pl\\/admin5859\\/index.php\\/improve\\/modules\\/manage\\/action\\/configure\\/ps_imageslider?_token=FAOABmi2cUPwVrHghCifyyj8RHpYWxwqpLNduwi2Fk4\"},{\"id\":0,\"name\":\"dashactivity\",\"status\":\"enabled__mobile_enabled\",\"version\":\"2.1.1\",\"config_url\":null},{\"id\":0,\"name\":\"ps_sharebuttons\",\"status\":\"enabled__mobile_enabled\",\"version\":\"2.1.2\",\"config_url\":\"https:\\/\\/zerobase.pl\\/admin5859\\/index.php\\/improve\\/modules\\/manage\\/action\\/configure\\/ps_sharebuttons?_token=FAOABmi2cUPwVrHghCifyyj8RHpYWxwqpLNduwi2Fk4\"},{\"id\":0,\"name\":\"statsstock\",\"status\":\"enabled__mobile_enabled\",\"version\":\"2.0.1\",\"config_url\":null},{\"id\":0,\"name\":\"statsbestsuppliers\",\"status\":\"enabled__mobile_enabled\",\"version\":\"2.0.2\",\"config_url\":null},{\"id\":0,\"name\":\"ps_newproducts\",\"status\":\"disabled__mobile_disabled\",\"vers";
        echo "ion\":\"1.0.4\",\"config_url\":\"https:\\/\\/zerobase.pl\\/admin5859\\/index.php\\/improve\\/modules\\/manage\\/action\\/configure\\/ps_newproducts?_token=FAOABmi2cUPwVrHghCifyyj8RHpYWxwqpLNduwi2Fk4\"},{\"id\":0,\"name\":\"ps_mainmenu\",\"status\":\"enabled__mobile_enabled\",\"version\":\"2.3.4\",\"config_url\":\"https:\\/\\/zerobase.pl\\/admin5859\\/index.php\\/improve\\/modules\\/manage\\/action\\/configure\\/ps_mainmenu?_token=FAOABmi2cUPwVrHghCifyyj8RHpYWxwqpLNduwi2Fk4\"},{\"id\":0,\"name\":\"dashtrends\",\"status\":\"enabled__mobile_enabled\",\"version\":\"2.1.3\",\"config_url\":null},{\"id\":0,\"name\":\"ps_cashondelivery\",\"status\":\"enabled__mobile_enabled\",\"version\":\"2.0.1\",\"config_url\":null},{\"id\":0,\"name\":\"ps_wirepayment\",\"status\":\"enabled__mobile_enabled\",\"version\":\"2.2.0\",\"config_url\":\"https:\\/\\/zerobase.pl\\/admin5859\\/index.php\\/improve\\/modules\\/manage\\/action\\/configure\\/ps_wirepayment?_token=FAOABmi2cUPwVrHghCifyyj8RHpYWxwqpLNduwi2Fk4\"},{\"id\":0,\"name\":\"ps_mbo\",\"status\":\"enabled__mobile_enabled\",\"version\":\"4.14.0\",\"config_url\":null},{\"id\":0,\"name\":\"ps_themecusto\",\"status\":\"enabled__mobile_enabled\",\"version\":\"1.2.5\",\"config_url\":null},{\"id\":0,\"name\":\"ps_supplierlist\",\"status\":\"enabled__mobile_enabled\",\"version\":\"1.0.6\",\"config_url\":\"https:\\/\\/zerobase.pl\\/admin5859\\/index.php\\/improve\\/modules\\/manage\\/action\\/configure\\/ps_supplierlist?_token=FAOABmi2cUPwVrHghCifyyj8RHpYWxwqpLNduwi2Fk4\"},{\"id\":0,\"name\":\"statsregistrations\",\"status\":\"enabled__mobile_enabled\",\"version\":\"2.0.1\",\"config_url\":null},{\"id\":0,\"name\":\"autoupgrade\",\"status\":\"uninstalled\",\"version\":\"7.4.3\",\"config_url\":null}],\"upgradable_modules\":[\"productcomments\",\"statsbestmanufacturers\",\"ps_bestsellers\",\"pagesnotfound\",\"dashproducts\",\"ps_viewedproduct\",\"gsitemap\",\"ps_searchbar\",\"ps_crossselling\",\"statsbestcustomers\",\"ps_categorytree\",\"ps_brandlist\",\"ps_emailsubscription\",\"ps_specials\",\"ps_featuredproducts\",\"ps_categoryproducts\",\"ps_facetedsearch\",\"ps_customtext\",\"statsbestcategories\",\"ps_socialfollow\",\"ps_imageslider\",\"ps_sharebuttons\",\"ps_newproducts\",\"ps_m";
        echo "ainmenu\",\"ps_wirepayment\",\"ps_mbo\"],\"accounts_user_id\":\"dpsc0l1qwNVw9mIQYGFA7RvhKTu1\",\"accounts_shop_id\":\"cde517f0-5855-44cf-8949-5e81303687df\",\"accounts_token\":\"eyJhbGciOiJSUzI1NiIsImtpZCI6Ijk1MTg5MTkxMTA3NjA1NDM0NGUxNWUyNTY0MjViYjQyNWVlYjNhNWMiLCJ0eXAiOiJKV1QifQ.eyJuYW1lIjoiUmVtaWdpdXN6IFd5Y2lzemtpZXdpY3oiLCJwaWN0dXJlIjoiaHR0cHM6Ly9saDMuZ29vZ2xldXNlcmNvbnRlbnQuY29tL2EvQUNnOG9jS2E2NWNwTF9DenRKSl9RUnBrZkV6NHVKSm1CMm15M3dFVURJX1RuVGFOdzBTNW5RPXM5Ni1jIiwiaXNzIjoiaHR0cHM6Ly9zZWN1cmV0b2tlbi5nb29nbGUuY29tL3ByZXN0YXNob3AtbmV3c3NvLXByb2R1Y3Rpb24iLCJhdWQiOiJwcmVzdGFzaG9wLW5ld3Nzby1wcm9kdWN0aW9uIiwiYXV0aF90aW1lIjoxNzY0OTQxODExLCJ1c2VyX2lkIjoiZHBzYzBsMXF3TlZ3OW1JUVlHRkE3UnZoS1R1MSIsInN1YiI6ImRwc2MwbDFxd05WdzltSVFZR0ZBN1J2aEtUdTEiLCJpYXQiOjE3NjQ5NDE4MTEsImV4cCI6MTc2NDk0NTQxMSwiZW1haWwiOiJyZW1pZ2l1c3oud3ljaXN6a2lld2ljekBnbWFpbC5jb20iLCJlbWFpbF92ZXJpZmllZCI6dHJ1ZSwiZmlyZWJhc2UiOnsiaWRlbnRpdGllcyI6eyJnb29nbGUuY29tIjpbIjExMjQ0MDg4MzI5MzUzNDg0NTQ2NyJdLCJlbWFpbCI6WyJyZW1pZ2l1c3oud3ljaXN6a2lld2ljekBnbWFpbC5jb20iXX0sInNpZ25faW5fcHJvdmlkZXIiOiJjdXN0b20ifX0.NqTK9u_cmUNt2iFqUFp7R2OPv3Ja7OlKyFISh72oqKycGFcfLAiwEFfxQTgFUG3fOoFgW8NxA2w-_d0gLhlAqGZRJJmtFWNGVCJDpIA4ilZGgOl5xKlkpgNRX9UeDXjf2hLwoQhMu2n5dNkXboICsTT73znliUmkNtDmPUk2tyY72J2Tx1HZqABXlRkiFFTP0yg_G01l4xulUbmUlCIVg8r0UB9aEY5-govQBdi3RPppKVtqLzQSBDTxqzipTMUbMrrdoQlf5py8EYSJiD0KyvVhO9sRCoV58RsWWpMwCbDQHZTPWaRPjCKgjw2I-WqVygUKAbXKML_TRaW-i2HO-A\",\"accounts_shop_token_v7\":\"eyJhbGciOiJSUzI1NiIsImtpZCI6InByaXZhdGU6aHlkcmEuand0LmFjY2Vzcy10b2tlbiIsInR5cCI6IkpXVCJ9.eyJhdWQiOlsic3RvcmUvY2RlNTE3ZjAtNTg1NS00NGNmLTg5NDktNWU4MTMwMzY4N2RmIiwiaHR0cHM6Ly9hY2NvdW50cy1hcGkuZGlzdHJpYnV0aW9uLnByZXN0YXNob3AubmV0Il0sImNsaWVudF9pZCI6IjFlNjRkNmVjLWNjMGItNDk3YS05NjQ0LTkzNzdlZmZmNDk3YiIsImV4cCI6MTc2NDk2OTQzNiwiZXh0Ijp7fSwiaWF0IjoxNzY0Nzk2NjM2LCJpc3MiOiJodHRwczovL29hdXRoLnByZXN0YXNob3AuY29tLyIsImp0aSI6IjJhYjgzZjlhLWQzMTMtNDExYS05OTU2LTZjNzZiMzk1NjBkZiIsIm5iZiI6MTc2NDc5NjYzNiwic2NwIjpbInNob3AudmVyaWZpZWQiXSwic3ViIjoiMWU2NGQ2ZWMtY2MwYi00OTdhLTk2NDQtOTM3N2VmZmY0OTdi";
        echo "In0.cY-TcRdAsDJZydLonAvcUqtpLJa2yiEQlBdy-qMcRSjFq9mlZrTFPeg5tDoe62fS3NkgmgHlOOcjEEma1nplL96pcdkDCfV0gtBSSUZs_ZUSHMB5qfhwv8Q2KTjfBUPVOyqvTupGpnJ1uOK0ZjcH_vhP_f0YyCIANCGSvo-qjAhfMeHNQx37ogQBitMcxbe3iNl67j5kBFi4ziGRUehio87xCSAP8PAvm3t4w1dMc-IBXGH5GuqEQeZ-6jWrwJUlN07qZysa1ojUsE5KXuMA5tpOGbz7PAGmqWIclRENO3w7DRSpmrpxF9Hy60a09Ld73ZMDYOuHaB63i3Maxg4fzJo9Nt_BgcomxbDLjP2HwDyKWkPgJVB7J8lxVzTjtuoFfZpsiGTUgzd4O4bgm60xTmsCST2OmRZ4Du7712O-TdVW9D2WzU4rYrShuZ5TwIEAVHdOCu87lTJosiXEmVrvzq3NCAPQb1ts6oTQiW74Ybh7AfrR4GRwvZSn7pJ0hB1Yc-ENrdk2FCdZMbQzCEQQC3ULAX32Q-CIwRfkJIjca17TTieeS7t6GrKue9w0SO4DzsDB75QE1Bu5b_hk4VZIgFf284KGBs6uuwkSXzipvi_9m6kCXSSVr17oHdrzAAmmWcNOs8X_SEgSTlme4K5OCMj2vWmgyoXtLyUpWuozlaw\",\"accounts_shop_token\":\"eyJhbGciOiJSUzI1NiIsImtpZCI6Ijk1MTg5MTkxMTA3NjA1NDM0NGUxNWUyNTY0MjViYjQyNWVlYjNhNWMiLCJ0eXAiOiJKV1QifQ.eyJpc3MiOiJodHRwczovL3NlY3VyZXRva2VuLmdvb2dsZS5jb20vcHJlc3Rhc2hvcC1yZWFkeS1wcm9kIiwiYXVkIjoicHJlc3Rhc2hvcC1yZWFkeS1wcm9kIiwiYXV0aF90aW1lIjoxNzY0OTQxODExLCJ1c2VyX2lkIjoiY2RlNTE3ZjAtNTg1NS00NGNmLTg5NDktNWU4MTMwMzY4N2RmIiwic3ViIjoiY2RlNTE3ZjAtNTg1NS00NGNmLTg5NDktNWU4MTMwMzY4N2RmIiwiaWF0IjoxNzY0OTQxODExLCJleHAiOjE3NjQ5NDU0MTEsImVtYWlsIjoiY2RlNTE3ZjAtNTg1NS00NGNmLTg5NDktNWU4MTMwMzY4N2RmLXYyQHNob3AucHJlc3Rhc2hvcC5jb20iLCJlbWFpbF92ZXJpZmllZCI6dHJ1ZSwiZmlyZWJhc2UiOnsiaWRlbnRpdGllcyI6eyJlbWFpbCI6WyJjZGU1MTdmMC01ODU1LTQ0Y2YtODk0OS01ZTgxMzAzNjg3ZGYtdjJAc2hvcC5wcmVzdGFzaG9wLmNvbSJdfSwic2lnbl9pbl9wcm92aWRlciI6ImN1c3RvbSJ9fQ.DFqHhsCgL7sewIhTRA537EFyma4Rq5Y_kf8Ey1AqX4VYYzve7SFEYCyD4EZiXx3O9b2tHYuXmhBRnA9LPasWIJSh7czwjIbrwBFS3949XRyOeDeU9sUXsA-i2KzG8Nlf4_BHnOkEjE_Irr2KNOEsa7oDBXErnKt573ovM03wtfWPuUUyk9ZslBRtUD5RmwNb42pX5-HI-_MppeZeaCJatpX9M5g5RVP5FNa5_cGqHInaXHxrBJo6ZNCBZIqERgm-D221I5dAjxKsIy_WOUF1lt9hd5pw601GrmvN8ao2wqet79XlPefWt_SzDfLZamnuaVvNyyKimhZiyp78V5ad8w\",\"accounts_component_loaded\":false,\"module_manager_updates_tab_url\":\"https:\\/\\/zerobase.pl\\/admin5859\\/index.php\\/improve\\/modules\\/updates?_token=FAOABmi2cUPwVrHghCifyyj8RHpYWxwqpLNduwi2Fk4\",\"module_catalog_url\":\"https:\\/\\";
        echo "/zerobase.pl\\/admin5859\\/index.php\\/modules\\/mbo\\/modules\\/catalog\\/?_token=FAOABmi2cUPwVrHghCifyyj8RHpYWxwqpLNduwi2Fk4\",\"theme_catalog_url\":\"https:\\/\\/zerobase.pl\\/admin5859\\/index.php\\/modules\\/mbo\\/themes\\/catalog\\/?_token=FAOABmi2cUPwVrHghCifyyj8RHpYWxwqpLNduwi2Fk4\",\"php_version\":\"8.0.30\",\"shop_creation_date\":\"2025-11-26\",\"shop_business_sector_id\":11,\"shop_business_sector\":\"Food and beverage\",\"overrides_on_shop\":{\"classes\\/order\\/Order.php\":{\"class\":{\"signature\":\"class Order extends OrderCore\",\"name\":\"Order\",\"extends\":\"OrderCore\"},\"methods\":{\"setCurrentState\":{\"name\":\"setCurrentState\",\"signature\":\"public function setCurrentState\",\"module\":\"stripe_official\"}},\"properties\":[],\"constants\":[]}},\"actions_token\":\"FAOABmi2cUPwVrHghCifyyj8RHpYWxwqpLNduwi2Fk4\",\"actions_url\":{\"install\":\"https:\\/\\/zerobase.pl\\/admin5859\\/index.php\\/improve\\/modules\\/manage\\/action\\/install\\/:module?id=_module_id_&source=_download_url_&_token=FAOABmi2cUPwVrHghCifyyj8RHpYWxwqpLNduwi2Fk4\",\"uninstall\":\"https:\\/\\/zerobase.pl\\/admin5859\\/index.php\\/improve\\/modules\\/manage\\/action\\/uninstall\\/:module?_token=FAOABmi2cUPwVrHghCifyyj8RHpYWxwqpLNduwi2Fk4\",\"delete\":\"https:\\/\\/zerobase.pl\\/admin5859\\/index.php\\/improve\\/modules\\/manage\\/action\\/delete\\/:module?_token=FAOABmi2cUPwVrHghCifyyj8RHpYWxwqpLNduwi2Fk4\",\"enable\":\"https:\\/\\/zerobase.pl\\/admin5859\\/index.php\\/improve\\/modules\\/manage\\/action\\/enable\\/:module?_token=FAOABmi2cUPwVrHghCifyyj8RHpYWxwqpLNduwi2Fk4\",\"disable\":\"https:\\/\\/zerobase.pl\\/admin5859\\/index.php\\/improve\\/modules\\/manage\\/action\\/disable\\/:module?_token=FAOABmi2cUPwVrHghCifyyj8RHpYWxwqpLNduwi2Fk4\",\"reset\":\"https:\\/\\/zerobase.pl\\/admin5859\\/index.php\\/improve\\/modules\\/manage\\/action\\/reset\\/:module?_token=FAOABmi2cUPwVrHghCifyyj8RHpYWxwqpLNduwi2Fk4\",\"upgrade\":\"https:\\/\\/zerobase.pl\\/admin5859\\/index.php\\/improve\\/modules\\/manage\\/action\\/upgrade\\/:module?id=_module_id_&source=_download_url_&_token=FAOABmi2cUPwVrHghCifyyj8RHpYWxwqpLNduwi2Fk4\"},\"prestaShop_controller_class_name\":";
        echo "\"AdminModulesManage\"};

    renderModulesManagerMessage(context, '#module-manager-message-cdc-container')
  }
</script>
<div class=\"module-manager-message-wrapper cdc-container\" id=\"module-manager-message-cdc-container\" data-error-path=\"/admin5859/index.php/modules/mbo/modules/catalog/cdc_error?_token=FAOABmi2cUPwVrHghCifyyj8RHpYWxwqpLNduwi2Fk4\"></div>


                                                        
        <div id=\"ajax_confirmation\" class=\"alert alert-success\" style=\"display: none;\"></div>
<div id=\"content-message-box\"></div>


  ";
        // line 1255
        $this->displayBlock('content_header', $context, $blocks);
        $this->displayBlock('content', $context, $blocks);
        $this->displayBlock('content_footer', $context, $blocks);
        $this->displayBlock('sidebar_right', $context, $blocks);
        echo "

        

      </div>
    </div>

  <div id=\"non-responsive\" class=\"js-non-responsive\">
  <h1>Oh no!</h1>
  <p class=\"mt-3\">
    The mobile version of this page is not available yet.
  </p>
  <p class=\"mt-2\">
    Please use a desktop computer to access this page, until is adapted to mobile.
  </p>
  <p class=\"mt-2\">
    Thank you.
  </p>
  <a href=\"https://zerobase.pl/admin5859/index.php?controller=AdminDashboard&amp;token=07b35c9196ae0acc3c4788325534df22\" class=\"btn btn-primary py-1 mt-3\">
    <i class=\"material-icons rtl-flip\">arrow_back</i>
    Back
  </a>
</div>
  <div class=\"mobile-layer\"></div>

      <div id=\"footer\" class=\"bootstrap\">
    
</div>
  

      <div class=\"bootstrap\">
      
    </div>
  
";
        // line 1289
        $this->displayBlock('javascripts', $context, $blocks);
        $this->displayBlock('extra_javascripts', $context, $blocks);
        $this->displayBlock('translate_javascripts', $context, $blocks);
        echo "</body>";
        echo "
</html>";
    }

    // line 96
    public function block_stylesheets($context, array $blocks = [])
    {
        $macros = $this->macros;
    }

    public function block_extra_stylesheets($context, array $blocks = [])
    {
        $macros = $this->macros;
    }

    // line 1255
    public function block_content_header($context, array $blocks = [])
    {
        $macros = $this->macros;
    }

    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
    }

    public function block_content_footer($context, array $blocks = [])
    {
        $macros = $this->macros;
    }

    public function block_sidebar_right($context, array $blocks = [])
    {
        $macros = $this->macros;
    }

    // line 1289
    public function block_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
    }

    public function block_extra_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
    }

    public function block_translate_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
    }

    public function getTemplateName()
    {
        return "__string_template__7d052cc3a8212833f465ba18f617aa63e14688d331e04eedb6b688281f205657";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  1472 => 1289,  1451 => 1255,  1440 => 96,  1431 => 1289,  1391 => 1255,  1364 => 1242,  1336 => 1216,  1314 => 1196,  1285 => 1169,  1230 => 1116,  1191 => 1079,  1161 => 1051,  1128 => 1020,  1096 => 990,  1062 => 958,  1031 => 929,  991 => 891,  959 => 861,  925 => 829,  894 => 800,  859 => 767,  826 => 736,  793 => 705,  757 => 671,  723 => 639,  692 => 610,  658 => 578,  625 => 547,  593 => 517,  557 => 483,  525 => 453,  474 => 404,  448 => 380,  397 => 331,  346 => 282,  294 => 232,  250 => 190,  232 => 174,  190 => 134,  147 => 96,  120 => 71,  90 => 43,  46 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "__string_template__7d052cc3a8212833f465ba18f617aa63e14688d331e04eedb6b688281f205657", "");
    }
}
