<?php
/**
* @author      Krzysztof Pecak
* @copyright   2025 Krzysztof Pecak
* @license     Commercial license valid for 1 shop
*/

if (!defined('_PS_VERSION_')) {
    exit;
}

class Angarthemeconfigurator extends Module
{

    protected $fields_form;

    public function __construct()
    {
        $this->name = 'angarthemeconfigurator';
        $this->author = 'AngarThemes';
        $this->tab = 'front_office_features';
        $this->version = '1.0.0';

        $this->bootstrap = true;
        parent::__construct();

        $this->displayName = $this->l('AT - Layout and colors live configurator');
        $this->description = $this->l('Enable layout and color configurator in front office.');
        $this->ps_versions_compliancy = array('min' => '1.7', 'max' => _PS_VERSION_);
    }

    public function install()
    {
        return parent::install()
            && Configuration::updateValue('ANGARTHEMECONFIGURATOR_ENABLECONFIG', '0')
            && Configuration::updateValue('ANGARTHEMECONFIGURATOR_DEMO', '1')

            // Font-family
            && Configuration::updateValue('ANGARTHEMECONFIGURATOR_CSS59', 'Poppins')

            // Background
            && Configuration::updateValue('ANGARTHEMECONFIGURATOR_CSS1', 'texture20')
            && Configuration::updateValue('ANGARTHEMECONFIGURATOR_CSS2', '#ffffff')
            && Configuration::updateValue('ANGARTHEMECONFIGURATOR_CSS3', 'bg_attatchment_fixed')
            && Configuration::updateValue('ANGARTHEMECONFIGURATOR_CSS4', 'bg_position_tl')
            && Configuration::updateValue('ANGARTHEMECONFIGURATOR_CSS5', 'bg_repeat_xy')
            && Configuration::updateValue('ANGARTHEMECONFIGURATOR_CSS6', 'bg_size_initial')
 
            // Top
            && Configuration::updateValue('ANGARTHEMECONFIGURATOR_CSS42', 'header_sep1')
 
            // Header style
            && Configuration::updateValue('ANGARTHEMECONFIGURATOR_CSS64', 'header_style_1')

            // Logo
            && Configuration::updateValue('ANGARTHEMECONFIGURATOR_CSS60', '0') // Logo padding-bottom

            // Cart
            && Configuration::updateValue('ANGARTHEMECONFIGURATOR_CSS62', 'cart_style_1')
            && Configuration::updateValue('ANGARTHEMECONFIGURATOR_CSS53', 'stickycart_yes')

            // Menu
            && Configuration::updateValue('ANGARTHEMECONFIGURATOR_CSS41', 'menu_sep2')
            && Configuration::updateValue('ANGARTHEMECONFIGURATOR_CSS15', 'submenu1')
            && Configuration::updateValue('ANGARTHEMECONFIGURATOR_CSS54', 'stickymenu_yes')
            && Configuration::updateValue('ANGARTHEMECONFIGURATOR_CSS55', 'homeicon_no')

            // Slider
            && Configuration::updateValue('ANGARTHEMECONFIGURATOR_CSS7', 'slider_position_column')
            && Configuration::updateValue('ANGARTHEMECONFIGURATOR_CSS43', 'slider_boxed')
            && Configuration::updateValue('ANGARTHEMECONFIGURATOR_CSS8', 'slider_controls_white')

            // Banners top
            && Configuration::updateValue('ANGARTHEMECONFIGURATOR_CSS9', 'banners_top2')
            && Configuration::updateValue('ANGARTHEMECONFIGURATOR_CSS10', 'banners_top_tablets2')
            && Configuration::updateValue('ANGARTHEMECONFIGURATOR_CSS11', 'banners_top_phones1')

            // Banners bottom
            && Configuration::updateValue('ANGARTHEMECONFIGURATOR_CSS12', 'banners_bottom2')
            && Configuration::updateValue('ANGARTHEMECONFIGURATOR_CSS13', 'banners_bottom_tablets2')
            && Configuration::updateValue('ANGARTHEMECONFIGURATOR_CSS14', 'banners_bottom_phones1')

            // Featured categories
            && Configuration::updateValue('ANGARTHEMECONFIGURATOR_CSS56', '0') // Feature categories min-height
            && Configuration::updateValue('ANGARTHEMECONFIGURATOR_CSS45', 'feat_cat_style2')
            && Configuration::updateValue('ANGARTHEMECONFIGURATOR_CSS46', 'feat_cat4')
            && Configuration::updateValue('ANGARTHEMECONFIGURATOR_CSS47', 'feat_cat_bigtablets2')
            && Configuration::updateValue('ANGARTHEMECONFIGURATOR_CSS48', 'feat_cat_tablets2')
            && Configuration::updateValue('ANGARTHEMECONFIGURATOR_CSS49', 'feat_cat_phones0')

            // Homepage products layout
            && Configuration::updateValue('ANGARTHEMECONFIGURATOR_CSS24', 'home_tabs1')
 
            // Products per row
            && Configuration::updateValue('ANGARTHEMECONFIGURATOR_CSS16', 'pl_1col_qty_5')
            && Configuration::updateValue('ANGARTHEMECONFIGURATOR_CSS17', 'pl_2col_qty_4')
            && Configuration::updateValue('ANGARTHEMECONFIGURATOR_CSS18', 'pl_3col_qty_3')
            && Configuration::updateValue('ANGARTHEMECONFIGURATOR_CSS19', 'pl_1col_qty_bigtablets_4')
            && Configuration::updateValue('ANGARTHEMECONFIGURATOR_CSS20', 'pl_2col_qty_bigtablets_3')
            && Configuration::updateValue('ANGARTHEMECONFIGURATOR_CSS21', 'pl_3col_qty_bigtablets_2')
            && Configuration::updateValue('ANGARTHEMECONFIGURATOR_CSS22', 'pl_1col_qty_tablets_3')
            && Configuration::updateValue('ANGARTHEMECONFIGURATOR_CSS23', 'pl_1col_qty_phones_1')
 
            // Product-list options
            && Configuration::updateValue('ANGARTHEMECONFIGURATOR_CSS25', 'pl_border_type2')
            && Configuration::updateValue('ANGARTHEMECONFIGURATOR_CSS26', '32')
            && Configuration::updateValue('ANGARTHEMECONFIGURATOR_CSS27', '14')
            && Configuration::updateValue('ANGARTHEMECONFIGURATOR_CSS28', '16')
            && Configuration::updateValue('ANGARTHEMECONFIGURATOR_CSS63', 'pl_ref_yes') // Hide reference
            && Configuration::updateValue('ANGARTHEMECONFIGURATOR_CSS57', 'pl_man_yes') // Hide mananufacturer
            && Configuration::updateValue('ANGARTHEMECONFIGURATOR_CSS32', 'pl_reviews_no')
            && Configuration::updateValue('ANGARTHEMECONFIGURATOR_CSS31', 'pl_desc_no')
            && Configuration::updateValue('ANGARTHEMECONFIGURATOR_CSS61', '36') // Desc height
            && Configuration::updateValue('ANGARTHEMECONFIGURATOR_CSS30', 'pl_button_qty2')
            && Configuration::updateValue('ANGARTHEMECONFIGURATOR_CSS29', 'pl_button_icon_no')
            && Configuration::updateValue('ANGARTHEMECONFIGURATOR_CSS33', 'pl_availability_yes')
            && Configuration::updateValue('ANGARTHEMECONFIGURATOR_CSS51', 'pl_colors_yes')

            // Product page
            && Configuration::updateValue('ANGARTHEMECONFIGURATOR_CSS34', 'product_layout2')
            && Configuration::updateValue('ANGARTHEMECONFIGURATOR_CSS58', 'product_hide_man_no')
            && Configuration::updateValue('ANGARTHEMECONFIGURATOR_CSS37', 'product_tabs1')

            // Order and authetication page
            && Configuration::updateValue('ANGARTHEMECONFIGURATOR_CSS38', 'order_gender_hide')
            && Configuration::updateValue('ANGARTHEMECONFIGURATOR_CSS39', 'order_birthday_hide')

            // Other
            && Configuration::updateValue('ANGARTHEMECONFIGURATOR_CSS40', 'inner_bg') // Not used


            // P16-P17 DIFFERENCES
            // Top logo
            && Configuration::updateValue('ANGARTHEMECONFIGURATOR_CSS44', '12') // Logo padding top - P16-P17 differences

            // Product page
            && Configuration::updateValue('ANGARTHEMECONFIGURATOR_CSS35', 'hide_reference_no') // P16-P17 differences
            && Configuration::updateValue('ANGARTHEMECONFIGURATOR_CSS36', 'hide_reassurance_yes') // P16-P17 differences

            // All product link, color variants, newsletter info
            && Configuration::updateValue('ANGARTHEMECONFIGURATOR_CSS50', 'all_products_yes') // P16-P17 differences
            && Configuration::updateValue('ANGARTHEMECONFIGURATOR_CSS52', 'newsletter_info_yes') // P16-P17 differences

            // PrestaShop compatibility version
            && Configuration::updateValue('ANGARTHEMECONFIGURATOR_PSVERSION', 'ps_178')


            // NEW OPTIONS
            && Configuration::updateValue('ANGARTHEMECONFIGURATOR_CSS65', 'page_width_1200') // Page width
            && Configuration::updateValue('ANGARTHEMECONFIGURATOR_CSS66', 'pl_qty_yes') // Hide qty field in the product-list
            && Configuration::updateValue('ANGARTHEMECONFIGURATOR_CSS67', 'pl_stock_yes') // Hide stock in the product-list
            && Configuration::updateValue('ANGARTHEMECONFIGURATOR_CSS68', 'product_stock_yes') // Hide stock on the product page
            && Configuration::updateValue('ANGARTHEMECONFIGURATOR_CSS69', 'cat_image_no') // Hide category main image
            && Configuration::updateValue('ANGARTHEMECONFIGURATOR_CSS70', 'cat_desc_mobile_no') // Hide category description on mobile
            && Configuration::updateValue('ANGARTHEMECONFIGURATOR_CSS71', 'subcat_image_no') // Hide subcategories image
            && Configuration::updateValue('ANGARTHEMECONFIGURATOR_CSS72', 'subcat_style_0') // Subcategory style
            && Configuration::updateValue('ANGARTHEMECONFIGURATOR_CSS73', 'subcat_qty_5') // Subcategories per row
            && Configuration::updateValue('ANGARTHEMECONFIGURATOR_CSS74', 'pl_price_default') // Price display mode in the product-list
            && Configuration::updateValue('ANGARTHEMECONFIGURATOR_CSS75', 'product_price_default') // Price display mode on the product page
			&& Configuration::updateValue('ANGARTHEMECONFIGURATOR_CSS76', 'footer_style_1') // Footer style


            // COLORS
            // Black or white
            && Configuration::updateValue('ANGARTHEMECONFIGURATOR_COLOR75', 'bg_white') // Black or white

            // Top bar
            && Configuration::updateValue('ANGARTHEMECONFIGURATOR_COLOR1', '#ffffff') // Top bar - background
            && Configuration::updateValue('ANGARTHEMECONFIGURATOR_COLOR2', '#d6d4d4') // Top bar - border and separators
            && Configuration::updateValue('ANGARTHEMECONFIGURATOR_COLOR3', '#000000') // Top bar - font color
            && Configuration::updateValue('ANGARTHEMECONFIGURATOR_COLOR4', '#83c127') // Top bar - font bold color
            && Configuration::updateValue('ANGARTHEMECONFIGURATOR_COLOR5', '#83c127') // Top bar - icons color

            // Header
            && Configuration::updateValue('ANGARTHEMECONFIGURATOR_COLOR6', '#ffffff') // Header - background

            // Search
            && Configuration::updateValue('ANGARTHEMECONFIGURATOR_COLOR7', '#83c127') // Search button - background
            && Configuration::updateValue('ANGARTHEMECONFIGURATOR_COLOR78', '#ffffff') // Search button - font color
            && Configuration::updateValue('ANGARTHEMECONFIGURATOR_COLOR8', '#83c127') // Search button - background hover
            && Configuration::updateValue('ANGARTHEMECONFIGURATOR_COLOR79', '#ffffff') // Search button - font color hover

            // Cart
            && Configuration::updateValue('ANGARTHEMECONFIGURATOR_COLOR9', '#83c127') // Cart - background
            && Configuration::updateValue('ANGARTHEMECONFIGURATOR_COLOR80', '#ffffff') // Cart - font color
            && Configuration::updateValue('ANGARTHEMECONFIGURATOR_COLOR86', '#83c127') // Sticky cart - background / not used
            && Configuration::updateValue('ANGARTHEMECONFIGURATOR_COLOR87', '#f8653d') // Sticky cart - background qty / not used
            && Configuration::updateValue('ANGARTHEMECONFIGURATOR_COLOR88', '#ffffff') // Sticky cart - font color / not used
            && Configuration::updateValue('ANGARTHEMECONFIGURATOR_COLOR59', '#f6691e') // Account icon

            // Menu
            && Configuration::updateValue('ANGARTHEMECONFIGURATOR_COLOR11', '#1b1a1b') // Menu - background
            && Configuration::updateValue('ANGARTHEMECONFIGURATOR_COLOR12', '#363636') // Menu - border and separators
            && Configuration::updateValue('ANGARTHEMECONFIGURATOR_COLOR13', '#ffffff') // Menu - font color
            && Configuration::updateValue('ANGARTHEMECONFIGURATOR_COLOR14', '#ffffff') // Menu - font color hover
            && Configuration::updateValue('ANGARTHEMECONFIGURATOR_COLOR15', '#83c127') // Menu - background hover
            && Configuration::updateValue('ANGARTHEMECONFIGURATOR_COLOR16', '#83c127') // Submenu layout 2 background hover
            && Configuration::updateValue('ANGARTHEMECONFIGURATOR_COLOR81', '#ffffff') // Submenu layout 2 color hover

            // Slider
            && Configuration::updateValue('ANGARTHEMECONFIGURATOR_COLOR10', '#83c127') // Slider active dot

            // Featured categories
            && Configuration::updateValue('ANGARTHEMECONFIGURATOR_COLOR60', '#83c127') // Module header - background
            && Configuration::updateValue('ANGARTHEMECONFIGURATOR_COLOR61', '#83c127') // Category name - background
            && Configuration::updateValue('ANGARTHEMECONFIGURATOR_COLOR62', '#83c127') // Subcategory button - background
            && Configuration::updateValue('ANGARTHEMECONFIGURATOR_COLOR63', '#ffffff') // Subcategory button - font color
            && Configuration::updateValue('ANGARTHEMECONFIGURATOR_COLOR64', '#83c127') // Subcategory button - border-color
            && Configuration::updateValue('ANGARTHEMECONFIGURATOR_COLOR65', '#1b1a1b') // Subcategory button hover - background
            && Configuration::updateValue('ANGARTHEMECONFIGURATOR_COLOR66', '#ffffff') // Subcategory button hover - font color
            && Configuration::updateValue('ANGARTHEMECONFIGURATOR_COLOR67', '#1b1a1b') // Subcategory button - border-color hover

            // Left/right column
            && Configuration::updateValue('ANGARTHEMECONFIGURATOR_COLOR17', '#83c127') // Modules header - background
            && Configuration::updateValue('ANGARTHEMECONFIGURATOR_COLOR18', '#83c127') // Price left column not used

            // Homepage products layout
            && Configuration::updateValue('ANGARTHEMECONFIGURATOR_COLOR19', '#83c127') // Blocks with products header - background

            // Product-list
            && Configuration::updateValue('ANGARTHEMECONFIGURATOR_COLOR20', '#83c127') // New label background
            && Configuration::updateValue('ANGARTHEMECONFIGURATOR_COLOR21', '#282828') // Product name - font color
            && Configuration::updateValue('ANGARTHEMECONFIGURATOR_COLOR22', '#ff5722') // Price color in product-list
            && Configuration::updateValue('ANGARTHEMECONFIGURATOR_COLOR23', '#ffffff') // "Add to cart" button - background
            && Configuration::updateValue('ANGARTHEMECONFIGURATOR_COLOR24', '#1b1b1b') // "Add to cart" button - font color
            && Configuration::updateValue('ANGARTHEMECONFIGURATOR_COLOR25', '#d6d4d4') // "Add to cart" button - border-color
            && Configuration::updateValue('ANGARTHEMECONFIGURATOR_COLOR26', '#83c127') // "Add to cart" button - background hover
            && Configuration::updateValue('ANGARTHEMECONFIGURATOR_COLOR27', '#ffffff') // "Add to cart" button - font color hover
            && Configuration::updateValue('ANGARTHEMECONFIGURATOR_COLOR28', '#83c127') // "Add to cart" button - border-color hover

            // Products from category
            && Configuration::updateValue('ANGARTHEMECONFIGURATOR_COLOR68', '#83c127') // Module header - background
            && Configuration::updateValue('ANGARTHEMECONFIGURATOR_COLOR69', '#83c127') // Price color - not used
            && Configuration::updateValue('ANGARTHEMECONFIGURATOR_COLOR70', '#00b0ff') // New label - not used

            // Featured manufacturers
            && Configuration::updateValue('ANGARTHEMECONFIGURATOR_COLOR71', '#83c127') // Module header - background

            // Footer
            && Configuration::updateValue('ANGARTHEMECONFIGURATOR_COLOR29', '#83c127') // Icons before footer color
            && Configuration::updateValue('ANGARTHEMECONFIGURATOR_COLOR30', '#1b1a1b') // Footer - background
            && Configuration::updateValue('ANGARTHEMECONFIGURATOR_COLOR31', '#363636') // Footer - border color
            && Configuration::updateValue('ANGARTHEMECONFIGURATOR_COLOR32', '#83c127') // Footer - modules header border color
            && Configuration::updateValue('ANGARTHEMECONFIGURATOR_COLOR33', '#ffffff') // Footer - font color
            && Configuration::updateValue('ANGARTHEMECONFIGURATOR_COLOR36', '#1b1a1b') // Footer bottom - background
            && Configuration::updateValue('ANGARTHEMECONFIGURATOR_COLOR37', '#363636') // Footer bottom - border color
            && Configuration::updateValue('ANGARTHEMECONFIGURATOR_COLOR38', '#ffffff') // Footer bottom - font color

            // Footer
            && Configuration::updateValue('ANGARTHEMECONFIGURATOR_COLOR34', '#83c127') // Newsletter button - background
            && Configuration::updateValue('ANGARTHEMECONFIGURATOR_COLOR82', '#ffffff') // Newsletter button - color
            && Configuration::updateValue('ANGARTHEMECONFIGURATOR_COLOR35', '#83c127') // Newsletter button - background hover
            && Configuration::updateValue('ANGARTHEMECONFIGURATOR_COLOR83', '#ffffff') // Newsletter button - color hover

            // Product page
            && Configuration::updateValue('ANGARTHEMECONFIGURATOR_COLOR39', '#ff5722') // Price color product page
            && Configuration::updateValue('ANGARTHEMECONFIGURATOR_COLOR40', '#83c127') // "Add to cart" button - background
            && Configuration::updateValue('ANGARTHEMECONFIGURATOR_COLOR41', '#ffffff') // "Add to cart" button - font color
            && Configuration::updateValue('ANGARTHEMECONFIGURATOR_COLOR42', '#83c127') // "Add to cart" button - border-color
            && Configuration::updateValue('ANGARTHEMECONFIGURATOR_COLOR43', '#282828') // "Add to cart" button - background hover
            && Configuration::updateValue('ANGARTHEMECONFIGURATOR_COLOR44', '#ffffff') // "Add to cart" button - font color hover
            && Configuration::updateValue('ANGARTHEMECONFIGURATOR_COLOR45', '#282828') // "Add to cart" button - border-color hover
            && Configuration::updateValue('ANGARTHEMECONFIGURATOR_COLOR46', '#83c127') // Selected tab background

            // Other buttons
            && Configuration::updateValue('ANGARTHEMECONFIGURATOR_COLOR47', '#43b754') // "Green" button - background
            && Configuration::updateValue('ANGARTHEMECONFIGURATOR_COLOR48', '#ffffff') // "Green" button - font color
            && Configuration::updateValue('ANGARTHEMECONFIGURATOR_COLOR49', '#399a49') // "Green" button - border-color
            && Configuration::updateValue('ANGARTHEMECONFIGURATOR_COLOR50', '#3aa04c') // "Green" button hover - background
            && Configuration::updateValue('ANGARTHEMECONFIGURATOR_COLOR51', '#ffffff') // "Green" button hover - font color
            && Configuration::updateValue('ANGARTHEMECONFIGURATOR_COLOR52', '#196f28') // "Green" button - border-color hover

            && Configuration::updateValue('ANGARTHEMECONFIGURATOR_COLOR53', '#f6f6f6') // "Grey" button - background
            && Configuration::updateValue('ANGARTHEMECONFIGURATOR_COLOR54', '#000000') // "Grey" button - font color
            && Configuration::updateValue('ANGARTHEMECONFIGURATOR_COLOR55', '#d8d8d8') // "Grey" button - border-color
            && Configuration::updateValue('ANGARTHEMECONFIGURATOR_COLOR56', '#eeeeee') // "Grey" button hover - background
            && Configuration::updateValue('ANGARTHEMECONFIGURATOR_COLOR57', '#000000') // "Grey" button hover - font color
            && Configuration::updateValue('ANGARTHEMECONFIGURATOR_COLOR58', '#d8d8d8') // "Grey" button - border-color hover

            // Scroll to top
            && Configuration::updateValue('ANGARTHEMECONFIGURATOR_COLOR76', '#83c127') // Scroll to top background
            && Configuration::updateValue('ANGARTHEMECONFIGURATOR_COLOR84', '#ffffff') // Scroll to top font color
            && Configuration::updateValue('ANGARTHEMECONFIGURATOR_COLOR77', '#1b1a1b') // Scroll to top hover background
            && Configuration::updateValue('ANGARTHEMECONFIGURATOR_COLOR85', '#ffffff') // Scroll to top hover font color

            // P16-P17 DIFFERENCES
            // Form-control outline, pagination current page
            && Configuration::updateValue('ANGARTHEMECONFIGURATOR_COLOR72', '#dbdbdb') // Inputs outline border / P16-P17 differences
            && Configuration::updateValue('ANGARTHEMECONFIGURATOR_COLOR73', '#83c127') // Pagination active page / P16-P17 differences
            && Configuration::updateValue('ANGARTHEMECONFIGURATOR_COLOR74', '#83c127') // Icons on my account page / P16-P17 differences

			// COLOR SCHEMES
			&& Configuration::updateValue('ANGARTHEMECONFIGURATOR_COLOR89', 'color_scheme_at14') // Color schemes

            // NEW LAYOUT OPTIONS 2 - Version 2.6.3
			&& Configuration::updateValue('ANGARTHEMECONFIGURATOR_CSS77', 'pl_grayout_no') // Gray out of stock products
			&& Configuration::updateValue('ANGARTHEMECONFIGURATOR_CSS78', 'pl_gallery_type_2') // Gallery images in product-list


            // NEW LAYOUT OPTIONS 3 - Version 2.7.0
			&& Configuration::updateValue('ANGARTHEMECONFIGURATOR_CSS79', 'nav_uppercase_no') // Nav - uppercase or lowercase
			&& Configuration::updateValue('ANGARTHEMECONFIGURATOR_CSS80', 'logo_center_no') // Center logo in the header
			&& Configuration::updateValue('ANGARTHEMECONFIGURATOR_CSS81', 'search_style_1') // Search style 1 or 2
			&& Configuration::updateValue('ANGARTHEMECONFIGURATOR_CSS82', '0') // Search - border radius
			&& Configuration::updateValue('ANGARTHEMECONFIGURATOR_CSS83', '0') // Cart style - border radius
			&& Configuration::updateValue('ANGARTHEMECONFIGURATOR_CSS84', 'menu_center_no') // Menu - center links
			&& Configuration::updateValue('ANGARTHEMECONFIGURATOR_CSS85', 'menu_uppercase_yes') // Menu - uppercase or lowercase
			&& Configuration::updateValue('ANGARTHEMECONFIGURATOR_CSS86', 'submenu_uppercase_yes') // Submenu - uppercase or lowercase
			&& Configuration::updateValue('ANGARTHEMECONFIGURATOR_CSS87', 'lc_index_hide_no') // Left column - index hide yes or no
			&& Configuration::updateValue('ANGARTHEMECONFIGURATOR_CSS88', 'lc_category_hide_no') // Left column - category hide yes or no
			&& Configuration::updateValue('ANGARTHEMECONFIGURATOR_CSS89', 'lc_product_hide_no') // Left column - product hide yes or no
			&& Configuration::updateValue('ANGARTHEMECONFIGURATOR_CSS90', 'lc_cms_hide_yes') // Left column - cms hide yes or no
			&& Configuration::updateValue('ANGARTHEMECONFIGURATOR_CSS91', 'lc_width_25') // Left column - width
			&& Configuration::updateValue('ANGARTHEMECONFIGURATOR_CSS92', 'lc_category_style_1') // Left column - category style
			&& Configuration::updateValue('ANGARTHEMECONFIGURATOR_CSS93', 'lc_banner_hide_yes') // Left column - banner hide on the mobile
			&& Configuration::updateValue('ANGARTHEMECONFIGURATOR_CSS94', 'pl_align_center') // Product-list - align left or center
			&& Configuration::updateValue('ANGARTHEMECONFIGURATOR_CSS95', 'pl_name_uppercase_yes') // Product-list - name uppercase or lowercase
			&& Configuration::updateValue('ANGARTHEMECONFIGURATOR_CSS96', 'pl_qv_style_2') // Product-list - quick view
			&& Configuration::updateValue('ANGARTHEMECONFIGURATOR_CSS97', 'footer_links_style_1') // Footer - links style 1 or 2
			&& Configuration::updateValue('ANGARTHEMECONFIGURATOR_CSS98', 'footer_links_column_2') // Footer style 2 - select column to show 
			&& Configuration::updateValue('ANGARTHEMECONFIGURATOR_CSS99', 'footer_social_no') // Hide or show newsletter and socials links
			&& Configuration::updateValue('ANGARTHEMECONFIGURATOR_CSS100', 'prod_arrows_no') // Product page - gallery arrows - hide or show
			&& Configuration::updateValue('ANGARTHEMECONFIGURATOR_CSS101', 'prod_thumb_style_1') // Product page - thumbs style
			&& Configuration::updateValue('ANGARTHEMECONFIGURATOR_CSS102', 'popup_thumb_style_1') // Product page - popup thumbs style


            // NEW COLOR OPTIONS
            // Search
            && Configuration::updateValue('ANGARTHEMECONFIGURATOR_COLOR90', '#000000') // Search button 2 - font color
            && Configuration::updateValue('ANGARTHEMECONFIGURATOR_COLOR91', '#83c127') // Search button 2 - font color hover

            // Cart
            && Configuration::updateValue('ANGARTHEMECONFIGURATOR_COLOR92', '#000000') // Cart - font color
            && Configuration::updateValue('ANGARTHEMECONFIGURATOR_COLOR93', '#83c127') // Cart - bg color

            // Discount label
            && Configuration::updateValue('ANGARTHEMECONFIGURATOR_COLOR94', '#ff0000') // Discount label - background color

            && $this->registerHook('displayFooter')
            && $this->registerHook('displayHeader');
    }

