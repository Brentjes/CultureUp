<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCountriesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('countries', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->bigInteger('assignment_id')->unsigned()->nullable();
            $table->string('country_code');
            $table->float('lat', 10, 6);
            $table->float('long', 10, 6);
            $table->string('country');
            $table->timestamps();
            $table->foreign('assignment_id')->references('id')->on('assignments')
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
        Schema::dropIfExists('countries');
    }
}
