<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Armors extends Model
{

    protected $fillable = [
        'armor', 'description','armorclass', 'armortype',
    ];
    
}
