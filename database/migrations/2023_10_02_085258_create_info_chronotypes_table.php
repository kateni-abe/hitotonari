<?php

// database/migrations/date_info_chronotypes_table.php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateInfoChronotypesTable extends Migration
{
    public function up()
    {
        Schema::create('info_chronotypes', function (Blueprint $table) {
            $table->id();
            $table->string('type');
            $table->text('description');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('info_chronotypes');
    }
}