<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class GuardianController extends Controller
{
    public function edit()
    {
        return view('dashboard.profile', [
            'guardian' => auth()->user()->guardian,
        ]);
    }
}
