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
        Schema::create('mou_details', function (Blueprint $table) {
            $table->id();
            $table->foreignId('mou_id')->nullable()->constrained('mous')->cascadeOnDelete();
            $table->string('foto_kegiatan')->nullable();
            $table->string('keterangan_kegiatan')->nullable();
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('mou_details');
    }
};
