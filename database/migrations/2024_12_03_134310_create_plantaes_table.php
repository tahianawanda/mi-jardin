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
        Schema::create('plantaes', function (Blueprint $table) {
            $table->id();

            //Key Foreigns
            $table->unsignedBigInteger('kingdoms_id');

            $table->foreign('kingdoms_id')
                ->references('id')
                ->on('kingdoms')
                ->onUpdate('cascade')
                ->onDelete('cascade');

            $table->unsignedBigInteger('categories_id');

            $table->foreign('categories_id')
                ->references('id')
                ->on('categories')
                ->onUpdate('cascade')
                ->onDelete('cascade');

            //Other columns
            $table->string('name');
            $table->string('scientific_name');
            $table->string('type');
            $table->string('growth_habit');
            $table->string('native_region');
            $table->text('description')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('plantaes');
    }
};
