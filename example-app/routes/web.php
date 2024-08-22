<?php

use Illuminate\Support\Facades\Route;
use App\Models\Student;
use App\Models\Grade;
use App\Models\Subject;


Route::get('/', function () {
    return view('welcome');
});


 Route::get('/students', function () {
    $students=Student::all();
    // // $students = DB::table('students')->get();
    // $students = DB::raw("select*from*student")->get();
    // dd($student);
    return view ('student.index', compact('students'));
 });

  Route::get('/student/{id}', function ($id) {
    $student=Student::find($id);
    return view('student.show',['student'=>$student]);
  });



Route::get('/grades', function () {
  $grades = Grade::all();
  return view('grades.index', compact('grades'));
});

Route::get('/grade/{id}', function ($id) {
  $grades=Grade::find($id);
  $students=Grade::find($id)->students;
  return view('grades.show',compact('grades','students',));
});



Route::get('/subjects', function () {
  $subjects=Subject::all();
  return view ('subject.index', compact('subjects'));
});

Route::get('/subject/{id}', function ($id) {
  $subject = Subject::find($id);
  $students =Subject::find($id)->students;
  return view('subject.show', compact('subject', 'students'));
});
