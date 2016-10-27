<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class MSTITEM extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
      Schema::create('MST_ITEM', function (Blueprint $table) {
          $table->increments('ITEM_ID');
          $table->string('name');
          $table->string('imageurl');
          $table->integer('price');
          $table->string('type');
          $table->integer('COMPANY_ID');
          $table->integer('num');
      });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('MST_ITEM');
    }
}
