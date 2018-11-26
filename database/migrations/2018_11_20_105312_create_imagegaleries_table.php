<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateImagegaleriesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('imagegaleries', function (Blueprint $table) {
            $table->increments('id');
            $table->string('titleFr');
            $table->string('titleEn');
            $table->string('legendFr');
            $table->string('legendEn');
            $table->string('nameImage');
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
        Schema::dropIfExists('imagegaleries');
    }
}
