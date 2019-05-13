<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateItemsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('items', function (Blueprint $table) {
            $table->increments('id');

            $table->string('title');
            $table->integer('hidetitle')->nullable();
            $table->string('background')->nullable();
            $table->string('backmovil')->nullable();

            $table->string('max1366')->nullable();
            $table->string('max1024')->nullable();
            $table->string('max768')->nullable();
            $table->string('max640')->nullable();
            $table->string('max480')->nullable();

            $table->string('description')->nullable();
            $table->string('subtitle')->nullable();
            $table->string('url')->nullable();
            $table->integer('external_url')->nullable();
            $table->integer('state')->default(1);
            $table->unsignedInteger('slider_id');
            $table->foreign('slider_id')->references('id')->on('sliders');

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
        Schema::dropIfExists('items');
    }
}
