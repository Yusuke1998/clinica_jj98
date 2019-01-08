<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateConsultingroomsTable extends Migration
{
    public function up()
    {
        Schema::create('consultingrooms', function (Blueprint $table) {
            $table->increments('id');
            $table->string('number')->unique();
            $table->string('location');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('consultingrooms');
    }
}
