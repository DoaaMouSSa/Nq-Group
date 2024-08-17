<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class EmployeeController extends Controller
{
    public function index()
    {
        $employees = Employee::all();
        return view('admin.employee.index', compact('employees'));
    }


    public function store(Request $request)
    {
        $data=$request->validate([
            'date_of_appointment' => 'required|date',
            'leave_balance' => 'required|integer',
            'employee_code' => 'required|string|unique:employees',
            'name' => 'required|string',
            'today_date' => 'required|date',
            'job_title' => 'required|string',
            'department' => 'required|string',
            'direct_manager' => 'nullable|string',
            'allowed_loan_limit' => 'nullable|numeric',
            'delay_authorization' => 'required|boolean',
            'early_leave_permission' => 'required|boolean',
            'leave_request' => 'required|boolean',
            'loan_request' => 'required|boolean',
            'salary_statement_request' => 'required|boolean',
            'mission_authorization' => 'required|boolean',
        ]);

        $employee = Employee::create($data);
        return redirect('admin/employee/index')->with('success', 'Insert Data Success');
    }
    public function show($id)
    {
        $employee = Employee::findOrFail($id);
        return view('single', compact('employee'));
    }

    public function edit(string $id)
    {
        $employee=Employee::get();
        $employee=Employee::findOrFail($id);
        return view('admin.employees.edit', compact('employees'));
    }
    public function update(Request $request, string $id)
    {
        $data=$request->validate([
            'date_of_appointment' => 'sometimes|date',
            'leave_balance' => 'sometimes|integer',
            'employee_code' => 'sometimes|string|unique:employees,employee_code,' . $id,
            'name' => 'sometimes|string',
            'today_date' => 'sometimes|date',
            'job_title' => 'sometimes|string',
            'department' => 'sometimes|string',
            'direct_manager' => 'nullable|string',
            'allowed_loan_limit' => 'nullable|numeric',
            'delay_authorization' => 'sometimes|boolean',
            'early_leave_permission' => 'sometimes|boolean',
            'leave_request' => 'sometimes|boolean',
            'loan_request' => 'sometimes|boolean',
            'salary_statement_request' => 'sometimes|boolean',
            'mission_authorization' => 'sometimes|boolean',
        ]);
        Employee::where('id', $id)->update($data);
        return redirect('admin/employee/index')->with('success', 'Insert Data Success');
    }

    public function destroy($id)
    {
        Employee::where('id', $id)->delete();
        return redirect('admin/employee/index')->with('danger', 'Delete Data Success');

    }


}
