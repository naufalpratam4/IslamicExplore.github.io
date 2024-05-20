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
        Schema::create('sub_materis', function (Blueprint $table) {
            $table->id();
            $table->string('nama_sub_materi');
            $table->string('video');
            $table->unsignedBigInteger('materi_id')->nullable();
            $table->timestamps();
            $table->foreign('materi_id')->references('id')->on('materis')->onDelete('CASCADE');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('sub_materis');
    }
};
