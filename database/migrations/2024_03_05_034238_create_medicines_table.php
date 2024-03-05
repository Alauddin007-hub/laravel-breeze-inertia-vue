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
        Schema::create('madicines', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->tinyInteger('category_id')->nullable();
            $table->string('brand');
            $table->string('purchase_price');
            $table->string('discount')->nullable();
            $table->string('selling_price');
            $table->string('stock')->nullable();
            $table->timestamp('created_at')->useCurrent();
            $table->timestamp('updated_at')->useCurrent(); 
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('madicines');           
    }
};
