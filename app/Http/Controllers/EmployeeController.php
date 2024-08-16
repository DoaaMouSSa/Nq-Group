<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class EmployeeController extends Controller
{
    public function index()
    {
        $employees = Employee::all();
        return response()->json($employees);
    }

    public function show($id)
    {
        $employee = Employee::find($id);
        if ($employee) {
            return response()->json($employee);
        } else {
            return response()->json(['error' => 'Employee not found'], 404);
        }
    }

    public function store(Request $request)
    {
        $request->validate([
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

        $employee = Employee::create($request->all());
        return response()->json($employee, 201);
    }

    public function update(Request $request, $id)
    {
        $request->validate([
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

        $employee = Employee::find($id);
        if ($employee) {
            $employee->update($request->all());
            return response()->json($employee);
        } else {
            return response()->json(['error' => 'Employee not found'], 404);
        }
    }

    public function destroy($id)
    {
        $employee = Employee::find($id);
        if ($employee) {
            $employee->delete();
            return response()->json(['message' => 'Employee deleted']);
        } else {
            return response()->json(['error' => 'Employee not found'], 404);
        }
    }
}
