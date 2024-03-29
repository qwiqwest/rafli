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
        Schema::create('carts', function(Blueprint $table){
            $table->id();
            $table->integer('product_qty')->default(1);
            $table->integer('product_price')->default(1);
            $table->integer('user_id')->unsigned();
            $table->timestamps();
        });

        Schema::table('carts', function (Blueprint $table){
            $table->foreignId('product_id')->references('id')->on('barang')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
};
