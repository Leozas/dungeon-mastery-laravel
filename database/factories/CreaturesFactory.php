<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Creatures;
use Faker\Generator as Faker;
use App\Weapons;
use App\Armors;
Use App\Spells;

$factory->define(Creatures::class, function (Faker $faker) {

    $weapons = Weapons::all()->pluck('id')->toArray();
    $armors = Armors::all()->pluck('id')->toArray();
    $spells = Spells::all()->pluck('id')->toArray();
    
    $creature_name = ['Nightfall Skeleton','Blackfen Hellion','Thundermaw Serpent','Giant Berserker','Deadland Goblin','Fangbrute Hydra','Spectral Warrior','Crimson Spawn','Ogre Shaman','Maruader Chieftain'];

    return [

        'creature_name'=>$faker->randomElement($creature_name),
        'strength'=>$faker->numberBetween($min = 2, $max = 14),
        'dexterity'=>$faker->numberBetween($min = 2, $max = 14),
        'constitution'=>$faker->numberBetween($min = 2, $max = 14),
        'intelligence'=>$faker->numberBetween($min = 2, $max = 14),
        'wisedom'=>$faker->numberBetween($min = 2, $max = 14),
        'charisma'=>$faker->numberBetween($min = 2, $max = 14),
        'intitiative'=>$faker->randomDigit,
        'health_points'=>$faker->numberBetween($min = 15, $max = 42),
        'weapon_id'=>$faker->randomElement($weapons),
        'armor_id'=>$faker->randomElement($armors),
    ];
});
