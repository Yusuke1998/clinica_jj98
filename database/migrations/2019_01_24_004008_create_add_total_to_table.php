<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAddTotalToTable extends Migration
{
    public function up()
    {
        Schema::table('bills', function (Blueprint $table) {
            $table->addColumn('float', 'total')->after('amountPaylable');
        });
    }

    public function down()
    {
        Schema::table('bills', function (Blueprint $table) {
            //
        });
    }
}
