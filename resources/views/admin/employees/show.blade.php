@extends('layouts.admin')

@section('content')

    <div class="container">
        <!-- Bootstrap Panel for Employee Details -->
        <div class="panel panel-default">
            <div class="panel-heading">
                <h3 class="panel-title">Employee Information</h3>
            </div>
            <div class="panel-body">
                <div class="row">
                    <div class="col-md-6">
                        <p><strong>Employee Code:</strong> {{ $employee->employee_code }}</p>
                        <p><strong>Name:</strong> {{ $employee->name }}</p>
                        <p><strong>Today's Date:</strong> {{ $employee->today_date }}</p>
                        <p><strong>Job Title:</strong> {{ $employee->job_title }}</p>
                        <p><strong>Department:</strong> {{ $employee->department }}</p>
                        <p><strong>Direct Manager:</strong> {{ $employee->direct_manager }}</p>
                        <p><strong>Allowed Loan Limit:</strong> {{ $employee->allowed_loan_limit }}</p>
                    </div>
                    <div class="col-md-6">
                        <p><strong>Date of Appointment:</strong> {{ $employee->date_of_appointment }}</p>
                        <p><strong>Leave Balance:</strong> {{ $employee->leave_balance }}</p>
                        <p><strong>Delay Authorization:</strong> {{ $employee->delay_authorization ? 'Yes' : 'No' }}</p>
                        <p><strong>Early Leave Permission:</strong> {{ $employee->early_leave_permission ? 'Yes' : 'No' }}</p>
                        <p><strong>Leave Request:</strong> {{ $employee->leave_request ? 'Yes' : 'No' }}</p>
                        <p><strong>Loan Request:</strong> {{ $employee->loan_request ? 'Yes' : 'No' }}</p>
                        <p><strong>Salary Statement Request:</strong> {{ $employee->salary_statement_request ? 'Yes' : 'No' }}</p>
                        <p><strong>Mission Authorization:</strong> {{ $employee->mission_authorization ? 'Yes' : 'No' }}</p>
                    </div>
                </div>
            </div>
            <div class="panel-footer">
                <a href="{{ route('admin.employees.index') }}" class="btn btn-primary">Back to Employee List</a>
            </div>
        </div>
    </div>
    @endsection
