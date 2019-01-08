<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDoctorsTable extends Migration
{
    public function up()
    {
        Schema::create('doctors', function (Blueprint $table) {
            $table->increments('id');
            $table->string('firstname');
            $table->string('lastname');
            $table->string('ci');
            $table->string('telephone1')->unique();
            $table->string('telephone2')->nullable();
            $table->string('address1')->unique();
            $table->string('address2')->nullable();
            $table->string('email1')->unique();
            $table->string('email2')->nullable();
            
            $table->integer('user_id')->unsigned()->nullable();
            $table->integer('consultingroom_id')->unsigned()->nullable();
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
            $table->foreign('consultingroom_id')->references('id')->on('consultingrooms')->onDelete('cascade');
            
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('doctors');
    }
}
