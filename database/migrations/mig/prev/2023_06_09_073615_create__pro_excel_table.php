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
        Schema::create('_pro_excel', function (Blueprint $table) {
            $table->integer('id', true);
            $table->string('code')->nullable();
            $table->string('title', 191)->nullable();
            $table->text('description')->nullable();
            $table->string('availability', 191)->nullable();
            $table->string('condition', 191)->default('new');
            $table->string('price', 191)->nullable();
            $table->string('link', 191);
            $table->string('image_link', 191);
            $table->string('brand', 191);
            $table->string('google_product_category')->nullable();
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
        Schema::dropIfExists('_pro_excel');
    }
};
