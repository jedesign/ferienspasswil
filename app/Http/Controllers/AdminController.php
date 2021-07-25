<?php

namespace App\Http\Controllers;


use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;

class AdminController extends Controller
{
    public function index(): Factory|View|Application
    {
        return view('admin.index', [
            'employee' => auth()->user()->employee,
        ]);
    }

    public function showCourses(): Factory|View|Application
    {
        return view('admin.courses');
    }
}