    public function uninstall()
    {
        // Delete configuration
        return Configuration::deleteByName('ANGARTHEMECONFIGURATOR_ENABLECONFIG')
        && Configuration::deleteByName('ANGARTHEMECONFIGURATOR_DEMO')
        && Configuration::deleteByName('ANGARTHEMECONFIGURATOR_PSVERSION')
        && Configuration::deleteByName('ANGARTHEMECONFIGURATOR_CSS1')
        && Configuration::deleteByName('ANGARTHEMECONFIGURATOR_CSS2')
        && Configuration::deleteByName('ANGARTHEMECONFIGURATOR_CSS3')
        && Configuration::deleteByName('ANGARTHEMECONFIGURATOR_CSS4')
        && Configuration::deleteByName('ANGARTHEMECONFIGURATOR_CSS5')
        && Configuration::deleteByName('ANGARTHEMECONFIGURATOR_CSS6')
        && Configuration::deleteByName('ANGARTHEMECONFIGURATOR_CSS7')
        && Configuration::deleteByName('ANGARTHEMECONFIGURATOR_CSS8')
        && Configuration::deleteByName('ANGARTHEMECONFIGURATOR_CSS9')
        && Configuration::deleteByName('ANGARTHEMECONFIGURATOR_CSS10')
        && Configuration::deleteByName('ANGARTHEMECONFIGURATOR_CSS11')
        && Configuration::deleteByName('ANGARTHEMECONFIGURATOR_CSS12')
        && Configuration::deleteByName('ANGARTHEMECONFIGURATOR_CSS13')
        && Configuration::deleteByName('ANGARTHEMECONFIGURATOR_CSS14')
        && Configuration::deleteByName('ANGARTHEMECONFIGURATOR_CSS15')
        && Configuration::deleteByName('ANGARTHEMECONFIGURATOR_CSS16')
        && Configuration::deleteByName('ANGARTHEMECONFIGURATOR_CSS17')
        && Configuration::deleteByName('ANGARTHEMECONFIGURATOR_CSS18')
        && Configuration::deleteByName('ANGARTHEMECONFIGURATOR_CSS19')
        && Configuration::deleteByName('ANGARTHEMECONFIGURATOR_CSS20')
        && Configuration::deleteByName('ANGARTHEMECONFIGURATOR_CSS21')
        && Configuration::deleteByName('ANGARTHEMECONFIGURATOR_CSS22')
        && Configuration::deleteByName('ANGARTHEMECONFIGURATOR_CSS23')
        && Configuration::deleteByName('ANGARTHEMECONFIGURATOR_CSS24')
        && Configuration::deleteByName('ANGARTHEMECONFIGURATOR_CSS25')
        && Configuration::deleteByName('ANGARTHEMECONFIGURATOR_CSS26')
        && Configuration::deleteByName('ANGARTHEMECONFIGURATOR_CSS27')
        && Configuration::deleteByName('ANGARTHEMECONFIGURATOR_CSS28')
        && Configuration::deleteByName('ANGARTHEMECONFIGURATOR_CSS29')
        && Configuration::deleteByName('ANGARTHEMECONFIGURATOR_CSS30')
        && Configuration::deleteByName('ANGARTHEMECONFIGURATOR_CSS30')
        && Configuration::deleteByName('ANGARTHEMECONFIGURATOR_CSS31')
        && Configuration::deleteByName('ANGARTHEMECONFIGURATOR_CSS32')
        && Configuration::deleteByName('ANGARTHEMECONFIGURATOR_CSS33')
        && Configuration::deleteByName('ANGARTHEMECONFIGURATOR_CSS34')
        && Configuration::deleteByName('ANGARTHEMECONFIGURATOR_CSS35')
        && Configuration::deleteByName('ANGARTHEMECONFIGURATOR_CSS36')
        && Configuration::deleteByName('ANGARTHEMECONFIGURATOR_CSS37')
        && Configuration::deleteByName('ANGARTHEMECONFIGURATOR_CSS38')
        && Configuration::deleteByName('ANGARTHEMECONFIGURATOR_CSS39')
        && Configuration::deleteByName('ANGARTHEMECONFIGURATOR_CSS40')
        && Configuration::deleteByName('ANGARTHEMECONFIGURATOR_CSS41')
        && Configuration::deleteByName('ANGARTHEMECONFIGURATOR_CSS42')
        && Configuration::deleteByName('ANGARTHEMECONFIGURATOR_CSS43')
        && Configuration::deleteByName('ANGARTHEMECONFIGURATOR_CSS44')
        && Configuration::deleteByName('ANGARTHEMECONFIGURATOR_CSS45')
        && Configuration::deleteByName('ANGARTHEMECONFIGURATOR_CSS46')
        && Configuration::deleteByName('ANGARTHEMECONFIGURATOR_CSS47')
        && Configuration::deleteByName('ANGARTHEMECONFIGURATOR_CSS48')
        && Configuration::deleteByName('ANGARTHEMECONFIGURATOR_CSS49')
        && Configuration::deleteByName('ANGARTHEMECONFIGURATOR_CSS50')
        && Configuration::deleteByName('ANGARTHEMECONFIGURATOR_CSS51')
        && Configuration::deleteByName('ANGARTHEMECONFIGURATOR_CSS52')

        && Configuration::deleteByName('ANGARTHEMECONFIGURATOR_CSS53')
        && Configuration::deleteByName('ANGARTHEMECONFIGURATOR_CSS54')
        && Configuration::deleteByName('ANGARTHEMECONFIGURATOR_CSS55')
        && Configuration::deleteByName('ANGARTHEMECONFIGURATOR_CSS56')
        && Configuration::deleteByName('ANGARTHEMECONFIGURATOR_CSS57')
        && Configuration::deleteByName('ANGARTHEMECONFIGURATOR_CSS58')
        && Configuration::deleteByName('ANGARTHEMECONFIGURATOR_CSS59')
        && Configuration::deleteByName('ANGARTHEMECONFIGURATOR_CSS60')
        && Configuration::deleteByName('ANGARTHEMECONFIGURATOR_CSS61')
        && Configuration::deleteByName('ANGARTHEMECONFIGURATOR_CSS62')
        && Configuration::deleteByName('ANGARTHEMECONFIGURATOR_CSS63')
        && Configuration::deleteByName('ANGARTHEMECONFIGURATOR_CSS64')

        && Configuration::deleteByName('ANGARTHEMECONFIGURATOR_CSS65')
        && Configuration::deleteByName('ANGARTHEMECONFIGURATOR_CSS66')
        && Configuration::deleteByName('ANGARTHEMECONFIGURATOR_CSS67')
        && Configuration::deleteByName('ANGARTHEMECONFIGURATOR_CSS68')
        && Configuration::deleteByName('ANGARTHEMECONFIGURATOR_CSS69')
        && Configuration::deleteByName('ANGARTHEMECONFIGURATOR_CSS70')
        && Configuration::deleteByName('ANGARTHEMECONFIGURATOR_CSS71')
        && Configuration::deleteByName('ANGARTHEMECONFIGURATOR_CSS72')
        && Configuration::deleteByName('ANGARTHEMECONFIGURATOR_CSS73')
        && Configuration::deleteByName('ANGARTHEMECONFIGURATOR_CSS74')
        && Configuration::deleteByName('ANGARTHEMECONFIGURATOR_CSS75')
        && Configuration::deleteByName('ANGARTHEMECONFIGURATOR_CSS76')
        && Configuration::deleteByName('ANGARTHEMECONFIGURATOR_CSS77')
        && Configuration::deleteByName('ANGARTHEMECONFIGURATOR_CSS78')

        && Configuration::deleteByName('ANGARTHEMECONFIGURATOR_CSS79')
        && Configuration::deleteByName('ANGARTHEMECONFIGURATOR_CSS80')
        && Configuration::deleteByName('ANGARTHEMECONFIGURATOR_CSS81')
        && Configuration::deleteByName('ANGARTHEMECONFIGURATOR_CSS82')
        && Configuration::deleteByName('ANGARTHEMECONFIGURATOR_CSS83')
        && Configuration::deleteByName('ANGARTHEMECONFIGURATOR_CSS84')
        && Configuration::deleteByName('ANGARTHEMECONFIGURATOR_CSS85')
        && Configuration::deleteByName('ANGARTHEMECONFIGURATOR_CSS86')
        && Configuration::deleteByName('ANGARTHEMECONFIGURATOR_CSS87')
        && Configuration::deleteByName('ANGARTHEMECONFIGURATOR_CSS88')
        && Configuration::deleteByName('ANGARTHEMECONFIGURATOR_CSS89')
        && Configuration::deleteByName('ANGARTHEMECONFIGURATOR_CSS90')
        && Configuration::deleteByName('ANGARTHEMECONFIGURATOR_CSS91')
        && Configuration::deleteByName('ANGARTHEMECONFIGURATOR_CSS92')
        && Configuration::deleteByName('ANGARTHEMECONFIGURATOR_CSS93')
        && Configuration::deleteByName('ANGARTHEMECONFIGURATOR_CSS94')
        && Configuration::deleteByName('ANGARTHEMECONFIGURATOR_CSS95')
        && Configuration::deleteByName('ANGARTHEMECONFIGURATOR_CSS96')
        && Configuration::deleteByName('ANGARTHEMECONFIGURATOR_CSS97')
        && Configuration::deleteByName('ANGARTHEMECONFIGURATOR_CSS98')
        && Configuration::deleteByName('ANGARTHEMECONFIGURATOR_CSS99')
        && Configuration::deleteByName('ANGARTHEMECONFIGURATOR_CSS100')
        && Configuration::deleteByName('ANGARTHEMECONFIGURATOR_CSS101')
        && Configuration::deleteByName('ANGARTHEMECONFIGURATOR_CSS102')


        && Configuration::deleteByName('ANGARTHEMECONFIGURATOR_COLOR1')
        && Configuration::deleteByName('ANGARTHEMECONFIGURATOR_COLOR2')
        && Configuration::deleteByName('ANGARTHEMECONFIGURATOR_COLOR3')
        && Configuration::deleteByName('ANGARTHEMECONFIGURATOR_COLOR4')
        && Configuration::deleteByName('ANGARTHEMECONFIGURATOR_COLOR5')
        && Configuration::deleteByName('ANGARTHEMECONFIGURATOR_COLOR6')
        && Configuration::deleteByName('ANGARTHEMECONFIGURATOR_COLOR7')
        && Configuration::deleteByName('ANGARTHEMECONFIGURATOR_COLOR8')
        && Configuration::deleteByName('ANGARTHEMECONFIGURATOR_COLOR9')
        && Configuration::deleteByName('ANGARTHEMECONFIGURATOR_COLOR10')
        && Configuration::deleteByName('ANGARTHEMECONFIGURATOR_COLOR11')
        && Configuration::deleteByName('ANGARTHEMECONFIGURATOR_COLOR12')
        && Configuration::deleteByName('ANGARTHEMECONFIGURATOR_COLOR13')
        && Configuration::deleteByName('ANGARTHEMECONFIGURATOR_COLOR14')
        && Configuration::deleteByName('ANGARTHEMECONFIGURATOR_COLOR15')
        && Configuration::deleteByName('ANGARTHEMECONFIGURATOR_COLOR16')
        && Configuration::deleteByName('ANGARTHEMECONFIGURATOR_COLOR17')
        && Configuration::deleteByName('ANGARTHEMECONFIGURATOR_COLOR18')
        && Configuration::deleteByName('ANGARTHEMECONFIGURATOR_COLOR19')
        && Configuration::deleteByName('ANGARTHEMECONFIGURATOR_COLOR20')
        && Configuration::deleteByName('ANGARTHEMECONFIGURATOR_COLOR21')
        && Configuration::deleteByName('ANGARTHEMECONFIGURATOR_COLOR22')
        && Configuration::deleteByName('ANGARTHEMECONFIGURATOR_COLOR23')
        && Configuration::deleteByName('ANGARTHEMECONFIGURATOR_COLOR24')
        && Configuration::deleteByName('ANGARTHEMECONFIGURATOR_COLOR25')
        && Configuration::deleteByName('ANGARTHEMECONFIGURATOR_COLOR26')
        && Configuration::deleteByName('ANGARTHEMECONFIGURATOR_COLOR27')
        && Configuration::deleteByName('ANGARTHEMECONFIGURATOR_COLOR28')
        && Configuration::deleteByName('ANGARTHEMECONFIGURATOR_COLOR29')
        && Configuration::deleteByName('ANGARTHEMECONFIGURATOR_COLOR30')
        && Configuration::deleteByName('ANGARTHEMECONFIGURATOR_COLOR31')
        && Configuration::deleteByName('ANGARTHEMECONFIGURATOR_COLOR32')
        && Configuration::deleteByName('ANGARTHEMECONFIGURATOR_COLOR33')
        && Configuration::deleteByName('ANGARTHEMECONFIGURATOR_COLOR34')
        && Configuration::deleteByName('ANGARTHEMECONFIGURATOR_COLOR35')
        && Configuration::deleteByName('ANGARTHEMECONFIGURATOR_COLOR36')
        && Configuration::deleteByName('ANGARTHEMECONFIGURATOR_COLOR37')
        && Configuration::deleteByName('ANGARTHEMECONFIGURATOR_COLOR38')
        && Configuration::deleteByName('ANGARTHEMECONFIGURATOR_COLOR39')
        && Configuration::deleteByName('ANGARTHEMECONFIGURATOR_COLOR40')
        && Configuration::deleteByName('ANGARTHEMECONFIGURATOR_COLOR41')
        && Configuration::deleteByName('ANGARTHEMECONFIGURATOR_COLOR42')
        && Configuration::deleteByName('ANGARTHEMECONFIGURATOR_COLOR43')
        && Configuration::deleteByName('ANGARTHEMECONFIGURATOR_COLOR44')
        && Configuration::deleteByName('ANGARTHEMECONFIGURATOR_COLOR45')
        && Configuration::deleteByName('ANGARTHEMECONFIGURATOR_COLOR46')

        && Configuration::deleteByName('ANGARTHEMECONFIGURATOR_COLOR47')
        && Configuration::deleteByName('ANGARTHEMECONFIGURATOR_COLOR48')
        && Configuration::deleteByName('ANGARTHEMECONFIGURATOR_COLOR49')
        && Configuration::deleteByName('ANGARTHEMECONFIGURATOR_COLOR50')
        && Configuration::deleteByName('ANGARTHEMECONFIGURATOR_COLOR51')
        && Configuration::deleteByName('ANGARTHEMECONFIGURATOR_COLOR52')
        && Configuration::deleteByName('ANGARTHEMECONFIGURATOR_COLOR53')
        && Configuration::deleteByName('ANGARTHEMECONFIGURATOR_COLOR54')
        && Configuration::deleteByName('ANGARTHEMECONFIGURATOR_COLOR55')
        && Configuration::deleteByName('ANGARTHEMECONFIGURATOR_COLOR56')
        && Configuration::deleteByName('ANGARTHEMECONFIGURATOR_COLOR57')
        && Configuration::deleteByName('ANGARTHEMECONFIGURATOR_COLOR58')
        && Configuration::deleteByName('ANGARTHEMECONFIGURATOR_COLOR59')

        && Configuration::deleteByName('ANGARTHEMECONFIGURATOR_COLOR60')
        && Configuration::deleteByName('ANGARTHEMECONFIGURATOR_COLOR61')
        && Configuration::deleteByName('ANGARTHEMECONFIGURATOR_COLOR62')
        && Configuration::deleteByName('ANGARTHEMECONFIGURATOR_COLOR63')
        && Configuration::deleteByName('ANGARTHEMECONFIGURATOR_COLOR64')
        && Configuration::deleteByName('ANGARTHEMECONFIGURATOR_COLOR65')
        && Configuration::deleteByName('ANGARTHEMECONFIGURATOR_COLOR66')
        && Configuration::deleteByName('ANGARTHEMECONFIGURATOR_COLOR67')
        && Configuration::deleteByName('ANGARTHEMECONFIGURATOR_COLOR68')
        && Configuration::deleteByName('ANGARTHEMECONFIGURATOR_COLOR69')
        && Configuration::deleteByName('ANGARTHEMECONFIGURATOR_COLOR70')
        && Configuration::deleteByName('ANGARTHEMECONFIGURATOR_COLOR71')
        && Configuration::deleteByName('ANGARTHEMECONFIGURATOR_COLOR72')
        && Configuration::deleteByName('ANGARTHEMECONFIGURATOR_COLOR73')
        && Configuration::deleteByName('ANGARTHEMECONFIGURATOR_COLOR74')

        && Configuration::deleteByName('ANGARTHEMECONFIGURATOR_COLOR75')
        && Configuration::deleteByName('ANGARTHEMECONFIGURATOR_COLOR76')
        && Configuration::deleteByName('ANGARTHEMECONFIGURATOR_COLOR77')
        && Configuration::deleteByName('ANGARTHEMECONFIGURATOR_COLOR78')
        && Configuration::deleteByName('ANGARTHEMECONFIGURATOR_COLOR79')
        && Configuration::deleteByName('ANGARTHEMECONFIGURATOR_COLOR80')
        && Configuration::deleteByName('ANGARTHEMECONFIGURATOR_COLOR81')
        && Configuration::deleteByName('ANGARTHEMECONFIGURATOR_COLOR82')
        && Configuration::deleteByName('ANGARTHEMECONFIGURATOR_COLOR83')
        && Configuration::deleteByName('ANGARTHEMECONFIGURATOR_COLOR84')
        && Configuration::deleteByName('ANGARTHEMECONFIGURATOR_COLOR85')
        && Configuration::deleteByName('ANGARTHEMECONFIGURATOR_COLOR86')
        && Configuration::deleteByName('ANGARTHEMECONFIGURATOR_COLOR87')
        && Configuration::deleteByName('ANGARTHEMECONFIGURATOR_COLOR88')
        && Configuration::deleteByName('ANGARTHEMECONFIGURATOR_COLOR89')

        && Configuration::deleteByName('ANGARTHEMECONFIGURATOR_COLOR90')
        && Configuration::deleteByName('ANGARTHEMECONFIGURATOR_COLOR91')
        && Configuration::deleteByName('ANGARTHEMECONFIGURATOR_COLOR92')
        && Configuration::deleteByName('ANGARTHEMECONFIGURATOR_COLOR93')
        && Configuration::deleteByName('ANGARTHEMECONFIGURATOR_COLOR94')

        && parent::uninstall();
    }

