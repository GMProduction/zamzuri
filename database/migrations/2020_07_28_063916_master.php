<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Master extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('products', function (Blueprint $table) {
            $table->id();
            $table->string('nama');
            $table->integer('harga');
            $table->text('deskripsi');
            $table->timestamps();
        });

        Schema::create('promos', function (Blueprint $table) {
            $table->id();
            $table->string('code')->unique();
            $table->string('nama');
            $table->integer('nominal');
            $table->timestamps();
        });

        Schema::create('vendors', function (Blueprint $table) {
            $table->id();
            $table->string('nama');
            $table->timestamps();
        });



        Schema::create('transactions', function (Blueprint $table) {
            $table->id();
            $table->string('no_transaksi');
            $table->integer('discount');
            $table->integer('nominal');
            $table->enum('status', ['0', '1', '2'])->default('0');
            $table->timestamps();
        });

        Schema::create('carts', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('user_id')->unsigned();
            $table->bigInteger('transactions_id')->unsigned()->nullable();
            $table->date('tgl_sewa');
            $table->date('tgl_tempo');
            $table->integer('harga');
            $table->integer('qty');
            $table->timestamps();
            $table->foreign('user_id')->references('id')->on('users');
            $table->foreign('transactions_id')->references('id')->on('transactions');
        });

        Schema::create('payments', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('transactions_id')->unsigned();
            $table->bigInteger('vendors_id')->unsigned();
            $table->bigInteger('user_id')->unsigned();
            $table->string('url');
            $table->text('description');
            $table->enum('status', ['0', '1', '2'])->default('0');
            $table->timestamps();
            $table->foreign('user_id')->references('id')->on('users');
            $table->foreign('vendors_id')->references('id')->on('vendors');
            $table->foreign('transactions_id')->references('id')->on('transactions');
        });

    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('product');
    }
}
