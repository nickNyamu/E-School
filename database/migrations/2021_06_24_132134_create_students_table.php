<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateStudentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('students', function (Blueprint $table) {
            $table->id();
            $table->string('fname');
            $table->string('lname');
            $table->string('dob');
            $table->string('marks');
            $table->unsignedBigInteger('parent_id');
            $table->unsignedBigInteger('forms_streamCode');
            $table->timestamps();
            $table->foreign('parent_id')
                ->references('id')
                ->on('guardians')
                ->onUpdate('cascade')
                ->onDelete('cascade');
            $table->foreign('forms_streamCode')
                ->references('id')
                ->on('forms')
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
        Schema::dropIfExists('students');
    }
}
