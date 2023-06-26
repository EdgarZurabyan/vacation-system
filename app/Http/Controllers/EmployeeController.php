<?php

namespace App\Http\Controllers;

use App\Models\Employee;
use App\Models\Vacation;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class EmployeeController extends Controller
{
    public function index()
    {
        $employee = Employee::find(1);
        $vacations = $employee->vacations;

        return view('employee.vacation', compact('vacations'));
    }

    public function store(Request $request)
    {
        $employee = Auth::user();
        $employee->vacations()->create([
            'start_date' => $request->input('start_date'),
            'end_date' => $request->input('end_date'),
        ]);

        return redirect('/vacation');
    }

    public function edit()
    {
        $employee = Employee::find(1);
        $vacation = $employee->vacations->first();

        return view('employee.edit', compact('vacation'));
    }

    public function update(Request $request)
    {
        $vacation = Vacation::where('employee_id', 1)->first();

        $vacation->start_date = $request->input('start_date');
        $vacation->end_date = $request->input('end_date');
        $vacation->save();

        return redirect('/vacation');
    }
}

