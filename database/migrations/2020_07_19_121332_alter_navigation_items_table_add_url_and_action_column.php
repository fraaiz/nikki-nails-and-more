<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AlterNavigationItemsTableAddUrlAndActionColumn extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up(): void
    {
        Schema::table('navigation_items', static function (Blueprint $table) {
            $table->text('url');
            $table->string('action');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down(): void
    {
        Schema::table('navigation_items', static function (Blueprint $table) {
            $table->dropColumn('url');
            $table->dropColumn('action');
        });
    }
}
