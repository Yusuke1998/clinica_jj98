<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCasefilesTable extends Migration
{
    public function up()
    {
        Schema::create('casefiles', function (Blueprint $table) {
            $table->increments('id');
            $table->string('allergy');
            $table->string('weight');
            $table->string('height');

            $table->date('dayDate');
            $table->string('surgeries')->default('ninguna');

            $table->integer('currentCondition_id')->unsigned();
            $table->integer('inheritedDisease_id')->unsigned()->nullable();
            $table->integer('blood_type_id')->unsigned()->nullable();
            $table->integer('ethnic_group_id')->unsigned()->nullable();
            $table->integer('user_id')->unsigned();
            $table->integer('patient_id')->unsigned();
            $table->foreign('user_id')->references('id')->on('users');
            $table->foreign('patient_id')->references('id')->on('patients')->onDelete('cascade');
            $table->foreign('currentCondition_id')->references('id')->on('diseases');
            $table->foreign('inheritedDisease_id')->references('id')->on('diseases')->onDelete('cascade');

            $table->foreign('blood_type_id')->references('id')->on('blood_type');
            $table->foreign('ethnic_group_id')->references('id')->on('ethnic_group')->onDelete('cascade');

            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('casefiles');
    }
}
