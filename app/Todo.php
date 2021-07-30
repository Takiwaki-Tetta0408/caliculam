<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class todo extends Model
{
    //
    protected $fillable = [
        'title',
        'memo',
        'checked',
        'deadline',
        'url',
        'category_id',
    ];
}
