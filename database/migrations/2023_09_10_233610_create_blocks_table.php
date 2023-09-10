<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('blocks', function (Blueprint $table) {
            $table->id();

            $table->string('type')->index();
            $table->json('title')->nullable();
            $table->json('description')->nullable();
            $table->integer('order')->nullable();
            $table->string('icon')->nullable();
            $table->string('url')->nullable();
            $table->boolean('status')->nullable()->default(false);

        });
    }

    public function down(): void
    {
        Schema::dropIfExists('blocks');
    }
};
