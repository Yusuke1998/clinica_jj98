<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDoctorPatientTable extends Migration
{
    public function up()
    {
        Schema::create('doctor_patient', function (Blueprint $table) {
            $table->increments('id');
            
            $table->integer('doctor_id')->unsigned();
            $table->integer('patient_id')->unsigned();

            $table->foreign('doctor_id')->references('id')->on('doctors');
            $table->foreign('patient_id')->references('id')->on('patients');

            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('doctor_patient');
    }
}
