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
        Schema::create('products', function (Blueprint $table) {
            $table->id();
            $table->string('product')->unique();
            $table->text('description')->nullable();
            $table->text('about')->nullable();
            $table->text('choose_us')->nullable();
            $table->unsignedBigInteger('info_list')->nullable();
            $table->unsignedBigInteger('guidelines')->nullable();
            $table->text('tags')->nullable();
            $table->unsignedBigInteger('img_id')->nullable();
            $table->string('img_alt')->nullable();
            $table->string('seo_title')->nullable();
            $table->text('seo_keywords')->nullable();
            $table->text('seo_description')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('products');
    }
};
