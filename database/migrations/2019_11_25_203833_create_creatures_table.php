<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCreaturesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('creatures', function (Blueprint $table) {
            $table->bigIncrements('id'); //
            $table->text('creature_name');
            $table->tinyInteger('strength');
            $table->tinyInteger('dexterity');
            $table->tinyInteger('constitution');
            $table->tinyInteger('intelligence');
            $table->tinyInteger('wisedom');
            $table->tinyInteger('charisma');
            $table->tinyInteger('intitiative');
            $table->tinyInteger('health_points');
            $table->text('weapon');//weapon
            $table->text('weapon_damage');//weapon
            $table->text('armor');
            $table->text('armor_class');
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
        Schema::dropIfExists('creatures');
    }
}