    public function getContent()
    {
        $html = '';
        // If we try to update the settings
        if (Tools::isSubmit('submitModule')) {
            Configuration::updateValue('ANGARTHEMECONFIGURATOR_ENABLECONFIG', Tools::getValue('angarthemeconfigurator_enableconfig'));
            Configuration::updateValue('ANGARTHEMECONFIGURATOR_DEMO', Tools::getValue('angarthemeconfigurator_demo'));
        
            $html .= $this->displayConfirmation($this->l('Configuration updated'));
        }

        $html .= $this->renderForm();

        return $html;
    }

    public function hookDisplayHeader($params)
    {
        if (Configuration::get('ANGARTHEMECONFIGURATOR_ENABLECONFIG') == 1) {
            $this->context->controller->addJS($this->_path.'views/js/live_configurator.js');
            $this->context->controller->addJS($this->_path.'views/js/jquery.minicolors.min.js');
            $this->context->controller->addCSS($this->_path.'views/css/live_configurator/live_configurator.css');
            $this->context->controller->addCSS($this->_path.'views/css/live_configurator/jquery.minicolors.css');
        }

        $this->context->smarty->assign(array(
        'enableconfig' => Configuration::get('ANGARTHEMECONFIGURATOR_ENABLECONFIG'),
        'demo' => Configuration::get('ANGARTHEMECONFIGURATOR_DEMO'),
        'psversion' => Configuration::get('ANGARTHEMECONFIGURATOR_PSVERSION'),
        'css1' => Configuration::get('ANGARTHEMECONFIGURATOR_CSS1'),
        'css2' => Configuration::get('ANGARTHEMECONFIGURATOR_CSS2'),
        'css3' => Configuration::get('ANGARTHEMECONFIGURATOR_CSS3'),
        'css4' => Configuration::get('ANGARTHEMECONFIGURATOR_CSS4'),
        'css5' => Configuration::get('ANGARTHEMECONFIGURATOR_CSS5'),
        'css6' => Configuration::get('ANGARTHEMECONFIGURATOR_CSS6'),
        'css7' => Configuration::get('ANGARTHEMECONFIGURATOR_CSS7'),
        'css8' => Configuration::get('ANGARTHEMECONFIGURATOR_CSS8'),
        'css9' => Configuration::get('ANGARTHEMECONFIGURATOR_CSS9'),
        'css10' => Configuration::get('ANGARTHEMECONFIGURATOR_CSS10'),
        'css11' => Configuration::get('ANGARTHEMECONFIGURATOR_CSS11'),
        'css12' => Configuration::get('ANGARTHEMECONFIGURATOR_CSS12'),
        'css13' => Configuration::get('ANGARTHEMECONFIGURATOR_CSS13'),
        'css14' => Configuration::get('ANGARTHEMECONFIGURATOR_CSS14'),
        'css15' => Configuration::get('ANGARTHEMECONFIGURATOR_CSS15'),
        'css16' => Configuration::get('ANGARTHEMECONFIGURATOR_CSS16'),
        'css17' => Configuration::get('ANGARTHEMECONFIGURATOR_CSS17'),
        'css18' => Configuration::get('ANGARTHEMECONFIGURATOR_CSS18'),
        'css19' => Configuration::get('ANGARTHEMECONFIGURATOR_CSS19'),
        'css20' => Configuration::get('ANGARTHEMECONFIGURATOR_CSS20'),
        'css21' => Configuration::get('ANGARTHEMECONFIGURATOR_CSS21'),
        'css22' => Configuration::get('ANGARTHEMECONFIGURATOR_CSS22'),
        'css23' => Configuration::get('ANGARTHEMECONFIGURATOR_CSS23'),
        'css24' => Configuration::get('ANGARTHEMECONFIGURATOR_CSS24'),
        'css25' => Configuration::get('ANGARTHEMECONFIGURATOR_CSS25'),
        'css26' => Configuration::get('ANGARTHEMECONFIGURATOR_CSS26'),
        'css27' => Configuration::get('ANGARTHEMECONFIGURATOR_CSS27'),
        'css28' => Configuration::get('ANGARTHEMECONFIGURATOR_CSS28'),
        'css29' => Configuration::get('ANGARTHEMECONFIGURATOR_CSS29'),
        'css30' => Configuration::get('ANGARTHEMECONFIGURATOR_CSS30'),
        'css31' => Configuration::get('ANGARTHEMECONFIGURATOR_CSS31'),
        'css32' => Configuration::get('ANGARTHEMECONFIGURATOR_CSS32'),
        'css33' => Configuration::get('ANGARTHEMECONFIGURATOR_CSS33'),
        'css34' => Configuration::get('ANGARTHEMECONFIGURATOR_CSS34'),
        'css35' => Configuration::get('ANGARTHEMECONFIGURATOR_CSS35'),
        'css36' => Configuration::get('ANGARTHEMECONFIGURATOR_CSS36'),
        'css37' => Configuration::get('ANGARTHEMECONFIGURATOR_CSS37'),
        'css38' => Configuration::get('ANGARTHEMECONFIGURATOR_CSS38'),
        'css39' => Configuration::get('ANGARTHEMECONFIGURATOR_CSS39'),
        'css40' => Configuration::get('ANGARTHEMECONFIGURATOR_CSS40'),
        'css41' => Configuration::get('ANGARTHEMECONFIGURATOR_CSS41'),
        'css42' => Configuration::get('ANGARTHEMECONFIGURATOR_CSS42'),
        'css43' => Configuration::get('ANGARTHEMECONFIGURATOR_CSS43'),
        'css44' => Configuration::get('ANGARTHEMECONFIGURATOR_CSS44'),
        'css45' => Configuration::get('ANGARTHEMECONFIGURATOR_CSS45'),
        'css46' => Configuration::get('ANGARTHEMECONFIGURATOR_CSS46'),
        'css47' => Configuration::get('ANGARTHEMECONFIGURATOR_CSS47'),
        'css48' => Configuration::get('ANGARTHEMECONFIGURATOR_CSS48'),
        'css49' => Configuration::get('ANGARTHEMECONFIGURATOR_CSS49'),
        'css50' => Configuration::get('ANGARTHEMECONFIGURATOR_CSS50'),
        'css51' => Configuration::get('ANGARTHEMECONFIGURATOR_CSS51'),
        'css52' => Configuration::get('ANGARTHEMECONFIGURATOR_CSS52'),

        'css53' => Configuration::get('ANGARTHEMECONFIGURATOR_CSS53'),
        'css54' => Configuration::get('ANGARTHEMECONFIGURATOR_CSS54'),
        'css55' => Configuration::get('ANGARTHEMECONFIGURATOR_CSS55'),
        'css56' => Configuration::get('ANGARTHEMECONFIGURATOR_CSS56'),
        'css57' => Configuration::get('ANGARTHEMECONFIGURATOR_CSS57'),
        'css58' => Configuration::get('ANGARTHEMECONFIGURATOR_CSS58'),
        'css59' => Configuration::get('ANGARTHEMECONFIGURATOR_CSS59'),
        'css60' => Configuration::get('ANGARTHEMECONFIGURATOR_CSS60'),
        'css61' => Configuration::get('ANGARTHEMECONFIGURATOR_CSS61'),
        'css62' => Configuration::get('ANGARTHEMECONFIGURATOR_CSS62'),
        'css63' => Configuration::get('ANGARTHEMECONFIGURATOR_CSS63'),
        'css64' => Configuration::get('ANGARTHEMECONFIGURATOR_CSS64'),

        'css65' => Configuration::get('ANGARTHEMECONFIGURATOR_CSS65'),
        'css66' => Configuration::get('ANGARTHEMECONFIGURATOR_CSS66'),
        'css67' => Configuration::get('ANGARTHEMECONFIGURATOR_CSS67'),
        'css68' => Configuration::get('ANGARTHEMECONFIGURATOR_CSS68'),
        'css69' => Configuration::get('ANGARTHEMECONFIGURATOR_CSS69'),
        'css70' => Configuration::get('ANGARTHEMECONFIGURATOR_CSS70'),
        'css71' => Configuration::get('ANGARTHEMECONFIGURATOR_CSS71'),
        'css72' => Configuration::get('ANGARTHEMECONFIGURATOR_CSS72'),
        'css73' => Configuration::get('ANGARTHEMECONFIGURATOR_CSS73'),
        'css74' => Configuration::get('ANGARTHEMECONFIGURATOR_CSS74'),
        'css75' => Configuration::get('ANGARTHEMECONFIGURATOR_CSS75'),
        'css76' => Configuration::get('ANGARTHEMECONFIGURATOR_CSS76'),
        'css77' => Configuration::get('ANGARTHEMECONFIGURATOR_CSS77'),
        'css78' => Configuration::get('ANGARTHEMECONFIGURATOR_CSS78'),

		'css79' => Configuration::get('ANGARTHEMECONFIGURATOR_CSS79'),
		'css80' => Configuration::get('ANGARTHEMECONFIGURATOR_CSS80'),
		'css81' => Configuration::get('ANGARTHEMECONFIGURATOR_CSS81'),
		'css82' => Configuration::get('ANGARTHEMECONFIGURATOR_CSS82'),
		'css83' => Configuration::get('ANGARTHEMECONFIGURATOR_CSS83'),
		'css84' => Configuration::get('ANGARTHEMECONFIGURATOR_CSS84'),
		'css85' => Configuration::get('ANGARTHEMECONFIGURATOR_CSS85'),
		'css86' => Configuration::get('ANGARTHEMECONFIGURATOR_CSS86'),
		'css87' => Configuration::get('ANGARTHEMECONFIGURATOR_CSS87'),
		'css88' => Configuration::get('ANGARTHEMECONFIGURATOR_CSS88'),
		'css89' => Configuration::get('ANGARTHEMECONFIGURATOR_CSS89'),
		'css90' => Configuration::get('ANGARTHEMECONFIGURATOR_CSS90'),
		'css91' => Configuration::get('ANGARTHEMECONFIGURATOR_CSS91'),
		'css92' => Configuration::get('ANGARTHEMECONFIGURATOR_CSS92'),
		'css93' => Configuration::get('ANGARTHEMECONFIGURATOR_CSS93'),
		'css94' => Configuration::get('ANGARTHEMECONFIGURATOR_CSS94'),
		'css95' => Configuration::get('ANGARTHEMECONFIGURATOR_CSS95'),
		'css96' => Configuration::get('ANGARTHEMECONFIGURATOR_CSS96'),
		'css97' => Configuration::get('ANGARTHEMECONFIGURATOR_CSS97'),
		'css98' => Configuration::get('ANGARTHEMECONFIGURATOR_CSS98'),
		'css99' => Configuration::get('ANGARTHEMECONFIGURATOR_CSS99'),
		'css100' => Configuration::get('ANGARTHEMECONFIGURATOR_CSS100'),
		'css101' => Configuration::get('ANGARTHEMECONFIGURATOR_CSS101'),
		'css102' => Configuration::get('ANGARTHEMECONFIGURATOR_CSS102'),


        'color1' => Configuration::get('ANGARTHEMECONFIGURATOR_COLOR1'),
        'color2' => Configuration::get('ANGARTHEMECONFIGURATOR_COLOR2'),
        'color3' => Configuration::get('ANGARTHEMECONFIGURATOR_COLOR3'),
        'color4' => Configuration::get('ANGARTHEMECONFIGURATOR_COLOR4'),
        'color5' => Configuration::get('ANGARTHEMECONFIGURATOR_COLOR5'),
        'color6' => Configuration::get('ANGARTHEMECONFIGURATOR_COLOR6'),
        'color7' => Configuration::get('ANGARTHEMECONFIGURATOR_COLOR7'),
        'color8' => Configuration::get('ANGARTHEMECONFIGURATOR_COLOR8'),
        'color9' => Configuration::get('ANGARTHEMECONFIGURATOR_COLOR9'),
        'color10' => Configuration::get('ANGARTHEMECONFIGURATOR_COLOR10'),
        'color11' => Configuration::get('ANGARTHEMECONFIGURATOR_COLOR11'),
        'color12' => Configuration::get('ANGARTHEMECONFIGURATOR_COLOR12'),
        'color13' => Configuration::get('ANGARTHEMECONFIGURATOR_COLOR13'),
        'color14' => Configuration::get('ANGARTHEMECONFIGURATOR_COLOR14'),
        'color15' => Configuration::get('ANGARTHEMECONFIGURATOR_COLOR15'),
        'color16' => Configuration::get('ANGARTHEMECONFIGURATOR_COLOR16'),
        'color17' => Configuration::get('ANGARTHEMECONFIGURATOR_COLOR17'),
        'color18' => Configuration::get('ANGARTHEMECONFIGURATOR_COLOR18'),
        'color19' => Configuration::get('ANGARTHEMECONFIGURATOR_COLOR19'),
        'color20' => Configuration::get('ANGARTHEMECONFIGURATOR_COLOR20'),
        'color21' => Configuration::get('ANGARTHEMECONFIGURATOR_COLOR21'),
        'color22' => Configuration::get('ANGARTHEMECONFIGURATOR_COLOR22'),
        'color23' => Configuration::get('ANGARTHEMECONFIGURATOR_COLOR23'),
        'color24' => Configuration::get('ANGARTHEMECONFIGURATOR_COLOR24'),
        'color25' => Configuration::get('ANGARTHEMECONFIGURATOR_COLOR25'),
        'color26' => Configuration::get('ANGARTHEMECONFIGURATOR_COLOR26'),
        'color27' => Configuration::get('ANGARTHEMECONFIGURATOR_COLOR27'),
        'color28' => Configuration::get('ANGARTHEMECONFIGURATOR_COLOR28'),
        'color29' => Configuration::get('ANGARTHEMECONFIGURATOR_COLOR29'),
        'color30' => Configuration::get('ANGARTHEMECONFIGURATOR_COLOR30'),
        'color31' => Configuration::get('ANGARTHEMECONFIGURATOR_COLOR31'),
        'color32' => Configuration::get('ANGARTHEMECONFIGURATOR_COLOR32'),
        'color33' => Configuration::get('ANGARTHEMECONFIGURATOR_COLOR33'),
        'color34' => Configuration::get('ANGARTHEMECONFIGURATOR_COLOR34'),
        'color35' => Configuration::get('ANGARTHEMECONFIGURATOR_COLOR35'),
        'color36' => Configuration::get('ANGARTHEMECONFIGURATOR_COLOR36'),
        'color37' => Configuration::get('ANGARTHEMECONFIGURATOR_COLOR37'),
        'color38' => Configuration::get('ANGARTHEMECONFIGURATOR_COLOR38'),
        'color39' => Configuration::get('ANGARTHEMECONFIGURATOR_COLOR39'),
        'color40' => Configuration::get('ANGARTHEMECONFIGURATOR_COLOR40'),
        'color41' => Configuration::get('ANGARTHEMECONFIGURATOR_COLOR41'),
        'color42' => Configuration::get('ANGARTHEMECONFIGURATOR_COLOR42'),
        'color43' => Configuration::get('ANGARTHEMECONFIGURATOR_COLOR43'),
        'color44' => Configuration::get('ANGARTHEMECONFIGURATOR_COLOR44'),
        'color45' => Configuration::get('ANGARTHEMECONFIGURATOR_COLOR45'),
        'color46' => Configuration::get('ANGARTHEMECONFIGURATOR_COLOR46'),

        'color47' => Configuration::get('ANGARTHEMECONFIGURATOR_COLOR47'),
        'color48' => Configuration::get('ANGARTHEMECONFIGURATOR_COLOR48'),
        'color49' => Configuration::get('ANGARTHEMECONFIGURATOR_COLOR49'),
        'color50' => Configuration::get('ANGARTHEMECONFIGURATOR_COLOR50'),
        'color51' => Configuration::get('ANGARTHEMECONFIGURATOR_COLOR51'),
        'color52' => Configuration::get('ANGARTHEMECONFIGURATOR_COLOR52'),
        'color53' => Configuration::get('ANGARTHEMECONFIGURATOR_COLOR53'),
        'color54' => Configuration::get('ANGARTHEMECONFIGURATOR_COLOR54'),
        'color55' => Configuration::get('ANGARTHEMECONFIGURATOR_COLOR55'),
        'color56' => Configuration::get('ANGARTHEMECONFIGURATOR_COLOR56'),
        'color57' => Configuration::get('ANGARTHEMECONFIGURATOR_COLOR57'),
        'color58' => Configuration::get('ANGARTHEMECONFIGURATOR_COLOR58'),
        'color59' => Configuration::get('ANGARTHEMECONFIGURATOR_COLOR59'),

        'color60' => Configuration::get('ANGARTHEMECONFIGURATOR_COLOR60'),
        'color61' => Configuration::get('ANGARTHEMECONFIGURATOR_COLOR61'),
        'color62' => Configuration::get('ANGARTHEMECONFIGURATOR_COLOR62'),
        'color63' => Configuration::get('ANGARTHEMECONFIGURATOR_COLOR63'),
        'color64' => Configuration::get('ANGARTHEMECONFIGURATOR_COLOR64'),
        'color65' => Configuration::get('ANGARTHEMECONFIGURATOR_COLOR65'),
        'color66' => Configuration::get('ANGARTHEMECONFIGURATOR_COLOR66'),
        'color67' => Configuration::get('ANGARTHEMECONFIGURATOR_COLOR67'),
        'color68' => Configuration::get('ANGARTHEMECONFIGURATOR_COLOR68'),
        'color69' => Configuration::get('ANGARTHEMECONFIGURATOR_COLOR69'),
        'color70' => Configuration::get('ANGARTHEMECONFIGURATOR_COLOR70'),
        'color71' => Configuration::get('ANGARTHEMECONFIGURATOR_COLOR71'),
        'color72' => Configuration::get('ANGARTHEMECONFIGURATOR_COLOR72'),
        'color73' => Configuration::get('ANGARTHEMECONFIGURATOR_COLOR73'),
        'color74' => Configuration::get('ANGARTHEMECONFIGURATOR_COLOR74'),

        'color75' => Configuration::get('ANGARTHEMECONFIGURATOR_COLOR75'),
        'color76' => Configuration::get('ANGARTHEMECONFIGURATOR_COLOR76'),
        'color77' => Configuration::get('ANGARTHEMECONFIGURATOR_COLOR77'),
        'color78' => Configuration::get('ANGARTHEMECONFIGURATOR_COLOR78'),
        'color79' => Configuration::get('ANGARTHEMECONFIGURATOR_COLOR79'),
        'color80' => Configuration::get('ANGARTHEMECONFIGURATOR_COLOR80'),
        'color81' => Configuration::get('ANGARTHEMECONFIGURATOR_COLOR81'),
        'color82' => Configuration::get('ANGARTHEMECONFIGURATOR_COLOR82'),
        'color83' => Configuration::get('ANGARTHEMECONFIGURATOR_COLOR83'),
        'color84' => Configuration::get('ANGARTHEMECONFIGURATOR_COLOR84'),
        'color85' => Configuration::get('ANGARTHEMECONFIGURATOR_COLOR85'),
        'color86' => Configuration::get('ANGARTHEMECONFIGURATOR_COLOR86'),
        'color87' => Configuration::get('ANGARTHEMECONFIGURATOR_COLOR87'),
        'color88' => Configuration::get('ANGARTHEMECONFIGURATOR_COLOR88'),
        'color89' => Configuration::get('ANGARTHEMECONFIGURATOR_COLOR89'),

        'color90' => Configuration::get('ANGARTHEMECONFIGURATOR_COLOR90'),
        'color91' => Configuration::get('ANGARTHEMECONFIGURATOR_COLOR91'),
        'color92' => Configuration::get('ANGARTHEMECONFIGURATOR_COLOR92'),
        'color93' => Configuration::get('ANGARTHEMECONFIGURATOR_COLOR93'),
        'color94' => Configuration::get('ANGARTHEMECONFIGURATOR_COLOR94')

        ));
        
        return $this->display(__FILE__, 'views/templates/front/csstpl.tpl');
    }

