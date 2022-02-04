<?php
namespace Admin\Jas\Models;

use October\Rain\Database\Model;
use System\Models\File;
use Admin\Jas\Models\Settings;
use Admin\Jas\Models\Project;

class Settings extends Model {
    public $implement = ['System.Behaviors.SettingsModel', 'RainLab.Translate.Behaviors.TranslatableModel'];
    public $settingsCode = 'jas_page_settings';
    public $settingsFields = 'fields.yaml';

    public $translatable = ['project_title', 'project_content', 'project_bot_content', 
                            'project_link_name', 'our_studio_title', 'our_studio_content', 
                            'our_studio_mid_title', 'our_studio_mid_content', 'our_studio_bot_content', 
                            'our_studio_bot_list1', 'our_studio_bot_list2', 'our_studio_bot_list3', 
                            'contact_title', 'contact_content', 'footer_address', 'footer_copyright'
                            ];

    public $attachOne = [
        'images' => 'System\Models\File',
        'footer_logo' => 'System\Models\File',
        

    ];


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
}