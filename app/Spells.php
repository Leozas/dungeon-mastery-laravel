<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Spells extends Model
{
    protected $fillable = [
        'spell', 'description', 'range', 'damage', 'damagetype',
    ];
}
