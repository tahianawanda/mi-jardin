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
        Schema::create('characteristics', function (Blueprint $table) {
            $table->id();

            //Key Foreigns
            $table->unsignedBigInteger('plantae_id');

            $table->foreign('plantae_id')
                ->references('id')
                ->on('plantaes')
                ->onUpdate('cascade')
                ->onDelete('cascade');

            //Other columns
            $table->string('leaf_type');
            $table->boolean('flowering');
            $table->string('fruit_type')->nullable();
            $table->string('wood_type')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('characteristics');
    }
};
