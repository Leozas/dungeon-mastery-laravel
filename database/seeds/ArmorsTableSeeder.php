<?php

use App\Armors;
use Illuminate\Database\Seeder;

class ArmorsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $armors = 
        [

            [
                'armor' => 'Padded', 'description' => 'Padded armor consists of quilted layers of cloth and batting.', 'armorclass' => '11', 'armortype' => 'light'
            ],            
            [
                'armor' => 'Leather', 'description' => 'The breastplate and shoulder protectors of this armor are made of leather that has been stiffened by being boiled in oil. The rest of the armor is made of softer and more flexible materials.', 'armorclass' => '11', 'armortype' => 'light'
            ],            
            [
                'armor' => 'Studded Leather', 'description' => 'Made from tough but flexible leather, studded leather is reinforced with close-set rivets or spikes.', 'armorclass' => '12', 'armortype' => 'light'
            ],
            [
                'armor' => 'Hide', 'description' => 'This crude armor consists of thick furs and pelts. It is commonly worn by barbarian tribes, evil humanoids, and other folk who lack access to the tools and materials needed to create better armor.', 'armorclass' => '12', 'armortype' => 'medium'
            ],
            [
                'armor' => 'Chain Shirt', 'description' => 'Made of interlocking metal rings, a chain shirt is worn between layers of clothing or leather. This armor offers modest protection to the wearer\'s upper body and allows the sound of the rings rubbing against one another to be muffled by outer layers.', 'armorclass' => '13', 'armortype' => 'medium'
            ],            
            [
                'armor' => 'Scale Mail', 'description' => 'This armor consists of a coat and leggings (and perhaps a separate skirt) of leather covered with overlapping pieces of metal, much like the scales of a fish. The suit includes gauntlets.', 'armorclass' => '14', 'armortype' => 'medium'
            ],            
            [
                'armor' => 'Breastplate', 'description' => 'This armor consists of a fitted metal chest piece worn with supple leather. Although it leaves the legs and arms relatively unprotected, this armor provides good protection for the wearer\'s vital organs while leaving the wearer relatively unencumbered.', 'armorclass' => '14', 'armortype' => 'medium'
            ],            
            [
                'armor' => 'Half plate', 'description' => 'Half plate consists of shaped metal plates that cover most of the wearer\'s body. It does not include leg protection beyond simple greaves that are attached with leather straps.', 'armorclass' => '15', 'armortype' => 'medium'
            ],            
            [
                'armor' => 'Ring Mail', 'description' => 'This armor is leather armor with heavy rings sewn into it. The rings help reinforce the armor against blows from swords and axes. Ring mail is inferior to chain mail, and it\'s usually worn only by those who can\'t afford better armor.', 'armorclass' => '14', 'armortype' => 'heavy'
            ],            
            [
                'armor' => 'Chain mail', 'description' => 'Made of interlocking metal rings, chain mail includes a layer of quilted fabric worn underneath the mail to prevent chafing and to cushion the impact of blows. The suit includes gauntlets.', 'armorclass' => '16', 'armortype' => 'heavy'
            ],            
            [
                'armor' => 'Splint', 'description' => 'This armor is made of narrow vertical strips of metal riveted to a backing of leather that is worn over cloth padding. Flexible chain mail protects the joints.', 'armorclass' => '17', 'armortype' => 'heavy'
            ],            
            [
                'armor' => 'Plate', 'description' => ' Plate consists of shaped, interlocking metal plates to cover the entire body. A suit of plate includes gauntlets, heavy leather boots, a visored helmet, and thick layers of padding underneath the armor. Buckles and straps distribute the weight over the body.', 'armorclass' => '18', 'armortype' => 'heavy'
            ],            
          
        ];
        
        foreach ($armors as $armor) {
            Armors::create($armor);
        }
    }
}
