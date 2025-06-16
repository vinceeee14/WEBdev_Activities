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

    public function create(){
        return view('students.create');
    }

    public function store(Request $request){
        $request->validate([
            'name' => 'required',
            'age' => 'required|integer',
            'gender' => 'required',



        ]);
        student::create($request->all());
        return redirect('/students')->with('success','Student added succesfully!');
    }
}
