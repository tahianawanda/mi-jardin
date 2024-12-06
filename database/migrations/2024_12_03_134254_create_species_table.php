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
        Schema::create('species', function (Blueprint $table) {
            $table->id();

            //Key Foreigns
            $table->unsignedBigInteger('genre_id');

            $table->foreign('genre_id')
                ->references('id')
                ->on('genres')
                ->onUpdate('cascade')
                ->onDelete('cascade');

            //Other columns
            $table->string('name');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('species');
    }
};
