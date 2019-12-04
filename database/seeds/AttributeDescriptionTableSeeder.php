<?php

use App\AttributeDescriptions;
use Illuminate\Database\Seeder;

class AttributeDescriptionTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $attributes = [
            [
                'attribute'=>'Strength', 
                'description'=>'The measure of physical power one has.'
            ],
            [
                'attribute'=>'Dexterity',
                'description'=>'The measure of agiity maneuverability one has.'
            ],
            [
                'attribute'=>'Constitution',
                'description'=>'The measure of endurance and will one has.'
            ],
            [
                'attribute'=>'Intelligence',
                'description'=>'The measure of reasoning and memory one has.'
            ],
            [
                'attribute'=>'Wisedom',
                'description'=>'The measure of ones perception and insight.'
            ],
            [
                'attribute'=>'Charisma',
                'description'=>'The measure of ones clever personality, rhetotic, and silver tongue.'
            ],
        ];

        foreach($attributes as $attribute){
            AttributeDescriptions::create($attribute);
        }
    }
}
