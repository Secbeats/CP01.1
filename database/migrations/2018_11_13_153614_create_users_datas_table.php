<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsersDatasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users_data', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('user_id');
            $table->string('country');
            $table->string('zip')->nullable();
            $table->string('address');
            $table->string('contact');
            $table->string('gender');
            $table->string('organization')->nullable();
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
        Schema::dropIfExists('users_data');
    }
}
