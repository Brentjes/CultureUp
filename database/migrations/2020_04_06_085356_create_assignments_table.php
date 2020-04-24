<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAssignmentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('assignments', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->bigInteger('course_id')->unsigned();
            $table->bigInteger('teacher_id')->unsigned();
            $table->string('name');
            $table->string('subject');
            $table->boolean('isHidden');
            $table->boolean('isLocked');
            $table->string('createdBy');
            $table->timestamps();
            $table->foreign('course_id')->references('id')->on('courses')
                ->onDelete('cascade');
            $table->foreign('teacher_id')->references('id')->on('teachers')
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
        Schema::dropIfExists('assignments');
    }
}
