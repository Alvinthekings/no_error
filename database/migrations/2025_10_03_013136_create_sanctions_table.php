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
        Schema::create('sanctions', function (Blueprint $table) {
            $table->id();
            $table->enum('severity', ['minor', 'major']);
            $table->string('major_category')->nullable(); // Only for major offenses
            $table->integer('offense_count');
            $table->string('sanction_type');
            $table->text('description');
            $table->timestamps();

            // Add index for efficient querying
            $table->index(['severity', 'major_category', 'offense_count']);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('sanctions');
    }
};
