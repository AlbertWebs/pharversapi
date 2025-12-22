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
        $columns = [
            'Microbiology',
            'Drug_Delivery',
            'Formulation_Development',
            'Bioprocessing',
            'Manufacturing',
            'QA_QC',
            'Biopharma',
            'Packaging_and_Labelling',
            'Regulatory_Affairs',
            'Health_Supply_Chain_Management',
            'Artificial_Intelligence',
            'Analytical_Techniques',
            'Third_party',
            'Digital_version',
            'Webinar_notifications',
            'Printed_Version_of_Magazine',
            'Newsletter',
            'Event_notifications',
        ];

        foreach ($columns as $column) {
            if (!Schema::hasColumn('users', $column)) {
                Schema::table('users', function (Blueprint $table) use ($column) {
                    $table->string($column)->nullable();
                });
            }
        }
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        $columns = [
            'Microbiology',
            'Drug_Delivery',
            'Formulation_Development',
            'Bioprocessing',
            'Manufacturing',
            'QA_QC',
            'Biopharma',
            'Packaging_and_Labelling',
            'Regulatory_Affairs',
            'Health_Supply_Chain_Management',
            'Artificial_Intelligence',
            'Analytical_Techniques',
            'Third_party',
            'Digital_version',
            'Webinar_notifications',
            'Printed_Version_of_Magazine',
            'Newsletter',
            'Event_notifications',
        ];

        foreach ($columns as $column) {
            if (Schema::hasColumn('users', $column)) {
                Schema::table('users', function (Blueprint $table) use ($column) {
                    $table->dropColumn($column);
                });
            }
        }
    }
};
