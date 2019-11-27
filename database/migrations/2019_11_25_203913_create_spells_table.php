<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSpellsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('spells', function (Blueprint $table) {
            $table->bigIncrements('id'); // auto id
            $table->string('spell'); // spell name
            $table->string('description'); // spell description
            $table->string('range'); // spells range
            $table->string('damage'); // damage (3d6)
            $table->string('damagetype'); // damage type - slashing, piercing, blugeoning.
            $table->timestamps(); // auto creation timestamp
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('spells');
    }
}
