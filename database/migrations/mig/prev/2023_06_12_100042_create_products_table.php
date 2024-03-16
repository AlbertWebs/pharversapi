<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('products', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('name')->nullable();
            $table->string('pro_condition')->default('New');
            $table->string('slung')->nullable();
            $table->string('video')->nullable();
            $table->string('category')->nullable();
            $table->integer('google_product_category')->default(6552);
            $table->string('brand')->default('Aste');
            $table->tinyInteger('featured')->default(0);
            $table->tinyInteger('trending')->default(1);
            $table->string('banner_position')->nullable();
            $table->string('sku')->nullable();
            $table->string('stock')->nullable()->default('In Stock');
            $table->string('price_raw')->nullable();
            $table->string('price')->nullable();
            $table->text('meta')->nullable();
            $table->text('content')->nullable();
            $table->string('image_one')->nullable();
            $table->string('image_two')->nullable();
            $table->string('image_three')->nullable();
            $table->string('image_four')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('products');
    }
};
