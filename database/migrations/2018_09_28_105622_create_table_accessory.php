<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTableAccessory extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('accessories', function (Blueprint $table) {
            $table->increments('id');

            $table->String('accessory_name');
            $table->integer('price');
            $table->String('accessory_image');
            $table->text('details');
            $table->String('accessory_category');
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
        Schema::dropIfExists('accessories');
    }
}
