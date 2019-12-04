<?php

use Illuminate\Database\Seeder;

class CreatureTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(App\Creatures::class,4)->create();
    }
}
