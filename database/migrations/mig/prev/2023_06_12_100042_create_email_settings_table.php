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
        Schema::create('email_settings', function (Blueprint $table) {
            $table->increments('id');
            $table->string('email', 191)->nullable();
            $table->string('title', 191)->nullable();
            $table->string('site_title', 191);
            $table->string('driver', 191);
            $table->string('host', 191)->nullable();
            $table->string('port', 191)->nullable();
            $table->string('username', 191)->nullable();
            $table->string('password', 191)->nullable();
            $table->string('encryption', 191)->nullable();
            $table->tinyInteger('smtp_status')->default(0);
            $table->binary('email_body')->nullable();
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
        Schema::dropIfExists('email_settings');
    }
};
