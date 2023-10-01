<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddInfoSixteenPersonalityTypeIdToSixteenPersonalitiesTable extends Migration
{
    public function up()
    {
        Schema::table('sixteen_personalities', function (Blueprint $table) {
            $table->foreignId('info_sixteen_personality_type_id')->constrained('info_sixteens_personality_types')->after('type');
        });
    }

    public function down()
    {
        Schema::table('sixteen_personalities', function (Blueprint $table) {
            $table->dropConstrainedForeignId('info_sixteen_personality_type_id');
        });
    }
}