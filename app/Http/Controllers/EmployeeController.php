<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Employee;

class EmployeeController extends Controller
{

    public function index()
    {
        $employees = Employee::all();
        return view('admin.employees.index', compact('employees'));
    }

    public function create()
    {
        return view('admin.employees.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'employee_code' => 'required|unique:employees',
            'name' => 'required|string|max:255',
            'today_date' => 'required|date',
            'job_title' => 'required|string|max:255',
            'department' => 'required|string|max:255',
            'direct_manager' => 'required|string|max:255',
            'allowed_loan_limit' => 'required|numeric',
            'date_of_appointment' => 'required|date',
            'leave_balance' => 'required|integer',
            'delay_authorization' => 'boolean',
            'early_leave_permission' => 'boolean',
            'leave_request' => 'boolean',
            'loan_request' => 'boolean',
            'salary_statement_request' => 'boolean',
            'mission_authorization' => 'boolean',
        ]);

        Employee::create($request->all());

        return redirect()->route('admin.employees.index')->with('success', 'Employee created successfully.');
    }
    public function show(Employee $employee)
    {
        return view('admin.employees.show', compact('employee'));
    }

public function destroy(Employee $employee)
{
    $employee->delete();
    return redirect()->route('admin.employees.index')->with('success', 'Employee deleted successfully.');
}
public function edit(Employee $employee)
{
    return view('admin.employees.edit', compact('employee'));
}

public function update(Request $request, Employee $employee)
{
    // Validate the incoming request data
    $request->validate([
        'employee_code' => 'required|string|max:255',
        'name' => 'required|string|max:255',
        'today_date' => 'required|date',
        'job_title' => 'required|string|max:255',
        'department' => 'required|string|max:255',
        'direct_manager' => 'nullable|string|max:255',
        'allowed_loan_limit' => 'required|numeric',
        'date_of_appointment' => 'required|date',
        'leave_balance' => 'required|numeric',
        'delay_authorization' => 'required|boolean',
        'early_leave_permission' => 'required|boolean',
        'leave_request' => 'required|boolean',
        'loan_request' => 'required|boolean',
        'salary_statement_request' => 'required|boolean',
        'mission_authorization' => 'required|boolean',
    ]);

    $employee->update($request->all());

    return redirect()->route('admin.employees.index')->with('success', 'Employee updated successfully.');
}


}
