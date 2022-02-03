<?php namespace admin\jas;

use Individuart\Work\Models\Work;
use System\Classes\PluginBase;

class Plugin extends PluginBase
{
    public function boot()
    {
        Work::extend(function ($model) {
            $model->implement[] = 'RainLab.Translate.Behaviors.TranslatableModel';
            $model->addDynamicProperty('translatable', ['name', 'description']);
            // like this ^
        });    }

    public function registerComponents()
    {
        return [
            '\admin\Jas\Components\SiteSettings' => 'jasField' 
        ];
    }

    /**
     * Register settings
     * @return array
     */
    public function registerSettings()
    {
        return [
            'config'    => [
                'label'       => 'Jas settings',
                'description' => '',
                'icon'        => 'icon-cogs',
                'class'       => 'admin\Jas\Models\Settings',
                'order'       => 100,
            ],
          
        ];
    }
}