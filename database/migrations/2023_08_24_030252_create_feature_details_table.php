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
        Schema::create('feature_details', function (Blueprint $table) {
            $table->id('detail_id');
            $table->unsignedBigInteger('feature_id');
            $table->text('description');
            $table->text('example_code');
            $table->timestamps();

            // Add foreign key constraint
            $table->foreign('feature_id')->references('feature_id')->on('features')->onDelete('cascade');
    
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('feature_details');
    }
};
