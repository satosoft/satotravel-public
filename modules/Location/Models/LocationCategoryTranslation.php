<?php
namespace Modules\Location\Models;

use App\Models\BaseModel;

class LocationCategoryTranslation extends BaseModel
{
    protected $table = 'location_category_translations';
    protected $fillable = [
        'name',
        'content',
    ];
    protected $cleanFields = [
        'content'
    ];
}