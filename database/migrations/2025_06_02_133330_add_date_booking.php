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
        Schema::table('booking', function (Blueprint $table) {
            $table->date('booking_date')->default(now());
            $table->unsignedInteger('queue_number')->nullable();
            $table->time('estimated_time')->nullable();
            $table->string('qr_code_path')->nullable(); 
            $table->string('pdf_path')->nullable(); 
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('booking', function (Blueprint $table) {
            $table->dropColumn(['booking_date', 'queue_number', 'estimated_time', 'qr_code_path', 'pdf_path']);
        });
    }
};
