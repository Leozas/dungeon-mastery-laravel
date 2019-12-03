<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCharactersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('characters', function (Blueprint $table) {
            $table->bigIncrements('id'); //
            $table->unsignedBigInteger('player_id');
            $table->text('character_name');
            $table->tinyInteger('strength');
            $table->tinyInteger('dexterity');
            $table->tinyInteger('constitution');
            $table->tinyInteger('intelligence');
            $table->tinyInteger('wisedom');
            $table->tinyInteger('charisma');
            $table->tinyInteger('intitiative');
            $table->tinyInteger('health_points');
            //weapon $table-
            //weapon dmg
            //armor 
            //armorclass
            //spell
            //spell dmg


            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('characters');
    }
}
