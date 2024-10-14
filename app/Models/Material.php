<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Material extends Model
{
    protected $fillable = [
        'item_code',
        'item_name',
        'unit_of_measure',
        'group'
    ];
}
