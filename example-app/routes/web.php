<?php

use Illuminate\Support\Facades\Route;
use App\Models\Student;
use App\Models\Grade;

Route::get('/', function () {
    return view('welcome');
});
Route::get('/students', function () {

    $students=Student::all();
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
  return view('grades.show',compact('grades','students'));
});