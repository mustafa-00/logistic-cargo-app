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
        Schema::create('orders', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->text('short_description');
            $table->integer('quantity');
            $table->float('width');
            $table->float('weight');
            $table->float('height');
            $table->float('lenght');
            $table->string('image');
            $table->string('source_address');
            $table->string('destination_address');
            $table->date('date');
            $table->float('price');
            $table->string('status');
            $table->foreignId('zone_id');
            $table->foreignId('user_id')->nullable();
            $table->foreignId('warehouse_id')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('orders');
    }
};
