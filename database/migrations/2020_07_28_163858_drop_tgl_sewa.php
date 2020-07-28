<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class DropTglSewa extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('carts', function (Blueprint $table) {
            $table->dropColumn('tgl_sewa');
            $table->dropColumn('tgl_tempo');
        });

        Schema::table('transactions', function (Blueprint $table) {
            $table->dropColumn('status');
        });

        Schema::table('transactions', function (Blueprint $table) {
            $table->date('tgl_sewa');
            $table->date('tgl_tempo');
            $table->enum('status', ['menunggu', 'pinjam', 'tolak', 'kembali']);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('carts', function (Blueprint $table) {
            //
        });
    }
}
