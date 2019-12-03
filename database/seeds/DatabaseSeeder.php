<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call(UsersTableSeeder::class);
        //$this->call(CharacterTableSeeder::class);
        //$this->call(CreatureTableSeeder::class);
        $this->call(AttributeDescriptionTableSeeder::class);
        $this->call(WeaponsTableSeeder::class);
        $this->call(ArmorsTableSeeder::class);
        $this->call(SpellsTableSeeder::class);
    }
}
