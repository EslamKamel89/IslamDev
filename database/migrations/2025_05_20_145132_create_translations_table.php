<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    /**
     * Run the migrations.
     */
    public function up(): void {
        Schema::create('translations', function (Blueprint $table) {
            $table->id();
            $table->string('locale', 10);
            $table->string('model_type');
            $table->unsignedBigInteger('model_id');
            $table->string('key');
            $table->text('value')->nullable();
            $table->timestamps();
            $table->unique(['model_type', 'model_id', 'key', 'locale']);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void {
        Schema::dropIfExists('translations');
    }
};
