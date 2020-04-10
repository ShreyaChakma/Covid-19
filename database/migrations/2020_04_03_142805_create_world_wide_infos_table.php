<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateWorldWideInfosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('world_wide_infos', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('country');
            $table->bigInteger('cases');
            $table->bigInteger('new_cases');
            $table->bigInteger('total_deaths');
            $table->bigInteger('new_deaths');
            $table->bigInteger('recoverd');
            $table->bigInteger('active');
            $table->bigInteger('critical');
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
        Schema::dropIfExists('world_wide_infos');
    }
}
