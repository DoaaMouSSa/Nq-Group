<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Employee extends Model
{
    use HasFactory;

    protected $fillable = [

        'date_of_appointment',
        'leave_balance',
        'employee_code',
        'name',
        'today_date',
        'job_title',
        'department',
        'direct_manager',
        'allowed_loan_limit',
        'delay_authorization',
        'early_leave_permission',
        'leave_request',
        'loan_request',
        'salary_statement_request',
        'mission_authorization'
    ];

    protected $casts = [
        'date_of_appointment' => 'date',
        'today_date' => 'date',
        'allowed_loan_limit' => 'decimal:2',
        'leave_balance' => 'integer',
        'delay_authorization' => 'boolean',
        'early_leave_permission' => 'boolean',
        'leave_request' => 'boolean',
        'loan_request' => 'boolean',
        'salary_statement_request' => 'boolean',
        'mission_authorization' => 'boolean',
    ];


}
