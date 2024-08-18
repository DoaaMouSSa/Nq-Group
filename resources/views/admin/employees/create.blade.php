
@extends('layouts.admin')

@section('content')
    <h1>New employee</h1>
    <form action="{{ route('admin.employees.store') }}" method="POST">
              @csrf
          <div class="modal-body">
            <div class="form-group">
              <label for="employee_code">Employee Code</label>
              <input type="text" class="form-control" id="employee_code" name="employee_code" required>
            </div>
            <div class="form-group">
              <label for="name">Name</label>
              <input type="text" class="form-control" id="name" name="name" required>
            </div>
            <div class="form-group">
              <label for="today_date">Today's Date</label>
              <input type="date" class="form-control" id="today_date" name="today_date" required>
            </div>
            <div class="form-group">
              <label for="job_title">Job Title</label>
              <input type="text" class="form-control" id="job_title" name="job_title" required>
            </div>
            <div class="form-group">
              <label for="department">Department</label>
              <input type="text" class="form-control" id="department" name="department" required>
            </div>
            <div class="form-group">
              <label for="direct_manager">Direct Manager</label>
              <input type="text" class="form-control" id="direct_manager" name="direct_manager" required>
            </div>
            <div class="form-group">
              <label for="allowed_loan_limit">Allowed Loan Limit</label>
              <input type="number" class="form-control" id="allowed_loan_limit" name="allowed_loan_limit" required>
            </div>
            <div class="form-group">
              <label for="date_of_appointment">Date of Appointment</label>
              <input type="date" class="form-control" id="date_of_appointment" name="date_of_appointment" required>
            </div>
            <div class="form-group">
              <label for="leave_balance">Leave Balance</label>
              <input type="number" class="form-control" id="leave_balance" name="leave_balance" required>
            </div>
            <div class="form-group">
              <label for="delay_authorization">Delay Authorization</label>
              <input type="text" class="form-control" id="delay_authorization" name="delay_authorization" required>
            </div>
            <div class="form-group">
              <label for="early_leave_permission">Early Leave Permission</label>
              <input type="text" class="form-control" id="early_leave_permission" name="early_leave_permission" required>
            </div>
            <div class="form-group">
              <label for="leave_request">Leave Request</label>
              <input type="text" class="form-control" id="leave_request" name="leave_request" required>
            </div>
            <div class="form-group">
              <label for="loan_request">Loan Request</label>
              <input type="text" class="form-control" id="loan_request" name="loan_request" required>
            </div>
            <div class="form-group">
              <label for="salary_statement_request">Salary Statement Request</label>
              <input type="text" class="form-control" id="salary_statement_request" name="salary_statement_request" required>
            </div>
            <div class="form-group">
              <label for="mission_authorization">Mission Authorization</label>
              <input type="text" class="form-control" id="mission_authorization" name="mission_authorization" required>
            </div>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            <button type="submit" class="btn btn-primary">Save Employee</button>
          </div>
        </form>

  @endsection
