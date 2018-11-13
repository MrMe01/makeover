<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateWorkdaysTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('workdays', function (Blueprint $table) {
            $table->increments('id');
            //dias de trabajo de la sucursal
            $table->integer('monday')->unsigned()->default(1);
            $table->integer('tuesday')->unsigned()->default(1);
            $table->integer('wednesday')->unsigned()->default(1);
            $table->integer('thursday')->unsigned()->default(1);
            $table->integer('friday')->unsigned()->default(1);
            $table->integer('saturday')->unsigned()->default(0);
            $table->integer('sunday')->unsigned()->default(0);
            $table->timestamps();
            $table->integer('branch_id')->unsigned();

            $table->foreign('branch_id')->references('id')->on('branches');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('workdays');
    }
}
