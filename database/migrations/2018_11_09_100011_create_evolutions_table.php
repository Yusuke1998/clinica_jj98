<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEvolutionsTable extends Migration
{
    public function up()
    {
        Schema::create('evolutions', function (Blueprint $table) {
            $table->increments('id');
            $table->text('symptom');
            $table->text('treatment');

            $table->integer('user_id')->unsigned();
            $table->integer('casefile_id')->unsigned();
            $table->integer('disease_id')->unsigned();

            $table->foreign('user_id')->references('id')->on('users');
            $table->foreign('casefile_id')->references('id')->on('casefiles')->onDelete('cascade');
            $table->foreign('disease_id')->references('id')->on('diseases')->onDelete('cascade');

            
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('evolutions');
    }
}
