<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Weapons extends Model
{
    protected $fillable = [
        'weapons', 'weapontype','description', 'damage', 'damagetype',
    ];
}
