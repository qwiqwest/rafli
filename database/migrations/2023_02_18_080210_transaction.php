<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('transaksi', function (Blueprint $table) {
            $table->id('id_transaksi');
            $table->integer('total_barang');
            $table->integer('total_harga');
            $table->string('nama_barang');
            $table->enum('sistem_pembayaran',['Cash','Credit','Debit'])->default('Cash');
            $table->dateTime('waktu')->nullable(true);
            $table->foreignId('nama_kasir')->references('id')->on('users')->onDelete('cascade');
            $table->rememberToken();
            $table->timestamps();
            $table->foreignId('created_by')->nullable(true)->references('id')->on('users')->onDelete('cascade');
            $table->foreignId('updated_by')->nullable(true)->references('id')->on('users')->onDelete('cascade');
        });

        Schema::table('transaksi', function (Blueprint $table){
            $table->foreignId('kasir_id')->references('id')->on('users')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('barang');
    }
};
