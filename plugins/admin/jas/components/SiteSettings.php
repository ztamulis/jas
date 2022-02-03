<?php namespace Admin\Jas\Components;

use Cms\Classes\ComponentBase;
use Admin\Jas\Models\Settings;
use Admin\Jas\Models\Project;

/**
 * Class SiteSettings
 * @package Lovata\BaseCode\Components
 */
class SiteSettings extends ComponentBase
{
    /**
     * @return array
     */
    public function componentDetails()
    {
        return [
            'name'        => 'jasField', 
            'description' => 'lovata.basecode::lang.component.site_settings_description'
        ];
    }

    /**
     * Get value by field code
     * @param $sCode
     * @return string|array
     */
    public function get($sCode)
    {
        return Settings::getValue($sCode);
    }

    /**
     * Get phone number by field code
     * @param $sCode
     * @return mixed
     */
    public function getPhone($sCode)
    {
        $sValue = $this->get($sCode);
        return $this->getPhoneValue($sValue);
    }

    /**
     * @param string $sValue
     * @return null|string|string[]
     */
    public function getPhoneValue($sValue)
    {
        return preg_replace('%\D\+%', '', $sValue);
    }

    /**
     * @param $sCode
     * @return \System\Models\File|null
     */
    public function getImage($sCode)
    {
        return Settings::getImageData($sCode);
    }
}