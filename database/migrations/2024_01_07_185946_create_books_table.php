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
        Schema::create('books', function (Blueprint $table) {
            $table->id();
            $table->string('title', 80);
            $table->string('cover')->default('cover.jpg');
            $table->smallInteger('edition');
            $table->year('year');
            $table->text('description');
            $table->smallInteger('quantity');
            $table->foreignId('author_id')->references('id')->on('authors');
            $table->foreignId('publisher_id')->references('id')->on('publishers');
            $table->foreignId('category_id')->references('id')->on('categories');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('books');
    }
};
