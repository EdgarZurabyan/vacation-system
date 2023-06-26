<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Vacation;

class ManagerController extends Controller
{
    public function index()
    {
        $vacations = Vacation::with('employee')->get();

        return view('manager.vacation_records', compact('vacations'));
    }

    public function recordVacation($id)
    {
        $vacation = Vacation::findOrFail($id);
        $vacation->recorded = true;
        $vacation->save();

        return redirect('/vacation/records');
    }
}

