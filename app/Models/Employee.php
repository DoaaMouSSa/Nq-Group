<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Employee extends Model
{
    use HasFactory;

    protected $fillable = [

        'employee_code',
        'name',
        'today_date',
        'job_title',
        'department',
        'direct_manager',
        'allowed_loan_limit',
        'date_of_appointment',
        'leave_balance',
        'delay_authorization',
        'early_leave_permission',
        'leave_request',
        'loan_request',
        'salary_statement_request',
        'mission_authorization'
    ];




}
