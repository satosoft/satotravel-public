<?php
namespace Modules\Event\Models;

use App\Models\BaseModel;

class EventTerm extends BaseModel
{
    protected $table = 'bravo_event_term';
    protected $fillable = [
        'term_id',
        'target_id'
    ];
}
