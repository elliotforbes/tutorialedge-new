<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddCourseFkToLessons extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('lessons', function($table){
            $table->integer('course_id')->default(0);
        });
        
        // I cocked up
        // Schema::table('lessons', function($table){
        //     $table->foreign('course_id')->references('id')->on('courses');
        // });
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
