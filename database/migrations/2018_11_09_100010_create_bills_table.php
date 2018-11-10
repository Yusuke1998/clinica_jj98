<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBillsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('bills', function (Blueprint $table) {
            $table->increments('id');
            $table->string('code')->unique();
            $table->float('amountPaylable');

            $table->integer('query_id')->unsigned();
            $table->integer('doctor_id')->unsigned();
            $table->integer('patient_id')->unsigned();

            $table->foreign('query_id')->references('id')->on('queries')->onDelete('cascade');

            $table->foreign('doctor_id')->references('id')->on('doctors')->onDelete('cascade');

            $table->foreign('patient_id')->references('id')->on('patients')->onDelete('cascade');

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
        Schema::dropIfExists('bills');
    }
}
