<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateElementsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('elements', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->bigInteger('page_id')->unsigned();
            $table->bigInteger('image_id')->unsigned();
            $table->bigInteger('link_id')->unsigned();
            $table->string('type');
            $table->integer('positionX');
            $table->integer('positionY');
            $table->integer('width');
            $table->integer('height');
            $table->timestamps();

            $table->foreign('page_id')->references('id')->on('pages')
                ->onDelete('cascade');

            $table->foreign('image_id')->references('id')->on('images')
                ->onDelete('cascade');

            $table->foreign('link_id')->references('id')->on('links')
                ->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('elements');
    }
}
