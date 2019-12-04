<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Characters;
use Faker\Generator as Faker;
use App\Weapons;
use App\Armors;
Use App\Spells;


$factory->define(Characters::class, function (Faker $faker) {

    $weapons = Weapons::all()->pluck('weapon')->toArray();
    $weapons_damage = Weapons::all()->pluck('damage')->toArray();

    $armors = Armors::all()->pluck('armor')->toArray();
    $armors_class = Armors::all()->pluck('armorclass')->toArray();

    $spells = Spells::all()->pluck('spell')->toArray();
    $spells_damage= Spells::all()->pluck('damage')->toArray();
    
    $character_name = ['Nhazur Zimmo','Eilun Mestum','Robrurk Sternwalker','Malvol Crowhair','Virgor Sirsk','Glom Chukan','Gedvom Steelspirit','Mar Titanbreaker','Reomao-Koz Muehrekdufk','Havez Dichik','Drondenrilm Vegeldava','Dordaut Zoldavo','Uing Wiao','Thiup Tei','Frircaimbus Debraha','Servu Gicusen'];

    return [

        'character_name'=>$faker->randomElement($character_name),
        'strength'=>$faker->numberBetween($min = 2, $max = 14),
        'dexterity'=>$faker->numberBetween($min = 2, $max = 14),
        'constitution'=>$faker->numberBetween($min = 2, $max = 14),
        'intelligence'=>$faker->numberBetween($min = 2, $max = 14),
        'wisedom'=>$faker->numberBetween($min = 2, $max = 14),
        'charisma'=>$faker->numberBetween($min = 2, $max = 14),
        'intitiative'=>$faker->randomDigit,
        'health_points'=>$faker->numberBetween($min = 15, $max = 42),
        'weapon'=>$faker->randomElement($weapons),
        'weapon_damage'=>$faker->randomElement($weapons_damage),
        'armor'=>$faker->randomElement($armors),
        'armor_class'=>$faker->randomElement($armors_class),
        'spell'=>$faker->randomElement($spells),
        'spell_damage'=>$faker->randomElement($spells_damage),

    ];
});
