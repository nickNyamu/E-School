<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateResult extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('result', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('student_id');
            $table->unsignedBigInteger('form_streamCode');
            $table->unsignedBigInteger('exam_id');
            $table->integer('marks');
            $table->string('Grade');
            $table->timestamps();
            $table->foreign('student_id')
                ->references('id')
                ->on('students')
                ->onUpdate('cascade')
                ->onDelete('cascade');
            $table->foreign('form_streamCode')
                ->references('id')
                ->on('forms')
                ->onUpdate('cascade')
                ->onDelete('cascade');
            $table->foreign('exam_id')
                ->references('id')
                ->on('exam')
                ->onUpdate('cascade')
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
        Schema::dropIfExists('result');
    }
}
