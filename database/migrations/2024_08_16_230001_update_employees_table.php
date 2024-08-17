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
        Schema::table('employees', function (Blueprint $table) {
            $table->id();
            $table->date('date_of_appointment')->nullable();
            $table->integer('leave_balance')->default(0);
            $table->string('employee_code')->unique();
            $table->string('name');
            $table->date('today_date')->default(DB::raw('CURRENT_DATE'));
            $table->string('job_title');
            $table->string('department');
            $table->string('direct_manager')->nullable();
            $table->decimal('allowed_loan_limit', 10, 2)->nullable();
            $table->boolean('delay_authorization')->default(false);
            $table->boolean('early_leave_permission')->default(false);
            $table->boolean('leave_request')->default(false);
            $table->boolean('loan_request')->default(false);
            $table->boolean('salary_statement_request')->default(false);
            $table->boolean('mission_authorization')->default(false);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {

    }
};
