<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateStudentAssignmentTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('student_assignment', function (Blueprint $table) {
            $table->bigInteger('student_id')->unsigned();
            $table->bigInteger('assignment_id')->unsigned();
            $table->timestamps();
            $table->foreign('student_id')->references('id')->on('students')
                ->onDelete('cascade');
            $table->foreign('assignment_id')->references('id')->on('assignments')
                ->onDelete('cascade');
            $table->integer('progress');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('student_assignment');
    }
}
