<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTreatmentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up(): void
    {
        Schema::create('treatments', static function (Blueprint $table) {
            $table->id();
            $table->boolean('enabled')->default(true);
            $table->boolean('in_menu')->default(true);
            $table->string('title');
            $table->longText('content');
            $table->string('slug')->unique();
            $table->foreignId('last_edit_by')->nullable()->constrained('users')->nullOnDelete();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down(): void
    {
        Schema::dropIfExists('treatments');
    }
}
