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
        Schema::create('mobile_payments', function (Blueprint $table) {
            $table->integer('transLoID');
            $table->integer('user_id')->nullable();
            $table->tinyInteger('status')->default(0);
            $table->string('TransactionType', 10);
            $table->string('TransID', 10);
            $table->string('TransTime', 14);
            $table->double('TransAmount');
            $table->string('BusinessShortCode', 6);
            $table->string('BillRefNumber', 200);
            $table->string('InvoiceNumber', 6);
            $table->string('OrgAccountBalance', 100);
            $table->string('ThirdPartyTransID', 10);
            $table->string('MSISDN', 14);
            $table->string('FirstName', 10)->nullable();
            $table->string('MiddleName', 10)->nullable();
            $table->string('LastName', 10)->nullable();
            $table->dateTime('lastUpdate')->useCurrent();
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
        Schema::dropIfExists('mobile_payments');
    }
};
