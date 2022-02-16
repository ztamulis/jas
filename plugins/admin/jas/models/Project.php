<?php namespace admin\jas\Models;

use Model;

/**
 * Model
 */
class Project extends Model
{
    use \October\Rain\Database\Traits\Validation;
    use \October\Rain\Database\Traits\Sluggable;
    use \October\Rain\Database\Traits\Sortable;

    public $implement = ['RainLab.Translate.Behaviors.TranslatableModel'];
    public $translatable = ['name', 'short_description', 'description', 'sub_name', 'signature'];
    const SORT_ORDER = 'sort_order';

    


    /*
     * Disable timestamps by default.
     * Remove this line if timestamps are defined in the database table.
     */
    public $timestamps = false;


    /**
        * @var array Generate slugs for these attributes.
        */
    protected $slugs = ['slug' => 'name'];

    /**
     * @var string The database table used by the model.
     */
    public $table = 'admin_jas_projects';

    /**
     * @var array Validation rules
     */
    public $rules = [
    ];

    public $attachOne = [
        'image' => 'System\Models\File',
    
    ];

    public $attachMany = [
        'images' => 'System\Models\File',
    
    ];

    public function scopePublished($query)
    {
        return $query->where('published',true);

    }

   



}



