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
        //$this->call(AttributeDescriptionsTableSeeder::class);
        //$this->call(WeaponTableSeeder::class);
        //$this->call(ArmorTableSeeder::class);
        //$this->call(SpellTableSeeder::class);
    }
}
