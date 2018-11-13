<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class BranchEmployeeTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('branch_employee', function (Blueprint $table) {
            $table->increments('id');
            //Dias libres del empleado.. Lunes, martes etc
            $table->integer('monday')->unsigned()->default(0);
            $table->integer('tuesday')->unsigned()->default(0);
            $table->integer('wednesday')->unsigned()->default(0);
            $table->integer('thursday')->unsigned()->default(0);
            $table->integer('friday')->unsigned()->default(0);
            $table->integer('saturday')->unsigned()->default(1);
            $table->integer('sunday')->unsigned()->default(1);
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
        Schema::dropIfExists('branch_employee');
    }
}
