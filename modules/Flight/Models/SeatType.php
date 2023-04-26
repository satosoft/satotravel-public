<?php


    namespace Modules\Flight\Models;


    use App\Models\BaseModel;
    use Illuminate\Database\Eloquent\SoftDeletes;

    class SeatType extends BaseModel
    {
        use SoftDeletes;
        protected $table = 'bravo_seat_type';
        protected $fillable  = ['name','code'];

    }