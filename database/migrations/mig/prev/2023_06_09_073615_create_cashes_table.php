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
        Schema::create('cashes', function (Blueprint $table) {
            $table->unsignedBigInteger('id')->primary();
            $table->string('source')->nullable();
            $table->string('balance')->nullable();
            $table->string('amount')->nullable();
            $table->timestamp('date')->useCurrent();
            $table->string('user')->nullable();
            $table->text('reason')->nullable();
            $table->string('code')->nullable();
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
        Schema::dropIfExists('cashes');
    }
};
