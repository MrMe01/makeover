<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class BranchServiceTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('branch_service', function (Blueprint $table) {
            $table->string('image')->nullable();
            $table->decimal('price');
            $table->longText('description');
            $table->integer('home')->default(1);//si puedo llevar el servicio a casa
            $table->string('time');//duracion del servicio
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
        Schema::dropIfExists('branch_service');
    }
}