    public function hookDisplayFooter($params)
    {
        if (Tools::isSubmit('submitAngarConfig')) {
            Configuration::updateValue('ANGARTHEMECONFIGURATOR_PSVERSION', Tools::getValue('angarconfig_psversion'));
            Configuration::updateValue('ANGARTHEMECONFIGURATOR_CSS1', Tools::getValue('angarconfig_input1'));
            Configuration::updateValue('ANGARTHEMECONFIGURATOR_CSS2', Tools::getValue('angarconfig_input2'));
            Configuration::updateValue('ANGARTHEMECONFIGURATOR_CSS3', Tools::getValue('angarconfig_input3'));
            Configuration::updateValue('ANGARTHEMECONFIGURATOR_CSS4', Tools::getValue('angarconfig_input4'));
            Configuration::updateValue('ANGARTHEMECONFIGURATOR_CSS5', Tools::getValue('angarconfig_input5'));
            Configuration::updateValue('ANGARTHEMECONFIGURATOR_CSS6', Tools::getValue('angarconfig_input6'));
            Configuration::updateValue('ANGARTHEMECONFIGURATOR_CSS7', Tools::getValue('angarconfig_input7'));
            Configuration::updateValue('ANGARTHEMECONFIGURATOR_CSS8', Tools::getValue('angarconfig_input8'));
            Configuration::updateValue('ANGARTHEMECONFIGURATOR_CSS9', Tools::getValue('angarconfig_input9'));
            Configuration::updateValue('ANGARTHEMECONFIGURATOR_CSS10', Tools::getValue('angarconfig_input10'));
            Configuration::updateValue('ANGARTHEMECONFIGURATOR_CSS11', Tools::getValue('angarconfig_input11'));
            Configuration::updateValue('ANGARTHEMECONFIGURATOR_CSS12', Tools::getValue('angarconfig_input12'));
            Configuration::updateValue('ANGARTHEMECONFIGURATOR_CSS13', Tools::getValue('angarconfig_input13'));
            Configuration::updateValue('ANGARTHEMECONFIGURATOR_CSS14', Tools::getValue('angarconfig_input14'));
            Configuration::updateValue('ANGARTHEMECONFIGURATOR_CSS15', Tools::getValue('angarconfig_input15'));
            Configuration::updateValue('ANGARTHEMECONFIGURATOR_CSS16', Tools::getValue('angarconfig_input16'));
            Configuration::updateValue('ANGARTHEMECONFIGURATOR_CSS17', Tools::getValue('angarconfig_input17'));
            Configuration::updateValue('ANGARTHEMECONFIGURATOR_CSS18', Tools::getValue('angarconfig_input18'));
            Configuration::updateValue('ANGARTHEMECONFIGURATOR_CSS19', Tools::getValue('angarconfig_input19'));
            Configuration::updateValue('ANGARTHEMECONFIGURATOR_CSS20', Tools::getValue('angarconfig_input20'));
            Configuration::updateValue('ANGARTHEMECONFIGURATOR_CSS21', Tools::getValue('angarconfig_input21'));
            Configuration::updateValue('ANGARTHEMECONFIGURATOR_CSS22', Tools::getValue('angarconfig_input22'));
            Configuration::updateValue('ANGARTHEMECONFIGURATOR_CSS23', Tools::getValue('angarconfig_input23'));
            Configuration::updateValue('ANGARTHEMECONFIGURATOR_CSS24', Tools::getValue('angarconfig_input24'));
            Configuration::updateValue('ANGARTHEMECONFIGURATOR_CSS25', Tools::getValue('angarconfig_input25'));
            Configuration::updateValue('ANGARTHEMECONFIGURATOR_CSS26', Tools::getValue('angarconfig_input26'));
            Configuration::updateValue('ANGARTHEMECONFIGURATOR_CSS27', Tools::getValue('angarconfig_input27'));
            Configuration::updateValue('ANGARTHEMECONFIGURATOR_CSS28', Tools::getValue('angarconfig_input28'));
            Configuration::updateValue('ANGARTHEMECONFIGURATOR_CSS29', Tools::getValue('angarconfig_input29'));
            Configuration::updateValue('ANGARTHEMECONFIGURATOR_CSS30', Tools::getValue('angarconfig_input30'));
            Configuration::updateValue('ANGARTHEMECONFIGURATOR_CSS31', Tools::getValue('angarconfig_input31'));
            Configuration::updateValue('ANGARTHEMECONFIGURATOR_CSS32', Tools::getValue('angarconfig_input32'));
            Configuration::updateValue('ANGARTHEMECONFIGURATOR_CSS33', Tools::getValue('angarconfig_input33'));
            Configuration::updateValue('ANGARTHEMECONFIGURATOR_CSS34', Tools::getValue('angarconfig_input34'));
            Configuration::updateValue('ANGARTHEMECONFIGURATOR_CSS35', Tools::getValue('angarconfig_input35'));
            Configuration::updateValue('ANGARTHEMECONFIGURATOR_CSS36', Tools::getValue('angarconfig_input36'));
            Configuration::updateValue('ANGARTHEMECONFIGURATOR_CSS37', Tools::getValue('angarconfig_input37'));
            Configuration::updateValue('ANGARTHEMECONFIGURATOR_CSS38', Tools::getValue('angarconfig_input38'));
            Configuration::updateValue('ANGARTHEMECONFIGURATOR_CSS39', Tools::getValue('angarconfig_input39'));
            Configuration::updateValue('ANGARTHEMECONFIGURATOR_CSS40', Tools::getValue('angarconfig_input40'));
            Configuration::updateValue('ANGARTHEMECONFIGURATOR_CSS41', Tools::getValue('angarconfig_input41'));
            Configuration::updateValue('ANGARTHEMECONFIGURATOR_CSS42', Tools::getValue('angarconfig_input42'));
            Configuration::updateValue('ANGARTHEMECONFIGURATOR_CSS43', Tools::getValue('angarconfig_input43'));
            Configuration::updateValue('ANGARTHEMECONFIGURATOR_CSS44', Tools::getValue('angarconfig_input44'));
            Configuration::updateValue('ANGARTHEMECONFIGURATOR_CSS45', Tools::getValue('angarconfig_input45'));
            Configuration::updateValue('ANGARTHEMECONFIGURATOR_CSS46', Tools::getValue('angarconfig_input46'));
            Configuration::updateValue('ANGARTHEMECONFIGURATOR_CSS47', Tools::getValue('angarconfig_input47'));
            Configuration::updateValue('ANGARTHEMECONFIGURATOR_CSS48', Tools::getValue('angarconfig_input48'));
            Configuration::updateValue('ANGARTHEMECONFIGURATOR_CSS49', Tools::getValue('angarconfig_input49'));
            Configuration::updateValue('ANGARTHEMECONFIGURATOR_CSS50', Tools::getValue('angarconfig_input50'));
            Configuration::updateValue('ANGARTHEMECONFIGURATOR_CSS51', Tools::getValue('angarconfig_input51'));
            Configuration::updateValue('ANGARTHEMECONFIGURATOR_CSS52', Tools::getValue('angarconfig_input52'));

            Configuration::updateValue('ANGARTHEMECONFIGURATOR_CSS53', Tools::getValue('angarconfig_input53'));
            Configuration::updateValue('ANGARTHEMECONFIGURATOR_CSS54', Tools::getValue('angarconfig_input54'));
            Configuration::updateValue('ANGARTHEMECONFIGURATOR_CSS55', Tools::getValue('angarconfig_input55'));
            Configuration::updateValue('ANGARTHEMECONFIGURATOR_CSS56', Tools::getValue('angarconfig_input56'));
            Configuration::updateValue('ANGARTHEMECONFIGURATOR_CSS57', Tools::getValue('angarconfig_input57'));
            Configuration::updateValue('ANGARTHEMECONFIGURATOR_CSS58', Tools::getValue('angarconfig_input58'));
            Configuration::updateValue('ANGARTHEMECONFIGURATOR_CSS59', Tools::getValue('angarconfig_input59'));
            Configuration::updateValue('ANGARTHEMECONFIGURATOR_CSS60', Tools::getValue('angarconfig_input60'));
            Configuration::updateValue('ANGARTHEMECONFIGURATOR_CSS61', Tools::getValue('angarconfig_input61'));
            Configuration::updateValue('ANGARTHEMECONFIGURATOR_CSS62', Tools::getValue('angarconfig_input62'));
            Configuration::updateValue('ANGARTHEMECONFIGURATOR_CSS63', Tools::getValue('angarconfig_input63'));
            Configuration::updateValue('ANGARTHEMECONFIGURATOR_CSS64', Tools::getValue('angarconfig_input64'));

            Configuration::updateValue('ANGARTHEMECONFIGURATOR_CSS65', Tools::getValue('angarconfig_input65'));
            Configuration::updateValue('ANGARTHEMECONFIGURATOR_CSS66', Tools::getValue('angarconfig_input66'));
            Configuration::updateValue('ANGARTHEMECONFIGURATOR_CSS67', Tools::getValue('angarconfig_input67'));
            Configuration::updateValue('ANGARTHEMECONFIGURATOR_CSS68', Tools::getValue('angarconfig_input68'));
            Configuration::updateValue('ANGARTHEMECONFIGURATOR_CSS69', Tools::getValue('angarconfig_input69'));
            Configuration::updateValue('ANGARTHEMECONFIGURATOR_CSS70', Tools::getValue('angarconfig_input70'));
            Configuration::updateValue('ANGARTHEMECONFIGURATOR_CSS71', Tools::getValue('angarconfig_input71'));
            Configuration::updateValue('ANGARTHEMECONFIGURATOR_CSS72', Tools::getValue('angarconfig_input72'));
            Configuration::updateValue('ANGARTHEMECONFIGURATOR_CSS73', Tools::getValue('angarconfig_input73'));
            Configuration::updateValue('ANGARTHEMECONFIGURATOR_CSS74', Tools::getValue('angarconfig_input74'));
            Configuration::updateValue('ANGARTHEMECONFIGURATOR_CSS75', Tools::getValue('angarconfig_input75'));
            Configuration::updateValue('ANGARTHEMECONFIGURATOR_CSS76', Tools::getValue('angarconfig_input76'));
            Configuration::updateValue('ANGARTHEMECONFIGURATOR_CSS77', Tools::getValue('angarconfig_input77'));
            Configuration::updateValue('ANGARTHEMECONFIGURATOR_CSS78', Tools::getValue('angarconfig_input78'));

			Configuration::updateValue('ANGARTHEMECONFIGURATOR_CSS79', Tools::getValue('angarconfig_input79'));
			Configuration::updateValue('ANGARTHEMECONFIGURATOR_CSS80', Tools::getValue('angarconfig_input80'));
			Configuration::updateValue('ANGARTHEMECONFIGURATOR_CSS81', Tools::getValue('angarconfig_input81'));
			Configuration::updateValue('ANGARTHEMECONFIGURATOR_CSS82', Tools::getValue('angarconfig_input82'));
			Configuration::updateValue('ANGARTHEMECONFIGURATOR_CSS83', Tools::getValue('angarconfig_input83'));
			Configuration::updateValue('ANGARTHEMECONFIGURATOR_CSS84', Tools::getValue('angarconfig_input84'));
			Configuration::updateValue('ANGARTHEMECONFIGURATOR_CSS85', Tools::getValue('angarconfig_input85'));
			Configuration::updateValue('ANGARTHEMECONFIGURATOR_CSS86', Tools::getValue('angarconfig_input86'));
			Configuration::updateValue('ANGARTHEMECONFIGURATOR_CSS87', Tools::getValue('angarconfig_input87'));
			Configuration::updateValue('ANGARTHEMECONFIGURATOR_CSS88', Tools::getValue('angarconfig_input88'));
			Configuration::updateValue('ANGARTHEMECONFIGURATOR_CSS89', Tools::getValue('angarconfig_input89'));
			Configuration::updateValue('ANGARTHEMECONFIGURATOR_CSS90', Tools::getValue('angarconfig_input90'));
			Configuration::updateValue('ANGARTHEMECONFIGURATOR_CSS91', Tools::getValue('angarconfig_input91'));
			Configuration::updateValue('ANGARTHEMECONFIGURATOR_CSS92', Tools::getValue('angarconfig_input92'));
			Configuration::updateValue('ANGARTHEMECONFIGURATOR_CSS93', Tools::getValue('angarconfig_input93'));
			Configuration::updateValue('ANGARTHEMECONFIGURATOR_CSS94', Tools::getValue('angarconfig_input94'));
			Configuration::updateValue('ANGARTHEMECONFIGURATOR_CSS95', Tools::getValue('angarconfig_input95'));
			Configuration::updateValue('ANGARTHEMECONFIGURATOR_CSS96', Tools::getValue('angarconfig_input96'));
			Configuration::updateValue('ANGARTHEMECONFIGURATOR_CSS97', Tools::getValue('angarconfig_input97'));
			Configuration::updateValue('ANGARTHEMECONFIGURATOR_CSS98', Tools::getValue('angarconfig_input98'));
			Configuration::updateValue('ANGARTHEMECONFIGURATOR_CSS99', Tools::getValue('angarconfig_input99'));
			Configuration::updateValue('ANGARTHEMECONFIGURATOR_CSS100', Tools::getValue('angarconfig_input100'));
			Configuration::updateValue('ANGARTHEMECONFIGURATOR_CSS101', Tools::getValue('angarconfig_input101'));
			Configuration::updateValue('ANGARTHEMECONFIGURATOR_CSS102', Tools::getValue('angarconfig_input102'));
        }


        if (Tools::isSubmit('submitAngarConfig')) {
            Configuration::updateValue('ANGARTHEMECONFIGURATOR_COLOR1', Tools::getValue('angarcolor_input1'));
            Configuration::updateValue('ANGARTHEMECONFIGURATOR_COLOR2', Tools::getValue('angarcolor_input2'));
            Configuration::updateValue('ANGARTHEMECONFIGURATOR_COLOR3', Tools::getValue('angarcolor_input3'));
            Configuration::updateValue('ANGARTHEMECONFIGURATOR_COLOR4', Tools::getValue('angarcolor_input4'));
            Configuration::updateValue('ANGARTHEMECONFIGURATOR_COLOR5', Tools::getValue('angarcolor_input5'));
            Configuration::updateValue('ANGARTHEMECONFIGURATOR_COLOR6', Tools::getValue('angarcolor_input6'));
            Configuration::updateValue('ANGARTHEMECONFIGURATOR_COLOR7', Tools::getValue('angarcolor_input7'));
            Configuration::updateValue('ANGARTHEMECONFIGURATOR_COLOR8', Tools::getValue('angarcolor_input8'));
            Configuration::updateValue('ANGARTHEMECONFIGURATOR_COLOR9', Tools::getValue('angarcolor_input9'));
            Configuration::updateValue('ANGARTHEMECONFIGURATOR_COLOR10', Tools::getValue('angarcolor_input10'));
            Configuration::updateValue('ANGARTHEMECONFIGURATOR_COLOR11', Tools::getValue('angarcolor_input11'));
            Configuration::updateValue('ANGARTHEMECONFIGURATOR_COLOR12', Tools::getValue('angarcolor_input12'));
            Configuration::updateValue('ANGARTHEMECONFIGURATOR_COLOR13', Tools::getValue('angarcolor_input13'));
            Configuration::updateValue('ANGARTHEMECONFIGURATOR_COLOR14', Tools::getValue('angarcolor_input14'));
            Configuration::updateValue('ANGARTHEMECONFIGURATOR_COLOR15', Tools::getValue('angarcolor_input15'));
            Configuration::updateValue('ANGARTHEMECONFIGURATOR_COLOR16', Tools::getValue('angarcolor_input16'));
            Configuration::updateValue('ANGARTHEMECONFIGURATOR_COLOR17', Tools::getValue('angarcolor_input17'));
            Configuration::updateValue('ANGARTHEMECONFIGURATOR_COLOR18', Tools::getValue('angarcolor_input18'));
            Configuration::updateValue('ANGARTHEMECONFIGURATOR_COLOR19', Tools::getValue('angarcolor_input19'));
            Configuration::updateValue('ANGARTHEMECONFIGURATOR_COLOR20', Tools::getValue('angarcolor_input20'));
            Configuration::updateValue('ANGARTHEMECONFIGURATOR_COLOR21', Tools::getValue('angarcolor_input21'));
            Configuration::updateValue('ANGARTHEMECONFIGURATOR_COLOR22', Tools::getValue('angarcolor_input22'));
            Configuration::updateValue('ANGARTHEMECONFIGURATOR_COLOR23', Tools::getValue('angarcolor_input23'));
            Configuration::updateValue('ANGARTHEMECONFIGURATOR_COLOR24', Tools::getValue('angarcolor_input24'));
            Configuration::updateValue('ANGARTHEMECONFIGURATOR_COLOR25', Tools::getValue('angarcolor_input25'));
            Configuration::updateValue('ANGARTHEMECONFIGURATOR_COLOR26', Tools::getValue('angarcolor_input26'));
            Configuration::updateValue('ANGARTHEMECONFIGURATOR_COLOR27', Tools::getValue('angarcolor_input27'));
            Configuration::updateValue('ANGARTHEMECONFIGURATOR_COLOR28', Tools::getValue('angarcolor_input28'));
            Configuration::updateValue('ANGARTHEMECONFIGURATOR_COLOR29', Tools::getValue('angarcolor_input29'));
            Configuration::updateValue('ANGARTHEMECONFIGURATOR_COLOR30', Tools::getValue('angarcolor_input30'));
            Configuration::updateValue('ANGARTHEMECONFIGURATOR_COLOR31', Tools::getValue('angarcolor_input31'));
            Configuration::updateValue('ANGARTHEMECONFIGURATOR_COLOR32', Tools::getValue('angarcolor_input32'));
            Configuration::updateValue('ANGARTHEMECONFIGURATOR_COLOR33', Tools::getValue('angarcolor_input33'));
            Configuration::updateValue('ANGARTHEMECONFIGURATOR_COLOR34', Tools::getValue('angarcolor_input34'));
            Configuration::updateValue('ANGARTHEMECONFIGURATOR_COLOR35', Tools::getValue('angarcolor_input35'));
            Configuration::updateValue('ANGARTHEMECONFIGURATOR_COLOR36', Tools::getValue('angarcolor_input36'));
            Configuration::updateValue('ANGARTHEMECONFIGURATOR_COLOR37', Tools::getValue('angarcolor_input37'));
            Configuration::updateValue('ANGARTHEMECONFIGURATOR_COLOR38', Tools::getValue('angarcolor_input38'));
            Configuration::updateValue('ANGARTHEMECONFIGURATOR_COLOR39', Tools::getValue('angarcolor_input39'));
            Configuration::updateValue('ANGARTHEMECONFIGURATOR_COLOR40', Tools::getValue('angarcolor_input40'));
            Configuration::updateValue('ANGARTHEMECONFIGURATOR_COLOR41', Tools::getValue('angarcolor_input41'));
            Configuration::updateValue('ANGARTHEMECONFIGURATOR_COLOR42', Tools::getValue('angarcolor_input42'));
            Configuration::updateValue('ANGARTHEMECONFIGURATOR_COLOR43', Tools::getValue('angarcolor_input43'));
            Configuration::updateValue('ANGARTHEMECONFIGURATOR_COLOR44', Tools::getValue('angarcolor_input44'));
            Configuration::updateValue('ANGARTHEMECONFIGURATOR_COLOR45', Tools::getValue('angarcolor_input45'));
            Configuration::updateValue('ANGARTHEMECONFIGURATOR_COLOR46', Tools::getValue('angarcolor_input46'));

            Configuration::updateValue('ANGARTHEMECONFIGURATOR_COLOR47', Tools::getValue('angarcolor_input47'));
            Configuration::updateValue('ANGARTHEMECONFIGURATOR_COLOR48', Tools::getValue('angarcolor_input48'));
            Configuration::updateValue('ANGARTHEMECONFIGURATOR_COLOR49', Tools::getValue('angarcolor_input49'));
            Configuration::updateValue('ANGARTHEMECONFIGURATOR_COLOR50', Tools::getValue('angarcolor_input50'));
            Configuration::updateValue('ANGARTHEMECONFIGURATOR_COLOR51', Tools::getValue('angarcolor_input51'));
            Configuration::updateValue('ANGARTHEMECONFIGURATOR_COLOR52', Tools::getValue('angarcolor_input52'));
            Configuration::updateValue('ANGARTHEMECONFIGURATOR_COLOR53', Tools::getValue('angarcolor_input53'));
            Configuration::updateValue('ANGARTHEMECONFIGURATOR_COLOR54', Tools::getValue('angarcolor_input54'));
            Configuration::updateValue('ANGARTHEMECONFIGURATOR_COLOR55', Tools::getValue('angarcolor_input55'));
            Configuration::updateValue('ANGARTHEMECONFIGURATOR_COLOR56', Tools::getValue('angarcolor_input56'));
            Configuration::updateValue('ANGARTHEMECONFIGURATOR_COLOR57', Tools::getValue('angarcolor_input57'));
            Configuration::updateValue('ANGARTHEMECONFIGURATOR_COLOR58', Tools::getValue('angarcolor_input58'));
            Configuration::updateValue('ANGARTHEMECONFIGURATOR_COLOR59', Tools::getValue('angarcolor_input59'));

            Configuration::updateValue('ANGARTHEMECONFIGURATOR_COLOR60', Tools::getValue('angarcolor_input60'));
            Configuration::updateValue('ANGARTHEMECONFIGURATOR_COLOR61', Tools::getValue('angarcolor_input61'));
            Configuration::updateValue('ANGARTHEMECONFIGURATOR_COLOR62', Tools::getValue('angarcolor_input62'));
            Configuration::updateValue('ANGARTHEMECONFIGURATOR_COLOR63', Tools::getValue('angarcolor_input63'));
            Configuration::updateValue('ANGARTHEMECONFIGURATOR_COLOR64', Tools::getValue('angarcolor_input64'));
            Configuration::updateValue('ANGARTHEMECONFIGURATOR_COLOR65', Tools::getValue('angarcolor_input65'));
            Configuration::updateValue('ANGARTHEMECONFIGURATOR_COLOR66', Tools::getValue('angarcolor_input66'));
            Configuration::updateValue('ANGARTHEMECONFIGURATOR_COLOR67', Tools::getValue('angarcolor_input67'));
            Configuration::updateValue('ANGARTHEMECONFIGURATOR_COLOR68', Tools::getValue('angarcolor_input68'));
            Configuration::updateValue('ANGARTHEMECONFIGURATOR_COLOR69', Tools::getValue('angarcolor_input69'));
            Configuration::updateValue('ANGARTHEMECONFIGURATOR_COLOR70', Tools::getValue('angarcolor_input70'));
            Configuration::updateValue('ANGARTHEMECONFIGURATOR_COLOR71', Tools::getValue('angarcolor_input71'));
            Configuration::updateValue('ANGARTHEMECONFIGURATOR_COLOR72', Tools::getValue('angarcolor_input72'));
            Configuration::updateValue('ANGARTHEMECONFIGURATOR_COLOR73', Tools::getValue('angarcolor_input73'));
            Configuration::updateValue('ANGARTHEMECONFIGURATOR_COLOR74', Tools::getValue('angarcolor_input74'));

            Configuration::updateValue('ANGARTHEMECONFIGURATOR_COLOR75', Tools::getValue('angarcolor_input75'));
            Configuration::updateValue('ANGARTHEMECONFIGURATOR_COLOR76', Tools::getValue('angarcolor_input76'));
            Configuration::updateValue('ANGARTHEMECONFIGURATOR_COLOR77', Tools::getValue('angarcolor_input77'));
            Configuration::updateValue('ANGARTHEMECONFIGURATOR_COLOR78', Tools::getValue('angarcolor_input78'));
            Configuration::updateValue('ANGARTHEMECONFIGURATOR_COLOR79', Tools::getValue('angarcolor_input79'));
            Configuration::updateValue('ANGARTHEMECONFIGURATOR_COLOR80', Tools::getValue('angarcolor_input80'));
            Configuration::updateValue('ANGARTHEMECONFIGURATOR_COLOR81', Tools::getValue('angarcolor_input81'));
            Configuration::updateValue('ANGARTHEMECONFIGURATOR_COLOR82', Tools::getValue('angarcolor_input82'));
            Configuration::updateValue('ANGARTHEMECONFIGURATOR_COLOR83', Tools::getValue('angarcolor_input83'));
            Configuration::updateValue('ANGARTHEMECONFIGURATOR_COLOR84', Tools::getValue('angarcolor_input84'));
            Configuration::updateValue('ANGARTHEMECONFIGURATOR_COLOR85', Tools::getValue('angarcolor_input85'));
            Configuration::updateValue('ANGARTHEMECONFIGURATOR_COLOR86', Tools::getValue('angarcolor_input86'));
            Configuration::updateValue('ANGARTHEMECONFIGURATOR_COLOR87', Tools::getValue('angarcolor_input87'));
            Configuration::updateValue('ANGARTHEMECONFIGURATOR_COLOR88', Tools::getValue('angarcolor_input88'));
            Configuration::updateValue('ANGARTHEMECONFIGURATOR_COLOR89', Tools::getValue('angarcolor_input89'));

            Configuration::updateValue('ANGARTHEMECONFIGURATOR_COLOR90', Tools::getValue('angarcolor_input90'));
            Configuration::updateValue('ANGARTHEMECONFIGURATOR_COLOR91', Tools::getValue('angarcolor_input91'));
            Configuration::updateValue('ANGARTHEMECONFIGURATOR_COLOR92', Tools::getValue('angarcolor_input92'));
            Configuration::updateValue('ANGARTHEMECONFIGURATOR_COLOR93', Tools::getValue('angarcolor_input93'));
            Configuration::updateValue('ANGARTHEMECONFIGURATOR_COLOR94', Tools::getValue('angarcolor_input94'));
        }

        return $this->display(__FILE__, 'views/templates/front/angarthemeconfigurator.tpl');
    }

