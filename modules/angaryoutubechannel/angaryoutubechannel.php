<?php
/**
 * Angar YouTube Channel Widget Module
 * Display YouTube channel info with subscribe button
 */

if (!defined('_PS_VERSION_')) {
    exit;
}

class Angaryoutubechannel extends Module
{
    public function __construct()
    {
        $this->name = 'angaryoutubechannel';
        $this->tab = 'front_office_features';
        $this->version = '1.0.0';
        $this->author = 'Angar';
        $this->need_instance = 0;

        parent::__construct();

        $this->displayName = $this->l('Angar YouTube Channel Widget');
        $this->description = $this->l('Display YouTube channel information with subscribe button');
        $this->ps_versions_compliancy = ['min' => '1.7', 'max' => _PS_VERSION_];
        $this->confirmUninstall = $this->l('Are you sure you want to uninstall this module?');
    }

    public function install()
    {
        // Default configuration
        Configuration::updateValue('ANGAR_YT_CHANNEL_ID', 'UCuAXFkgsw1L7xaCfnd5JJOw'); // Example: React channel
        Configuration::updateValue('ANGAR_YT_API_KEY', '');

        return parent::install()
            && $this->registerHook('displayYoutubeChannel')
            && $this->registerHook('header');
    }

    public function uninstall()
    {
        Configuration::deleteByName('ANGAR_YT_CHANNEL_ID');
        Configuration::deleteByName('ANGAR_YT_API_KEY');

        return parent::uninstall();
    }

    /**
     * Add CSS and JS to page header
     */
    public function hookHeader()
    {
        $this->context->controller->addCSS($this->_path . 'views/css/angaryoutubechannel.css');
        $this->context->controller->addJS($this->_path . 'views/js/angaryoutubechannel.js');
    }

    /**
     * Custom hook for YouTube Channel - use anywhere
     */
    public function hookDisplayYoutubeChannel($params)
    {
        return $this->displayChannelWidget();
    }

    /**
     * Configuration form
     */
    public function getContent()
    {
        $output = '';

        // Process form submission
        if (Tools::isSubmit('submitAngarYTChannel')) {
            $channelId = Tools::getValue('ANGAR_YT_CHANNEL_ID');
            $apiKey = Tools::getValue('ANGAR_YT_API_KEY');

            Configuration::updateValue('ANGAR_YT_CHANNEL_ID', $channelId);
            Configuration::updateValue('ANGAR_YT_API_KEY', $apiKey);

            $output .= $this->displayConfirmation($this->l('Settings updated successfully'));
        }

        return $output . $this->renderForm();
    }

    /**
     * Render configuration form
     */
    protected function renderForm()
    {
        $fieldsForm = [
            'form' => [
                'legend' => [
                    'title' => $this->l('YouTube Channel Configuration'),
                    'icon' => 'icon-cogs',
                ],
                'input' => [
                    [
                        'type' => 'text',
                        'label' => $this->l('YouTube API Key'),
                        'name' => 'ANGAR_YT_API_KEY',
                        'desc' => $this->l('Get your API key from Google Cloud Console: https://console.developers.google.com/'),
                        'required' => true,
                    ],
                    [
                        'type' => 'text',
                        'label' => $this->l('Channel ID'),
                        'name' => 'ANGAR_YT_CHANNEL_ID',
                        'desc' => $this->l('YouTube Channel ID (e.g., UCuAXFkgsw1L7xaCfnd5JJOw). Channel name, handle, avatar and subscriber count will be fetched automatically.'),
                        'required' => true,
                    ],
                ],
                'submit' => [
                    'title' => $this->l('Save'),
                    'class' => 'btn btn-default pull-right',
                ],
            ],
        ];

        $helper = new HelperForm();
        $helper->module = $this;
        $helper->name_controller = $this->name;
        $helper->token = Tools::getAdminTokenLite('AdminModules');
        $helper->currentIndex = AdminController::$currentIndex . '&configure=' . $this->name;
        $helper->submit_action = 'submitAngarYTChannel';

        $helper->default_form_language = (int) Configuration::get('PS_LANG_DEFAULT');
        $helper->allow_employee_form_lang = (int) Configuration::get('PS_BO_ALLOW_EMPLOYEE_FORM_LANG', 0);

        $helper->title = $this->displayName;
        $helper->show_toolbar = true;
        $helper->toolbar_scroll = true;
        $helper->toolbar_btn = [
            'save' => [
                'desc' => $this->l('Save'),
                'href' => AdminController::$currentIndex . '&configure=' . $this->name . '&save' . $this->name .
                    '&token=' . Tools::getAdminTokenLite('AdminModules'),
            ],
            'back' => [
                'href' => AdminController::$currentIndex . '&token=' . Tools::getAdminTokenLite('AdminModules'),
                'desc' => $this->l('Back to list'),
            ],
        ];

        // Get current values
        $helper->fields_value['ANGAR_YT_API_KEY'] = Configuration::get('ANGAR_YT_API_KEY');
        $helper->fields_value['ANGAR_YT_CHANNEL_ID'] = Configuration::get('ANGAR_YT_CHANNEL_ID');

        return $helper->generateForm([$fieldsForm]);
    }

    /**
     * Render the channel widget
     */
    private function displayChannelWidget()
    {
        $channelId = Configuration::get('ANGAR_YT_CHANNEL_ID');
        $apiKey = Configuration::get('ANGAR_YT_API_KEY');

        if (empty($channelId)) {
            return '';
        }

        $this->context->smarty->assign([
            'channelId' => $channelId,
            'apiKey' => $apiKey,
            'moduleDir' => $this->_path,
        ]);

        return $this->display(__FILE__, 'views/templates/hook/youtube-channel.tpl');
    }
}
