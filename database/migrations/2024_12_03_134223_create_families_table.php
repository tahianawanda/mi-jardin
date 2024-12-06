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
        Schema::create('families', function (Blueprint $table) {
            $table->id();

            //Foreign Key for categorys
            $table->unsignedBigInteger('subcategory_id');

            $table->foreign('subcategory_id')
                ->references('id')
                ->on('subcategories')
                ->onUpdate('cascade')
                ->onDelete('cascade');

            // Other columns
            $table->string('name');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('families');
    }
};
