<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Subject;
use App\Models\Student;
use App\Models\Grade;
class SubjectController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $student_count = Student::all () ->count();
        $grade_count = Grade::all () ->count();
        $subject_count = Subject::all () ->count();

        $subjects=Subject::paginate(10);
        return view ('pages.subject.index', compact('subjects','student_count','grade_count','subject_count'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $subjects=Subject::pluck("id","subject_name");
        return view("pages.subject.create",compact("subjects"));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
       
        $subject=new Subject;
        $subject->subject_name=$request->input("subject_name");
        $subject->subject_order=$request->input("subject_order");
        $subject->color=$request->input("color");
        $subject->save();
        return redirect ('subjects');   
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $subject = Subject::find($id);
        //  $subject =Subject::find($id)->subjects;
        return view('pages.subject.show', compact('subject'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $subject=Subject::find($id);
        return view('pages.subject.edit',compact('subject'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $subject= Subject ::find($id);;
        $subject->subject_name=$request->input("subject_name");
        $subject->subject_order=$request->input("subject_order");
        $subject->color=$request->input("color");
        $subject->save();
        return redirect ('subjects');  
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $subject=Subject::find($id);
        $subject->delete();
        return redirect ('subjects');
    }
}
