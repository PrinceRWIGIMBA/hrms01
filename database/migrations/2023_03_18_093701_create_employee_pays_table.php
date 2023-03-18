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
        Schema::create('employee_pays', function (Blueprint $table) {
            $table->id();
            $table->date('period_paid_for');
            $table->double('amount_paid');
            $table->foreignId('employee_id')->contrained('employees','id')->cascadeOnDelete();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('employee_pays');
    }
};
