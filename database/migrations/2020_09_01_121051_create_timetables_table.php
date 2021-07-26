<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTimetablesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('timetables', function (Blueprint $table) {
            $table->id();
            
            $table->foreignId('academic_id')
                    ->references('id')->on('academics')
                    ->onDelete('cascade');

            $table->foreignId('subject_id')
                    ->references('id')->on('subjects')
                    ->onDelete('cascade');

            $table->foreignId('classroom_id')
                    ->references('id')->on('classrooms')
                    ->onDelete('cascade');

            $table->foreignId('teacher_id')
                    ->references('id')->on('teachers')
                    ->onDelete('cascade');
            $table->string('day');
            $table->string('starttime');
            $table->string('endtime');
                      
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
        Schema::dropIfExists('timetables');
    }
}
