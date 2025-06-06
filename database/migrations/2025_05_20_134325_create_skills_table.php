<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    /**
     * Run the migrations.
     */
    public function up(): void {
        Schema::create('skills', function (Blueprint $table) {
            $table->id();
            $table->foreignId('skill_category_id')
                ->constrained()
                ->cascadeOnDelete();
            $table->string('name');
            $table->string('slug')->unique()->nullable();
            $table->string('emoji')->nullable();
            $table->string('icon')->nullable();
            $table->string('image')->nullable();
            $table->unsignedInteger('proficiency')->default(90);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void {
        Schema::dropIfExists('skills');
    }
};
