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
        Schema::create('advertisements', function (Blueprint $table) {
            $table->id();
            $table->boolean('active')->default(true);
            $table->string('title')->unique();
            $table->string('date')->unique();
            $table->string('url')->unique();
            $table->text('dimension')->nullable();
            $table->text('page')->nullable();
            $table->text('placement')->nullable();
            $table->string('author')->nullable();
            $table->string('image')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('advertisements');
    }
};
