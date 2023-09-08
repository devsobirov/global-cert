<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{

    public function up(): void
    {
        Schema::create('pages', function (Blueprint $table) {
            $table->id();

            $table->string('slug')->unique();
            $table->json('meta_title')->nullable();
            $table->json('meta_description')->nullable();
            $table->json('title')->nullable();
            $table->json('content')->nullable();
            $table->string('header_img')->nullable();
            $table->integer('menu_order')->nullable();
            $table->foreignId('menu_id')->nullable()
                ->references('id')->on('menus')
                ->nullOnDelete()->cascadeOnUpdate();

            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('pages');
    }
};
