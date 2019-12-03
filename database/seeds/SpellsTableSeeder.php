<?php

use Illuminate\Database\Seeder;

class SpellsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        $spells = [

            [
                [
                    'spell' => 'Arms of Hadar', 'description' => 'You invoke the power of Hadar, the Dark Hunger. Tendrils of dark energy erupt from you and batter all creatures within 10 feet of you. Each creature in that area must make a Strength saving throw. On a failed save, a target takes 2d6 necrotic damage and can’t take reactions until its next turn. On a successful save, the creature takes half damage, but suffers no other effect.', 'range' => 'Self (10-foot radius)', 'damage' => '2d6', 'damagetype' => 'necrotic'
                ],
                [
                    'spell' => 'Blinding Smite', 'description' => 'The next time you hit a creature with a melee weapon attack during this spell’s duration, your weapon flares with bright light, and the attack deals an extra 3d8 radiant damage to the target. Additionally, the target must succeed on a Constitution saving throw or be blinded until the spell ends.

                    A creature blinded by this spell makes another Constitution saving throw at the end of each of its turns. On a successful save, it is no longer blinded.', 'range' => 'Self', 'damage' => '3d8', 'damagetype' => 'radiant'
                ],
                [
                    'spell' => 'Burning Hands', 'description' => 'As you hold your hands with thumbs touching and fingers spread, a thin sheet of flames shoots forth from your outstretched fingertips. Each creature in a 15-foot cone must make a Dexterity saving throw. A creature takes 3d6 fire damage on a failed save, or half as much damage on a successful one.', 'range' => 'Self (15-foot cone)', 'damage' => '3d6', 'damagetype' => 'fire'
                ],
                [
                    'spell' => 'Chill Touch', 'description' => 'You create a ghostly, skeletal hand in the space of a creature within range. Make a ranged spell attack against the creature to assail it with the chill of the grave. On a hit, the target takes 1d8 necrotic damage, and it can’t regain hit points until the start of your next turn. Until then, the hand clings to the target.

                    If you hit an undead target, it also has disadvantage on attack rolls against you until the end of your next turn.', 'range' => '120 feet', 'damage' => '1d8', 'damagetype' => 'necrotic damage'
                ],
                [
                    'spell' => 'Chromatic Orb', 'description' => 'You hurl a 4-inch-diameter sphere of energy at a creature that you can see within range. You choose acid, cold, fire, lightning, poison, or thunder for the type of orb you create, and then make a ranged spell attack against the target. If the attack hits, the creature takes 3d8 damage of the type you chose.', 'range' => '90 feet', 'damage' => '3d8', 'damagetype' => 'Acid, Cold, Fire,Lightning, Poison, or Thunder'
                ],
                [
                    'spell' => 'Guiding Bolt', 'description' => '
                    A flash of light streaks toward a creature of your choice within range. Make a ranged spell attack against the target. On a hit, the target takes 4d6 radiant damage, and the next attack roll made against this target before the end of your next turn has advantage, thanks to the mystical dim light glittering on the target until then.', 'range' => '120 feet', 'damage' => '4d6', 'damagetype' => 'radiant'
                ],
                [            
                    'spell' => 'Inflict Wounds', 'description' => 'Make a melee spell attack against a creature you can reach. On a hit, the target takes 3d10 necrotic damage.', 'range' => 'Touch', 'damage' => '3d10', 'damagetype' => 'necrotic'
                ],
                [            
                    'spell' => 'Magic Missile', 'description' => 'You create three glowing darts of magical force. Each dart hits a creature of your choice that you can see within range. A dart deals 1d4 + 1 force damage to its target. The darts all strike simultaneously, and you can direct them to hit one creature or several.', 'range' => '120 feet', 'damage' => '1d4 + 1 * 3', 'damagetype' => 'force'
                ],
                [            
                    'spell' => 'Ray of Sickness', 'description' => 'A ray of sickening greenish energy lashes out toward a creature within range. Make a ranged spell attack against the target. On a hit, the target takes 2d8 poison damage and must make a Constitution saving throw. On a failed save, it is also poisoned until the end of your next turn.', 'range' => '60', 'damage' => '2d8', 'damagetype' => 'poison'
                ],
                [            
                    'spell' => 'Witches Bolt', 'description' => 'A beam of crackling, blue energy lances out toward a creature within range, forming a sustained arc of lightning between you and the target. Make a ranged spell attack against that creature. On a hit, the target takes 1d12 lightning damage, and on each of your turns for the duration, you can use your action to deal 1d12 lightning damage to the target automatically. The spell ends if you use your action to do anything else. The spell also ends if the target is ever outside the spell’s range or if it has total cover from you.', 'range' => '30 feet', 'damage' => '1d12', 'damagetype' => 'lightning'
                ],
                [            
                    'spell' => 'Melf’s Acid Arrow', 'description' => 'A shimmering green arrow streaks toward a target within range and bursts in a spray of acid. Make a ranged spell attack against the target. On a hit, the target takes 4d4 acid damage immediately and 2d4 acid damage at the end of its next turn. On a miss, the arrow splashes the target with acid for half as much of the initial damage and no damage at the end of its next turn.', 'range' => '90', 'damage' => '4d4, 2d4', 'damagetype' => 'poison'
                ],
                [            
                    'spell' => 'corching Ray', 'description' => 'You create three rays of fire and hurl them at targets within range. You can hurl them at one target or several.

                    Make a ranged spell attack for each ray. On a hit, the target takes 2d6 fire damage.', 'range' => '120', 'damage' => '2d6 * 3', 'damagetype' => 'fire'
                ],
                [            
                    'spell' => 'Fireball', 'description' => 'A bright streak flashes from your pointing finger to a point you choose within range and then blossoms with a low roar into an explosion of flame. Each creature in a 20-foot-radius sphere centered on that point must make a Dexterity saving throw. A target takes 8d6 fire damage on a failed save, or half as much damage on a successful one.

                    The fire spreads around corners. It ignites flammable objects in the area that aren’t being worn or carried.', 'range' => '150, 20 foot impact radius', 'damage' => '8d6', 'damagetype' => 'fire'
                ],
                [            
                    'spell' => 'Lightning Bolt', 'description' => 'A stroke of lightning forming a line 100 feet long and 5 feet wide blasts out from you in a direction you choose. Each creature in the line must make a Dexterity saving throw. A creature takes 8d6 lightning damage on a failed save, or half as much damage on a successful one.', 'range' => 'Self, 100 foot line impact', 'damage' => '8d6, 4d6', 'damagetype' => 'lightning'
                ],
                [            
                    'spell' => 'Vampiric Touch', 'description' => 'The touch of your shadow-wreathed hand can siphon life force from others to heal your wounds. Make a melee spell attack against a creature within your reach. On a hit, the target takes 3d6 necrotic damage, and you regain hit points equal to half the amount of necrotic damage dealt. Until the spell ends, you can make the attack again on each of your turns as an action.', 'range' => 'Touch', 'damage' => '3d6', 'damagetype' => 'necrotic touch'
                ],
            ],

        ];
    }
}
