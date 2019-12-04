<?php

use Illuminate\Database\Seeder;
use App\User;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */

    public function run()
    {
        $user = [
            ['username' => 'michael', 'firstname' => 'michael', 'lastname' => 'loyselle', 'email' => 'm.loyselle@gmail.com', 'password' => 'password']
        ];
        foreach($user as $user){
            User::create($user);
        } 
        factory(App\User::class,10)->create();
    }
}
