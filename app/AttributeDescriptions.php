<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class AttributeDescriptions extends Model
{
    protected $fillable = [
        'attribute', 'description',
    ];
}
