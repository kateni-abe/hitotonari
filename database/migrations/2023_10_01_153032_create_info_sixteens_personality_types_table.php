<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateInfoSixteensPersonalityTypesTable extends Migration
{
    public function up()
    {
        Schema::create('info_sixteens_personality_types', function (Blueprint $table) {
            $table->id();
            $table->string('type')->unique(); // 例：INTJ, INFP, ...
            $table->text('description'); // 各タイプの説明や特性
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('info_sixteens_personality_types');
    }
}