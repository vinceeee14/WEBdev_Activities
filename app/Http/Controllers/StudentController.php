<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Student;

class StudentController extends Controller
{
    
    public function index(){
        $students = Student::all();
        return view('students.index',compact('students'));
    }
}
