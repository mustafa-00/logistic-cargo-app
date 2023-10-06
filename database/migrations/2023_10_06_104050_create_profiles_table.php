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
            $table->string('profile_image');
            $table->string('fullname');
            $table->text('about');
            $table->string('job');
            $table->string('phone');
            $table->string('email');
            $table->string('address');
            $table->text('facebook_link');
            $table->text('twitter_link');
            $table->text('linkedin_link');
            $table->text('instagram_link');
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
