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
        Schema::create('navbar_sub_items', function (Blueprint $table) {
            $table->id();
            $table->foreignId('navbar_item_id')->constrained()->onDelete('cascade'); // links to main item
            $table->string('name');
            $table->string('url')->nullable();
            $table->integer('position')->default(0);
            $table->timestamps();
        
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('navbar_sub_items');
    }
};
