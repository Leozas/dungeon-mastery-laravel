<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateArmorsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('armors', function (Blueprint $table) {
            $table->bigIncrements('id'); // auto id
            $table->text('armor'); // armor name
            $table->text('description'); // armor description
            $table->text('armorclass'); // armor class (12, 15, 18)
            $table->text('armortype'); // armor type (light, medium, heavy)
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
        Schema::dropIfExists('armors');
    }
}
