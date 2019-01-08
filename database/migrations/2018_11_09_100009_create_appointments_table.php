<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAppointmentsTable extends Migration
{
    public function up()
    {
        Schema::create('appointments', function (Blueprint $table) {
            $table->increments('id');

            $table->enum('status',['Pendiente','Completa','Cancelada','No asistio'])->nullable();
            $table->integer('user_id')->unsigned();
            $table->integer('patient_id')->unsigned();
            $table->integer('doctor_id')->unsigned();

            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
            
            $table->foreign('patient_id')->references('id')->on('patients')->onDelete('cascade');

            $table->foreign('doctor_id')->references('id')->on('doctors')->onDelete('cascade');
            
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('appointments');
    }
}
