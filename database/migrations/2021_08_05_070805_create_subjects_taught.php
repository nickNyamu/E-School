<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSubjectsTaught extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::dropIfExists('subjects_taught');
        Schema::create('subjects_taught', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('subject_id');
            $table->unsignedBigInteger('teacher_id');
            $table->unsignedBigInteger('form_streamCode');
            $table->timestamps();
            $table->foreign('subject_id')
                ->references('id')
                ->on('subjects')
                ->constrained();
            $table->foreign('subject_id')
                ->references('id')
                ->on('subjects')
                ->constrained();
            $table->foreign('form_streamCode')
                ->references('id')
                ->on('forms')
                ->constrained();

            
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('subjects_taught');
    }
}
