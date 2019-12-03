<?php

use Illuminate\Database\Seeder;
use App\Weapons;


class WeaponsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        
        $weapons = [

            [
                'weapon'=>'Club','weapontype'=>'meele','description'=>'This weapon is usually just a shaped piece of wood, sometimes with a few nails or studs embedded in it.
                ','damage'=>'1d4','damagetype'=>'bludgeoning'
            ],
            [
                'weapon'=>'Dagger','weapontype'=>'meele','description'=>'A dagger is a fighting knife. Its blade is usually less than 1 foot long, and can be curved or straight, with one edge or two. Dagger designs vary widely, and can have many different names (such as a thrusting dagger being called a “dirk”).','damage'=>'1d4','damagetype'=>'piercing'
            ],
            [
                'weapon'=>'Greatclub','weapontype'=>'meele','description'=>'This larger, bulkier version of the common club is heavy enough that you can’t wield it with one hand. It may be ornate and carved, reinforced with metal, or a simple branch from a tree. Like simple clubs, greatclubs have many names, such as cudgels, bludgeons, shillelaghs, and more.','damage'=>'1d8','damagetype'=>'bludgeoning'
            ],
            [
                'weapon'=>'Handaxe','weapontype'=>'meele','description'=>'This one-handed axe is short (roughly 1 foot long) and designed for use with one hand. Unlike throwing axes, it is not well balanced for a graceful tumbling motion, and is instead heavier at its head. Tomahawks, war hatchets, and other such names usually refer to hand axes.','damage'=>'1d6','damagetype'=>'slashing'
            ],
            [
                'weapon'=>'Light Hammer','weapontype'=>'meele','description'=>'A lighter version of a warhammer, this weapon usually has a sleek metal head with one striking surface.','damage'=>'1d4','damagetype'=>'bludgeoning'
            ],
            [
                'weapon'=>'Mace','weapontype'=>'meele','description'=>'A mace is made up of an ornate metal head attached to a simple wooden or metal shaft. The mace’s head is usually flanged to cause more pain or damage. Some more primitive maces are made with stone bound to a wooden haft with leather straps.','damage'=>'1d6','damagetype'=>'bludgeoning'
            ],
            [
                'weapon'=>'Quarterstaff','weapontype'=>'meele','description'=>'A quarterstaff is a simple piece of wood, about 5 feet in length. In battle, it’s held with one hand at the butt and the other a quarter of the way up the staff, allowing it to block blows and make quick strikes.','damage'=>'1d6','damagetype'=>'bludgeoning'
            ],
            [
                'weapon'=>'Sickle','weapontype'=>'meele','description'=>'Originating as a farming tool used for reaping grain, this one-handed weapon has a blade with a strong curve that can easily catch an opponent’s limb or armor. Its blade can be either smooth or serrated, and some fighting sickles are sharpened on both sides near the point, making it easier to hook into an opponent’s flesh.','damage'=>'1d4 ','damagetype'=>'slashing'
            ],
            [
                'weapon'=>'Spear','weapontype'=>'meele','description'=>'A spear is a pole weapon consisting of a shaft, usually of wood, with a pointed head. The head may be simply the sharpened end of the shaft itself, as is the case with fire hardened spears, or it may be made of a more durable material fastened to the shaft, such as flint, obsidian, iron, steel or bronze.','damage'=>'1d6','damagetype'=>'piercing'
            ],
            [
                'weapon'=>'Crossbow, light','weapontype'=>'ranged','description'=>' A crossbow has a wooden stock generally made from yew, ash, hazel or elm and coated with glue or varnish. The ‘bow’ is made of wood, iron or steel. The bow has a span of two to three feet. The crossbow string is made from hemp. The string has been soaked in glue as some protection against moisture. The string is pulled back by using a lever or winding a crank on a ratchet.','damage'=>'1d8 ','damagetype'=>'piercing'
            ],
            [
                'weapon'=>'Dart','weapontype'=>'ranged','description'=>'This thrown weapon is larger than an arrow and shorter than a javelin, with a weighted tip and a shorter range than a javelin. Most darts are wooden shafts with a thick metal point.','damage'=>'1d4','damagetype'=>'piercing'
            ],
            [
                'weapon'=>'Shortbow','weapontype'=>'ranged','description'=>'A shortbow is made up of one piece of wood about 3 feet in length. You need two hands to use a bow, regardless of its size.','damage'=>'1d6','damagetype'=>'piercing'
            ],
            [
                'weapon'=>'Sling','weapontype'=>'ranged','description'=>'A sling is little more than a leather cup attached to a pair of strings. Your Strength modifier applies to damage rolls when you use a sling, just as it does for thrown weapons. You can fire, but not load, a sling with one hand. Loading a sling is a move action that requires two hands and provokes attacks of opportunity.','damage'=>'1d4','damagetype'=>'bludgeoning'
            ],
            [
                'weapon'=>'Battleaxe','weapontype'=>'meele','description'=>'The handle of this axe is long enough that you can wield it one-handed or two-handed. The head may have one blade or two, with blade shapes ranging from half-moons to squared edges like narrower versions of woodcutting axes. The wooden haft may be protected and strengthened with metal bands called langets.','damage'=>'1d8','damagetype'=>'slashing'
            ],
            [
                'weapon'=>'Flail','weapontype'=>'meele','description'=>'A flail consists of a weighted striking end connected to a handle by a sturdy chain. Though often imagined as a ball, sometimes spiked like the head of a morningstar, the head of a flail can actually take many different shapes, such as short bars. Military flails are sturdier evolutions of agricultural flails, which are used for threshing—beating stacks of grains to separate the useful grains from their husks.','damage'=>'1d8','damagetype'=>'bludgeoning'
            ],
            [
                'weapon'=>'Glaive','weapontype'=>'meele','description'=>'A glaive is composed of a simple blade mounted on the end of a pole about 7 feet in length.
                ','damage'=>'1d10','damagetype'=>'slashing'
            ],
            [
                'weapon'=>'Greataxe','weapontype'=>'meele','description'=>'This two-handed battle axe is heavy enough that you can’t wield it with one hand. The head may have one blade or two, and may be “bearded” (meaning hooked or trailing at the bottom) to increase cleaving power and help pull down enemy shields. The haft is usually 3 to 4 feet long.','damage'=>'1d12','damagetype'=>'slashing'
            ],
            [
                'weapon'=>'Greatsword','weapontype'=>'meele','description'=>'This immense two-handed sword is about 5 feet in length. A greatsword may have a dulled lower blade that can be gripped.','damage'=>'2d6','damagetype'=>'slashing'
            ],
            [
                'weapon'=>'Halberd','weapontype'=>'meele','description'=>'','damage'=>'1d10','damagetype'=>'slashing'
            ],
            [
                'weapon'=>'Lance','weapontype'=>'meele','description'=>'','damage'=>'1d12 ','damagetype'=>'piercing'
            ],
            [
                'weapon'=>'Longsword','weapontype'=>'meele','description'=>'','damage'=>'1d8','damagetype'=>'slashing'
            ],
            [
                'weapon'=>'Maul','weapontype'=>'meele','description'=>'','damage'=>'2d6','damagetype'=>'bludgeoning'
            ],
            [
                'weapon'=>'Morningstar','weapontype'=>'meele','description'=>'A lance deals double damage when used from the back of a charging mount. While mounted, you can wield a lance with one hand.','damage'=>'1d8','damagetype'=>'piercing'
            ],
            [
                'weapon'=>'Pike','weapontype'=>'meele','description'=>'A long spear with a heavy wooden shaft 10 to 20 feet (3 to 6 metres) long, tipped by a small leaf-shaped steel point.','damage'=>'1d10','damagetype'=>'piercing'
            ],
            [
                'weapon'=>'Rapier','weapontype'=>'meele','description'=>'A rapier is a long bladed sword, with a very narrow blade, complex hilt and devoted to the thrust. ','damage'=>'1d8','damagetype'=>'piercing'
            ],
            [
                'weapon'=>'Scimitar','weapontype'=>'meele','description'=>'This curved sword is shorter than a longsword and longer than a shortsword. Only the outer edge is sharp, and the back is flat, giving the blade a triangular cross-section.','damage'=>'1d6','damagetype'=>'slashing'
            ],
            [
                'weapon'=>'Shortsword','weapontype'=>'meele','description'=>'Short swords are some of the most common weapons found in any martial society, and thus designs are extremely varied, depending on the region and creator. Most are around 2 feet in length. Their blades can be curved or straight, single- or double-edged, and wide or narrow. Hilts may be ornate or simple, with crossguards, basket hilts, or no guard at all. Such weapons are often used on their own, but can also be paired as a matched set, or used in conjunction with a dagger or longer sword.
                ','damage'=>'1d6','damagetype'=>'piercing'
            ],
            [
                'weapon'=>'Trident','weapontype'=>'meele','description'=>'A trident has three metal prongs at end of a 4-foot-long shaft.','damage'=>'1d6','damagetype'=>'piercing'
            ],
            [
                'weapon'=>'War pick','weapontype'=>'meele','description'=>'A war pick is a reinforced polearm relying on a heavy, generally square head on a long haft that is intended to pierce through armor.','damage'=>'1d8','damagetype'=>'piercing'
            ],
            [
                'weapon'=>'Warhammer','weapontype'=>'meele','description'=>'This weapon consists of a wooden haft and a heavy, metal head. The head may be single (like a carpenter’s hammer) or double (like a sledgehammer). The haft is long enough that you may wield it one- or two-handed. Though heavy and relatively slow to wield, warhammers are capable of delivering immense blows, crushing armor and flesh alike.','damage'=>'1d8','damagetype'=>'bludgeoning'
            ],
            [
                'weapon'=>'Whip','weapontype'=>'meele','description'=>'The whip is treated as a melee weapon with a 15-foot reach, though you don’t threaten the area into which you can make an attack. In addition, unlike most other weapons with reach, you can use it against foes anywhere within your reach (including adjacent foes).','damage'=>'1d4','damagetype'=>'slashing'
            ],
            [
                'weapon'=>'Blowgun','weapontype'=>'ranged','description'=>'Blowguns are generally used to deliver debilitating (but rarely fatal) poisons from a distance. They are nearly silent when fired.','damage'=>'1','damagetype'=>'piercing'
            ],
            [
                'weapon'=>'Crossbow, hand','weapontype'=>'ranged','description'=>'Hand crossbows are small crossbows which could be loaded with a single hand. The loaded bolts had a range of purposes, but most often to contain drow knockout poison. They were easily concealed, and favored by rogues and those who would prefer to use stealth, rather than power.','damage'=>'1d6','damagetype'=>'piercing'
            ],
            [
                'weapon'=>'Crossbow, heavy','weapontype'=>'ranged','description'=>'A heavy crossbow is a larger version of the light crossbow. It is primed with a winch. Although it can be fired with one hand, accuracy is impaired even further than with a light crossbow due to the increased weight. It requires two hands to reload.','damage'=>'1d10','damagetype'=>'piercing'
            ],
            [
                'weapon'=>'Longbow','weapontype'=>'meele','description'=>'to 6 feet (1.2 to 1.8 meters) long with the ends connected by strong cord or a gut string that is a little shorter than the shaft, causing the wood to bend and keep the string under tension. For a composite longbow, the shaft is made from laminated materials (again, horn, wood or bone) and fashioned with a recurve, meaning the bow remains bow-shaped even when unstrung.','damage'=>'1d8','damagetype'=>'piercing'
            ],


        ];

        foreach($weapons as $weapon){
            Weapons::create($weapon);
        }

    }
}
