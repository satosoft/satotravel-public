<?php
namespace Modules\Space\Models;

use App\Models\BaseModel;

class SpaceTerm extends BaseModel
{
    protected $table = 'bravo_space_term';
    protected $fillable = [
        'term_id',
        'target_id'
    ];
}