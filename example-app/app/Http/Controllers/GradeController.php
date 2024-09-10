<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Grade;
use App\Models\Student;
use App\Models\Subject;
class GradeController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        // $student_count = Student::all () ->count();
        // $grade_count = Grade::all () ->count();
        // $subject_count = Subject::all () ->count();

        $grades = Grade::paginate(15);
          return view('pages.grade.index', compact('grades'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
          $grade=Grade::find($id);
          $students=Grade::find($id)->students;
          
          return view('pages.grade.show',compact('grade','students',));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