    public function renderForm()
    {
        $fields_form = array(
            'form' => array(
                'legend' => array(
                    'title' => $this->l('Settings'),
                    'icon' => 'icon-cogs'
                ),
                'description' => $this->l('Tip: Remember to disable the "Show the theme configurator in the front office" option when you finish the theme configuration.').'<br/>'.
                $this->l('If you need help with theme configuration, please send me a message on addons.prestashop.com here: https://addons.prestashop.com/en/contact-us?id_product=30887'),
                'input' => array(
                    
                    array(
                        'type' => 'switch',
                        'label' => $this->l('Show the theme configurator in the front office:'),
                        'name' => 'angarthemeconfigurator_enableconfig',
                        'values' => array(
                            array(
                                'id' => 'show',
                                'value' => 1,
                                'label' => $this->l('Show')
                            ),
                            array(
                                'id' => 'hide',
                                'value' => 0,
                                'label' => $this->l('Hide')
                            ),

                        )
                    ),

                    array(
                        'type' => 'switch',
                        'label' => $this->l('Show save button:'),
                        'name' => 'angarthemeconfigurator_demo',
                        'values' => array(
                            array(
                                'id' => 'show',
                                'value' => 1,
                                'label' => $this->l('Show')
                            ),
                            array(
                                'id' => 'hide',
                                'value' => 0,
                                'label' => $this->l('Hide')
                            ),

                        )
                    ),

                ),
                
                'submit' => array(
                    'title' => $this->l('Save'),
                )
            ),
        );

        $helper = new HelperForm();
        $helper->show_toolbar = false;
        $helper->table =  $this->table;
        $lang = new Language((int)Configuration::get('PS_LANG_DEFAULT'));
        $helper->default_form_language = $lang->id;
        $helper->allow_employee_form_lang = Configuration::get('PS_BO_ALLOW_EMPLOYEE_FORM_LANG') ? Configuration::get('PS_BO_ALLOW_EMPLOYEE_FORM_LANG') : 0;
        $this->fields_form = array();

        $helper->identifier = $this->identifier;
        $helper->submit_action = 'submitModule';
        $helper->currentIndex = $this->context->link->getAdminLink('AdminModules', false).'&configure='.$this->name.'&tab_module='.$this->tab.'&module_name='.$this->name;
        $helper->token = Tools::getAdminTokenLite('AdminModules');
        $helper->tpl_vars = array(
            'fields_value' => $this->getConfigFieldsValues(),
            'languages' => $this->context->controller->getLanguages(),
            'id_language' => $this->context->language->id
        );

        return $helper->generateForm(array($fields_form));
    }

