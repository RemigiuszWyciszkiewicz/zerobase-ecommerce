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
