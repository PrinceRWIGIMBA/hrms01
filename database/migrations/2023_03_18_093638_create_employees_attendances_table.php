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
        Schema::create('employees_attendances', function (Blueprint $table) {
            $table->id();
            $table->date('attendance_date');
            $table->double('amount');
            $table->boolean('is_paid');
            $table->foreignId('employee_id')->contrained('employees','id')->cascadeOnDelete();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('employees_attendances');
    }
};
