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
            $table->id();
            $table->string('username');
            $table->string('email')->unique()->nullable();
            $table->string('password');
            $table->timestamps();
        });

        Schema::create('user_profile', function (Blueprint $table){
            $table->id();
            $table->bigInteger('user_id')->unsigned();
            $table->string('nama');
            $table->date('tgl_lahir');
            $table->string('no_hp');
            $table->text('alamat');
            $table->timestamps();
            $table->foreign('user_id')->references('id')->on('users');
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
