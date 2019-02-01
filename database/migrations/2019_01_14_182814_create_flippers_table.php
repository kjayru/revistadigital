<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateFlippersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('flippers', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('category_id');
            $table->foreign('category_id')->references('id')->on('categories');

            $table->unsignedInteger('file_id');
            $table->foreign('file_id')->references('id')->on('categories');

            $table->unsignedInteger('gallery_id');
            $table->foreign('gallery_id')->references('id')->on('galleries');

            $table->unsignedInteger('video_id');
            $table->foreign('video_id')->references('id')->on('videos');

            $table->string('month');
            $table->string('year');

            $table->integer('status')->default(0);
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
        Schema::dropIfExists('flippers');
    }
}
