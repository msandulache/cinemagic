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
        Schema::create('movies', function (Blueprint $table) {
            $table->id();
            $table->integer('tmdb_id');
            $table->string('title');
            $table->text('overview');
            $table->string('poster_path');
            $table->string('trailer');
            $table->integer('vote_count');
            $table->float('vote_average');
            $table->string('facebook_id')->nullable();
            $table->string('twitter_id')->nullable();
            $table->string('instagram_id')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('movies');
    }
};
