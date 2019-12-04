<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateWeaponsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('weapons', function (Blueprint $table) {
            $table->bigIncrements('id'); // auto id
            $table->text('weapon'); // weapon name
            $table->text('weapontype'); // meele vs ranged
            $table->text('description'); // weapon description
            $table->text('damage'); // damage (3d6)
            $table->text('damagetype'); // damage type - slashing, piercing, blugeoning.
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
        Schema::dropIfExists('weapons');
    }
}
