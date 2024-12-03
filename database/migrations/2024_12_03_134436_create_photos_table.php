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
        Schema::create('photos', function (Blueprint $table) {
            $table->id();

            //Key Foreigns
            $table->unsignedBigInteger('plantaes_id');

            $table->foreign('plantaes_id')
                ->references('id')
                ->on('plantaes')
                ->onUpdate('cascade')
                ->onDelete('cascade');

            //Other columns
            $table->string('url');
            $table->text('description')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('photos');
    }
};
