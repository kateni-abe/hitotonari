<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('profiles', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->constrained()->onDelete('cascade');
            $table->string('icon')->nullable();
            $table->date('birthdate')->nullable();
            $table->boolean('birthdate_visibility')->default(true);
            $table->string('birthplace')->nullable();
            $table->boolean('birthplace_visibility')->default(true);
            $table->string('residence')->nullable();
            $table->boolean('residence_visibility')->default(true);
            $table->string('company_name')->nullable();
            $table->boolean('company_name_visibility')->default(true);
            $table->string('industry')->nullable();
            $table->boolean('industry_visibility')->default(true);
            $table->string('position')->nullable();
            $table->boolean('position_visibility')->default(true);
            $table->string('phone_number')->nullable();
            $table->boolean('phone_number_visibility')->default(true);
            $table->string('mobile_number')->nullable();
            $table->boolean('mobile_number_visibility')->default(true);
            $table->string('email')->nullable();
            $table->boolean('email_visibility')->default(true);
            $table->string('facebook_account')->nullable();
            $table->boolean('facebook_account_visibility')->default(true);
            $table->string('x_account')->nullable();
            $table->boolean('x_account_visibility')->default(true);
            $table->string('instagram_account')->nullable();
            $table->boolean('instagram_account_visibility')->default(true);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('profiles');
    }
};