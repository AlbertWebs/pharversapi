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
        if (Schema::hasTable('blogs') && !Schema::hasColumn('blogs', 'featured')) {
            Schema::table('blogs', function (Blueprint $table) {
                $table->tinyInteger('featured')->default(0)->after('type');
            });
        }
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        if (Schema::hasTable('blogs') && Schema::hasColumn('blogs', 'featured')) {
            Schema::table('blogs', function (Blueprint $table) {
                $table->dropColumn('featured');
            });
        }
    }
};
