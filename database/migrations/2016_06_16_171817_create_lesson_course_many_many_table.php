<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateLessonCourseManyManyTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('course_lesson', function (Blueprint $table) {
           $table->integer('course_id');
           $table->integer('lesson_id');
           $table->integer('salience');
        });
        
        Schema::table('course_lesson', function ($table){
           $table->foreign('lesson_id')->references('id')->on('lessons');
           $table->foreign('course_id')->references('id')->on('courses'); 
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
}
