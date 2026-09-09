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
        if (Schema::hasTable('links') && !Schema::hasColumn('links', 'image')) {
            Schema::table('links', function (Blueprint $table) {
                $table->string('image')->nullable()->after('link');
            });
        }
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        if (Schema::hasTable('links') && Schema::hasColumn('links', 'image')) {
            Schema::table('links', function (Blueprint $table) {
                $table->dropColumn('image');
            });
        }
    }
};
