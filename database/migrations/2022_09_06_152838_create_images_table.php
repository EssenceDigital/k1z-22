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
         Schema::create('images', function (Blueprint $table) {
             $table->bigIncrements('id');
             $table->unsignedBigInteger('inventory_id');
             $table->foreign('inventory_id')->references('id')->on('inventory');
             $table->text('src');
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
        Schema::dropIfExists('images');
    }
};
