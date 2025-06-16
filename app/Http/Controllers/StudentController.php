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

    public function edit($id)
{
    $student = Student::findOrFail($id);
    return view('students.edit', compact('student'));
}

public function update(Request $request, $id)
{
    $request->validate([
        'name' => 'required',
        'age' => 'required|integer',
        'gender' => 'required',
    ]);

    $student = Student::findOrFail($id);
    $student->update($request->only(['name', 'age', 'gender']));

    return redirect('/students')->with('success', 'Student updated!');
}

public function destroy($id)
{
    $student = Student::findOrFail($id);
    $student->delete();

    return redirect('/students')->with('success', 'Student deleted!');
}

}
