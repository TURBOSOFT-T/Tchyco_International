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
        Schema::create('blogs', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            //  $table->string('slug')->unique();
              $table->string('seo_title')->nullable();
              $table->unsignedBigInteger("user_id")->nullable();
              $table->unsignedBigInteger("category_id")->nullable();
              $table->text('excerpt')->nullable();
              $table->text('description');
              $table->text('meta_description')->nullable();
              $table->text('meta_keywords')->nullable();
              $table->boolean('active')->default(false);
              $table->string('image')->nullable();
              $table->string('photo')->nullable();
              $table->json('photos')->nullable();
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('blogs');
    }
};
