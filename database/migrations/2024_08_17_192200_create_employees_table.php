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
        Schema::create('employees', function (Blueprint $table) {
            $table->id();
            $table->string('employee_code')->unique();
            $table->string('name');
            $table->date('today_date');
            $table->string('job_title');
            $table->string('department');
            $table->string('direct_manager');
            $table->decimal('allowed_loan_limit', 10, 2);
            $table->date('date_of_appointment');
            $table->decimal('leave_balance', 10, 2);
            $table->boolean('delay_authorization')->default(false);
            $table->boolean('early_leave_permission')->default(false);
            $table->boolean('leave_request')->default(false);
            $table->boolean('loan_request')->default(false);
            $table->boolean('salary_statement_request')->default(false);
            $table->boolean('mission_authorization')->default(false);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('employees');
    }
};
