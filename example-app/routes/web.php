<?php

use Illuminate\Support\Facades\Route;
// use App\Models\Student;
// use App\Models\Grade;
// use App\Models\Subject;
// use App\Http\Controllers\StudentController;
// use App\Http\Controllers\SubjectController;
// use App\Http\Controllers\GradeController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/{page?}',function ($page='index'){
    return view('pages.' .$page);
});

// // Route::get('students',[StudentController::class, 'index']);
// Route::resource('students', StudentController::class);  

// Route::resource('subjects', SubjectController::class);  
// Route::resource('grades', GradeController::class);  

















//  Route::get('/students', function () {
//     $students=Student::all();
//     return view ('student.index', compact('students'));
//  });

//   Route::get('/student/{id}', function ($id) {
//     $student=Student::find($id);
//     return view('student.show',['student'=>$student]);
//   });



// Route::get('/grades', function () {
//   $grades = Grade::all();
//   return view('grades.index', compact('grades'));
// });

// Route::get('/grade/{id}', function ($id) {
//   $grades=Grade::find($id);
//   $students=Grade::find($id)->students;
//   return view('grades.show',compact('grades','students',));
// });



// Route::get('/subjects', function () {
//   $subjects=Subject::all();
//   return view ('subject.index', compact('subjects'));
// });

// Route::get('/subject/{id}', function ($id) {
//   $subject = Subject::find($id);
//   $students =Subject::find($id)->students;
//   return view('subject.show', compact('subject', 'students'));
// });
