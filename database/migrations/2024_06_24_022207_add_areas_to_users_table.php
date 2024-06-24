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
        Schema::table('users', function (Blueprint $table) {
            $table->string('Microbiology')->nullable();
            $table->string('Drug_Delivery')->nullable();
            $table->string('Formulation_Development')->nullable();
            $table->string('Bioprocessing')->nullable();
            $table->string('Manufacturing')->nullable();
            $table->string('QA_QC')->nullable();
            $table->string('Biopharma')->nullable();
            $table->string('Packaging_and_Labelling')->nullable();
            $table->string('Regulatory_Affairs')->nullable();
            $table->string('Health_Supply_Chain_Management')->nullable();
            $table->string('Artificial_Intelligence')->nullable();
            $table->string('Analytical_Techniques')->nullable();
            $table->string('Third_party')->nullable();
            $table->string('Digital_version')->nullable();
            $table->string('Webinar_notifications')->nullable();
            $table->string('Printed_Version_of_Magazine')->nullable();
            $table->string('Newsletter')->nullable();
            $table->string('Event_notifications')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('users', function (Blueprint $table) {
            //
        });
    }
};
