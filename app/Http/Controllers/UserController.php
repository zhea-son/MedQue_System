<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index(Request $request)
    {
        $depts = \App\Models\Dept::all();

        return view('users.dashboard', compact('depts'));
    }

    public function availability(Request $request)
    {
        $doctors_data = [];
        $doctors = \App\Models\User::role('Doctor')->where('dept_id', $request->dept_id)->get();
        $date = $request->date;

        foreach ($doctors as $doctor) {
            $doc_t = \App\Models\DoctorTime::where('user_id', $doctor->id)->first();

            array_push($doctors_data, [
                'id' => $doctor->id,
                'dept_id' => $doctor->dept_id,
                'name' => $doctor->name,
                'start' => $doc_t->start,
                'end' => $doc_t->end,
                'date' => $date,
                'expected_time' => \App\Models\App::getExpectedTime($date, $doctor->id)
            ]);
        }

        return view('users.availability', compact('doctors_data'));
    }

    public function createAppointment(Request $request)
    {
        $doctor = \App\Models\User::find($request->doctor_id);
        $date = $request->date;

        \App\Models\App::create([
            'expected_time' => $request->expected_time,
            'date' => $date,
            'user_id' => $request->user()->id,
            'doctor_id' => $doctor->id,
            'dept_id' => $doctor->dept_id
        ]);

        return redirect()->route('dashboard')->with('success', 'Appointment booked successfully.');
    }
}
