<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Student;

class DashboardController extends Controller
{
    public function index()
    {
        $students = Student::all();
        return view('dashboard', compact('students'));
    }
}
