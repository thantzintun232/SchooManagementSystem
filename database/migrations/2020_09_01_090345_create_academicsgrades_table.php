<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAcademicsgradesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('academicsgrades', function (Blueprint $table) {
            $table->id();
            $table->foreignId('academic_id')
                    ->references('id')->on('academics')
                    ->onDelete('cascade');
            $table->foreignId('grade_id')
                    ->references('id')->on('grades')
                    ->onDelete('cascade');
            $table->softDeletes();
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
        Schema::dropIfExists('academicsgrades');
    }
}
