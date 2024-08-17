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

    public function edit($id)
    {
        return view('admin.employees.edit', ['id' => $id]);
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

    public function destroy($id)
    {
        Employee::where('id', $id)->delete();
        return redirect('admin/employee/index')->with('danger', 'Delete Data Success');

    }


}
