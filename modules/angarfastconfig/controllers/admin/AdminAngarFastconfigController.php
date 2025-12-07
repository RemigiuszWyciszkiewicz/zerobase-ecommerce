<?php

class AdminAngarFastconfigController extends ModuleAdminController
{
    public function __construct()
    {
        $this->bootstrap = true;
        parent::__construct();
    }

    public function initContent()
    {
        // Redirect to module configuration page
        $configureLink = $this->context->link->getAdminLink('AdminModules', true) . '&configure=' . $this->module->name;
        Tools::redirectAdmin($configureLink);
    }
}
