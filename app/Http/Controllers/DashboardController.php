<?php

namespace App\Http\Controllers;

class DashboardController extends Controller
{
    public function index()
    {
        return view('dashboard', [
            'guardian' => auth()->user()->guardian,
        ]);
    }
}
