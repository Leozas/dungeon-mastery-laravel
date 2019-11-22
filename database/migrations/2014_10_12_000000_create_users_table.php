<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->bigIncrements('id'); // user_id
            $table->string('username',12)->unique(); // user name, max 12 characters long
            $table->string('first name',12); // first name, max 12 characters long
            $table->string('last name',12); // last name, max 12 characters long
            $table->string('email')->unique(); //email, each has to be unique
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password',12); // password, max 12 characters
            $table->rememberToken();
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
        Schema::dropIfExists('users');
    }
}
