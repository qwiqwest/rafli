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
        Schema::create('member', function (Blueprint $table) {
            $table->id('id');
            $table->string('nama_member');
            $table->string('email')->unique();
            $table->integer('usia');
            $table->enum('jenis_kelamin',['L','P']);
            $table->string('alamat');
            $table->string('nomor_telepon');
            $table->integer('barcode');
            $table->enum('level',['Silver','Gold','Platinum'])->default('Silver');
            $table->rememberToken();
            $table->timestamps();
            $table->foreignId('created_by')->nullable(true)->references('id')->on('users')->onDelete('cascade');
            $table->foreignId('updated_by')->nullable(true)->references('id')->on('users')->onDelete('cascade');
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
