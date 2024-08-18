@extends('layouts.admin')

@section('content')
    <div class="container">
        <h1 class="page-header">Edit Employee</h1>

        <!-- Display Validation Errors -->
        @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <!-- Edit Employee Form -->
        <form action="{{ route('admin.employees.update', $employee->id) }}" method="POST">
            @csrf
            @method('PUT')

            <div class="form-group">
                <label for="employee_code">Employee Code</label>
                <input type="text" class="form-control" id="employee_code" name="employee_code" value="{{ old('employee_code', $employee->employee_code) }}" required>
            </div>

            <div class="form-group">
                <label for="name">Name</label>
                <input type="text" class="form-control" id="name" name="name" value="{{ old('name', $employee->name) }}" required>
            </div>

            <div class="form-group">
                <label for="today_date">Today's Date</label>
                <input type="date" class="form-control" id="today_date" name="today_date" value="{{ old('today_date', $employee->today_date->format('Y-m-d')) }}" required>
            </div>

            <div class="form-group">
                <label for="job_title">Job Title</label>
                <input type="text" class="form-control" id="job_title" name="job_title" value="{{ old('job_title', $employee->job_title) }}" required>
            </div>

            <div class="form-group">
                <label for="department">Department</label>
                <input type="text" class="form-control" id="department" name="department" value="{{ old('department', $employee->department) }}" required>
            </div>

            <div class="form-group">
                <label for="direct_manager">Direct Manager</label>
                <input type="text" class="form-control" id="direct_manager" name="direct_manager" value="{{ old('direct_manager', $employee->direct_manager) }}">
            </div>

            <div class="form-group">
                <label for="allowed_loan_limit">Allowed Loan Limit</label>
                <input type="number" class="form-control" id="allowed_loan_limit" name="allowed_loan_limit" value="{{ old('allowed_loan_limit', $employee->allowed_loan_limit) }}" required>
            </div>

            <div class="form-group">
                <label for="date_of_appointment">Date of Appointment</label>
                <input type="date" class="form-control" id="date_of_appointment" name="date_of_appointment" value="{{ old('date_of_appointment', $employee->date_of_appointment->format('Y-m-d')) }}" required>
            </div>

            <div class="form-group">
                <label for="leave_balance">Leave Balance</label>
                <input type="number" class="form-control" id="leave_balance" name="leave_balance" value="{{ old('leave_balance', $employee->leave_balance) }}" required>
            </div>

            <div class="form-group">
                <label for="delay_authorization">Delay Authorization</label>
                <input type="checkbox" id="delay_authorization" name="delay_authorization" value="1" {{ old('delay_authorization', $employee->delay_authorization) ? 'checked' : '' }}>
            </div>

            <div class="form-group">
                <label for="early_leave_permission">Early Leave Permission</label>
                <input type="checkbox" id="early_leave_permission" name="early_leave_permission" value="1" {{ old('early_leave_permission', $employee->early_leave_permission) ? 'checked' : '' }}>
            </div>

            <div class="form-group">
                <label for="leave_request">Leave Request</label>
                <input type="checkbox" id="leave_request" name="leave_request" value="1" {{ old('leave_request', $employee->leave_request) ? 'checked' : '' }}>
            </div>

            <div class="form-group">
                <label for="loan_request">Loan Request</label>
                <input type="checkbox" id="loan_request" name="loan_request" value="1" {{ old('loan_request', $employee->loan_request) ? 'checked' : '' }}>
            </div>

            <div class="form-group">
                <label for="salary_statement_request">Salary Statement Request</label>
                <input type="checkbox" id="salary_statement_request" name="salary_statement_request" value="1" {{ old('salary_statement_request', $employee->salary_statement_request) ? 'checked' : '' }}>
            </div>

            <div class="form-group">
                <label for="mission_authorization">Mission Authorization</label>
                <input type="checkbox" id="mission_authorization" name="mission_authorization" value="1" {{ old('mission_authorization', $employee->mission_authorization) ? 'checked' : '' }}>
            </div>

            <button type="submit" class="btn btn-primary">Update Employee</button>
            <a href="{{ route('admin.employees.index') }}" class="btn btn-default">Cancel</a>
        </form>
    </div>
    @endsection

