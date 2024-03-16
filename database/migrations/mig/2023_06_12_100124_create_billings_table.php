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
        Schema::create('billings', function (Blueprint $table) {
            $table->unsignedBigInteger('id')->primary();
            $table->string('reference', 11)->nullable();
            $table->string('transID')->nullable();
            $table->string('group_id')->nullable();
            $table->string('group_role')->nullable();
            $table->string('original_payment')->nullable();
            $table->string('student');
            $table->text('note');
            $table->integer('balance')->default(0);
            $table->integer('course_id');
            $table->integer('amount')->nullable();
            $table->text('description')->nullable();
            $table->timestamp('due')->nullable()->useCurrent();
            $table->text('title')->nullable();
            $table->string('paid')->nullable();
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
        Schema::dropIfExists('billings');
    }
};
