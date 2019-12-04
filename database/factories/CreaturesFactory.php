<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Creatures;
use Faker\Generator as Faker;
use App\Weapons;
use App\Armors;
Use App\Spells;

$factory->define(Creatures::class, function (Faker $faker) {

    $weapons = Weapons::all()->pluck('weapon')->toArray();
    $weapons_damage = Weapons::all()->pluck('damage')->toArray();

    $armors = Armors::all()->pluck('armor')->toArray();
    $armors_class = Armors::all()->pluck('armorclass')->toArray();
    
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
        'weapon'=>$faker->randomElement($weapons),
        'weapon_damage'=>$faker->randomElement($weapons_damage),
        'armor'=>$faker->randomElement($armors),
        'armor_class'=>$faker->randomElement($armors_class),

    ];
});
