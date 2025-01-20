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
        Schema::create('packs', function (Blueprint $table) {
            $table->id();
            $table->string('name_en'); // Name in English
            $table->string('name_zh'); // Name in Chinese
            $table->text('description_en')->nullable(); // Description in English
            $table->text('description_zh')->nullable(); // Description in Chinese
            $table->string('image')->nullable(); // Image
            $table->integer('number_of_purchases')->default(0); // Number of purchases
            $table->integer('number_of_free')->default(0); // Number of free
            $table->date('from_date'); // From Date
            $table->date('to_date'); // To Date
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('packs');
    }
};
