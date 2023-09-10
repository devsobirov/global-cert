<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('banners', function (Blueprint $table) {
            $table->id();

            $table->json('intro')->nullable();
            $table->json('title')->nullable();
            $table->json('btn_label')->nullable();
            $table->string('image')->nullable();
            $table->string('btn_link')->nullable();
            $table->boolean('is_external_link')->nullable()->default(false);
            $table->integer('order')->nullable();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('banners');
    }
};
