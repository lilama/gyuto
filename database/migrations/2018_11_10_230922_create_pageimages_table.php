<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

use App\Models\Pageimage;

class CreatePageimagesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pageimages', function (Blueprint $table) {
            $table->increments('id');
            $table->string('titleFr');
            $table->string('titleEn');
            $table->string('galery');
            $table->string('legendFr');
            $table->string('legendEn');
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
        Schema::dropIfExists('pageimages');
    }
}
