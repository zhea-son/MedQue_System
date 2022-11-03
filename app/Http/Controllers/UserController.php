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
}
