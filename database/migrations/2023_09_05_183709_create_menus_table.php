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
        Schema::create('menus', function (Blueprint $table) {
            $table->id();
            $table->string('url')->index()->nullable();
            $table->json('title')->nullable();
            $table->integer('order')->nullable();
            $table->boolean('show_in_footer')
                ->nullable()->default(false);

            $table->foreignId('parent_id')->nullable()
                ->references('id')->on('menus')
                ->nullOnDelete()->cascadeOnUpdate();

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('menus');
    }
};
