<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCoursesStudentTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('courses_student', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('courses_id');
            $table->unsignedBigInteger('student_id');
            $table->integer('test_score')->nullable();
            $table->integer('exam_score')->nullable();
            $table->integer('total_score')->nullable();;
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
        Schema::dropIfExists('courses_student');
    }
}
