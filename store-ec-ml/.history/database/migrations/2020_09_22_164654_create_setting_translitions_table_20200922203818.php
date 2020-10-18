<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSettingTranslitionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('setting_translitions', function (Blueprint $table) {
          $table->bigIncrements('id');
          $table->unsignedBigInteger('setting_id');
          $table->string('local', 100)->nullable()->default('text');
          $table->longText('value')->nullable()->default('text');
          $table->foreign('setting_id')->references('id')->on('s')->onDelete('cascade');
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
        Schema::dropIfExists('setting_translitions');
    }
}