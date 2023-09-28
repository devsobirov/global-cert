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
        Schema::create('certificates', function (Blueprint $table) {
            $table->id();
            $table->string('number')->unique();
            $table->timestamp('issue_date');
            $table->timestamp('expiry_date')->nullable();
            $table->string('address')->nullable();
            $table->string('accreditation')->nullable();
            $table->string('scope_of_work')->nullable();
            $table->string('standard')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('certificates');
    }
};
