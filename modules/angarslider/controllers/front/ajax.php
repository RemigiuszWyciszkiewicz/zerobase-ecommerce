<?php
/**
* @author      Krzysztof Pecak
* @copyright   2025 Krzysztof Pecak
* @license     Commercial license valid for 1 shop
*/

class AngarSliderAjaxModuleFrontController extends ModuleFrontController
{
    public function initContent()
    {
        parent::initContent();

        $secure_key = Tools::getValue('secure_key');
        $action = Tools::getValue('action');

        $angar_slider = new AngarSlider();

        if (!$secure_key || $secure_key != $angar_slider->secure_key || !$action) {
            header('HTTP/1.1 403 Forbidden');
            exit;
        }

        if ($action == 'updateSlidesPosition' && Tools::getValue('slides')) {
            $slides = Tools::getValue('slides');

            foreach ($slides as $position => $id_slide) {
                Db::getInstance()->execute('
                    UPDATE `'._DB_PREFIX_.'angarslider_slides` SET `position` = '.(int)$position.'
                    WHERE `id_angarslider_slides` = '.(int)$id_slide);
            }

            $angar_slider->clearCache();
            die('OK');
        }

        die('Invalid action');
    }
}
