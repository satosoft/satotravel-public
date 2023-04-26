<?php


namespace Modules\Type\Interfaces;


use App\Models\BaseModel;

interface IPostType
{

    public function getModel(): BaseModel;
}
