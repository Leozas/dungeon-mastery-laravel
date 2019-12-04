<?php

use Illuminate\Database\Seeder;

class CharacterTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(App\Characters::class,4)->create();
    }
}
