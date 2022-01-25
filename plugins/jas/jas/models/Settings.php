<?php
namespace Jas\Jas\Models;

use October\Rain\Database\Model;
use System\Models\File;

class Settings extends Model {
    public $implement = ['System.Behaviors.SettingsModel', 'RainLab.Translate.Behaviors.TranslatableModel'];
    public $settingsCode = 'jas_page_settings';
    public $settingsFields = 'fields.yaml';


    public $translatable = ['first_mini_news_text'];

    public static function getValue($sCode) {

        if(empty($sCode)) {
            return null;
        }

        //Get settings object
        $obSettings = self::where('item', 'jas_page_settings')->first();
        if(empty($obSettings)) {
            return null;
        }

        $sValue = $obSettings->$sCode;
        return $sValue;
    }

    /**
     * Get Image data
     * @param $sCode
     * @return \System\Models\File|null
     */
    public static function getImageData($sCode) {

        /** @var File $obImage */
        $obImage = File::where('attachment_type', 'Lovata\SiteSettings\Models\Settings')->where('field', $sCode)->first();
        if(empty($obImage)) {
            return null;
        }

        return $obImage;
    }

}