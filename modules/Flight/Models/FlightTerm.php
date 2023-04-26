<?php
namespace Modules\Flight\Models;

use App\Models\BaseModel;

class FlightTerm extends BaseModel
{
    protected $table = 'bravo_flight_term';
    protected $fillable = [
        'term_id',
        'target_id'
    ];
}