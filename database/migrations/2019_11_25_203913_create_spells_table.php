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
            $table->text('spell'); // spell name
            $table->text('description'); // spell description
            $table->text('range'); // spells range
            $table->text('damage'); // damage (3d6)
            $table->text('damagetype'); // damage type - fire, necrotic, radiant, etc
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
