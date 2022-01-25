<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCoursesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('courses', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('url');
            $table->text('heading');
            $table->text('sub_heading');
            $table->text('meta_title');
            $table->text('meta_description');
            $table->text('keywords');
            $table->text('content');
            $table->text('syllabus');
            $table->text('requirements');
            $table->text('duration');
            $table->text('price');
            $table->text('level')->nullable();
            $table->text('medium')->nullable();
            $table->integer('course_type_id');
            $table->integer('instructor_id');
            $table->string('image');
            $table->integer('course_order')->nullable();
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
        Schema::dropIfExists('courses');
    }
}
