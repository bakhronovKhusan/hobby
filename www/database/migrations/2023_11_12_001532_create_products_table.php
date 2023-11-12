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
            $table->id(); // uint, autoincrement
            $table->string('article')->unique(); // varchar(255), unique index
            $table->string('name'); // varchar(255)
            $table->string('status')->default('available'); // varchar(255) "available" | "unavailable"
            $table->jsonb('data'); // jsonb with different fields like Color, Size
            $table->timestamps(); // created_at and updated_at timestamps
            $table->softDeletes(); // Soft delete column (deleted_at)
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
