<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Student;
use App\Models\Grade;
use App\Models\Subject;
class StudentController extends Controller


{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $student_count = Student::all () ->count();
        $grade_count = Grade::all () ->count();
        $subject_count = Subject::all () ->count();

        $students=Student::paginate(10);
        return view ('pages.student.index' ,compact('students','student_count','grade_count','subject_count'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $grades=Grade::pluck("grade_name","id");
        return view("pages.student.create",compact("grades"));
        
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $student=new Student;
        $student->first_name=$request->input("first_name");
        $student->last_name=$request->input("last_name");
        $student->grade_id=$request->input("grade_id");
        $student->save();
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $student=Student::find($id);
        
        return view('pages.student.show',compact('student'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $student=Student::find($id);
        $grades=Grade::pluck('grade_name','id');
        return view('pages.student.edit',compact('student','grades'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $student= Student::find($id);
        $student->first_name=$request->input("first_name");
        $student->last_name=$request->input("last_name");
        $student->grade_id=$request->input("grade_id");
        $student->save();
        return redirect ('students');   
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $student=Student::find($id);
        $student->delete();
        return redirect ('students');
    }
}
