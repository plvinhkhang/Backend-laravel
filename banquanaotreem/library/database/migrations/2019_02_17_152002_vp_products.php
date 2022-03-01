<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class VpProducts extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('vp_products', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('id_type')->unsigned();
            $table->foreign('id_type')
                  ->references('id')
                  ->on('vp_categories')
                  ->onDelete('cascade');
            $table->string('name');
            $table->integer('gia');
            $table->integer('soluong');
            $table->string('mau');
            $table->string('size');
            $table->string('img');
            $table->text('mota');
            $table->integer('noibat');
            $table->tinyInteger('status');
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
        Schema::dropIfExists('vp_products');
    }
}
