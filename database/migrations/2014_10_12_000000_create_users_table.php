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
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('fname')->nullable();
            $table->string('lname')->nullable();
            $table->string('title')->nullable();
            $table->string('terms')->nullable();
            $table->string('country_code')->nullable();
            $table->string('organization')->nullable();
            $table->string('phone')->nullable();
            $table->text('areas_of_interest')->nullable();
            $table->string('Job_function')->nullable();
            $table->string('other_Job_function')->nullable();
            $table->string('other_areas_of_interest')->nullable();
            $table->text('subscription_options')->nullable();
            $table->string('subscription_status')->nullable();
            $table->string('state')->nullable();
            $table->string('username')->nullable();
            $table->string('expertise')->nullable();
            $table->string('company_id')->nullable();
            $table->string('email')->unique();
            $table->string('image')->nullable();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password');
            $table->tinyInteger('is_admin')->default(0);
            $table->string('country')->nullable();
            $table->string('city')->nullable();
            $table->tinyInteger('status')->nullable()->default(1);
            $table->string('address')->nullable();
            $table->string('mobile')->nullable();
            $table->text('content')->nullable();
            $table->tinyInteger('type')->default(0);
            $table->rememberToken();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('users');
    }
};
