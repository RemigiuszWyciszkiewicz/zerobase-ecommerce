<?php
/**
 * Angar YouTube Shorts Module
 * Display YouTube Shorts in a slider
 */

if (!defined('_PS_VERSION_')) {
    exit;
}

class Angaryoutubeshorts extends Module
{
    public function __construct()
    {
        $this->name = 'angaryoutubeshorts';
        $this->tab = 'front_office_features';
        $this->version = '1.0.0';
        $this->author = 'Angar';
        $this->need_instance = 0;

        parent::__construct();

        $this->displayName = $this->l('Angar YouTube Shorts');
        $this->description = $this->l('Display YouTube Shorts videos in a slider on homepage and product pages');
        $this->ps_versions_compliancy = ['min' => '1.7', 'max' => _PS_VERSION_];
        $this->confirmUninstall = $this->l('Are you sure you want to uninstall this module?');
    }

    public function install()
    {
        // Default YouTube Shorts IDs (you can change these)
        Configuration::updateValue('ANGAR_YT_SHORTS', json_encode([
            'MpCfSB74hAI', // Example video ID
            'bTe8uwzMua8',
            'jrANYxj2iD4',
        ]));

        return parent::install()
            && $this->registerHook('displayYoutubeShorts')
            && $this->registerHook('header');
    }

    public function uninstall()
    {
        Configuration::deleteByName('ANGAR_YT_SHORTS');

        return parent::uninstall();
    }

    /**
     * Add CSS and JS to page header
     */
    public function hookHeader()
    {
        $this->context->controller->addCSS($this->_path . 'views/css/angaryoutubeshorts.css');
        $this->context->controller->addJS($this->_path . 'views/js/angaryoutubeshorts.js');
    }

    /**
     * Custom hook for YouTube Shorts - use anywhere
     */
    public function hookDisplayYoutubeShorts($params)
    {
        return $this->displayShorts();
    }

    /**
     * Configuration form
     */
    public function getContent()
    {
        $output = '';

        // Process form submission
        if (Tools::isSubmit('submitAngarYTShorts')) {
            $videoIds = Tools::getValue('ANGAR_YT_SHORTS');

            // Clean and validate video IDs
            $videoIdsArray = array_filter(array_map('trim', explode("\n", $videoIds)));

            Configuration::updateValue('ANGAR_YT_SHORTS', json_encode($videoIdsArray));
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
                    'title' => $this->l('YouTube Shorts Configuration'),
                    'icon' => 'icon-cogs',
                ],
                'input' => [
                    [
                        'type' => 'textarea',
                        'label' => $this->l('YouTube Video IDs'),
                        'name' => 'ANGAR_YT_SHORTS',
                        'desc' => $this->l('Enter YouTube video IDs, one per line. Example: MpCfSB74hAI'),
                        'rows' => 10,
                        'cols' => 60,
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
        $helper->submit_action = 'submitAngarYTShorts';

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
        $videoIds = json_decode(Configuration::get('ANGAR_YT_SHORTS'), true);
        $helper->fields_value['ANGAR_YT_SHORTS'] = is_array($videoIds) ? implode("\n", $videoIds) : '';

        return $helper->generateForm([$fieldsForm]);
    }

    /**
     * Render the shorts slider
     */
    private function displayShorts()
    {
        $videoIds = json_decode(Configuration::get('ANGAR_YT_SHORTS'), true);

        if (empty($videoIds)) {
            return '';
        }

        $this->context->smarty->assign([
            'videoIds' => $videoIds,
            'moduleDir' => $this->_path,
        ]);

        return $this->display(__FILE__, 'views/templates/hook/youtube-shorts.tpl');
    }
}