    public function getConfigFieldsValues()
    {
        return array(
            'angarthemeconfigurator_enableconfig' => Tools::getValue('angarthemeconfigurator_enableconfig', Configuration::get('ANGARTHEMECONFIGURATOR_ENABLECONFIG')),
            'angarthemeconfigurator_demo' => Tools::getValue('angarthemeconfigurator_demo', Configuration::get('ANGARTHEMECONFIGURATOR_DEMO')),
            'angarthemeconfigurator_psversion' => Tools::getValue('angarthemeconfigurator_psversion', Configuration::get('ANGARTHEMECONFIGURATOR_PSVERSION')),
            'angarthemeconfigurator_css1' => Tools::getValue('angarthemeconfigurator_css1', Configuration::get('ANGARTHEMECONFIGURATOR_CSS1')),
            'angarthemeconfigurator_css2' => Tools::getValue('angarthemeconfigurator_css2', Configuration::get('ANGARTHEMECONFIGURATOR_CSS2')),
            'angarthemeconfigurator_css3' => Tools::getValue('angarthemeconfigurator_css3', Configuration::get('ANGARTHEMECONFIGURATOR_CSS3')),
            'angarthemeconfigurator_css4' => Tools::getValue('angarthemeconfigurator_css4', Configuration::get('ANGARTHEMECONFIGURATOR_CSS4')),
            'angarthemeconfigurator_css5' => Tools::getValue('angarthemeconfigurator_css5', Configuration::get('ANGARTHEMECONFIGURATOR_CSS5')),
            'angarthemeconfigurator_css6' => Tools::getValue('angarthemeconfigurator_css6', Configuration::get('ANGARTHEMECONFIGURATOR_CSS6')),
            'angarthemeconfigurator_css7' => Tools::getValue('angarthemeconfigurator_css7', Configuration::get('ANGARTHEMECONFIGURATOR_CSS7')),
            'angarthemeconfigurator_css8' => Tools::getValue('angarthemeconfigurator_css8', Configuration::get('ANGARTHEMECONFIGURATOR_CSS8')),
            'angarthemeconfigurator_css9' => Tools::getValue('angarthemeconfigurator_css9', Configuration::get('ANGARTHEMECONFIGURATOR_CSS9')),
            'angarthemeconfigurator_css10' => Tools::getValue('angarthemeconfigurator_css10', Configuration::get('ANGARTHEMECONFIGURATOR_CSS10')),
            'angarthemeconfigurator_css11' => Tools::getValue('angarthemeconfigurator_css11', Configuration::get('ANGARTHEMECONFIGURATOR_CSS11')),
            'angarthemeconfigurator_css12' => Tools::getValue('angarthemeconfigurator_css12', Configuration::get('ANGARTHEMECONFIGURATOR_CSS12')),
            'angarthemeconfigurator_css13' => Tools::getValue('angarthemeconfigurator_css13', Configuration::get('ANGARTHEMECONFIGURATOR_CSS13')),
            'angarthemeconfigurator_css14' => Tools::getValue('angarthemeconfigurator_css14', Configuration::get('ANGARTHEMECONFIGURATOR_CSS14')),
            'angarthemeconfigurator_css15' => Tools::getValue('angarthemeconfigurator_css15', Configuration::get('ANGARTHEMECONFIGURATOR_CSS15')),
            'angarthemeconfigurator_css16' => Tools::getValue('angarthemeconfigurator_css16', Configuration::get('ANGARTHEMECONFIGURATOR_CSS16')),
            'angarthemeconfigurator_css17' => Tools::getValue('angarthemeconfigurator_css17', Configuration::get('ANGARTHEMECONFIGURATOR_CSS17')),
            'angarthemeconfigurator_css18' => Tools::getValue('angarthemeconfigurator_css18', Configuration::get('ANGARTHEMECONFIGURATOR_CSS18')),
            'angarthemeconfigurator_css19' => Tools::getValue('angarthemeconfigurator_css19', Configuration::get('ANGARTHEMECONFIGURATOR_CSS19')),
            'angarthemeconfigurator_css20' => Tools::getValue('angarthemeconfigurator_css20', Configuration::get('ANGARTHEMECONFIGURATOR_CSS20')),
            'angarthemeconfigurator_css21' => Tools::getValue('angarthemeconfigurator_css21', Configuration::get('ANGARTHEMECONFIGURATOR_CSS21')),
            'angarthemeconfigurator_css22' => Tools::getValue('angarthemeconfigurator_css22', Configuration::get('ANGARTHEMECONFIGURATOR_CSS22')),
            'angarthemeconfigurator_css23' => Tools::getValue('angarthemeconfigurator_css23', Configuration::get('ANGARTHEMECONFIGURATOR_CSS23')),
            'angarthemeconfigurator_css24' => Tools::getValue('angarthemeconfigurator_css24', Configuration::get('ANGARTHEMECONFIGURATOR_CSS24')),
            'angarthemeconfigurator_css25' => Tools::getValue('angarthemeconfigurator_css25', Configuration::get('ANGARTHEMECONFIGURATOR_CSS25')),
            'angarthemeconfigurator_css26' => Tools::getValue('angarthemeconfigurator_css26', Configuration::get('ANGARTHEMECONFIGURATOR_CSS26')),
            'angarthemeconfigurator_css27' => Tools::getValue('angarthemeconfigurator_css27', Configuration::get('ANGARTHEMECONFIGURATOR_CSS27')),
            'angarthemeconfigurator_css28' => Tools::getValue('angarthemeconfigurator_css28', Configuration::get('ANGARTHEMECONFIGURATOR_CSS28')),
            'angarthemeconfigurator_css29' => Tools::getValue('angarthemeconfigurator_css29', Configuration::get('ANGARTHEMECONFIGURATOR_CSS29')),
            'angarthemeconfigurator_css30' => Tools::getValue('angarthemeconfigurator_css30', Configuration::get('ANGARTHEMECONFIGURATOR_CSS30')),
            'angarthemeconfigurator_css31' => Tools::getValue('angarthemeconfigurator_css31', Configuration::get('ANGARTHEMECONFIGURATOR_CSS31')),
            'angarthemeconfigurator_css32' => Tools::getValue('angarthemeconfigurator_css32', Configuration::get('ANGARTHEMECONFIGURATOR_CSS32')),
            'angarthemeconfigurator_css33' => Tools::getValue('angarthemeconfigurator_css33', Configuration::get('ANGARTHEMECONFIGURATOR_CSS33')),
            'angarthemeconfigurator_css34' => Tools::getValue('angarthemeconfigurator_css34', Configuration::get('ANGARTHEMECONFIGURATOR_CSS34')),
            'angarthemeconfigurator_css35' => Tools::getValue('angarthemeconfigurator_css35', Configuration::get('ANGARTHEMECONFIGURATOR_CSS35')),
            'angarthemeconfigurator_css36' => Tools::getValue('angarthemeconfigurator_css36', Configuration::get('ANGARTHEMECONFIGURATOR_CSS36')),
            'angarthemeconfigurator_css37' => Tools::getValue('angarthemeconfigurator_css37', Configuration::get('ANGARTHEMECONFIGURATOR_CSS37')),
            'angarthemeconfigurator_css38' => Tools::getValue('angarthemeconfigurator_css38', Configuration::get('ANGARTHEMECONFIGURATOR_CSS38')),
            'angarthemeconfigurator_css39' => Tools::getValue('angarthemeconfigurator_css39', Configuration::get('ANGARTHEMECONFIGURATOR_CSS39')),
            'angarthemeconfigurator_css40' => Tools::getValue('angarthemeconfigurator_css40', Configuration::get('ANGARTHEMECONFIGURATOR_CSS40')),
            'angarthemeconfigurator_css41' => Tools::getValue('angarthemeconfigurator_css41', Configuration::get('ANGARTHEMECONFIGURATOR_CSS41')),
            'angarthemeconfigurator_css42' => Tools::getValue('angarthemeconfigurator_css42', Configuration::get('ANGARTHEMECONFIGURATOR_CSS42')),
            'angarthemeconfigurator_css43' => Tools::getValue('angarthemeconfigurator_css43', Configuration::get('ANGARTHEMECONFIGURATOR_CSS43')),
            'angarthemeconfigurator_css44' => Tools::getValue('angarthemeconfigurator_css44', Configuration::get('ANGARTHEMECONFIGURATOR_CSS44')),
            'angarthemeconfigurator_css45' => Tools::getValue('angarthemeconfigurator_css45', Configuration::get('ANGARTHEMECONFIGURATOR_CSS45')),
            'angarthemeconfigurator_css46' => Tools::getValue('angarthemeconfigurator_css46', Configuration::get('ANGARTHEMECONFIGURATOR_CSS46')),
            'angarthemeconfigurator_css47' => Tools::getValue('angarthemeconfigurator_css47', Configuration::get('ANGARTHEMECONFIGURATOR_CSS47')),
            'angarthemeconfigurator_css48' => Tools::getValue('angarthemeconfigurator_css48', Configuration::get('ANGARTHEMECONFIGURATOR_CSS48')),
            'angarthemeconfigurator_css49' => Tools::getValue('angarthemeconfigurator_css49', Configuration::get('ANGARTHEMECONFIGURATOR_CSS49')),
            'angarthemeconfigurator_css50' => Tools::getValue('angarthemeconfigurator_css50', Configuration::get('ANGARTHEMECONFIGURATOR_CSS50')),
            'angarthemeconfigurator_css51' => Tools::getValue('angarthemeconfigurator_css51', Configuration::get('ANGARTHEMECONFIGURATOR_CSS51')),
            'angarthemeconfigurator_css52' => Tools::getValue('angarthemeconfigurator_css52', Configuration::get('ANGARTHEMECONFIGURATOR_CSS52')),

            'angarthemeconfigurator_css53' => Tools::getValue('angarthemeconfigurator_css53', Configuration::get('ANGARTHEMECONFIGURATOR_CSS53')),
            'angarthemeconfigurator_css54' => Tools::getValue('angarthemeconfigurator_css54', Configuration::get('ANGARTHEMECONFIGURATOR_CSS54')),
            'angarthemeconfigurator_css55' => Tools::getValue('angarthemeconfigurator_css55', Configuration::get('ANGARTHEMECONFIGURATOR_CSS55')),
            'angarthemeconfigurator_css56' => Tools::getValue('angarthemeconfigurator_css56', Configuration::get('ANGARTHEMECONFIGURATOR_CSS56')),
            'angarthemeconfigurator_css57' => Tools::getValue('angarthemeconfigurator_css57', Configuration::get('ANGARTHEMECONFIGURATOR_CSS57')),
            'angarthemeconfigurator_css58' => Tools::getValue('angarthemeconfigurator_css58', Configuration::get('ANGARTHEMECONFIGURATOR_CSS58')),
            'angarthemeconfigurator_css59' => Tools::getValue('angarthemeconfigurator_css59', Configuration::get('ANGARTHEMECONFIGURATOR_CSS59')),
            'angarthemeconfigurator_css60' => Tools::getValue('angarthemeconfigurator_css60', Configuration::get('ANGARTHEMECONFIGURATOR_CSS60')),
            'angarthemeconfigurator_css61' => Tools::getValue('angarthemeconfigurator_css61', Configuration::get('ANGARTHEMECONFIGURATOR_CSS61')),
            'angarthemeconfigurator_css62' => Tools::getValue('angarthemeconfigurator_css62', Configuration::get('ANGARTHEMECONFIGURATOR_CSS62')),
            'angarthemeconfigurator_css63' => Tools::getValue('angarthemeconfigurator_css63', Configuration::get('ANGARTHEMECONFIGURATOR_CSS63')),
            'angarthemeconfigurator_css64' => Tools::getValue('angarthemeconfigurator_css64', Configuration::get('ANGARTHEMECONFIGURATOR_CSS64')),

            'angarthemeconfigurator_css65' => Tools::getValue('angarthemeconfigurator_css65', Configuration::get('ANGARTHEMECONFIGURATOR_CSS65')),
            'angarthemeconfigurator_css66' => Tools::getValue('angarthemeconfigurator_css66', Configuration::get('ANGARTHEMECONFIGURATOR_CSS66')),
            'angarthemeconfigurator_css67' => Tools::getValue('angarthemeconfigurator_css67', Configuration::get('ANGARTHEMECONFIGURATOR_CSS67')),
            'angarthemeconfigurator_css68' => Tools::getValue('angarthemeconfigurator_css68', Configuration::get('ANGARTHEMECONFIGURATOR_CSS68')),
            'angarthemeconfigurator_css69' => Tools::getValue('angarthemeconfigurator_css69', Configuration::get('ANGARTHEMECONFIGURATOR_CSS69')),
            'angarthemeconfigurator_css70' => Tools::getValue('angarthemeconfigurator_css70', Configuration::get('ANGARTHEMECONFIGURATOR_CSS70')),
            'angarthemeconfigurator_css71' => Tools::getValue('angarthemeconfigurator_css71', Configuration::get('ANGARTHEMECONFIGURATOR_CSS71')),
            'angarthemeconfigurator_css72' => Tools::getValue('angarthemeconfigurator_css72', Configuration::get('ANGARTHEMECONFIGURATOR_CSS72')),
            'angarthemeconfigurator_css73' => Tools::getValue('angarthemeconfigurator_css73', Configuration::get('ANGARTHEMECONFIGURATOR_CSS73')),
            'angarthemeconfigurator_css74' => Tools::getValue('angarthemeconfigurator_css74', Configuration::get('ANGARTHEMECONFIGURATOR_CSS74')),
            'angarthemeconfigurator_css75' => Tools::getValue('angarthemeconfigurator_css75', Configuration::get('ANGARTHEMECONFIGURATOR_CSS75')),
            'angarthemeconfigurator_css76' => Tools::getValue('angarthemeconfigurator_css76', Configuration::get('ANGARTHEMECONFIGURATOR_CSS76')),
            'angarthemeconfigurator_css77' => Tools::getValue('angarthemeconfigurator_css77', Configuration::get('ANGARTHEMECONFIGURATOR_CSS77')),
            'angarthemeconfigurator_css78' => Tools::getValue('angarthemeconfigurator_css78', Configuration::get('ANGARTHEMECONFIGURATOR_CSS78')),

			'angarthemeconfigurator_css79' => Tools::getValue('angarthemeconfigurator_css79', Configuration::get('ANGARTHEMECONFIGURATOR_CSS79')),
			'angarthemeconfigurator_css80' => Tools::getValue('angarthemeconfigurator_css80', Configuration::get('ANGARTHEMECONFIGURATOR_CSS80')),
			'angarthemeconfigurator_css81' => Tools::getValue('angarthemeconfigurator_css81', Configuration::get('ANGARTHEMECONFIGURATOR_CSS81')),
			'angarthemeconfigurator_css82' => Tools::getValue('angarthemeconfigurator_css82', Configuration::get('ANGARTHEMECONFIGURATOR_CSS82')),
			'angarthemeconfigurator_css83' => Tools::getValue('angarthemeconfigurator_css83', Configuration::get('ANGARTHEMECONFIGURATOR_CSS83')),
			'angarthemeconfigurator_css84' => Tools::getValue('angarthemeconfigurator_css84', Configuration::get('ANGARTHEMECONFIGURATOR_CSS84')),
			'angarthemeconfigurator_css85' => Tools::getValue('angarthemeconfigurator_css85', Configuration::get('ANGARTHEMECONFIGURATOR_CSS85')),
			'angarthemeconfigurator_css86' => Tools::getValue('angarthemeconfigurator_css86', Configuration::get('ANGARTHEMECONFIGURATOR_CSS86')),
			'angarthemeconfigurator_css87' => Tools::getValue('angarthemeconfigurator_css87', Configuration::get('ANGARTHEMECONFIGURATOR_CSS87')),
			'angarthemeconfigurator_css88' => Tools::getValue('angarthemeconfigurator_css88', Configuration::get('ANGARTHEMECONFIGURATOR_CSS88')),
			'angarthemeconfigurator_css89' => Tools::getValue('angarthemeconfigurator_css89', Configuration::get('ANGARTHEMECONFIGURATOR_CSS89')),
			'angarthemeconfigurator_css90' => Tools::getValue('angarthemeconfigurator_css90', Configuration::get('ANGARTHEMECONFIGURATOR_CSS90')),
			'angarthemeconfigurator_css91' => Tools::getValue('angarthemeconfigurator_css91', Configuration::get('ANGARTHEMECONFIGURATOR_CSS91')),
			'angarthemeconfigurator_css92' => Tools::getValue('angarthemeconfigurator_css92', Configuration::get('ANGARTHEMECONFIGURATOR_CSS92')),
			'angarthemeconfigurator_css93' => Tools::getValue('angarthemeconfigurator_css93', Configuration::get('ANGARTHEMECONFIGURATOR_CSS93')),
			'angarthemeconfigurator_css94' => Tools::getValue('angarthemeconfigurator_css94', Configuration::get('ANGARTHEMECONFIGURATOR_CSS94')),
			'angarthemeconfigurator_css95' => Tools::getValue('angarthemeconfigurator_css95', Configuration::get('ANGARTHEMECONFIGURATOR_CSS95')),
			'angarthemeconfigurator_css96' => Tools::getValue('angarthemeconfigurator_css96', Configuration::get('ANGARTHEMECONFIGURATOR_CSS96')),
			'angarthemeconfigurator_css97' => Tools::getValue('angarthemeconfigurator_css97', Configuration::get('ANGARTHEMECONFIGURATOR_CSS97')),
			'angarthemeconfigurator_css98' => Tools::getValue('angarthemeconfigurator_css98', Configuration::get('ANGARTHEMECONFIGURATOR_CSS98')),
			'angarthemeconfigurator_css99' => Tools::getValue('angarthemeconfigurator_css99', Configuration::get('ANGARTHEMECONFIGURATOR_CSS99')),
			'angarthemeconfigurator_css100' => Tools::getValue('angarthemeconfigurator_css100', Configuration::get('ANGARTHEMECONFIGURATOR_CSS100')),
			'angarthemeconfigurator_css101' => Tools::getValue('angarthemeconfigurator_css101', Configuration::get('ANGARTHEMECONFIGURATOR_CSS101')),
			'angarthemeconfigurator_css102' => Tools::getValue('angarthemeconfigurator_css102', Configuration::get('ANGARTHEMECONFIGURATOR_CSS102')),


            'angarthemeconfigurator_color1' => Tools::getValue('angarthemeconfigurator_color1', Configuration::get('ANGARTHEMECONFIGURATOR_COLOR1')),
            'angarthemeconfigurator_color2' => Tools::getValue('angarthemeconfigurator_color2', Configuration::get('ANGARTHEMECONFIGURATOR_COLOR2')),
            'angarthemeconfigurator_color3' => Tools::getValue('angarthemeconfigurator_color3', Configuration::get('ANGARTHEMECONFIGURATOR_COLOR3')),
            'angarthemeconfigurator_color4' => Tools::getValue('angarthemeconfigurator_color4', Configuration::get('ANGARTHEMECONFIGURATOR_COLOR4')),
            'angarthemeconfigurator_color5' => Tools::getValue('angarthemeconfigurator_color5', Configuration::get('ANGARTHEMECONFIGURATOR_COLOR5')),
            'angarthemeconfigurator_color6' => Tools::getValue('angarthemeconfigurator_color6', Configuration::get('ANGARTHEMECONFIGURATOR_COLOR6')),
            'angarthemeconfigurator_color7' => Tools::getValue('angarthemeconfigurator_color7', Configuration::get('ANGARTHEMECONFIGURATOR_COLOR7')),
            'angarthemeconfigurator_color8' => Tools::getValue('angarthemeconfigurator_color8', Configuration::get('ANGARTHEMECONFIGURATOR_COLOR8')),
            'angarthemeconfigurator_color9' => Tools::getValue('angarthemeconfigurator_color9', Configuration::get('ANGARTHEMECONFIGURATOR_COLOR9')),
            'angarthemeconfigurator_color10' => Tools::getValue('angarthemeconfigurator_color10', Configuration::get('ANGARTHEMECONFIGURATOR_COLOR10')),
            'angarthemeconfigurator_color11' => Tools::getValue('angarthemeconfigurator_color11', Configuration::get('ANGARTHEMECONFIGURATOR_COLOR11')),
            'angarthemeconfigurator_color12' => Tools::getValue('angarthemeconfigurator_color12', Configuration::get('ANGARTHEMECONFIGURATOR_COLOR12')),
            'angarthemeconfigurator_color13' => Tools::getValue('angarthemeconfigurator_color13', Configuration::get('ANGARTHEMECONFIGURATOR_COLOR13')),
            'angarthemeconfigurator_color14' => Tools::getValue('angarthemeconfigurator_color14', Configuration::get('ANGARTHEMECONFIGURATOR_COLOR14')),
            'angarthemeconfigurator_color15' => Tools::getValue('angarthemeconfigurator_color15', Configuration::get('ANGARTHEMECONFIGURATOR_COLOR15')),
            'angarthemeconfigurator_color16' => Tools::getValue('angarthemeconfigurator_color16', Configuration::get('ANGARTHEMECONFIGURATOR_COLOR16')),
            'angarthemeconfigurator_color17' => Tools::getValue('angarthemeconfigurator_color17', Configuration::get('ANGARTHEMECONFIGURATOR_COLOR17')),
            'angarthemeconfigurator_color18' => Tools::getValue('angarthemeconfigurator_color18', Configuration::get('ANGARTHEMECONFIGURATOR_COLOR18')),
            'angarthemeconfigurator_color19' => Tools::getValue('angarthemeconfigurator_color19', Configuration::get('ANGARTHEMECONFIGURATOR_COLOR19')),
            'angarthemeconfigurator_color20' => Tools::getValue('angarthemeconfigurator_color20', Configuration::get('ANGARTHEMECONFIGURATOR_COLOR20')),
            'angarthemeconfigurator_color21' => Tools::getValue('angarthemeconfigurator_color21', Configuration::get('ANGARTHEMECONFIGURATOR_COLOR21')),
            'angarthemeconfigurator_color22' => Tools::getValue('angarthemeconfigurator_color22', Configuration::get('ANGARTHEMECONFIGURATOR_COLOR22')),
            'angarthemeconfigurator_color23' => Tools::getValue('angarthemeconfigurator_color23', Configuration::get('ANGARTHEMECONFIGURATOR_COLOR23')),
            'angarthemeconfigurator_color24' => Tools::getValue('angarthemeconfigurator_color24', Configuration::get('ANGARTHEMECONFIGURATOR_COLOR24')),
            'angarthemeconfigurator_color25' => Tools::getValue('angarthemeconfigurator_color25', Configuration::get('ANGARTHEMECONFIGURATOR_COLOR25')),
            'angarthemeconfigurator_color26' => Tools::getValue('angarthemeconfigurator_color26', Configuration::get('ANGARTHEMECONFIGURATOR_COLOR26')),
            'angarthemeconfigurator_color27' => Tools::getValue('angarthemeconfigurator_color27', Configuration::get('ANGARTHEMECONFIGURATOR_COLOR27')),
            'angarthemeconfigurator_color28' => Tools::getValue('angarthemeconfigurator_color28', Configuration::get('ANGARTHEMECONFIGURATOR_COLOR28')),
            'angarthemeconfigurator_color29' => Tools::getValue('angarthemeconfigurator_color29', Configuration::get('ANGARTHEMECONFIGURATOR_COLOR29')),
            'angarthemeconfigurator_color30' => Tools::getValue('angarthemeconfigurator_color30', Configuration::get('ANGARTHEMECONFIGURATOR_COLOR30')),
            'angarthemeconfigurator_color31' => Tools::getValue('angarthemeconfigurator_color31', Configuration::get('ANGARTHEMECONFIGURATOR_COLOR31')),
            'angarthemeconfigurator_color32' => Tools::getValue('angarthemeconfigurator_color32', Configuration::get('ANGARTHEMECONFIGURATOR_COLOR32')),
            'angarthemeconfigurator_color33' => Tools::getValue('angarthemeconfigurator_color33', Configuration::get('ANGARTHEMECONFIGURATOR_COLOR33')),
            'angarthemeconfigurator_color34' => Tools::getValue('angarthemeconfigurator_color34', Configuration::get('ANGARTHEMECONFIGURATOR_COLOR34')),
            'angarthemeconfigurator_color35' => Tools::getValue('angarthemeconfigurator_color35', Configuration::get('ANGARTHEMECONFIGURATOR_COLOR35')),
            'angarthemeconfigurator_color36' => Tools::getValue('angarthemeconfigurator_color36', Configuration::get('ANGARTHEMECONFIGURATOR_COLOR36')),
            'angarthemeconfigurator_color37' => Tools::getValue('angarthemeconfigurator_color37', Configuration::get('ANGARTHEMECONFIGURATOR_COLOR37')),
            'angarthemeconfigurator_color38' => Tools::getValue('angarthemeconfigurator_color38', Configuration::get('ANGARTHEMECONFIGURATOR_COLOR38')),
            'angarthemeconfigurator_color39' => Tools::getValue('angarthemeconfigurator_color39', Configuration::get('ANGARTHEMECONFIGURATOR_COLOR39')),
            'angarthemeconfigurator_color40' => Tools::getValue('angarthemeconfigurator_color40', Configuration::get('ANGARTHEMECONFIGURATOR_COLOR40')),
            'angarthemeconfigurator_color41' => Tools::getValue('angarthemeconfigurator_color41', Configuration::get('ANGARTHEMECONFIGURATOR_COLOR41')),
            'angarthemeconfigurator_color42' => Tools::getValue('angarthemeconfigurator_color42', Configuration::get('ANGARTHEMECONFIGURATOR_COLOR42')),
            'angarthemeconfigurator_color43' => Tools::getValue('angarthemeconfigurator_color43', Configuration::get('ANGARTHEMECONFIGURATOR_COLOR43')),
            'angarthemeconfigurator_color44' => Tools::getValue('angarthemeconfigurator_color44', Configuration::get('ANGARTHEMECONFIGURATOR_COLOR44')),
            'angarthemeconfigurator_color45' => Tools::getValue('angarthemeconfigurator_color45', Configuration::get('ANGARTHEMECONFIGURATOR_COLOR45')),
            'angarthemeconfigurator_color46' => Tools::getValue('angarthemeconfigurator_color46', Configuration::get('ANGARTHEMECONFIGURATOR_COLOR46')),

            'angarthemeconfigurator_color47' => Tools::getValue('angarthemeconfigurator_color47', Configuration::get('ANGARTHEMECONFIGURATOR_COLOR47')),
            'angarthemeconfigurator_color48' => Tools::getValue('angarthemeconfigurator_color48', Configuration::get('ANGARTHEMECONFIGURATOR_COLOR48')),
            'angarthemeconfigurator_color49' => Tools::getValue('angarthemeconfigurator_color49', Configuration::get('ANGARTHEMECONFIGURATOR_COLOR49')),
            'angarthemeconfigurator_color50' => Tools::getValue('angarthemeconfigurator_color50', Configuration::get('ANGARTHEMECONFIGURATOR_COLOR50')),
            'angarthemeconfigurator_color51' => Tools::getValue('angarthemeconfigurator_color51', Configuration::get('ANGARTHEMECONFIGURATOR_COLOR51')),
            'angarthemeconfigurator_color52' => Tools::getValue('angarthemeconfigurator_color52', Configuration::get('ANGARTHEMECONFIGURATOR_COLOR52')),
            'angarthemeconfigurator_color53' => Tools::getValue('angarthemeconfigurator_color53', Configuration::get('ANGARTHEMECONFIGURATOR_COLOR53')),
            'angarthemeconfigurator_color54' => Tools::getValue('angarthemeconfigurator_color54', Configuration::get('ANGARTHEMECONFIGURATOR_COLOR54')),
            'angarthemeconfigurator_color55' => Tools::getValue('angarthemeconfigurator_color55', Configuration::get('ANGARTHEMECONFIGURATOR_COLOR55')),
            'angarthemeconfigurator_color56' => Tools::getValue('angarthemeconfigurator_color56', Configuration::get('ANGARTHEMECONFIGURATOR_COLOR56')),
            'angarthemeconfigurator_color57' => Tools::getValue('angarthemeconfigurator_color57', Configuration::get('ANGARTHEMECONFIGURATOR_COLOR57')),
            'angarthemeconfigurator_color58' => Tools::getValue('angarthemeconfigurator_color58', Configuration::get('ANGARTHEMECONFIGURATOR_COLOR58')),
            'angarthemeconfigurator_color59' => Tools::getValue('angarthemeconfigurator_color59', Configuration::get('ANGARTHEMECONFIGURATOR_COLOR59')),

            'angarthemeconfigurator_color60' => Tools::getValue('angarthemeconfigurator_color60', Configuration::get('ANGARTHEMECONFIGURATOR_COLOR60')),
            'angarthemeconfigurator_color61' => Tools::getValue('angarthemeconfigurator_color61', Configuration::get('ANGARTHEMECONFIGURATOR_COLOR61')),
            'angarthemeconfigurator_color62' => Tools::getValue('angarthemeconfigurator_color62', Configuration::get('ANGARTHEMECONFIGURATOR_COLOR62')),
            'angarthemeconfigurator_color63' => Tools::getValue('angarthemeconfigurator_color63', Configuration::get('ANGARTHEMECONFIGURATOR_COLOR63')),
            'angarthemeconfigurator_color64' => Tools::getValue('angarthemeconfigurator_color64', Configuration::get('ANGARTHEMECONFIGURATOR_COLOR64')),
            'angarthemeconfigurator_color65' => Tools::getValue('angarthemeconfigurator_color65', Configuration::get('ANGARTHEMECONFIGURATOR_COLOR65')),
            'angarthemeconfigurator_color66' => Tools::getValue('angarthemeconfigurator_color66', Configuration::get('ANGARTHEMECONFIGURATOR_COLOR66')),
            'angarthemeconfigurator_color67' => Tools::getValue('angarthemeconfigurator_color67', Configuration::get('ANGARTHEMECONFIGURATOR_COLOR67')),
            'angarthemeconfigurator_color68' => Tools::getValue('angarthemeconfigurator_color68', Configuration::get('ANGARTHEMECONFIGURATOR_COLOR68')),
            'angarthemeconfigurator_color69' => Tools::getValue('angarthemeconfigurator_color69', Configuration::get('ANGARTHEMECONFIGURATOR_COLOR69')),
            'angarthemeconfigurator_color70' => Tools::getValue('angarthemeconfigurator_color70', Configuration::get('ANGARTHEMECONFIGURATOR_COLOR70')),
            'angarthemeconfigurator_color71' => Tools::getValue('angarthemeconfigurator_color71', Configuration::get('ANGARTHEMECONFIGURATOR_COLOR71')),
            'angarthemeconfigurator_color72' => Tools::getValue('angarthemeconfigurator_color72', Configuration::get('ANGARTHEMECONFIGURATOR_COLOR72')),
            'angarthemeconfigurator_color73' => Tools::getValue('angarthemeconfigurator_color73', Configuration::get('ANGARTHEMECONFIGURATOR_COLOR73')),
            'angarthemeconfigurator_color74' => Tools::getValue('angarthemeconfigurator_color74', Configuration::get('ANGARTHEMECONFIGURATOR_COLOR74')),
            'angarthemeconfigurator_color75' => Tools::getValue('angarthemeconfigurator_color75', Configuration::get('ANGARTHEMECONFIGURATOR_COLOR75')),
            'angarthemeconfigurator_color76' => Tools::getValue('angarthemeconfigurator_color76', Configuration::get('ANGARTHEMECONFIGURATOR_COLOR76')),
            'angarthemeconfigurator_color77' => Tools::getValue('angarthemeconfigurator_color77', Configuration::get('ANGARTHEMECONFIGURATOR_COLOR77')),
            'angarthemeconfigurator_color78' => Tools::getValue('angarthemeconfigurator_color78', Configuration::get('ANGARTHEMECONFIGURATOR_COLOR78')),
            'angarthemeconfigurator_color79' => Tools::getValue('angarthemeconfigurator_color79', Configuration::get('ANGARTHEMECONFIGURATOR_COLOR79')),
            'angarthemeconfigurator_color80' => Tools::getValue('angarthemeconfigurator_color80', Configuration::get('ANGARTHEMECONFIGURATOR_COLOR80')),
            'angarthemeconfigurator_color81' => Tools::getValue('angarthemeconfigurator_color81', Configuration::get('ANGARTHEMECONFIGURATOR_COLOR81')),
            'angarthemeconfigurator_color82' => Tools::getValue('angarthemeconfigurator_color82', Configuration::get('ANGARTHEMECONFIGURATOR_COLOR82')),
            'angarthemeconfigurator_color83' => Tools::getValue('angarthemeconfigurator_color83', Configuration::get('ANGARTHEMECONFIGURATOR_COLOR83')),
            'angarthemeconfigurator_color84' => Tools::getValue('angarthemeconfigurator_color84', Configuration::get('ANGARTHEMECONFIGURATOR_COLOR84')),
            'angarthemeconfigurator_color85' => Tools::getValue('angarthemeconfigurator_color85', Configuration::get('ANGARTHEMECONFIGURATOR_COLOR85')),
            'angarthemeconfigurator_color86' => Tools::getValue('angarthemeconfigurator_color86', Configuration::get('ANGARTHEMECONFIGURATOR_COLOR86')),
            'angarthemeconfigurator_color87' => Tools::getValue('angarthemeconfigurator_color87', Configuration::get('ANGARTHEMECONFIGURATOR_COLOR87')),
            'angarthemeconfigurator_color88' => Tools::getValue('angarthemeconfigurator_color88', Configuration::get('ANGARTHEMECONFIGURATOR_COLOR88')),
            'angarthemeconfigurator_color89' => Tools::getValue('angarthemeconfigurator_color89', Configuration::get('ANGARTHEMECONFIGURATOR_COLOR89')),

            'angarthemeconfigurator_color90' => Tools::getValue('angarthemeconfigurator_color90', Configuration::get('ANGARTHEMECONFIGURATOR_COLOR90')),
            'angarthemeconfigurator_color91' => Tools::getValue('angarthemeconfigurator_color91', Configuration::get('ANGARTHEMECONFIGURATOR_COLOR91')),
            'angarthemeconfigurator_color92' => Tools::getValue('angarthemeconfigurator_color92', Configuration::get('ANGARTHEMECONFIGURATOR_COLOR92')),
            'angarthemeconfigurator_color93' => Tools::getValue('angarthemeconfigurator_color93', Configuration::get('ANGARTHEMECONFIGURATOR_COLOR93')),
            'angarthemeconfigurator_color94' => Tools::getValue('angarthemeconfigurator_color94', Configuration::get('ANGARTHEMECONFIGURATOR_COLOR94')),

        );
    }
}
